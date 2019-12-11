<?php

namespace App\Http\Controllers\Admin\Utils;

use App\Http\Controllers\Controller;
use App\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Pagination\Paginator;
use Aris\LaravelLocalization\Facades\LaravelLocalization;
use Validator;
use Carbon\Carbon;
use phpseclib\Crypt\RSA;
use Hash;

class AjaxController extends Controller
{
    protected $instance;

    public function __construct()
    {
        $this->instance = $this->instance(\App\Http\Helper\Admin\Utils\Helper::class);
    }

    public function admin_change_password(Request $request)
    {
        $rules = array(
            'oldpass' => 'required|min:1|max:128',
            'newpass' => 'required|min:1|max:128|confirmed'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $this->JsonExport(403, __('app.error_403'));
        } else {
            try {
                DB::beginTransaction();
                $user = Model\MUser::find(Auth::user()->id);
                if(!$user) {
                    DB::rollback();
                    return $this->JsonExport(403, __('app.error_403'));
                }
                if (!Hash::check($request->oldpass, $user->password)) {
                    DB::rollback();
                    return $this->JsonExport(403, __('app.wrong_password'));
                }

                $user->update([
                    'password' => Hash::make($request->newpass),
                    'last_update_password' => Carbon::now()->format('Y-m-d H:i:s.v'),
                    "updated_at" => Carbon::now()->format('Y-m-d H:i:s.v'),
                ]);

                if (!$user) {
                    DB::rollback();
                    return $this->JsonExport(403, __('app.update_fail'));
                } 
                
               DB::commit();
               return $this->JsonExport(200, __('app.success'));

            } catch (\Exception $e) {
                return $this->JsonExport(500, __('app.error_500'));
            }
        }
    }

    public function admin_login_ajax(Request $request)
    {
        $rules = array(
            'username' => 'required|min:3|max:16',
            'password' => 'required|min:6|max:32',
        );
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return $this->JsonExport(403, __('app.error_403'));
        } else {
            try {

                $credentials = [
                    'username' => $request->username,
                    'password' => $request->password,
                    'status' => 1
                ];

                if (\Auth::attempt($credentials)) {
                    return $this->JsonExport(200, __('app.login_success'));
                } else {
                    return $this->JsonExport(403, __('app.wrong_password'));
                }

            } catch (\Exception $e) {
                return $this->JsonExport(500, __('app.error_500'));
            }
        }
    }

    public function admin_logout_ajax(Request $request)
    {
        try {
            if (Auth::user()) {
                Auth::logout();
            }
            session()->flush();
            return redirect()->route('admin.page.login');
        } catch (\Exception $e) {
            return redirect()->route('admin.page.login');
        }
    }

    public function admin_utils_get(Request $request)
    {
        try {
            $apiInstance = $this->instance(\App\Http\Helper\Api\Utils\Helper::class);
            $data = $apiInstance->getInit($request);
            if ($data === null) {
                return $this->JsonExport(201, __('app.no_data'));
            } else {
                return $this->JsonExport(200, __('app.success'), $data);
            }
        } catch (\Exception $e) {
            return $this->JsonExport(500, __('app.error_500'));
        }
    }

    public function admin_utils_get_location(Request $request)
    {
        try {
            $data = $this->instance->getLocation($request);
            if ($data === null) {
                return $this->JsonExport(201, __('app.no_data'));
            } else {
                return $this->JsonExport(200, __('app.success'), $data);
            }
        } catch (\Exception $e) {
            return $this->JsonExport(500, __('app.error_500'));
        }
    }

    public function admin_get_order(Request $request)
    {
        try {
            $instance = self::instance(\App\Http\Helper\Admin\OrderHelper::class);
            if ($request->has('id') && !empty($request->id)) {
                return $data = $instance->getOrder($request->id);
            }
            return $data = $instance->getDTOrder($request);
        } catch (\Exception $e) {
            return $this->JsonExport(500, __('app.error_500'));
        }
    }
}

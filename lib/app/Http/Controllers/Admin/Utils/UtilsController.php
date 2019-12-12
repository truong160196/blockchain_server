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
use Hash;

class UtilsController extends Controller
{
    protected $instance;

    public function __construct()
    {
        $this->instance = $this->instance(\App\Http\Helper\Utils\Helper::class);
    }

    public function admin_login(Request $request)
    {
        try {
//            $user = auth()->user();

//            dd($user->role->name);
            if (Auth::check()) {
                return redirect()->route('admin.page.dashboard');
            } else {
                return view('web.page.login.index');
            }
        } catch (\Exception $e) {
            return redirect()->route('admin.page.login');
        }
    }

    public function admin_forgot(Request $request)
    {
        try {
            if (Auth::check()) {
                return redirect()->route(app('setting_main')->default_page);
            } else {
                return view('theme.web.page.login.forgot');
            }
        } catch (\Exception $e) {
            return redirect()->route('admin.page.login');
        }
    }

    public function admin_post_forgot(Request $request)
    {
        $rules = array(
            'phone' => 'required|min:9|max:12|phonevn',
            'otp' => 'required|max:20',
            'password' => 'required|max:200|confirmed'
        );
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return $this->JsonExport(403, $validator->errors()->first());
        } else {
            try {
                if(config('constant.otp') === false) {
                    return $this->JsonExport(403, 'Sorry, we are doing some maintenance. Please check back soon.');
                }
                DB::beginTransaction();
                $user = Model\MUser::where('phone', $request->phone)->first();
                if(!$user){
                    DB::rollback();
                    return $this->JsonExport(403, __('app.update_fail'));
                }
               
                if($user->status == 0) {
                    DB::rollback();
                    return $this->JsonExport(403, __('app.error_403'));
                }

                if($user->otp != $request->otp) {
                    DB::rollback();
                    return $this->JsonExport(403, 'Wrong OTP');
                }

                if(Carbon::parse($user->otp_expired)->diffInMinutes(Carbon::now()) > 5) {
                    DB::rollback();
                    return $this->JsonExport(403, 'Wrong time OTP');
                }

                $user->update([
                    "otp" => null,
                    "otp_expired" => null,
                    "password" => Hash::make($request->password),
                    'last_update_password' => Carbon::now()->format('Y-m-d H:i:s.v'),
                    "updated_at" => Carbon::now()->format('Y-m-d H:i:s.v'),
                ]);

                if($user){
                    DB::commit();
                    return $this->JsonExport(200, __('app.success'));
                } else {
                    DB::rollback();
                    return $this->JsonExport(403, __('app.error_403'));
                }
                
            } catch (\Exception $e) {
                DB::rollback();
                return $this->JsonExport(500, __('app.error_500'));
            }
        }
    }

}
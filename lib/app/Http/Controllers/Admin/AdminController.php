<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Pagination\Paginator;
use Aris\LaravelLocalization\Facades\LaravelLocalization;
use Validator;
use Carbon\Carbon;
use GrahamCampbell\Throttle\Facades\Throttle;

class AdminController extends Controller
{
    protected $instance;
    protected $lang;

    public function __construct()
    {
        $this->instance = $this->instance(\App\Http\Helper\Admin\Helper::class);
    }

    public function admin_login(Request $request)
    {
        try {
            if (Auth::check()) {
                return redirect()->route(app('setting_main')->default_page);
            } else {
                return view('web.page.login.index');
            }
        } catch (\Exception $e) {
            return redirect()->route('admin.page.login');
        }
    }
}
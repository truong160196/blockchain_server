<?php

namespace App\Http\Helper\Admin;

use Illuminate\Foundation\Bus\DispatchesJobs;
use App\Http\Controllers\Controller as Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Auth;

class HelperBase extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {

    }

    static public function getUID()
    {
        try {
            if (\Request::is('api/*') || \Request::is('*/webview/*')) {
                $user = auth('api')->user()->id;
            } else {
                $user = Auth::user()->id;
            }
            return $user;
        } catch(\Exception $e) {
            return null;
        }
    }
}

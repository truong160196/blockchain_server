<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class AccountController extends Controller
{
     public function index()
    {
        return view('page.user.account.index');
    }
}

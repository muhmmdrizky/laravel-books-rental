<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('pages/users/users');
    }
    public function profile()
    {
        return view('pages/users/profile');
    }
}

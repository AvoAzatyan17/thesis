<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    public function index(): view
    {
        $users = User::orderBy('id','DESC')->get();
        return view('/user/index',compact('users'));
    }
}

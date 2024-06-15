<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()       
    {
        $users = User::query()->latest()->get();

        return view('users.index', compact('users'));
    }

    //public function create()
    //{
    //   return view('users.create');
    //}
}

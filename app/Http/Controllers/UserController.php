<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()       
    {
        $users = User::query()->latest()->get();

        return view('users.index', compact('users'));
    }

//    public function create()
//    {
//               $roles = Role::all();
//
//               return view('users.create', compact('roles'));
//    }
//
//    public function store(Request $request)
//    {
//        
//        $validatedData = $request->validate([
//            'name' => 'required|string|max:255',
//            'email' => 'required|string|email|max:255|unique:users',
//            'password' => 'required|string|min:8|confirmed',
//            'role_id' => 'required|integer|exists:roles,id', 
//        ]);
//
//        
//        $user = User::create([
//            'name' => $validatedData['name'],
//            'email' => $validatedData['email'],
//            'password' => Hash::make($validatedData['password']),
//            'role_id' => $validatedData['role_id'],
//        ]);
//
//        return redirect()->route('user.index')->with('success', 'User created successfully.');
//    }

    
}

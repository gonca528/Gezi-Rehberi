<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required|max:255',
            'username' => 'required|max:255|min:3',
            'email' => 'required|email:255|max:255',
            'password' => 'required|max:255|min:7'
        ]);
        
        $user = User::create($attributes);
        auth()->login($user);
        return redirect('/');
    }
}

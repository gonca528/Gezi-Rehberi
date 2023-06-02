<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Validation\ValidationException as ValidationValidationException;
class SessionsController extends Controller
{
 
   public function create()
   {
          return view('logins.create');
   }
   public function store(Request $request){
    $attributes=request()->validate([
        'email'=>'required|email',
        'password'=>'required'
    ]);
    if(auth()->attempt($attributes)){
        $request->session()->regenerate();
 
        return redirect('/');
    }

    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->onlyInput('email');
 }

     public function destroy()
   {

      auth()->logout();
      return redirect('/');
   }
}


    
 
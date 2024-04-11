<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class SessionsController extends Controller
{
    


    public function create() 
    {

        return view('sessions.create');

    }

    public function store()

    {

       $attributes = request()->validate([
        'email' => 'required|email',
        'password' => 'required'
       ]);
        //an attempt to authenticate and log in user
        // based on privided credentials
       if (auth()->attempt($attributes)) {
  
        //if authentication failed
        throw ValidationException::withMessages([
            'email' => 'Your provided credentials could not be verified'
        ]);

       }

         session()->regenerate();
         //redirect with a success flash message
        return redirect('/')->with('success', 'Welcome Back!');
  
       

    }


    public function destroy()
    {
        auth()->logout();

        return redirect('/')->with('success', 'Goodbye');
    }
}

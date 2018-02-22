<?php

namespace App\Http\Controllers;

use App\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration/create');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required', 
            'email' =>  'required|email',
            'password' => 'required|confirmed' // confirmed makes sure password field is the same as password_confirmation field.
        ]);

        $user = User::create(request(['name', 'email', 'password']));

        auth()->login($user);

        return redirect()->home();
    } 
}

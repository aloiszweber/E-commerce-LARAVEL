<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
 /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createaccount()
    {

        return view('createaccount');

        request()->validate([

            'firstname' => ['required'],
            'lastname' => ['required'],
            'password' => ['required', 'min:8'],
            'mail' => ['required', 'email', 'unique:users'],
    
            ]);

            User::create([
                'firstname' => $request->firstname,
                'lastname'=> $request->lastname,
                'password' => $request->password,
                'mail' => $request->mail,
                
            ]);
     
            return redirect()->route('welcome');

    }
}

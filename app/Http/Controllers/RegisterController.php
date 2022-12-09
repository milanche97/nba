<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create () {

        return view('register.create');

    }

    // public function store (Request $request) {

    //     $request->validate(
    //         [
    //             'name' => 'required | min:6',
    //             'email' => 'required | email',
    //             'password' => 'required | confirmed:password_confirmation | min:6'
    //         ]
    //     );

    //     $user = User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => bcrypt($request->password),
    //         'is_verified' => false,
    //     ]);


    //     return redirect('/teams');
    // }

public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = User::create(request(['name', 'email', 'password']));

        auth()->login($user);

        return redirect()->to('/teams');
    }
}





<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct() {
        $this->middleware('guest', [ 'except' => 'destroy' ]);
    }


    public function create(){
        return view('login.create');
    }

    public function store(){
        if (!auth()->attempt(request(['email', 'password']))) {
            return back()->withErrors(['message' => 'Bad credentials, please try again']);
        }else{
            if (auth()->user()->is_verified) {
                return redirect('/teams');
            }else {
                $this->destroy();
                return back()->withErrors(['message' => 'You are not verified, please chech your mailbox']);
            }
        }
    }
    public function verification ($id) {
        $user = User::find($id);
        $user->is_verified = true;
        $user->save();
        return view('login.verification', compact('user'));
    }

    public function destroy () {
        auth()->logout();
        return redirect('/teams');

    }

}

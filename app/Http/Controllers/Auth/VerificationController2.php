<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;

class VerificationController2 extends Controller
{
    public function verify($token)
    {
        $user = User::where('remember_token', $token)->first();
        if (!is_null($user)) {
            $user->status = 1;
            $user->remember_token = null;
            $user->save();
            session()->flash('success', 'You are registered successfully!! Login Now');
            return redirect('login');
        } else {
            session()->flash('errors', 'Sorry token does not match');
            return redirect('/');

        }
    }
}
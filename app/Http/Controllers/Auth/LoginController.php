<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Notifications\VerifyRegistration;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
     */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
        $user = User::where('email', $request->email)->first();

        if (!is_null($user)) {
            if ($user->status == 1) {
                if (Auth::guard('web')->attempt(['email' => $request->email,
                    'password' => $request->password])) {
                    return redirect()->intended(route('index'));
                } else {
                    session()->flash('failed', 'Wrong password!, try again!');
                    return redirect()->route('login');
                }
            } else {
                session()->flash('failed', 'Confirm your email first! We have sent you an email for confirmation again!');
                $user->notify(new VerifyRegistration($user));

                return redirect()->route('login');
            }

        } else {
            session()->flash('failed', 'Please Register First!!');

            return redirect()->route('login');

        }

    }
}
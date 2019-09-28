<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

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
    protected $redirectTo = '/blood-donation';
    public function username()
    {
        return 'cell';
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('cell', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return view('blood-service.blood-donation')->with('success','You are successfully logged in');
        }
        else
        {
            return redirect()->back()->with('error','Invalid credentials!');
        }
    }
    /*public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    } */
}

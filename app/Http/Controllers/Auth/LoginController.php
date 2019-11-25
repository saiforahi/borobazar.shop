<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

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
    public function username(){
        return 'cell';
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('guest')->except('logout');
    }

    
    /*public function logout(Request $request) {
        Auth::logout();
        return redirect('/login');
    }
    public function authenticate(Request $request){
        $credentials = $request->only('cell', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('/');
        }
        else
        {
            return redirect()->back();
        }
    }*/

    /*public function login(Request $request){
        $http = new GuzzleHttp\Client;

        try {
            $response = $http->post('http://127.0.0.1:8000/oauth/token', [
                'form_params' => [
                    'grant_type' => 'password',
                    'client_id' => 5,
                    'client_secret' => 'Fv9QK4hQT6CA5XRaLv5Nq3cJjdaklJPEiFCAjBad',
                    'username' => $request->cell,
                    'password' => $request->password,
                    'scope' => ''
                ]
            ]);
            return $response->getBody();
        } catch (GuzzleException $e) {
            if ($e->getCode() === 400) {
                return response()->json('Invalid Request. Please enter a username or a password.', $e->getCode());
            } else if ($e->getCode() === 401) {
                return response()->json('Your credentials are incorrect. Please try again', $e->getCode());
            }
            return response()->json('Something went wrong on the server.', $e->getCode());
        }
    }
    */
    public function login(Request $request){
        $credentials = $request->only('cell', 'password');

        if (!Auth::attempt($credentials)) {
            return back()->withErrors(['error'=>'অনুগ্রহ করে সঠিক তথ্য দিন']);
        }
        // Authentication passed...
        $new_token = Hash::make(Str::random(80));
        Auth::user()->forceFill([
            'api_token' => $new_token,
        ])->save();
        return redirect()->intended('/');
    } 
}

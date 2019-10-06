<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'], #'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'cell' => ['required', 'string', 'max:11', 'unique:users'],
            'blood_group' =>['required','string'],
            'district' => ['required','string'],
            'last_donation_date'=>['required','string'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'cell'=> $data['cell'],
            'blood_group' => $data['bloodGroup'],
            'district' => $data['presentDistrict'],
            'blood_organization' =>$data['organizationName'],
            'last_donation_date' => $data['lastDonationDate'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function register(Request $request)
   {
        $messages = [
            'name.required' => 'We need to know your name',
            'cell.unique' => 'This phone number is already registered!',
            'confirmed' => ':attribute does not match',
            'lastDonationDate.before' => 'wrong date input'
        ];

        $rules=[
            'name' => 'required|string|max:255',
            'cell' => 'required|string|max:11|unique:users',
            'bloodGroup' =>'required|string',
            'presentDistrict' => 'required|string',
            'lastDonationDate'=>'required|date|before:tomorrow',
            'password' =>'required|string|min:8|confirmed'
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
        if ($validator->fails())  {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        else{
            $user = $this->create($request->all());
            Auth::login($user); 
            return redirect('/')->with(['message'=>'Account Successfully Created.']);
        }
   }
}

<?php

namespace App\Http\Controllers\Auth;

use App\BloodRequest;
use App\Donar;
use App\Http\Controllers\Controller;
use App\Notifications\BloodRequestNotification;
use App\User;
use App\UserDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

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
            'district_id' => ['required','string'],
            'last_donation_date'=>'required|date|before:today',
            'password' => 'required|string|min:8|confirmed'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    

    protected function create_user(array $data)
    {
        return User::create([
            'name' => ucfirst(trans($data['name'])),
            'cell'=> $data['cell'],
            'password' => Hash::make($data['password']),
            'api_token' => Str::random(80)
        ]);
    }

    

    protected function create_user_details(array $data,$id)
    {
        return UserDetails::create([
            'user_id'=> $id,
            'first_name' => ucfirst(trans($data['name'])),
            'district_id' => $data['presentDistrict']
        ]);
    }

    protected function create_donar(array $data,$id)
    {
        return Donar::create([
            'donar_id'=> $id,
            'blood_group' => $data['bloodGroup'],
            'district_id' => $data['presentDistrict'],
            'blood_organization' =>$data['organizationName'],
            'last_donation_date' => $data['lastDonationDate']
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
            $user = $this->create_user($request->only('name','cell','password'));
            $user_details=$this->create_user_details($request->only('name','cell','bloodGroup','presentDistrict'),$user->id);
            $donar=$this->create_donar($request->only('bloodGroup','presentDistrict','lastDonationDate','organizationName'),$user->id);
            Auth::login($user);
            $previousRequests=BloodRequest::where('blood_group',$donar->blood_group)->get();
            
            foreach ($previousRequests as $previousRequest){
                Auth::user()->notify(new BloodRequestNotification($previousRequest));
            }
            return redirect('/')->with(['AccountCreatedMessage'=>' বড়বাজারে সংযুক্ত হওয়ার জন্য আপনাকে ধন্যবাদ']);
        }
   }
}

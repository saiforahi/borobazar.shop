<?php

namespace App\Http\Controllers\Auth;

use App\BloodRequest;
use App\Donar;
use App\PresentAddress;
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
    

    protected function create_user_with_email(array $data)
    {
        return User::create([
            'name' => ucfirst(trans($data['firstName'])),
            'username'=> $data['username'],
            'email' => $data['username'],
            'password' => Hash::make($data['password']),
            'api_token' => Str::random(80)
        ]);
    }
    
    protected function create_user_with_cell(array $data)
    {
        return User::create([
            'name' => ucfirst(trans($data['firstName'])),
            'username' => $data['username'],
            'cell'=> $data['username'],
            'password' => Hash::make($data['password']),
            'api_token' => Str::random(80)
        ]);
    }
    

    protected function create_user_details(array $data,$id)
    {
        if($data['lastName']!=null && $data['lastName']!=''){
            UserDetails::create([
                'user_id'=> $id,
                'first_name' => ucfirst(trans($data['firstName'])),
                'last_name' => ucfirst(trans($data['lastName']))
            ]);
        }
        else{
            UserDetails::create([
                'user_id'=> $id,
                'first_name' => ucfirst(trans($data['firstName']))
            ]);
        }

        UserDetails::where('user_id',$id)->first()->forceFill([
            'present_address->district'=>$data['presentDistrict']
        ])->save();
    }

    protected function create_donar(array $data,$id)
    {
        return Donar::create([
            'donar_id'=> $id,
            'blood_group' => $data['bloodGroup'],
            'blood_organization' =>$data['organizationName'],
            'last_donation_date' => $data['lastDonationDate']
        ]);
    }

    protected function create_present_address(array $data,$id)
    {
        return PresentAddress::create([
            'user_id'=> $id,
            'district' => $data['presentDistrict'],
        ]);
    }


    public function check_username(array $data){
        $rules = [
            'username'=>'email'
           ];
        return Validator::make($data,$rules);
    }

    public function register(Request $request){
        $wantsToBeDonar=$request->blood_registration;
        $username='email';
        $emailOrNot=$this->check_username($request->all());
        if($emailOrNot->fails()){
            $username='cell';
        }
        if($username=='cell' && $wantsToBeDonar==true){     //donar with cell as username
            $messages=[
                'firstName.required' => 'We need to know your name',
                'username.unique' => 'This phone number is already registered!',
                'confirmed' => ':attribute does not match',
                'lastDonationDate.before' => 'choose correct date'
            ];
            $rules=[
                'firstName' => 'required|string|max:255',
                'lastName' => 'sometimes|nullable|string|max:255',
                'username' => 'required|max:11|unique:users,cell,username',
                'presentDistrict' => 'required',
                'bloodGroup' => 'required',
                'lastDonationDate'=>'required|date|before:tomorrow',
                'password' =>'required|string|min:8|confirmed'
            ];
    
            $validator = Validator::make($request->all(),$rules,$messages);
            if($validator->fails()){
                session(['wantsToBeDonar'=>true]);
                return redirect()->back()->withInput($request->input())->withErrors($validator);
            }
            $user=$this->create_user_with_cell($request->only('firstName','username','password'));
            $user_details=$this->create_user_details($request->only('firstName','lastName','presentDistrict'),$user->id);
            $presentAddress=$this->create_present_address($request->only('presentDistrict'),$user->id);
            $donar=$this->create_donar($request->only('bloodGroup','presentDistrict','lastDonationDate','organizationName'),$user->id);
            Auth::login($user);
            $previousRequests=BloodRequest::where('blood_group',$donar->blood_group)->get();
            
            foreach ($previousRequests as $previousRequest){
                Auth::user()->notify(new BloodRequestNotification($previousRequest));
            }
            return redirect('/dashboard')->with(['AccountCreatedMessage'=>' বড়বাজারে সংযুক্ত হওয়ার জন্য আপনাকে ধন্যবাদ']);
        }
        else if($username=='cell' && $wantsToBeDonar==false){   //only user with cell as username
            $messages=[
                'firstName.required' => 'We need to know your name',
                'username.unique' => 'This phone number is already registered!',
                'confirmed' => ':attribute does not match',
                
            ];
            $rules=[
                'firstName' => 'required|string|max:255',
                'lastName' => 'sometimes|nullable|string|max:255',
                'username' => 'required|max:11|unique:users,cell,username',
                'presentDistrict' => 'required|string',
                'password' =>'required|string|min:8|confirmed'
            ];
    
            $validator = Validator::make($request->all(),$rules,$messages);
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $user=$this->create_user_with_cell($request->only('firstName','username','password'));
            $user_details=$this->create_user_details($request->only('firstName','lastName','presentDistrict'),$user->id);
            $presentAddress=$this->create_present_address($request->only('presentDistrict'),$user->id);
            Auth::login($user);
            return redirect('/dashboard')->with(['AccountCreatedMessage'=>' বড়বাজারে সংযুক্ত হওয়ার জন্য আপনাকে ধন্যবাদ']);
        }
        else if($username=='email' && $wantsToBeDonar==true){    //donar with email as username
            $messages=[
                'firstName.required' => 'We need to know your name',
                'username.unique' => 'This email is already registered!',
                'confirmed' => ':attribute does not match',
                'lastDonationDate.before' => 'choose correct date'
            ];
            $rules=[
                'firstName' => 'required|string|max:255',
                'lastName' => 'sometimes|nullable|string|max:255',
                'username' => 'required|email|unique:users,email,username',
                'presentDistrict' => 'required|string',
                'bloodGroup' => 'required|string',
                'lastDonationDate'=>'required|date|before:tomorrow',
                'password' =>'required|string|min:8|confirmed'
            ];
    
            $validator = Validator::make($request->all(),$rules,$messages);
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $user=$this->create_user_with_email($request->only('firstName','username','password'));
            $user_details=$this->create_user_details($request->only('firstName','lastName','presentDistrict'),$user->id);
            $presentAddress=$this->create_present_address($request->only('presentDistrict'),$user->id);
            $donar=$this->create_donar($request->only('bloodGroup','presentDistrict','lastDonationDate','organizationName'),$user->id);
            Auth::login($user);
            $previousRequests=BloodRequest::where('blood_group',$donar->blood_group)->get();
            
            foreach ($previousRequests as $previousRequest){
                Auth::user()->notify(new BloodRequestNotification($previousRequest));
            }
            return redirect('/dashboard')->with(['AccountCreatedMessage'=>' বড়বাজারে সংযুক্ত হওয়ার জন্য আপনাকে ধন্যবাদ']);
        }
        else if($username=='email' && $wantsToBeDonar==false){  //only user with email as username
            $messages=[
                'firstName.required' => 'We need to know your name',
                'username.unique' => 'This email is already registered!',
                'confirmed' => ':attribute does not match',
            ];
            $rules=[
                'firstName' => 'required|string|max:255',
                'lastName' => 'sometimes|nullable|string|max:255',
                'username' => 'required|email|unique:users,email,username',
                'presentDistrict' => 'required|string',
                'password' =>'required|string|min:8|confirmed'
            ];
    
            $validator = Validator::make($request->all(),$rules,$messages);
            if($validator->fails()){
                return redirect()->back()->withErrors($validator)->withInput();
            }
            $user=$this->create_user_with_email($request->only('firstName','username','password'));
            $user_details=$this->create_user_details($request->only('firstName','lastName','presentDistrict'),$user->id);
            $presentAddress=$this->create_present_address($request->only('presentDistrict'),$user->id);
            Auth::login($user);
            return redirect('/dashboard')->with(['AccountCreatedMessage'=>' বড়বাজারে সংযুক্ত হওয়ার জন্য আপনাকে ধন্যবাদ']);
        }
        
    }
    /*public function blood_registration(Request $request){
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
    }*/
}

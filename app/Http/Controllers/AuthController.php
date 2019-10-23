<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Auth;

class AuthController extends Controller
{
    public $successStatus = 200;
    /** 
     * login api 
     * 
     * @return \Illuminate\Http\Response 
     */ 
    public function login(){ 
        if(Auth::attempt(['cell' => request('cell'), 'password' => request('password')])){ 
            $user = Auth::user();
            $success['token'] =  $user->createToken('accessToken')-> accessToken; 
            $success['name'] =  $user->name;
            #dd($success['token']);
            return redirect('/')->with(['success'=>$success], $this-> successStatus);
        } 
        else{ 
            return redirect()->back()->with(['error'=>'অনুগ্রহ করে সঠিক তথ্য দিন']);
        } 
    }
    //
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'], #'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'cell' => ['required', 'string', 'max:11', 'unique:users'],
            'blood_group' =>['required','string'],
            'district' => ['required','string'],
            'last_donation_date'=>'required|date|before:today',
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);
    }

    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'cell'=> $data['cell'],
            'blood_group' => $data['bloodGroup'],
            'district' => $data['presentDistrict'],
            'blood_organization' =>$data['organizationName'] ?? '',
            'last_donation_date' => $data['lastDonationDate'],
            'password' => Hash::make($data['password'])
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
            'lastDonationDate'=>'required|date|before:today',
            'password' =>'required|string|min:8|confirmed'
        ];
        $validator = Validator::make($request->all(),$rules,$messages);
        if ($validator->fails()) { 
            return redirect()->back()->withErrors($validator)->withInput();
            #return response()->json(['error'=>$validator->errors()], 401);            
        }
         
        $user = $this->create($request->all()); 
        $success['token'] =  $user->createToken('accessToken')-> accessToken; 
        $success['name'] =  $user->name;
        Auth::login($user);
        return view('blood-service.blood-donation')->with('success',$success);
        #return response()->json(['success'=>$success], $this-> successStatus); 
    }

    public function details() 
    { 
        $user = Auth::user(); 
        return response()->json(['success' => $user], $this-> successStatus); 
    } 
}

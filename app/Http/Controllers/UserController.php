<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserDetails;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    protected function validator(array $data)
    {
        $messages = [
            'first_name.required' => 'We need to know your name',
            'primary_cell.required' => 'We need to know your contact number',
        ];
        return Validator::make($data, [
            'first_name' => 'required|string|max:255', #'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'last_name' => 'sometimes|nullable|string|max:255',
            'father_name' =>'sometimes|nullable|string|max:255',
            'mother_name' => 'sometimes|nullable|string|max:255',
            'new_birth_date' => 'sometimes|nullable|date|before:today',
            'religion' => 'sometimes|nullable|string|max:20',
            'sex' => 'sometimes|nullable|string',
            'marital_status' => 'sometimes|nullable|string',
            'nationality' => 'sometimes|nullable|string',
            'NID' => 'sometimes|nullable|string|max:19',
            'passport' => 'sometimes|nullable|string',
            'passport_issue_date' => 'sometimes|nullable|date|before:today',
            'primary_cell' => 'required|string|max:11',
            'cell2' => 'sometimes|nullable|string|max:11',
            'cell3' => 'sometimes|nullable|string|max:11',
            'primary_email' => 'sometimes|nullable|string|email',
            'secondary_email' => 'sometimes|nullable|string|email'
        ],$messages);
    }

    public function update_user_details(Request $request){
        $validate=$this->validator($request->all());
        if($validate->fails()){
            return response()->json(['errors'=>$validate->errors(),404]);
        }
        
        $user_details=UserDetails::where('user_id',Auth::user()->id)->first();
        $user_details->first_name=$request->input('first_name');
        $user_details->last_name=$request->input('last_name');
        $user_details->father_name=$request->input('father_name');
        $user_details->mother_name=$request->input('mother_name');
        $user_details->birth_date=$request->input('new_birth_date');
        $user_details->religion=$request->input('religion');
        $user_details->sex=$request->input('sex');
        $user_details->marital_status=$request->input('marital_status');
        $user_details->nationality=$request->input('nationality');
        $user_details->NID=$request->input('NID');
        $user_details->passport_no=$request->input('passport');
        $user_details->passport_issue_date= $request->input('passport_issue_date');
        $user_details->secondary_email=$request->secondary_email;
        $user_details->save();
        $user_details=UserDetails::where('user_id',Auth::user()->id)->first();
        $user_details->forceFill([
            'secondary_cells->secondary_1'=>$request->cell2,
            'secondary_cells->secondary_2'=>$request->cell3,
        ])->save();
        User::where('id',Auth::user()->id)->first()->forceFill([
            'name' => $request->input('first_name'),
            ])->save();
        return response()->json(['user_details'=>$user_details,'primary_cell'=>Auth::user()->cell]);
    }

    public function show_user_details(){
        $data=UserDetails::join('users','users.id','=','user_details.user_id')->where('user_id',Auth::user()->id)->select('user_details.first_name','user_details.last_name','user_details.father_name','user_details.mother_name','user_details.birth_date','user_details.religion','user_details.sex','user_details.marital_status','user_details.nationality','user_details.NID','user_details.passport_no','user_details.passport_issue_date','user_details.secondary_email','user_details.secondary_cells','users.cell as primary_cell','users.email as primary_email')->first();
        //$data->birth_date=date('Y-m-d',strtotime($data->birth_date));
        
        return response()->json(['data'=>$data]);
    }
}

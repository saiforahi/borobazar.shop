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
    protected function update_secondary_cells(Request $data){
        $secondary_cells=SecondaryCell::where('user_id',Auth::user()->id)->get();
        if(sizeof($secondary_cells)<=0){
            $new_cell1=new SecondaryCell;
            $new_cell1->user_id=Auth::user()->id;
            $new_cell1->secondary_cell=$data->cell1;
            $new_cell1->save();
            dd($new_cell1->secondary_cell);
        }
        elseif(sizeof($secondary_cells)==1){
            SecondaryCell::where('secondary_cell',$secondary_cells[0]->secondary_cell)->where('user_id',Auth::user()->id)->first()->forceFill([
                'secondary_cell' =>$data->cell1,
            ])->save();
        }
        elseif(sizeof($secondary_cells)==2){
            SecondaryCell::where('secondary_cell',$secondary_cells[0]->secondary_cell)->where('user_id',Auth::user()->id)->first()->forceFill([
                'secondary_cell' =>$data->cell1,
            ])->save();
        }
    }
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
        /*$user_details->passport_issue_date= $request->input('passport_issue_date');
        $user_details->user->cell=$request->input('cell1');
        $user_details->user->email=$request->input('primary_email');
        
        SecondaryCell::where('primary_cell',Auth::user()->cell)->forceFill([
            'secondary'
        ])->save();*/
        $user_details->save();
        User::where('id',Auth::user()->id)->first()->forceFill([
            'name' => $request->input('first_name'),
            ])->save();
        return $user_details;
    }

    public function show_user_details(){
        $data=UserDetails::join('users','users.id','=','user_details.user_id')->where('user_id',Auth::user()->id)->select('user_details.first_name','user_details.last_name','user_details.father_name','user_details.mother_name','user_details.birth_date','user_details.religion','user_details.sex','user_details.marital_status','user_details.nationality','user_details.NID','user_details.passport_no','user_details.passport_issue_date','user_details.secondary_email','users.cell as primary_cell','users.email as primary_email')->first();
        //$data->birth_date=date('Y-m-d',strtotime($data->birth_date));
        
        return response()->json(['data'=>$data]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserDetails;
use App\District;
use App\SubDistrict;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use DB;
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
            
        ],$messages);
    }

    protected function address_validator(array $data)
    {
        $messages = [
            'first_name.required' => 'We need to know your name',
            'primary_cell.required' => 'We need to know your contact number',
        ];
        return Validator::make($data, [
            'present_holdingOrVillage' => 'sometimes|nullable|string|max:255', #'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'present_country' => 'sometimes|nullable|string|max:255',
            'present_district' => 'sometimes|nullable|string|max:255',
            'present_subdistrict' => 'sometimes|nullable|string|before:today',
            'permanent_holdingOrVillage' => 'sometimes|nullable|string|max:20',
            'permanent_country' => 'sometimes|nullable|string',
            'permanent_district' => 'sometimes|nullable|string',
            'permanent_subdistrict' => 'sometimes|nullable|string',
            
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
        
        $user_details->save();
        $user_details=UserDetails::where('user_id',Auth::user()->id)->first();
        $user_details->forceFill([
            'secondary_cells->telephone'=>$request->cell2,
            'secondary_cells->official'=>$request->cell3,
        ])->save();
        User::where('id',Auth::user()->id)->first()->forceFill([
            'name' => $request->input('first_name'),
            'email'=>$request->primary_email
        ])->save();
        return response()->json(['user_details'=>$user_details,'primary_cell'=>Auth::user()->cell,'primary_email'=>Auth::user()->email]);
    }

    public function show_user_details(){
        $data=UserDetails::join('users','users.id','=','user_details.user_id')->where('user_id',Auth::user()->id)->select('user_details.first_name','user_details.last_name','user_details.father_name','user_details.mother_name','user_details.birth_date','user_details.religion','user_details.sex','user_details.marital_status','user_details.nationality','user_details.NID','user_details.passport_no','user_details.passport_issue_date','user_details.secondary_cells','users.cell as primary_cell','users.email as primary_email')->first();
        //$data->birth_date=date('Y-m-d',strtotime($data->birth_date));
        
        return response()->json(['data'=>$data]);
    }

    public function show_user_address(){
        $user_details=UserDetails::where('user_id',Auth::user()->id)->first();
        $present_address=json_decode($user_details->present_address, true);
        $permanent_address=json_decode($user_details->permanent_address,true);
        $present_districts=District::where('division',$present_address['division'])->get();
        $present_subdistricts=SubDistrict::where('district_id',$present_address['district'])->get();
        $permanent_districts=District::where('division',$permanent_address['division'])->get();
        $permanent_subdistricts=SubDistrict::where('district_id',$permanent_address['district'])->get();
        $sameOrNot;
        if($user_details->present_address==$user_details->permanent_address){
            $sameOrNot=true;
        }
        else{
            $sameOrNot=false;
        }
        return response()->json(['present'=>$user_details->present_address,'permanent'=>$user_details->permanent_address,'present_districts'=>$present_districts,'present_subdistricts'=>$present_subdistricts,'permanent_districts'=>$permanent_districts,'permanent_subdistricts'=>$permanent_subdistricts,'sameOrNot'=>$sameOrNot]);
    }

    public function update_user_address(Request $request){
        $user_details=UserDetails::where('user_id',Auth::user()->id)->first();
        $user_details->forceFill([
            'present_address->holdingOrVillage'=>$request->present_holdingOrVillage,
            'present_address->country' => $request->present_country,
            'present_address->division' => $request->present_division,
            'present_address->district' => $request->present_district,
            'present_address->subdistrict'=> $request->present_subdistrict,
            'present_address->postcode'=>$request->present_postcode,

            'permanent_address->holdingOrVillage'=>$request->permanent_holdingOrVillage,
            'permanent_address->country'=>$request->permanent_country,
            'permanent_address->division'=>$request->permanent_division,
            'permanent_address->district'=>$request->permanent_district,
            'permanent_address->subdistrict'=>$request->permanent_subdistrict,
            'permanent_address->postcode'=>$request->permanent_postcode
        ])->save();
        $present_address=json_decode($user_details->present_address, true);
        $present_districts=District::where('division',$present_address['division'])->get();
        $present_subdistricts=SubDistrict::where('district_id',$present_address['district'])->get();
        return response()->json(['present'=>$user_details->present_address,'permanent'=>$user_details->permanent_address,'present_districts'=>$present_districts,'present_subdistricts'=>$present_subdistricts]);
    }

}

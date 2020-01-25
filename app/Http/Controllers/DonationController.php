<?php

namespace App\Http\Controllers;
use App\District;
use App\SubDistrict;
use Illuminate\Support\Facades\DB;
use App\BloodGroup;

class DonationController extends Controller
{

    public function getdistricts($division)
    {
        $districts=District::where('division',$division)->get(['id','bengali_name']);
        return $districts;
    }

    public function getsubdistricts($district_id)
    {
        #$subdistricts=SubDistrict::where('district_name',$district)->get();
        #$subdistricts=District::find($district_id)->subdistricts()->get()->pluck('bengali_name');
        $subdistricts=SubDistrict::where('district_id',$district_id)->get();
        return $subdistricts;
    }

    public function getDonators( $district,$bloodGroup)
    {
        $lastDonationDate = date('Y-m-d', strtotime('-4 month'));
        $realdonators=DB::table('donars')->where('blood_group', '=', $bloodGroup)   //->where('last_donation_date','<=',$lastDonationDate)
        ->join('users','users.id', '=', 'donars.donar_id')
        ->join('present_addresses','present_addresses.user_id','=','donars.donar_id')
        ->join('districts', 'present_addresses.district', '=', 'districts.id')
        ->join('blood_groups','blood_groups.id','=','donars.blood_group')
        ->join('user_details', 'user_details.user_id', '=', 'users.id')
        ->where('present_addresses.district', '=', $district)->where('users.cell','!=','null')
        ->orderBy('donars.last_donation_date','asc')
        ->select('users.id', 'users.cell','users.name','user_details.first_name','user_details.last_name','blood_groups.bangla as blood_group','present_addresses.district','donars.blood_organization', 'donars.last_donation_date','districts.bengali_name as district_name','user_details.sex as sex',DB::raw("DATE_FORMAT(donars.last_donation_date, '%d/%m/%Y') as last_donation_date"))
        ->paginate(16);
        return $realdonators;
    }

    public function getRandomDonars(){
        $lastDonationDate = date('Y-m-d', strtotime('-4 month'));
        
        $realrandomDonars = DB::table('users')->where('cell','!=','null')
        ->join('donars',function ($join) use($lastDonationDate) {$join->on('users.id', '=', 'donars.donar_id');})
        ->join('present_addresses','present_addresses.user_id','=','users.id')
        ->join('districts', 'present_addresses.district', '=', 'districts.id')
        ->join('user_details', 'user_details.user_id', '=', 'users.id')
        ->join('blood_groups','blood_groups.id','=','donars.blood_group')
        ->orderBy('donars.last_donation_date','asc')
        ->select('users.id','users.cell','users.name','user_details.first_name','user_details.last_name','blood_groups.bangla as blood_group','present_addresses.district','donars.blood_organization', 'donars.last_donation_date','districts.bengali_name as district_name','user_details.sex as sex',DB::raw("DATE_FORMAT(donars.last_donation_date, '%d/%m/%Y') as last_donation_date"))
        ->paginate(16);
        
        return $realrandomDonars;
    }

    public function getBloodGroups(){
        return BloodGroup::all();
    }
}

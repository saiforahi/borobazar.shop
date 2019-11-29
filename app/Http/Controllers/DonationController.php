<?php

namespace App\Http\Controllers;
use App\District;
use DB;

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
        $subdistricts=District::find($district_id)->subdistricts()->get()->pluck('bengali_name');
        return $subdistricts;
    }

    public function getDonators( $district,$bloodGroup)
    {
        $lastDonationDate = date('Y-m-d', strtotime('-3 month'));
        $realdonators=DB::table('donars')->where('blood_group', '=', $bloodGroup)->where('last_donation_date','<=',$lastDonationDate)
                    ->join('users','users.cell', '=', 'donars.donar_cell')
                    ->join('districts', 'donars.district_id', '=', 'districts.id')
                    ->join('blood_groups','blood_groups.id','=','donars.blood_group')
                    ->where('donars.district_id', '=', $district)
                    ->select( 'users.cell','users.name','blood_groups.bangla as blood_group','donars.district_id','donars.blood_organization', 'donars.last_donation_date','districts.bengali_name as district_name',DB::raw("DATE_FORMAT(donars.last_donation_date, '%d-%M-%Y') as last_donation_date"))
                    ->paginate(16);
        return $realdonators;
    }

    public function getRandomDonars(){
        $lastDonationDate = date('Y-m-d', strtotime('-3 month'));
        
        $realrandomDonars = DB::table('users')
        ->join('donars',function ($join) use($lastDonationDate) {$join->on('users.cell', '=', 'donars.donar_cell')->where('donars.last_donation_date','<=',$lastDonationDate);})
        ->join('districts', 'donars.district_id', '=', 'districts.id')
        ->join('blood_groups','blood_groups.id','=','donars.blood_group')
        ->select( 'users.cell','users.name','blood_groups.bangla as blood_group','donars.district_id','donars.blood_organization', 'donars.last_donation_date','districts.bengali_name as district_name',DB::raw("DATE_FORMAT(donars.last_donation_date, '%d-%M-%Y') as last_donation_date"))
        ->paginate(16);
        
        return $realrandomDonars;
    }
}

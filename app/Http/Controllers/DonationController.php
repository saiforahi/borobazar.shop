<?php

namespace App\Http\Controllers;

use App\SubDistrict;
use App\District;
use App\User;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
class DonationController extends Controller
{

    public function getdistricts()
    {
        $districts=District::all();
        return $districts;
    }

    public function getsubdistricts($district)
    {
        #$subdistricts=SubDistrict::where('district_name',$district)->get();
        $subdistricts=District::find($district)->sub_districts;
        return $subdistricts;
    }

    public function getDonators( $district,$bloodGroup)
    {
        $lastDonationDate = date('Y-m-d', strtotime('-3 month'));
        $donators=User::where('district',$district)->where('blood_group',$bloodGroup)->where('last_donation_date','<=',$lastDonationDate)->paginate(8);
        return $donators;
        #$donators=District::find($district)->users->where('last_donation_date','<=',);
    }

    public function getRandomDonars(){
        $lastDonationDate = date('Y-m-d', strtotime('-3 month'));
        $totalUsers=User::all()->count();
        if($totalUsers>=8){
            return User::where('last_donation_date','<=',$lastDonationDate)->get()->random(8);
        }
        return User::where('last_donation_date','<=',$lastDonationDate)->get()->random(4);
    }
}

<?php

namespace App\Http\Controllers;

use App\SubDistrict;
use App\District;
use App\User;
use DB;
use App\UserDetails;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
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
        //$donators=User::where('district_id',$district)->where('blood_group',$bloodGroup)->where('last_donation_date','<=',$lastDonationDate)->paginate(8);

        $donators=DB::table('user_details')
                    ->join('users', function ($join) use($bloodGroup,$district,$lastDonationDate) {$join->on('users.cell', '=', 'user_details.user_cell')->where('user_details.blood_group', '=', $bloodGroup)->where('user_details.district_id', '=', $district)->where('user_details.last_donation_date','<=',$lastDonationDate);})
                    ->join('districts', 'user_details.district_id', '=', 'districts.id')
                    ->select( 'users.cell','users.name','user_details.blood_group','user_details.district_id','user_details.blood_organization','user_details.blood_organization', 'user_details.last_donation_date','districts.bengali_name as district_name',DB::raw("DATE_FORMAT(user_details.last_donation_date, '%d-%M-%Y') as last_donation_date"))
                    ->paginate(8);
        return $donators;
    }

    public function getRandomDonars(){
        $lastDonationDate = date('Y-m-d', strtotime('-3 month'));
        $totalUsers=User::all()->count();
        $randomDonars = DB::table('users')
        ->join('user_details', 'user_details.user_cell', '=', 'users.cell')
        ->join('districts', 'user_details.district_id', '=', 'districts.id')
        ->select( 'users.cell','users.name','user_details.blood_group','user_details.district_id','user_details.blood_organization','user_details.blood_organization', 'user_details.last_donation_date','districts.bengali_name as district_name',DB::raw("DATE_FORMAT(user_details.last_donation_date, '%d-%M-%Y') as last_donation_date"))
        ->get();

        
        return $randomDonars;
        /*if($totalUsers>=8){
            return User::where('last_donation_date','<=',$lastDonationDate)->get()->random(8);
        }
        return User::where('last_donation_date','<=',$lastDonationDate)->get()->random(4);*/
    }
}

<?php

namespace App\Http\Controllers;

use App\SubDistrict;
use App\District;
use Illuminate\Http\Request;
use Auth;
class DonationController extends Controller
{
    public function getDonatorsNdistricts()
    {
        if(Auth::check())
        {
            $donators=User::where('district',auth()->user()->district)->get();
            $subDistricts=SubDistrict::all();
            $data=[
                'donators'=>$donators,
                'subdistricts'=>$subDistricts
            ];
            return $data;
        }
        return 'null';
    }

    public function getdistricts()
    {
        $districts=District::all();
        return $districts;
    }

    public function getsubdistricts($district)
    {
        $subdistricts=SubDistrict::where('district_name',$district)->get();
        return $subdistricts;
    }
}

<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function bloodDonation()
    {
        return view('blood-service.blood-donation');
    }
}

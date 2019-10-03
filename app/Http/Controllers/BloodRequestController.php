<?php

namespace App\Http\Controllers;

use App\BloodRequest;
use Illuminate\Http\Request;

class BloodRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(array $data,$blood_request_id)
    {
        return BloodRequest::create([
            'blood_request_id' => $blood_request_id,
            'name' => $data['name'],
            'relation' => $data['relation'],
            'cell'=> $data['cell'],
            'blood_group' => $data['bloodGroup'],
            'quantity' => $data['quantity'],
            'patient_age' => $data['patientAge'],
            'district' => $data['presentDistrict'],
            'donation_place' => $data['donationPlace'],
            'donation_date' => $data['donationDate'],
            'about_patient' => $data['patientDetails']
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$blood_request_id)
    {
        $newRequest=$this->create($request->all(),$blood_request_id);
        dd($newRequest->about_patient);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

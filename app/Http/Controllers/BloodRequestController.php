<?php

namespace App\Http\Controllers;
use App\BloodRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BloodRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRequests($district,$blood_group,$cell)
    {
        $requests=BloodRequest::where('blood_group',$blood_group)->where('donation_place',$district)->where('cell','!=',$cell)->paginate(6);  //fetching blood requests with same blood group and donation place 
        return $requests;
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
        $message = [
            'name.required' => 'We need to know your name',
            'donationDate.after' => 'Given date is passed!'
        ];

        $rules=[
            'name' => 'required|string|max:255',
            'relation' => 'required|string',
            'cell' => 'required|string|max:11',
            'bloodGroup' =>'required|string',
            'quantity' => 'required|string',
            'patientAge'=> 'required|string',
            'presentDistrict' => 'required|string',
            'donationPlace'=> 'required|string',
            'donationDate'=>'required|date|after:today'
        ];
        $validator = Validator::make($request->all(),$rules,$message);
        if($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }
        else
        {
            $newRequest=$this->create($request->all(),$blood_request_id);
            return redirect('/')->with('success','request successfully submitted');
        }
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

    //
    public function getNotifications($cell){
        $user=User::find($cell);
        $requests=$user->BloodRequest()->get();
        return $requests;
    }
}

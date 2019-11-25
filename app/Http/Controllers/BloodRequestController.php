<?php

namespace App\Http\Controllers;
use App\BloodRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Events\BloodRequestEvent;
use Auth;
class BloodRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRequests($size){   
       $request_list=BloodRequest::where('submitted_by','!=',Auth::user()->cell)->where('blood_group',Auth::user()->donar_details->blood_group)->where('district_id',Auth::user()->donar_details->district_id)
                    ->join('blood_groups','blood_groups.id','=','blood_requests.blood_group')
                    ->join('users','users.cell','=','blood_requests.submitted_by')
                    ->join('districts','blood_requests.district_id','=','districts.id')
                    ->select('blood_requests.blood_request_id','blood_requests.patient_name','users.name as submittedby','blood_requests.relation_with_patient','blood_requests.contact_no','blood_groups.bangla as blood_group','quantity','blood_requests.patient_age','districts.bengali_name as district_name','blood_requests.donation_place','blood_requests.donation_date','blood_requests.about_patient','blood_requests.created_at','blood_requests.updated_at')
                    ->paginate($size);
        return $request_list;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_request(array $data,$blood_request_id)
    {
        return BloodRequest::create([
            'blood_request_id' => $blood_request_id,
            'patient_name' => $data['name'],
            'submitted_by' => Auth::user()->cell,
            'relation_with_patient' => $data['relation'],
            'contact_no'=> $data['cell'],
            'blood_group' => $data['bloodGroup'],
            'quantity' => $data['quantity'],
            'patient_age' => $data['patientAge'],
            'district_id' => $data['presentDistrict'],
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
    public function store(Request $request)
    {
        $letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $numbers = rand(100000, 999999);
        $prefix = "BR";
        $sufix = $letters[rand(0, 25)];
        $blood_request_id = $prefix . $numbers . $sufix;
        while(!Validator::make([$blood_request_id],['blood_request_id'=>'unique:blood_requests,blood_request_id']))
        {
            $letters = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            $numbers = rand(100000, 999999);
            $prefix = "BR";
            $sufix = $letters[rand(0, 25)];
            $blood_request_id = $prefix . $numbers . $sufix;
        }

        $message = [
            'name.required' => 'We need to know your name',
            'donationDate.after_or_equal' => 'সঠিক রক্ত গ্রহণের তারিখ দিন',
            'cell.max'=>'Wrong cell phone number'
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
            'donationDate'=>'required|date|after_or_equal:today'
        ];
        $validator = Validator::make($request->all(),$rules,$message);
        if($validator->fails())
        {
            return back()->withErrors($validator)->withInput();
        }
        else
        {
            $this->create_request($request->all(),$blood_request_id);
            $newRequest=BloodRequest::where('blood_request_id',$blood_request_id)->first();
            $user=User::where('cell',Auth::user()->cell)->first();
            event(new BloodRequestEvent($newRequest,$user));
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
    public function getNotifications($size){
        //$requests=BloodRequest::where('blood_group',$user->blood_group)->where('district_id',$user->district_id)->where('cell','!=',$user->cell)->orderBy('created_at', 'desc')->take($size)->get();
        $notifications=Auth::user()->notifications->take($size);
        $total_unread=Auth::user()->unreadNotifications->count();
        return response()->json(['notifications'=>$notifications,'total_unread'=>$total_unread]) ;
    }

    public function getNewNotification($blood_request_id){
        return Auth::user()->notifications->where('data.blood_request_id',$blood_request_id)->first(); // returning notification
    }

    
}

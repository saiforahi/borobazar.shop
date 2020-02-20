@extends('layouts.blood')
@section('content')
<section class="solid-title-area">
    <div class="container-fluid text-center bg pt-5 pb-5">
        <div class="container">
            <div class="solid-title-inner">
               <h4>আমার অনুরোধের তালিকা</h4>
               <ul>
                   <li><a href="{{ route('home') }}">হোম</li></a>
                   <i class="fs-14 fa fa-angle-right"></i>
                   <li><a href="{{ route('submitted_requests') }}">আমার অনুরোধের তালিকা</li></a>
               </ul>
             </div>
        </div>
    </div>
</section>
<section class="blood-donar-area">
    <div class="container-fluid" id="own-request-list">
        <submitted-blood-requests @blood_request_id="set_selected_request" @click_complete_request="set_responsed_donars" @modal_data="set_donar_modal_data"></submitted-blood-requests>
        <donator-modal :donator="donarModalData" ></donator-modal>
        <complete-request :donars="responsed_donars" :request_id="selected_request"></complete-request>
    </div>
</section>

 
@endsection
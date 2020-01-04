@extends('layouts.app')
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
        <submitted-blood-requests></submitted-blood-requests>
    </div>
</section>

 
@endsection
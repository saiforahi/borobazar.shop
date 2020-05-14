@extends('layouts.tutor')
@section('content')
<section class="solid-title-area">
    <div class="container-fluid text-center bg pt-5 pb-5">
        <div class="container">
            <div class="solid-title-inner">
               <h4>নিবন্ধন</h4>
               <ul>
                   <li><a href="blood-donation.html">হোম</li></a>
                   <i class="fs-14 fa fa-angle-right"></i>
                   <li><a href="blood-registration.html">নিবন্ধন</li></a>
               </ul>
             </div>
        </div>
    </div>
</section>
<div id="tutor_registration">
    <tutor-registration></tutor-registration>
</div>
@endsection
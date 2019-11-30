@extends('layouts.main')
@section('content')
<section class="solid-title-area">
    <div class="container-fluid text-center bg pt-5 pb-5">
        <div class="container">
            <div class="solid-title-inner">
               <h4>পাসওয়ার্ড পরিবর্তন</h4>
               <ul>
                   <li><a href="blood-donation.html">হোম</li></a>
                   <i class="fs-14 fa fa-angle-right"></i>
                   <li><a href="blood-preset.html">পাসওয়ার্ড পরিবর্তন</li></a>
               </ul>
             </div>
        </div>
    </div>
</section> 

<section class="register-area pt-5 pb-5">
    <div class="container-fluid">
        <div class="container">
            <div class="register-inner">
            <form class="track-form row" method="POST" action="{{route('password_reset',$cell)}}">
                @csrf
                   <div class="col-lg-12 form-group">
                       <lebel for="text">নতুন পাসওয়ার্ড</lebel>
                       <input type="password" class="form-control2" placeholder="" id="password" name="password" required>
                       <p><code>(৮ ডিজিটের পাসওয়ার্ড নির্বাচন করুন)</code></p>
                   </div>
                   <div class="col-lg-12 form-group">
                       <lebel for="text">কনফার্ম নতুন পাসওয়ার্ড</lebel>
                       <input type="password" class="form-control2" placeholder="" id="password" name="password_confirmation" required>
                   </div>
                   <div class="col-lg-12 form-group">
                       <button type="submit" class="btn-block btn-getinvite" id="text">পাসওয়ার্ড পরিবর্তন করুন</button>
                   </div>
                </form>
           </div>
        </div>
    </div>
</section>
    
@endsection
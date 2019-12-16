@extends('layouts.app')

@section('content')
<section class="register-area pt-5 pb-5">
    <div class="container-fluid" id="loginRoot">
        <div class="container">
            <div class="register-inner">
               <form class="track-form row" method="POST" action="{{ route('login') }}">
                    @csrf
                    @if ($errors->any())
                        <div class="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                   <div class="col-lg-12 form-group">
                       <label for="cell">মোবাইল*</label>
                       <input type="text" class="form-control2" placeholder="" id="cell" name="cell">
                   </div>
                   <div class="col-lg-12 form-group">
                       <label for="password">পাসওয়ার্ড*</label>
                       <input type="password" class="form-control2" placeholder="" id="password" name="password">
                   </div>
                   <div class="col-lg-12 form-group">
                       <button type="submit" class="btn-block btn-getinvite4" id="text">লগইন করুন</button>
                   </div>
                </form>
                <div class="row text-right">
                   <div class="col-lg-12">
                        <small class="already">আপনি কি নিবন্ধিত না?</small>
                        <span class="login"><a href="{{ route('register') }}" target="_blank">নিবন্ধন করুন</a></span>
                    </div>
                </div>
           </div>
        </div>
    </div>
</section>
@endsection 

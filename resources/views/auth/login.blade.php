@extends('layouts.app')

@section('content')
<section class="register-area pt-5 pb-5">
    <div class="container-fluid">
        <div class="container">
            <div class="register-inner">
               <form class="track-form row" method="POST" action="{{ route('login') }}">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                @csrf
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
                       <a href="{{ route('register') }}" target="_blank"><small class="already">আপনি কি নিবন্ধিত না?</small>
                       <span class="login">নিবন্ধন করুন</span>
                       </a>
                    </div>
                </div>
           </div>
        </div>
    </div>
</section>
@endsection 

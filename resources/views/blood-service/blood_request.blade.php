@extends('layouts.app')
@section('content')
<section class="solid-title-area">
    <div class="container-fluid text-center bg pt-5 pb-5">
        <div class="container">
            <div class="solid-title-inner">
               <h4>গ্রহীতার অনুরোধ</h4>
               <ul>
                   <li><a href="{{ route('home') }}">হোম</a></li>
                   <i class="fs-14 fa fa-angle-right"></i>
                   <li><a href="{{ route('blood_request') }}">গ্রহীতার অনুরোধ</a></li>
               </ul>
             </div>
        </div>
    </div>
</section>
<section class="bloodreq-area pt-5 pb-5">
    <div class="container-fluid">
       <div class="container">
           <div class="bloodreq-form-area pt-5 pb-5">
               <h4>নিচের তথ্যাবলি পূরণ করুন</h4>
               <div class="blood-form-inner">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                   <form class="bloodreq-form row" action="{{ route('blood_request_submit',$blood_request_id) }}" method="POST" id="bloodReqform">
                       @csrf
                       <!--p name="blood_request_id">অনুরোধ নং: <strong> {{ $blood_request_id}}</strong></p-->
                       <div class="form-group col-lg-4">
                           <lebel for="name">অনুরোধকারীর নাম *</lebel>
                           <input type="text" class="form-control2" id="name" name="name" placeholder="" required value="{{ old('name') }}">
                       </div>
                       <div class="form-group col-lg-4">
                           <lebel for="text">রোগীর সাথে সম্পর্ক *</lebel>
                           <select class="form-control2 search-blood" name="relation">
                               <option selected="select"value="ফ্যামিলি">ফ্যামিলি</option>
                               <option value="আত্নীয়">আত্নীয়</option>
                               <option value="বন্ধু">বন্ধু</option>
                           </select>
                       </div>
                       <div class="form-group col-lg-4">
                           <lebel for="cell">মোবাইল *</lebel>
                           <input type="text" class="form-control2" id="cell" name="cell" placeholder="">
                       </div>
                       <div class="form-group col-lg-4">
                           <lebel for="bloodGroup">রোগীর রক্তের গ্রুপ</lebel>
                           <select class="form-control2 search-blood" name="bloodGroup">
                               <option selected="select"value="এ+">এ+ (পজিটিভ)</option>
                               <option value="এ-">এ- (নেগেটিভ)</option>
                               <option value="বি+">বি+ (পজিটিভ)</option>
                               <option value="বি-">বি- (নেগেটিভ)</option>
                               <option value="ও+">ও+ (পজিটিভ)</option>
                               <option value="ও-">ও- (নেগেটিভ)</option>
                               <option value="এবি+">এবি+ (পজিটিভ)</option>
                               <option value="এবি-">এবি- (নেগেটিভ)</option>
                           </select>
                       </div>
                       <div class="form-group col-lg-4">
                           <lebel for="quantity">পরিমাণ (ইউনিট/ব্যাগ) *</lebel>
                           <input type="text" class="form-control2" id="quantity" name="quantity" placeholder="">
                       </div>
                       <div class="form-group col-lg-4">
                           <lebel for="patientAge">রোগীর বয়স</lebel>
                           <input type="text" class="form-control2" id="patientAge" name="patientAge" placeholder="">
                       </div>
                       <div class="form-group col-lg-4">
                           <lebel for="presentDistrict">রোগীর বর্তমান জেলা *</lebel>
                           <input type="text" class="form-control2" id="presentDistrict" name="presentDistrict" placeholder="">
                       </div>
                       <div class="form-group col-lg-4">
                           <lebel for="donationPlace">রক্ত গ্রহনের স্থান *</lebel>
                           <input type="text" class="form-control2" id="text" name="donationPlace" placeholder="">
                       </div>
                       <div class="form-group col-lg-4">
                           <lebel for="donationDate">রক্ত গ্রহনের তারিখ *</lebel>
                           <input type="date" class="form-control2" id="text" name="donationDate" placeholder="" value="{{ old('donationDate') }}" autocomplete="">
                           @if ($errors->has('donationDate')) 
                            @foreach ($errors->get('donationDate') as $message)
                                <p>{{ $message }}</p>
                            @endforeach
                            @endif
                           
                       </div>
                       <div class="form-group col-lg-12">
                           <textarea class="form-control2" id="message" name="patientDetails" placeholder="রোগীর সমস্যা সম্পর্কে সংক্ষিপ্ত লিখুন..."></textarea>
                       </div>
                       <div class="form-group col-lg-12">
                       <button type="submit" class="btn-getinvite" id="subMit">অনুরোধ পাঠান</button>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
</section> 
@endsection
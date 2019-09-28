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
                   <form class="bloodreq-form row" action="" method="post" id="bloodReqform">
                       @csrf
                       <div class="form-group col-lg-4">
                           <lebel for="text">অনুরোধকারীর নাম *</lebel>
                           <input type="text" class="form-control2" id="name" name="name" placeholder="">
                       </div>
                       <div class="form-group col-lg-4">
                           <lebel for="text">রোগীর সাথে সম্পর্ক *</lebel>
                           <select class="form-control2 search-blood">
                               <option selected="select"value="0">ফ্যামিলি</option>
                               <option value="1">আত্নীয়</option>
                               <option value="1">বন্ধু</option>
                           </select>
                       </div>
                       <div class="form-group col-lg-4">
                           <lebel for="text">ইমেইল / মোবাইল *</lebel>
                           <input type="text" class="form-control2" id="text" name="text" placeholder="">
                       </div>
                       <div class="form-group col-lg-4">
                           <lebel for="text">রোগীর রক্তের গ্রুপ</lebel>
                           <select class="form-control2 search-blood">
                               <option selected="select"value="0">এ+ (পজিটিভ)</option>
                               <option value="1">এ- (নেগেটিভ)</option>
                               <option value="1">বি+ (পজিটিভ)</option>
                               <option value="1">বি- (নেগেটিভ)</option>
                               <option value="1">ও+ (পজিটিভ)</option>
                               <option value="1">ও- (নেগেটিভ)</option>
                               <option value="1">এবি+ (পজিটিভ)</option>
                               <option value="1">এবি- (নেগেটিভ)</option>
                           </select>
                       </div>
                       <div class="form-group col-lg-4">
                           <lebel for="text">পরিমাণ (ইউনিট/ব্যাগ) *</lebel>
                           <input type="text" class="form-control2" id="text" name="text" placeholder="">
                       </div>
                       <div class="form-group col-lg-4">
                           <lebel for="text">রোগীর বয়স</lebel>
                           <input type="text" class="form-control2" id="text" name="text" placeholder="">
                       </div>
                       <div class="form-group col-lg-4">
                           <lebel for="text">রোগীর বর্তমান জেলা *</lebel>
                           <input type="text" class="form-control2" id="text" name="text" placeholder="">
                       </div>
                       <div class="form-group col-lg-4">
                           <lebel for="text">রক্ত গ্রহনের স্থান *</lebel>
                           <input type="text" class="form-control2" id="text" name="text" placeholder="">
                       </div>
                       <div class="form-group col-lg-4">
                           <lebel for="text">রক্ত গ্রহনের তারিখ *</lebel>
                           <input type="date" class="form-control2" id="text" name="text" placeholder="">
                       </div>
                       <div class="form-group col-lg-12">
                           <textarea class="form-control2" id="message" name="message" placeholder="রোগীর সমস্যা সম্পর্কে সংক্ষিপ্ত লিখুন..."></textarea>
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
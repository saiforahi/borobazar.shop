@extends('layouts.blood')
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
           <div class="bloodreq-inner pt-5 pb-5">
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
                   <form class="bloodreq-form row" action="{{ route('blood_request_submit') }}" method="POST" id="bloodReqform">
                       @csrf
                       <div class="form-group col-lg-4">
                           <lebel for="name">রোগীর নাম *</lebel>
                           <input type="text" class="form-control2" id="name" name="name" placeholder="" required value="{{ old('name') }}">
                       </div>
                       <div class="form-group col-lg-4">
                           <lebel for="text">রোগীর সাথে সম্পর্ক *</lebel>
                           <select class="form-control2 search-blood" name="relation">
                                <option selected="select"value="বাবা">বাবা</option>
                                <option value="মা">মা</option>
                                <option value="ছেলে">ছেলে</option>
                                <option value="মেয়ে">মেয়ে</option>
                                <option value="ভাই">ভাই</option>
                                <option value="বোন">বোন</option>
                                <option value="চাঁচা">চাঁচা</option>
                                <option value="চাঁচী">চাঁচী</option>
                                <option value="মামা">মামা</option>
                                <option value="মামী">মামী</option>
                                <option value="খালু">খালু</option>
                                <option value="খালা">খালা</option>
                                <option value="দাদা">দাদা</option>
                                <option value="দাদি">দাদি</option>
                                <option value="নানা">নানা</option>
                                <option value="নানী">নানী</option>
                                <option value="বন্ধু">বন্ধু</option>
                                <option value="নিজ">নিজ</option>
                           </select>
                       </div>
                       <div class="form-group col-lg-4">
                           <lebel for="cell">যোগাযোগের নাম্বার *</lebel>
                           <input type="text" class="form-control2" id="cell" name="cell" placeholder="">
                       </div>
                       <div class="form-group col-lg-4">
                           <lebel for="bloodGroup">রোগীর রক্তের গ্রুপ</lebel>
                           <select class="form-control2 search-blood" name="bloodGroup">
                               <option selected="select"value="1">এ+ (পজিটিভ)</option>
                               <option value="2">এ- (নেগেটিভ)</option>
                               <option value="3">বি+ (পজিটিভ)</option>
                               <option value="4">বি- (নেগেটিভ)</option>
                               <option value="5">ও+ (পজিটিভ)</option>
                               <option value="6">ও- (নেগেটিভ)</option>
                               <option value="7">এবি+ (পজিটিভ)</option>
                               <option value="8">এবি- (নেগেটিভ)</option>
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
                           <select class="form-control2 search-blood" id="presentDistrict" name="presentDistrict" required>
                                    <option value='1'>ব্রাক্ষ্মণবাড়িয়া</option>
                                    <option value='2'>বাগেরহাট</option>
                                    <option value='3'>বান্দরবান</option>
                                    <option value='4'>বরিশাল</option>
                                    <option value='5'>ভোলা</option>
                                    <option value='6' Selected>বগুড়া</option>
                                    <option value='7'>বরগুনা</option>
                                    <option value='8'>চাঁদপুর</option>
                                    <option value='9'>চাঁপাইনবাবগঞ্জ</option>
                                    <option value='10'>চট্টগ্রাম</option>
                                    <option value='11'>চুয়াডাঙ্গা</option>
                                    <option value='12'>কুমিল্লা</option>
                                    <option value='13'>কক্সবাজার</option>
                                    <option value='14'>ঢাকা</option>
                                    <option value='15'>দিনাজপুর</option>
                                    <option value='16'>ফরিদপুর</option>
                                    <option value='17'>ফেনী</option>
                                    <option value='18'>গাইবান্ধা</option>
                                    <option value='19'>গাজীপুর</option>
                                    <option value='20'>গোপালগঞ্জ</option>
                                    <option value='21'>হবিগঞ্জ</option>
                                    <option value='22'>জামালপুর</option>
                                    <option value='23'>যশোর</option>
                                    <option value='24'>ঝালকাঠী</option>
                                    <option value='25'>ঝিনাইদহ</option>
                                    <option value='26'>জয়পুরহাট</option>
                                    <option value='27'>খাগড়াছড়ি</option>
                                    <option value='28'>খুলনা</option>
                                    <option value='29'>কিশোরগঞ্জ</option>
                                    <option value='30'>কুড়িগ্রাম</option>
                                    <option value='31'>কুষ্টিয়া</option>
                                    <option value='32'>লালমনিরহাট</option>
                                    <option value='33'>লক্ষ্মীপুর</option>
                                    <option value='34'>মাদারীপুর</option>
                                    <option value='35'>মাগুরা</option>
                                    <option value='36'>মানিকগঞ্জ</option>
                                    <option value='37'>মেহেরপুর</option>
                                    <option value='38'>মৌলভীবাজার</option>
                                    <option value='39'>মুন্সীগঞ্জ</option>
                                    <option value='40'>ময়মনসিংহ</option>
                                    <option value='41'>নওগাঁ</option>
                                    <option value='42'>নড়াইল</option>
                                    <option value='43'>নারায়নগঞ্জ</option>
                                    <option value='44'>নরসিংদী</option>
                                    <option value='45'>নাটোর</option>
                                    <option value='46'>নেত্রকোণা</option>
                                    <option value='47'>নীলফামারী</option>
                                    <option value='48'>নোয়াখালী</option>
                                    <option value='49'>পাবনা</option>
                                    <option value='50'>পঞ্চগড়</option>
                                    <option value='51'>পটুয়াখালী</option>
                                    <option value='52'>পিরোজপুর</option>
                                    <option value='53'>রাজবাড়ী</option>
                                    <option value='54'>রাজশাহী</option>
                                    <option value='55'>রাঙ্গামাটি</option>
                                    <option value='56'>রংপুর</option>
                                    <option value='57'>সাতক্ষীরা</option>
                                    <option value='58'>শরিয়তপুর</option>
                                    <option value='59'>শেরপুর</option>
                                    <option value='60'>সিরাজগঞ্জ</option>
                                    <option value='61'>সুনামগঞ্জ</option>
                                    <option value='62'>সিলেট</option>
                                    <option value='63'>টাঙ্গাইল</option>
                                    <option value='64'>ঠাকুরগাঁও</option>
                                </select>
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
                       <button type="submit" value="submit" class="btn-getinvite" id="subMit">অনুরোধ পাঠান</button>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
</section> 
@endsection
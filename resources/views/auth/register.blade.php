@extends('layouts.app')

@section('content')
<section class="solid-title-area">
        <div class="container-fluid text-center bg pt-5 pb-5">
            <div class="container">
                <div class="solid-title-inner">
                   <h4>নিবন্ধন</h4>
                   <ul>
                       <li><a href="#">হোম</li></a>
                       <i class="fs-14 fa fa-angle-right"></i>
                       <li><a href="{{ route('register') }}">নিবন্ধন</li></a>
                   </ul>
                 </div>
            </div>
        </div>
    </section>

    <section class="bloodreg-area pt-5 pb-5">
            <div class="container-fluid">
                <div class="container">
                    <div class="bloodreg-inner">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                       <form class="bloodreg-form row" action="{{ route('register') }}" method="POST">
                           @csrf
                           <div class="col-lg-6 form-group">
                               <label for="name">নাম *</label>
                               <input id="name" type="text" class="form-control2 @error('name') is-invalid @enderror" value="{{ old('name') }}"  name="name" required autocomplete="name" autofocus>
                               @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           </div>
                           <div class="col-lg-6 form-group">
                               <label for="cell">মোবাইল *</label>
                               <input id="cell" type="text" class="form-control2 @error('cell') is-invalid @enderror" value="{{ old('cell') }}" id="cell" name="cell" required>
                               @error('cell')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $error }}</strong>
                                    </span>
                                @enderror
                           </div>
                           <div class="form-group col-lg-6">
                                   <label for="bloodGroup">রক্তের গ্রুপ *</label>
                                   <select class="form-control2 search-blood @error('bloodGroup') is-invalid @enderror" id="bloodGroup" name="bloodGroup" required>
                                       <option selected="select"value="1">এ+ (পজিটিভ)</option>
                                       <option value="2">এ- (নেগেটিভ)</option>
                                       <option value="3">বি+ (পজিটিভ)</option>
                                       <option value="4">বি- (নেগেটিভ)</option>
                                       <option value="5">ও+ (পজিটিভ)</option>
                                       <option value="6">ও- (নেগেটিভ)</option>
                                       <option value="7">এবি+ (পজিটিভ)</option>
                                       <option value="8">এবি- (নেগেটিভ)</option>
                                   </select>
                                   @error('bloodGroup')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                               </div>
                           <div class="col-lg-6 form-group">
                               <label for="presentDistrict">বসবাসরত এরিয়া *</label>
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
                                @error('presentDistrict')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                           </div>
                           <div class="col-lg-6 form-group">
                               <label for="lastDonationDate">শেষবার রক্ত দানের তারিখ *</label>
                               <input type="date" class="form-control2 @error('lastDonationDate') is-invalid @enderror" placeholder="" id="lastDonationDate" name="lastDonationDate" required>
                               @error('lastDonationDate')
                                   <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           </div>
                           <div class="col-lg-6 form-group">
                               <label for="organizationName">সংগঠনের নাম (আপনি যার সক্রিয় সদস্য)</label>
                               <input type="টডওট" class="form-control2 " placeholder="উদাঃ রক্তের বন্ধন" id="text" name="organizationName">
                           </div>
                           <div class="col-lg-6 form-group">
                               <label for="password">পাসওয়ার্ড *</label>
                               <input type="password" class="form-control2 @error('password') is-invalid @enderror" placeholder="" id="password" name="password" required >
                               @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                           </div>
                           <div class="col-lg-6 form-group">
                               <label for="password-confirm">পাসওয়ার্ড নিশ্চিত করুন *</label>
                               <input type="password" class="form-control2" placeholder="" id="password-confirm" name="password_confirmation" required >
                           </div>
                           <div class="col-lg-12 form-group">
                               <button type="submit" class="btn-getinvite" id="submit" name="submit">নিবন্ধন করুন</button>
                           </div>
                        </form>
                        <div class="row text-right">
                           <div class="col-lg-12">
                                <small class="already">আপনি কি নিবন্ধিত?</small>
                                <span class="login"><a href="{{ route('login') }}" target="_blank">লগইন করুন</a></span>
                            </div>
                        </div>
                   </div>
                </div>
            </div>
        </section>
@endsection

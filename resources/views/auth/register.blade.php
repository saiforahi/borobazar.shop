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
<section class="register-area pt-5 pb-5">
    <div id="registration_page" class="container-fluid">
        <div class="container">
            <div class="register-inner">
                <!--@if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif--> 
                <form class="row" action="{{ route('register') }}" method="POST">
                @csrf
                    <div class="col-lg-6 form-group">
                        <lebel for="firstName">নামের প্রথম অংশ *</lebel>
                        <input type="text" class="form-control2 @error('firstName') is-invalid @enderror" placeholder="" id="firstName" name="firstName" value="{{ old('firstName') }}" required>
                        @error('firstName')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 form-group">
                        <lebel for="lastName">নামের শেষ অংশ</lebel>
                        <input type="text" class="form-control2 @error('lastName') is-invalid @enderror" placeholder="" id="lastName" name="lastName" value="{{ old('lastName') }}">
                        @error('lastName')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 form-group">
                        <lebel for="username">ইমেইল / মোবাইল*</lebel>
                        <input type="text" class="form-control2 @error('username') is-invalid @enderror" placeholder="" id="email" name="username" required value="{{ old('username') }}">
                        @error('username')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 form-group">
                        <label for="presentDistrict">বসবাসরত জেলা *</label>
                        <select class="form-control2 search-blood" id="presentDistrict" name="presentDistrict" required value="{{ old('presentDistrict') }}">
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
                        <label for="password">পাসওয়ার্ড *</label>
                        <input :type="passwordFieldType" v-model="password" class="form-control2 @error('password') is-invalid @enderror" placeholder="" id="password" name="password" required >
                        <span @click="switchVisibility_password" id="switch_password" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-6 form-group">
                        <label for="password_confirmation">পাসওয়ার্ড নিশ্চিত করুন *</label>
                        <input :type="confirmed_passwordFieldType" v-model="confirmed_password" class="form-control2" placeholder="" id="password_confirmation" name="password_confirmation" required>
                        <span @click="switchVisibility_confirm" id="switch_confirm" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
                    </div>
                    <div class="col-md-12">
                        <!--wants-to-be-donar :wantsToBeDonar="{!! json_encode(session('wantsToBeDonar')); !!}"></wants-to-be-donar-->
                        
                        <div class="form-group">
                            @if(old('blood_registration')==true)
                            <input type="checkbox" class="check" id="bldReg" name="blood_registration" onclick="showHidebldreg()" checked>
                            @else
                            <input type="checkbox" class="check" id="bldReg" name="blood_registration" onclick="showHidebldreg()">
                            @endif
                            <label for="text">বড়বাজার রক্ত দান স্বেচ্ছাসেবী সেবায় সংযুক্ত হতে</label>
                        </div>
                        
                        @if(old('blood_registration')==true)
                        <div class="bldreg" id="bldregInfo" style="display: block;">
                            <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="bloodGroup">রক্তের গ্রুপ *</label>
                                <select class="form-control2 search-blood @error('bloodGroup') is-invalid @enderror" id="bloodGroup" name="bloodGroup" value="{{ old('bloodGroup') }}">
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
                                <label for="lastDonationDate">শেষবার রক্ত দানের তারিখ *</label>
                                <input type="date" class="form-control2 @error('lastDonationDate') is-invalid @enderror" placeholder="" id="lastDonationDate" name="lastDonationDate" value="{{ old('lastDonationDate') }}">
                                @error('lastDonationDate')
                                
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-lg-6 form-group">
                                <label for="organizationName">সংগঠনের নাম (আপনি যার সক্রিয় সদস্য)</label>
                                <input type="text" class="form-control2 " placeholder="উদাঃ রক্তের বন্ধন" id="text" name="organizationName">
                            </div>
                            </div>
                        </div>
                        @else
                        <div class="bldreg" id="bldregInfo" style="display: none;">
                            <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="bloodGroup">রক্তের গ্রুপ *</label>
                                <select class="form-control2 search-blood @error('bloodGroup') is-invalid @enderror" id="bloodGroup" name="bloodGroup" value="{{ old('bloodGroup') }}">
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
                                    <label for="lastDonationDate">শেষবার রক্ত দানের তারিখ *</label>
                                    <input type="date" class="form-control2 @error('lastDonationDate') is-invalid @enderror" placeholder="" id="lastDonationDate" name="lastDonationDate" value="{{ old('lastDonationDate') }}">
                                    @error('lastDonationDate')
                                    
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 form-group">
                                    <label for="organizationName">সংগঠনের নাম (আপনি যার সক্রিয় সদস্য)</label>
                                    <input type="text" class="form-control2 " placeholder="উদাঃ রক্তের বন্ধন" id="text" name="organizationName">
                                </div>
                            </div>
                        </div>
                        @endif
                        
                    </div>
                    <div class="col-lg-12 form-group">
                        <p class="trmdpcp">By clicking Sign Up, you agree to our <a href="#" id="terms-link" target="_blank" rel="nofollow">Terms</a>, <a href="#" id="privacy-link" target="_blank" rel="nofollow">Data Policy</a> and <a href="#" id="cookie-use-link" target="_blank" rel="nofollow">Cookie Policy</a>. You may receive SMS notifications from us and can opt out at any time.</p>
                    </div>
                    <div class="col-lg-6 form-group">
                        <button type="submit" value="submit" class="btn-getinvite" id="submit" name="submit">নিবন্ধন করুন</button>
                    </div>
                    <!--div class="col-lg-12 form-group text-center">
                        <div class="social-media-reg">
                            <div class="row">
                                <div class="col-md-12 form-group pb-3">
                                    <hr>
                                    <span class="orn">অথবা</span>
                                </div>
                                <div class="col-md-12 form-group pb-4">
                                    <h6 class="media-title">সামাজিক যোগাযোগ মাধ্যম দ্বারা রেজিষ্ট্রেশন করুন</h6>
                                </div>
                                <div class="col-md-4 form-group">
                                    <a href="#"><button type="button" class="btn-getinvite3"><i class="fa fa-google"></i> গুগল</button></a>
                                </div><div class="col-md-4 form-group">
                                    <a href="#"><button type="button" class="btn-getinvite3"><i class="fa fa-facebook"></i> ফেসবুক</button></a>
                                </div><div class="col-md-4 form-group">
                                    <a href="#"><button type="button" class="btn-getinvite3"><i class="fa fa-twitter"></i> টুইটার</button></a>
                                </div>
                            </div>
                        </div>
                    </div-->
                </form>
                <div class="row text-right">
                    <div class="col-lg-12">
                        <small class="already">আপনি কি নিবন্ধিত?</small>
                        <span class="login"><a href="{{route('login')}}">লগইন করুন</a></span
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    
@endsection

@section('js-part')
    <!--showhide-->   
    <script>
        function showHidebldreg() {
            if(document.getElementById('bldReg').checked) {
                document.getElementById('bldregInfo').style.display='block';  
            } else {
                document.getElementById('bldregInfo').style.display='none'; 
            }
            
            
        }
    </script>
    <!--end showhide-->

@endsection

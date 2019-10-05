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
                                       <option selected="select"value="এ+">এ+ (পজিটিভ)</option>
                                       <option value="এ-">এ- (নেগেটিভ)</option>
                                       <option value="বি+">বি+ (পজিটিভ)</option>
                                       <option value="বি-">বি- (নেগেটিভ)</option>
                                       <option value="ও+">ও+ (পজিটিভ)</option>
                                       <option value="ও-">ও- (নেগেটিভ)</option>
                                       <option value="এবি+">এবি+ (পজিটিভ)</option>
                                       <option value="এবি-">এবি- (নেগেটিভ)</option>
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
                                       <option value='ব্রাক্ষ্মণবাড়িয়া'>ব্রাক্ষ্মণবাড়িয়া</option>
                                       <option value='বাগেরহাট'>বাগেরহাট</option>
                                       <option value='বান্দরবান'>বান্দরবান</option>
                                       <option value='বরিশাল'>বরিশাল</option>
                                       <option value='ভোলা'>ভোলা</option>
                                       <option value='বগুড়া' Selected>বগুড়া</option>
                                       <option value='বরগুনা'>বরগুনা</option>
                                       <option value='চাঁদপুর'>চাঁদপুর</option>
                                       <option value='চাঁপাই নবাবগঞ্জ'>চাঁপাই নবাবগঞ্জ</option>
                                       <option value='চট্টগ্রাম'>চট্টগ্রাম</option>
                                       <option value='চুয়াডাঙ্গা'>চুয়াডাঙ্গা</option>
                                       <option value='কুমিল্লা'>কুমিল্লা</option>
                                       <option value='কক্সবাজার'>কক্সবাজার</option>
                                       <option value='ঢাকা'>ঢাকা</option>
                                       <option value='দিনাজপুর'>দিনাজপুর</option>
                                       <option value='ফরিদপুর'>ফরিদপুর</option>
                                       <option value='ফেনী'>ফেনী</option>
                                       <option value='গাইবান্ধা'>গাইবান্ধা</option>
                                       <option value='গাজীপুর'>গাজীপুর</option>
                                       <option value='গোপালগঞ্জ'>গোপালগঞ্জ</option>
                                       <option value='হবিগঞ্জ'>হবিগঞ্জ</option>
                                       <option value='জামালপুর'>জামালপুর</option>
                                       <option value='যশোর'>যশোর</option>
                                       <option value='ঝালকাঠী'>ঝালকাঠী</option>
                                       <option value='ঝিনাইদহ'>ঝিনাইদহ</option>
                                       <option value='জয়পুরহাট'>জয়পুরহাট</option>
                                       <option value='খাগড়াছড়ি'>খাগড়াছড়ি</option>
                                       <option value='খুলনা'>খুলনা</option>
                                       <option value='কিশোরগঞ্জ'>কিশোরগঞ্জ</option>
                                       <option value='কুড়িগ্রাম'>কুড়িগ্রাম</option>
                                       <option value='কুষ্টিয়া'>কুষ্টিয়া</option>
                                       <option value='লালমনিরহাট'>লালমনিরহাট</option>
                                       <option value='লক্ষ্মীপুর'>লক্ষ্মীপুর</option>
                                       <option value='মাদারীপুর'>মাদারীপুর</option>
                                       <option value='মাগুরা'>মাগুরা</option>
                                       <option value='মানিকগঞ্জ'>মানিকগঞ্জ</option>
                                       <option value='মেহেরপুর'>মেহেরপুর</option>
                                       <option value='মৌলভীবাজার'>মৌলভীবাজার</option>
                                       <option value='মুন্সীগঞ্জ'>মুন্সীগঞ্জ</option>
                                       <option value='ময়মনসিংহ'>ময়মনসিংহ</option>
                                       <option value='নওগাঁ'>নওগাঁ</option>
                                       <option value='নড়াইল'>নড়াইল</option>
                                       <option value='নারায়নগঞ্জ'>নারায়নগঞ্জ</option>
                                       <option value='নরসিংদী'>নরসিংদী</option>
                                       <option value='নাটোর'>নাটোর</option>
                                       <option value='নেত্রকোণা'>নেত্রকোণা</option>
                                       <option value='নীলফামারী'>নীলফামারী</option>
                                       <option value='নোয়াখালী'>নোয়াখালী</option>
                                       <option value='পাবনা'>পাবনা</option>
                                       <option value='পঞ্চগড়'>পঞ্চগড়</option>
                                       <option value='পটুয়াখালী'>পটুয়াখালী</option>
                                       <option value='পিরোজপুর'>পিরোজপুর</option>
                                       <option value='রাজবাড়ী'>রাজবাড়ী</option>
                                       <option value='রাজশাহী'>রাজশাহী</option>
                                       <option value='রাঙ্গামাটি'>রাঙ্গামাটি</option>
                                       <option value='রংপুর'>রংপুর</option>
                                       <option value='সাতক্ষীরা'>সাতক্ষীরা</option>
                                       <option value='শরিয়তপুর'>শরিয়তপুর</option>
                                       <option value='শেরপুর'>শেরপুর</option>
                                       <option value='সিরাজগঞ্জ'>সিরাজগঞ্জ</option>
                                       <option value='সুনামগঞ্জ'>সুনামগঞ্জ</option>
                                       <option value='সিলেট'>সিলেট</option>
                                       <option value='টাঙ্গাইল'>টাঙ্গাইল</option>
                                       <option value='ঠাকুরগাঁও'>ঠাকুরগাঁও</option>
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
                               <button type="submit" class="btn-getinvite" id="subMit" name="submit">নিবন্ধন করুন</button>
                           </div>
                        </form>
                        <div class="row text-right">
                           <div class="col-lg-12">
                               <a href="{{ route('login') }}" target="_blank"><small class="already">আপনি কি নিবন্ধিত?</small>
                               <span class="login">লগইন করুন</span>
                               </a>
                            </div>
                        </div>
                   </div>
                </div>
            </div>
        </section>
@endsection

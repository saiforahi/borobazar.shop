@extends('layouts.app')
@section('content')
<section class="blood-donar-area">
    <div class="container-fluid pb-5 pt-5">
      <div class="container">
          <div class="search-area">
              <div class="row text-center">
                  <div class="col-lg-12">
                      <img width="60" height="auto" src="img/blood.svg">
                      <h4 class="blood-title">রক্ত দান</h4>
                      <p>.....</p>
                  </div>
              </div>
          
          <div class="row text-center">
          <div class="col-lg-12">
            <div class="blood-srch">
                      <form>
                          <select class="form-control0 search-blood">
                              <option selected="select" value="0">রক্তের গ্রুপ</option>
                              <option value="0">এ+ (পজিটিভ)</option>
                              <option value="1">এ- (নেগেটিভ)</option>
                              <option value="1">বি+ (পজিটিভ)</option>
                              <option value="1">বি- (নেগেটিভ)</option>
                              <option value="1">ও+ (পজিটিভ)</option>
                              <option value="1">ও- (নেগেটিভ)</option>
                              <option value="1">এবি+ (পজিটিভ)</option>
                              <option value="1">এবি- (নেগেটিভ)</option>
                          </select>
                          <select class="form-control0 search-blood" id="" name="present_district">
                                                          <option value="-1" selected="">জেলা নির্বাচন </option>
                                                          <option value='1'>ব্রাক্ষ্মণবাড়িয়া</option><option value='2'>বাগেরহাট</option><option value='3'>বান্দরবান</option><option value='4'>বরিশাল</option><option value='5'>ভোলা</option><option value='6' Selected>বগুড়া</option><option value='7'>বরগুনা</option><option value='8'>চাঁদপুর</option><option value='9'>চাঁপাই নবাবগঞ্জ</option><option value='10'>চট্টগ্রাম</option><option value='11'>চুয়াডাঙ্গা</option><option value='12'>কুমিল্লা</option><option value='13'>কক্সবাজার</option><option value='14'>ঢাকা</option><option value='15'>দিনাজপুর</option><option value='16'>ফরিদপুর</option><option value='17'>ফেনী</option><option value='18'>গাইবান্ধা</option><option value='19'>গাজীপুর</option><option value='20'>গোপালগঞ্জ</option><option value='21'>হবিগঞ্জ</option><option value='22'>জামালপুর</option><option value='23'>যশোর</option><option value='24'>ঝালকাঠী</option><option value='25'>ঝিনাইদহ</option><option value='26'>জয়পুরহাট</option><option value='27'>খাগড়াছড়ি</option><option value='28'>খুলনা</option><option value='29'>কিশোরগঞ্জ</option><option value='30'>কুড়িগ্রাম</option><option value='31'>কুষ্টিয়া</option><option value='32'>লালমনিরহাট</option><option value='33'>লক্ষ্মীপুর</option><option value='34'>মাদারীপুর</option><option value='35'>মাগুরা</option><option value='36'>মানিকগঞ্জ</option><option value='37'>মেহেরপুর</option><option value='38'>মৌলভীবাজার</option><option value='39'>মুন্সীগঞ্জ</option><option value='40'>ময়মনসিংহ</option><option value='41'>নওগাঁ</option><option value='42'>নড়াইল</option><option value='43'>নারায়নগঞ্জ</option><option value='44'>নরসিংদী</option><option value='45'>নাটোর</option><option value='46'>নেত্রকোণা</option><option value='47'>নীলফামারী</option><option value='48'>নোয়াখালী</option><option value='49'>পাবনা</option><option value='50'>পঞ্চগড়</option><option value='51'>পটুয়াখালী</option><option value='52'>পিরোজপুর</option><option value='53'>রাজবাড়ী</option><option value='54'>রাজশাহী</option><option value='55'>রাঙ্গামাটি</option><option value='56'>রংপুর</option><option value='57'>সাতক্ষীরা</option><option value='58'>শরিয়তপুর</option><option value='59'>শেরপুর</option><option value='60'>সিরাজগঞ্জ</option><option value='61'>সুনামগঞ্জ</option><option value='62'>সিলেট</option><option value='63'>টাঙ্গাইল</option><option value='64'>ঠাকুরগাঁও</option>
                                                      </select>
                          <select class="form-control0 search-blood" id="" name="present_thana">
                                                          <option value="-1" selected="">থানা/উপজেলা</option>
                                                          <option value='1103'>আদমদীঘি</option><option value='1189'>বগুড়া সদর</option><option value='1247'>ধুনট</option><option value='1248' Selected>দুপচাঁচিয়া</option><option value='1270'>গাবতলী</option><option value='1335'>কাহালু</option><option value='1469'>নন্দীগ্রাম</option><option value='1565'>সারিয়াকান্দি</option><option value='1578'>শাজাহানপুর</option><option value='1585'>শেরপুর</option><option value='1588'>শিবগঞ্জ</option><option value='1603'>সোনাতলা</option>
                                                      </select>
                    <button class="search-btn" type="button">
                    <i class="fa fa-search"></i></button>
                  </form>
              </div>
            </div>
          </div>
         </div>
          
          <div class="bogra-area pt-5">
          <div class="row text-center">
              <div class="col-lg-3">
                   <div class="donar-inner">
                  <div class="thumb">
                      <img width="80" height="auto" src="img/login-avatar.png">
                  </div>
                  <div class="name">
                  <h5 class="title">সাগর হোসেন</h4>
                  <h6 class="cart-title"><span>সদস্যঃ</span> রক্তের বন্ধন</h4>
                  <h6>শেষবার রক্ত দান : <i class="fa fa-calendar"></i><span>  ০২/ মার্চ / ২০১৯</span></h6>
                  </div>
                
                  <div class="col-lg-12">
                       <div class="rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                      </div>
                   </div>
                  </div>
              </div>
              <div class="col-lg-3">
                   <div class="donar-inner">
                  <div class="thumb">
                      <img width="80" height="auto" src="img/login-avatar.png">
                  </div>
                  <div class="name">
                  <h5 class="title">সাগর হোসেন</h4>
                  <h6 class="cart-title"><span>সদস্যঃ</span> রক্তের বন্ধন</h4>
                  <h6>শেষবার রক্ত দান : <i class="fa fa-calendar"></i><span>  ০২/ মার্চ / ২০১৯</span></h6>
                  </div>
                
                  <div class="col-lg-12">
                       <div class="rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                      </div>
                   </div>
                  </div>
              </div>
              <div class="col-lg-3">
                   <div class="donar-inner">
                  <div class="thumb">
                      <img width="80" height="auto" src="img/login-avatar.png">
                  </div>
                  <div class="name">
                  <h5 class="title">সাগর হোসেন</h4>
                  <h6 class="cart-title"><span>সদস্যঃ</span> রক্তের বন্ধন</h4>
                  <h6>শেষবার রক্ত দান : <i class="fa fa-calendar"></i><span>  ০২/ মার্চ / ২০১৯</span></h6>
                  </div>
                
                  <div class="col-lg-12">
                       <div class="rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                      </div>
                   </div>
                  </div>
              </div>
              <div class="col-lg-3">
                   <div class="donar-inner">
                  <div class="thumb">
                      <img width="80" height="auto" src="img/login-avatar.png">
                  </div>
                  <div class="name">
                  <h5 class="title">সাগর হোসেন</h4>
                  <h6 class="cart-title"><span>সদস্যঃ</span> রক্তের বন্ধন</h4>
                  <h6>শেষবার রক্ত দান : <i class="fa fa-calendar"></i><span>  ০২/ মার্চ / ২০১৯</span></h6>
                  </div>
                
                  <div class="col-lg-12">
                       <div class="rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                      </div>
                   </div>
                  </div>
              </div>
            </div>
          </div>
          
          <div class="bogra-area pt-3">
          <div class="row text-center">
              <div class="col-lg-3">
                   <div class="donar-inner">
                  <div class="thumb">
                      <img width="80" height="auto" src="img/login-avatar.png">
                  </div>
                  <div class="name">
                  <h5 class="title">সাগর হোসেন</h4>
                  <h6 class="cart-title"><span>সদস্যঃ</span> রক্তের বন্ধন</h4>
                  <h6>শেষবার রক্ত দান : <i class="fa fa-calendar"></i><span>  ০২/ মার্চ / ২০১৯</span></h6>
                  </div>
                
                  <div class="col-lg-12">
                       <div class="rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                      </div>
                   </div>
                  </div>
              </div>
              <div class="col-lg-3">
                   <div class="donar-inner">
                  <div class="thumb">
                      <img width="80" height="auto" src="img/login-avatar.png">
                  </div>
                  <div class="name">
                  <h5 class="title">সাগর হোসেন</h4>
                  <h6 class="cart-title"><span>সদস্যঃ</span> রক্তের বন্ধন</h4>
                  <h6>শেষবার রক্ত দান : <i class="fa fa-calendar"></i><span>  ০২/ মার্চ / ২০১৯</span></h6>
                  </div>
                
                  <div class="col-lg-12">
                       <div class="rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                      </div>
                   </div>
                  </div>
              </div>
              <div class="col-lg-3">
                   <div class="donar-inner">
                  <div class="thumb">
                      <img width="80" height="auto" src="img/login-avatar.png">
                  </div>
                  <div class="name">
                  <h5 class="title">সাগর হোসেন</h4>
                  <h6 class="cart-title"><span>সদস্যঃ</span> রক্তের বন্ধন</h4>
                  <h6>শেষবার রক্ত দান : <i class="fa fa-calendar"></i><span>  ০২/ মার্চ / ২০১৯</span></h6>
                  </div>
                
                  <div class="col-lg-12">
                       <div class="rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                      </div>
                   </div>
                  </div>
              </div>
              <div class="col-lg-3">
                   <div class="donar-inner">
                  <div class="thumb">
                      <img width="80" height="auto" src="img/login-avatar.png">
                  </div>
                  <div class="name">
                  <h5 class="title">সাগর হোসেন</h4>
                  <h6 class="cart-title"><span>সদস্যঃ</span> রক্তের বন্ধন</h4>
                  <h6>শেষবার রক্ত দান : <i class="fa fa-calendar"></i><span>  ০২/ মার্চ / ২০১৯</span></h6>
                  </div>
                
                  <div class="col-lg-12">
                       <div class="rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                      </div>
                   </div>
                  </div>
              </div>
            </div>
          </div>
          
          <div class="bogra-area pt-3">
          <div class="row text-center">
              <div class="col-lg-3">
                   <div class="donar-inner">
                  <div class="thumb">
                      <img width="80" height="auto" src="img/login-avatar.png">
                  </div>
                  <div class="name">
                  <h5 class="title">সাগর হোসেন</h4>
                  <h6 class="cart-title"><span>সদস্যঃ</span> রক্তের বন্ধন</h4>
                  <h6>শেষবার রক্ত দান : <i class="fa fa-calendar"></i><span>  ০২/ মার্চ / ২০১৯</span></h6>
                  </div>
                
                  <div class="col-lg-12">
                       <div class="rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                      </div>
                   </div>
                  </div>
              </div>
              <div class="col-lg-3">
                   <div class="donar-inner">
                  <div class="thumb">
                      <img width="80" height="auto" src="img/login-avatar.png">
                  </div>
                  <div class="name">
                  <h5 class="title">সাগর হোসেন</h4>
                  <h6 class="cart-title"><span>সদস্যঃ</span> রক্তের বন্ধন</h4>
                  <h6>শেষবার রক্ত দান : <i class="fa fa-calendar"></i><span>  ০২/ মার্চ / ২০১৯</span></h6>
                  </div>
                
                  <div class="col-lg-12">
                       <div class="rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                      </div>
                   </div>
                  </div>
              </div>
              <div class="col-lg-3">
                   <div class="donar-inner">
                  <div class="thumb">
                      <img width="80" height="auto" src="img/login-avatar.png">
                  </div>
                  <div class="name">
                  <h5 class="title">সাগর হোসেন</h4>
                  <h6 class="cart-title"><span>সদস্যঃ</span> রক্তের বন্ধন</h4>
                  <h6>শেষবার রক্ত দান : <i class="fa fa-calendar"></i><span>  ০২/ মার্চ / ২০১৯</span></h6>
                  </div>
                
                  <div class="col-lg-12">
                       <div class="rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                      </div>
                   </div>
                  </div>
              </div>
              <div class="col-lg-3">
                   <div class="donar-inner">
                  <div class="thumb">
                      <img width="80" height="auto" src="img/login-avatar.png">
                  </div>
                  <div class="name">
                  <h5 class="title">সাগর হোসেন</h4>
                  <h6 class="cart-title"><span>সদস্যঃ</span> রক্তের বন্ধন</h4>
                  <h6>শেষবার রক্ত দান : <i class="fa fa-calendar"></i><span>  ০২/ মার্চ / ২০১৯</span></h6>
                  </div>
                
                  <div class="col-lg-12">
                       <div class="rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                      </div>
                   </div>
                  </div>
              </div>
            </div>
          </div>
          
          <div class="bogra-area pt-3">
          <div class="row text-center">
              <div class="col-lg-3">
                   <div class="donar-inner">
                  <div class="thumb">
                      <img width="80" height="auto" src="img/login-avatar.png">
                  </div>
                  <div class="name">
                  <h5 class="title">সাগর হোসেন</h4>
                  <h6 class="cart-title"><span>সদস্যঃ</span> রক্তের বন্ধন</h4>
                  <h6>শেষবার রক্ত দান : <i class="fa fa-calendar"></i><span>  ০২/ মার্চ / ২০১৯</span></h6>
                  </div>
                
                  <div class="col-lg-12">
                       <div class="rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                      </div>
                   </div>
                  </div>
              </div>
              <div class="col-lg-3">
                   <div class="donar-inner">
                  <div class="thumb">
                      <img width="80" height="auto" src="img/login-avatar.png">
                  </div>
                  <div class="name">
                  <h5 class="title">সাগর হোসেন</h4>
                  <h6 class="cart-title"><span>সদস্যঃ</span> রক্তের বন্ধন</h4>
                  <h6>শেষবার রক্ত দান : <i class="fa fa-calendar"></i><span>  ০২/ মার্চ / ২০১৯</span></h6>
                  </div>
                
                  <div class="col-lg-12">
                       <div class="rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                      </div>
                   </div>
                  </div>
              </div>
              <div class="col-lg-3">
                   <div class="donar-inner">
                  <div class="thumb">
                      <img width="80" height="auto" src="img/login-avatar.png">
                  </div>
                  <div class="name">
                  <h5 class="title">সাগর হোসেন</h4>
                  <h6 class="cart-title"><span>সদস্যঃ</span> রক্তের বন্ধন</h4>
                  <h6>শেষবার রক্ত দান : <i class="fa fa-calendar"></i><span>  ০২/ মার্চ / ২০১৯</span></h6>
                  </div>
                
                  <div class="col-lg-12">
                       <div class="rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                      </div>
                   </div>
                  </div>
              </div>
              <div class="col-lg-3">
                   <div class="donar-inner">
                  <div class="thumb">
                      <img width="80" height="auto" src="img/login-avatar.png">
                  </div>
                  <div class="name">
                  <h5 class="title">সাগর হোসেন</h4>
                  <h6 class="cart-title"><span>সদস্যঃ</span> রক্তের বন্ধন</h4>
                  <h6>শেষবার রক্ত দান : <i class="fa fa-calendar"></i><span>  ০২/ মার্চ / ২০১৯</span></h6>
                  </div>
                
                  <div class="col-lg-12">
                       <div class="rating">
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star"></i>
                          <i class="fa fa-star-o"></i>
                      </div>
                   </div>
                  </div>
              </div>
            </div>
          </div>
        </div>
  </section>
@endsection
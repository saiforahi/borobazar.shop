@extends('layouts.main')
@section('content')

<div class="iconbar-area">
    <ul class="iconbar-inner">
        <a href="#" data-toggle="tooltip" title="রক্ত দান রেজিষ্ট্রেশন"><li><img width="20" height="auto" src="img/blood-drop.svg"></li></a>
        <a href="#" data-toggle="tooltip" title="গৃহশিক্ষক রেজিষ্ট্রেশন"><li><img width="20" height="auto" src="img/graduate-student-avatar.svg"></li></a>
        <a href="#" data-toggle="tooltip" title="উকিল রেজিষ্ট্রেশন"><li><img width="20" height="auto" src="img/lawyer.svg"></li></a>
        <a href="#" data-toggle="tooltip" title="হোম সার্ভিস রেজিষ্ট্রেশন"><li><img width="20" height="auto" src="img/home-services.svg"></li></a>
        <a href="#" data-toggle="tooltip" title=" রেজিষ্ট্রেশন"><li><img width="20" height="auto" src="img/blood-drop.svg"></li></a>
    </ul>
</div>

<section class="solid-title-area">
    <div class="container-fluid text-center bg pt-5 pb-5">
        <div class="container">
            <div class="solid-title-inner">
               <h4>আমার আকাউন্ট</h4>
               <ul>
                   <li><a href="{{route('home')}}">হোম</li></a>
                   <i class="fs-14 fa fa-angle-right"></i>
                   <li><a href="{{route('profile')}}">আমার আকাউন্ট</li></a>
               </ul>
             </div>
        </div>
    </div>
</section>

<section class="account-area">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                   <div class="profile-area">
                       <div class="profile-inner">
                           <div class="profile-name">
                              <a href="{{route('profile')}}"><h4 class="p-name">{{ ucfirst(trans(Auth::user()->name.' '.Auth::user()->user_details->last_name))}}</h4></a>
                           </div>
                           
                           <div class="cover-thumb">
                                <img class="responsive" src="img/cover-photo-820by312.svg" title="কভার ফটো">
                                <div class="c-upload-area dropdown">
                                    <i class="fa fa-camera"></i>
                                    <button type="button" class="u-btn dropdown-toggle" data-toggle="modal" data-target="#coverPhoto">কভার ফটো আপডেট</button>
                                    <!--<ul class="dropdown-menu">
                                    <li><a href="#">...</a></li>
                                    <li><a href="#"><input type="file" name="আপলোড করুন"></a></li>
                                    <li><a href="#">...</a></li>
                                    </ul>-->
                                </div>
                               <!-- Modal -->
                                <div id="coverPhoto" class="modal fade" role="dialog">
                                    <div class="modal-dialog cph">
                                        <!-- Modal content-->
                                        <div class="modal-content-cph">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                <h4 class="modal-title">কভার ফটো পরিবর্তন</h4>
                                            </div>
                                            <div class="modal-body">
                                                <p>Some text in the modal.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn-getinvite1" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="p-upload-area">
                                <a href="#"><i class="fa fa-camera"></i> <button type="upload" class="u-btn">আপডেট</button></a>
                            </div>
                            <div class="img-thumb">
                                @if(Auth::user()->user_details->sex=='male')
                                <img width="180" height="180" src="{{asset('img/male-user.svg')}}" title="প্রোফাইল ফটো">
                                @elseif(Auth::user()->user_details->sex=='female')
                                <img width="180" height="180" src="img/female-user.svg" title="প্রোফাইল ফটো">
                                @else
                                <img width="180" height="180" src="img/login-avatar.png" title="প্রোফাইল ফটো">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="profile-description-area">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="accor col-md-12">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#overview" role="tab">ওভারভিউ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#about" role="tab">সম্বন্ধে</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#eduOccu">শিক্ষা ও পেশা</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" data-toggle="tab" href="#socialWork">সামাজিক কর্ম</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" data-toggle="tab" href="#myproduct" role="tab">আমার পণ্য</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#payment">পেমেন্ট তথ্যাদি</a>
                        </li>
                    </ul>
                    
<div class="tab-content">
<!--start overview--->
    <div class="tab-pane fade" id="overview">
        <div class="overview">
            <div class="row">
                <div class="col-lg-6">
                    <div class="work area">
                        <i class="fa fa-briefcase"></i>
                        <div class="content-inner">
                            <h6>শপ নাম</h6>
                            <small>বগুড়া</small>
                        </div>
                    </div> 
                    <div class="educ area">
                        <i class="fa fa-graduation-cap"></i>
                        <div class="content-inner">
                            <h6>  তালুচ হাইস্কুল</h6>
                            <small>দুপচাচিয়া</small>
                        </div>
                    </div>
                    <div class="address area">
                        <i class="fa fa-map-marker"></i>
                        <div class="content-inner">
                            <h6> বগুড়া</h6>
                            <small><span>....</span></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact area">
                        <i class="fa fa-mobile"></i>
                        <div class="content-inner">
                            <h6>01737552558</h6>
                        </div>
                    </div>
                    <div class="contact area">
                        <i class="fa fa-birthday-cake"></i>
                        <div class="content-inner">
                            <h6>{{Auth::user()->user_details->birth_date}}</h6>
                        </div>
                    </div>
                    <div class="scal area">
                        <i class="fa fa-share"></i>
                        <div class="content-inner">
                            <div class="scal-link">
                                <span><a class="fb" href="#">শপ নাম..</a><span>(Youtube)</span></span>
                            </div>
                            <div class="scal-link">
                                <span><a class="fb" href="#">শপ নাম..</a><span>(LinkedIn)</span></span>
                            </div>
                            <div class="scal-link">
                                <span><a class="fb" href="#">শপ নাম..</a><span>(Skype)</span></span>
                            </div>
                            <div class="scal-link">
                                <span><a class="fb" href="#">শপ নাম..</a><span>(Twitter)</span></span>
                            </div>
                            <div class="scal-link">
                                <span><a class="fb" href="#">শপ নাম..</a><span>(Instagram)</span></span>
                            </div>  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end overview---> 
    <!--start details--->
    <div class="tab-pane fade" id="about">
        <button class="accordion fa fa-plus">বিস্তারিত</button>
        <div class="panel" id="detailsView">
            <personal-details></personal-details>
        </div>

        <button class="accordion fa fa-plus">ঠিকানা</button>
        <div class="panel" id="addressView">
            <personal-address></personal-address>
        </div>
        <button class="accordion fa fa-plus">প্রাষঙ্গিক তথ্যাদি</button>
        <div class="panel">
            <div class="personal-details extrainfo">
                <div class="edit-tools">
                    <button class="btn-getinvite1" onclick=""><i class="fa fa-pencil"></i> এডিট</button>
                </div>
                <form class="extrainfoform">
                    <div class="form-group col-md-12">
                    <div class="btn-finish">
                        <button type="button" class="btn-getinvite1" onclick="" id="perbtn-save">সেভ</button>
                        <button type="button" class="btn-getinvite1" onclick="" id="perbtn-save">ক্লোজ</button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
        <!--end details--->
    <div class="tab-pane fade" id="payment">
        <personal-payment-details></personal-payment-details>
    </div>
        
        <div class="tab-pane fade" id="socialWork">
            <button class="accordion fa fa-plus">ডোনার</button>
                <div class="panel">
                    <div class="social-work">
                        <div class="edit-tools">
                            <button class="btn-getinvite1" onclick=""><i class="fa fa-pencil"></i> এডিট</button>
                        </div>
                        <div class="row">
                            <div class="form-group col-lg-12">
                                <form class="donarform">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <input type="checkbox" name="chkbox">
                                            <label for="">রক্তদান<abbr title="Required" class="required"></abbr></label>
                                            <div class="form-group col-md-12">
                                                <select class="form-control2 search-blood">
                                                <option selected="select" value="0">রক্তের গ্রুপ</option>
                                                    <option value="1">এ+ (পজিটিভ)</option>
                                                    <option value="2">এ- (নেগেটিভ)</option>
                                                    <option value="3">বি+ (পজিটিভ)</option>
                                                    <option value="4">বি- (নেগেটিভ)</option>
                                                    <option value="5">ও+ (পজিটিভ)</option>
                                                    <option value="6">ও- (নেগেটিভ)</option>
                                                    <option value="7">এবি+ (পজিটিভ)</option>
                                                    <option value="8">এবি- (নেগেটিভ)</option>
                                                </select>
                                            </div>
                                            </div>
                                            <div class="form-group col-md-6">
                                                <input type="checkbox" name="chkbox">
                                                <label for="">মরোনত্তর চক্ষু / কিডনি<abbr title="Required" class="required"></abbr></label>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                            <div class="btn-finish">
                                                <button type="button" class="btn-getinvite1" onclick="" id="perbtn-save">সেভ</button>
                                                <button type="button" class="btn-getinvite1" onclick="" id="perbtn-save">ক্লোজ</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <!--start volantee-->
                    <button class="accordion fa fa-plus">ফ্রি ভলান্টিয়ার ও পেইড ভলান্টিয়ার</button>
                        <div class="panel">
                            <div class="volantee social-work">
                                <div class="edit-tools">
                                <button class="btn-getinvite1" onclick=""><i class="fa fa-pencil"></i> এডিট</button>
                            </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="checkbox" id="chk" name="chkbox"> 
                                            <span>ফ্রি ভলান্টিয়ার :</span>
                                            <form class="volanteeform" action="">
                                                <div class="form-group col-md-12">
                                                    <label for="">প্রতিষ্ঠানের নাম<abbr title="Required" class="required"></abbr></label>
                                                    <input type="text" class="form-control2" id="" placeholder="" value="">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="">সময়কাল<abbr title="Required" class="required"></abbr></label>
                                                    <input type="text" class="form-control2" id="" placeholder="" value="">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="">ভূমিকা<abbr title="Required" class="required"></abbr></label>
                                                    <input type="text" class="form-control2" id="" placeholder="" value="">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                            
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="checkbox" name="chkbox" id="chk"> 
                                            <span>পেইড ভলান্টিয়ার :</span><br>
                                            <form class="volanteeform" action="">
                                                <div class="form-group col-md-12">
                                                    <label for="">প্রতিষ্ঠানের নাম<abbr title="Required" class="required"></abbr></label>
                                                    <input type="text" class="form-control2" id="" placeholder="" value="">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="">সময়কাল<abbr title="Required" class="required"></abbr></label>
                                                    <input type="text" class="form-control2" id="" placeholder="" value="">
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <label for="">ভূমিকা<abbr title="Required" class="required"></abbr></label>
                                                    <input type="text" class="form-control2" id="" placeholder="" value="">
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                    <div class="btn-finish">
                                        <button type="button" class="btn-getinvite1" onclick="" id="perbtn-save">সেভ</button>
                                        <button type="button" class="btn-getinvite1" onclick="" id="perbtn-save">ক্লোজ</button>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end volantee-->

                        <!--start contribution-->
                        <button class="accordion fa fa-plus">কন্টিবিউশন ও সম্মাননা</button>
                            <div class="panel">
                                <div class="contribution social-work">
                                    <div class="edit-tools">
                                    <button class="btn-getinvite1" onclick=""><i class="fa fa-pencil"></i> এডিট</button>
                                </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                            <input type="checkbox" name="chkbox" id="chk"> 
                                            <span>কন্টিবিউশন :</span>
                                                <form class="contributeform" action="">
                                                    <div class="form-group col-md-12">
                                                        <label for="">প্রতিষ্ঠানের নাম<abbr title="Required" class="required"></abbr></label>
                                                        <input type="text" class="form-control2" id="" placeholder="" value="">
                                                    </div>
                                                    <div class="form-group col-md-12">
                                                        <label for="">অনুদান<abbr title="Required" class="required"></abbr></label>
                                                        <input type="text" class="form-control2" id="" placeholder="" value="">
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <input type="checkbox" name="chkbox" id="chk"> 
                                            <span>সম্মাননা :</span><br>
                                            <div class="award">
                                                <div class="row"> 
                                                    <div class="col-lg-6">
                                                    <div class="form-group column">
                                                        <img width="45" height="45" src="img/badge.svg">
                                                        <img width="45" height="45" src="img/badge.svg">
                                                        <img width="45" height="45" src="img/badge.svg">
                                                        <img width="45" height="45" src="img/badge.svg">
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-12">
                                        <div class="btn-finish">
                                            <button type="button" class="btn-getinvite1" onclick="" id="perbtn-save">সেভ</button>
                                            <button type="button" class="btn-getinvite1" onclick="" id="perbtn-save">ক্লোজ</button>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!--end contribution-->
                        </div>
        
                        <div class="tab-pane fade" id="eduOccu">
                            <button class="accordion fa fa-plus">স্কুল ও কলেজ</button>
                            <div class="panel" id="educationView">
                                <personal-education></personal-education>
                            </div>
                            <button class="accordion fa fa-plus">ট্রেইনিং</button>
                            <div class="panel" id="trainingView">
                                <personal-training></personal-training>
                            </div>
                            <button class="accordion fa fa-plus">পেশা</button>
                            <div class="panel">
                                <div class="occu">
                                    <div class="edit-tools">
                                        <button class="btn-getinvite1" onclick=""><i class="fa fa-pencil"></i> এডিট</button>
                                    </div>
                                    <form>   
                                        <div class="form-group col-md-12">
                                            <div class="btn-finish">
                                                <button type="button" class="btn-getinvite1" onclick="" id="perbtn-save">সেভ</button>
                                                <button type="button" class="btn-getinvite1" onclick="" id="perbtn-save">ক্লোজ</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <button class="accordion fa fa-plus">দক্ষতা</button>
                            <div class="panel" id="skillsView">
                                <personal-skills></personal-skills>
                            </div>
                        </div>
                    </div>
                    <!--end overview--->
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js-part')
<script>
        var acc = document.getElementsByClassName("accordion");
        var i;
    
        for (i = 0; i < acc.length; i++) {
          acc[i].addEventListener("click", function() {
            /* Toggle between adding and removing the "active" class,
            to highlight the button that controls the panel */
            this.classList.toggle("active");
    
            /* Toggle between hiding and showing the active panel */
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
              panel.style.display = "none";
            } else {
              panel.style.display = "block";
            }
          });
        }
</script>
    
    <script>
        $(document).ready(function() {
            $("#formButton").click(function() {
                $("#form1").toggle();
            });
        });
    </script>
    
    <!--sidebar-->
     <script type="text/javascript">
        $('.btn').on("click", function(){
            $('.btn').toggleClass('btnc');
            $('.main-menu').toggleClass('side');
        });
     </script>
     <!--/ end sidebar-->
    <script>
        function myFunction() {
            document.getElementById("demo").classList.toggle("open");
        } 
    </script>
@endsection
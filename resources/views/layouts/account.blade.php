<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/mirazmac/bengali-webfont-cdn@master/solaimanlipi/style.css">
      <!-- Custom CSS -->
      <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!--customized with msi-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/logo.png') }}">
    <title>বড়বাজার অনলাইন শপিং মাকের্টপ্লেস</title>
	<!--customized with msi ends-->
  </head>
  <body>
    <!--<iframe src="products.html" width="600" height="400"></iframe>-->
    <section class="header-top">
        <div class="container-fluid d-none d-md-block tpbbtb">
            <div class="container pt-1 pb-1">
                <div class="row">
                <div class="col-lg-3">
                    <span class="headline">বড়বাজারে আপনাকে স্বাগতম!<a href="products.html" class="headline2">ব্যাক টু শপিং!</a></span>
                </div>
                    <div class="col-lg-6">
                    <div class="top-header-middle">
                        <a class="asdf" href="#">
                            <i class="fa fa-phone">  কল করুন :</i>
                            <span>+৮৮০ ১৬১১ ৯৭৫ ৮৬১</span>
                        </a>
                        <a class="br1" href="#">
                            <i class="fa fa-envelope">  ইমেইল :</i>
                            <span>borobazar.shop@gmail.com</span>
                        </a>
                    </div>  
                </div>
                    <div class="col-lg-3">
                        <div class="top-header-right">
                            <select class="language">
                                    <option selected="select" value="0">ভাষা</option>
                                    <option value="1">বাংলা (BN)</option>
                                    <option value="1">ইংলিশ (EN)</option>
                                </select>
                            </div>
                        </div>
                </div>
                </div>
            </div>
    </section>
      
      
<section class="bnavigationbar">
      <div class="container-fluid pt-1 pb-1">
          <div class="container">
              <div class="row">
                <div class="col-lg-8">
                    <a class="logo" href="#">
                    <img width="50" height="auto" class="pulse" src="img/logo.png" alt="borobazar">
                    <img width="160" class="pdr-12" height="auto" src="img/borobazar.png" alt="borobazar">
                    </a>
                    <div class="header-search">
                        <form>
                    <input class="input search-input" type="text" placeholder="খোঁজ করুন">
                    <select class="input search-categories">
								<option selected="select" value="0">সকল ক্যাটাগরি</option>
								<option value="1">কৃষি ও খাদ্য</option>
								<option value="1">পোশাক, বস্ত্র ও আনুষাঙ্গিক</option>
								<option value="1">অটো ও পরিবহন</option>
								<option value="1">ইলেকট্রনিক্স ডিভাইস</option>
								<option value="1">বৈদ্যুতিক সরঞ্জাম, উপাদান এবং টেলিকম</option>
								<option value="1">উপহার, ক্রীড়া ও খেলনা</option>
								<option value="1">স্বাস্থ্য এবং সৌন্দর্য</option>
								<option value="1">বাসা, আলো এবং নির্মাণ</option>
								<option value="1">ব্যাগ, জুতা এবং আনুষাঙ্গিক</option>
								<option value="1">যন্ত্রপাতি, শিল্প যন্ত্রাংশ ও সরঞ্জাম</option>
								<option value="1">ধাতুবিদ্যা, কেমিক্যালস, রাবার ও প্লাস্টিক</option>
								<option value="1">প্যাকেজিং, বিজ্ঞাপন ও অফিস</option>
							</select>
                      <button class="search-btn" type="button">
                      <i class="fa fa-search"></i></button>
                    </form>
                </div>
                </div>
                <div class="col-lg-4">
                  <ul class="header-btns">
                    <li class="header-account dropdown default-dropdown">
							<div class="header-account">
								<div class="header-btns-icon">
									<i class="fa fa-user-o"></i>
								</div>
								<strong class="text-uppercase">আপনার অ্যাকাউন্ট<!--<i class="fa fa-caret-down"></i>--></strong>
                                <div class="dropdown-content">
                                <a href="#"><i class="mt-1 fa fa-user"></i>আমার অ্যাকাউন্ট</a>
                                <a href="#"><i class="mt-1 fa fa-heart"></i>পছন্দ তালিকা</a>
                                <a href="track.html"><i class="mt-1 fa fa-truck"></i>অর্ডার ট্র্যাক</a>
                                <a href="checkout.html"><i class="mt-1 fa fa-check-square"></i>চেক আউট</a>
                                <a href="#"><i class="mt-1 fa fa-power-off"></i>লগআউট</a>
                            </div>
							</div>
                        <div class="login-from">
							<a href="#" class="text-uppercase" onclick="document.getElementById('id01').style.display='block'" style="width:auto;">লগইন</a> / <a href="register.html" target="_blank" class="text-uppercase" >নিবন্ধন</a>
                        
                            
                        <div id="id01" class="modal">
                            <form class="modal-content animate" action="/action_page.php">
                            <div class="imgcontainer">
                            <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                            <img src="img/login-avatar.png" alt="Avatar" class="avatar">
                            </div>

                            <div class="container">
                            <label for="uname"><b>ইমেইল অথবা মোবাইল নাম্বার</b></label>
                            <input class="usermail" type="text" placeholder="ইমেইল অথবা মোবাইল নাম্বার" name="uname" required>
                            <label for="psw"><b>পাসওয়ার্ড</b></label>
                            <input class="usermail" type="password" placeholder="আপনার পাসওয়ার্ড দিন" name="psw" required>
                            <button type="button" class="btn-getinvite btn-block">লগইন করুন</button>
                            <label class="fntc">
                            <input class="userrem" type="checkbox" checked="checked" name="remember">মনে রাখুন
                            </label>
                             <a class="pwd" href="#"> পাসওয়ার্ড ভুলে গেছেন?</a>
                            </div>
                            </form>
                            </div>
                        </div>
                      </li>
                      <li class="header-cart dropdown default-dropdown">
							<a class="">
								<div class="header-btns-icon">
									<i class="fa fa-shopping-cart"></i>
									<span class="qty">২</span>
								</div>
                                
								<strong class="text-uppercase">আমার ব্যাগ</strong>
								<br>
                                <a class="text-uppercase" href="#">৳ ৯৯</a>
							</a>
                          <div class="dropdown-content-2">
								<div id="shopping-cart">
									<div class="shopping-cart-list">
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="./img/thumb-product01.jpg" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">৳ : ৩৫.২০<span class="qty">x৩</span>
                                                <span class="qty">= ১০৫.৬</span></h3>
												<h2 class="product-name"><a href="#">ক্যাজুয়াল সু ব্লু</a></h2>
											</div>
											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
										<div class="product product-widget">
											<div class="product-thumb">
												<img src="./img/thumb-product02.jpg" alt="">
											</div>
											<div class="product-body">
                                                <h3 class="product-price">৳ : ৩৫.২০<span class="qty">x৩</span>
                                                <span class="qty">=১০৫.৬</span></h3>
												<h2 class="product-name"><a href="#">ক্যাজুয়াল সু পিংক</a></h2>
											</div>
											<button class="cancel-btn"><i class="fa fa-trash"></i></button>
										</div>
									</div>
									<div class="shopping-cart-btns row">
                                        <div class="col-lg-6">                                        
										<a href="shoppingcart.html"><button class="btn-getinvite">ব্যাগ দেখুন</button></a>
                                        </div>
                                        <div class="col-lg-6">
										<a href="checkout.html"><button class="btn-getinvite">চেকআউট <i class="fa fa-arrow-circle-right"></i></button></a>
                                        </div>
									</div>
								</div>
							</div>
						</li>
                    </ul>  
                  </div>
             </div>
             <div class="bb-categories-sidebar">
				<nav class="main-menu">
					  <ul>
						<li>
						  <a href="#"><i class="fa fa-home"></i>
							<span class="nav-text">হোম</span>
							</a>
						  </li>

						  <li>
						  <a href="#"><i class="fa fa-search"></i>
							<span class="nav-text">সার্চ</span>
							  <input type="search" name="search" id="search" placeholder="">
							</a>
						  </li>

						  <li>
						  <a href="#"><i class="fa fa-list"></i>
							<span class="nav-text">ক্যাটাগরি</span>
							</a>
						  </li>

						</ul> 

						<ul>
							<li>
						  <a href="#"><i class="fa fa-power-off"></i>
							<span class="nav-text">লগআউট</span>
							</a>
						  </li>
						</ul>

						</nav>
				 <a class="btn fa fa-bars" href="#"></a>
				</div>
           </div>
      </div>
 </section>
          
 <section class="solid-title-area">
     <div class="container-fluid text-center bg pt-5 pb-5">
         <div class="container">
             <div class="solid-title-inner">
                <h4>আমার আকাউন্ট</h4>
                <ul>
                    <li><a href="products.html">হোম</li></a>
                    <i class="fs-14 fa fa-angle-right"></i>
                    <li><a href="account.html">আমার আকাউন্ট</li></a>
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
                               <a href="#"><h4 class="p-name">সাগর হোসেন রাজু</h4></a>
                            </div>
							<div class="c-upload-area dropdown">
                              <i class="fa fa-camera"></i>
                                   <button type="button" data-toggle="dropdown" class="u-btn dropdown-toggle">কভার ফটো আপডেট</button>
                                   <ul class="dropdown-menu">
                                    <li><a href="#">...</a></li>
                                    <li><a href="#"><input type="file" name="আপলোড করুন"></a></li>
                                    <li><a href="#">...</a></li>
                                  </ul>
                            </div>
                            <div class="cover-thumb">
                                <img class="responsive" width="820" height="312" src="img/cover-photo-820by312.svg" title="কভার ফটো">
                            </div>
							<div class="p-upload-area">
                               <a href="#"><i class="fa fa-camera"></i> <button type="upload" class="u-btn">আপডেট</button></a>
                            </div>
							<div class="img-thumb">
                                <img width="180" height="180" src="img/login-avatar.png" title="প্রোফাইল ফটো">
                            </div>
						</div>
					</div>
                </div>
                <!--<div class="col-lg-3">
                    <div class="personal-rating">
                        <div class="row">
                            <div class="col-lg-12">
                                <h4 class="title">শপ নাম</h4>
                                <small class="yr">১ বছর <span><i class="fa fa-map-marker"></i> বগুড়া</span></small>
                            </div>
                            <div class="col-lg-12">
                                <h6 class="status"><i class="fa fa-briefcase"></i> <span> গোল্ড স্টার</span></h6>
                                <h6 class="status"><i class="fa fa-check-square"></i> <span> ট্রেড মার্ক নিবন্ধিত</span></h6>
                                <h6 class="status"><i class="fa fa-user"></i> <span> ...</span></h6>
                            </div>
                            <div class="col-lg-12">
                                <h5 class="trsac">ট্রানজেকশন লেভেল : <i class="fa fa-diamond"></i></h5>
                                <h5 class="t-cost">ট্রানজেকশন টাকা : <i class="fa fa-coins"></i></h5>
                            </div>
                            <div class="col-lg-12">
                                <div class="believe">
                                    <i class="fa fa-handshake"></i>
                                </div>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o empty"></i>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="believe">
                                    <i class="fa fa-smile"></i>
                                </div>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o empty"></i>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="believe">
                                    <i class="fa fa-hands"></i>
                                </div>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o empty"></i>
                                </div>
                            </div>
                        </div>
                     </div>
                 </div>-->
             </div>
            </div>
        </div>
</section>    
        
<section class="profile-description-area">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
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
                        <a class="nav-link" data-toggle="tab" href="#socialWork">সামাজিক কর্ম</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#myproduct" role="tab">আমার পণ্য</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#payment">পেমেন্ট তথ্যাদি</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane  fade container" id="overview">
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
                                             <h6>+৮৮০ ১৬১১ ৯৭৫৪৬১</h6>
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
                                        <div class="contact area">
                                            <i class="fa fa-birthday-cake"></i>
                                           <div class="content-inner">
                                             <h6>September 4, 1994</h6>
                                           </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade container" id="about">
                            <button class="accordion fa fa-plus">বিস্তারিত</button>
                                <div class="panel">
                                    <div class="personal-details">
                                        <div class="edit-tools">
                                              <button class="btn-getinvite1" onclick=""><i class="fa fa-pencil"></i> এডিট</button>
                                           </div>
                                        <form class="row" id="personalForm">
                                         
                                        <div class="col-md-6">
                                            	<div class="form-group col-md-12">
                                       			  <label for="">নামের প্রথম অংশ*<abbr title="Required" class="required"></abbr></label>
                                       			  <input type="text" class="form-control2" placeholder="" value="Sagar" name="txtFirstName" id="txtFirstName">
                                    		    </div>
                                                
                                            	<div class="form-group col-md-12">
                                       			  <label for="">নামের শেষ অংশ*</label>
                                       			  <input type="text" class="form-control2" placeholder="" value="Hossain" name="txtLastName" id="txtLastName">
                                    		    </div>
                                                
                                            	<div class="form-group col-md-12">
                                                    <label for="">পিতার নাম</label>
                                                    <input type="text" class="form-control2" placeholder="" value="Md. A. Barik Mondal" name="txtFName" id="txtFName">
                                                </div>
                                                
                                           		<div class="form-group col-md-12">
                                                    <label for="">মাতার নাম</label>
                                                    <input type="text" class="form-control2" placeholder="" value="Mst. Siddika Khatun" name="txtMName" id="txtMName">
                                                </div>
                                                
                                           		<div class="form-group col-md-12">
                                                    <label for="">জন্ম তারিখ<abbr title="Required" class="required"></abbr></label>
                                                    <input type="date" class="form-control2 datepicker" placeholder="" value="9/4/1994" name="txtBirthDate" id="txtBirthDate">
                                                </div>
                                                
                                           		<div class="form-group col-md-12">
                                                    <label for="">লিঙ্গ<abbr title="Required" class="required"></abbr></label>
                                                      <select name="cboGender" id="cboGender" class="form-control2">
                                                         <option value="-1" selected="">নির্বাচন</option>
                                                         <option value="M" selected="">পুরুষ</option>
                                                         <option value="F">মহিলা</option>
                                                         <option value="O">অন্যান্য</option>
                                                      </select>
                                       		    </div>
                                                
                                            	<div class="form-group col-md-12">
                                                    <label for="">ধর্ম</label>
                                                    <input type="text" class="form-control2" placeholder="" value="Islam" name="txtReligion" id="txtReligion">
                                                </div>
                                                
                                           		<div class="form-group col-md-12">
                                                    <label for="">বৈবাহিক  অবস্থা<abbr title="Required" class="required"></abbr></label>
                                                      <select name="cboMStatus" id="cboMStatus" class="form-control2">
                                                        <option value="-1" selected="selected">নির্বাচন</option>
                                                        <option value="2">অবিবাহিত</option>
                                                        <option value="1"> বিবাহিত </option>
                                                        <option value="3"> সিঙ্গেল </option>
                                                      </select>
                                                </div>
                                            
                                                 <!-- Start Nationality -->
                                                <div class="form-group col-md-12">
                                                    <div class="title-wrap">
                                                        <label for="">জাতীয়তা<abbr title="Required" class="required"></abbr></label>
                                                        <input class="form-control2 onclick-hidden" id="nViewFild" placeholder="" value="Bangladeshi" type="text">
                                                    </div>                                    
                                                </div>
                                                <!-- End Nationality -->
                                        </div>

                                        <div class="col-md-6">
                                            <div class="row">
                                           
                                           <div class="form-group col-md-12">
                                              <label for="">জাতীয় পরিচয় পত্র নম্বর</label>
                                             <input type="text" class="form-control2" placeholder="" value="19941013354000241" name="txtNationalId" id="txtNationalId">
                                           </div>

                                           <div class="form-group col-md-12">
                                              <label for="">পাসপোর্ট নাম্বার</label>
                                              <input type="text" class="form-control2" placeholder="" value="" name="passportNo" id="passportNo">
                                           </div>
                                           <div class="form-group col-md-12">
                                              <label for="">পাসপোর্ট ইস্যু তারিখ</label>
                                              <input type="text" class="form-control2 datepicker" placeholder="" value="" name="issueDate" id="issueDate">
                                              <input type="hidden" name="h_catId" value="">
                                              <input type="hidden" name="isBlueColor" id="isBlueColor" value="False">
                                           </div>

                                            
    									   	<div class="form-group col-md-12">
                                              <label for="" class="sui">মোবাইল নম্বর</label>
                                              <input type="text" class="form-control2" placeholder="" value="01797601003" name="txtMobile" id="txtMobile">
                                           </div>
                                           		<div class="form-group col-md-12">
                                              <label for="">মোবাইল নম্বর ২</label>
                                             <input type="text" class="form-control2" placeholder="" value="01755412223" name="txtPhone_H" id="txtPhone_H">
                                           </div>
                                           		<div class="form-group col-md-12">
                                              <label for="">মোবাইল নম্বর ৩</label>
                                            <input type="text" class="form-control2" placeholder="" value="" name="txtPhone_Off" id="txtPhone_Off">
                                           </div>
                                           		<div class="form-group col-md-12">
                                              <label for="" class="sui">ইমেইল</label>
                                              <input type="text" class="form-control2" placeholder="" value="rajusagar40@gmail.com" name="txtEmail1" id="txtEmail1">
                                           </div>
                                           		<div class="form-group col-md-12">
                                              <label for="">বিকল্প ইমেইল</label>
                                              <input type="text" class="form-control2" placeholder="" value="" name="txtEmail2" id="txtEmail2">
                                              <input type="hidden" name="h_catId" value="">
                                           </div>
                                            </div>
                                     		
                                         </div>
                                        <div class="form-group col-md-12">
                                              <div class="btn-finish">
                                                  <button type="button" class="btn-getinvite1" onclick="" id="perbtn-save"><span onclick="">সেভ</span></button>
                                                  <button type="button" class="btn-getinvite1" onclick="" id="perbtn-save"><span onclick="">ক্লোজ</span></button>
                                              </div>
                                           </div>
                                        </form>    
                                    </div>
                                </div>

    <button class="accordion fa fa-plus">ঠিকানা</button>
            <div class="panel">
                <div class="personal-details">
                    <div class="edit-tools">
                        <button class="btn-getinvite1" onclick=""><i class="fa fa-pencil"></i> এডিট</button>
                    </div>
                    
                    <form class="row" id="" name="">
                        <div class="col-md-6">
                                    <div class="present-address">
                                        <h4 class="heading">বর্তমান ঠিকানা</h4>
                                    </div>
                                    
                                    <div class="present_address" id="">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control2" id="present_Village" name="present_Village" value="" placeholder="আপনার বাড়ি নং / রাস্তা / গ্রাম লিখুন ">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" placeholder="দেশের নাম" class="form-control2"> 
                                            </div>
                                        
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="selectpicker form-control2">
                                                    <option>বিভাগ</option> <option>ঢাকা (Dhaka)</option><option>চট্টগ্রাম (Chottragram)</option><option>রাজশাহী (Rajshahi)</option><option>বংপুর (Rangpur)</option> <option>সিলেট (Sylhet)</option><option>খুলনা (Khulna)</option>
                                                    <option>বরিশাল (Barishal)</option><option>ময়মনসিং (Mymanshing)</option>
                                                </select>
                                            </div>
                                            </div>
                                            
                                            <div class="col-md-4">
                                                    <div class="form-group">
                                                        <select class="form-control2" id="" name="present-district">
                                                            <option value="-1">জেলা নির্বাচন </option>
                                                            <option value="1">ব্রাক্ষ্মণবাড়িয়া</option><option value="2">বাগেরহাট</option><option value="3">বান্দরবান</option><option value="4">বরিশাল</option><option value="5">ভোলা</option><option value="6" selected="">বগুড়া</option><option value="7">বরগুনা</option><option value="8">চাঁদপুর</option><option value="9">চাঁপাই নবাবগঞ্জ</option><option value="10">চট্টগ্রাম</option><option value="11">চুয়াডাঙ্গা</option><option value="12">কুমিল্লা</option><option value="13">কক্সবাজার</option><option value="14">ঢাকা</option><option value="15">দিনাজপুর</option><option value="16">ফরিদপুর</option><option value="17">ফেনী</option><option value="18">গাইবান্ধা</option><option value="19">গাজীপুর</option><option value="20">গোপালগঞ্জ</option><option value="21">হবিগঞ্জ</option><option value="22">জামালপুর</option><option value="23">যশোর</option><option value="24">ঝালকাঠী</option><option value="25">ঝিনাইদহ</option><option value="26">জয়পুরহাট</option><option value="27">খাগড়াছড়ি</option><option value="28">খুলনা</option><option value="29">কিশোরগঞ্জ</option><option value="30">কুড়িগ্রাম</option><option value="31">কুষ্টিয়া</option><option value="32">লালমনিরহাট</option><option value="33">লক্ষ্মীপুর</option><option value="34">মাদারীপুর</option><option value="35">মাগুরা</option><option value="36">মানিকগঞ্জ</option><option value="37">মেহেরপুর</option><option value="38">মৌলভীবাজার</option><option value="39">মুন্সীগঞ্জ</option><option value="40">ময়মনসিংহ</option><option value="41">নওগাঁ</option><option value="42">নড়াইল</option><option value="43">নারায়নগঞ্জ</option><option value="44">নরসিংদী</option><option value="45">নাটোর</option><option value="46">নেত্রকোণা</option><option value="47">নীলফামারী</option><option value="48">নোয়াখালী</option><option value="49">পাবনা</option><option value="50">পঞ্চগড়</option><option value="51">পটুয়াখালী</option><option value="52">পিরোজপুর</option><option value="53">রাজবাড়ী</option><option value="54">রাজশাহী</option><option value="55">রাঙ্গামাটি</option><option value="56">রংপুর</option><option value="57">সাতক্ষীরা</option><option value="58">শরিয়তপুর</option><option value="59">শেরপুর</option><option value="60">সিরাজগঞ্জ</option><option value="61">সুনামগঞ্জ</option><option value="62">সিলেট</option><option value="63">টাঙ্গাইল</option><option value="64">ঠাকুরগাঁও</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            
                                                <div class="col-md-4">
                                                    <div class="form-group" id="">
                                                        <select class="form-control2" id="" name="present-thana">
                                                            <option value="-1" selected="">থানা/উপজেলা নির্বাচন </option>
                                                            <option value="1103">আদমদীঘি</option><option value="1189">বগুড়া সদর</option><option value="1247">ধুনট</option><option value="1248">দুপচাঁচিয়া</option><option value="1270">গাবতলী</option><option value="1335">কাহালু</option><option value="1469">নন্দীগ্রাম</option><option value="1565">সারিয়াকান্দি</option><option value="1578">শাজাহানপুর</option><option value="1585">শেরপুর</option><option value="1588">শিবগঞ্জ</option><option value="1603">সোনাতলা</option><option value="1789">তানোর</option><option value="1790">লালিতগঞ্জ</option><option value="1791">খোদমোহনপুর</option><option value="1792">ভবানীগঞ্জ</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            
                                                <div class="col-md-4">
                                                    <div class="form-group" id="">
                                                        <input type="text" class="form-control2" placeholder="পোষ্ট কোড" id="">
                                                        <!--<select class="form-control2" id="present_p_office" name="present_p_office">
                                                            <option value="-1" selected="">পোস্ট অফিস নির্বাচন </option>
                                                            <option value="2714" selected="">দুপচাঁচিয়া</option><option value="2715">তালোড়া</option>
                                                        </select>-->
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                        
                        
                        
                                <div class="col-md-6">
                                    <div class="address-wrap permanent-address">
                                        <div class="title-wrap">
                                            <label for="permanentAddress">স্থায়ী ঠিকানা</label>
                                            <div class="form-group form-control2">
                                                <label class="radio-inline"><input type="checkbox" class="userrem" name="presentLocation" value="0" checked="">বর্তমান ঠিকানার মতই</label>
                                                <input type="text" class="form-control2" id="present_Village" name="present_Village" value="" placeholder="আপনার বাড়ি নং / রাস্তা / গ্রাম লিখুন ">
                                            </div>
                                        </div> 
                                    </div>
                                        
                                    <div class="present_address" id="">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <input type="text" placeholder="দেশের নাম" class="form-control2"> 
                                            </div>
                                        
                                            <div class="col-md-6">
                                            <div class="form-group">
                                                <select class="selectpicker form-control2">
                                                    <option>বিভাগ</option> <option>ঢাকা (Dhaka)</option><option>চট্টগ্রাম (Chottragram)</option><option>রাজশাহী (Rajshahi)</option><option>বংপুর (Rangpur)</option> <option>সিলেট (Sylhet)</option><option>খুলনা (Khulna)</option>
                                                    <option>বরিশাল (Barishal)</option><option>ময়মনসিং (Mymanshing)</option>
                                                </select>
                                            </div>
                                            </div>
                                            
                                            <div class="col-md-4">
                                                    <div class="form-group">
                                                        <select class="form-control2" id="" name="present-district">
                                                            <option value="-1" selected="">জেলা নির্বাচন </option>
                                                            <option value="1">ব্রাক্ষ্মণবাড়িয়া</option><option value="2">বাগেরহাট</option><option value="3">বান্দরবান</option><option value="4">বরিশাল</option><option value="5">ভোলা</option><option value="6">বগুড়া</option><option value="7">বরগুনা</option><option value="8">চাঁদপুর</option><option value="9">চাঁপাই নবাবগঞ্জ</option><option value="10">চট্টগ্রাম</option><option value="11">চুয়াডাঙ্গা</option><option value="12">কুমিল্লা</option><option value="13">কক্সবাজার</option><option value="14">ঢাকা</option><option value="15">দিনাজপুর</option><option value="16">ফরিদপুর</option><option value="17">ফেনী</option><option value="18">গাইবান্ধা</option><option value="19">গাজীপুর</option><option value="20">গোপালগঞ্জ</option><option value="21">হবিগঞ্জ</option><option value="22">জামালপুর</option><option value="23">যশোর</option><option value="24">ঝালকাঠী</option><option value="25">ঝিনাইদহ</option><option value="26">জয়পুরহাট</option><option value="27">খাগড়াছড়ি</option><option value="28">খুলনা</option><option value="29">কিশোরগঞ্জ</option><option value="30">কুড়িগ্রাম</option><option value="31">কুষ্টিয়া</option><option value="32">লালমনিরহাট</option><option value="33">লক্ষ্মীপুর</option><option value="34">মাদারীপুর</option><option value="35">মাগুরা</option><option value="36">মানিকগঞ্জ</option><option value="37">মেহেরপুর</option><option value="38">মৌলভীবাজার</option><option value="39">মুন্সীগঞ্জ</option><option value="40">ময়মনসিংহ</option><option value="41">নওগাঁ</option><option value="42">নড়াইল</option><option value="43">নারায়নগঞ্জ</option><option value="44">নরসিংদী</option><option value="45">নাটোর</option><option value="46">নেত্রকোণা</option><option value="47">নীলফামারী</option><option value="48">নোয়াখালী</option><option value="49">পাবনা</option><option value="50">পঞ্চগড়</option><option value="51">পটুয়াখালী</option><option value="52">পিরোজপুর</option><option value="53">রাজবাড়ী</option><option value="54">রাজশাহী</option><option value="55">রাঙ্গামাটি</option><option value="56">রংপুর</option><option value="57">সাতক্ষীরা</option><option value="58">শরিয়তপুর</option><option value="59">শেরপুর</option><option value="60">সিরাজগঞ্জ</option><option value="61">সুনামগঞ্জ</option><option value="62">সিলেট</option><option value="63">টাঙ্গাইল</option><option value="64">ঠাকুরগাঁও</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            
                                                <div class="col-md-4">
                                                    <div class="form-group" id="">
                                                        <select class="form-control2" id="" name="present-thana">
                                                            <option value="-1" selected="">থানা/উপজেলা নির্বাচন </option>
                                                            <option value="1103">আদমদীঘি</option><option value="1189">বগুড়া সদর</option><option value="1247">ধুনট</option><option value="1248">দুপচাঁচিয়া</option><option value="1270">গাবতলী</option><option value="1335">কাহালু</option><option value="1469">নন্দীগ্রাম</option><option value="1565">সারিয়াকান্দি</option><option value="1578">শাজাহানপুর</option><option value="1585">শেরপুর</option><option value="1588">শিবগঞ্জ</option><option value="1603">সোনাতলা</option><option value="1789">তানোর</option><option value="1790">লালিতগঞ্জ</option><option value="1791">খোদমোহনপুর</option><option value="1792">ভবানীগঞ্জ</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            
                                                <div class="col-md-4">
                                                    <div class="form-group" id="">
                                                        <input type="text" class="form-control2" placeholder="পোষ্ট কোড" id="">
                                                        <!--<select class="form-control2" id="present_p_office" name="present_p_office">
                                                            <option value="-1" selected="">পোস্ট অফিস নির্বাচন </option>
                                                            <option value="2714" selected="">দুপচাঁচিয়া</option><option value="2715">তালোড়া</option>
                                                        </select>-->
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                     </div>

                    <button class="accordion fa fa-plus">প্রাষঙ্গিক তথ্যাদি</button>
                        <div class="panel">
                            <p>...</p>
                            </div>
            </div>

  <div class="tab-pane fade container" id="myproduct">
    <section class="filter-product">
      <div class="container-fliud">
        <div class="container">
          	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
            
			<!-- row -->
			<div class="row">
                <div class="reg-btn">
                    <a href="#"> <button type="button" class="btn-getinvite1"> নতুন পণ্য রেজিশ্ট্রেশন</button></a>
                </div>
				<!-- ASIDE -->
				<div id="aside" class="col-lg-3">
					<!-- aside widget -->
					<div class="aside">
						<h3 class="aside-title">সাল</h3>
						<ul class="list-links">
							<li><a href="#">২০১৯</a></li>
							<li><a href="#"> ২০১৮</a></li>
							<li><a href="#">২০১৭</a></li>
							<li><a href="#">২০১৬</a></li>
						</ul>
					</div>
					
					<!-- aside widget -->
					<div class="aside">
						<h3 class="aside-title">ব্র্যান্ড:</h3>
						<ul class="list-links">
							<li><a href="#">নিক</a></li>
							<li><a href="#"> আডিড্যাস</a></li>
							<li><a href="#">পলো</a></li>
							<li><a href="#">ল্যাকস্ট</a></li>
						</ul>
					</div>
					<!-- /aside widget -->

					<!-- aside widget -->
					<div class="aside">
						<h3 class="aside-title">ক্যাটাগরি</h3>
						<ul class="list-links">
							<li><a href="#">লেদার ব্যাগ</a></li>
							<li><a href="#"> আডিড্যাস কেস</a></li>
							<li><a href="#">লেদার বেল্ট</a></li>
							<li><a href="#">স্মার্ট ওয়াচ</a></li>
						</ul>
					</div>
					<!-- /aside widget -->

					<!-- aside widget -->
					<div class="aside">
						<h3 class="aside-title">আউটলেট</h3>
						<ul class="list-links">
							<li><a href="#">বগুড়া সদর</a></li>
							<li><a href="#"> শেরপুর</a></li>
							<li><a href="#">কাহালো</a></li>
							<li><a href="#">সোনাতলা</a></li>
						</ul>
					</div>
					<!-- /aside widget -->
				</div>
				<!-- /ASIDE -->

				<!-- MAIN -->
				<div id="main" class="col-lg-9">
						<!-- row -->
						<div class="row">
							<!-- Product Single -->
							<div class="col-md-4 col-sm-6 col-xs-6">
								<div class="prdcer product product-single">
									<div class="product-thumb">
										<img width="230" src="./img/product01.png" alt="">
									</div>
									<div class="product-body">
										<h3 class="product-price">৳ ৩২.৫০ <del class="product-old-price">৳ ৪৫.০০</del></h3>
                                        <h2 class="product-name"><a href="#"><span>পণ্য নং : </span> বি৩২৪সি৪</a></h2>
										<h2 class="product-name"><a href="#">লেদার ব্যাগ</a></h2>
                                        <h3 class="product-price"><span>স্টক : ৫ </span><del class="product-old-price">৪৫</del></h3><br>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o empty"></i>
										</div>
									</div>
								</div>
							</div>
							<!-- /Product Single -->

							<!-- Product Single -->
							<div class="col-md-4 col-sm-6 col-xs-6">
								<div class="prdcer product product-single">
									<div class="product-thumb">
										<img width="230" src="./img/product02.png" alt="">
									</div>
									<div class="product-body">
										<h3 class="prdcer product-price">৳ ৩২.৫০</h3>
                                        <h2 class="product-name"><a href="#"><span>পণ্য নং : </span> বি৩২৪সি৪</a></h2>
										<h2 class="product-name"><a href="#">কালো ব্যান্ডের হাত ঘড়ি</a></h2>
                                        <h3 class="product-price"><span>স্টক : ৫ </span><del class="product-old-price">৪৫</del></h3><br>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o empty"></i>
										</div>
									</div>
								</div>
							</div>
							<!-- /Product Single -->

							<div class="clearfix visible-sm visible-xs"></div>

							<!-- Product Single -->
							<div class="col-md-4 col-sm-6 col-xs-6">
								<div class="prdcer product product-single">
									<div class="product-thumb">
										<img width="230" src="./img/product03.png" alt="">
									</div>
									<div class="product-body">
										<h3 class="product-price">৳ ৩২.৫০ <del class="product-old-price">৳ ৪৫.০০</del></h3>
                                        <h2 class="product-name"><a href="#"><span>পণ্য নং : </span> বি৩২৪সি৪</a></h2>
										<h2 class="product-name"><a href="#">ছেলেদের ওয়ালেট</a></h2>
                                        <h3 class="product-price"><span>স্টক : ৫ </span><del class="product-old-price">৪৫</del></h3><br>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o empty"></i>
										</div>
									</div>
								</div>
							</div>
							<!-- /Product Single -->

							<div class="clearfix visible-md visible-lg"></div>

							<!-- Product Single -->
							<div class="col-md-4 col-sm-6 col-xs-6">
								<div class="prdcer product product-single">
									<div class="product-thumb">
										<img width="230" src="./img/product04.png" alt="">
									</div>
									<div class="product-body">
										<h3 class="product-price">৳ ৩২.৫০</h3>
                                        <h2 class="product-name"><a href="#"><span>পণ্য নং : </span> বি৩২৪সি৪</a></h2>
										<h2 class="product-name"><a href="#">নিক সু নীল কালার</a></h2>
                                        <h3 class="product-price"><span>স্টক : ৫ </span><del class="product-old-price">৪৫</del></h3><br>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o empty"></i>
										</div>
									</div>
								</div>
							</div>
							<!-- /Product Single -->

							<div class="clearfix visible-sm visible-xs"></div>

							<!-- Product Single -->
							<div class="col-md-4 col-sm-6 col-xs-6">
								<div class="prdcer product product-single">
									<div class="product-thumb">
										<img width="230" src="./img/product05.png" alt="">
									</div>
									<div class="product-body">
										<h3 class="product-price">৳ ৩২.৫০</h3>
                                        <h2 class="product-name"><a href="#"><span>পণ্য নং : </span> বি৩২৪সি৪</a></h2>
                                        <h2 class="product-name"><a href="#">মেয়েদের লং বুট</a></h2>
                                        <h3 class="product-price"><span>স্টক : ৫ </span><del class="product-old-price">৪৫</del></h3><br>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o empty"></i>
										</div>
									</div>
								</div>
							</div>
							<!-- /Product Single -->

							<!-- Product Single -->
							<div class="col-md-4 col-sm-6 col-xs-6">
								<div class="prdcer product product-single">
									<div class="product-thumb">
								
										<img width="230" src="./img/product06.png" alt="">
									</div>
									<div class="product-body">
										<h3 class="product-price">৳ ৩২.৫০ <del class="product-old-price">৳ ৪৫.০০</del></h3>
                                        <h2 class="product-name"><a href="#"><span>পণ্য নং : </span> বি৩২৪সি৪</a></h2>
                                        <h2 class="product-name"><a href="#">মেয়েদের লেদার ব্যাগ</a></h2>
                                        <h3 class="product-price"><span>স্টক : ৫ </span><del class="product-old-price">৪৫</del></h3><br>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o empty"></i>
										</div>
									</div>
								</div>
							</div>
							<!-- /Product Single -->

							<div class="clearfix visible-md visible-lg visible-sm visible-xs"></div>

							<!-- Product Single -->
							<div class="col-md-4 col-sm-6 col-xs-6">
								<div class="prdcer product product-single">
									<div class="product-thumb">
										<img width="230" src="./img/product07.png" alt="">
									</div>
									<div class="product-body">
										<h3 class="product-price">৳ ৩২.৫০ <del class="product-old-price">৳ ৪৫.০০</del></h3>
                                        <h2 class="product-name"><a href="#"><span>পণ্য নং : </span> বি৩২৪সি৪</a></h2>
                                        <h2 class="product-name"><a href="#">মেয়েদের লেদার ব্যাগ কালো</a></h2>
                                        <h3 class="product-price"><span>স্টক : ৫ </span><del class="product-old-price">৪৫</del></h3><br>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o empty"></i>
										</div>
									</div>
								</div>
							</div>
							<!-- /Product Single -->

							<!-- Product Single -->
							<div class="col-md-4 col-sm-6 col-xs-6">
								<div class="prdcer product product-single">
									<div class="product-thumb">
										<img width="230" src="./img/product08.png" alt="">
									</div>
									<div class="product-body">
										<h3 class="product-price">৳ ৩২.৫০</h3>
                                        <h2 class="product-name"><a href="#"><span>পণ্য নং : </span> বি৩২৪সি৪</a></h2>
                                        <h2 class="product-name"><a href="#">ছেলেদের বেল্ট</a></h2>
                                        <h3 class="product-price"><span>স্টক : ৫ </span><del class="product-old-price">৪৫</del></h3><br>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o empty"></i>
										</div>
									</div>
								</div>
							</div>
							<!-- /Product Single -->

							<div class="clearfix visible-sm visible-xs"></div>

							<!-- Product Single -->
							<div class="col-md-4 col-sm-6 col-xs-6">
								<div class="prdcer product product-single">
									<div class="product-thumb">
										<img width="230" src="img/product01.png" alt="">
									</div>
									<div class="product-body">
                                        <h3 class="product-price">৳ ৩২.৫০ <del class="product-old-price">৳ ৪৫.০০</del></h3>
                                        <h2 class="product-name"><a href="#"><span>পণ্য নং : </span> বি৩২৪সি৪</a></h2>
                                        <h2 class="product-name"><a href="#">লেদার ব্যাগ</a></h2>
                                        <h3 class="product-price"><span>স্টক : ৫ </span><del class="product-old-price">৪৫</del></h3><br>
                                        <div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star-o empty"></i>
										</div>
									</div>
								</div>
							</div>
							<!-- /Product Single -->
						</div>
						<!-- /row -->
				</div>
				<!-- /MAIN -->
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
   </div>
 </div>
</section>
            </div>

            <div class="tab-pane fade container" id="payment">
                    <p>jhfsdlkfjksdfjsdklfj</p>
            </div>
                        
            <div class="tab-pane fade container" id="socialWork">
                <div class="social-work">
                    <div class="row">
                        <div class="form-group col-lg-12">
                            <input type="checkbox" id="chk" name="chkbox" onclick="showHide()"> 
                            <span class="doner">ডোনার :</span>
                            <br>
                            <form class="hidden">
                                <input type="checkbox" name="chkbox">
                                <lebel>রক্তদান</lebel>
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
                                <br>
                                <input type="checkbox" name="chkbox">
                                <lebel>মরোনত্তর চক্ষু / কিডনি</lebel>
                            </form>
                        </div>
                        
                        <div class="form-group col-lg-6">
                            <input type="checkbox" id="chk" name="chkbox"> 
                            <span>ফ্রি ভলান্টিয়ার :</span><br>
                        <form class="hidden" action="">
                            <lebel>প্রতিষ্ঠানের নাম</lebel>
                            <input type="text" class="form-control2" id="" placeholder="" value="">
                            <lebel>সময়কাল</lebel>
                            <input type="text" class="form-control2" id="" placeholder="" value="">
                            <lebel>ভূমিকা</lebel>
                            <input type="text" class="form-control2" id="" placeholder="" value="">
                        </form>
                        </div>
                        
                        <div class="form-group col-lg-6">
                            <input type="checkbox" name="chkbox" id="chk"> 
                            <span>পেইড ভলান্টিয়ার :</span><br>
                        <form class="hidden" action="">
                            <lebel>প্রতিষ্ঠানের নাম</lebel>
                            <input type="text" class="form-control2" id="" placeholder="" value="">
                            <lebel>সময়কাল</lebel>
                            <input type="text" class="form-control2" id="" placeholder="" value="">
                            <lebel>ভূমিকা</lebel>
                            <input type="text" class="form-control2" id="" placeholder="" value="">
                        </form>
                        </div>
                        
                        <div class="form-group col-lg-6">
                            <input type="checkbox" name="chkbox" id="chk"> 
                            <span>কন্টিবিউশন :</span><br>
                        <form class="hidden" action="">
                            <lebel>প্রতিষ্ঠানের নাম</lebel>
                            <input type="text" class="form-control2" id="" placeholder="" value="">
                            <lebel>অনুদান</lebel>
                            <input type="text" class="form-control2" id="" placeholder="" value="">
                        </form>
                        </div>
                        
                        <div class="form-group col-lg-6">
                            <input type="checkbox" name="chkbox" id="chk"> 
                            <span>সম্মাননা :</span><br>
                        <div class="award hidden">
                            <div class="row"> 
                                <div class="col-lg-6">
                              <div class="column">
                                <img src="wedding.jpg">
                                <img src="rocks.jpg">
                                <img src="falls2.jpg">
                                <img src="paris.jpg">
                                <img src="nature.jpg">
                                <img src="mist.jpg">
                                <img src="paris.jpg">
                              </div>
                              <div class="column">
                                <img src="underwater.jpg">
                                <img src="ocean.jpg">
                                <img src="wedding.jpg">
                                <img src="mountainskies.jpg">
                                <img src="rocks.jpg">
                                <img src="underwater.jpg">
                              </div> 
                              <div class="column">
                                <img src="wedding.jpg">
                                <img src="rocks.jpg">
                                <img src="falls2.jpg">
                                <img src="paris.jpg">
                                <img src="nature.jpg">
                                <img src="mist.jpg">
                                <img src="paris.jpg">
                              </div>
                              <div class="column">
                                <img src="underwater.jpg">
                                <img src="ocean.jpg">
                                <img src="wedding.jpg">
                                <img src="mountainskies.jpg">
                                <img src="rocks.jpg">
                                <img src="underwater.jpg">
                              </div>
                              </div>
                            </div>
                            </div>
                        </div>
                        
                    </div>   
                </div>
            </div>
                        
            <div class="tab-pane fade container" id="eduOccu">
                <button class="accordion fa fa-plus">স্কুল ও কলেজ</button>
                  <div class="panel">
                     <div class="edu">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group col-md-12">
                                  <label for="">কলেজ / বিশ্ববিদ্যালয়<abbr title="Required" class="required"></abbr></label>
                                  <input type="text" class="form-control2" placeholder="" value="Azizul Haque Govt. College" name="txtFirstName" id="txtFirstName">
                                </div>

                                <div class="form-group col-md-12">
                                  <label for="">সময়কাল (বছর)</label>
                                  <input type="text" class="form-control2" placeholder="" value="2017" name="txtLastName" id="txtLastName">
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="">ডিগ্রী</label>
                                    <input type="text" class="form-control2" placeholder="" value="B.Sc in CSE" name="txtFName" id="txtFName">
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="">মেজর / গ্রুপ </label>
                                    <input type="text" class="form-control2" placeholder="" value="" name="txtMName" id="txtMName">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group col-md-12">
                                  <label for="">স্কুল / কলেজ<abbr title="Required" class="required"></abbr></label>
                                  <input type="text" class="form-control2" placeholder="" value="Azizul Haque Govt. College" name="txtFirstName" id="txtFirstName">
                                </div>

                                <div class="form-group col-md-12">
                                  <label for="">সময়কাল (বছর)</label>
                                  <input type="text" class="form-control2" placeholder="" value="2017" name="txtLastName" id="txtLastName">
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="">ডিগ্রী</label>
                                    <input type="text" class="form-control2" placeholder="" value="SSC" name="txtFName" id="txtFName">
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="">মেজর / গ্রুপ </label>
                                    <input type="text" class="form-control2" placeholder="" value="Science" name="txtMName" id="txtMName">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="accordion fa fa-plus">ট্রেইনিং</button>
                  <div class="panel">
                      <div id="trining">
                          <div id="trining-1">
                                 <div class="trining-all-info">
                                     <div class="sub-header">
                                        <div class="edit-tools">
                                            <button class="edit-btn"><i class="fa fa-pencil"></i> এডিট</button>
                                        </div>
                                     </div>
                                     <form class="row" id="trForm" action="" method="post">
                                         <div class="col-md-6">
                                             <div class="row">
                                                 <div class="form-group col-md-12">
                                                     <label for="">ট্রেনিং এর নাম&nbsp;<abbr title="Required" class="required"></abbr></label>
                                                     <input type="text" class="form-control2" placeholder="" id="" name="txtTitle" value="Industrial Attachment Training Program">
                                                 </div>
                                                 <div class="form-group col-md-12">
                                                     <label for="">ট্রেনিং এর টপিক</label>
                                                     <textarea class="form-control3" name="txtTopic" cols="30" rows="5">On Survey of Existing Electrical load, design and staking of electrical distribution line 33/11 KV Sub-Station.</textarea>
                                                 </div>
                                                 <div class="form-group col-md-12">
                                                     <label for="">ট্রেনিং প্রতিষ্ঠানের নাম &nbsp;<abbr title="Required" class="required"></abbr></label>
                                                     <input type="text" class="form-control2" placeholder="" id="" name="txtInstitute" value="Bogra Polly Bidhyut Samiti">
                                                 </div>
                                                 <div class="form-group col-md-12">
                                                     <label for="">লোকেশন</label>
                                                     <input type="text" class="form-control2" placeholder="" id="" name="txtLocation" value="Bogra">
                                                 </div>
                                             </div>
                                         </div>
                                         <div class="col-md-6">
                                             <div class="row">
                                                 <div class="form-group col-md-12">
                                                     <label for="">দেশের নাম&nbsp;<abbr title="Required" class="required"></abbr></label><input type="text" class="form-control2" id="" placeholder="" name="txtCountry" value="Bangladesh">
                                                 </div>
                                                 <div class="form-group col-md-12">
                                                     <label for="">ট্রেনিং এর বছর&nbsp;<abbr title="Required" class="required"></abbr></label>
                                                     <select class="form-control2" name="drpYear" id="">
                                                         <option value="" selected="selected">Select</option><option value="2024">2024</option><option value="2023">2023</option><option value="2022">2022</option><option value="2021">2021</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014" selected="">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option>
                                                     </select>
                                                 </div>
                                                 <div class="form-group col-md-12">
                                                     <label for="">ট্রেনিং এর সময়কাল&nbsp;&nbsp;<abbr title="Required" class="required"></abbr></label>
                                                     <input type="text" class="form-control2" placeholder="" id="" name="txtDuration" value="3 Month">
                                                 </div>
                                             </div>
                                         </div>
                                     </form>
                                  </div>
                             </div>  
                          </div>
                    </div>
                
                <button class="accordion fa fa-plus">পেশা</button>
                  <div class="panel">
                      ....
                    </div>
                <button class="accordion fa fa-plus">দক্ষতা</button>
                  <div class="panel">
                      <div class="skill-area">
                        <div class="skill-inner">
                               <div class="skill-all-info">
                                   <div class="sub-header">
                                       <div class="edit-tools">
                                            <button class="edit-btn"><i class="fa fa-pencil"></i> এডিট</button>
                                        </div>
                                   </div>
                                   <form class="row" id="skillForm">
                                       <div class="form-group col-lg-12">
                                           <div class="form-group col-lg-6">
                                               <label for="">দক্ষতা <span class="required">(সর্বোচ্চ ১০)</span></label>
                                               <input type="text" id="" name="txtSkillrea" class="form-control2" placeholder="দক্ষতা যুক্ত করুন...">
                                               <div class="chip-container" id="">
                                                   <div id="" class="">
                                                       <span>Computer skill</span>
                                                   </div>
                                                   <div id="" class="">
                                                       <span>Graphics Design</span>
                                                   </div>
                                                   <div id="" class="">
                                                       <span>HTML5 &amp; CSS3</span>
                                                   </div>
                                                   <div id="" class="">
                                                       <span>Ms Office</span>
                                                   </div>
                                                   <div id="" class="">
                                                       <span>Web Design</span>
                                                   </div>
                                              </div> 
                                           </div> 
                                          
                                           <div class="form-group col-md-6"> 
                                               <label for="">দক্ষতার বিবরণ&nbsp;</label>
                                               <textarea name="txtDescription" id="txtDescription" cols="30" rows="3" class="form-control3">I have an 2 Years Experience Web &amp; Graphics Design Plus HTML &amp; CSS. and more 5 years MS office.</textarea>
                                           </div>
                                           <div class="form-group col-md-6">
                                               <label for="">পাঠ্যের  বাহিরের কার্যক্রম </label>
                                               <textarea name="txtActivities" id="txtActivities" cols="30" rows="3" class="form-control3"></textarea>
                                           </div>
                                      </div>
                                  </form>
                                 </div>
                               </div>
                             </div>
                           </div>
                        </div>
                
                
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

      
<section class="footer bottom">
    <div class="container-fluid text-center pb-2 pt-2">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                
                </div>
                <div class="col-md-2 rb">
                    <a href="http://www.borobazar.shop"><span class="borobazar-name"><i class="fa fa-copyright"></i><small>বড়বাজার.শপ</small></span></a>
                </div>
                
                <div class="col-md-2">
                    <small class="bottom-text">সর্বস্বত্ব সংরক্ষিত ২০১৯</small>
                </div>
            </div>       
        </div>
    </div>
</section>
      
      
                       
      
      
      
      
      
      
      

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
      

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

<!--sidebar-->
	 <script type="text/javascript">
        $('.btn').on("click", function(){
			$('.btn').toggleClass('btnc');
			$('.main-menu').toggleClass('side');
		});
     </script>
	 <!--/ end sidebar-->

<!--<script type="text/javascript">
        // $(window).on('load', function () {
        $('#editResumeModal').modal('show'); 
        // });
        $(document).ready(function () {
            $(document).on('change', 'input[type=radio]', function () {
                if ($(this).parents('.address-wrap').find('input[type=radio].outside:checked').length) {
                    $(this).parents('.address-wrap').find('.select-country').removeClass('hide');
                    $(this).parents('.address-wrap').find('.select-wrap').addClass('hide');
                } else {
                    $(this).parents('.address-wrap').find('.select-country').addClass('hide');
                    $(this).parents('.address-wrap').find('.select-wrap').removeClass('hide');
                }
            });
            //Code for (Same as Present Address) checkbox 
            $(document).on('click', '.address-wrap .checkbox .same-address', function () {
                if ($(this).is(':checked')) {
                    $(this).parents('.address-wrap').find('.disable-area').addClass('disable').find(
                        'input,select').prop('disabled', true); 
                    console.log('hi');
                } else {
                    $(this).parents('.address-wrap').find('.disable-area').removeClass('disable').find(
                        'input,select').prop('disabled', false);
                }
            });
                //New address format view mode code 
                $(document).on('click', '#editResumeModal .go-review', function () {
                    FormValidation_ForPopUp('BN');
                });

                $(document).on('click', '#editResumeModal .go-back', function () {
                    $(this).parents('.modal').addClass('edit-mode-wrap').removeClass('view-mode-wrap');
                    $('#editResumeModal .permanent-address').removeClass('hide');
                });
            //End of new code 

            //Edit button Click 
            $("#addressEditBtn").click(function(){
                var Location_PresentValue = $('#addressForm input[name=presentLocation]:checked').val(); 
	            var Location_PermanentValue = $('#addressForm input[name=permanentLocation]:checked').val();
                $(".address_Previous").addClass("hidden");

                //New condition
                if(Location_PresentValue == 1){
                    $("#countrySelectID").removeClass("hide");
                }
                if(Location_PermanentValue == 1){
                    $("#permanentCountryID").removeClass("hide");
                }    
            });
            //Old code for close button 
            // $("#addressCloseBtn").click(function(){
            //     $(".address_Previous").removeClass("hidden");
            //     $("#countrySelectID").addClass("hide");
		    //     $("#permanentCountryID").addClass("hide");
            // });
            
            //new code 8.12.2018
            //Close button action 
            $("#addressCloseBtn").click(function(){
                
                    $(".address_Previous").removeClass("hidden");
                    $("#countrySelectID").addClass("hide");
                    $("#permanentCountryID").addClass("hide");
                
            });
            
            $("#btnAdd_adrs").click(function(){
				//$(".noData_adrs").css("display","none");
				$(this).parents("#noData_adrs").css("display","none");
				$(".adrs_0").css("display","block");
				$('#addressEditBtn').trigger('click');
			});

        });
    </script>-->
        <script type="text/javascript">
            function showHide(){
                var checkbox = document.getElementById ("chk");
                var hiddenform = document.getElementByClassName("hidden");
                
                for (var 1 = 0; 1 != hiddenform.length: 1++){
                    if (checkbox.checked){
                        hiddenform[1].style.display = "block";
                    }
                }
            }
        </script>

  </body>
</html>
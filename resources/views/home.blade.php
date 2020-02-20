@extends('layouts.app')

@section('content')
<section  class="carosul">
    <div class="container">
        <div class="row">
            <div class="owl-carousel owl-theme">
                <div class="single-product-sildes">
                    <img src="{{asset('img/wc-bg.svg')}}" class="owl-img-responsive">
                    <div class="caption">
                    </div>
                </div>
                
                <div class="single-product-sildes">
                    <img src="{{asset('img/wc-bg2.svg')}}" class="owl-img-responsive">
                    <div class="caption">

                    </div>
                </div>
                 
                <div class="single-product-sildes">
                    <img src="{{asset('img/wc-bg3.svg')}}" class="owl-img-responsive">
                    <div class="caption">

                    </div>
                </div>
                
                <div class="single-product-sildes">
                    <img src="{{asset('img/wc-bg4.svg')}}" class="owl-img-responsive">
                    <div class="caption">

                    </div>
                </div>
                <div class="single-product-sildes">
                    <img src="{{asset('img/wc-bg5.svg')}}" class="owl-img-responsive">
                    <div class="caption">
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>

 <section class="whybb">
    <div id="whybb" class="container-fluid pt-5 pb-5">
        <div class="container">
            <!--<h2 class="main-hl0">বড়বাজার কেন?</h2>-->
            <div class="row">
              <div class="col-md-6">
                  <h2 class="main-hl2">নিরাপদ কেনাবেচা</h2>
                  <p class="para">নিরাপত্তা সর্বপ্রথম। এস এস এল সনদপ্রাপ্ত ওয়েবসাইট https:// (the s stands for <q>secure</q>), যা যেকোন কার্ড এবং অনলাইন পেইমেন্ট নিরাপত্তা নিশ্চিত করে। প্রত্যেকটি ক্রেতা এবং বিক্রেতার একাউন্ট যাচায় শেষে তাদের প্রোফাইল র‌্যাংকিং প্রকাশ করা থাকছে, যা ফ্রড লেনদেন থেকে বিরত রাখবে। <a href="https://www.borobazar.shop" class="cl-fg">বড়বাজার</a> অর্থ প্রদানের মুহুর্ত থেকে সরববাহের মুহুর্ত পর্যন্ত সুরক্ষা নিশ্চিত করে এবং এছাড়া আগে সমস্যাকে সনাক্ত করার জন্য সর্বাধিক উন্নত জালিয়াতি প্রুযুক্তি ব্যবহার করা হয়েছে। কারো আর্থিক বা ব্যক্তিগত তথ্য প্রকাশ করা হয় না। এবং যে কারো ক্রয়ের কোনও সমস্যা থাকলে এবং লেনদেনকারী ক্রেতা সুরক্ষাগুলির প্রয়োজনীয়তা পুরণ করে, <a href="https://www.borobazar.shop" class="cl-fg">বড়বাজার</a> ক্রয়ের পরিমাণ এবং আসল শিপিংয়ের খরচগুলি ফেরত দিতে প্রতিজ্ঞ।</p>
                  <input class="form-mail" type="email" id="email" name="email" placeholder="আপনার ইমেইল দিন" aria-label="email">
                  <button type="button" class="btn-getinvite4">আমন্ত্রণ পেতে</button>
                  </div>

                  <div class="col-md-6">
                  <img class="wdhg img-responsive" src="{{asset('img/secure-buy_sell.svg')}}">
                  </div>
            </div>
        </div>
    </div>
</section>
<section class="bbmessage bg">
    <div class="container-fluid pt-5 pb-5">
    <div class="container">
        <div class="row">
        <div class="col-md-6">
            <img class="img-responsive" src="{{asset('img/customer-service.svg')}}">
            </div>
            <div class="col-md-6">
           <h2 class="main-hl2">গ্রাহক সেবাই উতকর্ষতা</h2>
                <p class="para">গ্রাহকরাই এক একজন ব্রান্ড প্রমোটর - এই নীতিতে বিশ্বসী <a href="https://www.borobazar.shop" class="cl-fg">বড়বাজার</a>। সমন্বয়, সহযোগিতা ও সহমর্মিতা মিশ্রিত গ্রাহকসেবা একমাত্র মূলধন। গ্রাহকের প্রত্যেকটি ফিডব্যাক, প্রশ্ন আমাদের উত্তরোত্তর বুদ্ধির সোপান। ২৪ ঘন্টা ৭ দিন <a href="https://www.borobazar.shop" class="cl-fg">বড়বাজার</a> ‘গ্রাহক সেবা টিম’ থকাছে আপনার সেবা নিশ্চিত করতে।</p>
            </div>
        </div>
        </div>
    </div>
</section>
    
<section>
    <div class="container-fluid pt-5 pb-5">
    <div class="container">
        <div class="row">
        <div class="col-md-6">
            <h2 class="main-hl2">সবুজ পৃথিবী বিনির্মাণে ভোট প্রদান</h2>
  <p class="para">আমরা যেসব পণ্য বা পরিষেবা নিজেদের প্রয়োজনে কিনছি পক্ষান্তরে সেই পণ্য বা পরিষেবা প্রদানকারী প্রতিষ্ঠানকে সমর্থন জানাচ্ছি। হয়তো এমন বিজনেস কে বড় করতে পরোক্ষভাবে অনুপ্রাণিত করছি, যারা পরিবেশ ও স্বাস্থের জন্য ঝুঁকিপূর্ণ। কাজেই এমন পণ্য ও পরিষেবাদি ক্রয় করতে <a href="https://www.borobazar.shop" class="cl-fg">বড়বাজার</a> প্রতিজ্ঞাবদ্ধ, যা মানুষের স্বাস্থের এবং পরিবেশের উপর কম প্রভাব ফেলে এবং একই উদ্দেশ্যে কাজ করে এমন প্রতিযোগিতামূলক পণ্য বা পরিষেবাদির প্রণোদনা দিতে প্রতিজ্ঞ।</p>
            </div>
            <div class="col-md-6">
           <img class="img-responsive" src="{{asset('img/green-world.svg')}}">
            </div>
        </div>
        </div>
    </div>
</section>
<section class="bg">
    <div class="container-fluid pt-5 pb-5">
    <div class="container">
        <div class="row">
        <div class="col-md-6">
             <img class="img-responsive" src="{{asset('img/economy.svg')}}">
            </div>
            <div class="col-md-6">
                <h2 class="main-hl2">মুক্তবাজার অর্থনীতি চর্চা</h2>
  <p class="para">অধিকাংশ অর্থনৈতিক সিদ্ধান্ত ক্রেতাদের এবং বিক্রেতাদের দ্বারা তৈরি করা হয়, সরকার নয়। একটি প্রতিযোগিতামুলক বাজার অর্থনীতি তার সংস্থার দক্ষ ব্যবহার প্রচার করে। আবার তথ্যকথিত বিক্র্রেতা (মধ্য স্বত্বভোগী ব্যবসায়ী), যারা কেক্রা এবং উতপাদনকারীদের কে জিম্মি করে নিজেদের বিনিযোগের রির্টান নিশ্চিত করতে ব্যস্ত, তাদের হাত থেকে অর্থনৈতিক সিদ্ধান্ত ক্রেতা ও উতপাদনকারীর দ্বারা তৈরি করতে <a href="https://www.borobazar.shop" class="cl-fg">বড়বাজার</a> প্রতিজ্ঞাবদ্ধ।</p>
            </div>
        </div>
        </div>
    </div>
</section>
    
<section class="enterprenure">
    <div class="container-fluid text-center pt-5 pb-5">
    <div class="container">
        <div class="row">
        <div class="col-md-12">
             <img class="sellmr img-responsive" src="{{asset('img/enterprenure.svg')}}">
            </div>
        </div>
        <div class="col-md-12">
                <h2 class="main-hl3">উদ্যোক্তা তৈরিতে উদ্বুদ্ধকরণ</h2>
        <p class="cpara">প্রত্যেক মানুষের মাঝে রয়েছে অপরিসিম সৃষ্টিশীলতা, রয়েছে ভিন্নভিন্ন দক্ষতা ও অনন্য ধারণা। <a href="{{route('home')}}" class="cl-fg">বড়বাজার</a> সকলের সৃষ্টিশীলতা কে তাদের পুঁজি হিসেবে রুপান্তরিত করতে সহায়তা এবং পাশাপাশি তাদের উৎপাদিত পণ্য বা সেবা সবার মাঝে উপস্থাপন করে প্রত্যেক কে এক একজন সফল উদ্যোক্তা হিসেবে প্রতিষ্ঠিত করতে প্রতিশ্রুতিবদ্ধ।</p>
            </div>
        </div>
    </div>
</section>
<section class="openshop-area bg">
    <div id="openashop" class="container-fluid pt-5 pb-5">
        <h4 class="hederh1">শপ খুলুন</h4>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="main-hl4">লক্ষ লক্ষ ক্রেতারা অপেক্ষা করছে কী আছে আপনার ‘শপ’ এ তা দেখতে</h2>
                    <p class="cpara">দেশের একমাত্র সৃজনশীল ই-কর্মাস <a href="{{route('home')}}" class="cl-fg">বড়বাজার</a> এ যোগ দিয়ে এখুনি ঘরে বসে আপনার অনন্য সব পণ্য ও সেবা কেনার স্বাদ পেতে সুযোগ করে দিন দেশের সকলপ্রান্তের মানুষকে।</p>
                </div>
         <div class="col-md-4">
          <div class="boxshwd">
              <img class="openshopsvg" src="{{asset('img/badge.svg')}}" alt="education">
              <h4 class="heading">অতি মূল্যবান</h4>
              <p class="heading-text">কেবলমাত্র ১০ (দশ) টাকা দিয়ে আপনার পণ্য / সেবাটি তালিকাভুক্ত করুন <a href="{{route('home')}}" class="cl-fg">বড়বাজার</a> এ - এরপর যখন আপনি পণ্য বিক্রয় করবেন তখন আপনাকে শুধুমাত্র লেনদেন এবং পেমেন্ট প্রক্রিয়াকরণ ফি প্রদান করতে হবে।</p>
              <a href="#" class="morebtn">
                  <button type="button" class="btn-getinvite2">বিস্তারিত</button>
              </a>
          </div>
          </div>
          <div class="col-md-4">
              <div class="boxshwd">
                  <img class="openshopsvg" src="{{asset('img/laptop.svg')}}" alt="education">
                  <h4 class="heading">শক্তিশালী সরঞ্জাম</h4>
                  <p class="heading-text"> <a href="{{route('home')}}" class="cl-fg">বড়বাজার</a> এর সরঞ্জামগুলি এবং পরিষেবাগুলি আপনার ব্যবসাকে পরিচালনা করা, প্রচার করা এবং বাড়ানো সহজ করে তুলবে।</p>
                  <a href="#" class="morebtn"><button type="button" class="btn-getinvite2">বিস্তারিত</button></a>
              </div>
          </div>
          <div class="col-md-4">
              <div class="boxshwd">
              <img class="openshopsvg" src="{{asset('img/education.svg')}}" alt="education">
              <h4 class="heading">সার্পোট এবং শিক্ষা</h4>
              <p class="heading-text"> <a href="{{route('home')}}" class="cl-fg">বড়বাজার</a> সহায়তা বিশেষজ্ঞদের কাছে পৌছাতে পারবেন যে কোনও সময়, যখনি আপনার প্রযোজন একটা বন্ধুত্বপূর্ণ হাত এবং বিক্রেতা হ্যান্ডবুকে পেতে পারবেন সফল দোকান চালানোর টিপস।</p>
              <a href="#" class="morebtn"><button type="button" class="btn-getinvite2">বিস্তারিত</button></a>
              </div> 
          </div>
        </div>
        </div>
        </div>
            <div class="open1shop text-center pt-5 pb-5">
                <div class="col-lg-12">
                 <img class="startshop" src="{{asset('img/shop.svg')}}" alt="education">
                     <h4 class="cardh"> আজই বিক্রি শুরু করুন</h4>
                   <a href="{{route('register')}}" target="_blank"> <button type="button" class="btn-getinvite1"> এখনই খুলে ফেলুন বড়বাজার শপ</button></a>
              </div>
          </div>
      </div>
</section>
@endsection

@section('js-part')
<script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
      } else {
        document.getElementById("myBtn").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function go2topFunction() {
      document.body.scrollTop = 0; // For Safari
      document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
</script>

 
    
    <!--scroll indicator-->
    <script>
            // When the user scrolls the page, execute myFunction
    window.onscroll = function() {myFunction()};
    
    function myFunction() {
      var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
      var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
      var scrolled = (winScroll / height) * 100;
      document.getElementById("myBar").style.width = scrolled + "%";
    }
    </script>
    <!--end scroll indicator-->          

    <script type="text/javascript"> 
        // A $( document ).ready() block.
        $( document ).ready(function() {
            if (document.cookie.indexOf('visited=true') == -1 && window.auth_user==undefined){
                var lifetime = 1000*60*45;
                var expires = new Date((new Date()).valueOf() + lifetime);
                document.cookie = "visited=true;expires=" + expires.toUTCString();
                setTimeout(function(){
                    $('#loginModalBlade').modal({show:true});
                },10000); // 1000ms = 1 second
            }
        });     
    </script>

<script>
    var toggler = document.getElementsByClassName("caret");
     var i;
 
     for (i = 0; i < toggler.length; i++) {
       toggler[i].addEventListener("click", function() {
       this.parentElement.querySelector(".nested").classList.toggle("active");
       this.classList.toggle("caret-down");
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
  <!-- owl Carousel -->     
<script>
var owl = $('.owl-carousel');
    owl.owlCarousel({
        items:1,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true
    });
    $('.play').on('click',function(){
    owl.trigger('play.owl.autoplay',[3000])
    })
    $('.stop').on('click',function(){
    owl.trigger('stop.owl.autoplay')
    })
</script>
<!--/ end owl Carousel-->
<!-- owl Carousel -->     
<script>
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items:3,
        loop:true,
        margin:10,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true
    });
    $('.play').on('click',function(){
        owl.trigger('play.owl.autoplay',[3000])
    })
    $('.stop').on('click',function(){
        owl.trigger('stop.owl.autoplay')
    })
</script>

@endsection

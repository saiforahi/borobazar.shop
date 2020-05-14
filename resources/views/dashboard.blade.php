@extends('layouts.app')
@section('content')
    <!--carosul Section-->
       
 <section  class="carosul">
    <div class="container">
        <div class="row">
            <div class="owl-carousel owl-theme">
                <div class="single-product-sildes">
                   <img src="{{asset('/img/banner01.png')}}">
               </div>
                <div class="single-product-sildes">
                   <img src="{{asset('/img/slide-3.png')}}">
               </div>
                <div class="single-product-sildes">
                   <img src="{{asset('/img/slide-4.png')}}">
               </div> 
           </div>
        </div> 
</section>
    <!--end carosul Section-->

<!--services page Section-->
<section class="services-page">
    <div class="container-fluid pt-5 pb-5">
    <div class="container">
        <h4 class="title">হোম পেজ</h4>
        <div class="row">

         <div class="col-md-1">
            <div class="tooltip services-inner">
                <a href="{{route('blood-donation')}}"><img src="{{asset('/img/blood-drop.svg')}}"></a>
                <span class="tooltiptext">রক্তদান</span>
            </div>
        </div>
            
          <div class="col-md-1">
            <div class="tooltip services-inner">
                <a href="{{route('tutor-home')}}"><img src="{{asset('/img/graduate-student-avatar.svg')}}"></a>
                <span class="tooltiptext">গৃহশিক্ষক</span>
            </div>
        </div>
            
          <div class="col-md-1">
            <div class="tooltip services-inner">
                <a href="#"><img src="{{asset('/img/home-services.svg')}}"></a>
                <span class="tooltiptext">হোম সেবা</span>
            </div>
        </div>
            
        <div class="col-md-1">
            <div class="tooltip services-inner">
                <a href="#"><img src="{{asset('/img/lawyer.svg')}}"></a>
                <span class="tooltiptext">আইন সেবা</span>
            </div>
        </div>
            
         <!-- <div class="col-md-1">
          <div class="tooltip services-inner">
             <a href="categories-list/Services/Blood/blood-donation.html"><img src="img/male-user.svg"></a>
          <span class="tooltiptext">পেজ</span>
          </div>
        </div>
          <div class="col-md-1">
          <div class="tooltip services-inner">
             <a href="categories-list/Services/Blood/blood-donation.html"><img src="img/male-user.svg"></a>
          <span class="tooltiptext">পেজ</span>
          </div>
        </div>
          <div class="col-md-1">
          <div class="tooltip services-inner">
             <a href="categories-list/Services/Blood/blood-donation.html"><img src="img/male-user.svg"></a>
          <span class="tooltiptext">পেজ</span>
          </div>
        </div>
            <div class="col-md-1">
          <div class="tooltip services-inner">
             <a href="categories-list/Services/Blood/blood-donation.html"><img src="img/male-user.svg"></a>
          <span class="tooltiptext">পেজ</span>
          </div>
        </div> 
            
          <div class="col-md-1">
          <div class="tooltip services-inner">
             <a href="categories-list/Services/Blood/blood-donation.html"><img src="img/male-user.svg"></a>
          <span class="tooltiptext">পেজ</span>
          </div>
        </div>
          <div class="col-md-1">
          <div class="tooltip services-inner">
             <a href="categories-list/Services/Blood/blood-donation.html"><img src="img/male-user.svg"></a>
          <span class="tooltiptext">পেজ</span>
          </div>
        </div>
          <div class="col-md-1">
          <div class="tooltip services-inner">
             <a href="categories-list/Services/Blood/blood-donation.html"><img src="img/male-user.svg"></a>
          <span class="tooltiptext">পেজ</span>
          </div>
        </div>
            <div class="col-md-1">
          <div class="tooltip services-inner">
             <a href="categories-list/Services/Blood/blood-donation.html"><img src="img/male-user.svg"></a>
          <span class="tooltiptext">পেজ</span>
          </div>
        </div>-->
            </div>
        </div>
    </div>
</section>
<!--end services page Section-->

<!--Support Section-->
<section class="peakup">
    <div class="container-fluid pt-5 pb-5">
    <div class="container">
        <div class="row">
         <div class="col-md-3">
          <div class="boxshwd2">
              <img src="img/shipping-truck.svg" class="pdmrt">
              <h6 class="heading-text">দ্রুত ডেলিভারি</h6> 
          </div>
        </div>
          <div class="col-md-3">
              <div class="boxshwd2">
              <img src="img/headphone.svg" class="pdmrt">
              <h6 class="heading-text">২৪/৭ ফোনকল সেবা</h6> 
          </div>
        </div>
          <div class="col-md-3">
              <div class="boxshwd2">
              <img src="img/cash-on-delivery.svg" class="pdmrt">
              <h6 class="heading-text">ক্যাশ অন ডেলিভারি</h6>
          </div>
        </div>
            <div class="col-md-3">
              <div class="boxshwd2">
              <img src="img/money-back-gurranty.svg" class="pdmrt">
              <h6 class="heading-text">টাকা ফেরত গ্যারান্টি</h6>
          </div>
        </div>
            </div>
        </div>
    </div>
</section>
<!--end Support Section-->

<section class="product-listing-area">
    <div class="container">
        <div class="row p-listing-inner">
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-6 col-sm-8">
                        <div class="p-list-text">
                            <h3>মেন্স</h3>
                            <ul class="list-links">
                                <li><a href="#">জ্যাকেট</a></li>
                                <li><a href="#">হুডি</a></li>
                                <li><a href="#">সুট</a></li>
                                <li><a href="#">জিনস</a></li>
                                <li><a href="#">কাজুয়াল প্যান্টস</a></li>
                                <li><a href="#">সানগ্লাস</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-4">
                        <div class="p-list-img">
                            <img src="img/product-l-1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-6 col-sm-8">
                        <div class="p-list-text">
                            <h3>ওমেন</h3>
                            <ul class="list-links">
                                <li><a href="#">জ্যাকেট</a></li>
                                <li><a href="#">হুডি</a></li>
                                <li><a href="#">সুট</a></li>
                                <li><a href="#">জিনস</a></li>
                                <li><a href="#">কাজুয়াল প্যান্টস</a></li>
                                <li><a href="#">সানগ্লাস</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-4">
                        <div class="p-list-img">
                            <img src="img/product-l-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-6 col-sm-8">
                        <div class="p-list-text">
                            <h3>আকসেসরিজ</h3>
                            <ul class="list-links">
                                <li><a href="#">জ্যাকেট</a></li>
                                <li><a href="#">হুডি</a></li>
                                <li><a href="#">সুট</a></li>
                                <li><a href="#">জিনস</a></li>
                                <li><a href="#">কাজুয়াল প্যান্টস</a></li>
                                <li><a href="#">সানগ্লাস</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-4">
                        <div class="p-list-img">
                            <img src="img/product-l-3.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--================Featured Product Area =================-->
<section class="feature-product-area">
    <div class="container">
        <div class="f-p-inner">
            <div class="row">
                <div class="col-lg-3">
                    <div class="f-product-left">
                        <!--<div class="owl-nav disabled">
                            <button type="button" role="presentation" class="owl-prev">
                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                            </button>
                            <button type="button" role="presentation" class="owl-next">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                            </button>
                        </div>-->
                        <div class="s-m-title">
                            <h2>ফীচারড প্রোডাক্ট</h2>
                        </div>
                        <div class="f-product-inner">
                            <div class="media">
                                <div class="d-flex">
                                    <img src="img/f-p-1.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <h4>টাইটান হাত ঘড়ি</h4>
                                    <h5>৳ ৪৫০.০৫</h5>
                                </div>
                            </div>
                            <div class="media">
                                <div class="d-flex">
                                    <img src="img/f-p-2.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <h4>পাফার জ্যাকেট</h4>
                                    <h5>৳ ৭৯৯.০৯</h5>
                                </div>
                            </div>
                            <div class="media">
                                <div class="d-flex">
                                    <img src="img/f-p-3.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <h4>লেদার ব্যাগ</h4>
                                    <h5>৳ ৪৫৫.০০</h5>
                                </div>
                            </div>
                            <div class="media">
                                <div class="d-flex">
                                    <img src="img/f-p-4.jpg" alt="">
                                </div>
                                <div class="media-body">
                                    <h4>কাজুয়াল সুজ</h4>
                                    <h5>৳ ৬৯৯.৯৯</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="fillter-slider-inner">
                        <ul class="portfolio-filter">
                            <li class="active" data-filter="*"><a href="#">মেন্স</a></li>
                            <li data-filter=".woman"><a href="#">ওমেন</a></li>
                            <li data-filter=".shoes"><a href="#">সুজ</a></li>
                            <li data-filter=".bags"><a href="#">ব্যাগ</a></li>
                        </ul>
                        <div class="fillter-slider owl-carousel owl-loaded owl-drag">
                            <div class="item shoes">
                                <div class="fillter-product-item bags">
                                    <div class="f-p-img">
                                        <img src="img/wetnwild/browkit.jpg" alt="">
                                        <h5 class="sale">Sale</h5>
                                    </div>
                                    <div class="f-p-text">
                                        <h5>আলটিমেট ব্রাউ কিট</h5>
                                        <h4>৳ ৪৩০.০০</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item woman shoes bags">
                                <div class="fillter-product-item">
                                    <div class="f-p-img">
                                        <img src="img/wetnwild/faceprimer2.jpg" alt="">
                                        <h5 class="new">New</h5>
                                    </div>
                                    <div class="f-p-text">
                                        <h5>ফটো ফোকাস ফেস প্রাইমার ডিউয়ী</h5>
                                        <h4>৳ ৪৩০.০০</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item woman shoes">
                                <div class="fillter-product-item">
                                    <div class="f-p-img">
                                        <img src="img/wetnwild/faundation.jpg" alt="">
                                        <h5 class="discount">-10%</h5>
                                    </div>
                                    <div class="f-p-text">
                                        <h5>ফটো ফোকাস ফাউন্ডেশন</h5>
                                        <h4>৳ ৭৫০.০০</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item shoes">
                                <div class="fillter-product-item bags">
                                    <div class="f-p-img">
                                        <img src="img/wetnwild/felttip.jpg" alt="">
                                        <h5 class="sale">Sale</h5>
                                    </div>
                                    <div class="f-p-text">
                                        <h5>ফেল্ট টিপ আইলাইনার</h5>
                                        <h4>৳ ৪৩০.০০</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item woman shoes bags">
                                <div class="fillter-product-item">
                                    <div class="f-p-img">
                                        <img src="img/wetnwild/h2o.jpg" alt="">
                                        <h5 class="new">New</h5>
                                    </div>
                                    <div class="f-p-text">
                                        <h5>এইচ টু ও প্রুফ আইলাইনার</h5>
                                        <h4>৳ ৬২০.০০</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item woman shoes">
                                <div class="fillter-product-item">
                                    <div class="f-p-img">
                                        <img src="img/wetnwild/faceprimer.jpg" alt="">
                                        <h5 class="discount">-10%</h5>
                                    </div>
                                    <div class="f-p-text">
                                        <h5>ফটো ফোকাস ফেস প্রাইমার ম্যাট</h5>
                                        <h4>৳ ৬২০.০০</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item shoes">
                                <div class="fillter-product-item bags">
                                    <div class="f-p-img">
                                        <img src="img/wetnwild/lipstick.jpg" alt="">
                                        <h5 class="sale">Sale</h5>
                                    </div>
                                    <div class="f-p-text">
                                        <h5>মেগালাস্ট লিকুইড ক্যাটসুট লিপস্টিক</h5>
                                        <h4>৳ ৫৮০.০০</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item woman shoes bags">
                                <div class="fillter-product-item">
                                    <div class="f-p-img">
                                        <img src="img/wetnwild/max.jpg" alt="">
                                        <h5 class="new">New</h5>
                                    </div>
                                    <div class="f-p-text">
                                       <h5>ম্যাক্স ভলিউম প্লাস ওয়াটার প্রুফ মাসকারা</h5>
                                        <h4>৳ ৬২০.০০</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="item woman shoes">
                                <div class="fillter-product-item">
                                    <div class="f-p-img">
                                        <img width="270" src="img/wetnwild/pressedpowder.jpg" alt="">
                                        <h5 class="discount">-10%</h5>
                                    </div>
                                    <div class="f-p-text">
                                        <h5>ফটো ফোকাস প্রেসড পাউডার</h5>
                                        <h4>৳ ৬২০.০০</h4>
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
<!--================End Featured Product Area =================-->     



<section class="from-blog-area">
    <div class="container">
        <div class="from-blog-inner">
            <div class="c-main-title">
                <h2>From The Blog</h2>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="from-blog-item">
                        <img class="img-fluid" src="img/f-blog-1.jpg" alt="">
                        <div class="f-blog-text">
                            <h5>fashion</h5>
                            <p>Neque porro quisquam est qui dolorem ipsum</p>
                            <h6>21.09.2017</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="from-blog-item">
                        <img class="img-fluid" src="img/f-blog-2.jpg" alt="">
                        <div class="f-blog-text">
                            <h5>fashion</h5>
                            <p>Neque porro quisquam est qui dolorem ipsum</p>
                            <h6>21.09.2017</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="from-blog-item">
                        <img class="img-fluid" src="img/f-blog-3.jpg" alt="">
                        <div class="f-blog-text">
                            <h5>fashion</h5>
                            <p>Neque porro quisquam est qui dolorem ipsum</p>
                            <h6>21.09.2017</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js-part')

<!--mobile menu accordion-->


<!-- owl Carousel -->     
<!--script>
    var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("single-product-sildes");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 3000); // Change image every 2 seconds
}
</script-->
 <!--/ end owl Carousel-->
 
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
<section class="header-top">
  <div class="container-fluid d-none d-md-block tpbbtb">
    <div class="container pt-1 pb-1">
      <div class="row">
        
        <div class="col-lg-3">
          @if(Route::current()->getName()!='dashboard')
          <span class="headline">আপনি কি বড়বাজার মাকের্টপ্লেস খুঁজছেন?<a href="{{route('dashboard')}}" class="headline2">ইহা এখানে<i class="hn-3 fa fa-arrow-right"></i></a></span>
          @else
          <span class="headline">বড়বাজারে আপনাকে স্বাগতম।<a href="{{route('home')}}" class="headline2">বড়বাজারে ফিরে যান।<i class="hn-3 fa fa-arrow-right"></i></a></span>
          @endif

        </div>
        
        
        <div class="col-lg-6">
          <div class="top-header-middle">
              <a class="asdf" href="tel:01611975861">
                  <i class="fa fa-phone">  কল করুন :</i>
                  <span>+৮৮০ ১৬১১ ৯৭৫ ৮৬১</span>
              </a>
              <a class="br1" href="mailto:borobazar.shop@gmail.com?subject=Feedback&body=Message">
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
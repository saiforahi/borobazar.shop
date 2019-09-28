<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>বড়বাজার অনলাইন শপিং মাকের্টপ্লেস</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/mirazmac/bengali-webfont-cdn@master/solaimanlipi/style.css">
      <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
        <section class="header-top">
                <div class="container-fluid d-none d-md-block tpbbtb">
                    <div class="container pt-1 pb-1">
                      <div class="row">
                        <div class="col-lg-3">
                            <!--<span class="headline">বড়বাজারে আপনাকে স্বাগতম!<a href="products.html" class="headline2">ব্যাক টু শপিং!</a></span>-->
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
                          <!--<div class="col-lg-3">
                              <div class="top-header-right">
                                  <select class="language">
                                          <option selected="select" value="0">ভাষা</option>
                                          <option value="1">বাংলা (BN)</option>
                                          <option value="1">ইংলিশ (EN)</option>
                                      </select>
                                  </div>
                              </div>-->
                        </div>
                      </div>
                    </div>
           </section>
           <!--Navigator area -->
        @include('layouts.navbar')

        @yield('content')

    <section class="footer bottom">
            <div class="container-fluid text-center pb-2 pt-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-2">
                            <a href="http://www.borobazar.shop"><span class="borobazar-name"><i class="fa fa-copyright"></i><small>বড়বাজার.শপ</small></span></a>
                        </div>
                        <div class="d-none d-md-block">|</div>
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
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>

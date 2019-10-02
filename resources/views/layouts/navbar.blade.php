@include('layouts.login-modal')
<section class="bnavigationbar">
    <div class="container-fluid pt-2 pb-1">
        <div class="container">
            <div class="row">
              <div class="col-lg-12">
                  <div class="row">
                      <!--brand-logo area -->
                      <div class="col-md-3">
                          <a class="logo" href="home.html">
                          <img width="50" height="auto" class="pulse" src="img/logo.png" alt="borobazar">
                          <img width="160" height="auto" class="pdr-12" src="img/borobazar.png" alt="borobazar">
                          </a>
                      </div>
                      <!--end brand-logo area -->
                  
                  <!--navbar area -->
                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><!--<span class="navbar-toggler-icon"></span>--><span class="fa fa-bars"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="middle navbar-nav mr-auto">
                            <li>
                                <a href="{{ route('home') }}" class="whyborobazar">হোম</a>
                            </li>
                            <li>
                                <a href="#" class="whyborobazar">প্রয়োজনীয় তথ্য</a>
                            </li>                                
                            <li>
                                <a href="{{ route('blood_request') }}" target="_blank" class="whyborobazar">গ্রহীতার অনুরোধ</a>
                            </li>
                            <li>
                                <a href="#" class="whyborobazar"> অনুরোধের তালিকা</a>
                            </li>
                            <li>
                                <i class="bsquare fa fa-user"></i>
                                <!-- Authentication Links -->
                                @auth
                                <li>
                                    <a id="navbarDropdown" class="text-uppercase whyborobazar" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                @endauth
                                @guest
                                    @if(Request::path() == 'login')
                                    <li>
                                        <a class="text-uppercase whyborobazar" href="{{ route('register') }}">নিবন্ধন</a> 
                                    </li>
                                    @else
                                    <li>
                                        <a class="text-uppercase whyborobazar" href="#" onclick="document.getElementById('loginModalBlade').style.display='block'">লগইন</a> / 
                                        <a class="text-uppercase whyborobazar" href="{{ route('register') }}">নিবন্ধন</a> 
                                    </li>
                                    @endif
                                @endguest
                            </li>
                        </ul>
                    </div>
                </nav>
                    <!--End navbar area -->
                      
                    <!--scrollspy navbar area -->
                      
                    <!--End scrollspy navbar area -->
                </div>
            </div>         
        </div>
    </div>
</section>
<!--End Navigator area -->
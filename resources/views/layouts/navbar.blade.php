@include('auth.navLoginModal')
<section class="bnavigationbar">
    <div class="container-fluid pt-2 pb-1">
        <div class="container" >
            <div class="row" id="nav">
              <div class="col-lg-12">
                  <div class="row">
                      <!--brand-logo area -->
                      <div class="col-md-3">
                          <a class="logo" href="{{ route('home') }}">
                          <img width="50" height="auto" class="pulse" src="{{ asset('img/logo.png') }}" alt="borobazar">
                          <img width="160" height="auto" class="pdr-12" src="{{ asset('img/borobazar.png') }}" alt="borobazar">
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
                                <a href="{{ route('essentialInfo') }}" class="whyborobazar">প্রয়োজনীয় তথ্য</a>
                            </li>                                
                            <li>
                                <a href="{{ route('blood_request') }}" target="_blank" class="whyborobazar">গ্রহীতার অনুরোধ</a>
                            </li>
                            <li>
                                <a href="{{ route('blood_requests') }}" class="whyborobazar"> অনুরোধের তালিকা</a>
                            </li>
                            <!-- Authentication Links -->
                            @auth
                            <li>
                                <div class="header-account" onclick="myFunction()">
                                    <i class="bsquare fa fa-user-o"></i>  {{ Auth::user()->name }}
                                    <div id="demo" class="dropdown-content">
                                        <a href="{{ route('profile') }}"><i class="mt-1 fa fa-user"></i>আমার অ্যাকাউন্ট</a>
                                        <a href="#"><i class="mt-1 fa fa-cog"></i>সেটিংস</a>
                                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="mt-1 fa fa-power-off"></i>লগআউট</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </div>
                            </li>
                           
                            <li class="header-cart dropdown default-dropdown" id="notification-vue">
                                <notification-icon :notification_number="total_unread"></notification-icon>
                                <notification-panel @new_arrival="setData"></notification-panel>
                            </li>
                           
                            @endauth
                            @guest
                                @if(Request::path() == 'login')
                                <li>
                                    <i class="bsquare fa fa-user"></i>
                                    <a class="text-uppercase whyborobazar" href="{{ route('register') }}">নিবন্ধন</a> 
                                </li>
                                
                                @elseif(Request::path() == 'register')
                                
                                <li>
                                    <i class="bsquare fa fa-user"></i>
                                    <a class="text-uppercase whyborobazar" href="{{route('login')}}">লগইন</a> 
                                </li>

                                @else
                                <li>
                                    <i class="bsquare fa fa-user"></i>
                                    <a class="text-uppercase whyborobazar" href="#" onclick="document.getElementById('loginModalBlade').style.display='block'">লগইন</a> / 
                                    <a class="text-uppercase whyborobazar" href="{{ route('register') }}">নিবন্ধন</a> 
                                </li>
                                @endif
                            @endguest 
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
         <!--start notification bar.-->
    <script type="text/javascript">
        function myFunction() {
            document.getElementById("demo").classList.toggle("open");
        }
        
    </script>
     <!--end notification bar.-->
   
</section>
<!--End Navigator area -->
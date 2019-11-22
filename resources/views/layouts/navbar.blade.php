@include('auth.navLoginModal')
<section class="bnavigationbar">
    <div class="container-fluid pt-2 pb-1">
        <div class="container" id="nav">
            <div class="row">
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
                            <li class="nav-item dropdown">
                                <i class="bsquare fa fa-user"></i>
                                <a id="navbarDropdown" class="text-uppercase whyborobazar dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                           
                            <li class="header-cart dropdown default-dropdown" id="notification-vue">
                                <notification-icon :notification_number="number"></notification-icon>
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
                                    <a class="text-uppercase whyborobazar" href="#" onclick="document.getElementById('loginModalBlade').style.display='block'">লগইন</a> 
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
        $(document).ready(function () {

        // ANIMATEDLY DISPLAY THE NOTIFICATION COUNTER.
        $('#noti_Counter')
            .css({ opacity: 0 })
            .text('7')  // ADD DYNAMIC VALUE (YOU CAN EXTRACT DATA FROM DATABASE OR XML).
            .css({ top: '-10px' })
            .animate({ top: '-2px', opacity: 1 }, 500);

        $('#noti_Button').click(function () {

            // TOGGLE (SHOW OR HIDE) NOTIFICATION WINDOW.
            $('#notifications').fadeToggle('fast', 'linear', function () {
                if ($('#notifications').is(':hidden')) {
                    $('#noti_Button').css('background-color', '#2e3192');
                }
                // CHANGE BACKGROUND COLOR OF THE BUTTON.
                else $('#noti_Button').css('background-color', '#ededed');
            });

            $('#noti_Counter').fadeOut('slow');     // HIDE THE COUNTER.

            return false;
        });

        // HIDE NOTIFICATIONS WHEN CLICKED ANYWHERE ON THE PAGE.
        $(document).click(function () {
            $('#notifications').hide();

            // CHECK IF NOTIFICATION COUNTER IS HIDDEN.
            if ($('#noti_Counter').is(':hidden')) {
                // CHANGE BACKGROUND COLOR OF THE BUTTON.
                $('#noti_Button').css('background-color', '#2e3192');
            }
        });

        $('#notifications').click(function () {
            return false;       // DO NOTHING WHEN CONTAINER IS CLICKED.
        });
    });
    </script>
     <!--end notification bar.-->
    <script type="text/javascript" >
        $(document).ready(function()
        {
            $("#notificationLink").click(function()
            {
                $("#notificationContainer").fadeToggle(300);
                $("#notification_count").fadeOut("slow");
                return false;
            });

            //Document Click hiding the popup 
            $(document).click(function()
            {
                $("#notificationContainer").hide();
            });

            //Popup on click
            $("#notificationContainer").click(function()
            {
                return false;
            });

        });
    </script>
</section>
<!--End Navigator area -->
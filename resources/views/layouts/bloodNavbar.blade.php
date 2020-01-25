
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
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                                <ul class="middle navbar-nav mr-auto">
                                    <li>
                                        <a href="{{ route('blood-donation') }}" class="whyborobazar">হোম</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('essentialInfo') }}" class="whyborobazar">প্রয়োজনীয় তথ্য</a>
                                    </li>                                
                                    <li>
                                        <a href="#" onclick="document.getElementById('grohitarmenu').classList.toggle('open')" class="whyborobazar">গ্রহীতার অনুরোধ</a>
                                        <div id="grohitarmenu" class="dropdown-content">
                                            <a href="{{ route('blood_request') }}" target="_blank"><i class="mt-1 fa fa-plus"></i>নতুন অনুরোধ</a>
                                            <a href="{{ route('submitted_requests') }}" target="_blank"><i class="mt-1 fa fa-list"></i>আমার অনুরোধ সমূহ</a>
                                        </div>
                                        
                                    </li>
                                    <li>
                                        <a href="{{ route('blood_requests') }}" class="whyborobazar"> অনুরোধের তালিকা</a>
                                    </li>
                                    <!-- Authentication Links -->
                                    @auth
                                    <li>
                                        <div class="header-account" onclick="document.getElementById('demo').classList.toggle('open')">
                                            <i class="bsquare fa fa-user-o"></i>  {{strtoupper(Auth::user()->name)}}
                                            <div id="demo" class="dropdown-content">
                                                <a href="{{ route('profile') }}"><i class="mt-1 fa fa-user-o"></i>আমার অ্যাকাউন্ট</a>
                                                <a href="#"><i class="mt-1 fa fa-cog"></i>সেটিংস</a>
                                                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="mt-1 fa fa-power-off"></i>লগআউট</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                    <!--li class="header-cart dropdown default-dropdown">
                                        <nav-messages-badge :notification_number="total_unread_messages"></nav-messages-badge>
                                        <nav-messages @user_click="setChatBox" @new_arrival="set_total_unread_messages"></nav-messages>
                                    </li-->  
                                    
                                    <li class="header-cart dropdown default-dropdown">
                                        <notification-icon :notification_number="total_unread"></notification-icon>
                                        <notification-panel @user_click="setModalData" @new_arrival="setData"></notification-panel>
                                        <notification-modal :quick_view_data="blood_request"></notification-modal>
                                    </li>
                                    
                                    <li onclick="document.getElementById('bb-demo').classList.toggle('open');">
                                        <div class="bb-allserv">
                                            <img src="/img/apps.svg" width="20">
                                            <div id="bb-demo" class="mega dropdown-content">
                                                <ul class="allserv-item">
                                                    <li class="dropdown default-dropdown" title="রক্তদান">
                                                        <a href="{{route('blood-donation')}}"><img src="/img/blood-drop.svg"></a>
                                                    </li>
                                                    <li class="dropdown default-dropdown" title="গৃহশিক্ষক">
                                                        <a href="categories-list/Services/Tutor/tutor.html"><img src="/img/graduate-student-avatar.svg"></a>
                                                    </li>
                                                    <li class="dropdown default-dropdown" title="হোম সেবা">
                                                        <a href="categories-list/Services/To-let/to-let.html"><img src="/img/home-address.svg"></a>
                                                    </li>
                                                    <li class="dropdown default-dropdown" title="আইন সেবা">
                                                        <a href="categories-list/Services/Law%2520Services/lawyer.html"><img src="/img/lawyer.svg"></a>
                                                    </li>
                                                    <li class="dropdown default-dropdown" title="রক্তদান">
                                                        <a href="categories-list/Services/Blood/blood-donation.html"><img src="/img/male-user.svg"></a>
                                                    </li>
                                                    <li class="dropdown default-dropdown" title="রক্তদান">
                                                        <a href="categories-list/Services/Blood/blood-donation.html"><img src="/img/male-user.svg"></a>
                                                    </li>
                                                    <li class="dropdown default-dropdown" title="রক্তদান">
                                                        <a href="categories-list/Services/Blood/blood-donation.html"><img src="/img/male-user.svg"></a>
                                                    </li>
                                                    <li class="dropdown default-dropdown" title="রক্তদান">
                                                        <a href="categories-list/Services/Blood/blood-donation.html"><img src="/img/male-user.svg"></a>
                                                    </li>
                                                    <li class="dropdown default-dropdown" title="রক্তদান">
                                                        <a href="categories-list/Services/Blood/blood-donation.html"><img src="/img/male-user.svg"></a>
                                                    </li>
                                                    <li class="dropdown default-dropdown" title="রক্তদান">
                                                        <a href="categories-list/Services/Blood/blood-donation.html"><img src="/img/male-user.svg"></a>
                                                    </li>
                                                    <li class="dropdown default-dropdown" title="রক্তদান">
                                                        <a href="categories-list/Services/Blood/blood-donation.html"><img src="/img/male-user.svg"></a>
                                                    </li>
                                                    <li class="dropdown default-dropdown" title="রক্তদান">
                                                        <a href="categories-list/Services/Blood/blood-donation.html"><img src="/img/male-user.svg"></a>
                                                    </li>
                                                    <li class="dropdown default-dropdown" title="রক্তদান">
                                                        <a href="categories-list/Services/Blood/blood-donation.html"><img src="/img/male-user.svg"></a>
                                                    </li>
                                                    <li class="dropdown default-dropdown" title="রক্তদান">
                                                        <a href="categories-list/Services/Blood/blood-donation.html"><img src="/img/male-user.svg"></a>
                                                    </li>
                                                    <li class="dropdown default-dropdown" title="রক্তদান">
                                                        <a href="categories-list/Services/Blood/blood-donation.html"><img src="/img/male-user.svg"></a>
                                                    </li>
                                                    <li class="dropdown default-dropdown" title="রক্তদান">
                                                        <a href="categories-list/Services/Blood/blood-donation.html"><img src="/img/male-user.svg"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    @endauth
                                    @if(Route::current()->getName()!='donar_info')
                                        @if(Auth::user()->donars===null)
                                        <li>
                                            <a href="{{route('donar_info')}}" class="whyborobazar"><h6 class="title glow">নিবন্ধন করুন</h6></a>
                                        </li>
                                        @else
                                        <li>
                                            <a href="{{route('donar_info')}}" class="whyborobazar"><h6 class="title glow">আপডেট করুন</h6></a>
                                        </li>
                                        @endif
                                    @endif
                                </ul>
                            </div>
                        </nav>
                        <!--End navbar area -->
                    </div> 
                    <!--scrollspy navbar area --> 
                    <!--End scrollspy navbar area -->
                </div>
            </div>         
        </div>
    </div>
     <!--end notification bar.-->
</section>
<!--End Navigator area -->
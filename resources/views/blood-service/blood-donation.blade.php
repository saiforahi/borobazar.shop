@extends('layouts.app')
@section('content')
    @include('auth.navLoginModal')
        <section class="blood-donar-area">
            @if ($errors->any())
                <script>window.login_errors={!! json_encode($errors) !!}</script>
            @endif
            @if (session()->has('success'))
                <script>window.blood_success={!! json_encode(session('success')) !!}</script>
            @endif
            @if(session()->has('password_change_success'))
                <script>window.password_change_success={!!json_encode(session('password_change_success'))!!}</script>
            @endif
            <div class="container-fluid pb-5 pt-5" id="search-app-root">
                <search-app-root-component></search-app-root-component>
            </div>
        </section>
       
        <!--script type="text/javascript">
            $(window).on('load',function(){
                $('#myModal').modal('show');
            });
        </script-->
        <!--auto modal--> 
        <!-- document.cookie.indexOf('visited=true') == -1 -->
        <script> 
        // A $( document ).ready() block.
            $( document ).ready(function() {
                if (document.cookie.indexOf('visited=true') == -1 && window.auth_user==undefined){
                    var lifetime = 1000*60*15;
                    var expires = new Date((new Date()).valueOf() + lifetime);
                    document.cookie = "visited=true;expires=" + expires.toUTCString();
                    setTimeout(function(){
                        $('#loginModalBlade').modal({show:true});
                    },3000); // 1000ms = 1 second
                }
            });
        </script>          
        <!--end auto modal--> 
        <script>
            $(function () {
                $('[data-toggle="popover"]').popover()
            })
        </script>   
            
@endsection
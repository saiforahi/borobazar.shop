@extends('layouts.app')
@section('content')
    @include('auth.navLoginModal')
        
    @if ($errors->any())
        <script>window.login_errors={!! json_encode($errors) !!}</script>
    @endif
    @if (session()->has('success'))
        <script>window.blood_success={!! json_encode(session('success')) !!}</script>
    @endif
    @if(session()->has('password_change_success'))
        <script>window.password_change_success={!!json_encode(session('password_change_success'))!!}</script>
    @endif
    @if(session()->has('AccountCreatedMessage'))
        <script>window.AccountCreatedMessage={!!json_encode(session('AccountCreatedMessage'))!!}</script>
    @endif
    <div id="search-app-root">
        <donar-search @new_result="setNewResult"></donar-search>
        <donar-search-result :result="channelData"></donar-search-result>
    </div>
       
@endsection

@section('js-part')
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
    
    <script type="text/javascript">
    $(function () {
            $('[data-toggle="popover"]').popover()
        })
    </script>
@stop


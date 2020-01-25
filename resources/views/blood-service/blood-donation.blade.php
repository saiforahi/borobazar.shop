@extends('layouts.blood')
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
    $(function () {
        $('[data-toggle="popover"]').popover()
    })
</script>
@stop


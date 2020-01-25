@extends('layouts.blood')
@section('content')
<section class="solid-title-area">
    <div class="container-fluid text-center bg pt-5 pb-5">
        <div class="container">
            <div class="solid-title-inner">
                <h4>নিবন্ধন</h4>
                <ul>
                    <li><a href="{{route('blood-donation')}}">হোম</li></a>
                    <i class="fs-14 fa fa-angle-right"></i>
                    <li><a href="{{ route('donar_info') }}">তথ্যাদি</li></a>
                </ul>
                </div>
        </div>
    </div>
</section>
<section class="bloodreg-area pt-5 pb-5">
    <div class="container-fluid" id="donar_info_view">
        <donar-info></donar-info>
    </div>
</section>   
@endsection
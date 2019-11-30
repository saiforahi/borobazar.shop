@extends('layouts.main')
@section('content')
<section class="solid-title-area">
    <div class="container-fluid text-center bg pt-5 pb-5">
        <div class="container">
            <div class="solid-title-inner">
               <h4>নিরাপত্তা প্রশ্ন</h4>
               <ul>
                   <li><a href="products.html">হোম</li></a>
                   <i class="fs-14 fa fa-angle-right"></i>
                   <li><a href="security-question.html">নিরাপত্তা প্রশ্ন</li></a>
               </ul>
             </div>
        </div>
    </div>
</section>
<section class="account-area">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="secuquest col-md-12">
                @if ($errors->any())
                    <div class="alert">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="track-form row" method="POST" action="{{route('submit_answers')}}">
                        @csrf
                        <div class="col-lg-12 form-group">
                            <lebel for="text">মোবাইল</lebel>
                            <input type="text" class="form-control2" placeholder="" id="cell" name="cell">
                        </div>
                        <div class="col-lg-12 form-group">
                            <lebel for="text">নিরাপত্তা প্রশ্ন - ১</lebel>
                            <select class="form-control2" name="question1">
                               <option selected="select" value="0">আপনার রক্তের গ্রুপ কি?</option>
                               <!--option value="1">আপনার প্রিয় দেশ</option-->
                            </select>
                            <select class="form-control2" name="bloodGroup" required>
                                <option selected value="-1">রক্তের গ্রুপ</option>
                                <option value="1">এ+ (পজিটিভ)</option>
                                <option value="2">এ- (নেগেটিভ)</option>
                                <option value="3">বি+ (পজিটিভ)</option>
                                <option value="4">বি- (নেগেটিভ)</option>
                                <option value="5">ও+ (পজিটিভ)</option>
                                <option value="6">ও- (নেগেটিভ)</option>
                                <option value="7">এবি+ (পজিটিভ)</option>
                                <option value="8">এবি- (নেগেটিভ)</option>
                            </select>
                            <!--lebel for="text">নিরাপত্তা উত্তর - ১</lebel>
                            <input type="text" class="form-control2" placeholder="" id="" name="answer1"-->
                        </div>
                        <div class="col-lg-12 form-group">
                            <lebel for="text">নিরাপত্তা প্রশ্ন - ২</lebel>
                            <select class="form-control2" name="question2">
                               <option selected="select" value="0">আপনার জন্মতারিখ</option>
                               <!--option value="1">আপনার জন্মতারিখ</option-->
                            </select>
                            <input type="date" class="form-control2" placeholder="" id="" name="answer2">
                        </div>
                        <div class="col-lg-12 form-group">
                            <button type="submit" class="btn-block btn-getinvite4" id="next" name="next">পরবর্তী</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
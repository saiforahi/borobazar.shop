@extends('layouts.app')
@section('content')
<section class="solid-title-area">
    <div class="container-fluid text-center bg pt-5 pb-5">
        <div class="container">
            <div class="solid-title-inner">
               <h4>প্রয়োজনীয় তথ্য</h4>
               <ul>
                   <li><a href="{{ route('home') }}">হোম</li></a>
                   <i class="fs-14 fa fa-angle-right"></i>
                   <li><a href="{{ route('essentialInfo') }}">প্রয়োজনীয় তথ্য</li></a>
               </ul>
             </div>
        </div>
    </div>
</section>

<section id="bloodInfo">
    <div class="container-fluid">
       <div class="container">
           <div class="row">
               <div class="blood-info-inner">
                   <div class="col-md-12">
                           <div class="row whybb-career">
                               <div class="col-md-6">
                               <span class="fs-48">রক্ত দেয়া কেন প্রয়োজন?</span>
                               </div>
                                   <aside class="rgt-border d-none d-md-block"></aside>
                               <div class="col-md-6">
                               <p class="cr-para">দুর্ঘটনায় আহত, ক্যান্সার বা অন্য কোন জটিল রোগে আক্রান্তদের জন্য, অস্ত্রোপচার কিংবা সন্তান প্রসব অথবা থ্যালাসেমিয়ার মতো বিভিন্ন রোগের চিকিৎসায় রক্ত সঞ্চালনের প্রয়োজন হয়। দেশে বছরে আট থেকে নয় লাখ ব্যাগ রক্তের চাহিদা থাকলেও রক্ত সংগ্রহ হয় ছয় থেকে সাড়ে ছয় লাখ ব্যাগ। তবে বাংলাদেশে জনসংখ্যার তুলনায় রক্তদাতার সংখ্যা এখনো নগণ্য। পরিসংখ্যান অনুযায়ী দেশে বছরে আট থেকে নয় লাখ ব্যাগ রক্তের চাহিদা থাকলেও রক্ত সংগ্রহ হয় ছয় থেকে সাড়ে ছয় লাখ ব্যাগ। ঘাটতি থাকে তিন লাখ ব্যাগের বেশি। এছাড়া সংগ্রহকৃত রক্তের মাত্র ৩০ শতাংশ আসে স্বেচ্ছায় রক্তদাতাদের থেকে। নিজের পরিবারের সদস্য বা পরিচিতজন না হলে এখনো বেশিরভাগ মানুষ রক্তের জন্য নির্ভর করেন পেশাদার রক্তদাতার ওপর। রক্তের অভাবের কারণে প্রতিবছর বহু রোগীর প্রাণ সংকটের মুখ পড়ে। এক ব্যাগ রক্ত দিতে সময় লাগে মাত্র ১০ থেকে ১২ মিনিট। এই অল্প সময়ে চাইলেই একজনের প্রাণ বাঁচানো সম্ভব।</p>
                               </div>
                           </div>
                       </div>
                   <div class="col-md-12">
                           <div class="row whybb-career">
                               <div class="col-md-6">
                               <p class="cr-para">সু-চিকিৎসকদের মতে প্রাপ্তবয়স্ক সুস্থ নারী-পুরুষ চাইলেই নির্দিষ্ট সময় পরপর রক্ত দিতে পারেন। রক্ত নেয়ার আগে এর সঠিক পরীক্ষা নীরিক্ষা জরুরি। স্যার সলিমুল্লাহ মেডিকেল কলেজ বিশ্ববিদ্যালয়ের হেমাটোলজি বিভাগের প্রধান ড. সিরাজুল ইসলাম জানিয়েছেন, ১৮ থেকে ৪৫ বছর বয়সের মধ্যে শারীরিকভাবে সুস্থ নারী ও পুরুষ রক্ত দিতে সক্ষম। এক্ষেত্রে পুরুষের ওজন থাকতে হবে অন্তত ৪৮ কেজি এবং নারীর অন্তত ৪৫ কেজি। এছাড়া রক্তদানের সময় রক্তদাতার তাপমাত্রা ৯৯.৫ ডিগ্রী ফারেনহাইটের নিচে এবং নাড়ির গতি ৭০ থেকে ৯০ এর মধ্যে এবং রক্তচাপ স্বাভাবিক থাকতে হবে। পুরুষদের ক্ষেত্রে রক্তের হিমোগ্লোবিন প্রতি ডেসিলিটারে ১৫ গ্রাম এবং নারীদের ক্ষেত্রে ১৪ গ্রাম হওয়া দরকার। রক্তদাতাকে অবশ্যই ভাইরাসজনিত রোগ, শ্বাসযন্ত্রের রোগ এবং চর্মরোগ মুক্ত থাকতে হবে। সাধারণত ৯০ দিন পর পর, অর্থাৎ তিন মাস পর পর রক্ত দেওয়া যাবে। রক্ত দেয়ার সময় শরীর থেকে ২৫০-৩০০ মিলিগ্রাম আয়রন কমে যায়। সাধারণত প্রাপ্তবয়স্ক সুস্থ মানুষের শরীরে ৪ থেকে ৬ লিটার পরিমাণ রক্ত থাকে। প্রতিবার ৪৫০ মিলিলিটার রক্ত দেয়া হয়। এ কারণে রক্ত দিলে ক্ষতি হওয়ার আশঙ্কা একেবারেই নেই।</p>
                               </div>
                               <aside class="rgt-border d-none d-md-block"></aside>
                               <div class="col-md-6">
                               <span class="fs-49">কারা রক্ত দিতে পারবেন?</span>
                               </div>
                           </div>
                       </div>
                   <div class="col-md-12">
                           <div class="row whybb-career">
                               <div class="col-md-6">
                               <span class="fs-48">রক্ত দেয়ার পর কী হয়?</span>
                               </div>
                                   <aside class="rgt-border d-none d-md-block"></aside>
                               <div class="col-md-6">
                               <p class="cr-para">রক্ত দেয়ার পর কিছুটা মাথা ঘোরাতে পারে। এটা স্বাভাবিক। তবে এ সময় হাঁটাহাঁটি না করে অন্তত এক থেকে দুই ঘণ্টা বিশ্রাম নেয়ার পরামর্শ দিয়েছেন ড. সিরাজুল ইসলাম। রক্তদাতা যদি ঘামতে থাকেন এবং অস্থিরতা হয়, তবে তাকে স্যালাইন খাওয়ানোর পরামর্শ দেন তিনি। সাধারণত প্রাপ্ত বয়স্ক সুস্থ মানুষ প্রতিবার ৪৫০ মিলিলিটার রক্ত দেয়া হয়। রক্ত দেয়ার পর লোহিত রক্তকণিকার মাত্রা স্বাভাবিক অবস্থায় ফিরে যেতে অন্তত এক থেকে দেড় মাস সময় লাগে বলে উল্লেখ করেন ড. সিরাজুল ইসলাম। তিনি বলেন, রক্ত দেয়ার সময় শরীর থেকে রক্তের পাশাপাশি ২৫০-৩০০ মিলিগ্রাম আয়রন কমে যায় তাই তার ক্ষয়পূরণে আয়রন ও প্রোটিনযুক্ত খাবার বেশি বেশি খাওয়ার পরামর্শ দিয়েছেন তিনি।</p>
                               </div>
                           </div>
                       </div>
                   <div class="col-md-12">
                           <div class="row whybb-career">
                               <div class="col-md-6">
                               <p class="cr-para">রক্তের গ্রুপ মোট ৮ ধরণের: এবি+ পজিটিভ, এবি- নেগেটিভ, এ+ পজিটিভ, এ- নেগেটিভ, বি+ পজিটিভ, বি- নেগেটিভ, এবং ও+ পজিটিভ, ও- নেগেটিভ। জেনে নিন কে কাকে রক্ত দিতে পারবে?</p>
                               </div>
                               <aside class="rgt-border d-none d-md-block"></aside>
                               <div class="col-md-6">
                               <span class="fs-49">কে কাকে রক্ত দিতে পারবে?</span>
                               </div>
                           </div>
                       </div>
                   
                   <div class="col-md-12">
                       <div class="box-activity">
                           <div class="cimg">
                               <img width="75" height="75" src="{{ asset('img/blood.svg') }}">
                           </div>
                           <div class="ctitle">
                               <h5>রক্ত দেয়ার উপকারিতা:</h5>
                           </div>
                           <div class="ctext">দেশের বিভিন্ন ব্লাডব্যাংকের সঙ্গে কথা বলে জানা যায় নিয়মিত রক্ত দেয়ার কিছু উপকার রয়েছে। সেগুলো হলো:<br>
                               ১. এতে একজন মানুষের জীবন বাঁচানো সম্ভব।<br>
                               ২. নিয়মিত রক্তদাতাদের ক্যানসারে আক্রান্ত হওয়ার ঝুঁকি কম থাকে।<br>
                               ৩. বছরে তিনবার রক্ত দিলে শরীরে নতুন লোহিত কণিকা তৈরির হার বেড়ে যায়। এতে অস্থিমজ্জা সক্রিয় থাকে। দ্রুত রক্ত স্বল্পতা পূরণ হয়।<br>
                               ৪. রক্তে কোলেস্টরেলের মাত্রা কমে যায়, এতে রক্তচাপ নিয়ন্ত্রণে থাকে। ফলে হৃদরোগ ও হার্ট অ্যাটাকের ঝুঁকি অনেকটাই কমে যায়।<br>
                               ৫. রক্ত দিলে যে ক্যালোরি খরচ হয়, তা ওজন কমানোর ক্ষেত্রে ও রক্তচাপ নিয়ন্ত্রণে গুরুত্বপূর্ণ ভূমিকা রাখে।<br>
                               ৬. শরীরে হেপাটাইটিস-বি, হেপাটাইটিস-সি, জন্ডিস, ম্যালেরিয়া, সিফিলিস, এইচআইভি বা এইডসের মতো বড় কোন রোগ আছে কি না, সেটি বিনা খরচে জানা যায়।<br>
                               ৭. রোগ প্রতিরোধ ক্ষমতা বাড়ে।<br>
                               ৮. রক্তদাতার যদি নিজের কখনো রক্তের প্রয়োজন হয় তাহলে ব্লাড ব্যাংকগুলো তাকে অগ্রাধিকার দিয়ে রক্তের ব্যবস্থা করে দেয়।
                           </div>
                       </div>
                   </div>
               </div>
           </div>
        </div>
    </div>     
</section>
@endsection
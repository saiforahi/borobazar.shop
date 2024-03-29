@extends('layouts.blood')
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
                <div class="blood-info">
                    <div class="row column-0">
                        <div class="blood-info-inner">
                            <div class="bloodinfotitle">
                                <h2 class="bld-title"> আমরা কেন রক্ত দানে উৎসাহিত হব?</h2>
                            </div>
                                <p class="cpara">কোন মানুষের রক্তের প্রয়োজন হলে তা অন্য কোন মানুষ হতেই সংগ্রহ করতে হয়। এখন পর্যন্ত চিকিৎসাবিজ্ঞানে রক্তের কোন বিকল্প বা কৃত্তিম রক্ত তৈরি করার পদ্ধতি আবিষ্কৃত হয় নি। রক্তদান তাই জগতের সবচেয়ে শ্রেষ্ঠ এবং নিঃস্বার্থ উপহার।</p>
                        </div>
                    </div>
                    <div class="row column-1">
                        <div class="col-md-5">
                            <div class="bloodinfotitle">
                                <h4 class="bld-title">রক্ত দেয়া কেন প্রয়োজন?</h4>
                            </div>
                            <div class="bloodinfotitle">
                                <p class="bld-para">দুর্ঘটনায় আহত, ক্যান্সার বা অন্য কোন জটিল রোগে আক্রান্তদের জন্য, অস্ত্রোপচার কিংবা সন্তান প্রসব অথবা থ্যালাসেমিয়ার মতো বিভিন্ন রোগের চিকিৎসায় রক্ত সঞ্চালনের প্রয়োজন হয়। পরিসংখ্যান অনুযায়ী দেশে বছরে ৮ থেকে ৯ লাখ ব্যাগ রক্তের চাহিদা থাকলেও রক্ত সংগ্রহ হয় ৬ থেকে ৬.৫ লাখ ব্যাগ। তবে বাংলাদেশে জনসংখ্যার তুলনায় রক্তদাতার সংখ্যা এখনো নগণ্য। ঘাটতি থাকে ২ থেকে ৩ লাখ ব্যাগের বেশি। এছাড়া সংগ্রহকৃত রক্তের মাত্র ৩০ শতাংশ আসে স্বেচ্ছায় রক্তদাতাদের থেকে। নিজের পরিবারের সদস্য বা পরিচিতজন না হলে এখনো বেশিরভাগ মানুষ রক্তের জন্য নির্ভর করেন পেশাদার রক্তদাতার ওপর। রক্তের অভাবের কারণে প্রতিবছর বহু রোগীর প্রাণ সংকটের মুখ পড়ে। এক ব্যাগ রক্ত দিতে সময় লাগে মাত্র ১০ থেকে ১২ মিনিট। এই অল্প সময়ে চাইলেই একজনের প্রাণ বাঁচানো সম্ভব।</p>
                            </div>
                        </div>
                        <div class="col-md-2"></div>

                        <div class="col-md-5">
                            <div class="bloodinfotitle">
                                <h4 class="bld-title">রক্ত কাদের প্রয়োজন হয়?</h4>
                            </div>
                            <div class="bloodinfotitle">
                                <p class="bld-para">মানবদেহে নানাবিধ কারণে রক্তের প্রয়োজন হতে পারে। রেড ক্রস ও রেড ক্রিসেন্ট সোসাইটি-এর তথ্য অনুযায়ী রোগীর ধরন অনুযায়ী প্রতি বছর বিশ্বে ১০ কোটি ৮০ লক্ষ  (১০৮ মিলিয়ন) ব্যাগ দানকৃত রক্ত সংগ্রহ করা হয়। যার মধ্যে ৩১% সংগ্রহ করা হয় রেড ক্রিসেন্ট ও রেড ক্রস-এর সেচ্ছাসেবীদের মাধ্যমে। তাঁদের হতে প্রাপ্ত তথ্য মতে সংগ্রহকৃত রক্ত নিম্নোলিখিত খাতে যায়-</p>
                                <ul class="bld-ul">
                                    <li>১. ক্যান্সারও বিভিন্ন রক্তরোগে আক্রান্ত রোগীর জন্য (৩৪%)</li>
                                    <li>২. বিভিন্ন ধরনের অ্যানিমিয়া (anemia) আক্রান্ত রোগীর জন্য (১৯%)</li>
                                    <li>৩. ওপেন হার্ট সার্জারি-সহ বিভিন্ন ধরনের অপারেশন ও আগুনে পুড়ে যাওয়া রোগীর জন্য  (১৮%)</li>
                                    <li>৪. অন্যান্য শারীরিক সমস্যা যেমন হৃদরোগ, কিডনীরোগ-এর জন্য  (১৩%)</li>
                                    <li>৫. অর্থোপেডিক রোগীর জন্য  (১২%)</li>
                                    <li>৬. স্ত্রীরোগ ও ধাত্রীরোগের রোগীর-গর্ভবতী মায়েদের, সন্তান জন্মদানের পর মা ও সন্তানের জন্য  (৪%)</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row column-2">
                        <div class="col-md-5">
                            <div class="bloodinfotitle">
                                <h4 class="bld-title">কারা রক্ত দিতে পারবেন?</h4>
                            </div>
                            <div class="bloodinfotitle">
                                <p class="bld-para">সু-চিকিৎসকদের মতে প্রাপ্তবয়স্ক সুস্থ নারী-পুরুষ চাইলেই নির্দিষ্ট সময় পরপর রক্ত দিতে পারেন। রক্ত নেয়ার আগে এর সঠিক পরীক্ষা নীরিক্ষা জরুরি। রক্তদাতাকে অবশ্যই ভাইরাসজনিত রোগ, শ্বাসযন্ত্রের রোগ এবং চর্মরোগ মুক্ত থাকতে হবে। রক্ত দেয়ার প্রথম শর্ত হচ্ছে দাতাকে সুস্থ থাকতে হবে। সুস্থ ব্যক্তির যেসব গুণ বা শারীরিক অবস্থা থাকলে রক্তদান করতে পারবেন-</p>
                                <ul class="bld-ul">
                                    <li>১. বয়সঃ ১৮ থেকে ৪৫ বছর বয়সী নারী ও পুরুষ রক্তদান করতে পারবে।</li>
                                    <li>২. ওজনঃ নারীর সর্বনিম্ন ওজন ৪৫ কেজি ও পুরুষের সর্বনিম্ন ওজন ৪৮ কেজি হতে হবে।</li>
                                    <li>৩. হিমোগ্লোবিন-এর পরিমাণঃ প্রতি ডেসিলিটার রক্তে হিমোগ্লোবিন-এর পরিমাণ – নারীর ১৪ গ্রাম ও পুরুষের ১৫ গ্রাম হতে হবে।</li>
                                    <li>৪. শরীরের তাপমাত্রাঃ রক্তদাতার শরীরের তাপমাত্রা ৩৭ ডিগ্রী সেন্টিগ্রেড/৯৮ ডিগ্রী ফারেনহাইট হতে হবে।</li>
                                    <li>৫. রক্তচাপঃ রক্তদাতার রক্তচাপ, ডায়াস্টোলিক ৭০-১০০ মিলিমিটার পারদ এবং সিস্টোলিক ১১০-১৬০ মিলিমিটার পারদ হতে হবে।</li>
                                    <li>৬. নাড়ির গড় গতিঃ রক্তদাতার নাড়ির গড় গতি প্রতি মিনিটে ৭০-৯০ বিট হতে হবে।</li>
                                </ul>
                                <p class="bld-para">সাধারণত ১২০ দিন পর পর, অর্থাৎ ৪ মাস পর পর রক্ত দেওয়া যাবে। সাধারণত প্রাপ্তবয়স্ক সুস্থ মানুষের শরীরে ৪ থেকে ৬ লিটার পরিমাণ রক্ত থাকে। প্রতিবার ৪৫০ মিলিলিটার রক্ত দেয়া হয়। এ কারণে রক্ত দিলে ক্ষতি হওয়ার আশঙ্কা একেবারেই নেই।</p>
                            </div>
                        </div>
                          <div class="col-md-2"></div>
                        <div class="col-md-5">
                            <div class="bloodinfotitle">
                                <h4 class="bld-title">কারা রক্ত দিতে পারবে না?</h4>
                            </div>
                            <div class="bloodinfotitle">
                                <p class="bld-para">মন চাইলো আর রক্তদান করতে পারবেন, তা ভুলে যান। নিয়ম না মেনে রক্তদান করলে অনেক ক্ষেত্রেই পরে নিজের শরীরের ক্ষতি হয়। তাই জেনে নিই কারা রক্ত দিতে পারবেন না।</p>
                                <ul class="bld-ul">
                                    <li>১. রক্তদাতার স্বাভাবিক সুস্থতার নির্ণায়ক উপরোক্ত গুন ও শারীরিক অবস্থা না থাকলে।</li>
                                    <li>২. এইডস, হেপাটাইটিস বি ও সি সহ যেকোন ভাইরাসজনিত রোগ, ম্যালেরিয়া, সিফিলিস এবং ক্যান্সার আক্রান্ত হলে।</li>
                                    <li>৩. যক্ষারোগে আক্রান্ত হবার ২ বছর এবং গুটি বসন্ত রোগে আক্রান্ত হবার ১ বছরের মধ্যে।</li>
                                    <li>৪. বহুমূত্র (ডায়বেটিস) রোগী, শ্বাসরোগ ও চর্মরোগী।</li>
                                    <li>৫. অ্যানেস্থেশিয়া গ্রহণ বা বড় কোন অপারেশন-এর পর।</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="row column-3">
                        <div class="col-md-5">
                            <div class="bloodinfotitle">
                                <h4 class="bld-title">রক্ত দেয়ার পর যা করনীয়ঃ</h4>
                            </div>
                            <div class="bloodinfotitle">
                                <p class="bld-para">রক্ত দেয়ার পর কিছুটা মাথা ঘোরাতে পারে। এটা স্বাভাবিক। তবে এ সময় হাঁটাহাঁটি না করে অন্তত এক থেকে দুই ঘণ্টা বিশ্রাম নেয়ার পরামর্শ দিয়েছেন বিশেষজ্ঞ ডাক্তাররা। সাধারণত প্রাপ্ত বয়স্ক সুস্থ মানুষ প্রতিবার ৪৫০ মিলিলিটার রক্ত দেয়া হয়। রক্ত দেয়ার পর করনীয়</p>
                                <ul class="bld-ul">
                                    <li>১. স্যালাইন গ্রহণঃ রক্ত দেবার পর শরীর কিছুটা দুর্বল হয়ে যেতে পারে তখন স্বাভাবিকভাবেই মাথা ঘুরাতে পারে। স্বাভাবিক হওয়া না পর্যন্ত বিশ্রাম নেয়া উচিত। তবে রক্তদানের পর, রক্তদাতা ঘামতে থাকেন এবং রক্তদাতার অস্থিরতা হয়। এক্ষেত্রে তাকে ডাক্তারের পরামর্শ অনুযায়ী স্যালাইন খাওয়ানো যেতে পারে।</li>
                                    <li>২. খাবার গ্রহণঃ রক্ত দেবার পর দেহে লোহিত রক্ত কণিকা কমে যায়, যা স্বাভাবিক হয়ে ৩০-৪৫ দিন সময় লাগে। লোহিত কণিকার পাশাপাশি দেহে ২০০-৩০০ গ্রাম আয়রন ঘাটতি হয় এবং এই ঘাটতি পূরণের জন্য আয়রন ও প্রোটিনযুক্ত খাবার গ্রহণ করতে হবে। রক্তদাতার সুস্থতাও জরুরী।</li>
                                </ul>
                            </div>
                        </div>
                         <div class="col-md-2"></div>

                        <div class="col-md-5">
                            <div class="bloodinfotitle">
                                <h4 class="bld-title">কে কাকে রক্ত দিতে পারবেন?</h4>
                            </div>
                            <div class="bloodinfotitle">
                                <p class="bld-para">রক্তের গ্রুপ মোট ৮ ধরণের: এবি+ পজিটিভ, এবি- নেগেটিভ, এ+ পজিটিভ, এ- নেগেটিভ, বি+ পজিটিভ, বি- নেগেটিভ, এবং ও+ পজিটিভ, ও- নেগেটিভ। </p>
                                <ul class="bld-ul">
                                    <li>জেনে নিন কে কাকে রক্ত দিতে পারবেন?</li>
                                </ul>
                                <table class="bld-table">
                                  <tbody>
                                      <tr>
                                          <th class="bld-th">রক্তের গ্রুপ ব্যক্তি</th>
                                        <th class="bld-th">কাদের কে রক্ত দিতে পারবে</th>
                                        <th class="bld-th">কাদের থেকে রক্ত নিতে পারবে</th>
                                      </tr>
                                      <tr>
                                          <td class="bld-td">এবি +</td>
                                        <td class="bld-td">এবি +</td>
                                        <td class="bld-td">সবার থেকে</td>
                                      </tr>

                                      <tr>
                                          <td class="bld-td">এবি -</td>
                                        <td class="bld-td">এবি + , এবি -</td>
                                        <td class="bld-td">এবি -, এ -, বি -, ও - </td>
                                      </tr>

                                      <tr>
                                          <td class="bld-td">এ +</td>
                                        <td class="bld-td">  এ +, এবি +</td>
                                        <td class="bld-td">  এ +, এ -, ও +, ও -</td>
                                      </tr>

                                      <tr>
                                          <td class="bld-td">এ -</td>
                                        <td class="bld-td">  এ +, এ -, এবি +, এবি -</td>
                                        <td class="bld-td">  এ -, ও -</td>
                                      </tr>

                                      <tr>
                                          <td class="bld-td">বি +</td>
                                        <td class="bld-td"> বি +, এবি +</td>
                                        <td class="bld-td"> বি +, বি -, ও +, ও -</td>
                                      </tr>

                                      <tr>
                                          <td class="bld-td">বি -</td>
                                        <td class="bld-td"> বি +, বি -, এবি +, এবি -</td>
                                        <td class="bld-td">বি -, ও -</td>
                                      </tr>

                                      <tr>
                                          <td class="bld-td">ও +</td>
                                        <td class="bld-td">  ও +, এ +, বি +, এবি +</td>
                                        <td class="bld-td">   ও +, ও -</td>
                                      </tr>

                                      <tr>
                                          <td class="bld-td">ও -</td>
                                        <td class="bld-td">  সবায় কে</td>
                                        <td class="bld-td"> ও -</td>
                                      </tr>
                                  </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <div class="column-4 box-activity">
                        <div class="col-md-12">
                          <div class="cimg">
                          <img width="75" height="75" src="{{asset('img/blood-drop.svg')}}">
                         </div>
                                <div class="bloodinfotitle ctitle">
                                    <h5 class="bld-title">রক্ত দেয়ার উপকারিতাঃ</h5>
                                </div>
                                <div class="bloodinfotitle">
                                    <p class="bld-para">বিশেষজ্ঞদের ও সচেতন মানুষদের মতে নিয়মিত রক্ত দেয়ার কিছু উপকার রয়েছে। সেগুলো হলো-</p>
                                    <ul class="bld-ul">
                                        <li>১. এতে একজন মানুষের জীবন বাঁচানো সম্ভব।</li>
                                        <li>২. নিয়মিত রক্তদাতাদের ক্যানসারে আক্রান্ত হওয়ার ঝুঁকি কম থাকে।</li>
                                        <li>৩. বছরে তিনবার রক্ত দিলে শরীরে নতুন লোহিত কণিকা তৈরির হার বেড়ে যায়। এতে অস্থিমজ্জা সক্রিয় থাকে। দ্রুত রক্ত স্বল্পতা পূরণ হয়।</li>
                                        <li>৪. রক্তে কোলেস্টরেলের মাত্রা কমে যায়, এতে রক্তচাপ নিয়ন্ত্রণে থাকে। ফলে হৃদরোগ ও হার্ট অ্যাটাকের ঝুঁকি অনেকটাই কমে যায়।</li>
                                        <li>৫. রক্ত দিলে যে ক্যালোরি খরচ হয়, তা ওজন কমানোর ক্ষেত্রে ও রক্তচাপ নিয়ন্ত্রণে গুরুত্বপূর্ণ ভূমিকা রাখে।</li>
                                        <li>৬. শরীরে হেপাটাইটিস-বি, হেপাটাইটিস-সি, জন্ডিস, ম্যালেরিয়া, সিফিলিস, এইচআইভি বা এইডসের মতো বড় কোন রোগ আছে কি না, সেটি বিনা খরচে জানা যায়।</li>
                                        <li>৭. রোগ প্রতিরোধ ক্ষমতা বাড়ে।</li>
                                        <li>৮. রক্তদাতার যদি নিজের কখনো রক্তের প্রয়োজন হয় তাহলে ব্লাড ব্যাংকগুলো তাকে অগ্রাধিকার দিয়ে রক্তের ব্যবস্থা করে দেয়।</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
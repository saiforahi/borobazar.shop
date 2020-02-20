@auth
@if(Route::current()->getName()!='home')
<section>
    <div id="mobileNav" class="mobilenav">
        <h1 class="mn-title">ক্যাটাগরি</h1>
        <a href="javascript:void(0)" class="closebtn" onclick="document.getElementById('mobileNav').style.width = '0';">&times;</a>
        <!--mobile menu product area-->
        <button class="accordion fa fa-plus">পণ্য</button>
            <div class="panel">
                <button class="accordion fa fa-plus">কৃষি, খাদ্য ও পানীয়</button>
                    <div class="panel">
                        <ul class="mobile-nav">
                            <li>কৃষি</li>
                                <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                                <a href="#">বিনস</a>
                                <a href="#">কফি বিনস</a>
                                <a href="#">হারবার সিগার ও সিগারেট</a>
                                <a href="#">ফীড</a>
                                <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                            <li>খাদ্য ও পানীয়</li>
                                <a href="#">অ্যালকহলিক বেভারেজ</a>
                                <a href="#">বেক গুডস</a>
                                <a href="#">ক্যানেড ফুড</a>
                                <a href="#">কনফেকশনারি</a>
                                <a href="#">ড্রিংকিং ওয়াটার</a>
                                <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                        </ul>
                    </div>
                    <button class="accordion fa fa-plus">পোশাক, ফ্যাশন, টেক্সটাইল ও টাইমপীস</button>
                        <div class="panel">
                            <ul class="mobile-nav">
                                <li>পোশাক</li>
                                    <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                                    <a href="#">বিনস</a>
                                    <a href="#">কফি বিনস</a>
                                    <a href="#">হারবার সিগার ও সিগারেট</a>
                                    <a href="#">ফীড</a>
                                    <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                <li>ফ্যাশন আকসেসরিজ</li>
                                    <a href="#">অ্যালকহলিক বেভারেজ</a>
                                    <a href="#">বেক গুডস</a>
                                    <a href="#">ক্যানেড ফুড</a>
                                    <a href="#">কনফেকশনারি</a>
                                    <a href="#">ড্রিংকিং ওয়াটার</a>
                                    <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                <li>টেক্সটাইল ও লেদার প্রোডাক্ট</li>
                                    <a href="#">অ্যালকহলিক বেভারেজ</a>
                                    <a href="#">বেক গুডস</a>
                                    <a href="#">ক্যানেড ফুড</a>
                                    <a href="#">কনফেকশনারি</a>
                                    <a href="#">ড্রিংকিং ওয়াটার</a>
                                    <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                <li>টাইমপীস, জুয়েলারি ও চশমা</li>
                                    <a href="#">অ্যালকহলিক বেভারেজ</a>
                                    <a href="#">বেক গুডস</a>
                                    <a href="#">ক্যানেড ফুড</a>
                                    <a href="#">কনফেকশনারি</a>
                                    <a href="#">ড্রিংকিং ওয়াটার</a>
                                    <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                            </ul>
                        </div>
                        <button class="accordion fa fa-plus">অটো পার্টস ও আকসেসরিজ</button>
                        <div class="panel">
                            <ul class="mobile-nav">
                                <li>অটো পার্টস</li>
                                    <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                                    <a href="#">বিনস</a>
                                    <a href="#">কফি বিনস</a>
                                    <a href="#">হারবার সিগার ও সিগারেট</a>
                                    <a href="#">ফীড</a>
                                    <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                <li>আকসেসরিজ</li>
                                    <a href="#">অ্যালকহলিক বেভারেজ</a>
                                    <a href="#">বেক গুডস</a>
                                    <a href="#">ক্যানেড ফুড</a>
                                    <a href="#">কনফেকশনারি</a>
                                    <a href="#">ড্রিংকিং ওয়াটার</a>
                                    <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                            </ul>
                        </div>
                        <button class="accordion fa fa-plus">ইলেকট্রনিক্স, যন্ত্রপাতি, নিরাপত্তা ও সংরক্ষন</button>
                        <div class="panel">
                            <ul class="mobile-nav">
                                <li>ইলেকট্রনিক্স</li>
                                    <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                                    <a href="#">বিনস</a>
                                    <a href="#">কফি বিনস</a>
                                    <a href="#">হারবার সিগার ও সিগারেট</a>
                                    <a href="#">ফীড</a>
                                    <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                <li>গৃহস্থালির যন্ত্রপাতি</li>
                                    <a href="#">অ্যালকহলিক বেভারেজ</a>
                                    <a href="#">বেক গুডস</a>
                                    <a href="#">ক্যানেড ফুড</a>
                                    <a href="#">কনফেকশনারি</a>
                                    <a href="#">ড্রিংকিং ওয়াটার</a>
                                    <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                <li>নিরাপত্তা ও সংরক্ষন</li>
                                    <a href="#">অ্যালকহলিক বেভারেজ</a>
                                    <a href="#">বেক গুডস</a>
                                    <a href="#">ক্যানেড ফুড</a>
                                    <a href="#">কনফেকশনারি</a>
                                    <a href="#">ড্রিংকিং ওয়াটার</a>
                                    <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                            </ul>
                        </div>
                        <button class="accordion fa fa-plus">ইলেকট্রিক্যাল ও টেলিকমিউনিকেশন</button>
                        <div class="panel">
                            <ul class="mobile-nav">
                                <li>ইলেকট্রিক্যাল</li>
                                    <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                                    <a href="#">বিনস</a>
                                    <a href="#">কফি বিনস</a>
                                    <a href="#">হারবার সিগার ও সিগারেট</a>
                                    <a href="#">ফীড</a>
                                    <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                <li>টেলিকমিউনিকেশন</li>
                                    <a href="#">অ্যালকহলিক বেভারেজ</a>
                                    <a href="#">বেক গুডস</a>
                                    <a href="#">ক্যানেড ফুড</a>
                                    <a href="#">কনফেকশনারি</a>
                                    <a href="#">ড্রিংকিং ওয়াটার</a>
                                    <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                            </ul>
                        </div>
                        <button class="accordion fa fa-plus">স্পোর্টস, উপহার ও খেলনা</button>
                        <div class="panel">
                            <ul class="mobile-nav">
                                <li>স্পোর্টস ও এন্টারটেইনমেন্ট</li>
                                <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                                <a href="#">বিনস</a>
                                <a href="#">কফি বিনস</a>
                                <a href="#">হারবার সিগার ও সিগারেট</a>
                                <a href="#">ফীড</a>
                                <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                <li>উপহার ও কার্ফট</li>
                                <a href="#">অ্যালকহলিক বেভারেজ</a>
                                <a href="#">বেক গুডস</a>
                                <a href="#">ক্যানেড ফুড</a>
                                <a href="#">কনফেকশনারি</a>
                                <a href="#">ড্রিংকিং ওয়াটার</a>
                                <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                <li>খেলনা ও শখ</li>
                                <a href="#">অ্যালকহলিক বেভারেজ</a>
                                <a href="#">বেক গুডস</a>
                                <a href="#">ক্যানেড ফুড</a>
                                <a href="#">কনফেকশনারি</a>
                                <a href="#">ড্রিংকিং ওয়াটার</a>
                                <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                            </ul>
                        </div>
                        <button class="accordion fa fa-plus">স্বাস্থ্য ও বিউটি</button>
                        <div class="panel">
                            <ul class="mobile-nav">
                                <li>স্বাস্থ্য ও মেডিক্যাল</li>
                                    <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                                    <a href="#">বিনস</a>
                                    <a href="#">কফি বিনস</a>
                                    <a href="#">হারবার সিগার ও সিগারেট</a>
                                    <a href="#">ফীড</a>
                                    <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                <li>বিউটি ও ব্যক্তিগত যত্ন</li>
                                    <a href="#">অ্যালকহলিক বেভারেজ</a>
                                    <a href="#">বেক গুডস</a>
                                    <a href="#">ক্যানেড ফুড</a>
                                    <a href="#">কনফেকশনারি</a>
                                    <a href="#">ড্রিংকিং ওয়াটার</a>
                                    <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                            </ul>
                        </div>
                        <button class="accordion fa fa-plus">কনস্ট্রাকশন, হোম, লাইটস ও ফার্নিচার</button>
                        <div class="panel">
                            <ul class="mobile-nav">
                                <li>কনস্ট্রাকশন ও রিয়েল ইস্টেট</li>
                                    <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                                    <a href="#">বিনস</a>
                                    <a href="#">কফি বিনস</a>
                                    <a href="#">হারবার সিগার ও সিগারেট</a>
                                    <a href="#">ফীড</a>
                                    <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                <li>হোম ও গার্ডেন</li>
                                    <a href="#">অ্যালকহলিক বেভারেজ</a>
                                    <a href="#">বেক গুডস</a>
                                    <a href="#">ক্যানেড ফুড</a>
                                    <a href="#">কনফেকশনারি</a>
                                    <a href="#">ড্রিংকিং ওয়াটার</a>
                                    <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                <li>লাইটস ও লাইটিং</li>
                                    <a href="#">অ্যালকহলিক বেভারেজ</a>
                                    <a href="#">বেক গুডস</a>
                                    <a href="#">ক্যানেড ফুড</a>
                                    <a href="#">কনফেকশনারি</a>
                                    <a href="#">ড্রিংকিং ওয়াটার</a>
                                    <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                <li>ফার্নিচার</li>
                                    <a href="#">অ্যালকহলিক বেভারেজ</a>
                                    <a href="#">বেক গুডস</a>
                                    <a href="#">ক্যানেড ফুড</a>
                                    <a href="#">কনফেকশনারি</a>
                                    <a href="#">ড্রিংকিং ওয়াটার</a>
                                    <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                            </ul>
                        </div>
                        <button class="accordion fa fa-plus">ব্যাগ, জুতা এবং আনুষাঙ্গিক</button>
                        <div class="panel">
                            <ul class="mobile-nav">
                                <li>ল্যাগেজ, ব্যাগ ও কেইস</li>
                                    <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                                    <a href="#">বিনস</a>
                                    <a href="#">কফি বিনস</a>
                                    <a href="#">হারবার সিগার ও সিগারেট</a>
                                    <a href="#">ফীড</a>
                                    <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                <li>জুতা এবং আনুষাঙ্গিক</li>
                                    <a href="#">অ্যালকহলিক বেভারেজ</a>
                                    <a href="#">বেক গুডস</a>
                                    <a href="#">ক্যানেড ফুড</a>
                                    <a href="#">কনফেকশনারি</a>
                                    <a href="#">ড্রিংকিং ওয়াটার</a>
                                    <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                            </ul>
                        </div>
                        <button class="accordion fa fa-plus">মেশিনারি, যন্ত্রাংশ, ফেব্রিকেশন ও টুলস</button>
                        <div class="panel">
                            <ul class="mobile-nav">
                                <li>মেশিনারি</li>
                                    <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                                    <a href="#">বিনস</a>
                                    <a href="#">কফি বিনস</a>
                                    <a href="#">হারবার সিগার ও সিগারেট</a>
                                    <a href="#">ফীড</a>
                                    <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                <li>শিল্প যন্ত্রাংশ ও সরঞ্জাম</li>
                                    <a href="#">অ্যালকহলিক বেভারেজ</a>
                                    <a href="#">বেক গুডস</a>
                                    <a href="#">ক্যানেড ফুড</a>
                                    <a href="#">কনফেকশনারি</a>
                                    <a href="#">ড্রিংকিং ওয়াটার</a>
                                    <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                <li>ফেব্রিকেশন সার্ভিস</li>
                                    <a href="#">অ্যালকহলিক বেভারেজ</a>
                                    <a href="#">বেক গুডস</a>
                                    <a href="#">ক্যানেড ফুড</a>
                                    <a href="#">কনফেকশনারি</a>
                                    <a href="#">ড্রিংকিং ওয়াটার</a>
                                    <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                <li>টুলস ও হাডওয়্যার</li>
                                    <a href="#">অ্যালকহলিক বেভারেজ</a>
                                    <a href="#">বেক গুডস</a>
                                    <a href="#">ক্যানেড ফুড</a>
                                    <a href="#">কনফেকশনারি</a>
                                    <a href="#">ড্রিংকিং ওয়াটার</a>
                                    <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                            </ul>
                        </div>
                        <button class="accordion fa fa-plus">মিনারেল, কেমিক্যালস, রাবার ও এনার্জি</button>
                        <div class="panel">
                            <ul class="mobile-nav">
                                <li>মিনারেল ও মেটালজি</li>
                                    <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                                    <a href="#">বিনস</a>
                                    <a href="#">কফি বিনস</a>
                                    <a href="#">হারবার সিগার ও সিগারেট</a>
                                    <a href="#">ফীড</a>
                                    <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                <li>কেমিক্যালস</li>
                                    <a href="#">অ্যালকহলিক বেভারেজ</a>
                                    <a href="#">বেক গুডস</a>
                                    <a href="#">ক্যানেড ফুড</a>
                                    <a href="#">কনফেকশনারি</a>
                                    <a href="#">ড্রিংকিং ওয়াটার</a>
                                    <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                <li>রাবার ও প্লাস্টিক</li>
                                    <a href="#">অ্যালকহলিক বেভারেজ</a>
                                    <a href="#">বেক গুডস</a>
                                    <a href="#">ক্যানেড ফুড</a>
                                    <a href="#">কনফেকশনারি</a>
                                    <a href="#">ড্রিংকিং ওয়াটার</a>
                                    <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                <li>এনার্জি</li>
                                    <a href="#">অ্যালকহলিক বেভারেজ</a>
                                    <a href="#">বেক গুডস</a>
                                    <a href="#">ক্যানেড ফুড</a>
                                    <a href="#">কনফেকশনারি</a>
                                    <a href="#">ড্রিংকিং ওয়াটার</a>
                                    <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                            </ul>
                        </div>
                        <button class="accordion fa fa-plus">প্যাকেজিং ও অফিস</button>
                        <div class="panel">
                            <ul class="mobile-nav">
                                <li>প্যাকেজিং ও প্রিন্টিং</li>
                                    <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                                    <a href="#">বিনস</a>
                                    <a href="#">কফি বিনস</a>
                                    <a href="#">হারবার সিগার ও সিগারেট</a>
                                    <a href="#">ফীড</a>
                                    <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                <li>অফিস ও স্কুল সাপ্লাই</li>
                                    <a href="#">অ্যালকহলিক বেভারেজ</a>
                                    <a href="#">বেক গুডস</a>
                                    <a href="#">ক্যানেড ফুড</a>
                                    <a href="#">কনফেকশনারি</a>
                                    <a href="#">ড্রিংকিং ওয়াটার</a>
                                    <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                            </ul>
                        </div>
                    </div>
                    <!--end mobile menu product area-->
      
                    <!--mobile menu services area-->
                    <button class="accordion fa fa-plus">সেবা</button>
                    <div class="panel">
                        <button class="accordion fa fa-plus">কৃষি, খাদ্য ও পানীয়</button>
                        <div class="panel">
                            <ul class="mobile-nav">
                                <li>কৃষি</li>
                                    <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                                    <a href="#">বিনস</a>
                                    <a href="#">কফি বিনস</a>
                                    <a href="#">হারবার সিগার ও সিগারেট</a>
                                    <a href="#">ফীড</a>
                                    <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                <li>খাদ্য ও পানীয়</li>
                                    <a href="#">অ্যালকহলিক বেভারেজ</a>
                                    <a href="#">বেক গুডস</a>
                                    <a href="#">ক্যানেড ফুড</a>
                                    <a href="#">কনফেকশনারি</a>
                                    <a href="#">ড্রিংকিং ওয়াটার</a>
                                    <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                            </ul>
                        </div>
                    <button class="accordion fa fa-plus">পোশাক, ফ্যাশন, টেক্সটাইল ও টাইমপীস</button>
                  <div class="panel">
                      <ul class="mobile-nav">
                          <li>পোশাক</li>
                              <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                              <a href="#">বিনস</a>
                              <a href="#">কফি বিনস</a>
                              <a href="#">হারবার সিগার ও সিগারেট</a>
                              <a href="#">ফীড</a>
                              <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                          <li>ফ্যাশন আকসেসরিজ</li>
                              <a href="#">অ্যালকহলিক বেভারেজ</a>
                              <a href="#">বেক গুডস</a>
                              <a href="#">ক্যানেড ফুড</a>
                              <a href="#">কনফেকশনারি</a>
                              <a href="#">ড্রিংকিং ওয়াটার</a>
                              <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                          <li>টেক্সটাইল ও লেদার প্রোডাক্ট</li>
                              <a href="#">অ্যালকহলিক বেভারেজ</a>
                              <a href="#">বেক গুডস</a>
                              <a href="#">ক্যানেড ফুড</a>
                              <a href="#">কনফেকশনারি</a>
                              <a href="#">ড্রিংকিং ওয়াটার</a>
                              <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                          <li>টাইমপীস, জুয়েলারি ও চশমা</li>
                              <a href="#">অ্যালকহলিক বেভারেজ</a>
                              <a href="#">বেক গুডস</a>
                              <a href="#">ক্যানেড ফুড</a>
                              <a href="#">কনফেকশনারি</a>
                              <a href="#">ড্রিংকিং ওয়াটার</a>
                              <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                      </ul>
                  </div>
              <button class="accordion fa fa-plus">অটো পার্টস ও আকসেসরিজ</button>
                  <div class="panel">
                      <ul class="mobile-nav">
                          <li>অটো পার্টস</li>
                              <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                              <a href="#">বিনস</a>
                              <a href="#">কফি বিনস</a>
                              <a href="#">হারবার সিগার ও সিগারেট</a>
                              <a href="#">ফীড</a>
                              <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                          <li>আকসেসরিজ</li>
                              <a href="#">অ্যালকহলিক বেভারেজ</a>
                              <a href="#">বেক গুডস</a>
                              <a href="#">ক্যানেড ফুড</a>
                              <a href="#">কনফেকশনারি</a>
                              <a href="#">ড্রিংকিং ওয়াটার</a>
                              <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                      </ul>
                  </div>
              <button class="accordion fa fa-plus">ইলেকট্রনিক্স, যন্ত্রপাতি, নিরাপত্তা ও সংরক্ষন</button>
                  <div class="panel">
                      <ul class="mobile-nav">
                          <li>ইলেকট্রনিক্স</li>
                              <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                              <a href="#">বিনস</a>
                              <a href="#">কফি বিনস</a>
                              <a href="#">হারবার সিগার ও সিগারেট</a>
                              <a href="#">ফীড</a>
                              <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                          <li>গৃহস্থালির যন্ত্রপাতি</li>
                              <a href="#">অ্যালকহলিক বেভারেজ</a>
                              <a href="#">বেক গুডস</a>
                              <a href="#">ক্যানেড ফুড</a>
                              <a href="#">কনফেকশনারি</a>
                              <a href="#">ড্রিংকিং ওয়াটার</a>
                              <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                          <li>নিরাপত্তা ও সংরক্ষন</li>
                              <a href="#">অ্যালকহলিক বেভারেজ</a>
                              <a href="#">বেক গুডস</a>
                              <a href="#">ক্যানেড ফুড</a>
                              <a href="#">কনফেকশনারি</a>
                              <a href="#">ড্রিংকিং ওয়াটার</a>
                              <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                      </ul>
                  </div>
              <button class="accordion fa fa-plus">ইলেকট্রিক্যাল ও টেলিকমিউনিকেশন</button>
                  <div class="panel">
                      <ul class="mobile-nav">
                          <li>ইলেকট্রিক্যাল</li>
                              <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                              <a href="#">বিনস</a>
                              <a href="#">কফি বিনস</a>
                              <a href="#">হারবার সিগার ও সিগারেট</a>
                              <a href="#">ফীড</a>
                              <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                          <li>টেলিকমিউনিকেশন</li>
                              <a href="#">অ্যালকহলিক বেভারেজ</a>
                              <a href="#">বেক গুডস</a>
                              <a href="#">ক্যানেড ফুড</a>
                              <a href="#">কনফেকশনারি</a>
                              <a href="#">ড্রিংকিং ওয়াটার</a>
                              <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                      </ul>
                  </div>
              <button class="accordion fa fa-plus">স্পোর্টস, উপহার ও খেলনা</button>
                  <div class="panel">
                      <ul class="mobile-nav">
                          <li>স্পোর্টস ও এন্টারটেইনমেন্ট</li>
                              <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                              <a href="#">বিনস</a>
                              <a href="#">কফি বিনস</a>
                              <a href="#">হারবার সিগার ও সিগারেট</a>
                              <a href="#">ফীড</a>
                              <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                          <li>উপহার ও কার্ফট</li>
                              <a href="#">অ্যালকহলিক বেভারেজ</a>
                              <a href="#">বেক গুডস</a>
                              <a href="#">ক্যানেড ফুড</a>
                              <a href="#">কনফেকশনারি</a>
                              <a href="#">ড্রিংকিং ওয়াটার</a>
                              <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                          <li>খেলনা ও শখ</li>
                              <a href="#">অ্যালকহলিক বেভারেজ</a>
                              <a href="#">বেক গুডস</a>
                              <a href="#">ক্যানেড ফুড</a>
                              <a href="#">কনফেকশনারি</a>
                              <a href="#">ড্রিংকিং ওয়াটার</a>
                              <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                      </ul>
                  </div>
              <button class="accordion fa fa-plus">স্বাস্থ্য ও বিউটি</button>
                  <div class="panel">
                      <ul class="mobile-nav">
                          <li>স্বাস্থ্য ও মেডিক্যাল</li>
                              <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                              <a href="#">বিনস</a>
                              <a href="#">কফি বিনস</a>
                              <a href="#">হারবার সিগার ও সিগারেট</a>
                              <a href="#">ফীড</a>
                              <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                          <li>বিউটি ও ব্যক্তিগত্ যত্ন</li>
                              <a href="#">অ্যালকহলিক বেভারেজ</a>
                              <a href="#">বেক গুডস</a>
                              <a href="#">ক্যানেড ফুড</a>
                              <a href="#">কনফেকশনারি</a>
                              <a href="#">ড্রিংকিং ওয়াটার</a>
                              <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                      </ul>
                  </div>
              <button class="accordion fa fa-plus">কনস্ট্রাকশন, হোম, লাইটস ও ফার্নিচার</button>
                  <div class="panel">
                      <ul class="mobile-nav">
                          <li>কনস্ট্রাকশন ও রিয়েল ইস্টেট</li>
                              <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                              <a href="#">বিনস</a>
                              <a href="#">কফি বিনস</a>
                              <a href="#">হারবার সিগার ও সিগারেট</a>
                              <a href="#">ফীড</a>
                              <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                          <li>হোম ও গার্ডেন</li>
                              <a href="#">অ্যালকহলিক বেভারেজ</a>
                              <a href="#">বেক গুডস</a>
                              <a href="#">ক্যানেড ফুড</a>
                              <a href="#">কনফেকশনারি</a>
                              <a href="#">ড্রিংকিং ওয়াটার</a>
                              <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                          <li>লাইটস ও লাইটিং</li>
                              <a href="#">অ্যালকহলিক বেভারেজ</a>
                              <a href="#">বেক গুডস</a>
                              <a href="#">ক্যানেড ফুড</a>
                              <a href="#">কনফেকশনারি</a>
                              <a href="#">ড্রিংকিং ওয়াটার</a>
                              <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                          <li>ফার্নিচার</li>
                              <a href="#">অ্যালকহলিক বেভারেজ</a>
                              <a href="#">বেক গুডস</a>
                              <a href="#">ক্যানেড ফুড</a>
                              <a href="#">কনফেকশনারি</a>
                              <a href="#">ড্রিংকিং ওয়াটার</a>
                              <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                      </ul>
                  </div>
              <button class="accordion fa fa-plus">ব্যাগ, জুতা এবং আনুষাঙ্গিক</button>
                  <div class="panel">
                      <ul class="mobile-nav">
                          <li>ল্যাগেজ, ব্যাগ ও কেইস</li>
                              <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                              <a href="#">বিনস</a>
                              <a href="#">কফি বিনস</a>
                              <a href="#">হারবার সিগার ও সিগারেট</a>
                              <a href="#">ফীড</a>
                              <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                          <li>জুতা এবং আনুষাঙ্গিক</li>
                              <a href="#">অ্যালকহলিক বেভারেজ</a>
                              <a href="#">বেক গুডস</a>
                              <a href="#">ক্যানেড ফুড</a>
                              <a href="#">কনফেকশনারি</a>
                              <a href="#">ড্রিংকিং ওয়াটার</a>
                              <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                      </ul>
                  </div>
              <button class="accordion fa fa-plus">মেশিনারি, যন্ত্রাংশ, ফেব্রিকেশন ও টুলস</button>
                   <div class="panel">
                      <ul class="mobile-nav">
                          <li>মেশিনারি</li>
                              <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                              <a href="#">বিনস</a>
                              <a href="#">কফি বিনস</a>
                              <a href="#">হারবার সিগার ও সিগারেট</a>
                              <a href="#">ফীড</a>
                              <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                          <li>শিল্প যন্ত্রাংশ ও সরঞ্জাম</li>
                              <a href="#">অ্যালকহলিক বেভারেজ</a>
                              <a href="#">বেক গুডস</a>
                              <a href="#">ক্যানেড ফুড</a>
                              <a href="#">কনফেকশনারি</a>
                              <a href="#">ড্রিংকিং ওয়াটার</a>
                              <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                          <li>ফেব্রিকেশন সার্ভিস</li>
                              <a href="#">অ্যালকহলিক বেভারেজ</a>
                              <a href="#">বেক গুডস</a>
                              <a href="#">ক্যানেড ফুড</a>
                              <a href="#">কনফেকশনারি</a>
                              <a href="#">ড্রিংকিং ওয়াটার</a>
                              <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                          <li>টুলস ও হাডওয়্যার</li>
                              <a href="#">অ্যালকহলিক বেভারেজ</a>
                              <a href="#">বেক গুডস</a>
                              <a href="#">ক্যানেড ফুড</a>
                              <a href="#">কনফেকশনারি</a>
                              <a href="#">ড্রিংকিং ওয়াটার</a>
                              <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                      </ul>
                  </div>
              <button class="accordion fa fa-plus">মিনারেল, কেমিক্যালস, রাবার ও এনার্জি</button>
                  <div class="panel">
                      <ul class="mobile-nav">
                          <li>মিনারেল ও মেটালজি</li>
                              <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                              <a href="#">বিনস</a>
                              <a href="#">কফি বিনস</a>
                              <a href="#">হারবার সিগার ও সিগারেট</a>
                              <a href="#">ফীড</a>
                              <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                          <li>কেমিক্যালস</li>
                              <a href="#">অ্যালকহলিক বেভারেজ</a>
                              <a href="#">বেক গুডস</a>
                              <a href="#">ক্যানেড ফুড</a>
                              <a href="#">কনফেকশনারি</a>
                              <a href="#">ড্রিংকিং ওয়াটার</a>
                              <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                          <li>রাবার ও প্লাস্টিক</li>
                              <a href="#">অ্যালকহলিক বেভারেজ</a>
                              <a href="#">বেক গুডস</a>
                              <a href="#">ক্যানেড ফুড</a>
                              <a href="#">কনফেকশনারি</a>
                              <a href="#">ড্রিংকিং ওয়াটার</a>
                              <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                          <li>এনার্জি</li>
                              <a href="#">অ্যালকহলিক বেভারেজ</a>
                              <a href="#">বেক গুডস</a>
                              <a href="#">ক্যানেড ফুড</a>
                              <a href="#">কনফেকশনারি</a>
                              <a href="#">ড্রিংকিং ওয়াটার</a>
                              <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                        </ul>
                    </div>
                    <button class="accordion fa fa-plus">প্যাকেজিং ও অফিস</button>
                    <div class="panel">
                        <ul class="mobile-nav">
                            <li>প্যাকেজিং ও প্রিন্টিং</li>
                            <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                            <a href="#">বিনস</a>
                            <a href="#">কফি বিনস</a>
                            <a href="#">হারবার সিগার ও সিগারেট</a>
                            <a href="#">ফীড</a>
                            <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                            <li>অফিস ও স্কুল সাপ্লাই</li>
                            <a href="#">অ্যালকহলিক বেভারেজ</a>
                            <a href="#">বেক গুডস</a>
                            <a href="#">ক্যানেড ফুড</a>
                            <a href="#">কনফেকশনারি</a>
                            <a href="#">ড্রিংকিং ওয়াটার</a>
                            <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                      </ul>
                  </div>
      </div>
      <!--end mobile menu services area-->
      
  </div>
</section>
@endif
@endauth
<section class="bnavigationbar">
    @if(session()->has('AccountCreatedMessage'))
        <script>window.AccountCreatedMessage={!!json_encode(session('AccountCreatedMessage'))!!}</script>
    @endif
    <!--scroll indicator-->  
    <div class="header">
        <div class="progress-container">
            <div class="progress-bar" id="myBar"></div>
        </div>  
    </div>
    <!--end scroll indicator-->
    <div class="container-fluid pt-2 pb-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <!--brand-logo area -->
                        <div class="col-md-3">
                            <a class="logo" href="{{route('home')}}">
                                <img width="50" height="auto" class="pulse" src="{{asset('img/logo.png')}}" alt="borobazar">
                                <img width="160" height="auto" class="pdr-12" src="{{asset('img/borobazar.png')}}" alt="borobazar">
                            </a>
                        </div>
                        @if(Route::current()->getName()=='dashboard')
                        <div class="col-md-5">
                            @auth
                            <div class="header-search">
                                <form>
                                    <input class="input search-input" type="text" placeholder="খোঁজ করুন">
                                    <select class="input search-categories">
                                        <option selected="select" value="0">সকল ক্যাটাগরি</option>
                                        <option value="1">কৃষি ও খাদ্য</option>
                                        <option value="2">পোশাক, বস্ত্র ও আনুষাঙ্গিক</option>
                                        <option value="3">অটো ও পরিবহন</option>
                                        <option value="4">ইলেকট্রনিক্স ডিভাইস</option>
                                        <option value="5">বৈদ্যুতিক সরঞ্জাম, উপাদান এবং টেলিকম</option>
                                        <option value="6">উপহার, ক্রীড়া ও খেলনা</option>
                                        <option value="7">স্বাস্থ্য এবং সৌন্দর্য</option>
                                        <option value="8">বাসা, আলো এবং নির্মাণ</option>
                                        <option value="9">ব্যাগ, জুতা এবং আনুষাঙ্গিক</option>
                                        <option value="10">যন্ত্রপাতি, শিল্প যন্ত্রাংশ ও সরঞ্জাম</option>
                                        <option value="11">ধাতুবিদ্যা, কেমিক্যালস, রাবার ও প্লাস্টিক</option>
                                        <option value="12">প্যাকেজিং, বিজ্ঞাপন ও অফিস</option>
                                    </select>
                                    <button class="search-btn" type="button">
                                    <i class="fa fa-search"></i></button>
                                </form>
                            </div>
                            @endauth
                        </div>
                        @endif
                        <!--end brand-logo area -->
                        
                        <!--navbar area -->
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <button  class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavBarView" aria-controls="mainNavBarView" aria-expanded="false" aria-label="Toggle navigation"><!--<span class="navbar-toggler-icon"></span>--><span class="fa fa-bars"></span></button>
                            <div class="collapse navbar-collapse" id="mainNavBarView">
                                <ul class="middle navbar-nav mr-auto">
                                    @if(Route::current()->getName()=='home')
                                    <li>
                                        <a href="#whybb" class="whyborobazar">বড়বাজার কেন</a>
                                    </li>
                                    <li>
                                        <a href="#openashop" class="whyborobazar">শপ খুলুন</a>
                                    </li>
                                    <li>
                                        <a href="#" class="whyborobazar">সম্বন্ধে</a>
                                    </li>
                                    <li>
                                        <a href="#socialblog" class="whyborobazar">সোস্যাল ব্লগ</a>
                                    </li>
                                    <li>
                                        <a href="#career" class="whyborobazar">চাকরি</a>
                                    </li>
                                    <li>
                                        <a href="#" class="whyborobazar">দেশীয়</a>
                                    </li>
                                    <li>
                                        <a href="#" class="whyborobazar">সারাবিশ্ব</a>
                                    </li>
                                    <li>
                                        <a href="#" class="whyborobazar">সংবাদ</a>
                                    </li>
                                    <li>
                                        <a href="#" class="whyborobazar"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="whyborobazar"></a>
                                    </li>
                                    <li>
                                        <a href="#" class="whyborobazar"></a>
                                    </li>
                                    @endif
                                    @auth
                                    <li>
                                        <div class="header-account" onclick="document.getElementById('Ademo').classList.toggle('open');">
                                            <i class="bsquare fa fa-user-o"></i> {{strtoupper(Auth::user()->name)}}
                                            <div id="Ademo" class="dropdown-content">
                                                <a href="{{ route('profile') }}"><i class="mt-1 fa fa-user-o"></i>আমার অ্যাকাউন্ট</a>
                                                <a href="#"><i class="mt-1 fa fa-heart-o"></i>পছন্দ তালিকা</a>
                                                <a href="track.html"><i class="mt-1 fa fa-truck"></i>অর্ডার ট্র্যাক</a>
                                                <a href="checkout.html"><i class="mt-1 fa fa-check-square"></i>চেক আউট</a>
                                                <a href="settings.html"><i class="mt-1 fa fa-cog"></i>সেটিংস</a>
                                                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="mt-1 fa fa-power-off"></i>লগআউট</a>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    @csrf
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                    <!---Notification area--->
                                    <li class="header-cart dropdown default-dropdown">
                                        <notification-icon :notification_number="total_unread"></notification-icon>
                                        <notification-panel @user_click="setModalData" @new_arrival="setData"></notification-panel>
                                        <notification-modal :quick_view_data="blood_request"></notification-modal>
                                    </li>
                                    @endauth
                                    <!---End Notification area--->
                                    @guest
                                    @if(Request::path() == 'login')
                                    <li>
                                        <i class="bsquare fa fa-user-o"></i>
                                        <a class="text-uppercase whyborobazar" href="{{ route('register') }}">নিবন্ধন</a> 
                                    </li>
                                    
                                    @elseif(Request::path() == 'register')
                                    <li>
                                        <i class="bsquare fa fa-user-o"></i>
                                        <a class="text-uppercase whyborobazar" href="{{route('login')}}">লগইন</a> 
                                    </li>

                                    @else
                                    <li>
                                        <i class="bsquare fa fa-user-o"></i>
                                        <a class="text-uppercase whyborobazar" href="#" onclick="document.getElementById('loginModalBlade').style.display='block'">লগইন</a> / 
                                        <a class="text-uppercase whyborobazar" href="{{ route('register') }}">নিবন্ধন</a> 
                                    </li>
                                    @endif
                                    @endguest 
                                    @auth
                                    <li id="app_list" onclick="document.getElementById('bb-demo').classList.toggle('open');">
                                        <div class="bb-allserv">
                                            <img src="{{asset('img/apps.svg')}}" width="20">
                                            <div id="bb-demo" class="mega dropdown-content">
                                                <ul class="allserv-item">
                                                    <li class="dropdown default-dropdown" title="রক্তদান">
                                                        <a href="{{route('blood-donation')}}"><img src="img/blood-drop.svg"></a>
                                                    </li>
                                                    <li class="dropdown default-dropdown" title="গৃহশিক্ষক">
                                                        <a href="categories-list/Services/Tutor/tutor.html"><img src="img/graduate-student-avatar.svg"></a>
                                                    </li>
                                                    <li class="dropdown default-dropdown" title="হোম সেবা">
                                                        <a href="categories-list/Services/To-let/to-let.html"><img src="img/home-address.svg"></a>
                                                    </li>
                                                    <li class="dropdown default-dropdown" title="আইন সেবা">
                                                        <a href="categories-list/Services/Law%2520Services/lawyer.html"><img src="img/lawyer.svg"></a>
                                                    </li>
                                                    <li class="dropdown default-dropdown" title="রক্তদান">
                                                        <a href="categories-list/Services/Blood/blood-donation.html"><img src="img/male-user.svg"></a>
                                                    </li>
                                                    <li class="dropdown default-dropdown" title="রক্তদান">
                                                        <a href="categories-list/Services/Blood/blood-donation.html"><img src="img/male-user.svg"></a>
                                                    </li>
                                                    <li class="dropdown default-dropdown" title="রক্তদান">
                                                        <a href="categories-list/Services/Blood/blood-donation.html"><img src="img/male-user.svg"></a>
                                                    </li>
                                                    <li class="dropdown default-dropdown" title="রক্তদান">
                                                        <a href="categories-list/Services/Blood/blood-donation.html"><img src="img/male-user.svg"></a>
                                                    </li>
                                                    <li class="dropdown default-dropdown" title="রক্তদান">
                                                        <a href="categories-list/Services/Blood/blood-donation.html"><img src="img/male-user.svg"></a>
                                                    </li>
                                                    <li class="dropdown default-dropdown" title="রক্তদান">
                                                        <a href="categories-list/Services/Blood/blood-donation.html"><img src="img/male-user.svg"></a>
                                                    </li>
                                                    <li class="dropdown default-dropdown" title="রক্তদান">
                                                        <a href="categories-list/Services/Blood/blood-donation.html"><img src="img/male-user.svg"></a>
                                                    </li>
                                                    <li class="dropdown default-dropdown" title="রক্তদান">
                                                        <a href="categories-list/Services/Blood/blood-donation.html"><img src="img/male-user.svg"></a>
                                                    </li>
                                                    <li class="dropdown default-dropdown" title="রক্তদান">
                                                        <a href="categories-list/Services/Blood/blood-donation.html"><img src="img/male-user.svg"></a>
                                                    </li>
                                                    <li class="dropdown default-dropdown" title="রক্তদান">
                                                        <a href="categories-list/Services/Blood/blood-donation.html"><img src="img/male-user.svg"></a>
                                                    </li>
                                                    <li class="dropdown default-dropdown" title="রক্তদান">
                                                        <a href="categories-list/Services/Blood/blood-donation.html"><img src="img/male-user.svg"></a>
                                                    </li>
                                                    <li class="dropdown default-dropdown" title="রক্তদান">
                                                        <a href="categories-list/Services/Blood/blood-donation.html"><img src="img/male-user.svg"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    @endauth
                                </ul>
                            </nav>
                            <!--End navbar area -->
                                
                            <!--scrollspy navbar area -->
                                
                            <!--End scrollspy navbar area -->
                        </div>
                    </div>
                </div>
                @auth
                @if(Route::current()->getName()!='home')
                <!-- Use any element to open the sidenav -->
                <span class="mobilemenu" onclick="document.getElementById('mobileNav').style.width = '300px'"><i class="bsquare fa fa-th"></i></span>
                    
                <div class="categories_dropdwn d-none d-md-block" onclick="document.getElementById('demo').classList.toggle('open')">
                    <i class="bsquare fa fa-bars"></i>
                    <span class="c-title"> ক্যাটাগরি</span>
                        <div id="demo" class="side-dropdown-content">
                            <ul class="categories-item">
                                <li class="dropdown default-dropdown">পণ্য
                                    <div class="sub-dropdown-content">
                                        <ul>
                                            <li class="dropdown-2 default-dropdown">কৃষি / খাদ্য ও পানীয়
                                                <div class="list-dropdown-content">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <a herf="#"><h6 class="c-title">কৃষি</h6></a>
                                                            <div class="row">
                                                                <div class="c-list col-lg-12">
                                                                    <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                                                                    <a href="#">বিনস</a>
                                                                    <a href="#">কফি বিনস</a>
                                                                    <a href="#">হারবার সিগার ও সিগারেট</a>
                                                                    <a href="#">ফীড</a>
                                                                    <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                </div>
                                                                </div>
                                                            </div>
                    
                                                            <div class="col-lg-6">
                                                            <a href="#"><h6 class="c-title">খাদ্য ও পানীয়</h6></a>
                                                            <div class="row">
                                                                <div class="c-list col-lg-12">
                                                                    <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                    <a href="#">বেক গুডস</a>
                                                                    <a href="#">ক্যানেড ফুড</a>
                                                                    <a href="#">কনফেকশনারি</a>
                                                                    <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                    <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                </div>
                                                                </div>
                                                            </div>  
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="dropdown-2 default-dropdown">পোশাক / ফ্যাশন / টেক্সটাইল / টাইমপীস
                                                    <div class="list-dropdown-content">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <a href="#"><h6 class="c-title">পোশাক</h6></a>
                                                                <div class="row">
                                                                    <div class="c-list col-lg-12">
                                                                        <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                                                                        <a href="#">বিনস</a>
                                                                        <a href="#">কফি বিনস</a>
                                                                        <a href="#">হারবার সিগার ও সিগারেট</a>
                                                                        <a href="#">ফীড</a>
                                                                        <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                    </div>
                                                                </div>
                                                            </div>
            
                                                            <div class="col-lg-6">
                                                                <a href="#"><h6 class="c-title">ফ্যাশন আকসেসরিজ</h6></a>
                                                                <div class="row">
                                                                    <div class="c-list col-lg-12">
                                                                        <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                        <a href="#">বেক গুডস</a>
                                                                        <a href="#">ক্যানেড ফুড</a>
                                                                        <a href="#">কনফেকশনারি</a>
                                                                        <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                        <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                    <a href="#"><h6 class="c-title">টেক্সটাইল ও লেদার প্রোডাক্ট</h6></a>
                                                                    <div class="row">
                                                                        <div class="c-list col-lg-12">
                                                                            <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                            <a href="#">বেক গুডস</a>
                                                                            <a href="#">ক্যানেড ফুড</a>
                                                                            <a href="#">কনফেকশনারি</a>
                                                                            <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                            <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                             
                                                                <div class="col-lg-6">
                                                                    <a href="#"><h6 class="c-title">টাইমপীস, জুয়েলারি ও চশমা</h6></a>
                                                                    <div class="row">
                                                                        <div class="c-list col-lg-12">
                                                                            <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                            <a href="#">বেক গুডস</a>
                                                                            <a href="#">ক্যানেড ফুড</a>
                                                                            <a href="#">কনফেকশনারি</a>
                                                                            <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                            <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown-2 default-dropdown">আটো পার্টস / আকসেসরিজ
                                                        <div class="list-dropdown-content">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <a href="#"><h6 class="c-title">আটো পার্টস</h6></a>
                                                                    <div class="row">
                                                                        <div class="c-list col-lg-12">
                                                                            <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                                                                            <a href="#">বিনস</a>
                                                                            <a href="#">কফি বিনস</a>
                                                                            <a href="#">হারবার সিগার ও সিগারেট</a>
                                                                            <a href="#">ফীড</a>
                                                                            <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
         
                                                                <div class="col-lg-6">
                                                                    <a href="#"><h6 class="c-title">আকসেসরিজ</h6></a>
                                                                    <div class="row">
                                                                        <div class="c-list col-lg-12">
                                                                            <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                            <a href="#">বেক গুডস</a>
                                                                            <a href="#">ক্যানেড ফুড</a>
                                                                            <a href="#">কনফেকশনারি</a>
                                                                            <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                            <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown-2 default-dropdown">ইলেকট্রনিক / যন্ত্রপাতি / নিরাপত্তা ও সংরক্ষন
                                                        <div class="list-dropdown-content">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <a href="#"><h6 class="c-title">কনজুমার ইলেকট্রনিক</h6></a>
                                                                    <div class="row">
                                                                        <div class="c-list col-lg-12">
                                                                            <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                                                                            <a href="#">বিনস</a>
                                                                            <a href="#">কফি বিনস</a>
                                                                            <a href="#">হারবার সিগার ও সিগারেট</a>
                                                                            <a href="#">ফীড</a>
                                                                            <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                            
                                                                <div class="col-lg-6">
                                                                    <a href="#"><h6 class="c-title">গৃহস্থালির যন্ত্রপাতি</h6></a>
                                                                    <div class="row">
                                                                        <div class="c-list col-lg-12">
                                                                            <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                            <a href="#">বেক গুডস</a>
                                                                            <a href="#">ক্যানেড ফুড</a>
                                                                            <a href="#">কনফেকশনারি</a>
                                                                            <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                            <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <a href="#"><h6 class="c-title">নিরাপত্তা ও সংরক্ষন</h6></a>
                                                                    <div class="row">
                                                                        <div class="c-list col-lg-12">
                                                                            <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                            <a href="#">বেক গুডস</a>
                                                                            <a href="#">ক্যানেড ফুড</a>
                                                                            <a href="#">কনফেকশনারি</a>
                                                                            <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                            <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown-2 default-dropdown">ইলেকট্রিক্যাল / টেলিকমিউনিকেশন
                                                        <div class="list-dropdown-content">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <a href="#"><h6 class="c-title">ইলেকট্রিক্যাল ইকুইপমেন্ট ও সাপ্লাই</h6></a>
                                                                    <div class="row">
                                                                        <div class="c-list col-lg-12">
                                                                            <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                                                                            <a href="#">বিনস</a>
                                                                            <a href="#">কফি বিনস</a>
                                                                            <a href="#">হারবার সিগার ও সিগারেট</a>
                                                                            <a href="#">ফীড</a>
                                                                            <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                            
                                                                <div class="col-lg-6">
                                                                    <a href="#"><h6 class="c-title">টেলিকমিউনিকেশন</h6></a>
                                                                    <div class="row">
                                                                        <div class="c-list col-lg-12">
                                                                            <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                            <a href="#">বেক গুডস</a>
                                                                            <a href="#">ক্যানেড ফুড</a>
                                                                            <a href="#">কনফেকশনারি</a>
                                                                            <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                            <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown-2 default-dropdown">স্পোর্টস / গিফট / খেলনা
                                                        <div class="list-dropdown-content">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <a href="#"><h6 class="c-title">স্পোর্টস ও ইন্টারটেইনমেন্ট</h6></a>
                                                                    <div class="row">
                                                                        <div class="c-list col-lg-12">
                                                                            <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                                                                            <a href="#">বিনস</a>
                                                                            <a href="#">কফি বিনস</a>
                                                                            <a href="#">হারবার সিগার ও সিগারেট</a>
                                                                            <a href="#">ফীড</a>
                                                                            <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                            
                                                                <div class="col-lg-6">
                                                                    <a href="#"><h6 class="c-title">গিফট ও কাফর্ট</h6></a>
                                                                    <div class="row">
                                                                        <div class="c-list col-lg-12">
                                                                            <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                            <a href="#">বেক গুডস</a>
                                                                            <a href="#">ক্যানেড ফুড</a>
                                                                            <a href="#">কনফেকশনারি</a>
                                                                            <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                            <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                        <a href="#"><h6 class="c-title">টয়স ও হবিস</h6></a>
                                                                        <div class="row">
                                                                            <div class="c-list col-lg-12">
                                                                                <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                                <a href="#">বেক গুডস</a>
                                                                                <a href="#">ক্যানেড ফুড</a>
                                                                                <a href="#">কনফেকশনারি</a>
                                                                                <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                                <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                            </div>
                                                                        </div>
                                                                    </div> 
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="dropdown-2 default-dropdown">স্বাস্থ্য / বিউটি
                                                            <div class="list-dropdown-content">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <a href="#"><h6 class="c-title">স্বাস্থ্য ও মেডিকেল</h6></a>
                                                                        <div class="row">
                                                                            <div class="c-list col-lg-12">
                                                                                <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                                                                                <a href="#">বিনস</a>
                                                                                <a href="#">কফি বিনস</a>
                                                                                <a href="#">হারবার সিগার ও সিগারেট</a>
                                                                                <a href="#">ফীড</a>
                                                                                <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                
                                                                    <div class="col-lg-6">
                                                                        <a href="#"><h6 class="c-title">বিউটি ও ব্যক্তিগত কেয়ার</h6></a>
                                                                        <div class="row">
                                                                            <div class="c-list col-lg-12">
                                                                                <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                                <a href="#">বেক গুডস</a>
                                                                                <a href="#">ক্যানেড ফুড</a>
                                                                                <a href="#">কনফেকশনারি</a>
                                                                                <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                                <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li class="dropdown-2 default-dropdown">কনস্ট্রাকশন / হোম / লাইটস / ফার্নিচার
                                                            <div class="list-dropdown-content">
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <a href="#"><h6 class="c-title">কনস্ট্রাকশন ও রিয়েল ইস্টেট</h6></a>
                                                                        <div class="row">
                                                                            <div class="c-list col-lg-12">
                                                                                <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                                                                                <a href="#">বিনস</a>
                                                                                <a href="#">কফি বিনস</a>
                                                                                <a href="#">হারবার সিগার ও সিগারেট</a>
                                                                                <a href="#">ফীড</a>
                                                                                <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                
                                                                    <div class="col-lg-6">
                                                                        <a href="#"><h6 class="c-title">হোম ও গার্ডেন</h6></a>
                                                                        <div class="row">
                                                                            <div class="c-list col-lg-12">
                                                                                <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                                <a href="#">বেক গুডস</a>
                                                                                <a href="#">ক্যানেড ফুড</a>
                                                                                <a href="#">কনফেকশনারি</a>
                                                                                <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                                <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-6">
                                                                        <a href="#"><h6 class="c-title">লাইটস ও লাইটিং</h6></a>
                                                                        <div class="row">
                                                                            <div class="c-list col-lg-12">
                                                                                <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                                <a href="#">বেক গুডস</a>
                                                                                <a href="#">ক্যানেড ফুড</a>
                                                                                <a href="#">কনফেকশনারি</a>
                                                                                <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                                <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-lg-6">
                                                                        <a href="#"><h6 class="c-title">ফার্নিচার</h6></a>
                                                                        <div class="row">
                                                                            <div class="c-list col-lg-12">
                                                                                <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                                <a href="#">বেক গুডস</a>
                                                                                <a href="#">ক্যানেড ফুড</a>
                                                                                <a href="#">কনফেকশনারি</a>
                                                                                <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                                <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                            </div>
                                                                        </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown-2 default-dropdown">ব্যাগ / জুতা এবং আনুষাঙ্গিক
                                                        <div class="list-dropdown-content">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <a href="#"><h6 class="c-title">ল্যাগেজ, ব্যাগ ও কেইস</h6></a>
                                                                    <div class="row">
                                                                        <div class="c-list col-lg-12">
                                                                            <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                                                                            <a href="#">বিনস</a>
                                                                            <a href="#">কফি বিনস</a>
                                                                            <a href="#">হারবার সিগার ও সিগারেট</a>
                                                                            <a href="#">ফীড</a>
                                                                            <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                            
                                                                <div class="col-lg-6">
                                                                    <a href="#"><h6 class="c-title">জুতা এবং আনুষাঙ্গিক</h6></a>
                                                                    <div class="row">
                                                                        <div class="c-list col-lg-12">
                                                                            <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                            <a href="#">বেক গুডস</a>
                                                                            <a href="#">ক্যানেড ফুড</a>
                                                                            <a href="#">কনফেকশনারি</a>
                                                                            <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                            <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown-2 default-dropdown">মেশিনারি / যন্ত্রাংশ / ফেব্রিকেশন / টুলস
                                                        <div class="list-dropdown-content">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <a href="#"><h6 class="c-title">মেশিনারি</h6></a>
                                                                    <div class="row">
                                                                        <div class="c-list col-lg-12">
                                                                            <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                                                                            <a href="#">বিনস</a>
                                                                            <a href="#">কফি বিনস</a>
                                                                            <a href="#">হারবার সিগার ও সিগারেট</a>
                                                                            <a href="#">ফীড</a>
                                                                            <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                            
                                                                <div class="col-lg-6">
                                                                    <a href="#"><h6 class="c-title">শিল্প যন্ত্রাংশ ও সরঞ্জাম</h6></a>
                                                                    <div class="row">
                                                                        <div class="c-list col-lg-12">
                                                                            <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                            <a href="#">বেক গুডস</a>
                                                                            <a href="#">ক্যানেড ফুড</a>
                                                                            <a href="#">কনফেকশনারি</a>
                                                                            <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                            <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                        <a href="#"><h6 class="c-title">ফেব্রিকেশন সার্ভিস</h6></a>
                                                                        <div class="row">
                                                                            <div class="c-list col-lg-12">
                                                                                <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                                <a href="#">বেক গুডস</a>
                                                                                <a href="#">ক্যানেড ফুড</a>
                                                                                <a href="#">কনফেকশনারি</a>
                                                                                <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                                <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                
                                                                    <div class="col-lg-6">
                                                                        <a href="#"><h6 class="c-title">টুলস ও হাডওয়্যার</h6></a>
                                                                        <div class="row">
                                                                            <div class="c-list col-lg-12">
                                                                                <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                                <a href="#">বেক গুডস</a>
                                                                                <a href="#">ক্যানেড ফুড</a>
                                                                                <a href="#">কনফেকশনারি</a>
                                                                                <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                                <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                            </div>
                                                                        </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="dropdown-2 default-dropdown">মিনারেল / কেমিক্যালস / রাবার / এনার্জি
                                                        <div class="list-dropdown-content">
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <a href="#"><h6 class="c-title">মিনারেল ও মেটালজি</h6></a>
                                                                    <div class="row">
                                                                        <div class="c-list col-lg-12">
                                                                            <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                                                                            <a href="#">বিনস</a>
                                                                            <a href="#">কফি বিনস</a>
                                                                            <a href="#">হারবার সিগার ও সিগারেট</a>
                                                                            <a href="#">ফীড</a>
                                                                            <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                            
                                                                <div class="col-lg-6">
                                                                    <a href="#"><h6 class="c-title">কেমিক্যালস</h6></a>
                                                                    <div class="row">
                                                                        <div class="c-list col-lg-12">
                                                                            <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                            <a href="#">বেক গুডস</a>
                                                                            <a href="#">ক্যানেড ফুড</a>
                                                                            <a href="#">কনফেকশনারি</a>
                                                                            <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                            <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <a href="#"><h6 class="c-title">রাবার ও প্লাস্টিক</h6></a>
                                                                    <div class="row">
                                                                        <div class="c-list col-lg-12">
                                                                            <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                            <a href="#">বেক গুডস</a>
                                                                            <a href="#">ক্যানেড ফুড</a>
                                                                            <a href="#">কনফেকশনারি</a>
                                                                            <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                            <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="col-lg-6">
                                                                    <a href="#"><h6 class="c-title">এনার্জি</h6></a>
                                                                    <div class="row">
                                                                        <div class="c-list col-lg-12">
                                                                            <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                            <a href="#">বেক গুডস</a>
                                                                            <a href="#">ক্যানেড ফুড</a>
                                                                            <a href="#">কনফেকশনারি</a>
                                                                            <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                            <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                        </div>
                                                                    </div>
                                                            </div>  
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="dropdown-2 default-dropdown">প্যাকেজিং / অফিস
                                                    <div class="list-dropdown-content">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <a href="#"><h6 class="c-title">প্যাকেজিং ও প্রিন্টিং</h6></a>
                                                                <div class="row">
                                                                    <div class="c-list col-lg-12">
                                                                        <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                                                                        <a href="#">বিনস</a>
                                                                        <a href="#">কফি বিনস</a>
                                                                        <a href="#">হারবার সিগার ও সিগারেট</a>
                                                                        <a href="#">ফীড</a>
                                                                        <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                        
                                                            <div class="col-lg-6">
                                                                <a href="#"><h6 class="c-title">অফিস ও স্কুল সাপ্লাই</h6></a>
                                                                <div class="row">
                                                                    <div class="c-list col-lg-12">
                                                                        <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                        <a href="#">বেক গুডস</a>
                                                                        <a href="#">ক্যানেড ফুড</a>
                                                                        <a href="#">কনফেকশনারি</a>
                                                                        <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                        <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <a href="categories.html"><li>সকল ক্যাটাগরি</li></a>
                                            </ul>
                                        </div>
                                    </li>
                     
                                    <!-- service categories-->
                                    
                                    <li class="dropdown default-dropdown">সেবা
                                        <div class="sub-dropdown-content">
                                            <ul>
                                                <li class="dropdown-2 default-dropdown">স্বেচ্ছা সেবা
                                                    <div class="list-dropdown-content">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <a herf="#"><h6 class="c-title">রক্ত দান</h6></a>
                                                                <div class="row">
                                                                    <div class="c-list col-lg-12">
                                                                        <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                                                                        <a href="#">বিনস</a>
                                                                        <a href="#">কফি বিনস</a>
                                                                        <a href="#">হারবার সিগার ও সিগারেট</a>
                                                                        <a href="#">ফীড</a>
                                                                        <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                    </div>
                                                                    </div>
                                                                </div>
                        
                                                                <div class="col-lg-6">
                                                                <a href="#"><h6 class="c-title">খাদ্য ও পানীয়</h6></a>
                                                                <div class="row">
                                                                    <div class="c-list col-lg-12">
                                                                        <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                        <a href="#">বেক গুডস</a>
                                                                        <a href="#">ক্যানেড ফুড</a>
                                                                        <a href="#">কনফেকশনারি</a>
                                                                        <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                        <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                    </div>
                                                                    </div>
                                                                </div>  
                                                            </div>
                                                        </div>
                                                </li>
                                                <li class="dropdown-2 default-dropdown">টু-লেট
                                                    <div class="list-dropdown-content">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <a href="#"><h6 class="c-title">ফ্ল্যাট</h6></a>
                                                                <div class="row">
                                                                    <div class="c-list col-lg-12">
                                                                        <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                                                                        <a href="#">বিনস</a>
                                                                        <a href="#">কফি বিনস</a>
                                                                        <a href="#">হারবার সিগার ও সিগারেট</a>
                                                                        <a href="#">ফীড</a>
                                                                        <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                    </div>
                                                                    </div>
                                                                </div>
                        
                                                                <div class="col-lg-6">
                                                                    <a href="#"><h6 class="c-title">সাব-লেট</h6></a>
                                                                    <div class="row">
                                                                        <div class="c-list col-lg-12">
                                                                            <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                            <a href="#">বেক গুডস</a>
                                                                            <a href="#">ক্যানেড ফুড</a>
                                                                            <a href="#">কনফেকশনারি</a>
                                                                            <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                            <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                    <a href="#"><h6 class="c-title">গ্যারেজ</h6></a>
                                                                    <div class="row">
                                                                        <div class="c-list col-lg-12">
                                                                            <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                            <a href="#">বেক গুডস</a>
                                                                            <a href="#">ক্যানেড ফুড</a>
                                                                            <a href="#">কনফেকশনারি</a>
                                                                            <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                            <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                            
                                                            <div class="col-lg-6">
                                                                <a href="#"><h6 class="c-title">বাড়ি</h6></a>
                                                                <div class="row">
                                                                    <div class="c-list col-lg-12">
                                                                        <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                        <a href="#">বেক গুডস</a>
                                                                        <a href="#">ক্যানেড ফুড</a>
                                                                        <a href="#">কনফেকশনারি</a>
                                                                        <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                        <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                    </div>
                                                                    </div>
                                                            </div>  
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="dropdown-2 default-dropdown">রেন্ট এ কার
                                                    <div class="list-dropdown-content">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <a href="#"><h6 class="c-title">আটো পার্টস</h6></a>
                                                                <div class="row">
                                                                    <div class="c-list col-lg-12">
                                                                        <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                                                                        <a href="#">বিনস</a>
                                                                        <a href="#">কফি বিনস</a>
                                                                        <a href="#">হারবার সিগার ও সিগারেট</a>
                                                                        <a href="#">ফীড</a>
                                                                        <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                    </div>
                                                                    </div>
                                                                </div>
                        
                                                                <div class="col-lg-6">
                                                                    <a href="#"><h6 class="c-title">আকসেসরিজ</h6></a>
                                                                    <div class="row">
                                                                        <div class="c-list col-lg-12">
                                                                            <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                            <a href="#">বেক গুডস</a>
                                                                            <a href="#">ক্যানেড ফুড</a>
                                                                            <a href="#">কনফেকশনারি</a>
                                                                            <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                            <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="dropdown-2 default-dropdown">হোম সেবা
                                                    <div class="list-dropdown-content">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <a href="#"><h6 class="c-title">মিস্ত্রি</h6></a>
                                                                <div class="row">
                                                                    <div class="c-list col-lg-12">
                                                                        <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                                                                        <a href="#">বিনস</a>
                                                                        <a href="#">কফি বিনস</a>
                                                                        <a href="#">হারবার সিগার ও সিগারেট</a>
                                                                        <a href="#">ফীড</a>
                                                                        <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                    </div>
                                                                    </div>
                                                                </div>
                        
                                                                <div class="col-lg-6">
                                                                    <a href="#"><h6 class="c-title">গাড়ি চালক</h6></a>
                                                                    <div class="row">
                                                                        <div class="c-list col-lg-12">
                                                                            <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                            <a href="#">বেক গুডস</a>
                                                                            <a href="#">ক্যানেড ফুড</a>
                                                                            <a href="#">কনফেকশনারি</a>
                                                                            <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                            <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                    <a href="#"><h6 class="c-title">বুয়া</h6></a>
                                                                    <div class="row">
                                                                        <div class="c-list col-lg-12">
                                                                            <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                            <a href="#">বেক গুডস</a>
                                                                            <a href="#">ক্যানেড ফুড</a>
                                                                            <a href="#">কনফেকশনারি</a>
                                                                            <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                            <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                        </div>
                                                                        </div>
                                                                    </div>  
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="dropdown-2 default-dropdown">ভিসা প্রসেসিং
                                                    <div class="list-dropdown-content">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <a href="#"><h6 class="c-title">ইলেকট্রিক্যাল ইকুইপমেন্ট ও সাপ্লাই</h6></a>
                                                                <div class="row">
                                                                    <div class="c-list col-lg-12">
                                                                        <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                                                                        <a href="#">বিনস</a>
                                                                        <a href="#">কফি বিনস</a>
                                                                        <a href="#">হারবার সিগার ও সিগারেট</a>
                                                                        <a href="#">ফীড</a>
                                                                        <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                    </div>
                                                                    </div>
                                                                </div>
                        
                                                                <div class="col-lg-6">
                                                                    <a href="#"><h6 class="c-title">টেলিকমিউনিকেশন</h6></a>
                                                                    <div class="row">
                                                                        <div class="c-list col-lg-12">
                                                                            <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                            <a href="#">বেক গুডস</a>
                                                                            <a href="#">ক্যানেড ফুড</a>
                                                                            <a href="#">কনফেকশনারি</a>
                                                                            <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                            <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="dropdown-2 default-dropdown">ইভেন্ট ম্যানেজমেন্ট
                                                    <div class="list-dropdown-content">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <a href="#"><h6 class="c-title">ডেকোরেশন</h6></a>
                                                                <div class="row">
                                                                    <div class="c-list col-lg-12">
                                                                        <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                                                                        <a href="#">বিনস</a>
                                                                        <a href="#">কফি বিনস</a>
                                                                        <a href="#">হারবার সিগার ও সিগারেট</a>
                                                                        <a href="#">ফীড</a>
                                                                        <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                    </div>
                                                                    </div>
                                                                </div>
                        
                                                                <div class="col-lg-6">
                                                                    <a href="#"><h6 class="c-title">ক্যাটারিং</h6></a>
                                                                    <div class="row">
                                                                        <div class="c-list col-lg-12">
                                                                            <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                            <a href="#">বেক গুডস</a>
                                                                            <a href="#">ক্যানেড ফুড</a>
                                                                            <a href="#">কনফেকশনারি</a>
                                                                            <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                            <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                    <a href="#"><h6 class="c-title">বিনোদন</h6></a>
                                                                    <div class="row">
                                                                        <div class="c-list col-lg-12">
                                                                            <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                            <a href="#">বেক গুডস</a>
                                                                            <a href="#">ক্যানেড ফুড</a>
                                                                            <a href="#">কনফেকশনারি</a>
                                                                            <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                            <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                        </div>
                                                                        </div>
                                                                    </div> 
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="dropdown-2 default-dropdown">স্ব্যাস্থ সেবা
                                                    <div class="list-dropdown-content">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <a href="#"><h6 class="c-title">সেবক-সেবিকা</h6></a>
                                                                <div class="row">
                                                                    <div class="c-list col-lg-12">
                                                                        <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                                                                        <a href="#">বিনস</a>
                                                                        <a href="#">কফি বিনস</a>
                                                                        <a href="#">হারবার সিগার ও সিগারেট</a>
                                                                        <a href="#">ফীড</a>
                                                                        <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                    </div>
                                                                    </div>
                                                                </div>
                        
                                                                <div class="col-lg-6">
                                                                    <a href="#"><h6 class="c-title">থেরাপিস্ট</h6></a>
                                                                    <div class="row">
                                                                        <div class="c-list col-lg-12">
                                                                            <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                            <a href="#">বেক গুডস</a>
                                                                            <a href="#">ক্যানেড ফুড</a>
                                                                            <a href="#">কনফেকশনারি</a>
                                                                            <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                            <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="dropdown-2 default-dropdown">কৃষি সেবা
                                                    <div class="list-dropdown-content">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <a href="#"><h6 class="c-title">কনস্ট্রাকশন ও রিয়ের ইস্টেট</h6></a>
                                                                <div class="row">
                                                                    <div class="c-list col-lg-12">
                                                                        <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                                                                        <a href="#">বিনস</a>
                                                                        <a href="#">কফি বিনস</a>
                                                                        <a href="#">হারবার সিগার ও সিগারেট</a>
                                                                        <a href="#">ফীড</a>
                                                                        <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                    </div>
                                                                    </div>
                                                                </div>
                        
                                                                <div class="col-lg-6">
                                                                    <a href="#"><h6 class="c-title">হোম ও গার্ডেন</h6></a>
                                                                    <div class="row">
                                                                        <div class="c-list col-lg-12">
                                                                            <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                            <a href="#">বেক গুডস</a>
                                                                            <a href="#">ক্যানেড ফুড</a>
                                                                            <a href="#">কনফেকশনারি</a>
                                                                            <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                            <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                    <a href="#"><h6 class="c-title">লাইটস ও লাইটিং</h6></a>
                                                                    <div class="row">
                                                                        <div class="c-list col-lg-12">
                                                                            <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                            <a href="#">বেক গুডস</a>
                                                                            <a href="#">ক্যানেড ফুড</a>
                                                                            <a href="#">কনফেকশনারি</a>
                                                                            <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                            <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                            
                                                            <div class="col-lg-6">
                                                                <a href="#"><h6 class="c-title">ফার্নিচার</h6></a>
                                                                <div class="row">
                                                                    <div class="c-list col-lg-12">
                                                                        <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                        <a href="#">বেক গুডস</a>
                                                                        <a href="#">ক্যানেড ফুড</a>
                                                                        <a href="#">কনফেকশনারি</a>
                                                                        <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                        <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                    </div>
                                                                    </div>
                                                            </div>  
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="dropdown-2 default-dropdown">আইন সেবা
                                                    <div class="list-dropdown-content">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <a href="#"><h6 class="c-title">ল্যাগেজ, ব্যাগ ও কেইস</h6></a>
                                                                <div class="row">
                                                                    <div class="c-list col-lg-12">
                                                                        <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                                                                        <a href="#">বিনস</a>
                                                                        <a href="#">কফি বিনস</a>
                                                                        <a href="#">হারবার সিগার ও সিগারেট</a>
                                                                        <a href="#">ফীড</a>
                                                                        <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                    </div>
                                                                    </div>
                                                                </div>
                        
                                                                <div class="col-lg-6">
                                                                    <a href="#"><h6 class="c-title">জুতা এবং আনুষাঙ্গিক</h6></a>
                                                                    <div class="row">
                                                                        <div class="c-list col-lg-12">
                                                                            <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                            <a href="#">বেক গুডস</a>
                                                                            <a href="#">ক্যানেড ফুড</a>
                                                                            <a href="#">কনফেকশনারি</a>
                                                                            <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                            <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="dropdown-2 default-dropdown">মেশিনারি / যন্ত্রাংশ / ফেব্রিকেশন / টুলস
                                                    <div class="list-dropdown-content">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <a href="#"><h6 class="c-title">মেশিনারি</h6></a>
                                                                <div class="row">
                                                                    <div class="c-list col-lg-12">
                                                                        <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                                                                        <a href="#">বিনস</a>
                                                                        <a href="#">কফি বিনস</a>
                                                                        <a href="#">হারবার সিগার ও সিগারেট</a>
                                                                        <a href="#">ফীড</a>
                                                                        <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                    </div>
                                                                    </div>
                                                                </div>
                        
                                                                <div class="col-lg-6">
                                                                    <a href="#"><h6 class="c-title">শিল্প যন্ত্রাংশ ও সরঞ্জাম</h6></a>
                                                                    <div class="row">
                                                                        <div class="c-list col-lg-12">
                                                                            <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                            <a href="#">বেক গুডস</a>
                                                                            <a href="#">ক্যানেড ফুড</a>
                                                                            <a href="#">কনফেকশনারি</a>
                                                                            <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                            <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                    <a href="#"><h6 class="c-title">ফেব্রিকেশন সার্ভিস</h6></a>
                                                                    <div class="row">
                                                                        <div class="c-list col-lg-12">
                                                                            <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                            <a href="#">বেক গুডস</a>
                                                                            <a href="#">ক্যানেড ফুড</a>
                                                                            <a href="#">কনফেকশনারি</a>
                                                                            <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                            <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                            
                                                            <div class="col-lg-6">
                                                                <a href="#"><h6 class="c-title">টুলস ও হাডওয়্যার</h6></a>
                                                                <div class="row">
                                                                    <div class="c-list col-lg-12">
                                                                        <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                        <a href="#">বেক গুডস</a>
                                                                        <a href="#">ক্যানেড ফুড</a>
                                                                        <a href="#">কনফেকশনারি</a>
                                                                        <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                        <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                    </div>
                                                                    </div>
                                                            </div>  
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="dropdown-2 default-dropdown">মিনারেল / কেমিক্যালস / রাবার / এনার্জি
                                                    <div class="list-dropdown-content">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <a href="#"><h6 class="c-title">মিনারেল ও মেটালজি</h6></a>
                                                                <div class="row">
                                                                    <div class="c-list col-lg-12">
                                                                        <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                                                                        <a href="#">বিনস</a>
                                                                        <a href="#">কফি বিনস</a>
                                                                        <a href="#">হারবার সিগার ও সিগারেট</a>
                                                                        <a href="#">ফীড</a>
                                                                        <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                    </div>
                                                                    </div>
                                                                </div>
                        
                                                                <div class="col-lg-6">
                                                                    <a href="#"><h6 class="c-title">কেমিক্যালস</h6></a>
                                                                    <div class="row">
                                                                        <div class="c-list col-lg-12">
                                                                            <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                            <a href="#">বেক গুডস</a>
                                                                            <a href="#">ক্যানেড ফুড</a>
                                                                            <a href="#">কনফেকশনারি</a>
                                                                            <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                            <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                    <a href="#"><h6 class="c-title">রাবার ও প্লাস্টিক</h6></a>
                                                                    <div class="row">
                                                                        <div class="c-list col-lg-12">
                                                                            <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                            <a href="#">বেক গুডস</a>
                                                                            <a href="#">ক্যানেড ফুড</a>
                                                                            <a href="#">কনফেকশনারি</a>
                                                                            <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                            <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                            
                                                            <div class="col-lg-6">
                                                                <a href="#"><h6 class="c-title">এনার্জি</h6></a>
                                                                <div class="row">
                                                                    <div class="c-list col-lg-12">
                                                                        <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                        <a href="#">বেক গুডস</a>
                                                                        <a href="#">ক্যানেড ফুড</a>
                                                                        <a href="#">কনফেকশনারি</a>
                                                                        <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                        <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                    </div>
                                                                    </div>
                                                            </div>  
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="dropdown-2 default-dropdown">প্যাকেজিং / অফিস
                                                    <div class="list-dropdown-content">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <a href="#"><h6 class="c-title">প্যাকেজিং ও প্রিন্টিং</h6></a>
                                                                <div class="row">
                                                                    <div class="c-list col-lg-12">
                                                                        <a href="#">এগ্রিকালচার ওয়েস্ট</a>
                                                                        <a href="#">বিনস</a>
                                                                        <a href="#">কফি বিনস</a>
                                                                        <a href="#">হারবার সিগার ও সিগারেট</a>
                                                                        <a href="#">ফীড</a>
                                                                        <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                    </div>
                                                                    </div>
                                                                </div>
                        
                                                                <div class="col-lg-6">
                                                                    <a href="#"><h6 class="c-title">অফিস ও স্কুল সাপ্লাই</h6></a>
                                                                    <div class="row">
                                                                        <div class="c-list col-lg-12">
                                                                            <a href="#">অ্যালকহলিক বেভারেজ</a>
                                                                            <a href="#">বেক গুডস</a>
                                                                            <a href="#">ক্যানেড ফুড</a>
                                                                            <a href="#">কনফেকশনারি</a>
                                                                            <a href="#">ড্রিংকিং ওয়াটার</a>
                                                                            <span class="clrdb"><a href="#">আরো দেখুন</a></span>
                                                                        </div>
                                                                        </div>
                                                                    </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <a href="#"><li>সকল ক্যাটাগরি</li></a>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>        
                        </div> 
                    </div>
                </div>
                @endif
                @endauth
            </div>
        </section>
        
    
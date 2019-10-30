<!--login modal area -->
<div id="automodal" class="modal fade" role="dialog">
        <form class="modal-content" action="{{ route('login') }}" method="POST">
          @csrf
            <div class="row">
                <div class="leftside col-lg-4">
                    <h4 class="title">লগইন</h4>
                    <p class="mpara">আপনার অর্ডার, পছন্দ তালিকা এবং প্রস্তাবনাগুলিতে অ্যাক্সেস পান</p>
                </div>
                <div class="leftside col-lg-8">
                    <div class="imgcontainer">
                        <img src="{{ asset('img/login-avatar.png') }}" alt="Avatar" class="avatar">
                    </div>
    
                    <div class="form-a">
                       <input class="input-text" type="text" placeholder="" name="cell" required>
                        <span class="username">মোবাইল</span>
                    </div>
                    <br>
                   <div class="form-b">
                       <input class="input-text" type="password" placeholder="" name="password" required>
                         <span class="username">পাসওয়ার্ড</span>
                    </div>
    
                    <div class="form-btn">
                       <button type="submit" class="btn-getinvite btn-block">লগইন করুন</button> 
                    </div>
    
                    <div class="rem">
                        <label class="fntc">
                            <input class="userrem" type="checkbox" checked="" name="remember">মনে রাখুন
                        </label>
                        <a class="pwd" href="#"> পাসওয়ার্ড ভুলে গেছেন?</a>
                    </div>
    
                    <div class="form-c">
                       <small class="newbb"> বড়বাজারে নতুন?</small><a class="reg" href="{{ route('register') }}"> সাইনআপ করুন</a>
                    </div>
                </div>
                <button onclick="document.getElementById('automodal').style.display='none'" class="close" title="Close Modal" data-dismiss="modal">&times;</button>
            </div>
        </form>
    </div>
      <!--End login modal area -->
    
      
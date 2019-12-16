<div class="login-from">
<div id="loginModalBlade" class="modal" role="dialog">
  <form class="modal-content animate" action="{{ route('login') }}" method="POST">
    @csrf
    <div class="row">
      <div class="leftside col-lg-4">
          <h4 class="mtitle">লগইন</h4>
          <p class="mpara">আপনার অর্ডার, পছন্দ তালিকা এবং প্রস্তাবনাগুলিতে অ্যাক্সেস পান</p>
      </div>
      <div class="leftside col-lg-8">
          <div class="imgcontainer">
            <img src="img/login-avatar.png" alt="Avatar" class="avatar">
          </div>
          <div class="form-a form-group">
            <lebel class="username">মোবাইল</lebel>
            <input class="input-text" type="text" placeholder="+880" name="cell" required>
          </div>
          <div class="form-b form-group">
            <lebel class="username">পাসওয়ার্ড</lebel>
              <input class="input-text" type="password" placeholder="1234567890" name="password" required>
          </div>
          
          <div class="form-btn">
              <button type="submit" class="btn-getinvite btn-block">লগইন করুন</button> 
          </div>
          
          <div class="rem">
              <label class="fntc">
                  <input class="userrem" type="checkbox" checked="" name="remember">মনে রাখুন
              </label>
              <a href="{{ route('resetQuestions') }}" class="pwd"> পাসওয়ার্ড ভুলে গেছেন?</a>
          </div>
                    
          <div class="form-c">
              <small class="newbb"> বড়বাজারে নতুন?</small><a class="reg" href="{{ route('register') }}"> সাইনআপ করুন</a>
          </div>
      </div>
      <button onclick="document.getElementById('loginModalBlade').style.display='none'" class="close" title="Close Modal" data-dismiss="modal">&times;</span>
    </div>
  </form> 
</div>
</div>
    <!--End login modal area -->
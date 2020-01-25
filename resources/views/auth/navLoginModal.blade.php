<div id="loginModal" class="login-from">
<div id="loginModalBlade" class="modal" role="dialog">
  <form class="modal-content animate" action="{{ route('login') }}" method="POST">
    @csrf
    <div class="row">
      <div class="leftside">
          <h4>লগইন</h4>
          <p class="mpara">হাতের মুঠোই গুনমান সম্পন্ন পণ্য ও সেবা পেতে এবং একজন সফল উদ্যোক্তা হয়ে ওঠার গল্প শুরু করতে নিবন্ধিত হোন এখনই।</p>
          <div class="imgcontainer">
            <img src="{{asset('img/login-img.svg')}}" class="iavatar">
         </div>
      </div>
      <div class="rightside">
          <div class="imgcontainer">
            <img src="{{asset('img/male-user.svg')}}" alt="Avatar" class="avatar">
          </div>
          <div class="form-a">
            <lebel  class="username">ইমেইল / মোবাইল*</lebel>
            <input class="input-text" type="text" placeholder="" name="username" id="username" required>
          </div>
          <div class="form-b">
              <lebel class="username">পাসওয়ার্ড</lebel>
              <input class="input-text" :type="passwordFieldType" v-model="password" placeholder="" id="password" name="password" required>
              <span @click="switchVisibility_password" id="switch_password" class="fa fa-fw fa-eye-slash field-icon toggle-password"></span>
          </div>
          
          <div class="form-btn">
              <button type="submit" class="btn-getinvite btn-block">লগইন করুন</button> 
          </div>
          
          <div class="rem">
              <label class="fntc">
                  <input class="userrem" type="checkbox" checked="checked" name="remember" id="remember_me_input">মনে রাখুন
              </label>
              <a href="{{ route('resetQuestions') }}" class="pwd"> পাসওয়ার্ড ভুলে গেছেন?</a>
          </div>
                    
          <div class="form-c">
              <small class="newbb"> বড়বাজারে নতুন?</small><a class="reg" href="{{ route('register') }}"> নিবন্ধন করুন</a>
          </div>
      </div>
      <button onclick="document.getElementById('loginModalBlade').style.display='none'" class="close" title="Close Modal" data-dismiss="modal">&times;</span>
    </div>
  </form> 
</div>
</div>
<script>
  var checkboxes = document.getElementsByTagName('input');
  
  for (var i=0; i<checkboxes.length; i++)  {
    if (checkboxes[i].type == 'checkbox')   {
      checkboxes[i].checked = false;
    }
  }</script>
    <!--End login modal area -->
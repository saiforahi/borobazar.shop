<div class="login-from">
        <div id="loginModalBlade" class="modal">
            <form class="modal-content animate" action="{{ route('login') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="leftside col-lg-4">
                        <h4 class="title">লগইন</h4>
                        <p class="mpara">আপনার অর্ডার, পছন্দ তালিকা এবং প্রস্তাবনাগুলিতে অ্যাক্সেস পান</p>
                    </div>
                    <div class="leftside col-lg-8">
                        <div class="imgcontainer">
                            <img src="img/login-avatar.png" alt="Avatar" class="avatar">
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
                                <input class="userrem" type="checkbox" checked="checked" name="remember">মনে রাখুন
                            </label>
                            <a class="pwd" href="#"> পাসওয়ার্ড ভুলে গেছেন?</a>
                        </div>
                        
                        <div class="form-c">
                           <small class="newbb"> বড়বাজারে নতুন?</small><a class="reg" href="{{ route('register') }}"> সাইনআপ করুন</a>
                        </div>
                    </div>
                    <span onclick="document.getElementById('loginModalBlade').style.display='none'" class="close" title="Close Modal">&times;</span>
                </div>
            </form>
            
            </div>
        </div>
        <!--End login modal area -->

        <!---login script-->
      <script>
            // Get the modal
              var modal = document.getElementById('id01');
            // When the user clicks anywhere outside of the modal, close it
              window.onclick = function(event) {
                if (event.target == modal) {
                  modal.style.display = "none";
                }
              }
            </script>
            <!---end login script-->
<!--login modal area -->
<div id="id01" class="login-from">
    <div class="modal">
        <form class="modal-content animate" action="{{ route('login') }}" method="POST">
            @csrf
            <div class="imgcontainer">
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="{{ asset('image/login-avatar.png') }}" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="uname"><b>মোবাইল</b></label>
                <input class="usermail" type="text" placeholder="" name="name" required>
                <label for="psw"><b>পাসওয়ার্ড</b></label>
                <input class="usermail" type="password" placeholder="" name="password" required>
                <button type="button" class="btn-getinvite btn-block">লগইন করুন</button>
                <label class="fntc">
                    <input class="userrem" type="checkbox" checked="checked" name="remember">মনে রাখুন
                </label>
                <a class="pwd" href="#"> পাসওয়ার্ড ভুলে গেছেন?</a>
            </div>
        </form>
    </div>

<!--End login modal area -->
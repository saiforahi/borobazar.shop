<!--login modal area -->
<div class="login-from">
    <div id="loginModalBlade" class="modal">
        <form class="modal-content animate" action="{{ route('login') }}" method="POST">
            @csrf
            <div class="imgcontainer">
                <span onclick="document.getElementById('loginModalBlade').style.display='none'" class="close" title="Close Modal">&times;</span>
                <img src="{{ asset('img/login-avatar.png') }}" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="cell"><b>মোবাইল</b></label>
                <input class="usermail" type="text" placeholder="" name="cell" required>
                <label for="password"><b>পাসওয়ার্ড</b></label>
                <input class="usermail" type="password" placeholder="" name="password" required>
                <button type="submit" class="btn-getinvite btn-block">লগইন করুন</button>
                <label class="fntc">
                    <input class="userrem" type="checkbox" checked="checked" name="remember">মনে রাখুন
                </label>
                <a class="pwd" href="#"> পাসওয়ার্ড ভুলে গেছেন?</a>
            </div>
        </form>
    </div>
</div>
<!--End login modal area -->
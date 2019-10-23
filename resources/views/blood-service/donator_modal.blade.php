<!--donator modal area -->
<div id="id02" class="modal">
        <form class="modal-content animate" action="">
            @csrf
        <div class="imgcontainer">
        <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
        <img src="img/login-avatar.png" alt="Avatar" class="avatar">
            <div class="status">
                <h5 class="title">রক্ত দিব বাচঁবে প্রাণ</h5>
            </div>
            <div class="col-lg-12">
                <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                </div>
            </div>
        </div>

        <div class="container pb-5">
            <table class="bldreq-list">
                <tr>
                    <th>নামঃ</th>
                    <td>সাগর হোসেন</td>
                </tr>
                <tr>
                    <th>মোবাইলঃ</th>
                    <td>০১৭৯৭৬০১০০৩</td>
                </tr>
                <tr>
                    <th>রক্তের গ্রুপঃ</th>
                    <td>এ+ (পজিটিভ)</td>
                </tr>
                <tr>
                    <th>শেষবার রক্ত দানের তারিখঃ</th>
                    <td>১২ নভেম্বর ২০১৯</td>
                </tr>
                <tr>
                    <th>বসবাসরত এরিয়াঃ</th>
                    <td>বগুড়া</td>
                </tr>
                <tr>
                    <th>সংগঠনের নামঃ</th>
                    <td>রক্তের বন্ধন</td>
                </tr>
            </table>
            <div class="row">
                <div class="col-md-6">
                    <div class="connect-area">
                        <div class="form-popup" id="myForm">
                          <form action="/action_page.php" class="form-container">
                            <textarea type="text" class="form-control2" placeholder="" name="text"></textarea>
                            <button type="submit" class="btn-getinvite1">পাঠান</button>
                            <button type="cancle" class="btn-getinvite1" onclick="closeForm()"><i class="fa fa-close"></i></button>
                          </form>
                        </div>
                        <button class="btn-getinvite1" onclick="openForm()"><i class="fa fa-envelope-o"></i> টেক্স করুন</button>  
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="connect-area">
                        <button type="button" class="btn-getinvite1" data-toggle="popover" title="মোবাইল নাম্বার" data-placement="bottom" data-content="০১৭৯৭৬০১০০৩"><i class="fa fa-phone"></i> কল করুন</button>
                    </div>
                </div>
            </div>
        </div>
        </form>
    </div>
    <!--End donator modal area -->


    <!---donar script-->
    <script>
            // Get the modal
          var modal = document.getElementById('id02');
    
          // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
              if (event.target == modal) {
                modal.style.display = "none";
              }
            }
          </script>
          <!---end donar script-->
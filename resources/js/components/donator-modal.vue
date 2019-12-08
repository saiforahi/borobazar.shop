<template>
    <div class="modal" id="donator-modal">
        <form class="modal-content animate" action="">
            <div class="imgcontainer">
                <span @click="hidemodal" class="close" title="Close">&times;</span>
                <img src="img/login-avatar.png" alt="Avatar" class="avatar">
                <div class="u-status">
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
                    <tbody>
                        <tr>
                            <th>নামঃ</th>
                            <td>{{donator.name}}</td>
                        </tr>
                        <tr>
                            <th>রক্তের গ্রুপঃ</th>
                            <td>{{ donator.blood_group }}</td>
                        </tr>
                        <tr>
                            <th>শেষবার রক্ত দানের তারিখঃ</th>
                            <td>{{ donator.last_donation_date }}</td>
                        </tr>
                        <tr>
                            <th>বসবাসরত এরিয়াঃ</th>
                            <td>{{ donator.district_name }}</td>
                        </tr>
                        <tr>
                            <th>সংগঠনের নামঃ</th>
                            <td>{{ donator.blood_organization }}</td>
                        </tr>
                    </tbody>
                </table>
                <div class="text-area">
                    <button type="button" class="btn-getinvite1" id="textbutton"><i class="fa fa-envelope-o"></i> টেক্সট করুন </button>
                    <b-popover
                        :target="`textbutton`"
                        :placement="'bottom'"
                        title=  "জরুরী রক্তের প্রয়োজন"
                        triggers="click"
                    ><form action="#" class="form-group"><textarea type="text" class="form-control2" placeholder="" name="text"></textarea>
                    <button type="submit" class="btn-getinvite1">পাঠান</button>
                    </form>
                    </b-popover>
                    <!--div class="form-popup" id="myForm">
                        <form action="#" class="form-group">
                            <textarea type="text" class="form-control2" placeholder="" name="text"></textarea>
                            <button type="submit" class="btn-getinvite1">পাঠান</button>
                            <button type="cancle" class="btn-getinvite1" onclick="closeForm()"><i class="fa fa-close"></i></button>
                        </form>
                    </div-->
                </div>
                <div class="call-area">
                    <button type="button" class="btn-getinvite1"  id="popover-cell"><i class="fa fa-phone"></i> কল করুন</button>
                    <b-popover
                        :target="`popover-cell`"
                        :placement="'bottom'"
                        title="মোবাইল নাম্বার"
                        triggers="click"
                        :content="`${donator.cell}`" 
                    ><a v-bind:href="'tel:'+donator.cell"><span>{{donator.cell}}</span></a>
                    </b-popover>
                </div>  
            </div>
        </form> 
    </div>

</template>

<script>

export default {
    data(){
        return{
            cell:''
        }
    },
    props:['donator'],
    methods: {
        hidemodal() {
        document.getElementById('donator-modal').style.display='none';
      },
    },
}
</script>

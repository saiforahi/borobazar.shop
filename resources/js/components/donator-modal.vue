<template>
    <div class="modal" id="donator-modal">
            <form class="modal-content animate">
                <div class="imgcontainer">
                    <span @click="hidemodal" class="close" title="Close">&times;</span>
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
                            <td>{{donator.name}}</td>
                        </tr>
                        <tr>
                            <th>মোবাইলঃ</th>
                            <td>{{ donator.cell }}</td>
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
                            <td>{{ donator.district }}</td>
                        </tr>
                        <tr>
                            <th>সংগঠনের নামঃ</th>
                            <td>{{ donator.organization_name }}</td>
                        </tr>
                    </table>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="connect-area">
                                <div class="form-popup" id="myForm">
                                    <form action="" class="form-container">
                                        <textarea type="text" class="form-control2" placeholder="" name="text"></textarea>
                                        <button type="submit" class="btn-getinvite1">পাঠান</button>
                                        <button type="cancle" class="btn-getinvite1"><i class="fa fa-close"></i></button>
                                    </form>
                                </div>
                                <button class="btn-getinvite1" ><i class="fa fa-envelope-o"></i> টেক্স করুন</button>  
                            </div>
                        </div>
                        <b-col class="col-md-6">
                            <div class="connect-area">
                                <!--button type="button" class="btn-getinvite1" data-toggle="popover" title="মোবাইল নাম্বার" data-placement="bottom" data-content="`${donator.cell}`" ><i class="fa fa-phone"></i>কল করুন</button-->

                                <b-button class="btn-getinvite1" style="width:auto" :id="'popover-cell'" variant="primary"><i class="fa fa-phone"></i> কল করুন</b-button>
                                <b-popover
                                    :target="`popover-cell`"
                                    :placement="'bottom'"
                                    title="মোবাইল নাম্বার"
                                    triggers="click"
                                    :content="`${donator.cell}`"
                                ></b-popover>
                            </div>
                        </b-col>
                        
                    </div>
                </div>
            </form> 
        </div>
</template>

<script>

export default {
    data(){
        return{
            cell:'123'
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
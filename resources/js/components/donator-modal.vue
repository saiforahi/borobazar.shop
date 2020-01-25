<template>
    <div class="modal" id="donator-modal">
        <form class="modal-content animate m-revw">
            <div class="row">
                <span @click="hidemodal" class="close" title="Close">&times;</span>
                <div class="m-revw-left">
                    <div class="imgcontainer">
                        <img v-if="donator.sex=='male'" width="80" height="auto" src="/img/male-user.svg" alt="Avatar" class="avatar">
                        <img v-else-if="donator.sex=='female'" width="80" height="auto" src="/img/female-user.svg" alt="Avatar" class="avatar">
                        <img v-else width="80" height="auto" src="/img/login-avatar.png" alt="Avatar" class="avatar">
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
                                    <td>{{donator.first_name}} {{donator.last_name}}</td>
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
                                :show.sync="allowed"
                                :target="`textbutton`"
                                :placement="'bottom'"
                                title=  "জরুরী রক্তের প্রয়োজন"
                                triggers="click"
                                container= null
                            ><form action="" class="form-group"><textarea v-model="message" type="text" class="form-control2" placeholder="" name="text"></textarea>
                            <button @click="sendMessage" type="button" class="btn-getinvite1">পাঠান</button>
                            </form>
                            </b-popover>
                        </div>
                        <div class="call-area">
                            <button type="button" class="btn-getinvite1" id="popover-cell"><i class="fa fa-phone"></i> কল করুন</button>
                            <b-popover
                                target="popover-cell"
                                :placement="'bottom'"
                                title="মোবাইল নাম্বার"
                                triggers="click"
                                :content="`${donator.cell}`"
                                container= null
                            ><a style="color: forestgreen;" v-bind:href="'tel:'+donator.cell"><span>{{donator.cell}}</span></a>
                            </b-popover>
                            
                        </div>  
                    </div>
                </div>
                <div class="m-revw-right">
                    <div class="revw-pannel">
                        <h4 class="title">পর্যালোচনা ও মন্তব্য</h4>
                    </div>
                    <div class="revw-inner">
                        <div class="revw-user">
                            <span><i class="fa fa-user-o"></i> সাগর হোসেন</span>
                            <span><i class="fa fa-clock-o"></i> 3:00 PM </span>
                            <span><i class="fa fa-calendar"></i> 22-Jan-2020</span>
                            <div class="s-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <p class="parar">আমরা যেসব পণ্য বা পরিষেবা নিজেদের প্রয়োজনে কিনছি পক্ষান্তরে সেই পণ্য বা পরিষেবা প্রদানকারী প্রতিষ্ঠানকে সমর্থন জানাচ্ছি।</p>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

</template>

<script>
import swal from 'sweetalert';

export default {
    data(){
        return{
            allowed:true,
            message:''
        }
    },
    props:['donator'],
    methods: {
        hidemodal() {
            document.getElementById('donator-modal').style.display='none';
        },

        sendMessage(){
            this.allowed=false;
            swal('দুঃখিত','বড়বাজার বার্তা সেবা সাময়িকভাবে প্রক্রিয়াধীন রয়েছে',{button:'ওকে'});
            /*if(this.message!='' && this.message!=undefined && this.message!=null && window.auth_user.id!=this.donator.id){
                axios.post('api/message/send',{
                    from:window.auth_user.id,
                    to:this.donator.id,
                    message:this.message,
                }).then(response=>{
                    if(response.statusText=='OK'){
                        this.message='';
                        this.allowed=false;
                        console.log(response.data);
                        swal('Sent!','Message sent successfuly','success');
                    }
                }).catch( error=>{
                    console.log(error);
                })
            }
            else if(window.auth_user.id==this.donator.id){
                swal('Sorry','This is not a funbox','error');
            }
            else{
                swal('Dukkhito','Empty message','warning');
            }
            */
        }
    },
}
</script>

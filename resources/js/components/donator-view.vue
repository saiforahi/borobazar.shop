<template>
    
    <div class="col-lg-3" style="padding-bottom: 15px;">
        <div class="donar-inner  product product-single">
            <div class="thumb">
                <img v-if="donator.sex=='male'" width="80" height="auto" src="img/male-user.svg">
                <img v-else-if="donator.sex=='female'" width="80" height="auto" src="img/female-user.svg">
                <img v-else width="80" height="auto" src="img/login-avatar.png">
            </div>
            <div class="name">
                <h5 class="title">{{ donator.name }}</h5>
                <h6 class="cart-title"><span>সদস্যঃ</span> {{ donator.blood_organization }}</h6>
                <h6>শেষবার রক্ত দান : <i class="fa fa-calendar"></i> <span> {{ donator.last_donation_date }}</span></h6>
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
            <div @click="showmodal(donator)" style="width:auto;">
                <button class="main-btn quick-view"><i class="fa fa-search-plus"></i> কুইক ভিউ</button>
            </div>
        </div>
    </div>         
</template>

<script>
import swal from 'sweetalert'
export default {
    name:'donatorView',
    data(){
        return{
            name:''
        }
    },
    props: ['donator'],
    mounted() {
        
    },
    methods: {
        showmodal(donator){
            if(window.auth_user!=undefined){
                this.$emit('modal-data',donator); //emits donator's data to parent view
                document.getElementById('donator-modal').style.display='block'; //opening modal 
            }
            else{
                document.getElementById('loginModalBlade').style.display='block';
            }
            
        },
      
    },
}
</script>


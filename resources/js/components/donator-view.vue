<template>
    <div class="col-lg-3">
        <div class="donar-inner">
            <div class="thumb">
                <img width="80" height="auto" src="img/login-avatar.png">
            </div>
            <div class="name">
                <h5 class="title">{{ donator.name }}</h5>
                <h6 class="cart-title"><span>সদস্যঃ</span> {{ donator.blood_organization }}</h6>
                <h6>শেষবার রক্ত দান : <i class="fa fa-calendar"></i><span>  {{ donator.last_donation_date }}</span></h6>
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
    </div>
</template>

<script>
export default {
    name:'donatorView',
    data(){
        return{
            
        }
    },
    props: ['donator'],
    mounted() {
        
    }
}
</script>
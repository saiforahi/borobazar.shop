<template>
    <section class="blood-donor-area">      
        <div class="container-fluid">
		  	<div class="container">
				<div class="bogra-area pt-5">
                    <div class="row text-center">
                        <div class="col-lg-3">
                            <div class="donar-inner">
                                <div class="thumb">
                                    <img width="80" height="auto" src="/img/login-avatar.png">
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
                                <div class="name">
                                    <h5 class="title">সাগর হোসেন</h5>
                                    <h6 class="cart-title"><span>পেশাঃ</span> ছাত্র</h6>
                                    <h6 class="cart-title"><span>শিক্ষাগত যোগ্যতাঃ</span> মার্টাস</h6>
                                    <h6 class="cart-title"><span>কৃতিত্বঃ</span> </h6>
                                </div>
                                <div class="name">
                                    <h6 class="cart-title"><span>আইডিঃ</span> #12345</h6>
                                    <h6 class="cart-title"><span>মেম্বারশিপঃ</span> ০১ মার্চ ২০২০</h6>
                                </div>
                            </div>
                        </div>
                    </div>
				</div>
                <div class="overflow-auto" v-if="allowed==='yes'">
                    <br>
                    <b-pagination
                        v-model="currentPage"
                        :total-rows="laravelData.total"
                        :per-page="laravelData.per_page"
                        class="mt-4"
                        align="center"
                        aria-controls="viewDiv"
                    >
                        <template v-slot:first-text><span v-b-tooltip.hover title="সর্বপ্রথম" class="fa fa-angle-double-left"></span></template>
                        <template v-slot:prev-text><span v-b-tooltip.hover title="পূর্ববর্তী" class="fa fa-angle-left"></span></template>
                        <template v-slot:next-text><span v-b-tooltip.hover title="পরবর্তী" class="fa fa-angle-right"></span></template>
                        <template v-slot:last-text><span class="fa fa-angle-double-right" v-b-tooltip.hover title="সর্বশেষ"></span></template>
                        <template v-slot:ellipsis-text>
                            <b-spinner small type="grow"></b-spinner>
                            <b-spinner small type="grow"></b-spinner>
                            <b-spinner small type="grow"></b-spinner>
                        </template>
                        <template v-slot:page="{ page, active }">
                            <b v-if="active">{{ page }}</b>
                            <b v-else>{{ page }}</b>
                        </template>
                    </b-pagination>
                </div>
		  	</div>
        </div>
    </section>
</template>

<script>
export default {
    data(){
        return{
            laravelData:{
                data:[]
            },
            allowed:'yes',
            currentPage:1,
            modalData:[]
        }
    },
    props:['result'],
}
</script>
<template>
    <div class="container" v-if="allowed===true">
        <div class="store-filter clearfix">
			<div class="pull-left d-none d-md-block">
				<div class="row-filter">
					<a href="#"><i class="fa fa-th-large"></i></a>
					<a href="#" class="active"><i class="fa fa-bars"></i></a>
				</div>
				<div class="sort-filter">
					<span class="text-uppercase">সর্ট বাই:</span>
					<select class="input">
						<option value="0">পজিশন</option>
						<option value="0">রক্ত গ্রহণের তারিখ</option>
						<option value="0">রক্ত গ্রহণের স্থান</option>
					</select>
				    <a href="#" class="main-btn icon-btn"><i class="fa fa-arrow-down"></i></a>
				</div>
			</div>
			<div class="pull-right">
				<div class="page-filter">
					<span class="text-uppercase">দেখাও:</span>
					<select class="input" v-model="per_page">
						<option value="10">১০</option>
						<option value="20">২০</option>
						<option value="30">৩০</option>
				    </select>
				</div>
				
		    </div>
		</div>
        <div class="bogra-area pt-5">
            <div class="row text-center">
                <request-view v-for="request in laravelData.data" :request="request" v-bind:key="request.blood_request_id"></request-view>
            </div>
        </div>
        <br>
        <div class="store-filter clearfix">
			    <div class="pull-left d-none d-md-block">
					<div class="row-filter">
						<a href="#"><i class="fa fa-th-large"></i></a>
						<a href="#" class="active"><i class="fa fa-bars"></i></a>
					</div>
					<div class="sort-filter">
						<span class="text-uppercase">সর্ট বাই:</span>
						<select class="input">
							<option value="0">পজিশন</option>
							<option value="0">তারিখ</option>
							<option value="0">নাম</option>
						</select>
						<a href="#" class="main-btn icon-btn"><i class="fa fa-arrow-down"></i></a>
					</div>
				</div>
				<div class="pull-right">
				    <div class="page-filter">
					    <span class="text-uppercase">দেখাও:</span>
						<select class="input" v-model="per_page">
							<option value="10">১০</option>
							<option value="20">২০</option>
							<option value="30">৩০</option>
						</select>
					</div>
				</div>
			</div>
        <div class="overflow-auto" v-if="allowed===true">
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
</template>

<script>
    import axios from 'axios';
    export default {
        name: 'bloodRequestList',
        data(){
            return{
                allowed:false,
                allowedDiv:[false,false,false],
                laravelData:{},
                currentPage:1,
                
                per_page:10,
            }
        },
        watch:{
            // whenever currentPage changes, this function will run
            currentPage: function () {
                axios.get(this.laravelData.path+'?page='+this.currentPage).then(response=>{
                    this.laravelData=response.data;
                    
                    })
                    .catch(function (error) {
                        //console.log(error);
                });
            },
            //
            per_page:function(){
                axios.get('/api/matchedBloodrequests/'+this.per_page).then(response=>{
                    this.laravelData=response.data;
                    
                    })
                    .catch(function (error) {
                        //console.log(error);
                });
            }
        },
        mounted() {
            if(window.auth_user!=null){
                    axios.get('/api/matchedBloodrequests/'+this.per_page).then(response=>{
                        this.laravelData=response.data;
                        this.currentPage=this.laravelData.currentPage;
                        if(response.data.data.length>0)
                        {
                            this.allowed=!this.allowed;
                        }
                    })
                    .catch(function (error) {
                        //console.log(error);
                    });
            }
            else{
                alert('অনুগ্রহ করে লগইন করুন');
            }
        }
    }
</script>


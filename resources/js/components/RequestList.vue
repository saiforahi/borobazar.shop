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
                :total-rows="rows"
                :per-page="per_page"
                class="mt-4"
                align="center"
                aria-controls="viewDiv"
            >
                <template v-slot:first-text><span class="text-success">⏮</span></template>
                <template v-slot:prev-text><span class="text-danger">⏪</span></template>
                <template v-slot:next-text><span class="text-warning">⏩</span></template>
                <template v-slot:last-text><span class="text-info">⏭</span></template>
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
                currentPage:'',
                rows:'',
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
                axios.get('api/matchedBloodrequests/'+this.per_page).then(response=>{
                    this.laravelData=response.data;
                    this.currentPage=this.laravelData.current_page;
                    this.rows=this.laravelData.total;
                    console.log(this.laravelData);
                    })
                    .catch(function (error) {
                        //console.log(error);
                });
            }
        },
        mounted() {
            if(window.auth_user!=null){
                    axios.get('api/matchedBloodrequests/'+this.per_page+'?api_token='+window.auth_user.api_token).then(response=>{
                        this.laravelData=response.data;
                        this.currentPage=this.laravelData.current_page;
                        this.rows=this.laravelData.total;
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


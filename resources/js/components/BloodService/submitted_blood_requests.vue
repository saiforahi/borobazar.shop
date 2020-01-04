<template>
    <div class="container">
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
                    <select v-model="per_page" class="input">
                        <option value="10">১০</option>
                        <option value="20">২০</option>
                        <option value="30">৩০</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="hot-deal-inner recent-item">
            <h4 class="hotheadln">নতুন অনুরোধ সমূহ</h4>
        </div>
        <div class="bogra-area pt-5">
            <div class="row text-center" id="viewDiv">
                <old-requests v-for="request in new_requests" :request="request" v-bind:key="request.blood_request_id" @request_to_delete="set_request_to_delete_id"></old-requests>
            </div>
        </div>

        <div class="hot-deal-inner recent-item">
            <h4 class="hotheadln">পুরাতন অনুরোধ সমূহ</h4>
        </div>
        <div class="bogra-area pt-5">
            <div class="row text-center">
                <old-requests v-for="request in old_requests.data" :request="request" v-bind:key="request.blood_request_id" @request_to_delete="set_request_to_delete_id"></old-requests>
            </div>
        </div>
        
        <b-pagination
            v-if="old_requests.data.length>0"
            v-model="currentPage"
            :total-rows="old_requests.total"
            :per-page="old_requests.per_page"
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

        <!--delete req modal area -->
        <div id="confirmation_modal" class="modal">
            <form class="modal-content animate">
                <span onclick="document.getElementById('confirmation_modal').style.display='none'" class="close" title="Close Modal">&times;</span>
                <div class="container pt-5 pb-5">
                    <h4 class="title">অনুরোধটি মুছে ফেলতে নিশ্চিত হলে নিচের বাটন চাপুন!</h4>
                    <div class="text-area">    
                        <button class="btn-getinvite1" type="button" @click="delete_request"><i class="fa fa-trash"></i> মুছে ফেলুন</button>  
                    </div>
                </div>
            </form>
        </div>
        <!--End delete req modal area -->
    </div>
</template>

<script>
export default {
    data(){
        return{
            new_requests:[],
            old_requests:{
                data:[]
            },
            per_page:10,
            currentPage:1,
            requestToDelete:''
        }
    },
    watch:{
        currentPage: function () {
            axios.get(this.old_requests.path+'?page='+this.currentPage).then(response=>{
                this.old_requests=response.data.old_requests;
                })
                .catch(function (error) {
                    //console.log(error);
            });
        },
        per_page:function(){
            axios.get('/api/blood_requests/getmyrequests/'+this.per_page).then(response=>{
                this.old_requests=response.data.old_requests;
               
                })
                .catch(function (error) {
                    //console.log(error);
            });
        }
    },
    mounted(){
        axios.get('/api/blood_requests/getmyrequests/'+this.per_page).then(response=>{
            this.new_requests=response.data.new_requests;
            this.old_requests=response.data.old_requests;
            this.currentPage=this.old_requests.currentPage;
            
        }).catch(error=>{
            console.log(error)
        })
    },

    methods:{
        delete_request(){
           
            axios.post('/api/blood_requests/delete_my_request',{
                id:this.requestToDelete,
                size:this.per_page
            }).then(response=>{
                if(response.statusText=="OK"){
                    let old_page=this.currentPage;
                    this.new_requests=response.data.new_requests;
                    this.old_requests=response.data.old_requests;
                    this.currentPage=old_page;
                    document.getElementById('confirmation_modal').style.display='none';
                    swal("সম্পন্ন!",'অনুরোধ মুছে ফেলা হয়েছে','success',{button: "ওকে"});
                }
                
            }).catch(error=>{

            })
        },
        set_request_to_delete_id(data){
            this.requestToDelete=data;
        }
    }
}
</script>
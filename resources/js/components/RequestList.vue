<template>
    <div class="container" v-if="allowed===true">
        <div class="bogra-area pt-5">
            <div class="row text-center">
                <request-view v-for="request in laravelData.data" :request="request" v-bind:key="request.blood_request_id"></request-view>
            </div>
        </div>
        <br>
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
                per_page:''
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
        },
        mounted() {
            if(window.auth_user!=null){
                    axios.get('api/bloodrequests/'+window.auth_user.district+'/'+window.auth_user.blood_group+'/'+window.auth_user.cell).then(response=>{
                        this.laravelData=response.data;
                        this.currentPage=this.laravelData.current_page;
                        this.rows=this.laravelData.total;
                        this.per_page=this.laravelData.per_page;
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


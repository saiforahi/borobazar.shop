<template>
    <div class="container" id="mainDiv">
        <div class="search-area">
            <div class="row text-center">
                <div class="col-lg-12">
                    <img width="60" height="auto" src="img/blood.svg">
                    <h4 class="blood-title">রক্ত দান</h4>
                    <p>.....</p>
                </div>
            </div>
            <div class="row text-center" >
                <div class="col-lg-12">
                    <div class="blood-srch" >
                        <select class="form-control0 search-blood" name="bloodGroup" v-model="bloodGroup">
                            <option selected value="">রক্তের গ্রুপ</option>
                            <option value="এ+">এ+ (পজিটিভ)</option>
                            <option value="এ-">এ- (নেগেটিভ)</option>
                            <option value="বি+">বি+ (পজিটিভ)</option>
                            <option value="বি-">বি- (নেগেটিভ)</option>
                            <option value="ও+">ও+ (পজিটিভ)</option>
                            <option value="ও-">ও- (নেগেটিভ)</option>
                            <option value="এবি+">এবি+ (পজিটিভ)</option>
                            <option value="এবি-">এবি- (নেগেটিভ)</option>
                        </select>
                        <select class="form-control0 search-blood" id="presentDistrict" name="presentDistrict" v-model="selectedDistrict" @change="onChangeDistrict($event)">
                            <option value="" selected>জেলা নির্বাচন</option>
                            <option v-for="district in districts" v-bind:key="district.name" >{{ district.name }}</option>
                        </select>
                        <select class="form-control0 search-blood" id="" name="presentDistrict" v-model="selectedSubdistrict">
                            <option value="" selected>থানা/উপজেলা</option>
                            <option v-for="subdistrict in subdistricts" v-bind:key="subdistrict.sub_district_name" >{{ subdistrict.sub_district_name }}</option>
                        </select>
                        <button class="search-btn" v-on:click="setData">
                            <i id="demo" class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="bogra-area pt-5" id="viewDiv">
            <div class="row text-center">
                <donator-view v-for="item in laravelData.data" v-bind:donator="item" v-bind:key="item.cell"></donator-view>
            </div>       
        </div>
        <div class="overflow-auto">
            <b-pagination
                v-if="allowed==='yes'"
                v-model="currentPage"
                :total-rows="rows"
                :per-page="per_page"
                first-text="First"
                prev-text="Previous"
                next-text="Next"
                last-text="Last"
                class="mt-4"
                align="center"
                aria-controls="viewDiv"
            ></b-pagination>
            <b-pagination
                v-if="allowed==='yes'"
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
        name: 'search-app-root-component',
        
        data(){
            return{
                selectedDistrict:'',
                districts:[],
                selectedSubdistrict:'',
                subdistricts:[],
                bloodGroup:'',
                laravelData:{},
                allowed:'no',
                currentPage:'',
                rows:'',
                per_page:''
            }
        },
        mounted() {
            //on mounting this statements will be executed
            axios.get('api/districts').then(response=>{
                this.districts=response.data;
            });
        },
        watch: {
            // whenever currentPage changes, this function will run
            currentPage: function () {
                axios.get('api/donators/'+this.selectedDistrict+'/'+this.bloodGroup+'?page='+this.currentPage).then(response=>{
                    this.laravelData=response.data;
                    })
                    .catch(function (error) {
                        console.log(error);
                });
            },
            // whenever bloodgroup changes, this function will run
            bloodGroup: function(){
                this.laravelData={};
                this.allowed='no';
                this.selectedDistrict='';
                this.selectedSubdistrict='';
                this.per_page='';
                this.rows='';
            }
        },
        methods:{
            // whenever district changes, this function will run
            onChangeDistrict(event) {
                axios.get('api/subdistricts/'+event.target.value)
                .then(response => {
                    this.subdistricts = response.data;
                    this.selectedSubdistrict='';
                }).catch(function (error) {
                // handle error
                console.log(error);
                });
            },
            // whenever search button get pressed, this function will run
            setData()
            {
                if(window.auth_user!=null)
                {
                    const instance = axios.create({
                        headers: {'Authorization': 'Bearer '+window.auth_user.api_token}
                    });
                    instance.get('api/donators/'+this.selectedDistrict+'/'+this.bloodGroup).then(response=>{
                    this.laravelData=response.data;
                    this.currentPage=this.laravelData.current_page;
                    this.allowed='yes';
                    this.rows=this.laravelData.total;
                    this.per_page=this.laravelData.per_page;
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
                }
                else{
                    alert('অনুগ্রহ করে লগইন করুন');
                }
            }
        }
    }
    
</script>

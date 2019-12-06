<template>
    <div class="container" id="mainDiv">
        <vue-progress-bar></vue-progress-bar>
        <div class="search-area">
            <div class="blood-inner">
                <img width="60" height="auto" src="img/blood-drop.svg">
                <h4 class="blood-title">রক্ত দান</h4>
                <p>.....</p>
            </div>
            <div class="blood-srch" >
                <form @submit.prevent="setData">
                    <select class="form-control0 search-blood" name="bloodGroup" v-model="bloodGroup" required>
                        <option selected value="-1">রক্তের গ্রুপ</option>
                        <option value="1">এ+ (পজিটিভ)</option>
                        <option value="2">এ- (নেগেটিভ)</option>
                        <option value="3">বি+ (পজিটিভ)</option>
                        <option value="4">বি- (নেগেটিভ)</option>
                        <option value="5">ও+ (পজিটিভ)</option>
                        <option value="6">ও- (নেগেটিভ)</option>
                        <option value="7">এবি+ (পজিটিভ)</option>
                        <option value="8">এবি- (নেগেটিভ)</option>
                    </select>
                    <select class="form-control0 search-blood" id="division" name="division" v-model="selectedDivision" required>
                        <option value="-1" selected>বিভাগ</option>
                        <option value="বরিশাল">বরিশাল</option>
                        <option value="চট্টগ্রাম">চট্টগ্রাম</option>
                        <option value="ঢাকা">ঢাকা</option>
                        <option value="ময়মনসিংহ">ময়মনসিংহ</option>
                        <option value="রাজশাহী">রাজশাহী</option>
                        <option value="রংপুর">রংপুর</option>
                        <option value="সিলেট">সিলেট</option>
                    </select>
                    <select class="form-control0 search-blood" id="presentDistrict" name="presentDistrict" v-model="selectedDistrict" @change="onChangeDistrict($event)">
                        <option value="-1" selected>জেলা</option>
                        <option v-for="district in districts" v-bind:key="district.id" :value="district.id">{{ district.bengali_name }}</option>
                    </select>
                    <select class="form-control0 search-blood" id="" name="" v-model="selectedSubdistrict">
                        <option value="-1" selected>উপজেলা</option>
                        <option v-for="subdistrict in subdistricts" v-bind:key="subdistrict" >{{ subdistrict}}</option>
                    </select>
                    <button class="search-btn" type="submit" href="#viewDiv">
                        <i id="demo" class="fa fa-search"></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="bogra-area pt-5" id="viewDiv">
            <div class="row text-center">
                <donator-view @modal-data="setModal" v-for="item in laravelData.data" v-bind:donator="item" v-bind:key="item.cell"></donator-view>
            </div>       
        </div>
        <div class="overflow-auto" v-if="allowed==='yes'">
            <br>
            <b-pagination
                v-model="currentPage"
                :total-rows="rows"
                :per-page="per_page"
                class="mt-4"
                align="center"
                aria-controls="viewDiv"
            >
                <!--template v-slot:first-text><span class="text-success">⏮</span></template-->
                <template v-slot:prev-text><span class="fa fa-chevron-left"></span></template>
                <template v-slot:next-text><span class="fa fa-chevron-right"></span></template>
                <!--template v-slot:last-text><span class="text-info">⏭</span></template-->
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
        <donator-modal :donator="modalData" ></donator-modal>
    </div>
</template>

<script>
    import axios from 'axios';
    import swal from 'sweetalert'
    export default {
        name: 'search-app-root-component',
        data(){
            return{
                selectedDistrict:-1,
                selectedSubdistrict:-1,
                selectedDivision:-1,
                districts:[],
                subdistricts:[],
                bloodGroup:-1,
                laravelData:{
                    data:[]
                },
                allowed:'no',
                currentPage:1,
                rows:'',
                per_page:'',
                modalData:[]
            }
        },
        methods:{
           
            //
            setModal(data){
                this.modalData=data;
            },
            
            
        }
    }
    
</script>

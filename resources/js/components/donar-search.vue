<template>
    <section class="blood-donar-area">
        <div class="container-fluid pb-5 pt-5" id="mainDiv">
            <vue-progress-bar></vue-progress-bar>
            <div class="search-area">
                <div class="blood-inner">
					<img width="60" height="auto" src="/img/blood-drop.svg">
					<h4 class="blood-title">রক্ত দান</h4>
					<p>.....</p>
				</div>
				
				<div class="blood-srch">
					<form @submit.prevent="setData">
                        <select class="form-control0 search-blood" name="bloodGroup" v-model="bloodGroup" required>
                            <option selected="select" value="-1">রক্তের গ্রুপ</option>
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
                            <option value="খুলনা">খুলনা</option>
                        </select>
                        <select class="form-control0 search-blood" id="presentDistrict" name="presentDistrict" v-model="selectedDistrict" @change="onChangeDistrict($event)">
                            <option value="-1" selected>জেলা</option>
                            <option v-for="district in districts" v-bind:key="district.id" :value="district.id">{{ district.bengali_name }}</option>
                        </select>
                        <select class="form-control0 search-blood" id="" name="" v-model="selectedSubdistrict">
                            <option value="-1" selected>উপজেলা/থানা</option>
                            <option v-for="subdistrict in subdistricts" v-bind:key="subdistrict.id" :value="subdistrict.id" >{{ subdistrict.bengali_name}}</option>
                        </select> 
                        <button class="search-btn" type="submit" href="#viewDiv">
                            <i id="demo" class="fa fa-search"></i>
                        </button>
                    </form>	
				</div>
            </div>
        </div>
    </section>
</template>

<script>
import axios from 'axios';
import swal from 'sweetalert'
export default {
    data(){
        return{
            selectedDistrict:-1,
            selectedSubdistrict:-1,
            selectedDivision:-1,
            districts:[],
            subdistricts:[],
            bloodGroup:-1,
        }
    },
    watch:{
        bloodGroup: function(){
            this.selectedDivision=-1;
            this.selectedDistrict=-1;
            this.selectedSubdistrict=-1;
        },
        selectedDivision: function(){
            //on changing division this statement will be executed
            axios.get('/api/districts/'+this.selectedDivision).then(response=>{
                this.districts=response.data;
            });
            this.selectedDistrict=-1;
            this.selectedSubdistrict=-1;
        }
    },
    methods:{
        onChangeDistrict(event) {    
            axios.get('/api/subdistricts/'+event.target.value)
            .then(response => {
                this.subdistricts = response.data;
                this.selectedSubdistrict=-1;
            }).catch(function (error) {
            // handle error
            //console.log(error);
            });
        },
        reload(){
            window.location.href=''
        },
        // whenever search button get pressed, this function will run
        setData()
        {
            if(window.auth_user!=null)
            {
                this.$Progress.start()
                axios.get('/api/donators/'+this.selectedDistrict+'/'+this.bloodGroup).then(response=>{
                if(response.data.data.length>0){
                    this.$emit('new_result',response.data);
                }
                else{
                    swal("দুঃখিত",'এই মুহূর্তে কোন রক্তদানকারী নেই','warning',{
                        button:"ওকে"
                    });
                }
                this.$Progress.finish()
                })
                .catch(function (error) {
                    //console.log(error);
                    this.$Progress.fail()
                });
            }
            else{
                document.getElementById('loginModalBlade').style.display='block';
            }
        }
    }
}
</script>
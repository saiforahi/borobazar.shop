<template>
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
                    <form id="searchForm" v-on:submit.prevent="sendToParent" method="POST">
                        <select class="form-control0 search-blood" name="bloodGroup" v-model="bloodGroup" @change="setBloodGroup($event)">
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
                        <button class="search-btn" type="submit" >
                            <i id="demo" class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
</template>

<script>
export default {
    name:'searchDiv',
    data(){
        return {
            selectedDistrict:'',
            districts:[],
            selectedSubdistrict:'',
            subdistricts:[],
            bloodGroup:'',
            allowed:'yes'
        }
    },
    props:['checkNallowed'],
    
    mounted() {
            console.log('search div mounted.')
            axios.get('api/districts').then(response=>{
                this.districts=response.data;
            })
    },
    methods: {
        onChangeDistrict(event) {
            console.log(event.target.value)
            axios.get('api/subdistricts/'+event.target.value)
            .then(response => {
                this.subdistricts = response.data;
                this.selectedSubdistrict='';
            }).catch(function (error) {
            // handle error
            console.log(error);
            });
        },
        setBloodGroup(event){
            this.bloodGroup=event.target.value;
        },
        sendToParent()
        {
            this.$emit('checkNallowed',this.allowed);
            console.log('working');
        }

    }
}
</script>
<template>
    <div class="blood-srch" >
        <form id="searchForm" method="POST">
            <select class="form-control0 search-blood" name="bloodGroup">
                <option selected="select" value="0">রক্তের গ্রুপ</option>
                <option value="0">এ+ (পজিটিভ)</option>
                <option value="1">এ- (নেগেটিভ)</option>
                <option value="1">বি+ (পজিটিভ)</option>
                <option value="1">বি- (নেগেটিভ)</option>
                <option value="1">ও+ (পজিটিভ)</option>
                <option value="1">ও- (নেগেটিভ)</option>
                <option value="1">এবি+ (পজিটিভ)</option>
                <option value="1">এবি- (নেগেটিভ)</option>
            </select>
            <select class="form-control0 search-blood" id="presentDistrict" name="presentDistrict" v-model="selectedDistrict" @change="onChange($event)">
                <option value="" selected>জেলা নির্বাচন</option>
                <option v-for="district in districts" v-bind:key="district.name" >{{ district.name }}</option>
            </select>
            <select class="form-control0 search-blood" id="" name="presentDistrict" v-model="selectedSubdistrict">
                <option value="" selected>থানা/উপজেলা</option>
                <option v-for="subdistrict in subdistricts" v-bind:key="subdistrict.sub_district_name" >{{ subdistrict.sub_district_name }}</option>
            </select>
            <button class="search-btn" type="button" >
                <i id="demo" class="fa fa-search"></i>
            </button>
        </form>
    </div>
</template>

<script>
export default {
    data(){
        return {
            selectedDistrict:'',
            districts:[],
            selectedSubdistrict:'',
            subdistricts:[]
        }
    },
    mounted() {
            console.log('Component mounted.')
            axios.get('api/districts').then(response=>{
                this.districts=response.data;
            })
    },
    methods: {
        onChange(event) {
            console.log(event.target.value)
            axios.get('api/subdistricts/'+event.target.value).then(response => {
                this.subdistricts = response.data;
                this.selectedSubdistrict='';
            });
        }
    }
}
</script>
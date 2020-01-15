<template>
    <div class="personal-details">
        <div class="edit-tools">
            <i v-if="disabled==1" @click="edit_mode" class="fa fa-pencil"></i>
        </div>
                    
        <form class="row view-mode" id="address_form" name="">
            <div class="col-md-6">
                <div class="present-address">
                    <h4 class="title">বর্তমান ঠিকানা</h4>
                </div>
                            
                <div class="present_address" id="">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control2" v-model="present_holdingOrVillage" value="" placeholder="আপনার বাড়ি নং / রাস্তা / গ্রাম লিখুন " :disabled="disabled == 1">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <input type="text" v-model="present_country" placeholder="দেশের নাম" class="form-control2" :disabled="disabled == 1"> 
                        </div>
                                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <select @change="present_division_changed" class="selectpicker form-control2" :disabled="disabled == 1" v-model="present_selectedDivision" required>
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
                            </div>
                        </div>
                                    
                        <div class="col-md-4">
                            <div class="form-group">
                                <select @change="present_district_changed" id="present_district_select" class="form-control2" name="present-district" :disabled="disabled == 1" v-model="present_selectedDistrict">
                                    <option value="-1" disabled>জেলা</option>
                                    <option v-for="district in present_districts" v-bind:key="district.id" :value="district.id" :selected="present_selectedDistrict==district.id">{{ district.bengali_name }}</option>
                                </select>
                            </div>
                        </div>
                                            
                        <div class="col-md-4">
                            <div class="form-group">
                                <select class="form-control2" name="present-thana" :disabled="disabled == 1" v-model="present_selectedSubDistrict">
                                    <option value="-1" selected>উপজেলা/থানা</option>
                                    <option v-for="subdistrict in present_subdistricts" v-bind:key="subdistrict.id" :value="subdistrict.id">{{subdistrict.bengali_name}}</option>
                                </select>
                            </div>
                        </div>
                                    
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="text" v-model="present_postcode" class="form-control2" placeholder="পোষ্ট কোড" :disabled="disabled == 1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            <div class="col-md-6">
                <div class="permanent-address">
                    <div class="title-wrap">
                        <h4 class="title">স্থায়ী ঠিকানা</h4>
                    </div> 
                </div>
                                
                <div class="present_address" id="addRinfo">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control2" v-model="permanent_holdingOrVillage" value="" placeholder="আপনার বাড়ি নং / রাস্তা / গ্রাম লিখুন " :disabled="disabled == 1"> 
                        </div>
                        <div class="form-group col-md-6">
                            <input v-model="permanent_country" type="text" placeholder="দেশের নাম" class="form-control2" :disabled="disabled == 1"> 
                        </div>
                                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <select @change="permanent_division_changed" class="selectpicker form-control2" :disabled="disabled == 1" v-model="permanent_selectedDivision" required>
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
                            </div>
                        </div>
                                    
                        <div class="col-md-4">
                            <div class="form-group">
                                <select @change="permanent_district_changed" v-model="permanent_selectedDistrict" class="form-control2" name="present-district" :disabled="disabled == 1">
                                    <option :value="-1" selected>জেলা</option>
                                    <option v-for="district in permanent_districts" v-bind:key="district.id" :value="district.id">{{ district.bengali_name }}</option>
                                </select>
                            </div>
                        </div>
                                            
                        <div class="col-md-4">
                            <div class="form-group" id="">
                                <select v-model="permanent_selectedSubDistrict" class="form-control2" id="" :disabled="disabled == 1">
                                    <option :value="-1" selected>উপজেলা/থানা</option>
                                    <option v-for="subdistrict in permanent_subdistricts" v-bind:key="subdistrict.id" :value="subdistrict.id" :selected="permanent_selectedSubDistrict==subdistrict.id">{{ subdistrict.bengali_name}}</option>
                                </select>
                            </div>
                        </div>
                                    
                        <div class="col-md-4">
                            <div class="form-group" id="">
                                <input type="text" v-model="permanent_postcode" class="form-control2" placeholder="পোষ্ট কোড" :disabled="disabled == 1">
                            </div>
                        </div>
                    </div>
                    <div id="addRsame_div" class="form-group form-control2">
                        <label id="addRsame_label" class="radio-inline"><input type="checkbox" id="addRsame" class="userrem" name="permanentaddress" @click="copy_present" value="0" :disabled="disabled == 1">বর্তমান ঠিকানার মতই</label>
                    </div>
                </div>
            </div>
        </form>
        <div class="form-group col-md-12">
            <div v-if="disabled==0" class="btn-finish">
                <button type="button" class="btn-getinvite1" @click="save" id="perbtn-save"><i class="fa fa-file-o"></i> সেভ</button>
                <button type="button" class="btn-getinvite1" @click="view_mode" id="perbtn-update"><i class="fa fa-close"></i> ক্লোজ</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            disabled: 1,
            present_holdingOrVillage:'',
            present_country:'',
            present_selectedDistrict:-1,
            present_selectedDivision:-1,
            present_selectedSubDistrict:-1,
            present_districts:[],
            present_subdistricts:[],
            present_postcode:'',

            permanent_holdingOrVillage:'',
            permanent_country:'',
            permanent_selectedDistrict:-1,
            permanent_selectedDivision:-1,
            permanent_selectedSubDistrict:-1,
            permanent_districts:[],
            permanent_subdistricts:[],
            permanent_postcode:''
        }
    },

    methods:{
        present_division_changed(){
            axios.get('/api/districts/'+this.present_selectedDivision).then(response=>{
                this.present_districts=response.data;
            });
            this.present_selectedDistrict=-1;
            this.present_selectedSubDistrict=-1;
        },
        present_district_changed(){
            axios.get('/api/subdistricts/'+this.present_selectedDistrict)
            .then(response => {
                this.present_subdistricts = response.data;
                this.present_selectedSubDistrict=-1;
            }).catch(function (error) {
            // handle error
            //console.log(error);
            });
        },
        permanent_division_changed(){
            axios.get('/api/districts/'+this.permanent_selectedDivision).then(response=>{
                this.permanent_districts=response.data;
            });
            this.permanent_selectedDistrict=-1;
            this.permanent_selectedSubDistrict=-1;
        },
        permanent_district_changed(){
            axios.get('/api/subdistricts/'+this.permanent_selectedDistrict)
            .then(response => {
                this.permanent_subdistricts = response.data;
                this.permanent_selectedSubDistrict=-1;
            }).catch(function (error) {
            // handle error
            //console.log(error);
            });
        },
        view_mode(){
            this.disabled = 1;
            document.getElementById('address_form').className = "row view-mode";
            //document.getElementById('addRsame_div').remove();
        },
        edit_mode(){
            this.disabled = (this.disabled + 1) % 2;
            document.getElementById('address_form').className = "row";
        },
        copy_present(value){
            if(document.getElementById('addRsame').checked==true){
                this.permanent_districts=this.present_districts;
                this.permanent_subdistricts=this.present_subdistricts;
                this.permanent_country=this.present_country;
                this.permanent_holdingOrVillage=this.present_holdingOrVillage;
                this.permanent_selectedDivision=this.present_selectedDivision;
                this.permanent_selectedDistrict=this.present_selectedDistrict;
                this.permanent_selectedSubDistrict=this.present_selectedSubDistrict;
                this.permanent_postcode=this.present_postcode;
            }
            else{
                this.permanent_districts=[];
                this.permanent_subdistricts=[];
                this.permanent_country='';
                this.permanent_holdingOrVillage='';
                this.permanent_selectedDivision=-1;
                this.permanent_selectedDistrict=-1;
                this.permanent_selectedSubDistrict=-1;
                this.permanent_postcode='';
            }
            
        },
        save(){
            axios.post('/api/user/update_address',{
                present_holdingOrVillage:this.present_holdingOrVillage,
                present_country:this.present_country,
                present_division:this.present_selectedDivision,
                present_district:this.present_selectedDistrict,
                present_subdistrict:this.present_selectedSubDistrict,
                present_postcode:this.present_postcode,
                permanent_holdingOrVillage:this.permanent_holdingOrVillage,
                permanent_country:this.permanent_country,
                permanent_division:this.permanent_selectedDivision,
                permanent_district:this.permanent_selectedDistrict,
                permanent_subdistrict:this.permanent_selectedSubDistrict,
                permanent_postcode:this.permanent_postcode
            }).then(response=>{
                if(response.statusText=="OK"){
                    this.present_holdingOrVillage=JSON.parse(response.data.present).holdingOrVillage;
                    this.present_country=JSON.parse(response.data.present).country;
                    this.present_selectedDivision=JSON.parse(response.data.present).division;
                    this.present_districts=response.data.present_districts;
                    this.present_subdistricts=response.data.present_subdistricts;
                    this.present_selectedDistrict=JSON.parse(response.data.present).district;
                    this.present_selectedSubDistrict=JSON.parse(response.data.present).subdistrict;
                    this.present_postcode=JSON.parse(response.data.present).postcode;
                    swal("Great",'Information updated successfully','success',{
                        button: "OK"
                    });
                }
                
            }).catch(error=>{

            })
        }
    },
    beforeMount(){
        axios.get('/api/user/show_address').then(response=>{
            if(response.data.present!=null){
                this.present_districts=response.data.present_districts;
                this.present_subdistricts=response.data.present_subdistricts;
                this.permanent_districts=response.data.permanent_districts;
                this.permanent_subdistricts=response.data.permanent_subdistricts;
            }
        }).catch(error=>{

        })
    },
    mounted(){
        axios.get('/api/user/show_address').then(response=>{
            
            if(response.data.present!=null){
                this.present_holdingOrVillage=JSON.parse(response.data.present).holdingOrVillage;
                this.present_country=JSON.parse(response.data.present).country;
                this.present_selectedDivision=JSON.parse(response.data.present).division;
                this.present_selectedDistrict=JSON.parse(response.data.present).district;
                this.present_selectedSubDistrict=JSON.parse(response.data.present).subdistrict;
                this.present_postcode=JSON.parse(response.data.present).postcode;

                this.permanent_holdingOrVillage=JSON.parse(response.data.permanent).holdingOrVillage;
                this.permanent_country=JSON.parse(response.data.permanent).country;
                this.permanent_selectedDivision=JSON.parse(response.data.permanent).division;
                this.permanent_selectedDistrict=JSON.parse(response.data.permanent).district;
                this.permanent_selectedSubDistrict=JSON.parse(response.data.permanent).subdistrict;
                this.permanent_postcode=JSON.parse(response.data.permanent).postcode;

                if(response.data.sameOrNot){
                    document.getElementById('addRsame').checked=true;
                }
            }
        }).catch(error=>{

        })
        
    },

    watch:{
        /* present_address:{
            selectedDivision:function(){
                console.log(this.selectedDivision);
            }
        },*/
        present_holdingOrVillage:function(){
            if(this.permanent_holdingOrVillage!=this.present_holdingOrVillage){
                document.getElementById('addRsame').checked=false;
            }
            else if(this.present_postcode==this.permanent_postcode && this.permanent_selectedDivision==this.present_selectedDivision && this.permanent_selectedSubDistrict==this.present_selectedSubDistrict && this.permanent_selectedDistrict==this.present_selectedDistrict && this.permanent_country==this.present_country && this.permanent_holdingOrVillage==this.present_holdingOrVillage){
                document.getElementById('addRsame').checked=true;
            }
        },
        present_selectedSubDistrict:function(){
            if(this.present_selectedSubDistrict==null||this.present_selectedSubDistrict==""||this.present_selectedSubDistrict==undefined||this.present_selectedSubDistrict=="null"){
                this.present_selectedSubDistrict=-1;
            }
        },
        permanent_holdingOrVillage:function(){
            if(this.permanent_holdingOrVillage!=this.present_holdingOrVillage){
                document.getElementById('addRsame').checked=false;
            }
            else if(this.present_postcode==this.permanent_postcode && this.permanent_selectedDivision==this.present_selectedDivision && this.permanent_selectedSubDistrict==this.present_selectedSubDistrict && this.permanent_selectedDistrict==this.present_selectedDistrict && this.permanent_country==this.present_country && this.permanent_holdingOrVillage==this.present_holdingOrVillage){
                document.getElementById('addRsame').checked=true;
            }
        },
        permanent_selectedSubDistrict:function(){
            if(this.permanent_selectedSubDistrict==null||this.permanent_selectedSubDistrict==""||this.permanent_selectedSubDistrict==undefined||this.permanent_selectedSubDistrict=="null"){
                this.permanent_selectedSubDistrict=-1;
            }
            if(this.present_selectedSubDistrict!=this.permanent_selectedSubDistrict){
                document.getElementById('addRsame').checked=false;
            }
            else if(this.present_postcode==this.permanent_postcode && this.permanent_selectedDivision==this.present_selectedDivision && this.permanent_selectedSubDistrict==this.present_selectedSubDistrict && this.permanent_selectedDistrict==this.present_selectedDistrict && this.permanent_country==this.present_country && this.permanent_holdingOrVillage==this.present_holdingOrVillage){
                document.getElementById('addRsame').checked=true;
            }
        },
        permanent_postcode:function(){
            if(this.permanent_postcode!=this.present_postcode){
                document.getElementById('addRsame').checked=false;
            }
            else if(this.present_postcode==this.permanent_postcode && this.permanent_selectedDivision==this.present_selectedDivision && this.permanent_selectedSubDistrict==this.present_selectedSubDistrict && this.permanent_selectedDistrict==this.present_selectedDistrict && this.permanent_country==this.present_country && this.permanent_holdingOrVillage==this.present_holdingOrVillage){
                document.getElementById('addRsame').checked=true;
            }
        },
        permanent_country:function(){
            if(this.permanent_country!=this.present_country){
                document.getElementById('addRsame').checked=false;
            }
            else if(this.present_postcode==this.permanent_postcode && this.permanent_selectedDivision==this.present_selectedDivision && this.permanent_selectedSubDistrict==this.present_selectedSubDistrict && this.permanent_selectedDistrict==this.present_selectedDistrict && this.permanent_country==this.present_country && this.permanent_holdingOrVillage==this.present_holdingOrVillage){
                document.getElementById('addRsame').checked=true;
            }
        }
        
    }
}
</script>


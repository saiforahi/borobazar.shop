<template>
    <div class="personal-details">
        <div class="edit-tools">
            <button v-if="disabled==1" class="btn-getinvite1" @click="disabled = (disabled + 1) % 2"><i class="fa fa-pencil"></i> এডিট</button>
        </div>
        <form class="row" id="personalForm">                             
            <div class="col-md-6">
                <div class="form-group col-md-12">
                    <label for="">নামের প্রথম অংশ*<abbr title="Required" class="required"></abbr></label>
                    <input type="text" class="form-control2" placeholder="" v-model="first_name" name="FirstName" id="FirstName" :disabled="disabled == 1">
                </div>
                
                <div class="form-group col-md-12">
                    <label for="">নামের শেষ অংশ*</label>
                    <input type="text" class="form-control2" placeholder="" v-model="last_name" name="LastName" id="LastName" :disabled="disabled == 1">
                </div>
                
                <div class="form-group col-md-12">
                    <label for="">পিতার নাম</label>
                    <input v-model="father_name" type="text" class="form-control2" placeholder=""  name="txtFName" id="txtFName" :disabled="disabled == 1">
                </div>
                
                <div class="form-group col-md-12">
                    <label for="">মাতার নাম</label>
                    <input v-model="mother_name" type="text" class="form-control2" placeholder=""  name="txtMName" id="txtMName" :disabled="disabled == 1">
                </div>
                        
                <div class="form-group col-md-12">
                    <label for="">জন্ম তারিখ<abbr title="Required" class="required"></abbr></label>
                    <!--datepicker class="form-control2 datepicker"  min="1900-01-01" placeholder="Select Date" v-model="birth_date" :disabled="disabled == 1"></datepicker-->
                    <!--p class="form-control2 datepicker" v-if="disabled==1">{{birth_date}}</p-->
                    <input id="birth_date_input" v-model="birth_date" type="date" class="form-control2 datepicker" placeholder="" name="" :disabled="disabled == 1">
                </div>
                        
                <div class="form-group col-md-12">
                    <label for="">লিঙ্গ<abbr title="Required" class="required"></abbr></label>
                    <select v-model="sex" name="cboGender" id="cboGender" class="form-control2" :disabled="disabled == 1">
                        <option value="select">নির্বাচন</option>
                        <option value="male">পুরুষ</option>
                        <option value="female">মহিলা</option>
                        <option value="other">অন্যান্য</option>
                    </select>
                </div>
                
                <div class="form-group col-md-12">
                    <label for="">ধর্ম</label>
                    <input v-model="religion" type="text" class="form-control2" placeholder="" name="txtReligion" id="txtReligion" :disabled="disabled == 1">
                </div>
                        
                <div class="form-group col-md-12">
                    <label for="">বৈবাহিক  অবস্থা<abbr title="Required" class="required"></abbr></label>
                    <select v-model="marital_status" name="cboMStatus" id="cboMStatus" class="form-control2" :disabled="disabled == 1">
                        <option value="select">নির্বাচন</option>
                        <option value="single">অবিবাহিত</option>
                        <option value="married"> বিবাহিত </option>
                    </select>
                </div>
                    
                <!-- Start Nationality -->
                <div class="form-group col-md-12">
                    <div class="title-wrap">
                        <label for="">জাতীয়তা<abbr title="Required" class="required"></abbr></label>
                        <input v-model="nationality" class="form-control2 onclick-hidden" id="nViewFild" placeholder="" value="" type="text" :disabled="disabled == 1">
                    </div>                                    
                </div>
                <!-- End Nationality -->
            </div>

            <div class="col-md-6">
                <div class="row">
                
                    <div class="form-group col-md-12">
                        <label for="">জাতীয় পরিচয় পত্র নম্বর</label>
                        <input v-model="NID" type="text" class="form-control2" placeholder="" value="" name="txtNationalId" id="txtNationalId" :disabled="disabled == 1">
                    </div>

                    <div class="form-group col-md-12">
                        <label for="">পাসপোর্ট নাম্বার</label>
                        <input v-model="passport" type="text" class="form-control2" placeholder="" value="" name="passportNo" id="passportNo" :disabled="disabled == 1">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="">পাসপোর্ট ইস্যু তারিখ</label>
                        <input v-model="passport_issue_date" type="date" class="form-control2 datepicker" placeholder="" value="" name="issueDate" id="issueDate" :disabled="disabled == 1">
                        <input type="hidden" name="h_catId" value="">
                        <input type="hidden" name="isBlueColor" id="isBlueColor" value="False">
                    </div>

                                    
                    <div class="form-group col-md-12">
                        <label for="" class="sui">মোবাইল নম্বর</label>
                        <input v-model="primary_cell" type="text" class="form-control2" placeholder="" value="" name="txtMobile" id="txtMobile" :disabled="disabled == 1" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="">মোবাইল নম্বর ২</label>
                        <input v-model="cell2" type="text" class="form-control2" placeholder="" value="" name="txtPhone_H" id="txtPhone_H" :disabled="disabled == 1">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="">মোবাইল নম্বর ৩</label>
                        <input v-model="cell3" type="text" class="form-control2" placeholder="" value="" name="txtPhone_Off" id="txtPhone_Off" :disabled="disabled == 1">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="" class="sui">ইমেইল</label>
                        <input v-model="primary_email" type="text" class="form-control2" placeholder="" value="" name="txtEmail1" id="txtEmail1" :disabled="disabled == 1">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="">বিকল্প ইমেইল</label>
                        <input v-model="secondary_email" type="text" class="form-control2" placeholder="" value="" name="txtEmail2" id="txtEmail2" :disabled="disabled == 1">
                        <input type="hidden" name="h_catId" value="">
                    </div>
                </div>
            </div>
            <div class="form-group col-md-12">
                <div v-if="disabled==0" class="btn-finish">
                    <button  type="button" class="btn-getinvite1" @click="save" id="perbtn-save">সেভ</button>
                    <button  type="button" class="btn-getinvite1" id="perbtn-close" @click="disabled=1">ক্লোজ</button>
                </div>
            </div>
        </form>    
    </div>
</template>

<script>
import swal from 'sweetalert'
import { compareAsc, format } from 'date-fns'
export default {
    data(){
        return{
            disabled: 1,
            first_name :'',
            last_name :'',
            father_name:'',
            mother_name:'',
            birth_date:'',
            sex:'select',
            religion:'',
            marital_status:'select',
            nationality:'',
            NID:'',
            passport:'',
            passport_issue_date:'',
            primary_cell:'',
            cell2:'',
            cell3:'',
            primary_email:'',
            secondary_email:'',
        }
    },
    mounted(){
        console.log(window.auth_user.api_token);
        axios.get('/api/user/show_details')
        .then(response=>{
            this.first_name=response.data.data.first_name;
            this.last_name=response.data.data.last_name;
            this.father_name=response.data.data.father_name;
            this.mother_name=response.data.data.mother_name;
            this.birth_date=new Date(response.data.data.birth_date).toISOString().slice(0,10);
            this.primary_cell=response.data.data.primary_cell;
            this.religion=response.data.data.religion;
            this.sex=response.data.data.sex;
            this.marital_status=response.data.data.marital_status;
            this.nationality=response.data.data.nationality;
            this.NID=response.data.data.NID;
            this.passport=response.data.data.passport_no;
            /*this.passport_issue_date=response.data.passport_issue_date;*/
            
            
        })
        .catch(function (error) {
            //console.log(error);
        });
    },
    
    methods:{
        save(){
            axios.post('/api/user/update_details', {
                first_name: this.first_name,
                last_name: this.last_name,
                father_name:this.father_name,
                mother_name:this.mother_name,
                new_birth_date:this.birth_date,
                primary_cell:this.primary_cell,
                sex:this.sex,
                religion:this.religion,
                marital_status:this.marital_status,
                nationality:this.nationality,
                NID:this.NID,
                passport:this.passport,
                /*passport_issue_date:this.passport_issue_date,
                cell2:this.cell2,
                cell3:this.cell3,
                secondary_email:this.secondary_email*/
            })
            .then(response=> {
                if(response.statusText=='OK'){
                    this.disabled=1;
                    this.first_name=response.data.first_name;
                    this.last_name=response.data.last_name;
                    this.father_name=response.data.father_name;
                    this.birth_date=new Date(response.data.birth_date).toISOString().slice(0,10);
                    this.sex=response.data.sex;
                    this.religion=response.data.religion;
                    this.primary_cell=response.data.cell;
                    this.marital_status=response.data.marital_status;
                    this.nationality=response.data.nationality;
                    this.NID=response.data.NID;
                    this.passport=response.data.passport_no;
                    swal("Great",'Information updated successfully','success',{
                    button: "OK"
                });
                }
                else{
                    swal('Sorry','Something went wrong!','error',{
                        button: "OK"
                    })
                }
            })
            .catch(function (error) {
                //console.log(error);
            });
        },
    },

    watch:{
        marital_status: function(){
            if(this.marital_status==null){
                this.marital_status='select'
            }
        },
        sex: function(){
            if(this.sex==null && this.sex!='male' && this.sex!='female' && this.sex!='other'){
                this.sex='select'
            }
        },
        birth_date: function(){
            if(this.birth_date=="1970-01-01"){
                this.birth_date=''
            }
        }
    }
}
</script>
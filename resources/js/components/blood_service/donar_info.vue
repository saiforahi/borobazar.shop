<template>
    <div class="container">
        <div class="bloodreg-inner">
            <form class="bloodreg-form row">
                <div class="col-lg-6 form-group">
                    <label for="text">নামের প্রথম অংশ *</label>
                    <input type="text" class="form-control2" v-model="firstName"  id="name" disabled>
                </div>
                <div class="col-lg-6 form-group">
                    <label for="text">নামের শেষ অংশ</label>
                    <input type="text" class="form-control2" v-model="lastName"  id="name" disabled>
                </div>
                <div v-if="userHasCell==false" class="col-lg-6 form-group">
                    <label for="cell">মোবাইল *</label>
                    <input v-model="cell" type="text" class="form-control2" placeholder="" id="cell" name="cell" required>
                    <p v-if="errors.cell==true"><code>সঠিক নম্বর দিন</code></p>
                </div>
                <div class="form-group col-lg-6">
                        <label for="bloodGroup">রক্তের গ্রুপ *</label>
                        <select class="form-control2 search-blood" id="bloodGroup" name="bloodGroup" v-model="selectedBloodGroup">
                            <option v-if="registered==false"  disabled value='-1'>রক্তের গ্রুপ</option>
                            <option v-for="bloodGroup in bloodGroups" :value="bloodGroup.id" :key="bloodGroup.id">{{bloodGroup.bangla}}</option>
                        </select>
                    </div>
                    <div class="col-lg-6 form-group">
                    <label for="presentDistrict">বসবাসরত জেলা *</label>
                    <select class="form-control2 search-blood" id="presentDistrict" name="presentDistrict" v-model="presentDistrict" required>
                        <option v-if="registered==false" value='-1' disabled>জেলা</option>
                        <option value='1'>ব্রাক্ষ্মণবাড়িয়া</option>
                        <option value='2'>বাগেরহাট</option>
                        <option value='3'>বান্দরবান</option>
                        <option value='4'>বরিশাল</option>
                        <option value='5'>ভোলা</option>
                        <option value='6' Selected>বগুড়া</option>
                        <option value='7'>বরগুনা</option>
                        <option value='8'>চাঁদপুর</option>
                        <option value='9'>চাঁপাইনবাবগঞ্জ</option>
                        <option value='10'>চট্টগ্রাম</option>
                        <option value='11'>চুয়াডাঙ্গা</option>
                        <option value='12'>কুমিল্লা</option>
                        <option value='13'>কক্সবাজার</option>
                        <option value='14'>ঢাকা</option>
                        <option value='15'>দিনাজপুর</option>
                        <option value='16'>ফরিদপুর</option>
                        <option value='17'>ফেনী</option>
                        <option value='18'>গাইবান্ধা</option>
                        <option value='19'>গাজীপুর</option>
                        <option value='20'>গোপালগঞ্জ</option>
                        <option value='21'>হবিগঞ্জ</option>
                        <option value='22'>জামালপুর</option>
                        <option value='23'>যশোর</option>
                        <option value='24'>ঝালকাঠী</option>
                        <option value='25'>ঝিনাইদহ</option>
                        <option value='26'>জয়পুরহাট</option>
                        <option value='27'>খাগড়াছড়ি</option>
                        <option value='28'>খুলনা</option>
                        <option value='29'>কিশোরগঞ্জ</option>
                        <option value='30'>কুড়িগ্রাম</option>
                        <option value='31'>কুষ্টিয়া</option>
                        <option value='32'>লালমনিরহাট</option>
                        <option value='33'>লক্ষ্মীপুর</option>
                        <option value='34'>মাদারীপুর</option>
                        <option value='35'>মাগুরা</option>
                        <option value='36'>মানিকগঞ্জ</option>
                        <option value='37'>মেহেরপুর</option>
                        <option value='38'>মৌলভীবাজার</option>
                        <option value='39'>মুন্সীগঞ্জ</option>
                        <option value='40'>ময়মনসিংহ</option>
                        <option value='41'>নওগাঁ</option>
                        <option value='42'>নড়াইল</option>
                        <option value='43'>নারায়নগঞ্জ</option>
                        <option value='44'>নরসিংদী</option>
                        <option value='45'>নাটোর</option>
                        <option value='46'>নেত্রকোণা</option>
                        <option value='47'>নীলফামারী</option>
                        <option value='48'>নোয়াখালী</option>
                        <option value='49'>পাবনা</option>
                        <option value='50'>পঞ্চগড়</option>
                        <option value='51'>পটুয়াখালী</option>
                        <option value='52'>পিরোজপুর</option>
                        <option value='53'>রাজবাড়ী</option>
                        <option value='54'>রাজশাহী</option>
                        <option value='55'>রাঙ্গামাটি</option>
                        <option value='56'>রংপুর</option>
                        <option value='57'>সাতক্ষীরা</option>
                        <option value='58'>শরিয়তপুর</option>
                        <option value='59'>শেরপুর</option>
                        <option value='60'>সিরাজগঞ্জ</option>
                        <option value='61'>সুনামগঞ্জ</option>
                        <option value='62'>সিলেট</option>
                        <option value='63'>টাঙ্গাইল</option>
                        <option value='64'>ঠাকুরগাঁও</option>
                    </select>
                    <p v-if="errors.presentDistrict==true"><code>সঠিক জেলা নির্বাচন করুন</code></p>
                </div>
                <div class="col-lg-6 form-group">
                    <label for="lastDonationDate">শেষবার রক্ত দানের তারিখ *</label>
                    <input v-model="lastDonationDate" type="date" class="form-control2 @error('lastDonationDate') is-invalid @enderror" placeholder="" id="lastDonationDate" name="lastDonationDate" required >
                    <p v-if="errors.lastDonationDate==true"><code>সঠিক তারিখ দিন</code></p>
                </div>
                <div class="col-lg-6 form-group">
                    <label for="organizationName">সংগঠনের নাম (আপনি যার সক্রিয় সদস্য)</label>
                    <input v-model="organizationName" type="text" class="form-control2 " placeholder="উদাঃ রক্তের বন্ধন" id="text" name="organizationName">
                </div>
                <div class="col-lg-6 form-group">
                    <button @click="save" type="button" class="btn-getinvite" id="submit">সংরক্ষণ করুন</button>
                </div>
            </form>
        </div>
    </div>
</template>

<script>
import swal from 'sweetalert';
export default {
    data(){
        return{
            firstName:'',
            lastName:'',
            cell:'',
            selectedBloodGroup:'',
            bloodGroups:[],
            presentDistrict:'',
            lastDonationDate:'',
            organizationName:'',
            errors:{
                lastDonationDate:false,
                presentDistrict:false,
                cell:false,
            },
            registered:false,
            userHasCell:true
        }

    },
    beforeMount(){
        axios.get('/api/blood_groups').then(response => {
            this.bloodGroups=response.data;
        }).catch(error => {
            //console.log(error);
        })
    },
    mounted(){
        axios.get('/api/user/show_donar_info').then(response => {
            if(response.data.registered==false){
                this.presentDistrict=-1;
                this.selectedBloodGroup=-1;
                this.userHasCell=false;
                this.firstName=response.data.donar_info.firstName;
                this.lastName=response.data.donar_info.lastName;
            }
            else{
                if(response.data.donar_info.hasCell==false){
                    this.userHasCell=false;
                }
                else{
                    this.userHasCell=true;
                }
                this.registered=true;
                this.firstName=response.data.donar_info.firstName;
                this.lastName=response.data.donar_info.lastName;
                this.selectedBloodGroup=response.data.donar_info.bloodGroup;
                this.lastDonationDate=new Date(response.data.donar_info.lastDonationDate).toISOString().slice(0,10);
                this.organizationName=response.data.donar_info.organizationName;
                this.presentDistrict=response.data.donar_info.presentDistrict;
                
            }
            
        }).catch(error => {
            //console.log(error);
        })
    },

    methods:{
        handleError(data){
            if(data.lastDonationDate!=null){
                this.errors.lastDonationDate=true;
            }
            else if(data.presentDistrict!=null){
                this.errors.presentDistrict=true;
            }
            else if(data.cell!=null){
                this.errors.cell=true;
            }
        },
        save(){
            if((this.selectedBloodGroup>0 && this.selectedBloodGroup<9 )&& this.presentDistrict!=-1 ){
                axios.post('/api/user/update_donar_info',{
                    cell:this.cell,
                    bloodGroup: this.selectedBloodGroup,
                    lastDonationDate: this.lastDonationDate,
                    presentDistrict: this.presentDistrict,
                    organizationName: this.organizationName
                }).then(response => {
                    console.log(response.data)
                    if(response.data.errors!=null){
                        this.handleError(response.data.errors)
                    }
                    else{
                        this.cell=response.data.result.cell;
                        this.selectedBloodGroup=response.data.result.bloodGroup;
                        this.presentDistrict=response.data.result.presentDistrict;
                        this.lastDonationDate=new Date(response.data.result.lastDonationDate).toISOString().slice(0,10);
                        this.organizationName=response.data.result.organizationName;
                        swal("সম্পন্ন",'আপনার তথ্যাবলী সংরক্ষন করা হয়েছে','success',{
                            button:"ওকে"
                        });
                        errors.lastDonationDate=false;
                        errors.presentDistrict=false;
                        errors.cell=false;
                    }
                
                }).catch( error => {
                    /*if (error.response) {
                        // The request was made and the server responded with a status code
                        // that falls out of the range of 2xx
                        //console.log(error.response.data);
                        //console.log(error.response.status);
                        //console.log(error.response.headers);
                    } 
                    else if (error.request) {
                        // The request was made but no response was received
                        // `error.request` is an instance of XMLHttpRequest in the browser and an instance of
                        // http.ClientRequest in node.js
                        /*console.log(error.request);
                        if(error.request.lastDonationDate!=null){
                            this.errors.lastDonationDate=true;
                        }
                    }
                    else {
                        // Something happened in setting up the request that triggered an Error
                        //console.log('Error', error.message);
                    }*/
                })
            }
            else{
                swal("দুঃখিত",'বড়বাজারকে সঠিক তথ্যাবলী দিয়ে সাহায্য করুন','warning',{
                    button:"ওকে"
                });
            }
            
        }
    },

    watch:{
        selectedBloodGroup:function(){
            
        }
    }
}
</script>
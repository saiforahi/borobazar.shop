<template>
    <div id="request_card" class="col-lg-6" style="padding-bottom: 30px;" v-if="allowed==='yes'">
        <div class="donar-inner product product-single">
            <table class="bldreq-list">
                <tbody>
                    <tr>
                        <th>রক্ত পেয়ে থাকলে সুইচ অফ করুন</th>
                        <td>
                            <label class="switch">
                                <input :disabled="request.completed=='true'" type="checkbox" v-model="completed" @change="mark_blood_request(completed)" :id="request.blood_request_id">
                                <span class="slider"></span>
                                
                            </label>
                        </td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <table class="bldreq-list">
                <tbody>
                <tr>
                    <th>রোগীর নামঃ</th>
                    <td>{{ request.patient_name }}</td>
                </tr>
                <tr>
                    <th>রোগীর বয়সঃ</th>
                    <td>{{ request.patient_age }}</td>
                </tr>
                <tr>
                    <th>যোগাযোগের নাম্বারঃ</th>
                    <td>{{ request.contact_no }}</td>
                </tr>
                <tr>
                    <th>রক্তের গ্রুপঃ</th>
                    <td>{{ request.blood_group }}</td>
                </tr>
                <tr>
                    <th>পরিমাণঃ (ইউনিট/ব্যাগ)</th>
                    <td>{{ request.quantity }}</td>
                </tr>
                <tr>
                    <th>রক্ত গ্রহনের স্থানঃ</th>
                    <td>{{ request.donation_place }}</td>
                </tr>
                <tr>
                    <th>রক্ত গ্রহনের তারিখঃ</th>
                    <td>{{ request.donation_date }}</td>
                </tr>
                <tr>
                    <th>রোগীর বর্তমান জেলাঃ</th>
                    <td>{{ request.district_name }}</td>
                </tr>
                <tr>
                    <th>রোগীর সমস্যা সম্পর্কে কিছু কথাঃ</th>
                    <td>{{request.about_patient || ''}}</td>
                </tr>
                <tr>
                    <th>অনুরোধকারীর নামঃ</th>
                    <td>{{request.submittedby}}</td>
                </tr>
                <tr>
                    <th>রোগীর সাথে সম্পর্কঃ</th>
                    <td>{{request.relation_with_patient}}</td>
                </tr>
                </tbody>
            </table>
            <hr>
            <div class="donor-prf">
                <div v-for="donar in responsed_donars" v-bind:key="donar.id" class="form-group img-thumb" :title="getDonarName(donar.name,donar.last_name)" @click="show_modal(donar)">
                    <img v-if="donar.sex=='male'" src="/img/male-user.svg">
                    <img v-else-if="donar.sex=='female'" src="/img/female-user.svg">
                    <img v-else src="/img/login-avatar.png">
                </div>
                
            </div>
            <!--div onclick="document.getElementById('id02').style.display='block'" style="width:auto;"-->
            <div onclick="document.getElementById('confirmation_modal').style.display='block'" style="width:auto;">
                <button class="main-btn quick-view" @click="delete_request(request.blood_request_id)"><i class="fa fa-trash"></i> মুছে ফেলুন</button>
            </div>
        </div>
        
    </div>
</template>

<script>
import swal from 'sweetalert';
    export default {
        name:'bloodRequest',
        data(){
            return{
                allowed:'no',
                responsed_donars:[],
                completed:false
            }
        },
        props: ['request'],
        mounted() {
            if(this.request!=null)
            {
                this.allowed='yes';
                if(this.request.completed=='true'){
                    this.completed=true;
                }
            }
            axios.get('/api/blood_requests/responsed_donars/'+this.request.blood_request_id).then(response=>{
                this.responsed_donars=response.data.donars;
            }).catch(error=>{

            })
        },
        watch:{
            request:function(){
                //let today=new Date().getTime();
                //console.log(today-new Date(this.request.donation_date).getTime());
                //document.getElementById("request_card").className += " old-disabled";
            },

            closed:function(){
                this.completed=false;
            }
        },
        methods:{
            delete_request(id){
                this.$emit('request_to_delete',id);
            },

            getDonarName(name,last_name){
                if(last_name===null){
                    return name;
                }
                return name+' '+last_name;
            },

            show_modal(data){
                
                axios.get('/api/blood_service/show_donar_details/'+data.id).then(response=>{
                    this.$emit('donar_modal_data',response.data.donar);
                    document.getElementById('donator-modal').style.display='block'; //opening modal 
                });
            },

            mark_blood_request(data){
                if(data==true){
                    this.$emit('donars',this.responsed_donars);
                    this.$emit('request_id',this.request.blood_request_id);
                    document.getElementById('complete_request').style.display='block';
                }
                else{
                   
                    
                }
            }
        }
    }
</script>


<template>
    <div id="request_card" class="col-lg-6" style="padding-bottom: 30px;" v-if="allowed==='yes'">
        <div class="donar-inner">
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
            <table class="bldreq-list">
                <tbody>
                <tr>
                    <th>রক্ত দানে ইচ্ছে প্রকাশ করতে চাইলে চেকবক্স চাপুন</th>
                    <td><input type="checkbox" v-model="donar_response" class="" @change="send_response(donar_response)"></td>
                </tr>
                </tbody>
            </table>  
            <hr>
                         
            <div  class="donor-prf">
                <div v-for="donar in responsed_donars" v-bind:key="donar.id" class="form-group img-thumb" :title="getDonarName(donar.name,donar.last_name)">
                    <img v-if="donar.sex=='male'" src="/img/male-user.svg">
                    <img v-else-if="donar.sex=='female'" src="/img/female-user.svg">
                    <img v-else src="/img/login-avatar.png">
                </div>
                
            </div>
            
        </div>
    </div>
</template>

<script>
    export default {
        name:'bloodRequest',
        data(){
            return{
                allowed:'no',
                donar_response:false,
                modalData:{},
                responsed_donars:[]
            }
        },
        props: ['request'],
        mounted() {
            if(this.request!=null)
            {
                this.allowed='yes';
            }
            axios.get('/api/blood_requests/responsed_donars/'+this.request.blood_request_id).then(response=>{
                    this.responsed_donars=response.data.donars;
                    if(response.data.responsed==true){
                        this.donar_response=true;
                    }
                }).catch(error=>{

                })
        },
        watch:{
            request:function(){
                //let today=new Date().getTime();
                //console.log(today-new Date(this.request.donation_date).getTime());
                //document.getElementById("request_card").className += " old-disabled";
            }
        },

        methods:{
            send_response(donar_response){
                axios.post('/api/blood_requests/send_my_response',{
                    blood_request_id:this.request.blood_request_id,
                    response:this.donar_response
                }).then(response=>{
                    this.responsed_donars=response.data.donars;
                }).catch(error=>{

                })
            },

            getDonarName(name,last_name){
                if(last_name===null){
                    return name;
                }
                return name+' '+last_name;
            }
        }
    }
</script>


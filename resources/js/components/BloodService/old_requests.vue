<template>
    <div id="request_card" class="col-lg-6" style="padding-bottom: 30px;" v-if="allowed==='yes'">
        <div class="donar-inner product product-single">
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
            <!--div onclick="document.getElementById('id02').style.display='block'" style="width:auto;"-->
            <div onclick="document.getElementById('confirmation_modal').style.display='block'" style="width:auto;">
                <button class="main-btn quick-view" @click="delete_request(request.blood_request_id)"><i class="fa fa-trash"></i> মুছে ফেলুন</button>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name:'bloodRequest',
        data(){
            return{
                allowed:'no'
            }
        },
        props: ['request'],
        mounted() {
            if(this.request!=null)
            {
                this.allowed='yes';
            }
        },
        watch:{
            request:function(){
                //let today=new Date().getTime();
                //console.log(today-new Date(this.request.donation_date).getTime());
                //document.getElementById("request_card").className += " old-disabled";
            }
        },
        methods:{
            delete_request(id){
                this.$emit('request_to_delete',id);
            }
        }
    }
</script>


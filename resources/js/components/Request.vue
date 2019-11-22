<template>
    <div class="col-lg-6" style="padding-bottom: 30px;" v-if="allowed==='yes'">
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
        }
    }
</script>


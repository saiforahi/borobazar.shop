<template>
    <div class="col-lg-6" v-if="allowed==='yes'">
        <div class="donar-inner">
            <table class="bldreq-list">
                <tr>
                    <th>অনুরোধকারীর নামঃ</th>
                    <td>{{ request.name }}</td>
                </tr>
                <tr>
                    <th>রোগীর সাথে সম্পর্কঃ</th>
                    <td>{{ request.relation }}</td>
                </tr>
                <tr>
                    <th>মোবাইলঃ</th>
                    <td>{{ request.cell }}</td>
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
                    <th>রোগীর বয়সঃ</th>
                    <td>{{ request.patient_age }}</td>
                </tr>
                <tr>
                    <th>রোগীর বর্তমান জেলাঃ</th>
                    <td>{{ request.district }}</td>
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
                    <th>রোগীর সমস্যা সম্পর্কে কিছু কথাঃ</th>
                    <td>{{request.about_patient || ''}}</td>
                </tr>
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


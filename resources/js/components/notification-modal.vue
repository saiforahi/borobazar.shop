<template>
    <!--card modal area -->
    <div class="modal" id="notification_modal" tabindex="-1" role="dialog" aria-labelledby="noti_title" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content animate">
                <div class="modal-header">
                    <h4 class="n_title" id="noti_title">অনুরোধ</h4>
                    <span @click="hidemodal" class="close" title="Close">&times;</span>
                </div>
                <div class="modal-body">
                    <table class="bldreq-list">
                        <tbody>
                            <tr>
                                <th>রোগীর নামঃ</th>
                                <td>{{quick_view_data.patient_name}}</td>
                            </tr>
                            <tr>
                                <th>রোগীর বয়সঃ</th>
                                <td>{{quick_view_data.patient_age}}</td>
                            </tr>
                            <tr>
                                <th>যোগাযোগের নাম্বারঃ</th>
                                <td>{{quick_view_data.contact_no}}</td>
                            </tr>
                            <tr>
                                <th>রক্তের গ্রুপঃ</th>
                                <td>{{quick_view_data.blood_group}}</td>
                            </tr>
                            <tr>
                                <th>পরিমাণঃ (ইউনিট/ব্যাগ)</th>
                                <td>{{quick_view_data.quantity}}</td>
                            </tr>
                            <tr>
                                <th>রক্ত গ্রহনের স্থানঃ</th>
                                <td>{{quick_view_data.donation_place}}</td>
                            </tr>
                            <tr>
                                <th>রক্ত গ্রহনের তারিখঃ</th>
                                <td>{{quick_view_data.donation_date}}</td>
                            </tr>
                            <tr>
                                <th>রোগীর বর্তমান জেলাঃ</th>
                                <td>{{quick_view_data.district_name}}</td>
                            </tr>
                            <tr>
                                <th>রোগীর সমস্যা সম্পর্কে কিছু কথাঃ</th>
                                <td>{{quick_view_data.about_patient}}</td>
                            </tr>
                            <tr>
                                <th>অনুরোধকারীর নামঃ</th>
                                <td>{{quick_view_data.submittedby}}</td>
                            </tr>
                            <tr>
                                <th>রোগীর সাথে সম্পর্কঃ</th>
                                <td>{{quick_view_data.relation_with_patient}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<!--End notify card modal area -->
</template>

<script>
export default {
    props:['quick_view_data'],
    watch:{
        quick_view_data: function(){
             document.getElementById('notification_modal').style.display='block';
        },
    },
    methods:{
        hidemodal() {
            document.getElementById('notification_modal').style.display='none';
        },
    }
    
}
</script>
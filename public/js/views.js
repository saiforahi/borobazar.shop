
const searchAppRoot = new Vue({
    el: '#search-app-root',
    data(){
        return{
            channelData:''
        }
    },
    mounted() {
        if(window.login_errors!=undefined){
            swal("দুঃখিত",'অনুগ্রহ করে সঠিক তথ্য দিন','error');
        }
        if(window.blood_success!=undefined){
            swal("সম্পন্ন!",window.blood_success,'success');
        }
        if(window.password_change_success!=undefined){
            swal("সম্পন্ন!",window.password_change_success,'success')
        }
        if(window.AccountCreatedMessage!=undefined)
        {
            swal("স্বাগতম",window.AccountCreatedMessage,'success',{
                button: "ওকে"
            })
        }
    },
    methods:{
        setNewResult(data){
            this.channelData=data;
        }
    }
});

const requestList = new Vue({
    el: '#request-list-root'
});

const notificationView = new Vue({
    el: '#navbarSupportedContent',
    data(){
        return{
            total_unread:'',
            blood_request:[]
        }
    },
    methods:{
        setData(data){
            this.total_unread=data;
        },
        setModalData(data){
            this.blood_request=data;
        }
    }
});

const personalDetailsView=new Vue({
    el: '#detailsView'
});
const personalAddressView=new Vue({
    el: '#addressView'
});
const personalEducationView=new Vue({
    el: '#educationView'
});
const personalTrainingView=new Vue({
    el: '#trainingView'
});
const personalSkillsView=new Vue({
    el: '#skillsView'
});
const personalPaymentDetailsView=new Vue({
    el: '#payment'
});
const chatboxView=new Vue({
    el: '#chatbox',
});
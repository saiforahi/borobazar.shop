
const searchAppRoot = new Vue({
    el: '#search-app-root',
    data(){
        return{
            channelData:''
        }
    },
    mounted() {
        if(window.login_errors!=undefined){
            swal("দুঃখিত",'অনুগ্রহ করে সঠিক তথ্য দিন','error',{button: "ওকে"});
        }
        if(window.blood_success!=undefined){
            swal("সম্পন্ন!",window.blood_success,'success',{button: "ওকে"});
        }
        if(window.password_change_success!=undefined){
            swal("সম্পন্ন!",window.password_change_success,'success',{button: "ওকে"});
        }
        if(window.AccountCreatedMessage!=undefined)
        {
            swal("স্বাগতম",window.AccountCreatedMessage,'success',{
                button: "ওকে"
            });
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

const navbarView = new Vue({
    el: '#navbarSupportedContent',
    data(){
        return{
            total_unread:'',
            total_unread_messages:'',
            blood_request:[],
            chat_allowed:false
        }
    },
    methods:{
        setData(data){
            this.total_unread=data;
        },
        set_total_unread_messages(data){
            this.total_unread_messages=data;
        },
        setModalData(data){
            this.blood_request=data;
        },
        setChatBox(data){
            this.chat_allowed=true;
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
    data(){
        return{
            allowed:false
        }
    },
    mounted(){
        axios.get('/api/message/show/'+10).then(response=>{
            //console.log(response.data);
            })
            .catch(error=> {
                
            console.log(error);
        });
    }
});

const ownRequestsView=new Vue({
    el: '#own-request-list',
    data(){
        return{
           
        }
    },
    methods:{
        
    }
});


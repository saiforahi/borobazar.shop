
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

const mainNavbarView = new Vue({
    el: '#mainNavBarView',
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
            donarModalData:{},
            responsed_donars:[],
            selected_request:'',
        }
    },
    watch:{

    },
    methods:{
        set_donar_modal_data(data){
            this.donarModalData=data;
           
        },
        set_responsed_donars(data){
            this.responsed_donars=data;
           
        },

        set_selected_request(data){
            this.selected_request=data;
        },
        
    }
});

const donarInfoView=new Vue({
    el: '#donar_info_view',
    data(){
        return{
           
        }
    },
    methods:{
        
    }
});

const loginModal_view=new Vue({
    el: '#loginModal',
    data(){
        return{
            password: '',
            passwordFieldType: 'password',
        }
    },
    methods:{
        switchVisibility_password(){
            if(document.getElementById('switch_password').className=='fa fa-fw fa-eye-slash field-icon toggle-password'){
                document.getElementById('switch_password').className='fa fa-fw field-icon toggle-password fa-eye'
            }
            else{
                document.getElementById('switch_password').className='fa fa-fw fa-eye-slash field-icon toggle-password'
            }
            this.passwordFieldType = this.passwordFieldType === 'password' ? 'text' : 'password'
        },
    }
});

const registrationView=new Vue({
    el: '#registration_page',
    data(){
        return{
            password: '',
            confirmed_password:'',
            passwordFieldType: 'password',
            confirmed_passwordFieldType: 'password',
            autoExpand:false
        }
    },
    mounted(){
        
    },
    methods:{
        switchVisibility_password(){
            if(document.getElementById('switch_password').className=='fa fa-fw fa-eye-slash field-icon toggle-password'){
                document.getElementById('switch_password').className='fa fa-fw field-icon toggle-password fa-eye'
            }
            else{
                document.getElementById('switch_password').className='fa fa-fw fa-eye-slash field-icon toggle-password'
            }
            this.passwordFieldType = this.passwordFieldType === 'password' ? 'text' : 'password'
        },
        switchVisibility_confirm(){
            if(document.getElementById('switch_confirm').className=='fa fa-fw fa-eye-slash field-icon toggle-password'){
                document.getElementById('switch_confirm').className='fa fa-fw field-icon toggle-password fa-eye'
            }
            else{
                document.getElementById('switch_confirm').className='fa fa-fw fa-eye-slash field-icon toggle-password'
            }
            this.confirmed_passwordFieldType = this.confirmed_passwordFieldType === 'password' ? 'text' : 'password'
        }
    }
});

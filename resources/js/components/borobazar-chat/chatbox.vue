<template>
    <section class="chat-box">
        <div class="container">
            <div class="row">
                <div class="chatbox chatbox22 chatbox--tray" >
                    <div id="title" class="chatbox__title" >
                        <h5><a href="javascript:void()">{{to.name}}</a></h5>
                        <button class="chatbox__title__tray">
                            <span></span>
                        </button>
                        <button class="chatbox__title__close">
                            <span>
                                <svg viewBox="0 0 12 12" width="12px" height="12px">
                                    <line stroke="#FFFFFF" x1="11.75" y1="0.25" x2="0.25" y2="11.75"></line>
                                    <line stroke="#FFFFFF" x1="11.75" y1="11.75" x2="0.25" y2="0.25"></line>
                                </svg>
                            </span>
                        </button>
                    </div>
                    <div class="chatbox__body">
                        <div class="chatbox__body__message chatbox__body__message--left">
                            <div class="chatbox_timing">
                                <ul>
                                    <li><a href="#"><i class="fa fa-calendar"></i> 22/11/2018</a></li>
                                    <li><a href="#"><i class="fa fa-clock-o"></i> 7:00 PM</a></li>
                                </ul>
		                    </div>
                            <img src="img/male-user.svg" alt="Picture">
                            <div class="clearfix"></div>
                            <div class="ul_section_full">
                                <ul class="ul_msg">
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="chatbox__body__message chatbox__body__message--right">
                            <div class="chatbox_timing">
                                <ul>
                                    <li><a href="#"><i class="fa fa-calendar"></i> 22/11/2018</a></li>
                                    <li><a href="#"><i class="fa fa-clock-o"></i> 7:00 PM</a></li>
                                </ul>
                            </div>
                            <img src="img/male-user.svg" alt="Picture">
                            <div class="clearfix"></div>
                            <div class="ul_section_full">
                                <ul class="ul_msg">
                                    <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </li>
                                </ul>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="input-group">
                            <input v-model="newMessage" @keyup.enter="send" id="btn-input" type="text" class="form-control2 input-sm chat_set_height" placeholder="বার্তা লিখুন . . . " tabindex="0" dir="ltr" spellcheck="false" autocomplete="off" autocorrect="off" autocapitalize="off" contenteditable="true">
                        </div>
                    </div>
                </div>
            </div>
        </div>   
    </section>
</template>

<script>
export default {
    name:'chatbox',
    props:['conversation','chat_allowed'],
    data(){
        return{
            newMessage:'',
            messages:[],
            from:{
                id:'',
                name:'Saif',
                sex:''
            },
            to:{
                id:'',
                name:'Punno',
                sex:''
            }
        }
    },

    methods:{
        toggleOnClick(){
            //document.getElementById("title").classList.toggle("chatbox--tray");
        },

        send(){
            if(this.newMessage!='' && this.newMessage!=undefined && this.newMessage!=null){
                axios.post('api/message/send',{
                    message:this.newMessage,
                    to:2
                }).then(response => {
                    //console.log(response.data)
                }).catch(error=> {
                    //console.log(error);
                });
            }
        }
    },

    created(){
        /*if(window.auth_user!=null){
            Echo.private('App.User.'+window.auth_user.id)
            .notification((notification) => {
                console.log(notification);
                if(notification.type=='App\\Notifications\\BloodMessageNotification'){
                    console.log('type '+notification.type);
                }
            });
        }
        
        Echo.channel('my-channel.')
            .listen('.my-event', function(data) {
                alert(JSON.stringify(data));
        });*/
    }
}
</script>
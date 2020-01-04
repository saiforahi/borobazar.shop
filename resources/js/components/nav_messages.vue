<template>
    <div class="dropdown-content-2">
        <div id="notify-cart">
            <div class="n_header">
                <div class="clearfix">
                        <div class="header_action">
                            <ul>
                                <li><span class="notify_title" id="">মেসেজ</span></li>
                                <li><a href="#"><span class="mark_all_read" role="button">সবগুলো পড়ুন</span></a></li>
                                <li><span class="ptpb" role="presentation" aria-hidden="true"> · </span></li>
                                <li><a href="#"><span class="mark_all_read">সেটিংস</span></a></li>
                            </ul>
                    </div>
                </div>
            </div>
            <div class="n_body">
                <div class="area_content">
                    <ul>
                        <li v-for="item in laravelData" v-bind:key="item.id" class="n_text_bb"  @click="clickOnMessage" >
                                
                            <div class="n_ic" >
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="n_text" style="width:auto;">
                                <a href="#" id="popover-reactive"><span>{{ item.data.from['name'] }} বার্তা পাঠিয়েছেন</span></a>
                                <div class="n_timloc">
                                    <span class="n_time">তারিখঃ {{item.created_at}}</span>
                                    <!--span class="n_locate">স্থানঃ {{item.data.donation_place}}</span-->
                                </div>
                            </div>
                            
                            <b-popover
                                target="popover-reactive"
                                triggers="click"
                                
                                :placement="'right'"
                                container= null
                                title="Reply"
                                :content="`${item.data.message}`"
                            ></b-popover>
                            
                        </li>   
                    </ul>
                </div>
            </div>
            <div class="n_more">
                <a href="#" @click="showMore"><span class="view_more">আরো দেখুন</span></a>
            </div>
            
        </div>
    </div>
</template>

<script>
export default {
    
    data(){
        return{
            laravelData:[],
            per_page:2,
            total_unread_messages:'',
            chat_allowed:false,
            popoverShow:false,
            chat_allowed:false
        }
    },
    watch:{
        total_unread_messages: function(){
            this.$emit('new_arrival',this.total_unread_messages);
        }
    },
    methods:{
        clickOnMessage(){
            this.chat_allowed=true;
            chatboxView.allowed=true;
            this.$emit('user_click',this.chat_allowed);
        },
        markRead(data){
            axios.get('/api/messages/markread/'+data.id+'/'+this.per_page)
            .then(response=>{
                this.laravelData=response.data.notifications;
                this.total_unread_messages=response.data.total_unread;
            })
            .catch(function (error) {
            //console.log(error);
            });
        },
        showMore(){
            this.per_page+=2;
            axios.get('/api/message/show/'+this.per_page).then(response=>{
                this.laravelData=response.data.messages;
                this.total_unread_messages=response.data.total_unread_message;
            })
            .catch(function (error) {
            //console.log(error);
            });
        }
    },
    mounted(){
        axios.get('/api/message/show/'+this.per_page).then(response=>{
            this.laravelData=response.data.messages;
            this.total_unread_messages=response.data.total_unread_message;
            })
            .catch(error=> {
                
            console.log(error);
        });
       
    },
    created(){
        if(window.auth_user!=null){
            Echo.private('App.User.'+window.auth_user.id)
            .notification((notification) => {
                if(notification.type=='App\\Notifications\\BloodMessageNotification'){
                    axios.get('/api/message/new'+notification.message_id).then(response=>{
                        this.laravelData.unshift(response.data);
                        this.total_unread_messages+=1;
                        this.per_page=this.laravelData.length;
                        new Audio('http://soundbible.com/mp3/Air Plane Ding-SoundBible.com-496729130.mp3').play();
                    })
                    .catch(function (error) {
                    //console.log(error);
                    });
                }
                
            });
        }
        
        /*Echo.channel('my-channel.')
            .listen('.my-event', function(data) {
                alert(JSON.stringify(data));
        });*/
    }
}
</script>
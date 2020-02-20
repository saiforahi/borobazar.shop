<<template>
   <div class="dropdown-content-2">
	    <div id="notify-cart">
			<div class="n_header">
                <div class="clearfix">
                    <div class="header_action">
                        <ul>
                            <li><span class="notify_title" id="">নটিফিকেশন</span></li>
                            <li><a href="#" @click="markallread"><span class="mark_all_read" role="button">চিহ্নিত করুন</span></a></li>
                            <li><span class="ptpb" role="presentation" aria-hidden="true"> · </span></li>
                            <li><a href="#"><span class="mark_all_read">সেটিংস</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
			<div class="n_body">
                <div class="area_content">
                    <ul>
                        <li v-if="item.read_at==null" class="n_text_bb active" v-for="item in laravelData" @click="markRead(item)">  
                            <div class="n_ic">
                                <i class="fa fa-bell-o"></i>
                            </div>
                            <div class="n_text" style="width:auto;">
                                <a href="#"><span>{{item.data.message}}</span></a>
                                <div class="n_timloc">
                                    <span v-if="item.created_at!==undefined" class="n_time">{{new Date(item.created_at).toLocaleDateString()}}</span>
                                    <span class="n_locate">{{new Date(item.created_at).toLocaleTimeString()}}</span>
                                </div>
                            </div>   
                        </li>   
                        <li v-if="item.read_at!=null" class="n_text_bb" v-for="item in laravelData" @click="markRead(item)">  
                            <div class="n_ic">
                                <i class="fa fa-bell-o"></i>
                            </div>
                            <div class="n_text" style="width:auto;">
                                <a href="#"><span>{{item.data.message}}</span></a>
                                <div class="n_timloc">
                                    <span v-if="item.created_at!==undefined" class="n_time">{{new Date(item.created_at).toLocaleDateString()}}</span>
                                    <span class="n_locate">{{new Date(item.created_at).toLocaleTimeString()}}</span>
                                </div>
                            </div>   
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
            total_unread_notifications:''
        }
    },
    props:['requests'],
    watch:{
        total_unread_notifications: function(){
            this.$emit('new_arrival',this.total_unread_notifications);
        }
    },  
    methods: {
        markRead(data){
            axios.get('/api/notifications/markread/'+data.id+'/'+this.per_page).then(response=>{
            this.laravelData=response.data.notifications;
            this.total_unread_notifications=response.data.total_unread;
            this.$emit('user_click',response.data.blood_request);
            })
            .catch(function (error) {
            //console.log(error);
            });
        },
        showMore(){
            this.per_page+=2;
            axios.get('/api/notifications/'+this.per_page).then(response=>{
                this.laravelData=response.data.notifications;
                this.total_unread_notifications=response.data.total_unread;
            })
            .catch(function (error) {
                //console.log(error);
            });
        },
        markallread(){
            axios.post('/api/blood_request_notifications/markallread',{size:this.per_page}).then(response=>{
                this.laravelData=response.data.notifications;
                this.total_unread_notifications=response.data.total_unread;
            }).catch(error=>{

            })
        }
    },
    mounted(){
        axios.get('/api/notifications/'+this.per_page).then(response=>{
            this.laravelData=response.data.notifications;
            this.total_unread_notifications=response.data.total_unread;
            this.per_page=response.data.notifications.length;
            })
            .catch(function (error) {
            //console.log(error);
        });
        
    },
    created(){
        if(window.auth_user!=null){
            Echo.private('App.User.'+window.auth_user.id)
            .notification((notification) => {
                axios.get('/api/newNotification/'+notification.blood_request_id).then(response=>{
                    this.laravelData.unshift(response.data);
                    this.total_unread_notifications+=1;
                    this.per_page=this.laravelData.length;
                    new Audio('http://soundbible.com/mp3/Air Plane Ding-SoundBible.com-496729130.mp3').play();
                })
                .catch(function (error) {
                //console.log(error);
                });
                
            });
        }
        
        /*Echo.channel('my-channel.')
            .listen('.my-event', function(data) {
                alert(JSON.stringify(data));
        });*/
    }
}
</script>
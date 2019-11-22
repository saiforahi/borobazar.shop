<<template>
   <div class="dropdown-content-2">
	    <div id="notify-cart">
			<div class="n_header">
                <div class="clearfix">
                    <div class="header_action">
                        <ul>
                            <li><span class="notify_title" id="">নটিফিকেশন</span></li>
                            <li><a href="#"><span class="mark_all_read" role="button">চিহ্নিত করুন</span></a></li>
                            <li><span class="ptpb" role="presentation" aria-hidden="true"> · </span></li>
                            <li><a href="#"><span class="mark_all_read">সেটিংস</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
			<div class="n_body">
            <div class="area_content">
                <ul>
                    <li class="n_text_bb" v-for="item in laravelData">
                        <a href=""><span>{{ item.data.submitted_by }} {{ item.data.donation_place }} হতে {{ item.data.quantity }} ব্যাগ রক্তের জন্য অনুরোধ করেছেন</span></a>
                        <!--div class="notify_indi">
                            <ul>
                                <li><i class="fa fa-ellipsis-h 2x"></i></li>
                                <br>
                                <li><i class="fa fa-circle"></i></li>
                            </ul>
                        </div-->
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
        showMore(){
            this.per_page+=2;
            axios.get('api/notifications/'+this.per_page).then(response=>{
            this.laravelData=response.data.notifications;
            this.total_unread_notifications=response.data.total_unread;
            })
            .catch(function (error) {
            //console.log(error);
        });
        }
    },
    mounted(){
        axios.get('api/notifications/'+this.per_page).then(response=>{
            this.laravelData=response.data.notifications;
            this.total_unread_notifications=response.data.total_unread;
            })
            .catch(function (error) {
            //console.log(error);
        });
        
    },
    created(){
        Echo.private('App.User.' + window.auth_user.cell)
            .notification((notification) => {
                axios.get('api/newNotification/'+notification.blood_request_id).then(response=>{
                    this.laravelData.unshift(response.data);
                    this.total_unread_notifications+=1;
                })
                .catch(function (error) {
                //console.log(error);
                });
            });
        /*Echo.channel('blood.')
            .listen('.BloodRequestEvent', function(data) {
                alert(JSON.stringify(data));
        });*/
    }
}
</script>
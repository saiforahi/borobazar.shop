<template>
    <!--delete req modal area -->
    <div id="complete_request" class="modal">
        <form class="modal-content animate">
            <div class="container">
                <h4 class="title">পর্যালোচনা ও মন্তব্য</h4>
                <span class="bdrbtm"></span>
                <span @click="hidemodal" class="close" title="Close Modal">&times;</span>
                <h4 class="heading">ইচ্ছুক রক্তদানকারী</h4>
                <div class="donor-prf">      
                    <div v-for="donar in donars" v-bind:key="donar.id" class="form-group img-thumb" :title="getDonarName(donar.name,donar.last_name)" @click="add_donar(donar.id)">
                        <img v-if="donar.sex=='male'" src="/img/male-user.svg">
                        <img v-else-if="donar.sex=='female'" src="/img/female-user.svg">
                        <img v-else src="/img/login-avatar.png">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-rating">
                        <strong class="text-uppercase">আপনার রেটিং: </strong>
                        <div class="stars">
                            <input type="radio" id="star5" name="rating" value="5"><label for="star5"></label>
                            <input type="radio" id="star4" name="rating" value="4"><label for="star4"></label>
                            <input type="radio" id="star3" name="rating" value="3"><label for="star3"></label>
                            <input type="radio" id="star2" name="rating" value="2"><label for="star2"></label>
                            <input type="radio" id="star1" name="rating" value="1"><label for="star1"></label>
                        </div>
                    </div>
                </div>
                <div class="form-group text-area">
                    <input type="checkbox">
                    <span>বড়বাজারের বাহিরে</span>
                    <div class="form-group">
                        <textarea class="col-lg-12 form-control2 hegt" id="message" name="message" placeholder="আপনার মূল্যবান মন্তব্য সাহায্য করবে রক্তদাতাকে রক্ত দানে উৎসাহিত করতে" cols="160" maxlength="160"></textarea>
                        <div id="the-count">
                            <span id="current">0</span>
                            <span id="maximum">/ 160</span>
                        </div>
                    </div>
                    <button class="btn-getinvite" @click="mark_complete" type="button"> সাবমিট করুন</button>  
                </div>
            </div>
        </form>
    </div>
<!--End delete req modal area --> 
</template>

<script>
import swal from 'sweetalert';
export default {
    data(){
        return{
            completed:false,
            selected_donars:[]
        }
    },
    props:['donars','request_id'],
    mounted(){
        
    },
    methods:{
        hidemodal() {
            document.getElementById(this.request_id).checked=false;
            document.getElementById('complete_request').style.display='none';
        },

        getDonarName(name,last_name){
            if(last_name===null){
                return name;
            }
            return name+' '+last_name;
        },
        add_donar(id){
            this.selected_donars[this.selected_donars.length]=id;
            this.selected_donars=[...new Set(this.selected_donars)];
        },
        mark_complete(){
            axios.post('/api/blood_requests/mark_as_completed',{
                donars:this.selected_donars,
                blood_request_id:this.request_id
            }).then(response=>{
                if(response.statusText=="OK"){
                    this.completed=true;
                    document.getElementById('complete_request').style.display='none';
                    swal("সম্পন্ন!","",'success',{button: "ওকে"});
                }
                //console.log(response.data.completed)
            }).catch(error=>{

            })
        }
    },

    watch:{
        completed:function(){
            this.$emit('closed',this.completed)
        }
    }
}
</script>
<template>
    <section class="blood-donor-area">      
        <div class="container-fluid">
            <div class="container">
                <div class="bogra-area pt-5" id="viewDiv">
                    <div class="row text-center">
                        <donator-view @modal-data="setModal" v-for="item in laravelData.data" v-bind:donator="item" v-bind:key="item.cell"></donator-view>
                    </div>
                </div>
                <div class="overflow-auto" v-if="allowed==='yes'">
                    <br>
                    <b-pagination
                        v-model="currentPage"
                        :total-rows="laravelData.total"
                        :per-page="laravelData.per_page"
                        class="mt-4"
                        align="center"
                        aria-controls="viewDiv"
                    >
                        <!--template v-slot:first-text><span class="text-success">⏮</span></template-->
                        <template v-slot:prev-text><span class="fa fa-chevron-left"></span></template>
                        <template v-slot:next-text><span class="fa fa-chevron-right"></span></template>
                        <!--template v-slot:last-text><span class="text-info">⏭</span></template-->
                        <template v-slot:ellipsis-text>
                            <b-spinner small type="grow"></b-spinner>
                            <b-spinner small type="grow"></b-spinner>
                            <b-spinner small type="grow"></b-spinner>
                        </template>
                        <template v-slot:page="{ page, active }">
                            <b v-if="active">{{ page }}</b>
                            <b v-else>{{ page }}</b>
                        </template>
                    </b-pagination>
                </div>
                <donator-modal :donator="modalData" ></donator-modal>
            </div>
        </div>
    </section>
</template>

<script>
import axios from 'axios';
import swal from 'sweetalert'
export default {
    data(){
        return{
            laravelData:{
                data:[]
            },
            allowed:'no',
            currentPage:1,
            modalData:[]
        }
    },
    props:['result'],
     watch:{
        // whenever currentPage changes, this function will run
        currentPage: function () {
            axios.get(this.laravelData.path+'?page='+this.currentPage).then(response=>{
                this.laravelData=response.data;
                })
                .catch(function (error) {
                    //console.log(error);
            });
        },
        modalData: function(){
            document.getElementById('donator-modal').style.display='block';
        },
        result: function(){
            this.laravelData=this.result;
        }
    },
    beforeMount(){
        //on mounting these statements will be executed
        axios.get('api/randomdonars').then(response=>{
            if(response.data.data.length>0){
                this.laravelData=response.data;
                this.allowed ='yes';
            }
        });
    },
    methods:{
        setModal(data){
            this.modalData=data;
        },
    },
   
}
</script>
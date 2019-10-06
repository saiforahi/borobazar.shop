<template>
    <div class="container" id="mainDiv">
        <searchDiv @checkNallowed="updateAllowed" @donators="setDonators"></searchDiv>
        <donatorsView v-if="allowed==='yes'" id="donators" :items="donators" :per-page="perPage" :current-page="currentPage" small></donatorsView>
        <div v-if="allowed==='yes'" class="overflow-auto">
            <b-pagination align="center" v-model="currentPage" :total-rows="rows" :per-page="perPage" first-text="⏮" prev-text="⏪" next-text="⏩" last-text="⏭" class="mt-4" aria-controls="donators">
            </b-pagination>
        </div>
    </div>
</template>

<script>
    import searchDiv from "./searchDiv"
    import donatorsView from "./donatorsView"
    export default {
        name: 'search-app-root-component',
        data(){
            return{
                currentPage:'2',
                rows:'4',
                perPage:'16',
                donators:[],
                allowed:'no',
            }
        },
        components: {
            searchDiv,donatorsView
        },
        mounted() {
            console.log('search-app-root mounted');
        },
        methods:{
            updateAllowed(variable) {
                this.allowed= variable;
            },
            setDonators(variable){
                this.donators=variable;
            }
        }
    }
    
</script>

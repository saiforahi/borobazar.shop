<template>
    <div class="container" >
        <search-div @checkNallowed="updateAllowed"></search-div>
        <donators-view-div v-if="allowed==='yes'" id="donators" :items="donators" :per-page="perPage" :current-page="currentPage" small></donators-view-div>
        <div class="overflow-auto">
            <b-pagination align="center" v-model="currentPage" :total-rows="rows" :per-page="perPage" first-text="⏮" prev-text="⏪" next-text="⏩" last-text="⏭" class="mt-4" aria-controls="donators">
            </b-pagination>
        </div>
    </div>
</template>

<script>
    import searchDiv from "./search-div"
    import donatorsView from "./donators-view"
    export default {
        name: 'search-app-root-component',
        data(){
            return{
                currentPage:'2',
                rows:'4',
                perPage:'16',
                donators:['I am saif','I am Rehab'],
                allowed:'no',
            }
        },
        components: {
            searchDiv,donatorsView
        },
        mounted() {
            console.log('mounted');
        },
        methods:{
            updateAllowed(variable) {
                this.allowed= variable;
            }
        }
    }
    
</script>

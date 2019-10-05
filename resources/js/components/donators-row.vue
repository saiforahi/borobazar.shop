<template>
    <div class="row text-center">
        <donator-view v-for="item in items" v-bind:donator="item" v-bind:key="item.name"></donator-view>
    </div>
</template>

<script>
    import donatorView from "./donator-view";
    export default {
        name:'donatorsRow',
        data(){
            return{
               donators:[] 
            }
        },
        props:['items'],
        components:{
            donatorView
        },
        mounted() {
            console.log('Total rows '+ this.donators.length/3)
        },
        computed: {
            rows() {
                return this.items.length/3
            }
        }
    }
</script>
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
            //console.log('donatorsRow mounted')
        },
        computed: {
            rows() {
                return this.items.length/3
            }
        }
    }
</script>
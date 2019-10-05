<template>
    <div class="bogra-area pt-5">
        <p>{{ items }}</p>
        <donators-view-row :items="items"></donators-view-row>       
    </div>
</template>

<script>
    import donatorsRow from './donators-row'
    export default {
        name:'donatorsView',
        data(){
            return {
            
            }
        },
        props:['items'],
        components: {
            donatorsRow
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
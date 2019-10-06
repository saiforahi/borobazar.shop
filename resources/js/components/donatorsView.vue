<template>
    <div class="bogra-area pt-5">
        <donatorsRow :items="items"></donatorsRow>       
    </div>
</template>

<script>
    import donatorsRow from './donatorsRow'
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
            console.log('donators-view mounted.');
        }
    }
</script>
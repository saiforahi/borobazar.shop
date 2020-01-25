<template>
    <div class="form-group">
        <input type="checkbox" class="check" id="bldReg" name="blood_registration" @click="showHidebldreg()">
        <lebel for="text">বড়বাজার রক্ত দান স্বেচ্ছাসেবী সেবায় সংযুক্ত হতে</lebel>
    </div>
</template>

<script>
export default {
    data(){
        return{
            
        }
    },
    props:['wantsToBeDonar'],
    mounted(){
        console.log(this.wantsToBeDonar);
    },
    methods:{
        showHidebldreg(){
            if(document.getElementById('bldReg').checked) {
                document.getElementById('bldregInfo').style.display='block';  
            } else {
                document.getElementById('bldregInfo').style.display='none'; 
            }
        }
    }
}
</script>
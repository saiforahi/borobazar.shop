<template>
    <div class="skill-area">
        <div class="skill-inner">
            <div class="skill-all-info">
                <div class="sub-header">
                    <div class="edit-tools">
                        <button v-if="disabled==1" class="btn-getinvite1" @click="disabled=(disabled+1)%2"><i class="fa fa-pencil"></i> এডিট</button>
                    </div>
                </div>
                <form class="row" id="skillForm">
                    <div class="form-group col-lg-12">
                        <div class="form-group col-lg-6">
                            <label for="">দক্ষতা <span class="required">(সর্বোচ্চ ১০)</span></label>
                            <input :disabled="disabled == 1" type="text" id="" name="txtSkillrea" class="form-control2" placeholder="দক্ষতা যুক্ত করুন...">
                        </div> 
                    
                        <div class="form-group col-md-6"> 
                            <label for="">দক্ষতার বিবরণ&nbsp;</label>
                            <textarea :disabled="disabled == 1" name="txtDescription" id="txtDescription" cols="30" rows="3" class="form-control3"></textarea>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">পাঠ্যের  বাহিরের কার্যক্রম </label>
                            <textarea :disabled="disabled == 1" name="txtActivities" id="txtActivities" cols="30" rows="3" class="form-control3"></textarea>
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="btn-finish">
                            <button type="button" class="btn-getinvite1" onclick="" id="perbtn-save">সেভ</button>
                            <button type="button" class="btn-getinvite1" @click="disabled=1" id="perbtn-update">ক্লোজ</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            disabled:1
        }
    }
}
</script>
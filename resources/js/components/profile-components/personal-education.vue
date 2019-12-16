<template>
    <div class="edu">
        <div class="edit-tools">
            <button v-if="disabled==1" class="btn-getinvite1" @click="disabled=(disabled+1)%2"><i class="fa fa-pencil"></i> এডিট</button>
        </div>
        <form class="row" action="" >
            <div class="col-lg-6">
                <div class="form-group col-md-12">
                    <label for="">কলেজ / বিশ্ববিদ্যালয়<abbr title="Required" class="required"></abbr></label>
                    <input type="text" class="form-control2" placeholder="" value="Azizul Haque Govt. College" name="txtFirstName" id="txtFirstName" :disabled="disabled == 1">
                </div>

                <div class="form-group col-md-12">
                    <label for="">সময়কাল (বছর)</label>
                    <input :disabled="disabled == 1" type="text" class="form-control2" placeholder="" value="2017" name="txtLastName" id="txtLastName">
                </div>

                <div class="form-group col-md-12">
                    <label for="">ডিগ্রী</label>
                    <input :disabled="disabled == 1" type="text" class="form-control2" placeholder="" value="B.Sc in CSE" name="txtFName" id="txtFName">
                </div>

                <div class="form-group col-md-12">
                    <label for="">মেজর / গ্রুপ </label>
                    <input :disabled="disabled == 1" type="text" class="form-control2" placeholder="" value="" name="txtMName" id="txtMName">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group col-md-12">
                    <label for="">স্কুল / কলেজ<abbr title="Required" class="required"></abbr></label>
                    <input :disabled="disabled == 1" type="text" class="form-control2" placeholder="" value="Azizul Haque Govt. College" name="txtFirstName" id="txtFirstName">
                </div>

                <div class="form-group col-md-12">
                    <label for="">সময়কাল (বছর)</label>
                    <input :disabled="disabled == 1" type="text" class="form-control2" placeholder="" value="2017" name="txtLastName" id="txtLastName">
                </div>

                <div class="form-group col-md-12">
                    <label for="">ডিগ্রী</label>
                    <input :disabled="disabled == 1" type="text" class="form-control2" placeholder="" value="SSC" name="txtFName" id="txtFName">
                </div>

                <div class="form-group col-md-12">
                    <label for="">মেজর / গ্রুপ </label>
                    <input :disabled="disabled == 1" type="text" class="form-control2" placeholder="" value="Science" name="txtMName" id="txtMName">
                </div>
            </div>
        </form>
        <div class="form-group col-md-12">
            <div class="btn-finish">
                <button type="button" class="btn-getinvite1" onclick="" id="perbtn-save">সেভ</button>
                <button type="button" class="btn-getinvite1" @click="disabled=1" id="perbtn-update">ক্লোজ</button>
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
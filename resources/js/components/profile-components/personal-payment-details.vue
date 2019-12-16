<template>
    <div class="personal-details">
            <div class="row">
                <div class="form-group col-md-6">
                    <button id="formButton" type="button" class="btn-getinvite1 btn-block"><i class="fa fa-plus"></i> পেমেন্ট পদ্ধতি যোগ করুন</button>
                </div>
                                        
                <div class="col-md-2">
                    <div class="form-group">
                        <select name="currency" data-uitest-target="currency" id="currency" class="selectpicker form-control2">
                            <option value="1" selected="">কারেন্সি</option>
                            <option value="1">৳ BDT</option>
                            <option value="1">$ USD</option> 
                            <option value="3">AUD</option>
                            <option value="9">CAD</option>
                            <option value="8">EUR</option>
                            <option value="4">GBP</option>
                            <option value="5">HKD</option>
                            <option value="11">INR</option>
                            <option value="2">NZD</option>
                            <option value="6">SGD</option>
                        </select>
                    </div>
                </div>
            
                <div class="col-md-6">
                    <form id="form1">
                        <div id="third" style="display: block;">
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <input type="radio" id="radio" name="optradio">
                                    <i class="fa fa-cc-visa"></i>
                                    <input type="radio" id="radio" name="optradio">
                                    <i class="fa fa-cc-mastercard"></i>
                                </div>
                                <div class="form-group col-lg-6">
                                    <lebel class="cfg" for="email">Name of Card Holder*</lebel>
                                    <input type="text" class="form-control2" placeholder="e.g. John Smith ">
                                </div>
                                <div class="form-group col-lg-6">
                                    <lebel class="cfg" for="cardnumber">Card Number*</lebel>
                                    <input type="text" id="address" class="form-control2" placeholder="1245789612457896">
                                </div>
                                <div class="form-group col-lg-6">
                                    <lebel class="cfg" for="date">Card Expiry Date*</lebel>
                                    <input type="month" id="date" class="form-control2" placeholder="03 / 19">
                                </div>
                                <div class="form-group col-lg-6">
                                    <lebel class="cfg" for="postcode">Security Pin*</lebel>
                                    <input type="text" id="address" class="form-control2" placeholder="235">
                                </div>
                                <div class="form-group col-lg-12">
                                    <div class="form-group bkash">
                                        <input type="radio" id="radio" name="optradio">
                                        <lebel class="cfg">বিকাশ</lebel>
                                        <!--<img class="rounded" width="60" height="34" src="img/bkash.png">-->
                                        <input type="text" class="form-control2" placeholder="বিকাশ আকাউন্ট নাম্বার">
                                    </div>

                                    <div class="form-group dbbl">
                                        <input type="radio" id="radio" name="optradio">
                                        <lebel class="cfg">ডাচ্ বাংলা</lebel>
                                        <!--<img class="rounded" width="60" height="34" src="img/rocket-dbbl.png">-->
                                        <input type="text" class="form-control2" placeholder="ডাচ্ বাংলা আকাউন্ট নাম্বার">
                                    </div>

                                    <div class="form-group Nagad">
                                        <input type="radio" id="radio" name="optradio">
                                        <lebel class="cfg">নগদ</lebel>
                                        <!--<img class="rounded" width="60" height="34" src="img/rocket-dbbl.png">-->
                                        <input type="text" class="form-control2" placeholder="নগদ আকাউন্ট নাম্বার">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            
                <div class="form-group col-md-12">
                    <div class="btn-finish">
                        <button type="button" class="btn-getinvite1" onclick="" id="perbtn-save">সেভ</button>
                        <button type="button" class="btn-getinvite1" onclick="" id="perbtn-save">ক্লোজ</button>
                    </div>
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
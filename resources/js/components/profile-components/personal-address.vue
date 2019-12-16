<template>
    <div class="personal-details">
        <div class="edit-tools">
            <button v-if="disabled==1" class="btn-getinvite1" @click="disabled = (disabled + 1) % 2"><i class="fa fa-pencil"></i> এডিট</button>
        </div>
                    
        <form class="row" id="" name="">
            <div class="col-md-6">
                <div class="present-address">
                    <h4 class="heading">বর্তমান ঠিকানা</h4>
                </div>
                            
                <div class="present_address" id="">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control2" id="present_Village" name="present_Village" value="" placeholder="আপনার বাড়ি নং / রাস্তা / গ্রাম লিখুন " :disabled="disabled == 1">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <input type="text" placeholder="দেশের নাম" class="form-control2" :disabled="disabled == 1"> 
                        </div>
                                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="selectpicker form-control2" :disabled="disabled == 1">
                                    <option>বিভাগ</option> <option>ঢাকা (Dhaka)</option><option>চট্টগ্রাম (Chottragram)</option><option>রাজশাহী (Rajshahi)</option><option>বংপুর (Rangpur)</option> <option>সিলেট (Sylhet)</option><option>খুলনা (Khulna)</option>
                                    <option>বরিশাল (Barishal)</option><option>ময়মনসিং (Mymanshing)</option>
                                </select>
                            </div>
                        </div>
                                    
                        <div class="col-md-4">
                            <div class="form-group">
                                <select class="form-control2" id="" name="present-district" :disabled="disabled == 1">
                                    <option value="-1">জেলা নির্বাচন </option>
                                    <option value="1">ব্রাক্ষ্মণবাড়িয়া</option><option value="2">বাগেরহাট</option><option value="3">বান্দরবান</option><option value="4">বরিশাল</option><option value="5">ভোলা</option><option value="6" selected="">বগুড়া</option><option value="7">বরগুনা</option><option value="8">চাঁদপুর</option><option value="9">চাঁপাই নবাবগঞ্জ</option><option value="10">চট্টগ্রাম</option><option value="11">চুয়াডাঙ্গা</option><option value="12">কুমিল্লা</option><option value="13">কক্সবাজার</option><option value="14">ঢাকা</option><option value="15">দিনাজপুর</option><option value="16">ফরিদপুর</option><option value="17">ফেনী</option><option value="18">গাইবান্ধা</option><option value="19">গাজীপুর</option><option value="20">গোপালগঞ্জ</option><option value="21">হবিগঞ্জ</option><option value="22">জামালপুর</option><option value="23">যশোর</option><option value="24">ঝালকাঠী</option><option value="25">ঝিনাইদহ</option><option value="26">জয়পুরহাট</option><option value="27">খাগড়াছড়ি</option><option value="28">খুলনা</option><option value="29">কিশোরগঞ্জ</option><option value="30">কুড়িগ্রাম</option><option value="31">কুষ্টিয়া</option><option value="32">লালমনিরহাট</option><option value="33">লক্ষ্মীপুর</option><option value="34">মাদারীপুর</option><option value="35">মাগুরা</option><option value="36">মানিকগঞ্জ</option><option value="37">মেহেরপুর</option><option value="38">মৌলভীবাজার</option><option value="39">মুন্সীগঞ্জ</option><option value="40">ময়মনসিংহ</option><option value="41">নওগাঁ</option><option value="42">নড়াইল</option><option value="43">নারায়নগঞ্জ</option><option value="44">নরসিংদী</option><option value="45">নাটোর</option><option value="46">নেত্রকোণা</option><option value="47">নীলফামারী</option><option value="48">নোয়াখালী</option><option value="49">পাবনা</option><option value="50">পঞ্চগড়</option><option value="51">পটুয়াখালী</option><option value="52">পিরোজপুর</option><option value="53">রাজবাড়ী</option><option value="54">রাজশাহী</option><option value="55">রাঙ্গামাটি</option><option value="56">রংপুর</option><option value="57">সাতক্ষীরা</option><option value="58">শরিয়তপুর</option><option value="59">শেরপুর</option><option value="60">সিরাজগঞ্জ</option><option value="61">সুনামগঞ্জ</option><option value="62">সিলেট</option><option value="63">টাঙ্গাইল</option><option value="64">ঠাকুরগাঁও</option>
                                </select>
                            </div>
                        </div>
                                            
                        <div class="col-md-4">
                            <div class="form-group" id="">
                                <select class="form-control2" id="" name="present-thana" :disabled="disabled == 1">
                                    <option value="-1" selected="">থানা/উপজেলা নির্বাচন </option>
                                    <option value="1103">আদমদীঘি</option><option value="1189">বগুড়া সদর</option><option value="1247">ধুনট</option><option value="1248">দুপচাঁচিয়া</option><option value="1270">গাবতলী</option><option value="1335">কাহালু</option><option value="1469">নন্দীগ্রাম</option><option value="1565">সারিয়াকান্দি</option><option value="1578">শাজাহানপুর</option><option value="1585">শেরপুর</option><option value="1588">শিবগঞ্জ</option><option value="1603">সোনাতলা</option><option value="1789">তানোর</option><option value="1790">লালিতগঞ্জ</option><option value="1791">খোদমোহনপুর</option><option value="1792">ভবানীগঞ্জ</option>
                                </select>
                            </div>
                        </div>
                                    
                        <div class="col-md-4">
                            <div class="form-group" id="">
                                <input type="text" class="form-control2" placeholder="পোষ্ট কোড" id="" :disabled="disabled == 1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            <div class="col-md-6">
                <div class="permanent-address">
                    <div class="title-wrap">
                        <label for="permanentAddress">স্থায়ী ঠিকানা</label>
                        <div class="form-group form-control2">
                            <label class="radio-inline"><input type="checkbox" id="addRsame" class="userrem" name="permanentaddress" onclick="showHideaddRinfo()" value="0" :disabled="disabled == 1">বর্তমান ঠিকানার মতই</label>
                        </div>
                    </div> 
                </div>
                                
                <div class="present_address" id="addRinfo">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <input type="text" class="form-control2" id="present_Village" name="present_Village" value="" placeholder="আপনার বাড়ি নং / রাস্তা / গ্রাম লিখুন " :disabled="disabled == 1"> 
                        </div>
                        <div class="form-group col-md-6">
                            <input type="text" placeholder="দেশের নাম" class="form-control2" :disabled="disabled == 1"> 
                        </div>
                                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="selectpicker form-control2" :disabled="disabled == 1">
                                    <option>বিভাগ</option> <option>ঢাকা (Dhaka)</option><option>চট্টগ্রাম (Chottragram)</option><option>রাজশাহী (Rajshahi)</option><option>বংপুর (Rangpur)</option> <option>সিলেট (Sylhet)</option><option>খুলনা (Khulna)</option>
                                    <option>বরিশাল (Barishal)</option><option>ময়মনসিং (Mymanshing)</option>
                                </select>
                            </div>
                        </div>
                                    
                        <div class="col-md-4">
                            <div class="form-group">
                                <select class="form-control2" id="" name="present-district" :disabled="disabled == 1">
                                    <option value="-1" selected="">জেলা নির্বাচন </option>
                                    <option value="1">ব্রাক্ষ্মণবাড়িয়া</option><option value="2">বাগেরহাট</option><option value="3">বান্দরবান</option><option value="4">বরিশাল</option><option value="5">ভোলা</option><option value="6">বগুড়া</option><option value="7">বরগুনা</option><option value="8">চাঁদপুর</option><option value="9">চাঁপাই নবাবগঞ্জ</option><option value="10">চট্টগ্রাম</option><option value="11">চুয়াডাঙ্গা</option><option value="12">কুমিল্লা</option><option value="13">কক্সবাজার</option><option value="14">ঢাকা</option><option value="15">দিনাজপুর</option><option value="16">ফরিদপুর</option><option value="17">ফেনী</option><option value="18">গাইবান্ধা</option><option value="19">গাজীপুর</option><option value="20">গোপালগঞ্জ</option><option value="21">হবিগঞ্জ</option><option value="22">জামালপুর</option><option value="23">যশোর</option><option value="24">ঝালকাঠী</option><option value="25">ঝিনাইদহ</option><option value="26">জয়পুরহাট</option><option value="27">খাগড়াছড়ি</option><option value="28">খুলনা</option><option value="29">কিশোরগঞ্জ</option><option value="30">কুড়িগ্রাম</option><option value="31">কুষ্টিয়া</option><option value="32">লালমনিরহাট</option><option value="33">লক্ষ্মীপুর</option><option value="34">মাদারীপুর</option><option value="35">মাগুরা</option><option value="36">মানিকগঞ্জ</option><option value="37">মেহেরপুর</option><option value="38">মৌলভীবাজার</option><option value="39">মুন্সীগঞ্জ</option><option value="40">ময়মনসিংহ</option><option value="41">নওগাঁ</option><option value="42">নড়াইল</option><option value="43">নারায়নগঞ্জ</option><option value="44">নরসিংদী</option><option value="45">নাটোর</option><option value="46">নেত্রকোণা</option><option value="47">নীলফামারী</option><option value="48">নোয়াখালী</option><option value="49">পাবনা</option><option value="50">পঞ্চগড়</option><option value="51">পটুয়াখালী</option><option value="52">পিরোজপুর</option><option value="53">রাজবাড়ী</option><option value="54">রাজশাহী</option><option value="55">রাঙ্গামাটি</option><option value="56">রংপুর</option><option value="57">সাতক্ষীরা</option><option value="58">শরিয়তপুর</option><option value="59">শেরপুর</option><option value="60">সিরাজগঞ্জ</option><option value="61">সুনামগঞ্জ</option><option value="62">সিলেট</option><option value="63">টাঙ্গাইল</option><option value="64">ঠাকুরগাঁও</option>
                                </select>
                            </div>
                        </div>
                                            
                        <div class="col-md-4">
                            <div class="form-group" id="">
                                <select class="form-control2" id="" name="present-thana" :disabled="disabled == 1">
                                    <option value="-1" selected="">থানা/উপজেলা নির্বাচন </option>
                                    <option value="1103">আদমদীঘি</option><option value="1189">বগুড়া সদর</option><option value="1247">ধুনট</option><option value="1248">দুপচাঁচিয়া</option><option value="1270">গাবতলী</option><option value="1335">কাহালু</option><option value="1469">নন্দীগ্রাম</option><option value="1565">সারিয়াকান্দি</option><option value="1578">শাজাহানপুর</option><option value="1585">শেরপুর</option><option value="1588">শিবগঞ্জ</option><option value="1603">সোনাতলা</option><option value="1789">তানোর</option><option value="1790">লালিতগঞ্জ</option><option value="1791">খোদমোহনপুর</option><option value="1792">ভবানীগঞ্জ</option>
                                </select>
                            </div>
                        </div>
                                    
                        <div class="col-md-4">
                            <div class="form-group" id="">
                                <input type="text" class="form-control2" placeholder="পোষ্ট কোড" :disabled="disabled == 1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="form-group col-md-12">
            <div class="btn-finish">
                <button type="button" class="btn-getinvite1" id="perbtn-save">সেভ</button>
                <button type="button" class="btn-getinvite1" @click="disabled=1" id="perbtn-update">ক্লোজ</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            disabled: 1,
        }
    }
}
</script>


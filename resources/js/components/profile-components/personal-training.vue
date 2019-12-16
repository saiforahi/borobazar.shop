<template>
    <div id="trining">
        <div id="trining-1">
            <div class="trining-all-info">
                <div class="sub-header">
                    <div class="edit-tools">
                        <button v-if="disabled==1" class="btn-getinvite1" @click="disabled=(disabled+1)%2"><i class="fa fa-pencil"></i> এডিট</button>
                    </div>
                </div>
                <form class="row" id="trForm" action="#" method="post">
                    <div class="col-md-6">
                        <div class="form-group col-md-12">
                            <label for="">ট্রেনিং এর নাম&nbsp;<abbr title="Required" class="required"></abbr></label>
                            <input :disabled="disabled == 1" type="text" class="form-control2" placeholder="" id="" name="txtTitle" value="Industrial Attachment Training Program">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">ট্রেনিং এর টপিক</label>
                            <textarea :disabled="disabled == 1" class="form-control3" name="txtTopic" cols="30" rows="5">On Survey of Existing Electrical load, design and staking of electrical distribution line 33/11 KV Sub-Station.</textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">ট্রেনিং প্রতিষ্ঠানের নাম &nbsp;<abbr title="Required" class="required"></abbr></label>
                            <input :disabled="disabled == 1" type="text" class="form-control2" placeholder="" id="" name="txtInstitute" value="Bogra Polly Bidhyut Samiti">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">লোকেশন</label>
                            <input :disabled="disabled == 1" type="text" class="form-control2" placeholder="" id="" name="txtLocation" value="Bogra">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group col-md-12">
                            <label for="">দেশের নাম&nbsp;<abbr title="Required" class="required"></abbr></label>
                            <input :disabled="disabled == 1" type="text" class="form-control2" id="" placeholder="" name="txtCountry" value="Bangladesh">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">ট্রেনিং এর বছর&nbsp;<abbr title="Required" class="required"></abbr></label>
                            <select class="form-control2" name="drpYear" id="" :disabled="disabled == 1">
                                <option value="" selected="selected">Select</option><option value="2024">2024</option><option value="2023">2023</option><option value="2022">2022</option><option value="2021">2021</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014" selected="">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">ট্রেনিং এর সময়কাল&nbsp;&nbsp;<abbr title="Required" class="required"></abbr></label>
                            <input type="text" class="form-control2" placeholder="" id="" name="txtDuration" value="3 Month" :disabled="disabled == 1">
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <div class="btn-finish">
                            <button type="button" class="btn-getinvite1" id="perbtn-save">সেভ</button>
                            <button type="button" class="btn-getinvite1" @click="disabled=1" id="perbtn-save">ক্লোজ</button>
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
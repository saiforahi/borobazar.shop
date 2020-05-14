<template>
    <section class="blood-donar-area">
      <div class="container-fluid pb-5 pt-5">
            <div class="search-area">
                <div class="blood-inner">
					<img width="60" height="auto" src="/img/graduate-student-avatar.svg">
					<h4 class="blood-title">গৃহশিক্ষক</h4>
					<p>.....</p>
				</div>
				
				<div class="blood-srch">
					<form>
                        <select  class="form-control0 search-tutor">
                            <option value="0"> শ্রেণী</option>
                            <option value=""> প্লে</option>
                            <option value=""> নার্সারি </option>
                            <option value=""> প্রথম </option>
                            <option value=""> দ্বিতীয় </option>
                            <option value=""> তৃতীয় </option>
                            <option value=""> চর্তুথ </option>
                            <option value=""> পঞ্চম </option>
                            <option value=""> ষষ্ঠ </option>
                            <option value=""> সপ্তম </option>
                            <option value=""> অষ্ঠম </option>
                            <option value=""> নবম-দশম </option>
                            <option value=""> এস এস সি</option>
                            <option value=""> এইচ এস সি</option>
                            <option value=""> অনার্স</option>
                            <option value=""> মার্টাস</option>
                            <option value=""> অফিস অ্যাপ্লিকেশন</option>
                            <option value=""> ডাটাবেস</option>
                            <option value=""> নেটওয়াকিং</option>
                            <option value=""> অপারেটিং সিস্টেম</option>
                            <option value=""> ফটো এডিটিং</option>
                            <option value=""> ভিডিও এডিটিং</option>
                            <option value=""> প্রোগ্রামিং</option>
                            <option value=""> ওয়েব ডিজাইন</option>
                            <option value=""> ওয়েব ডেভোলপমেন্ট</option>
                            <option value=""> আর্ট/ড্রয়িং</option>
                            <option value=""> ইন্সট্রুমেন্ট</option>
                            <option value=""> মিউজিক</option>
                            <option value=""> অন্যান্য</option>
                            <option value=""> Exam(IELTS, TOFEL)</option>
                            <option value=""> বিদেশি ভাষা</option>
                            <option value=""> ফাজিল </option>
                            <option value=""> কামিল </option>
                            <option value=""> কোরআন </option>  
                        </select>
                        
                        <select class="form-control0 search-tutor">
								<option selected="select" value="0">বিষয়</option>
								<option value="1">সাধারণ</option>
								<option value="2">বাংলা</option>
								<option value="3">ইংরেজি</option>
								<option value="4">গনিত</option>
								<option value="4">সাধারণ বিজ্ঞান</option>
								<option value="4">সামাজিক বিজ্ঞান</option>
								<option value="4">বিশ্ব ও পরিচয়</option>
                                <option value="5">উচ্চতর গনিত</option>
                                <option value="6">হিসাব বিজ্ঞান</option>
                                <option value="7">পৌরনীতি</option>
                                <option value="8">অর্থনীতি</option>
                                <option value="9">ব্যবসায় উদোগ</option>
                                <option value="10">ফিন্যান্স ও ব্যাংকিং</option>
								<option value="11">রসায়ন বিজ্ঞান</option>
								<option value="12">পদার্থ বিজ্ঞান</option>
								<option value="13">জীব বিজ্ঞান</option>
								<option value="14">উদ্ভীদ বিজ্ঞান</option>
								<option value="15">ড্রইং</option>
								<option value="16">আবৃত্তি</option>
								<option value="17">সংঙ্গীত</option>
								<option value="18">নৃত্য</option>
								<option value="19">ইসলাম ধর্ম</option>
								<option value="20">হিন্দু ধর্ম</option>
								<option value="21">বৌদ্ধ ধর্ম</option>
								<option value="22">খ্রিষ্টান ধর্ম</option>
								<option value="23">ফটোগ্রাফি</option>
								<option value="24">ওয়েব ভাষা</option>
								<option value="25">ফটোশপ</option>
								<option value="26">ইলাস্ট্রেশন</option>
								<option value="27">ভিডিও এডিটিং</option>
								<option value="28">মাইক্রোসফট অফিস</option>
								<option value="29">স্পিকিং ইংলিশ</option>
							</select>
                        
                            <select class="form-control0 search-blood" id="division" name="division" v-model="selectedDivision"     required>
                                <option value="-1" selected>বিভাগ</option>
                                <option value="বরিশাল">বরিশাল</option>
                                <option value="চট্টগ্রাম">চট্টগ্রাম</option>
                                <option value="ঢাকা">ঢাকা</option>
                                <option value="ময়মনসিংহ">ময়মনসিংহ</option>
                                <option value="রাজশাহী">রাজশাহী</option>
                                <option value="রংপুর">রংপুর</option>
                                <option value="সিলেট">সিলেট</option>
                                <option value="খুলনা">খুলনা</option>
                            </select>
                        
                            <select class="form-control0 search-blood" id="presentDistrict" name="presentDistrict" v-model="selectedDistrict" @change="onChangeDistrict($event)">
                            <option value="-1" selected>জেলা</option>
                            <option v-for="district in districts" v-bind:key="district.id" :value="district.id">{{ district.bengali_name }}</option>
                        </select>
                        <select class="form-control0 search-blood" id="" name="" v-model="selectedSubdistrict">
                            <option value="-1" selected>উপজেলা/থানা</option>
                            <option v-for="subdistrict in subdistricts" v-bind:key="subdistrict.id" :value="subdistrict.id">
                                {{ subdistrict.bengali_name}}
                            </option>
                        </select> 
                            
                      <button class="search-btn" type="button"><i class="fa fa-search"></i></button>
                    </form>	
				</div>
           </div>
      </div>
</section>
</template>

<script>
export default {
    data(){
        return{
            selectedDistrict:-1,
            selectedSubdistrict:-1,
            selectedDivision:-1,
            districts:[],
            subdistricts:[],
        }
    },

    watch:{
        selectedDivision: function(){
            //on changing division this statement will be executed
            axios.get('/api/districts/'+this.selectedDivision).then(response=>{
                this.districts=response.data;
            });
            this.selectedDistrict=-1;
            this.selectedSubdistrict=-1;
        }
    },

    methods:{
        onChangeDistrict(event) {    
            axios.get('/api/subdistricts/'+event.target.value)
            .then(response => {
                this.subdistricts = response.data;
                this.selectedSubdistrict=-1;
            }).catch(function (error) {
            // handle error
            //console.log(error);
            });
        },
    }
}
</script>
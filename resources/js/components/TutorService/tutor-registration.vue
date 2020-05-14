<template>
    <section class="bloodreg-area pt-5 pb-5">
     <div class="container-fluid">
         <div class="container">
             <div class="bloodreg-inner">
                <h4 class="t-title">গৃহশিক্ষকের বর্ননা</h4>
                <form class="bloodreg-form row">
                    <div class="col-lg-4 form-group">
                        <lebel for="text">নাম *</lebel>
                        <input type="text" class="form-control2" placeholder="" id="text">
                    </div>
                    <div class="col-lg-4 form-group">
                        <lebel for="text">মোবাইল *</lebel>
                        <input type="text" class="form-control2" placeholder="" id="text" name="text">
                    </div>
                    <div class="col-lg-4 form-group">
                            <lebel for="text">লিঙ্গ</lebel>
                            <select class="form-control2 search-blood">
								<option selected="select" value="0">পুরুষ</option>
								<option value="1">মহিলা</option>
                            </select>
                        </div>
                    <div class="col-lg-4 form-group">
                        <lebel for="text">পেশা *</lebel>
                        <input type="text" class="form-control2" placeholder="" id="text" name="text">
                    </div>
                    <div class="col-lg-4 form-group">
                        <lebel for="text">প্রতিষ্ঠান *</lebel>
                        <input type="টডওট" class="form-control2" placeholder="" id="text" name="text">
                    </div>
                    <div class="col-lg-4 form-group">
                        <lebel for="text">শিক্ষাগত যোগ্যতা *</lebel>
                        <input type="text" class="form-control2" placeholder="" id="text" name="text">
                    </div>
                    <div class="col-lg-4 form-group">
                        <lebel for="text">কৃতিত্ব</lebel>
                        <input type="text" class="form-control2" placeholder="" id="text" name="text">
                    </div>
                    <div class="col-lg-4 form-group">
                        <lebel for="text">বসবাসরত জেলা *</lebel>
                        <select class="form-control2 search-blood search-select" id="" name="presentDistrict">
                                <option value='1'>ব্রাক্ষ্মণবাড়িয়া</option><option value='2'>বাগেরহাট</option><option value='3'>বান্দরবান</option><option value='4'>বরিশাল</option><option value='5'>ভোলা</option><option value='6' Selected>বগুড়া</option><option value='7'>বরগুনা</option><option value='8'>চাঁদপুর</option><option value='9'>চাঁপাই নবাবগঞ্জ</option><option value='10'>চট্টগ্রাম</option><option value='11'>চুয়াডাঙ্গা</option><option value='12'>কুমিল্লা</option><option value='13'>কক্সবাজার</option><option value='14'>ঢাকা</option><option value='15'>দিনাজপুর</option><option value='16'>ফরিদপুর</option><option value='17'>ফেনী</option><option value='18'>গাইবান্ধা</option><option value='19'>গাজীপুর</option><option value='20'>গোপালগঞ্জ</option><option value='21'>হবিগঞ্জ</option><option value='22'>জামালপুর</option><option value='23'>যশোর</option><option value='24'>ঝালকাঠী</option><option value='25'>ঝিনাইদহ</option><option value='26'>জয়পুরহাট</option><option value='27'>খাগড়াছড়ি</option><option value='28'>খুলনা</option><option value='29'>কিশোরগঞ্জ</option><option value='30'>কুড়িগ্রাম</option><option value='31'>কুষ্টিয়া</option><option value='32'>লালমনিরহাট</option><option value='33'>লক্ষ্মীপুর</option><option value='34'>মাদারীপুর</option><option value='35'>মাগুরা</option><option value='36'>মানিকগঞ্জ</option><option value='37'>মেহেরপুর</option><option value='38'>মৌলভীবাজার</option><option value='39'>মুন্সীগঞ্জ</option><option value='40'>ময়মনসিংহ</option><option value='41'>নওগাঁ</option><option value='42'>নড়াইল</option><option value='43'>নারায়নগঞ্জ</option><option value='44'>নরসিংদী</option><option value='45'>নাটোর</option><option value='46'>নেত্রকোণা</option><option value='47'>নীলফামারী</option><option value='48'>নোয়াখালী</option><option value='49'>পাবনা</option><option value='50'>পঞ্চগড়</option><option value='51'>পটুয়াখালী</option><option value='52'>পিরোজপুর</option><option value='53'>রাজবাড়ী</option><option value='54'>রাজশাহী</option><option value='55'>রাঙ্গামাটি</option><option value='56'>রংপুর</option><option value='57'>সাতক্ষীরা</option><option value='58'>শরিয়তপুর</option><option value='59'>শেরপুর</option><option value='60'>সিরাজগঞ্জ</option><option value='61'>সুনামগঞ্জ</option><option value='62'>সিলেট</option><option value='63'>টাঙ্গাইল</option><option value='64'>ঠাকুরগাঁও</option>
                            </select>
                    </div>
                    <div class="col-lg-4 form-group">
                            <lebel for="text">গ্রাম / মহল্লা / রাস্তা *</lebel>
                            <input type="text" class="form-control2" id="text" name="text" placeholder="">
                        </div>
                    </form>
                    <div class="brtb"></div>
                        <h4 class="t-title">গৃহশিক্ষকের চাহিদা</h4>
                        <div class="user-inner pt-2">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row">
                                        <!--PRE-SCHOOL-->
                                        <div class="col-md-3">
                                            <form>
                                                <div class="form-group">
                                                    <input type="checkbox" name="pre-school">
                                                    <lebel>প্রি-স্কুল</lebel>
                                                    <input type="text" class="form-control3" placeholder="নুন্যতম ফিস">
                                                </div>
                                            </form>
                                        </div>
                                        
                                        <div class="col-md-9 pb-3">
                                            <form class="row">
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>বাংলা</lebel>
                                                </div>
                                                
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>ইংরেজি</lebel>
                                                </div>
                                                
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>গনিত</lebel>
                                                </div>
                                                
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>সকল বিষয়</lebel>
                                                </div>
                                                   
                                            </form>
                                        </div>
                                        <!--END PRE-SCHOOL-->
                                        
                                        <!--PSE-->
                                        <div class="col-md-3">
                                            <form>
                                                <div class="form-group">
                                                    <input type="checkbox" name="pre-school">
                                                    <lebel>প্রাথমিক</lebel>
                                                    <input type="text" class="form-control3" placeholder="নুন্যতম ফিস">
                                                </div>
                                            </form>
                                        </div>
                                        
                                        <div class="col-md-9 pb-3">
                                            <form class="row">
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>বাংলা</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>ইংরেজি</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>প্রাথমিক গণিত</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>শারীরিক শিক্ষা </lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>সংগীত</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                     <input type="checkbox">
                                                    <lebel>চারু ও কারুকলা </lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>ইসলাম ও নৈতিক শিক্ষা </lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>হিন্দুধর্ম ও নৈতিক শিক্ষা </lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>খ্রিষ্টধর্ম ও নৈতিক শিক্ষা</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>বৌদ্ধধর্ম ও নৈতিক শিক্ষা </lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>পরিবেশ পরিচিতি</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>সমাজ ও বিজ্ঞান</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>সকল বিষয়</lebel>
                                                </div>
                                            </form>
                                        </div>
                                        <!--END PSE-->
                                        
                                        
                                         <!--SSC-->
                                        <div class="col-md-3">
                                            <form>
                                                <div class="form-group">
                                                    <input type="checkbox" name="pre-school">
                                                    <lebel>মাধ্যমিক</lebel>
                                                    <input type="text" class="form-control3" placeholder="নুন্যতম ফিস">
                                                </div>
                                            </form>
                                        </div>
                                        
                                        <div class="col-md-9 pb-3">
                                            <form class="row">
                                                <!--SSC-->
                                                <div class="form-group col-md-4">
                                                   <input type="checkbox">
                                                    <lebel>বাংলা</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>ইংরেজি</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>উচ্চতর গণিত</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>হিসাববিজ্ঞান</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>কৃষিশিক্ষা</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>জীববিজ্ঞান</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>ব্যবসায় সংগঠন ও ব্যবস্থাপনা</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>রসায়ন</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                     <lebel>পৌরনীতি ও সুশাসন</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>উচ্চাঙ্গ সঙ্গীত</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                     <input type="checkbox">
                                                    <lebel>অর্থনীতি</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>ফিন্যান্স, ব্যাংকিং ও বিমা</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>শারীরিক শিক্ষা </lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>চারু ও কারুকলা </lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>ইসলাম ও নৈতিক শিক্ষা </lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>হিন্দুধর্ম ও নৈতিক শিক্ষা </lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>খ্রিষ্টধর্ম ও নৈতিক শিক্ষা</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>বৌদ্ধধর্ম ও নৈতিক শিক্ষা </lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                     <input type="checkbox">
                                                    <lebel>সকল বিষয়</lebel>
                                                </div>
                                            </form>
                                        </div> 
                                         <!--END SSC-->
                                        
                                        <!--HSC-->
                                        <div class="col-md-3">
                                            <form>
                                                <div class="form-group">
                                                    <input type="checkbox" name="pre-school">
                                                    <lebel>উচ্চ মাধ্যমিক</lebel>
                                                    <input type="text" class="form-control3" placeholder="নুন্যতম ফিস">
                                                </div>
                                            </form>
                                        </div>
                                        
                                        <div class="col-md-9 pb-3">
                                            <form class="row">
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>বাংলা</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>ইংরেজি</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>উচ্চতর গণিত</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>হিসাববিজ্ঞান</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>কৃষিশিক্ষা</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>জীববিজ্ঞান</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>ব্যবসায় সংগঠন ও ব্যবস্থাপনা</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>রসায়ন</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>শিশুর বিকাশ</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>পৌরনীতি ও সুশাসন</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>উচ্চাঙ্গ সঙ্গীত</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                     <input type="checkbox">
                                                    <lebel>অর্থনীতি</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>ফিন্যান্স, ব্যাংকিং ও বিমা</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>খাদ্য ও পুষ্টি</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>ভূগোল</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>ইতিহাস</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>গৃহব্যবস্থাপনা ও পারিবারিক জীবন</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>গার্হস্থ্যবিজ্ঞান</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>তথ্য ও যোগাযোগ প্রযুক্তি</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>ইসলাম শিক্ষা</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>ইসলামের ইতিহাস ও সংস্কৃতি</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>লঘু সঙ্গীত</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>যুক্তিবিদ্যা</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>পদার্থবিদ্যা</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>শিল্পকলা ও বস্ত্রপরিচ্ছদ</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>উৎপাদন ব্যবস্থাপনা ও বিপণন</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>মনোবিজ্ঞান</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>সমাজকর্ম</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>সমাজবিজ্ঞান</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>মৃত্তিকাবিজ্ঞান</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>পরিসংখ্যান</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>ট্যুরিজম ও হসপিটালিটি</lebel>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <input type="checkbox">
                                                    <lebel>সকল বিষয়</lebel>
                                                </div>
                                            </form>
                                        </div>
                                        <!--END HSC-->
                                        
                                        <!--VARSITY-->
                                        <div class="col-md-3">
                                            <form>
                                                <div class="form-group">
                                                    <input type="checkbox" name="pre-school">
                                                    <lebel>বিশ্ববিদ্যালয়</lebel>
                                                    <input type="text" class="form-control3" placeholder="নুন্যতম ফিস">
                                                </div>
                                            </form>
                                        </div>
                                        
                                        <div class="col-md-9 pb-3">
                                            <form>
                                                <div>
                                                    <input type="text" class="form-control2">
                                                </div>
                                            </form>
                                        </div>
                                        <!--END VARSITY-->
                                        
                                        <!--OTHERS-->
                                        <div class="col-md-3">
                                            <form>
                                                <div class="form-group">
                                                    <input type="checkbox" name="pre-school">
                                                    <lebel> অন্যান্য</lebel>
                                                    <input type="text" class="form-control3" placeholder="নুন্যতম ফিস">
                                                </div>
                                            </form>
                                        </div>
                                        
                                        <div class="col-md-9 pb-3">
                                            <form>
                                                <div>
                                                    <input type="text" class="form-control2">
                                                </div>
                                            </form>
                                        </div>
                                        <!--END OTHERS-->
                                        
                                        <!--SKILLED-->
                                        <div class="col-md-3">
                                            <form>
                                                <div class="form-group">
                                                    <input type="checkbox" name="pre-school">
                                                    <lebel>দক্ষতা ও উন্নয়ন</lebel>
                                                    <input type="text" class="form-control3" placeholder="নুন্যতম ফিস">
                                                </div>
                                            </form>
                                        </div>
                                        
                                        <div class="col-md-9 pb-3">
                                            <form>
                                                <div>
                                                    <input type="text" class="form-control2">
                                                </div>
                                            </form>
                                        </div>
                                        <!--END SKILLED-->
                                        
                                    </div>
                                </div>
                            <div class="col-lg-6 form-group">
                                <lebel for="text">পাসওয়ার্ড নিশ্চিত করুন *</lebel>
                                <input type="password" class="form-control2" placeholder="" id="text" name="text">
                            </div>
                        <div class="col-lg-12 form-group">
                            <button type="submit" class="btn-getinvite" id="subMit">নিবন্ধন করুন</button>
                        </div>
                     </div>
                 </div>
            </div>
         </div>
     </div>
 </section>
</template>

<script>
export default {
    data(){
        return{

        }
    },
    mounted(){
        axios.get('/api/tutor/show_tutor_info').then(response => {
            console.log(response.data);
        }).catch(error=>{

        });
    }
}
</script>
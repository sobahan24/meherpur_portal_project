@extends('layouts.frontend')

@section('title')

@endsection

@section('contant')
    <div class="row mainwrapper">
        <!-- Current Date -->



        <!-- census_count_down_2022 Start -->
        <script>
            console.log('working')
        </script>
        <!-- census_count_down_2022 End -->

        <!-- padma_bridge_countdown Start -->
        <!-- padma_bridge_countdown End -->
        <!-- padma_bridge Start -->
        <style>
            .containerpadma {
                border: 2px solid red;
                padding: 10px 10px 0px 10px;
                width: 96%;
                margin-top: 20px;
                margin-bottom: 20px;
            }

            @media only screen and (max-width: 600px) {
                .containerpadma {
                    border: 2px solid red;
                    padding: 10px 10px 0px 10px;
                    width: 93%;
                    margin-top: 20px;
                    margin-bottom: 20px;
                }
            }
        </style>



        <style>
            #notice-board-ticker ul li {
                list-style: none;
            }
        </style>


        <div class="row">
            <div id="box-3" class="six columns service-box box" style="float:left">
                <h4>সেবা প্রদান প্রতিশ্রুতি (সিটিজেন্‌স চার্টার)</h4>
                <img style="max-width:700px;"
                    src="{{ asset('frontend/images/front_service_box') }}/45936f84_3f37_4974_882f_e07da928e959/e068412b18a6c2b0e6aa5b53959b52d1.png"
                    alt="" width="110" height="" />
                <ul class="caption fade-caption" style="margin:0">
                    <li><a
                            href="site/files/634e9f05-0f54-4d2f-8911-9b832d18fbf2/%e0%a6%b8%e0%a7%87%e0%a6%ac%e0%a6%be-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%a6%e0%a6%be%e0%a6%a8-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%a4%e0%a6%bf%e0%a6%b6%e0%a7%8d%e0%a6%b0%e0%a7%81%e0%a6%a4%e0%a6%bf-.html">সেবা
                            প্রদান প্রতিশ্রুতি </a></li>
                    <li><a
                            href="site/files/54aca7c1-f152-4fe2-b7e0-a73220cd6869/-%e0%a6%85%e0%a6%a8%e0%a7%81%e0%a6%ae%e0%a7%8b%e0%a6%a6%e0%a6%bf%e0%a6%a4-%e0%a6%ab%e0%a6%b0%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%9f.html">
                            অনুমোদিত ফরম্যাট</a></li>
                    <li><a
                            href="site/files/19f51f67-b5cc-47b1-8b31-9ef3b02e909a/%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%a3%e0%a7%9f%e0%a6%a8-%e0%a6%b8%e0%a6%82%e0%a6%95%e0%a7%8d%e0%a6%b0%e0%a6%be%e0%a6%a8%e0%a7%8d%e0%a6%a4-%e0%a6%a8%e0%a6%bf%e0%a6%b0%e0%a7%8d%e0%a6%a6%e0%a7%87%e0%a6%b6%e0%a6%bf%e0%a6%95%e0%a6%be.html">প্রণয়ন
                            সংক্রান্ত নির্দেশিকা</a></li>
                    <li><a href="https://www.mygov.bd/">নাগরিক কর্নার</a></li>

                </ul>
            </div>

            <div id="box-3" class="six columns service-box box" style="float:right">
                <h4>আমাদের সর্ম্পকে</h4>
                <img style="max-width:700px;"
                    src="{{ asset('frontend/images/front_service_box') }}/6fa9d08f_b345_4d97_941f_886e571c20d1/ba4718a2e9d28545f70e5c27bd734f1b.png"
                    alt="" width="110" height="" />
                <ul class="caption fade-caption" style="margin:0">
                    <li><a
                            href="site/officer_list/d8bb181e-1c4b-11e7-8f57-286ed488c766/%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a7%8b%e0%a6%ab%e0%a6%be%e0%a6%87%e0%a6%b2/%e0%a6%9c%e0%a7%87%e0%a6%b2%e0%a6%be%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%b6%e0%a6%be%e0%a6%b8%e0%a6%95.html">জেলাপ্রশাসক</a>
                    </li>
                    <li><a
                            href="site/view/dc_officers/%e0%a6%9c%e0%a7%87%e0%a6%b2%e0%a6%be%20%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%b6%e0%a6%be%e0%a6%b8%e0%a6%a8%e0%a7%87%e0%a6%b0%20%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%ae%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%a4%e0%a6%be%e0%a6%ac%e0%a7%83%e0%a6%a8%e0%a7%8d%e0%a6%a6/%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%ae%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%a4%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b0-%e0%a6%a4%e0%a6%be%e0%a6%b2%e0%a6%bf%e0%a6%95%e0%a6%be.html">কর্মকর্তাদের
                            তালিকা</a></li>
                    <li><a
                            href="https://play.google.com/store/apps/details?id=com.tappware.ned&amp;hl=en/">বাংলাদেশ-ডিরেক্টরি
                            (এনড্রয়েড)</a></li>
                    <li><a href="site/view/district_branding_home/index.html">জেলা-ব্রান্ডিং</a></li>

                </ul>
            </div>
        </div>
        <div class="row">
            <div id="box-3" class="six columns service-box box" style="float:left">
                <h4>ভূমি-সেবা</h4>
                <img style="max-width:700px;"
                    src="{{ asset('frontend/images/front_service_box') }}/e65c8094_7434_4a5e_9d4e_9d3831dfaa75/7118418f79d2db83b70579eec6040ff8.png"
                    alt="" width="110" height="" />
                <ul class="caption fade-caption" style="margin:0">
                    <li><a href="http://xn--d5by7bap7cc3ici3m.xn--54b7fta0cc/">উত্তরাধিকার
                            ক্যালকুলেটর</a>
                    </li>
                    <li><a href="http://land.gov.bd/pages/mutation/">ই-মিউটেশন</a></li>
                    <li><a href="http://bangladesh.gov.bd/site/view/policy/">আইন ও নীতিমালা </a></li>
                    <li><a href="http://www.bangladesh.gov.bd/site/page/">সচরাচর জিজ্ঞাসা</a></li>

                </ul>
            </div>

            <div id="box-3" class="six columns service-box box" style="float:right">
                <h4>স্বাস্থ্য-সেবা</h4>
                <img style="max-width:700px;"
                    src="{{ asset('frontend/images/front_service_box') }}/f504f8aa_1c6b_11e7_8f57_286ed488c766/51038230b2fed8d86f1b509902e5239f.png"
                    alt="" width="110" height="" />
                <ul class="caption fade-caption" style="margin:0">
                    <li><a href="http://bangladesh.gov.bd/site/view/mservices/কল সেন্টার/">ডাক্তারের
                            সাথে
                            কথা বলুন</a></li>
                    <li><a
                            href="site/page/2f221806-9098-4724-8ef6-63e6fdcae2a2/%e0%a6%a1%e0%a6%be%e0%a6%95%e0%a7%8d%e0%a6%a4%e0%a6%be%e0%a6%b0%e0%a6%a6%e0%a7%87%e0%a6%b0-%e0%a6%a4%e0%a6%be%e0%a6%b2%e0%a6%bf%e0%a6%95%e0%a6%be.html">ডাক্তারদের
                            তালিকা</a></li>
                    <li><a
                            href="site/view/hospital_clinic/%e0%a6%b9%e0%a6%be%e0%a6%b8%e0%a6%aa%e0%a6%be%e0%a6%a4%e0%a6%be%e0%a6%b2-%e0%a6%93-%e0%a6%95%e0%a7%8d%e0%a6%b2%e0%a6%bf%e0%a6%a8%e0%a6%bf%e0%a6%95.html">হাসপাতাল
                            ও ক্লিনিক</a></li>
                    <li><a
                            href="http://www.bangladesh.gov.bd/site/view/eservices/স্বাস্থ্য বিষয়ক/">স্বাস্থ্য-সেবা</a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="row">
            <div id="box-3" class="six columns service-box box" style="float:left">
                <h4>শিক্ষা-সেবা</h4>
                <img style="max-width:700px;"
                    src="{{ asset('frontend/images/front_service_box') }}/f504c3ad_1c6b_11e7_8f57_286ed488c766/8e5980958232b2e850d4d3a3816867ee.png"
                    alt="" width="110" height="" />
                <ul class="caption fade-caption" style="margin:0">
                    <li><a href="http://www.educationboardresults.gov.bd/">পরীক্ষার ফলাফল </a></li>
                    <li><a
                            href="http://www.bangladesh.gov.bd/site/view/eservices/ভর্তির আবেদন/">বিশ্ববিদ্যালয়সমূহ</a>
                    </li>
                    <li><a href="http://application.emis.gov.bd:4040/adminLogin.aspx/"> MPO আবেদন</a>
                    </li>
                    <li><a href="http://www.jessoreboard.gov.bd/">শিক্ষাবোর্ডসমূহ </a></li>

                </ul>
            </div>

            <div id="box-3" class="six columns service-box box" style="float:right">
                <h4>কৃষি, মৎস্য ও প্রাণী-সেবা</h4>
                <img style="max-width:700px;"
                    src="{{ asset('frontend/images/front_service_box') }}/f30d195f_1c6b_11e7_8f57_286ed488c766/03a42edda7f77befef7d19f16d3bff0c.png"
                    alt="" width="110" height="" />
                <ul class="caption fade-caption" style="margin:0">
                    <li><a href="http://www.bangladesh.gov.bd/site/view/eservices/কৃষি/">কৃষি-সেবা </a>
                    </li>
                    <li><a href="http://www.bangladesh.gov.bd/site/view/eservices/মৎস্য ও প্রাণি/">মৎস্য
                            ও
                            প্রাণি-সেবা </a></li>
                    <li><a href="http://www.bangladesh.gov.bd/site/view/mservices/মৎস্য ও প্রাণি/">মোবাইলে
                            মৎস্য ও প্রাণি-সেবা </a></li>
                    <li><a href="http://www.bangladesh.gov.bd/site/view/mservices/কৃষি/">মোবাইলে কৃষি
                            সেবা
                        </a></li>

                </ul>
            </div>
        </div>
        <div class="row">
            <div id="box-3" class="six columns service-box box" style="float:left">
                <h4>নিরাপত্তা ও শৃঙ্খলা</h4>
                <img style="max-width:700px;"
                    src="{{ asset('frontend/images/front_service_box') }}/f30d1b0b_1c6b_11e7_8f57_286ed488c766/59b2eef6c709b216d58955a8a8c4fc96.png"
                    alt="" width="110" height="" />
                <ul class="caption fade-caption" style="margin:0">
                    <li><a href="http://ecourt.gov.bd/">অপরাধের তথ্য দিন </a></li>
                    <li><a href="http://www.police.gov.bd/">পুলিশি সহায়তা</a></li>
                    <li><a
                            href="https://play.google.com/store/apps/details?id=com.mcc.fire_service&amp;hl=en/">মোবাইলে
                            ফায়ার সার্ভিস</a></li>
                    <li><a href="http://efirelicense.gov.bd/">অনলাইনে ফায়ার লাইসেন্স</a></li>

                </ul>
            </div>

            <div id="box-3" class="six columns service-box box" style="float:right">
                <h4>পর্যটন-সেবা</h4>
                <img style="max-width:700px;"
                    src="{{ asset('frontend/images/front_service_box') }}/f504fa70_1c6b_11e7_8f57_286ed488c766/19c58e88dfccdc4d9207f3e0769bcd7d.png"
                    alt="" width="110" height="" />
                <ul class="caption fade-caption" style="margin:0">
                    <li><a
                            href="site/view/tourist_spot/%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8%e0%a7%80%e0%a7%9f-%e0%a6%b8%e0%a7%8d%e0%a6%a5%e0%a6%be%e0%a6%a8%e0%a6%b8%e0%a6%ae%e0%a7%82%e0%a6%b9.html">দর্শনীয়
                            স্থানসমূহ</a></li>
                    <li><a
                            href="https://play.google.com/store/apps/details?id=com.tappware.ned&amp;hl=en/">মোবাইলে
                            দর্শনীয় স্থান</a></li>
                    <li><a
                            href="site/view/hotel/%e0%a6%b9%e0%a7%8b%e0%a6%9f%e0%a7%87%e0%a6%b2-%e0%a6%93-%e0%a6%86%e0%a6%ac%e0%a6%be%e0%a6%b8%e0%a6%a8.html">হোটেল
                            ও আবাসন</a></li>
                    <li><a
                            href="site/officer_list/9b42007b-2acb-40e6-9e54-6831d6743539/%e0%a6%ab%e0%a7%8b%e0%a6%95%e0%a6%be%e0%a6%b2-%e0%a6%aa%e0%a6%be%e0%a6%b0%e0%a6%b8%e0%a6%a8/%e0%a6%9f%e0%a7%8d%e0%a6%af%e0%a7%81%e0%a6%b0%e0%a6%bf%e0%a6%9c%e0%a6%ae-%e0%a6%b8%e0%a7%87%e0%a6%b2.html">ট্যুরিজম
                            সেল</a></li>

                </ul>
            </div>
        </div>
        <div class="row">
            <div id="box-3" class="six columns service-box box" style="float:left">
                <h4>মুক্তিযোদ্ধা সংসদ নির্বাচন-২০২২-২৩</h4>
                <img style="max-width:700px;"
                    src="{{ asset('frontend/images/front_service_box') }}/e3fad4dd_90ee_4d30_a60d_ae51ba48a176/e05cbfb214488e3b3f09af7b6ad87a7c.png"
                    alt="" width="110" height="" />
                <ul class="caption fade-caption" style="margin:0">
                    <li><a href="site/files/8d06f755-9463-43bd-940d-eca81d2e7474/index.html">মুক্তিযোদ্ধা
                            গণবিজ্ঞপ্তি</a></li>
                    <li><a href="site/files/fc781e90-c196-468a-9ce4-dfb7cdf5e552/index.html">মেহেরপুর
                            জেলার
                            খসড়া ভোটার তালিকা</a></li>
                    <li><a href="site/files/db13ed47-7c10-442d-86b9-325c7d46144d/index.html">নির্বাচন
                            পরিচালনা সংক্রান্ত নির্দেশিকা</a></li>
                    <li><a href="http://www.molwa.gov.bd/">মুক্তিযুদ্ধ বিষয়ক মন্ত্রণালয়</a></li>

                </ul>
            </div>

            <div id="box-3" class="six columns service-box box" style="float:right">
                <h4>তথ্য অধিকার</h4>
                <img style="max-width:700px;"
                    src="{{ asset('frontend/images/front_service_box') }}/70eff2de_0944_40f9_80d3_f1ef06218b31/e9bfe57259ca2a0acd36a52d991760a5.png"
                    alt="" width="110" height="" />
                <ul class="caption fade-caption" style="margin:0">
                    <li><a href="site/info_officer/75f210fd-1124-4a97-8eb3-0b4f7545777e/index.html">তথ্য
                            প্রদানকারী কর্মকর্তা </a></li>
                    <li><a
                            href="site/page/c614bbf4-f8c3-44cc-b55c-ea6ae369e2d5/%e0%a6%a4%e0%a6%a5%e0%a7%8d%e0%a6%af-%e0%a6%86%e0%a6%87%e0%a6%a8-%e0%a6%93-%e0%a6%ac%e0%a6%bf%e0%a6%a7%e0%a6%bf%e0%a6%ae%e0%a6%be%e0%a6%b2%e0%a6%be.html">তথ্য
                            আইন ও বিধিমালা</a></li>
                    <li><a
                            href="site/page/618c81ee-4901-48a6-8ec1-5f1f946e38a2/%e0%a6%a4%e0%a6%a5%e0%a7%8d%e0%a6%af-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%be%e0%a6%aa%e0%a7%8d%e0%a6%a4%e0%a6%bf%e0%a6%b0-%e0%a6%86%e0%a6%ac%e0%a7%87%e0%a6%a6%e0%a6%a8-%e0%a6%ab%e0%a6%b0%e0%a6%ae-%e0%a6%93-%e0%a6%a8%e0%a6%bf%e0%a6%b0%e0%a7%8d%e0%a6%a6%e0%a7%87%e0%a6%b6%e0%a6%bf%e0%a6%95%e0%a6%be.html">তথ্য
                            প্রাপ্তির আবেদন ফরম ও নির্দেশিকা</a></li>
                    <li><a
                            href="site/page/5f50bbb7-5901-4ec3-a4c3-a5c4c6c09eb0/%e0%a6%b8%e0%a7%8d%e0%a6%ac%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%a3%e0%a7%8b%e0%a6%a6%e0%a6%bf%e0%a6%a4%e0%a6%ad%e0%a6%be%e0%a6%ac%e0%a7%87-%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%95%e0%a6%be%e0%a6%b6%e0%a6%af%e0%a7%8b%e0%a6%97%e0%a7%8d%e0%a6%af-%e0%a6%a4%e0%a6%a5%e0%a7%8d%e0%a6%af%e0%a7%87%e0%a6%b0-%e0%a6%a4%e0%a6%be%e0%a6%b2%e0%a6%bf%e0%a6%95%e0%a6%be.html">স্বপ্রণোদিতভাবে
                            প্রকাশযোগ্য তথ্যের তালিকা</a></li>

                </ul>
            </div>
        </div>
        <div class="row">
            <div id="box-3" class="six columns service-box box" style="float:left">
                <h4>শুদ্ধাচার</h4>
                <img style="max-width:700px;"
                    src="sites/default/files/files/meherpur.gov.bd/front_service_box/2db8093e_c96e_427c_a721_338cc2977b0c/4bc5d71b0ce8239231b389260ba970d2.png"
                    alt="" width="110" height="" />
                <ul class="caption fade-caption" style="margin:0">
                    <li><a
                            href="site/page/163fdbd6-0057-49d6-9bda-68dd632ef689/%e0%a6%9c%e0%a6%be%e0%a6%a4%e0%a7%80%e0%a7%9f-%e0%a6%b6%e0%a7%81%e0%a6%a6%e0%a7%8d%e0%a6%a7%e0%a6%be%e0%a6%9a%e0%a6%be%e0%a6%b0-%e0%a6%95%e0%a7%8c%e0%a6%b6%e0%a6%b2-.html">জাতীয়
                            শুদ্ধাচার কৌশল </a></li>
                    <li><a
                            href="site/page/4dd8fd01-f2c1-4438-b2be-2740d99819ec/%e0%a6%9c%e0%a7%87%e0%a6%b2%e0%a6%be-%e0%a6%95%e0%a6%ae%e0%a6%bf%e0%a6%9f%e0%a6%bf.html">জেলা
                            কমিটি</a></li>
                    <li><a
                            href="site/page/fc04c306-fe7b-45e6-bcc2-de581276a3ee/%e0%a6%ac%e0%a6%be%e0%a6%b0%e0%a7%8d%e0%a6%b7%e0%a6%bf%e0%a6%95-%e0%a6%93-%e0%a6%a4%e0%a7%8d%e0%a6%b0%e0%a7%88%e0%a6%ae%e0%a6%be%e0%a6%b8%e0%a6%bf%e0%a6%95-%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%ae%e0%a6%aa%e0%a6%b0%e0%a6%bf%e0%a6%95%e0%a6%b2%e0%a7%8d%e0%a6%aa%e0%a6%a8%e0%a6%be.html">বার্ষিক
                            ও ত্রৈমাসিক কর্মপরিকল্পনা</a></li>
                    <li><a
                            href="site/page/a65e1482-5a97-4cc0-a7e9-f318f4c609e1/%e0%a6%89%e0%a6%a4%e0%a7%8d%e0%a6%a4%e0%a6%ae-%e0%a6%9a%e0%a6%b0%e0%a7%8d%e0%a6%9a%e0%a6%be.html">উত্তম
                            চর্চা</a></li>

                </ul>
            </div>

            <div id="box-3" class="six columns service-box box" style="float:right">
                <h4>জরূরি কল</h4>
                <img style="max-width:700px;"
                    src="{{ asset('frontend/images/front_service_box') }}/27b508b6_7535_4734_9cfb_14a1c933723c/ffb70965316d11d2447c942e8106f79d.png"
                    alt="" width="110" height="" />
                <ul class="caption fade-caption" style="margin:0">
                    <li><a href="http://bangladesh.gov.bd/site/page/79d371f2-4530-437a-982f-16c7c0a2ecad/">৩৩৩
                            থেকে তথ্য-সেবা</a></li>
                    <li><a href="http://www.bangladesh.gov.bd/site/view/mservices/কল সেন্টার/">কল
                            সেন্টারসমূহ</a></li>
                    <li><a href="http://www.bangladesh.gov.bd/site/view/mservices/হেল্পডেস্ক/">হেল্পডেস্ক
                        </a></li>
                    <li><a href="http://www.bangladesh.gov.bd/site/view/eservices/স্বাস্থ্য বিষয়ক/">ফোনে
                            ডাক্তারের সেবা </a></li>

                </ul>
            </div>
        </div>
        <div class="row">
            <div id="box-3" class="six columns service-box box" style="float:left">
                <h4>বিবিধ-সেবা</h4>
                <img style="max-width:700px;"
                    src="{{ asset('frontend/images/front_service_box') }}/f504f9ce_1c6b_11e7_8f57_286ed488c766/2b85d4eaba862c11a58eaa6aa558092b.png"
                    alt="" width="110" height="" />
                <ul class="caption fade-caption" style="margin:0">
                    <li><a
                            href="site/page/3763070c-1c4b-11e7-8f57-286ed488c766/%e0%a6%85%e0%a6%a8%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8%e0%a7%8d%e0%a6%af.html">অন্যান্য</a>
                    </li>
                    <li><a
                            href="site/page/1bed3858-1c4b-11e7-8f57-286ed488c766/%e0%a6%ad%e0%a7%82%e0%a6%ae%e0%a6%bf-%e0%a6%b8%e0%a6%82%e0%a6%95%e0%a7%8d%e0%a6%b0%e0%a6%be%e0%a6%a8%e0%a7%8d%e0%a6%a4-%e0%a6%a4%e0%a6%a5%e0%a7%8d%e0%a6%af.html">ভূমি
                            সংক্রান্ত তথ্য</a></li>
                    <li><a
                            href="site/view/other_hotlines/%e0%a6%b9%e0%a6%9f%e0%a6%b2%e0%a6%be%e0%a6%87%e0%a6%a8.html">হটলাইন</a>
                    </li>
                    <li><a
                            href="site/view/forms/%e0%a6%ac%e0%a6%bf%e0%a6%ad%e0%a6%bf%e0%a6%a8%e0%a7%8d%e0%a6%a8-%e0%a6%ab%e0%a6%b0%e0%a6%ae.html">বিভিন্ন
                            ফরম</a></li>

                </ul>
            </div>
        </div>
    </div>
@endsection

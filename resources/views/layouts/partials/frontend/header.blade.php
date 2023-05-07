    {{-- topbar start --}}
    <div class="sixteen columns topbar"
        style="background-color: #8bc643; box-shadow: 0 1px 5px #999999; height:auto;border-bottom:4px solid #683091;">
        <div class="np three columns" style=" display: inline-block;">
            <a style="color: white;height:100%;display:table;padding: 7px;font-size:.9em;" href="{{ url('/') }}">
                মেহেরপুর তথ্য বাতায়ন
            </a>
        </div>
        <div class="two columns" style=" display: inline-block; padding: 5px;">
            <select class="chzn-select" title="বিভাগ নির্বাচন করতে এখানে ক্লিক করুন">
                <option>খুলনা বিভাগ</option>
                <option value='-'>---</option>
                <option value="//www.sylhetdiv.gov.bd">সিলেট বিভাগ</option>
                <option value="//www.dhakadiv.gov.bd">ঢাকা বিভাগ</option>
                <option value="//www.chittagongdiv.gov.bd">চট্রগ্রাম বিভাগ</option>
                <option value="//www.rajshahidiv.gov.bd">রাজশাহী বিভাগ</option>
                <option value="//www.mymensinghdiv.gov.bd">ময়মনসিংহ বিভাগ</option>
                <option value="//www.rangpurdiv.gov.bd">রংপুর বিভাগ</option>
                <option value="//www.barisaldiv.gov.bd">বরিশাল বিভাগ</option>
                <option value="//www.khulnadiv.gov.bd">খুলনা বিভাগ</option>
            </select>
        </div>
        <div class="two columns" style=" display: inline-block; padding: 5px;">
            <select class="chzn-select" title="জেলা নির্বাচন করতে এখানে ক্লিক করুন">
                <option>মেহেরপুর </option>
                <option value='-'>---</option>
                <option value="//www.jessore.gov.bd">যশোর </option>
                <option value="//www.satkhira.gov.bd">সাতক্ষীরা </option>
                <option value="//www.meherpur.gov.bd">মেহেরপুর </option>
                <option value="//www.narail.gov.bd">নড়াইল </option>
                <option value="//www.chuadanga.gov.bd">চুয়াডাঙ্গা </option>
                <option value="//www.kushtia.gov.bd">কুষ্টিয়া </option>
                <option value="//www.magura.gov.bd">মাগুরা </option>
                <option value="//www.khulna.gov.bd">খুলনা </option>
                <option value="//www.bagerhat.gov.bd">বাগেরহাট </option>
                <option value="//www.jhenaidah.gov.bd">ঝিনাইদহ </option>
            </select>
        </div>
        <div class="two columns" style=" display: inline-block; padding: 5px;"><select class="chzn-select"
                title="উপজেলা নির্বাচন করতে এখানে ক্লিক করুন">
                <option value='-'></option>
                <option value="//mujibnagar.meherpur.gov.bd">মুজিবনগর </option>
                <option value="//meherpursadar.meherpur.gov.bd">মেহেরপুর সদর </option>
                <option value="//gangni.meherpur.gov.bd">গাংনী </option>
            </select>
        </div>
        <div id="div-lang" class="four columns" style="padding:4px; text-align: right;">
            <form action="https://www.meherpur.gov.bd/site/search" style="margin: 0; padding: 0; float: left">
                <input style="width:185px" id="search" name="key" value="" />
                <button class="search-btn" type="submit" style="margin: 0; padding: 2px 10px">Go</button>
            </form>
        </div>
        <div id="div-lang-sel" class="one columns"
            style="padding:5px;padding-right: 8px; margin: 0px 15px; display:flex;">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </div>
    </div>
    {{-- topbar end --}}

    <div class="sixteen columns slider">

        {{-- banner start --}}
        @include('layouts.partials.frontend.slider')
        {{-- banner end --}}

        <div class="responsive-slogan">
            <span id="site-name-res">
                <a title="Home" href="{{ url('/') }}">
                    মেহেরপুর জেলা
                </a>
            </span>
            <span id="slogan-res">
            </span>
        </div>

        <div class="header-site-info" id="header-site-info">
            <div>

                <div class="clearfix" id="site-name-wrapper">
                    <span id="site-name">
                        <a title="Home" href="{{ url('/') }}">
                            মেহেরপুর জেলা </a>
                    </span>
                    <span id="slogan">
                    </span>

                </div>
            </div>
        </div>
    </div>
    <script>
        /* Responsive Design*/
        $(document).ready(function() {
            var wi = $(window).width();
            if (wi < 980) {
                $('#jmenu .show-menu').click(function() {
                    //$('.mzr-responsive').show();
                    $(".mzr-responsive").slideToggle(700, "linear", function() {});
                });

                $(".mzr-drop> a").click(function() {

                    $(".mzr-drop> a").siblings().addClass('sibling-toggle');

                    $(this).parent().find(".mzr-content").removeClass('sibling-toggle').addClass(
                        'slide-visible').slideToggle(700, "linear", function() {});
                    return false;
                });
            }
            $('.submenu').addClass('sub-menu');
            $('.mzr-drop').addClass('focusin-drop');
            $('.mzr-drop').addClass('focusClassDrop');

        });
    </script>


    {{-- menu start --}}
    <div class="sixteen columns" id="jmenu">
        <div class="sixteen columns">
            <a href="javascript:;" class="show-menu menu-head"> মেনু নির্বাচন করুন</a>
            <div role="navigation" id="dawgdrops">
                <ul class="meganizr mzr-slide mzr-responsive">
                    <!-- Build The Menu -->
                    <li class="col0"><a title="Home" href="{{ url('/') }}"
                            style="background-image: url('{{ asset('frontend/images/home_dark.png') }}');margin-top:5px;"></a>
                    </li>
                    <li class="col1 mzr-drop"><a title="জেলা সম্পর্কিত" href="javascript:;">জেলা
                            সম্পর্কিত</a>
                        <div class="mzr-content drop-four-columns">
                            <div class="one-col">
                                <h6>জেলা পরিচিতি</h6>
                                <ul class="mzr-links">
                                    <li><a title="এক নজরে জেলা"
                                            href="{{ url('/site/এক-নজরে') }}">এক
                                            নজরে জেলা</a></li>
                                    <li><a title="জেলার পটভুমি"
                                            href="{{ url('/site/পটভুমি') }}">জেলার
                                            পটভুমি</a></li>
                                    <li><a title="ভৌগলিক পরিচিতি"
                                            href="{{ url('/site/ভৌগলিক-পরিচিতি') }}">ভৌগলিক
                                            পরিচিতি</a></li>
                                    <li><a title="মানচিত্রে জেলা"
                                            href="{{ url('/site/মানচিত্রে-জেলা') }}">মানচিত্রে
                                            জেলা</a></li>
                                    <li><a title="উপজেলা ও ইউনিয়ন"
                                            href="{{ url('/site/উপজেলা-ও-ইউনিয়ন') }}">উপজেলা
                                            ও ইউনিয়ন</a></li>
                                </ul>
                            </div>
                            <div class="one-col">
                                <h6>ইতিহাস ও ঐতিহ্য</h6>
                                <ul class="mzr-links">
                                    <li><a title="খেলাধুলা ও বিনোদন"
                                            href="{{ url('/site/খেলাধুলা-ও-বিনোদন') }}">খেলাধুলা
                                            ও বিনোদন</a></li>
                                    <li><a title="জেলার ঐতিহ্য"
                                            href="{{ url('/site/জেলার-ঐতিহ্য') }}">জেলার
                                            ঐতিহ্য</a></li>
                                    <li><a title="দর্শনীয় স্থান"
                                            href="{{ url('/site/দর্শনীয়-স্থান') }}">দর্শনীয়
                                            স্থান</a></li>
                                    <li><a title="প্রখ্যাত ব্যক্তিত্ব"
                                            href="{{ url('/site/প্রখ্যাত-ব্যক্তিত্ব') }}">প্রখ্যাত
                                            ব্যক্তিত্ব</a></li>
                                    <li><a title="ভাষা ও সংস্কৃতি"
                                            href="{{ url('/site/ভাষা-ও-সংস্কৃতি') }}">ভাষা
                                            ও সংস্কৃতি</a></li>
                                    <li><a title="মুক্তিযুদ্ধ ও মুক্তিযোদ্ধাদের তালিকা"
                                            href="{{ url('/site/মুক্তিযুদ্ধ-ও-মুক্তিযোদ্ধাদের-তালিকা') }}">মুক্তিযুদ্ধ
                                            ও মুক্তিযোদ্ধাদের তালিকা</a></li>
                                </ul>
                            </div>
                            <div class="one-col">
                                <h6>ভৌগোলিক ও অর্থনৈতিক</h6>
                                <ul class="mzr-links">
                                    <li><a title="হোটেল ও আবাসন"
                                            href="{{ url('/site/হোটেল-ও-আবাসন') }}">হোটেল
                                            ও আবাসন</a></li>
                                    <li><a title="ভৌগোলিক অবস্থান,গঠন ও আয়তন"
                                            href="{{ url('/site/অবস্থান-গঠন-ও-আয়তন') }}">ভৌগোলিক
                                            অবস্থান,গঠন ও আয়তন</a></li>
                                    <li><a title="শিল্প ও বাণিজ্য"
                                            href="{{ url('/site/শিল্প-ও-বাণিজ্য') }}">শিল্প
                                            ও বাণিজ্য</a></li>
                                    <li><a title="নদ-নদী"
                                            href="{{ url('/site/নদ-নদী') }}">নদ-নদী</a>
                                    </li>
                                    <li><a title="হাটবাজার"
                                            href="{{ url('/site/হাটবাজার') }}">হাটবাজার</a>
                                    </li>
                                    <li><a title="যোগাযোগ ব্যবস্থা"
                                            href="{{ url('/site/যোগাযোগ-ব্যবস্থা') }}">যোগাযোগ
                                            ব্যবস্থা</a></li>
                                </ul>
                            </div>
                            <div class="one-col">
                                <h6>অন্যান্য</h6>
                                <ul class="mzr-links">
                                    <li><a title="জন প্রতিনিধি"
                                            href="{{ url('/site/জন-প্রতিনিধি') }}">জন
                                            প্রতিনিধি</a></li>
                                    <li><a title="ইউপি চেয়ারম্যান ও সচিবগণের নামের তালিকা"
                                            href="{{ url('/site/ইউপি-চেয়ারম্যান-ও-সচিবগণের-নামের-তালিকা') }}">ইউপি
                                            চেয়ারম্যান ও সচিবগণের নামের তালিকা</a></li>
                                    <li><a title="ইউনিয়ন ডিজিটাল সেন্টারের উদ্যোক্তাদের তালিকা"
                                            href="{{ url('/site/ইউনিয়ন-ডিজিটাল-সেন্টারের-উদ্যোক্তাদের-তালিকা') }}">ইউনিয়ন
                                            ডিজিটাল সেন্টারের উদ্যোক্তাদের তালিকা</a></li>
                                    <li><a title="পত্রপত্রিকা"
                                            href="{{ url('/site/পত্রপত্রিকা') }}">পত্রপত্রিকা</a>
                                    </li>
                                    <li><a title="ICT তে বর্ষসেরা পুরস্কার প্রাপ্তদের তালিকা"
                                            href="{{ url('/site/ICT-তে-বর্ষসেরা-পুরস্কার-প্রাপ্তদের-তালিকা') }}">ICT
                                            তে বর্ষসেরা পুরস্কার প্রাপ্তদের তালিকা</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="col2 mzr-drop"><a title="জেলা প্রশাসন" href="javascript:;">জেলা প্রশাসন</a>
                        <div class="mzr-content drop-four-columns">
                            <div class="one-col">
                                <h6>জেলা প্রশাসক</h6>
                                <ul class="mzr-links">
                                    <li><a title="জেলা প্রশাসকের বার্তা"
                                            href="site/page/1be5bc65-1c4b-11e7-8f57-286ed488c766/%e0%a6%9c%e0%a7%87%e0%a6%b2%e0%a6%be%20%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%b6%e0%a6%be%e0%a6%b8%e0%a6%95%e0%a7%87%e0%a6%b0%20%e0%a6%ac%e0%a6%be%e0%a6%b0%e0%a7%8d%e0%a6%a4%e0%a6%be.html">জেলা
                                            প্রশাসকের বার্তা</a></li>
                                    <li><a title="প্রোফাইল"
                                            href="site/officer_list/d8bb181e-1c4b-11e7-8f57-286ed488c766/%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a7%8b%e0%a6%ab%e0%a6%be%e0%a6%87%e0%a6%b2.html">প্রোফাইল</a>
                                    </li>
                                    <li><a title="মাসিক কর্মসূচী"
                                            href="site/page/6d78399a-963c-4abd-82b8-659ca5a8fbba/%e0%a6%ae%e0%a6%be%e0%a6%b8%e0%a6%bf%e0%a6%95%20%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%ae%e0%a6%b8%e0%a7%82%e0%a6%9a%e0%a7%80.html">মাসিক
                                            কর্মসূচী</a></li>
                                    <li><a title="পুর্বতন জেলা প্রশাসক ও মহুকুমা প্রশাসকগণের তালিকা"
                                            href="site/page/1950470c-1c4b-11e7-8f57-286ed488c766/%e0%a6%aa%e0%a7%81%e0%a6%b0%e0%a7%8d%e0%a6%ac%e0%a6%a4%e0%a6%a8%20%e0%a6%9c%e0%a7%87%e0%a6%b2%e0%a6%be%20%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%b6%e0%a6%be%e0%a6%b8%e0%a6%95%20%e0%a6%93%20%e0%a6%ae%e0%a6%b9%e0%a7%81%e0%a6%95%e0%a7%81%e0%a6%ae%e0%a6%be%20%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%b6%e0%a6%be%e0%a6%b8%e0%a6%95%e0%a6%97%e0%a6%a3%e0%a7%87%e0%a6%b0%20%e0%a6%a4%e0%a6%be%e0%a6%b2%e0%a6%bf%e0%a6%95%e0%a6%be.html">পুর্বতন
                                            জেলা প্রশাসক ও মহুকুমা প্রশাসকগণের তালিকা</a></li>
                                </ul>
                            </div>
                            <div class="one-col">
                                <h6>জেলা প্রশাসকের কার্যালয়</h6>
                                <ul class="mzr-links">
                                    <li><a title="জেলা প্রশাসনের পটভূমি"
                                            href="site/page/079c0fbe-1c4b-11e7-8f57-286ed488c766/%e0%a6%9c%e0%a7%87%e0%a6%b2%e0%a6%be%20%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%b6%e0%a6%be%e0%a6%b8%e0%a6%a8%e0%a7%87%e0%a6%b0%20%e0%a6%aa%e0%a6%9f%e0%a6%ad%e0%a7%82%e0%a6%ae%e0%a6%bf.html">জেলা
                                            প্রশাসনের পটভূমি</a></li>
                                    <li><a title="সার্কিট হাউজ"
                                            href="site/page/161bae6b-1c4b-11e7-8f57-286ed488c766/%e0%a6%b8%e0%a6%be%e0%a6%b0%e0%a7%8d%e0%a6%95%e0%a6%bf%e0%a6%9f%20%e0%a6%b9%e0%a6%be%e0%a6%89%e0%a6%9c.html">সার্কিট
                                            হাউজ</a></li>
                                    <li><a title="যোগাযোগ"
                                            href="site/page/1b09c894-1c4b-11e7-8f57-286ed488c766/%e0%a6%af%e0%a7%8b%e0%a6%97%e0%a6%be%e0%a6%af%e0%a7%8b%e0%a6%97.html">যোগাযোগ</a>
                                    </li>
                                    <li><a title="সাংগনিক কাঠামো"
                                            href="site/page/1be5e26e-1c4b-11e7-8f57-286ed488c766/%e0%a6%b8%e0%a6%be%e0%a6%82%e0%a6%97%e0%a6%a8%e0%a6%bf%e0%a6%95%20%e0%a6%95%e0%a6%be%e0%a6%a0%e0%a6%be%e0%a6%ae%e0%a7%8b.html">সাংগনিক
                                            কাঠামো</a></li>
                                    <li><a title="সম্পদ ও লজিস্টিকস"
                                            href="site/page/1f790fc5-1c4b-11e7-8f57-286ed488c766/%e0%a6%b8%e0%a6%ae%e0%a7%8d%e0%a6%aa%e0%a6%a6%20%e0%a6%93%20%e0%a6%b2%e0%a6%9c%e0%a6%bf%e0%a6%b8%e0%a7%8d%e0%a6%9f%e0%a6%bf%e0%a6%95%e0%a6%b8.html">সম্পদ
                                            ও লজিস্টিকস</a></li>
                                    <li><a title="ফ্রন্ট ডেস্ক"
                                            href="site/page/201febd8-1c4b-11e7-8f57-286ed488c766/%e0%a6%ab%e0%a7%8d%e0%a6%b0%e0%a6%a8%e0%a7%8d%e0%a6%9f%20%e0%a6%a1%e0%a7%87%e0%a6%b8%e0%a7%8d%e0%a6%95.html">ফ্রন্ট
                                            ডেস্ক</a></li>
                                </ul>
                            </div>
                            <div class="one-col">
                                <h6>উপ-পরিচালক/অতিরিক্ত জেলা প্রশাসক</h6>
                                <ul class="mzr-links">
                                    <li><a title="উপপরিচালক, স্থানীয় সরকার"
                                            href="site/officer_list/9b42007b-2acb-40e6-9e54-6831d6743539/%e0%a6%89%e0%a6%aa%e0%a6%aa%e0%a6%b0%e0%a6%bf%e0%a6%9a%e0%a6%be%e0%a6%b2%e0%a6%95%2c%20%e0%a6%b8%e0%a7%8d%e0%a6%a5%e0%a6%be%e0%a6%a8%e0%a7%80%e0%a6%af%e0%a6%bc%20%e0%a6%b8%e0%a6%b0%e0%a6%95%e0%a6%be%e0%a6%b0.html">উপপরিচালক,
                                            স্থানীয় সরকার</a></li>
                                    <li><a title="অতিরিক্ত জেলা প্রশাসক (রাজস্ব)"
                                            href="site/adc/ea81d65a-1c4f-11e7-8f57-286ed488c766/%e0%a6%85%e0%a6%a4%e0%a6%bf%e0%a6%b0%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%a4%20%e0%a6%9c%e0%a7%87%e0%a6%b2%e0%a6%be%20%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%b6%e0%a6%be%e0%a6%b8%e0%a6%95%20(%e0%a6%b0%e0%a6%be%e0%a6%9c%e0%a6%b8%e0%a7%8d%e0%a6%ac).html">অতিরিক্ত
                                            জেলা প্রশাসক (রাজস্ব)</a></li>
                                    <li><a title="অতিরিক্ত জেলাপ্রশাসক (সার্বিক)"
                                            href="site/adc/af2382cd-f7a1-4665-9a3f-e38ee0ab1821/%e0%a6%85%e0%a6%a4%e0%a6%bf%e0%a6%b0%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%a4%20%e0%a6%9c%e0%a7%87%e0%a6%b2%e0%a6%be%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%b6%e0%a6%be%e0%a6%b8%e0%a6%95%20(%e0%a6%b8%e0%a6%be%e0%a6%b0%e0%a7%8d%e0%a6%ac%e0%a6%bf%e0%a6%95).html">অতিরিক্ত
                                            জেলাপ্রশাসক (সার্বিক)</a></li>
                                    <li><a title="অতিরিক্ত জেলা ম্যাজিস্ট্রেট"
                                            href="site/adc/ea81a57b-1c4f-11e7-8f57-286ed488c766/%e0%a6%85%e0%a6%a4%e0%a6%bf%e0%a6%b0%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%a4%20%e0%a6%9c%e0%a7%87%e0%a6%b2%e0%a6%be%20%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%9c%e0%a6%bf%e0%a6%b8%e0%a7%8d%e0%a6%9f%e0%a7%8d%e0%a6%b0%e0%a7%87%e0%a6%9f.html">অতিরিক্ত
                                            জেলা ম্যাজিস্ট্রেট</a></li>
                                    <li><a title="অতিরিক্ত জেলা প্রশাসক (শিক্ষা ও আইসিটি)"
                                            href="site/adc/39048c3d-9be0-40d6-ad66-4db72fe34022/%e0%a6%85%e0%a6%a4%e0%a6%bf%e0%a6%b0%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%a4%20%e0%a6%9c%e0%a7%87%e0%a6%b2%e0%a6%be%20%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%b6%e0%a6%be%e0%a6%b8%e0%a6%95%20(%e0%a6%b6%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%b7%e0%a6%be%20%e0%a6%93%20%e0%a6%86%e0%a6%87%e0%a6%b8%e0%a6%bf%e0%a6%9f%e0%a6%bf).html">অতিরিক্ত
                                            জেলা প্রশাসক (শিক্ষা ও আইসিটি)</a></li>
                                </ul>
                            </div>
                            <div class="one-col">
                                <h6>কর্মকর্তা ও কর্মচারীবৃন্দ</h6>
                                <ul class="mzr-links">
                                    <li><a title="জেলা প্রশাসনের কর্মকর্তাবৃন্দ"
                                            href="site/view/dc_officers/%e0%a6%9c%e0%a7%87%e0%a6%b2%e0%a6%be%20%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%b6%e0%a6%be%e0%a6%b8%e0%a6%a8%e0%a7%87%e0%a6%b0%20%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%ae%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%a4%e0%a6%be%e0%a6%ac%e0%a7%83%e0%a6%a8%e0%a7%8d%e0%a6%a6.html">জেলা
                                            প্রশাসনের কর্মকর্তাবৃন্দ</a></li>
                                    <li><a title="উপজেলা নির্বাহী অফিসার"
                                            href="site/page/1be5ab9b-1c4b-11e7-8f57-286ed488c766/%e0%a6%89%e0%a6%aa%e0%a6%9c%e0%a7%87%e0%a6%b2%e0%a6%be%20%e0%a6%a8%e0%a6%bf%e0%a6%b0%e0%a7%8d%e0%a6%ac%e0%a6%be%e0%a6%b9%e0%a7%80%20%e0%a6%85%e0%a6%ab%e0%a6%bf%e0%a6%b8%e0%a6%be%e0%a6%b0.html">উপজেলা
                                            নির্বাহী অফিসার</a></li>
                                    <li><a title="জেলা প্রশাসনের কর্মচারীবৃন্দ"
                                            href="site/view/staff_dc/%e0%a6%9c%e0%a7%87%e0%a6%b2%e0%a6%be%20%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%b6%e0%a6%be%e0%a6%b8%e0%a6%a8%e0%a7%87%e0%a6%b0%20%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%ae%e0%a6%9a%e0%a6%be%e0%a6%b0%e0%a7%80%e0%a6%ac%e0%a7%83%e0%a6%a8%e0%a7%8d%e0%a6%a6.html">জেলা
                                            প্রশাসনের কর্মচারীবৃন্দ</a></li>
                                    <li><a title="সহকারী কমিশনার (ভূমি)"
                                            href="site/page/8a608f6b-d971-4d75-9158-2862aa83e0a3/%e0%a6%b8%e0%a6%b9%e0%a6%95%e0%a6%be%e0%a6%b0%e0%a7%80%20%e0%a6%95%e0%a6%ae%e0%a6%bf%e0%a6%b6%e0%a6%a8%e0%a6%be%e0%a6%b0%20(%e0%a6%ad%e0%a7%82%e0%a6%ae%e0%a6%bf).html">সহকারী
                                            কমিশনার (ভূমি)</a></li>
                                </ul>
                            </div>
                            <div class="one-col">
                                <h6>শাখা সম্পর্কিত</h6>
                                <ul class="mzr-links">
                                    <li><a title="জেলা প্রশাসনের শাখা"
                                            href="site/page/6fab41e4-a4ec-4f28-b3c2-4b9ed7a44f75/%e0%a6%9c%e0%a7%87%e0%a6%b2%e0%a6%be%20%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%b6%e0%a6%be%e0%a6%b8%e0%a6%a8%e0%a7%87%e0%a6%b0%20%e0%a6%b6%e0%a6%be%e0%a6%96%e0%a6%be.html">জেলা
                                            প্রশাসনের শাখা</a></li>
                                    <li><a title="সচরাচর জিজ্ঞাসা"
                                            href="site/page/52c735f0-1c4b-11e7-8f57-286ed488c766/%e0%a6%b8%e0%a6%9a%e0%a6%b0%e0%a6%be%e0%a6%9a%e0%a6%b0%20%e0%a6%9c%e0%a6%bf%e0%a6%9c%e0%a7%8d%e0%a6%9e%e0%a6%be%e0%a6%b8%e0%a6%be.html">সচরাচর
                                            জিজ্ঞাসা</a></li>
                                    <li><a title="শাখাভিত্তিক ফরম"
                                            href="site/view/forms/%e0%a6%b6%e0%a6%be%e0%a6%96%e0%a6%be%e0%a6%ad%e0%a6%bf%e0%a6%a4%e0%a7%8d%e0%a6%a4%e0%a6%bf%e0%a6%95%20%e0%a6%ab%e0%a6%b0%e0%a6%ae.html">শাখাভিত্তিক
                                            ফরম</a></li>
                                    <li><a title="এক্সিকিউটিভ ম্যাজিষ্ট্রেসি কার্যক্রম"
                                            href="site/page/566bb75c-1c4b-11e7-8f57-286ed488c766/%e0%a6%8f%e0%a6%95%e0%a7%8d%e0%a6%b8%e0%a6%bf%e0%a6%95%e0%a6%bf%e0%a6%89%e0%a6%9f%e0%a6%bf%e0%a6%ad%20%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%9c%e0%a6%bf%e0%a6%b7%e0%a7%8d%e0%a6%9f%e0%a7%8d%e0%a6%b0%e0%a7%87%e0%a6%b8%e0%a6%bf%20%e0%a6%95%e0%a6%be%e0%a6%b0%e0%a7%8d%e0%a6%af%e0%a6%95%e0%a7%8d%e0%a6%b0%e0%a6%ae.html">এক্সিকিউটিভ
                                            ম্যাজিষ্ট্রেসি কার্যক্রম</a></li>
                                </ul>
                            </div>
                            <div class="one-col">
                                <h6>গুরুত্বপূর্ণ তথ্য</h6>
                                <ul class="mzr-links">
                                    <li><a title="ফ্রন্ট ডেস্ক ও ই-সেবা কেন্দ্র"
                                            href="site/page/201febd8-1c4b-11e7-8f57-286ed488c766/%e0%a6%ab%e0%a7%8d%e0%a6%b0%e0%a6%a8%e0%a7%8d%e0%a6%9f%20%e0%a6%a1%e0%a7%87%e0%a6%b8%e0%a7%8d%e0%a6%95%20%e0%a6%93%20%e0%a6%87-%e0%a6%b8%e0%a7%87%e0%a6%ac%e0%a6%be%20%e0%a6%95%e0%a7%87%e0%a6%a8%e0%a7%8d%e0%a6%a6%e0%a7%8d%e0%a6%b0.html">ফ্রন্ট
                                            ডেস্ক ও ই-সেবা কেন্দ্র</a></li>
                                    <li><a title="জেলা প্রশাসনের সেবার তালিকা"
                                            href="site/page/1f7914a3-1c4b-11e7-8f57-286ed488c766/%e0%a6%9c%e0%a7%87%e0%a6%b2%e0%a6%be%20%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%b6%e0%a6%be%e0%a6%b8%e0%a6%a8%e0%a7%87%e0%a6%b0%20%e0%a6%b8%e0%a7%87%e0%a6%ac%e0%a6%be%e0%a6%b0%20%e0%a6%a4%e0%a6%be%e0%a6%b2%e0%a6%bf%e0%a6%95%e0%a6%be.html">জেলা
                                            প্রশাসনের সেবার তালিকা</a></li>
                                    <li><a title="কী সেবা কীভাবে পাবেন" href="http://services.portal.gov.bd/">কী
                                            সেবা কীভাবে পাবেন</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="col3 mzr-drop"><a title="স্থানীয় সরকার" href="javascript:;">স্থানীয়
                            সরকার</a>
                        <div class="mzr-content drop-four-columns">
                            <div class="one-col">
                                <h6> মেহেরপুর পৌরসভা</h6>
                                <ul class="mzr-links">
                                    <li><a title="পৌরসভা পরিচিতি"
                                            href="site/page/fd499b74-1c4a-11e7-8f57-286ed488c766/%e0%a6%aa%e0%a7%8c%e0%a6%b0%e0%a6%b8%e0%a6%ad%e0%a6%be%20%e0%a6%aa%e0%a6%b0%e0%a6%bf%e0%a6%9a%e0%a6%bf%e0%a6%a4%e0%a6%bf.html">পৌরসভা
                                            পরিচিতি</a></li>
                                    <li><a title="মেয়রের বাণী"
                                            href="site/page/41f006d4-1c4b-11e7-8f57-286ed488c766/%e0%a6%ae%e0%a7%87%e0%a7%9f%e0%a6%b0%e0%a7%87%e0%a6%b0%20%e0%a6%ac%e0%a6%be%e0%a6%a3%e0%a7%80.html">মেয়রের
                                            বাণী</a></li>
                                    <li><a title="মেয়র প্রোফাইল"
                                            href="site/page/fd9c75c4-1c4a-11e7-8f57-286ed488c766/%e0%a6%ae%e0%a7%87%e0%a7%9f%e0%a6%b0%20%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a7%8b%e0%a6%ab%e0%a6%be%e0%a6%87%e0%a6%b2.html">মেয়র
                                            প্রোফাইল</a></li>
                                    <li><a title="প্রাক্তন মেয়র/প্রশাসক"
                                            href="site/page/fd9c1a8c-1c4a-11e7-8f57-286ed488c766/%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%be%e0%a6%95%e0%a7%8d%e0%a6%a4%e0%a6%a8%20%e0%a6%ae%e0%a7%87%e0%a7%9f%e0%a6%b0/%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%b6%e0%a6%be%e0%a6%b8%e0%a6%95.html">প্রাক্তন
                                            মেয়র/প্রশাসক</a></li>
                                    <li><a title="কাউন্সিলরগন"
                                            href="site/page/41f00dfd-1c4b-11e7-8f57-286ed488c766/%e0%a6%95%e0%a6%be%e0%a6%89%e0%a6%a8%e0%a7%8d%e0%a6%b8%e0%a6%bf%e0%a6%b2%e0%a6%b0%e0%a6%97%e0%a6%a8.html">কাউন্সিলরগন</a>
                                    </li>
                                    <li><a title="যোগাযোগ"
                                            href="site/page/fd9c68ce-1c4a-11e7-8f57-286ed488c766/%e0%a6%af%e0%a7%8b%e0%a6%97%e0%a6%be%e0%a6%af%e0%a7%8b%e0%a6%97.html">যোগাযোগ</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="one-col">
                                <h6> পৌরসভার সংগঠন</h6>
                                <ul class="mzr-links">
                                    <li><a title="সিটিজেন চার্টার"
                                            href="site/page/1f7914a3-1c4b-11e7-8f57-286ed488c766/%e0%a6%b8%e0%a6%bf%e0%a6%9f%e0%a6%bf%e0%a6%9c%e0%a7%87%e0%a6%a8%20%e0%a6%9a%e0%a6%be%e0%a6%b0%e0%a7%8d%e0%a6%9f%e0%a6%be%e0%a6%b0.html">সিটিজেন
                                            চার্টার</a></li>
                                    <li><a title="সাংগঠনিক কাঠামো"
                                            href="site/page/fd9cf27c-1c4a-11e7-8f57-286ed488c766/%e0%a6%b8%e0%a6%be%e0%a6%82%e0%a6%97%e0%a6%a0%e0%a6%a8%e0%a6%bf%e0%a6%95%20%e0%a6%95%e0%a6%be%e0%a6%a0%e0%a6%be%e0%a6%ae%e0%a7%8b.html">সাংগঠনিক
                                            কাঠামো</a></li>
                                    <li><a title="কর্মচারীবৃন্দ"
                                            href="site/page/fd9cc2a3-1c4a-11e7-8f57-286ed488c766/%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%ae%e0%a6%9a%e0%a6%be%e0%a6%b0%e0%a7%80%e0%a6%ac%e0%a7%83%e0%a6%a8%e0%a7%8d%e0%a6%a6.html">কর্মচারীবৃন্দ</a>
                                    </li>
                                    <li><a title="কর্মকর্তাবৃন্দ"
                                            href="site/page/fd9cc03d-1c4a-11e7-8f57-286ed488c766/%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%ae%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%a4%e0%a6%be%e0%a6%ac%e0%a7%83%e0%a6%a8%e0%a7%8d%e0%a6%a6.html">কর্মকর্তাবৃন্দ</a>
                                    </li>
                                    <li><a title="ওয়ার্ডভিত্তিক এলাকা"
                                            href="site/page/fd9ce028-1c4a-11e7-8f57-286ed488c766/%e0%a6%93%e0%a7%9f%e0%a6%be%e0%a6%b0%e0%a7%8d%e0%a6%a1%e0%a6%ad%e0%a6%bf%e0%a6%a4%e0%a7%8d%e0%a6%a4%e0%a6%bf%e0%a6%95%20%e0%a6%8f%e0%a6%b2%e0%a6%be%e0%a6%95%e0%a6%be.html">ওয়ার্ডভিত্তিক
                                            এলাকা</a></li>
                                </ul>
                            </div>
                            <div class="one-col">
                                <h6> পৌরসভার কার্যক্রম</h6>
                                <ul class="mzr-links">
                                    <li><a title="পৌরসভার বাজেট"
                                            href="site/page/5f457dd8-1c4b-11e7-8f57-286ed488c766/%e0%a6%aa%e0%a7%8c%e0%a6%b0%e0%a6%b8%e0%a6%ad%e0%a6%be%e0%a6%b0%20%e0%a6%ac%e0%a6%be%e0%a6%9c%e0%a7%87%e0%a6%9f.html">পৌরসভার
                                            বাজেট</a></li>
                                    <li><a title="চলমান প্রকল্প"
                                            href="site/page/5f45813b-1c4b-11e7-8f57-286ed488c766/%e0%a6%9a%e0%a6%b2%e0%a6%ae%e0%a6%be%e0%a6%a8%20%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%95%e0%a6%b2%e0%a7%8d%e0%a6%aa.html">চলমান
                                            প্রকল্প</a></li>
                                    <li><a title="ডিজিটাল সেন্টার"
                                            href="site/page/01f0c9c3-1c4b-11e7-8f57-286ed488c766/%e0%a6%a1%e0%a6%bf%e0%a6%9c%e0%a6%bf%e0%a6%9f%e0%a6%be%e0%a6%b2%20%e0%a6%b8%e0%a7%87%e0%a6%a8%e0%a7%8d%e0%a6%9f%e0%a6%be%e0%a6%b0.html">ডিজিটাল
                                            সেন্টার</a></li>
                                    <li><a title="তথ্য প্রদানকারী কর্মকর্তা"
                                            href="site/officer_list/01a7f089-1c4c-11e7-8f57-286ed488c766/%e0%a6%a4%e0%a6%a5%e0%a7%8d%e0%a6%af%20%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%a6%e0%a6%be%e0%a6%a8%e0%a6%95%e0%a6%be%e0%a6%b0%e0%a7%80%20%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%ae%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%a4%e0%a6%be.html">তথ্য
                                            প্রদানকারী কর্মকর্তা</a></li>
                                    <li><a title="ভিশন এবং মিশন"
                                            href="site/page/fd9ce3c7-1c4a-11e7-8f57-286ed488c766/%e0%a6%ad%e0%a6%bf%e0%a6%b6%e0%a6%a8%20%e0%a6%8f%e0%a6%ac%e0%a6%82%20%e0%a6%ae%e0%a6%bf%e0%a6%b6%e0%a6%a8.html">ভিশন
                                            এবং মিশন</a></li>
                                    <li><a title="কার্যাবলী"
                                            href="site/page/fd9cefdc-1c4a-11e7-8f57-286ed488c766/%e0%a6%95%e0%a6%be%e0%a6%b0%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%ac%e0%a6%b2%e0%a7%80.html">কার্যাবলী</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="one-col">
                                <h6>জেলা পরিষদ</h6>
                                <ul class="mzr-links">
                                    <li><a title="প্রধান নির্বাহী কর্মকর্তার প্রোফাইল"
                                            href="site/officer_list/5a0b2a54-188a-4af2-99c8-356386b29587/%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%a7%e0%a6%be%e0%a6%a8%20%e0%a6%a8%e0%a6%bf%e0%a6%b0%e0%a7%8d%e0%a6%ac%e0%a6%be%e0%a6%b9%e0%a7%80%20%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%ae%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%a4%e0%a6%be%e0%a6%b0%20%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a7%8b%e0%a6%ab%e0%a6%be%e0%a6%87%e0%a6%b2.html">প্রধান
                                            নির্বাহী কর্মকর্তার প্রোফাইল</a></li>
                                    <li><a title="তথ্য প্রদানকারী কর্মকর্তার তথ্য"
                                            href="site/officer_list/5a0b2a54-188a-4af2-99c8-356386b29587/%e0%a6%a4%e0%a6%a5%e0%a7%8d%e0%a6%af%20%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%a6%e0%a6%be%e0%a6%a8%e0%a6%95%e0%a6%be%e0%a6%b0%e0%a7%80%20%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%ae%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%a4%e0%a6%be%e0%a6%b0%20%e0%a6%a4%e0%a6%a5%e0%a7%8d%e0%a6%af.html">তথ্য
                                            প্রদানকারী কর্মকর্তার তথ্য</a></li>
                                    <li><a title="নোটিশ বোর্ড"
                                            href="site/page/b6ff8cf8-8f10-42df-b77b-1d2f394bd100/%e0%a6%a8%e0%a7%8b%e0%a6%9f%e0%a6%bf%e0%a6%b6%20%e0%a6%ac%e0%a7%8b%e0%a6%b0%e0%a7%8d%e0%a6%a1.html">নোটিশ
                                            বোর্ড</a></li>
                                    <li><a title="ই-টেন্ডার নোটিশ"
                                            href="site/page/04847915-1c4b-11e7-8f57-286ed488c766/%e0%a6%87-%e0%a6%9f%e0%a7%87%e0%a6%a8%e0%a7%8d%e0%a6%a1%e0%a6%be%e0%a6%b0%20%e0%a6%a8%e0%a7%8b%e0%a6%9f%e0%a6%bf%e0%a6%b6.html">ই-টেন্ডার
                                            নোটিশ</a></li>
                                    <li><a title="ঠিকাদারী লাইসেন্স নবায়ন বিজ্ঞপ্তি ২০২০-২০২১"
                                            href="http://www.zpmeherpur.gov.bd/?p=1645">ঠিকাদারী লাইসেন্স নবায়ন
                                            বিজ্ঞপ্তি ২০২০-২০২১</a></li>
                                    <li><a title="জেলা পরিষদ অফিস"
                                            href="site/page/042dd0bb-1c4b-11e7-8f57-286ed488c766/%e0%a6%9c%e0%a7%87%e0%a6%b2%e0%a6%be%20%e0%a6%aa%e0%a6%b0%e0%a6%bf%e0%a6%b7%e0%a6%a6%20%e0%a6%85%e0%a6%ab%e0%a6%bf%e0%a6%b8.html">জেলা
                                            পরিষদ অফিস</a></li>
                                    <li><a title="জেলা পরিষদে কর্মরত কর্মকর্তা/ কর্মচারীবৃন্দঃ"
                                            href="site/page/04846faa-1c4b-11e7-8f57-286ed488c766/%e0%a6%9c%e0%a7%87%e0%a6%b2%e0%a6%be%20%e0%a6%aa%e0%a6%b0%e0%a6%bf%e0%a6%b7%e0%a6%a6%e0%a7%87%20%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%ae%e0%a6%b0%e0%a6%a4%20%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%ae%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%a4%e0%a6%be/%20%e0%a6%95%e0%a6%b0%e0%a7%8d%e0%a6%ae%e0%a6%9a%e0%a6%be%e0%a6%b0%e0%a7%80%e0%a6%ac%e0%a7%83%e0%a6%a8%e0%a7%8d%e0%a6%a6%e0%a6%83.html">জেলা
                                            পরিষদে কর্মরত কর্মকর্তা/ কর্মচারীবৃন্দঃ</a></li>
                                    <li><a title="জেলা পরিষদের বাধ্যতামূলক কার্যাবলীঃ"
                                            href="site/page/047520e6-1c4b-11e7-8f57-286ed488c766/%e0%a6%9c%e0%a7%87%e0%a6%b2%e0%a6%be%20%e0%a6%aa%e0%a6%b0%e0%a6%bf%e0%a6%b7%e0%a6%a6%e0%a7%87%e0%a6%b0%20%e0%a6%ac%e0%a6%be%e0%a6%a7%e0%a7%8d%e0%a6%af%e0%a6%a4%e0%a6%be%e0%a6%ae%e0%a7%82%e0%a6%b2%e0%a6%95%20%e0%a6%95%e0%a6%be%e0%a6%b0%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%ac%e0%a6%b2%e0%a7%80%e0%a6%83.html">জেলা
                                            পরিষদের বাধ্যতামূলক কার্যাবলীঃ</a></li>
                                    <li><a title="ডাকবাংলো"
                                            href="site/page/047518c2-1c4b-11e7-8f57-286ed488c766/%e0%a6%a1%e0%a6%be%e0%a6%95%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a7%8b.html">ডাকবাংলো</a>
                                    </li>
                                    <li><a title="প্রগ্রেস রিপোর্ট"
                                            href="site/page/04751e06-1c4b-11e7-8f57-286ed488c766/%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%97%e0%a7%8d%e0%a6%b0%e0%a7%87%e0%a6%b8%20%e0%a6%b0%e0%a6%bf%e0%a6%aa%e0%a7%8b%e0%a6%b0%e0%a7%8d%e0%a6%9f.html">প্রগ্রেস
                                            রিপোর্ট</a></li>
                                    <li><a title="যোগাযোগ"
                                            href="site/page/04751057-1c4b-11e7-8f57-286ed488c766/%e0%a6%af%e0%a7%8b%e0%a6%97%e0%a6%be%e0%a6%af%e0%a7%8b%e0%a6%97.html">যোগাযোগ</a>
                                    </li>
                                    <li><a title="সিটিজেন চার্টার"
                                            href="site/page/ca2d4988-1e37-4c84-a795-93bb5f666c17/%e0%a6%b8%e0%a6%bf%e0%a6%9f%e0%a6%bf%e0%a6%9c%e0%a7%87%e0%a6%a8%20%e0%a6%9a%e0%a6%be%e0%a6%b0%e0%a7%8d%e0%a6%9f%e0%a6%be%e0%a6%b0.html">সিটিজেন
                                            চার্টার</a></li>
                                    <li><a title="২০১৯-২০২০ অর্থ বছরের বাজেট সারাংশ"
                                            href="site/page/04752055-1c4b-11e7-8f57-286ed488c766/%e0%a7%a8%e0%a7%a6%e0%a7%a7%e0%a7%af-%e0%a7%a8%e0%a7%a6%e0%a7%a8%e0%a7%a6%20%e0%a6%85%e0%a6%b0%e0%a7%8d%e0%a6%a5%20%e0%a6%ac%e0%a6%9b%e0%a6%b0%e0%a7%87%e0%a6%b0%20%e0%a6%ac%e0%a6%be%e0%a6%9c%e0%a7%87%e0%a6%9f%20%e0%a6%b8%e0%a6%be%e0%a6%b0%e0%a6%be%e0%a6%82%e0%a6%b6.html">২০১৯-২০২০
                                            অর্থ বছরের বাজেট সারাংশ</a></li>
                                    <li><a title="পূর্বতন জেলা পরিষদের চেয়ারম্যান"
                                            href="site/page/044a15b5-1c4b-11e7-8f57-286ed488c766/%e0%a6%aa%e0%a7%82%e0%a6%b0%e0%a7%8d%e0%a6%ac%e0%a6%a4%e0%a6%a8%20%e0%a6%9c%e0%a7%87%e0%a6%b2%e0%a6%be%20%e0%a6%aa%e0%a6%b0%e0%a6%bf%e0%a6%b7%e0%a6%a6%e0%a7%87%e0%a6%b0%20%e0%a6%9a%e0%a7%87%e0%a6%af%e0%a6%bc%e0%a6%be%e0%a6%b0%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8.html">পূর্বতন
                                            জেলা পরিষদের চেয়ারম্যান</a></li>
                                    <li><a title="চেয়ারম্যানের বাণী"
                                            href="site/page/043d128d-1c4b-11e7-8f57-286ed488c766/%e0%a6%9a%e0%a7%87%e0%a7%9f%e0%a6%be%e0%a6%b0%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8%e0%a7%87%e0%a6%b0%20%e0%a6%ac%e0%a6%be%e0%a6%a3%e0%a7%80.html">চেয়ারম্যানের
                                            বাণী</a></li>
                                    <li><a title="সাংগঠনিক কাঠামো"
                                            href="site/page/043cfc03-1c4b-11e7-8f57-286ed488c766/%e0%a6%b8%e0%a6%be%e0%a6%82%e0%a6%97%e0%a6%a0%e0%a6%a8%e0%a6%bf%e0%a6%95%20%e0%a6%95%e0%a6%be%e0%a6%a0%e0%a6%be%e0%a6%ae%e0%a7%8b.html">সাংগঠনিক
                                            কাঠামো</a></li>
                                </ul>
                            </div>
                            <div class="one-col">
                                <h6>LGSP-2</h6>
                                <ul class="mzr-links">
                                    <li><a title="মেহেরপুর সদর"
                                            href="site/page/54203e21-1c4b-11e7-8f57-286ed488c766/%e0%a6%ae%e0%a7%87%e0%a6%b9%e0%a7%87%e0%a6%b0%e0%a6%aa%e0%a7%81%e0%a6%b0%20%e0%a6%b8%e0%a6%a6%e0%a6%b0.html">মেহেরপুর
                                            সদর</a></li>
                                    <li><a title="মুজিবনগর"
                                            href="site/page/542057b0-1c4b-11e7-8f57-286ed488c766/%e0%a6%ae%e0%a7%81%e0%a6%9c%e0%a6%bf%e0%a6%ac%e0%a6%a8%e0%a6%97%e0%a6%b0.html">মুজিবনগর</a>
                                    </li>
                                    <li><a title="গাংনী"
                                            href="site/page/54205bdb-1c4b-11e7-8f57-286ed488c766/%e0%a6%97%e0%a6%be%e0%a6%82%e0%a6%a8%e0%a7%80.html">গাংনী</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="col4 mzr-drop"><a title="সরকারি অফিস" href="javascript:;">সরকারি অফিস</a>
                        <div class="mzr-content drop-four-columns">
                            <div class="one-col">
                                <h6>আইন-শৃঙ্খলা ও নিরাপত্তা বিষয়ক</h6>
                                <ul class="mzr-links">
                                    <li><a title="পুলিশ সুপারের কার্যালয়" href="http://police.meherpur.gov.bd/">পুলিশ
                                            সুপারের কার্যালয়</a>
                                    </li>
                                    <li><a title="জেলা আনসার ও ভিডিপি অফিস"
                                            href="http://ansarvdp.meherpur.gov.bd/">জেলা আনসার ও ভিডিপি
                                            অফিস</a>
                                    </li>
                                    <li><a title="ফায়ার সার্ভিস ও সিভিল ডিফেন্স"
                                            href="http://fireservice.meherpur.gov.bd/">ফায়ার সার্ভিস ও সিভিল
                                            ডিফেন্স</a></li>
                                    <li><a title="মাদবদ্রব্য নিয়ন্ত্রন অধিদপ্তর"
                                            href="http://dnc.meherpur.gov.bd/">মাদবদ্রব্য নিয়ন্ত্রন
                                            অধিদপ্তর</a>
                                    </li>
                                    <li><a title="মেহেরপুর জেলা কারাগার।"
                                            href="http://prison.meherpur.gov.bd/">মেহেরপুর জেলা কারাগার।</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="one-col">
                                <h6>শিক্ষা ও সংস্কৃতি</h6>
                                <ul class="mzr-links">
                                    <li><a title="বাংলাদেশ শিশু একাডেমি"
                                            href="http://shishuacademy.meherpur.gov.bd/">বাংলাদেশ শিশু
                                            একাডেমি</a>
                                    </li>
                                    <li><a title="জেলা উপানুষ্ঠানিক শিক্ষা ব্যুরো"
                                            href="http://bnfe.meherpur.gov.bd/">জেলা উপানুষ্ঠানিক শিক্ষা
                                            ব্যুরো</a>
                                    </li>
                                    <li><a title="জেলা শিক্ষা অফিস" href="http://deo.meherpur.gov.bd/">জেলা
                                            শিক্ষা
                                            অফিস</a></li>
                                    <li><a title="জেলা ক্রীড়া অফিস" href="http://sports.meherpur.gov.bd/">জেলা
                                            ক্রীড়া অফিস</a></li>
                                    <li><a title="জেলা প্রাথমিক শিক্ষা অফিস" href="http://dpe.meherpur.gov.bd/">জেলা
                                            প্রাথমিক শিক্ষা অফিস</a></li>
                                    <li><a title="জেলা শিল্পকলা একাডেমি"
                                            href="http://shilpakala.meherpur.gov.bd/">জেলা শিল্পকলা একাডেমি</a>
                                    </li>
                                    <li><a title="জেলা গণগ্রন্থাগার" href="http://publiclibrary.meherpur.gov.bd/">জেলা
                                            গণগ্রন্থাগার</a>
                                    </li>
                                    <li><a title="প্রাথমিক শিক্ষক প্রশিক্ষণ কেন্দ্র"
                                            href="http://pttc.meherpur.gov.bd/">প্রাথমিক শিক্ষক প্রশিক্ষণ
                                            কেন্দ্র</a></li>
                                    <li><a title="সরকারি শিশু পরিবার (বালক), মেহেরপুর"
                                            href="http://sspb.meherpur.gov.bd/">সরকারি শিশু পরিবার (বালক),
                                            মেহেরপুর</a></li>
                                </ul>
                            </div>
                            <div class="one-col">
                                <h6>কৃষি ও খাদ্য বিষয়ক</h6>
                                <ul class="mzr-links">
                                    <li><a title="জেলা খাদ্য অফিস" href="http://food.meherpur.gov.bd/">জেলা
                                            খাদ্য
                                            অফিস</a></li>
                                    <li><a title="কৃষি সম্প্রসারণ অধিদপ্তর" href="http://dae.meherpur.gov.bd/">কৃষি
                                            সম্প্রসারণ অধিদপ্তর</a></li>
                                    <li><a title="জেলা প্রাণিসম্পদ অফিস" href="http://dls.meherpur.gov.bd/">জেলা
                                            প্রাণিসম্পদ অফিস</a></li>
                                    <li><a title="জেলা কৃষি বিপনন অফিস" href="http://dam.meherpur.gov.bd/">জেলা
                                            কৃষি
                                            বিপনন অফিস</a></li>
                                    <li><a title="জেলা মৎস্য অফিস" href="http://fisheries.meherpur.gov.bd/">জেলা
                                            মৎস্য অফিস</a></li>
                                    <li><a title="বিএডিসি (বীজ)" href="http://badc.meherpur.gov.bd/">বিএডিসি
                                            (বীজ)</a></li>
                                    <li><a title="জেলা বীজ প্রত্যয়ন অফিস" href="http://sca.meherpur.gov.bd/">জেলা
                                            বীজ প্রত্যয়ন অফিস</a></li>
                                    <li><a title="জেলা তুলা উন্নয়ন বোর্ড অফিস" href="http://cdb.meherpur.gov.bd/">জেলা
                                            তুলা উন্নয়ন বোর্ড অফিস</a>
                                    </li>
                                    <li><a title="বাংলাদেশ নিরাপদ খাদ্য কর্তৃপক্ষ, জেলা কার্যালয়, মেহেরপুর"
                                            href="http://bfsa.meherpur.gov.bd/">বাংলাদেশ নিরাপদ খাদ্য
                                            কর্তৃপক্ষ,
                                            জেলা কার্যালয়, মেহেরপুর</a></li>
                                </ul>
                            </div>
                            <div class="one-col">
                                <h6>প্রকৌশল ও তথ্য যোগাযোগ প্রযুক্তি</h6>
                                <ul class="mzr-links">
                                    <li><a title="এলজিইডি" href="http://lged.meherpur.gov.bd/">এলজিইডি</a>
                                    </li>
                                    <li><a title="শিক্ষা প্রকৌশল অধিদপ্তর" href="http://eed.meherpur.gov.bd/">শিক্ষা
                                            প্রকৌশল অধিদপ্তর</a></li>
                                    <li><a title="জনস্বাস্থ্য প্রকৌশল অধিদপ্তর"
                                            href="http://dphe.meherpur.gov.bd/">জনস্বাস্থ্য প্রকৌশল
                                            অধিদপ্তর</a>
                                    </li>
                                    <li><a title="বিটিসিএল" href="http://btcl.meherpur.gov.bd/">বিটিসিএল</a>
                                    </li>
                                    <li><a title="মেহেরপুর বিদ্যুৎ সরবরাহ, ওজোপাডিকো, মেহেরপুর"
                                            href="http://wzpdcl.meherpur.gov.bd/">মেহেরপুর বিদ্যুৎ সরবরাহ,
                                            ওজোপাডিকো, মেহেরপুর</a></li>
                                    <li><a title="মেহেরপুর পল্লী বিদ্যুৎ সমিতি"
                                            href="http://pbs.meherpur.gov.bd/">মেহেরপুর পল্লী বিদ্যুৎ সমিতি</a>
                                    </li>
                                    <li><a title="শিল্প সহায়ক কেন্দ্র" href="http://bscic.meherpur.gov.bd/">শিল্প
                                            সহায়ক কেন্দ্র</a></li>
                                    <li><a title="মেহেরপুুর প্রধান ডাকঘর"
                                            href="http://post.meherpur.gov.bd/">মেহেরপুুর প্রধান ডাকঘর</a></li>
                                    <li><a title="গণপূর্ত বিভাগ" href="http://pwd.meherpur.gov.bd/">গণপূর্ত
                                            বিভাগ</a></li>
                                    <li><a title="সড়ক ও জনপথ অধিদপ্তর" href="http://rhd.meherpur.gov.bd/">সড়ক
                                            ও জনপথ
                                            অধিদপ্তর</a></li>
                                    <li><a title="জেলা ত্রাণ ও পুনর্বাসন অফিস"
                                            href="http://drro.meherpur.gov.bd/">জেলা ত্রাণ ও পুনর্বাসন অফিস</a>
                                    </li>
                                    <li><a title="তথ্য ও যোগাযোগ প্রযুক্তি অধিদপ্তর, মেহেরপুর"
                                            href="http://doict.meherpur.gov.bd/">তথ্য ও যোগাযোগ প্রযুক্তি
                                            অধিদপ্তর,
                                            মেহেরপুর</a></li>
                                    <li><a title="বাংলাদেশ পানি উন্নয়ন বোর্ড, মেহেরপুর"
                                            href="http://bwdb.meherpur.gov.bd/">বাংলাদেশ পানি উন্নয়ন বোর্ড,
                                            মেহেরপুর</a></li>
                                </ul>
                            </div>
                            <div class="one-col">
                                <h6>মানব সম্পদ উন্নয়ন বিষয়ক</h6>
                                <ul class="mzr-links">
                                    <li><a title="ইসলামিক ফাউন্ডেশন"
                                            href="http://islamicfoundation.meherpur.gov.bd/">ইসলামিক
                                            ফাউন্ডেশন</a>
                                    </li>
                                    <li><a title="বাংলাদেশ পল্লী উন্নয়ন বোর্ড"
                                            href="http://brdb.meherpur.gov.bd/">বাংলাদেশ পল্লী উন্নয়ন বোর্ড</a>
                                    </li>
                                    <li><a title="জেলা সমবায় অফিস" href="http://cooparative.meherpur.gov.bd/">জেলা
                                            সমবায় অফিস</a></li>
                                    <li><a title="জেলা মহিলা বিষয়ক কার্যালয়" href="http://dwa.meherpur.gov.bd/">জেলা
                                            মহিলা বিষয়ক কার্যালয়</a>
                                    </li>
                                    <li><a title="জেলা সমাজসেবা কার্যালয়" href="http://dss.meherpur.gov.bd/">জেলা
                                            সমাজসেবা কার্যালয়</a></li>
                                    <li><a title="জেলা যুব উন্নয়ন অধিদপ্তর" href="http://youth.meherpur.gov.bd/">জেলা
                                            যুব উন্নয়ন অধিদপ্তর</a>
                                    </li>
                                    <li><a title="শহর সমাজসেবা কার্যালয়, মেহেরপুর"
                                            href="http://ucd.meherpur.gov.bd/">শহর সমাজসেবা কার্যালয়,
                                            মেহেরপুর</a>
                                    </li>
                                    <li><a title="আমার বাড়ী আমার খামার প্রকল্প, জেলা সমন্বয়কারীর কার্যালয়, মেহেরপুর"
                                            href="http://abak.meherpur.gov.bd/">আমার বাড়ী আমার খামার প্রকল্প,
                                            জেলা
                                            সমন্বয়কারীর কার্যালয়, মেহেরপুর</a></li>
                                    <li><a title="প্রতিবন্ধী সেবা ও সাহায্য কেন্দ্র, মেহেরপুর"
                                            href="http://psosk.meherpur.gov.bd/">প্রতিবন্ধী সেবা ও সাহায্য
                                            কেন্দ্র,
                                            মেহেরপুর</a></li>
                                    <li><a title="মেহেরপুর কারিগরি প্রশিক্ষণ কেন্দ্র"
                                            href="http://ttc.meherpur.gov.bd/">মেহেরপুর কারিগরি প্রশিক্ষণ
                                            কেন্দ্র</a></li>
                                    <li><a title="জেলা হিন্দু ধর্মীয় কল্যাণ ট্রাস্ট অফিস"
                                            href="http://hrwt.meherpur.gov.bd/">জেলা হিন্দু ধর্মীয় কল্যাণ
                                            ট্রাস্ট
                                            অফিস</a></li>
                                    <li><a title="সমন্বিত দৃষ্টি প্রতিবন্ধী শিক্ষা কার্যক্রম, মেহেরপুর"
                                            href="http://iviei.meherpur.gov.bd/">সমন্বিত দৃষ্টি প্রতিবন্ধী
                                            শিক্ষা
                                            কার্যক্রম, মেহেরপুর</a></li>
                                </ul>
                            </div>
                            <div class="one-col">
                                <h6>স্বাস্থ্য বিষয়ক</h6>
                                <ul class="mzr-links">
                                    <li><a title="জেলা পরিবার পরিকল্পনা অফিস" href="http://fpo.meherpur.gov.bd/">জেলা
                                            পরিবার পরিকল্পনা অফিস</a>
                                    </li>
                                    <li><a title="সিভিল সার্জন অফিস" href="http://cs.meherpur.gov.bd/">সিভিল
                                            সার্জন
                                            অফিস</a></li>
                                    <li><a title="জেলা বন অফিস" href="http://forest.meherpur.gov.bd/">জেলা বন
                                            অফিস</a></li>
                                    <li><a title="জেলা বিএসটিআই অফিস" href="http://bsti.meherpur.gov.bd/">জেলা
                                            বিএসটিআই অফিস</a></li>
                                    <li><a title="জেলা পরিবেশ অধিদপ্তর" href="http://doe.meherpur.gov.bd/">জেলা
                                            পরিবেশ অধিদপ্তর</a></li>
                                </ul>
                            </div>
                            <div class="one-col">
                                <h6>ভূমি ও রাজস্ব</h6>
                                <ul class="mzr-links">
                                    <li><a title="উপ কর কমিশনার অফিস সার্কেল-২" href="http://tax.meherpur.gov.bd/">উপ
                                            কর কমিশনার অফিস সার্কেল-২</a>
                                    </li>
                                    <li><a title="জেলা সঞ্চয় অফিস" href="http://savings.meherpur.gov.bd/">জেলা
                                            সঞ্চয় অফিস</a></li>
                                    <li><a title="জেলা হিসাবরক্ষণ অফিস" href="http://dao.meherpur.gov.bd/">জেলা
                                            হিসাবরক্ষণ অফিস</a></li>
                                    <li><a title="জেলা কাস্টমস, এক্সাইজ ও ভ্যাট অফিস"
                                            href="http://customs.meherpur.gov.bd/">জেলা কাস্টমস, এক্সাইজ ও
                                            ভ্যাট
                                            অফিস</a></li>
                                    <li><a title="জেলা রেজিষ্ট্রারের কার্যালয়" href="http://dr.meherpur.gov.bd/">জেলা
                                            রেজিষ্ট্রারের কার্যালয়</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="one-col">
                                <h6>অন্যান্য অফিসসমূহ</h6>
                                <ul class="mzr-links">
                                    <li><a title="আঞ্চলিক পাসপোর্ট অফিস"
                                            href="http://passport.meherpur.gov.bd/">আঞ্চলিক পাসপোর্ট অফিস</a>
                                    </li>
                                    <li><a title="জেলা নির্বাচন অফিস" href="http://ec.meherpur.gov.bd/">জেলা
                                            নির্বাচন অফিস</a></li>
                                    <li><a title="জেলা পরিসংখ্যান অফিস" href="http://bbs.meherpur.gov.bd/">জেলা
                                            পরিসংখ্যান অফিস</a></li>
                                    <li><a title="জেলা তথ্য অফিস" href="http://info.meherpur.gov.bd/">জেলা
                                            তথ্য
                                            অফিস</a></li>
                                    <li><a title="জেলা বিআরটিএ অফিস" href="http://brta.meherpur.gov.bd/">জেলা
                                            বিআরটিএ অফিস</a></li>
                                    <li><a title="জেলা ভোক্তা অধিকার সংরক্ষণ অফিস"
                                            href="http://dncrp.meherpur.gov.bd/">জেলা ভোক্তা অধিকার সংরক্ষণ
                                            অফিস</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="col5 mzr-drop"><a title="অন্যান্য প্রতিষ্ঠান" href="javascript:;">অন্যান্য
                            প্রতিষ্ঠান</a>
                        <div class="mzr-content drop-four-columns">
                            <div class="one-col">
                                <h6>শিক্ষা</h6>
                                <ul class="mzr-links">
                                    <li><a title="এমপিওভুক্ত শিক্ষা প্রতিষ্ঠানের তালিক"
                                            href="site/page/d26959c8-e44d-466b-b133-3f5d0b10a235/%e0%a6%8f%e0%a6%ae%e0%a6%aa%e0%a6%bf%e0%a6%93%e0%a6%ad%e0%a7%81%e0%a6%95%e0%a7%8d%e0%a6%a4%20%e0%a6%b6%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%b7%e0%a6%be%20%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%a4%e0%a6%bf%e0%a6%b7%e0%a7%8d%e0%a6%a0%e0%a6%be%e0%a6%a8%e0%a7%87%e0%a6%b0%20%e0%a6%a4%e0%a6%be%e0%a6%b2%e0%a6%bf%e0%a6%95.html">এমপিওভুক্ত
                                            শিক্ষা প্রতিষ্ঠানের তালিক</a></li>
                                    <li><a title="নন এমপিওভুক্ত শিক্ষা প্রতিষ্ঠানের তালিক"
                                            href="site/page/fc389299-7fcb-4f2a-9320-37731babb0fe/%e0%a6%a8%e0%a6%a8%20%e0%a6%8f%e0%a6%ae%e0%a6%aa%e0%a6%bf%e0%a6%93%e0%a6%ad%e0%a7%81%e0%a6%95%e0%a7%8d%e0%a6%a4%20%e0%a6%b6%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%b7%e0%a6%be%20%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%a4%e0%a6%bf%e0%a6%b7%e0%a7%8d%e0%a6%a0%e0%a6%be%e0%a6%a8%e0%a7%87%e0%a6%b0%20%e0%a6%a4%e0%a6%be%e0%a6%b2%e0%a6%bf%e0%a6%95.html">নন
                                            এমপিওভুক্ত শিক্ষা প্রতিষ্ঠানের তালিক</a></li>
                                    <li><a title="প্রাথমিক বিদ্যালয়"
                                            href="site/page/1be5c009-1c4b-11e7-8f57-286ed488c766/%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%be%e0%a6%a5%e0%a6%ae%e0%a6%bf%e0%a6%95%20%e0%a6%ac%e0%a6%bf%e0%a6%a6%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%b2%e0%a7%9f.html">প্রাথমিক
                                            বিদ্যালয়</a></li>
                                    <li><a title="মাধ্যমিক বিদ্যালয়"
                                            href="site/page/1be58baf-1c4b-11e7-8f57-286ed488c766/%e0%a6%ae%e0%a6%be%e0%a6%a7%e0%a7%8d%e0%a6%af%e0%a6%ae%e0%a6%bf%e0%a6%95%20%e0%a6%ac%e0%a6%bf%e0%a6%a6%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%b2%e0%a7%9f.html">মাধ্যমিক
                                            বিদ্যালয়</a></li>
                                    <li><a title="নিম্ন মাধ্যমিক বিদ্যালয়"
                                            href="site/page/1be5a3ec-1c4b-11e7-8f57-286ed488c766/%e0%a6%a8%e0%a6%bf%e0%a6%ae%e0%a7%8d%e0%a6%a8%20%e0%a6%ae%e0%a6%be%e0%a6%a7%e0%a7%8d%e0%a6%af%e0%a6%ae%e0%a6%bf%e0%a6%95%20%e0%a6%ac%e0%a6%bf%e0%a6%a6%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%b2%e0%a7%9f.html">নিম্ন
                                            মাধ্যমিক বিদ্যালয়</a></li>
                                    <li><a title="জেলার সকল শিক্ষা প্রতিষ্ঠানে"
                                            href="site/page/e0c4f467-2e04-43cf-b9aa-ac5e519930e1/%e0%a6%9c%e0%a7%87%e0%a6%b2%e0%a6%be%e0%a6%b0%20%e0%a6%b8%e0%a6%95%e0%a6%b2%20%e0%a6%b6%e0%a6%bf%e0%a6%95%e0%a7%8d%e0%a6%b7%e0%a6%be%20%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%a4%e0%a6%bf%e0%a6%b7%e0%a7%8d%e0%a6%a0%e0%a6%be%e0%a6%a8%e0%a7%87.html">জেলার
                                            সকল শিক্ষা প্রতিষ্ঠানে</a></li>
                                </ul>
                            </div>
                            <div class="one-col">
                                <h6>সংস্থা/সংগঠন</h6>
                                <ul class="mzr-links">
                                    <li><a title="বাংলাদেশ রেড ক্রিসেট সোসাইটি, মেহেরপুর ইউনিট"
                                            href="site/page/1be60a79-1c4b-11e7-8f57-286ed488c766/%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b2%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b6%20%e0%a6%b0%e0%a7%87%e0%a6%a1%20%e0%a6%95%e0%a7%8d%e0%a6%b0%e0%a6%bf%e0%a6%b8%e0%a7%87%e0%a6%9f%20%e0%a6%b8%e0%a7%8b%e0%a6%b8%e0%a6%be%e0%a6%87%e0%a6%9f%e0%a6%bf%2c%20%e0%a6%ae%e0%a7%87%e0%a6%b9%e0%a7%87%e0%a6%b0%e0%a6%aa%e0%a7%81%e0%a6%b0%20%e0%a6%87%e0%a6%89%e0%a6%a8%e0%a6%bf%e0%a6%9f.html">বাংলাদেশ
                                            রেড ক্রিসেট সোসাইটি, মেহেরপুর ইউনিট</a></li>
                                    <li><a title="জেলা ক্রীড়া সংস্থা, মেহেরপুর।"
                                            href="site/page/1fda4c13-1c4b-11e7-8f57-286ed488c766/%e0%a6%9c%e0%a7%87%e0%a6%b2%e0%a6%be%20%e0%a6%95%e0%a7%8d%e0%a6%b0%e0%a7%80%e0%a6%a1%e0%a6%bc%e0%a6%be%20%e0%a6%b8%e0%a6%82%e0%a6%b8%e0%a7%8d%e0%a6%a5%e0%a6%be%2c%20%e0%a6%ae%e0%a7%87%e0%a6%b9%e0%a7%87%e0%a6%b0%e0%a6%aa%e0%a7%81%e0%a6%b0%e0%a5%a4.html">জেলা
                                            ক্রীড়া সংস্থা, মেহেরপুর।</a></li>
                                    <li><a title="জেলা মহিলা ক্রীড়া সংস্থা, মেহেরপুর।"
                                            href="site/page/1fda4cb7-1c4b-11e7-8f57-286ed488c766/%e0%a6%9c%e0%a7%87%e0%a6%b2%e0%a6%be%20%e0%a6%ae%e0%a6%b9%e0%a6%bf%e0%a6%b2%e0%a6%be%20%e0%a6%95%e0%a7%8d%e0%a6%b0%e0%a7%80%e0%a6%a1%e0%a6%bc%e0%a6%be%20%e0%a6%b8%e0%a6%82%e0%a6%b8%e0%a7%8d%e0%a6%a5%e0%a6%be%2c%20%e0%a6%ae%e0%a7%87%e0%a6%b9%e0%a7%87%e0%a6%b0%e0%a6%aa%e0%a7%81%e0%a6%b0%e0%a5%a4.html">জেলা
                                            মহিলা ক্রীড়া সংস্থা, মেহেরপুর।</a></li>
                                    <li><a title="ফুটবল এসোসিয়েশন"
                                            href="site/page/1fda4fa2-1c4b-11e7-8f57-286ed488c766/%e0%a6%ab%e0%a7%81%e0%a6%9f%e0%a6%ac%e0%a6%b2%20%e0%a6%8f%e0%a6%b8%e0%a7%8b%e0%a6%b8%e0%a6%bf%e0%a6%af%e0%a6%bc%e0%a7%87%e0%a6%b6%e0%a6%a8.html">ফুটবল
                                            এসোসিয়েশন</a></li>
                                    <li><a title="পাবলিক লাইব্রেরি"
                                            href="site/page/1fda5162-1c4b-11e7-8f57-286ed488c766/%e0%a6%aa%e0%a6%be%e0%a6%ac%e0%a6%b2%e0%a6%bf%e0%a6%95%20%e0%a6%b2%e0%a6%be%e0%a6%87%e0%a6%ac%e0%a7%8d%e0%a6%b0%e0%a7%87%e0%a6%b0%e0%a6%bf.html">পাবলিক
                                            লাইব্রেরি</a></li>
                                </ul>
                            </div>
                            <div class="one-col">
                                <h6>বেসরকারি প্রতিষ্ঠান</h6>
                                <ul class="mzr-links">
                                    <li><a title="এনজিও সমূহের নাম"
                                            href="site/page/1b2809ef-1c4b-11e7-8f57-286ed488c766/%e0%a6%8f%e0%a6%a8%e0%a6%9c%e0%a6%bf%e0%a6%93%20%e0%a6%b8%e0%a6%ae%e0%a7%82%e0%a6%b9%e0%a7%87%e0%a6%b0%20%e0%a6%a8%e0%a6%be%e0%a6%ae.html">এনজিও
                                            সমূহের নাম</a></li>
                                    <li><a title="সরকারী ব্যাংকসমূহ"
                                            href="site/page/1be5d5c5-1c4b-11e7-8f57-286ed488c766/%e0%a6%b8%e0%a6%b0%e0%a6%95%e0%a6%be%e0%a6%b0%e0%a7%80%20%e0%a6%ac%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%82%e0%a6%95%e0%a6%b8%e0%a6%ae%e0%a7%82%e0%a6%b9.html">সরকারী
                                            ব্যাংকসমূহ</a></li>
                                    <li><a title="বীমা"
                                            href="site/page/1be5b628-1c4b-11e7-8f57-286ed488c766/%e0%a6%ac%e0%a7%80%e0%a6%ae%e0%a6%be.html">বীমা</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="one-col">
                                <h6>ধর্মীয় প্রতিষ্ঠান</h6>
                                <ul class="mzr-links">
                                    <li><a title="মেহেরপুর জেলার মসজিদ"
                                            href="site/view/religious_institutes/%e0%a6%ae%e0%a7%87%e0%a6%b9%e0%a7%87%e0%a6%b0%e0%a6%aa%e0%a7%81%e0%a6%b0%20%e0%a6%9c%e0%a7%87%e0%a6%b2%e0%a6%be%e0%a6%b0%20%e0%a6%ae%e0%a6%b8%e0%a6%9c%e0%a6%bf%e0%a6%a6.html">মেহেরপুর
                                            জেলার মসজিদ</a></li>
                                    <li><a title="মন্দিরসমূহ"
                                            href="site/page/1fce2231-1c4b-11e7-8f57-286ed488c766/%e0%a6%ae%e0%a6%a8%e0%a7%8d%e0%a6%a6%e0%a6%bf%e0%a6%b0%e0%a6%b8%e0%a6%ae%e0%a7%82%e0%a6%b9.html">মন্দিরসমূহ</a>
                                    </li>
                                    <li><a title="গীর্জাসমূহ"
                                            href="site/page/1feafba2-1c4b-11e7-8f57-286ed488c766/%e0%a6%97%e0%a7%80%e0%a6%b0%e0%a7%8d%e0%a6%9c%e0%a6%be%e0%a6%b8%e0%a6%ae%e0%a7%82%e0%a6%b9.html">গীর্জাসমূহ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="col6 mzr-drop"><a title="গ্যালারি" href="javascript:;">গ্যালারি</a>
                        <div class="mzr-content drop-two-columns">
                            <div class="one-col">
                                <h6></h6>
                                <ul class="mzr-links">
                                    <li><a title="ফটোগ্যালারি"
                                            href="site/view/photogallery/%e0%a6%ab%e0%a6%9f%e0%a7%8b%e0%a6%97%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%b2%e0%a6%be%e0%a6%b0%e0%a6%bf.html">ফটোগ্যালারি</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="one-col">
                                <h6></h6>
                                <ul class="mzr-links">
                                    <li><a title="ভিডিও গ্যালারি"
                                            href="site/view/video-gallery/%e0%a6%ad%e0%a6%bf%e0%a6%a1%e0%a6%bf%e0%a6%93%20%e0%a6%97%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%b2%e0%a6%be%e0%a6%b0%e0%a6%bf.html">ভিডিও
                                            গ্যালারি</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="col7 mzr-drop"><a title="ই-সেবা" href="javascript:;">ই-সেবা</a>
                        <div class="mzr-content drop-two-columns">
                            <div class="one-col">
                                <h6> জেলা ই সেবা কেন্দ্র</h6>
                                <ul class="mzr-links">
                                    <li><a title="নাগরিক আবেদন"
                                            href="http://www.nothi.gov.bd/dak_nagoriks/NagorikAbedon">নাগরিক
                                            আবেদন</a></li>
                                    <li><a title="দাপ্তরিক আবেদন" href="https://www.nothi.gov.bd/login">দাপ্তরিক
                                            আবেদন</a></li>
                                    <li><a title="নকলের জন্য আবেদন"
                                            href="http://www.nothi.gov.bd/dak_nagoriks/NagorikAbedon">নকলের
                                            জন্য
                                            আবেদন</a></li>
                                </ul>
                            </div>
                            <div class="one-col">
                                <h6>জাতীয় ই সেবা </h6>
                                <ul class="mzr-links">
                                    <li><a title="বাংলাদেশ হাইটেক পার্ক"
                                            href="site/page/5735f409-c037-48ca-85c5-51a4f90f613d.html">বাংলাদেশ
                                            হাইটেক পার্ক</a></li>
                                    <li><a title="সরকারি ফরম ডাউনলোড" href="http://www.forms.gov.bd/">সরকারি
                                            ফরম
                                            ডাউনলোড</a></li>
                                    <li><a title="ই তথ্য কোষ" href="http://www.infokosh.gov.bd/">ই তথ্য
                                            কোষ</a></li>
                                    <li><a title="ই বুক" href="http://www.ebook.gov.bd/">ই বুক</a></li>
                                    <li><a title="কৃষি তথ্য সার্ভিস" href="http://www.ais.gov.bd/">কৃষি তথ্য
                                            সার্ভিস</a></li>
                                </ul>
                            </div>
                            <div class="one-col">
                                <h6>ইউনিয়ন তথ্য ও সেবা কেন্দ্র</h6>
                                <ul class="mzr-links">
                                    <li><a title="উদ্যোক্তা ব্লগ" href="http://www.uiscbd.ning.com/">উদ্যোক্তা
                                            ব্লগ</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    {{-- menu end --}}

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <html lang="en" xmlns="http://www.w3.org/1999/html"> <!--<![endif]-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-Frame-Options" content="deny">
    <meta name="description" content="">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>মেহেরপুর জেলা</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> --}}

    <link rel="shortcut icon" href="themes/responsive_npf/favicon.ico" type="image/x-icon" />

    <link type="text/css" rel="stylesheet" media="all" href="{{ asset('frontend/css') }}/asb.css" />
    <link type="text/css" rel="stylesheet" media="all" href="{{ asset('frontend/css') }}/base.css" />
    <link type="text/css" rel="stylesheet" media="all" href="{{ asset('frontend/css') }}/skeleton.css" />
    <link type="text/css" rel="stylesheet" media="all" href="{{ asset('frontend/css') }}/style.css" />
    <link type="text/css" rel="stylesheet" media="all" href="{{ asset('frontend/css') }}/meganizr.css" />
    <link type="text/css" rel="stylesheet" media="all" href="{{ asset('frontend/css') }}/demo.css" />
    <link type="text/css" rel="stylesheet" media="all" href="{{ asset('frontend/css') }}/templates/flaticon.css" />
    <link type="text/css" rel="stylesheet" media="all" href="{{ asset('frontend/css') }}/templates/style.css" />
    <link rel="stylesheet" href="{{ asset('frontend/css') }}/responsiveslides.css">
    <link rel="stylesheet" href="{{ asset('frontend/css') }}/templates/responsive.css">
    <link rel="stylesheet" href="{{ asset('frontend/css') }}/district.css">

    {{-- <script type="text/javascript" src="{{ asset('frontend/js') }}/asb.js"></script> --}}
    {{-- <script type="text/javascript" src="{{ asset('frontend/js') }}/jquery-1.11.1.min.js"></script> --}}
    {{-- <script src="{{ asset('frontend/js') }}/js/responsiveslides.min.js"></script> --}}
    <script src="{{ asset('frontend/js') }}/js/jquery.vticker.js" type="text/javascript"></script>
    {{-- <script src="{{ asset('frontend/js') }}/js/domain_selector.js" type="text/javascript"></script> --}}
    {{-- <script src="{{ asset('frontend/js') }}/js/utils.js" type="text/javascript"></script> --}}
    {{-- <script type="text/javascript" src="{{ asset('frontend/js') }}/js/yoxview-init.js"></script> --}}


</head>


<body class="www-meherpur-gov-bd fontSize100">
    <div class="container">

        <div class="sixteen columns topbar"
            style="background-color: #8bc643; box-shadow: 0 1px 5px #999999; height:auto;border-bottom:4px solid #683091;">
            <div class="np three columns" style=" display: inline-block;">
                <a style="color: white;height:100%;display:table;padding: 7px;font-size:.9em;"
                    href="http://www.bangladesh.gov.bd/" target="_blank">
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
                <select class="chzn-select"
                    title="জেলা নির্বাচন করতে এখানে ক্লিক করুন">
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

            <div id="div-lang-sel" class="one columns" style="padding:5px;padding-right: 8px; margin: 0px 15px;">
                <form id="lang_form" action="https://www.meherpur.gov.bd/" method="post">
                    <input type="hidden" name="lang" id="lang" value="en" />
                    <button type="submit" style="height: 26px;padding: 4px;">English</button>
                </form>
            </div>
        </div>
        <div class="sixteen columns slider">
            <div class="callbacks_container">
                <ul class="rslides" id="front-image-slider">
                    <li>
                        <a target="_blank" href="site/top_banner/b076b18a-53b1-4ccc-b13f-549c7a39cdc8.html"><img
                                src="{{ asset('frontend/images/baner') }}/b076b18a_53b1_4ccc_b13f_549c7a39cdc8/836c7aa3eb5b26153af2b6424fbea67b.png"
                                alt="" width="960" height="220" /></a>
                    </li>
                    <li>
                        <a target="_blank" href="site/top_banner/ce1900c3-1c3a-11e7-8f57-286ed488c766.html"><img
                                src="{{ asset('frontend/images/baner') }}/ce1900c3_1c3a_11e7_8f57_286ed488c766/shohId%20minar.jpg"
                                alt="" width="960" height="220" /></a>
                    </li>
                    <li>
                        <a target="_blank"
                            href="site/hotel_motel_guesthouse/7b4aafb1-1c3a-11e7-8f57-286ed488c766.html">
                            <a href="site/hotel_motel_guesthouse/7b4aafb1-1c3a-11e7-8f57-286ed488c766.html"
                                title="//{{ asset('frontend/images/baner') }}/e514030e_8992_4ac5_9aaa_a2412ae37e07/30dadaa3d133dbc45f9f0aa8f9a2cbf1.png"><img
                                    src="{{ asset('fontend/images/baner') }}/e514030e_8992_4ac5_9aaa_a2412ae37e07/30dadaa3d133dbc45f9f0aa8f9a2cbf1.png"
                                    alt="" width="960" height="220" /></a>
                    </li>
                    <li>
                        <a target="_blank" href="site/top_banner/17dbc369-b6a4-4a00-9da9-c865bb8c4a39.html"><img
                                src="{{ asset('frontend/images/baner') }}/17dbc369_b6a4_4a00_9da9_c865bb8c4a39/cddab250998096b81edfd516a8824c01.png"
                                alt="" width="960" height="220" /></a>
                    </li>
                    <li>
                        <a target="_blank" href="site/top_banner/2508f22b-9aa9-4ae9-a3da-21b492f98e22.html"><img
                                src="{{ asset('frontend/images/baner') }}/2508f22b_9aa9_4ae9_a3da_21b492f98e22/449915b6505d30724f5c1ff286cd272b.png"
                                alt="" width="960" height="220" /></a>
                    </li>
                    <li>
                        <a target="_blank" href="site/top_banner/cef139fa-1c3a-11e7-8f57-286ed488c766.html"><img
                                src="{{ asset('frontend/images/baner') }}/cef139fa_1c3a_11e7_8f57_286ed488c766/mailImgView.jpg"
                                alt="" width="960" height="220" /></a>
                    </li>
                    <li>
                        <a target="_blank" href="site/top_banner/c985ee98-8445-40d5-934d-3a3b858c6f34.html"><img
                                src="{{ asset('frontend/images/baner') }}/c985ee98_8445_40d5_934d_3a3b858c6f34/ef9131e4f209867cf6aa2ffa35dd89b8.png"
                                alt="" width="960" height="220" /></a>
                    </li>
                    <li>
                        <a target="_blank" href="site/top_banner/c325fa63-3835-4530-a468-5d7d499f17ed.html"><img
                                src="{{ asset('frontend/images/baner') }}/c325fa63_3835_4530_a468_5d7d499f17ed/34abbbe252b0a80f6fb4efe4728474e5.png"
                                alt="" width="960" height="220" /></a>
                    </li>
                    <li>
                        <a target="_blank" href="site/top_banner/ce18ffe4-1c3a-11e7-8f57-286ed488c766.html"><img
                                src="{{ asset('frontend/images/baner') }}/ce18ffe4_1c3a_11e7_8f57_286ed488c766/Nilkhuthi.jpg"
                                alt="" width="960" height="220" /></a>
                    </li>
                    <li>
                        <a target="_blank" href="site/top_banner/ce18ff3f-1c3a-11e7-8f57-286ed488c766.html"><img
                                src="{{ asset('frontend/images/baner') }}/ce18ff3f_1c3a_11e7_8f57_286ed488c766/Religon.jpg"
                                alt="" width="960" height="220" /></a>
                    </li>
                    <li>
                        <a target="_blank" href="site/top_banner/cdb6c668-1c3a-11e7-8f57-286ed488c766.html"><img
                                src="{{ asset('frontend/images/baner') }}/cdb6c668_1c3a_11e7_8f57_286ed488c766/muktijoddo1.jpg"
                                alt="" width="960" height="220" /></a>
                    </li>
                    <li>
                        <a target="_blank" href="site/top_banner/ce23f136-1c3a-11e7-8f57-286ed488c766.html"><img
                                src="{{ asset('frontend/images/baner') }}/ce23f136_1c3a_11e7_8f57_286ed488c766/amrokanon_sapla.jpg"
                                alt="" width="960" height="220" /></a>
                    </li>
                    <li>
                        <a target="_blank" href="site/top_banner/ce18f0cc-1c3a-11e7-8f57-286ed488c766.html"><img
                                src="{{ asset('frontend/images/baner') }}/ce18f0cc_1c3a_11e7_8f57_286ed488c766/Agriculture.jpg"
                                alt="" width="960" height="220" /></a>
                    </li>
                    <li>
                        <a target="_blank" href="site/top_banner/ce18fb49-1c3a-11e7-8f57-286ed488c766.html"><img
                                src="{{ asset('frontend/images/baner') }}/ce18fb49_1c3a_11e7_8f57_286ed488c766/Fruits.jpg"
                                alt="" width="960" height="220" /></a>
                    </li>
                </ul>
            </div>
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


        <div class="sixteen columns" id="jmenu">
            <div class="sixteen columns">

                <a href="javascript:;" class="show-menu menu-head"> মেনু নির্বাচন করুন</a>
                <div role="navigation" id="dawgdrops">
                    <ul class="meganizr mzr-slide mzr-responsive">
                        <!-- Build The Menu -->
                        <li class="col0"><a title="Home" href="{{ url('/') }}"
                                style="background-image: url({{ asset('frontend/images') }}/home_dark.png);margin-top:5px;"></a>
                        </li>
                        <li class="col1 mzr-drop"><a title="জেলা সম্পর্কিত" href="javascript:;">জেলা
                                সম্পর্কিত</a>
                            <div class="mzr-content drop-four-columns">
                                <div class="one-col">
                                    <h6>জেলা পরিচিতি</h6>
                                    <ul class="mzr-links">
                                        <li><a title="এক নজরে জেলা"
                                                href="site/page/07b25377-1c4b-11e7-8f57-286ed488c766/%e0%a6%8f%e0%a6%95%20%e0%a6%a8%e0%a6%9c%e0%a6%b0%e0%a7%87%20%e0%a6%9c%e0%a7%87%e0%a6%b2%e0%a6%be.html">এক
                                                নজরে জেলা</a></li>
                                        <li><a title="জেলার পটভুমি"
                                                href="site/page/07b2689a-1c4b-11e7-8f57-286ed488c766/%e0%a6%9c%e0%a7%87%e0%a6%b2%e0%a6%be%e0%a6%b0%20%e0%a6%aa%e0%a6%9f%e0%a6%ad%e0%a7%81%e0%a6%ae%e0%a6%bf.html">জেলার
                                                পটভুমি</a></li>
                                        <li><a title="ভৌগলিক পরিচিতি"
                                                href="site/page/fd276881-1c4a-11e7-8f57-286ed488c766/%e0%a6%ad%e0%a7%8c%e0%a6%97%e0%a6%b2%e0%a6%bf%e0%a6%95%20%e0%a6%aa%e0%a6%b0%e0%a6%bf%e0%a6%9a%e0%a6%bf%e0%a6%a4%e0%a6%bf.html">ভৌগলিক
                                                পরিচিতি</a></li>
                                        <li><a title="মানচিত্রে জেলা"
                                                href="site/page/b2695489-40ec-488d-935f-3a79d597c93a/%e0%a6%ae%e0%a6%be%e0%a6%a8%e0%a6%9a%e0%a6%bf%e0%a6%a4%e0%a7%8d%e0%a6%b0%e0%a7%87%20%e0%a6%9c%e0%a7%87%e0%a6%b2%e0%a6%be.html">মানচিত্রে
                                                জেলা</a></li>
                                        <li><a title="উপজেলা ও ইউনিয়ন"
                                                href="site/page/079c208e-1c4b-11e7-8f57-286ed488c766/%e0%a6%89%e0%a6%aa%e0%a6%9c%e0%a7%87%e0%a6%b2%e0%a6%be%20%e0%a6%93%20%e0%a6%87%e0%a6%89%e0%a6%a8%e0%a6%bf%e0%a6%af%e0%a6%bc%e0%a6%a8.html">উপজেলা
                                                ও ইউনিয়ন</a></li>
                                        <li><a title="জেলা পরিসংখ্যান ২০১১"
                                                href="site/page/e5fa2bee-531f-4611-a431-caeef2dda84d/%e0%a6%9c%e0%a7%87%e0%a6%b2%e0%a6%be%20%e0%a6%aa%e0%a6%b0%e0%a6%bf%e0%a6%b8%e0%a6%82%e0%a6%96%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8%20%e0%a7%a8%e0%a7%a6%e0%a7%a7%e0%a7%a7.html">জেলা
                                                পরিসংখ্যান ২০১১</a></li>
                                    </ul>
                                </div>
                                <div class="one-col">
                                    <h6>ইতিহাস ও ঐতিহ্য</h6>
                                    <ul class="mzr-links">
                                        <li><a title="খেলাধুলা ও বিনোদন"
                                                href="site/page/07b38cb5-1c4b-11e7-8f57-286ed488c766/%e0%a6%96%e0%a7%87%e0%a6%b2%e0%a6%be%e0%a6%a7%e0%a7%81%e0%a6%b2%e0%a6%be%20%e0%a6%93%20%e0%a6%ac%e0%a6%bf%e0%a6%a8%e0%a7%8b%e0%a6%a6%e0%a6%a8.html">খেলাধুলা
                                                ও বিনোদন</a></li>
                                        <li><a title="জেলার ঐতিহ্য"
                                                href="site/page/07b34d6f-1c4b-11e7-8f57-286ed488c766/%e0%a6%9c%e0%a7%87%e0%a6%b2%e0%a6%be%e0%a6%b0%20%e0%a6%90%e0%a6%a4%e0%a6%bf%e0%a6%b9%e0%a7%8d%e0%a6%af.html">জেলার
                                                ঐতিহ্য</a></li>
                                        <li><a title="দর্শনীয় স্থান"
                                                href="site/view/tourist_spot/%e0%a6%a6%e0%a6%b0%e0%a7%8d%e0%a6%b6%e0%a6%a8%e0%a7%80%e0%a6%af%e0%a6%bc%20%e0%a6%b8%e0%a7%8d%e0%a6%a5%e0%a6%be%e0%a6%a8.html">দর্শনীয়
                                                স্থান</a></li>
                                        <li><a title="পুরাকীর্তির সংক্ষিপ্ত বর্ণনা"
                                                href="site/page/201ff392-1c4b-11e7-8f57-286ed488c766/%e0%a6%aa%e0%a7%81%e0%a6%b0%e0%a6%be%e0%a6%95%e0%a7%80%e0%a6%b0%e0%a7%8d%e0%a6%a4%e0%a6%bf%e0%a6%b0%20%e0%a6%b8%e0%a6%82%e0%a6%95%e0%a7%8d%e0%a6%b7%e0%a6%bf%e0%a6%aa%e0%a7%8d%e0%a6%a4%20%e0%a6%ac%e0%a6%b0%e0%a7%8d%e0%a6%a3%e0%a6%a8%e0%a6%be.html">পুরাকীর্তির
                                                সংক্ষিপ্ত বর্ণনা</a></li>
                                        <li><a title="প্রখ্যাত ব্যক্তিত্ব"
                                                href="site/page/07b377e9-1c4b-11e7-8f57-286ed488c766/%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%96%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a4%20%e0%a6%ac%e0%a7%8d%e0%a6%af%e0%a6%95%e0%a7%8d%e0%a6%a4%e0%a6%bf%e0%a6%a4%e0%a7%8d%e0%a6%ac.html">প্রখ্যাত
                                                ব্যক্তিত্ব</a></li>
                                        <li><a title="ভাষা ও সংস্কৃতি"
                                                href="site/page/07b37f68-1c4b-11e7-8f57-286ed488c766/%e0%a6%ad%e0%a6%be%e0%a6%b7%e0%a6%be%20%e0%a6%93%20%e0%a6%b8%e0%a6%82%e0%a6%b8%e0%a7%8d%e0%a6%95%e0%a7%83%e0%a6%a4%e0%a6%bf.html">ভাষা
                                                ও সংস্কৃতি</a></li>
                                        <li><a title="মুক্তিযুদ্ধ ও মুক্তিযোদ্ধাদের তালিকা"
                                                href="site/page/201ff971-1c4b-11e7-8f57-286ed488c766/%e0%a6%ae%e0%a7%81%e0%a6%95%e0%a7%8d%e0%a6%a4%e0%a6%bf%e0%a6%af%e0%a7%81%e0%a6%a6%e0%a7%8d%e0%a6%a7%20%e0%a6%93%20%e0%a6%ae%e0%a7%81%e0%a6%95%e0%a7%8d%e0%a6%a4%e0%a6%bf%e0%a6%af%e0%a7%8b%e0%a6%a6%e0%a7%8d%e0%a6%a7%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b0%20%e0%a6%a4%e0%a6%be%e0%a6%b2%e0%a6%bf%e0%a6%95%e0%a6%be.html">মুক্তিযুদ্ধ
                                                ও মুক্তিযোদ্ধাদের তালিকা</a></li>
                                        <li><a title="বিশেষ অর্জন"
                                                href="site/page/1613e830-1c4b-11e7-8f57-286ed488c766.html">বিশেষ
                                                অর্জন</a></li>
                                    </ul>
                                </div>
                                <div class="one-col">
                                    <h6>ভৌগোলিক ও অর্থনৈতিক</h6>
                                    <ul class="mzr-links">
                                        <li><a title="হোটেল ও আবাসন"
                                                href="site/view/hotel/%e0%a6%b9%e0%a7%8b%e0%a6%9f%e0%a7%87%e0%a6%b2%20%e0%a6%93%20%e0%a6%86%e0%a6%ac%e0%a6%be%e0%a6%b8%e0%a6%a8.html">হোটেল
                                                ও আবাসন</a></li>
                                        <li><a title="ভৌগোলিক অবস্থান,গঠন ও আয়তন"
                                                href="site/page/1b279ff4-1c4b-11e7-8f57-286ed488c766/%e0%a6%ad%e0%a7%8c%e0%a6%97%e0%a7%8b%e0%a6%b2%e0%a6%bf%e0%a6%95%20%e0%a6%85%e0%a6%ac%e0%a6%b8%e0%a7%8d%e0%a6%a5%e0%a6%be%e0%a6%a8%2c%e0%a6%97%e0%a6%a0%e0%a6%a8%20%e0%a6%93%20%e0%a6%86%e0%a6%af%e0%a6%bc%e0%a6%a4%e0%a6%a8.html">ভৌগোলিক
                                                অবস্থান,গঠন ও আয়তন</a></li>
                                        <li><a title="শিল্প ও বাণিজ্য"
                                                href="site/page/1f92334c-1c4b-11e7-8f57-286ed488c766/%e0%a6%b6%e0%a6%bf%e0%a6%b2%e0%a7%8d%e0%a6%aa%20%e0%a6%93%20%e0%a6%ac%e0%a6%be%e0%a6%a3%e0%a6%bf%e0%a6%9c%e0%a7%8d%e0%a6%af.html">শিল্প
                                                ও বাণিজ্য</a></li>
                                        <li><a title="প্রাকৃতিক সম্পদ"
                                                href="site/page/202013de-1c4b-11e7-8f57-286ed488c766/%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%be%e0%a6%95%e0%a7%83%e0%a6%a4%e0%a6%bf%e0%a6%95%20%e0%a6%b8%e0%a6%ae%e0%a7%8d%e0%a6%aa%e0%a6%a6.html">প্রাকৃতিক
                                                সম্পদ</a></li>
                                        <li><a title="নদ-নদী"
                                                href="site/page/20201a46-1c4b-11e7-8f57-286ed488c766/%e0%a6%a8%e0%a6%a6-%e0%a6%a8%e0%a6%a6%e0%a7%80.html">নদ-নদী</a>
                                        </li>
                                        <li><a title="হাটবাজার"
                                                href="site/view/hat_bazar_list/%e0%a6%b9%e0%a6%be%e0%a6%9f%e0%a6%ac%e0%a6%be%e0%a6%9c%e0%a6%be%e0%a6%b0.html">হাটবাজার</a>
                                        </li>
                                        <li><a title="যোগাযোগ ব্যবস্থা"
                                                href="site/page/160631cd-1c4b-11e7-8f57-286ed488c766/%e0%a6%af%e0%a7%8b%e0%a6%97%e0%a6%be%e0%a6%af%e0%a7%8b%e0%a6%97%20%e0%a6%ac%e0%a7%8d%e0%a6%af%e0%a6%ac%e0%a6%b8%e0%a7%8d%e0%a6%a5%e0%a6%be.html">যোগাযোগ
                                                ব্যবস্থা</a></li>
                                    </ul>
                                </div>
                                <div class="one-col">
                                    <h6>অন্যান্য</h6>
                                    <ul class="mzr-links">
                                        <li><a title="জন প্রতিনিধি"
                                                href="site/page/ff477aa7-7cfd-4098-a9d8-81a4abc6cc10/%e0%a6%9c%e0%a6%a8%20%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%a4%e0%a6%bf%e0%a6%a8%e0%a6%bf%e0%a6%a7%e0%a6%bf.html">জন
                                                প্রতিনিধি</a></li>
                                        <li><a title="ইউপি চেয়ারম্যান ও সচিবগণের নামের তালিকা"
                                                href="site/page/1b27b52e-1c4b-11e7-8f57-286ed488c766/%e0%a6%87%e0%a6%89%e0%a6%aa%e0%a6%bf%20%e0%a6%9a%e0%a7%87%e0%a6%af%e0%a6%bc%e0%a6%be%e0%a6%b0%e0%a6%ae%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%a8%20%e0%a6%93%20%e0%a6%b8%e0%a6%9a%e0%a6%bf%e0%a6%ac%e0%a6%97%e0%a6%a3%e0%a7%87%e0%a6%b0%20%e0%a6%a8%e0%a6%be%e0%a6%ae%e0%a7%87%e0%a6%b0%20%e0%a6%a4%e0%a6%be%e0%a6%b2%e0%a6%bf%e0%a6%95%e0%a6%be.html">ইউপি
                                                চেয়ারম্যান ও সচিবগণের নামের তালিকা</a></li>
                                        <li><a title="ইউনিয়ন ডিজিটাল সেন্টারের উদ্যোক্তাদের তালিকা"
                                                href="site/page/1b2810c8-1c4b-11e7-8f57-286ed488c766/%e0%a6%87%e0%a6%89%e0%a6%a8%e0%a6%bf%e0%a6%af%e0%a6%bc%e0%a6%a8%20%e0%a6%a1%e0%a6%bf%e0%a6%9c%e0%a6%bf%e0%a6%9f%e0%a6%be%e0%a6%b2%20%e0%a6%b8%e0%a7%87%e0%a6%a8%e0%a7%8d%e0%a6%9f%e0%a6%be%e0%a6%b0%e0%a7%87%e0%a6%b0%20%e0%a6%89%e0%a6%a6%e0%a7%8d%e0%a6%af%e0%a7%8b%e0%a6%95%e0%a7%8d%e0%a6%a4%e0%a6%be%e0%a6%a6%e0%a7%87%e0%a6%b0%20%e0%a6%a4%e0%a6%be%e0%a6%b2%e0%a6%bf%e0%a6%95%e0%a6%be.html">ইউনিয়ন
                                                ডিজিটাল সেন্টারের উদ্যোক্তাদের তালিকা</a></li>
                                        <li><a title="পত্রপত্রিকা"
                                                href="site/page/1f922bbf-1c4b-11e7-8f57-286ed488c766/%e0%a6%aa%e0%a6%a4%e0%a7%8d%e0%a6%b0%e0%a6%aa%e0%a6%a4%e0%a7%8d%e0%a6%b0%e0%a6%bf%e0%a6%95%e0%a6%be.html">পত্রপত্রিকা</a>
                                        </li>
                                        <li><a title="ICT তে বর্ষসেরা পুরস্কার প্রাপ্তদের তালিকা"
                                                href="site/page/42850e37-1c4b-11e7-8f57-286ed488c766/ICT%20%e0%a6%a4%e0%a7%87%20%e0%a6%ac%e0%a6%b0%e0%a7%8d%e0%a6%b7%e0%a6%b8%e0%a7%87%e0%a6%b0%e0%a6%be%20%e0%a6%aa%e0%a7%81%e0%a6%b0%e0%a6%b8%e0%a7%8d%e0%a6%95%e0%a6%be%e0%a6%b0%20%e0%a6%aa%e0%a7%8d%e0%a6%b0%e0%a6%be%e0%a6%aa%e0%a7%8d%e0%a6%a4%e0%a6%a6%e0%a7%87%e0%a6%b0%20%e0%a6%a4%e0%a6%be%e0%a6%b2%e0%a6%bf%e0%a6%95%e0%a6%be.html">ICT
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
                                        <li><a title="পুলিশ সুপারের কার্যালয়"
                                                href="http://police.meherpur.gov.bd/">পুলিশ সুপারের কার্যালয়</a>
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
                                        <li><a title="জেলা প্রাথমিক শিক্ষা অফিস"
                                                href="http://dpe.meherpur.gov.bd/">জেলা
                                                প্রাথমিক শিক্ষা অফিস</a></li>
                                        <li><a title="জেলা শিল্পকলা একাডেমি"
                                                href="http://shilpakala.meherpur.gov.bd/">জেলা শিল্পকলা একাডেমি</a>
                                        </li>
                                        <li><a title="জেলা গণগ্রন্থাগার"
                                                href="http://publiclibrary.meherpur.gov.bd/">জেলা গণগ্রন্থাগার</a>
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
                                        <li><a title="কৃষি সম্প্রসারণ অধিদপ্তর"
                                                href="http://dae.meherpur.gov.bd/">কৃষি
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
                                        <li><a title="জেলা তুলা উন্নয়ন বোর্ড অফিস"
                                                href="http://cdb.meherpur.gov.bd/">জেলা তুলা উন্নয়ন বোর্ড অফিস</a>
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
                                        <li><a title="শিক্ষা প্রকৌশল অধিদপ্তর"
                                                href="http://eed.meherpur.gov.bd/">শিক্ষা
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
                                        <li><a title="জেলা মহিলা বিষয়ক কার্যালয়"
                                                href="http://dwa.meherpur.gov.bd/">জেলা মহিলা বিষয়ক কার্যালয়</a>
                                        </li>
                                        <li><a title="জেলা সমাজসেবা কার্যালয়" href="http://dss.meherpur.gov.bd/">জেলা
                                                সমাজসেবা কার্যালয়</a></li>
                                        <li><a title="জেলা যুব উন্নয়ন অধিদপ্তর"
                                                href="http://youth.meherpur.gov.bd/">জেলা যুব উন্নয়ন অধিদপ্তর</a>
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
                                        <li><a title="জেলা পরিবার পরিকল্পনা অফিস"
                                                href="http://fpo.meherpur.gov.bd/">জেলা পরিবার পরিকল্পনা অফিস</a>
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
                                        <li><a title="উপ কর কমিশনার অফিস সার্কেল-২"
                                                href="http://tax.meherpur.gov.bd/">উপ কর কমিশনার অফিস সার্কেল-২</a>
                                        </li>
                                        <li><a title="জেলা সঞ্চয় অফিস" href="http://savings.meherpur.gov.bd/">জেলা
                                                সঞ্চয় অফিস</a></li>
                                        <li><a title="জেলা হিসাবরক্ষণ অফিস" href="http://dao.meherpur.gov.bd/">জেলা
                                                হিসাবরক্ষণ অফিস</a></li>
                                        <li><a title="জেলা কাস্টমস, এক্সাইজ ও ভ্যাট অফিস"
                                                href="http://customs.meherpur.gov.bd/">জেলা কাস্টমস, এক্সাইজ ও
                                                ভ্যাট
                                                অফিস</a></li>
                                        <li><a title="জেলা রেজিষ্ট্রারের কার্যালয়"
                                                href="http://dr.meherpur.gov.bd/">জেলা রেজিষ্ট্রারের কার্যালয়</a>
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



        <div id="contents" class="sixteen columns menu">
            <div class="twelve columns" id="left-content">
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

                    <script type="text/javascript" src="popup/popup.js"></script>
                    <link rel="stylesheet" type="text/css" href="popup/popup.css">

                    <script>
                        function popupclick() {
                            $('.popup').hide();
                        }
                    </script> <!-- for popup end -->
                    <div class="row" id="notice-board">
                        <div class="notice-board-bg">
                            <h2>নোটিশ বোর্ড</h2>
                            <div id="notice-board-ticker">
                                <ul>
                                    <li>
                                        <a
                                            href="site/notices/fd9c8127-cf81-4a6d-8ed0-026cae6d441d/%e0%a6%85%e0%a6%ab%e0%a6%bf%e0%a6%b8-%e0%a6%86%e0%a6%a6%e0%a7%87%e0%a6%b6.html">অফিস
                                            আদেশ</a>
                                    </li>
                                    <li>
                                        <a
                                            href="site/notices/1123e963-9e25-482e-bff2-086d1aa2fdd2/%e0%a6%85%e0%a6%ab%e0%a6%bf%e0%a6%b8-%e0%a6%86%e0%a6%a6%e0%a7%87%e0%a6%b6.html">অফিস
                                            আদেশ</a>
                                    </li>
                                    <li>
                                        <a
                                            href="site/notices/a8bea89b-42a8-4166-8c59-837452b7d26c/%e0%a6%a6%e0%a7%87%e0%a6%ac%e0%a6%be%e0%a6%82%e0%a6%b6%e0%a7%81-%e0%a6%ac%e0%a6%bf%e0%a6%b6%e0%a7%8d%e0%a6%ac%e0%a6%be%e0%a6%b8-%2c%e0%a6%b8%e0%a6%b9%e0%a6%95%e0%a6%be%e0%a6%b0%e0%a7%80-%e0%a6%95%e0%a6%ae%e0%a6%bf%e0%a6%b6%e0%a6%a8%e0%a6%be%e0%a6%b0-%e0%a6%aa%e0%a6%a6%e0%a7%87-%e0%a6%af%e0%a7%8b%e0%a6%97%e0%a6%a6%e0%a6%be%e0%a6%a8.html">দেবাংশু
                                            বিশ্বাস ,সহকারী কমিশনার পদে যোগদান</a>
                                    </li>
                                    <li>
                                        <a
                                            href="site/notices/f97ca73a-0f4c-42bd-8c45-341e5cf0d960/%e0%a6%ac%e0%a6%bf%e0%a6%9c%e0%a7%8d%e0%a6%9e%e0%a6%aa%e0%a7%8d%e0%a6%a4%e0%a6%bf.html">বিজ্ঞপ্তি</a>
                                    </li>
                                    <li>
                                        <a
                                            href="site/notices/00e4b49c-9a9d-485c-8903-78cd61bb8554/%e0%a6%ac%e0%a6%bf%e0%a6%9c%e0%a7%8d%e0%a6%9e%e0%a6%aa%e0%a7%8d%e0%a6%a4%e0%a6%bf.html">বিজ্ঞপ্তি</a>
                                    </li>
                                </ul>
                                <a class="btn right" href="site/view/notices.html">সকল</a>
                            </div>
                        </div>
                    </div>
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

                    <div class="column block">
                        <h5 class="bk-org title">
                            লোকেশন ম্যাপ
                        </h5>

                        <table border="1" cellpadding="1" cellspacing="1" style="height:300px; width:720px">
                            <tbody>
                                <tr>
                                    <td style="text-align:center"><iframe frameborder="0" height="300"
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d467299.39212902816!2d88.44436625740265!3d23.790971830893543!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f947fe644cb975%3A0xbbab3d5c1a988121!2z4Kah4Ka_4Ka44Ka_IOCmheCmq-Cmv-CmuA!5e0!3m2!1sbn!2sbd!4v1508917544961"
                                            style="border:0" width="600"></iframe></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div class="four columns right-side-bar" id="right-content">
                <!-- Current Date -->
                <!-- office_attachment_application_form -->
                <div class="column block">
                    <h5 class="bk-org title">
                        জরুরি হটলাইন
                    </h5>
                    <p><img alt="জরুরি হটলাইন" src="{{ asset('frontend/images/National-Helpline.jpg') }}" style="height:100%; width:220px"></p>
                </div>


                <div class="column block">
                    <h5 class="bk-org title">
                        জাতীয় সংগীত
                    </h5>
                    <audio controls="" style="width:100%">
                        <source
                            src="http://cabinet.portal.gov.bd/sites/default/files/files/cabinet.portal.gov.bd/page/e5f25d4e_f0a7_4b2a_a07c_3ec69a793516/bd_national_anthem.mp3"
                            type="audio/mp3">
                    </audio>
                </div>

            </div>
        </div>

            <hr>
            <div id="footer-menu">

                <ul></ul>
                <div style="float: left; font-size: .9em;">
                    সাইটটি শেষ হাল-নাগাদ করা হয়েছে: <span
                        style="font-style: italic;">&#x09E8;&#x09E6;&#x09E8;&#x09E9;-&#x09E6;&#x09EA;-&#x09E8;&#x09EB;
                        &#x09E6;&#x09EA;:&#x09E8;&#x09EA;:&#x09E7;&#x09EC;</span>
                    <!--<span><a href="http://support.portal.gov.bd/" style="color: green" target="_blank"> | <u>হেল্পডেস্ক</u></a></span>-->
                </div>
            </div>

            <div class="footer-credit" id="footer">
                <!--  -->

                <p>
                    কারিগরি সহায়তায়:
                    <img style="vertical-align: baseline;" src="themes/responsive_npf/img/np-logo-set.png"
                        alt="">
                </p>
            </div>
            <!-- /footer -->

    </div>
 <!-- container -->
    <script>
        function setLanguageCookie(cookieValue) {
            var today = new Date();
            var expire = new Date();
            var cookieName = 'lang';
            //var cookieValue = "bn";
            var nDays = 5;
            expire.setTime(today.getTime() + 3600000 * 24 * nDays);
            document.cookie = cookieName + "=" + escape(cookieValue) +
                ";expires=" + expire.toGMTString();
        }

        function setLanguage() {
            $("#lang_form").submit();
            return false;
        }

        $(function() {

            // Slideshow 4
            $("#front-image-slider").responsiveSlides({
                auto: true,
                pager: false,
                nav: true,
                speed: 2000,
                maxwidth: 960,
                namespace: "callbacks"
            });
            $("#right-content a").click(function() {
                var url = $(this).attr('href');
                if (isExternal(url) && url != 'javascript:;') {
                    openInNewTab(url);
                    return false;
                }
            });
        });

        function openInNewTab(url) {
            var win = window.open(url, '_blank');
            win.focus();
        }

        function isExternal(url) {
            var match = url.match(/^([^:\/?#]+:)?(?:\/\/([^\/?#]*))?([^?#]+)?(\?[^#]*)?(#.*)?/);
            if (typeof match[1] === "string" && match[1].length > 0 && match[1].toLowerCase() !== location.protocol)
                return true;
            if (typeof match[2] === "string" && match[2].length > 0 && match[2].replace(new RegExp(":(" + {
                    "http:": 80,
                    "https:": 443
                } [location.protocol] + ")?$"), "") !== location.host)
                return true;
            return false;
        }
    </script>



    <script>
        $(function() {


            function initNewsTicker(id, options) {

                var $scroller = $(id);
                $scroller.vTicker('init', options);

                $("#news-ticker .next").click(function(event) {
                    event.preventDefault();
                    var checked = true;
                    $('#news-ticker').vTicker('next', {
                        animate: checked
                    });
                });
                $("#news-ticker .prev,#news-ticker .next").hover(function() {
                    $('#news-ticker').vTicker('next', {
                        animate: checked
                    });
                    $scroller.vTicker('pause', true);
                }, function() {
                    $('#news-ticker').vTicker('next', {
                        animate: checked
                    });
                    $scroller.vTicker('pause', false);
                });
                $("#news-ticker .prev").click(function(event) {
                    event.preventDefault();
                    var checked = true;
                    $('#news-ticker').vTicker('prev', {
                        animate: checked
                    });
                });
            }

            function initNoticeBoardTicker(id, options) {

                var $scroller = $(id);
                $scroller.vTicker('init', options);

                $("#notice-board-ticker .next").click(function(event) {
                    event.preventDefault();
                    var checked = true;
                    $('#notice-board-ticker').vTicker('next', {
                        animate: false
                    });
                });
                $("#notice-board-ticker .prev,#notice-board-ticker .next").hover(function() {
                    $scroller.vTicker('pause', true);
                }, function() {
                    $scroller.vTicker('pause', false);
                });
                $("#notice-board-ticker .prev").click(function(event) {
                    event.preventDefault();
                    var checked = true;
                    $('#notice-board-ticker').vTicker('prev', {
                        animate: checked
                    });
                });
            }

            initNewsTicker('#news-ticker', {});
            //initNoticeBoardTicker('#notice-board-ticker', {showItems:10, margin: 0, padding: 0,animate:false});


        });


        /* Responsive Menu*/
    </script>


    <!-- Matomo -->
    <script type="text/javascript">
        var _paq = _paq || [];
        /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
        _paq.push(['trackPageView']);
        _paq.push(['enableLinkTracking']);
        (function() {
            var u = "https://analytics.portal.gov.bd/piwik/";
            _paq.push(['setTrackerUrl', u + 'piwik.php']);
            _paq.push(['setSiteId', 70]);
            var d = document,
                g = d.createElement('script'),
                s = d.getElementsByTagName('script')[0];
            g.type = 'text/javascript';
            g.async = true;
            g.defer = true;
            g.src = u + 'piwik.js';
            s.parentNode.insertBefore(g, s);
        })();
    </script>
    <!-- End Matomo Code -->


    <script>
        $(".meganizr .mzr-drop").keyup(function() {

            $(".mzr-content").attr("aria-hidden", "true");
            $(this).find(".mzr-content").attr("aria-hidden", "false");
        });
        // ============ start tile for <a> and alt for img ========
        $('a').each(function() {
            $(this).attr('title', $(this).text());
        });

        var lan = "bn";
        if (lan == 'en') {
            $('.mzr-drop a:first-child').each(function() {
                $(this).attr('title', "Enter to get more menu");
            });
        } else {
            $('.mzr-drop a:first-child').each(function() {
                $(this).attr('title', "সাবমেনুর জন্য ক্লিক করুন");
            });
        }
        $('img').each(function() {
            var str = $(this).attr("src");
            var arr = str.split('index.html');
            var strFine = arr[arr.length - 1];

            var str2 = strFine;
            var arr2 = str2.split('.');
            var strFine2 = arr2[arr2.length - 2];
            $(this).attr('alt', strFine2);
        });
        $('a2iLogo').attr('alt', 'Access to information');
        $('.service-box img').each(function() {
            var strTitle = $(this).parent().find('h4').text();
            $(this).attr('alt', strTitle);
        });
        $('.block img').each(function() {
            var strTitleRight = $(this).closest('.block').find('.title').text();
            $(this).attr('alt', strTitleRight);
        });
        $('#notice-board-ticker .btn').attr('title', 'সকল নোটিশ');
        $('#news-ticker .btn').attr('title', 'সকল খবর');
        $('#search').each(function() {
            $(this).attr('alt', 'Search');
        });
        $('.search-btn').each(function() {
            $(this).attr('alt', 'Enter to search');
        });


        $(".chzn-select").bind('change', function() {
            if ($(this).val() === "undefined" || $(this).val() !== '-') {
                window.location.href = $(this).val();
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            $(".slide-panel-button").click(function() {
                $('#domain-selector-panel').toggle() //animate({height: "toggle"}, 200);
                if ($('#domain-selector-panel').is(":visible")) {
                    $('#div-lang').css('z-index', '200');
                } else {
                    $('#div-lang').css('z-index', '1001');
                }
                $(".slide-panel-button").toggle();
            });

        });
    </script>
    <!-- ============ start accessibility megamenu ============ -->
    <script>
        $(document).ready(function() {
            var wi = $(window).width();
            if (wi < 769) {
                $('#printable_area td').removeAttr('style');
                $('#printable_area td p').css("width", "100%");
            }
        });
        $(".meganizr .mzr-drop").keyup(function() {

            $(".mzr-content").attr("aria-hidden", "true");
            $(this).find(".mzr-content").attr("aria-hidden", "false");
        });
        // ============ start tile for <a> and alt for img ========
        $('a').each(function() {
            $(this).attr('title', $(this).text());
        });

        var lan = "bn";
        if (lan == 'en') {
            $('.mzr-drop a:first-child').each(function() {
                $(this).attr('title', "Enter to get more menu");
            });
        } else {
            $('.mzr-drop a:first-child').each(function() {
                $(this).attr('title', "সাবমেনুর জন্য ক্লিক করুন");
            });
        }
        $('img').each(function() {
            var str = $(this).attr("src");
            var arr = str.split('index.html');
            var strFine = arr[arr.length - 1];

            var str2 = strFine;
            var arr2 = str2.split('.');
            var strFine2 = arr2[arr2.length - 2];
            $(this).attr('alt', strFine2);
        });
        $('a2iLogo').attr('alt', 'Access to information');
        $('.service-box img').each(function() {
            var strTitle = $(this).parent().find('h4').text();
            $(this).attr('alt', strTitle);
        });
        $('.block img').each(function() {
            var strTitleRight = $(this).closest('.block').find('.title').text();
            $(this).attr('alt', strTitleRight);
        });
        $('#notice-board-ticker .btn').attr('title', 'সকল নোটিশ');
        $('#news-ticker .btn').attr('title', 'সকল খবর');
        $('#search').each(function() {
            $(this).attr('alt', 'Search');
        });
        $('.search-btn').each(function() {
            $(this).attr('alt', 'Enter to search');
        });
        // ============ end tile for <a> and alt for img ========
    </script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>

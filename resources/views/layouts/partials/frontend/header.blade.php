    {{-- topbar start --}}
    <div class="sixteen columns topbar" style="background-color: #8bc643; box-shadow: 0 1px 5px #999999; height:auto;border-bottom:4px solid #683091;">
            <div class="np three columns" style=" display: inline-block;">
                    <a style="color: white; height:100%; display:table; padding: 7px; font-size:15px; font-weight: bolder;" href="{{ url('/') }}">
                            মেহেরপুর তথ্য বাতায়ন
                    </a>
            </div>

            <div id="div-lang-sel" class="one columns" style="padding:5px;padding-right: 8px; margin: 0px 15px; display:flex;">
                    <!-- <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a> -->

                    <ul class="navbar-nav ms-auto" style="display: flex; margin-bottom:0px;">
                            <!-- Authentication Links -->
                            @guest
                            @if (Route::has('login'))
                            <li class="nav-item" style="margin-bottom:0px;">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @endif

                            @if (Route::has('register'))
                            <li class="nav-item" style="margin-bottom:0px;">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                            @endif
                            @else
                            <div class="dropdown">
                                    <a>
                                            {{ Auth::user()->name }}<img src="{{ asset('frontend/images/dropdown.png') }}" alt="" style="margin-left: -4px;">
                                    </a>
                                    <div class="dropdown-content">
                                            <li class="nav-item dropdown" style="display: flex; margin-bottom:0px;">
                                                    <a href="{{ url('/user-profile/'.Auth::user()->id) }}" target="_blank">Profile</a>
                                            </li>
                                            @can('status')
                                                <li class="nav-item dropdown" style="display: flex; margin-bottom:0px;">
                                                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                                                </li>
                                            @endcan
                                            <li class="nav-item dropdown" style="display: flex; margin-bottom:0px;">

                                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                                    {{ __('Logout') }}
                                                            </a>

                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                                    @csrf
                                                            </form>
                                                    </div>
                                            </li>

                                    </div>
                            </div>
                            <!-- dropdown CSS start -->
                            <style>
                                    .dropdown {
                                            position: relative;
                                            display: inline-block;
                                    }

                                    .dropdown-content {
                                            display: none;
                                            position: absolute;
                                            background-color: #8bc643;
                                            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                                            padding: 5px;
                                            right: 0;
                                            z-index: 1;
                                            border-top: 1px solid #683091;
                                    }

                                    .dropdown-content li {
                                            border-bottom: 1px solid #683091;
                                            padding: 3px 0px;
                                            font-size: 14px;
                                    }

                                    .dropdown-content li a{
                                            text-align: right;
                                    }

                                    .dropdown:hover .dropdown-content {
                                            display: block;
                                    }
                            </style>
                            <!-- dropdown CSS end -->


                            @endguest
                    </ul>


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
                                    <li class="col0"><a title="Home" href="{{ url('/') }}" style="margin-top:5px; background-image: url('{{ asset('frontend/images/home_dark.png') }}')"></a>
                                    </li>
                                    <li class="col1 mzr-drop"><a title="জেলা সম্পর্কিত" href="javascript:;">জেলা
                                                    সম্পর্কিত</a>
                                            <div class="mzr-content drop-four-columns">
                                                    <div class="one-col">
                                                            <h6>জেলা পরিচিতি</h6>
                                                            <ul class="mzr-links">
                                                                    <li><a title="এক নজরে জেলা" href="{{ url('/জেলা-সম্পর্কিত/এক-নজরে') }}">এক
                                                                                    নজরে জেলা</a></li>
                                                                    <li><a title="জেলার পটভুমি" href="{{ url('/জেলা-সম্পর্কিত/পটভুমি') }}">জেলার
                                                                                    পটভুমি</a></li>
                                                                    <li><a title="ভৌগলিক পরিচিতি" href="{{ url('/জেলা-সম্পর্কিত/ভৌগলিক-পরিচিতি') }}">ভৌগলিক
                                                                                    পরিচিতি</a></li>
                                                                    <li><a title="মানচিত্রে জেলা" href="{{ url('/জেলা-সম্পর্কিত/মানচিত্রে-জেলা') }}">মানচিত্রে
                                                                                    জেলা</a></li>
                                                                    <li><a title="উপজেলা ও ইউনিয়ন" href="{{ url('/জেলা-সম্পর্কিত/উপজেলা-ও-ইউনিয়ন') }}">উপজেলা
                                                                                    ও ইউনিয়ন</a></li>
                                                            </ul>
                                                    </div>
                                                    <div class="one-col">
                                                            <h6>ইতিহাস ও ঐতিহ্য</h6>
                                                            <ul class="mzr-links">
                                                                    <li><a title="খেলাধুলা ও বিনোদন" href="{{ url('/জেলা-সম্পর্কিত/খেলাধুলা-ও-বিনোদন') }}">খেলাধুলা
                                                                                    ও বিনোদন</a></li>
                                                                    <li><a title="জেলার ঐতিহ্য" href="{{ url('/জেলা-সম্পর্কিত/জেলার-ঐতিহ্য') }}">জেলার
                                                                                    ঐতিহ্য</a></li>
                                                                    <li><a title="দর্শনীয় স্থান" href="{{ url('/জেলা-সম্পর্কিত/দর্শনীয়-স্থান') }}">দর্শনীয়
                                                                                    স্থান</a></li>
                                                                    <li><a title="প্রখ্যাত ব্যক্তিত্ব" href="{{ url('/জেলা-সম্পর্কিত/প্রখ্যাত-ব্যক্তিত্ব') }}">প্রখ্যাত
                                                                                    ব্যক্তিত্ব</a></li>
                                                                    <li><a title="ভাষা ও সংস্কৃতি" href="{{ url('/জেলা-সম্পর্কিত/ভাষা-ও-সংস্কৃতি') }}">ভাষা
                                                                                    ও সংস্কৃতি</a></li>
                                                                    <li><a title="মুক্তিযুদ্ধ ও মুক্তিযোদ্ধাদের তালিকা" href="{{ url('/জেলা-সম্পর্কিত/মুক্তিযোদ্ধাদের-তালিকা') }}">মুক্তিযোদ্ধাদের তালিকা</a></li>
                                                            </ul>
                                                    </div>
                                                    <div class="one-col">
                                                            <h6>ভৌগোলিক ও অর্থনৈতিক</h6>
                                                            <ul class="mzr-links">
                                                                    <li><a title="হোটেল ও আবাসন" href="{{ url('/জেলা-সম্পর্কিত/হোটেল-ও-আবাসন') }}">হোটেল
                                                                                    ও আবাসন</a></li>
                                                                    <li><a title="ভৌগোলিক অবস্থান,গঠন ও আয়তন" href="{{ url('/জেলা-সম্পর্কিত/অবস্থান-গঠন-ও-আয়তন') }}">ভৌগোলিক
                                                                                    অবস্থান,গঠন ও আয়তন</a></li>
                                                                    <li><a title="শিল্প ও বাণিজ্য" href="{{ url('/জেলা-সম্পর্কিত/শিল্প-ও-বাণিজ্য') }}">শিল্প
                                                                                    ও বাণিজ্য</a></li>
                                                                    <li><a title="নদ-নদী" href="{{ url('/জেলা-সম্পর্কিত/নদ-নদী') }}">নদ-নদী</a>
                                                                    </li>
                                                                    <li><a title="হাটবাজার" href="{{ url('/জেলা-সম্পর্কিত/হাটবাজার') }}">হাটবাজার</a>
                                                                    </li>
                                                                    <li><a title="যোগাযোগ ব্যবস্থা" href="{{ url('/জেলা-সম্পর্কিত/যোগাযোগ-ব্যবস্থা') }}">যোগাযোগ
                                                                                    ব্যবস্থা</a></li>
                                                            </ul>
                                                    </div>
                                                    <div class="one-col">
                                                            <h6>অন্যান্য</h6>
                                                            <ul class="mzr-links">
                                                                    <li><a title="জন প্রতিনিধি" href="{{ url('/জেলা-সম্পর্কিত/জন-প্রতিনিধি') }}">জন
                                                                                    প্রতিনিধি</a></li>
                                                                    <li><a title="ইউপি চেয়ারম্যান ও সচিবগণের নামের তালিকা" href="{{ url('/জেলা-সম্পর্কিত/ইউপি-চেয়ারম্যানগণের-নামের-তালিকা') }}">ইউপি
                                                                                    চেয়ারম্যানগণের নামের তালিকা</a></li>
                                                                    <li><a title="ইউপি চেয়ারম্যান ও সচিবগণের নামের তালিকা" href="{{ url('/জেলা-সম্পর্কিত/ইউপি-সচিবগণের-নামের-তালিকা') }}">ইউপি
                                                                                    সচিবগণের নামের তালিকা</a></li>
                                                                    <li><a title="ইউনিয়ন ডিজিটাল সেন্টারের উদ্যোক্তাদের তালিকা" href="{{ url('/জেলা-সম্পর্কিত/ইউনিয়ন-ডিজিটাল-সেন্টারের-উদ্যোক্তাদের-তালিকা') }}">ইউনিয়ন
                                                                                    ডিজিটাল সেন্টারের উদ্যোক্তাদের তালিকা</a></li>

                                                                    <li><a title="ICT তে বর্ষসেরা পুরস্কার প্রাপ্তদের তালিকা" href="{{ url('/জেলা-সম্পর্কিত/ICT-তে-বর্ষসেরা-পুরস্কার-প্রাপ্তদের-তালিকা') }}">ICT
                                                                                    তে বর্ষসেরা পুরস্কার প্রাপ্তদের তালিকা</a></li>
                                                            </ul>
                                                    </div>
                                            </div>
                                    </li>
                                    <li class="col2 mzr-drop"><a title="জেলা প্রশাসন" href="javascript:;">জেলা প্রশাসন</a>
                                            <div class="mzr-content drop-three-columns">
                                                    <div class="one-col">
                                                            <h6>জেলা প্রশাসক</h6>
                                                            <ul class="mzr-links">
                                                                    <li><a title="জেলা প্রশাসকের বার্তা" href="{{ url('/জেলা-প্রশাসন/জেলা-প্রশাসকের-বার্তা') }}">জেলা
                                                                                    প্রশাসকের বার্তা</a></li>
                                                                    <li><a title="প্রোফাইল" href="{{ url('/জেলা-প্রশাসন/প্রোফাইল') }}">প্রোফাইল</a>
                                                                    </li>
                                                                    <li><a title="পুর্বতন জেলা প্রশাসক ও মহুকুমা প্রশাসকগণের তালিকা" href="{{ url('/জেলা-প্রশাসন/পুর্বতন-জেলা-প্রশাসক-ও-মহুকুমা-প্রশাসকগণের-তালিকা') }}">পুর্বতন
                                                                                    জেলা প্রশাসক ও মহুকুমা প্রশাসকগণের তালিকা</a></li>
                                                            </ul>
                                                    </div>
                                                    <div class="one-col">
                                                            <h6>জেলা প্রশাসকের কার্যালয়</h6>
                                                            <ul class="mzr-links">
                                                                    <li><a title="জেলা প্রশাসনের পটভূমি" href="{{ url('/জেলা-প্রশাসন/জেলা-প্রশাসনের-পটভূমি') }}">জেলা
                                                                                    প্রশাসনের পটভূমি</a></li>
                                                                    <li><a title="সার্কিট হাউজ" href="{{ url('/জেলা-প্রশাসন/সার্কিট-হাউজ') }}">সার্কিট
                                                                                    হাউজ</a></li>
                                                                    <li><a title="যোগাযোগ" href="{{ url('/জেলা-প্রশাসন/যোগাযোগ') }}">যোগাযোগ</a>
                                                                    </li>
                                                                    <li><a title="সাংগনিক কাঠামো" href="{{ url('/জেলা-প্রশাসন/সাংগনিক-কাঠামো') }}">সাংগনিক
                                                                                    কাঠামো</a></li>
                                                                    <li><a title="সম্পদ ও লজিস্টিকস" href="{{ url('/জেলা-প্রশাসন/সম্পদ-ও-লজিস্টিকস') }}">সম্পদ
                                                                                    ও লজিস্টিকস</a></li>
                                                            </ul>
                                                    </div>
                                                    <div class="one-col">
                                                            <h6>উপ-পরিচালক/অতিরিক্ত জেলা প্রশাসক</h6>
                                                            <ul class="mzr-links">
                                                                    <li><a title="উপপরিচালক, স্থানীয় সরকার" href="{{ url('/জেলা-প্রশাসন/উপ-পরিচালক-স্থানীয়-সরকার') }}">উপপরিচালক,
                                                                                    স্থানীয় সরকার</a></li>
                                                                    <li><a title="অতিরিক্ত জেলা প্রশাসক (রাজস্ব)" href="{{ url('/জেলা-প্রশাসন/অতিরিক্ত-জেলা-প্রশাসক-রাজস্ব') }}">অতিরিক্ত
                                                                                    জেলা প্রশাসক (রাজস্ব)</a></li>
                                                                    <li><a title="অতিরিক্ত জেলাপ্রশাসক (সার্বিক)" href="{{ url('/জেলা-প্রশাসন/অতিরিক্ত-জেলা-প্রশাসক-সার্বিক') }}">অতিরিক্ত
                                                                                    জেলাপ্রশাসক (সার্বিক)</a></li>
                                                                    <li><a title="অতিরিক্ত জেলা ম্যাজিস্ট্রেট" href="{{ url('/জেলা-প্রশাসন/অতিরিক্ত-জেলা-ম্যাজিস্ট্রেট') }}">অতিরিক্ত
                                                                                    জেলা ম্যাজিস্ট্রেট</a></li>
                                                                    <li><a title="অতিরিক্ত জেলা প্রশাসক (শিক্ষা ও আইসিটি)" href="{{ url('/জেলা-প্রশাসন/অতিরিক্ত-জেলা-প্রশাসক-আইসিটি') }}">অতিরিক্ত
                                                                                    জেলা প্রশাসক (শিক্ষা ও আইসিটি)</a></li>
                                                            </ul>
                                                    </div>
                                            </div>
                                    </li>
                                    <li class="col3 mzr-drop"><a title="স্থানীয় সরকার" href="javascript:;">স্থানীয়
                                                    সরকার</a>
                                            <div class="mzr-content drop-three-columns">
                                                    <div class="one-col">
                                                            <h6> মেহেরপুর পৌরসভা</h6>
                                                            <ul class="mzr-links">
                                                                    <li><a title="পৌরসভা পরিচিতি" href="{{ url('/স্থানীয়-সরকার/পৌরসভা-পরিচিতি') }}">পৌরসভা
                                                                                    পরিচিতি</a></li>
                                                                    <li><a title="মেয়রের বাণী" href="{{ url('/স্থানীয়-সরকার/মেয়রের-বাণী') }}">মেয়রের
                                                                                    বাণী</a></li>
                                                                    <li><a title="প্রাক্তন মেয়র/প্রশাসক" href="{{ url('/স্থানীয়-সরকার/প্রাক্তন-মেয়র') }}">প্রাক্তন
                                                                                    মেয়র/প্রশাসক</a></li>
                                                                    <li><a title="কাউন্সিলরগন" href="{{ url('/স্থানীয়-সরকার/কাউন্সিলরগন') }}">কাউন্সিলরগন</a>
                                                                    </li>
                                                            </ul>
                                                    </div>
                                                    <div class="one-col">
                                                            <h6> পৌরসভার সংগঠন</h6>
                                                            <ul class="mzr-links">
                                                                    <li><a title="সাংগঠনিক কাঠামো" href="{{ url('/স্থানীয়-সরকার/সাংগঠনিক-কাঠামো') }}">সাংগঠনিক
                                                                                    কাঠামো</a></li>
                                                                    <li><a title="কর্মকর্তাবৃন্দ" href="{{ url('/স্থানীয়-সরকার/কর্মকর্তাবৃন্দ') }}">কর্মকর্তাবৃন্দ / কর্মচারীবৃন্দ</a>
                                                                    </li>
                                                                    <li><a title="ওয়ার্ডভিত্তিক এলাকা" href="{{ url('/স্থানীয়-সরকার/ওয়ার্ডভিত্তিক-এলাকা') }}">ওয়ার্ডভিত্তিক
                                                                                    এলাকা</a></li>
                                                            </ul>
                                                    </div>
                                                    <div class="one-col">
                                                            <h6>জেলা পরিষদ</h6>
                                                            <ul class="mzr-links">
                                                                    <li><a title="জেলা পরিষদ অফিস" href="{{ url('/স্থানীয়-সরকার/জেলা-পরিষদ-অফিস') }}">জেলা
                                                                                    পরিষদ অফিস</a></li>
                                                                    <li><a title="সাংগঠনিক কাঠামো" href="{{ url('/স্থানীয়-সরকার/জেলা-পরিষদ-সাংগঠনিক-কাঠামো') }}">সাংগঠনিক
                                                                                    কাঠামো</a></li>
                                                            </ul>
                                                    </div>
                                            </div>
                                    </li>
                                    <!-- <li class="col4 mzr-drop"><a title="সরকারি অফিস" href="javascript:;">সরকারি অফিস</a>
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
                    </li> -->

                                    <li class="col6 mzr-drop"><a title="গ্যালারি" href="javascript:;">গ্যালারি</a>
                                            <div class="mzr-content drop-two-columns">
                                                    <div class="one-col">
                                                            <h6></h6>
                                                            <ul class="mzr-links">
                                                                    <li><a title="ফটোগ্যালারি" href="site/view/photogallery/%e0%a6%ab%e0%a6%9f%e0%a7%8b%e0%a6%97%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%b2%e0%a6%be%e0%a6%b0%e0%a6%bf.html">ফটোগ্যালারি</a>
                                                                    </li>
                                                            </ul>
                                                    </div>
                                                    <div class="one-col">
                                                            <h6></h6>
                                                            <ul class="mzr-links">
                                                                    <li><a title="ভিডিও গ্যালারি" href="site/view/video-gallery/%e0%a6%ad%e0%a6%bf%e0%a6%a1%e0%a6%bf%e0%a6%93%20%e0%a6%97%e0%a7%8d%e0%a6%af%e0%a6%be%e0%a6%b2%e0%a6%be%e0%a6%b0%e0%a6%bf.html">ভিডিও
                                                                                    গ্যালারি</a></li>
                                                            </ul>
                                                    </div>
                                            </div>
                                    </li>
                                    <!-- <li class="col7 mzr-drop"><a title="ই-সেবা" href="javascript:;">ই-সেবা</a>
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
                    </li> -->
                            </ul>
                    </div>
            </div>
    </div>
    {{-- menu end --}}

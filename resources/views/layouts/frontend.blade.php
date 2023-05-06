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
    <title>
        @yield('title')
    </title>

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
    <link rel="stylesheet" href="{{ asset('frontend/slider/css/style.css') }}">

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
        @include('layouts.partials.frontend.header')

        <div id="contents" class="sixteen columns menu">
            @yield('contant')
        </div>

        @include('layouts.partials.frontend.footer')

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

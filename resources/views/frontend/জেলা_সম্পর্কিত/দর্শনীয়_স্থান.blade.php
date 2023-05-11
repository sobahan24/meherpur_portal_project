@extends('layouts.frontend')

@section('title')
মেহেরপুর জেলা | দর্শনীয় স্থান
@endsection

@section('contant')
<div style="float:right;" id="print_btn_div"><img src="{{asset('frontend/images')}}/print_btn.png" style="cursor: pointer;" onclick="print_content();" width="24" title="প্রিন্ট" alt="print_btn"></div>
<div id="printable_area">
    <h3>
        দর্শনীয় স্থান
    </h3>

    <table class="table table-advanced" style="text-align: center;">
        <thead style="font-weight: bold;">
            <tr>
                <td>ক্রমিক</td>
                <td>নাম</td>
                <td>কিভাবে যাওয়া যায়</td>
                <td>অবস্থান</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>১</td>
                <td><a href="{{ asset('frontend/images/tourist_spot/Mukjoddo-smrity-complex.jpg') }}" target="_blank" title="মুজিবনগর মুক্তিযুদ্ধ স্মৃতি কমপ্লেক্স এবং আম্রকানন">মুজিবনগর মুক্তিযুদ্ধ স্মৃতি কমপ্লেক্স এবং আম্রকানন</a></td>
                <td>
                    <p>মেহেরপুর জেলা সদর থেকে সড়ক পথে আম্রকাননের দূরত্ব ১৮ কি: মি:। বাস, স্থানীয় যান টেম্পু/লছিমন/করিমন এর সাহায্যে ৩০ মি: সময়ে ঐতিহাসিক আম্রকাননে পৌছানো যায়। যাতায়াত ভাড়া : মেহেরপুর সদর হতে বাস ভাড়া ২৫-৩০ টাকা ।</p>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>২</td>
                <td><a href="{{ asset('frontend/images/tourist_spot/shoid-smirty-soud.jpg') }}" target="_blank" title="মেহেরপুর শহীদ স্মৃতিসৌধ">মেহেরপুর শহীদ স্মৃতিসৌধ</a></td>
                <td>
                    <p>মেহেরপুর জেলা সদরে এটি অবস্থিত। বাস টার্মিনাল হতে রিক্সা/ভানে পৌঁছানো যায়</p>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>৩</td>
                <td><a href="{{ asset('frontend/images/tourist_spot/আমদহ-গ্রামের-স্থাপত্য-নিদর্শন.jpg') }}" target="_blank" title="আমদহ গ্রামের স্থাপত্য নিদর্শন">আমদহ গ্রামের স্থাপত্য নিদর্শন</a></td>
                <td>
                    <p>মেহেরপুর জেলা সদরে এটি অবস্থিত। বাস টার্মিনাল হতে রিক্সা/ভানে পৌঁছানো যায়</p>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>৪</td>
                <td><a href="{{ asset('frontend/images/tourist_spot/সিদ্ধেশ্বরী-কালী-মন্দির.jpg') }}" target="_blank" title="সিদ্ধেশ্বরী কালী মন্দির">সিদ্ধেশ্বরী কালী মন্দির</a></td>
                <td>
                    <p>মেহেরপুর জেলা সদরে এটি অবস্থিত। বাস টার্মিনাল হতে রিক্সা/ভানে পৌঁছানো যায়।</p>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>৫</td>
                <td><a href="{{ asset('frontend/images/tourist_spot/আমঝুপি-নীলকুঠি.jpg') }}" target="_blank" title="আমঝুপি নীলকুঠি">আমঝুপি নীলকুঠি</a></td>
                <td>
                    <p>মেহেরপুর জেলা সদর থেকে সড়ক পথে দূরত্ব ৭ কি: মি: । বাস, স্থানীয় যান টেম্পু/লছিমন/করিমন এর সাহায্যে ২৫ মি: সময়ে আমঝুপি নীলকুঠিতে পৌঁছানো যায়।</p>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>৬</td>
                <td><a href="{{ asset('frontend/images/tourist_spot/ইকোপার্ক.jpg') }}" target="_blank" title="ডিসি ইকোপার্ক/ভাটপাড়া নীলকুঠি, গাংনী, মেহেরপুর।">ডিসি ইকোপার্ক/ভাটপাড়া নীলকুঠি, গাংনী, মেহেরপুর।</a></td>
                <td>
                    <p>মেহেরপুর জেলা সদর থেকে সড়ক পথে দুরত্ব ১৭ কি: মি: । বাস, স্থানীয় যান টেম্পু/লছিমন/করিমন এর সাহায্যে ৪০মি: সময়ে ভাটপাড়া নীলকুঠিতে পৌঁছানো যায়।</p>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>৭</td>
                <td><a href="{{ asset('frontend/images/tourist_spot/ভবানন্দপুর-মন্দির.jpg') }}" target="_blank" title="ভবানন্দপুর মন্দির">ভবানন্দপুর মন্দির</a></td>
                <td>
                    <p>মেহেরপুর জেলা সদর থেকে সড়ক পথে দুরত্ব ১০ কি: মি:। স্থানীয় যান টেম্পু/লছিমন/করিমন এর সাহায্যে ২০ মি: সময়ে ভবানন্দপুর পৌঁছানো যায়।</p>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>৮</td>
                <td><a href="{{ asset('frontend/images/tourist_spot/পৌর-কবর.jpg') }}" target="_blank" title="মেহেরপুর পৌর কবর স্থান">মেহেরপুর পৌর কবর স্থান</a></td>
                <td>
                    <p>মেহেরপুর জেলা সদরে এটি অবস্থিত। মেহেরপুর বাসটার্মিনাল থেকে রিক্সা/ভানে পৌছানো যায়।</p>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>৯</td>
                <td><a href="{{ asset('frontend/images/tourist_spot/পৌর-ঈদগাহ.jpg') }}" target="_blank" title="পৌর ঈদগাহ">পৌর ঈদগাহ</a></td>
                <td>
                    <p>মেহেরপুর জেলা সদরে এটি অবস্থিত। মেহেরপুর বাসটার্মিনাল থেকে রিক্সা/ভানে পৌছানো যায়।</p>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>১০</td>
                <td><a href="{{ asset('frontend/images/tourist_spot/মেহেরপুর-পৌর-হল.jpg') }}" target="_blank" title="মেহেরপুর পৌর হল">মেহেরপুর পৌর হল</a></td>
                <td>
                    <p>মেহেরপুর জেলা সদরে এটি অবস্থিত। বাস টার্মিনাল হতে রিক্সা/ভানে পৌঁছানো যায়।</p>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>১১</td>
                <td><a href="{{ asset('frontend/images/tourist_spot/বল্লভপুর-চার্চ.jpg') }}" target="_blank" title="বল্লভপুর চার্চ, ভবের পাড়া।">বল্লভপুর চার্চ, ভবের পাড়া।</a></td>
                <td>
                    <p>মেহেরপুর সদর বাসস্ট্যান্ড হতে বাসযোগে মুজিবনগর। এরপর রিকশা বা অটোরিকশাযোগে যাওয়া যায়।</p>
                </td>
                <td></td>
            </tr>
            <tr>
                <td>১২</td>
                <td><a href="{{ asset('frontend/images/tourist_spot/স্বামী-নিগমানন্দ.jpg') }}" target="_blank" title="স্বামী নিগমানন্দ আশ্রম, কুতুবপুর, মেহেরপুর।">স্বামী নিগমানন্দ আশ্রম, কুতুবপুর, মেহেরপুর।</a></td>
                <td>
                    <p>মেহেরপুর জেলা সদর থেকে সড়ক পথে দূরত্ব প্রায় ১২ কি: মি:। বাস, স্থানীয় যান টেম্পু/লছিমন/করিমন এর সাহায্যে ৪০ মি: সময়ে&nbsp;স্বামী নিগমানন্দ আশ্রমে&nbsp;পৌঁছানো যায়।</p>
                </td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>



<script type="text/javascript">
    function print_content() {
        var html_content = $("#printable_area").html();

        newwindow = window.open();
        newdocument = newwindow.document;
        newdocument.write(html_content);
        newdocument.close();

        newwindow.print();

        return false;
    }
</script>
@endsection
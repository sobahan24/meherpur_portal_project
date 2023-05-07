@extends('layouts.frontend')

@section('title')
মেহেরপুর জেলা | হোটেল ও আবাসন
@endsection

@section('contant')
<div style="float:right;" id="print_btn_div"><img src="{{asset('frontend/images/print_btn.png')}}" style="cursor: pointer;" onclick="print_content();" width="24" title="প্রিন্ট" alt="print_btn"></div>

<div id="printable_area">
    <h3>হোটেল ও আবাসনের তালিকা</h3>
    <table class="bordered">
        <tbody>
            <tr>
                <td class="td_bold">ক্রমিক</td>
                <td class="td_bold">নাম</td>
                <td class="td_bold">পরিচালনাকারী/মালিকের নাম </td>
                <td class="td_bold">হোটেল/মোটেল/রেস্তোরাঁ/রেস্ট হাউজ/গেস্ট হাউজ/ডাকবাংলো ইত্যাদির ঠিকানা </td>
                <td class="td_bold">মোবাইল নং </td>
            </tr>
            <tr>
                <td class="td_bold" colspan="6">হোটেল ও আবাসনের ধরণঃ সরকারী</td>
            </tr>
            <tr>
                <td>১</td>
                <td><a target="_blank" href="http://www.meherpur.gov.bd/site/hotel_motel_guesthouse/7b4a6797-1c3a-11e7-8f57-286ed488c766/জেলা পরিষদ ডাকবাংলো" title="জেলা পরিষদ ডাকবাংলো">জেলা পরিষদ ডাকবাংলো</a></td>
                <td>জেলা পরিষদ, মেহেরপুর</td>
                <td>মেহেরপুর সদর, মেহেরপুর।</td>
                <td>০৭৯১ ৬২৪৬৪ </td>
            </tr>
            <tr>
                <td>২</td>
                <td><a target="_blank" href="http://www.meherpur.gov.bd/site/hotel_motel_guesthouse/7b4aaf34-1c3a-11e7-8f57-286ed488c766/সার্কিট হাউজ, মেহেরপুর" title="সার্কিট হাউজ, মেহেরপুর">সার্কিট হাউজ, মেহেরপুর</a></td>
                <td>জেলা প্রশাসক, মেহেরপুর</td>
                <td>সার্কিট হাউজ সড়ক, মেহেরপুর।</td>
                <td>০১৭০৮ ৪১০০০৫</td>
            </tr>
            <tr>
                <td>৩</td>
                <td><a target="_blank" href="http://www.meherpur.gov.bd/site/hotel_motel_guesthouse/7b4aafb1-1c3a-11e7-8f57-286ed488c766/পরিদর্শন বাংলো, মুজিবনগর" title="পরিদর্শন বাংলো, মুজিবনগর">পরিদর্শন বাংলো, মুজিবনগর</a></td>
                <td>জেলা পরিষদ, মেহেরপুর</td>
                <td>মুজিবনগর কমপ্লেক্স ও আম্রকানন সংলগ্ন, মুজিবনগর, মেহেরপুর।</td>
                <td>০১৫৫৩৫৩৯১৮৫</td>
            </tr>
            <tr>
                <td>৪</td>
                <td><a target="_blank" href="http://www.meherpur.gov.bd/site/hotel_motel_guesthouse/7b4ab037-1c3a-11e7-8f57-286ed488c766/গেস্ট হাউজ, সড়ক ও জনপথ বিভাগ" title="গেস্ট হাউজ, সড়ক ও জনপথ বিভাগ">গেস্ট হাউজ, সড়ক ও জনপথ বিভাগ</a></td>
                <td>মেহেরপুর সড়ক বিভাগ</td>
                <td>মেহেরপুর সদর, মেহেরপুর।</td>
                <td>০৭৯১ ৬২৯৩৩</td>
            </tr>
            <tr>
                <td class="td_bold" colspan="6">হোটেল ও আবাসনের ধরণঃ বেসরকারী</td>
            </tr>
            <tr>
                <td>১</td>
                <td><a target="_blank" href="http://www.meherpur.gov.bd/site/hotel_motel_guesthouse/7b4ab0ba-1c3a-11e7-8f57-286ed488c766/পৌর গেস্ট হাউজ, পৌর হল" title="পৌর গেস্ট হাউজ, পৌর হল">পৌর গেস্ট হাউজ, পৌর হল</a></td>
                <td>মেহেরপুর পৌর সভা</td>
                <td>প্রধান সড়ক, মেহেরপুর।</td>
                <td>০১৭২০ ৪৫৮৪৩০</td>
            </tr>
            <tr>
                <td>২</td>
                <td><a target="_blank" href="http://www.meherpur.gov.bd/site/hotel_motel_guesthouse/7b4ab159-1c3a-11e7-8f57-286ed488c766/গেস্ট হাউজ, মেহেরপুর পল্লী বিদুৎ সমিতি" title="গেস্ট হাউজ, মেহেরপুর পল্লী বিদুৎ সমিতি">গেস্ট হাউজ, মেহেরপুর পল্লী বিদুৎ সমিতি</a></td>
                <td>ব্যবস্থাপক</td>
                <td>পুলিশ লাইন সড়ক, মেহেরপুর।</td>
                <td>০১৭৬৯ ৪০০০৪৮</td>
            </tr>
            <tr>
                <td>৩</td>
                <td><a target="_blank" href="http://www.meherpur.gov.bd/site/hotel_motel_guesthouse/7b4ab1ed-1c3a-11e7-8f57-286ed488c766/ফিন টাওয়ার আবাসিক হোটেল" title="ফিন টাওয়ার আবাসিক হোটেল">ফিন টাওয়ার আবাসিক হোটেল</a></td>
                <td>ব্যবস্থাপক</td>
                <td>বাসস্ট্যান্ড, মেহেরপুর।</td>
                <td>০১৭৩৬ ৬৪৭৯৬১</td>
            </tr>
            <tr>
                <td>৪</td>
                <td><a target="_blank" href="http://www.meherpur.gov.bd/site/hotel_motel_guesthouse/7b4ab291-1c3a-11e7-8f57-286ed488c766/নাইট বিলাস আবাসিক হোটেল" title="নাইট বিলাস আবাসিক হোটেল">নাইট বিলাস আবাসিক হোটেল</a></td>
                <td>ব্যবস্থাপক, নাইট বিলাস আবাসিক হোটেল</td>
                <td>বাসষ্ট্যান্ড রোড, মেহেরপুর।</td>
                <td>০১৯১৮৭৮৯০৬৬</td>
            </tr>
            <tr>
                <td>৫</td>
                <td><a target="_blank" href="http://www.meherpur.gov.bd/site/hotel_motel_guesthouse/7b4ab3bc-1c3a-11e7-8f57-286ed488c766/অনাবিল আবাসিক হোটেল" title="অনাবিল আবাসিক হোটেল">অনাবিল আবাসিক হোটেল</a></td>
                <td>ব্যবস্থাপক, অনাবিল আবাসিক হোটেল।</td>
                <td>বড় বাজার, প্রধান সড়ক, মেহেরপুর।</td>
                <td>০১৭১২২৮৭৭০৩</td>
            </tr>
            <tr>
                <td>৬</td>
                <td><a target="_blank" href="http://www.meherpur.gov.bd/site/hotel_motel_guesthouse/7b4ab459-1c3a-11e7-8f57-286ed488c766/শাহাজাদী আবাসিক হোটেল" title="শাহাজাদী আবাসিক হোটেল">শাহাজাদী আবাসিক হোটেল</a></td>
                <td>ব্যবস্থাপক, শাহাজাদী আবাসিক হোটেল</td>
                <td>বাসষ্ট্যান্ড রোড, মেহেরপুর।</td>
                <td>০১৭১৭ ৪৮২৪৩৪</td>
            </tr>
            <tr>
                <td>৭</td>
                <td><a target="_blank" href="http://www.meherpur.gov.bd/site/hotel_motel_guesthouse/7b4ab5e1-1c3a-11e7-8f57-286ed488c766/প্রিন্স আবাসিক হোটেল" title="প্রিন্স আবাসিক হোটেল">প্রিন্স আবাসিক হোটেল</a></td>
                <td>ব্যবস্থাপক, প্রিন্স আবাসিক হোটেল।</td>
                <td>বাসস্ট্যান্ড রোড, মেহেরপুর।</td>
                <td>০৭১৭৫৩০৬০০৭</td>
            </tr>
            <tr>
                <td>৮</td>
                <td><a target="_blank" href="http://www.meherpur.gov.bd/site/hotel_motel_guesthouse/7b4ab68b-1c3a-11e7-8f57-286ed488c766/মিতা আবাসিক হোটেল" title="মিতা আবাসিক হোটেল">মিতা আবাসিক হোটেল</a></td>
                <td>ব্যবস্থাপক, মিতা আবাসিক হোটেল</td>
                <td>বড় বাজার, মেহেরপুর।</td>
                <td>০১৮১২৪৮৫৪৪১</td>
            </tr>
        </tbody>
    </table>


    <style>
        .td_bold {
            font-weight: bold;
            background-color: #ccc;
        }
    </style>
    
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
</div>
@endsection
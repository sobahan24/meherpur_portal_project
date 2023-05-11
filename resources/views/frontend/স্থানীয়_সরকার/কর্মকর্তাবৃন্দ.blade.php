@extends('layouts.frontend')

@section('title')
মেহেরপুর জেলা | কর্মকর্তাবৃন্দ / কর্মচারীবৃন্দ
@endsection

@section('contant')
<div id="printable_area">

    <h3>কর্মকর্তাবৃন্দ</h3>
    <div>
        <p></p>
        <p>কর্মকর্তাদের তথ্য</p>

        <table cellpadding="2" cellspacing="3" class="mce-item-table" style="width:100%">
            <tbody>
                <tr>
                    <td><strong>ক্রমিক নং</strong></td>
                    <td><strong>নাম</strong></td>
                    <td><strong>পদবী</strong></td>
                    <td><strong>ঠিকানা</strong></td>
                    <td><strong>মোবাইল নাম্বার</strong></td>
                    <td><strong>শিক্ষাগত যোগ্যতা</strong></td>
                    <td><strong>জন্ম তারিখ</strong></td>
                    <td><strong>View</strong></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>মোহাম্মদ আশরাফুজ্জামান ভূঁইয়া</td>
                    <td>প্রধান নির্বাহী কর্মকর্তা(অতিরিক্ত দায়িত্ব)</td>
                    <td>মেহেরপুর</td>
                    <td>০১৭০৮৪১০০০২</td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                    <td><a href="#" id="ctl00_CPHBody_Repeater1_ctl01_HyperLink1" title="বিস্তারিত ">বিস্তারিত </a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>আবু হেনা মোস্তফা কামাল</td>
                    <td>সহঃ প্রকৌশলী(সিভিল)</td>
                    <td>মহিলা কলেজ রোড, পোঃ- মেহেরপুর, থানা ও জেলা- মেহেরপুর।</td>
                    <td>০১৭১৬০১২৪৩৩</td>
                    <td>এইচ, এস, সি</td>
                    <td>17/12/1966</td>
                    <td><a href="#" id="ctl00_CPHBody_Repeater1_ctl01_HyperLink1" title="বিস্তারিত ">বিস্তারিত </a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>খোন্দকার জাহিদুল হক</td>
                    <td>বস্তি উন্নয়ন কর্মকর্তা</td>
                    <td>পৌর পানি অফিস কোয়ার্টার, গড়পাড়া, ওয়ার্ড নং-০৬, মেহেরপুর।</td>
                    <td>০১৭১২৮৫১৭৫৮</td>
                    <td>এমএসএস</td>
                    <td>30/06/1978</td>
                    <td><a href="#" id="ctl00_CPHBody_Repeater1_ctl02_HyperLink1" title="বিস্তারিত">বিস্তারিত</a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>মোঃ মাজেদুল হক</td>
                    <td>উপ-সহঃপ্রকৌশলী(সিভিল)</td>
                    <td>মেহেরপুর পৌরসভা, মেহেরপুর।</td>
                    <td>০১৭১৬৬৩৮৮১১</td>
                    <td>ডিপ্লোমা</td>
                    <td>29/08/1978</td>
                    <td><a href="#" id="ctl00_CPHBody_Repeater1_ctl03_HyperLink1" title="বিস্তারিত ">বিস্তারিত </a></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>মোঃ জয়নাল আবেদীন</td>
                    <td>প্রশাসনিক কর্মকর্তা</td>
                    <td>মেহেরপুর মন্ডলপাড়া, ওয়ার্ড নং-০৬, মেহেরপুর পৌরসভা।</td>
                    <td>০১৯১৪৬৫৩৪৯৫</td>
                    <td>বিএ পাস</td>
                    <td>16/03/1973</td>
                    <td><a href="#" id="ctl00_CPHBody_Repeater1_ctl04_HyperLink1" title="বিস্তারিত">বিস্তারিত</a></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>মোঃ হারুন-উর-রশিদ</td>
                    <td>নির্বাহী প্রকৌশলী</td>
                    <td>মেহেরপুর পৌরসভা, মেহেরপুর।</td>
                    <td>০১৭৩৩৭২৮৫৯৬</td>
                    <td>এম, এস-সি</td>
                    <td>03/05/1965</td>
                    <td><a href="#" id="ctl00_CPHBody_Repeater1_ctl05_HyperLink1" title="বিস্তারিত ">বিস্তারিত </a></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>মোঃ তফিকুল আলম</td>
                    <td>সচিব</td>
                    <td>মন্ডলপাড়া, মেহেরপুর।</td>
                    <td>০১৭২০৪৫৮৪৩০</td>
                    <td>এমএসএস</td>
                    <td>30/11/1971</td>
                    <td><a href="#" id="ctl00_CPHBody_Repeater1_ctl06_HyperLink1" title="বিস্তারিত">বিস্তারিত</a></td>
                </tr>
                <tr>
                    <td>8</td>
                    <td>মোঃ আবুল কালাম আজাদ</td>
                    <td>হিসাব রক্ষন কর্মকর্তা</td>
                    <td>মল্লিকপাড়া, ওয়ার্ড নং-০৭, মেহেরপুর পৌরসভা।</td>
                    <td>০১৭১০৯৬৬৭৯৬</td>
                    <td>বিকম পাস</td>
                    <td>05/01/1966</td>
                    <td><a href="#" id="ctl00_CPHBody_Repeater1_ctl07_HyperLink1" title="বিস্তারিত ">বিস্তারিত </a></td>
                </tr>
            </tbody>
        </table>
        <p></p>
    </div>
    <style></style>
    <script></script>
</div>
@endsection
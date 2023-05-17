@extends('layouts.frontend')

@section('title')
মেহেরপুর জেলা | হোটেল ও আবাসনের তালিকা | {{ $hotelAbashan->name }}
@endsection

@section('contant')
<div style="float:right;" id="print_btn_div"><img src="{{asset('frontend/images')}}/print_btn.png" style="cursor: pointer;" onclick="print_content();" width="24" title="প্রিন্ট" alt="print_btn"></div>
<div id="printable_area">
    <h3>হোটেল ও আবাসনের বিবরণ</h3>
    <hr>
    <div style="margin-top: 10px;">
        <p><strong><u> হোটেল / আবাসনের নাম</u> :</strong>
            {{ $hotelAbashan->name }}
        </p>

        <p style="margin-top: 10px"><strong><u>পরিচালনাকারীর নাম</u> :</strong>
            <span style="background-color:rgb(255, 255, 255);">
                {{ $hotelAbashan->ownerName }}
            </span>
        </p>
        <p style="margin-top: 10px"><strong><u>ঠিকানা</u> :</strong>
            <span style="background-color:rgb(255, 255, 255);">
                {{ $hotelAbashan->address }}
            </span>
        </p>
        <p style="margin-top: 10px"><strong><u>মোবাইল নং</u> :</strong>
            <span style="background-color:rgb(255, 255, 255);">
                {{ $hotelAbashan->mobile }}
            </span>
        </p>
        <p style="margin-top: 10px"><strong><u>আবাসনের ধরণ</u> :</strong>
            <span style="background-color:rgb(255, 255, 255);">
                {{ $hotelAbashan->abashanDharon }}
            </span>
        </p>
        <p style="margin-top: 10px"><strong><u>বিবরণ</u> :</strong>
            <span style="background-color:rgb(255, 255, 255);">
                {{ $hotelAbashan->biboron }}
            </span>
        </p>
    </div>
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
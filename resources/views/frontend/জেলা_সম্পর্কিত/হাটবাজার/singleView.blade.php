@extends('layouts.frontend')

@section('title')
মেহেরপুর জেলা | হাটবাজার | {{ $hatBazar->name }}
@endsection

@section('contant')
<div style="float:right;" id="print_btn_div"><img src="{{asset('frontend/images')}}/print_btn.png" style="cursor: pointer;" onclick="print_content();" width="24" title="প্রিন্ট" alt="print_btn"></div>
<div id="printable_area">
    <h3>হাটবাজারের বিবরণ</h3>
    <hr>
    <div style="margin-top: 10px;">
        <p><strong><u> হাটবাজারের নাম</u> :</strong>
            {{ $hatBazar->name }}
        </p>

        <p style="margin-top: 10px"><strong><u>আয়তন</u> :</strong>
            <span style="background-color:rgb(255, 255, 255);">
                {{ $hatBazar->ayoton }}
            </span>
        </p>
        <p style="margin-top: 10px"><strong><u>চান্দিনা ভিটির সংখ্যা</u> :</strong>
            <span style="background-color:rgb(255, 255, 255);">
                {{ $hatBazar->chandinaViti }}
            </span>
        </p>
        <p style="margin-top: 10px"><strong><u>ইজারা মূল্য</u> :</strong>
            <span style="background-color:rgb(255, 255, 255);">
                {{ $hatBazar->ijara }}
            </span>
        </p>
        <p style="margin-top: 10px"><strong><u>ঠিকানা</u> :</strong>
            <span style="background-color:rgb(255, 255, 255);">
                {{ $hatBazar->address }}
            </span>
        </p>
        <p style="margin-top: 10px"><strong><u>বিবরণ</u> :</strong>
            <span style="background-color:rgb(255, 255, 255);">
                {{ $hatBazar->biboron }}
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
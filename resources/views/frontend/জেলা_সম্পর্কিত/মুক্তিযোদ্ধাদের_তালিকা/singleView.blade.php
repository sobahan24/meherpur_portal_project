@extends('layouts.frontend')

@section('title')
মেহেরপুর জেলা | মুক্তিযোদ্ধাদের তালিকা | {{ $muktizoddha->name }}
@endsection

@section('contant')
<div style="float:right;" id="print_btn_div"><img src="{{asset('frontend/images')}}/print_btn.png" style="cursor: pointer;" onclick="print_content();" width="24" title="প্রিন্ট" alt="print_btn"></div>
<div id="printable_area">
    <h3>মুক্তিযোদ্ধার বিবরণ</h3>
    <hr>
    <div style="margin-top: 10px;">
        <p style="margin-top: 10px"><strong><u>মুক্তিযোদ্ধার নাম</u> :</strong>
            <span style="background-color:rgb(255, 255, 255);">
                {{ $muktizoddha->name }}
            </span>
        </p>
        <p style="margin-top: 10px"><strong><u>পিতার নাম</u> :</strong>
            <span style="background-color:rgb(255, 255, 255);">
                {{ $muktizoddha->fatherName }}
            </span>
        </p>
        <p style="margin-top: 10px"><strong><u>মাতার নাম</u> :</strong>
            <span style="background-color:rgb(255, 255, 255);">
                {{ $muktizoddha->motherName }}
            </span>
        </p>
        <p style="margin-top: 10px"><strong><u>গ্রাম</u> :</strong>
            <span style="background-color:rgb(255, 255, 255);">
                {{ $muktizoddha->gram }}
            </span>
        </p>
        <p style="margin-top: 10px"><strong><u>উপজেলা</u> :</strong>
            <span style="background-color:rgb(255, 255, 255);">
                {{ $muktizoddha->upozila }}
            </span>
        </p>
        <p style="margin-top: 10px"><strong><u>জেলা</u> :</strong>
            <span style="background-color:rgb(255, 255, 255);">
                {{ $muktizoddha->zila }}
            </span>
        </p>
        <p style="margin-top: 10px"><strong><u>মুক্তিযোদ্ধার সম্পর্কে</u> :</strong>
            <span style="background-color:rgb(255, 255, 255);">
                {{ $muktizoddha->biboron }}
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

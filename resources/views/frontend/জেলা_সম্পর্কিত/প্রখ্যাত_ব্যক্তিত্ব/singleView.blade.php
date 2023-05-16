@extends('layouts.frontend')

@section('title')
মেহেরপুর জেলা | প্রখ্যাত ব্যক্তিত্ব | {{ $famousPerson->name }}
@endsection

@section('contant')
<div style="float:right;" id="print_btn_div"><img src="{{asset('frontend/images')}}/print_btn.png" style="cursor: pointer;" onclick="print_content();" width="24" title="প্রিন্ট" alt="print_btn"></div>
<div id="printable_area">
    <h3>প্রখ্যাত ব্যক্তির বিবরণ</h3>
    <hr>
    <div style="margin-top: 10px;">
        <p><strong><u> ব্যক্তির নাম</u> :</strong>
            {{ $famousPerson->name }}
        </p>

        <p style="margin-top: 10px"><strong><u>জন্মতারিখ</u> :</strong>
            <span style="background-color:rgb(255, 255, 255);">
                {{ $famousPerson->birthday }}
            </span>
        </p>
        <p style="margin-top: 10px"><strong><u>মৃত্যুতারিখ</u> :</strong>
            <span style="background-color:rgb(255, 255, 255);">
                {{ $famousPerson->dieDay }}
            </span>
        </p>
        <p style="margin-top: 10px"><strong><u>কোন বিষয়ে বিখ্যাত, জীবন, পুরস্কার/খেতাব</u> :</strong>
            <span style="background-color:rgb(255, 255, 255);">
                {{ $famousPerson->details }}
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
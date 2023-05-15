



@extends('layouts.frontend')

@section('title')
মেহেরপুর জেলা | দর্শনীয়_স্থান | {{ $touristSpot->name }}
@endsection

@section('contant')
<div style="float:right;" id="print_btn_div"><img src="{{asset('frontend/images')}}/print_btn.png" style="cursor: pointer;" onclick="print_content();" width="24" title="প্রিন্ট" alt="print_btn"></div>
<div id="printable_area">
    <h3>{{ $touristSpot->name }}</h3>

    <img style="max-width:800px;" src="{{ asset('frontend/images/tourist_spot/Mukjoddo-smrity-complex.jpg') }}" alt="Mukjoddo smrity complex" width="" height="">
    <div>
        <p><strong><u> সংক্ষিপ্ত বিবরণ</u></strong> <strong>:</strong>
            {{ $touristSpot->biboron }}
        </p>

        <p style="margin-top: 10px"><strong><u>আবাসন ব্যবস্থা</u></strong><span> </span><strong>:</strong>
            <span style="background-color:rgb(255, 255, 255);">
            {{ $touristSpot->abashan }}
            </span>
        </p>


        <p style="font-weight: bold; margin-top:10px">
            <strong><u>কিভাবে যাওয়া যায়:</u></strong>
        </p>
        <p>
        </p>
        <p>{{ $touristSpot->thikana }}</p>
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
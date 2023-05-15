@extends('layouts.frontend')

@section('title')
মেহেরপুর জেলা | দর্শনীয়_স্থান | সংযোজন
@endsection

@section('contant')

<div id="printable_area">
    <h3>নতুন তথ্য সংযোজন</h3>
    <div style="border: 1px solid #e9e2e2; padding:5px">
        <a href="{{ url('/জেলা-সম্পর্কিত/দর্শনীয়-স্থান') }}" class="btn-view" style="float:right">Back</a>
        <form action="{{ url('/জেলা-সম্পর্কিত/দর্শনীয়-স্থান/insert') }}" method="POST" enctype="multipart/form-data" style="padding: 10px; background: #dedede24;">
            @csrf
            <div class="mb-3">
                <label style="margin-top: 10px;">স্থানের নামঃ</label>
                <input type="text" name="name" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">ছবিঃ</label>
                <input type="file" name="image" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">সংক্ষিপ্ত বিবরণঃ</label>
                <textarea type="text" name="biboron" style="width: -webkit-fill-available;"></textarea>
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">আবাসন ব্যবস্থাঃ</label>
                <textarea type="text" name="abashan" style="width: -webkit-fill-available;"></textarea>
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">কিভাবে যাওয়া যায়ঃ</label>
                <textarea type="text" name="thikana" style="width: -webkit-fill-available;"></textarea>
            </div>
            <button type="submit" class="btn-view" style="margin-top: 10px;">Submit</button>
        </form>
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

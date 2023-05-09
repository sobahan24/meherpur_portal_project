@extends('layouts.frontend')

@section('title')
মেহেরপুর জেলা | মাসিক কর্মসূচী
@endsection

@section('contant')
<div id="printable_area">

    <h3>মাসিক কর্মসূচী</h3>
    <div>
        <p></p>
        <p><span style="font-size:16px">জেলা প্রশাসক ও জেলা ম্যাজিস্ট্রেট, মেহেরপুর এর সেপ্টেম্বর ২০২২ মাসের সম্ভাব্য ভ্রমণসূচি/কর্মসূচি এবং মাসিক সভাসমূহ</span></p>
        <p></p>
        <a href="" title=" ভ্রমণসূচি/কর্মসূচি।"><img src="{{ asset('frontend/images/pdf.png') }}" alt="pdf" class="file-icon"> ভ্রমণসূচি/কর্মসূচি।</a><br>
        <div>
            <div class="viewer" style="background-color: rgb(255, 255, 255); width: 720px;"><iframe width="720" height="600" src=""></iframe></div>
        </div><br><br>
        <a href="" title=" সভাসমূহ।"><img src="{{ asset('frontend/images/pdf.png') }}" alt="pdf" class="file-icon"> সভাসমূহ।</a><br>
        <div>
            <div class="viewer" style="background-color: rgb(255, 255, 255); width: 720px;"><iframe width="720" height="600" src=""></iframe></div>
        </div><br><br>
    </div>
</div>
@endsection
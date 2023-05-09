@extends('layouts.frontend')

@section('title')
মেহেরপুর জেলা | যোগাযোগ
@endsection

@section('contant')
<div id="printable_area">


    <div style="padding:30px;">
        <h3>যোগাযোগ</h3>
        <p> ড. মোহাম্মদ মুনসুর আলম খান</p>
        <p> জেলা প্রশাসক, মেহেরপুর।</p>
        <p> ফোনঃ ০৭৯১-৬২৩০১ (অফিস)</p>
        <p> মোবাইল: ০১৭০৮৪১০০০০</p>
        <p> ফ্যাক্সঃ ০৭৯১-৪৫০ </p>
        <p> মেহেরপুর কোড-০৭৯১</p>
    </div>
    <div style="padding:30px;">
        <p style="font-weight:bold">ছবি</p>
        <p><img style="max-width:500px;" src="{{ asset('frontend/images/dc_office_google_map.jpg') }}" alt="dc office google map" width="" height=""></p><br>

    </div>

</div>
@endsection
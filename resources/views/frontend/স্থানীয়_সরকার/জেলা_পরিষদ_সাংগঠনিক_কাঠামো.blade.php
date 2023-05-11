@extends('layouts.frontend')

@section('title')
মেহেরপুর জেলা | জেলা পরিষদ সাংগঠনিক কাঠামো
@endsection

@section('contant')
<div id="printable_area">

    <h3>সাংগঠনিক কাঠামো</h3>
    <div>
        <p></p>
        <p style="font-weight:bold">সংযুক্তি</p><a href="{{ asset('frontend/images/pdf/Arganogram.pdf') }}" title=" Arganogram.pdf"><img src="{{ asset('frontend/images/pdf.png') }}" alt="pdf" class="file-icon"> Arganogram.pdf</a><br>
        <div>
            <div class="viewer" style="background-color: rgb(255, 255, 255); width: 720px;"><iframe width="720" height="600" src="{{ asset('frontend/images/pdf/Arganogram.pdf') }}"></iframe></div>
        </div><br><br>
    </div>
</div>
@endsection
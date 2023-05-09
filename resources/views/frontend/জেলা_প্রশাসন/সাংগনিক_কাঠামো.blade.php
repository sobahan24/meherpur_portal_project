@extends('layouts.frontend')

@section('title')
মেহেরপুর জেলা | সাংগনিক কাঠামো
@endsection

@section('contant')
<div id="printable_area"><u>পাতা</u>

    <h3>সাংগনিক কাঠামো</h3>
    <div>
        <a href="{{ asset('frontend/images/sangothonik_kathamo.jpg') }}" download>
            <img src="{{ asset('frontend/images/sangothonik_kathamo.jpg') }}" alt="">
        </a>
    </div>
</div>
@endsection
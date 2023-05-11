@extends('layouts.frontend')

@section('title')
মেহেরপুর জেলা | মানচিত্রে_জেলা
@endsection

@section('contant')
<div id="printable_area">

    <h3>মানচিত্রে জেলা</h3>
    <div>
        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233657.66456145648!2d88.57844505412116!3d23.78653914500613!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f94a104fc1c02f%3A0xbac2303153cf2bb!2sMeherpur%20District!5e0!3m2!1sen!2sbd!4v1623322167116!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></p>
        <p style="font-weight:bold">ছবি</p>
        <p><img style="max-width:600px;" src="{{ asset('frontend/images/meherpur-map.jpg') }}" alt="meherpur-map" width="" height=""></p><br>
        
    </div>
</div>
@endsection
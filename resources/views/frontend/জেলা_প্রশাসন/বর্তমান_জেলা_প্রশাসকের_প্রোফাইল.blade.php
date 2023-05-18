@extends('layouts.frontend')

@section('title')
মেহেরপুর জেলা | জেলা প্রশাসক | {{ $ZilaProsasok->name }}
@endsection

@section('contant')
<div id="printable_area" style="display: flex;">
    <div style="padding: 10px 35px ">
        <img style="max-width:200px;" src="{{ asset('assets/uploads/ZilaProsasok/'.$ZilaProsasok->image) }}" alt="{{ $ZilaProsasok->name.' image here' }}" width="180px" height="180px">
    </div>
    <div style="width: 75%;">
        <h3 class="name" style="margin-bottom: 0px;">{{ $ZilaProsasok->name }}</h3>
        <p class="designation">{{ $ZilaProsasok->padobi }}</p>
        <hr style="margin-block: 7px;">
        <p class="mobile"><span><strong>মোবাইল :</strong></span> {{ $ZilaProsasok->mobile }}</p>
        <p class="phone"><span><strong>ফোন (অফিস) :</strong></span>{{ $ZilaProsasok->phone }}</p>
        <p class="email"><span><strong>ইমেইল :</strong></span> <a href="mailto:{{ $ZilaProsasok->email }}" title="{{ $ZilaProsasok->email }}">{{ $ZilaProsasok->email }}</a></p>
        <p class="fax"><span><strong>ফ্যাক্স :</strong></span> অফিস {{ $ZilaProsasok->faxOffice }}, বাসা {{ $ZilaProsasok->faxHome }}</p>
        <p class="batch"><span><strong>ব্যাচ (বিসিএস) :</strong></span> {{ $ZilaProsasok->batch }}</p>
        <p class="joining_date"><span><strong>কর্মকাল :</strong></span> {{ $ZilaProsasok->kormokal }}</p>
    </div>
</div>

@endsection
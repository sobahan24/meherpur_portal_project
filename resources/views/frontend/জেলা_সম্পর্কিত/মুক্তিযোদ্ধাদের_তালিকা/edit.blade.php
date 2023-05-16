@extends('layouts.frontend')

@section('title')
মেহেরপুর জেলা | মুক্তিযোদ্ধাদের তালিকা | এডিট
@endsection

@section('contant')
<div id="printable_area">
    <h3>মুক্তিযোদ্ধার তথ্য আপডেট করুণ</h3>
    <div style="border: 1px solid #e9e2e2; padding:5px">
        <a href="{{ url('/জেলা-সম্পর্কিত/মুক্তিযোদ্ধাদের-তালিকা') }}" class="btn-view" style="float:right; color:#fff">Back</a>
        <form action="{{ url('/জেলা-সম্পর্কিত/মুক্তিযোদ্ধাদের-তালিকা/update/'.$muktizoddha->id) }}" method="POST" enctype="multipart/form-data" style="padding: 10px; background: #dedede24;">
            @csrf
            <div class="mb-3">
                <label style="margin-top: 10px;">মুক্তিযোদ্ধার নাম:</label>
                <input type="text" value="{{ $muktizoddha->name }}" name="name" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">পিতার নাম:</label>
                <input type="text" value="{{ $muktizoddha->fatherName }}" name="fatherName" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">মাতার নাম:</label>
                <input type="text" value="{{ $muktizoddha->motherName }}" name="motherName" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">গ্রাম:</label>
                <input type="text" value="{{ $muktizoddha->gram }}" name="gram" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div style="display:flex width:100%;">
                <div style="width: 50%; float:left">
                    <label style="margin-top: 10px;">উপজেলা:</label>
                    <select class="form-select" name="upozila" style="height: 40px; width:-webkit-fill-available; margin-right:4px">
                        <option  value="মেহেরপুর সদর" {{ $muktizoddha->status == 'মেহেরপুর সদর' ? 'selected' : '' }}>মেহেরপুর সদর</option>
                        <option  value="মুজিবনগর" {{ $muktizoddha->status == 'মুজিবনগর' ? 'selected' : '' }}>মুজিবনগর</option>
                        <option  value="গাংনী" {{ $muktizoddha->status == 'গাংনী' ? 'selected' : '' }}>গাংনী</option>
                    </select>
                </div>
                <div style="width: 50%; float:right">
                    <label style="margin-top: 10px;">জেলা:</label>
                    <select class="form-select" name="zila" style="height: 40px; width:-webkit-fill-available;">
                        <option  value="মেহেরপুর" {{ $muktizoddha->status == 'মেহেরপুর' ? 'selected' : '' }}>মেহেরপুর</option>
                    </select>
                </div>
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">মুক্তিযোদ্ধার সম্পর্কে:</label>
                <textarea type="text" name="biboron" style="width: -webkit-fill-available;">{{ $muktizoddha->biboron }}</textarea>
            </div>
            @can('status')
                <div class="mb-3">
                    <label style="margin-top: 10px;">স্ট্যাটাস:</label>
                    <select class="form-select" name="status">
                        <option  value="0" {{ $muktizoddha->status == '0' ? 'selected' : '' }} >Hided</option>
                        <option  value="1" {{ $muktizoddha->status == '1' ? 'selected' : '' }} >Displayed</option>
                    </select>
                </div>
            @endcan


            <button type="submit" class="btn-view" style="margin-top: 10px;">Update</button>
        </form>
    </div>
</div>

@endsection

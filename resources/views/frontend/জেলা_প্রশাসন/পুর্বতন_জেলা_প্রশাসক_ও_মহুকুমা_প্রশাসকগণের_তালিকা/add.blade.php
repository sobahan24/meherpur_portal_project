@extends('layouts.frontend')

@section('title')
মেহেরপুর জেলা | জেলা প্রশাসক | সংযোজন
@endsection

@section('contant')
<div id="printable_area">
    <h3>জেলা প্রশাসকগণের তথ্য সংযোজন</h3>
    <div style="border: 1px solid #e9e2e2; padding:5px">
        <a href="{{ url('/জেলা-প্রশাসন/পুর্বতন-জেলা-প্রশাসক-ও-মহুকুমা-প্রশাসকগণের-তালিকা') }}" class="btn-view" style="float:right; color:#fff">Back</a>
        <form action="{{ url('/জেলা-প্রশাসন/পুর্বতন-জেলা-প্রশাসক-ও-মহুকুমা-প্রশাসকগণের-তালিকা/insert') }}" method="POST" enctype="multipart/form-data" style="padding: 10px; background: #dedede24;">
            @csrf
            <div class="mb-3">
                <label style="margin-top: 10px;">নাম:</label>
                <input type="text" name="name" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">পদবি:</label>
                <select class="form-select" name="padobi" style="height: 40px; width:-webkit-fill-available;">
                    <<option value="জেলা প্রশাসক">জেলা প্রশাসক</option>
                </select>
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">মোবাইল:</label>
                <input type="number" name="mobile" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">ফোন (অফিস):</label>
                <input type="number" name="phone" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">ইমেইল:</label>
                <input type="email" name="email" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">ফ্যাক্স অফিস:</label>
                <input type="number" name="faxOffice" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">ফ্যাক্স বাসা:</label>
                <input type="number" name="faxHome" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">ব্যাচ (বিসিএস):</label>
                <input type="number" name="batch" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">কর্মকাল:</label>
                <input type="text" name="kormokal" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">ছবি:</label>
                <input type="file" name="image" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">জেলা প্রশাসকের বার্তা:</label>
                <textarea type="text" name="barta" style="width: -webkit-fill-available;"></textarea>
            </div>
            <button type="submit" class="btn-view" style="margin-top: 10px;">সংরক্ষণ করুণ</button>
        </form>
    </div>
</div>

@endsection
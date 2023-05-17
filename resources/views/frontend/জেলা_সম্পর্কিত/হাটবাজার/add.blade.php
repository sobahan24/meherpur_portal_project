@extends('layouts.frontend')

@section('title')
মেহেরপুর জেলা | হাটবাজার | সংযোজন
@endsection

@section('contant')
<div id="printable_area">
    <h3>হাটবাজারের তথ্য সংযোজন</h3>
    <div style="border: 1px solid #e9e2e2; padding:5px">
        <a href="{{ url('/জেলা-সম্পর্কিত/হাটবাজার') }}" class="btn-view" style="float:right; color:#fff">Back</a>
        <form action="{{ url('/জেলা-সম্পর্কিত/হাটবাজার/insert') }}" method="POST" enctype="multipart/form-data" style="padding: 10px; background: #dedede24;">
            @csrf
            <div class="mb-3">
                <label style="margin-top: 10px;">হাটবাজারের নাম:</label>
                <input type="text" name="name" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">আয়তন:</label>
                <input type="text" name="ayoton" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">চান্দিনা ভিটির সংখ্যা:</label>
                <input type="text" name="chandinaViti" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">ইজারা মূল্য:</label>
                <input type="text" name="ijara" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">ঠিকানা:</label>
                <input type="text" name="address" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">হাটবাজার সম্পর্কে:</label>
                <textarea type="text" name="biboron" style="width: -webkit-fill-available;"></textarea>
            </div>


            <button type="submit" class="btn-view" style="margin-top: 10px;">সংরক্ষণ করুণ</button>
        </form>
    </div>
</div>

@endsection
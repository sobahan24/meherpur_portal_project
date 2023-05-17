@extends('layouts.frontend')

@section('title')
মেহেরপুর জেলা | হোটেল ও আবাসন | সংযোজন
@endsection

@section('contant')
<div id="printable_area">
    <h3>হোটেল ও আবাসনের তথ্য সংযোজন</h3>
    <div style="border: 1px solid #e9e2e2; padding:5px">
        <a href="{{ url('/জেলা-সম্পর্কিত/হোটেল-ও-আবাসন') }}" class="btn-view" style="float:right; color:#fff">Back</a>
        <form action="{{ url('/জেলা-সম্পর্কিত/হোটেল-ও-আবাসন/insert') }}" method="POST" enctype="multipart/form-data" style="padding: 10px; background: #dedede24;">
            @csrf
            <div class="mb-3">
                <label style="margin-top: 10px;">হোটেল / আবাসনের নাম:</label>
                <input type="text" name="name" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">পরিচালনাকারী / মালিকের নাম:</label>
                <input type="text" name="ownerName" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">ঠিকানা:</label>
                <input type="text" name="address" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">মোবাইল নং:</label>
                <input type="text" name="mobile" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div>
                <label style="margin-top: 10px;">আবাসনের ধরণ:</label>
                <select class="form-select" name="abashanDharon" style="height: 40px; width:-webkit-fill-available; margin-right:4px">
                    <option value="সরকারী">সরকারী</option>
                    <option value="বেসরকারী">বেসরকারী</option>
                </select>
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">হোটেল / আবাসন সম্পর্কে:</label>
                <textarea type="text" name="biboron" style="width: -webkit-fill-available;"></textarea>
            </div>


            <button type="submit" class="btn-view" style="margin-top: 10px;">সংরক্ষণ করুণ</button>
        </form>
    </div>
</div>

@endsection
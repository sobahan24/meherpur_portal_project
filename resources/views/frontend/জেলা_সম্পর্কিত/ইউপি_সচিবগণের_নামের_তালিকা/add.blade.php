@extends('layouts.frontend')

@section('title')
মেহেরপুর জেলা | ইউপি সচিব | সংযোজন
@endsection

@section('contant')
<div id="printable_area">
    <h3>ইউপি সচিবগণের তথ্য সংযোজন</h3>
    <div style="border: 1px solid #e9e2e2; padding:5px">
        <a href="{{ url('/জেলা-সম্পর্কিত/ইউপি-সচিবগণের-নামের-তালিকা') }}" class="btn-view" style="float:right; color:#fff">Back</a>
        <form action="{{ url('/জেলা-সম্পর্কিত/ইউপি-সচিবগণের-নামের-তালিকা/insert') }}" method="POST" enctype="multipart/form-data" style="padding: 10px; background: #dedede24;">
            @csrf
            <div class="mb-3">
                <label style="margin-top: 10px;">নাম:</label>
                <input type="text" name="name" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">পদবি:</label>
                <select class="form-select" name="padobi" style="height: 40px; width:-webkit-fill-available;">
                    <<option  value="সচিব">সচিব</option>
                </select>
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">ইউনিয়ন:</label>
                <input type="text" name="union" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div >
                <label style="margin-top: 10px;">উপজেলা:</label>
                <select class="form-select" name="upzila" style="height: 40px; width:-webkit-fill-available;">
                    <<option  value="মেহেরপুর সদর">মেহেরপুর সদর</option>
                    <option  value="মুজিবনগর">মুজিবনগর</option>
                    <option  value="গাংনী">গাংনী</option>
                </select>
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">মোবাইল:</label>
                <input type="number" name="phone" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <button type="submit" class="btn-view" style="margin-top: 10px;">সংরক্ষণ করুণ</button>
        </form>
    </div>
</div>

@endsection

@extends('layouts.frontend')

@section('title')
মেহেরপুর জেলা | ইউপি উদ্যোক্তা | এডিট
@endsection

@section('contant')
<div id="printable_area">
    <h3>ইউপি উদ্যোক্তাদের তথ্য আপডেট করুণ</h3>
    <div style="border: 1px solid #e9e2e2; padding:5px">
        <a href="{{ url('/জেলা-সম্পর্কিত/ইউনিয়ন-ডিজিটাল-সেন্টারের-উদ্যোক্তাদের-তালিকা') }}" class="btn-view" style="float:right; color:#fff">Back</a>
        <form action="{{ url('/জেলা-সম্পর্কিত/ইউনিয়ন-ডিজিটাল-সেন্টারের-উদ্যোক্তাদের-তালিকা/update/'.$Uddokta->id) }}" method="POST" enctype="multipart/form-data" style="padding: 10px; background: #dedede24;">
            @csrf
            <div class="mb-3">
                <label style="margin-top: 10px;">নাম:</label>
                <input type="text" value="{{ $Uddokta->name }}" name="name" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">পদবি:</label>
                <select class="form-select" name="padobi" style="height: 40px; width:-webkit-fill-available;">
                    <<option  value="উদ্যোক্তা" {{ $Uddokta->upozila == 'উদ্যোক্তা' ? 'selected' : '' }}>উদ্যোক্তা</option>
                </select>
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">ইউনিয়ন:</label>
                <input type="text" value="{{ $Uddokta->union }}" name="union" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div >
                <label style="margin-top: 10px;">উপজেলা:</label>
                <select class="form-select" name="upzila" style="height: 40px; width:-webkit-fill-available;">
                    <<option  value="মেহেরপুর সদর" {{ $Uddokta->upzila == 'মেহেরপুর সদর' ? 'selected' : '' }}>মেহেরপুর সদর</option>
                    <option  value="মুজিবনগর" {{ $Uddokta->upzila == 'মুজিবনগর' ? 'selected' : '' }}>মুজিবনগর</option>
                    <option  value="গাংনী" {{ $Uddokta->upzila == 'গাংনী' ? 'selected' : '' }}>গাংনী</option>
                </select>
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">মোবাইল:</label>
                <input type="number" value="{{ $Uddokta->phone }}" name="phone" style="width: -webkit-fill-available; height: 25px;">
            </div>
            @can('status')
                <div class="mb-3">
                    <label style="margin-top: 10px;">স্ট্যাটাস:</label>
                    <select class="form-select" name="status" style="height: 40px">
                        <option  value="0" {{ $Uddokta->status == '0' ? 'selected' : '' }} >Hided</option>
                        <option  value="1" {{ $Uddokta->status == '1' ? 'selected' : '' }} >Displayed</option>
                    </select>
                </div>
            @endcan

            <button type="submit" class="btn-view" style="margin-top: 10px;">Update</button>
        </form>
    </div>
</div>

@endsection

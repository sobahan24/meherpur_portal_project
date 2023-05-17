@extends('layouts.frontend')

@section('title')
মেহেরপুর জেলা | হাটবাজার | এডিট
@endsection

@section('contant')
<div id="printable_area">
    <h3>হাটবাজারের তথ্য আপডেট করুণ</h3>
    <div style="border: 1px solid #e9e2e2; padding:5px">
        <a href="{{ url('/জেলা-সম্পর্কিত/হাটবাজার') }}" class="btn-view" style="float:right; color:#fff">Back</a>
        <form action="{{ url('/জেলা-সম্পর্কিত/হাটবাজার/update/'.$hatBazar->id) }}" method="POST" enctype="multipart/form-data" style="padding: 10px; background: #dedede24;">
            @csrf
            <div class="mb-3">
                <label style="margin-top: 10px;">হাটবাজারের নাম:</label>
                <input type="text" value="{{ $hatBazar->name }}" name="name" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">আয়তন:</label>
                <input type="text" value="{{ $hatBazar->ayoton }}" name="ayoton" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">চান্দিনা ভিটির সংখ্যা:</label>
                <input type="text" value="{{ $hatBazar->chandinaViti }}" name="chandinaViti" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">ইজারা মূল্য:</label>
                <input type="text" value="{{ $hatBazar->ijara }}" name="ijara" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">ঠিকানা:</label>
                <input type="text" value="{{ $hatBazar->address }}" name="address" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">হাটবাজার সম্পর্কে:</label>
                <textarea type="text" name="biboron" style="width: -webkit-fill-available;">{{ $hatBazar->biboron }}</textarea>
            </div>
            @can('status')
                <div class="mb-3">
                    <label style="margin-top: 10px;">স্ট্যাটাস:</label>
                    <select class="form-select" name="status" style="height: 40px;">
                        <option  value="0" {{ $hatBazar->status == '0' ? 'selected' : '' }} >Hided</option>
                        <option  value="1" {{ $hatBazar->status == '1' ? 'selected' : '' }} >Displayed</option>
                    </select>
                </div>
            @endcan

            <button type="submit" class="btn-view" style="margin-top: 10px;">Update</button>
        </form>


    </div>
</div>

@endsection

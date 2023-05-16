@extends('layouts.frontend')

@section('title')
মেহেরপুর জেলা | প্রখ্যাত ব্যক্তিত্ব | এডিট
@endsection

@section('contant')
<div id="printable_area">
    <h3>প্রখ্যাত ব্যক্তির তথ্য আপডেট করুণ</h3>
    <div style="border: 1px solid #e9e2e2; padding:5px">
        <a href="{{ url('/জেলা-সম্পর্কিত/প্রখ্যাত-ব্যক্তিত্ব') }}" class="btn-view" style="float:right; color:#fff">Back</a>
        <form action="{{ url('/জেলা-সম্পর্কিত/প্রখ্যাত-ব্যক্তিত্ব/update/'.$famousPerson->id) }}" method="POST" enctype="multipart/form-data" style="padding: 10px; background: #dedede24;">
            @csrf
            <div class="mb-3">
                <label style="margin-top: 10px;">ব্যক্তির নাম:</label>
                <input type="text" value="{{ $famousPerson->name }}" name="name" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">জন্মতারিখ:</label>
                <input type="text" value="{{ $famousPerson->birthday }}" name="birthday" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">মৃত্যুতারিখ:</label>
                <input type="text" value="{{ $famousPerson->dieDay }}" name="dieDay" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">কোন বিষয়ে বিখ্যাত, জীবন, পুরস্কার/খেতাব:</label>
                <textarea type="text" name="details" style="width: -webkit-fill-available;">{{ $famousPerson->details }}</textarea>
            </div>
            @can('status')
                <div class="mb-3">
                    <label style="margin-top: 10px;">স্ট্যাটাস:</label>
                    <select class="form-select" name="status">
                        <option  value="0" {{ $famousPerson->status == '0' ? 'selected' : '' }} >Hided</option>
                        <option  value="1" {{ $famousPerson->status == '1' ? 'selected' : '' }} >Displayed</option>
                    </select>
                </div>
            @endcan

            <button type="submit" class="btn-view" style="margin-top: 10px;">Update</button>
        </form>
    </div>
</div>

@endsection

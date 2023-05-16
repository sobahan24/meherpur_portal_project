@extends('layouts.frontend')

@section('title')
মেহেরপুর জেলা | দর্শনীয় স্থান | এডিট
@endsection

@section('contant')

<div id="printable_area">
    <h3>তথ্য আপডেট করুণ</h3>
    <div style="border: 1px solid #e9e2e2; padding:5px">
        <a href="{{ url('/জেলা-সম্পর্কিত/দর্শনীয়-স্থান') }}" class="btn-view" style="float:right">Back</a>
        <form action="{{ url('/জেলা-সম্পর্কিত/দর্শনীয়-স্থান/update/'.$touristSpot->id) }}" method="POST" enctype="multipart/form-data" style="padding: 10px; background: #dedede24;">
            @csrf
            <div class="mb-3">
                <label style="margin-top: 10px;">স্থানের নামঃ</label>
                <input type="text" value="{{ $touristSpot->name }}" name="name" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div class="mb-3">
                <img src="{{ asset('assets/uploads/touristSpot/'.$touristSpot->image) }}" alt="Image Here" width="130px" height="130px">
                <label style="margin-top: 10px;">ছবিঃ</label>
                <input type="file" value="{{ $touristSpot->image }}" name="image" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">সংক্ষিপ্ত বিবরণঃ</label>
                <textarea type="text" name="biboron" style="width: -webkit-fill-available;">{{ $touristSpot->biboron }}</textarea>
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">আবাসন ব্যবস্থাঃ</label>
                <textarea type="text" name="abashan" style="width: -webkit-fill-available;">{{ $touristSpot->abashan }}</textarea>
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">কিভাবে যাওয়া যায়ঃ</label>
                <textarea type="text" name="thikana" style="width: -webkit-fill-available;">{{ $touristSpot->thikana }}</textarea>
            </div>
            @can('status')
                <div class="mb-3">
                    <label style="margin-top: 10px;">স্ট্যাটাস:</label>
                    <select class="form-select" name="status">
                        <option  value="0" {{ $touristSpot->status == '0' ? 'selected' : '' }} >Hided</option>
                        <option  value="1" {{ $touristSpot->status == '1' ? 'selected' : '' }} >Displayed</option>
                    </select>
                </div>
            @endcan
            <button type="submit" class="btn-view" style="margin-top: 10px;">Submit</button>
        </form>
    </div>
</div>



@endsection

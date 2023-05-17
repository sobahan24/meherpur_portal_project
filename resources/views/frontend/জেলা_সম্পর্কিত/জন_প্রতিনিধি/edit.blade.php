@extends('layouts.frontend')

@section('title')
মেহেরপুর জেলা | জন প্রতিনিধি | এডিট
@endsection

@section('contant')
<div id="printable_area">
    <h3>জন প্রতিনিধির তথ্য আপডেট করুণ</h3>
    <div style="border: 1px solid #e9e2e2; padding:5px">
        <a href="{{ url('/জেলা-সম্পর্কিত/জন-প্রতিনিধি') }}" class="btn-view" style="float:right; color:#fff">Back</a>
        <form action="{{ url('/জেলা-সম্পর্কিত/জন-প্রতিনিধি/update/'.$protinidhi->id) }}" method="POST" enctype="multipart/form-data" style="padding: 10px; background: #dedede24;">
            @csrf
            <div class="mb-3">
                <label style="margin-top: 10px;">প্রতিনিধির নাম:</label>
                <input type="text" value="{{ $protinidhi->name }}" name="name" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">পদবি:</label>
                <input type="text" value="{{ $protinidhi->padobi }}" name="padobi" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">মোবাইল:</label>
                <input type="number" value="{{ $protinidhi->phone }}" name="phone" style="width: -webkit-fill-available; height: 25px;">
            </div>
            <div class="mb-3">
                <label style="margin-top: 10px;">ই-মেইল:</label>
                <input type="email" value="{{ $protinidhi->email }}" name="email" style="width: -webkit-fill-available; height: 25px;">
            </div>
            @can('status')
                <div class="mb-3">
                    <label style="margin-top: 10px;">স্ট্যাটাস:</label>
                    <select class="form-select" name="status">
                        <option  value="0" {{ $protinidhi->status == '0' ? 'selected' : '' }} >Hided</option>
                        <option  value="1" {{ $protinidhi->status == '1' ? 'selected' : '' }} >Displayed</option>
                    </select>
                </div>
            @endcan

            <button type="submit" class="btn-view" style="margin-top: 10px;">Update</button>
        </form>
    </div>
</div>

@endsection

@extends('layouts.admin')

@section('title')
Meherpur | Tourist Spot | Edit
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>Edit Tourist Spot
                        <a href="{{ url('/tourist-spot') }}" class="btn btn-primary float-right">Back</a>
                    </h2>
                    <hr>
                </div>

                <div class="card-body userView">
                    <form action="{{ url('update-tourist-spot/'.$touristSpot->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">স্থানের নাম:</label>
                            <input type="text" class="form-control" name="name" value="{{ $touristSpot->name }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">ছবি:</label><br>
                            <img src="{{ asset('assets/uploads/touristSpot/'.$touristSpot->image) }}" alt="Image Here" width="120px" height="120px">
                            <input type="file" class="form-control mt-2" name="image">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">সংক্ষিপ্ত বিবরণ:</label>
                            <textarea type="text" class="form-control" name="biboron">{{ $touristSpot->biboron }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">আবাসন ব্যবস্থা:</label>
                            <textarea type="text" class="form-control" name="abashan">{{ $touristSpot->abashan }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">কিভাবে যাওয়া যায়:</label>
                            <textarea type="text" class="form-control" name="thikana">{{ $touristSpot->thikana }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Status</label>
                            <select class="form-select" name="status">
                                <option {{ $touristSpot->status == '0' ? 'selected' : '' }} value="0">Hide</option>
                                <option {{ $touristSpot->status == '1' ? 'selected' : '' }} value="1">Display</option>
                            </select>
                        </div>
                        <div class="col-md-6 mt-2">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

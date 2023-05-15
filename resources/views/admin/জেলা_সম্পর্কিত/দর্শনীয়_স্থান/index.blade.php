
@extends('layouts.admin')

@section('title')
Meherpur | Tourist Spot | List
@endsection

@section('content')

<div class="card">
    <div class="card-header">
        <h1>Tourist Spot List</h1>
    </div>
    <div class="card-body">
        <table class="table table-hover table-bordered text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($touristSpot as $item)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ ($item->status == '1') ? 'Displayed' : 'Hided' }}</td>
                    <td>
                        <a href="{{ url('edit-tourist-spot/'.$item->id) }}" class="btn btn-sm btn-success">Edit</a>
                        <a href="{{ url('delete-tourist-spot/'.$item->id) }}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection


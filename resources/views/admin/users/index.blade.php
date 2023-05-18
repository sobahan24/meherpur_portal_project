@extends('layouts.admin')

@section('title')
Meherpur | Users
@endsection

@section('content')

<div class="card">
    <div class="card-header">
        <h1>Registered Users</h1>
    </div>
    <div class="card-body">
        <table class="table table-hover table-bordered text-center">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">User Role</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                <tr>
                    <th>{{ $loop->iteration }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ ($item->role_as == '1') ? 'admin' : 'Editor' }}</td>
                    <td>
                        <a href="{{ url('view-users/'.$item->id) }}" class="btn btn-sm btn-primary">View</a>
                        <a href="{{ url('edit-user/'.$item->id) }}" class="btn btn-sm btn-success">Edit</a>
                        <a href="{{ url('delete-user/'.$item->id) }}" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection

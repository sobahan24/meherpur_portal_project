@extends('layouts.admin')

@section('title')
Meherpur | User Edit
@endsection

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h2>User Role Edit
                        <a href="{{ url('users') }}" class="btn btn-primary float-right">Back</a>
                    </h2>
                    <hr>
                </div>

                <div class="card-body userView">
                    <form action="{{ url('update-user/'.$users->id) }}" method="POST">
                        @csrf
                        <div class="row checkout-form">


                            <div class="col-md-12">
                                <label for="firstName">User Role</label>
                                <select class="form-select" name="role_as">
                                    <option {{ $users->role_as == '0' ? 'selected' : '' }} value="0">Editor</option>
                                    <option {{ $users->role_as == '1' ? 'selected' : '' }} value="1">Admin</option>
                                </select>
                            </div>
                            <div class="col-md-6 mt-2">
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

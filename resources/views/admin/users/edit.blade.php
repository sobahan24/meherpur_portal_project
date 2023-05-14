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
                    <h2>User Roll Edit
                        <a href="{{ url('users') }}" class="btn btn-primary float-right">Back</a>
                    </h2>
                    <hr>
                </div>

                <div class="card-body userView">
                    <form action="{{ url('update-user/'.$users->id) }}" method="POST">
                        @csrf
                        <div class="row checkout-form">
                            

                            <div class="col-md-12">
                                <label for="firstName">User Roll</label>
                                <select class="form-select" name="role_as">
                                    <option {{ $users->role_as == '0' ? 'selected' : '' }} value="0">User</option>
                                    <option {{ $users->role_as == '1' ? 'selected' : '' }} value="1">Admin</option>
                                </select>
                            </div>

                            <!-- full edit -->
                            <!-- <div class="col-md-12">
                                <label for="firstName">User Roll</label>
                                <input type="text" class="form-control fname" value="{{ $users->role_as }}" name="role_as">
                                <span id="firstname_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="firstName">First Name</label>
                                <input type="text" class="form-control fname" value="{{ $users->name }}" name="name">
                                <span id="firstname_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6">
                                <label for="lastName">Last Name</label>
                                <input type="text" class="form-control lname" value="{{ $users->lname }}" name="lname">
                                <span id="lastname_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-2">
                                <label for="email">Email</label>
                                <input type="email" class="form-control email" value="{{ $users->email }}" name="email">
                                <span id="email_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-2">
                                <label for="">Phone Number</label>
                                <input type="number" class="form-control phone" value="{{ $users->phone }}" name="phone">
                                <span id="phone_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-2">
                                <label for="">Address 1</label>
                                <input type="text" class="form-control address1" value="{{ $users->address1 }}" name="address1">
                                <span id="address1_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-2">
                                <label for="">Address 2</label>
                                <input type="text" class="form-control address2" value="{{ $users->address2 }}" name="address2">
                                <span id="address2_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-2">
                                <label for="">City</label>
                                <input type="text" class="form-control city" value="{{ $users->city }}" name="city">
                                <span id="city_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-2">
                                <label for="">State</label>
                                <input type="text" class="form-control state" value="{{ $users->state }}" name="state">
                                <span id="state_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-2">
                                <label for="">Country</label>
                                <input type="text" class="form-control country" value="{{ $users->country }}" name="country">
                                <span id="country_error" class="text-danger"></span>
                            </div>
                            <div class="col-md-6 mt-2">
                                <label for="">Zip Code</label>
                                <input type="text" class="form-control zip" value="{{ $users->zip }}" name="zip">
                                <span id="zip_error" class="text-danger"></span>
                            </div> -->
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
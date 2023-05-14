


<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>User | Profile</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Scripts -->
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    Meherpur Portal
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h2>User Details</h2>
                            </div>
                            <div class="card-body bg-light">
                                <form action="{{ url('update-profile/'.$users->id) }}" method="POST">
                                    @csrf
                                    <div class="row checkout-form">
                                        <div class="col-md-6 mt-2">
                                            <label class="fw-bold" for="firstName">First Name:</label>
                                            <input type="text" class="form-control fname" value="{{ $users->name }}" name="name">
                                            <span id="firstname_error" class="text-danger"></span>
                                        </div>
                                        <div class="col-md-6 mt-2">
                                            <label class="fw-bold" for="lastName">Last Name:</label>
                                            <input type="text" class="form-control lname" value="{{ $users->lname }}" name="lname">
                                            <span id="lastname_error" class="text-danger"></span>
                                        </div>
                                        <div class="col-md-6 mt-2">
                                            <label class="fw-bold" for="email">Email:</label>
                                            <input type="email" class="form-control email" value="{{ $users->email }}" name="email">
                                            <span id="email_error" class="text-danger"></span>
                                        </div>
                                        <div class="col-md-6 mt-2">
                                            <label class="fw-bold" for="">Phone Number:</label>
                                            <input type="number" class="form-control phone" value="{{ $users->phone }}" name="phone">
                                            <span id="phone_error" class="text-danger"></span>
                                        </div>
                                        <div class="col-md-6 mt-2">
                                            <label class="fw-bold" for="">Address 1:</label>
                                            <input type="text" class="form-control address1" value="{{ $users->address1 }}" name="address1">
                                            <span id="address1_error" class="text-danger"></span>
                                        </div>
                                        <div class="col-md-6 mt-2">
                                            <label class="fw-bold" for="">Address 2:</label>
                                            <input type="text" class="form-control address2" value="{{ $users->address2 }}" name="address2">
                                            <span id="address2_error" class="text-danger"></span>
                                        </div>
                                        <div class="col-md-6 mt-2">
                                            <label class="fw-bold" for="">City:</label>
                                            <input type="text" class="form-control city" value="{{ $users->city }}" name="city">
                                            <span id="city_error" class="text-danger"></span>
                                        </div>
                                        <div class="col-md-6 mt-2">
                                            <label class="fw-bold" for="">State:</label>
                                            <input type="text" class="form-control state" value="{{ $users->state }}" name="state">
                                            <span id="state_error" class="text-danger"></span>
                                        </div>
                                        <div class="col-md-6 mt-2">
                                            <label class="fw-bold" for="">Country:</label>
                                            <input type="text" class="form-control country" value="{{ $users->country }}" name="country">
                                            <span id="country_error" class="text-danger"></span>
                                        </div>
                                        <div class="col-md-6 mt-2">
                                            <label class="fw-bold" for="">Zip Code:</label>
                                            <input type="text" class="form-control zip" value="{{ $users->zip }}" name="zip">
                                            <span id="zip_error" class="text-danger"></span>
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
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>User | Profile</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>User Details
                            
                        </h2>
                        <hr>
                    </div>
                    <div class="card-body userView">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Role:</label>
                                <div class="p-2 border">{{ $users->role_as == '0' ? 'User' : 'Admin' }}</div>
                            </div>
                            <div class="col-md-4">
                                <label for="">First Name:</label>
                                <div class="p-2 border">{{ $users->name }}</div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Last Name:</label>
                                <div class="p-2 border">{{ $users->lname }}</div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Email:</label>
                                <div class="p-2 border">{{ $users->email }}</div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Phone No:</label>
                                <div class="p-2 border">{{ $users->phone }}</div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Address 1:</label>
                                <div class="p-2 border">{{ $users->address1 }}</div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Address 2:</label>
                                <div class="p-2 border">{{ $users->address2 }}</div>
                            </div>
                            <div class="col-md-4">
                                <label for="">City:</label>
                                <div class="p-2 border">{{ $users->city }}</div>
                            </div>
                            <div class="col-md-4">
                                <label for="">State:</label>
                                <div class="p-2 border">{{ $users->state }}</div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Country:</label>
                                <div class="p-2 border">{{ $users->country }}</div>
                            </div>
                            <div class="col-md-4">
                                <label for="">Zip Code:</label>
                                <div class="p-2 border">{{ $users->zip }}</div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>
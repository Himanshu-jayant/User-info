<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        User Info
    </title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../css/all.min.css">

    <!-- Custome CSS -->
    <link rel="stylesheet" href="../css/custom.css">

</head>

<body>
    <!-- Top Navbar -->
    <nav class="navbar navbar-dark fixed-top bg-danger p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="">User Info</a>
    </nav>

    <!-- Side Bar -->
    <div class="" style="margin-top:40px;">
        .
        <div class=" mt-5 ml-0 mr-0 text-center" width=100%;>
            <!--Table-->
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <p class=" bg-dark text-white p-2">List of Users</p>

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">First Name</th>
                        <th scope="col">Last Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Date of Birth</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">Designation</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Hobbies</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)


                        <tr>


                            <td>{{ $user->fname }}</td>
                            <td>{{ $user->lname }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->dob }}</td>
                            <td>{{ $user->mobile }}</td>
                            <td>{{ $user->designation }}</td>
                            <td>{{ $user->gender }}</td>
                            <td>{{ $user->hobbies }}</td>
                            <td><a href="/delete/{{ $user->id }}" class="d-inline btn btn-secondary"> <i
                                        class="far fa-trash-alt"></i>
                                </a></td>
                        </tr>
                    @endforeach


                </tbody>
            </table>

        </div>
    </div>
    <div><a class="btn btn-danger box" href="/adduser"><i class="fas fa-plus fa-2x"></i></a>
    </div>
    </div>
    </div>
    </div>

    <!-- Boostrap JavaScript -->
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/all.min.js"></script>
    <script src="../js/custom.js"></script>
</body>

</html>

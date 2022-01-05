<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <link rel="stylesheet" href="{{url('assets/fontawesome/css/all.min.css')}}">

    <title>Dashboard Admin</title>
    @yield('css')
    <style>
        .link-menu {
            color: white;
        }

        .link-menu:hover {
            color: white;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="{{ url('admin') }}">CMS Blog</a>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('admin') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('admin/category') }}">Category</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('admin/slider') }}">Slider</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('admin/post') }}">Post</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('admin/mainmenu') }}">Main Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('admin/message') }}">Message</a>
                    </li>
                </ul>

                <div class="my-2 my-lg-0">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn btn-secondary mr-2">
                            <a href="{{ url('admin/profile/'.session('admin_id')) }}" class="link-menu">
                                Profile
                            </a>
                        </label>
                        <label class="btn btn-secondary">
                            <a href="{{ url('logout') }}" class="link-menu">
                                Logout
                            </a>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container mt-3">
        <div class="jumbotron">
            @yield('content')
        </div>
    </div>

    <footer class="footer navbar fixed-bottom bg-dark">
        <div class="container mx-auto">
            <span class="text-muted">Copyright 2021 BK Udinus</span>
        </div>
    </footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>

</html>
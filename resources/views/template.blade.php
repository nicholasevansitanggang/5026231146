<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nicholas Evan S : 5026231146</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40NZMDwmpzmO0qp+oHk5qLgXyVlYnJ+f/w0pB5/4B25ZtF5oTz9z/04b/jLq9g7+M+J8+2g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background-color: #e9f5ff;
        }
        .jumbotron {
            background-color: #007bff;
            color: #ffffff;
            height: 100px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 0;
        }
        .jumbotron h1 {
            font-size: 2.5rem;
            color: #ffffff;
        }
        .navbar {
            background-color: #0056b3 !important;
            padding: 0.5rem 1rem;
        }
        .navbar-nav {
            width: 100%;
            justify-content: center;
        }
        .navbar-nav .nav-item .nav-link {
            color: rgba(255, 255, 255, 0.75);
            padding: 0.8rem 1rem;
            transition: color 0.3s ease;
        }
        .navbar-nav .nav-item .nav-link:hover,
        .navbar-nav .nav-item .nav-link.active {
            color: #ffffff;
        }
        .navbar-nav .nav-item {
            margin: 0 5px;
        }
        .container {
            padding-top: 20px;
            padding-bottom: 20px;
        }
        .text-primary {
            color: #007bff !important;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .btn-info {
            background-color: #17a2b8;
            border-color: #17a2b8;
        }
        .btn-outline-info {
            color: #17a2b8;
            border-color: #17a2b8;
        }
        .btn-outline-info:hover {
            background-color: #17a2b8;
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="jumbotron">
        <h1>5026231146 : Nicholas Evan Sitanggang</h1>
    </div>

    <nav class="navbar navbar-expand-sm">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/frontend">All Front End</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pegawai">Pegawai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/ram">Tugas CRUD</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">EAS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/karyawan">Latihan 1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Latihan 2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Latihan 3</a>
                </li>
            </ul>
        </div>
    </nav>
    <br>
    <div class="container">
        @yield('content')
    </div>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Faris Abqori : 5026231015</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;600&display=swap" rel="stylesheet">

    <!-- jQuery and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f9fb;
        }

        .jumbotron {
            background: linear-gradient(135deg, #9de2e2, #a2d4ec);
            color: #333;
            padding: 60px 20px;
            margin-bottom: 0;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .jumbotron h1 {
            font-weight: 600;
            font-size: 2.5rem;
        }

        .navbar {
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        }

        .nav-link {
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-link:hover {
            color: #17a2b8 !important;
        }

        .nav-link i {
            margin-right: 5px;
        }

        .container {
            padding-top: 30px;
            padding-bottom: 30px;
        }

        .content-wrapper {
            background: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #e9f5f7;
            color: #777;
        }
    </style>
</head>

<body>

    <div class="jumbotron text-center">
        <h1><i class="fas fa-user-circle"></i> 5026231015 : Faris Abqori</h1>
        <p>Student of Information Systems</p>
    </div>

    <nav class="navbar navbar-expand-sm bg-light justify-content-center">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/frontend"><i class="fas fa-laptop-code"></i> All Front End</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/ets"><i class="fas fa-star"></i> ETS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pegawai"><i class="fas fa-user-tie"></i> Pegawai</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/sofa"><i class="fas fa-tasks"></i> Tugas CRUD</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pagecounter"><i class="fas fa-book-open"></i> Latihan 1</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/karyawan"><i class="fas fa-book-open"></i> Latihan 2</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/karyawan2"><i class="fas fa-book-open"></i> Latihan 3</a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="/pertemuan7a"><i class="fas fa-book-open"></i> Latihan 4</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/pertemuan7b"><i class="fas fa-book-open"></i> Latihan 5</a>
            </li> --}}
            {{-- <li class="nav-item">
                <a class="nav-link" href="/pertemuan5"><i class="fas fa-link"></i> Tugas Linktree</a>
            </li> --}}
        </ul>
    </nav>

    <div class="container">
        <div class="content-wrapper">
            @yield('content')
        </div>
    </div>

    <footer>
        <small>&copy; 2025 Faris Abqori. All rights reserved.</small>
    </footer>

</body>

</html>

@extends('master.script')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Piket</title>


    <!-- Custom fonts for this template-->
    <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('template/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet">


</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand navbar-light bg-dark topbar mb-4 static-top shadow">
        <div class="container" style="font-size: 20px ;">
            <a class="navbar-brand" href="#">
                <img src="../images/logo_smk.png" alt="Logo" height="60">
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/siswa">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/laporan">Laporan</a>
                    </li>

                    <div class="topbar-divider d-none d-sm-block"></div>
                    @auth
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-white-600 small">{{ auth()->user()->name }}</span>
                                <img class="img-profile rounded-circle"
                                    src="{{ asset('template/img/undraw_profile.svg') }}">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div
                                class="dropdown-menu dropdown-menu-right shadow animated--grow-in"aria-labelledby="userDropdown">
                                <!-- <div class="dropdown-divider"></div> -->
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i
                                        class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    @endauth
                    <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li> -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <br>
    <br>

    <div class="container">
        <h1 class="text-center">Absen Piket</h1>
    </div>
    @if ($message = Session::get('message'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
    <br>
    <br>

    <div class="container">
        <form method="post" enctype="multipart/form-data" action="{{ route('absen.store') }}">
            @csrf
            <div class="row mb-3">
                <label for="deskripsi" class="col-sm-3 col-form-label" required>Deskripsi</label>
                <div class="col-sm-9">
                    <input type="text" name="deskripsi" class="form-control" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputFile" class="col-sm-3 col-form-label">Upload Foto (Individu)</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control-file" id="individu" name="individu" value="" required>
                </div>
            </div>

            <div class="row mb-3">
                <label for="inputFile" class="col-sm-3 col-form-label">Upload Foto (Kelompok Absen)</label>
                <div class="col-sm-9">
                    <input type="file" class="form-control-file" id="kelompok" name="kelompok" value="" required>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-sm">Kirim</button>
            </div>
        </form>
    </div>
</body>

</html>

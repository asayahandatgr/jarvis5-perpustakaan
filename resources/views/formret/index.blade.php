<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Library Jarvis</title>


    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600,700&display=swap" rel="stylesheet" />

    <!-- font awesome style -->
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="css/responsive.css" rel="stylesheet" />

    <style>
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .dropdown .dropdown-content.show {
            display: block;
        }

        .form_container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form_container h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .form_container form div {
            margin-bottom: 15px;
        }

        .form_container label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .form_container input[type="text"],
        .form_container input[type="date"],
        .form_container input[type="number"],
        .form_container select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        .form_container .btn_box {
            display: flex;
            justify-content: center;
            gap: 10px;
            /* Jarak antara tombol Back dan Submit */
        }

        .form_container .btn_box button {
            background-color: #f89646;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form_container .btn_box button:hover {
            background-color: #e07c3c;
        }

        .form_container .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .form_container .btn-back {
            background-color: #6c757d;
            /* Warna latar belakang untuk tombol Back */
        }

        .form_container .btn-back:hover {
            background-color: #5a6268;
            /* Warna latar belakang saat hover untuk tombol Back */
        }

        .form_container .btn-submit {
            background-color: #f89646;
            /* Warna latar belakang untuk tombol Submit */
        }

        .form_container .btn-submit:hover {
            background-color: #e07c3c;
            /* Warna latar belakang saat hover untuk tombol Submit */
        }

        .form_container select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            height: auto;
        }

        .form_container select {
            overflow: visible;
        }
    </style>

</head>

<body>

    <!-- header section strats -->
    <header class="header_section long_section px-0">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="{{ route('welcome' )}}">
                <span>Library<span style="color: #f89646;">Jarvis</span></span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
                    <ul class="navbar-nav  ">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('welcome' )}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/#about') }}"> About</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#services" class="dropbtn nav-link dropdown-toggle">Services</a>
                            <div class="dropdown-content">
                                <a class="nav-link" href="{{ url ('formbuy' )}}">Purchase</a>
                                <a class="nav-link" href="{{ url ('formborrow' )}}">Borrow</a>
                                <a class="nav-link" href="{{ url ('formret' )}}">Return</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/#buku') }}">Books</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/#blog') }}">Blog</a>
                        </li>
                    </ul>
                </div>
                <div class="quote_btn-container">
                    @auth
                    <a class="nav-item nav-link" href="{{ route('dashboard' )}}"><span>
                            Profile
                        </span>
                        <i class="fa fa-user" aria-hidden="true"></i></a>
                    <a href="{{ route('logout') }}" class="nav-item nav-link" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();"><span>
                            Logout
                        </span>
                        <i class="fa fa-undo" aria-hidden="true"></i></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">{{ csrf_field() }}</form>
                    @endauth
                    @guest
                    <a href="{{ route('login') }}" class="nav-link"><span>
                            Login
                        </span>
                        <i class="fa fa-user" aria-hidden="true"></i></a>
                    <a href="{{ route('register') }}" class="nav-link"><span>
                            Register
                        </span>
                        <i class="fa fa-user" aria-hidden="true"></i></a>
                    @endguest
                </div>
            </div>
        </nav>
    </header>

    <section class="contact_section" id="contact">
        <div class="container">
            @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif
            <div class="row">
                <div class="col-md-12">
                    <div class="form_container">
                        <div class="text-center">
                            <h2 sty>
                                Form Pengembalian Buku
                            </h2>
                        </div>
                        <form action="{{ route('formret.store') }}" method="POST" id="contactForm">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label" for="peminjaman_id">Nama Peminjam</label>
                                <select name="peminjaman_id" id="peminjaman_id" class="form-control">
                                    <option value="" hidden>Pilih Peminjam</option>
                                    @foreach ($peminjaman as $minjam)
                                    <option value="{{ $minjam->id}}">{{ $minjam->nama_peminjam }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback" data-sb-feedback="peminjaman_id:required">Nama Genre is required.</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="tanggal_kembali">Tanggal Kembali</label>
                                <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="tanggal_kembali:required">Tanggal is required.</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="jumlah_hari">Jumlah Hari</label>
                                <input class="form-control" id="jumlah_hari" name="jumlah_hari" type="number" placeholder="Total Hari" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="jumlah_hari:required">Jumlah Hari is required.</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="buku_id">Nama Buku</label>
                                <select name="buku_id" id="buku_id" class="form-control" required>
                                    <option value="" hidden>Pilih Nama Buku</option>
                                    @foreach ($buku as $buk)
                                    <option value="{{ $buk->id }}">{{ $buk->title }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback" data-sb-feedback="buku_id:required">Nama Buku is required.</div>
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="petugas_id">Nama Petugas</label>
                                <select name="petugas_id" id="petugas_id" class="form-control">
                                    <option value="" hidden>Pilih Petugas</option>
                                    @foreach ($petugas as $tugas)
                                    <option value="{{ $tugas->id}}">{{ $tugas->nama }}</option>
                                    @endforeach
                                </select>
                                <div class="invalid-feedback" data-sb-feedback="namaPetugas:required">Nama Petugas is required.</div>
                            </div>
                            <div class="btn_box">
                                <a href="{{ route('welcome') }}" class="btn btn-secondary">Back</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end contact section -->

    <!-- info section -->
    <section class="info_section long_section">

        <div class="container">
            <div class="contact_nav">
                <a href="">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <span>
                        Call : +01 123455678990
                    </span>
                </a>
                <a href="">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                    <span>
                        Email : demo@gmail.com
                    </span>
                </a>
                <a href="">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <span>
                        Location
                    </span>
                </a>
            </div>

            <div class="info_top ">
                <div class="row ">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="info_links">
                            <h4>
                                QUICK LINKS
                            </h4>
                            <div class="info_links_menu">
                                <a class="" href="index.html">Dashboard <span class="sr-only">(current)</span></a>
                                <a class="" href="about.html"> About</a>
                                <a class="" href="furniture.html">Furniture</a>
                                <a class="" href="blog.html">Blog</a>
                                <a class="" href="contact.html">Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3 mx-auto">
                        <div class="info_post">
                            <h5>
                                INSTAGRAM FEEDS
                            </h5>
                            <div class="post_box">
                                <div class="img-box">
                                    <img src="images/bo1.png" alt="">
                                </div>
                                <div class="img-box">
                                    <img src="images/bo2.png" alt="">
                                </div>
                                <div class="img-box">
                                    <img src="images/bo3.png" alt="">
                                </div>
                                <div class="img-box">
                                    <img src="images/bo4.png" alt="">
                                </div>
                                <div class="img-box">
                                    <img src="images/bo5.png" alt="">
                                </div>
                                <div class="img-box">
                                    <img src="images/bo6.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info_form">
                            <h4>
                                SIGN UP TO OUR NEWSLETTER
                            </h4>
                            <form action="">
                                <input type="text" placeholder="Enter Your Email" />
                                <button type="submit">
                                    Subscribe
                                </button>
                            </form>
                            <div class="social_box">
                                <a href="">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                                <a href="">
                                    <i class="fa fa-instagram" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end info_section -->


    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <p>
                &copy; <span id="displayYear"></span> All Rights Reserved By
                <a href="https://html.design/">Tegar Asayahanda</a>
                Distributed by <a href="https://themewagon.com">GarzHostinger</a>
            </p>
        </div>
    </footer>
    <!-- footer section -->


    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.js"></script>
    <!-- custom js -->
    <script src="js/custom.js"></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <!-- Popper.js, diperlukan untuk dropdown Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- End Google Map -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.dropdown-toggle').forEach(function(element) {
                element.addEventListener('click', function(e) {
                    e.preventDefault();
                    let dropdownContent = this.nextElementSibling;
                    if (dropdownContent.classList.contains('show')) {
                        dropdownContent.classList.remove('show');
                    } else {
                        // Tutup dropdown yang lain
                        document.querySelectorAll('.dropdown-content').forEach(function(content) {
                            content.classList.remove('show');
                        });
                        dropdownContent.classList.add('show');
                    }
                });
            });

            // Tutup dropdown saat mengklik di luar dropdown
            document.addEventListener('click', function(e) {
                if (!e.target.matches('.dropdown-toggle')) {
                    document.querySelectorAll('.dropdown-content').forEach(function(content) {
                        content.classList.remove('show');
                    });
                }
            });
        });
    </script>


</body>

</html>
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
  </style>

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section long_section px-0">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="index.html">
          <span>Library<span style="color: #f89646;">Jarvis</span></span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about"> About</a>
              </li>
              <li class="nav-item dropdown">
                <a href="#services" class="dropbtn nav-link dropdown-toggle">Services</a>
                <div class="dropdown-content">
                  <a class="nav-link" href="#purchase">Purchase</a>
                  <a class="nav-link" href="#borrow">Borrow</a>
                  <a class="nav-link" href="#return">Return</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#buku">Books</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#blog">Blog</a>
              </li>
            </ul>
          </div>
          <div class="quote_btn-container">
            <a href="">
              <span>
                Login
              </span>
              <i class="fa fa-user" aria-hidden="true"></i>
            </a>
            <a href="">
              <span>
                Register
              </span>
              <i class="fa fa-user" aria-hidden="true"></i>
            </a>

          </div>
        </div>
      </nav>
    </header>
    <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section long_section">
      <div id="customCarousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-5">
                  <div class="detail-box">
                    <h1>
                      Books from around the world
                    </h1>
                    <p class="text-justify">
                      a window into the diversity of global literature. From fascinating stories to deep thoughts, enjoy a journey through inspiring cultures and countries.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                      <a href="" class="btn2">
                        About Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="img-box">
                    <img src="images/per4.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-5">
                  <div class="detail-box">
                    <h1>
                      Romance? Horror? <br>
                      Everything is here
                    </h1>
                    <p class="text-justify">
                      a place where you can find all kinds of stories you want. From heartwarming love stories to suspenseful horror tales, satisfying reading experience for all tastes.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                      <a href="" class="btn2">
                        About Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="img-box">
                    <img src="images/per2.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-5">
                  <div class="detail-box">
                    <h1>
                      Can be borrowed <br>
                      Can be purchased
                    </h1>
                    <p class="text-justify">
                      our flexible library services. You can borrow or buy books from our extensive collection, according to your needs. Enjoy easy access and diverse choices for every reader.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn1">
                        Contact Us
                      </a>
                      <a href="" class="btn2">
                        About Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-7">
                  <div class="img-box">
                    <img src="images/per3.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel" data-slide-to="1"></li>
          <li data-target="#customCarousel" data-slide-to="2"></li>
        </ol>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- furniture section -->

  <section class="furniture_section layout_padding" id="buku">
    <div class="container">
      <div class="heading_container">
        <h2>
          Best Books
        </h2>
        <p>
          Buku-buku yang paling sering dipinjam/yang paling laris dibeli dalam seminggu terakhir.
        </p>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="images/bo1.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Laskar Pelangi
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>RP.</span> 150.000
                </h6>
                <a href="">
                  Buy Now
                </a>
                <a href="">
                  Borrow now
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="images/bo2.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Sang Pemimpi
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>RP.</span> 120.000
                </h6>
                <a href="">
                  Buy Now
                </a>
                <a href="">
                  Borrow now
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="images/bo3.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Enderson
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>RP.</span> 100.000
                </h6>
                <a href="">
                  Buy Now
                </a>
                <a href="">
                  Borrow now
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="images/op1.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                One Piece
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>RP.</span> 200.000
                </h6>
                <a href="">
                  Buy Now
                </a>
                <a href="">
                  Borrow now
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="images/bo5.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Si Juki Komik Strip
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>RP.</span> 75.000
                </h6>
                <a href="">
                  Buy Now
                </a>
                <a href="">
                  Borrow now
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4">
          <div class="box">
            <div class="img-box">
              <img src="images/bo6.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Si Juki Lika-Liku Anak Kos
              </h5>
              <div class="price_box">
                <h6 class="price_heading">
                  <span>RP.</span> 70.000
                </h6>
                <a href="">
                  Buy Now
                </a>
                <a href="">
                  Borrow now
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end furniture section -->


  <!-- about section -->

  <section class="about_section layout_padding long_section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="images/about-img.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                About Us
              </h2>
            </div>
            <p class="text-justify">
              Selamat datang di Perpustakaan Jarvis, sumber utama Anda untuk beragam koleksi buku. Didirikan pada tahun 2024, kami berkomitmen untuk mempromosikan literasi dan menyediakan akses mudah ke berbagai bahan bacaan. Pilihan kami meliputi buku-buku baru dan bekas, yang melayani semua jenis pembaca. Bergabunglah bersama kami dalam merayakan kegembiraan membaca dan menjelajahi dunia melalui buku.
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- blog section -->

  <section class="blog_section layout_padding" id="blog">
    <div class="container">
      <div class="heading_container">
        <h2>
          Latest Blog
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/b1.jpeg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Kadokawa Collaborates with Gramedia
              </h5>
              <p class="text-justify">
                PT. Phoenix Gramedia Indonesia dengan bangga mengumumkan kolaborasinya dengan Kadokawa, sebuah langkah signifikan yang menandai awal perjalanan dan kesuksesan bersama. PT. Phoenix Gramedia Indonesia mempersembahkan lima produk pertamanya sebagai wujud dedikasi dan inovasi mereka. Kolaborasi ini diharapkan akan membawa angin segar dan memperkaya dunia literasi serta hiburan di Indonesia.
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/b2co.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Rilisan Buku Baru!! Alya Sometimes Hides Her Feeling
              </h5>
              <p class="text-justify">
                Bagian kedua dari komedi romantis antara pemuda otaku dan gadis cantik keturunan Rusia kembali dimulai. Alya dan Masachika melakukan pertemuan rahasia di halaman sekolah di saat senja. Meskipun mereka berdebat panas, tapi mereka tetap berjanji untuk membentuk duo dalam pemilihan ketua OSIS selanjutnya. Lawan mereka nanti adalah Yuki Suou—kandidat utama ketua OSIS yang memiliki karisma luar biasa.
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/b3co.jpg" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Collaborates with Jarvis Academy
              </h5>
              <p class="text-justify">
                Kolaborasi Library kami dengan perusahaan Jarvis telah resmi dimulai. Library dan Jarvis bekerja sama untuk menciptakan pengalaman membaca yang lebih interaktif dan canggih. Para pengunjung Library dapat menikmati akses mudah ke koleksi buku digital yang luas. Kerjasama ini bertujuan untuk meningkatkan minat baca dan literasi di kalangan semua umur. Library kami siap membawa perubahan positif dalam dunia literasi.
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end blog section -->

  <!-- client section -->

  <section class="client_section layout_padding-bottom">
    <div class="container">
      <div class="heading_container">
        <h2>
          Testimonial
        </h2>
      </div>
      <div id="carouselExample2Controls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                      <h6>
                        Siaalya
                      </h6>
                    </div>
                    <p>
                      It is a long established fact that a reader will be
                      distracted by the readable cIt is a long established fact
                      that a reader will be distracted by the readable c
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                      <h6>
                        Duo the Owl
                      </h6>
                    </div>
                    <p>
                      It is a long established fact that a reader will be
                      distracted by the readable cIt is a long established fact
                      that a reader will be distracted by the readable c
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-11 col-lg-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client.jpg" alt="" />
                  </div>
                  <div class="detail-box">
                    <div class="name">
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                      <h6>
                        Duo the Owl
                      </h6>
                    </div>
                    <p>
                      It is a long established fact that a reader will be
                      distracted by the readable cIt is a long established fact
                      that a reader will be distracted by the readable c
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-container">
          <a class="carousel-control-prev" href="#carouselExample2Controls" role="button" data-slide="prev">
            <i class="fa fa-long-arrow-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExample2Controls" role="button" data-slide="next">
            <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- end client section -->

  <!-- contact section -->
  <section class="contact_section  long_section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="form_container">
            <div class="heading_container">
              <h2>
                Contact Us
              </h2>
            </div>
            <form action="">
              <div>
                <input type="text" placeholder="Your Name" />
              </div>
              <div>
                <input type="text" placeholder="Phone Number" />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="btn_box">
                <button>
                  SEND
                </button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6">
          <div class="map_container">
            <div class="map">
              <div id="googleMap"></div>
            </div>
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
                <a class="" href="index.html">Home <span class="sr-only">(current)</span></a>
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
        <a href="https://html.design/">Free Html Templates</a>
        Distribution <a href="https://themewagon.com">ThemeWagon</a>
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
<?php
$conn = mysqli_connect("localhost", "root", "", "tblproduct");
$result = [];
$resultset = mysqli_query($conn, "SELECT * FROM tblproduct");
while ($res = mysqli_fetch_assoc($resultset)) {
  $result[] = $res;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>TechEntShop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900" rel="stylesheet">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">

  <link rel="stylesheet" href="css/jquery.fancybox.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">

  <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">

          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="h2 mb-0">TechEntShop<span class="text-primary"></span> </a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#about-section" class="nav-link">About Us</a></li>
                <li><a href="#team-section" class="nav-link">Catalog</a></li>
                <li><a href="#services-section" class="nav-link"></a></li>
                <li><a href="#blog-section" class="nav-link">Contact Us</a></li>
                <li><a href="login.php" class="nav-link">Login</a></li>
                <!-- <li><a href="" class="nav-link">Register</a></li> -->
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>

    </header>



    <div class="site-blocks-cover overlay" style="background-image: url(images/hero_2.jpg);" data-aos="fade" id="home-section">
      <div class="container">
        <div class="row align-items-center justify-content-center">


          <div class="col-md-6 mt-lg-5 text-center">
            <h1>Jadilah Tech Enthusiast</h1>
            <p class="mb-5">Dapatkan pengalaman berharga belanja di toko kami</p>
            <div>
              <a href="#about-section" class="btn btn-primary mr-2 mb-2">Mulai</a>
            </div>
          </div>

        </div>
      </div>
    </div>


    <div class="site-section cta-big-image" id="about-section">
      <div class="container">

        <img src="images/img_big_1.jpg" alt="Image" class="img-fluid">
        <div class="img-box">
          <span class="sub-title">TechEntShop</span>
          <h2>Seputar TechEntShop</h2>
          <p>TechEntShop hadir untuk anda, para gamer yang haus akan teknologi, kami hadir membantu anda untuk mendapatkan mouse yang pas dikantong dan performa yang gila untuk anda</p>
          <p><a href="#blog-section" class="btn btn-outline-dark">Baca Juga</a></p>
        </div>
      </div>
    </div>


    <section class="site-section border-bottom" id="team-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-5 text-left">
            <h2 class="section-title mb-3">Mouse fantastis <br> Yang wajib kalian miliki</h2>
            <p class="lead">Berikut kami tawarkan beberapa mouse yang wajib kalian dapatkan sekarang juga</p>
          </div>
        </div>
        <div class="row">


          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
              <figure>
                <img src="images/cat_1.png" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>HyperX Mouse</h3>
                <span class="position">$ 849.00</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
              <figure>
                <img src="images/cat_2.png" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Razer Gaming Mouse</h3>
                <span class="position">$ 745.00</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
              <figure>
                <img src="images/cat_3.png" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Logitech Mouse</h3>
                <span class="position">$ 986.00</span>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 mb-4">
            <div class="team-member">
              <figure>
                <img src="images/cat_4.png" alt="Image" class="img-fluid">
              </figure>
              <div class="p-3">
                <h3>Rexus Gaming Mouse</h3>
                <span class="position">$ 345.00</span>
              </div>
            </div>
          </div>



        </div>
      </div>
    </section>


    <section class="site-section">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">

            <div class="owl-carousel slide-one-item-alt">
              <img src="images/slide_1.jpg" alt="Image" class="img-fluid">
              <img src="images/slide_2.jpg" alt="Image" class="img-fluid">
              <img src="images/slide_3.jpg" alt="Image" class="img-fluid">
              <img src="images/slide_4.jpg" alt="Image" class="img-fluid">
            </div>
            <div class="custom-direction">
              <a href="#" class="custom-prev">Prev</a><a href="#" class="custom-next">Next</a>
            </div>

          </div>
          <div class="col-lg-5 ml-auto">

            <h2 class="section-title mb-3">We Are The Best Consulting Gaming Mouse</h2>
            <p class="lead"></p>
            <p>Banyak hal menarik tentang teknologi, teknologi hadir untuk memudahkan pekerjaan manusia</p>

            <p><a href="index2.php" class="btn btn-primary mr-2 mb-2">Pesan Sekarang</a></p>

          </div>
        </div>
      </div>

      <section class="site-section testimonial-wrap" id="testimonials-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-12 text-center">
              <h2 class="section-title mb-3">Testimonials</h2>
            </div>
          </div>
        </div>
        <div class="slide-one-item home-slider owl-carousel">
          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>

              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_3.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>John Smith</p>
              </figure>
            </div>
          </div>
          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_2.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Christine Aguilar</p>
              </figure>

            </div>
          </div>

          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Robert Spears</p>
              </figure>


            </div>
          </div>

          <div>
            <div class="testimonial">

              <blockquote class="mb-5">
                <p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
              </blockquote>
              <figure class="mb-4 d-flex align-items-center justify-content-center">
                <div><img src="images/person_4.jpg" alt="Image" class="w-50 img-fluid mb-3"></div>
                <p>Bruce Rogers</p>
              </figure>

            </div>
          </div>

        </div>
      </section>
      <section class="site-section" id="blog-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-12 text-center">
              <h3></h3>
              <h3></h3>
              <h3></h3>
              <h3></h3>
              <h3 class="section-sub-title">Contact</h3>
              <h2 class="section-title mb-3">Our Contact</h2>
            </div>
          </div>
          <div class="col-md-5">

            <div class="p-4 mb-3 bg-white">
              <br></br>
              <br></br>
              <p class="mb-0 font-weight-bold">Address</p>
              <p class="mb-4">Jalan Jend. Ahmad Yani No 12, Surabaya</p>

              <p class="mb-0 font-weight-bold">Phone</p>
              <p class="mb-4"><a href="#">+62 822 9064 5677</a></p>

              <p class="mb-0 font-weight-bold">Email Address</p>
              <p class="mb-0"><a href="#">TechEntShop.com</a></p>
            </div>

          </div>

        </div>
  </div>
  </section>




  


  <footer class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="row">
            <div class="col-md-5">
              <h2 class="footer-heading mb-4">About Us</h2>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
            </div>
            <div class="col-md-3 ml-auto">
              <h2 class="footer-heading mb-4">Quick Links</h2>
              <ul class="list-unstyled">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Testimonials</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>

          </div>
        </div>
        <div class="">
          <h2 class="footer-heading mb-4">Follow Us</h2>
          <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
          <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
          <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
          <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
        </div>


      </div>
    </div>
    <div class="row pt-5 mt-5 text-center">
      <div class="col-md-12">
        <div class="border-top pt-5">
          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>
              document.write(new Date().getFullYear());
            </script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>

    </div>
    </div>
  </footer>

  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>


  <script src="js/main.js"></script>

</body>

</html>
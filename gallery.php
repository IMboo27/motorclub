<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Enjoy your RIDING with US</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="manifest" href="site.webmanifest" />
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="assets/img/favicon.ico"
    />

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="assets/css/slicknav.css" />
    <link rel="stylesheet" href="assets/css/flaticon.css" />
    <link rel="stylesheet" href="assets/css/gijgo.css" />
    <link rel="stylesheet" href="assets/css/animate.min.css" />
    <link rel="stylesheet" href="assets/css/animated-headline.css" />
    <link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="assets/css/themify-icons.css" />
    <link rel="stylesheet" href="assets/css/slick.css" />
    <link rel="stylesheet" href="assets/css/nice-select.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
  </head>
  <body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
          <div class="preloader-circle"></div>
          <div class="preloader-img pere-text">
            <img src="assets/img/logo/prospek.jpg" alt="" />
          </div>
        </div>
      </div>
    </div>
    <!-- Preloader Start -->
    <header>
      <!--? Header Start -->
      <div class="header-area header-transparent">
        <div class="main-header header-sticky">
          <div class="container-fluid">
            <div class="row align-items-center">
              <!-- Logo -->
              <div class="col-xl-2 col-lg-2 col-md-1">
                <div class="logo">
                  <a href="index.php"
                    ><img
                      src="assets/img/logo/prospek1.png"
                      width="150"
                      height="80"
                      alt=""
                    />
                    <p
                      class="text-center"
                      style="color: white; margin-right: 1em"
                    >
                      SAVPROMED
                    </p></a
                  >
                </div>
              </div>
              <div class="col-xl-10 col-lg-10 col-md-10">
                <div
                  class="menu-main d-flex align-items-center justify-content-end"
                >
                  <!-- Main-menu -->
                  <div class="main-menu f-right d-none d-lg-block">
                    <nav>
                      <ul id="navigation">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="produk.php">Produk</a></li>
                        <li><a href="gallery.php">gallery</a></li>
                        <li><a href="profile.php">Profile</a></li>
                        <li>
                          <a href="visimisi.php">visi & misi</a>
                        </li>
                        <li><a href="contact.php">Contact</a></li>
                      </ul>
                    </nav>
                  </div>
                  <div class="header-right-btn f-right d-none d-lg-block ml-30">
                    <a href="from.php" class="btn header-btn">Login</a>
                  </div>
                </div>
              </div>
              <!-- Mobile Menu -->
              <div class="col-12">
                <div class="mobile_menu d-block d-lg-none"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Header End -->
    </header>
    <main>
      <!--? Hero Start -->
      <div class="slider-area2">
        <div class="slider-height2 d-flex align-items-center">
          <div class="container">
            <div class="row">
              <div class="col-xl-12">
                <div class="hero-cap hero-cap2 text-center pt-70">
                  <h2>Galeri kami</h2>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Hero End -->
      <!--? Gallery Area Start -->
      <!-- gallery start -->
      <div class="gallery-area">
        <div class="container-fluid p-0 fix">
          <div class="row">

          <?php 
          include 'koneksi.php';
          $query=mysqli_query($koneksi,"SELECT * FROM produk_motor");
          $gallery = mysqli_fetch_all($query, MYSQLI_ASSOC);

          ?>

          <?php foreach ($gallery as $produk):?>

            <div class="col-lg-6">
              <div class="box snake mb-30">
                <div
                  class="gallery-img big-img"
                  style="background-image: url(assets/img/gallery/<?= $produk['img_produk'];?>)"
                ></div>
                <div class="overlay">
                  <div class="overlay-content">
                    <a href="gallery.php"
                      ><i class="ti-arrow-top-right"></i
                    ></a>
                    <h3><?= $produk['nama_produk'];?></h3>
                    <p><?= $produk['ket_produk'];?></p>
                  </div>
                </div>
              </div>
            </div>
            <?php endforeach ?>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="box snake mb-30">
                    <div
                      class="gallery-img small-img"
                      style="background-image: url(assets/img/gallery/m10.jpg)"
                    ></div>
                    <div class="overlay">
                      <div class="overlay-content">
                        <a href="gallery.php"
                          ><i class="ti-arrow-top-right"></i
                        ></a>
                        <h3>Sekretaris</h3>
                        <p>Dondi Firmansyah</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="box snake mb-30">
                    <div
                      class="gallery-img small-img"
                      style="background-image: url(assets/img/gallery/m9.jpg)"
                    ></div>
                    <div class="overlay">
                      <div class="overlay-content">
                        <a href="gallery.php"
                          ><i class="ti-arrow-top-right"></i
                        ></a>
                        <h3>Bendahara</h3>
                        <p>Richard sembiring</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="box snake mb-30">
                    <div
                      class="gallery-img small-img"
                      style="background-image: url(assets/img/gallery/m6.jpg)"
                    ></div>
                    <div class="overlay">
                      <div class="overlay-content">
                        <a href="gallery.php"
                          ><i class="ti-arrow-top-right"></i
                        ></a>
                        <h3>Member</h3>
                        <p>Kito Mulyodono</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="box snake mb-30">
                    <div
                      class="gallery-img small-img"
                      style="background-image: url(assets/img/gallery/m7.jpg)"
                    ></div>
                    <div class="overlay">
                      <div class="overlay-content">
                        <a href="gallery.php"
                          ><i class="ti-arrow-top-right"></i
                        ></a>
                        <h3>Member</h3>
                        <p>Rozi Andrian</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- gallery End -->
      <!--? Want To work -->
      <section
        class="wantToWork-area w-padding section-bg"
        data-background="assets/img/gallery/m.jpg"
      >
        <div class="container">
          <div class="row align-items-center justify-content-between">
            <div class="col-xl-6 col-lg-7 col-md-8 col-sm-10">
              <div class="wantToWork-caption">
                <h2>PROFILE</h2>
                <p>
                  "Bukan tentang seberapa jauh jarak yang telah kau tempuh. Atau
                  berapa kilometer yang telah kau lalui. Tetapi, seberapa besar
                  kamu telah menghargai orang lain."
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Want To work End -->
      <!--? Date Tabs Start -->
      <section class="date-tabs section-padding30">
        <div class="container">
          <!-- Section Tittle -->
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
              <div class="section-tittle text-center mb-100">
                <span>visi dan misi kami</span>
                <h2>visi</h2>
                <p>
                  <b>
                    Kami ingin membangun tempat untuk anak muda yang hobi dengan
                    sepeda motor. Dengan adanya komunitas ini kami dapat
                    menimalisir dan juga menghilangkan tindak kejahatan yang
                    ada. Agar seluruh masyarakat sekitar tidak merasa resah dan
                    gelisah akan kehadiran kami.
                  </b>
                </p>
                <h2>misi</h2>
                <p>
                  <b>
                    Mewujudkan lingkungan yang bersih, aman, nyaman, dan damai
                    untuk semua masyarakat sekitar.
                  </b>
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Date Tabs End -->
      <!--? Contact form Start -->
      <section class="contact-form-main">
        <div class="container">
          <div class="row justify-content-end">
            <div class="col-xl-7 col-lg-7">
              <div class="form-wrapper">
                <!--Section Tittle  -->
                <div class="form-tittle">
                  <div class="row">
                    <div class="col-lg-11 col-md-10 col-sm-10">
                      <div class="section-tittle">
                        <span>Formulir Login</span>
                        <h2>
                          Bergabunglah bersama kami <br />
                          Gratis!
                        </h2>
                      </div>
                    </div>
                  </div>
                </div>
                <!--End Section Tittle  -->
                <form id="contact-form" action="cekform.php" method="POST">
                  <div class="row">
                    <div class="col-lg-6 col-md-6">
                      <div class="form-box subject-icon mb-30">
                        <input
                          type="Email"
                          name="email"
                          placeholder="Email"
                        />
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 mb-30">
                      <div class="select-itms">
                        <div class="form-box email-icon mb-30">
                          <input
                            type="password"
                            name="password"
                            placeholder="Password"
                          />
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-12">
                      <div class="submit-info">
                        <button class="btn" type="submit">Login</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- contact left Img-->
        <div class="from-left d-none d-lg-block">
          <img src="assets/img/gallery/m14.jpg" alt="" />
        </div>
      </section>
      <!-- Contact form End -->
    </main>
    <footer>
      <!--? Footer Start-->
      <div
        class="footer-area section-bg"
        data-background="assets/img/gallery/m15.jpg"
      >
        <div class="container">
          <div class="footer-top footer-padding">
            <!-- Footer Menu -->
            <div class="row d-flex justify-content-between">
              <div class="col-xl-3 col-lg-4 col-md-50 col-sm-6">
                <div class="single-footer-caption mb-50">
                  <div class="footer-tittle">
                    <h4>INFO</h4>
                    <ul>
                      <li><a href="#">About Us</a></li>
                      <li><a href="#">Company</a></li>
                      <li><a href="#"> Press & Blog</a></li>
                      <li><a href="#"> Privacy Policy</a></li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-lg-4 col-md-50 col-sm-6">
                <div class="single-footer-caption mb-50">
                  <!-- logo -->
                  <div class="footer-logo">
                    <a href="index.php"
                      ><img
                        src="assets/img/logo/prospek1.png"
                        width="80"
                        height="80"
                        alt=""
                    /></a>
                  </div>
                  <div class="footer-tittle">
                    <div class="footer-pera">
                      <p class="info1">
                        Untuk melihat informasi terbaru silahkan ikuti halaman
                        media sosial kami.
                      </p>
                    </div>
                  </div>
                  <!-- Footer Social -->
                  <div class="footer-social">
                    <a href="https://www.facebook.com/sai4ull"
                      ><i class="fab fa-facebook-f"></i
                    ></a>
                    <a href=""><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fas fa-globe"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Footer Bottom -->
          <div class="footer-bottom">
            <div class="row d-flex align-items-center">
              <div class="col-lg-12">
                <div class="footer-copy-right text-center">
                  <p>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    Enjoy with your day and have a nice day
                    <i class="fa fa-heart" aria-hidden="true"></i> by
                    <a href="https://colorlib.com" target="_blank">Yudi</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer End-->
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
      <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->

    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- Nice-select, sticky -->
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="./assets/js/jquery.counterup.min.js"></script>
    <script src="./assets/js/waypoints.min.js"></script>
    <script src="./assets/js/jquery.countdown.min.js"></script>
    <script src="./assets/js/hover-direction-snake.min.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>
  </body>
</html>

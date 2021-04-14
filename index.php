<?php
require('include/db.php');
$query = "SELECT * FROM home,section_control,social_media,about,contact,site_background,seo";
$run = mysqli_query($db, $query);
$user_data = mysqli_fetch_array($run);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $user_data['page_title'] ?></title>
  <meta content="<?= $user_data['description'] ?>" name="description">
  <meta content="<?= $user_data['keywords'] ?>" name="keywords">

  <!-- Favicons -->
  <link href="images/<?= $user_data['siteicon'] ?>" rel="icon">
  <link href="images/<?= $user_data['siteicon'] ?>" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <style>
    #hero {
      background: url(images/<?= $user_data['background_img'] ?>);
    }
  </style>
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="images/<?= $user_data['profile_pic'] ?>" alt="" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.php"><?= $user_data['title'] ?></a></h1>
        <div class="social-links mt-3 text-center">
          <?php if ($user_data['twitter'] != '') { ?>
            <a href="https://www.twitter.com/<?= $user_data['twitter'] ?>" class="twitter"><i class="bx bxl-twitter"></i></a>
          <?php
          }
          ?>
          <?php if ($user_data['facebook'] != '') { ?>
            <a href="https://www.facebook.com/<?= $user_data['facebook'] ?>" class="facebook"><i class="bx bxl-facebook"></i></a>
          <?php
          }
          ?>
          <?php if ($user_data['instagram'] != '') { ?>
            <a href="https://www.instagram.com/<?= $user_data['instagram'] ?>" class="instagram"><i class="bx bxl-instagram"></i></a>
          <?php
          }
          ?>
          <?php if ($user_data['linkedin'] != '') { ?>
            <a href="https://www.linkedin.com/in/<?= $user_data['linkedin'] ?>" class="linkedin"><i class="bx bxl-linkedin"></i></a>
          <?php
          }
          ?>
        </div>
      </div>

      <nav class="nav-menu">
        <ul>
          <?php
          if ($user_data['home_section']) {
          ?>
            <li class="active"><a href="index.php"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <?php
          }
          if ($user_data['about_section']) {
          ?>
            <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
          <?php
          }
          if ($user_data['resume_section']) {
          ?>
            <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          <?php
          }
          if ($user_data['portfolio_section']) {
          ?>
            <li><a href="#portfolio"><i class="bx bx-book-content"></i>Portfolio</a></li>
          <?php
          }
          if ($user_data['services_section']) {
          ?>
            <li><a href="#services"><i class="bx bx-server"></i>Services</a></li>
          <?php
          }
          if ($user_data['contact_section']) {
          ?>
            <li><a href="#contact"><i class="bx bx-envelope"></i>Contact</a></li>
          <?php
          }
          ?>

        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1><?= $user_data['title'] ?></h1>
      <p><span class="typed" data-typed-items="<?= $user_data['subtitle'] ?>"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>Learn more about me</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="images/<?= $user_data['profile_pic'] ?>" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3><?= $user_data['about_title'] ?>.</h3>
            <p class="font-italic">
              <?= $user_data['about_subtitle'] ?>
            </p>
            <div class="row">
              <div class="col-lg-6">
                <ul>

                  <?php
                  $query2 = "SELECT * FROM personal_info";
                  $run2 = mysqli_query($db, $query2);
                  while ($personal_info = mysqli_fetch_array($run2)) {
                  ?>
                    <li><i class="icofont-rounded-right"></i> <strong><?= $personal_info['label'] ?>:</strong><?= $personal_info['value'] ?></li>
                  <?php
                  }
                  ?>
                </ul>
              </div>
            </div>
            <p>
              <?= $user_data['about_desc'] ?>
            </p>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>
          <p>Here it is</p>
        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">
            <?php
            $query3 = "SELECT * FROM skills";
            $run3 = mysqli_query($db, $query3);
            while ($skill = mysqli_fetch_array($run3)) {
            ?>

              <div class="progress">
                <span class="skill"><?= $skill['skill_name'] ?><i class="val"><?= $skill['skill_level'] ?>%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="<?= $skill['skill_level'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>
            <?php
            }
            ?>


          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
          <p>Check My Resume</p>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">
            <h3 class="resume-title">Education</h3>
            <?php
            $query4 = "SELECT * FROM resume";
            $run4 = mysqli_query($db, $query4);
            while ($resume = mysqli_fetch_array($run4)) {
              if ($resume['type'] == 'Education') {
            ?>
                <div class="resume-item pb-0">
                  <h4><?= $resume['title'] ?></h4>
                  <h5><?= $resume['time'] ?></h5>
                  <p><em><?= $resume['org'] ?></em></p>
                  <p><?= $resume['about_exp'] ?></p>
                </div>
            <?php
              }
            }
            ?>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Professional Experience</h3>
            <?php
            $query4 = "SELECT * FROM resume";
            $run4 = mysqli_query($db, $query4);
            while ($resume = mysqli_fetch_array($run4)) {
              if ($resume['type'] == 'Professional Experience') {
            ?>
                <div class="resume-item">
                  <h4><?= $resume['title'] ?></h4>
                  <h5><?= $resume['time'] ?></h5>
                  <p><em><?= $resume['org'] ?></em></p>
                  <p><?= $resume['about_exp'] ?></p>
              <?php
              }
            }
              ?>
                </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Portfolio</h2>
          <p>My Busieness</p>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-lg-12 d-flex justify-content-center">

          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="100">
          <?php
          $query5 = "SELECT * FROM portfolio";
          $run5 = mysqli_query($db, $query5);
          while ($portfolio = mysqli_fetch_array($run5)) {

          ?>

            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                <img src="images/<?= $portfolio['project_pic'] ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?= $portfolio['project_name'] ?></h4>
                  <p><?= $portfolio['project_type'] ?></p>
                  <div class="portfolio-links">
                    <a href="images/<?= $portfolio['project_pic'] ?>" data-gall="portfolioGallery" class="venobox" title="My Business"><i class="bx bx-plus"></i></a>
                    <a href="<?= $portfolio['project_link'] ?>" title="More Details"><i class="bx bx-link"></i></a>
                  </div>
                </div>
              </div>
            </div>
          <?php
          }
          ?>


        </div>
      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Contact Me</p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info-box">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>My Address</h4>
                <p><?= $user_data['address'] ?></p>
              </div>
            </div>

            <div class="col-lg-5 d-flex align-items-stretch">
              <div class="info-box">
                <div class="address">
                  <i class="icofont-envelope"></i>
                  <h4>Email Me</h4>
                  <p><?= $user_data['email'] ?></p>
                </div>
              </div>

              <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info-box">
                  <div class="address">
                    <i class="icofont-phone"></i>
                    <h4>Call Me</h4>
                    <p><?= $user_data['mobile'] ?></p>
                  </div>
                </div>


              </div>
            </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Fazle Rabbi</span></strong>
      </div>
      <div class="credits">
        Developed By <a href="https://www.twitter.com/raselahmed442/">Raxonomus</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
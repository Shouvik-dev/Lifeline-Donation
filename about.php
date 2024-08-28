<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>About</title>
  <link href="//fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style-starter.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
  <!--header-->
  <?php include('inc/header.php'); ?>
  <!-- //header -->
  <div class="inner-banner">
    <section class="w3l-breadcrumb py-5">
      <div class="container py-lg-5 py-md-3">
        <h2 class="title">About Us</h2>
      </div>
    </section>
  </div>

  <!-- banner bottom shape -->
  <div class="position-relative">
    <div class="shape overflow-hidden">
      <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
      </svg>
    </div>
  </div>
  <!-- banner bottom shape -->
  <section class="w3l-aboutblock1 py-5" id="about">
    <div class="container py-lg-5 py-md-3">
      <div class="row">
        <div class="col-lg-6">
          <h5 class="title-small">A little about Us</h5>
          <h3 class="title-big">Welcome to Lifeline Donation</h3>
          <p class="mt-3">&nbsp; A dedicated platform designed to bridge the gap between those who want to help and those in need. Our mission is to facilitate resource donation by connecting generous individuals and organizations with communities facing challenges. Whether it's food, clothing, educational materials, or other essentials, Lifeline Donation ensures that every contribution reaches its intended destination, making a tangible difference in people's lives. Join us in creating a better tomorrow by giving today.</p>

          <h3 class="title mt-4">"Over 20 Years of Accomplishments”</h3>
          <a href="events.php" class="btn btn-primary btn-style mt-lg-5 mt-4"><i class="bi bi-clock-fill"></i></i> Upcoming events</a>
        </div>
        <div class="col-lg-6 mt-lg-0 mt-5">
        <img src=".\assets\images\about1.jpg" alt="" class="radius-image img-fluid">
        </div>
      </div>
    </div>
  </section>
  <!-- forms -->
  <section class="w3l-forms-9 py-5" id="">
    <div class="main-w3 py-lg-5 py-md-3">
      <div class="container">
        <div class="row align-items-center">
          <div class="main-midd col-lg-9">
            <h3 class="title-big">Facts about Lifeline Donation</h3>
            <p class="mt-3">&nbsp; Lifeline Donation is a platform dedicated to empowering the underprivileged by providing essential resources like food, clothing, and educational materials. Our mission is to help those in need raise their heads with pride and face the future with dignity. By connecting donors with communities in need, we aim to create lasting, positive change and foster hope for a brighter tomorrow.</p>
          </div>
          <div class="main-midd-2 col-lg-3 mt-lg-0 mt-4 text-lg-right">
            <a class="btn btn-style btn-primary" href="donate.php"><span class="fa fa-heart mr-1"></span> Donate Now </a>
          </div>
        </div>

        <div class="donar-img mt-5"> <!-- image -> donar-img -->
          <div class="right-side text-center">
            <span class="fa fa-heart"></span>
            <p>OUR TOP DONAR</p>
            <h3 class="big my-3">25000 INR</h3>
            <a class="btn btn-text" href="donate.php">Help us</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //forms -->
  <section class="w3l-aboutblock3 py-5" id="videos">
    <div class="video-recipe py-lg-5 py-md-3">
      <div class="container">
        <div class="row">
          <div class="col-lg-5 align-self">
            <h3 class="title-big">To help the poor to raise their head and face the future with pride</h3>
            <p class="mt-4">we empower them through essential resources and support. By providing access to food, clothing, education, and other necessities, we aim to uplift those in need, fostering self-reliance and confidence. Our efforts are focused on creating opportunities that enable the underprivileged to overcome challenges, build a better life, and embrace the future with dignity and hope.</p>
          </div>
          <div class="col-lg-7 mt-lg-0 mt-md-5 mt-4">
            <div class="row">
              <div class="col-md-6">
                <iframe src="https://www.youtube.com/embed/Sqqj_14wBxU?si=-bwEhV-Kbvu9WrDe" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <h3 class="video-title mt-sm-4 mt-3">The man of the poor.</h3>
              </div>

              <div class="col-md-6 mt-md-0 mt-5">
                <iframe src="https://www.youtube.com/embed/onHLRs67BSg?si=NC8Dd1hSm1wpIFss" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <h3 class="video-title mt-sm-4 mt-3">Share Street - Donating To The Needy</h3>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/team-sec-->
  <?php include('components/happy_volunteers.php'); ?>
  <!--//team-sec-->

  <!-- testimonials -->
  <?php include('components/testimonials.php'); ?>
  <!-- //testimonials -->

  <!-- footer 14 -->
  <?php include('inc/footer.php'); ?>
  <!-- //footer 14 -->

  <script src="assets/js/jquery-3.3.1.min.js"></script> <!-- Common jquery plugin -->

  <script src="assets/js/theme-change.js"></script><!-- theme switch js (light and dark)-->
  <script src="assets/js/owl.carousel.js"></script>

  <!-- script for banner slider-->
  <script>
    $(document).ready(function() {
      $('.owl-one').owlCarousel({
        loop: true,
        dots: false,
        margin: 0,
        nav: true,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1
          },
          480: {
            items: 1
          },
          667: {
            items: 1
          },
          1000: {
            items: 1
          }
        }
      })
    })
  </script>
  <!-- //script -->

  <!-- script for testimonials carousel slider -->
  <script>
    $(document).ready(function() {
      $("#owl-demo1").owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1
          },
          736: {
            items: 1
          },
          1000: {
            items: 2,
            loop: false
          }
        }
      })
    })
  </script>
  <!-- //script for testimonials carousel slider -->

  <script src="assets/js/counter.js"></script>

  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function() {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function() {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function() {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function() {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <!-- disable body scroll which navbar is in active -->
  <script>
    $(function() {
      $('.navbar-toggler').click(function() {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
  <!-- //disable body scroll which navbar is in active -->

  <!--bootstrap-->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- //bootstrap-->
</body>

</html>
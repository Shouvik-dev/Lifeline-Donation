<?php include('ADMIN/inc/db.php'); ?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Events</title>

  <link href="//fonts.googleapis.com/css2?family=DM+Sans:wght@400;700&display=swap" rel="stylesheet">

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
  <!--header-->
  <?php include('inc/header.php'); ?>
  <!-- //header -->
  <div class="inner-banner">
    <section class="w3l-breadcrumb py-5">
      <div class="container py-lg-5 py-md-3">
        <h2 class="title">Signup</h2>
      </div>
    </section>
  </div>


  <!-- event content start -->

  <!-- Registration 3 - Bootstrap Brain Component -->

  <section class="p-3 p-md-4 p-xl-5 ">
    <div class="container ">
      <div class="row">
        <div class="d-flex justify-content-center align-items-center min-vh-100">
          <div class="col-12 col-md-6 bsb-tpl-bg-lotion">
            <div class="p-3 p-md-4 p-xl-5">
              <div class="row">
                <div class="col-12 ">
                  <div class="mb-5">
                    <h2 class="h3">Registration</h2>
                    <h3 class="fs-6 fw-normal text-secondary m-0">Enter your details to register</h3>
                  </div>
                </div>
              </div>


              <!-- FORM -->
              <form action="add_vol.php" method="post" enctype="multipart/form-data">
                <div class="row gy-3 gy-md-4 overflow-hidden">
                  <div class="col-12">
                    <label for="firstName" class="form-label">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="volname" id="firstName" placeholder="Name" required>
                  </div>
                  <div class="col-12 mb-3">
                    <label for="gender" class="form-label">Gender <span class="text-danger">*</span></label>
                    <select class="form-control" name="volgender" id="gender" required>
                      <option value="">Select Gender</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                      <option value="other">Other</option>
                    </select>
                  </div>
                  <div class="col-12 mb-3">
                    <label for="contactNo" class="form-label">Phone Number <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="volphone" id="contactNo" placeholder="Phone Number" required>
                  </div>
                  <div class="col-12 mb-3">
                    <label for="dob" class="form-label">Date of Birth <span class="text-danger">*</span></label>
                    <input type="date" class="form-control" name="voldob" id="dob" required>
                  </div>
                  <div class="col-12 mb-3">
                    <label for="address" class="form-label">Address <span class="text-danger">*</span></label>
                    <textarea class="form-control" name="voladdress" id="address" placeholder="Address" rows="3" required></textarea>
                  </div>
                  <div class="col-12 mb-3">
                    <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" name="volemail" id="email" placeholder="Email" required>
                  </div>

                  <div class="col-12 mb-3">
                    <label for="pic" class="form-label">Your photo <span class="text-danger">*</span></label>
                    <input type="file" name="volpic" id="picture" required>
                  </div>

                  <div class="col-12">
                    <div class="d-grid">
                      <br>
                      <button class="btn bsb-btn-xl btn-primary" name="add_vol1" type="submit">Register as a volunteer</button>
                    </div>
                  </div>
                </div>
              </form>


            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end of event content -->


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

  <!--modal box css-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
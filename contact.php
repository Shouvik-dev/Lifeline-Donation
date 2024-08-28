<?php
if (isset($_POST['sendmsg'])) {
  include("ADMIN/inc/db.php");
  $sender_name = $_POST['msgName'];
  $sender_email = $_POST['msgemail'];
  $sender_phone = $_POST['msgPhone'];
  $sender_subject = $_POST['msgSubject'];
  $sender_message = $_POST['msglMessage'];

  $ins = "INSERT INTO messages SET name='$sender_name', email='$sender_email', phone_no='$sender_phone', subject='$sender_subject', message='$sender_message'";
  if ($con->query($ins)) {
    $msg = "Successfully send the message";
  } else {
    echo "failed to insert";
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <title>Contact</title>

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
        <h2 class="title">Contact Us</h2>
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

  <!-- contacts -->
  <section class="w3l-contact-7 py-5" id="contact">k
    <div class="contacts-9 py-lg-5 py-md-4">
      <div class="container">
        <div class="top-map">
          <div class="row map-content-9">

            <!-- form-->
            <div class="col-lg-8">
              <h3 class="title-big">Send us a Message</h3>
              <p class="mb-4 mt-lg-0 mt-2">Your email address will not be published. Required fields are marked *</p>

              <?php if (isset($msg)) { ?>
                <div class="alert alert-success">
                  <?php echo $msg; ?>
                </div>
              <?php } ?>


              <form action="" method="post" class="text-right" enctype="multipart/form-data">
                <div class="form-grid">
                  <input type="text" name="msgName" placeholder="Name*" required="">
                  <input type="email" name="msgemail" placeholder="Email*" required="">
                  <input type="text" name="msgPhone" id="w3lPhone" placeholder="Phone number*"
                    required="">
                  <input type="text" name="msgSubject" id="w3lSubject" placeholder="Subject">
                </div>
                <textarea name="msglMessage" id="w3lMessage" placeholder="Message"></textarea>
                <button type="submit" name="sendmsg" class="btn btn-primary btn-style mt-3">Send Message</button>
              </form>
            </div>


            <div class="col-lg-4 cont-details">
              <address>
                <h5 class="">Contact Address</h5>
                <p><span class="fa fa-map-marker"></span>Kolkata. </p>
                <p> <a href="mailto:shouvikdas.dev@gmail.com"><span
                      class="fa fa-envelope"></span>shouvikdas.dev@gmail.com</a></p>
                <p><span class="fa fa-phone"></span><a href="tel:+44-000-888-999"> +91-000-888-999</a></p>
                <a href="donate.php" class="btn btn-style btn-outline-primary mt-4">
                  <span class="fa fa-heart mr-1"></span> Make Donation</a>
              </address>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //contacts -->
  <div class="map">
    <!-- <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2895687731!2d-74.26055986835598!3d40.697668402590374!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1562582305883!5m2!1sen!2sin"
        frameborder="0" style="border:0" allowfullscreen=""></iframe> -->

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d117925.21689856601!2d88.26495191063262!3d22.535564935092147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f882db4908f667%3A0x43e330e68f6c2cbc!2sKolkata%2C%20West%20Bengal!5e0!3m2!1sen!2sin!4v1720420194764!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

  </div>

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
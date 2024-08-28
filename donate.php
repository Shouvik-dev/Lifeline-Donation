<?php include('ADMIN/inc/db.php'); ?>

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
        <h2 class="title">Donate</h2>
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
            <!-- <div class="col-lg-8">
                        <h3 class="title-big">Send us a Message</h3>
                        <p class="mb-4 mt-lg-0 mt-2">Your email address will not be published. Required fields are marked *</p>
                        <form action="send_message.php" method="post" class="text-right" enctype="multipart/form-data">
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
                    </div> -->


            <div class="col-lg-4 cont-details">
              <address>
                <h5 class="">Contact Address</h5>
                <p><span class="fa fa-map-marker"></span>Kolkata. </p>
                <p> <a href="mailto:shouvikdas.dev@gmail.com"><span
                      class="fa fa-envelope"></span>shouvikdas.dev@gmail.com</a></p>
                <p><span class="fa fa-phone"></span><a href="tel:+44-000-888-999"> +91-000-888-999</a></p>
                <a href="contact.php" class="btn btn-style btn-outline-primary mt-4">
                  <span class="fa fa-heart mr-1"></span> send message</a>
              </address>
            </div>

            <!-- <div class="col-lg-8 cont-details"> -->
            <div class="col-lg-8 cont-details mt-0">
              <address>


                <ul class="bank-details">
                  <li>
                    <p class="bank">Account Name &nbsp; <b>: </b><span class="details">Lifeline foundation </span> </p>
                  </li>
                  <li>
                    <p class="bank">Account NO &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>: </b><span class="details">SB A/C.NO. <b>123456789</b></span> </p>
                  </li>
                  <li>
                    <p class="bank">Bank Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>: </b><span class="details"><b>State Bank of India</b></span> </p>
                  </li>
                  <li>
                    <p class="bank">Branch &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>: </b><span class="details">Sector: V, Saltlake</span> </p>
                  </li>

                  <li>
                    <p class="bank">Barnch Code &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>: </b><span class="details">54981</span> </p>
                  </li>
                  <li>
                    <p class="bank">IFSC Code &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b>: </b><span class="details">INS00112233</span> </p>
                  </li>
                </ul>

              </address>
            </div>




          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //contacts -->

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
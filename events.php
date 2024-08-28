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
        <h2 class="title">Events</h2>
      </div>
    </section>
  </div>


  <!-- event content start -->

  <div class="about">
    <div class="container">
      <br>
      <div class="about-text">
        <h3>Our upcoming events</h3>
      </div>
      <br>
      <div class="about-info">


        <div class="row">
          <?php
          $sel = "SELECT * FROM event WHERE hstatus=1";
          $rs = $con->query($sel);
          while ($row = $rs->fetch_assoc()) {
          ?>

            <div class="col-md-3">
              <div class="card" style=" margin-bottom: 40px; ">
                <img style="width:100%; height:200px" class="card-img-top" src="admin/images/event_img/<?php echo $row['event_image']; ?>" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title"><?php echo $row['event_name']; ?></h4>
                  <p class="card-text"><?php echo $row['event_date']; ?></p>
                  <p class="card-text"><?php echo $row['event_venue']; ?></p>
                  <a href="#" data-bs-toggle="modal" data-bs-target="#ev<?php echo $row['event_id']; ?>" class="btn btn-primary">Read More </a>
                </div>
              </div>
            </div>

            <!-- The popup Modal -->
            <div class="modal" id="ev<?php echo $row['event_id']; ?>">
              <div class="modal-dialog">
                <div class="modal-content">

                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title"><?php echo $row['event_name']; ?></h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>

                  <!-- Modal body -->
                  <div class="modal-body">
                    <?php echo $row['event_details']; ?>
                  </div>

                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                  </div>

                </div>
              </div>
            </div>
          <?php } ?>
        </div>

        <div class="clearfix"> </div>
      </div>
    </div>

  </div>
  </div>

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
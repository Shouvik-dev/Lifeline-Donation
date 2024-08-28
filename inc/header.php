<header id="site-header" class="fixed-top">
  <div class="container">
    <nav class="navbar navbar-expand-lg stroke">
      
      <h1>
        <a class="navbar-brand mr-lg-5" href="index.php">
          <img src="assets/images/lOGO/Logo2.png" alt="Your logo" title="Your logo" />Lifeline Donation
        </a>
      </h1>

      <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.html">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->

      <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
        data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
        aria-label="Toggle navigation">

        <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
        <span class="navbar-toggler-icon fa icon-close fa-times"></span>
        </span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav w-100">

<style>
  .active1{
    color: #F00 !important;
    text-decoration: none;
  }
  </style>

        <?php
$pguri=$_SERVER['REQUEST_URI'];
$pgname=explode("/",$pguri);
$arr=array_reverse($pgname);
 $pgn=$arr[0];
        ?>

          <!-- <li class="nav-item active"> -->
          <li class="nav-item">
            <a class="nav-link <?php if($pgn=="" || $pgn=="index.php"){ echo "active1"; } ?>" href="index.php" >Home <!--<span class="sr-only">(current)</span>--></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link <?php if($pgn=="about.php"){ echo "active1"; } ?>"  href="about.php">About</a>
           </li>
           <li class="nav-item ">
            <a class="nav-link <?php if($pgn=="events.php"){ echo "active1"; } ?>" href="events.php">Events</a>
           </li>  
          <li class="nav-item ">
            <a class="nav-link <?php if($pgn=="contact.php"){ echo "active1"; } ?>" href="contact.php">Contact</a>
          </li> 



          <li class="ml-lg-auto mr-lg-0 m-auto">
              <!-- blank space -->
          </li>

          <li class="align-self">
          <a href="donate.php" class="btn btn-style btn-primary ml-lg-3 mr-lg-2"><span class="fa fa-heart mr-1"></span> Donate</a>        
          <a href="signup.php" class="btn btn-style btn-primary ml-lg-3 mr-lg-2">Join us</a>

          <!-- <a href="#" data-bs-toggle="modal" data-bs-target="#login1" class="btn btn-style btn-primary ml-lg-3 mr-lg-2">became a volunteer</a> -->
          <!-- <a href="#search" class="btn btn-style btn-primary ml-lg-3 mr-lg-2">login</a> -->



                
          </li>
        </ul>
      </div>

      <!-- toggle switch for light and dark theme -->
      <div class="mobile-position">
        <nav class="navigation">
          <div class="theme-switch-wrapper">
            <label class="theme-switch" for="checkbox">
              <input type="checkbox" id="checkbox">
              <div class="mode-container">
                <i class="gg-sun"></i>
                <i class="gg-moon"></i>
              </div>
            </label>
          </div>
        </nav>
      </div>
      <!-- //toggle switch for light and dark theme -->
    </nav>
  </div>

            
  <!--modal box css-->
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</header>
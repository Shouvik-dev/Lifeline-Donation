<!-- About page happy volunteer section -->
<?php
include('ADMIN/inc/db.php');
?>

<section class="w3l-team-main" id="team">
    <div class="team py-5">
        <div class="container py-lg-5">
            <div class="title-content text-center">
                <h3 class="title-big">Happy Volunteers</h3>
            </div>
            <div class="team-row mt-md-5 mt-4">

                <?php
                $sel = "SELECT * FROM all_volunteers WHERE hstatus = 1";
                $rs = $con->query($sel);
                while ($row = $rs->fetch_assoc()) {
                ?>

                    <div div class="team-wrap">
                        <div class="team-member last text-center">
                            <div class="team-img">
                                <img src="ADMIN/images/volunteer_img/<?php echo $row['vimage']; ?>"  alt="" class="radius-image img-fluid" >
                            </div>
                            <a href="#url" class="team-title"><?php echo $row['vname']; ?></a>
                            <p>Volunteer</p>
                        </div>
                    </div>
                <?php } ?> <!-- while loop close -->


                <!-- end team member -->

                <div class="team-apply">
                    <a href="signup.php" class="team-title m-0"><span class="fa fa-plus-circle d-block mb-3"></span> Apply for Volunteer</a>
                </div>

            </div>
        </div>
</section>
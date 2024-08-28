<?php
include('ADMIN/inc/db.php');
?>

<section class="w3l-testimonials" id="testimonials">
	<!-- /grids -->
	<div class="customer-layout py-5">
		<div class="container py-lg-5 py-md-4">
			<div class="heading align-self text-center">
				<h6 class="title-small">Our Testimonials</h6>
				<h3 class="title-big mb-md-5 mb-4">Over 20 Years of Accomplishments</h3>
			</div>

			<!-- /grids -->
			<div class="row testimonial-row">
				<div id="owl-demo1" class="owl-two owl-carousel owl-theme mb-lg-3 mb-5">


					<?php
					$sel = "SELECT * FROM testimonials WHERE tview = 1";
					$rs = $con->query($sel);
					while ($row = $rs->fetch_assoc()) {
					?>

						<div class="item">
							<div class="testimonial-content">
								<div class="testimonial">
									<blockquote>
										<q> <?php echo $row['tmessage']; ?> </q>
									</blockquote>
									<div class="testi-des">
										<div class="test-img"><img src="./ADMIN/images/testimonials_img/<?php echo $row['timage']; ?>" class="img-fluid" alt="client-img">
										</div>
										<div class="peopl align-self">
											<h3> <?php echo $row['tname']; ?> </h3>
											<p class="indentity"> <?php echo $row['tdesignation']; ?> </p>
										</div>
									</div>
								</div>
							</div>
						</div>

					<?php } ?> <!-- while loop close -->


				</div>
			</div>
		</div>
		<!-- /grids -->
	</div>
	<!-- //grids -->
</section>
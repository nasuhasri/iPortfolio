<!DOCTYPE html>
<html lang="en">

<head>
  <?php include ("head.php") ?>
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <?php include("navbar.php") ?>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Nasuha Asri</h1>
      <p>I'm <span class="typed" data-typed-items="Student, Developer, Freelancer"></span></p>
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <?php include ("about.php") ?>
    <!-- End About Section -->

    <!-- ======= Facts Section ======= -->
    <?php include("facts.php") ?>
    <!-- End Facts Section -->

    <!-- ======= Skills Section ======= -->
    <?php include("skills.php") ?>
    <!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <?php include("resume.php") ?>
    <!-- End Resume Section -->

    <!-- ======= Portfolio Section ======= -->
    <?php include("portfolio.php") ?>
    <!-- End Portfolio Section -->

    <!-- ======= Services Section ======= -->
    <?php include("services.php") ?>
    <!-- End Services Section -->

    <!-- ======= Testimonials Section ======= -->
    <?php include("testimonial.php") ?>
    <!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <?php include("contact.php") ?>
    <!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php include("footer.php") ?>
  <!-- End  Footer -->

  <!-- Back To Top -->
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

	<?php include("script.php") ?>
	
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  	<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					...
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
  </div>
</div>

</body>

</html>
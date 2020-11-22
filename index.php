<!DOCTYPE html>
<html lang="en">

<head>
	<?php include ("head.php") ?>
  	<script>
		$(document).ready(function() {
			$('#sem1').DataTable();
		});
		$(document).ready(function() {
			$('#sem2').DataTable();
		});
  	</script>
  	<style>
		table {
			width: 70%;
			margin: 20px auto;
			table-layout: auto;
		}

		.fixed {
			table-layout: fixed;
		}

		table, td, th {
			border-collapse: collapse;
		}

		th, td {
			padding: 10px;
			border: solid 1px;
			text-align: center;
		}
  	</style>
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

		<!-- ======= Skills Section ======= -->
		<?php include("academic.php") ?>
		<!-- End Skills Section -->

		<!-- ======= Skills Section ======= -->
		<?php include("skills.php") ?>
		<!-- End Skills Section -->

		<!-- ======= Resume Section ======= -->
		<?php include("resume.php") ?>
		<!-- End Resume Section -->

		<!-- ======= Portfolio Section ======= -->
		<?php include("portfolio.php") ?>
		<!-- End Portfolio Section -->

		<!-- ======= Contact Section ======= -->
		<?php include("contact.php") ?>
		<!-- End Contact Section -->

	</main>
	<!-- End #main -->

	<!-- ======= Footer ======= -->
	<!-- </?php include("footer.php") ?> -->
	<!-- End  Footer -->

	<!-- Back To Top -->
	<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

	<?php include("script.php") ?>
	
	<!-- First Modal -->
	<div class="modal fade" id="firstPort" tabindex="-1" aria-labelledby="firstPortLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="firstPortLabel">i-Aset System</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="assets/img/portfolio/portfolio-1.jpg" style="height:400px;max-width: 100%;"><br><br>
                    <p class="mb-5">The project is fully coded in PHP, HTML, CSS and using a bootstrap deisgn. There 2 level of users which are staffs and admin. Staffs make a booking and admin will approve the booking if the assets are available. The system can do basic functions which are create, read, update and delete. In this system, I add one few extra functions where the system can send email notification to staffs once suppliers approve the request and print the total booking for that particular month.</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Second Modal -->
    <div class="modal fade" id="secondPort" tabindex="-1" aria-labelledby="secondPortLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="secondPortLabel">Tomatus Station - Order Management System</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="assets/img/portfolio/portfolio-2.jpg" style="height:400px;max-width: 100%;"><br><br>
                    <p class="mb-5">This project is fully coded in PHP, HTML and CSS. There 2 levels of users which are staffs and suppliers. Staffs make an order and suppliers will approve the order if the stock is available. The system can do basic functions which are create, read, update and delete. In this system, I add one extra function where the system can send email notification to staffs once suppliers approve the request. In this group project, I am responsible in leading my team to work together to finish the task since I am group leader aka project manager.</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Third Modal -->
    <div class="modal fade" id="thirdPort" tabindex="-1" aria-labelledby="thirdPortLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="thirdPortLabel">Java - Theme Park Application</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="assets/img/portfolio/3.jpg" style="height:400px;max-width: 100%;"><br><br>
                    <p class="mb-5">This project is fully coded in Java and using GUI. Users can enter details and choose which package they want. I am in charge in making GUI coding and that was my first experience in using GUI code. In addition, the GUI is not in our syllabus and I add that as an extra function for my group projects. I learnt the GUI code from my lecturer privately with my friends in 2 hours. The application also is using object, class and attributes which makes it easier to call the function or method.</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Fourth Modal -->
    <div class="modal fade" id="fourthPort" tabindex="-1" aria-labelledby="fourthPortLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="fourthPortLabel">C++ - Student Record Management</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="assets/img/portfolio/sem2-c++.jpg" style="height:400px;max-width: 100%;"><br><br>
                    <p class="mb-5">Student Record Management is using C++ language. This project is built during semester 2 of diploma to fulfil the Structured Programming course. This project apply few algorithms; sorting, searching, finding maximum and minimum value, counting,  apply 2D-array and using function. </p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Fifth Modal -->
    <div class="modal fade" id="fifthPort" tabindex="-1" aria-labelledby="fifthPortLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="fifthPortLabel">C++ - Car Sales Management System</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="assets/img/portfolio/sem1-c++.jpg" style="height:400px;max-width: 100%;"><br><br>
                    <p class="mb-5">Car Sales Management System is using C++ language. This project is built during semester 1 of diploma to fulfil the Fundamental of Programming course. This project was my first group project to apply the knowledge of C++.</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Sixth Modal -->
    <div class="modal fade" id="sixthPort" tabindex="-1" aria-labelledby="sixthPortLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="sixthPortLabel">NodeJS - Portfolio</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="assets/img/portfolio/nodejs-portfolio.jpg" style="height:400px;max-width: 100%;"><br><br>
                    <p class="mb-5">NodeJS is a language that I learnt during an online program. In this project, I learnt how to use EJS framework and how frontend and backend works. However, this project is still losing many features. Therefore, I still need to learn many things to built a great NodeJS application. </p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-dark" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
	</div>

</body>

</html>
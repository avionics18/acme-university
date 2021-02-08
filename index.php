<?php 
	$page = "home";
	require_once("_includes/config.php");	
	include_once($header_path);
?>



<!-- Hero Carousel Area -->
<div class="mb-5">
	<!-- Slick Slider -->
	<div class="container-fluid p-0">
		<div id="hero-carousel">
			<div>
				<img class="w-100" src="<?php echo BASE_URL . "_assets/imgs/hero-1.jpg" ?>" alt="">
			</div>
			<div>
				<img class="w-100" src="<?php echo BASE_URL . "_assets/imgs/hero-1.jpg" ?>" alt="">
			</div>
			<div>
				<img class="w-100" src="<?php echo BASE_URL . "_assets/imgs/hero-1.jpg" ?>" alt="">
			</div>
		</div>
	</div>
	<!-- Progress Bar -->
	<div class="container-fluid p-0">
		<div id="hero-carousel-progress" class="custom-slick-progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
			<span class="slider__label sr-only"></span>
		</div>
	</div>
	<!-- Slider Navigation -->
	<div id="hero-carousel-navigation" class="custom-slick-navigation text-sm-right text-center py-2">
		<div class="container">
			<button class="btn btn-outline-secondary btn-sm rounded-0 prev">
				<i class="fa fa-long-arrow-left"></i>
			</button>
			<button class="btn btn-outline-secondary btn-sm rounded-0 next">
				<i class="fa fa-long-arrow-right"></i>
			</button>
		</div>
	</div>
	<!-- custom-slick-navigation -->
	<!-- End of Slick Slider -->
</div>


<!-- ============== CONTENT =========== -->

<div class="container mb-5">
	<div class="card bg-white shadow border-0 rounded-xlg">
		<div class="card-body">
			<h2 class="text-dark font-weight-bold">Welcome UG Freshers Of 2020</h2>
			<hr>
			<ul>
				<li>Main Orientation Program: 10:00 am, 11 Nov 2020: View on <a href="#!" class="text-danger">ACME University Official Channel</a> on YouTube.</li>
				<li><a href="#" class="text-danger">Schedule of Undergraduate Orientation Program</a> (without meeting links)</li>
				<li>Please check your email (as registered for JEE-Advanced) for meeting links for all other orientation sessions.</li>
				<li>
					Please also keep a watch on the following places for the latest updates
					<li>Twitter: <a href="#" class="text-danger">https://twitter.com/acmeuniversity</a></li>
					<li>Facebook: <a href="#" class="text-danger">https://www.facebook.com/acmeuniversity</a></li>
				</li>
				<li><a href="#" class="text-danger">Information related to the UG Programmes for the New Entrants admitted through JEE Advanced 2020 at ACME University</a></li>
			</ul>
			<br>
			<h2 class="text-dark font-weight-bold"><i class="fa fa-gift mr-2"></i>Make A Gift</h2>
			<hr>
			<p class=""><a href="#!" class="text-danger">Supporting Students with IT Hardware for Online Learning at ACME University.</a></p>
		</div>
	</div>
</div>  <!-- Gift Section -->


<!-- Welcome -->
<div class="welcome-area py-5 bg-white">
	<div class="container pb-4">
		<h1 class="font-weight-bold text-secondary">Welcome To The University</h1>
		<p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo, unde qui reprehenderit ea consequatur officiis porro saepe voluptas voluptates aperiam ad esse adipisci facere molestiae accusantium totam ex blanditiis cupiditate aliquid repellendus sapiente et eius placeat est corporis! Iusto in eius voluptatem accusantium alias ea? Libero amet reprehenderit, et repellat.</p>
		<div class="row">
			<div class="col-lg-6 bg-lighter"></div>
			<div class="col-lg-6">
				<div class="row no-gutters">
					<div class="col-lg-6">
						<a href="<?php echo BASE_URL . "academics/academic-divisions.php"; ?>" class="d-block bg-dark text-light text-center text-decoration-none py-4 border border-light">
							<i class="fa fa-modx fa-5x"></i><br>
							<span>Courses</span>
						</a>
					</div>
					<!-- .col-lg-6 -->
					<div class="col-lg-6">
						<a href="#" class="d-block bg-dark text-light text-center text-decoration-none py-4 border border-light">
							<i class="fa fa-pie-chart fa-5x"></i><br>
							<span>Placements</span>
						</a>
					</div>
					<!-- .col-lg-6 -->
					<div class="col-lg-6">
						<a href="#" class="d-block bg-dark text-light text-center text-decoration-none py-4 border border-light">
							<i class="fa fa-grav fa-5x"></i><br>
							<span>Life At College</span>
						</a>
					</div>
					<!-- .col-lg-6 -->
					<div class="col-lg-6">
						<a href="#" class="d-block bg-dark text-light text-center text-decoration-none py-4 border border-light">
							<i class="fa fa-steam-square fa-5x"></i><br>
							<span>Research</span>
						</a>
					</div>
					<!-- .col-lg-6 -->
				</div>
			</div>
			<!-- .col-lg-6 four boxes -->
		</div>
	</div>
</div>


<!-- news & notices -->
<div class="container mb-5 pt-5">
	<div class="row">
		<div class="col-lg-8">
			<h2 class="text-secondary font-weight-bold border-bottom pb-1 mb-3">News</h2>
			<div class="card flex-md-row flex-column bg-transparent border-0 rounded-0 mb-3">
				<div class="img-card rounded shadow-sm bg-secondary"></div>
				<div class="card-body">
					<h6 class="mb-2">
						<a href="#!" class="text-capitalize font-weight-bold text-danger ff-poppins">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, molestias.</a>
					</h6>
					<p class="small m-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque voluptatum dolores suscipit exercitationem? Quas quaerat qui tempore officiis tempora veritatis. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum, eligendi[...]</p>
				</div>
			</div>
			<!-- News Card -->
			<div class="card flex-md-row flex-column bg-transparent border-0 rounded-0 mb-3">
				<div class="img-card rounded shadow-sm bg-secondary"></div>
				<div class="card-body">
					<h6 class="mb-2">
						<a href="#!" class="text-capitalize font-weight-bold text-danger ff-poppins">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, molestias.</a>
					</h6>
					<p class="small m-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque voluptatum dolores suscipit exercitationem? Quas quaerat qui tempore officiis tempora veritatis. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum, eligendi[...]</p>
				</div>
			</div>
			<!-- News Card -->
			<div class="card flex-md-row flex-column bg-transparent border-0 rounded-0 mb-3">
				<div class="img-card rounded shadow-sm bg-secondary"></div>
				<div class="card-body">
					<h6 class="mb-2">
						<a href="#!" class="text-capitalize font-weight-bold text-danger ff-poppins">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, molestias.</a>
					</h6>
					<p class="small m-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque voluptatum dolores suscipit exercitationem? Quas quaerat qui tempore officiis tempora veritatis. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum, eligendi[...]</p>
				</div>
			</div>
			<!-- News Card -->
			<div class="card flex-md-row flex-column bg-transparent border-0 rounded-0 mb-3">
				<div class="img-card rounded shadow-sm bg-secondary"></div>
				<div class="card-body">
					<h6 class="mb-2">
						<a href="#!" class="text-capitalize font-weight-bold text-danger ff-poppins">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, molestias.</a>
					</h6>
					<p class="small m-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Neque voluptatum dolores suscipit exercitationem? Quas quaerat qui tempore officiis tempora veritatis. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum, eligendi[...]</p>
				</div>
			</div>
			<!-- News Card -->
		</div>
		<!-- SIDEBAR -->
		<div class="col-lg-4">
			<div class="sidebar-wrapper mb-5">
				<h3 class="text-secondary font-weight-bold mb-3 border-bottom pb-2">GATE 2021</h3>
				<ul class="pl-3 mb-0">
					<li>
						<a class="text-danger" href="#!">Graduate Aptitude Test in Engineering (GATE) 2021</a>
					</li>
				</ul>
			</div>
			<!-- sidebar-wrapper -->
			<div class="sidebar-wrapper mb-5">
				<h3 class="text-secondary font-weight-bold mb-3 border-bottom pb-2">Advisory on Corona Virus</h3>
				<ul class="pl-3 mb-0">
					<li>
						<a class="text-danger" href="#!">COVID-19 Main Page</a>
					</li>
					<li>
						<a class="text-danger" href="#!">Update on Academic Activities</a>
					</li>
					<li>
						<a class="text-danger" href="#!">Information For Students</a>
					</li>
					<li>
						<a class="text-danger" href="#!">Information For Campus Residents</a>
					</li>
					<li>
						<a class="text-danger" href="#!">Important Circulars</a>
					</li>
				</ul>
			</div>
			<!-- sidebar-wrapper -->
		</div>
	</div>
</div>
<!-- news & notices -->





<!-- Showcase -->
<div class="showcase py-5 border-top border-width-5 border-warning">
	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="py-5 text-center text-warning">
					<h1 class="font-weight-bold">2400+</h1>
					<p class="m-0 font-weight-light text-uppercase ff-poppins">Students</p>
				</div>
			</div>
			<!-- .col-lg-3 -->
			<div class="col-lg-3">
				<div class="py-5 text-center text-warning">
					<h1 class="font-weight-bold">7<sup>th</sup></h1>
					<p class="m-0 font-weight-light text-uppercase ff-poppins">National Ranking</p>
				</div>
			</div>
			<!-- .col-lg-3 -->
			<div class="col-lg-3">
				<div class="py-5 text-center text-warning">
					<h1 class="font-weight-bold">1 : 10</h1>
					<p class="m-0 font-weight-light text-uppercase ff-poppins">Teacher Student Ratio</p>
				</div>
			</div>
			<!-- .col-lg-3 -->
			<div class="col-lg-3">
				<div class="py-5 text-center text-warning">
					<h1 class="font-weight-bold">12K</h1>
					<p class="m-0 font-weight-light text-uppercase ff-poppins">Research Papers Published</p>
				</div>
			</div>
			<!-- .col-lg-3 -->
		</div>
	</div>
</div>
<!-- Showcase -->


<?php include_once($footer_path); ?>
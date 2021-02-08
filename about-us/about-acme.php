<?php 
	$page = "aboutUs";
	require_once("../_includes/config.php");	
	include_once($header_path);
?>


<!-- Page Title -->
<div class="page-title bg-secondary border-top border-dark py-5 mb-4">
	<div class="container">
		<h1 class="text-white font-weight-bold m-0">
			<span class="h5 text-uppercase">Home / <br></span> About ACME University
		</h1>
	</div>
</div>

<!-- Page Content -->
<div class="page-content mb-4">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<div class="card shadow-sm">
					<div class="card-body">
						<!-- Slick Slider -->
						<div>
							<div id="about-acme-carousel">
								<div>
									<img class="w-100" src="<?php echo BASE_URL . "_assets/imgs/placeholder.png" ?>" alt="">
								</div>
								<div>
									<img class="w-100" src="<?php echo BASE_URL . "_assets/imgs/placeholder.png" ?>" alt="">
								</div>
								<div>
									<img class="w-100" src="<?php echo BASE_URL . "_assets/imgs/placeholder.png" ?>" alt="">
								</div>
								<div>
									<img class="w-100" src="<?php echo BASE_URL . "_assets/imgs/placeholder.png" ?>" alt="">
								</div>
							</div>
						</div>
						<!-- Progress Bar -->
						<div>
							<div id="about-acme-carousel-progress" class="custom-slick-progress" role="progressbar" aria-valuemin="0" aria-valuemax="100">
								<span class="slider__label sr-only"></span>
							</div>
						</div>
						<!-- Slider Navigation -->
						<div id="about-acme-carousel-navigation" class="custom-slick-navigation text-sm-right text-center py-2">
							<div class="mb-3">
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
						
						<p>Established in 1958, the second of its kind, ACME University was the first to be set up with foreign assistance. The funds from UNESCO came as Roubles from the then Soviet Union. In 1961 Parliament decreed the  ACMEs as  ‘Institutes of National Importance'. Since then, ACME has grown from strength to strength to emerge as one of the top technical universities in the world.</p>

						<p>The institute is recognised worldwide as a leader in the field of engineering education and research. Reputed for the outstanding calibre of students graduating from its undergraduate and postgraduate programmes, the institute attracts the best students from the country for its bachelor's, master's and doctoral programmes. Research and academic programmes at ACME Dhanbad are driven by an outstanding faculty, many of whom are reputed for their research contributions internationally.</p>

						<p>ACME Dhanbad also builds links with peer universities and institutes, both at the national and the international levels, to enhance research and enrich its educational programmes. The alumni have distinguished themselves through their achievements in and contributions to industry, academics, research, business, government and social domains. The institute continues to work closely with the alumni to enhance its activities through interactions in academic and research programmes as well as to mobilise financial support.</p>

						<p>Over the years, the institute has created a niche for its innovative short-term courses through continuing education and distance education programmes. Members of the faculty of the institute have won many prestigious awards and recognitions, including the Shanti Swaroop Bhatnagar and Padma awards.</p>

						<p>Located in Powai, one of the northern suburbs of Mumbai, the residents of the institute reap the advantage of being in the busy financial capital of India, while at the same time enjoying the serenity of a campus known for its natural beauty. A fully residential institute, all its students are accommodated in its 15 hostels with in-house dining; the campus also provides excellent amenities for sports and other recreational facilities.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<?php include_once($sidebar_path); ?>
			</div>
		</div>
	</div>
</div>

<?php include_once($footer_path); ?>
<?php 
	$page = "students";
	require_once("../_includes/config.php");	
	include_once($header_path);
?>


<!-- Page Title -->
<div class="page-title bg-secondary border-top border-dark py-5 mb-4">
	<div class="container">
		<h1 class="text-white font-weight-bold m-0">
			<span class="h5 text-uppercase">Students / <br></span> Campus Life
		</h1>
	</div>
</div>

<!-- Page Content -->
<div class="page-content mb-4">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 mb-3">
				<div class="card shadow-sm">
					<div class="card-body">
						
						<img class="w-100 mb-3 shadow" src="<?php echo BASE_URL . "_assets/imgs/fms-classroom.jpg" ?>" alt="sample image" style="height: 300px; object-fit: cover; object-position: center;">

						<p class="lead">Where do you want to spend your college years? Why not start right in the center of the biggest college town in America (that's Boston!), living and working in a spirited academic community that supports your career goals (that's Bay State College!)</p>
						<br>
						<h3 class="font-weight-bold text-secondary">In the Heart of America's College Town</h3>
						<hr>
						<p>With 52 colleges and universities, plus nearly 400,000 students from all over the world, Boston is a pretty amazing place to be.  And with our location right downtown on St. James Ave., Bay State College is in the middle of it all, close to great restaurants, clubs, trendy shopping, and Boston Common.</p>
						<p>Of course, there's much more to life at Bay State than just our great location.  On our campus in Boston's historic Back Bay neighborhood, you'll discover a diverse but closely-knit community of students, faculty and staff who will make you feel welcome from the start. Whether you choose to live on campus or commute, your Bay State experience is sure to bring out the best in you--academically, professionally and personally.</p>
						<br>
						<h3 class="font-weight-bold text-secondary">Serving Your Needs</h3>
						<hr>
						<p>The Division of Student Services is made up of a number of departments that will respond to your needs throughout your time at Bay State College and beyond.</p>

						<p><a href="#!" class="text-danger">Career Services</a> will assist you in preparing for and entering the work world. Our staff will guide you through this process, from writing a résumé to sharpening your interviewing skills. Even after you graduate from Bay State, this office will continue to provide you with lifetime career services.</p>

						<p><a href="#!" class="text-danger">The Department of Student Affairs</a> can help enhance your time at Bay State through a variety of learning experiences that take place outside of the classroom. Residence Life, Dining Services, Student Involvement & Leadership, Student Success, and Orientation, are all part of this office.</p>

						<p><a href="#!" class="text-danger">The Center for Learning and Academic Success (CLAS)</a> serves as a supplementary learning tool for students to improve skills through individual and small group tutoring, labs and workshops.  Working with faculty and peer tutors, students are offered assistance in a variety of academic subjects.</p>

						<p><a href="#!" class="text-danger">Counseling Services</a> are available to assist you with any personal, academic, and social concerns you may be facing as you transition into college life.</p>

						<p><a href="#!" class="text-danger">The Library</a> houses books, periodicals, and reference materials related to your coursework. Our librarians are also available to help you find information regarding any topic, and can assist you with your research papers.</p>

						<p><a href="#!" class="text-danger">The Registrar’s Office</a> maintains student records, including attendance, class schedules, and grades. This office is where you begin your registration process, request transcripts, obtain enrollment verification, and graduation eligibility.</p>
					</div> <!-- card-body -->
				</div> <!-- card -->
			</div> <!-- col-lg-8 mb-3 -->

			<div class="col-lg-4">
				<?php include_once($sidebar_path); ?>
			</div>
		</div> <!-- row -->
	</div>
</div>

<?php include_once($footer_path); ?>
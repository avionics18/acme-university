<?php 
define("BASE_URL", "/university-master/");
define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"] . "/university-master/");
$page = "academics";

$header_path = ROOT_PATH . "_includes/header.php";
$footer_path = ROOT_PATH . "_includes/footer.php";
$sidebar_path = ROOT_PATH . "_includes/sidebar.php";
include_once($header_path);
?>

<!-- Page Title -->
<div class="page-title bg-secondary border-top border-dark py-5 mb-4">
	<div class="container">
		<h1 class="text-white font-weight-bold m-0">
			<span class="h5 text-uppercase">Academics / <br></span> Academic Divisions
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
						<h4 class="text-secondary">DEPARTMENTS</h4>
						<hr>
						<ul class="list-style-square text-secondary">
							<li><a href="#" class="text-danger">Aerospace Engineering</a></li>
							<li><a href="#" class="text-danger">Biosciences &amp; Bioengineering</a></li>
							<li><a href="#" class="text-danger">Chemical Engineering</a></li>
							<li><a href="#" class="text-danger">Chemistry</a></li>
							<li><a href="#" class="text-danger">Civil Engineering</a></li>
							<li><a href="#" class="text-danger">Computer Science &amp; Engineering</a></li>
							<li><a href="#" class="text-danger">Electrical Engineering</a></li>
							<li><a href="#" class="text-danger">Energy Science &amp; Engineering</a></li>
							<li><a href="#" class="text-danger">Environmental Science &amp; Engineering</a></li>
							<li><a href="#" class="text-danger">Humanities &amp; Social Sciences</a></li>
							<li><a href="#" class="text-danger">IDC School of Design</a></li>
							<li><a href="#" class="text-danger">Mathematics</a></li>
							<li><a href="#" class="text-danger">Mechanical Engineering</a></li>
							<li><a href="#" class="text-danger">Metallurgical Engineering & Materials Science</a></li>
							<li><a href="#" class="text-danger">Physics</a></li>
						</ul>
						<br>
						<h4 class="text-secondary">CENTERS</h4>
						<hr>
						<ul class="list-style-square text-secondary">
							<li><a href="#" class="text-danger">Application Software Centre (ASC)</a></li>
							<li><a href="#" class="text-danger">Centre for Research in Nanotechnology and Science (CRNTS)</a></li>
							<li><a href="#" class="text-danger">Centre for Aerospace Systems Design and Engineering (CASDE)</a></li>
							<li><a href="#" class="text-danger">Computer Centre (CC)</a></li>
							<li><a href="#" class="text-danger">Centre for Distance Engineering Education Programme (CDEEP)</a></li>
							<li><a href="#" class="text-danger">Centre for Policy Studies (CPS)</a></li>
							<li><a href="#" class="text-danger">Centre of Studies in Resources Engineering (CSRE)</a></li>
							<li><a href="#" class="text-danger">Centre for Technology Alternatives for Rural Areas (CTARA)</a></li>
							<li><a href="#" class="text-danger">Centre for Formal Design and Verification of Software (CFDVS)</a></li>
							<li><a href="#" class="text-danger">Centre for Urban Science and Engineering (C-USE)</a></li>
							<li><a href="#" class="text-danger">Desai Sethi Centre for Entrepreneurship (DSCE)</a></li>
							<li><a href="#" class="text-danger">IITB-Monash Research Academy</a></li>
							<li><a href="#" class="text-danger">National Centre for Aerospace Innovation and Research (NCAIR)</a></li>
							<li><a href="#" class="text-danger">National Center of Excellence in Technology for Internal Security (NCETIS)</a></li>
							<li><a href="#" class="text-danger">National Centre for Mathematics (NCM)</a></li>
							<li><a href="#" class="text-danger">Parimal and Pramod Chaudhari Center for Learning and Teaching (PPCCLT)</a></li>
							<li><a href="#" class="text-danger">Sophisticated Analytical Instrument Facility (SAIF)</a></li>
							<li><a href="#" class="text-danger">Tata Center for Technology and Design (TCTD)</a></li>
							<li><a href="#" class="text-danger">Wadhwani Research Centre for Bioengineering (WRCB)</a></li>
						</ul>
						<br>
						<h4 class="text-secondary">SCHOOLS</h4>
						<hr>
						<ul class="list-style-square text-secondary">
							<li><a href="#" class="text-danger">Shailesh J. Mehta School of Management</a></li>
						</ul>
						<br>
						<h4 class="text-secondary">INTERDISCIPLINARY PROGRAMS</h4>
						<hr>
						<ul class="list-style-square text-secondary">
							<li><a href="#" class="text-danger">Climate Studies</a></li>
							<li><a href="#" class="text-danger">Educational Technology</a></li>
							<li><a href="#" class="text-danger">Industrial Engineering and Operations Research (IEOR)</a></li>
							<li><a href="#" class="text-danger">Systems and Control Engineering</a></li>
						</ul>
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
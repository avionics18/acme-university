<?php 
	$page = "students";
	require_once("../_includes/config.php");	
	include_once($header_path);
?>


<!-- Page Title -->
<div class="page-title bg-secondary border-top border-dark py-5 mb-4">
	<div class="container">
		<h1 class="text-white font-weight-bold m-0">
			<span class="h5 text-uppercase">Students / <br></span> Current Students
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
						<div class="row">
							<div class="col-lg-4 mb-3">
								<div class="card h-100">
									<div class="card-body">
										<p class="m-0">
											<a href="#" class="font-weight-bold text-secondary">Academic Timetable</a>
										</p>
									</div>
									<div class="card-footer">
										<a href="#" class="btn btn-danger btn-sm">View <i class="fa fa-arrow-circle-right ml-1"></i></a>
									</div>
								</div>
							</div> <!-- col-lg-4 -->
							<div class="col-lg-4 mb-3">
								<div class="card h-100">
									<div class="card-body">
										<p class="m-0">
											<a href="#" class="font-weight-bold text-secondary">Academic Calender</a>
										</p>
									</div>
									<div class="card-footer">
										<a href="#" class="btn btn-danger btn-sm">View <i class="fa fa-arrow-circle-right ml-1"></i></a>
									</div>
								</div>
							</div> <!-- col-lg-4 -->
							<div class="col-lg-4 mb-3">
								<div class="card h-100">
									<div class="card-body">
										<p class="m-0">
											<a href="#" class="font-weight-bold text-secondary">Academic Rulebook</a>
										</p>
									</div>
									<div class="card-footer">
										<a href="#" class="btn btn-danger btn-sm">View <i class="fa fa-arrow-circle-right ml-1"></i></a>
									</div>
								</div>
							</div> <!-- col-lg-4 -->
							<div class="col-lg-4 mb-3">
								<div class="card h-100">
									<div class="card-body">
										<p class="m-0">
											<a href="#" class="font-weight-bold text-secondary">Student Affairs Office</a>
										</p>
									</div>
									<div class="card-footer">
										<a href="#" class="btn btn-danger btn-sm">View <i class="fa fa-arrow-circle-right ml-1"></i></a>
									</div>
								</div>
							</div> <!-- col-lg-4 -->
							<div class="col-lg-4 mb-3">
								<div class="card h-100">
									<div class="card-body">
										<p class="m-0">
											<a href="current-students/gymkhana.php" class="font-weight-bold text-secondary">Gymkhana</a>
										</p>
									</div>
									<div class="card-footer">
										<a href="current-students/gymkhana.php" class="btn btn-danger btn-sm">View <i class="fa fa-arrow-circle-right ml-1"></i></a>
									</div>
								</div>
							</div> <!-- col-lg-4 -->
							<div class="col-lg-4 mb-3">
								<div class="card h-100">
									<div class="card-body">
										<p class="m-0">
											<a href="#" class="font-weight-bold text-secondary">Hostels</a>
										</p>
									</div>
									<div class="card-footer">
										<a href="#" class="btn btn-danger btn-sm">View <i class="fa fa-arrow-circle-right ml-1"></i></a>
									</div>
								</div>
							</div> <!-- col-lg-4 -->
							<div class="col-lg-4 mb-3">
								<div class="card h-100">
									<div class="card-body">
										<p class="m-0">
											<a href="#" class="font-weight-bold text-secondary">Exchange Opportunities for ACMEians</a>
										</p>
									</div>
									<div class="card-footer">
										<a href="#" class="btn btn-danger btn-sm">View <i class="fa fa-arrow-circle-right ml-1"></i></a>
									</div>
								</div>
							</div> <!-- col-lg-4 -->
						</div> <!-- card row -->
					</div> <!-- card-body -->
				</div> <!-- card -->
			</div> <!-- col-lg-8 -->

			<div class="col-lg-4">
				<?php include_once($sidebar_path); ?>
			</div>
		</div> <!-- row -->
	</div>
</div>

<?php include_once($footer_path); ?>
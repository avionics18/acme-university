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
			<span class="h5 text-uppercase">Academics / <br></span> Overview
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
						<p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Veritatis saepe nemo, non magni eius, minus accusamus, debitis, cum mollitia provident minima itaque explicabo excepturi in labore earum ut repellat dolor impedit ipsum! Illum labore accusantium quisquam vero molestiae officia dignissimos suscipit culpa consectetur aliquam cupiditate quod quidem, vel et rerum.</p>
						<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quo fugiat neque dolorem totam atque blanditiis tempore! Quae explicabo distinctio dignissimos fugiat dolore error autem adipisci vero aspernatur eligendi repellendus quisquam, voluptas saepe vitae exercitationem, facere esse animi hic? Ab minus sapiente modi sunt doloribus quisquam aspernatur, dolorem voluptates excepturi molestias officiis repudiandae possimus voluptatem sit aliquid beatae temporibus architecto quasi explicabo eum earum omnis asperiores deleniti commodi quod! Aliquid laudantium repellendus, in animi vitae. Quam repudiandae voluptas magni. Eveniet praesentium incidunt quas, numquam animi sed, nihil fugiat laboriosam dolor dolorum quo veritatis? Maxime mollitia sed architecto aliquid, repellendus tenetur dignissimos!</p>
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
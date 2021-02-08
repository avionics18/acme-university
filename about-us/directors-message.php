<?php 
	define("BASE_URL", "/university-master/");
	define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"] . "/university-master/");
	$page = "aboutUs";
	
	$header_path = ROOT_PATH . "_includes/header.php";
	$footer_path = ROOT_PATH . "_includes/footer.php";
	$sidebar_path = ROOT_PATH . "_includes/sidebar.php";
	include_once($header_path);
?>


<!-- Page Title -->
<div class="page-title bg-secondary border-top border-dark py-5 mb-4">
	<div class="container">
		<h1 class="text-white font-weight-bold m-0">
			<span class="h5 text-uppercase">Home /<br></span> Director's Message
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
						<div class="bg-light py-3 rounded text-center mb-4">
							<img width="140px" src="<?php echo BASE_URL . "_assets/imgs/director.png" ?>" alt="IIT ISM Director">
							<p class="font-weight-bold text-uppercase mb-1 lead ff-poppins">Prof. Rajiv Shekhar</p>
							<p class="text-uppercase text-secondary small">Director, IIT (ISM) Dhanbad</p>
						</div>
						<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nemo sapiente tempore eos veniam est saepe quam, nihil excepturi sint expedita veritatis doloribus mollitia dolorem incidunt doloremque optio officiis velit facere ab atque ex quas et laudantium alias sequi. Veniam, eum!</p>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam id amet, culpa cumque corrupti tempora animi eveniet dolorum eum ducimus, aliquid vel sapiente consequatur, officia! Incidunt, non velit esse, numquam eos culpa odio illo ea rerum voluptatibus nulla vel vitae. Totam ea veritatis, consectetur fugit atque consequuntur delectus itaque fuga numquam similique commodi, maxime! Veritatis sint explicabo voluptatibus tenetur quas, alias unde, non adipisci. Totam corporis officia illum voluptatum, cupiditate!</p>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Veritatis illo autem, accusamus. Dignissimos eaque temporibus commodi non vitae illum asperiores dicta placeat magni necessitatibus nam obcaecati iste quod cum perferendis quo cumque, atque exercitationem, tempora laboriosam! Laborum rem suscipit facere dolore aut quas earum qui quasi odio similique. Quos repudiandae quo laudantium, quia numquam provident iusto delectus repellat. Corrupti sapiente repellat iusto necessitatibus maxime laborum dolor consequuntur ipsam doloremque quasi nisi saepe quos, rerum, enim est ut, tempora provident eaque aliquid. Voluptatum aliquam veniam distinctio tenetur quod accusamus autem vel unde architecto repellat. Ratione, quo quod doloremque qui eius, maxime.</p>
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
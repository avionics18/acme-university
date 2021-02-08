<?php 
	$page = "students";
	require_once("../_includes/config.php");	
	include_once($header_path);
?>


<!-- Page Title -->
<div class="page-title bg-secondary border-top border-dark py-5 mb-4">
	<div class="container">
		<h1 class="text-white font-weight-bold m-0">
			<span class="h5 text-uppercase">Students / <br></span> Prospective Students
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
						<p>Lorem, ipsum dolor, sit amet consectetur adipisicing elit. Totam suscipit asperiores necessitatibus, voluptatum exercitationem nobis beatae soluta repellendus molestias aut excepturi sapiente consectetur veniam, optio qui velit amet tempore delectus. Natus aspernatur autem perspiciatis laboriosam sed sit ex recusandae beatae, dolore eos libero cumque eius nihil fugit, reiciendis necessitatibus illo eaque ipsam deleniti amet ipsum, voluptas facilis ea deserunt iusto! Quas id amet consequatur eaque sequi asperiores fugit qui assumenda magnam reiciendis dolorum officia voluptatibus quisquam quibusdam provident labore quae commodi ipsam, eos blanditiis voluptatum minima, cum! Veniam aliquid, adipisci minus et labore exercitationem, corrupti. Ullam nobis inventore iusto eius alias odit. Ipsa quis voluptatum, minima mollitia ducimus temporibus veritatis odio, quo alias aspernatur sequi nisi ipsum provident. Deserunt, labore.</p>
						<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo exercitationem magnam, delectus iusto, optio rerum. Id, ad consectetur deleniti quaerat tenetur omnis repellendus perferendis quo odit hic aut consequatur! Eius molestias temporibus nam consequatur totam, doloribus officia consequuntur quibusdam, est!</p>
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
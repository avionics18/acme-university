<?php 
	
	// Check whether we're running locally or not
	// if yes set base_url to folder_name else set it to domain name
	if($_SERVER["REMOTE_ADDR"] == "::1"){
		define("BASE_URL", "/acme-university/");
		define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"] . BASE_URL);
	}
	else{
		define("BASE_URL", "https://immaterial-correlat.000webhostapp.com/");
		define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"] . "/");
	}

	$header_path = ROOT_PATH . "_includes/header.php";
	$footer_path = ROOT_PATH . "_includes/footer.php";
	$sidebar_path = ROOT_PATH . "_includes/sidebar.php";
?>
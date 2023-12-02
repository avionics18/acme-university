# ACME University Website

Just learning the basics of building websites using PHP.

![ACME University](acme-university-1.png)

### Resources

- [Treehouse](https://teamtreehouse.com/community/how-do-i-correctly-link-my-css-file-to-both-my-indexphp-and-my-include-php-files-when-the-whole-site-is-within-a-folder)
- [CSS Tricks](https://css-tricks.com/php-include-from-root/)


### What I Learnt!

So in the includes folder, I would have a config.php that looked like this:

**For Local Developement**

```php
<?php 
	define("BASE_URL", "/{{Folder_Name}}/");
	define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"] . "/{{Folder_Name}}/");

	$header_path = ROOT_PATH . "_includes/header.php";
	$footer_path = ROOT_PATH . "_includes/footer.php";
	$sidebar_path = ROOT_PATH . "_includes/sidebar.php";
?>
```

**For Actual Server**

```php
<?php 
	define("BASE_URL", "/{{https://website.com}}/");
	define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"] . "/");

	$header_path = ROOT_PATH . "_includes/header.php";
	$footer_path = ROOT_PATH . "_includes/footer.php";
	$sidebar_path = ROOT_PATH . "_includes/sidebar.php";
?>
```

You can also check for your development environment by using `$_SERVER["REMOTE_ADDR"]`.

```php
	if($_SERVER["REMOTE_ADDR"] == "::1"){ /*LOCAL CODE*/ }
	else{ /*SERVER CODE*/ }
```

---


**Page Content**: Now in every page you just need to include this

```php
<?php
	$page = "home";
	//now we can use our config file
	require_once("path/to/config.php");
	include($header_path");
?>

<!--now we can continue our file with the content of this page here-->

<?php include($footer_path); ?>
```


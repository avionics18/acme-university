# University Website

Just learning the basics of building websites using PHP.

### Resources

- [Treehouse](https://teamtreehouse.com/community/how-do-i-correctly-link-my-css-file-to-both-my-indexphp-and-my-include-php-files-when-the-whole-site-is-within-a-folder)
- [CSS Tricks](https://css-tricks.com/php-include-from-root/)


### What I Learnt!

```php
<?php 
	define("BASE_URL", "/university-master/");
	define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"] . "/university-master/");
	$page = "home";
	
	$header_path = ROOT_PATH . "_includes/header.php";
	$footer_path = ROOT_PATH . "_includes/footer.php";
	$sidebar_path = ROOT_PATH . "_includes/sidebar.php";
	include_once($header_path);
?>

<?php include_once($footer_path); ?>
```

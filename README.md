# University Website

---

Just learning the basics of building websites using PHP.

### Resources

- [Treehouse](https://teamtreehouse.com/community/how-do-i-correctly-link-my-css-file-to-both-my-indexphp-and-my-include-php-files-when-the-whole-site-is-within-a-folder)
- [CSS Tricks](https://css-tricks.com/php-include-from-root/)


### What I Learnt!

---

```php
<?php 
	define("BASE_URL", "/college-website/");
	define("ROOT_PATH", $_SERVER["DOCUMENT_ROOT"] . "/college-website/");
	
	$header_path = ROOT_PATH . "includes/header.php";
	$footer_path = ROOT_PATH . "includes/footer.php";
	include_once($header_path);
?>

<?php include_once($footer_path); ?>
```
<?php
<<<<<<< HEAD

=======
>>>>>>> master
/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylorotwell@gmail.com>
 */

$uri = urldecode(
<<<<<<< HEAD
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
=======
	parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
>>>>>>> master
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
<<<<<<< HEAD
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
=======
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri))
{
	return false;
>>>>>>> master
}

require_once __DIR__.'/public/index.php';

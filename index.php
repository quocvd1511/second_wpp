<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define( 'WP_USE_THEMES', true );
require __DIR__ . '/wp-blog-header.php';

$response=wp_remote_retrieve_body(wp_remote_get("http://10.102.128.250:8000"));
$arr=json_decode($response);

foreach($arr as $post)
{
	echo "<div>";
	echo "<h3><b>$post->link</b></h3>";
	echo "<div><i>$post->descr</i></div>";
	echo "<br><br>";
	echo "<a>$post->title</a>";
	echo "</div>";
}


?>

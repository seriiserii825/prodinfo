<?php
/**
 * bs-prodinfo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bs-prodinfo
 */

require_once __DIR__.'/inc/bs-styles.php';
require_once __DIR__.'/inc/bs-setup.php';
require_once __DIR__.'/inc/bs-widgets.php';


function bs_prodinfo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bs_prodinfo_content_width', 640 );
}
add_action( 'after_setup_theme', 'bs_prodinfo_content_width', 0 );




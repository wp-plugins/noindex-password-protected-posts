<?php
/*
Plugin Name: Noindex Password-Protected Posts
Plugin URI: http://www.kylegilman.net/2014/06/30/noindex-password-protected-wordpress-posts/
Description: Disables search-engine indexing for all password-protected posts.
Version: 1.0.1
Author: Kyle Gilman
Author URI: http://www.kylegilman.net/
Text Domain: noindex-password-posts

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
	GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function kgnoipp_print_header() {

	global $post;

	if (!empty($post->post_password)) {
		echo '<meta name="robots" content="noindex">'."\n";
	}

}

add_action('wp_head', 'kgnoipp_print_header');

?>

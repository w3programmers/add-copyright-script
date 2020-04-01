<?php
 /*
 Plugin Name: Add Copyright Script
 Plugin URI: https://github.com/w3programmers/add-copyright-script
 Description: Adding Copyright Script to  WordPress Footer
 Version: 1.0
 Author: Masud Alam
 Author URI: http://w3programmers.com/bangla
 License: GPLv2
 */
function add_copyright_script(){
	echo '<p style="text-align:center">COPYRIGHT &copy 2020 W3PROGRAMMERS.COM BANGLA</p>';
}
add_action('wp_footer', 'add_copyright_script');
 
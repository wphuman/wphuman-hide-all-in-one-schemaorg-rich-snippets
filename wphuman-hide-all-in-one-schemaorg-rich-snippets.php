<?php

/**
 * Plugin Name:         WP Human Hide All in One Schemaorg Rich Snippets
 * Description:         Hide All in One Schemaorg Rich Snippets' CSS and JS.  Made by Tang Rufus from WP Human
 * Author:              Tang Rufus @ WP Human
 * Author URI:          http://wphuman.com
 * Author Twitter:      @tangrufus, @wphuman
 * Author Email:        rufus@wphuman.com
 * Version:             1.0.0
 * License:             GPL-2.0+
 * License URI:         http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: 	https://github.com/wphuman/wphuman-hide-all-in-one-schemaorg-rich-snippets
 * GitHub Branch:       master
 *
 */

add_action( 'wp_head', 'wphuman_remove_all_in_one_schemaorg_rich_snippets_bsf_style', 9999 );
function wphuman_remove_all_in_one_schemaorg_rich_snippets_bsf_style() {
	wp_dequeue_style( 'bsf_style');
	wp_deregister_style( 'bsf_style');
}


add_action( 'wp_enqueue_scripts', 'wphuman_remove_all_in_one_schemaorg_rich_snippets_rating', 9999 );
function wphuman_remove_all_in_one_schemaorg_rich_snippets_rating() {
	wp_dequeue_style( 'rating_style' );
	wp_deregister_style( 'rating_style' );
	wp_dequeue_script( 'jquery_rating' );
	wp_deregister_script( 'jquery_rating' );
}

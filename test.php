<?php
/**
 * Plugin Name: Test plugin
 * Plugin URI: https://omukiguy.com
 * Author: TechiePress
 * Author URI: https://omukiguy.com
 * Description: Add metaboxes to posts.
 * Version: 0.1.0
 * License: GPL2 or Later.
 * License URL: http://www.gnu.org/licenses/gpl-2.0.txt
 * text-domain: prefix-plugin-name
*/


// If this file is access directly, abort!
defined( 'ABSPATH' ) || die( 'Unauthorized Access' );

function agent_register_meta_boxes() {
    add_meta_box( 
        'meta-box-id', 
        __( 'Data Meta Box', 'textdomain' ), 'wpdocs_my_display_callback', 
		'post', 
		'side',
		'high'
    );
}
add_action( 'add_meta_boxes', 'agent_register_meta_boxes' );

function wpdocs_my_display_callback(){
    global $post;

    echo '<pre>';
    var_dump( get_post_meta( $post->ID ) );
	echo '</pre>';
}

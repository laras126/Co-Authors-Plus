<?php

add_filter( 'wp_import_existing_post', 'cap_remove_date_from_check', 10, 2 );
function cap_remove_date_from_check( $post_exists, $post ) {
	if ( 0 == intval( $post_exists ) && is_array( $post ) && isset( $post['post_title'] ) ) {
		$post_exists = post_exists( $post['post_title'] );
	}

	return $post_exists;
}
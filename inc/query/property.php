<?php
// modify the posts per page quantity on property archive
function get_all_property_posts( $query ) {
	if ( ! is_admin() && $query->is_main_query() && is_post_type_archive( 'property' ) ) {
		$query->set( 'posts_per_page', 15 );

	}
}

add_action( 'pre_get_posts', 'get_all_property_posts', 99 );

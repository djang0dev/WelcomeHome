<?php

// 5 posts max in home
add_action( 'pre_get_posts', function ( WP_Query $query ) {
	if ( is_admin() || ! $query->is_main_query() || ! is_home() && ! is_category() && is_search() ) {
		return;
	} else {
		$query->set( 'posts_per_page', 5 );
	}

} );
<?php get_header() ?>
<?php
$isRent       = get_query_var( 'property_category', 'buy' ) === _x( 'rent', 'URL', 'wh' );
$cities       = get_terms( [
	                           'taxonomy' => 'property_city',
                           ] );
$types        = get_terms( [
	                           'taxonomy' => 'property_type',
                           ] );
$currentCity  = get_query_var( 'city' );
$currentPrice = get_query_var( 'price' );
$currentType  = get_query_var( 'property_type' );
$currentRooms = get_query_var( 'rooms' );


?>
    <div class="container page-properties">
        <div class="search-form">
            <h1 class="search-form__title">
				<?= __( 'All our properties', 'wh' ) ?>
				<?php if ( $isRent ): ?>
					<?= __( '<br> for Rent', 'wh' ) ?>
				<?php else: ?>
					<?= __( '<br> on Sale', 'wh' ) ?>
				<?php endif; ?>

            </h1>
            <p>
				<?= __( 'Find all our properties in the area of', 'wh' );
				?>
				<?php if ( strlen( $currentCity ) > 1 ): ?>
                    <strong><?= ucwords( $currentCity ) ?></strong>
				<?php else: ?>
                    <strong><?= __( 'all our agencies', 'wh' ) ?></strong>
				<?php endif; ?>
            </p>
            <hr>
			<?php get_template_part( 'template-parts/searchform-property' ) ?>
        </div>

		<?php $i = 0;
		while ( have_posts() ) : the_post(); ?>

			<?php
			// renvoie true si $i = 7
			set_query_var( 'property-large', $i === 7 ); ?>
			<?php get_template_part( 'template-parts/property' ); ?>
			<?php $i ++;
		endwhile; ?>


    </div>
<?php if ( get_query_var( 'paged', 1 ) <= 1 ): ?>
    <div class="pagination">
		<?php next_posts_link( __( 'More properties +', 'wh' ) ); ?>
    </div>
<?php endif; ?>
<?= wh_paginate() ?>

<?php get_footer() ?>
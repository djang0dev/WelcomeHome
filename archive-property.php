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
            <h1 class="search-form__title">Agence immo Montpellier</h1>
            <p>Retrouver tous nos biens sur le secteur de <strong>Montpellier</strong></p>
            <hr>
            <form action="" class="search-form__form">
                <!--                <div class="search-form__checkbox">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" <?php /*checked( ! $isRent ); */ ?> type="radio" name="type" id="buy"
                               value="buy">
                        <label class="form-check-label" for="buy"><? /*= __( 'Buy', 'wh' ) */ ?></label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" <?php /*checked( $isRent ); */ ?>type="radio" name="type" id="rent"
                               value="rent">
                        <label class="form-check-label" for="rent"><? /*= __( 'Rent', 'wh' ) */ ?></label>
                    </div>
                </div>
-->
                <div class="form-group">
                    <select name="city" id="city" class="form-control">
						<?php foreach ( $cities as $city ): ?>
                            <option value="<?= $city->slug; ?>" <?php selected( $city->slug, $currentCity ) ?>><?= $city->name; ?></option>
						<?php endforeach; ?>
                    </select>
                    <label for="city"><?= __( 'City', 'wh' ) ?></label>
                </div>
                <div class="form-group">
                    <input type="number" class="form-control" id="budget" placeholder="100 000 €" name="price"
                           value="<?= esc_attr( $currentPrice ) ?>">
                    <label for="budget"><?= __( 'Max Price', 'wh' ) ?></label>
                </div>
                <div class="form-group">
                    <select name="property_type" id="property_type" class="form-control">
                        <option value=""><?= __( 'All types', 'wh' ) ?></option>
						<?php foreach ( $types as $type ): ?>
                            <option value="<?= $type->slug; ?>" <?php selected( $type->slug, $currentType ) ?>><?= $type->name; ?></option>
						<?php endforeach; ?>
                    </select>
                    <label for="property_type"><?= __( 'Search', 'wh' ) ?></label>
                </div>
                <div class="form-group">
                    <input type="number" name="rooms" class="form-control" id="rooms" placeholder="4"
                           value="<?= esc_attr( $currentRooms ) ?>">
                    <label for="rooms"><?= __( 'Rooms', 'wh' ) ?></label>
                </div>
                <button type="submit" class="btn btn-filled"><?= __( 'Search', 'wh' ) ?></button>
            </form>
        </div>

		<?php $i = 0;
		while ( have_posts() ) : the_post(); ?>
            <a class="property <?= $i === 7 ? 'property--large' : '' ?>" href="<?php the_permalink(); ?>"
               title="<?= esc_attr( get_the_title() ); ?>">
                <div class="property__image">
					<?php the_post_thumbnail( $i === 7 ? 'property-thumbnail-large' : 'property-thumbnail' ); ?>

                </div>
                <div class="property__body">
                    <div class="property__location"><?php wh_city(); ?></div>
                    <h3 class="property__title"><?php the_title() ?> - <?php the_field( 'surface' ); ?>m²</h3>
                    <div class="property__price"><?php wh_price(); ?></div>
                </div>
            </a>
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
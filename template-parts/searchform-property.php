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

<form action="<?= get_post_type_archive_link( 'property' ) ?>" class="search-form__form">

	<?php if ( is_front_page() ): ?>
        <div class="search-form__checkbox">
            <div class="form-check form-check-inline">
                <input class="form-check-input" <?php checked( ! $isRent ); ?> type="radio" name="property_category"
                       id="buy"
                       value="buy">
                <label class="form-check-label" for="buy"><?= __( 'Buy', 'wh' ); ?></label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" name="property_category" <?php checked( $isRent ); ?>type="radio"
                       id="rent"
                       value="rent">
                <label class="form-check-label" for="rent"><?= __( 'Rent', 'wh' ); ?></label>
            </div>
        </div>
	<?php endif; ?>

    <div class="form-group">
        <select name="city" id="city" class="form-control">
            <option value=""><?= __( 'All cities', 'wh' ) ?></option>
			<?php foreach ( $cities as $city ): ?>
                <option value="<?= $city->slug; ?>" <?php selected( $city->slug, $currentCity ) ?>><?= $city->name; ?></option>
			<?php endforeach; ?>
        </select>
        <label for="city"><?= __( 'City', 'wh' ) ?></label>
    </div>
    <div class="form-group">
        <input type="number" class="form-control" id="budget" placeholder="100 000 €" name="price"
               value="<?= esc_attr( $currentPrice ) ?>">
        <label for="budget"><?= __( 'Budget', 'wh' ) ?></label>
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

<form action="<?= esc_url( home_url( '/' ) ) ?>" class="form-group form-search">
    <input placeholder="<?= __( 'Search post', 'wh' ) ?>" name="s" type="search" value="<?= get_search_query() ?>">
    <button type="submit">
		<?= wh_icon( 'search' ); ?>
    </button>
</form>
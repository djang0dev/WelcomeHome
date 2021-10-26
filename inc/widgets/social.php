<?php

class WH_Social_Widget extends WP_Widget {

	public array $fields = [];

	public function __construct() {
		parent::__construct( 'wh_social_widget', __( 'Social widget', 'wh' ) );
		$this->fields = [
			'credits'   => __( 'Credits', 'wh' ),
			'twitter'   => 'Twitter',
			'facebook'  => 'Facebook',
			'instagram' => 'Instagram',
			'title'     => __( 'Title', 'wh' )
		];
	}

	public function widget( array $args, array $instance ): void {
		echo $args['begore_widget'];
		if ( isset( $instance['title'] ) ) {
			$title = apply_filters( 'widget_title', $instance['title'] );
			echo $args['before_title'] . $title . $args['after_title'];

		}
		$template = locate_template( 'widgets/social.php' );
		if ( ! empty( $template ) ) {
			include_once( $template );
		}
		echo get_template_part( 'widgets/social' );
		echo $args['after_widget'];
	}

	public function form( array $instance ): void {
		foreach ( $this->fields as $field => $label ) {

			$value = $instance[ $field ] ?? '';
			?>
            <p>
                <label for="<?= $this->get_field_id( $field ) ?>"><?= esc_html( $label ) ?></label>
                <input type="text" class="widefat" name="<?= $this->get_field_name( $field ) ?>"
                       id="<?= $this->get_field_id( $field ) ?>" value="<?= esc_attr( $value ) ?>">
            </p>
			<?php

		}
	}

	public
	function update(
		array $new_instance, array $old_instance
	) {
		$output = [];
		foreach ( $this->fields as $field => $label ) {
			$output[ $field ] = $new_instance[ $field ] ?? '';
		}

		return $output;
	}
}
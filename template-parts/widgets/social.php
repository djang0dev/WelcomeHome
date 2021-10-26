<?php
$networks = [
	'twitter'   => 'Twitter',
	'facebook'  => 'Facebook',
	'instagram' => 'Instagram',
]
?>
<div class="footer__credits"><?= /** @var ARRAY $instance */
	esc_html( $instance['credits'] ) ?></div>
<div class="footer__social">
	<?php foreach ( $networks as $name => $label ): ?>
		<?php if ( ! empty( $instance[ $name ] ) ): ?>
            <a href="<?= esc_url( $instance[ $name ] ) ?>"
               title="<?= sprintf( esc_attr( 'Nous suivre sur %s', 'wh' ), $label ) ?>">
				<?= wh_icon( $name ); ?>
            </a>
		<?php endif; ?>
	<?php endforeach; ?>
</div>
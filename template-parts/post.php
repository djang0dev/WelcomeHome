<article class="news">
    <a class="news__image" href="<?php the_permalink() ?>"
       title="<?= esc_attr( get_the_title() ) ?>">
		<?php if ( has_post_thumbnail() ): ?>

			<?= get_the_post_thumbnail() ?>

		<?php else: ?>
            <img width="250" height="250"
                 src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mN8Uw8AAl0Bbfn0s/kAAAAASUVORK5CYII="
                 alt="<?= the_title() ?>"/>

		<?php endif; ?>
    </a>
    <div class="news__body">
        <header class="news__header">
			<?php $categories = get_the_category();
			if ( ! empty( $categories ) ):
				?>
                <a class="news__tag"
                   href="<?= get_term_link( $categories[0] ) ?>"><?= $categories[0]->name ?? '' ?></a>
			<?php endif; ?>
            <a class="news__title" href="<?= the_permalink() ?>"><?php the_title(); ?></a>
            <div class="news__date"><?= sprintf( __( 'Published on %1s at %2s', 'wh' ), get_the_date(), get_the_time() ); ?></div>
        </header>
        <div class="news__content">
			<?= get_the_excerpt(); ?>
        </div>
        <a class="news__action" href="<?= the_permalink() ?>">
            Lire la suite
			<?= wh_icon( 'arrow' ) ?>

        </a>
    </div>
</article>
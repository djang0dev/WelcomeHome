<?php get_header(); ?>


    <div class="container page-sidebar">
		<?php while ( have_posts() ) : the_post(); ?>
            <main>
                <header class="news-single__header">
                    <div class="news-single__title"><?php the_title() ?></div>
                    <div class="news-single__meta">
						<?php
						$categories = get_the_category();
						if ( ! empty( $categories ) ) :
							?>
                            <a class="news__tag"
                               href="<?= get_term_link( $categories[0] ) ?>"><?= $categories[0]->name ?></a>
						<?php endif ?>
                        <div class="news__date"><?= sprintf( __( 'Published on %s at %s', 'agencia' ), get_the_date(), get_the_time() ) ?></div>
                    </div>
                </header>
                <div class="formatted">
					<?php if ( has_post_thumbnail() ): ?>
                        <p>
							<?= the_post_thumbnail( 'large' ); ?>
                        </p>
					<?php endif ?>
					<?php the_content(); ?>
                </div>

				<?php
				if ( comments_open() || absint( get_comments_number() ) > 0 ) {
					comments_template();
				}
				?>

            </main>
		<?php endwhile; ?>
        <aside class="sidebar">
			<?php dynamic_sidebar( 'blog' ) ?>
        </aside>
    </div>

<?php get_footer(); ?>
<?php get_header() ?>

<div class="container">

    <h1 class="page-title">
		<?php if ( is_category() ): ?>
			<?php single_cat_title() ?>
		<?php elseif ( is_search() ): ?>
			<?= sprintf( __( 'Search results for "%s"', 'wh' ), get_search_query() ) ?>
		<?php else: ?>
			<?php single_post_title() ?>
		<?php endif; ?>

    </h1>

    <div class="page-sidebar">
        <div>
            <div class="news-list">

				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ):
						the_post(); ?>

						<?= get_template_part( 'template-parts/post' ) ?>
					<?php endwhile ?>
                    <div class="pagination">

						<?= wh_paginate(); ?>


                    </div>


                    <div class="pagination">
                        <a class="page-numbers prev" href="news.html">
                            <svg class="icon">
                                <use xlink:href="sprite.14d9fd56.svg#arrow"></use>
                            </svg>
                        </a>
                        <a class="page-numbers" href="news.html">1</a>
                        <a class="page-numbers" href="news.html">2</a>
                        <a class="page-numbers" href="news.html">3</a>
                        <span aria-current="page" class="page-numbers current">4</span>
                        <a class="page-numbers" href="news.html">5</a>
                        <a class="page-numbers next" href="news.html">
                            <svg class="icon">
                                <use xlink:href="sprite.14d9fd56.svg#arrow"></use>
                            </svg>
                        </a>
                    </div>

				<?php else: ?>
                    <h2><?= __( 'No posts found', 'wh' ) ?></h2>
				<?php endif ?>
            </div>
        </div>
        <aside class="sidebar">
			<?php dynamic_sidebar( 'blog' ) ?>
        </aside>

    </div>
</div>

<?php get_footer() ?>

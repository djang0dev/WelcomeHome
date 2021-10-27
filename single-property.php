<?php get_header() ?>

<?php while ( have_posts() ) : the_post(); ?>

    <div class="container">
        <header class="bien-header">
            <div>
                <h1 class="bien__title"><?php the_title() ?> - <?php the_field( 'surface' ); ?>m²</h1>
                <div class="bien__meta">
                    <div class="bien__location"><?php wh_city(); ?></div>
                    <div class="bien__price">
						<?php if ( get_field( 'property_category' ) === 'buy' ): ?>

							<?= sprintf( '%s $', get_field( 'price' ) ) ?>

						<?php else: ?>
							<?= sprintf( '%s $/mo', get_field( 'price' ) ) ?>

						<?php endif; ?>
                    </div>
                </div>
                <div class="bien__actions">
                    <button class="btn btn-filled">Contacter l'agence</button>
                    <button class="btn">Appeler</button>
                </div>

                <!--
				<form action="" class="bien__form form-2column">
				  <div class="form-group">
					<input type="text" id="username" class="form-control">
					<label for="username">Pseudo</label>
				  </div>
				  <div class="form-group">
					<input type="text" id="email" class="form-control">
					<label for="email">Email</label>
				  </div>
				  <textarea placeholder="Message" class="form-control full"></textarea>
				  <button type="submit" class="btn">Commenter</button>
				</form>
				-->
            </div>
            <div>
                <div class="bien__photos js-slider">
					<?php foreach ( get_attached_media( 'image', get_the_ID() ) as $media ): ?>

                        <a href="<?= wp_get_attachment_url( $media->ID ) ?>">
                            <img alt="" class="bien__photo"
                                 src="<?= wp_get_attachment_image_url( $media->ID, 'property-carousel' ) ?>">
                        </a>
					<?php endforeach; ?>
                </div>
            </div>
        </header>


        <div class="bien-body">
            <h2 class="bien-body__title"><?= __( 'Description', 'wh' ) ?></h2>
            <div class="formatted">
				<?php the_content() ?>
            </div>
        </div>

        <section class="bien-options">
            <div class="bien-option"><img alt=""
                                          src="<?= get_template_directory_uri() . '/assets/' ?>area.78237e19.svg">
				<?= __( 'Surface', 'wh' ) ?><?php the_field( 'surface' ) ?>m²
            </div>

            <div class="bien-option"><img alt=""
                                          src="<?= get_template_directory_uri() . '/assets/' ?>rooms.b02e3d15.svg"> <?= __( 'Rooms', 'wh' ) ?>
                : <?php the_field( 'rooms' ) ?>

            </div>
            <div class="bien-option"><img alt=""
                                          src="<?= get_template_directory_uri() . '/assets/' ?>elevator.e0bdbd67.svg">
				<?= __( 'Floor', 'wh' ) ?>: <?php the_field( 'floor' ) ?>
            </div>

			<?php $options = get_the_terms( get_post(), 'property_option' ); ?>
			<?php foreach ( $options as $option ): ?>


                <div class="bien-option"><img alt=""
                                              src="<?php the_field( 'icon', $option ) ?>">
					<?= $option->name ?>
                </div>

			<?php endforeach; ?>
        </section>

    </div>
<?php endwhile ?>

<?php get_footer() ?>

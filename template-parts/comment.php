<<?= $tag ?> id="comment-<?php comment_ID(); ?>" <?php comment_class( 'comment ' . ( $this->has_children ? 'parent' : '' ), $comment ); ?>>
<?= get_avatar( $comment, 120, '', '', [ 'class' => 'comment__avatar' ] ); ?>
<div class="comment__body">
    <footer>
        <div class="comment__username"><?= get_comment_author_link( $comment ) ?></div>
        <a class="comment__date" href="<?php echo esc_url( get_comment_link( $comment, $args ) ); ?>">
            <time datetime="<?php comment_time( 'c' ); ?>">
				<?php
				/* translators: 1: Comment date, 2: Comment time. */
				printf( __( '%1$s at %2$s' ), get_comment_date( '', $comment ), get_comment_time() );
				?>
            </time>
        </a>
		<?php edit_comment_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ); ?>
		<?php if ( '0' == $comment->comment_approved ) : ?>
            <em class="comment-awaiting-moderation"><?php echo $moderation_note; ?></em>
		<?php endif; ?>
		<?php
		comment_reply_link(
			array_merge(
				$args,
				array(
					'add_below' => 'div-comment',
					'depth'     => $depth,
					'max_depth' => $args['max_depth'],
					'before'    => '<span class="reply">',
					'after'     => '</span>',
				)
			)
		);
		?>
    </footer>
    <div class="comment__content">
		<?php comment_text(); ?>
    </div>
</div>
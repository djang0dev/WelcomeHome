<?php
require_once( 'inc/walkers/CommentWalker.php' );
$count = absint( get_comments_number() );
?>
<div class="comments">
    <div class="comments__title">
		<?php if ( get_comments_number() > 0 ): ?>
			<?= sprintf( _n( '%d Comment', '%d Comments', $count ), $count ) ?>
		<?php else: ?>
			<?= __( 'Leave a reply', 'wh' ) ?>
		<?php endif; ?>
    </div>
    <div class="comments_list">
		<?php wp_list_comments( [
			                        'style'  => 'div',
			                        'walker' => new WHCommentWalker(),
		                        ] ); ?>
    </div>
	<?php wh_paginate_comments() ?>

	<?php if ( comments_open() ): ?>

		<?php comment_form( [ 'title_reply' => '', 'class_form' => 'form-2column', 'class_submit' => 'btn' ] ) ?>
	<?php endif; ?>
</div>
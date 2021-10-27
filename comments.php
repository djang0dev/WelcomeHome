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
	<?php wp_list_comments( [
		                        'style'  => 'div',
		                        'walker' => new WHCommentWalker(),
	                        ] ); ?>
	<?php if ( comments_open() ): ?>
	<?php comment_form( [ 'title_reply' => '', ] ) ?>
</div>
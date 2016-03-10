<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package Minimalize
 * @since Minimalize 1.0
 */

?>
<?php if ( post_password_required() ) : ?>
	<p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'minimalize' ); ?></p>
	<?php
	return;
endif;
?>

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h3 class="comment-title"><?php comments_number(__('No Comments','minimalize'), __('One Comment','minimalize'), __('% Comments','minimalize') );?></h3>
		
	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<div class="pagenav top clearfix">
			<?php paginate_comments_links( array('prev_text' => '&laquo;', 'next_text' => '&raquo;') );?>
		</div>
	<?php endif; // check for comment navigation ?>
		
	<ol class="commentlist">
		<?php wp_list_comments(); ?>
	</ol>
		
	<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<div class="pagenav bottom clearfix">
			<?php paginate_comments_links( array('prev_text' => '&laquo;', 'next_text' => '&raquo;') );?>
		</div>
	<?php endif; // check for comment navigation ?>
	
	<?php else : 
		if ( ! comments_open() ) :
		?>
		<?php endif; ?>
		
	<?php endif; // have_comments() ?>
	
	<?php comment_form(); ?>
</div><!-- end #comments -->

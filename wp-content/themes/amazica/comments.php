<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Amazica 
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area col-md-12">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			$comment_count = get_comments_number();
			if ( 1 === $comment_count ) {
					/* translators: 1: title. */
					esc_html_e( 'One Comment', 'amazica' );
			} else {
				printf( // WPCS: XSS OK.
					/* translators: 1: comment count number */
					esc_html( _nx( '%1$s Comment', '%1$s Comments', absint($comment_count), 'comments title', 'amazica' ) ),
					number_format_i18n( $comment_count )
				);
			}
			?>
		</h2><!-- .comments-title -->

		<div class="comment-list">
			<?php
				wp_list_comments( array( 'callback' => 'amazica_comment' ) );
			?>
		</div><!-- .comment-list -->

		<?php the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'amazica' ); ?></p>
		<?php
		endif;

	endif; // Check for have_comments().

	
	?>
	<div class="amz-comment-form"><?php comment_form(); ?></div>
</div><!-- #comments -->

<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package palmixio
 */
$value = get_post_meta($post->ID, '_wporg_meta_key', true);

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
         $args = array(
	'base'               => '%_%',
	'format'             => '?paged=%#%',
	'total'              => 1,
	'current'            => 0,
	'show_all'           => false,
	'end_size'           => 1,
	'mid_size'           => 2,
	'prev_next'          => true,
	'prev_text'          => esc_html__('&laquo; Previous', 'palmixio'),
	'next_text'          => esc_html__('Next &raquo;', 'palmixio'),
	'type'               => 'plain',
	'add_args'           => false,
	'add_fragment'       => '',
	'before_page_number' => '',
	'after_page_number'  => ''
);
			the_post_navigation($args);
			
       
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
?>
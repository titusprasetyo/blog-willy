<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Music Club Lite
 */

get_header(); ?>

<div class="sitefixer">
     <div class="design_innerpage">
        <section class="design_contentarea">
            <div class="defaultpost_lyout">
				<?php if ( have_posts() ) : ?>
                    <header>
                        <h1 class="entry-title"><?php printf( __( 'Search Results for: %s', 'music-club-lite' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                    </header>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'content', 'search' ); ?>
                    <?php endwhile; ?>
                    <?php the_posts_pagination(); ?>
                <?php else : ?>
                    <?php get_template_part( 'no-results' ); ?>
                <?php endif; ?>                  
            </div><!-- defaultpost_lyout -->
        </section>      
       <?php get_sidebar();?>       
        <div class="clear"></div>
    </div><!-- site-aligner -->
</div><!-- sitefixer -->

<?php get_footer(); ?>
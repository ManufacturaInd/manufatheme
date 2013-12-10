<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		
		<?php if (have_posts()) : ?>
		    <?php $timeline_query = new WP_Query('category_name=news');
	        while ($timeline_query->have_posts()) : $timeline_query->the_post();
	        $do_not_duplicate = $post->ID;?>
          
          <?php if ( is_year() ) :
						printf( __( 'Yearly Archives: %s', 'twentythirteen' ), get_the_date( _x( 'Y', 'yearly archives date format', 'twentythirteen' ) ) );
					endif; ?>
          <!--<?php $foundation_classes = array('columns','row'); ?>-->
            <article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
              <div class="entry-meta large-12 columns">
                <?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
              </div>
		          <p class="entry-header large-2 columns">&nbsp;</p>
	            <h1 class="entry-title columns large-6">
			          <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		          </h1>
	            <footer class="entry-summary columns large-4">
			          <?php the_excerpt(); ?>
	            </footer><!-- .entry-meta -->
            </article><!-- #post -->
			
    	<?php endwhile; ?>
      <?php else : ?>
			  <?php get_template_part( 'content', 'none' ); ?>
		  <?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

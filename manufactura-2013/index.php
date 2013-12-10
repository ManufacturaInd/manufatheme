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
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
        <!--<?php $foundation_classes = array('columns','row'); ?>-->
          <article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
	          <header class="entry-header">
		          <h1 class="entry-title columns large-6">
			          <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		          </h1>
	          </header><!-- .entry-header -->
	          <footer class="entry-meta columns large-4">
			        <?php twentythirteen_onlytags(); ?>
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

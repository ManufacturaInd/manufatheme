<?php
/**
 * The main template file
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		
      <?php

        $blogtime = date('Y');
        $prev_year = '';
				$prev_month = '';

        $args = array(
                 'category' => 'portfolio',
         					'posts_per_page' => 50
        );
      
        $postsbymonth = new WP_Query($args);
        while($postsbymonth->have_posts()) {
          $postsbymonth->the_post();
          $do_not_duplicate = $post->ID;

				?>

      <article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>

					<?php if(get_the_time('M') != $prev_month || get_the_time('Y') != $prev_year && get_the_time('Y') == $prev_limit_year) {
        		echo "<span class=\"date-title columns large-1 tight\">".get_the_time('M Y')."</span>\n\n";
					}
					?>
        <h2 class="entry-title columns large-6">
          <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
        </h2>
        <footer class="entry-summary columns large-5 tight">
          <?php the_excerpt(); ?>
        </footer><!-- .entry-meta -->
      </article><!-- #post -->
      <?php
          $prev_month = get_the_time('Y');
          $prev_year = get_the_time('Y');
        }
		  ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

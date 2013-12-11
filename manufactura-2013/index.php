<?php
/**
 * The main template file
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content row" role="main">
		
      <?php

        $blogtime = date('Y');
        $prev_limit_year = $blogtime - 1;
        $prev_year = '';

        $args = array(
                 'category' => 'news',
                 'category' => 'work-in-progress',
        );
      
        $postsbyyear = new WP_Query($args);
        while($postsbyyear->have_posts()) {
            $postsbyyear->the_post();
            $do_not_duplicate = $post->ID;

            if(get_the_time('Y') != $prev_year) {
              echo "<h2 class=\"year-title columns large-12\">".get_the_time('Y')."</h2>\n\n";
             }
      ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class('large-12 columns'); ?>>
        <div class="entry-meta columns large-12">
          <?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
        </div>
        <p class="entry-header columns large-2">&nbsp;</p>
        <h1 class="entry-title columns large-6">
          <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
        </h1>
        <footer class="entry-summary columns large-4">
          <?php the_excerpt(); ?>
        </footer><!-- .entry-meta -->
      </article><!-- #post -->

      <?php
          $prev_year = get_the_time('Y');
        }
		  ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

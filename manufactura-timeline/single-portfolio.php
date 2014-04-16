<?php
/**
 * The template for displaying all single posts
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<?php /* The loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>">
					<header class="entry-header row">
						<h2 class="entry-title large-10 columns tight"><?php the_title(); ?></h2>
						<p class="entry-date large-2 columns tight"><?php twentythirteen_entry_date(); ?></p>
					</header><!-- .entry-header -->

					<div class="entry-content row">
						<div class="single-sidebar large-4 columns tight">
							<div class="entry-meta">
								<?php twentythirteen_onlytags(); ?>
							</div><!-- .entry-meta -->
							<div class="image-grid">
								<ul class="small-block-grid-2 medium-block-grid-3 large-block-grid-4">
									<?php imagegrid_get_images("$post->ID"); ?>
								</ul>
							</div><!-- .image-grid-->
						</div><!-- .single-sidebar -->

					<div class="single-maincontent large-8 columns tight">
						<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
						</div><!-- .single-maincontent -->
					</div><!-- .entry-content -->
					<footer class="entry-meta row">
						<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
							<?php get_template_part( 'author-bio' ); ?>
						<?php endif; ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post -->

				<?php twentythirteen_post_nav(); ?>

			<?php endwhile; ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

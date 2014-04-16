<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 */
?>

<article id="post-<?php the_ID(); ?>">
	<header class="entry-header row">
		<?php if ( is_single() ) : ?>
		<h2 class="entry-title large-10 columns tight"><?php the_title(); ?></h2>
		<p class="entry-date large-2 columns tight"><?php twentythirteen_entry_date(); ?></p>
		<?php else : ?>
		<h2 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h2>
		<?php endif; // is_single() ?>
	</header><!-- .entry-header -->

	<?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary row">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
	<?php elseif ( is_single() ) : // Only display sidebar tags for Single ?>
		<div class="entry-content row">
			<div class="entry-meta large-2 columns tight">
				<?php twentythirteen_onlytags(); ?>
			</div><!-- .entry-meta -->
			<div class="single-maincontent large-10 columns">
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
			</div><!-- ..single-maincontent -->
		</div><!-- .entry-content -->
		<?php else : ?>
		<div class="entry-content row">
			<div class="entry-meta large-2 columns tight">
				<?php twentythirteen_onlytags(); ?>
			</div><!-- .entry-meta -->
			<div class="single-maincontent large-10 columns">
				<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>
				<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
			</div><!-- ..single-maincontent -->
		</div><!-- .entry-content -->
	<?php endif; ?>

	<footer class="entry-meta row">
		<?php if ( comments_open() && ! is_single() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'twentythirteen' ) . '</span>', __( 'One comment so far', 'twentythirteen' ), __( 'View all % comments', 'twentythirteen' ) ); ?>
			</div><!-- .comments-link -->
		<?php endif; // comments_open() ?>

		<?php if ( is_single() && get_the_author_meta( 'description' ) && is_multi_author() ) : ?>
			<?php get_template_part( 'author-bio' ); ?>
		<?php endif; ?>
	</footer><!-- .entry-meta -->
</article><!-- #post -->

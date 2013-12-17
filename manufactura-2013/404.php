<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			<header class="page-header row">
				<h1 class="page-title large-12 columns"><?php _e( 'Not found', 'twentythirteen' ); ?></h1>
			</header>

			<div class="page-wrapper">
				<div class="page-content">
					<h2 class="row"><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'twentythirteen' ); ?></h2>
					<p class="row"><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentythirteen' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>

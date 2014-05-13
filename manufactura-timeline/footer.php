<?php
/**
 * The template for displaying the footer
 *
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer row collapse" role="contentinfo">
			<!-- <?php get_sidebar( 'main' ); ?> -->
			<div class="row collapse">
				<p class="large-7 columns">
					<?php if(qtrans_getLanguage() == "en") : ?>
						Are you looking for <a href="http://manufacturaindependente.com/colorfont" title="Colorfont.js, easy multicoloured typography for the web">Colorfont.js</a>, <a href="http://oxshark.com" title="Oxshark Fontworks">Oxshark Fontworks</a>, something else? Try searching our website:
					<?php endif; ?>
					<?php if(qtrans_getLanguage() == "pt") : ?>
						Est&aacute;s &agrave; procura do <a href="http://manufacturaindependente.com/colorfont" title="Colorfont.js, easy multicoloured typography for the web">Colorfont.js</a>, <a href="http://fundição.pt" title="Fundição Boi do Cação, se faz favor">Fundi&ccedil;&atilde;o Boi do Ca&ccedil;&atilde;o</a>, outra coisa? Experimenta fazer uma pesquisa:
					<?php endif; ?>
				</p>
			</div>
			<div class="row collapse">
				<form role="search" method="get" class="search-form large-4 columns" action="<?php echo home_url( '/' ); ?>">
					<div class="row collapse">
				    <div class="small-9 columns">
							<input type="search" class="search-field" placeholder="Search..." value="" name="s" title="Search for:" />
						</div>
						<div class="small-3 columns">
							<input type="submit" class="search-submit button postfix" value="Search" />
						</div>
				</form>
			</div>


		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>

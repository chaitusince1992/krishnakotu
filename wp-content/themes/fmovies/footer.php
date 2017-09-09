<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "body-content-wrapper" div and all content after.
 *
 * @subpackage fMovies
 * @author tishonator
 * @since fMovies 1.0.0
 *
 */
?>
			<a href="#" class="scrollup"></a>

			<footer id="footer-main">

				<div id="footer-content-wrapper">

					<?php get_sidebar( 'footer' ); ?>

					<div class="clear">
					</div>

					<div id="copyright">

						<p>
						 <?php fmovies_show_copyright_text(); ?> <a href="<?php echo esc_url( 'https://tishonator.com/product/fmovies' ); ?>" title="<?php esc_attr_e( 'fmovies Theme', 'fmovies' ); ?>">
							<?php esc_html_e('fMovies Theme', 'fmovies'); ?></a> <?php esc_attr_e( 'powered by', 'fmovies' ); ?> <a href="<?php echo esc_url( 'http://wordpress.org/' ); ?>" title="<?php esc_attr_e( 'WordPress', 'fmovies' ); ?>">
							<?php esc_html_e('WordPress', 'fmovies'); ?></a>
						</p>
						
					</div><!-- #copyright -->

				</div><!-- #footer-content-wrapper -->

			</footer><!-- #footer-main -->

		</div><!-- #body-content-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html>
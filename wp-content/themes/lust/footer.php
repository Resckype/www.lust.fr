<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

		</section>

		<div id="footer-container">
			<section class="container reassure-container">
				<div class="row reassure-row">
					<div class="small-6 large-3 columns">
						<i class="fa fa-clock-o" aria-hidden="true"></i>
						<span>Livraison 48h</span>
					</div>
					<div class="small-6 large-3 columns">
						<i class="fa fa-truck" aria-hidden="true"></i>
						<span>Livraison Offerte</span>
					</div>
					<div class="small-6 large-3 columns">
						<i class="fa fa-star-o" aria-hidden="true"></i>
						<span>Qualité certifiée</span>
					</div>
					<div class="small-6 large-3 columns">
						<i class="fa fa-lock" aria-hidden="true"></i>
						<span>Paiement sécurisé</span>
					</div>
				</div>
			</section>
			<!-- <footer id="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer> -->
			<footer id="footer">
				<!-- <div class="small-12 large-3 columns">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="footer-logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/lust.png" alt="" /></a>
				</div> -->
				<div class="small-12 large-3 columns">
					<?php dynamic_sidebar( 'footer-sidebar-one' ); ?>
				</div>
				<div class="small-12 large-3 columns">
					<?php dynamic_sidebar( 'footer-sidebar-two' ); ?>
				</div>
				<div class="small-12 large-6 columns">
					<?php dynamic_sidebar( 'footer-sidebar-three' ); ?>
				</div>
			</footer>
		</div>

		<?php do_action( 'foundationpress_layout_end' ); ?>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) == 'offcanvas' ) : ?>
		</div><!-- Close off-canvas wrapper inner -->
	</div><!-- Close off-canvas wrapper -->
</div><!-- Close off-canvas content wrapper -->
<?php endif; ?>


<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>
</body>
</html>

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
		<div class="row reassure">
			<div class="small-6 large-3 columns">
				Livraison
			</div>
			<div class="small-6 large-3 columns">
				Offre
			</div>
			<div class="small-6 large-3 columns">
				Confidentiel
			</div>
			<div class="small-6 large-3 columns">
				Paiement sécurisé
			</div>
		</div>
		<div id="footer-container">
			<!-- <footer id="footer">
				<?php do_action( 'foundationpress_before_footer' ); ?>
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<?php do_action( 'foundationpress_after_footer' ); ?>
			</footer> -->
			<footer id="footer">
				<div class="small-12 large-4 columns">
					<h3>Informations</h3>
				</div>
				<div class="small-12 large-4 columns">
					<h3>Aide</h3>
				</div>
				<div class="small-12 large-4 columns">
					<h3>Newsletter + Social</h3>
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

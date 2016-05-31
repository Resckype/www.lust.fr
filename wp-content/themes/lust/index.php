<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

</section>

<section class="container index-section index-best">
	<div class="row best-content">
		<h2>Meilleures ventes</h2>
		<?php
			$args = array(
			'post_type' => 'product',
			'posts_per_page' => 3,
			'meta_key' => 'total_sales',
			'orderby' => 'meta_value_num',
			);

			$loop = new WP_Query( $args );
			if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) : $loop->the_post();
			get_template_part( 'template-parts/montre-thumb', get_post_format() );
			endwhile;
			} else {
			echo __( 'No products found' );
			}

			wp_reset_query();

		?>
	</div>
</section>

<section class="container">

	<div class="row index-section index-actu">
		<h2>Actualités</h2>
	<?php if ( have_posts() ) : ?>

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php else : ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; // End have_posts() check. ?>

		<?php /* Display navigation to next/previous pages when applicable */ ?>


	</div>





<?php get_footer();

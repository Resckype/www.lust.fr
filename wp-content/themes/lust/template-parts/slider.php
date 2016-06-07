<div class="slide cycle-slideshow" data-cycle-fx="fade" data-cycle-speed="1000" data-cycle-timeout="4000" data-cycle-slides="> div">
    <?php
			$args = array(
			'post_type' => 'product',
			'posts_per_page' => 3,
      'orderby' => 'post_date',
      'order' => 'DESC'
			);

			$loop = new WP_Query( $args );
			if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) : $loop->the_post();
			get_template_part( 'template-parts/montre-nouveaute', get_post_format() );
			endwhile;
			} else {
			echo __( 'No products found' );
			}

			wp_reset_query();

		?>
</div>

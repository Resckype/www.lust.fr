<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<div class="small-12 large-6 columns article-post end" id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
	<!-- <header>
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
	</header> -->
	<div class="entry-content">
		<div class="thumb">
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
      <a href="<?php the_permalink(); ?>" class="sweep-to-bottom">
				<h3><?php the_title(); ?></h3>
			</a>
	  </div>

		<!-- <?php the_content( __( 'Lire la suite...', 'foundationpress' ) ); ?> -->
		 <div class="content-min">
		 	<?php the_excerpt(); ?>
		</div>
	</div>
	<footer class="sweep-effect">
		<div class="wrapper">
			<a href="<?php the_permalink(); ?>" class="">En savoir plus</a>
			<span class="sweep-to-right"></span>
		</div>
	</footer>
</div>

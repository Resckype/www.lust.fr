<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<div id="single-post" class="row" role="main">

<!--
<?php while ( have_posts() ) : the_post(); ?>
	<article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
		<header>
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<?php foundationpress_entry_meta(); ?>
		</header>

		<div class="entry-content">

		<?php
			if ( has_post_thumbnail() ) :
				the_post_thumbnail();
			endif;
		?>

		<?php the_content(); ?>
		</div>


	</article>
<?php endwhile;?> -->

<div class="small-12 columns single-post" id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
	<header class="thumb">
			<h1><a href="#"><?php the_title(); ?></a></h1>
			<?php the_post_thumbnail(); ?>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>
</div>

</div>
<?php get_footer();

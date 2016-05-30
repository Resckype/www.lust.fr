<div class="slide-content">
  <a href="<?php the_permalink(); ?>" class="slide-link">
    <div class="slide-img">
      <?php the_post_thumbnail(); ?>
    </div>
    <h2 class="slide-title"><?php the_title(); ?></h2>
  </a>
</div>

<!-- <div class="large-4 columns index-product">
  <a href="<?php the_permalink(); ?>" class="index-thumbnail"><?php the_post_thumbnail(); ?></a>
  <h3 class=""><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
  <h4><?php echo $price = get_post_meta( get_the_ID(), '_regular_price', true); ?>€</h4>
  <?php woocommerce_template_loop_add_to_cart(); //ouptput the woocommerce loop add to cart button ?>
</div> -->

<div class="large-4 columns index-product">
  <a href="<?php the_permalink(); ?>" class="index-thumbnail"><?php the_post_thumbnail(); ?></a>
  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
  <h4><?php echo $price = get_post_meta( get_the_ID(), '_regular_price', true); ?>€</h4>
  <div class="index-ajout wrapper">
      <a href="<?php the_permalink(); ?>" class="">Découvrir</a>
      <span class="sweep-to-right"></span>
  </div>
</div>

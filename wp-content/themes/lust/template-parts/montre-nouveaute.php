<div class="slide-content">
  <a href="<?php the_permalink(); ?>" class="slide-link">
    <div class="slide-img">
      <?php the_post_thumbnail(); ?>
    </div>
    <div class="slide-txt">
      <p class="slide-new">Nouveauté</p>
      <p class="slide-title"><?php the_title(); ?></p>
      <div class="wrapper">
          <a class="slide-price"><?php echo $price = get_post_meta( get_the_ID(), '_regular_price', true); ?>€</a>
          <span class="sweep-to-right"></span>
      </div>

    </div>
  </a>
</div>

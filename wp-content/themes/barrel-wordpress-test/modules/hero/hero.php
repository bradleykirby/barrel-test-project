<?php
    global $post;
    $post = get_post($postID);
    setup_postdata( $post );

    $bg_image_id = get_post_thumbnail_id( get_the_ID() );
    $bg_image = get_module('image', array(
      'id' => $bg_image_id,
      'cover' => false,
      'contain' => false,
      'absolute' => false,
      'top' => true,
      'size' => 'large'
    ));

    $fg_image_id = get_field('index__product')['ID'];
    $fg_image = get_module('image', array(
      'id' => $fg_image_id,
      'cover' => false,
      'contain' => false,
      'absolute' => false,
      'top' => false,
      'size' => 'medium'
    ));

    $headline = get_field( "index__headline");
    $content = get_the_content();
?>
<section class="hero container" data-module="hero" --bg-url="https://localhost:3000/wp-content/uploads/2018/06/www.knobcreek.com-1293609732325191.jpg">

 <!-- <div class="hero__bg-image"><?php echo $bg_image; ?></div> -->
  <!-- <div class="container"> -->

    <h1 class="hero__headline"><?php echo $headline ?></h1>
    <p class="hero__description"><?php echo $content ?></p>
    <div class="hero__fg-image"><?php echo $fg_image; ?></div>
    
  <!-- </div> -->
  <?php wp_reset_postdata(); ?>
</section>

<?php
    global $post;
    $post = get_post($postID);
    setup_postdata( $post );

    $bg_image_id = get_post_thumbnail_id( get_the_ID() );
    $bg_image = wp_get_attachment_image_src($bg_image_id, 'full')[0];
    $bg_image_position = image_custom_position($post);

    $fg_image_id = get_field('index__product')['ID'];
    $fg_image = get_module('image', array(
      'id' => $fg_image_id,
      'cover' => false,
      'contain' => false,
      'absolute' => false,
      'top' => false,
      'size' => 'medium',
      'alt' => get_post_meta($fg_image_id, '_wp_attachment_image_alt', TRUE)

    ));

    $headline = get_field( "index__headline");
    $content = get_the_content();
?>
<section class="hero" data-module="hero">

  <div class="container" style="background-image:url('<?php echo $bg_image; ?>');background-position:<?php echo $bg_image_position; ?>">

    <h1 class="hero__headline"><?php echo $headline ?></h1>
    <p class="hero__description"><?php echo $content ?></p>
    <div class="hero__fg-image"><?php echo $fg_image; ?></div>
    
  </div>
  <?php wp_reset_postdata(); ?>
</section>

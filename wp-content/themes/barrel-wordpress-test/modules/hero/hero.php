<section class="hero" data-module="hero">
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

<?php echo $bg_image; ?>

  <main>

    <h1><?php echo $headline ?></h1>
    <p><?php echo $content ?></p>
    <?php echo $fg_image; ?>

    
  </main>
  <?php wp_reset_postdata(); ?>
</section>

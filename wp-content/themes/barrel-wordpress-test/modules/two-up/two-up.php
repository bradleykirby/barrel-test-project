<?php
    global $post;
    $post = get_post($postID);
    setup_postdata( $post );

    $image_id = get_post_thumbnail_id( get_the_ID() );;
    $image = get_module('image', array(
      'id' => $image_id,
      'cover' => false,
      'contain' => false,
      'absolute' => false,
      'top' => false,
      'size' => 'medium',
      'alt' => get_post_meta($image_id, '_wp_attachment_image_alt', TRUE)
    ));

    $date = get_the_date('F d');
    $title = get_the_title();
    
    add_filter('excerpt_length', function($length){
        return 37;
    });
    add_filter('excerpt_more', function($more) {
        return '...';
    });
    $excerpt = get_the_excerpt();

    $link = '<a href=' . get_the_permalink() . '>' . get_cta(get_post_format()) . '</a>';
    $type_icon = get_format_icon(get_post_format());
?>
<section class="two-up">
    <?php echo $image ?>
    <?php echo $type_icon ?>
    <?php echo $date ?>
    <h3><?php echo $title ?>
    <p><?php echo $excerpt ?></p>
    <a href="<?php the_permalink(); ?>" class="post__meta--cta post--link">
      <?php echo $post__cta; ?>
    </a>
    <?php echo $link ?>
    <?php wp_reset_postdata(); ?>
</section>

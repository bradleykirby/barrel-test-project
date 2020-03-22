<?php
get_header();
?>

<?php
    $front_page_id = get_option( 'page_on_front' ) !== 0 ? get_option( 'page_on_front' ) : 2;
    $most_recent_post_id = get_most_recent_post_ID();
?>

<?php the_module('hero', array('postID' => $front_page_id)); ?>
<?php the_module('two-up', array('postID' => $most_recent_post_id)); ?>
<?php the_module('layout'); ?>

<?php
get_footer();

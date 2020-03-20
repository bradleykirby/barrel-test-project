<?php
get_header();
?>

<?php the_module('hero', array('postID' => 2)); ?>
<?php the_module('two-up', array('postID' => 1)); ?>
<?php the_module('layout'); ?>

<?php
get_footer();

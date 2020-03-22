<?php
/**
 * Returns the ID of the most recently published post
 * @param  query $query a post query
 * @return string       A formatted CTA
 */
function get_most_recent_post_ID(){
  $recent = new WP_Query( 'offset=0');
  return $recent->posts[0]->ID;
}
?>
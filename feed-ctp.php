<?php

function rssfeed_ctp($qv) {
if (isset($qv['feed']) && !isset($qv['post_type']))
    $feed_ctp['post_type'] = array('post', 'story', 'books', 'movies');
    return $feed_ctp;
}
add_filter('request', 'rssfeed_ctp');
?>

<?php

/**
 * Theme helpers.
 */

namespace App;

//estimated reading time
function reading_time() {
    // return 'foo';
    // $content = get_post_field( 'post_content', $post->ID );
    $word_count = str_word_count( strip_tags( get_the_content() ) );
    $readingtime = ceil($word_count / 200);
    if ($readingtime == 1) {
    $timer = " minute";
    } else {
    $timer = " minutes";
    }
    $totalreadingtime = $readingtime . $timer;
    return $totalreadingtime;
}
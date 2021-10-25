<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf('&hellip; <a class="text-blue" href="%s">%s</a>', get_permalink(), __('Read&nbsp;more&nbsp;&rarr;', 'sage'));
});

add_filter('excerpt_length', function($length) {
    return 16;
});

add_filter('body_class', function($classes) {
    return array_merge($classes, ['overflow-x-hidden w-screen']);
});
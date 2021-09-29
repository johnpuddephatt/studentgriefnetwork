<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Home extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'front-page',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'links' => $this->links(),
        ];
    }

    /**
     * Returns the site name.
     *
     * @return string
     */
    public function links()
    {
     return get_posts([
                'post_type' => 'page',
                'orderby' => 'post__in',
                'include' => array_reduce(
                                get_option('home_links')['home_pages'],
                                    function( $result, $item ) {
                                        $result[] = $item['page'];
                                        return $result;
                                    }
                                ),
                'numberposts' => 3,
    
                            ]);
    }
}

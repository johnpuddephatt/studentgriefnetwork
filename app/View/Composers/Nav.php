<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Nav extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.header',
        'partials.footer'
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        if($this->view->name() == 'partials.header') {
            return [
                'primaryNavigation' => $this->navigation('primary_navigation', [
                    'menu_class' => 'flex flex-col md:flex-row font-kayaksans'
                ], [
                    'level-0-link' => 'hover:border-white text-xl',
                    'level-1-link' => 'text-base text-blue'
                ]),
            ];
        }
        else {
            return [
                'footerNavigation' => $this->navigation('footer_navigation', [
                    'depth' => 1,
                    'menu_class' => 'flex flex-col lowercase col'
                ], [
                    'level-0-link' => 'text-blue-light font-semibold my-0 hover:border-sky'
                ]),
                'footerNavigation2' => $this->navigation('footer_navigation_2', [
                    'depth' => 1,
                    'menu_class' => 'flex flex-col lowercase col'
                ], [
                    'level-0-link' => 'text-blue-light font-semibold  my-0 hover:border-sky'
                ])
            ];
        }
    }

    public function navigation($name, $args = [], $styles = []) {
        if (has_nav_menu($name)) {
            return wp_nav_menu(array_merge([
                'theme_location' => $name,
                'walker' => new \App\Navwalker($styles),
                'menu_class' => 'nav flex',
                'echo' => false
            ], $args));
        }
    }
}

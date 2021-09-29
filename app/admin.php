<?php

/**
 * Theme admin.
 */

namespace App;

use WP_Customize_Manager;

use function Roots\asset;

/**
 * Register the `.brand` selector to the blogname.
 *
 * @param  \WP_Customize_Manager $wp_customize
 * @return void
 */
add_action('customize_register', function (WP_Customize_Manager $wp_customize) {
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->selective_refresh->add_partial('blogname', [
        'selector' => '.brand',
        'render_callback' => function () {
            bloginfo('name');
        }
    ]);


    $wp_customize->add_panel( 'home_panel', array(
        'priority'       => 10,
        'capability'     => 'edit_theme_options',
        'theme_supports' => '',
        'title'          => 'Homepage',
        'description'    => 'Settings relating to the homepage',
    ));

    $wp_customize->add_section(
      'home_links',
      array(
          'title' => 'Links',
          'description' => '',
          'priority' => 15,
          'panel'=>'home_panel',
        )
    );

    $wp_customize->add_setting(
        'home_links',
        
        array(
            'transport' => 'refresh',
            'default' => '',
          'sanitize_callback' => 'absint'
        )
    );

        $wp_customize->add_section(
      'social',
      array(
          'title' => 'Social accounts',
          'description' => '',
          'priority' => 35,
      )
    );

    // Facebook
    $wp_customize->add_setting(
        'facebook',
        array(
          'default' => '',
          'sanitize_callback' => 'sanitize_text_field',
          'transport' => 'postMessage'
        )
    );

    $wp_customize->selective_refresh->add_partial('facebook', [
      'selector' => '.social-icon__facebook',
      'container_inclusive' => false,
      'fallback_refresh' => false,
      'render_callback' => function() {
          echo get_theme_mod('facebook');
      }
    ]);

    $wp_customize->get_setting('facebook')->transport = 'postMessage';

    $wp_customize->add_control(
    'facebook',
    array(
      'type' => 'text',
      'label' => 'Facebook',
      'section' => 'social',
      'settings' => 'facebook',
    )
    );


    // Twitter
    $wp_customize->add_setting(
        'twitter',
        array(
          'default' => '',
          'sanitize_callback' => 'sanitize_text_field',
          'transport' => 'postMessage'
        )
    );

    $wp_customize->selective_refresh->add_partial('twitter', [
      'selector' => '.social-icon__twitter',
      'container_inclusive' => false,
      'fallback_refresh' => false,
      'render_callback' => function() {
          echo get_theme_mod('twitter');
      }
    ]);

    $wp_customize->get_setting('twitter')->transport = 'postMessage';

    $wp_customize->add_control(
    'twitter',
    array(
      'type' => 'text',
      'label' => 'Twitter',
      'section' => 'social',
      'settings' => 'twitter',
    )
    );

    // YouTube
    $wp_customize->add_setting(
        'youtube',
        array(
          'default' => '',
          'sanitize_callback' => 'sanitize_text_field',
          'transport' => 'postMessage'
        )
    );

    $wp_customize->selective_refresh->add_partial('youtube', [
      'selector' => '.social-icon__youtube',
      'container_inclusive' => false,
      'fallback_refresh' => false,
      'render_callback' => function() {
          echo get_theme_mod('youtube');
      }
    ]);

    $wp_customize->get_setting('youtube')->transport = 'postMessage';

    $wp_customize->add_control(
    'youtube',
    array(
      'type' => 'text',
      'label' => 'YouTube',
      'section' => 'social',
      'settings' => 'youtube',
    )
    );

    // Instagram
    $wp_customize->add_setting(
        'instagram',
        array(
          'default' => '',
          'sanitize_callback' => 'sanitize_text_field',
          'transport' => 'postMessage'
        )
    );

    $wp_customize->selective_refresh->add_partial('instagram', [
      'selector' => '.social-icon__instagram',
      'container_inclusive' => false,
      'fallback_refresh' => false,
      'render_callback' => function() {
          echo get_theme_mod('instagram');
      }
    ]);

    $wp_customize->get_setting('instagram')->transport = 'postMessage';

    $wp_customize->add_control(
    'instagram',
    array(
      'type' => 'text',
      'label' => 'Instagram',
      'section' => 'social',
      'settings' => 'instagram',
    )
    );


    // Linkedin
    $wp_customize->add_setting(
        'linkedin',
        array(
          'default' => '',
          'sanitize_callback' => 'sanitize_text_field',
          'transport' => 'postMessage'
        )
    );

    $wp_customize->selective_refresh->add_partial('linkedin', [
      'selector' => '.social-icon__linkedin',
      'container_inclusive' => false,
      'fallback_refresh' => false,
      'render_callback' => function() {
          echo get_theme_mod('linkedin');
      }
    ]);

    $wp_customize->get_setting('linkedin')->transport = 'postMessage';

    $wp_customize->add_control(
    'linkedin',
    array(
      'type' => 'text',
      'label' => 'Linkedin',
      'section' => 'social',
      'settings' => 'linkedin',
    )
    );



    /*
    ** Company info
    */

    $wp_customize->add_section(
      'company',
      array(
          'title' => 'Company info',
          'description' => '',
          'priority' => 40,
      )
    );

    // Address
    $wp_customize->add_setting(
        'company_info',
        array(
          'default' => 'Migrants’ Rights Network Ltd. is a registered company in England and Wales (#06024396) and a registered charity (#1125746).', 
          'sanitize_callback' => 'sanitize_textarea_field',
          'transport' => 'postMessage'
        )
    );

    $wp_customize->selective_refresh->add_partial('company_info', [
      'selector' => '.company-info',
      'container_inclusive' => false,
      'fallback_refresh' => false,
      'render_callback' => function() {
          echo get_theme_mod('company_info');
      }
    ]);

    $wp_customize->get_setting('company_info')->transport = 'postMessage';

    $wp_customize->add_control(
    'company_info',
    array(
      'type' => 'textarea',
      'label' => 'Company info',
      'section' => 'company',
      'settings' => 'company_info',
    )
    );
});

\Kirki::add_config( 'theme_config_id', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'option',
	'option_name' => 'home_links'
) );

$choices = array_reduce(
            get_posts( 'post_type=page&posts_per_page=-1' ),
            function( $result, $item ) {
                $result[$item->ID] = $item->post_title;
                return $result;
            }
        );

\Kirki::add_field( 'theme_config_id', [
	'type'        => 'repeater',
	'label'       => esc_attr__( 'Links', 'kirki' ),
	'section'     => 'home_links',
	'priority'    => 10,
	'row_label' => [
		'type'  => 'field',
		'value' => esc_html__( 'Your Custom Value.', 'kirki' ),
		'field' => 'page',
	],
	'settings'    => 'home_pages',
	'fields' => [
		'page' => [
			'type'        => 'select',
			// 'label'       => esc_html__( 'Link Text', 'kirki' ),
			'default'     => $choices ? array_key_first($choices) : null,
            'choices' => $choices
		]
	],
	'choices' => [
		'limit' => 3
	],
] );

/**
 * Register the customizer assets.
 *
 * @return void
 */
add_action('customize_preview_init', function () {
    wp_enqueue_script('sage/customizer.js', asset('scripts/customizer.js')->uri(), ['customize-preview'], null, true);
});

    
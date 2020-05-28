<?php

/**
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function twentyseventeen_latest_posts_on_sidebar_register( $wp_customize ) {

    /**
     * New Customizer options panel.
     * Section - latest posts section
     * https://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_section
     */

    $wp_customize->add_section(
        'latest_posts_on_sidebar',
        array(
            'title'    => __( 'Latest Posts on Sidebar', 'twentyseventeen' ),
            'priority' => 100,
        )
    );

    /**
     * New Customizer texts input settings for the panel.
     * Setting - latest posts section.
     * https://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_setting
     */

    $wp_customize->add_setting(
        'twentyseventeen_latest_posts_section_title',
        array(
            'default'           => esc_html__('Latest Posts', 'twentyseventeen'),
            'capability' => 'edit_theme_options',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    /**
     * New Customizer input texts control for the panel.
     * Controls - latest posts section.
     * https://codex.wordpress.org/Class_Reference/WP_Customize_Manager/add_control
     *
     */
    $wp_customize->add_control(
        'twentyseventeen_latest_posts_section_title',
        array(
            'label' => esc_html__('Section Title', 'twentyseventeen'),
            'description' => esc_html__('This is a texts input', 'twentyseventeen'),
            'section' => 'latest_posts_on_sidebar',
            'type' => 'text',
            'priority' => 100,
        )
    );


}
//https://codex.wordpress.org/Theme_Customization_API
add_action( 'customize_register', 'twentyseventeen_latest_posts_on_sidebar_register' );
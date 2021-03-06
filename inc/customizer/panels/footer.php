<?php

// ---------------------------------------------
// Footer Section
// ---------------------------------------------
$wp_customize->add_section( 'felix_footer_section',  array(
    'title'         => __( 'Footer', 'felix-landing-page' ),
    'description'   => __( 'Page footer configuration.', 'felix-landing-page' ),
    'panel'         => 'felix_landing_page'
) );


    // Copyright text
    $wp_customize->add_setting( 'felix_landing_page_template[footer_copyright_text]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => __( 'Company Name', 'felix-landing-page')
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[footer_copyright_text]', array(
        'type'              => 'text',
        'section'           => 'felix_footer_section',
        'label'             => __( 'Copyright Company Name', 'felix-landing-page' )
    ) );
    
    
    // Textbox 1
    $wp_customize->add_setting( 'felix_landing_page_template[footer_textboxes][0]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => __( 'Footer Text One', 'felix-landing-page')
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[footer_textboxes][0]', array(
        'type'              => 'text',
        'section'           => 'felix_footer_section',
        'label'             => __( 'Text 1', 'felix-landing-page' )
    ) );
    
    
    // Textbox 2
    $wp_customize->add_setting( 'felix_landing_page_template[footer_textboxes][1]', array(
        'type'              => 'option',
        'transport'         => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
        'default'           => __( 'Footer Text Two', 'felix-landing-page')
    ) );
    $wp_customize->add_control( 'felix_landing_page_template[footer_textboxes][1]', array(
        'type'              => 'text',
        'section'           => 'felix_footer_section',
        'label'             => __( 'Text 2', 'felix-landing-page' )
    ) );
    
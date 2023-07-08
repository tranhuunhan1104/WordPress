<?php

add_action('customize_register','wp2023_customize_register');
function wp2023_customize_register( $wp_customize ) {

    $wp_customize->add_section( 'header_section', array(
        'title' => __( 'Header Setting','wp2023-theme' ),
        'priority' => 30,
      ) );
      wp2023_custom_add_input( $wp_customize,'contact_email_header','header_section','Contact email');
      wp2023_custom_add_input( $wp_customize,'contact_ship','header_section','Contact ship');

    $wp_customize->add_section( 'header_section_social', array(
        'title' => __( 'Header Setting Social','wp2023-theme' ),
        'priority' => 30,
      ) );
      wp2023_custom_add_input( $wp_customize,'contact_facebook','header_section_social','Contact facebook');
      wp2023_custom_add_input( $wp_customize,'contact_twitter','header_section_social','Contact twitter');
      wp2023_custom_add_input( $wp_customize,'contact_linkedin','header_section_social','Contact linkedin');
      wp2023_custom_add_input( $wp_customize,'contact_pinterest','header_section_social','Contact pinterest');


    $wp_customize->add_section( 'contact_section', array(
        'title' => __( 'Contact Setting','wp2023-theme' ),
        'priority' => 30,
      ) );
      wp2023_custom_add_input( $wp_customize,'contact_phone','contact_section','Contact phone');
      wp2023_custom_add_input( $wp_customize,'contact_email','contact_section','Contact email');
      wp2023_custom_add_input( $wp_customize,'contact_address','contact_section','Contact address');
      wp2023_custom_add_input( $wp_customize,'contact_open_time','contact_section','Contact open time');
}

function wp2023_custom_add_input( $wp_customize, $setting_id, $section_id, $label, $type = 'text' ){
    $wp_customize->add_setting( $setting_id, array(
        'default' => '',
    ) );
    $wp_customize->add_control( $setting_id,
    [
        'section' => $section_id ,
        'settings' => $setting_id,
        'label' => __( $label, 'wp2023-theme' ),
        'type' => $type,
    ]
    );
    return $wp_customize;
}
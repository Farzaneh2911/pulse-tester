<?php
function pulse_tester_assets() {
    // Tailwind via CDN
    wp_enqueue_style(
        'tailwind',
        'https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css',
        array(),
        null
    );

    // Your theme stylesheet
    wp_enqueue_style(
        'pulse-style',
        get_stylesheet_uri(),
        array('tailwind'),
        '1.0'
    );

    // Main JS
    wp_enqueue_script(
        'pulse-main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        '1.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'pulse_tester_assets');
add_action('wp_enqueue_style', 'pulse_tester_assets');

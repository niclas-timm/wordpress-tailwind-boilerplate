<?php

/**
 * Enqueue scripts and styles.
 */
function niclastimm_scripts()
{
    wp_enqueue_style('niclastimm-style', get_template_directory_uri() . "/dist/css/main.css", array(), wp_get_theme()->get('Version'));

    wp_enqueue_script('malereitimm-scripts', get_template_directory_uri() . "/dist/js/app.js", array(), false, true);

    wp_enqueue_style("google fonts", "https://fonts.googleapis.com/css?family=Poppins:500,700", false);
}
add_action('wp_enqueue_scripts', 'niclastimm_scripts');
<?php
// Enfileira o estilo principal do tema pai e o estilo personalizado
function astra_ipb_enqueue_styles() {
    // Estilo do tema pai
    wp_enqueue_style('astra-parent-style', get_template_directory_uri() . '/style.css');

    // Estilo do tema filho
    wp_enqueue_style('astra-ipb-style',
        get_stylesheet_directory_uri() . '/style.css',
        array('astra-parent-style')
    );
}
add_action('wp_enqueue_scripts', 'astra_ipb_enqueue_styles');

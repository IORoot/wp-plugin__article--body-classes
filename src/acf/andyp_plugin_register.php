<?php

add_action( 'plugins_loaded', function() {
    do_action('register_andyp_plugin', [
        'title'     => 'Post/Page Body Classes',
        'icon'      => 'file-code',
        'color'     => '#76FF03',
        'path'      => __FILE__,
    ]);
} );
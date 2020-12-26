<?php

/*
 * 
 * @wordpress-plugin
 * Plugin Name:       _ANDYP - WP - Body Classes & Title Edit for Posts & Pages
 * Plugin URI:        http://londonparkour.com
 * Description:       <strong>🎛PANEL</strong> | <em>Page/Post > Edit page.</em> | Allows you to add manually add classes into the <body> tag of the page/post. Also update the <title>
 * Version:           1.0.0
 * Author:            Andy Pearson
 * Author URI:        https://londonparkour.com
 * Domain Path:       /languages
 */


//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                    Register with ANDYP Plugins                          │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/acf/andyp_plugin_register.php';

//  ┌─────────────────────────────────────────────────────────────────────────┐
//  │                              The ACF                                    │
//  └─────────────────────────────────────────────────────────────────────────┘
require __DIR__.'/src/acf/acf_panel.php'; 
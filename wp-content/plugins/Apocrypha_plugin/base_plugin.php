<?php
/*
 *
 * Plugin Name: Apocrypha plugin
 *
 */

    include_once plugin_dir_path( __FILE__ ).'/item.php';
    include_once plugin_dir_path( __FILE__ ).'/database.php';
            
register_activation_hook(__FILE__, 'create_table');
register_deactivation_hook(__FILE__, 'drop_table');
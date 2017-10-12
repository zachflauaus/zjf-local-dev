<?php
/*
    Plugin Name: ZJF - Local Dev
    Plugin URI: https://www.github.com/zachflauaus/zjf-local-dev
    Description: Colors the dashboard to indicate it's local as well as activates plugins and keeps them activated.
    Author: Zach Flauaus
    Author URI: https://www.zachflauaus.com
 */

add_action( 'admin_footer', 'zjf_dev_bar_colors' );
add_action( 'wp_footer', 'zjf_dev_bar_colors' );
function zjf_dev_bar_colors() {
    ?>
    <style>
        #wpadminbar {
            background: #C71585;
        }
        #adminmenu, 
        #adminmenu .wp-submenu, 
        #adminmenuback, 
        #adminmenuwrap {
            background: #630a42;
        }
        #adminmenu .wp-has-current-submenu .wp-submenu, #adminmenu .wp-has-current-submenu .wp-submenu.sub-open, #adminmenu .wp-has-current-submenu.opensub .wp-submenu, #adminmenu a.wp-has-current-submenu:focus+.wp-submenu, .no-js li.wp-has-current-submenu:hover .wp-submenu {
            background: #470f32;
        }
        #adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head, #adminmenu .wp-menu-arrow, #adminmenu .wp-menu-arrow div, #adminmenu li.current a.menu-top, #adminmenu li.wp-has-current-submenu a.wp-has-current-submenu, .folded #adminmenu li.current.menu-top, .folded #adminmenu li.wp-has-current-submenu {
            background: #0B7A00;
        }
    </style>
    <?php
}

add_action( 'admin_init', 'zjf_activate_plugins' );
function zjf_activate_plugins() {
    activate_plugin( 'advanced-custom-fields-pro/acf.php' );
    activate_plugin( 'debug-bar/debug-bar.php' );
    activate_plugin( 'debug-bar-console/debug-bar-console.php' );
    activate_plugin( 'log-deprecated-notices/log-deprecated-notices.php' );
    activate_plugin( 'plugin-toggle/plugin-toggle.php' );
    activate_plugin( 'query-monitor/query-monitor.php' );
    activate_plugin( 'regenerate-thumbnails/regenerate-thumbnails.php' );
    activate_plugin( 'what-the-file/what-the-file.php' );
    activate_plugin( 'wordpress-importer/wordpress-importer.php' );
    activate_plugin( 'wordpress-reset/wordpress-reset.php' );
}
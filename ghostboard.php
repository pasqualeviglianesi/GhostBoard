<?php
/**
 * Plugin Name: GhostBoard
 * Plugin URI:  https://github.com/pasqualeviglianesi/ghostboard
 * Description: Clean your WordPress dashboard by hiding all admin notices, update alerts, and nag screens for a distraction-free workflow.
 * Version:     1.0.0
 * Author:      Pasquale Viglianesi
 * License:     GPL2
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'GHOSTBOARD_PATH', plugin_dir_path( __FILE__ ) );

require_once GHOSTBOARD_PATH . 'includes/class-ghostboard.php';

function run_ghostboard() {
    $plugin = new GhostBoard();
    $plugin->init();
}
run_ghostboard();

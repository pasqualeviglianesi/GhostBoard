<?php

class GhostBoard {

    public function init() {
        add_action('admin_print_scripts', [$this, 'hide_all_notices'], 999);

        add_filter('pre_site_transient_update_core', [$this, 'disable_updates']);
        add_filter('pre_site_transient_update_plugins', [$this, 'disable_updates']);
        add_filter('pre_site_transient_update_themes', [$this, 'disable_updates']);

        add_action('admin_enqueue_scripts', [$this, 'enqueue_admin_styles']);
    }

    public function hide_all_notices() {
        remove_all_actions('user_admin_notices');
        remove_all_actions('admin_notices');
        remove_all_actions('all_admin_notices');
    }

    public function disable_updates($value) {
        return null;
    }

    public function enqueue_admin_styles() {
        wp_enqueue_style(
            'ghostboard-admin-style', 
            plugin_dir_url( dirname(__FILE__) ) . 'assets/css/admin-style.css'
        );
    }
}

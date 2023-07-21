<?php

if (!defined('ABSPATH')) {
    exit;
}

class Custom_Mobile_Filter
{

    public function __construct()
    {
        //...
    }

    public function run()
    {
        add_action('wp_enqueue_scripts', array($this, 'enqueue_styles_and_scripts'));
        add_action('wp_footer', array($this, 'add_filter_button_and_sidebar'));
    }

    public function enqueue_styles_and_scripts()
    {
        wp_enqueue_style('custom-mobile-filter-style', plugins_url('/public/style.css', dirname(__FILE__)));
        wp_enqueue_script('custom-mobile-filter-script', plugins_url('/public/script.js', dirname(__FILE__)), array('jquery'), '1.0', true);
    }

    public function add_filter_button_and_sidebar()
    {
        echo '<button id="custom-mobile-filter-button"><img src="' . plugins_url('/assets/filter-icon.svg', dirname(__FILE__)) . '" alt="Filter" /></button>';
        echo '<div id="custom-mobile-filter-sidebar">[br_filters_group group_id=19768]</div>';
    }
}

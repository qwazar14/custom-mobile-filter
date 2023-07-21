<?php
/*
Plugin Name: Custom Mobile Filter
Description: Adds a filter button for mobile screens that triggers the BeRocket AJAX Product Filters.
Author: Maksym "Qwazar" Mezhyrytskyi
Version: 1.0.0
Author URI: https://github.com/qwazar14/
Plugin URI: https://github.com/qwazar14/custom-mobile-filter
*/


if (!defined('ABSPATH')) {
    exit;
}
if (!class_exists('Custom_Mobile_Filter')) {
    include_once dirname(__FILE__) . '/includes/class-custom-mobile-filter.php';
}
function run_custom_mobile_filter()
{
    $cmf = new Custom_Mobile_Filter();
    $cmf->run();
}

run_custom_mobile_filter();
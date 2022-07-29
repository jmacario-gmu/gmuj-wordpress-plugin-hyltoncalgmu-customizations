<?php

/**
 * Summary: php file which implements the custom stylesheets
 */


/**
 * Enqueue custom CSS
 */
add_action('wp_enqueue_scripts', 'gmuj_hyltoncalgmu_c_enqueue_styles');
function gmuj_hyltoncalgmu_c_enqueue_styles() {

  // Enqueue the custom stylesheets
  wp_enqueue_style(
    'gmuj_hyloncalgmu_c_css', //stylesheet name
    plugin_dir_url( __DIR__ ).'css/hyltoncalgmu-custom.css' //path to stylesheet
  );

}

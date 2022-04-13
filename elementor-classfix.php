<?php
/**
 * Plugin Name:       Elementor Deprecated Class Fix
 * Description:       Fix Elementor Class Fatal Error (Scheme_Color, Scheme_Typography)
 * Version:           1.0.0
 * Author:            WebDevDesign by André Schneider
 * Author URI:        https://webdevdesign.de/
 * License:           MIT
 **/

namespace Elementor;

add_action( 'plugins_loaded', function() {
    if ( ! class_exists( 'Elementor\Scheme_Color' ) ) {
      class Scheme_Color extends Core\Schemes\Color {}
    }
	
    if ( ! class_exists( 'Elementor\Scheme_Typography' ) ) {
      class Scheme_Typography extends Core\Schemes\Typography {}
    }
  }
);

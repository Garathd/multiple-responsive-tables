<?php 
// ===============================================================
// table-shortcodes.php
//
// Shortcode usage - WP editors can add the shortcodes 
// 
// [responsive_table_init]
// [responsive_table]                  
// ----------------------------------------------------------------

add_shortcode('responsive_table_init', 'gdx_designs_responsive_tables_init');

function gdx_designs_responsive_tables_init($atts = array(), $content = null ) { 
    // create dynamic css class to be used with JQuery
    $css = '<div id="custom-css"></div>';
    return $css;
} 

///////////////////////////////////////////////////////////////////

add_shortcode('responsive_table', 'gdx_designs_responsive_tables_shortcode');

function gdx_designs_responsive_tables_shortcode($atts = array(), $content = null ) { 

	if ( ! empty( $atts['id'] ) ) {
        $id = $atts['id'];
        $opening = '<div class="responsive-table-container" id="gdx-responsive-table-unique-'.$id.'">';
  	} else {
  		$opening = '<div class="responsive-table-container">';
  	}

    $closing = '</div>';

    $val = $opening.$content.$closing;

    return $val;
} 

?>
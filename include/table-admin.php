<?php 

// ---------------------------------------------------------------
// Admin Page
// ---------------------------------------------------------------

add_action('admin_menu','gdx_designs_responsive_tables_admin_menu');

function gdx_designs_responsive_tables_admin_menu() {
	add_menu_page(
		'Responsive Tables Instructions', //page title
		'Responsive Tables', //menu title
		'manage_options', //capabilities
    	'responsive_table', //menu slug
    	'gdx_designs_responsive_tables_instruct', //function
		'dashicons-editor-table' // icon
	);
}

// ---------------------------------------------------------------
// Display Instructions
// ---------------------------------------------------------------

function gdx_designs_responsive_tables_instruct() {
	if (!current_user_can('manage_options')) {
		wp_die('You do not have sufficient permissions!');
	}
	
  include GDX_RESPONSIVE_TABLE_DIR . '/include/table-instructions.php';
}

// ---------------------------------------------------------------
// CSS & JS
// ---------------------------------------------------------------

// Register Jquery and Styles
add_action('init', 'gdx_designs_responsive_tables_register_styles');
function gdx_designs_responsive_tables_register_styles() {
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script('gdx_designs_responsive_tables_script', plugins_url('/assets/js/responsive-table.js', __FILE__));
    wp_enqueue_style('gdx_designs_responsive_tables_style', plugins_url('/assets/css/responsive-table.css', __FILE__));
}

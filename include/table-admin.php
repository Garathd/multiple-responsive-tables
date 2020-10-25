<?php 

// ---------------------------------------------------------------
// Admin Page
// ---------------------------------------------------------------

add_action('admin_menu','responsive_table_admin_menu');

function responsive_table_admin_menu() {
	add_menu_page(
		'Responsive Tables Instructions', //page title
		'Responsive Tables', //menu title
		'manage_options', //capabilities
    'responsive_table', //menu slug
    'responsive_table_instruct', //function
		'dashicons-editor-table' // icon
	);
}

// ---------------------------------------------------------------
// Display Instructions
// ---------------------------------------------------------------

function responsive_table_instruct() {
	global $wpdb;
	if (!current_user_can('manage_options')) {
		wp_die('You do not have sufficient permissions!');
	}
	
  include MAIN_DIR . '/include/table-instructions.php';
}

// ---------------------------------------------------------------
// CSS & JS
// ---------------------------------------------------------------

// register jquery and style on initialization
add_action('init', 'responsive_table_register_script');
function responsive_table_register_script() {
    wp_register_script('custom_jquery', plugins_url('/assets/js/jquery.min.js', __FILE__), array('jquery'), '3.5.1' );
    wp_register_script('responsive_table', plugins_url('/assets/js/responsive-table.js', __FILE__));

    wp_register_style('table_style', plugins_url('/assets/css/responsive-table.css', __FILE__), false, '1.0.0', 'all');

}

// use the registered jquery and style above
add_action('wp_enqueue_scripts', 'responsive_table_enqueue_style');
function responsive_table_enqueue_style(){
   wp_enqueue_script('custom_jquery');
   wp_enqueue_script('responsive_table');

   wp_enqueue_style('table_style');
}

?>


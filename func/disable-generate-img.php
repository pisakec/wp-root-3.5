<?php 
// https://perishablepress.com/disable-wordpress-generated-images/
function shapeSpace_disable_image_sizes($sizes) {
	
	unset($sizes['thumbnail']);    // disable thumbnail size
	unset($sizes['medium']);       // disable medium size
	unset($sizes['large']);        // disable large size
	unset($sizes['medium_large']); // disable medium-large size
	//unset($sizes['1536x1536']);    // disable 2x medium-large size
	//unset($sizes['2048x2048']);    // disable 2x large size
	
	return $sizes;
	
}
add_action('intermediate_image_sizes_advanced', 'shapeSpace_disable_image_sizes');

// disable scaled image size
add_filter('big_image_size_threshold', '__return_false');

// disable other image sizes
function shapeSpace_disable_other_image_sizes() {
	
	remove_image_size('post-thumbnail'); // disable images added via set_post_thumbnail_size() 
	remove_image_size('medium_large');   // disable any other added image sizes
	
}
add_action('init', 'shapeSpace_disable_other_image_sizes');
?>
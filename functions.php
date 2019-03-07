/**
 * Register Blocks
 * @see https://www.billerickson.net/building-gutenberg-block-acf/#register-block
 *
 */

function lam_register_blocks() {
	if( ! function_exists('acf_register_block') )
		return;
	acf_register_block( array(
		'name'			=> 'image-carousel',
		'title'			=> __( 'Image Carousel', 'Graham' ),
		'render_template'	=> 'partials/image-carousel-block.php',
		'category'		=> 'formatting',
		'icon'			=> 'products',
		'mode'			=> 'edit',
		'keywords'		=> array( 'image', 'slider', 'carousel' )
	));
}
add_action('acf/init', 'lam_register_blocks' );
<?php
/**
 * Security check
 * Prevent direct access to the file.
 *
 * @since 1.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}



/**
 * Emaze embed
 * Register embed handler.
 *
 * @since 1.0
 */
function emaze_embed_handler( $matches, $attr, $url, $rawattr ) {

	$embed = sprintf(
		'<iframe src="https://app.emaze.com/%1$s" width="960" height="540" seamless webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>',
		esc_attr( $matches[2] )
	);

	return apply_filters( 'embed_emaze', $embed, $matches, $attr, $url, $rawattr );

}

function emaze_embed() {

	wp_embed_register_handler(
		'emaze',
		'#https?://(www.|app.)?emaze.com/(.*)#i',
		'emaze_embed_handler'
	);

}

add_action( 'init', 'emaze_embed' );

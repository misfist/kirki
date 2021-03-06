<?php

/**
 * Do not allow directly accessing this file.
 */
if ( ! class_exists( 'Kirki' ) ) {
	die( 'File can\'t be accessed directly' );
}
/**
 * Make sure we set the correct MIME type
 */
header( 'Content-Type: text/css' );
/**
 * Echo the styles
 */
$configs = Kirki::$config;
foreach ( $configs as $config_id => $args ) {
	if ( true === $args['disable_output'] ) {
		continue;
	}

	$styles = Kirki_Styles_Frontend::loop_controls( $config_id );
	echo apply_filters( 'kirki/' . $config_id . '/dynamic_css', $styles );
}

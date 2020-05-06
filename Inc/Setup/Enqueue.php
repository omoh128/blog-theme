<?php

namespace Inc\Setup;

/**
 * Enqueue.
 */
class Enqueue
{
	/**
	 * register default hooks and actions for WordPress
	 * @return
	 */



	public function register()
	{
		add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
	}


	public function enqueue_scripts()
	{
		// Deregister the built-in version of jQuery from WordPress
    
        wp_enqueue_script( '_event-scripts', get_template_directory_uri() . '/assets/js/event.js', array('jquery'), '20160909', true );

		// CSS
		  wp_enqueue_style( '_event-stylesheet', get_template_directory_uri() . '/assets/css/event.css', array(), '1.0.0', 'all' );
		


	}
}

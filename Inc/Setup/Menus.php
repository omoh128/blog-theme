<?php

namespace Inc\Setup;

/**
 * Menus
 */
class Menus
{
    /**
     * register default hooks and actions for WordPress
     * @return
     */
    public function register()
    {
        add_action( 'after_setup_theme', array( $this, 'menus' ) );

    }

    public function menus()
    {
        /*
            Register  menus here
        */
        register_nav_menus(array(
            'primary' => esc_html__( 'primary', 'task' ),
            'secondary' => esc_html__( 'secondary', 'task' )
        ));
    }
}

<?php

namespace Inc\Setup;

class Setup
{
    /**
     * register default hooks and actions for WordPress
     * @return
     */

     
    public function register()
    {
        add_action( 'after_setup_theme', array( $this, 'setup' ) );

    }

    public function setup()
    {
        /*
         * Theme Support
         */

        add_theme_support( 'title-tag' );
        add_theme_support( 'post-thumbnails' );


    }

}

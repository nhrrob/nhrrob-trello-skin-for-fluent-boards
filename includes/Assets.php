<?php

namespace Nhrtsf\TrelloSkin;

/**
 * Assets handler class
 */
class Assets {

    /**
     * Class constructor
     */
    function __construct() {
        add_action( 'wp_enqueue_scripts', [ $this, 'register_assets' ] );
        add_action( 'admin_enqueue_scripts', [ $this, 'register_assets' ] );
    }

    /**
     * All available scripts
     *
     * @return array
     */
    public function get_scripts() {
        return [
            'nhrtsf-admin-script' => [
                'src'     => NHRTSF_ASSETS . '/js/admin.js',
                'version' => filemtime( NHRTSF_PATH . '/assets/js/admin.js' ),
                'deps'    => [ 'jquery', 'wp-util' ]
            ],
        ];
    }

    /**
     * All available styles
     *
     * @return array
     */
    public function get_styles() {
        return [
            'nhrtsf-admin-style' => [
                'src'     => NHRTSF_ASSETS . '/css/admin.css',
                'version' => filemtime( NHRTSF_PATH . '/assets/css/admin.css' )
            ],
        ];
    }

    /**
     * Register scripts and styles
     *
     * @return void
     */
    public function register_assets() {
        $scripts = $this->get_scripts();
        $styles  = $this->get_styles();

        foreach ( $scripts as $handle => $script ) {
            $deps = isset( $script['deps'] ) ? $script['deps'] : false;

            wp_register_script( $handle, $script['src'], $deps, $script['version'], true );
        }

        foreach ( $styles as $handle => $style ) {
            $deps = isset( $style['deps'] ) ? $style['deps'] : false;

            wp_register_style( $handle, $style['src'], $deps, $style['version'] );
        }

        wp_localize_script( 'nhrtsf-admin-script', 'nhrtsfTrelloSkin', [
            'nonce' => wp_create_nonce( 'nhrtsf-admin-nonce' ),
            'confirm' => __( 'Are you sure?', 'nhrrob-trello-skin-for-fluent-boards' ),
            'error' => __( 'Something went wrong', 'nhrrob-trello-skin-for-fluent-boards' ),
        ] );
    }
}

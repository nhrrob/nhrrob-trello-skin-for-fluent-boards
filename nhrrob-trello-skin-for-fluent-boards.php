<?php
/**
 * Plugin Name: NHR Trello Skin for FluentBoards
 * Plugin URI: http://wordpress.org/plugins/nhrrob-trello-skin-for-fluent-boards/
 * Description: Trello like Skin for FluentBoards
 * Author: Nazmul Hasan Robin
 * Author URI: https://profiles.wordpress.org/nhrrob/
 * Version: 1.0.3
 * Requires at least: 6.0
 * Requires PHP: 7.4
 * Text Domain: nhrrob-trello-skin-for-fluent-boards
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

require_once __DIR__ . '/vendor/autoload.php';

/**
 * The main plugin class
 */
final class Nhrtsf_Trello_Skin {

    /**
     * Plugin version
     *
     * @var string
     */
    const nhrtsf_version = '1.0.3';

    /**
     * Class construcotr
     */
    private function __construct() {
        $this->define_constants();

        add_action( 'plugins_loaded', [ $this, 'init_plugin' ] );
    }

    /**
     * Initialize a singleton instance
     *
     * @return \Nhrrob_Popular_Ranking
     */
    public static function init() {
        static $instance = false;

        if ( ! $instance ) {
            $instance = new self();
        }

        return $instance;
    }

    /**
     * Define the required plugin constants
     *
     * @return void
     */
    public function define_constants() {
        define( 'NHRTSF_VERSION', self::nhrtsf_version );
        define( 'NHRTSF_FILE', __FILE__ );
        define( 'NHRTSF_PATH', __DIR__ );
        define( 'NHRTSF_URL', plugins_url( '', NHRTSF_FILE ) );
        define( 'NHRTSF_ASSETS', NHRTSF_URL . '/assets' );
        define( 'NHRTSF_PLUGIN_DIR', plugin_dir_path( NHRTSF_FILE ) );
        define( 'NHRTSF_INCLUDES_PATH', NHRTSF_PATH . '/includes' );
    }

    /**
     * Initialize the plugin
     *
     * @return void
     */
    public function init_plugin() {

        new Nhrtsf\TrelloSkin\Assets();

        if ( is_admin() ) {
            new Nhrtsf\TrelloSkin\Admin();
        }
    }
}

/**
 * Initializes the main plugin
 *
 * @return \Nhrtsf_Trello_Skin
 */
function nhrtsf_trello_skin() {
    return Nhrtsf_Trello_Skin::init();
}

//Call the plugin
nhrtsf_trello_skin();

// Dispatch all actions
\Nhrtsf\TrelloSkin\Admin::dispatch_actions();
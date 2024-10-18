<?php

namespace Nhrtsf\TrelloSkin;

use Nhrtsf\TrelloSkin\Admin\FluentBoards;

/**
 * The admin class
 */
class Admin extends App {

    /**
     * Initialize the class
     */
    function __construct() {
        parent::__construct();        
    }

    /**
     * Dispatch and bind actions
     *
     * @return void
     * @since 1.0.0
     */
    public static function dispatch_actions() {
        $fluentBoardsObj = new FluentBoards();

        add_action('in_admin_header', array( $fluentBoardsObj, 'asset'));
        add_filter('fluent_boards/app_vars', array($fluentBoardsObj, 'app_vars'));
    }
}

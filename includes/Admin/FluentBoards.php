<?php

namespace Nhrtsf\TrelloSkin\Admin;

use Nhrtsf\TrelloSkin\App;

/**
 * FluentBoards Integration Class
 */
class FluentBoards extends App {

    public function asset() {
        $current_screen = get_current_screen();
        
        if ( $current_screen && $current_screen->id === 'toplevel_page_fluent-boards' ) {
            wp_enqueue_style( 'nhrtsf-admin-style' );
            wp_enqueue_script( 'nhrtsf-admin-script' );
        }
    }

    public function app_vars( $data ) {
        $data['trans']['Add Stage'] = esc_html__('Add another list', 'nhrrob-trello-skin-for-fluent-boards');
        $data['trans']['Add Task'] = esc_html__('Add a card', 'nhrrob-trello-skin-for-fluent-boards');
        $data['trans']['Your Task Title'] = esc_html__('Enter a title or paste a link', 'nhrrob-trello-skin-for-fluent-boards');
        $data['trans']['Stage Actions'] = esc_html__('List Actions', 'nhrrob-trello-skin-for-fluent-boards');
        $data['trans']['Copy Stage'] = esc_html__('Copy list', 'nhrrob-trello-skin-for-fluent-boards');
        $data['trans']['Sort By'] = esc_html__('Sort by...', 'nhrrob-trello-skin-for-fluent-boards');
        $data['trans']['Move all tasks'] = esc_html__('Move all cards in this list', 'nhrrob-trello-skin-for-fluent-boards');
        $data['trans']['Archive this Stage'] = esc_html__('Archive this list', 'nhrrob-trello-skin-for-fluent-boards');
        $data['trans']['Archive all tasks'] = esc_html__('Archive all cards in this list', 'nhrrob-trello-skin-for-fluent-boards');
        $data['trans']['Reorder Stages'] = esc_html__('Reorder lists', 'nhrrob-trello-skin-for-fluent-boards');
        $data['trans']['Change Background'] = esc_html__('Change background', 'nhrrob-trello-skin-for-fluent-boards');
        return $data;
    }

}

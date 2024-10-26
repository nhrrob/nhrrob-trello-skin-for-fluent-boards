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
        $data['trans']['Stage Name'] = esc_html__('Enter list name...', 'nhrrob-trello-skin-for-fluent-boards');
        $data['trans']['Assignees'] = esc_html__('Members', 'nhrrob-trello-skin-for-fluent-boards');
        $data['trans']['Due Date'] = esc_html__('Due date', 'nhrrob-trello-skin-for-fluent-boards');
        $data['trans']['Archive Task'] = esc_html__('Archive', 'nhrrob-trello-skin-for-fluent-boards');
        $data['trans']['Make Template'] = esc_html__('Make template', 'nhrrob-trello-skin-for-fluent-boards');
        $data['trans']['Custom Field'] = esc_html__('Custom Fields', 'nhrrob-trello-skin-for-fluent-boards');
        $data['trans']['Change Cover'] = esc_html__('Cover', 'nhrrob-trello-skin-for-fluent-boards');
        $data['trans']['Leave Task'] = esc_html__('Leave', 'nhrrob-trello-skin-for-fluent-boards');
        $data['trans']['Write a comment'] = esc_html__('Write a comment...', 'nhrrob-trello-skin-for-fluent-boards');
        $data['trans']['Comments'] = esc_html__('Activity', 'nhrrob-trello-skin-for-fluent-boards');
        $data['trans']['Activities'] = esc_html__('Show details', 'nhrrob-trello-skin-for-fluent-boards');
        return $data;
    }

}

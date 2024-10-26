;(function($) {
    // console.log('Admin js');

    $(document).on('click', function(event) {
        if ($(event.target).closest('.fbs_board_section__task_lists').length) {
            return; // Exit if the click is inside .fbs_board_section__task_lists or its child
        }

        let $modal = $('.fbs_view_task_modal:visible');
        
        if ($modal.length && !$modal.is(event.target) && $modal.has(event.target).length === 0) {
            $(document).find('.fbs-close-task-modal').trigger('click');
        }
    });
})(jQuery);

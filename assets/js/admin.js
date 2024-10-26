;(function($) {
    // console.log('Admin js');

    $(document).ready(function() {
        /* 27. Item Modal - close on outside click */
        $(document).on('click', function(event) {
            if ($(event.target).closest('.fbs_board_section__task_lists').length) {
                return; // Exit if the click is inside .fbs_board_section__task_lists or its child
            }
    
            let $modal = $('.fbs_view_task_modal:visible');
            
            if ($modal.length && !$modal.is(event.target) && $modal.has(event.target).length === 0) {
                $(document).find('.fbs-close-task-modal').trigger('click');
            }
        });
    
        // 28. Item Modal - comments all tab hide
        function deactivateAllTabs() {
            $(document).find('#tab-allTaskCommentAndActivity').removeClass('is-active').hide();
            $(document).find('#tab-comment').trigger('click');
        }

        $(document).on('click', '.fbs_board_section__task_list', function() {
            deactivateAllTabs();
        });
        
        setTimeout(function() {
            let $modal = $('.fbs_view_task_modal:visible');
            if ($modal.length) {
                deactivateAllTabs(); // Deactivate all tabs when the modal is visible
            }
        }, 500);
    }); 
})(jQuery);

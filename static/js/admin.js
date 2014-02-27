require(['jquery-nos'], function ($) {

    //Add one Q&A
    $(document).on('click', 'button.add-question-js', function(e) {
        var $container = $(this).closest('form');
        var next = parseInt($container.find('.count-questions-js').data('nb-questions')) + 1;

        $.ajax({
            type : "GET",
            url: 'admin/novius_faq/faq/crud/add_question/' + next,
            data : {
            },
            success : function(vue) {
                var $vue = $(vue);
                $vue.nosFormUI();
                $container.find('.qa_list').append($vue);
                $container.find('.count-questions-js').data('nb-questions', next);
            }
        });
        e.preventDefault();
    });

    //Delete a Q&A
    $(document).on('click', '.faq_delete_question', function() {
        var question = $(this).data('question');
        var removed = $(this).data('removed');
        if (confirm(question))
        {
            $(this).closest('.qa_item').html('<table><tr><th></th><td class="qa_message">' + removed + '</td></tr></table>');
        }
    });
});
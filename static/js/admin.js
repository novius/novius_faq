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
});
/**
 * Created by Семья on 22.02.2015.
 */
$(function () {
    var body = $('body');
    body.on('click', '#service_dlvr', function () {
        $.fancybox('#insertServDlvr', {
            'scrolling': 'no'
        });
    });

    body.on('click', '#usersFormCall', function () {
        $.fancybox('#usersForm', {
            'scrolling': 'no'
        });
    });

    body.on('click', '#export', function () {
        $.fancybox('#exportForm', {
            // fancybox API options
            'scrolling': 'no',
            fitToView: true,
            autoSize: true,
            closeClick: false,
            openEffect: 'none',
            closeEffect: 'none'
        });
    })


});


(function ($) {
    $(function () {
        $('input, select').styler({});
    });
})(jQuery);

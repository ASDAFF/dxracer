$(function () {

    $(window).bind('beforeunload', function () {
        var id = $('input[name=id]').val();
        $.ajax({
            type: "POST",
            cache: false,
            async: false,
            url: 'ajax/unlockRecords.php',
            data: {
                'type': 'unlockRec',
                'id': id
            }
        });

    });


//добавить заявку
    $('#addapp').on("click", function (e) {
        $.ajax({
            type: "POST",
            cache: false,
            url: 'lib/add.php', // preview.php
            success: function (data) {
                // on success, post (preview) returned data in fancybox
                $.fancybox(data, {
                    // fancybox API options
                    fitToView: true,
                    autoSize: true,
                    closeClick: false,
                    openEffect: 'none',
                    closeEffect: 'none',
                    helpers: {
                        overlay: {closeClick: false} // prevents closing when clicking OUTSIDE fancybox
                    }
                }); // fancybox
            } // success
        }); // ajax
    }); // on


    $('body').on('click', '#buy', function () {
        var parentTR = $(this).parent().parent();
        parentTR.clone().appendTo(".addselemets");
        $(".addselemets").find("#buy").parent().remove();
        $('#zayzvka').slideDown("slow");
        $.fancybox.update();
    });

    $('.only_numbers').on('keyup', function () {
        $(this).val($(this).val().replace(/\D/, ''));
    });
    //добавляем поле с кнопку удалить в форме редактирования заявки
    $('#zayzvka .addselemets table tr td:nth-child(3)').after('<td><button onclick="$(this).parents()[3].remove()" class="styler"><img style="vertical-align: middle" width="20" height="20" src="images/delete.png">Удалить</button></td>')
    $('#zayzvka #phone').after('<button onclick="editPhone();" class="styler"><img style="vertical-align: middle" width="15" height="15" src="images/edit.png">&nbsp;Исправить</button>');


    $('body').on('keyup', '#addcomment_hand', function (e) {
        if (e.which == 17)
            ctrl = false;
    });

    //сохраняем комментарий по ctrl+enter
    $('body').on('keydown', '#addcomment_hand', function (e) {
        if (e.which == 17)
            ctrl = true;
        else if (e.which == 13 && ctrl) {

            if ($('#addcomment_hand').val().length == 0) {
                return;
            }
            var id = $(this).next().attr('id');
            $.ajax({
                type: "POST",
                cache: false,
                url: 'ajax/comments.php',
                data: {
                    id: id,
                    type: 'save_comment',
                    text: $('#addcomment_hand').val()
                },
                success: function () {
                    $('#addcomment_hand').val('');
                    $.ajax({
                        type: "POST",
                        cache: false,
                        url: 'ajax/comments.php',
                        data: {
                            id: id,
                            type: 'getComment'
                        },
                        success: function (data) {
                            $('textarea#comments').text(data);
                        }
                    })
                }
            })
        }

    });

    //сохраняем комментарий
    $('body').on('click', '.addcomment', function () {
        if ($('#addcomment_hand').val().length == 0) {
            return;
        }
        var id = $(this).attr('id');
        $.ajax({
            type: "POST",
            cache: false,
            url: 'ajax/comments.php',
            data: {
                id: id,
                type: 'save_comment',
                text: 'Комментарий: ' + $('#addcomment_hand').val()
            },
            success: function () {
                $('#addcomment_hand').val('');
                $.ajax({
                    type: "POST",
                    cache: false,
                    url: 'ajax/comments.php',
                    data: {
                        id: id,
                        type: 'getComment'
                    },
                    success: function (data) {
                        $('textarea#comments').text(data);
                    }
                })
            }
        })
    });
});

function apply() {

    var save_form = $("#save_form");
    var data = save_form.serializeArray();
    var el = '';
    var price = '';
    var id = $('input[name=id]').val();
    save_form.find('.code-el').each(function () {
        el = el + $(this).text() + '\n';
    });

    save_form.find('.price-el').each(function () {
        price = price + $(this).text() + '\n';
    });
    if (el.length > 0 || price > 0) {
        data[data.length + 1] = {name: "models", value: el};
        data[data.length + 2] = {name: "prices", value: price};
    }

    $.ajax({
        type: "POST",
        cache: false,
        url: 'lib/changeStatus.php',
        data: data, // all form fields
        success: function (data) {
            // on success, post (preview) returned data in fancybox
            $.fancybox(data, {
                // fancybox API options
                afterClose: function () {
                    //window.onbeforeunload = null;
                    $(window).unbind('beforeunload');
                    window.location.reload();
                },
                fitToView: true,
                autoSize: true,
                closeClick: false,
                openEffect: 'none',
                closeEffect: 'none'

            }); // fancybox
        } // success
    }); // ajax
}

function save() {
    var save_form = $("#save_form");
    var data = save_form.serializeArray();
    var el = '';
    var price = '';
    var id = $('input[name=id]').val();
    save_form.find('.code-el').each(function () {
        el = el + $(this).text() + '\n';
    });

    save_form.find('.price-el').each(function () {
        price = price + $(this).text() + '\n';
    });
    if (el.length > 0 || price > 0) {
        data[data.length + 1] = {name: "models", value: el};
        data[data.length + 2] = {name: "prices", value: price};
    }

    $.ajax({
        type: "POST",
        cache: false,
        url: 'lib/changeStatus.php',
        data: data, // all form fields
        success: function () {
            // on success, post (preview) returned data in fancybox
            $.ajax({
                type: "POST",
                cache: false,
                async: false,
                url: 'ajax/unlockRecords.php',
                data: {
                    'type': 'unlockRec',
                    'id': id
                },
                success: function () {
                    window.open('', '_parent', '');
                    window.close();
                }
            });
            window.opener.location.reload();
        }
    }); // ajax


}

function editPhone() {
    var num = $('#zayzvka #phone').val().replace(/[^\d]/gi, '');
    if (num.length == 11 & num.length != 10) {
        num = num.substr(1);
    }
    $('#zayzvka #phone').val(num);
}

function addPosition() {
    $.ajax({
        type: "POST",
        cache: false,
        url: 'lib/formSearchAdd.php',
        success: function (data) {
            // on success, post (preview) returned data in fancybox
            $.fancybox(data, {
                // fancybox API options
                fitToView: true,
                autoSize: true,
                closeClick: false,
                openEffect: 'none',
                closeEffect: 'none',
                helpers: {
                    overlay: {closeClick: false} // prevents closing when clicking OUTSIDE fancybox
                }
            }); // fancybox
        } // success
    }); // ajax
}

function getbyart(art, notBuy) {
    $('#elements').html('');

    if (art == undefined) {
        art = $("#art").val();
    }

    if (notBuy == undefined) {
        var data = 'tip=get&art=' + art;
    } else {
        var data = 'tip=get&art=' + art + '&notBuy=true';
    }

    $.ajax({
        type: "POST",
        cache: false,
        url: 'classes/GetSend.php',
        data: data,
        success: function (data) {
            $('#elements').html(data);
            $.fancybox.update();
        }// success
    });// ajax
}

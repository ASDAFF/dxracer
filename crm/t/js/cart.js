$(document).ready(function () {

    $("#phone").ForceNumericOnly();
    $('input[type=text],input[type=tel],textarea').keyup(function () {
        id = $(this).attr('name');
        $.ajax({
            url: 'index.php',
            type: "POST",
            async: false,
            data: {
                'tip': 'save',
                'name': id,
                'value': $('#' + id).val()
            }
        });
    });

    $('body').on('click', '#buy', function (e) {
        $.ajax({
            url: 'index.php',
            type: "POST",
            data: {
                'tip': 'addtocart',
                'image': $(this).attr('item-image'),
                'item': $(this).attr('item-id'),
                'price': $(this).attr('item-price'),
                'bigimage': $(this).attr('big-image')


            }
        });
        $('.popup, .overlay').css('opacity', '1');
        $('.popup, .overlay').css('visibility', 'visible');
        e.preventDefault();
    });


    $('input').addClass('styler');
    $('textarea').addClass('styler');

    $('#citys').on("keydown keypress", function (e) {
        var e = e || event,
            k = e.which || e.button;
        if (e.ctrlKey && k == 86) return false
        if (k == 2) return false
    }).bind("paste contextmenu", function () {
        return false
    })

    $("#citys").on('focusout', function () {
        var c = $('#citys');
        var city = c.val();
        $.ajax({
            type: 'GET',
            cache: false,
            async: false,
            url: "https://crm.time-avenue.com/t/ajax/get_city.php?term=" + encodeURIComponent(city) + "&one=1",
            success: function (data) {
                if (data == 'error') {
                    if (c.next().hasClass('alert')) {
                        c.next().remove();
                    }
                    c.css('border', '1px solid red');
                    c.after("<div class='alert'>Введенный Вами город не найден</li>");
                    $('.show_hide').remove();
                    err = true;
                } else {
                    c.css('border', 'none');
                }
            }
        });
    });

    /*$("#citys").autocomplete({
        source: "https://crm.time-avenue.com/t/ajax/get_city.php",
        minLength: 3,
        autoFocus: true,
        cacheLength: 10,
        selectFirst: true,
        open: function (event, ui) {
            $('.show_hide').remove();
        },

        select: function (event, ui) {
            var c = $('#citys');
            c.attr("item-id", ui.item.id);
            c.attr("region", ui.item.region);
            c.css('border', 'none');
            if (c.next().hasClass('alert')) {
                c.next().remove();
            }
            getCitiesCashPay();
        },
        response: function (event, ui) {
            var c = $('#citys');
            if (ui.content.length == 0) {

                if (c.next().hasClass('alert')) {
                    c.next().remove();
                }
                c.css('border', '1px solid red');
                c.after("<div class='alert'>Введенный Вами город не найден</li>");
                $('.show_hide').remove();
            } else {
                if (ui.content.length == 1) {
                    c.val(ui.content[0].value);
                    c.attr("item-id", ui.content[0].id);
                    c.attr("region", ui.content[0].region);
                    c.css('border', 'none');
                    if (c.next().hasClass('alert')) {
                        c.next().remove();
                    }
                    $("#citys").autocomplete("close");
                    getCitiesCashPay();
                } else {
                    c.css('border', 'none');
                    if (c.next().hasClass('alert')) {
                        c.next().remove();
                    }
                }
            }
        }
    })
        .data("ui-autocomplete")._renderItem = function (ul, item) {
            return $("<li>")
                .data("item.autocomplete", item)
                .append("<a>" + item.label + "<p>" + item.desc + "</p></a>")
                .appendTo(ul);
        };*/



});

function getCitiesCashPay() {
    cityName = $('#citys').val();
    if (!cityName) {
        alert('Введите имя города');
        return;
    }
    var AOGUID = $('#citys').attr('item-id');
    var REGIONCODE = $('#citys').attr('region');
    $("#text").show();
    $("#text").html(
        '<span style="color: red">Пожалуйста, подождите, идёт расчёт возможных вариантов доставки</span>'
    );
    $.ajax({
        type: "POST",
        url: "https://crm.time-avenue.com/t/ajax/get_city.php?only_spsr=1",
        data: {
            AOGUID: AOGUID,
            submit: 'ok',
            REGIONCODE: REGIONCODE
        }
    })
        .done(function (msg) {
            if (msg.length == 0)
                msg = 'Только почта';
            $("#text").html(msg);
        });
}


(function ($) {
    $(function () {
        $('input').styler({});
    });
})(jQuery);

function emptyCart() {
    $.ajax({
        url: 'index.php',
        type: "POST",
        data: {
            'tip': 'emptyCart'
        },
        success: (function () {
            $('#cart').remove();
        })
    });
}


function delElement(element) {
    var key = element.attr('id');
    $.ajax({
        url: 'index.php',
        type: "POST",
        data: {
            'tip': 'delElement',
            'key': key
        },
        success: (function () {
            $('#el' + key).remove();
            location.reload();
        })
    });
}
jQuery.fn.ForceNumericOnly =
    function () {
        return this.each(function () {
            $(this).keydown(function (e) {
                var key = e.charCode || e.keyCode || 0;
                // Разрешаем backspace, tab, delete, стрелки, обычные цифры и цифры на дополнительной клавиатуре
                return (
                    key == 8 ||
                    key == 9 ||
                    key == 46 ||
                    (key >= 37 && key <= 40) ||
                    (key >= 48 && key <= 57) ||
                    (key >= 96 && key <= 105));
            });
        });
    };


function uncheked(who) {
    $('#' + who + '-styler').removeClass('checked');
    $('#elements').html('');
    $.ajax({
        url: 'index.php',
        type: "POST",
        data: {
            'tip': 'wtORbv',
            'wtORbv': who
        }
    });
}

function closing() {
    $('.popup, .overlay').css('opacity', '0');
    $('.popup, .overlay').css('visibility', 'hidden');
}

function getbyart() {
    $('#elements').html('');
    var auth = '00XFHA567ERT';

    var url = 'https://time-avenue.com/api/Utils.php';

    var art = $("#art").val();
    $.get(url, {
        auth: auth,
        art: art,
        tip: 'get'
    }, function (data) {
        $('#elements').html(data);
        $('.fancybox').fancybox();

    })

}
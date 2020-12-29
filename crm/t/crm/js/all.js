$(function () {
//Кнопка действия


    $('.menu').hover(function () {
            $('.menu ul').show();
        }, function () {
            $('.menu ul').hide();
        }
    );

    //выделение позиций
    $('.simple-little-table tr').on("click", function () {
        if ($(this).hasClass('locked')) {
            alert('Заявка редактируется');
            return false;
        }
    });

    // делаем кнопку активной при выбранном фильтре
    var url = decodeURIComponent($(location).attr('href'));
    $(".filter a.button").each(function () {
        var currentHref = 'http://' + $(location).attr('hostname') + $(this).attr('href');
        if (url == currentHref) {
            $(this).addClass('active');
        }
    });


    //

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

//поиск
    $("#search").keypress(function (e) {
        if (e.keyCode == 13) {
            $.ajax({
                type: "POST",
                cache: false,
                url: 'ajax/search.php',
                data: {
                    type: 'search',
                    str: $(this).val()
                },
                success: function (data) {
                    if (data.length != 0) {
                        location.href = 'index.php' + data;
                    } else {
                        alert('Ничего не найдено');
                    }
                }
            });//ajax
        }//if
    });


    $('body').on('click', '#buy', function () {
        var parentTR = $(this).parent().parent();
        parentTR.clone().appendTo(".addselemets");
        $(".addselemets").find("#buy").parent().remove();
        $('#zayzvka').slideDown("slow");
        $.fancybox.update();
    });


    $('body').on("click", '#addRequest', function () {
        $('#zayzvka').slideDown("slow");
        $('#details').val($('#art').val());
        $.fancybox.update();
    });

    $.ajaxSetup({cache: false});

    //update();
    //setInterval('update()', 1000);

});

//получаем данные по артикулу
//art артикул
//notBuy не выводить кнопку покупки


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

function sending(who) {

    var err = false;


    if ($('#phone').val() == '') {
        $('#phone').css('border-color', 'red');
        err = true;
    } else {
        $('#phone').css('border-color', 'rgb(169, 169, 169)');
    }

    if ($('#name').val() == '') {
        $('#name').css('border-color', 'red');
        err = true;
    } else {
        $('#name').css('border-color', 'rgb(169, 169, 169)');
    }


    if ($('#adress').val() == '') {
        $('#adress').css('border-color', 'red');
        err = true;
    }
    else {
        $('#adress').css('border-color', 'rgb(169, 169, 169)');
    }
    if (err) {
        alert('Не заполнены поля')
        return false;
    }

    var reg = /[^0-9]/g;
    var phone = $('#phone').val();
    phone = phone.replace(reg, "");
    var name = $('#name').val();
    var adress = $('#adress').val();
    var details = $('#details').val();
    var codes = [];
    var codes_prices = [];

    $('.addselemets').find('.code-el').each(function () {
        codes.push($(this).text());
    });

    $('.addselemets').find('.price-el').each(function () {
        codes_prices.push($(this).text());
    });


    $.ajax({

        type: "POST",
        cache: false,
        url: 'classes/GetSend.php',
        data: {
            tip: 'send',
            phone: phone,
            name: name,
            adress: adress,
            details: details,
            codes: codes.join(' '),
            codes_prices: codes_prices.join(' ')
        },
        success: ( function (data) {
            alert(data);
            //alert('Письмо отправлено');
            //window.location.reload();

        })
    });
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


function print() {
    var id = '';
    var table = $('.simple-little-table');
    table.find($('input[type=checkbox]:checked')).each(function () {
        id = id + 'id[]=' + $(this).attr('id') + '&';
    });
    if (id.length == 0) {
        table.find($('input[type=checkbox]')).each(function () {
            id = id + 'id[]=' + $(this).attr('id') + '&';
        });
    }
    window.open("lib/print.php?" + id);
}

function changeGroups() {
    var arr = [];
    $('.simple-little-table').find('input[type=checkbox]:checked').each(function () {
        arr.push($(this).attr('id'));
    });
    if (arr.length == 0) {
        alert('Не выбрано ни одной записи');
    } else {
        $.ajax({
            type: "POST",
            cache: false,
            url: 'lib/changeStatus.php', // preview.php
            data: {
                id: arr,
                type: 'getgroups'
            }, // all form fields
            success: function (data) {
                // on success, post (preview) returned data in fancybox
                $.fancybox(data, {
                    afterClose: function () {
                        location.reload();
                    },
                    // fancybox API options
                    fitToView: true,
                    autoSize: true,
                    closeClick: false,
                    openEffect: 'none',
                    closeEffect: 'none'
                }); // fancybox
            } // success
        }); // ajax
    }//if
}

function copy() {
    var arr = [];
    $('.simple-little-table').find('input[type=checkbox]:checked').each(function () {
        arr.push($(this).attr('id'));
    });
    if (arr.length == 0) {
        alert('Не выбрано ни одной записи');
    } else {
        $.ajax({
            type: "POST",
            cache: false,
            url: 'ajax/copyApp.php',
            data: {
                id: arr,
                type: 'getgroups',
                thisGroup: getParameterByName('group')
            }, // all form fields
            success: function (data) {
                // on success, post (preview) returned data in fancybox
                $.fancybox(data, {
                    afterClose: function () {
                        location.reload();
                    },
                    // fancybox API options
                    fitToView: true,
                    autoSize: true,
                    closeClick: false,
                    openEffect: 'none',
                    closeEffect: 'none'
                }); // fancybox
            } // success
        }); // ajax
    }
}

function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
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
        data: data,
        success: function () {
            $.fancybox.close();
        }
    }); // ajax
}

function copyApp() {
    var save_form = $("#save_form");
    var data = save_form.serializeArray();
    $.ajax({
        type: "POST",
        cache: false,
        url: 'ajax/copyApp.php',
        data: data,
        success: function (data) {
            $.fancybox.close();
        }
    }); // ajax
}
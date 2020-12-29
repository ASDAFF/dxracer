$(function () {


    $("#grid_coefficients_form input").inputmask("Regex", { regex: "[0-9.]{5}" });
    $('#generalTable').DataTable({
        "language": {
            "lengthMenu": "Показать _MENU_ записей на страницу",
            "zeroRecords": "Не найдено",
            "info": "Показано _PAGE_ из _PAGES_",
            "search": "Поиск:",
            "loadingRecords": "Загрузка...",
            "processing": "Ожидайте...",
            "paginate": {
                "next": "Вперед",
                "previous": "Назад"
            }
        },
        paging: false,
        filter: false

    });

    $('#generalTable input[type=number]').keydown(function (e) {
        switch (e.which) {
            case 37: // left
                break;

            case 38: // up
                $(this).closest('tr').prev('tr').find("input[name*='new_recalc_price[']").focus();
                break;

            case 39: // right
                break;

            case 40: // down
                $(this).closest('tr').next('tr').find("input[name*='new_recalc_price[']").focus();
                break;

            default:
                return; // exit this handler for other keys
        }
        e.preventDefault(); // prevent the default action (scroll / move caret)
    });
    $('.input-group-btn').on('click', function () {
        var $model = $(this).closest('tr').attr('id');
        var $price = $(this).parent().parent().find('input').val();
        $.ajax({
            type: "post",
            url: "ajax.php",
            data: 'action=handPrice&model=' + $model + '&price=' + $price,
            async: false,
            success: function (data) {
                var result = $.parseJSON(data);

                $('tr#' + $model).css('background-color', result.color);
            },
            error: function () {
                alert('Ошибка при обновлении цены')
            }
        }
        );

    });


    $('#update_all_price').on('click', function () {
        $.ajax({
            type: "post",
            url: "ajax.php",
            data: 'action=saveToLog',
            async: false,
            error: function () {
                alert('Ошибка при логировании цены')
            }
        }
        );
        //
        // $.ajax({
        //         type: "post",
        //         url: "https://maxwatches.ru/scripts/update_price_by_update_price.php",
        //         async: false,
        //         success: function (data) {
        //             alert(data+"KW");
        //         },
        //         error: function () {
        //             alert('Ошибка при обновлении цены KW')
        //         }
        //     }
        // );
        //

        // $.ajax({
        //         type: "post",
        //         url: "https://kingwatches.ru/cron/update_price_by_update_price.php",
        //         async: false,
        //         success: function (data) {
        //             alert("kingwatches "+data);
        //         },
        //         error: function () {
        //             alert('Ошибка при обновлении цены KW')
        //         }
        //     }
        // );
        $.ajax({
            type: "post",
            url: "https://time-avenue.com/cron/update_price_by_update_price.php",
            async: false,
            success: function (data) {
                alert("time-avenue " + data);
            },
            error: function () {
                alert('Ошибка при обновлении цены time-avenue')
            }
        }
        );
    });

    $('[id^=spec-]').on('change', function () {
        var $model = $(this).closest('tr').attr('id');
        var $spec = 0;
        if ($(this).prop("checked")) {
            $spec = 1;
        } else {
            $spec = 0;
        }

        $.ajax({
            type: "post",
            url: "ajax.php",
            data: 'action=setSpecialoffer&model=' + $model + '&spec=' + $spec,
            async: false,
            success: function (data) {
                // alert(data);
            },
            error: function () {
                alert('Ошибка при сохранении цены')
            }
        }
        );
    })

    $('[id^=specms-]').on('change', function () {
        var $model = $(this).closest('tr').attr('id');
        var $spec = 0;
        if ($(this).prop("checked")) {
            $spec = 1;
        } else {
            $spec = 0;
        }

        $.ajax({
            type: "post",
            url: "ajax.php",
            data: 'action=setSpecialofferMS&model=' + $model + '&spec=' + $spec,
            async: false,
            success: function (data) {
                // alert(data);
            },
            error: function () {
                alert('Ошибка при сохранении цены')
            }
        }
        );
    })


    $('[id^=dnt_chn_price]').change(function () {
        var $model = $(this).closest('tr').attr('id');
        var $spec = 0;
        if ($(this).prop("checked")) {
            $spec = 1;
        } else {
            $spec = 0;
        }

        $.ajax({
            type: "post",
            url: "ajax.php",
            data: 'action=dnt_chn_price&model=' + $model + '&spec=' + $spec,
            async: false,
            success: function (data) {
                // alert(data);
            },
            error: function () {
                alert('Ошибка')
            }
        }
        );
    })


    $('form[name=dontChangePriceList_form]').on('submit', function (e) {
        e.preventDefault();
        var form_data = $('form[name=dontChangePriceList_form]').serialize();
        $.ajax({
            type: "post",
            url: "ajax.php",
            data: form_data + '&action=dontChangePriceList',
            async: false,
            success: function (data) {
                console.log(data);
                location.reload();
            },
            error: function () {
                alert('Ошибка')
            }
        }
        );
    });




    $('#save_new_price').on('click', function () {
        var data = $('form#all').serialize();
        $.ajax({
            type: "post",
            url: "ajax.php",
            data: data + '&action=setAllHandPrice',
            async: false,
            success: function (data) {
                alert(data);
            },
            error: function () {
                alert('Ошибка при сохранений цены')
            }
        }
        );
    })

    $("#show_history_form").submit(function (event) {
        event.preventDefault();
        $.ajax({
            type: "post",
            url: "ajax.php",
            data: $(this).serialize(),
            async: false,
            success: function (data) {
                if (data.length == 0) {
                    $('#showHistory .modal-body').empty();
                    $('#showHistory .modal-body').append('Не найдено');
                } else {
                    $('#showHistory .modal-body').empty();
                    $('#showHistory .modal-body').append(data);
                }
            },
            error: function () {
                alert('Ошибка')
            }
        }
        );
    })

    $("#grid_coefficients_form").submit(function (event) {
        event.preventDefault();
        $.ajax({
            type: "post",
            url: "ajax.php",
            data: $(this).serialize() + "&action=gridСoefficients",
            async: false,
            success: function (data) {
                alert('Сохранено');
            },
            error: function () {
                alert('Ошибка')
            }
        }
        );
    });

    $("button.day_of_week").click(function () {
        var id = $(this).attr('data-time');
        var time = $('input#time_' + id).val();
        var active = 0;
        if ($(this).hasClass('active')) {
            active = 0;
        } else {
            active = 1;
        }

        $.ajax({
            type: "post",
            url: "ajax.php",
            data: "action=setSchedule&id=" + id + "&time=" + time + "&active=" + active,
            async: false,
            error: function () {
                alert('Ошибка')
            }
        }
        );

    }
    );


    $('#recalcByCoef').on('click', function () {
        $.ajax({
            type: "post",
            url: "index.php",
            data: 'hand_recalc=1',
            async: false,
            success: function (data) {
                alert('Пересчитано ' + data);
                console.log(data);
                location.reload();
            },
            error: function () {
                alert('Ошибка')
            }
        }
        );
    })

    $("#startHandUpdate").click(function () {
        var r = confirm("Вы уверены?");
        if (r == true) {
            $.ajax({
                type: "post",
                url: "ajax.php",
                data: "action=startHandUpdate",
                async: true,
                success: function (data) {
                    alert('Парсинг запущен ждите письма на почту');
                    console.log(data);
                },
                error: function () {
                    alert('Ошибка')
                }
            }
            );
        }
    });


});
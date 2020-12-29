$(function () {
    getKernelTable();
    var $contextMenu = $("#contextMenu");

    $("body").on("click", function () {
        $contextMenu.hide();
    });


    $("body").on("contextmenu", "table tr", function (e) {
        $('#discard_form input[name="model_id"]').val($(this).attr('id'));
        $('#return_form input[name="model_id"]').val($(this).attr('id'));
        $('#editPosition input[name="model_id"]').val($(this).attr('id'));
        $('#editPositionPrice input[name="model_id"]').val($(this).attr('id'));
        if ($(this).hasClass('discard')) {

            $('#aDiscard').parent().addClass('disabled');
            $('#aReturn').parent().addClass('disabled');


            $('#aDiscard').off();
            $('#aReturn').off();

        } else {
            $('#aDiscard').off();
            $('#aReturn').off();
            $('#aDiscard').parent().removeClass('disabled');
            $('#aReturn').parent().removeClass('disabled');
            $('#aDiscard').bind('click', function () {
                $('#discard').modal('show');
            });


            $('#aReturn').bind('click', function () {
                $('#return').modal('show');
            });
        }

        $('#aEditPositionPrice').bind('click', function () {
            $('#editPositionPrice').modal('show');
        });

        if ($(this).hasClass('sale') || $(this).hasClass('shipment') || $(this).hasClass('discard')) {
            $('#aEdit').parent().addClass('disabled');
            $('#aEdit').off();
        } else {
            $('#aEdit').parent().removeClass('disabled');
            $('#aEdit').bind('click', function () {
                $('#editPosition').modal('show');
            });
        }


        if (!($(this).hasClass('sale') || $(this).hasClass('shipment'))) {
            $('#aReturn').parent().addClass('disabled');
            $('#aReturn').off();
        } else if ($(this).hasClass('sale') || $(this).hasClass('shipment')) {
            $('#aReturn').parent().removeClass('disabled');
            $('#aReturn').bind('click', function () {
                $('#return').modal('show');
            });

        }

        if ((!$(this).hasClass('shipment'))) {
            $('#aEditPositionPrice').parent().addClass('disabled');
            $('#aEditPositionPrice').off();
        } else {
            $('#aEditPositionPrice').parent().removeClass('disabled');
            $('#aEditPositionPrice').on();
        }

        $contextMenu.css({
            display: "block",
            left: e.pageX,
            top: e.pageY
        });
        return false;
    });

    $contextMenu.on("click", "a", function () {
        $contextMenu.hide();
    });


    $("[data-toggle='tooltip']").tooltip();

    $(".search").keyup(function () {
        var searchTerm = $(".search").val();
        var listItem = $('#kernelTable tbody').children('tr');
        var searchSplit = searchTerm.replace(/ /g, "'):containsi('")

        $.extend($.expr[':'], {
            'containsi': function (elem, i, match, array) {
                return (elem.textContent || elem.innerText || '').toLowerCase().indexOf((match[3] || "").toLowerCase()) >= 0;
            }
        });

        $("#kernelTable tbody tr").not(":containsi('" + searchSplit + "')").each(function (e) {
            $(this).attr('visible', 'false');
        });

        $("#kernelTable tbody tr:containsi('" + searchSplit + "')").each(function (e) {
            $(this).attr('visible', 'true');
        });

        var jobCount = $('#kernelTable tbody tr[visible="true"]').length;
        $('.counter').text(jobCount + ' item');

        if (jobCount == '0') {
            $('.no-result').show();
        } else {
            $('.no-result').hide();
        }
    });


    $("#discardMode").change(function () {
        if ($(this).prop('checked')) {
            alert("Выберите позицию");
            $("#kernelTable tbody").css('cursor', 'pointer')
            $("#kernelTable tbody tr").bind('click', function () {
                $('#discard').modal('show');
                $('#discard_form input[name="model_id"]').val($(this).attr('id'));
            })
        } else {
            $("#kernelTable tbody").css('cursor', 'auto');
            $("#kernelTable tbody tr").unbind('click');
            $('#discard_form input[name="model_id"]').val();
        }
    });

    $("#returnMode").change(function () {
        if ($(this).prop('checked')) {
            alert("Выберите позицию");

            $("#kernelTable tbody tr").each(function (e) {

                if ($(this).css('background-color') == 'rgb(255, 204, 204)' || $(this).css('background-color') == 'rgb(255, 255, 0)') {
                    $(this).attr('visible', 'true');
                } else {
                    $(this).attr('visible', 'false');
                }
            });
            $("#kernelTable tbody").css('cursor', 'pointer')
            $("#kernelTable tbody tr").bind('click', function () {
                $('#return').modal('show');
                $('#return_form input[name="model_id"]').val($(this).attr('id'));
            })
        } else {
            $("#kernelTable tbody tr").each(function (e) {
                $(this).attr('visible', 'true');

            });
            $("#kernelTable tbody").css('cursor', 'auto');
            $("#kernelTable tbody tr").unbind('click');
            $('#return_form  input[name="model_id"]').val();

        }
    });


    $('#re_ordering').on('show.bs.modal', function (e) {
        $.ajax({
            type: "post",
            url: "actions.php",
            data: "action=getDateReOrder",
            success: function (text) {
                $("#date_from").val(text);
                $("#date_to").val(moment().format('DD.MM.YYYY HH:mm'));
            }
        })
    });

    $('#date_from').datetimepicker({
        locale: 'ru'
    });
    $('#date_to').datetimepicker({
        useCurrent: true,
        locale: 'ru'
    });
    $("#date_from").on("dp.change", function (e) {
        $('#date_to').data("DateTimePicker").minDate(e.date);
    });
    $("#date_to").on("dp.change", function (e) {
        $('#date_from').data("DateTimePicker").maxDate(e.date);
    });


    $("#lastReorder").change(function () {
        if ($(this).prop('checked')) {
            $("#date_from").prop("disabled", "true");
            $.ajax({
                type: "post",
                url: "actions.php",
                data: "action=getDateReOrder",
                success: function (text) {
                    $("#date_from").val(text);
                    $("#date_to").val(moment().format('DD.MM.YYYY HH:mm'));
                }
            })
        } else {
            $("#date_from").prop("disabled", "");
        }
    });


    $.ajax({
        type: "post",
        url: "actions.php",
        data: 'action=getAutoUpdateStatus',
        success: function (text) {
            if (text == 1) {
                $("#activateAutoUpdate").prop('checked', true);
            } else {
                $("#activateAutoUpdate").prop('checked', false)
            }
        },
        error: function () {
            alert('Ошибка при получении режима автообновления активации режима')
        }
    });

    $('.startUpdate').on('click', function () {
        // $.ajax({
        //     type: "post",
        //     url: "remote_cron/gen_auto_update_files.php?update=1",
        //     success: function (text) {
        //         alert("Обновление запушено");
        //     },
        //     error: function () {
        //         alert('Ошибка при запуске автообновления')
        //     }
        // });

        // $.ajax({
        //     type: "post",
        //     url: "http://9pm.su/cron/updateNal.php",
        //     success: function (text) {
        //         alert(text);
        //     }
        //     // error: function () {
        //     //     alert('Ошибка при запуске автообновления')
        //     // }
        // })

        // $.ajax({
        //     type: "post",
        //     url: "https://kingwatches.ru/cron/updateNal.php",
        //     success: function (text) {
        //         alert("kingwatches "+text);
        //     },
        //     error: function () {
        //         alert('kingwatches Ошибка')
        //     }
        // });
        $.ajax({
            type: "post",
            url: "https://time-avenue.com/cron/updateNal.php",
            asycn: false,
            success: function (text) {
                alert("time-avenue " + text);
            },
            error: function () {
                alert(' time-avenue Ошибка')
            }
        })

    });


    $("#closeMonth").on("click", function () {
        if (confirm('Закрыть месяц?')) {
            // window.location ="all_exel.php";
            // window.open("statistic.php?exel=1");
            $.ajax({
                type: "post",
                url: "actions.php",
                data: 'action=closeSklad',
                success: function (text) {
                    if (text > 0) {
                        alert('Месяц закрыт');
                        getKernelTable();
                        window.location = "all_exel.php?id=" + text;
                    } else {
                        alert('Ошибка');
                    }
                },
                error: function () {
                    alert('Ошибка')
                }
            })
        }
    })

    $("#sales textarea").bind('input propertychange', function () {
        var $form = $(this).closest('form');
        $('#sales #couriers_list').empty();
        $.ajax({
            type: "post",
            url: "actions.php",
            data: 'action=getParcingCourier&data=' + $(this).val(),
            success: function (text) {
                var result = jQuery.parseJSON(text);
                if (result.result == 1 || result == 1) {
                    $form.find('.alert-danger').hide("slow");
                    $form.find('.alert-success').find('span').html(result.text);
                    $form.find('.alert-success').show("slow");


                    $.each(result.data, function (k, val) {
                        if (k != '0') {
                            $('#sales #couriers_list').append('' +
                                '<div class="form-group">' +
                                '<div class="input-group input-group-sm">' +
                                '<input class="form-control" name="data_courier[' + k + ']" value="' + val + '" disabled>' +
                                '<input required type="number" min="0" class="form-control" name="price_courier[' + val + ']" value="">' +
                                '</div>' +
                                '</div>  ');
                        }
                    })
                    $('#setCourierListPrice').modal('toggle');

                } else {
                    $form.find('.alert-success').hide("slow");
                    $form.find('.alert-danger').find('span').html(result.text);
                    $form.find('.alert-danger').show("slow");
                }


            },
            error: function () {
                alert('Ошибка')
            }
        })

    });


    $("#activateAutoUpdate").change(function () {
        if ($(this).prop('checked')) {
            $.ajax({
                type: "post",
                url: "actions.php",
                data: 'action=setAutoUpdateStatus&data=1',
                success: function (text) {
                    alert('Режим автобновления активирован');
                },
                error: function () {
                    alert('Ошибка при активации режима')
                }
            })
        } else {
            $.ajax({
                type: "post",
                url: "actions.php",
                data: 'action=setAutoUpdateStatus&data=0',
                success: function () {
                    alert('Режим автобновления деактивирован')
                },
                error: function () {
                    alert('Ошибка при активации режима')
                }
            })
        }
    });

    $("#showFullTable").change(function () {
        if ($(this).prop('checked')) {
            $('#kernelTable').find('.hidden').removeClass('hidden', 1000);
            $('#kernelTable').css('width', '90%')
        } else {
            $('#kernelTable').css('width', '57%')
            $('#kernelTable th:nth-child(9),#kernelTable th:nth-child(10),#kernelTable th:nth-child(11),#kernelTable th:nth-child(12)').addClass('hidden');
            $('#kernelTable td:nth-child(9),#kernelTable td:nth-child(10),#kernelTable td:nth-child(11),#kernelTable td:nth-child(12)').addClass('hidden');
        }
    });

    $("form").submit(function (event) {
        // cancels the form submission
        event.preventDefault();
        var $form = $(this);
        if ($(this).prop("id") == "re_ordering_form") {
            var disabled = $form.find(':input:disabled').removeAttr('disabled');
            if (confirm('Учесть как дату дозаказа?')) {
                window.location = "re-ordering_exel.php?save=1&" + $(this).serialize();
            } else {
                window.location = "re-ordering_exel.php?" + $(this).serialize();
            }
            disabled.attr('disabled', 'disabled');
        } else if ($(this).prop("id") == "sellPeriod_form") {
            window.location = "full-ordering_exel.php?" + $(this).serialize();
        } else {
            error = false;
            if ($(this).prop("id") == "sales_form") { //проверяем только форму при внесении продаж
                $("#couriers_list input").each(function () {
                    if ($(this).val() == '') {
                        $(this).addClass('alert-danger');
                        error = true;
                    }

                })


                if (error) {
                    return false;
                }
            }
            $.ajax({
                type: "post",
                url: "actions.php",
                data: $(this).serialize(),
                success: function (text) {
                    var result = jQuery.parseJSON(text);
                    if (typeof result != 'object') {
                        result = 1;
                    }
                    if (result.result == 1 || result == 1) {
                        $form.find('.alert-danger').hide("slow");
                        $form.find('.alert-success').find('span').html(result.text);
                        $form.find('.alert-success').show("slow");
                        $form.find('textarea').val('');
                        if ($("#returnMode").prop('checked')) {
                            $("#returnMode").prop('checked', false)
                        }
                        if ($("#discardMode").prop('checked')) {
                            $("#discardMode").prop('checked', false)
                        }
                        // $modalFormID = $form.closest('.modal').prop('id');
                        // $('#' + $modalFormID).modal('toggle');

                        getKernelTable();
                    } else {
                        if (typeof result == 'object') {
                            $form.find('.alert-success').hide("slow");
                            $form.find('.alert-danger').find('span').html(result.text);
                            $form.find('.alert-danger').show("slow");
                        } else {
                            $form.find('.alert-success').hide("slow");
                            $form.find('.alert-danger').find('span').html(text);
                            $form.find('.alert-danger').show("slow");
                        }
                    }

                }
            });
        }
    });

    /**invoice***/

    $('#by_invoice').on('change', function () {
        if ($(this).is(':checked')) {
            $('label[for="provider"]').hide();
            $('label[for="invoice"]').show();
            $('input#provider').val('');
        } else {
            $('label[for="provider"]').show();
            $('label[for="invoice"]').hide();
            $('#invoice').val(0);
        }
    });

});


function getKernelTable() {
    $('#kernelTable').empty();
    $.ajax({
        type: "post",
        url: "actions.php",
        data: "action=getKernelTable",
        success: function (data) {
            $('#kernelTable').append(data);
            if (!$("#showFullTable").prop('checked')) {
                $('#kernelTable th:nth-child(9),' +
                    '#kernelTable th:nth-child(10),' +
                    '#kernelTable th:nth-child(11),' +
                    '#kernelTable th:nth-child(12),' +
                    '#kernelTable th:nth-child(13),' +
                    '#kernelTable td:nth-child(9),' +
                    '#kernelTable td:nth-child(10),' +
                    '#kernelTable td:nth-child(11),' +
                    '#kernelTable td:nth-child(12),' +
                    '#kernelTable td:nth-child(13)'
                ).addClass('hidden');
            }
        }
    });
}



function logout() {

    // To invalidate a basic auth login:
    //
    // 	1. Call this logout function.
    //	2. It makes a GET request to an URL with false Basic Auth credentials
    //	3. The URL returns a 401 Unauthorized
    // 	4. Forward to some "you-are-logged-out"-page
    // 	5. Done, the Basic Auth header is invalid now

    $.ajax({
        type: "GET",
        url: "/t/sklad/logout.php",
        async: false,
        username: "logmeout",
        password: "123456",
        headers: {
            "Authorization": "Basic xxx"
        }
    })
        .done(function () {
            // If we don't get an error, we actually got an error as we expect an 401!
        })
        .fail(function () {
            // We expect to get an 401 Unauthorized error! In this case we are successfully
            // logged out and we redirect the user.
            window.location = "/t/sklad/";
        });

    return false;
}
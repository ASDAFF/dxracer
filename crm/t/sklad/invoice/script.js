$(function () {
    $('.tooltip_el').tooltip({container: 'body'});

    $('#edit_comment').on('shown.bs.modal', function(e) {
        var id_invoice = $(e.relatedTarget).attr('data-id');
        var text = $(e.relatedTarget).attr('data-text');
        $(this).find('input[name="id_invoice"]').val(id_invoice);
        $(this).find('textarea').text(text);
        console.log();
    });

    $( document ).ajaxError(function( event, request, settings ) {
        alert('Ошибка ajax '+ settings.url);
    });

    $("form").submit(function (event) {
        // cancels the form submission
        event.preventDefault();
        var $form = $(this);
        $.ajax({
            type: "post",
            url: "/t/sklad/actions.php",
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

                }

            }
        });

    });


    $('body').on('hide.bs.modal', function (event) {
        location.reload();
    });

    $('input[name="two_col"]').on('change',function () {
       if($(this).is(':checked')){
           $('a.export').each(function () {
              $(this).attr('href',$(this).attr('href')+'&two=1')
           });
       }else{
           $('a.export').each(function () {
               var str = $(this).attr('href');
               var res = str.replace("&two=1", "");
               $(this).attr('href',res);
           });
       }
    });

    $('.not_obtained').on('click',function () {
        var tr = $(this);
        var r = confirm("Установить статус 'Не пришли'");
        if (r == true) {
            $.ajax({
                type: "post",
                url: "ajax.php",
                data: "id="+$(this).attr('data-id')+"&action=not_obtained",
                success: function (text) {
                    if(text==1){
                        var tr_parent = tr.closest('tr');
                        tr_parent.addClass('alert-danger');
                        tr_parent.find('td.status').text('Не получены');
                        tr.remove();
                    }else{
                        alert('Ошибка');
                    }

                }
            });
        }
    });
});


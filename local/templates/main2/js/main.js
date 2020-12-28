$(document).ready(function () {
    $('.feed-form-box label').click(function () {
        var el = $(this);
        el.children("i").removeClass('fa-star-o').addClass('fa-star')
        el.prevAll("label").children("i").removeClass('fa-star-o').addClass('fa-star');
    })
    $('#feedbackForm').submit(function () {
        var msg = $('#feedbackForm').serialize();
        $.ajax({
            type: 'POST',
            url: '/ajax/FeedBacks.php',
            data: msg,
            success: function (data) {
                $('.ressult').html(data);
                setTimeout(function () { window.location.reload(); }, 3000);
            },
            error: function (xhr, str) {
                alert('Возникла ошибка: ' + xhr.responseCode);
            }
        });
    })



    $("#width").text($(window).width());
    $("#height").text($(window).height());
    if ($(window).width() < 1601 && $(window).width() > 1200) {
        $('#bg-catalog-page').addClass("bg-catalog-page");
    }
})

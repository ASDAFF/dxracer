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

	$("input[name='form_text_2']").mask("+7(999) 999-9999");
	$(".js-f-phone").mask("+7(999) 999-9999");

    $(".js-add").on("click", function(e) {
	ym(70338997,'reachGoal','cart');
	gtag('event', 'send', { 'event_category': 'cart', 'event_action': 'add' });
	console.log("add_cart");
    });
    $(".phone-footer a").on("click", function(e) {
	ym(70338997,'reachGoal','phone');
    });
    $(".phone-link").on("click", function(e) {
	ym(70338997,'reachGoal','phone');
    });
    $(".authorize-submit-cell input").on("click", function(e) {
	ym(70338997,'reachGoal','lk');
    });

    $(".btn-ch").on("click", function(e) {
	ym(70338997,'reachGoal','cart');
	gtag('event', 'send', { 'event_category': 'cart', 'event_action': 'add' });
	console.log("add_cart");
    });
    
})

$(document).ready(function () {
    $('#title-search .form-control-feedback').click(function(){
        if($(this).siblings('input').val()==''){
            $(this).siblings('input').focus();
            return ;
        }
        $(this).closest('form').submit();
    })
})

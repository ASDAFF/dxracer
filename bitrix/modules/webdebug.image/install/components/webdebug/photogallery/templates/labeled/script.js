/*!
 * PrettyGallery Plugin
 * http://phpdesigner.in.ua
 *
 * author: Maxim Nikifrov
 */
(function ($) {
    $.fn.prettygallery = function () {        
        return this.each(function () {
            var obj = $(this);
            images_count = obj.find('img').length;
            
            obj.append('<div class="pg_block"></div>');
            obj.find('.pg_block').append(obj.find('img')).append('<div class="pg_post"></div>');
            obj.append('<div class="pg_buttons"></div><span class="pg_prev_button"></span><span class="pg_next_button"></span>');
            for (i = 0; i < images_count; i++){
              obj.find('.pg_buttons').append('<span></span>');
            }
            
            var block = obj.find('.pg_block');
            var post = obj.find('.pg_post');
            var buttons = obj.find('.pg_buttons');
            var next = obj.find('.pg_next_button');
            var prev = obj.find('.pg_prev_button');  
            var images = block.find('img');
            var toggle_buttons = buttons.find('span');  
            
            block.find('img:not(:first-child)').css({opacity : 0});
            buttons.find('span:first-child').addClass('active');
            post.text(block.find('img:visible').attr('title'));
            
            function slide_image (index){
							toggle_buttons.removeClass('active');
							toggle_buttons.eq(index).addClass('active');
							images.not(':eq('+index+')').animate({opacity : 0 },500);
							images.eq(index).animate({opacity : 1 },500);
							post.fadeTo(200, 0, function(){
								$(this).text(images.eq(index).attr('title')).fadeTo(200, 1);
							});
            }
            
            toggle_buttons.click(function(){
							var index = $(this).index();
							slide_image(index);
            });
            
            prev.click(function(){
							var index = buttons.find('span').filter('.active').index();
							if (index != 0){
								index--;        
							} else {
								index = images_count - 1;
							}
							slide_image(index);
            })
            
            next.click(function(){
							var index = buttons.find('span').filter('.active').index();
							if (images_count - 1 != index){
								index++;        
							}else{
								index = 0;
							}
							slide_image(index);
            })                        
        });
    };
})(jQuery);
$( document ).ready(function() {
	//MAIN AJAX
	$('.alfa1c-files-send').click(function(){
			count = 0;
			var pics= new Array();
			$('.alfa1c-ready span.errors,.alfa1c-ready span.sccss').empty();
			$('.alfa1c-ready span.sccss').html('<?=GetMessage("WORKING")?>');
			$( ".alfa1c-files input:checked" ).each(function() {
				pics.push($(this));
			});
			var summ = pics.length;
			//console.log(pics);
			finishCallback = function(count){
				$('.alfa1c-ready span.sccss').html('<?=GetMessage("FILE_COUNT")?>' + count);
			}

			function send(){
			 var api_key ='<?=$api_key;?>';
			 var png_quality ='<?=$png_quality?>';
			 var jpg_quality ='<?=$jpg_quality?>';
			        if(pics.length) {
					 count++;
					 var src = pics[0][0].value;
				 	 var src_old = pics[0][0].alt;
					 var file_name = pics[0][0].title;
				$('.alfa1c-ready span.sccss').html('<?=GetMessage("FILE_RUNNING")?>' + count + ' <?=GetMessage("FILE_FROM")?> ' + summ);
				console.log('<?=GetMessage("FILE_RUNNING")?>' + count + ' <?=GetMessage("FILE_FROM")?> ' + summ);
			            $.ajax({
			                url: '/bitrix/admin/optiimg_execute.php',
					data:{ 
						action: "send",
						src: src,
						api_key:api_key,
						png_quality:png_quality,
						jpg_quality:jpg_quality,
					},
			        complete: function(data){
								pics.shift()
								var res = jQuery.parseJSON(data.responseText)
									if(res.status =='ok'){
										$.post( "/bitrix/admin/optiimg_execute.php",{
											src:res.src,
											src_old:src_old,
											file_name:file_name,
											action:'save'
										}, function( data ) {
											
											console.log('<?=GetMessage("FILE_COUNT")?>' + count);
											send();
										}) 
									}
									else if(res.status =='notice'){
										console.log(res.notice_text);
										send();
										
									}
									else{
										if(res.error_text !='key_err' && res.error_text !='key_expired_or_not_existing_err'){
											$('.alfa1c-ready span.errors').append(res.error_text + '<br/>');
											send();
										}
										else{
											$('.alfa1c-ready span.errors').append(res.error_text + '<br/>');
										}
									}
											
			                }
			            });
			        }
			         
			        else {finishCallback(count)}
			    }   
			             
			  send();

			  if(count == '0'){
				$('.alfa1c-ready span.errors').html('<?=GetMessage("FILES_NOT_FOUND")?>');
			  }
			   
	})
	//SHOW PREVIEW
	$('.alfa1c-files label').hover(
		  function() {
		   	 var src ='http://' + $(this).find('input').val();
		  	 $(this).find('img').attr('src', src);
		   	 $(this).find('div.img').show();
		  }, function() {
		    	$(this).find('div.img').hide();
		  }
	);
	//CHECK UNCHECK ALL
	$(document).keypress(function(event){
		var keycode = (event.keyCode ? event.keyCode : event.which);
		if(keycode == '97'){
			$('.alfa1c-files input').prop('checked', true);
		}
			if(keycode == '115'){
			$('.alfa1c-files input').prop('checked', false);
		}
	});
});
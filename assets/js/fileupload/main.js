//this is the application.js file from the example code//
$(function () {
    'use strict';

    // Initialize the jQuery File Upload widget:
    $('#fileupload').fileupload();
    
    // Enable iframe cross-domain access via redirect option:
    $('#fileupload').fileupload(
        'option',
        'redirect',
        window.location.href.replace(
            /\/[^\/]*$/,
            './cors/result.html?%s'
            )
        );
            
           $('#download-files > .template-download > .add').each(function(e){
                             

                                alert(e);

                                

                                });
            
           

            
       

    if (window.location.hostname === 'perrot-julien.fr') {
       
        // Upload server status check for browsers with CORS support:
        if ($.ajaxSettings.xhr().withCredentials !== undefined) {
            $.ajax({
                url: 'admin/get_files',
                dataType: 'json', 
                
                success : function(data) {  
                    var fu = $('#fileupload').data('fileupload'), 
                    template;
                    fu._adjustMaxNumberOfFiles(-data.length);
                    template = fu._renderDownload(data)
                    .appendTo($('#fileupload .files'));
                    
                    // Force reflow:
                    fu._reflow = fu._transition && template.length &&
                    template[0].offsetWidth;
                    template.addClass('in');
                    $('#loading').remove();
                }  
         
                
            }).fail(function () {
                $('<span class="alert alert-error"/>')
                .text('Upload server currently unavailable - ' +
                    new Date())
                .appendTo('#fileupload');
            });
        }
    } else {
        // Load existing files:
        $('#fileupload').each(function () {
            var that = this;
            $.getJSON(this.action, function (result) {
                if (result && result.length) {
                    $(that).fileupload('option', 'done')
                    .call(that, null, {
                        result: result
                    });
                }
            });
        });
    }


    // Open download dialogs via iframes,
    // to prevent aborting current uploads:
    $('#fileupload .files a:not([target^=_blank])').live('click', function (e) {
        e.preventDefault();
        $('<iframe style="display:none;"></iframe>')
        .prop('src', this.href)
        .appendTo('body');
    });


    $("#showFormLoad").live("click",function(){
        $("#formLoadImg").fadeIn(1000);
        $("#showFormLoad").parent().fadeOut(1000);
    });
    
    $("#closeFormLoadImg").live("click",function(){
        $("#formLoadImg").fadeOut(1000);
        $("#showFormLoad").parent().fadeIn(1000);
    });
    
    
    	var pattern = /^[a-z0-9_-]+@[a-z0-9-]+\.[a-z]{2,6}$/i;
	var mail = $('#mail');

	mail.blur(function(){
		if(mail.val() != ''){
				if(mail.val().search(pattern) == 0){
					//$('#valid').text('Подходит');
				//	$('#submit').attr('disabled', false);
					mail.removeClass('error').addClass('success');
				}else{
				//	$('#valid').text('Не подходит');
			//		$('#submit').attr('disabled', true);
					mail.removeClass('success').addClass('error');
				}
			}else{
			//	$('#valid').text('Поле e-mail не должно быть пустым!');
				mail.addClass('error');
			//	$('#submit').attr('disabled', true);
			}
	});
        
        var name=$("#nameUser");
        
        name.blur(function(){
            
            if(name.val() != ''){
                name.removeClass('error').addClass('success');  
            }else{  
                name.removeClass('success').addClass('error');     
            }
            
        })
    
});
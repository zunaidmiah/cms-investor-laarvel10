/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 $('div[contenteditable="true"]').each(function( index ) {

        var content_id = $(this).attr('id');
        var editor_content = $('#'+content_id).html();
        var cont_length = $('#'+content_id).children().length;
       
        if(cont_length == 0 )
        {    
            $('#'+content_id).html('Click Here to edit Content');
        }
        CKEDITOR.inline( content_id, {
            on: {
                blur: function( event ) {
                    var data = event.editor.getData();
                   
                    $('#textarea-'+content_id).text(data);
                    /* var request = jQuery.ajax({
                        url: "/admin/cms-pages/inline-update",
                        type: "POST",
                        data: {
                            content : data,
                            content_id : content_id,
                            tpl : tpl
                        },
                        dataType: "html"
                    });
                    */

                }
            }
        } );

    });

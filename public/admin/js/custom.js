/*
 * Custom JS/jQuery file
 */

$(function(){
    
    //media_news_new JS
    $("#media_news_new, #media_news_edit").submit(function(event){
       
       //event.preventDefault();
       
       var redTitle             = $(".red-title").html();
       var headlineEditor       = $(".headlineEditor").html();
       var footerEditor         = $(".footerEditor").html();
       var contentEditor        = $(".contentEditor").html();
       
       $(this).find('input[name="title"]').val(redTitle); 
       $(this).find('input[name="heading"]').val(headlineEditor); 
       $(this).find('input[name="footer"]').val(footerEditor); 
       $(this).find('input[name="content"]').val(contentEditor);
       
    });
    
    //media_news Delete Multiple JS
    
    $(".deleteMultiple, .deleteAll").click(function(event)
    {
        if($(this).hasClass('deleteAll') == true){
            $('.deleteHidden').val('all')
        }else{
            $('.deleteHidden').val('')
        }
        
        //Submit media_news_list
        $(".selectionForm").submit();
        
    });
    
    $('input[name="selectionAll"]').change(function(){
        
        if($(this).is(':checked') == true){
            $('.selectionCheck').prop('checked', true);
        }else{
            $('.selectionCheck').prop('checked', false);
        }
        
    });
    
    $('.selectionCheck').change(function(){
        
        if($('.selectionCheck:checked').length == $('.selectionCheck').length){
            $('input[name="selectionAll"]').prop('checked', true);
        }else{
            $('input[name="selectionAll"]').prop('checked', false);
        }
        
    });
    
    $('.recordsPerPage').change(function(){

        var currentUrl = window.location.href;
        var regex = /limit=(\d+)/g;
        
        if(regex.test(currentUrl)){
            var newUrl = currentUrl.replace(regex, 'limit=' + $(this).val());
            window.location.href = newUrl;
        }else{
            var regexQues = /\?/g;
            if(regexQues.test(currentUrl)){
                
                if(/page=(\d+)/g.test(currentUrl)){
                    newUrl = currentUrl.replace(/page=(\d+)/g, 'limit=' + $(this).val());
                }
                
                window.location.href = newUrl;
                
            }else{
                var newUrl = currentUrl + '?limit=' + $(this).val();
                window.location.href = newUrl;
            }
            
        }
        //console.log(newUrl);
        
    });
    
    $('.newUrl').keyup(function(){
        
        if($(this).val().trim() == ''){
            $(this).closest('.form-group').addClass('has-error');
            $(this).closest('.form-group').find('.popover-validator').show();
        }else{
            $(this).closest('.form-group').removeClass('has-error');
            $(this).closest('.form-group').find('.popover-validator').hide();
        }
    });
    
    $('.web_scrapping_new_form').submit(function(event){
        
        var httpCHeckValue = httpcheckvalue2($('.newUrl').val());
        
        if( !checkURL2(httpCHeckValue) ){
            alert('Invalid URL entered');
            event.preventDefault();
        }
    });
    
    
    //selectNewsYear
    $('.selectNewsYear').change(function(){
        window.location.href = window.location.protocol 
                                    + "//" + window.location.host 
                                    + window.location.pathname 
                                    + '?year='+$(this).val();
    });
    
    //Publish Selected News
    $('.publishSelected').click(function(event){
        
        event.preventDefault();
        
        if($('.selectionCheck:checked').length > 0){
            var valueArray = $('.selectionCheck:checked').map(function(){
                return this.value;
            }).get();
            
            valueArray.join(',')
            window.location.href = window.location.protocol 
                                    + "//" + window.location.host 
                                    + '/admin/publishNews' 
                                    + '?publish='+valueArray;
        }
        
    });
    
});


function checkURL2(value) {
    //var urlregex = new RegExp("^(http|https|ftp)\://([a-zA-Z0-9\.\-]+(\:[a-zA-Z0-9\.&amp;%\$\-]+)*@)*((25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9])\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[1-9]|0)\.(25[0-5]|2[0-4][0-9]|[0-1]{1}[0-9]{2}|[1-9]{1}[0-9]{1}|[0-9])|([a-zA-Z0-9\-]+\.)*[a-zA-Z0-9\-]+\.(com|edu|gov|int|mil|net|org|biz|arpa|info|name|pro|aero|coop|museum|[a-zA-Z]{2}))(\:[0-9]+)*(/($|[a-zA-Z0-9\.\,\?\'\\\+&amp;%\$#\=~_\-]+))*$");
    var urlregex = /^(https?|ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(\#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i;
    if (urlregex.test(value)) {
        return true;
    }
    return false;
}


function httpcheckvalue2(value) {

    if (/(^|\s)((https?:\/\/)+\.?(:\d+)?(\/\S*)?)/gi.test(value)) {
        return value;
    } else {
        return 'http://' + value;
    }
}
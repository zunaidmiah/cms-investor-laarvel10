/*
 * Custom JS/jQuery file
 */

$(function(){
    
    //selectNewsYear
    $('.selectNewsYear').change(function(){
        window.location.href = window.location.protocol 
                                                + "//" + window.location.host 
                                                + window.location.pathname 
                                                + '?year='+$(this).val();
    });
    
});


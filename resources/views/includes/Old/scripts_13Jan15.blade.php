 <!--loading bootstrap js-->
    {{ HTML::script('js/jquery-1.9.1.js');}}
    {{ HTML::script('js/jquery-migrate-1.2.1.min.js');}}
    {{ HTML::script('js/jquery-ui.js');}}
    {{ HTML::script('vendors/bootstrap/js/bootstrap.min.js');}}
    {{ HTML::script('vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js');}}
    {{ HTML::script('js/html5shiv.js');}}
    {{ HTML::script('js/respond.min.js');}}
    {{ HTML::script('vendors/metisMenu/jquery.metisMenu.js');}}
    {{ HTML::script('vendors/slimScroll/jquery.slimscroll.js');}}
    {{ HTML::script('vendors/jquery-cookie/jquery.cookie.js');}}
    {{ HTML::script('js/jquery.menu.js');}}
    {{ HTML::script('vendors/jquery-pace/pace.min.js');}}
    
    <!--LOADING SCRIPTS FOR PAGE-->
    {{ HTML::script('vendors/bootstrap-datepicker/js/bootstrap-datepicker.js');}}
    {{ HTML::script('vendors/bootstrap-daterangepicker/daterangepicker.js');}}
    {{ HTML::script('vendors/moment/moment.js');}}
    {{ HTML::script('vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js');}}
    {{ HTML::script('vendors/bootstrap-timepicker/js/bootstrap-timepicker.js');}}
    {{ HTML::script('vendors/bootstrap-clockface/js/clockface.js');}}
    {{ HTML::script('vendors/bootstrap-colorpicker/js/bootstrap-colorpicker.js');}}
    {{ HTML::script('vendors/bootstrap-switch/js/bootstrap-switch.min.js');}}
    {{ HTML::script('vendors/jquery-maskedinput/jquery-maskedinput.js');}}
    {{ HTML::script('js/form-components.js');}}

    <!--LOADING SCRIPTS FOR PAGE-->
    {{ HTML::script('vendors/tinymce/js/tinymce/tinymce.min.js');}}
    {{ HTML::script('vendors/ckeditor/ckeditor.js');}}
    {{ HTML::script('js/content-editing-save.js');}}
    {{ HTML::script('js/ui-tabs-accordions-navs.js');}}
    <!--CORE JAVASCRIPT-->
    {{ HTML::script('js/main.js');}}
    {{ HTML::script('js/holder.js');}}
    
    <!-- Validation Engine -->
    {{ HTML::script('validationengine/js/languages/jquery.validationEngine-en.js');}}
    {{ HTML::script('validationengine/js/jquery.validationEngine.js');}}
    <script>
    $(document).ready(function(){
    $("#career-apply-form").validationEngine();
    $("#newuser").validationEngine();
    $("#changepass").validationEngine();
    
    
    });
    function updateMapAdd(id,type)
    {
        var add = $('#map_address').val();
        var src = "https://www.google.com/maps/embed/v1/place?key=AIzaSyC3bDbxNOKRdamYrBDlTrInjywsZUzkY44&q="+add;
        if(type == 'search')
        {
         
         
         $("#"+id).attr("src",src);
        }
        
         if(type == 'save')
        {
         $('#'+id).attr("src",src);
         $('#right-block1-content').val(add);
        }
    }
	
	function updateMapAddContact(addId,id,type)
    {
        var add = $('#'+addId).val();
        var src = "https://www.google.com/maps/embed/v1/place?key=AIzaSyC3bDbxNOKRdamYrBDlTrInjywsZUzkY44&q="+add;
        if(type == 'search')
        {
         
         
         $("#mapmodal_"+id).attr("src",src);
        }
        
         if(type == 'save')
        {
         $('#map_'+id).attr("src",src);
         $('#'+id).val(add);
        }
    }
    </script>
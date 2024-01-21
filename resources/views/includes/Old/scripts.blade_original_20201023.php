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
    {{ HTML::script('vendors/bootstrap-switch/js_1.7/bootstrap-switch.min.js');}}
    {{ HTML::script('vendors/jquery-maskedinput/jquery-maskedinput.js');}}
    {{ HTML::script('js/form-components.js');}}

    <!--LOADING SCRIPTS FOR PAGE-->
    {{ HTML::script('vendors/ckeditor/ckeditor.js');}}
    {{ HTML::script('vendors/ckfinder/ckfinder.js');}}
    {{ HTML::script('js/content-editing-save.js');}}
    {{ HTML::script('js/ui-tabs-accordions-navs.js');}}
    <!--CORE JAVASCRIPT-->
    {{ HTML::script('js/main.js');}}
    {{ HTML::script('js/holder.js');}}
    
    <!-- Validation Engine -->
    {{ HTML::script('validationengine/js/languages/jquery.validationEngine-en.js');}}
    {{ HTML::script('validationengine/js/jquery.validationEngine.js');}}
    {{ HTML::script('validationengine/js/jquery.validationEngine.js');}}
    
    <!-- Time Picker Javascript -->
    {{ HTML::script('vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js');}}
    {{ HTML::script('vendors/bootstrap-timepicker/js/bootstrap-timepicker.js');}}
    <!-- End of Time Picker Javascript -->
    <!-- Start of high chart -->
    {{ HTML::script('vendors/jquery-highcharts/highcharts.js');}}
    {{ HTML::script('vendors/jquery-highcharts/exporting.js');}}
    {{ HTML::script('js/chart-line-charts.js');}}
    <!-- End of high chart -->
    <script>
   /* CKFinder.setupCKEditor( null, { basePath : '/~yeelee72185perak/laravel/public/vendors/ckfinder/', rememberLastFolder : false } ) ; */
    
    $(document).ready(function(){
    $("#career-apply-form").validationEngine();
    $("#newuser").validationEngine();
    $("#changepass").validationEngine();
    $("#addvaccancy").validationEngine();
    $("#editvaccancy").validationEngine();
    
    /* For Bootstrap Switch */
  
  

   /*  $.fn.bootstrapSwitch.defaults.onText = 'ACTIVE';
    $.fn.bootstrapSwitch.defaults.offText = 'INACTIVE';
    $.fn.bootstrapSwitch.defaults.handleWidth = 'auto';
    $.fn.bootstrapSwitch.defaults.onColor = 'success';
    $.fn.bootstrapSwitch.defaults.offColor = 'danger';

    $('.make-switch input[type="checkbox"]').bootstrapSwitch();
    $('.make-switch input[type="checkbox"]').on('switchChange.bootstrapSwitch', function (event, state) {
        
        if(state == true)
        {
            $(this).val(1);
        }
        else
        {
           $(this).val(0);
        }
    }); */


    });
    /* This is for update price */
  $('.updatePrice').click(function() {
    $('.updatePrice i').addClass('fa-spin');
   var priceTickrData = $('#textarea-left-block1-content').val();
   
   
          $.ajax({
                   type: "POST",
                   url: "http://bursa.fareastholdingsbhd.com/admin/updatepriceticker",
                   dataType:'json',
				  // The key needs to match your method's input parameter (case-sensitive).
				  success: function(data){
                                      data['weekLow'] = Math.round(data['weekLow'] * 1000) / 1000;
                                      for(var key in data) {
                                          if(!isNaN(data[key])) {
                                              //data[key] = Math.round(data[key] * 100) / 100;
                                              if(data[key].toString().split('.')[1] && data[key].toString().split('.')[1].length == 1) {
                                              data[key] += '0';
                                              }
                                              //data[key] = Math.round(data[key] * 100) / 100;
                                          }
                                      }
                                      $('#prevclose').html(data.prevClose);
                                      $('#stockopen').html(data.open);
                                      $('#valtraded').html(data.valueTraded);
                                      $('#dayhigh').html(data.dayHigh);
                                       $('#daylow').html(data.dayLow);
                                      if(parseFloat(data.dayLow) != '')
                                      {
                                       $('#daylow').html(data.dayLow);
                                      }
                                      if(parseFloat(data.weekHigh) != '')
                                      {
                                        $('#weekhigh').html(data.weekHigh);
                                      }
                                      if(parseFloat(data.weekLow) != '')
                                      {
                                       $('#weeklow').html(data.weekLow);
                                      }
                                       if(parseFloat(data.volumeTraded) != '')
                                      {
                                       $('#voltraded').html(data.volumeTraded);
                                      }
                                      //$('#valtraded').html(data.open);
                                      //$('#noshareissued').html(data.open);
                                      //$('#parvalue').html(data.open);
                                      //$('#shareperlot').html(data.open);
                                      //$('#marketcap').html(data.open);
                                      $('#quotelastupdated').html(data.quotelastupdated);
                                      var blockCont = $('#left-block1-content').html();
                                      var dateUpCont = $('#left-block2-title').html();
                                      $('#textarea-left-block1-content').val(blockCont);
                                      $('#textarea-left-block2-title').val(dateUpCont);
                                      $('#corporategeneral').submit();
                                      $('.updatePrice i').removeClass('fa-spin');
                                      },
				  failure: function(errMsg) {
					  
                }
          });
    });  
  /* End of Update Price */
  
 
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
    
    $('.modal').on('shown.bs.modal', function (e) {
    $(this).find("*[contenteditable='false']").each(function () {
        var name;
        for (name in CKEDITOR.instances) {
            var instance = CKEDITOR.instances[name];
            if (this && this == instance.element.$) {
                instance.destroy(true);
            }
        }
        $(this).attr('contenteditable', true);
        CKEDITOR.inline(this);
    });
});



$('.nav-tabs').on('shown.bs.tab', 'a[data-toggle="tab"]', function (e) {
   
   $('.portlet-body').find("*[contenteditable='false']").each(function () {
        var name;
        for (name in CKEDITOR.instances) {
            var instance = CKEDITOR.instances[name];
            if (this && this == instance.element.$) {
                instance.destroy(true);
            }
        }
        $(this).attr('contenteditable', true);
        var contId = $(this).attr('id');
        CKEDITOR.inline(this, {
            on: {
                blur: function( event ) {
                   
                    var data = event.editor.getData();
                    
                    $('#textarea-'+contId).text(data);
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
})


$.fn.modal.Constructor.prototype.enforceFocus = function () {
    modal_this = this;
    $(document).on('focusin.modal', function (e) {
        if (modal_this.$element[0] !== e.target && !modal_this.$element.has(e.target).length
        // add whatever conditions you need here:
        &&
        !$(e.target.parentNode).hasClass('cke_dialog_ui_input_select') && !$(e.target.parentNode).hasClass('cke_dialog_ui_input_text')) {
            modal_this.$element.focus();
        }
    });
};

function div_val1(id1){
	var contt=$('#'+id1).html();
	$("#textarea_"+id1).val(contt); 
}


    </script>



<script type="text/javascript">


	// add multiple select / deselect functionality
	$("#checkall").click(function () {
		  $('.case').attr('checked', this.checked);
	});

	// if all checkbox are selected, check the selectall checkbox
	// and viceversa
	$(".case").click(function(){

		if($(".case").length == $(".case:checked").length) {
			$("#selectall").attr("checked", "checked");
		} else {
			$("#selectall").removeAttr("checked");
		}

	});

</script>
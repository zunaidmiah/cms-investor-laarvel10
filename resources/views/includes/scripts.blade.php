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
                   url: "http://bursa.majuperak.com/admin/updatepriceticker",
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

<script>
        $(document).on('click','#myTab li',function(){
            var classname = this.className;

            if(classname.search("main-cat") != -1){
                //createCookie('navCategories','main-cat',1);
                $.cookie('navCategories', 'main-cat',{ expires: 1, path: '/' });
            }
            if(classname.search("sub-cat") != -1){
                $.cookie('navCategories', 'sub-cat', { expires: 1, path: '/' });
                //createCookie('navCategories','sub-cat',1);
            }
        });








        $('.wholecheck').change(function() {
            if ($(this).prop('checked')) {
                $(this).parents().closest('table').find('.chkNumber').prop('checked', true);
            }
            else {
                $(this).parents().closest('table').find('.chkNumber').prop('checked', false);
            }
        });
        //$('.wholecheck').trigger('change');

        $('.newscheck').change(function() {
            if ($(this).prop('checked')) {
                $('.chkNews').prop('checked', true);
            }
            else {
                $('.chkNews').prop('checked', false);
            }
        });
        $('.newscheck').trigger('change');




   

    function createCookie(name,value,days) {
        if (days) {
            var date = new Date();
            date.setTime(date.getTime()+(days*24*60*60*1000));
            var expires = "; expires="+date.toGMTString();
        }
        else var expires = "";
        document.cookie = name+"="+value+expires+"; path=/";
    }

    function readCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for(var i=0;i < ca.length;i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1,c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
        }
        return null;
    }

    function eraseCookie(name) {
        createCookie(name,"",-1);
    }


    function updateMapAdd(id, type)
    {
        var add = $('#map_address').val();
        var src = "https://www.google.com/maps/embed/v1/place?key=AIzaSyCuGRp7Cn9FrtJXeZ2Kp_WqqieB7P18K88&q=" + add;
        if (type == 'search')
        {


            $("#" + id).attr("src", src);
        }

        if (type == 'save')
        {
            $('#' + id).attr("src", src);
            $(document).find('#right-block1-content').val(add);
            console.log('hello', $(document).find('#right-block1-content').val());
        }
    }

    function updateMapAddContact(addId, id, type, url)
    {
        var helper = null;
        if (typeof url === 'undefined') {

            var add = $('#' + addId).val();
            var src = "https://www.google.com/maps/embed/v1/place?key=AIzaSyCuGRp7Cn9FrtJXeZ2Kp_WqqieB7P18K88&q=" + add;
            helper = "com/maps/embed/v1/place?key=AIzaSyCuGRp7Cn9FrtJXeZ2Kp_WqqieB7P18K88&q=" + add;
            if (type == 'search')
            {


                $("#mapmodal_" + id).attr("src", src);
            }

            if (type == 'save')
            {
                $('#map_' + id).attr("src", src);
                $('#' + id).val(helper);
                $('.msuccess').removeClass(hide);
                window.scrollTo(0, 0);
            }
        } else {

            if (url != null) {

                if (url.search("google") != -1) {

                    var x = null;   /// equ = add
                    var srcc = null;

                    if (url.search("mid") == -1) { //url not contain mid


                        var arr = url.split('/');
                        var y = arr[5];

                        /*	 if url contains search country    */
                        if (y != null && y.search("@") == -1 && y.search("%") == -1 && y.search("data") == -1) {

                            x = y.replace(/\+/g, ' ').replace(/\,/g, ' ');

                        } else {
                            var subStr = url.match("@(.*)z");
                            var f = subStr[1];
                            var llz = f.split(',');
                            //longitude
                            var mlong = llz[0];
                            //latitude
                            var mlat = llz[1];
                            //zoom defult=6
                            var zo = 6;
                            if (llz[2] != null) {
                                zo = llz[2];

                            }
                            x = mlong + " " + mlat + " &zoom=" + zo;


                        }
                        srcc = "https://www.google.com/maps/embed/v1/place?key=AIzaSyC3bDbxNOKRdamYrBDlTrInjywsZUzkY44&q=" + x;
                        helper = "com/maps/embed/v1/place?key=AIzaSyC3bDbxNOKRdamYrBDlTrInjywsZUzkY44&q=" + x;
                        if (type == 'search')
                        {


                            $("#mapmodal_" + id).attr("src", srcc);
                        }

                        if (type == 'save')
                        {
                            //alert(srcc);
                            $('#map_' + id).attr("src", srcc);
                            $('#' + id).val(helper);
                            updateUrl(url);
                        }

                    } else {
                        //url contain mid

                        var subStr = url.match("mid(.*)");
                        var f = subStr[0];
                        var sr = "https://www.google.com/maps/d/embed?" + f;
                        srcc = sr;

                        var zzzo = srcc.match("google.(.*)");
                        helper = zzzo[1];
                        if (type == 'search')
                        {


                            $("#mapmodal_" + id).attr("src", srcc);
                        }

                        if (type == 'save')
                        {
                            //alert(srcc);
                            $('#map_' + id).attr("src", srcc);
                            $('#' + id).val(helper);
                            updateUrl(url);
                        }
                    }
                } else {
                    $('.mfail').removeClass('hide');
                    window.scrollTo(0, 0);
                }
            } else {
                $('.mfail').removeClass('hide');
                window.scrollTo(0, 0);
            }
        }//end else if => url defined





    }



    $('.modal').on('shown.bs.modal', function(e) {

        $(this).find("*[contenteditable='true']").each(function() {
            var name;
            for (name in CKEDITOR.instances) {
                var instance = CKEDITOR.instances[name];
                if (this && this == instance.element.$) {
                    instance.destroy(true);
                }
            }
            $(this).attr('contenteditable', true);

            var content_id = $(this).attr('id');

            var editor_content = $('#' + content_id).html();
            var cont_length = $('#' + content_id).children().length;

            if (cont_length == 0)
            {
                $('#' + content_id).html('Click Here to edit Content');
            }


            CKEDITOR.inline(this, {
                on: {
                    blur: function(event) {
                        //alert('hisdsd');

                        var data = event.editor.getData();
                        //alert('data is '+ data);

                        $('#textarea-' + content_id).text(data);
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

                    },
                    change: function(event) {
                      var data = event.editor.getData();
                      //alert('data is '+ data);

                      $(document).find('#copyrightdetail').text(data);
                    }
                }
            });


        });
    });

    $.fn.modal.Constructor.prototype.enforceFocus = function() {
        modal_this = this;
        $(document).on('focusin.modal', function(e) {


            if (modal_this.$element[0] !== e.target && !modal_this.$element.has(e.target).length
                    // add whatever conditions you need here:
                    &&
                    !$(e.target.parentNode).hasClass('cke_dialog_ui_input_select') && !$(e.target.parentNode).hasClass('cke_dialog_ui_input_text')) {
                modal_this.$element.focus();
            }
        });
    };

    /*$.fn.bootstrapSwitch.defaults.onText = 'active';
    $.fn.bootstrapSwitch.defaults.offText = 'inactive';
    $.fn.bootstrapSwitch.defaults.handleWidth = 'auto';
    $.fn.bootstrapSwitch.defaults.onColor = 'success';
    $.fn.bootstrapSwitch.defaults.offColor = 'danger';*/

    $('.make-switch input[type="checkbox"]').bootstrapSwitch();
    $('.make-switch input[type="checkbox"]').on('switchChange.bootstrapSwitch', function(event, state) {

        if (state == true)
        {
            $(this).val(1);
        }
        else
        {
            $(this).val(0);
        }


    });
    function div_val(id_info) {

        var textarea_html = $("#" + id_info).html();
        $("#textarea-" + id_info).html(textarea_html);
    }



    function updateUrl(r_url) {

        const path = "http://www.yeelee.com.my/";

        var BASE = path + 'updateUrl';

        var request = $.ajax({
            async: true,
            url: BASE,
            type: "POST",
            data: {
                required_url: r_url
            }
        });

        request.done(function(msg, status, xmlhh) {
            //alert(msg);
            if (msg == "success") {
                $('.msuccess').removeClass('hide');
                window.scrollTo(0, 0);
            }
            else {
                $('.mfail').removeClass('hide');
                window.scrollTo(0, 0);
            }
        });

    }
    function Addsavepage(FormName, Fieldvalue)
    {

        document.getElementById(FormName).preview.value = Fieldvalue;
        document.getElementById(FormName).submit();
        return true;
    }


    function deletepdf(id) {

        $.ajax({
            type: "POST",
            url: "{{url('/')}}/annual/deletecover",
            data: {'sementrasbannerid': id}, // serializes the form's elements.
            success: function(data)
            {
                $('#modal-edit-slidingbanner' + id + '').find('#succ').append(data);
                //$('#succ').append(data);
                //salert(data); // show response from the php script.
            }
        });

    }

    
    $('.deletesubcatid').click(function () {
       var page = $(this).attr('rel');
       var idloc = $(this).attr('rev');
       if ($('.chkSubNumber:checked').length) {
          var chkId = '';
          $('.chkSubNumber:checked').each(function () {
            chkId += $(this).val() + ",";
          });
          chkId = chkId.slice(0, -1);
        //  alert(chkId);
        $('#'+idloc+'').modal('show');
        $('#'+idloc+'').find('.form-actions').html('<form method="POST" action="'+page+'" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data"><input type="hidden" name="deletesubid[]" value="'+chkId+'"><div class="col-md-offset-4 col-md-8"> <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div></form>') 
        }
        else {
//alert("your message")
$('#'+idloc+'').modal('show');
        $('#'+idloc+'').find('.form-actions').html('<div  style="background-color: #F3DFE1;height: 65px;border-radius:5px;" ><p style="padding: 20px;font-weight: 500; color: darkred;">Please select at least one item for delete</p></div>')
         
        }
      
    });
</script>

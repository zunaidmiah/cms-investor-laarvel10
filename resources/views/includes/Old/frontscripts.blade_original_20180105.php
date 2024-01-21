 <!-- ======================= JQuery libs =========================== -->
        <!-- Always latest version of jQuery-->
       
<!--        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>  -->
        <script type="text/javascript">
        /* This is for update price */
  $('.updatePriceFront').click(function() {
    $('.updatePriceFront i').addClass('fa-spin');
     
   
          $.ajax({ 
                   type: "POST",
                   url: "http://bursa.fareastholdingsbhd.com/updatepricetickerfront",
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
                                      $('#price').html(data.price);
                                      $('#change').html(data.change);
                                      $('#percent').html(data.changePercentage);
                                      
                                      if(data.change > 0) {
                                          $('#price').parent().removeClass('alert-error').addClass('alert-success');
                                          $('#change').parent().removeClass('alert-error').addClass('alert-success');
                                          $('#change').prev().removeClass('icon-arrow-down').addClass('icon-arrow-up');
                                      } else {
                                          $('#price').parent().removeClass('alert-success').addClass('alert-error');
                                          $('#change').parent().removeClass('alert-success').addClass('alert-error');
                                          $('#change').prev().removeClass('icon-arrow-up').addClass('icon-arrow-down');
                                      }
                                      
                                      if(data.changePercentage > 0) {
                                          $('#percent').parent().removeClass('alert-error').addClass('alert-success');
                                          $('#percent').prev().removeClass('icon-arrow-down').addClass('icon-arrow-up');
                                      } else {
                                          $('#percent').parent().removeClass('alert-success').addClass('alert-error');
                                          $('#percent').prev().removeClass('icon-arrow-up').addClass('icon-arrow-down');
                                      }
                                      
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
                                      //var blockCont = $('#left-block1-content').html();
                                      //var dateUpCont = $('#left-block2-title').html();
                                      //$('#textarea-left-block1-content').val(blockCont);
                                      //$('#textarea-left-block2-title').val(dateUpCont);
                                      //$('#corporategeneral').submit();
                                      $('.updatePrice i').removeClass('fa-spin');
                                      $('.pricepicket-tbl').show();
                                      },
				  failure: function(errMsg) {
					  
                }
          });
    });  
    $('.updatePriceFront').trigger('click');
    </script>
  
        <!-- jQuery local-->      
        <script>window.jQuery || document.write('<script src="{{ url() }}/js/jquery-1.9.1.min.js"><\/script>')</script>
        <!-- jQuery ui-->    
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/jquery-ui.min.js"></script>
        <!--Nav-->
        <script type="text/javascript" src="{{ url() }}/js/nav/tinynav.js"></script> 
        <script type="text/javascript" src="{{ url() }}/js/nav/superfish.js"></script>                                             
        <!--Totop-->
        <script type="text/javascript" src="{{ url() }}/js/totop/jquery.ui.totop.js" ></script>  
        <!--Slide-->
        <script type="text/javascript" src="{{ url() }}/js/slide/camera.js" ></script>      
        <script type='text/javascript' src='{{ url() }}/js/slide/jquery.easing.1.3.min.js'></script>   
        <!--flexsilider-->
        <script type="text/javascript" src="{{ url() }}/js/carousel/jquery.flexslider.js"></script>    
        <!--Ligbox--> 
        <script type="text/javascript" src="{{ url() }}/js/fancybox/jquery.fancybox-1.3.1.js"></script>  
        <!--Scrollama--> 
        <script type="text/javascript" src="{{ url() }}/js/scrollama/TweenMax.min.js"></script>
        <script type="text/javascript" src="{{ url() }}/js/scrollama/jquery.superscrollorama.js"></script>    
        <!--Gallery Grid--> 
        <script type="text/javascript" src="{{ url() }}/js/gallery/modernizr.custom.26633.js"></script>
        <script type="text/javascript" src="{{ url() }}/js/gallery/jquery.gridrotator.js"></script>     
        <!--Minislider Team-->         
        <script type="text/javascript" src="{{ url() }}/js/team/modernizr.custom.63321.js"></script>
        <script type="text/javascript" src="{{ url() }}/js/team/jquery.catslider.js"></script> 
        <!--Filters-->
        <script type="text/javascript" src="{{ url() }}/js/filters/filters.js" ></script>                            
        <!-- Bootstrap.js-->
        <script type="text/javascript" src="{{ url() }}/js/bootstrap/bootstrap.js"></script>
        <!--fUNCTIONS-->
        <script type="text/javascript" src="{{ url() }}/js/jquery-func.js"></script>
        
        <script type="text/javascript" src="{{ url() }}/js/custom.js"></script>
         <!-- Start of high chart -->
    {{ HTML::script('vendors/jquery-highcharts/highcharts.js');}}
    {{ HTML::script('vendors/jquery-highcharts/exporting.js');}}
    {{ HTML::script('js/chart-line-charts.js');}}
    <!-- End of high chart -->
    
    	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		   (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new
		Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		
		   ga('create', 'UA-79192288-1', 'auto');
		   ga('send', 'pageview');
		
		</script>
        
        <!-- ======================= End JQuery libs =========================== -->

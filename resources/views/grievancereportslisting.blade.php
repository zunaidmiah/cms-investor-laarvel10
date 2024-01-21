<!DOCTYPE html>
<html lang="en">
<head>
@include('includes.fronthead')


   

<!--Loading bootstrap css-->
 <style>

        
      .banner_subpage5 {

          background-image: url('/uploads/banners/{{$banner}}');
          background-repeat: no-repeat;
          background-position: center top;
          height: 400px;
          width: 100%;
            
      }
    </style>
</head>
<body>



   
           
    <!-- Header-->
        <header class="slide1">   
            <!-- nav_logo-->
            <div class="nav_logo animated fadeInDown delay1">            
                <div class="container">
                    <div class="row-fluid">

                        <!-- Logo-->
                        <div class="span3 logo"><a href="/" title="Back to Home"><img src="{{ url() }}/img/index/logo.png" alt="Far East Holdings Berhad"></a></div>
                        <!-- End Logo-->
                                                      
                        <!-- Nav-->
                       @include('includes.fronttopmenu')
                        <!-- End Nav-->
                    </div>
                </div>
            </div>
            <!-- End nav_logo-->
            
            <!-- Slide -->

                        <div class="banner_subpage5"></div>
                        

            <!-- Info section Title-->

            <div class="section_title1">
              <div class="container">
                <div class="row-fluid animated fadeInUp delay1">
                    <div class="span5">
                       <h1>Grievance Procedure</h1>
                          @if(Session::has('success'))
                             <div>
                               <h4 class="alert alert-success">{{ Session::get('success')}}</h4>
                             </div>
                          @endif
                    </div>
                  <div class="span7" style="font-family: 'Open Sans', sans-serif, font-size: 16px;">
                     <p>Oil Palm Plantation Investment Holdings</p>
                  </div>
                </div>
              </div>
            </div>
            </header>
        <!-- End Header-->
        
           <!-- crumbs-->
<div class="crumbs border_bottom">
            <div class="container">
              <ul>
                                <li>
                                                                                  
                      
                    <a href="http://cms.fareastholdingsbhd.com">Home</a>
                                    </li>
                                <li>/</li>
                                                <li>
                                          
                                                              
                    <a href="http://bursa.fareastholdingsbhd.com">Investor Relations</a>
                                    </li>
                                <li>/</li>
                                                <li>
                                        Sustainability 
                                    </li>
                                <li>/</li>
                                                <li>
                                        Grievance Procedure
                                    </li>
                                              </ul>
            </div>        
  </div>
        <!-- End crumbs-->   
        
 
        
        

        <!-- End content info -->
        <section class="content_info">
            
                    
            <!-- Info white-->
            <div class="info_white1 border_bottom">
                <div class="container">
                    <div class="row-fluid">
                        <div class="span12">
                          <h2 class="red-title">Grievance Report</h2>
                          
                          <table class="table table-striped">
                            <col />
                            <col />
                            <col />
                            <col />
                            <col />
                            <col />
                            
                            <thead>
                              <tr>
                                <th>Ref No.</th>
                                <th>Date Received</th>
                                <th>Company</th>
                                <th>Grievance Report</th>
                                <th>Stakeholders</th>
                                <th>Subject Matter &amp; Progress</th>
                              </tr>
                            </thead>
                            <tbody>
                            @if($report)
                          <?php  $i=1;?>
                                @foreach($report as $reports)
                              <tr>
                                 <td>GV {{$reports->id}}</td>
                                 <td>
                                 
                                 <?php $newDate = date("d-M-Y", strtotime($reports->updates_at));  ?>
                                 {{$newDate}}</td>
                                 <td><?php if($reports->company_name==''
      ){   echo "no company name"; }else{
                                                      echo $reports->company_name;
                                                    }

                                                    ?></td>
                                 <td><a href="#link to report pdf">View Report</a></td>
                                 <td>{{$reports->name}}</td>
                                 <td><p style="word-break: break-all;">{{$reports->description}}</p></td>
                              </tr>
                              @endforeach
                              @endif
                                            
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tfoot>
                          </table> 
                             
                      </div>

                    </div>
                </div>
                <i class="icon-map-marker right"></i>
            </div>
            
            <!-- End Info white-->
            <div class="clearfix"></div>
            
                   
         
        
         </section>
        <!-- End content info-->

        <!-- BEGIN FOOTER -->
            <footer>
            <div class="container">
                <div class="row-fluid">

                    <!-- Contact Us-->
                    <div class="span12">
                       <ul class="contact_footer">
                           <li>
                                <i class="icon-headphones"></i> +(609) 514 1936 <i class="icon-envelope"></i> <a href="mailto:fareast@fareh.po.my"> fareast@fareh.po.my</a> <i class="icon-map-marker"></i> Level 23, Menara Zenith, Jalan Putra Square 6, 25200 Kuantan, Pahang Darul Makmur, Malaysia                          </li>
                         <li>&copy; 2020 Far East Holdings Berhad 197301001753 (14809-W). All Rights Reserved. <a href="http://www.webqom.com/web_design.html" target="_blank">Web Design Malaysia</a> &amp; <a href="http://www.webqom.com/web_hosting.html" target="_blank">Web Hosting Malaysia</a> </li>       
                        </ul>
                    </div>
                    <!-- Contact Us-->
                </div>
            </div>
        </footer>      
            <!-- END FOOTER --><!-- END FOOTER -->
        
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
        <script>window.jQuery || document.write('<script src="http://bursa.fareastholdingsbhd.com/js/jquery-1.9.1.min.js"><\/script>')</script>
        <!-- jQuery ui-->    
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/jquery-ui.min.js"></script>
        <!--Nav-->
        <script type="text/javascript" src="http://bursa.fareastholdingsbhd.com/js/nav/tinynav.js"></script> 
        <script type="text/javascript" src="http://bursa.fareastholdingsbhd.com/js/nav/superfish.js"></script>                                             
        <!--Totop-->
        <script type="text/javascript" src="http://bursa.fareastholdingsbhd.com/js/totop/jquery.ui.totop.js" ></script>  
        <!--Slide-->
        <script type="text/javascript" src="http://bursa.fareastholdingsbhd.com/js/slide/camera.js" ></script>      
        <script type='text/javascript' src='http://bursa.fareastholdingsbhd.com/js/slide/jquery.easing.1.3.min.js'></script>   
        <!--flexsilider-->
        <script type="text/javascript" src="http://bursa.fareastholdingsbhd.com/js/carousel/jquery.flexslider.js"></script>    
        <!--Ligbox--> 
        <script type="text/javascript" src="http://bursa.fareastholdingsbhd.com/js/fancybox/jquery.fancybox-1.3.1.js"></script>  
        <!--Scrollama--> 
        <script type="text/javascript" src="http://bursa.fareastholdingsbhd.com/js/scrollama/TweenMax.min.js"></script>
        <script type="text/javascript" src="http://bursa.fareastholdingsbhd.com/js/scrollama/jquery.superscrollorama.js"></script>    
        <!--Gallery Grid--> 
        <script type="text/javascript" src="http://bursa.fareastholdingsbhd.com/js/gallery/modernizr.custom.26633.js"></script>
        <script type="text/javascript" src="http://bursa.fareastholdingsbhd.com/js/gallery/jquery.gridrotator.js"></script>     
        <!--Minislider Team-->         
        <script type="text/javascript" src="http://bursa.fareastholdingsbhd.com/js/team/modernizr.custom.63321.js"></script>
        <script type="text/javascript" src="http://bursa.fareastholdingsbhd.com/js/team/jquery.catslider.js"></script> 
        <!--Filters-->
        <script type="text/javascript" src="http://bursa.fareastholdingsbhd.com/js/filters/filters.js" ></script>                            
        <!-- Bootstrap.js-->
        <script type="text/javascript" src="http://bursa.fareastholdingsbhd.com/js/bootstrap/bootstrap.js"></script>
        <!--fUNCTIONS-->
        <script type="text/javascript" src="http://bursa.fareastholdingsbhd.com/js/jquery-func.js"></script>
        
        <script type="text/javascript" src="http://bursa.fareastholdingsbhd.com/js/custom.js"></script>
         <!-- Start of high chart -->
    <script src="http://bursa.fareastholdingsbhd.com/vendors/jquery-highcharts/highcharts.js"></script>

    <script src="http://bursa.fareastholdingsbhd.com/vendors/jquery-highcharts/exporting.js"></script>

    <script src="http://bursa.fareastholdingsbhd.com/js/chart-line-charts.js"></script>

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
 </body>
</html>
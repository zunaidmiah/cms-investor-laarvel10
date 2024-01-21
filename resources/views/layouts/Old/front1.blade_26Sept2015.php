<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/services_green_technology_solar.dwt" codeOutsideHTMLIsLocked="false" -->
 <head>
@include('includes.fronthead')
     <style>
         div#main h3
         {
             display: none;
         }

         table tbody > tr:nth-child(2n+1) > td, table tbody > tr:nth-child(2n+1) > th
         {
             background-color: #f9f9f9;
         }

         table th, table td
         {
             border-top: 1px solid #DDDDDD;
             color: #403e3d;
             font-size: 14px;
             line-height: 20px;
             padding: 8px;
             text-align: left;
             vertical-align: top;
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
                        <div class="span3 logo"><a href="/" title="Back to Home"><img src="{{ url() }}/img/index/logo.png" alt="OCK Group Berhad"></a></div>
                        <!-- End Logo-->
                                                      
                        <!-- Nav-->
                       @include('includes.fronttopmenu')
                        <!-- End Nav-->
                    </div>
                </div>
            </div>
            <!-- End nav_logo-->
            
            <!-- Slide -->
            <!-- InstanceBeginEditable name="EditRegion1" -->
            @if(isset($contactFrame) != '')
            {{ $contactFrame }}
            @else
            <div class="banner_subpage5"></div>
            @endif
            
            @if(isset($bannerImg) != '')
            {$bannerImg}
            @endif
            <!-- InstanceEndEditable -->
            <!-- Info section Title-->
        <!-- InstanceBeginEditable name="EditRegion2" -->
            <div class="section_title1">
              <div class="container">
                <div class="row-fluid animated fadeInUp delay1">
                    <div class="span5">
                   @if(isset($pageTitle) != '')
                   {{ $pageTitle }}
                   @endif
                    </div>
                  <div class="span7">
                      <p>
                   @if(isset($tagLine) != '')
                   {{ $tagLine }}
                   @endif
                      </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- InstanceEndEditable --></header>
        <!-- End Header-->
        
         
            
            <!-- crumbs-->
        <div class="crumbs border_bottom">
            <div class="container"><!-- InstanceBeginEditable name="EditRegion3" -->
                <ul>
                    @foreach ($breadcrumbs as $k => $breadcrumb)
                        <li>
                            @if($breadcrumb['url'] != '' || $k == 0 || $k == 1)
                                @if($k == 0)
                                    <?php $url = "http://cms.ock.net.my" ?>
                                @elseif($k == 1)
                                   <?php $url = "http://bursa.ock.net.my" ?>
                                @else
                                    <?php $url = $breadcrumb['url']; ?>
                                @endif
                                <a href="{{ $url }}">{{ $breadcrumb['title'] }}</a>
                            @else
                                {{ $breadcrumb['title'] }}
                            @endif
                        </li>
                        @if (count($breadcrumbs) != ($k + 1))
                            <li>/</li>
                        @endif
                    @endforeach
                </ul>
                <!-- InstanceEndEditable --></div>
        </div>
        <!-- End crumbs-->

        {{--<div class="crumbs border_bottom">--}}
            {{--<div class="container"><!-- InstanceBeginEditable name="EditRegion3" -->--}}
              {{--<ul>--}}
                {{--<li><a href="{{ url() }}">Home</a></li>--}}
                {{--<li>/</li>--}}
                {{--<li><a href="investor_relations_home.html">Investor Relations</a></li>--}}
                {{--<li>/</li>--}}
                {{--<li>News Centre</li>--}}
                {{--<li>/</li>--}}
                {{--<li><a href="news_centre_bursa_announcements.html">Bursa Announcements</a></li>--}}
                {{--<li>/</li>--}}
                {{--<li>Entitlements Summary</li>--}}
              {{--</ul>--}}
            {{--<!-- InstanceEndEditable --></div>        --}}
  {{--</div>--}}
        <!-- End crumbs-->   
        
 
        
        

        <!-- End content info -->
        <section class="content_info">
         @yield('content')
        </section>
        <!-- End content info-->

               <!-- End content info-->
<!-- BEGIN FOOTER -->
@include('includes.frontfooter')
<!-- END FOOTER -->     
        <!-- End footer-->


   
        @include('includes.frontscripts')
  </body>
<!-- InstanceEnd --></html>
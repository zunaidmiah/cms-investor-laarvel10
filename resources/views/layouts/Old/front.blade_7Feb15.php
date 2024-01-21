<!DOCTYPE html>
<html lang="en">
<head>
@include('includes.fronthead')
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
            <div class="banner_subpage5"></div>
            @if(isset($bannerImg) != '')
            {$bannerImg}
            @endif
            <!-- InstanceEndEditable -->
            <!-- Info section Title-->
        <!-- InstanceBeginEditable name="EditRegion2" -->
            <div class="section_title1">
              <div class="container">
                <div class="row-fluid animated fadeInUp delay1">
                   @if(isset($pageTitle) != '')
                   {{ $pageTitle }}
                   @endif
                  <div class="span7">
                   @if(isset($tagLine) != '')
                   {{ $tagLine }}
                   @endif
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
                    @if($breadcrumb['url'] != '')
                    <a href="{{ $breadcrumb['url'] }}">{{ $breadcrumb['title'] }}</a>
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
        
 
        
        

        <!-- End content info -->
        <section class="content_info">
            @yield('content')
         </section>
        <!-- End content info-->
<!-- BEGIN FOOTER -->
@include('includes.frontfooter')
<!-- END FOOTER -->
        
   @include('includes.frontscripts')
 </body>
</html>
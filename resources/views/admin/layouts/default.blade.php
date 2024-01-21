<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/admin_news_centre.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
@include('includes.adminHead')
</head>
<body>
<div>
<!--BEGIN TO TOP--><a id="totop" href="#"><i class="fa fa-angle-up"></i></a><!--END BACK TO TOP-->
  <div id="wrapper">
      <!--BEGIN TOPBAR-->
        @include('includes.adminHeader')
        <!--END TOPBAR-->
        
        <!--BEGIN SIDEBAR MENU-->
        <nav id="sidebar" role="navigation" class="navbar-default navbar-static-side">
            @include('includes.adminSidebar')
        </nav>
        <!--END SIDEBAR MENU--><!--BEGIN PAGE WRAPPER-->
      <div id="page-wrapper"><!--BEGIN PAGE HEADER & BREADCRUMB-->
      <!-- InstanceBeginEditable name="EditRegion1" -->
          <div class="page-header-breadcrumb">
                <div class="page-heading hidden-xs"><h1 class="page-title">News Centre</h1></div>
                <ol class="breadcrumb page-breadcrumb">
                    <li><i class="fa fa-home"></i>&nbsp;<a href="#">Dashboard</a>&nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
                    <li>Investor Relations &nbsp;<i class="fa fa-angle-right"></i>&nbsp;</li>
                    <li>News Centre &nbsp;<i class="fa fa-angle-right"></i>&nbsp;</li>
                    <li><a href="{{ URL::to('admin/media_news_list') }}">Media News Listing</a>&nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
                    <li class="active"><a href="{{ URL::to('admin/web_scrapping_list') }}">Web Scrapping - Listing</a></li>
                </ol>
            </div>
          <!-- InstanceEndEditable -->
          <!--END PAGE HEADER & BREADCRUMB--><!--BEGIN CONTENT-->
      <!-- InstanceBeginEditable name="EditRegion2" -->
          <div class="page-content">
              @yield('content')
            </div>
          <!-- InstanceEndEditable -->
          <!--END CONTENT-->
            
            <!--BEGIN FOOTER-->
            <div class="page-footer">
                @include('includes.adminFooter')
            </div>
      <!--END FOOTER--></div>
        <!--END PAGE WRAPPER--></div>
</div>
    {{HTML::script('admin/js/jquery-1.9.1.js')}}
    {{HTML::script('admin/js/jquery-migrate-1.2.1.min.js')}}
    {{HTML::script('admin/js/jquery-ui.js')}}
    <!--loading bootstrap js-->
    {{HTML::script('admin/vendors/bootstrap/js/bootstrap.min.js')}}
    {{HTML::script('admin/vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js')}}
    {{HTML::script('admin/js/html5shiv.js')}}
    {{HTML::script('admin/js/respond.min.js')}}
    {{HTML::script('admin/vendors/metisMenu/jquery.metisMenu.js')}}
    {{HTML::script('admin/vendors/slimScroll/jquery.slimscroll.js')}}
    {{HTML::script('admin/vendors/jquery-cookie/jquery.cookie.js')}}
    {{HTML::script('admin/js/jquery.menu.js')}}
    {{HTML::script('admin/vendors/jquery-pace/pace.min.js')}}
    {{HTML::script('admin/vendors/bootstrap-datepicker/js/bootstrap-datepicker.js')}}
    {{HTML::script('admin/vendors/bootstrap-daterangepicker/daterangepicker.js')}}
    {{HTML::script('admin/vendors/moment/moment.js')}}
    {{HTML::script('admin/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js')}}
    {{HTML::script('admin/vendors/bootstrap-timepicker/js/bootstrap-timepicker.js')}}
    {{HTML::script('admin/vendors/bootstrap-clockface/js/clockface.js')}}
    {{HTML::script('admin/vendors/bootstrap-colorpicker/js/bootstrap-colorpicker.js')}}
    {{HTML::script('admin/vendors/bootstrap-switch/js/bootstrap-switch.min.js')}}
    {{HTML::script('admin/vendors/jquery-maskedinput/jquery-maskedinput.js')}}
    {{HTML::script('admin/js/form-components.js')}}
    {{HTML::script('admin/vendors/tinymce/js/tinymce/tinymce.min.js')}}
    {{HTML::script('admin/vendors/ckeditor/ckeditor.js')}}
    <!--CORE JAVASCRIPT-->
    {{HTML::script('admin/js/main.js')}}
    {{HTML::script('admin/js/holder.js')}}
    {{HTML::script('admin/js/custom.js')}}

</body>
<!-- InstanceEnd -->
</html>
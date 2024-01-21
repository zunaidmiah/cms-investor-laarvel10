<!doctype html>
<head>
<meta charset="utf-8">
<title>OCK Admin</title>
 <!--Loading bootstrap css-->
    <link type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,700,400italic,700italic" rel="stylesheet" type="text/css">
    
<link media="screen" type="text/css" rel="stylesheet" href="http://charts.ock.net.my/vendors/jquery-ui-1.10.3.custom/css/ui-lightness/jquery-ui-1.10.3.custom.css">

<link media="screen" type="text/css" rel="stylesheet" href="http://charts.ock.net.my/vendors/font-awesome/css/font-awesome.min.css">

<link media="screen" type="text/css" rel="stylesheet" href="http://charts.ock.net.my/vendors/bootstrap/css/bootstrap.min.css">

<link media="screen" type="text/css" rel="stylesheet" href="http://charts.ock.net.my/vendors/bootstrap-datepicker/css/datepicker.css">

<link media="screen" type="text/css" rel="stylesheet" href="http://charts.ock.net.my/vendors/bootstrap-switch/css/bootstrap-switch.css?v=1">

<link media="screen" type="text/css" rel="stylesheet" href="http://charts.ock.net.my/vendors/animate.css/animate.css">

<link media="screen" type="text/css" rel="stylesheet" href="http://charts.ock.net.my/vendors/jquery-pace/pace.css">

<link media="screen" type="text/css" rel="stylesheet" href="http://charts.ock.net.my/css/style.css">

<link media="screen" type="text/css" rel="stylesheet" href="http://charts.ock.net.my/css/style-mango.css">

<link media="screen" type="text/css" rel="stylesheet" href="http://charts.ock.net.my/css/vendors.css">

<link media="screen" type="text/css" rel="stylesheet" href="http://charts.ock.net.my/css/themes/grey.css">

<link media="screen" type="text/css" rel="stylesheet" href="http://charts.ock.net.my/vendors/datatables/css/dataTables.bootstrap.css">

<link media="screen" type="text/css" rel="stylesheet" href="http://charts.ock.net.my/css/style-responsive.css">
    
<style>.cke{visibility:hidden;}</style><style id="holderjs-style" type="text/css"></style></head>

<body class=" pace-done left-side-collapsed"><div class="pace  pace-inactive"><div class="pace-progress" data-progress-text="100%" data-progress="99" style="width: 100%;">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
<div>
<a id="totop" href="#" style="display: block;"><i class="fa fa-angle-up"></i></a><div id="wrapper">
<nav id="topbar" role="navigation" style="margin-bottom: 0;" class="navbar navbar-default navbar-static-top">
  <div class="navbar-header">
    
    <a id="logo" href="http://www.webqom.com/web88.html" target="_blank" class="navbar-brand"><img src="/images/logo_web88.png"></a> </div>
  <div class="topbar-main"> <a id="logo" href="#" class="navbar-brand"><img src="/images/logo.jpg"></a> 
  </div>
</nav>




 <div id="page-wrapper" style="min-height: 590px;"><!--BEGIN PAGE HEADER & BREADCRUMB-->
<div class="row">
            <div class="col-sm-8">        
        <!-- TemplateEndEditable -->
        <!--END PAGE HEADER & BREADCRUMB-->
        <h2>Login</h2>



 <!-- check for login error flash var -->
    @if (Session::has('flash_error'))
        <div id="flash_error">{{ Session::get('flash_error') }}</div>
    @endif


<div class="form">
   {{ Form::open(array('class'=>'form-horizontal')) }}
   <div class="form-group">
        {{ Form::label('username', 'Username',array('class'=>'control-label col-md-4')) }}
<div class="col-md-8">
                <div class="input-icon"><i class="fa fa-user"></i>
        {{ Form::text('username', Input::old('username'),array('class'=>'form-control')) }}
</div></div>
    </div>
    <!-- password field -->
    <div class="form-group">
        {{ Form::label('password', 'Password',array('class'=>'control-label col-md-4')) }}
<div class="col-md-8">
                <div class="input-icon"><i class="fa fa-key"></i>
        {{ Form::password('password',array('class'=>'form-control')) }}
</div></div>
    </div>
              <div class="col-md-offset-6 col-md-4">
{{ Form::submit('Login',array('class'=>'btn btn-red')) }}
            </div>
  {{ Form::close() }}
</div>

<div class="clearfix"></div>

</div></div>
<!--BEGIN FOOTER-->
            <div class="page-footer" style="position: relative;">
                <div class="copyright"><span class="text-15px">2014 © <a href="http://www.webqom.com" target="_blank">Webqom Technologies Sdn Bhd.</a> Any queries, please contact <a href="mailto:support@webqom.com">Webqom Support</a>.</span>
                	<div class="pull-right"><img src="/images/logo_webqom.png" alt="Webqom Technologies"></div>
                </div>
            </div>
    <!--END FOOTER--></div>
  <!--END PAGE WRAPPER--></div>

</div></body>
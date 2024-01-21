<!-- Stored in app/views/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>

<title>Forgot Your Password?</title>

<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="images/icons/favicon.ico" rel="shortcut icon">
    <!--Loading bootstrap css-->
    {{ HTML::script('js/scrollTo.js'); }}
    {{ HTML::style('http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,700,400italic,700italic'); }}
    {{ HTML::style('http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700'); }}
    {{ HTML::style('http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'); }}
    {{ HTML::style('vendors/jquery-ui-1.10.3.custom/css/ui-lightness/jquery-ui-1.10.3.custom.css'); }}
    {{ HTML::style('vendors/font-awesome/css/font-awesome.min.css'); }}
    {{ HTML::style('vendors/scrollTo.js'); }}
    {{ HTML::style('vendors/bootstrap/css/bootstrap.min.css'); }}
    {{ HTML::style('vendors/bootstrap-datepicker/css/datepicker.css');}}    
    {{ HTML::style('vendors/bootstrap-switch/css/bootstrap-switch.css');}}    

     {{ HTML::style('vendors/animate.css/animate.css');}}  
     {{ HTML::style('vendors/jquery-pace/pace.css');}}  
     {{ HTML::style('css/style.css');}}  
     {{ HTML::style('css/style-mango.css');}} 
     {{ HTML::style('css/vendors.css');}}  
     {{ HTML::style('css/themes/grey.css');}}
     {{ HTML::style('css/style-responsive.css');}}

    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body id="signin-page" class="animated bounceInDown">
<div id="signin-page-content">
    {{ Form::open(array('url' => '/password/remind', 'method' => 'post')) }}
        <div class="text-center"><a href="http://www.webqom.com/web88.html" target="_blank">{{ HTML::image('images/login/logo_web88.jpg','web88'); }}</a></div>
        <h1 class="block-heading">Forgot Your Password?</h1>
         
        @if (Session::has('error'))
        <div class="alert-box danger">
           <h2>{{ trans(Session::get('error')) }}</h2>
         </div>
        @elseif (Session::has('status'))
       <div class="alert-box success">
           <h2>{{ trans(Session::get('status')) }}</h2>
         </div>
@endif
         <p>Please enter your registered email to reset the password.</p>

        <div class="form-group">
            <div class="input-icon"><i class="fa fa-user"></i>
                {{Form::text('email', null,array('class' => 'form-control','placeholder' => 'Your Email'))}}
                 </div>
      </div>
        
      
       <div class="form-group">
            <button type="submit" class="btn btn-primary">Reset Password
                &nbsp;<i class="fa fa-chevron-circle-right"></i></button>
            <a id="btn-forgot-pwd" href="{{ url() }}/admin/login" class="mlm">Return to Login Page</a></div>
        <hr>
        <a href="mailto:hock@webqom.com"><i class="fa fa-envelope"></i> hock@webqom.com</a>
        <a href="http://www.facebook.com/webqomtechnologies" class="pull-right" target="_blank"><i class="fa fa-facebook-square"></i> /webqomtechnologies</a><br/>
        <i class="fa fa-phone"></i>+(603) 2630 5562
        <span class="margin-top-5px text-12px pull-right">&copy; 2014 <a href="http://www.webqom.com" target="_blank">Webqom Technologies Sdn. Bhd.</a></span>
        
   {{ Form::close() }}
</div>
     <!-- Load Scripts Below -->
     {{ HTML::script('js/jquery-1.9.1.js');}}
     {{ HTML::script('js/jquery-migrate-1.2.1.min.js');}}
     {{ HTML::script('js/jquery-ui.js');}}
     {{ HTML::script('vendors/bootstrap/js/bootstrap.min.js');}}
     {{ HTML::script('vendors/bootstrap-hover-dropdown.js');}}
     {{ HTML::script('js/html5shiv.js');}}
     {{ HTML::script('js/respond.min.js');}}
     {{ HTML::script('vendors/jquery-cookie/jquery.cookie.js');}}
     <!-- End of Load Script -->

</body>
</html>
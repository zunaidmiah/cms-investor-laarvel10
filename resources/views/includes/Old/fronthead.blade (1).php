	<!-- Basic Page Needs
	================================================== -->
	<meta charset="utf-8">
	<title>
        @if(isset($metaTitle) != '')  
        {{ @strip_tags($metaTitle) }}
        @else
        Corporate Information:: General
        @endif
        </title>
	<meta name="description" content="">
	<meta name="author" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	
	<!-- Mobile Specific Metas
	================================================== -->
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
 <link rel="icon" href="images/favicon.ico" type="image/x-icon">
 {{ HTML::style('css/frontstyle.css');}}
 {{ HTML::style('css/tabs.css');}}
  <script src="{{ url() }}/js/tab/jquery-1.7.1.min.js" type="text/javascript"></script> 
        <script src="{{ url() }}/js/tab/jquery.hashchange.min.js" type="text/javascript"></script>
        <script src="{{ url() }}/js/tab/jquery.easytabs.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="{{ url() }}/css/tabs.css" media="all"/>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.7.1/themes/smoothness/jquery-ui.css">
        <style>
            #ui-datepicker-div { font-size:11px; }
        </style>


   

<!--Loading bootstrap css-->

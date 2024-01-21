<!DOCTYPE html>
<html lang="en">
<head>
<title>Grievance Procedure:: Listing</title>
<meta charset="utf-8">
<meta  name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="images/icons/favicon.ico" rel="shortcut icon">
    <!--Loading bootstrap css-->
    <link type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,700,400italic,700italic' rel='stylesheet' type='text/css'>
    
    
<link type="text/css" rel="stylesheet" href="vendors/jquery-ui-1.10.3.custom/css/ui-lightness/jquery-ui-1.10.3.custom.css">
<link type="text/css" rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="vendors/bootstrap/css/bootstrap.min.css">
    <!--LOADING SCRIPTS FOR PAGE-->
    <!--LOADING SCRIPTS FOR PAGE-->
<link type="text/css" rel="stylesheet" href="vendors/bootstrap-datepicker/css/datepicker.css">
<link type="text/css" rel="stylesheet" href="vendors/bootstrap-switch/css/bootstrap-switch.css">
    
    <!--Loading style vendors-->
<link type="text/css" rel="stylesheet" href="vendors/animate.css/animate.css">
<link type="text/css" rel="stylesheet" href="vendors/jquery-pace/pace.css">
    <!--Loading style-->
<link type="text/css" rel="stylesheet" href="css/style.css">
<link type="text/css" rel="stylesheet" href="css/style-mango.css" id="theme-style">
<link type="text/css" rel="stylesheet" href="css/vendors.css">
<link type="text/css" rel="stylesheet" href="css/themes/grey.css" id="color-style">
<link type="text/css" rel="stylesheet" href="css/style-responsive.css">

    
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
  .dataTables_filter{
    display: none;
  }
  .paging_simple_numbers{
        float: right;
  }
  #example_length{
    margin-top: -73px;
    margin-bottom: 51px;
}

</style>
</head>
<body style="    margin-top: -27px;">
<div>
<!--BEGIN TO TOP--><a id="totop" href="#"><i class="fa fa-angle-up"></i></a><!--END BACK TO TOP-->
  <div id="wrapper"><!--BEGIN TOPBAR-->
        <nav id="topbar" role="navigation" style="margin-bottom: 0;" class="navbar navbar-default navbar-static-top">
          <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            <a id="logo" href="http://www.webqom.com/web88.html" target="_blank" class="navbar-brand"><img src="images/logo_web88.png"></a>          </div>
            
              <div class="topbar-main">
                  <a id="logo" href="#" class="navbar-brand"><img src="images/logo.jpg"></a>
                    <a id="menu-toggle" href="#" class="btn hidden-xs"><i class="fa fa-bars"></i></a>
                    
                <form id="topbar-search" action="" method="" class="hidden-sm hidden-xs">
                    <div class="input-icon right"><a href="#"><i class="fa fa-search"></i></a><input type="text" placeholder="Search here..." class="form-control"/></div>
                </form>
                <ul class="nav navbar-top-links navbar-right">
                
                    <li class="dropdown"><a data-toggle="dropdown" href="#" class="dropdown-toggle"><img src="images/profile/image_hock.jpg" alt="" class="img-responsive img-circle"/>&nbsp;
                        Support Webqom
                        &nbsp;<span class="caret"></span></a>
                  <ul class="dropdown-menu dropdown-user pull-right animated bounceInLeft">
                            <li>
                                <div class="navbar-content">
                                    <div class="row">
                                        <div class="col-md-5 col-xs-5"><img src="images/profile/image_hock.jpg" alt="" class="img-responsive img-circle"/>

                                            <p class="text-center mtm">
                                              <a href="#" data-target="#modal-change-avatar" data-toggle="modal" class="change-avatar">
                                                <small>Change Avatar</small>                                                </a></p>
                                      </div>
                                        <div class="col-md-7 col-xs-5"><span>Support Webqom</span>

                                            <p class="text-muted small">support@webqom.com</p>

                                            <div class="divider"></div>
                                            <!--<a href="#" class="btn btn-primary btn-sm">View Profile</a>-->
                                        </div>
                                    </div>
                                </div>
                                <div class="navbar-footer">
                                    <div class="navbar-footer-content">
                                        <div class="row">
                                            <div class="col-md-6 col-xs-6"><a href="#" class="btn btn-default btn-sm" data-target="#modal-change-password" data-toggle="modal">Change Password</a></div>
                                            <div class="col-md-6 col-xs-6"><a href="#" class="btn btn-default btn-sm pull-right">Sign Out</a></div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                      </ul>
                  </li>
                </ul>
          </div>
        </nav>
        <!--Modal Change Avatar start-->
                            <div id="modal-change-avatar" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                    <h4 id="modal-login-label2" class="modal-title">Change Avatar</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="form">
                                      <form class="form-horizontal">
                                        
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Upload Avatar Image </label>
                                          <div class="col-md-8">
                                            <div class="text-15px margin-top-10px"> 
                                              <img src="images/profile/image_hock.jpg" alt="Avatar" class="img-responsive"><br/>
                                                <input id="exampleInputFile1" type="file"/>
                                              <br/>
                                                <span class="help-block">(Image dimension: 100 x 100 pixels, JPEG/GIF/PNG only, Max. 2MB) </span> </div>
                                          </div>
                                        </div>
                                        
                                        <div class="form-actions">
                                          <div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red ">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <!--END MODAL Change Avatar-->
        
        <!--Modal Change Password start-->
                <div id="modal-change-password" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                <h4 id="modal-login-label" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Change Password</h4></div>
                            <div class="modal-body">
                                <div class="form">
                                    <form class="form-horizontal">
                                        
                                        <div class="form-group">
                                          <label for="password" class="control-label col-md-4">New Password</label>

                                            <div class="col-md-8">
                                              <div class="input-icon"><i class="fa fa-key"></i> <input id="password" type="password" placeholder="New Password" class="form-control"/><span class="text-10px">(Password length should be between 6-12 characters)</span>                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                          <label for="password" class="control-label col-md-4">Confirm New Password</label>

                                            <div class="col-md-8">
                                              <div class="input-icon"><i class="fa fa-key"></i> <input id="password" type="password" placeholder="Confirm New Password" class="form-control"/><span class="text-10px">(Password length should be between 6-12 characters)</span>                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-actions">
                                            <div class="col-md-offset-4 col-md-8">
                                               <a href="#" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp;
                                              <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a>                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        <!--END MODAL CHANGE PASSWORD-->
        <!--END TOPBAR-->
        
        <!--BEGIN SIDEBAR MENU-->
        <nav id="sidebar" role="navigation" class="navbar-default navbar-static-side">
            <div class="sidebar-collapse menu-scroll">
                <ul id="side-menu" class="nav">
                    <li class="clock"><strong id="get-date"></strong>

                        <div class="digital-clock">
                            <div id="getHours" class="get-time"></div>
                            <span>:</span>

                            <div id="getMinutes" class="get-time"></div>
                            <span>:</span>

                            <div id="getSeconds" class="get-time"></div>
                        </div>
                    </li>
                                         <li class="sidebar-heading"><h4>Investor Relations</h4></li>
                    <li><a href="http://bursa.fareastholdingsbhd.com/admin/irhome"><i class="fa fa-signal fa-fw"></i><span class="menu-title">IR Home</span></a></li>

                    <li ><a href="#"><i class="fa fa-info-circle fa-fw"></i><span class="menu-title">Corporate Information</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/general">Statutory Information</a></li>
                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/dirprofile">Board Of Directors</a></li>
                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/keymanagement">Management Team</a></li>
                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/flowstatements">Nomination Committee</a></li>
                            
                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/ourproperties">Audit Committee</a></li>
                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/remunerations">Remuneration Committee</a></li>
                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/riskmanagement">Risk Management Committee</a></li>
                            
                            
                        </ul>
                    </li>
                    <li ><a href="http://bursa.fareastholdingsbhd.com/admin/corpgovernance"><i class="fa fa-tags fa-fw"></i><span class="menu-title">Corporate Governance</span></a></li>
                                        <li ><a href="#"><i class="fa fa-puzzle-piece fa-fw"></i><span class="menu-title">Estate Information</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/ipostatistics">Estate Location</a></li>
                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/ipocompetitive">Estate Profile</a></li>
                           <!-- <li ><a href="http://bursa.fareastholdingsbhd.com/admin/iporiskfactors">Risk Factors</a></li>
                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/ipoutilisationproceeds">Utilisation of Proceeds</a></li>
                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/ipoindustryoverview">Industry Overview</a></li>-->
                        </ul>
                    </li>
                                        <li ><a href="#"><i class="fa fa-dollar fa-fw"></i><span class="menu-title">Share Information</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/priceticker">Price Ticker</a></li>
<!--                            <li ><a href="share_info_stock_charts_list.html">Stock Charts</a></li>-->
                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/priceandvolume">Price &amp; Volume</a></li>
                            <!--<li ><a href="http://bursa.fareastholdingsbhd.com/admin/shareholding">Analysis of Shareholdings</a></li>-->
                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/topshareholders">Shareholders</a></li>
                        </ul>
                    </li>
                   <!-- <li ><a href="http://bursa.fareastholdingsbhd.com/admin/entitlements"><i class="fa fa-dot-circle-o fa-fw"></i><span class="menu-title">Entitlements</span></a></li>-->
          <li ><a href="http://bursa.fareastholdingsbhd.com/admin/entitlement"><i class="fa fa-dot-circle-o fa-fw"></i><span class="menu-title">Entitlements</span></a></li>
                                         <li ><a href="#"><i class="fa fa-bar-chart-o fa-fw"></i><span class="menu-title">Financial Information</span><span class="fa arrow"></span></a>
                      <ul class="nav nav-second-level">
      
                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/financialhighlights">Financial Statistics</a></li>
                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/financialcomprehensive">Statements of Comprehensive Income</a></li>
                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/financialposition">Statements of Financial Position</a></li>
                            
                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/financialinfosegmentalanalysis">Highlights</a></li>
                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/financialratioanalysis">Production Statistics</a></li>
              <li ><a href="http://bursa.fareastholdingsbhd.com/admin/financialquarterlyreport">Key Audit Matters</a></li>

                        </ul>
                    </li>

                                         <li ><a href="#"><i class="fa fa-user fa-fw"></i><span class="menu-title">Governance</span><span class="fa arrow"></span></a>
                      <ul class="nav nav-second-level">
                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/managementchairmansstatement">Whistle Blower Policy</a></li>
                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/equity">Anti-Bribery &amp; Anti-Corruption Policy</a></li>
                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/managementreviewoperations">Board Charter</a></li>
                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/tor_board_nomination">Terms of Reference - Nomination Committee</a></li>
                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/tor_risk_management_committee">Terms of Reference - Risk Management Committee</a></li>
                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/tor_audit_management_committee">Terms of Reference - Audit Committee</a></li>
                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/oursubsidiaries">Terms of Reference - Remuneration Committee</a></li>

                            <!--<li ><a href="http://bursa.fareastholdingsbhd.com/admin/managementpastperformancereview">Past Performance Review</a></li>-->
                      </ul>
                    </li>


                   <li class="active"><a href="#"><i class="fa fa-users fa-fw"></i><span class="menu-title">Sustainability</span><span class="fa arrow"></span></a>
                      <ul class="nav nav-second-level in">

                            <li class="active"><a href="{{url('admin/grienvance_procedure')}}">Grievance Procedure</a></li>

                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/sust_palm_oil">Sustainable Palm Oil Policy</a></li>

                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/sust_protection_biological">Environmental Protection & Biological Diversity Policy </a></li>

                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/sust_equality_gender">Policy of Equality & Gender </a></li>

                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/sust_food_safety">Food Safety Policy</a></li>

                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/sust_quality">Quality Policy </a></li>

                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/sust_safety_health">Safety & Health Policy </a></li>

                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/sust_safety">Safety Policy </a></li>

                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/sust_slop_river">Slope & River Protection Policy </a></li>

                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/sust_social">Social Policy </a></li>

                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/sust_certification">Certification </a></li>
                      </ul>
                    </li>
                    

                              <li ><a href="#"><i class="fa fa-bullhorn fa-fw"></i><span class="menu-title">News Centre</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/newscenter">Bursa Announcements Home</a></li>
                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/announcementlinks">Announcements Links</a></li>
                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/investoralert">Investor Alert</a></li>
              <li ><a href="http://bursa.fareastholdingsbhd.com/admin/additionallisting">Additional Listing Announcement</a></li>
              <li ><a href="http://bursa.fareastholdingsbhd.com/admin/listingcircular">Listing Circulars</a></li>
              <li ><a href="http://bursa.fareastholdingsbhd.com/admin/financialresult">Financial Results</a></li>
              <li ><a href="http://bursa.fareastholdingsbhd.com/admin/generalannouncement">General Announcement</a></li>
              <li ><a href="http://bursa.fareastholdingsbhd.com/admin/financialresultlisting"> Trading of Rights Announcement</a></li>
              <li ><a href="http://bursa.fareastholdingsbhd.com/admin/generalmeeting">General Meetings</a></li>
              <li ><a href="http://bursa.fareastholdingsbhd.com/admin/specialannouncement">Special Announcements</a></li>
              <li ><a href="http://bursa.fareastholdingsbhd.com/admin/directorinterest"> Changes in Director's Interest (S135)</a></li>
              <li ><a href="http://bursa.fareastholdingsbhd.com/admin/shareholderinterest">Changes in Substantial Shareholder's Interest (29B)</a></li>
              <li ><a href="http://bursa.fareastholdingsbhd.com/admin/interestsubstanial"> Notice of Interest Substantial  Shareholder (29A)</a></li>
              <li ><a href="http://bursa.fareastholdingsbhd.com/admin/personceasing">Notice of Person Ceasing (29C)</a></li>
              <li ><a href="http://bursa.fareastholdingsbhd.com/admin/auditcommittee"> Changes in Audit Committee</a></li>
                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/riskcommittee"> Changes in Risk Committee</a></li>
              <li ><a href="http://bursa.fareastholdingsbhd.com/admin/boardroom"> Change in Boardroom</a></li>
              <li ><a href="http://bursa.fareastholdingsbhd.com/admin/chiefexecutive">Change in Chief Executive Officer</a></li>
              <li ><a href="http://bursa.fareastholdingsbhd.com/admin/principalofficer"> Change in Principal Officer</a></li>
              <li ><a href="http://bursa.fareastholdingsbhd.com/admin/address"> Change of Address</a></li>
              <li ><a href="http://bursa.fareastholdingsbhd.com/admin/companysecretary"> Change of Company Secretary</a></li>
              <li ><a href="http://bursa.fareastholdingsbhd.com/admin/registrar">Change of Registrar </a></li>
              <li ><a href="http://bursa.fareastholdingsbhd.com/admin/treasury">Notice of Resale/Cancellation of Treasury Share - Immediate Announcement</a></li>
              <li ><a href="http://bursa.fareastholdingsbhd.com/admin/shareimmediate">Notice of Shares Buy Back - Immediate Announcement</a></li>
              <li ><a href="http://bursa.fareastholdingsbhd.com/admin/sharepursuant">Notice of Shares Buy back by a Company Pursuant to Form 28A</a></li>
              <li ><a href="http://bursa.fareastholdingsbhd.com/admin/sharecompanypursuant">Notice of Shares Buy back by a Company Pursuant to Form 28B</a></li>
                        </ul>
                    </li>
                                        <li ><a href="#"><i class="fa fa-file-text fa-fw"></i><span class="menu-title">Reports</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/annualreports">Annual Reports</a></li>
                            <!--<li ><a href="http://bursa.fareastholdingsbhd.com/admin/annualaudit">Annual Audited Accounts</a></li>-->
                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/quarterlyreports">Quarterly Reports</a></li>
                            <!--<li ><a href="http://bursa.fareastholdingsbhd.com/admin/circularreports">Circulars</a></li>-->
                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/prospectusarreports">AGM/EGM/MSWG</a></li>
                            <!--<li ><a href="http://bursa.fareastholdingsbhd.com/admin/analystreports">Analyst Reports</a></li>-->
                        </ul>
                    </li>
                    <li ><a href="#"><i class="fa fa-cog fa-fw"></i><span class="menu-title">Investor Tools</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li ><a href="http://bursa.fareastholdingsbhd.com/admin/newsalert">News Alert</a></li>
                        </ul>
                    </li>
                    <!--<li ><a href="http://bursa.fareastholdingsbhd.com/admin/evencalendar"><i class="fa fa-calendar fa-fw"></i><span class="menu-title">Event Calendar</span></a></li>-->
                </ul>
          </div>
    </nav>
        <!--END SIDEBAR MENU--><!--BEGIN PAGE WRAPPER-->
      <div id="page-wrapper"><!--BEGIN PAGE HEADER & BREADCRUMB-->
        
        <div class="page-header-breadcrumb" style="    padding-bottom: 0px;    float: right;
    width: 100%;margin-top: -9px;">
          <div class="page-heading hidden-xs">
            <h1 class="page-title">Sustainability</h1>
          </div>
<ol class="breadcrumb page-breadcrumb">
          <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Dashboard</a>&nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
          <li>Investor Relations &nbsp;<i class="fa fa-angle-right"></i>&nbsp;</li>
          <li>Sustainability &nbsp;<i class="fa fa-angle-right"></i>&nbsp;</li>
          <li class="active">Grievance Procedure - Listing</li>
          </ol>
</div>
        <!--END PAGE HEADER & BREADCRUMB--><!--BEGIN CONTENT-->
        <div class="page-content">
          <div class="row">
            <div class="col-lg-12">
              <h2>Grievance Procedure <i class="fa fa-angle-right"></i> Listing</h2>
              <div class="clearfix"></div>
              @if(Session::has('success_message'))
              <div class="alert alert-success alert-dismissable">
                <button type="button" data-dismiss="alert" aria-hidden="true" class="close close_btn_se">&times;</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>{{session::get('success_message')}}</p>
              </div>
              @endif
             @if(Session::has('delete_messae'))
              <div class="alert alert-success alert-dismissable">
                <button type="button" data-dismiss="alert" aria-hidden="true" class="close ">&times;</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>{{session::get('delete_messae')}}</p>
              </div>
            

              @endif
               @if(Session::has('error_message'))
              <div class="alert alert-danger alert-dismissable">
                <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                <i class="fa fa-times-circle"></i> <strong>Error!</strong>
                <p>{{session::get('error_message')}}</p>
              </div>
                @endif
              <div class="pull-left margin-top-10px"> Last updated: <span class="text-blue"><?php $newDates = date("d-M-Y", strtotime($report2[0]->updates_at));  ?>
                                 {{$newDates}}</span> </div>
              
              <div class="clearfix"></div>
              <p></p>
              
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Page Info</div>
                  <br/>
                  <span class="text-blue text-12px">You can edit the content by clicking the text section below.</span>
                  <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                </div>
                <div class="portlet-body">
                  <div contenteditable="true">
                    <h1>Grievance Procedure</h1>
                  </div>
                </div>
              </div>
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Page Content</div>
                  <br/>
                  <span class="text-blue text-12px">You can edit the content by clicking the text section below.</span>
                  <div class="tools"> 
                    <i class="fa fa-chevron-up"></i> 
                  </div>
                </div>
                <div class="portlet-body">
                  <div contenteditable="true">
                    <h2 class="red-title"><span>Submit Grievance</span></h2>
                    <p>We receive grievances from all our stakeholders to ensure the compliance of our Sustainable Palm Oil Policy. Please submit your grievance to:</p>
                             <h5>Far East Holdings Berhad (14809-W)<br/>Level 23, Menara Zenith, Jalan Putra Square 6, 25200 Kuantan, Pahang Darul Makmur, Malaysia</h5>
<ul class="unstyled">
                              <li><span class="label label-info">Tel:</span> +(609) 514-1936 / 514-1948 / 514-1339</li>
            <li><span class="label label-warning">Fax:</span> +(609) 513-6211</li>
                                <li><span class="label label-success">E-mail:</span> <a href="mailto:fareast@fareh.po.my">fareast@fareh.po.my</a></li>
                             </ul>
                  </div>
                </div>
              </div>
              <div class="form-actions none-bg"> <a href="#preview in browser/not yet published" class="btn btn-red">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp; <a href="#publish online" class="btn btn-blue">Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></a>&nbsp; <a href="#" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
              
              <ul id="myTab" class="nav nav-tabs">
                <li class="active"><a href="#viewpdf" data-toggle="tab">View PDF</a></li>
              </ul>
              <div id="myTabContent" class="tab-content">
                <div id="viewpdf" class="tab-pane fade in active">
                  <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Grievance Reports Listing</div>
                  <br/>
                  <p class="margin-top-10px"></p>
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary">Delete</button>
                    <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle" style="    padding-top: 14px;
    padding-bottom: 14px;"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                    <ul role="menu" class="dropdown-menu">
                      <li><a href="#" data-target="" data-toggle="modal" class="deleteid">Delete selected item(s)</a></li>
                      <li class="divider"></li>
                      <li><a href="#" data-target="#modal-delete-all" data-toggle="modal">Delete all</a></li>
                    </ul>
                  </div>
                   
          <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                  <!--Modal delete selected items start-->
                  <div id="modal-delete-selected" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the selected item(s)? </h4>
                        </div>
                        <div class="modal-body">
                         
                          <div class="form-actions">
                         
                            <div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red ok_del">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- modal delete selected items end -->
                  <!--Modal delete all items start-->
                  <div id="modal-delete-all" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete all items? </h4>
                        </div>
                        <div class="modal-body">
                          <div class="form-actions">
                            <div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- modal delete all items end -->
                </div>
                <div class="portlet-body">
                  
                  <div class="clearfix"></div>
                  <br/>
                  <br/>
                  <div class="table-responsive mtl">
                      <table class="table table-hover table-striped" id="example">
                        <thead>
                          <tr>
                            <th width="1%"><input type="checkbox" name="check_all"/></th>
                            <th>#</th>
                            <th>Ref No.</th>
                            <th>Date Received</th>
                            <th>Company</th>
                            <th>View Report</th>
                            <th>Stakeholders</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i=1;?>
                          @foreach($report as $reports)
                          <tr>
                            <td><input type="checkbox" class="chkNumber" data-id={{$reports->id}} /></td>
                            <td><?php echo $i++;?></td>
                            <td>GV{{$reports->id}}</td>
                            <td>
                                 
                                 <?php $newDate = date("d-M-Y", strtotime($reports->updates_at));  ?>
                                 {{$newDate}}
                               </td>

                            <td><?php if($reports->company_name==''
      ){   echo "no company name"; }else{
                                                      echo $reports->company_name;
                                                    }

                                                    ?></td>
                            <td><a href="#link to report">View Report</a></td>
                            <td>{{$reports->name}}</td>
                            <td><a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-view-details{{$reports->id}}" data-toggle="modal" title="View Details"> 
                            <span class="label label-sm label-yellow"><i class="fa fa-search"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-1{{$reports->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                <!--Modal view details start-->
                                <div id="modal-view-details{{$reports->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                  <div class="modal-dialog modal-wide-width">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                        <h4 id="modal-login-label3" class="modal-title">View Details</h4>
                                      </div>
                                      <div class="modal-body">
                                        <form action="#" class="form-horizontal">
                                          <div class="form-body pal">
                                            <h3 class="block-heading">General</h3>
                                            <div class="row">
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <label for="inputFirstName" class="col-md-4 control-label">Name:</label>
                                                  <div class="col-md-8">
                                                    <p class="form-control-static">{{$reports->name}}</p>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <label for="inputPhone" class="col-md-4 control-label">Telephone:</label>
                                                  <div class="col-md-8">
                                                    <p class="form-control-static">{{$reports->telephone}}</p>
                                                  </div>
                                                </div>  
                                              </div>
                                              
                                            </div>
                                            <!-- end row -->
                                            
                                            <div class="row">
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <label for="inputLastName" class="col-md-4 control-label">Company Name:</label>
                                                  <div class="col-md-8">
                                                    <p class="form-control-static"><?php if($reports->company_name==''
      ){   echo "no company name"; }else{
                                                      echo $reports->company_name;
                                                    }

                                                    ?></p>
                                                  </div>
                                                </div>
                                              </div>
                                              
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <label for="inputLastName" class="col-md-4 control-label">Job Title:</label>
                                                  <div class="col-md-8">
                                                    <p class="form-control-static">{{$reports->job_title}}</p>
                                                  </div>
                                                </div>
                                              </div>
                                              
                                              
                                              
                                            </div>
                                            <!-- end row -->
                                            
                                            <div class="row">
                                                <div class="col-md-6">
                                                <div class="form-group">
                                                  <label for="inputEmail" class="col-md-4 control-label">Email:</label>
                                                  <div class="col-md-8">
                                                    <p class="form-control-static"><a href="mailto:hock@webqom.com">{{$reports->email}}</a></p>
                                                  </div>
                                                </div>
                                              </div>
                                                
                                               
                                              
                                            </div>
                                            <!-- end row -->
                                            
                                            
                                            <h3 class="block-heading">Address</h3>
                                            <div class="row">
                                              
                                            </div>
                                            <div class="row">
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <label for="inputAddress1" class="col-md-4 control-label">Address:</label>
                                                  <div class="col-md-8">
                                                    <p class="form-control-static">{{$reports->address}}</p>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <label for="inputAddress2" class="col-md-4 control-label">City:</label>
                                                  <div class="col-md-8">
                                                    <p class="form-control-static">{{$reports->city}}</p>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <label for="inputStates" class="col-md-4 control-label">State:</label>
                                                  <div class="col-md-8">
                                                    <p class="form-control-static">{{$reports->state}}</p>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <label for="inputCity" class="col-md-4 control-label">Post Code:</label>
                                                  <div class="col-md-8">
                                                    <p class="form-control-static">{{$reports->   postal_code}}</p>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <div class="row">
                                              <div class="col-md-6">
                                                <div class="form-group">
                                                  <label for="inputPostCode" class="col-md-4 control-label">Country:</label>
                                                  <div class="col-md-8">
                                                    <p class="form-control-static">{{$reports->   country}}</p>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                            <!-- End company info -->
                                            <h3 class="block-heading">Grievance Report</h3>
                                            <div class="row">
                                              <div class="col-md-12">
                                                <div class="form-group">
                                                  <label for="inputPostCode" class="col-md-2 control-label">Detailed Description of The Grievance:</label>
                                                  <div class="col-md-10">
                                                    <p class="form-control-static">{{$reports->   description}}</p>
                                                  </div>
                                                </div>
                                              </div>
                                              <div class="col-md-12">
                                                <div class="form-group">
                                                  <label for="inputPostCode" class="col-md-2 control-label">Evidence To Support The Grievance :</label>
                                                  <div class="col-md-10">
                                                    <p class="form-control-static"><a href="#link to report file name">Report file name.pdf</a></p>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="form-actions">
                                            <div class="col-md-offset-5 col-md-8"> <a href="#" data-dismiss="modal" class="btn btn-green">Close &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                              <!--END MODAL view details-->
                                <!--Modal delete start-->
                                <div id="modal-delete-1{{$reports->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                        <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this feedback? </h4>
                                      </div>
                                      <div class="modal-body">
                                        <p><strong>#GV{{$reports->id}}:</strong>   <?php $newDate = date("d-M-Y", strtotime($reports->updates_at));  ?>
                                 {{$newDate}} <?php if($reports->  company_name=='') {
                                 echo "no company name";
                               } else{
                               echo $reports->  company_name;
                             } ?></p>
                                        <div class="form-actions">
                                          <div class="col-md-offset-4 col-md-8"> <a href="{{url('admin/grienvance_procedure_delete/'.$reports->id)}}" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                              <!-- modal delete end -->
                            </td>
                          </tr>

                          @endforeach
                        </tbody>
                        <tfoot>
                          <tr>
                            <td colspan="8"></td>
                          </tr>
                        </tfoot>
                      </table>
                     
                      <div class="clearfix"></div>
                    </div>
                    <!-- end table responsive -->
                </div>
              </div><!-- end portlet-->
                </div>
                <!-- end tab view pdf -->
              </div>
              <!-- end tab content -->
            </div>
          </div>
        </div>
        <!--END CONTENT-->
            
            <!--BEGIN FOOTER-->
<div class="page-footer">
                <div class="copyright"><span class="text-15px">2014 © <a href="http://www.webqom.com" target="_blank">Webqom Technologies Sdn Bhd.</a> Any queries, please contact <a href="mailto:support@webqom.com">Webqom Support</a>.</span>
                  <div class="pull-right"><img src="images/logo_webqom.png" alt="Webqom Technologies"></div>
                </div>
        </div>
    <!--END FOOTER--></div>
  <!--END PAGE WRAPPER--></div>
</div>



                   <div id="false-alert" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                         <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete selected items? </h4>
                        </div>
                        <div class="modal-body">
                             <div class="form-actions">
                            <div class=" col-md-12"> 
                            <div class="alert alert-danger">
                               Please Select at least one item to delete
                            </div>

                             </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
<script src="js/jquery-1.9.1.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
   $(".close_btn_se").click(function(){
    // alert("hello world");
    $.ajaxSetup({
      headers:{
        'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
      }
    });
    $.ajax({
       url:'{{url("destory_session")}}',
       type:'get',
       success:function(data)
       {
        alert(data);
       }
    });
   });
  });
</script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>

<script src="js/jquery-ui.js"></script>
<!--loading bootstrap js-->

<script src="vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js"></script>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<script src="vendors/metisMenu/jquery.metisMenu.js"></script>
<script src="vendors/slimScroll/jquery.slimscroll.js"></script>
<script src="vendors/jquery-cookie/jquery.cookie.js"></script>
<script src="js/jquery.menu.js"></script>
<script src="vendors/jquery-pace/pace.min.js"></script>

<!--LOADING SCRIPTS FOR PAGE-->
<script src="vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="vendors/moment/moment.js"></script>
<script src="vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
<script src="vendors/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script src="vendors/bootstrap-clockface/js/clockface.js"></script>
<script src="vendors/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
<script src="vendors/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<script src="vendors/jquery-maskedinput/jquery-maskedinput.js"></script>
<script src="js/form-components.js"></script>
<!--LOADING SCRIPTS FOR PAGE-->
<script src="vendors/tinymce/js/tinymce/tinymce.min.js"></script>
<script src="vendors/ckeditor/ckeditor.js"></script>
<script src="js/ui-tabs-accordions-navs.js"></script>

<!--CORE JAVASCRIPT-->
<script src="js/main.js"></script>
<script src="js/holder.js"></script>

<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" type="text/javascript"></script>

<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable({
//your normal options

  "oLanguage": { "sSearch": "" } 

});
} );
</script>
<script>
$(document).ready(function(){

    $('input[name="check_all"]').change(function(e){
    
    if($(this).prop('checked')){
      $(".chkNumber").each(function(index){ $(this).prop('checked', true) });
    }else{
      $(".chkNumber").each(function(index){ $(this).prop('checked', false) });
    }
});

$(".deleteid").click(function(e){
    var a=this;
   $(".chkNumber").each(function(index){
   if($(this).is(':checked'))
   {
      
      $(a).attr('data-target','#modal-delete-selected');
    
      return false;
   }
   else{
         $(a).attr('data-target','#false-alert');
      
 
   }
   });
     

    });
    $('.ok_del').click(function(){
   var a=this;
   $(".chkNumber").each(function(index){
   if($(this).is(':checked'))
   {
      
      var id=$(this).data('id');
       var r=this;
      $.ajax({
      url:'{{url("delete_multiple")}}',
      type:'get',
      data:{id:id},
      
      success:function(data){
      alert(data);
      }
      });
      
   }
   else{
      alert('not id');
      
 
   }
   });
    
    });


});
</script>
</body>
</html>
<!DOCTYPE html>
<html lang="en"><!-- InstanceBegin template="/Templates/ir_admin_news_centre.dwt" codeOutsideHTMLIsLocked="false" -->
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">@include('includes.head')
<style type="text/css">
    div#main h3 {
  /*display: none;*/
  color: #cc0000;
}
   
table tbody > tr:nth-child(2n+1) > td, table tbody > tr:nth-child(2n+1) > th {
    background-color: #f9f9f9;
}

table th, table td {
    border-top: 1px solid #dddddd;
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
                                          <div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
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
                     <?php
                     $menuArr = array(
                                      'general',
                                      'dirprofile',
                                      'keymanagement',
                                      'ourproperties',
                                      'oursubsidiaries'
                                );
                    ?>
                    <li class="sidebar-heading"><h4>Investor Relations</h4></li>
                    <li @if(Request::segment(2) == 'irhome')class="active" @endif><a href="{{url()}}/admin/irhome"><i class="fa fa-signal fa-fw"></i><span class="menu-title">IR Home</span></a></li>
                   
                    <li @if(in_array(Request::segment(2),$menuArr)) class="active" @endif><a href="#"><i class="fa fa-info-circle fa-fw"></i><span class="menu-title">Corporate Information</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li @if(Request::segment(2) == 'general')class="active" @endif><a href="{{url()}}/admin/general">General</a></li>
                            <li @if(Request::segment(2) == 'dirprofile')class="active" @endif><a href="{{url()}}/admin/dirprofile">Directors' Profile</a></li>
                            <li @if(Request::segment(2) == 'keymanagement')class="active" @endif><a href="{{url()}}/admin/keymanagement">Key Management Team</a></li>
                            <li @if(Request::segment(2) == 'ourproperties')class="active" @endif><a href="{{url()}}/admin/ourproperties">Our Properties</a></li>
                            <li @if(Request::segment(2) == 'oursubsidiaries')class="active" @endif><a href="{{url()}}/admin/oursubsidiaries">Our Subsidiaries</a></li>
                        </ul>
                    </li>
                    <li @if(Request::segment(2) == 'corpgovernance')class="active" @endif><a href="{{url()}}/admin/corpgovernance"><i class="fa fa-tags fa-fw"></i><span class="menu-title">Corporate Governance</span></a></li>
                    <?php
                     $menuArr1 = array(
                                      'ipostatistics',
                                      'ipocompetitive',
                                      'iporiskfactors',
                                      'ipoutilisationproceeds',
                                      'ipoindustryoverview'
                                );
                    ?>
                    <li @if(in_array(Request::segment(2),$menuArr1)) class="active" @endif><a href="#"><i class="fa fa-puzzle-piece fa-fw"></i><span class="menu-title">IPO Centre</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li @if(Request::segment(2) == 'ipostatistics')class="active" @endif><a href="{{url()}}/admin/ipostatistics">IPO Statistics</a></li>
                            <li @if(Request::segment(2) == 'ipocompetitive')class="active" @endif><a href="{{url()}}/admin/ipocompetitive">Competitive Advantages</a></li>
                            <li @if(Request::segment(2) == 'iporiskfactors')class="active" @endif><a href="{{url()}}/admin/iporiskfactors">Risk Factors</a></li>
                            <li @if(Request::segment(2) == 'ipoutilisationproceeds')class="active" @endif><a href="{{url()}}/admin/ipoutilisationproceeds">Utilisation of Proceeds</a></li>
                            <li @if(Request::segment(2) == 'ipoindustryoverview')class="active" @endif><a href="{{url()}}/admin/ipoindustryoverview">Industry Overview</a></li>
                        </ul>
                    </li>
                    <?php
                     $menuArr2 = array(
                                      'priceticker',
                                      'priceandvolume',
                                      'shareholding',
                                      'topshareholders'
                                );
                    ?>
                    <li @if(in_array(Request::segment(2),$menuArr2)) class="active" @endif><a href="#"><i class="fa fa-dollar fa-fw"></i><span class="menu-title">Share Information</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li @if(Request::segment(2) == 'priceticker')class="active" @endif><a href="{{url()}}/admin/priceticker">Price Ticker</a></li>
                            <li @if(Request::segment(2) == 'ipostatistics')class="active" @endif><a href="share_info_stock_charts_list.html">Stock Charts</a></li>
                            <li @if(Request::segment(2) == 'priceandvolume')class="active" @endif><a href="{{url()}}/admin/priceandvolume">Price &amp; Volume</a></li>
                            <li @if(Request::segment(2) == 'shareholding')class="active" @endif><a href="{{url()}}/admin/shareholding">Analysis of Shareholdings</a></li>
                            <li @if(Request::segment(2) == 'topshareholders')class="active" @endif><a href="{{url()}}/admin/topshareholders">Top 30 Shareholders</a></li>
                        </ul>
                    </li>
                    <li @if(Request::segment(2) == 'entitlements')class="active" @endif><a href="{{url()}}/admin/entitlements"><i class="fa fa-dot-circle-o fa-fw"></i><span class="menu-title">Entitlements</span></a></li>
					<li @if(Request::segment(2) == 'entitlement')class="active" @endif><a href="{{url()}}/admin/entitlement"><i class="fa fa-dot-circle-o fa-fw"></i><span class="menu-title">Entitlements</span></a></li>
                     <?php
                     $menuArr3 = array(
                                      'financialhighlights',
                                      'financialcomprehensive',
                                      'financialposition',
                                      'flowstatements',
                                      'equity',
                                      'financialquarterlyreport',
                                      'financialinfosegmentalanalysis',
                                      'financialratioanalysis'
                                );
                    ?>
                    <li @if(in_array(Request::segment(2),$menuArr3)) class="active" @endif><a href="#"><i class="fa fa-bar-chart-o fa-fw"></i><span class="menu-title">Financial Information</span><span class="fa arrow"></span></a>
                    	<ul class="nav nav-second-level">
						  <!-- InstanceBeginEditable name="EditRegion3" -->
                            <li @if(Request::segment(2) == 'financialhighlights')class="active" @endif><a href="{{url()}}/admin/financialhighlights">Financial Highlights</a></li>
                            <li @if(Request::segment(2) == 'financialcomprehensive')class="active" @endif><a href="{{url()}}/admin/financialcomprehensive">Comprehensive Income</a></li>
                            <li @if(Request::segment(2) == 'financialposition')class="active" @endif><a href="{{url()}}/admin/financialposition">Financial Position</a></li>
                            <li @if(Request::segment(2) == 'flowstatements')class="active" @endif><a href="{{url()}}/admin/flowstatements">Cash Flow Statement</a></li>
                            <li @if(Request::segment(2) == 'equity')class="active" @endif><a href="{{url()}}/admin/equity">Statement of Changes in Equity</a></li>
                            <li @if(Request::segment(2) == 'financialquarterlyreport')class="active" @endif><a href="{{url()}}/admin/financialquarterlyreport">Latest Quarterly Report</a></li>
                            <li @if(Request::segment(2) == 'financialinfosegmentalanalysis')class="active" @endif><a href="{{url()}}/admin/financialinfosegmentalanalysis">Segmental Analysis</a></li>
                            <li @if(Request::segment(2) == 'financialratioanalysis')class="active" @endif><a href="{{url()}}/admin/financialratioanalysis">Ratio Analysis</a></li>
					
                    <!-- InstanceEndEditable -->
                        </ul>
                    </li>
                     <?php
                     $menuArr4 = array(
                                      'managementchairmansstatement',
                                      'managementreviewoperations',
                                      'managementpastperformancereview'
                                );
                    ?>
                    <li @if(in_array(Request::segment(2),$menuArr4)) class="active" @endif><a href="#"><i class="fa fa-user fa-fw"></i><span class="menu-title">Management Analysis</span><span class="fa arrow"></span></a>                        
                    	<ul class="nav nav-second-level">
                            <li @if(Request::segment(2) == 'managementchairmansstatement')class="active" @endif><a href="{{url()}}/admin/managementchairmansstatement">Chairman's Statement</a></li>
                            <li @if(Request::segment(2) == 'managementreviewoperations')class="active" @endif><a href="{{url()}}/admin/managementreviewoperations">Review of Operations</a></li>
                            <li @if(Request::segment(2) == 'managementpastperformancereview')class="active" @endif><a href="{{url()}}/admin/managementpastperformancereview">Past Performance Review</a></li>
                    	</ul>
                    </li>
					<?php
					$menuArr24=array(
					'investoralert','additionallisting','listingcircular','financialresult','generalannouncement','financialresultlisting','generalmeeting','specialannouncement','directorinterest','shareholderinterest','interestsubstanial','personceasing','auditcommittee','boardroom','chiefexecutive','principalofficer','address','companysecretary','registrar','treasury','shareimmediate','sharepursuant','sharecompanypursuant','newscenter'
					);
					?>
                    <li @if(in_array(Request::segment(2),$menuArr24)) class="active" @endif><a href="#"><i class="fa fa-bullhorn fa-fw"></i><span class="menu-title">News Centre</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li @if(Request::segment(2) == 'newscenter')class="active" @endif><a href="{{url()}}/admin/newscenter">Bursa Announcements</a></li>
                            <li @if(Request::segment(2) == 'investoralert')class="active" @endif><a href="{{url()}}/admin/investoralert">Investor Alert</a></li>
							<li @if(Request::segment(2) == 'additionallisting')class="active" @endif><a href="{{url()}}/admin/additionallisting">Additional Listing Announcement</a></li>
							<li @if(Request::segment(2) == 'listingcircular')class="active" @endif><a href="{{url()}}/admin/listingcircular">Listing circulars</a></li>
							<li @if(Request::segment(2) == 'financialresult')class="active" @endif><a href="{{url()}}/admin/financialresult">Financial results</a></li>
							<li @if(Request::segment(2) == 'generalannouncement')class="active" @endif><a href="{{url()}}/admin/generalannouncement">General announcement</a></li>
							<li @if(Request::segment(2) == 'financialresultlisting')class="active" @endif><a href="{{url()}}/admin/financialresultlisting"> Trading of rights announcement</a></li>
							<li @if(Request::segment(2) == 'generalmeeting')class="active" @endif><a href="{{url()}}/admin/generalmeeting">General meetings</a></li>
							<li @if(Request::segment(2) == 'specialannouncement')class="active" @endif><a href="{{url()}}/admin/specialannouncement">Special announcements</a></li>
							<li @if(Request::segment(2) == 'directorinterest')class="active" @endif><a href="{{url()}}/admin/directorinterest"> Changes in Director's Interest(S135)</a></li>
							<li @if(Request::segment(2) == 'shareholderinterest')class="active" @endif><a href="{{url()}}/admin/shareholderinterest">Changes in Substantial Shareholder's Interest(29B)</a></li>
							<li @if(Request::segment(2) == 'interestsubstanial')class="active" @endif><a href="{{url()}}/admin/interestsubstanial"> Notice of Interest Substantial  Shareholder (29A)</a></li>
							<li @if(Request::segment(2) == 'personceasing')class="active" @endif><a href="{{url()}}/admin/personceasing">Notice of Person Ceasing (29C)</a></li>
							<li @if(Request::segment(2) == 'auditcommittee')class="active" @endif><a href="{{url()}}/admin/auditcommittee"> Changes in Audit Committee</a></li>
							<li @if(Request::segment(2) == 'boardroom')class="active" @endif><a href="{{url()}}/admin/boardroom"> Change in Boardroom</a></li>
							<li @if(Request::segment(2) == 'chiefexecutive')class="active" @endif><a href="{{url()}}/admin/chiefexecutive">Change in Chief Executive Officer</a></li>
							<li @if(Request::segment(2) == 'principalofficer')class="active" @endif><a href="{{url()}}/admin/principalofficer"> Change in Principal Officer</a></li>
							<li @if(Request::segment(2) == 'address')class="active" @endif><a href="{{url()}}/admin/address"> Change of address</a></li>
							<li @if(Request::segment(2) == 'companysecretary')class="active" @endif><a href="{{url()}}/admin/companysecretary"> Change of Company Secretary</a></li>
							<li @if(Request::segment(2) == 'registrar')class="active" @endif><a href="{{url()}}/admin/registrar">Change of Registrar </a></li>
							<li @if(Request::segment(2) == 'treasury')class="active" @endif><a href="{{url()}}/admin/treasury">Notice of Resale/Cancellation of Treasury Share - Immediate Announcement</a></li>
							<li @if(Request::segment(2) == 'shareimmediate')class="active" @endif><a href="{{url()}}/admin/shareimmediate">Notice of Shares Buy Back -Immediate Announcement</a></li>
							<li @if(Request::segment(2) == 'sharepursuant')class="active" @endif><a href="{{url()}}/admin/sharepursuant">Notice of Shares Buy back by a Company Pursuant to Form 28A</a></li>
							<li @if(Request::segment(2) == 'sharecompanypursuant')class="active" @endif><a href="{{url()}}/admin/sharecompanypursuant">Notice of Shares Buy back by a Company Pursuant to Form 28B</a></li>
                        </ul>
                    </li>
                    <?php
                     $menuArr5 = array(
                                      'annualreports',
                                      'annualaudit',
                                      'quarterlyreports',
                                      'circularreports',
                                      'prospectusarreports',
                                      'analystreports'
                                );
                    ?>
                    <li @if(in_array(Request::segment(2),$menuArr5)) class="active" @endif><a href="#"><i class="fa fa-file-text fa-fw"></i><span class="menu-title">Reports</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li @if(Request::segment(2) == 'annualreports')class="active" @endif><a href="{{url()}}/admin/annualreports">Annual Reports</a></li>
                            <li @if(Request::segment(2) == 'annualaudit')class="active" @endif><a href="{{url()}}/admin/annualaudit">Annual Audited Accounts</a></li>
                            <li @if(Request::segment(2) == 'quarterlyreports')class="active" @endif><a href="{{url()}}/admin/quarterlyreports">Quarterly Reports</a></li>
                            <li @if(Request::segment(2) == 'circularreports')class="active" @endif><a href="{{url()}}/admin/circularreports">Circulars</a></li>
                            <li @if(Request::segment(2) == 'prospectusarreports')class="active" @endif><a href="{{url()}}/admin/prospectusarreports">Prospectus</a></li>
                            <li @if(Request::segment(2) == 'analystreports')class="active" @endif><a href="{{url()}}/admin/analystreports">Analyst Reports</a></li>
                        </ul>
                    </li>
                    <li @if(Request::segment(2) == 'newsalert')class="active" @endif><a href="#"><i class="fa fa-cog fa-fw"></i><span class="menu-title">Investor Tools</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li @if(Request::segment(2) == 'newsalert')class="active" @endif><a href="{{url()}}/admin/newsalert">News Alert</a></li>
                        </ul>
                    </li>
                    <li @if(Request::segment(2) == 'evencalendar')class="active" @endif><a href="{{url()}}/admin/evencalendar"><i class="fa fa-calendar fa-fw"></i><span class="menu-title">Event Calendar</span></a></li>
                </ul>
          </div>
    </nav>
        <!--END SIDEBAR MENU--><!--BEGIN PAGE WRAPPER-->
      <!-- InstanceEndEditable -->
          <!--END CONTENT-->
             
			 @yield('content')
            <!--BEGIN FOOTER-->
           <div class="page-footer">
                <div class="copyright"><span class="text-15px">2014 © <a href="http://www.webqom.com" target="_blank">Webqom Technologies Sdn Bhd.</a> Any queries, please contact <a href="mailto:support@webqom.com">Webqom Support</a>.</span>
                	<div class="pull-right">
                    {{HTML::image('images/logo_webqom.png','Webqom Technologies');}}
                                         </div>
                </div>
 </div>
    <!--END FOOTER--></div>
        <!--END PAGE WRAPPER--></div>
</div>
<script src="js/jquery-1.9.1.js"></script>
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
{{ HTML::script('js/main.js');}}
 {{ HTML::script('js/holder.js');}}
<!-- InstanceBeginEditable name="EditRegion4" -->
<script src="vendors/tinymce/js/tinymce/tinymce.min.js"></script>
<script src="vendors/ckeditor/ckeditor.js"></script>
<!-- InstanceEndEditable -->

<!--CORE JAVASCRIPT-->
<script src="js/main.js"></script>
<script src="js/holder.js"></script>
<script type="text/javascript">
function div_val1(id1){
var contt=$('#'+id1).html();
$("#textarea_"+id1).val(contt); 
}
function checkbox_val(id1){
 var check=$( "#active").attr('checked');
  if(check=='checked'){
  $( "#active").val(1);
  }else{  $( "#active").val(0);
  }
}
</script>
</body>
<!-- InstanceEnd --></html>
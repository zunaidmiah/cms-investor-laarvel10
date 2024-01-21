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
                            <li @if(Request::segment(2) == 'general')class="active" @endif><a href="{{url()}}/admin/general">Statutory Information</a></li>
                            <li @if(Request::segment(2) == 'dirprofile')class="active" @endif><a href="{{url()}}/admin/dirprofile">Board Of Directors</a></li>
                            <li @if(Request::segment(2) == 'keymanagement')class="active" @endif><a href="{{url()}}/admin/keymanagement">Management Team</a></li>
                            <li @if(Request::segment(2) == 'ourproperties')class="active" @endif><a href="{{url()}}/admin/ourproperties">Audit and Risk Management Committee</a></li>
                            <!--<li @if(Request::segment(2) == 'oursubsidiaries')class="active" @endif><a href="{{url()}}/admin/oursubsidiaries">Our Subsidiaries</a></li>-->
                        </ul>
                    </li>
                    <li @if(Request::segment(2) == 'corpgovernance')class="active" @endif><a href="{{url()}}/admin/corpgovernance"><i class="fa fa-tags fa-fw"></i><span class="menu-title">Whistle Blower Policy</span></a></li>
                    <?php
                     $menuArr1 = array(
                                      'ipostatistics',
                                      'ipocompetitive'
                                      //'iporiskfactors',
                                      //'ipoutilisationproceeds',
                                      //'ipoindustryoverview'
                                );
                    ?>
                    <li @if(in_array(Request::segment(2),$menuArr1)) class="active" @endif><a href="#"><i class="fa fa-puzzle-piece fa-fw"></i><span class="menu-title">Estate Information</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li @if(Request::segment(2) == 'ipostatistics')class="active" @endif><a href="{{url()}}/admin/ipostatistics">Estate Location</a></li>
                            <li @if(Request::segment(2) == 'ipocompetitive')class="active" @endif><a href="{{url()}}/admin/ipocompetitive">Estate Profile</a></li>
                           <!-- <li @if(Request::segment(2) == 'iporiskfactors')class="active" @endif><a href="{{url()}}/admin/iporiskfactors">Risk Factors</a></li>
                            <li @if(Request::segment(2) == 'ipoutilisationproceeds')class="active" @endif><a href="{{url()}}/admin/ipoutilisationproceeds">Utilisation of Proceeds</a></li>
                            <li @if(Request::segment(2) == 'ipoindustryoverview')class="active" @endif><a href="{{url()}}/admin/ipoindustryoverview">Industry Overview</a></li>-->
                        </ul>
                    </li>
                    <?php
                     $menuArr2 = array(
                                      'priceticker',
                                      'priceandvolume',
                                      //'shareholding',
                                      'topshareholders'
                                );
                    ?>
                    <li @if(in_array(Request::segment(2),$menuArr2)) class="active" @endif><a href="#"><i class="fa fa-dollar fa-fw"></i><span class="menu-title">Share Information</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li @if(Request::segment(2) == 'priceticker')class="active" @endif><a href="{{url()}}/admin/priceticker">Price Ticker</a></li>
<!--                            <li @if(Request::segment(2) == 'ipostatistics')class="active" @endif><a href="share_info_stock_charts_list.html">Stock Charts</a></li>-->
                            <li @if(Request::segment(2) == 'priceandvolume')class="active" @endif><a href="{{url()}}/admin/priceandvolume">Price &amp; Volume</a></li>
                            <!--<li @if(Request::segment(2) == 'shareholding')class="active" @endif><a href="{{url()}}/admin/shareholding">Analysis of Shareholdings</a></li>-->
                            <li @if(Request::segment(2) == 'topshareholders')class="active" @endif><a href="{{url()}}/admin/topshareholders">Shareholders</a></li>
                        </ul>
                    </li>
                   <!-- <li @if(Request::segment(2) == 'entitlements')class="active" @endif><a href="{{url()}}/admin/entitlements"><i class="fa fa-dot-circle-o fa-fw"></i><span class="menu-title">Entitlements</span></a></li>-->
					<!--<li @if(Request::segment(2) == 'entitlement')class="active" @endif><a href="{{url()}}/admin/entitlement"><i class="fa fa-dot-circle-o fa-fw"></i><span class="menu-title">Entitlements</span></a></li>-->
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
			
                            <li @if(Request::segment(2) == 'financialhighlights')class="active" @endif><a href="{{url()}}/admin/financialhighlights">Financial Statistics</a></li>
                            <li @if(Request::segment(2) == 'financialcomprehensive')class="active" @endif><a href="{{url()}}/admin/financialcomprehensive">Statements of Comprehensive Income</a></li>
                            <li @if(Request::segment(2) == 'financialposition')class="active" @endif><a href="{{url()}}/admin/financialposition">Statements of Financial Position</a></li>
                            <!--<li @if(Request::segment(2) == 'flowstatements')class="active" @endif><a href="{{url()}}/admin/flowstatements">Cash Flow Statement</a></li>-->
                            <!--<li @if(Request::segment(2) == 'equity')class="active" @endif><a href="{{url()}}/admin/equity">Statement of Changes in Equity</a></li>-->
                            <li @if(Request::segment(2) == 'financialinfosegmentalanalysis')class="active" @endif><a href="{{url()}}/admin/financialinfosegmentalanalysis">Highlights</a></li>
                            <li @if(Request::segment(2) == 'financialratioanalysis')class="active" @endif><a href="{{url()}}/admin/financialratioanalysis">Production Statistics</a></li>
							<li @if(Request::segment(2) == 'financialquarterlyreport')class="active" @endif><a href="{{url()}}/admin/financialquarterlyreport">Key Audit Matters</a></li>

                        </ul>
                    </li>

                     <?php
                     $menuArr4 = array(
                                      'managementchairmansstatement',
                                      'managementreviewoperations',
                                      'tor_board_nomination',
                                      'tor_audit_management',
                                );
                    ?>
                    <li @if(in_array(Request::segment(2),$menuArr4)) class="active" @endif><a href="#"><i class="fa fa-user fa-fw"></i><span class="menu-title">Governance</span><span class="fa arrow"></span></a>
                    	<ul class="nav nav-second-level">
                            <li @if(Request::segment(2) == 'managementchairmansstatement')class="active" @endif><a href="{{url()}}/admin/managementchairmansstatement">Corporate Governance</a></li>
                            <li @if(Request::segment(2) == 'managementreviewoperations')class="active" @endif><a href="{{url()}}/admin/managementreviewoperations">Board Charter</a></li>
                            <li @if(Request::segment(2) == 'tor_board_nomination')class="active" @endif><a href="{{url()}}/admin/tor_board_nomination">Terms of Reference - Board Nomination Committee</a></li>
                            <li @if(Request::segment(2) == 'tor_audit_management')class="active" @endif><a href="{{url()}}/admin/tor_audit_management">Terms of Reference - Audit &amp; Risk Management Committee</a></li>

                            <!--<li @if(Request::segment(2) == 'managementpastperformancereview')class="active" @endif><a href="{{url()}}/admin/managementpastperformancereview">Past Performance Review</a></li>-->
                    	</ul>
                    </li>


                     <?php
                     $menuArr4 = array(
                                      'sust_palm_oil',
                                      'sust_protection_biological',
                                      'sust_equality_gender',
                                      'sust_food_safety',
                                      'sust_quality',
                                      'sust_safety_health',
                                      'sust_safety',
                                      'sust_slop_river',
                                      'sust_certification',
                                      'sust_social'
                                );
                    ?>
                    <li @if(in_array(Request::segment(2),$menuArr4)) class="active" @endif><a href="#"><i class="fa fa-users fa-fw"></i><span class="menu-title">Sustainability</span><span class="fa arrow"></span></a>
                      <ul class="nav nav-second-level">

                            <li @if(Request::segment(2) == 'sust_palm_oil')class="active" @endif><a href="{{url()}}/admin/sust_palm_oil">Sustainable Palm Oil Policy</a></li>

                            <li @if(Request::segment(2) == 'sust_protection_biological')class="active" @endif><a href="{{url()}}/admin/sust_protection_biological">Environmental Protection & Biological Diversity Policy </a></li>

                            <li @if(Request::segment(2) == 'sust_equality_gender')class="active" @endif><a href="{{url()}}/admin/sust_equality_gender">Policy of Equality & Gender </a></li>

                            <li @if(Request::segment(2) == 'sust_food_safety')class="active" @endif><a href="{{url()}}/admin/sust_food_safety">Food Safety Policy</a></li>

                            <li @if(Request::segment(2) == 'sust_quality')class="active" @endif><a href="{{url()}}/admin/sust_quality">Quality Policy </a></li>

                            <li @if(Request::segment(2) == 'sust_safety_health')class="active" @endif><a href="{{url()}}/admin/sust_safety_health">Safety & Health Policy </a></li>

                            <li @if(Request::segment(2) == 'sust_safety')class="active" @endif><a href="{{url()}}/admin/sust_safety">Safety Policy </a></li>

                            <li @if(Request::segment(2) == 'sust_slop_river')class="active" @endif><a href="{{url()}}/admin/sust_slop_river">Slope & River Protection Policy </a></li>

                            <li @if(Request::segment(2) == 'sust_social')class="active" @endif><a href="{{url()}}/admin/sust_social">Social Policy </a></li>

                            <li @if(Request::segment(2) == 'sust_certification')class="active" @endif><a href="{{url()}}/admin/sust_certification">Certification </a></li>
                      </ul>
                    </li>
                    

					<?php
					$menuArr24=array(
					'investoralert','additionallisting','listingcircular','financialresult','generalannouncement','financialresultlisting','generalmeeting','specialannouncement','directorinterest','shareholderinterest','interestsubstanial','personceasing','auditcommittee','boardroom','chiefexecutive','principalofficer','address','companysecretary','registrar','treasury','shareimmediate','sharepursuant','sharecompanypursuant','newscenter'
					);
					?>
                    <li @if(in_array(Request::segment(2),$menuArr24)) class="active" @endif><a href="#"><i class="fa fa-bullhorn fa-fw"></i><span class="menu-title">News Centre</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li @if(Request::segment(2) == 'newscenter')class="active" @endif><a href="{{url()}}/admin/newscenter">Bursa Announcements Home</a></li>
                            <li @if(Request::segment(2) == 'investoralert')class="active" @endif><a href="{{url()}}/admin/investoralert">Investor Alert</a></li>
							<li @if(Request::segment(2) == 'additionallisting')class="active" @endif><a href="{{url()}}/admin/additionallisting">Additional Listing Announcement</a></li>
							<li @if(Request::segment(2) == 'listingcircular')class="active" @endif><a href="{{url()}}/admin/listingcircular">Listing Circulars</a></li>
							<li @if(Request::segment(2) == 'financialresult')class="active" @endif><a href="{{url()}}/admin/financialresult">Financial Results</a></li>
							<li @if(Request::segment(2) == 'generalannouncement')class="active" @endif><a href="{{url()}}/admin/generalannouncement">General Announcement</a></li>
							<li @if(Request::segment(2) == 'financialresultlisting')class="active" @endif><a href="{{url()}}/admin/financialresultlisting"> Trading of Rights Announcement</a></li>
							<li @if(Request::segment(2) == 'generalmeeting')class="active" @endif><a href="{{url()}}/admin/generalmeeting">General Meetings</a></li>
							<li @if(Request::segment(2) == 'specialannouncement')class="active" @endif><a href="{{url()}}/admin/specialannouncement">Special Announcements</a></li>
							<li @if(Request::segment(2) == 'directorinterest')class="active" @endif><a href="{{url()}}/admin/directorinterest"> Changes in Director's Interest (S135)</a></li>
							<li @if(Request::segment(2) == 'shareholderinterest')class="active" @endif><a href="{{url()}}/admin/shareholderinterest">Changes in Substantial Shareholder's Interest (29B)</a></li>
							<li @if(Request::segment(2) == 'interestsubstanial')class="active" @endif><a href="{{url()}}/admin/interestsubstanial"> Notice of Interest Substantial  Shareholder (29A)</a></li>
							<li @if(Request::segment(2) == 'personceasing')class="active" @endif><a href="{{url()}}/admin/personceasing">Notice of Person Ceasing (29C)</a></li>
							<li @if(Request::segment(2) == 'auditcommittee')class="active" @endif><a href="{{url()}}/admin/auditcommittee"> Changes in Audit Committee</a></li>
							<li @if(Request::segment(2) == 'boardroom')class="active" @endif><a href="{{url()}}/admin/boardroom"> Change in Boardroom</a></li>
							<li @if(Request::segment(2) == 'chiefexecutive')class="active" @endif><a href="{{url()}}/admin/chiefexecutive">Change in Chief Executive Officer</a></li>
							<li @if(Request::segment(2) == 'principalofficer')class="active" @endif><a href="{{url()}}/admin/principalofficer"> Change in Principal Officer</a></li>
							<li @if(Request::segment(2) == 'address')class="active" @endif><a href="{{url()}}/admin/address"> Change of Address</a></li>
							<li @if(Request::segment(2) == 'companysecretary')class="active" @endif><a href="{{url()}}/admin/companysecretary"> Change of Company Secretary</a></li>
							<li @if(Request::segment(2) == 'registrar')class="active" @endif><a href="{{url()}}/admin/registrar">Change of Registrar </a></li>
							<li @if(Request::segment(2) == 'treasury')class="active" @endif><a href="{{url()}}/admin/treasury">Notice of Resale/Cancellation of Treasury Share - Immediate Announcement</a></li>
							<li @if(Request::segment(2) == 'shareimmediate')class="active" @endif><a href="{{url()}}/admin/shareimmediate">Notice of Shares Buy Back - Immediate Announcement</a></li>
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
                            <!--<li @if(Request::segment(2) == 'annualaudit')class="active" @endif><a href="{{url()}}/admin/annualaudit">Annual Audited Accounts</a></li>-->
                            <li @if(Request::segment(2) == 'quarterlyreports')class="active" @endif><a href="{{url()}}/admin/quarterlyreports">Quarterly Reports</a></li>
                            <!--<li @if(Request::segment(2) == 'circularreports')class="active" @endif><a href="{{url()}}/admin/circularreports">Circulars</a></li>-->
                            <li @if(Request::segment(2) == 'prospectusarreports')class="active" @endif><a href="{{url()}}/admin/prospectusarreports">AGM/EGM/MSWG</a></li>
                            <!--<li @if(Request::segment(2) == 'analystreports')class="active" @endif><a href="{{url()}}/admin/analystreports">Analyst Reports</a></li>-->
                        </ul>
                    </li>
                    <li @if(Request::segment(2) == 'newsalert')class="active" @endif><a href="#"><i class="fa fa-cog fa-fw"></i><span class="menu-title">Investor Tools</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li @if(Request::segment(2) == 'newsalert')class="active" @endif><a href="{{url()}}/admin/newsalert">News Alert</a></li>
                        </ul>
                    </li>
                    <!--<li @if(Request::segment(2) == 'evencalendar')class="active" @endif><a href="{{url()}}/admin/evencalendar"><i class="fa fa-calendar fa-fw"></i><span class="menu-title">Event Calendar</span></a></li>-->
                </ul>
          </div>
    </nav>
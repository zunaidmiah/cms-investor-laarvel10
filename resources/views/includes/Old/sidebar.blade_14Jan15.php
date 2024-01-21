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
                  <li class="sidebar-heading"><h4>Main Menu</h4></li>
                  <li class="active"><a href="{{ url() }}/admin/dashboard"><i class="fa fa-laptop fa-fw"></i><span class="menu-title">Dashboard</span></a></li>
                  <li><a href="{{ url() }}/admin/index"><i class="fa fa-home fa-fw"></i><span class="menu-title">Index Page</span></a> </li>
				  <li><a href="#"><i class="fa fa-briefcase fa-fw"></i><span class="menu-title">Careers</span><span class="fa arrow"></span></a>	
                      <ul class="nav nav-second-level">
					    
                        <li class="active"><a href="{{ url() }}/admin/vaccancies">Vacancies Listing</a></li>
                        <li><a href="{{ url() }}/admin/applicants">Online Applicants Listing</a></li>
                      </ul>
                  </li>
                  <li class="sidebar-heading"><h4>Contacts</h4></li>
                  <li><a href="#"><i class="fa fa-map-marker fa-fw"></i><span class="menu-title">Contact Us</span><span class="fa arrow"></span></a>
					  <ul class="nav nav-second-level">
					  
                          <li><a href="{{ url() }}/admin/contacts/contactus">Contact Us</a></li>
                          <li><a href="{{ url() }}/admin/contacts/feedbacks">Feedback Listing</a></li>
                    </ul>
                  </li>
                  
                  <li class="sidebar-heading"><h4>Manufacturing</h4></li>
            	  <li><a href="#"><i class="fa fa-archive fa-fw"></i><span class="menu-title">Packaging Division</span><span class="fa arrow"></span></a>
                  	 <ul class="nav nav-second-level">
					   
                       <li><a href="{{ url() }}/admin/manufacturing/packaging/canpac">Canpac Sdn Bhd</a></li>
                       <li><a href="{{ url() }}/admin/manufacturing/packaging/southeast">South East Asia Paper Products Sdn Bhd</a></li>
                     </ul>
                  </li>
				  <li><a href="#"><i class="fa fa-fire fa-fw"></i><span class="menu-title">Palm Oil Refinery Division</span><span class="fa arrow"></span></a>
                  	  <ul class="nav nav-second-level"> 	
					   
                        <li><a href="{{ url() }}/admin/manufacturing/palmoil/refinery">Yee Lee Edible Oils Sdn Bhd</a></li>
                      </ul>
                  </li>
                  <li><a href="#"><i class="fa fa-tint fa-fw"></i><span class="menu-title">Palm Oil Mill Division</span><span class="fa arrow"></span></a>
                  	<ul class="nav nav-second-level">
					  
                      <li><a href="{{ url() }}/admin/manufacturing/palmoil/mill">Yee Lee Palm Oil Industries Sdn Bhd</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-heading"><h4>Trading</h4></li>
                  <li><a href="#"><i class="fa fa-truck fa-fw"></i><span class="menu-title">Trading Division</span><span class="fa arrow"></span></a>
					  <ul class="nav nav-second-level">
					  
                          <li><a href="{{ url() }}/admin/trading/yeelee">Yee Lee Trading Co. Sdn Bhd</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-heading"><h4>Plantation</h4></li>
                  <li><a href="#"><i class="fa fa-lemon-o fa-fw"></i><span class="menu-title">Oil Palm Estate</span><span class="fa arrow"></span></a>
                  	 <ul class="nav nav-second-level">
					   
                       <li><a href="{{ url() }}/admin/plantation/sementra">Sementra Plantations Sdn Bhd</a></li>
                     </ul>
                  </li>
				   <li><a href="#"><i class="fa fa-leaf fa-fw"></i><span class="menu-title">Tea Plantation</span><span class="fa arrow"></span></a>
                   	<ul class="nav nav-second-level">
					   
                      <li><a href="{{ url() }}/admin/teaplantation/teaplantation">Desa Tea Sdn Bhd</a></li>
                    </ul>
                  </li>  
                  <li class="sidebar-heading"><h4>Hospitality</h4></li>
                  <li><a href="#"><i class="fa fa-home fa-fw"></i><span class="menu-title">Hospitality Division</span><span class="fa arrow"></span></a>
                  	<ul class="nav nav-second-level">
					  
                      <li><a href="{{ url() }}/admin/hospitality/hospitality">Sabah Tea Resort Sdn Bhd</a></li>
                    </ul>
                  </li>
                  <li class="sidebar-heading"><h4>Investor Relations</h4></li>
                  
                  <li><a href="{{ url() }}/admin/company/announcements"><i class="fa fa-bullhorn fa-fw"></i><span class="menu-title">Announcements</span></a></li>
                  <li><a href="{{ url() }}/admin/annual/reports"><i class="fa fa-book fa-fw"></i><span class="menu-title">Annual Reports</span></a></li>
                  <li><a href="{{ url() }}/admin/investor/pressrelease"><i class="fa fa-file fa-fw"></i><span class="menu-title">Press Release</span></a></li>
                  <li class="sidebar-heading"><h4>User Management</h4></li>
                  <li><a href="{{ url() }}/admin/userslist"><i class="fa fa-users fa-fw"></i><span class="menu-title">Users Listing</span></a></li>
              </ul>
          </div>
    </nav>
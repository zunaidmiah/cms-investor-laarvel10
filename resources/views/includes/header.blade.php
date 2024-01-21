<div id="wrapper">
<nav id="topbar" role="navigation" style="margin-bottom: 0;" class="navbar navbar-default navbar-static-top">
  <div class="navbar-header">
    <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
    <a id="logo" href="http://www.webqom.com/web88.html" target="_blank" class="navbar-brand"><img src="/images/logo_web88.png"></a> </div>
  <div class="topbar-main"> <a id="logo" href="#" class="navbar-brand"><img src="/images/logo.jpg"></a> <a id="menu-toggle" href="#" class="btn hidden-xs"><i class="fa fa-bars"></i></a>
    <form id="topbar-search" action="" method="" class="hidden-sm hidden-xs">
      <div class="input-icon right"><a href="#"><i class="fa fa-search"></i></a>
        <input type="text" placeholder="Search here..." class="form-control"/>
      </div>
    </form>
    <ul class="nav navbar-top-links navbar-right">
      <li class="dropdown"><a data-toggle="dropdown" href="#" class="dropdown-toggle"><img src="/images/profile/image_hock.jpg" alt="" class="img-responsive img-circle"/>&nbsp;
        Support Webqom
        &nbsp;<span class="caret"></span></a>
        <ul class="dropdown-menu dropdown-user pull-right animated bounceInLeft">
          <li>
            <div class="navbar-content">
              <div class="row">
                <div class="col-md-5 col-xs-5"><img src="/images/profile/image_hock.jpg" alt="" class="img-responsive img-circle"/> </div>
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
                  <div class="col-md-6 col-xs-6"><a href="/logout" class="btn btn-default btn-sm pull-right">Sign Out</a></div>
                </div>
              </div>
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </div>
</nav>

<div id="modal-change-password" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
        <h4 id="modal-login-label" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Change Password</h4>
      </div>
      <div class="modal-body">
        <div class="form">
          <form id="form" class="form-horizontal">
            <div class="form-group">
              <label for="password" class="control-label col-md-4">Current Password</label>
              <div class="col-md-8">
                <div class="input-icon"><i class="fa fa-key"></i>
                  <input id="current_password" name="current_password" type="password" placeholder="Current Password" class="form-control"/>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="password" class="control-label col-md-4">New Password</label>
              <div class="col-md-8">
                <div class="input-icon"><i class="fa fa-key"></i>
                  <input id="password" name="password" type="password" placeholder="New Password" class="form-control"/>
                  <span class="text-10px">(Password length should be between 6-12 characters)</span> </div>
              </div>
            </div>
            <div class="form-group">
              <label for="password" class="control-label col-md-4">Confirm New Password</label>
              <div class="col-md-8">
                <div class="input-icon"><i class="fa fa-key"></i>
                  <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm New Password" class="form-control"/>
                  <span class="text-10px">(Password length should be between 6-12 characters)</span> </div>
              </div>
            </div>
            <div class="form-actions">
              <div class="col-md-offset-4 col-md-8"> <a href="#" id="pass" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
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
      <li class="sidebar-heading">
        <h4>Investor Relations</h4>
      </li>
      <li><a href="#"><span class="menu-title">Share Information</span></a>
        <ul class="nav nav-second-level in">
          <li class="active"><a href="/charts">Stock Charts</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
<div id="page-wrapper">
<!--BEGIN PAGE HEADER & BREADCRUMB-->

@extends('layouts.admin1')
@section('content')
        <!--END SIDEBAR MENU--><!--BEGIN PAGE WRAPPER-->
      <div id="page-wrapper"><!--BEGIN PAGE HEADER & BREADCRUMB-->
      
          <!-- InstanceBeginEditable name="EditRegion1" -->
          <div class="page-header-breadcrumb">
            <div class="page-heading hidden-xs">
              <h1 class="page-title">Bursa Announcements</h1>
            </div>
            <ol class="breadcrumb page-breadcrumb">
              <li><i class="fa fa-home"></i>&nbsp;<a href="dashboard.html">Dashboard</a>&nbsp; <i class="fa fa-angle-right"></i>&nbsp;</li>
              <li>Investor Relations &nbsp;<i class="fa fa-angle-right"></i>&nbsp;</li>
              <li>News Centre &nbsp;<i class="fa fa-angle-right"></i>&nbsp;</li>
              <li><a href="news_centre_bursa_announcements_list.html">Bursa Announcements</a> &nbsp;<i class="fa fa-angle-right"></i>&nbsp;</li>
              <li class="active">Changes in Substantial Shareholder's Interest (29B) - Listing</li>
            </ol>
          </div>
          <!-- InstanceEndEditable -->
          <!--END PAGE HEADER & BREADCRUMB--><!--BEGIN CONTENT-->
          <!-- InstanceBeginEditable name="EditRegion2" -->
          <div class="page-content">
          <div class="row">
            <div class="col-lg-12">
              <h2>Changes in Substantial Shareholder's Interest (29B) <i class="fa fa-angle-right"></i> Listing</h2>
              <div class="clearfix"></div>
              <div class="alert alert-success alert-dismissable">
                <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>The information has been saved/updated successfully.</p>
              </div>
              <div class="alert alert-danger alert-dismissable">
                <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                <i class="fa fa-times-circle"></i> <strong>Error!</strong>
                <p>The information has not been saved/updated. Please correct the errors.</p>
              </div>
              
              <div class="pull-left margin-top-10px"> Last updated: <span class="text-blue">15 Sept, 2014 @ 12.00PM</span> </div>
              <div class="pull-right"> <a href="#" class="btn btn-red btn-lg">Update Announcement &nbsp;<i class="fa fa-refresh"></i></a> </div>
              <div class="clearfix"></div>
              <p></p>
              
              <div class="portlet">
                 <div class="portlet-header">
                    <div class="caption">Page Info</div><br/>
                    <span class="text-blue text-12px">You can edit the content by clicking the text section below.</span>
                    <div class="tools">
                       <i class="fa fa-chevron-up"></i>
                    </div>
                 </div>
                 <div class="portlet-body">
                    <div contenteditable="true">
                       <h1>Bursa Announcements</h1>
                    </div>
                 </div>
     	      </div>
              
              <div class="portlet">
                 <div class="portlet-header">
                    <div class="caption">Page Content</div><br/>
                    <span class="text-blue text-12px">You can edit the content by clicking the text section below.</span>
                    <div class="tools">
                       <i class="fa fa-chevron-up"></i>
                    </div>
                 </div>
                 <div class="portlet-body">
                    <div contenteditable="true">
                       <h2 class="red-title pull-left"><span>Changes in Substantial Shareholder's Interest (29B)</span></h2>
                       <div class="clearfix"></div> 
                    </div>              
                 </div>
                 <!-- end portlet body -->
                    
              </div>
              <!-- End portlet -->
              
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Changes in Substantial Shareholder's Interest (29B) Announcements Listing</div>
                  <br/>
                  <p class="margin-top-10px"></p>
                  <a href="#" data-target="#modal-add-announcement" data-toggle="modal" class="btn btn-success">Add New Announcement &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary">Delete</button>
                    <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                    <ul role="menu" class="dropdown-menu">
                      <li><a href="#" data-target="#modal-delete-selected" data-toggle="modal">Delete selected item(s)</a></li>
                      <li class="divider"></li>
                      <li><a href="#" data-target="#modal-delete-all" data-toggle="modal">Delete all</a></li>
                    </ul>
                  </div>
                   
				  <div class="tools"> 
                  	<i class="fa fa-chevron-up"></i> 
                  </div>
                  <!--Modal Add New announcement start-->
                  <div id="modal-add-announcement" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog modal-wide-width">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label2" class="modal-title">Add New Announcement</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form">
                            <form class="form-horizontal">
                              <div class="form-group">
                                <label class="col-md-3 control-label">Status</label>
                                <div class="col-md-9">
                                  <div data-on="success" data-off="primary" class="make-switch">
                                    <input type="checkbox" checked="checked"/>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Company <span class='require'>*</span></label>
                                <div class="col-md-6">
                                  <input type="text" class="form-control" id="inputContent" value="OCK GROUP BERHAD">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Title <span class='require'>*</span></label>
                                <div class="col-md-6">
                                  <textarea name="inputContent" rows="2" class="form-control" id="inputContent"></textarea>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Announcement Date <span class='require'>*</span></label>
                                <div class="col-md-5">
                                  <div class="input-group">
                                    <input type="text" class="datepicker-default form-control" data-date-format="dd/mm/yyyy" placeholder="dd/mm/yyyy"/>
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputContent" class="col-md-3 control-label">Content</label>
                                <div class="col-md-9"> 
                                	note to programmer: please follow 100% front end style, including the list style in fckeditor.
                                   <p class="text-blue margin-top-10px border-bottom">You can add content by clicking the text below.</p>
                                   <div contenteditable="true">
                                   		<h5>Particulars of substantial Securities Holder</h5>
                                   </div>
                                   
                                   <div class="table-responsive">
                                       <div contenteditable="true">
                                       		<table class="table table-striped">
                                            <col />
                                            <col />
                        
                                            <tbody>
                                              <tr>
                                                 <td><strong>Name</strong></td>
                                                 <td>Please fill in content</td>
                                              </tr>
                                              <tr>
                                                 <td><strong>Address</strong></td>
                                                 <td>Please fill in content</td>
                                              </tr>
                                              <tr>
                                                 <td><strong>NRIC / Passport No / Company No.</strong></td>
                                                 <td>Please fill in content</td>
                                              </tr>
                                              <tr>
                                                 <td><strong>Nationality / Country of Incorporation</strong></td>
                                                 <td>Please fill in content</td>
                                              </tr>
                                              <tr>
                                                 <td><strong>Descriptions (Class &amp; Nominal Value)</strong></td>
                                                 <td>Please fill in content</td>
                                              </tr>
                                              <tr>
                                                 <td><strong>Name &amp; Address of Registered Holder</strong></td>
                                                 <td>Please fill in content</td>
                                              </tr>
                                                               
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tfoot>
                                          </table>
                                       </div>
                                   </div>
                                   <!-- end table responsive -->
                                   
                                   <div contenteditable="true">
                                   		<h5>Details of Changes</h5>
                                   </div>
                                   
                                   <div class="table-responsive">
                                   		<div contenteditable="true">
                                        	<table class="table table-striped">
                                            <col width="1" />
                                            <col width="1" />
                                            <col width="1" />
                                            <col width="1" />
                        
                                            <thead>
                                              <tr>
                                                <td><strong>Type of Transaction</strong></td>
                                                <td><strong>Date of Change</strong></td>
                                                <td><strong>No of Securities</strong></td>
                                                <td><strong>Price Transacted (RM)</strong></td>
                                              </tr>
                                            </thead>
                                            
                                            <tbody>
                                              <tr>
                                                 <td>Please fill in content</td>
                                                 <td>Please fill in content</td>
                                                 <td>Please fill in content</td>
                                                 <td>Please fill in content</td>
                                              </tr>
                                              <tr>
                                                 <td>Please fill in content</td>
                                                 <td>Please fill in content</td>
                                                 <td>Please fill in content</td>
                                                 <td>Please fill in content</td>
                                              </tr>
                                              <tr>
                                                 <td>Please fill in content</td>
                                                 <td>Please fill in content</td>
                                                 <td>Please fill in content</td>
                                                 <td>Please fill in content</td>
                                              </tr>
                                              <tr>
                                                 <td>Please fill in content</td>
                                                 <td>Please fill in content</td>
                                                 <td>Please fill in content</td>
                                                 <td>Please fill in content</td>
                                              </tr>                      
                                                               
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tfoot>
                                          </table>	
                                        </div>
                                   </div>
                                   <!-- end table responsive -->
                                   
                                   <div class="table-responsive">
                                   		<div contenteditable="true">
                                        	<table class="table table-striped">
                                            <col />
                                            <col />
                        
                                            <tbody>
                                              <tr>
                                                 <td><strong>Circumstances by reason of which change has occurred</strong></td>
                                                 <td>Please fill in content</td>
                                              </tr>
                                              <tr>
                                                 <td><strong>Nature of Interest</strong></td>
                                                 <td>Please fill in content</td>
                                              </tr>
                                              <tr>
                                                 <td><strong>Direct (Units)</strong></td>
                                                 <td>Please fill in content</td>
                                              </tr>
                                              <tr>
                                                 <td><strong>Direct (%)</strong></td>
                                                 <td>Please fill in content</td>
                                              </tr>
                                              <tr>
                                                 <td><strong>Indirect / Deemed Interest (Units)</strong></td>
                                                 <td>Please fill in content</td>
                                              </tr>
                                              <tr>
                                                 <td><strong>Indirect / Deemed Interest (%)</strong></td>
                                                 <td>Please fill in content</td>
                                              </tr>
                                              <tr>
                                                 <td><strong>Total No of Securities After Change</strong></td>
                                                 <td>Please fill in content</td>
                                              </tr>
                                              <tr>
                                                 <td><strong>Date of Notice</strong></td>
                                                 <td>Please fill in content</td>
                                              </tr>
                                                               
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td></td>
                                                    <td></td>
                                                </tr>
                                            </tfoot>
                                          </table>
                                        </div>
                                   </div>
                                   <!-- end table responsive -->
                                   
                                   <div contenteditable="true">
                                   		<p>Remarks: N/A.</p> 
                                   </div>
                                   
								   <!-- Info Resalt-->
                                  <div class="info_resalt border_bottom">
                                      <div class="row-fluid">
                                        <div class="col-lg-12">
                                          <div contenteditable="true">
                                          	<h2 class="red-title"><span>Announcement Info</span></h2>
                                          </div>
                                          <div contenteditable="true">
                                              <div class="alert alert-error">
                                                  <strong>Reference No:</strong> Please fill in reference no.  
                                              </div>
                                          </div>
                                        </div>      
                                      </div>
                                      
                                  </div>
                                  <!-- End Info Resalt-->
                                   
                                </div>
                              </div>
                              <div class="form-actions">
                                <div class="col-md-offset-5 col-md-8"> <a href="#" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--END MODAL Add New announcement-->
                  <!--Modal delete selected items start-->
                  <div id="modal-delete-selected" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the selected item(s)? </h4>
                        </div>
                        <div class="modal-body">
                          <p><strong>#1:</strong> 26 Sept, 2014 - Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </p>
                          <div class="form-actions">
                            <div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                  <div class="form-inline pull-left">
                    <div class="form-group">
                      <select name="select" class="form-control">
                        <option>10</option>
                        <option>20</option>
                        <option selected="selected">30</option>
                        <option>50</option>
                        <option>100</option>
                      </select>
                      &nbsp;
                      <label class="control-label">Records per page</label>
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <br/>
                  <br/>
                  <table class="table table-hover table-striped">
                    <thead>
                      <tr>
                        <th width="1%"><input type="checkbox"/></th>
                        <th>#</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Company</th>
                        <th>Title</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="checkbox"/></td>
                        <td>1</td>
                        <td><span class="label label-sm label-success">Active</span></td>
                        <td>26 Sept, 2014</td>
                        <td>OCK GROUP BERHAD</td>
                        <td>Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera</td>
                        <td><a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-announcement" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-1" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                            <!--Modal edit announcement start-->
                              <div id="modal-edit-announcement" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                <div class="modal-dialog modal-wide-width">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                      <h4 id="modal-login-label2" class="modal-title">Edit Announcement</h4>
                                    </div>
                                    <div class="modal-body">
                                      <div class="form">
                                        <form class="form-horizontal">
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Status</label>
                                            <div class="col-md-9">
                                              <div data-on="success" data-off="primary" class="make-switch">
                                                <input type="checkbox" checked="checked"/>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Company <span class='require'>*</span></label>
                                            <div class="col-md-6">
                                              <input type="text" class="form-control" id="inputContent" value="OCK GROUP BERHAD">
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Title <span class='require'>*</span></label>
                                            <div class="col-md-6">
                                              <textarea name="inputContent" rows="2" class="form-control" id="inputContent">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera</textarea>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Announcement Date <span class='require'>*</span></label>
                                            <div class="col-md-5">
                                              <div class="input-group">
                                                <input type="text" class="datepicker-default form-control" data-date-format="dd/mm/yyyy" placeholder="dd/mm/yyyy" value="26 Sept, 2014"/>
                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label for="inputContent" class="col-md-3 control-label">Content</label>
                                            <div class="col-md-9"> 
                                                note to programmer: please follow 100% front end style, including the list style in fckeditor.
                                               <p class="text-blue margin-top-10px border-bottom">You can add content by clicking the text below.</p>
                                               <div contenteditable="true">
                                                    <h5>Particulars of substantial Securities Holder</h5>
                                               </div>
                                               
                                               <div class="table-responsive">
                                                   <div contenteditable="true">
                                                        <table class="table table-striped">
                                                        <col />
                                                        <col />
                                    
                                                        <tbody>
                                                          <tr>
                                                             <td><strong>Name</strong></td>
                                                             <td>Lembaga Tabung Angkatan Tentera</td>
                                                          </tr>
                                                          <tr>
                                                             <td><strong>Address</strong></td>
                                                             <td>Tingkat 10-12 Bangunan LTAT, Jalan Bukit Bintang, 55100 Kuala Lumpur</td>
                                                          </tr>
                                                          <tr>
                                                             <td><strong>NRIC / Passport No / Company No.</strong></td>
                                                             <td>ACT101 1973</td>
                                                          </tr>
                                                          <tr>
                                                             <td><strong>Nationality / Country of Incorporation</strong></td>
                                                             <td>Malaysia</td>
                                                          </tr>
                                                          <tr>
                                                             <td><strong>Descriptions (Class &amp; Nominal Value)</strong></td>
                                                             <td>Ordinary Shares of RM0.10 each</td>
                                                          </tr>
                                                          <tr>
                                                             <td><strong>Name &amp; Address of Registered Holder</strong></td>
                                                             <td>Lembaga Tabung Angkatan Tentera, Tingkat 10-12 Bangunan LTAT, Jalan Bukit Bintang, 55100 Kuala Lumpur</td>
                                                          </tr>
                                                                           
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                        </tfoot>
                                                      </table>
                                                   </div>
                                               </div>
                                               <!-- end table responsive -->
                                               
                                               <div contenteditable="true">
                                                    <h5>Details of Changes</h5>
                                               </div>
                                               
                                               <div class="table-responsive">
                                                    <div contenteditable="true">
                                                        <table class="table table-striped">
                                                        <col width="1" />
                                                        <col width="1" />
                                                        <col width="1" />
                                                        <col width="1" />
                                    
                                                        <thead>
                                                          <tr>
                                                            <td><strong>Type of Transaction</strong></td>
                                                            <td><strong>Date of Change</strong></td>
                                                            <td><strong>No of Securities</strong></td>
                                                            <td><strong>Price Transacted (RM)</strong></td>
                                                          </tr>
                                                        </thead>
                                                        
                                                        <tbody>
                                                          <tr>
                                                             <td>Acquired</td>
                                                             <td>18/09/2014</td>
                                                             <td>1,069,000</td>
                                                             <td></td>
                                                          </tr>
                                                          <tr>
                                                             <td>Disposed</td>
                                                             <td>19/09/2014 </td>
                                                             <td>2,034,100</td>
                                                             <td></td>
                                                          </tr>
                                                          <tr>
                                                             <td>Acquired</td>
                                                             <td>22/09/2014</td>
                                                             <td>124,100</td>
                                                             <td></td>
                                                          </tr>
                                                          <tr>
                                                             <td>Acquired</td>
                                                             <td>23/09/2014</td>
                                                             <td>80,000</td>
                                                             <td></td>
                                                          </tr>                      
                                                                           
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                        </tfoot>
                                                      </table>	
                                                    </div>
                                               </div>
                                               <!-- end table responsive -->
                                               
                                               <div class="table-responsive">
                                                    <div contenteditable="true">
                                                        <table class="table table-striped">
                                                        <col />
                                                        <col />
                                    
                                                        <tbody>
                                                          <tr>
                                                             <td><strong>Circumstances by reason of which change has occurred</strong></td>
                                                             <td>Dealings of Shares</td>
                                                          </tr>
                                                          <tr>
                                                             <td><strong>Nature of Interest</strong></td>
                                                             <td>Direct Interest</td>
                                                          </tr>
                                                          <tr>
                                                             <td><strong>Direct (Units)</strong></td>
                                                             <td>49,076,300</td>
                                                          </tr>
                                                          <tr>
                                                             <td><strong>Direct (%)</strong></td>
                                                             <td>14.35</td>
                                                          </tr>
                                                          <tr>
                                                             <td><strong>Indirect / Deemed Interest (Units)</strong></td>
                                                             <td>0</td>
                                                          </tr>
                                                          <tr>
                                                             <td><strong>Indirect / Deemed Interest (%)</strong></td>
                                                             <td>0</td>
                                                          </tr>
                                                          <tr>
                                                             <td><strong>Total No of Securities After Change</strong></td>
                                                             <td>49,076,300</td>
                                                          </tr>
                                                          <tr>
                                                             <td><strong>Date of Notice</strong></td>
                                                             <td>26/09/2014</td>
                                                          </tr>
                                                                           
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <td></td>
                                                                <td></td>
                                                            </tr>
                                                        </tfoot>
                                                      </table>
                                                    </div>
                                               </div>
                                               <!-- end table responsive -->
                                               
                                               <div contenteditable="true">
                                                    <p>Remarks: N/A.</p> 
                                               </div>
                                               
                                               <!-- Info Resalt-->
                                              <div class="info_resalt border_bottom">
                                                  <div class="row-fluid">
                                                    <div class="col-lg-12">
                                                      <div contenteditable="true">
                                                        <h2 class="red-title"><span>Announcement Info</span></h2>
                                                      </div>
                                                      <div contenteditable="true">
                                                          <div class="alert alert-error">
                                                              <strong>Reference No:</strong>  CC-140926-BE17B  
                                                          </div>
                                                      </div>
                                                    </div>      
                                                  </div>
                                                  
                                              </div>
                                              <!-- End Info Resalt-->
                                               
                                            </div>
                                          </div>
                                          <div class="form-actions">
                                            <div class="col-md-offset-5 col-md-8"> <a href="#" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                          </div>
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--END MODAL edit announcement-->
                            <!--Modal delete start-->
                            <div id="modal-delete-1" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                    <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this announcement? </h4>
                                  </div>
                                  <div class="modal-body">
                                    <p><strong>#1:</strong> 26 Sept, 2014 - Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </p>
                                    <div class="form-actions">
                                      <div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <!-- modal delete end -->
                           
                        </td>
                      </tr>
                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan="7"></td>
                      </tr>
                    </tfoot>
                  </table>
                  <div class="tool-footer text-right">
                    <p class="pull-left">Showing 1 to 10 of 57 entries</p>
                    <ul class="pagination pagination mtm mbm">
                      <li class="disabled"><a href="#">&laquo;</a></li>
                      <li class="active"><a href="#">1</a></li>
<li><a href="#">2</a></li>
<li><a href="#">3</a></li>
<li><a href="#">4</a></li>
<li><a href="#">5</a></li>
<li><a href="#">&raquo;</a></li>
</ul>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              
                      
                      
            </div>
          </div>
        </div>
         @stop
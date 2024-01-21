@extends('layouts.admin')
@section('content')
  <!--<div class="page-content">-->
          <div class="row">
            <div class="col-lg-12">
               <h2>Bursa Announcements <i class="fa fa-angle-right"></i></h2>
              <div class="clearfix"></div>
              
               <div class="pull-left margin-top-10px">
              	Last updated: <span class="text-blue">{{ date("d F Y",strtotime($page[0]->updated_at)) }} @ {{ date("g:i A",strtotime($page[0]->updated_at)) }}</span>
              </div>
              
             
              <div class="clearfix"></div>
              <p></p>
                {{ Form::open(array('url' => 'admin/page/savepage','class'=> 'form-horizontal','method' => 'post','name' => 'corporategeneral','id' => 'corporategeneral')) }} 
		   {{Form::hidden('preview','')}}
           {{Form::hidden('pageid',$page[0]->id)}}
           {{Form::hidden('type',$page[0]->type)}}

              <div class="portlet">
                 <div class="portlet-header">
                     <div class="caption">Page Info</div><br/>
                     <span class="text-blue text-12px">You can edit the content by clicking the text section below.</span>
                     <div class="tools">
                        <i class="fa fa-chevron-up"></i>
                     </div>
                 </div>
                 <div class="portlet-body">
				  <div contenteditable="true" id="page-title">
                  {{ $page[0]->page_title }}
                  </div>
                  {{ Form::textarea('page_title',$page[0]->page_title,array("id" => "textarea-page-title","class" => "hideThisField")) }}
                  
                 </div>
              </div>
              <div class="clearfix"></div>
       		  
              <div class="portlet">	
              	<div class="portlet-header">
                     <div class="caption">Page Content</div>
                     <div class="tools">
                        <i class="fa fa-chevron-up"></i>
                     </div>
                 </div>
                 
                <div class="portlet-body"> 
                 
           <div class="info_white1 border_bottom">
              <h2 class="red-title pull-left"><span>Type of Announcements / News</span></h2>
              <div class="clearfix"></div>

              <div class="row-fluid">
                <div class="span6">
                   <ul class="list icons">
                    	<li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/frontadditionallisting">Additional Listing Announcement</a></li>
                        <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/frontentitlement">Entitlements</a></li>
                        <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/frontinvestoralert">Investor Alert</a></li>
                        <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/frontlistingcircular">Listing Circulars</a></li>
                        <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/fronttradingright">Trading of Rights Announcement</a></li>
                    </ul> 	
                </div>  
                
                <div class="span6">
                   <ul class="list icons">
                    	<li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/frontfinanciallisting">Financial Results</a></li>
                        <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/frontgeneralannouncementlisting">General Announcement</a></li>
                        <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/frontgeneralmeetinglisting">General Meetings</a></li>
                        <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/frontspecialannouncementlisting">Special Announcements</a></li>
                    </ul> 	
                </div> 
                <div class="clearfix"></div>
     
              </div> 
              
              <h5 class="margin_top_10px">Changes in Shareholdings</h5>
              <div class="row-fluid">
              	 
                 <div class="span6">
                   <ul class="list icons">
                    	<li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/directorinterest">Changes in Director's Interest (S135)</a></li>
                        <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/shareholderinterest">Changes in Substantial Shareholder's Interest (29B)</a></li>
                    </ul> 	
                </div>
                
                <div class="span6">
                   <ul class="list icons">
                        <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/interestshareholderlist">Notice of Interest Substantial Shareholder (29A)</a></li>
                        <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/personceasing">Notice of Person Ceasing (29C)</a></li>
                    </ul> 	
                </div>
                
              </div> 
              
              <h5 class="margin_top_10px">Changes of Corporate Information</h5>
              <div class="row-fluid">
              	 
                 <div class="span6">
                   <ul class="list icons">
                      <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/auditcommittee">Changes in Audit Committee</a></li>
                      <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/boardroom">Change in Boardroom</a></li>
                      <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/chiefexecutiveofficer">Change in Chief Executive Officer</a></li>
                      <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/principalofficer">Change in Principal Officer</a></li>
                      
                    </ul> 	
                </div>
                
                <div class="span6">
                   <ul class="list icons">
                     <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/addresslisting">Change of Address</a></li>
                     <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/compsectretarylisting">Change of Company Secretary</a></li>
                     <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/registrarlist">Change of Registrar</a></li>
                    </ul> 	
                </div>
                
              </div>
              
              
              <h5 class="margin_top_10px">Shares Buy Back</h5>
              <div class="row-fluid">
              	 
                 <div class="span6">
                   <ul class="list icons">
                    	<li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/resale">Notice of Resale/Cancellation of Treasury Share - Immediate Announcement</a></li>
                        <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/immediateannouncement">Notice of Shares Buy Back - Immediate Announcement</a></li>
                    </ul> 	
                </div>
                
                <div class="span6">
                   <ul class="list icons">
                        <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/companypursuant">Notice of Shares Buy Back by a Company Pursuant to Form 28A</a></li>
                        <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/sharecompanypursuant">Notice of Shares Buy Back by a Company Pursuant to Form 28B</a></li>
                    </ul> 	
                </div>
                
              </div>  
                               
          </div>
                  
                  
                  
                </div>
                <!-- End portlet body -->
         
                  
              </div>
              <!-- End portlet -->

   <div class="form-actions none-bg"> <a href="javascript:void(0);" class="btn btn-red" onclick="Addsavepage('corporategeneral','');">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp; <button type="submit" class="btn btn-blue">Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></button>&nbsp; <a href="#" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
					  
					  {{Form :: close()}}
                      
                      <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Bursa Announcements Link Listing</div>
                  <br/>
                  <p class="margin-top-10px"></p>
                  <a href="#" data-target="#modal-add-link" data-toggle="modal" class="btn btn-success">Add New Link &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
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
                  <div id="modal-add-link" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog modal-wide-width">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label2" class="modal-title">Add New Announcement Link</h4>
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
                                <label class="col-md-3 control-label">Announcement Name <span class='require'>*</span></label>
                                <div class="col-md-6">
                                  <input type="text" class="form-control" id="inputContent" value="">
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="col-md-3 control-label">Announcement URL <span class='require'>*</span></label>
                                <div class="col-md-6">
                                  <div class="input-icon"><i class="fa fa-link"></i>
                                     <input type="text" placeholder="http://" class="form-control"/>
                                  </div>
                                </div>
                              </div>

                              <div class="form-group">
                              	 <label class="col-md-3 control-label">Type of Announcement <span class='require'>*</span></label>
                                 <div class="col-md-6">
                                      <select name="select" class="form-control">
                                        <option>-  Please select -</option>
                                        <option>General Announcement</option>
                                        <option>Entitlements</option>
                                        <option>Investor Alert</option>
                                        <option>Listing Circulars</option>
                                        <option>List all types of announcement here</option>
                                      </select>
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
                          <p><strong>#1:</strong> MONTHLY PRODUCTION FIGURES (MINING / PLANTATION / TIMBER)</p>
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
                        <th>Announcement Name</th>
                        <th>Type of Announcement</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><input type="checkbox"/></td>
                        <td>1</td>
                        <td><span class="label label-sm label-success">Active</span></td>
                        <td>MONTHLY PRODUCTION FIGURES (MINING / PLANTATION / TIMBER)</td>
                        <td>General Announcement</td>
                        <td><a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-announcement-link" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-1" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                              <!--Modal edit announcement start-->
                              <div id="modal-edit-announcement-link" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
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
                                            <label class="col-md-3 control-label">Announcement Name <span class='require'>*</span></label>
                                            <div class="col-md-6">
                                              <input type="text" class="form-control" id="inputContent" value="MONTHLY PRODUCTION FIGURES (MINING / PLANTATION / TIMBER)">
                                            </div>
                                          </div>
                                          
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Announcement URL <span class='require'>*</span></label>
                                            <div class="col-md-6">
                                              <div class="input-icon"><i class="fa fa-link"></i>
                                                 <input type="text" placeholder="http://" class="form-control"  value="http://www.bursamalaysia.com/market/listed-companies/company-announcements/6309573"/>
                                              </div>
                                            </div>
                                          </div>
            
                                          <div class="form-group">
                                             <label class="col-md-3 control-label">Type of Announcement <span class='require'>*</span></label>
                                             <div class="col-md-6">
                                                  <select name="select" class="form-control">
                                                    <option>-  Please select -</option>
                                                    <option selected="selected">General Announcement</option>
                                                    <option>Entitlements</option>
                                                    <option>Investor Alert</option>
                                                    <option>Listing Circulars</option>
                                                    <option>List all types of announcement here</option>
                                                  </select>
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
                                    <p><strong>#1:</strong> 25 June, 2014 - Change in Chief Executive Officer</p>
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
              </div><!-- end portlet -->
                      
            </div><!-- end col-lg-12-->
          </div><!-- end row -->
        <!--</div>-->
@stop
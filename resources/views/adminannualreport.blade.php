@extends('layouts.admin')
@section('content')

      <div class="row">
            <div class="col-lg-12">
              <h2>Annual Reports <i class="fa fa-angle-right"></i> Listing</h2>
              <div class="clearfix"></div>
              <!--<div class="alert alert-success alert-dismissable">
                <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>The information has been saved/updated successfully.</p>
              </div>-->
              <!--<div class="alert alert-danger alert-dismissable">
                <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                <i class="fa fa-times-circle"></i> <strong>Error!</strong>
                <p>The information has not been saved/updated. Please correct the errors.</p>
              </div>-->
              
              <div class="pull-left margin-top-10px"> Last updated: <span class="text-blue"> {{ date("d F Y",strtotime($page[0]->updated_at)) }} @ {{ date("g:i A",strtotime($page[0]->updated_at)) }}
</span> </div>
              <div class="clearfix"></div>
              <p></p>
              
           {{ Form::open(array('url' => 'admin/page/savepage','class'=> 'form-horizontal','method' => 'post','name' => 'annualreportsave','id' => 'annualreportsave')) }} 
		   {{Form::hidden('preview','')}}
           {{Form::hidden('pageid',$page[0]->id)}}
           {{Form::hidden('type',$page[0]->type)}}
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Page Info</div>
                  <div class="clearfix"></div>
                  <span class="text-blue text-12px">You can edit the content by clicking the text section below.</span>
                  <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                </div>
                <div class="portlet-body">
                    <div contenteditable="true" id="page-title">
                  {{ $page[0]->page_title }}
                  </div>
                  {{ Form::textarea('page_title',$page[0]->page_title,array("id" => "textarea-page-title","class" => "hideThisField")) }}
                </div>
				
				
              </div>
              
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Page Content</div>
                  <div class="clearfix"></div>
                  <span class="text-blue text-12px">You can edit the content by clicking the text section below.</span>
                  <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                </div>
				<div class="portlet-body">
                  <div class="container">
                  	 <div class="clearfix">
                     	<div class="grid_12">
                        	<header class="entry-header clearfix">
                              <div class="format-icon">
                                <div class="format-icon-inner"> <i class="icon-book"></i> </div>
                              </div>
                              <div class="entry-header-inner">
                                <div contenteditable="true" id="left-block1-title">
                          {{ $page[0]->left_block1_title }}
                            </div>
               {{ Form::textarea('left_block1_title',$page[0]->left_block1_title,array("id" => "textarea-left-block1-title","class" => "hideThisField")) }}
                              </div>
                            </header>
                            <div class="hr"></div>
                            <div class="clearfix"></div>
                        </div>
                     </div>
                  </div>
                </div>
				
               
              	<!-- save button start -->
                <div class="form-actions none-bg"> <a href="javascript:void(0);" class="btn btn-red" onclick="Addsavepage('annualreportsave','investorrelations/annualreports');">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp; <button type="submit" class="btn btn-blue">Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></button>&nbsp; <a href="#" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                <!-- save button end -->
                
              </div>
           
            <!--Modal Edit Google Map start-->
              
              <!--END MODAL Edit Map-->
             
           
              {{ Form::close() }}
              
              </div>
              <!-- end portlet -->
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Annual Reports Listing</div>
                  <br/>
                  <p class="margin-top-10px"></p>
                  <a href="#" data-target="#modal-add-new-banner" data-toggle="modal" class="btn btn-success">Add New &nbsp;<i class="fa fa-plus"></i></a>
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary">Delete</button>
                    <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                    <ul role="menu" class="dropdown-menu">
                      <li><a href="#" data-target="#modal-delete-selected" data-toggle="modal" class="deleteid" rel="{{url();}}/admin/page/deletemultipleannual" rev="modal-delete-selected">Delete selected item(s)</a></li>
                      <li class="divider"></li>
                      <li><a href="#" data-target="#modal-delete-all" data-toggle="modal">Delete all</a></li>
                    </ul>
                  </div>
                   
<div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                  <!--Modal Add New Banner start-->
                  <div id="modal-add-new-banner" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog modal-wide-width">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label3" class="modal-title">Add New Banner Image</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form">
                          {{ Form::open(array('url' => 'admin/annual/addreports', 'method' => 'post', 'class' => 'form-horizontal','files' => true)) }}  
                              <div class="form-group">
                                <label class="col-md-4 control-label">Status</label>
                                <div class="col-md-8">
                                  <div data-on="success" data-off="primary" class="make-switch">
                                    {{Form::checkbox('active', 1,array('id'=>'active','class' => 'form-control'))}}
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-4 control-label">Title <span class='require'>*</span></label>
                                <div class="col-md-8">
                                  {{Form::text('title', null,array('id'=>'title','class' => 'form-control','placeholder' => 'Title'))}}
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-4 control-label">Short Description<span class='require'>*</span></label>
                                <div class="col-md-2">
                                   {{Form::textarea('short_description', '',array('id'=>'short_description','class' => 'form-control','rows' => '3'))}}
                                </div>
                                <div class="col-md-8 pull-right"> <span class="help-block">Display order is to determine the item appearing sequence in the website.</span> </div>
                              </div>
							    <div class="form-group">
                                <label class="col-md-4 control-label">Date<span class='require'>*</span></label>
                                <div class="col-md-2">
                                    {{Form::text('date','',array('id'=>'date','class' => 'datepicker-default form-control','data-date-format' => 'dd/mm/yyyy', 'placeholder' => 'dd/mm/yyyy'))}}  
                                </div>
                                <div class="col-md-8 pull-right"> <span class="help-block">Display order is to determine the item appearing sequence in the website.</span> </div>
                              </div>
                              <div class="form-group">
                                   <label class="col-md-4 control-label">Upload Report<br/> Cover <span class='require'>*</span></label>
                                <div class="col-md-8">
                                  <div class="text-15px margin-top-10px">
                                    {{Form::file('image', null,array('id'=>'imageInput'))}}
                                    <br/>
                                    <span class="help-block">(Image dimension: 200 x 248 pixels, JPEG/GIF/PNG only, Max. 2MB) </span> </div>
                                </div>
                              </div>
							         <div class="form-group">
                                   <label class="col-md-4 control-label">Upload PDF <span class='require'>*</span></label>
                                <div class="col-md-8">
                                  <div class="text-15px margin-top-10px">
                                    {{Form::file('pdf', null,array('id'=>'pdfInput'))}}
                                    </div>
                                </div>
                              </div>
                              <div class="form-actions">
                                <div class="col-md-offset-5 col-md-8"> <button type="submit" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                              </div>
                           {{Form::close()}}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--END MODAL Add New Banner-->
                  <!--Modal delete selected items start-->
                  <div id="modal-delete-selected" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the selected item(s)? </h4>
                        </div>
                        <div class="modal-body">
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
                          <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete all items? </h4>
                        </div>
                        <div class="modal-body">
                          <div class="form-actions">
                            <div class="col-md-offset-4 col-md-8"> {{ Form::open(array('url' => 'admin/annual/deleteallreports', 'method' => 'post', 'name' => 'deleteallsementra', 'id' => 'deleteallsementra', 'class' => 'form-horizontal','files' => true)) }} <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> 
                                      {{ Form::close() }} </div>
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
                        @if($cntarray1 != 0 )
                   
                    {{ Form::open(array('url' => Request::url(),'class'=> 'form-horizontal','method' => 'get')) }}
	{{ Form::select('noperpage1', $cntarray1, Input::get('noperpage1'),array('class' => 'form-control','onchange' => 'this.form.submit();')) }}
	 {{ Form::close() }}
         
        
                      &nbsp;
                      <label class="control-label">Records per page</label>
                       @endif
                    </div>
                  </div>
                  <div class="pull-right"> <a href="#" class="btn btn-danger">Update Display Order &nbsp;<i class="fa fa-refresh"></i></a> </div>
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
                        <th>Title</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
					 @foreach($annualreports as $k => $sementrasbanner)
                      <tr>
                        <td><input type="checkbox" class="chkNumber" value="{{$sementrasbanner->id}}"/></td>
                        <td>{{$profilelist->getFrom()+$k}}</td>
                        <td>@if($sementrasbanner->active == 1)
                            <span class="label label-sm label-success">Active</span>
                            @else
                             <span class="label label-sm label-red">In Active</span>
                            @endif</td>
                        <td>{{$sementrasbanner->date}}</td>
                        <td>{{$sementrasbanner->title}}</td>
                        <td><a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-slidingbanner{{$sementrasbanner->id}}" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-slide{{$sementrasbanner->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                            <!--Modal Edit Banner start-->
                            <div id="modal-edit-slidingbanner{{$sementrasbanner->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                              <div class="modal-dialog modal-wide-width">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                    <h4 id="modal-login-label3" class="modal-title">Edit Banner Image</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="form">
                                    {{ Form::open(array('url' => 'admin/annual/editreports', 'method' => 'post', 'class' => 'form-horizontal','files' => true)) }} 
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Status</label>
                                          <div class="col-md-8">
                                            <div data-on="success" data-off="primary" class="make-switch">
                                           {{Form::checkbox('active',$sementrasbanner->active,$sementrasbanner->active,array('id'=>'active','class' => 'form-control'))}}
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Title <span class='require'>*</span></label>
                                          <div class="col-md-8">
                                        {{Form::text('title', $sementrasbanner->title ,array('id'=>'title','class' => 'form-control'))}}
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Short Discription <span class='require'>*</span></label>
                                          <div class="col-md-2">
                                             {{Form::textarea('short_description',$sementrasbanner->short_description,array('id'=>'short_description','class' => 'form-control','rows' => '3'))}}
                                          </div>
                                          
                                        </div>
										<div class="form-group">
                                          <label class="col-md-4 control-label">Date <span class='require'>*</span></label>
                                          <div class="col-md-2">
                                          {{Form::text('date',$sementrasbanner->date,array('id'=>'date','class' => 'datepicker-default form-control','data-date-format' => 'dd/mm/yyyy', 'placeholder' => 'dd/mm/yyyy'))}}
                                          </div>
                                          
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Upload Report Cover <span class='require'>*</span></label>
                                          <div class="col-md-8">
                                            <div class="text-15px margin-top-10px"> {{HTML::image($sementrasbanner->image->url('thumb'),'image',array( 'class' => 'img-responsive' ));}}<br/>
                                                 {{Form::file('image', null,array('id'=>'imageInput'))}}
                                                <br/>
                                                <span class="help-block">(Image dimension: 200 x 248 pixels, JPEG/GIF/PNG only, Max. 2MB) </span> </div>
                                          </div>
                                        </div>
										<div class="form-group">
                                          <label class="col-md-4 control-label">Upload PDF <span class='require'>*</span></label>
                                          <div class="col-md-8">
                                            <div class="text-15px margin-top-10px"> <br/>
                                                 {{Form::file('pdf', null,array('id'=>'pdfInput'))}}
                                                <br/>
                                             </div>
                                          </div>
                                        </div>
										 {{ Form::hidden('sementrasbannerid',$sementrasbanner->id) }}
                                        <div class="form-actions">
                                          <div class="col-md-offset-5 col-md-8"> <button type="submit" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                        </div>
                                      {{Form::close()}}
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          <!--END MODAL Edit Processes-->
                            <!--Modal delete start-->
                            <div id="modal-delete-slide{{$sementrasbanner->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                    <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this item? </h4>
                                  </div>
                                  <div class="modal-body">
                                    <p><strong>#{{$sementrasbanner->id}}:</strong> {{$sementrasbanner->title}}</p>
                                    <div class="form-actions">
                                      <div class="col-md-offset-4 col-md-8">  {{ Form::open(array('url' => 'admin/annual/deletereports', 'method' => 'post', 'name' => 'sementrasbanner'.$sementrasbanner->id, 'id' => 'sementrasbanner'.$sementrasbanner->id, 'class' => 'form-horizontal','files' => true)) }}{{ Form::hidden('sementrasbannerid',$sementrasbanner->id) }} <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> 
                                      {{ Form::close() }}</div>
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
                        <td colspan="6"></td>
                      </tr>
                    </tfoot>
                  </table>
                  <div class="tool-footer text-right">
                    <p class="pull-left">Showing {{ $annualreports->getFrom() }} to {{ $annualreports->getTo() }} of {{ $annualreports->getTotal() }} entries</p>
                    {{ $annualreports->appends(Input::except('page'))->links() }}
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              
              
            </div>
          </div>
        </div>
        
        @stop
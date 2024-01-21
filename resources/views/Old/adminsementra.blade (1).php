@extends('layouts.admin')
@section('content')

      <div class="row">
            <div class="col-lg-12">
              <h2>Sementra Plantations Sdn Bhd <i class="fa fa-angle-right"></i> EDIT</h2>
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
              
           {{ Form::open(array('url' => 'admin/page/savepage','class'=> 'form-horizontal','method' => 'post','name' => 'millsave','id' => 'millsave')) }} 
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
                            <div class="format-icon-inner"> <i class="icon-lemon"></i> </div>
                          </div>
                          <div class="entry-header-inner">
                            <div contenteditable="true" id="left-block1-title">
                          {{ $page[0]->left_block1_title }}
                            </div>
               {{ Form::textarea('left_block1_title',$page[0]->left_block1_title,array("id" => "textarea-left-block1-title","class" => "hideThisField")) }}
                          </div>
                        </header>
                        <div class="hr"></div>
                        <div class="clearfix">
                          <div class="grid_8 alpha">
                            <!-- Project Description -->
                            <div class="project-desc project-desc__single">
                             <div contenteditable="true" id="left-block1-content">
                  {{ $page[0]->left_block1_content }}
                        </div>
                {{ Form::textarea('left_block1_content',$page[0]->left_block1_content,array("id" => "textarea-left-block1-content","class" => "hideThisField")) }}
                              <div class="project-excerpt">
                                 <div contenteditable="true" id="left-block2-content">
                  {{ $page[0]->left_block2_content }}
                        </div>
                {{ Form::textarea('left_block2_content',$page[0]->left_block2_content,array("id" => "textarea-left-block2-content","class" => "hideThisField")) }}
                              </div>
                            </div>
                            <!-- Project Description / End -->
                          </div>
<!-- end grid 8 -->
                          <div class="grid_4 omega">
                            <div contenteditable="true" id="right-block1-title">
                            {{ $page[0]->right_block1_title }} 
                          </div>
                {{ Form::textarea('right_block1_title', $page[0]->right_block1_title,array("id" => "textarea-right-block1-title","class" => "hideThisField")) }}
                            
                           
                             <div contenteditable="true" id="right-block2-content">
                            {{ $page[0]->right_block2_content }} 
                          </div>
                {{ Form::textarea('right_block2_content',$page[0]->right_block2_content,array("id" => "textarea-right-block2-content","class" => "hideThisField")) }}
                           <div contenteditable="true" id="right-block3-title">
                            {{ $page[0]->right_block3_title }} 
                          </div>
                {{ Form::textarea('right_block3_title',$page[0]->right_block3_title,array("id" => "textarea-right-block3-title","class" => "hideThisField")) }}
                          </div>
<!-- end grid 4 -->
                        </div>
                        <div class="hr"></div>
                        <!-- Related Projects -->
                        <div class="clearfix">
                          <div contenteditable="true" id="right-block3-content">
                            {{ $page[0]->right_block3_content }}
                            </div>
               {{ Form::textarea('right_block3_content',$page[0]->right_block3_content,array("id" => "textarea-right-block3-content","class" => "hideThisField")) }}
                      
                        </div>
                      </div>
</div>
                    <!-- end clearfix -->
                  </div>
                </div>
              	<!-- save button start -->
                <div class="form-actions none-bg">  <a href="javascript:void(0);" class="btn btn-red" onclick="Addsavepage('millsave','plantation/oilpalmestate');">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp; <button type="submit" class="btn btn-blue">Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></button>&nbsp; <a href="#" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                <!-- save button end -->
                
              </div>
           
            <!--Modal Edit Google Map start-->
              
              <!--END MODAL Edit Map-->
             
           
              {{ Form::close() }}
              
              </div>
              <!-- end portlet -->
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Sliding Banner Images Listing</div>
                  <br/>
                  <p class="margin-top-10px"></p>
               <a href="#" data-target="#modal-add-new-banner" data-toggle="modal" class="btn btn-success">Add New Banner &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary">Delete</button>
                    <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                    <ul role="menu" class="dropdown-menu">
                      <li><a href="#" data-target="#modal-delete-selected" data-toggle="modal"  class="deleteid" rel="{{url();}}/admin/page/deletemultiplebanner" rev="modal-delete-selected">Delete selected item(s)</a></li>
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
                          {{ Form::open(array('url' => 'admin/plantation/addsementra', 'method' => 'post', 'class' => 'form-horizontal','files' => true)) }}  
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
                                <label class="col-md-4 control-label">Display Order <span class='require'>*</span></label>
                                <div class="col-md-2">
                                 {{Form::text('display_order', null,array('id'=>'display_order','class' => 'form-control','placeholder' => '0'))}}
                                </div>
                                <div class="col-md-8 pull-right"> <span class="help-block">Display order is to determine the item appearing sequence in the website.</span> </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-4 control-label">Upload Image <span class='require'>*</span></label>
                                <div class="col-md-8">
                                  <div class="text-15px margin-top-10px">
                                    {{Form::file('bannerimage', null,array('id'=>'imageInput'))}}
                                    <br/>
                                    <span class="help-block">(Image dimension: 920 x 300 pixels, JPEG/GIF/PNG only, Max. 2MB) </span> </div>
                                </div>
                              </div>
							   {{Form::hidden('type','sementrabanner')}}
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
                            <div class="col-md-offset-4 col-md-8"> {{ Form::open(array('url' => 'admin/plantation/deleteallsementra', 'method' => 'post', 'name' => 'deleteallsementra', 'id' => 'deleteallsementra', 'class' => 'form-horizontal','files' => true)) }} <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> 
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
                  <div class="pull-right"> <a class="btn btn-danger updateOrder" href="javascript:void(0);" >Update Display Order &nbsp;<i class="fa fa-refresh"></i></a> </div>
                  <div class="clearfix"></div>
                  <br/>
                  <br/>
                  <table class="table table-hover table-striped">
                    <thead>
                      <tr>
                        <th width="1%"><input type="checkbox"/></th>
                        <th>#</th>
                        <th>Status</th>
                        <th>Title</th>
                        <th width="12%">Display Order</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
					 @foreach($sementrasbanners as $k => $sementrasbanner)
                      <tr>
                        <td><input type="checkbox"  class="chkNumber" value="{{$sementrasbanner->id}}"/></td>
                        <td>{{$profilelist->getFrom()+$k}}</td>
                        <td>@if($sementrasbanner->active == 1)
                            <span class="label label-sm label-success">Active</span>
                            @else
                             <span class="label label-sm label-red">In Active</span>
                            @endif</td>
                        <td>{{$sementrasbanner->title}}</td>
                        <td> <input type="hidden" id="updateOrdermname" value="slidingbanner" />
                            <input type="text" class="display_order form-control" value="{{$sementrasbanner->display_order}}" id="{{ $sementrasbanner->id }}"></td>
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
                                    {{ Form::open(array('url' => 'admin/plantation/editsementra', 'method' => 'post', 'class' => 'form-horizontal','files' => true)) }} 
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
                                          <label class="col-md-4 control-label">Display Order <span class='require'>*</span></label>
                                          <div class="col-md-2">
                                           {{Form::text('display_order', $sementrasbanner->display_order ,array('id'=>'display_order','class' => 'form-control'))}}
                                          </div>
                                          <div class="col-md-8 pull-right"> <span class="help-block">Display order is to determine the item appearing sequence in the website.</span> </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Upload Image <span class='require'>*</span></label>
                                          <div class="col-md-8">
                                            <div class="text-15px margin-top-10px"> {{HTML::image($sementrasbanner->bannerimage->url('medium'),'bannerimage',array( 'class' => 'img-responsive' ));}}<br/>
                                                 {{Form::file('bannerimage', null,array('id'=>'bannerimageInput'))}}
                                                <br/>
                                                <span class="help-block">(Image dimension: 920 x 300 pixels, JPEG/GIF/PNG only, Max. 2MB) </span> </div>
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
                                      <div class="col-md-offset-4 col-md-8">  {{ Form::open(array('url' => 'admin/plantation/deletesementra', 'method' => 'post', 'name' => 'sementrasbanner'.$sementrasbanner->id, 'id' => 'sementrasbanner'.$sementrasbanner->id, 'class' => 'form-horizontal','files' => true)) }}{{ Form::hidden('sementrasbannerid',$sementrasbanner->id) }} <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> 
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
                    <p class="pull-left">Showing {{ $sementrasbanners->getFrom() }} to {{ $sementrasbanners->getTo() }} of {{ $sementrasbanners->getTotal() }} entries</p>
                    {{ $sementrasbanners->appends(Input::except('page'))->links() }}
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Processes Listing</div>
                  <br/>
                  <p class="margin-top-10px"></p>
                  <a href="#" data-target="#modal-add-new-process" data-toggle="modal" class="btn btn-success">Add New &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary">Delete</button>
                    <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                    <ul role="menu" class="dropdown-menu">
                      <li><a href="#" data-target="#modal-delete-selected-process" data-toggle="modal" class="deleteid" rel="{{url();}}/admin/page/deletemultipleprocesses" rev="modal-delete-selected-process">Delete selected item(s)</a></li>
                      <li class="divider"></li>
                      <li><a href="#" data-target="#modal-delete-allprocess" data-toggle="modal">Delete all</a></li>
                    </ul>
                  </div>
                   
<div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                  <!--Modal Add New Process start-->
                  <div id="modal-add-new-process" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog modal-wide-width">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label3" class="modal-title">Add New</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form">
                              {{ Form::open(array('url' => 'admin/plantation/addprocesses', 'method' => 'post', 'class' => 'form-horizontal','files' => true)) }}  
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
                                <label class="col-md-4 control-label">Short Description </label>
                                <div class="col-md-8">
                             {{Form::textarea('short_description', '',array('id'=>'short_description','class' => 'form-control','rows' => '3'))}}
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-4 control-label">Display Order <span class='require'>*</span></label>
                                <div class="col-md-2">
                               {{Form::text('display_order', '',array('id'=>'display_order','class' => 'form-control','placeholder' => '1'))}}
                                </div>
                                <div class="col-md-8 pull-right"> <span class="help-block">Display order is to determine the item appearing sequence in the website.</span> </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-4 control-label">Upload Image <span class='require'>*</span></label>
                                <div class="col-md-8">
                                  <div class="text-15px margin-top-10px">
                                   {{Form::file('bannerimage', '',array('id'=>'bannerimage','class' => 'form-control'))}}
                                    <br/>
                                    <span class="help-block">(Image dimension: 600 x 624 pixels, JPEG/GIF/PNG only, Max. 2MB) </span> </div>
                                </div>
                              </div>
                              <div class="form-actions">
							  {{Form::hidden('type','plantationprocesses')}}
                                <div class="col-md-offset-5 col-md-8"><button type="submit" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                              </div>
                           {{Form::close()}}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--END MODAL Add New Process-->
                  <!--Modal delete selected items start-->
                  <div id="modal-delete-selected-process" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
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
                  <div id="modal-delete-allprocess" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete all items? </h4>
                        </div>
                        <div class="modal-body">
                          <div class="form-actions">
                            <div class="col-md-offset-4 col-md-8">{{ Form::open(array('url' => 'admin/plantation/deleteallprocesses', 'method' => 'post', 'name' => 'deleteallprocesses', 'id' => 'deleteallprocesses', 'class' => 'form-horizontal','files' => true)) }} <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> 
                                      {{ Form::close() }}  </div>
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
                     @if($cntarray2 != 0 )
                   
                    {{ Form::open(array('url' => Request::url(),'class'=> 'form-horizontal','method' => 'get')) }}
	{{ Form::select('noperpage2', $cntarray2, Input::get('noperpage2'),array('class' => 'form-control','onchange' => 'this.form.submit();')) }}
	 {{ Form::close() }}
         
        
                      &nbsp;
                      <label class="control-label">Records per page</label>
                       @endif
                    </div>
                  </div>
                  <div class="pull-right"> <a class="btn btn-danger updateOrder1" href="javascript:void(0);">Update Display Order &nbsp;<i class="fa fa-refresh"></i></a> </div>
                  <div class="clearfix"></div>
                  <br/>
                  <br/>
                  <table class="table table-hover table-striped">
                    <thead>
                      <tr>
                        <th width="1%"><input type="checkbox"/></th>
                        <th>#</th>
                        <th>Status</th>
                        <th>Title</th>
                        <th width="12%">Display Order</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
					 @foreach($processeslistings as $k => $processeslisting)
                      <tr>
                        <td><input type="checkbox" value="{{$processeslisting->id}}" class="chkNumber"/></td>
                        <td>{{$profilelist->getFrom()+$k}}</td>
                        <td>  @if($processeslisting->active == 1)
                            <span class="label label-sm label-success">Active</span>
                            @else
                             <span class="label label-sm label-red">In Active</span>
                            @endif</td>
                        <td>{{$processeslisting->title}}</td>
                        <td>
                            <input type="hidden" id="updateOrder1mname" value="processeslisting" />
     {{Form::text('display_order', $processeslisting->display_order ,array('id'=>$processeslisting->id,'class' => 'display_order1 form-control','placeholder' => '1'))}}
                            </td>
                        <td><a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-processes{{$processeslisting->id}}" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-processess{{$processeslisting->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                            <!--Modal Edit Processes start-->
                            <div id="modal-edit-processes{{$processeslisting->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                              <div class="modal-dialog modal-wide-width">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                    <h4 id="modal-login-label3" class="modal-title">Edit</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="form">
                                    {{ Form::open(array('url' => 'admin/plantation/editprocesses', 'method' => 'post', 'class' => 'form-horizontal','files' => true)) }} 
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Status</label>
                                          <div class="col-md-8">
                                            <div data-on="success" data-off="primary" class="make-switch">
                                              {{Form::checkbox('active', $processeslisting->active,$processeslisting->active,array('id'=>'active','class' => 'form-control'))}}
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Title <span class='require'>*</span></label>
                                          <div class="col-md-8">
                                           {{Form::text('title', $processeslisting->title ,array('id'=>'title','class' => 'form-control'))}}
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Short Description</label>
                                          <div class="col-md-8">
                                             {{Form::textarea('short_description', $processeslisting->short_description,array('id'=>'short_description','class' => 'form-control','rows' => '3'))}}

                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Display Order <span class='require'>*</span></label>
                                          <div class="col-md-2">
                                           {{Form::text('display_order', $processeslisting->display_order ,array('id'=>'display_order','class' => 'form-control'))}}
                                          </div>
                                          <div class="col-md-8 pull-right"> <span class="help-block">Display order is to determine the item appearing sequence in the website.</span> </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Upload Image <span class='require'>*</span></label>
                                          <div class="col-md-8">
                                            <div class="text-15px margin-top-10px"> {{HTML::image($processeslisting->bannerimage->url('medium'),'bannerimage',array( 'class' => 'img-responsive' ));}}<br/>
                              {{Form::file('bannerimage', null,array('id'=>'bannerimageInput'))}}
                                                <br/>
                                                <span class="help-block">(Image dimension: 600 x 624 pixels, JPEG/GIF/PNG only, Max. 2MB) </span> </div>
                                          </div>
                                        </div>
										{{Form::hidden('processesid',$processeslisting->id)}}
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
                            <div id="modal-delete-processess{{$processeslisting->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                    <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this item? </h4>
                                  </div>
                                  <div class="modal-body">
                                    <p><strong>#{{$processeslisting->id}}:</strong> {{$processeslisting->title}}</p>
                                    <div class="form-actions">
                                      <div class="col-md-offset-4 col-md-8"> {{ Form::open(array('url' => 'admin/plantation/deleteprocesses', 'method' => 'post', 'name' => 'deleteprocesses'.$processeslisting->id, 'id' => 'deleteprocesses'.$processeslisting->id, 'class' => 'form-horizontal','files' => true)) }}{{ Form::hidden('processesid',$processeslisting->id) }} <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> 
                                      {{ Form::close() }} </div>
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
                    <p class="pull-left">Showing {{ $processeslistings->getFrom() }} to {{ $processeslistings->getTo() }} of {{ $processeslistings->getTotal() }} entries</p>
                    {{ $processeslistings->appends(Input::except('page'))->links() }}
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        @stop
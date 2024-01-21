@extends('layouts.admin')
@section('content')
  <div class="row">
            <div class="col-lg-12">
              <h2>Index <i class="fa fa-angle-right"></i> Edit</h2>
              <div class="clearfix"></div>
              
              <div class="pull-left margin-top-10px"> Last updated: <span class="text-blue"> {{ date("d F Y",strtotime($page[0]->updated_at)) }} @ {{ date("g:i A",strtotime($page[0]->updated_at)) }}
</span> </div>
              <div class="clearfix"></div>
              <p></p>
           {{ Form::open(array('url' => 'admin/page/savepage','class'=> 'form-horizontal','method' => 'post','name' => 'indexsave','id' => 'indexsave')) }} 
		   {{Form::hidden('preview','')}}
           {{Form::hidden('pageid',$page[0]->id)}}
           {{Form::hidden('type',$page[0]->type)}}  
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Page Content</div>
                  <div class="clearfix"></div>
                  <span class="text-blue text-12px">You can edit the content by clicking the text section below.</span>
                  <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                </div>
                <div class="portlet-body">
                  <div class="container">
                    
                    <!-- about us start -->
                    <div class="clearfix">
						<div class="grid_6">
						  <div contenteditable="true" id="left-block1-title">
                          {{ $page[0]->left_block1_title }}
                            </div>
                                           {{ Form::textarea('left_block1_title',$page[0]->left_block1_title,array("id" => "textarea-left-block1-title","class" => "hideThisField")) }}

                             <div contenteditable="true" id="left-block1-content">
                         {{ $page[0]->left_block1_content }}
                            </div>
               {{ Form::textarea('left_block1_content',$page[0]->left_block1_content,array("id" => "textarea-left-block1-content","class" => "hideThisField")) }}
                            
                             <div contenteditable="true" id="left-block2-title">
                         {{ $page[0]->left_block2_title }}
                            </div>
               {{ Form::textarea('left_block2_title',$page[0]->left_block2_title,array("id" => "textarea-left-block2-title","class" => "hideThisField")) }}					
                         </div>
                         
                         
                         <div class="grid_6">
							<!-- Horizontal Tabs -->
							<div class="tabs">
								<div class="tab-menu clearfix">
									<ul>
										<!--<li><a href="#tab1">Corporate Social Responsibility</a></li>
										<li><a href="#tab2">Annual Report</a></li>-->
									</ul>
								</div>
								<div class="tab-wrapper">
									
									<div id="tab2" class="tab">
										 <div contenteditable="true" id="right-block1-content">
                         {{ $page[0]->right_block1_content }}
                            </div>
               {{ Form::textarea('right_block1_content',$page[0]->right_block1_content,array("id" => "textarea-right-block1-content","class" => "hideThisField")) }}
                                        <div contenteditable="true" id="right-block2-title">
                         {{ $page[0]->right_block2_title }}
                            </div>
               {{ Form::textarea('right_block2_title',$page[0]->right_block2_title,array("id" => "textarea-right-block2-title","class" => "hideThisField")) }}
                                    </div>
								</div>
							</div>
							<!-- Horizontal Tabs / End -->
						</div>
					</div>
                    <!-- about us end -->
                    
                    <div class="hr"></div>
                    <!-- end clearfix -->
                    
                    <!-- Our Products start -->
					<div class="clearfix">
						<div class="clients">
							<div class="grid_12 mobile-nomargin">
								 <div contenteditable="true" id="left-inner-block-title1">
                        {{ $page[0]->left_inner_block_title1 }}
                            </div>
               {{ Form::textarea('left_inner_block_title1',$page[0]->left_inner_block_title1,array("id" => "textarea-left-inner-block-title1","class" => "hideThisField")) }}
								
							</div>
						</div>
					</div>
					<!-- Our Products / End -->
                    
                    
                  </div>
                </div>
                <!-- save button start -->
                <div class="form-actions none-bg">  <a href="javascript:void(0);" class="btn btn-red" onclick="Addsavepage('indexsave','/');">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp; <button type="submit" class="btn btn-blue">Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></button>&nbsp; <a href="#" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                <!-- save button end -->
              </div>
              
           {{ Form::close() }}
              <!-- End portlet-->
              
              
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Montage Listing</div>
                  <br/>
                  <p class="margin-top-10px"></p>
                  <a href="#" data-target="#modal-add-montage" data-toggle="modal" class="btn btn-success">Add New Montage &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary">Delete</button>
                    <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                    <ul role="menu" class="dropdown-menu">
                      <li><a href="#" data-target="#modal-delete-selected" data-toggle="modal"  class="deleteid" rel="{{url();}}/admin/page/deletemultipleindexbanner" rev="modal-delete-selected">Delete selected item(s)</a></li>
                      <li class="divider"></li>
                      <li><a href="#" data-target="#modal-delete-all" data-toggle="modal">Delete all</a></li>
                    </ul>
                  </div>
                   
				  <div class="tools"> 
                  	<i class="fa fa-chevron-up"></i>                  </div>
                  <!--Modal Add New Montage start-->
                  <div id="modal-add-montage" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog modal-wide-width">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label2" class="modal-title">Add New Montage</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form">
  {{ Form::open(array('url' => 'admin/index/addbanner', 'method' => 'post', 'class' => 'form-horizontal','files' => true)) }}      

                              <div class="form-group">
                                <label class="col-md-3 control-label">Status</label>
                                <div class="col-md-6">
                                  <div data-on="success" data-off="primary" class="make-switch">
                                
                     {{Form::checkbox('active', 1,array('id'=>'active','class' => 'form-control'))}}
                                  </div>
                                </div>
                              </div>
                              <div class="form-group has-error">
                                <label class="col-md-3 control-label">Title </label>
                                <div class="col-md-6">
  {{Form::text('title', null,array('id'=>'title','class' => 'form-control','placeholder' => 'Banner 1'))}}
          
                                </div>
                                <div class="col-md-3">
                                      <div class="popover popover-validator right">
                                        <div class="arrow"></div>
                                        <div class="popover-content">
                                          <p class="mbn">Title is empty!</p>
                                        </div>
                                      </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Banner Text Line 1 </label>
                                <div class="col-md-6">
  {{Form::text('banner_text1', null,array('id'=>'banner_text1','class' => 'form-control','placeholder' => 'Trading &amp;'))}}

                                </div> 
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Banner Text Line 2 </label>
                                <div class="col-md-6">
                                     {{Form::text('banner_text2', null,array('id'=>'banner_text2','class' => 'form-control','placeholder' => 'Distribution'))}}
                                  </div> 
                              </div> 
                              <div class="form-group">
                                <label class="col-md-3 control-label">Upload Banner <span class='require'>*</span></label>
                                <div class="col-md-9">
                                  <div class="text-15px margin-top-10px">
                               {{Form::file('bannerimage', null,array('id'=>'bannerimageInput'))}}   
                                    <br/>
                                    <span class="help-block">(Image dimension: min. 1800 x 430 pixels, JPEG/GIF/PNG only, Max. 1MB) </span> </div>
                                </div>
                              </div>
 
                              <div class="form-actions">
                                <div class="col-md-offset-5 col-md-8"> <button type="submit" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                              </div>
                    {{ Form::close() }}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--END MODAL Add New Montage-->
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
                        @if($cntarray1 != 0 )
	 {{ Form::open(array('url' => Request::url(),'class'=> 'form-horizontal','method' => 'get')) }}
	{{ Form::select('noperpage1', $cntarray1, Input::get('noperpage1'),array('class' => 'form-control','onchange' => 'this.form.submit();')) }}
	 {{ Form::close() }}
                      
                      &nbsp;
                      <label class="control-label">Records per page</label>
                      
                      @endif
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <br/>
                  <br/>
                  <table class="table table-hover table-striped">
                    <thead>
                      <tr>
                        <th width="1%"><input type="checkbox" name="checkid[]" id="checkid" /></th>
                        <th>#</th>
                        <th>Status</th>
                        <th>Title</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                       @foreach($banners as $k => $banner)
                      <tr>
                        <td><input type="checkbox" class="chkNumber"  value="{{ $banner->id}}"/></td>
                        <td>{{ $k + 1 }}</td>
                        <td>  @if($banner->active == 1)
                            <span class="label label-sm label-success">Active</span>
                            @else
                             <span class="label label-sm label-red">In Active</span>
                            @endif</td>
                        <td>{{ $banner->title }}</td>
                        <td><a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-montage{{$banner->id}}" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete{{$banner->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                          <!--Modal Edit Montage start-->
                          <div id="modal-edit-montage{{$banner->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                            <div class="modal-dialog modal-wide-width">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                  <h4 id="modal-login-label2" class="modal-title">Edit Montage</h4>
                                </div>
                                <div class="modal-body">
                                  <div class="form">
                  {{ Form::open(array('url' => 'admin/index/editbanner', 'method' => 'post', 'name' => 'editbanner'.$banner->id, 'id' => 'editbanner'.$banner->id, 'class' => 'form-horizontal','files' => true)) }}      

                                      <div class="form-group">
                                        <label class="col-md-3 control-label">Status</label>
                                        <div class="col-md-6">
                                          <div data-on="success" data-off="primary" class="make-switch">
                    
                      {{Form::checkbox('active', $banner->active,$banner->active,array('id'=>'active','class' => 'form-control'))}}
                     
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-md-3 control-label">Title </label>
                                        <div class="col-md-6">
                                  {{Form::text('title', $banner->title ,array('id'=>'title','class' => 'form-control'))}}
                                        </div>
                                      </div>
                                      <div class="form-group">
                                        <label class="col-md-3 control-label">Banner Text Line 1 </label>
                                        <div class="col-md-6">
                                      {{Form::text('banner_text1', $banner->banner_text1 ,array('id'=>'banner_text1','class' => 'form-control'))}}
                                        </div> 
                                      </div>
                                      <div class="form-group">
                                        <label class="col-md-3 control-label">Banner Text Line 2 </label>
                                        <div class="col-md-6">
                                      {{Form::text('banner_text2', $banner->banner_text2 ,array('id'=>'banner_text2','class' => 'form-control'))}}
                                        </div> 
                                      </div> 
                                      <div class="form-group">
                                        <label class="col-md-3 control-label">Upload Banner <span class='require'>*</span></label>
                                        <div class="col-md-9">
                                          <div class="text-15px margin-top-10px">
                                          {{HTML::image($banner->bannerimage->url('large'),'bannerimage',array( 'class' => 'img-responsive' ));}}
                                              <br/>
                                         {{Form::file('bannerimage', null,array('id'=>'bannerimageInput'))}}
                                            <br/>
                                            <span class="help-block">(Image dimension: min. 1800 x 430 pixels, JPEG/GIF/PNG only, Max. 1MB) </span> </div>
                                        </div>
                                      </div>
                                      {{ Form::hidden('bannerid',$banner->id) }}
                                      <div class="form-actions">
                                        <div class="col-md-offset-5 col-md-8"> <button type="submit" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button> <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                      </div>
                                    
                                    {{ Form::close() }}                                </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <!--END MODAL Edit Montage-->
                            <!--Modal delete start-->
                            <div id="modal-delete{{$banner->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                    <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this banner? </h4>
                                  </div>
                                  <div class="modal-body">
                                    <p><strong>#{{$banner->id}}:</strong> {{$banner->title}}</p>
                                    <div class="form-actions">
                                      <div class="col-md-offset-4 col-md-8"> {{ Form::open(array('url' => 'admin/index/deletebanner', 'method' => 'post', 'name' => 'deletbanner'.$banner->id, 'id' => 'deletbanner'.$banner->id, 'class' => 'form-horizontal','files' => true)) }}{{ Form::hidden('bannerid',$banner->id) }} <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> 
                                      {{ Form::close() }}  </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <!-- modal delete end -->                        </td>
                      </tr>
                       @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan="5"></td>
                      </tr>
                     
                    </tfoot>
                  </table>
                  <div class="tool-footer text-right">
                    <p class="pull-left">Showing {{ $banners->getFrom() }} to {{ $banners->getTo() }} of {{ $banners->getTotal() }} entries</p>
                    {{ $banners->appends(Input::except('page'))->links() }}
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              
              
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Core Businesses Listing</div>
                  <br/>
                  <p class="margin-top-10px"></p>
                  <a href="#" data-target="#modal-add-new-process" data-toggle="modal" class="btn btn-success">Add New &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary">Delete</button>
                    <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                    <ul role="menu" class="dropdown-menu">
                      <li><a href="#" data-target="#modal-delete-selected-process" data-toggle="modal" class="deleteid" rel="{{url();}}/admin/page/deletemultiplecorebusinesses" rev="modal-delete-selected-process">Delete selected item(s)</a></li>
                      <li class="divider"></li>
                      <li><a href="#" data-target="#modal-delete-all" data-toggle="modal">Delete all</a></li>
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
{{ Form::open(array('url' => 'admin/index/addcorebusiness', 'method' => 'post', 'class' => 'form-horizontal','files' => true)) }}      

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
       {{Form::textarea('title', '',array('id'=>'title','class' => 'form-control','rows' => '2'))}}
                                   </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-4 control-label">Short Description </label>
                                <div class="col-md-8">
      {{Form::textarea('short_description', '',array('id'=>'short_description','class' => 'form-control','rows' => '3'))}}
                                </div>
                              </div>
                              <div class="form-group has-error">
                                <label class="col-md-4 control-label">URL</label>
                                <div class="col-md-6">
                                  <div class="input-icon"><i class="fa fa-link"></i>
        {{Form::text('url', '',array('id'=>'url','class' => 'form-control','placeholder' => 'http://'))}}
        <span class="help-block">Please enter the page link to link it to the sub page.</span> </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="popover popover-validator margin-top-5px right">
                                    <div class="arrow"></div>
                                    <div class="popover-content">
                                      <p class="mbn">URL is empty!</p>
                                    </div>
                                  </div>
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
  {{Form::file('corebusinessimage', '',array('id'=>'corebusinessimage','class' => 'form-control'))}}

                                    <br/>
                                    <span class="help-block">(Image dimension: 600 x 624 pixels, JPEG/GIF/PNG only, Max. 2MB) </span> </div>
                                </div>
                              </div>
                              <div class="form-actions">
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
                  <div id="modal-delete-all" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete all items? </h4>
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
                  @if($cntarray2 != 0 )
                        {{ Form::open(array('url' => Request::url(),'class'=> 'form-horizontal','method' => 'get')) }}
	{{ Form::select('noperpage2', $cntarray2, Input::get('noperpage2'),array('class' => 'form-control','onchange' => 'this.form.submit();')) }}
	 {{ Form::close() }}
                      &nbsp;
                      <label class="control-label">Records per page</label>
                      @endif
                    </div>
                  </div>
                  <div class="pull-right"> <a href="javascript:void(0);" class="btn btn-danger updateOrder">Update Display Order &nbsp;<i class="fa fa-refresh"></i></a> </div>
                  <div class="clearfix"></div>
                  <br/>
                  <br/>
                  <div>
                  <table class="table table-hover table-striped" id="tblupdateOrder">
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
                    @foreach($corebusinesses as $k => $corebusiness)
                      <tr>
                        <td><input type="checkbox" class="chkNumber"  value="{{ $corebusiness->id}}"/></td>
                        <td>{{ $k + 1 }}</td>
                        <td>  @if($corebusiness->active == 1)
                            <span class="label label-sm label-success">Active</span>
                            @else
                             <span class="label label-sm label-red">In Active</span>
                            @endif</td>
                        <td>{{ $corebusiness->title }}</td>
                        <td>
     <input type="hidden" id="updateOrdermname" value="corebusiness" />
     {{Form::text('display_order[]', $corebusiness->display_order ,array('id'=>$corebusiness->id,'class' => 'display_order form-control','placeholder' => '1'))}}

                        </td>
                        <td><a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-processes{{ $corebusiness->id }}" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-deletecore-process{{ $corebusiness->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                            <!--Modal Edit Processes start-->
                            <div id="modal-edit-processes{{ $corebusiness->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                              <div class="modal-dialog modal-wide-width">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                    <h4 id="modal-login-label3" class="modal-title">Edit</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="form">
{{ Form::open(array('url' => 'admin/index/editcorebusiness', 'name' => 'editcorebusiness', 'id' => 'editcorebusiness', 'method' => 'post', 'class' => 'form-horizontal','files' => true)) }}      

                              <div class="form-group">
                                <label class="col-md-4 control-label">Status</label>
                                <div class="col-md-8">
                                  <div data-on="success" data-off="primary" class="make-switch">
 {{Form::checkbox('active', $corebusiness->active,$corebusiness->active,array('id'=>'active','class' => 'form-control'))}}
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Title <span class='require'>*</span></label>
                                          <div class="col-md-8">
                                          {{Form::textarea('title', $corebusiness->title ,array('id'=>'title','class' => 'form-control','rows' => '2'))}}
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Short Description</label>
                                          <div class="col-md-8">
    {{Form::textarea('short_description', $corebusiness->short_description ,array('id'=>'short_description','class' => 'form-control','rows' => '3'))}}                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Website URL</label>
                                          <div class="col-md-6">
                                            <div class="input-icon"><i class="fa fa-link"></i>
    {{Form::text('url', $corebusiness->url ,array('id'=>'url','class' => 'form-control'))}}                                          </div>
                                                <span class="help-block">Please enter the page link to link it to the sub page.</span> </div>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Display Order <span class='require'>*</span></label>
                                          <div class="col-md-2">
     {{Form::text('display_order', $corebusiness->display_order ,array('id'=>'display_order1','class' => 'form-control'))}} 
                                          </div>
                                          <div class="col-md-8 pull-right"> <span class="help-block">Display order is to determine the item appearing sequence in the website.</span> </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Upload Image <span class='require'>*</span></label>
                                          <div class="col-md-8">
                                            <div class="text-15px margin-top-10px">    
                                         {{HTML::image($corebusiness->corebusinessimage->url('large'),'corebusinessimage',array( 'class' => 'img-responsive' ));}}
                                              <br/>
                                         {{Form::file('corebusinessimage', null,array('id'=>'corebusinessimageInput'))}}
                                            <br/>
                                            <span class="help-block">(Image dimension: min. 1800 x 430 pixels, JPEG/GIF/PNG only, Max. 1MB) </span> </div>
                                        </div>
                                      </div>
                                      {{ Form::hidden('corebusinessid',$corebusiness->id) }}
                                      <div class="form-actions">
                                        <div class="col-md-offset-5 col-md-8"> <button type="submit" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button> <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                      </div>
                                    
                                    {{ Form::close() }}        
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          <!--END MODAL Edit Processes-->
                            <!--Modal delete start-->
                            <div id="modal-deletecore-process{{ $corebusiness->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                    <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this item? </h4>
                                  </div>
                                  <div class="modal-body">
                                    <p><strong>{{ $corebusiness->id }}</strong> {{ $corebusiness->title }}</p>
                                    <div class="form-actions">
                                    
                                      <div class="col-md-offset-4 col-md-8">
                                      {{ Form::open(array('url' => 'admin/index/deletecorebusiness', 'method' => 'post', 'name' => 'deletcorebusiness'.$corebusiness->id, 'id' => 'deletcorebusiness'.$corebusiness->id, 'class' => 'form-horizontal','files' => true)) }}{{ Form::hidden('corebusinessid',$corebusiness->id) }} <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> 
                                      {{ Form::close() }} 
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          <!-- modal delete end -->                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan="6"></td>
                      </tr>
                    </tfoot>
                  </table>
                  </div>
                    <div class="tool-footer text-right">
                    <p class="pull-left">Showing {{ $corebusinesses->getFrom() }} to {{ $corebusinesses->getTo() }} of {{ $corebusinesses->getTotal() }} entries</p>
                    {{ $corebusinesses->appends(Input::except('page'))->links() }}
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <!-- end portlet -->
            </div>
          </div>
@stop
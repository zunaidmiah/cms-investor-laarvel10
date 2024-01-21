@extends('layouts.admin')
@section('content')
  <div class="row">
            <div class="col-lg-12">
              <h2>Yee Lee Edible Oils Sdn Bhd <i class="fa fa-angle-right"></i> Edit</h2>
              <div class="clearfix"></div>
             <div class="pull-left margin-top-10px"> Last updated: <span class="text-blue"> {{ date("d F Y",strtotime($page[0]->updated_at)) }} @ {{ date("g:i A",strtotime($page[0]->updated_at)) }}
</span> </div>
              <div class="clearfix"></div>
              <p></p>
             {{ Form::open(array('url' => 'admin/page/savepage','class'=> 'form-horizontal','method' => 'post','name' => 'refinerysave','id' => 'refinerysave')) }} 
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
                            <div class="format-icon-inner"> <i class="icon-archive"></i> </div>
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
                   <div contenteditable="true" id="left-block2-title">
                         {{ $page[0]->left_block2_title }}
                            </div>
               {{ Form::textarea('left_block2_title',$page[0]->left_block2_title,array("id" => "textarea-left-block2-title","class" => "hideThisField")) }}
                              </div>
                            <div contenteditable="true" id="left-block2-content">
                         {{ $page[0]->left_block2_content }}
                            </div>
               {{ Form::textarea('left_block2_content',$page[0]->left_block2_content,array("id" => "textarea-left-block2-content","class" => "hideThisField")) }}
                              <br/>
                              
                               <div contenteditable="true" id="left-block3-title">
                         {{ $page[0]->left_block3_title }}
                            </div>
               {{ Form::textarea('left_block3_title',$page[0]->left_block3_title,array("id" => "textarea-left-block3-title","class" => "hideThisField")) }}
                            </div>
                            <!-- Project Description / End -->
                          </div>
<div class="grid_4 omega">
                             <div contenteditable="true" id="left-inner-block-title1">
                        {{ $page[0]->left_inner_block_title1 }}
                            </div>
               {{ Form::textarea('left_inner_block_title1',$page[0]->left_inner_block_title1,array("id" => "textarea-left-inner-block-title1","class" => "hideThisField")) }}
                            
                          <div contenteditable="true" id="left-inner-block-title2">
                           {{ $page[0]->left_inner_block_title2 }}
                            </div>
               {{ Form::textarea('left_inner_block_title2',$page[0]->left_inner_block_title2,array("id" => "textarea-left-inner-block-title2","class" => "hideThisField")) }}
                          
                          </div>
</div>
                        <div class="hr"></div>
                        <!-- Related Projects -->
                        <div class="clearfix">
                          <div contenteditable="true" id="left-inner-block-content2">
                            {{ $page[0]->left_inner_block_content2 }}
                            </div>
               {{ Form::textarea('left_inner_block_content2',$page[0]->left_inner_block_content2,array("id" => "textarea-left-inner-block-content2","class" => "hideThisField")) }}
                        </div>
                      </div>
</div>
                    <!-- end clearfix -->
                  </div>
                </div>
                <!-- save button start -->
                <div class="form-actions none-bg"> <a href="javascript:void(0);" class="btn btn-red" onclick="Addsavepage('refinerysave','manufacturing/palmoil/refinery');">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp; <button type="submit" class="btn btn-blue">Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></button>&nbsp; <a href="#" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                <!-- save button end -->
              </div>
     {{ Form::close() }}
              <!-- End portlet-->
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Sliding Banner Images Listing</div>
                  <br>
                  <p class="margin-top-10px"></p>
                  <a class="btn btn-success" data-toggle="modal" data-target="#modal-add-new-banner" href="#">Add New Banner &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                  <div class="btn-group">
                    <button class="btn btn-primary" type="button">Delete</button>
                    <button class="btn btn-red dropdown-toggle" data-toggle="dropdown" type="button"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a data-toggle="modal" data-target="#modal-delete-selected-process" href="#" class="deleteid" rel="{{url();}}/admin/page/deletemultiplebanner" rev="modal-delete-selected-process">Delete selected item(s)</a></li>
                      <li class="divider"></li>
                      <li><a data-toggle="modal" data-target="#modal-delete-all" href="#">Delete all</a></li>
                    </ul>
                  </div>
                  &nbsp;
                  <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                  <!--Modal Add New Banner start-->
                  <div class="modal fade" aria-hidden="true" aria-labelledby="modal-login-label" role="dialog" tabindex="-1" id="modal-add-new-banner">
                    <div class="modal-dialog modal-wide-width">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button class="close" aria-hidden="true" data-dismiss="modal" type="button">×</button>
                          <h4 class="modal-title" id="modal-login-label3">Add New Banner Image</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form">
                      {{ Form::open(array('url' => 'admin/manufacturing/addslidingbanner','class'=> 'form-horizontal','method' => 'post','files' => true)) }}
                              <div class="form-group">
                                <label class="col-md-4 control-label">Status</label>
                                <div class="col-md-8">
                                 <div data-on="success" data-off="primary" class="make-switch">
 {{Form::checkbox('active', 1 ,array('id'=>'active','class' => 'form-control'))}}

                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-4 control-label">Title <span class="require">*</span></label>
                                <div class="col-md-8">
               {{ Form::textarea('title','',array('id' => 'title','class' => 'form-control', 'rows' => '2' )) }}
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-4 control-label">Display Order <span class="require">*</span></label>
                                <div class="col-md-2">
               {{ Form::text('display_order','',array('id' => 'display_order','class' => 'form-control', 'placeholder' => '1' )) }} 
              
                                </div>
                                <div class="col-md-8 pull-right"> <span class="help-block">Display order is to determine the item appearing sequence in the website.</span> </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-4 control-label">Upload Image <span class="require">*</span></label>
                                <div class="col-md-8">
                                  <div class="text-15px margin-top-10px">
               {{ Form::file('bannerimage','',array('id' => 'bannerimage','class' => 'form-control' )) }} 
                                    <br>
                                    <span class="help-block">(Image dimension: 920 x 300 pixels, JPEG/GIF/PNG only, Max. 2MB) </span> </div>
                                </div>
                              </div>
                              <div class="form-actions">
               {{ Form::hidden('type','pmrefinery',array('id' => 'type')) }}
                                 <div class="col-md-offset-5 col-md-8"> 
                                    <button type="submit" class="btn btn-red" >Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp; <a class="btn btn-green" data-dismiss="modal" href="#">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                              </div>
               {{ Form::close() }}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--END MODAL Add New Banner-->
                  <!--Modal delete selected items start-->
                  <div class="modal fade" aria-hidden="true" aria-labelledby="modal-login-label" role="dialog" tabindex="-1" id="modal-delete-selected-process">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button class="close" aria-hidden="true" data-dismiss="modal" type="button">×</button>
                          <h4 class="modal-title" id="modal-login-label4"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the selected item(s)? </h4>
                        </div>
                        <div class="modal-body">
                         
                          <div class="form-actions">
                            <div class="col-md-offset-4 col-md-8"> <a class="btn btn-red" href="#">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a class="btn btn-green" data-dismiss="modal" href="#">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- modal delete selected items end -->
                  <!--Modal delete all items start-->
                  <div class="modal fade" aria-hidden="true" aria-labelledby="modal-login-label" role="dialog" tabindex="-1" id="modal-delete-all">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button class="close" aria-hidden="true" data-dismiss="modal" type="button">×</button>
                          <h4 class="modal-title" id="modal-login-label4"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete all items? </h4>
                        </div>
                        <div class="modal-body">
                          <div class="form-actions">
                            <div class="col-md-offset-4 col-md-8"> {{ Form::open(array('url' => 'admin/manufacturing/deleteallbanner', 'method' => 'post', 'name' => 'deleteall', 'id' => 'deleteall', 'class' => 'form-horizontal','files' => true)) }} <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> 
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
                  <br>
                  <br>
                  <table class="table table-hover table-striped">
                    <thead>
                      <tr>
                        <th width="1%"><input type="checkbox"></th>
                        <th>#</th>
                        <th>Status</th>
                        <th>Title</th>
                        <th width="12%">Display Order</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                   @foreach ($slidingbanners as $k => $slidingbanner)   
                   <tr>
                        <td><input type="checkbox" class="chkNumber" value="{{$slidingbanner->id}}"></td>
                        <td>{{ $k+1 }}</td>
                        <td>
                        @if ( $slidingbanner->active == 1)
                            <span class="label label-sm label-success">Active</span>
                        @else
                            <span class="label label-sm label-red">In Active</span>
                        @endif
                        </td>
                        <td>{{ $slidingbanner->title }}</td>
                        <td>
							 <input type="hidden" id="updateOrdermname" value="slidingbanner" />
                    {{ Form::text('display_order$slidingbanner->id',$slidingbanner->display_order,array('id' => $slidingbanner->id,'class' => 'display_order form-control')) }}   
                   </td>
                        <td><a title="" data-toggle="modal" data-target="#modal-edit-banner{{$slidingbanner->id}}" data-placement="top" data-hover="tooltip" href="#" data-original-title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a data-toggle="modal" data-target="#modal-delete-process{{$slidingbanner->id}}" title="" data-placement="top" data-hover="tooltip" href="#" data-original-title="Delete"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                            <!--Modal Edit Banner start-->
                            <div class="modal fade" aria-hidden="true" aria-labelledby="modal-login-label" role="dialog" tabindex="-1" id="modal-edit-banner{{ $slidingbanner->id }}">
                              <div class="modal-dialog modal-wide-width">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button class="close" aria-hidden="true" data-dismiss="modal" type="button">×</button>
                                    <h4 class="modal-title" id="modal-login-label3">Edit Banner Image</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="form">
    {{ Form::open(array('url' => 'admin/manufacturing/editslidingbanner','class'=> 'form-horizontal','method' => 'post','files' => true)) }}

                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Status</label>
                                          <div class="col-md-8">
                                          <div data-on="success" data-off="primary" class="make-switch">
  
   {{Form::checkbox('active', $slidingbanner->active, $slidingbanner->active ,array('id'=>'active','class' => 'form-control'))}}
  
   </div>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Title <span class="require">*</span></label>
                                          <div class="col-md-8">
  
 {{ Form::textarea('title',$slidingbanner->title, array('id' => 'title','class' => 'form-control', 'rows' => '2')) }}                                      
      
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Display Order <span class="require">*</span></label>
                                          <div class="col-md-2">
 {{ Form::text('display_order',$slidingbanner->display_order, array('id' => 'display_order','class' => 'form-control')) }}                                      

                                          </div>
                                          <div class="col-md-8 pull-right"> <span class="help-block">Display order is to determine the item appearing sequence in the website.</span> </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Upload Image <span class="require">*</span></label>
                                          <div class="col-md-8">
                                            <div class="text-15px margin-top-10px"> 
{{HTML::image($slidingbanner->bannerimage->url('medium'),'bannerimage',array( 'class' => 'img-responsive' ))}}
<br>
{{ Form::file('bannerimage',array('id' => 'bannerimage')) }}        
                                                <br>
                                                <span class="help-block">(Image dimension: 920 x 300 pixels, JPEG/GIF/PNG only, Max. 2MB) </span> </div>
                                          </div>
                                        </div>
                                        <div class="form-actions">
 {{ Form::hidden('type','pmrefinery',array('id' => 'type')) }}
 {{ Form::hidden('bannerid',$slidingbanner->id,array('id' => 'bannerid')) }}
                                            <div class="col-md-offset-5 col-md-8"> <button type="submit" class="btn btn-red" >Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp; <a class="btn btn-green" data-dismiss="modal" href="#">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                        </div>
                    {{ Form::close() }}
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <!--END MODAL Edit Processes-->
                            <!--Modal delete start-->
                            <div class="modal fade" aria-hidden="true" aria-labelledby="modal-login-label" role="dialog" tabindex="-1" id="modal-delete-process{{$slidingbanner->id}}">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button class="close" aria-hidden="true" data-dismiss="modal" type="button">×</button>
                                    <h4 class="modal-title" id="modal-login-label4"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this item? </h4>
                                  </div>
                                  <div class="modal-body">
                                    <p><strong>#{{$slidingbanner->id}}:</strong> {{$slidingbanner->title}}</p>
                                    <div class="form-actions">
                                      <div class="col-md-offset-4 col-md-8">  {{ Form::open(array('url' => 'admin/manufacturing/deleteslidingbanner', 'method' => 'post', 'name' => 'delete'.$slidingbanner->id, 'id' => 'delete'.$slidingbanner->id, 'class' => 'form-horizontal','files' => true)) }}{{ Form::hidden('slidingbannerid',$slidingbanner->id) }} <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> 
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
                    <p class="pull-left">Showing {{ $slidingbanners->getFrom() }} to {{ $slidingbanners->getTo() }} of {{ $slidingbanners->getTotal() }} entries</p>
                    {{ $slidingbanners->appends(Input::except('page'))->links() }}
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Processes Listing</div>
                  <br>
                  <p class="margin-top-10px"></p>
                  <a class="btn btn-success" data-toggle="modal" data-target="#modal-add-new-process" href="#">Add New &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                  <div class="btn-group">
                    <button class="btn btn-primary" type="button">Delete</button>
                    <button class="btn btn-red dropdown-toggle" data-toggle="dropdown" type="button"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a data-toggle="modal" data-target="#modal-delete-selected" href="#" class="deleteid" rel="{{url();}}/admin/page/deletemultipleprocesses" rev="modal-delete-selected">Delete selected item(s)</a></li>
                      <li class="divider"></li>
                      <li><a data-toggle="modal" data-target="#modal-delete-allprocess" href="#">Delete all</a></li>
                    </ul>
                  </div>
                  &nbsp;
<div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                  <!--Modal Add New Process start-->
                  <div class="modal fade" aria-hidden="true" aria-labelledby="modal-login-label" role="dialog" tabindex="-1" id="modal-add-new-process">
                    <div class="modal-dialog modal-wide-width">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button class="close" aria-hidden="true" data-dismiss="modal" type="button">×</button>
                          <h4 class="modal-title" id="modal-login-label3">Add New</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form">
  {{ Form::open(array('url' => 'admin/manufacturing/addprocesseslisting','class'=> 'form-horizontal','method' => 'post','files' => true)) }}

                              <div class="form-group">
                                <label class="col-md-4 control-label">Status</label>
                                <div class="col-md-8">
                                    <div data-on="success" data-off="primary" class="make-switch">
 {{Form::checkbox('active', 1 ,array('id'=>'active','class' => 'form-control'))}}
                                </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-4 control-label">Title <span class="require">*</span></label>
                                <div class="col-md-8">
  {{Form::textarea('title','',array('id' => 'title','rows' => '2','class' => 'form-control'))}} 
                                 </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-4 control-label">Short Description </label>
                                <div class="col-md-8">
 {{Form::textarea('short_description','',array('id' => 'short_description','rows' => '2','class' => 'form-control'))}} 
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-4 control-label">Display Order <span class="require">*</span></label>
                                <div class="col-md-2">
  {{Form::text('display_order','',array('id' => 'display_order','class' => 'form-control'))}} 
                                </div>
                                <div class="col-md-8 pull-right"> <span class="help-block">Display order is to determine the item appearing sequence in the website.</span> </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-4 control-label">Upload Image <span class="require">*</span></label>
                                <div class="col-md-8">
                                  <div class="text-15px margin-top-10px">
 {{Form::file('bannerimage',array('id' => 'bannerimage'))}} 
                                    <br>
                                    <span class="help-block">(Image dimension: 600 x 624 pixels, JPEG/GIF/PNG only, Max. 2MB) </span> </div>
                                </div>
                              </div>
                              <div class="form-actions">
  {{ Form::hidden('type','pmrefinery',array('id' => 'type'))}} 
 
  <div class="col-md-offset-5 col-md-8"> 
                                    <button type="submit" class="btn btn-red" >Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp; <a class="btn btn-green" data-dismiss="modal" href="#">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                              </div>
                         {{Form::close()}}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--END MODAL Add New Process-->
                  <!--Modal delete selected items start-->
                  <div class="modal fade" aria-hidden="true" aria-labelledby="modal-login-label" role="dialog" tabindex="-1" id="modal-delete-selected">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button class="close" aria-hidden="true" data-dismiss="modal" type="button">×</button>
                          <h4 class="modal-title" id="modal-login-label4"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the selected item(s)? </h4>
                        </div>
                        <div class="modal-body">
                        
                          <div class="form-actions">
                            <div class="col-md-offset-4 col-md-8"> <a class="btn btn-red" href="#">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a class="btn btn-green" data-dismiss="modal" href="#">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- modal delete selected items end -->
                  <!--Modal delete all items start-->
                  <div class="modal fade" aria-hidden="true" aria-labelledby="modal-login-label" role="dialog" tabindex="-1" id="modal-delete-allprocess">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button class="close" aria-hidden="true" data-dismiss="modal" type="button">×</button>
                          <h4 class="modal-title" id="modal-login-label4"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete all items? </h4>
                        </div>
                        <div class="modal-body">
                          <div class="form-actions">
                            <div class="col-md-offset-4 col-md-8"> {{ Form::open(array('url' => 'admin/manufacturing/deleteallprocess', 'method' => 'post', 'name' => 'deleteall', 'id' => 'deleteall', 'class' => 'form-horizontal','files' => true)) }} <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> 
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
                  <br>
                  <br>
                  <table class="table table-hover table-striped">
                    <thead>
                      <tr>
                        <th width="1%"><input type="checkbox"></th>
                        <th>#</th>
                        <th>Status</th>
                        <th>Title</th>
                        <th width="12%">Display Order</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                 @foreach( $processlistings  as $k => $processlisting )    
                      <tr>
                        <td><input type="checkbox" value="{{$processlisting->id}}" class="chkNumber"></td>
                        <td>{{ $k+ 1}}</td>
                        <td>
                            @if( $processlisting->active == 1 )
                            <span class="label label-sm label-success">Active</span>
                            @else
                            <span class="label label-sm label-red">In Active</span>
                            @endif
                        </td>
                        <td>{{ $processlisting->title }}</td>
                        <td>
						<input type="hidden" id="updateOrder1mname" value="processeslisting" />
						<input type="text" value="{{ $processlisting->display_order }}" id="{{ $processlisting->id }}" class="display_order1 form-control"></td>
                        <td><a title="" data-toggle="modal" data-target="#modal-edit-processes{{ $processlisting->id }}" data-placement="top" data-hover="tooltip" href="#" data-original-title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a data-toggle="modal" data-target="#modal-deleteprocess{{$processlisting->id}}" title="" data-placement="top" data-hover="tooltip" href="#" data-original-title="Delete"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                            <!--Modal Edit Processes start-->
                            <div class="modal fade" aria-hidden="true" aria-labelledby="modal-login-label" role="dialog" tabindex="-1" id="modal-edit-processes{{ $processlisting->id }}">
                              <div class="modal-dialog modal-wide-width">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button class="close" aria-hidden="true" data-dismiss="modal" type="button">×</button>
                                    <h4 class="modal-title" id="modal-login-label3">Edit</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="form">
   {{ Form::open(array('url' => 'admin/manufacturing/editprocesseslisting','class'=> 'form-horizontal','method' => 'post','files' => true)) }}

                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Status</label>
                                          <div class="col-md-8">
                                             <div data-on="success" data-off="primary" class="make-switch">
 
   {{Form::checkbox('active', $processlisting->active, $processlisting->active ,array('id'=>'active','class' => 'form-control'))}}
  
   </div>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Title <span class="require">*</span></label>
                                          <div class="col-md-8">
   {{Form::textarea('title', $processlisting->title ,array('id'=>'title','class' => 'form-control','rows' => '2'))}}
                                           </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Short Description</label>
                                          <div class="col-md-8">
   {{Form::textarea('short_description', $processlisting->short_description ,array('id'=>'short_description','class' => 'form-control','rows' => '2'))}}
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Display Order <span class="require">*</span></label>
                                          <div class="col-md-2">
 {{Form::text('display_order', $processlisting->display_order ,array('id'=>'display_order','class' => 'form-control'))}}

                                          </div>
                                          <div class="col-md-8 pull-right"> <span class="help-block">Display order is to determine the item appearing sequence in the website.</span> </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Upload Image <span class="require">*</span></label>
                                          <div class="col-md-8">
                                            <div class="text-15px margin-top-10px"> 
  {{HTML::image($processlisting->bannerimage->url('medium'),'bannerimage',array( 'class' => 'img-responsive' ))}}
   {{Form::file('bannerimage',array('id'=>'bannerimage','class' => 'form-control'))}}

                                                <br>
                                                <span class="help-block">(Image dimension: 600 x 624 pixels, JPEG/GIF/PNG only, Max. 2MB) </span> </div>
                                          </div>
                                        </div>
                                        <div class="form-actions">
                                          <div class="col-md-offset-5 col-md-8">
      {{ Form::hidden('type','pmrefinery',array('id' => 'type'))}} 
      {{ Form::hidden('bannerid',$processlisting->id,array('id' => 'bannerid'))}}
                                              <button class="btn btn-red" >Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp; <a class="btn btn-green" data-dismiss="modal" href="#">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                        </div>
    {{ Form::close() }}
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <!--END MODAL Edit Processes-->
                            <!--Modal delete start-->
                            <div class="modal fade" aria-hidden="true" aria-labelledby="modal-login-label" role="dialog" tabindex="-1" id="modal-deleteprocess{{$processlisting->id}}">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button class="close" aria-hidden="true" data-dismiss="modal" type="button">×</button>
                                    <h4 class="modal-title" id="modal-login-label4"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this item? </h4>
                                  </div>
                                  <div class="modal-body">
                                    <p><strong>#{{$processlisting->id}}:</strong> {{$processlisting->title}}</p>
                                    <div class="form-actions">
                                      <div class="col-md-offset-4 col-md-8"> {{ Form::open(array('url' => 'admin/manufacturing/deleteprocesseslisting', 'method' => 'post', 'name' => 'deletep'.$processlisting->id, 'id' => 'deletep'.$processlisting->id, 'class' => 'form-horizontal','files' => true)) }}{{ Form::hidden('processlistingid',$processlisting->id) }} <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> 
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
                    <p class="pull-left">Showing {{ $processlistings->getFrom() }} to {{ $processlistings->getTo() }} of {{ $processlistings->getTotal() }} entries</p>
                    {{ $processlistings->appends(Input::except('page'))->links() }}
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <!-- end portlet -->
            </div>
          </div>
@stop
@extends('layouts.admin')
@section('content')

<script type="text/javascript" src="{{ URL::asset('js/modalPopup.js') }}"></script>

  <!--<div class="page-content">-->
          <div class="row">
            <div class="col-lg-12">
              <h2>Management Team <i class="fa fa-angle-right"></i> Listing</h2>
              <div class="clearfix"></div>
                         
              <div class="pull-left"> Last updated: <span class="text-blue">{{ date("d F Y",strtotime($page[0]->updated_at)) }} @ {{ date("g:i A",strtotime($page[0]->updated_at)) }}</span> </div>
              <div class="clearfix"></div>
              <p></p>
              {{ Form::open(array('url' => 'admin/page/savepage','class'=> 'form-horizontal','method' => 'post','name' => 'corporatdirprofile','id' => 'corporatdirprofile')) }} 
		   {{Form::hidden('preview','')}}
           {{Form::hidden('pageid',$page[0]->id)}}
           {{Form::hidden('type',$page[0]->type)}}
			  <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Page Info</div>
                  <br/>
                  <span class="text-blue text-12px">You can edit the content by clicking the text section below.</span>
                  <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                </div>
                <div class="portlet-body">
                  <div contenteditable="true" id="page-title">
                   {{$page[0]->page_title}}
                  </div>
				  {{ Form::textarea('page_title',$page[0]->page_title,array("id" => "textarea-page-title","class" => "hideThisField")) }} 
                </div>
              </div>
<div class="form-actions none-bg"> <a href="javascript:void(0);" class="btn btn-red" onclick="Addsavepage('corporatdirprofile','');">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp; <button type="submit" class="btn btn-blue">Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></button>&nbsp; <a href="#" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
			 {{ Form::close()}} 
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Management Team Listing</div>
                  <br/>
                  <p class="margin-top-10px"></p>
                  <a href="#" data-target="#modal-add-director" data-toggle="modal" class="btn btn-success">Add New &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary">Delete</button>
                    <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                    <ul role="menu" class="dropdown-menu">
                      <li><a href="#" onclick="MyFunction();return false;">Delete selected item(s)</a></li>
                      <!-- <li><a href="#" data-target="#modal-delete-selected-process" data-toggle="modal" class="deleteid" rel="{{url();}}/admin/page/dirprodeletemultiple" rev="modal-delete-selected-process">Delete selected item(s)</a></li> -->
                      <li class="divider"></li>
                      <li><a href="#" data-target="#modal-delete-all" data-toggle="modal">Delete all</a></li>
                    </ul>
                 </div><div class="tools"> <i class="fa fa-chevron-up"></i></div>
                  <!--Modal Add New director start-->
                  <div id="modal-add-director" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog modal-wide-width">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label2" class="modal-title">Add New</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form">
                          {{ Form::open(array('url' => 'admin/dirprofileadd','class'=> 'form-horizontal','method' => 'post','files' => true)) }}
                              <div class="form-group">
                                <label class="col-md-3 control-label">Status</label>
                                <div class="col-md-9">
                                  <div data-on="success" data-off="primary" class="make-switch">
                                  {{Form::checkbox('active', 1 ,array('class' => 'form-control'))}}
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Name <span class='require'>*</span></label>
                                <div class="col-md-9">
                                  {{ Form::text('name','',array('class' => 'form-control', 'placeholder' => 'Enter Name' )) }} 
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Position <span class='require'>*</span></label>
                                <div class="col-md-9">
                                  {{ Form::text('position','',array('class' => 'form-control', 'placeholder' => '1' )) }} 
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Date <span class='require'>*</span></label>
                                <div class="col-md-5">
                                  <div class="input-group">
                                  {{Form::text('date','',array('class' => 'datepicker-default form-control','data-date-format' => 'dd/mm/yyyy', 'placeholder' => 'dd/mm/yyyy'))}}  
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Upload image <span class='require'>*</span></label>
                                <div class="col-md-9">
                                  <div class="text-15px margin-top-10px">
                                    {{-- <img src="{{ URL::asset('uploads/slides/'.$BottomMontage->Banner) }}" alt="Banner" class="img-responsive"><br/> --}}
                                    {{ Form::file('image');}}
                                    <br/>
                                    <span class="help-block">(Image  JPEG/GIF/PNG only, Max. 1MB) </span> </div>
                                </div>
                           </div>
                              <div class="form-group">
                                <label for="inputContent" class="col-md-3 control-label">Content</label>
                                <div class="col-md-9">
                             <div contenteditable="true" id="content-edit">
                                        	Please place your press release content here.
                                            
                                        </div>
                                         {{Form::textarea('content', '',array('id'=>'textarea-content-edit','class' => 'hideThisField'))}}
                                          
                                </div>
                              </div>
                              {{Form::hidden('type','keymanagement')}}
                              <div class="form-actions">
                                <div class="col-md-offset-5 col-md-8"> <button type="submit" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                              </div>
                           {{Form :: close()}}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--END MODAL Add New director-->
                  <!--Modal delete selected items start-->
                  <div id="modal-delete-selected-process" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                         <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete selected items? </h4>
                        </div>
                        <div class="modal-body">
                        <div class="form-actions">
                              {{ Form::open(array('url' => 'admin/dirProfileDeleteMultiple', 'method' => 'post', 'name' => 'deletemultiple', 'id' => 'deletemultiple', 'class' => 'form-horizontal','onsubmit' => 'getAllChecked();')) }} 
                              {{Form::hidden('deleteid')}} 
                              <div class="col-md-offset-4 col-md-8"> 
                                <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; 
                                <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> 
                              </div>
                              
                              {{ Form::close() }} 
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
                            <div class="col-md-offset-4 col-md-8"> {{ Form::open(array('url' => 'admin/dirprofiledeleteall', 'method' => 'post', 'name' => 'deleteallsementra', 'id' => 'deleteallsementra', 'class' => 'form-horizontal','files' => true)) }}{{Form::hidden('type','keymanagement')}} <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> 
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
                  <div class="clearfix"></div>
                  <br/>
                  <br/>
                  <table class="table table-hover table-striped">
                    <thead>
                      <tr>
                   		<th width="1%"><input type="checkbox" id="checkall"/></th>
                        <th>#</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Name</th> <th>Position</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
					 @foreach ($profilelist as $k => $slidingbanner)   
                      <tr>
                        <td><input type="checkbox" class="chkNumber case" value="{{$slidingbanner->id}}"></td>
                        <td>{{$profilelist->getFrom()+$k}}</td>
                        <td> @if ( $slidingbanner->active == 1)
                            <span class="label label-sm label-success">Active</span>
                        @else
                            <span class="label label-sm label-red">In Active</span>
                        @endif</td>
                        <td>{{ $slidingbanner->date }}</td>
                        <td>{{ $slidingbanner->name }}</td><td>{{ $slidingbanner->position}}</td>
                        <td><a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-director{{$slidingbanner->id}}" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-dir{{$slidingbanner->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                            <!--Modal Edit director start-->
                            <div id="modal-edit-director{{$slidingbanner->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                              <div class="modal-dialog modal-wide-width">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                    <h4 id="modal-login-label2" class="modal-title">Edit Profile</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="form">
                                    	
                                  {{ Form::open(array('url' => 'admin/dirprofileedit','class'=> 'form-horizontal','method' => 'post','files' => true)) }}
                                        <div class="form-group">
                                          <label class="col-md-3 control-label">Status</label>
                                          <div class="col-md-9">
                                            <div data-on="success" data-off="primary" class="make-switch">
                                          {{Form::checkbox('active', $slidingbanner->active, $slidingbanner->active ,array('class' => 'form-control'))}}
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-3 control-label">Name <span class='require'>*</span></label>
                                          <div class="col-md-9"> {{ Form::textarea('name',$slidingbanner->name, array('class' => 'form-control', 'rows' => '2')) }}
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-3 control-label">Position <span class='require'>*</span></label>
                                          <div class="col-md-9">
                                            {{ Form::text('position',$slidingbanner->position,array('class' => 'form-control', 'placeholder' => '1' )) }} 
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-3 control-label">Date <span class='require'>*</span></label>
                                          <div class="col-md-5">
                                            <div class="input-group">
                                             {{Form::text('date',$slidingbanner->date,array('class' => 'datepicker-default form-control','data-date-format' => 'dd/mm/yyyy', 'placeholder' => 'dd/mm/yyyy'))}}
                                              <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-3 control-label">Upload image <span class='require'>*</span></label>
                                          <div class="col-md-9">
                                            <div class="text-15px margin-top-10px">
                                              <img src="{{ URL::asset('uploads/profiles/'.$slidingbanner->image) }}" alt="image" class="img-responsive"><br/>
                                              {{ Form::file('image');}}
                                              <br/>
                                              <span class="help-block">( JPEG/GIF/PNG only, Max. 1MB) </span> </div>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label for="inputContent" class="col-md-3 control-label">Content</label>
                                          <div class="col-md-9">
                                             <div contenteditable="true" id="content-edit{{$slidingbanner->id}}">
                                        {{$slidingbanner->content}}
                                        </div>
                                         {{Form::textarea('content', $slidingbanner->content,array('id'=>'textarea-content-edit'.$slidingbanner->id,'class' => 'hideThisField'))}} 
                                    {{ Form::hidden('id',$slidingbanner->id) }} 
                                    
                                            <!-- end content editable-->
                                          </div>
                                        </div>
                                        <div class="form-actions">
                                          <div class="col-md-offset-5 col-md-8"> <button type="submit" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                        </div>
                                     {{ Form :: close()}}
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <!--END MODAL Edit director-->
                            <!--Modal delete start-->
                            <div id="modal-delete-dir{{$slidingbanner->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                    <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this item? </h4>
                                  </div>
                                  <div class="modal-body">
                                    <p><strong>#{{$slidingbanner->id}}:</strong> {{$slidingbanner->name}}</p>
                                    <div class="form-actions">
                                      <div class="col-md-offset-4 col-md-8">  {{ Form::open(array('url' => 'admin/dirprofiledelete', 'method' => 'post', 'name' => 'delete'.$slidingbanner->id, 'id' => 'delete'.$slidingbanner->id, 'class' => 'form-horizontal','files' => true)) }}
									  {{ Form::hidden('dirid',$slidingbanner->id) }} <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> 
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
                   <p class="pull-left">Showing {{ $profilelist->getFrom() }} to {{ $profilelist->getTo() }} of {{ $profilelist->getTotal() }} entries</p>
                    {{ $profilelist->appends(Input::except('page'))->links() }}
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <!-- end portlet -->
            </div>
          </div>
        <!--</div>-->
@stop
@extends('layouts.admin')
@section('content')

<script type="text/javascript" src="{{ URL::asset('js/modalPopup.js') }}"></script>


  <!--<div class="page-content">-->
          <div class="row">
            <div class="col-lg-12">
              <h2>AGM/EGM/MSWG <i class="fa fa-angle-right"></i> Listing</h2>
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
                  <div class="caption">AGM/EGM/MSWG Listing</div>
                  <br/>
                  <p class="margin-top-10px"></p>
                  <a href="#" data-target="#modal-add-director" data-toggle="modal" class="btn btn-success">Add New &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary">Delete</button>
                    <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                    <ul role="menu" class="dropdown-menu">
                    <li><a href="#" onclick="MyFunction();return false;">Delete selected item(s)</a></li>
                      <!-- <li><a href="#" data-target="#modal-delete-selected-process" data-toggle="modal" class="deleteid" rel="{{url();}}/admin/page/reportsdeletemultiple" rev="modal-delete-selected-process">Delete selected item(s)</a></li> -->
                      <li class="divider"></li>
                      <li><a href="#" data-target="#modal-delete-all" data-toggle="modal">Delete all</a></li>
                    </ul>
                 </div><div class="tools"> <i class="fa fa-chevron-up"></i></div>
                  <!--Modal Add New director start-->
                  <div id="modal-add-director" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog  modal-wide-width">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label2" class="modal-title">Add New Report</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form">
                          {{ Form::open(array('url' => 'admin/add','class'=> 'form-horizontal','method' => 'post','files' => true)) }}
                              <div class="form-group">
                                <label class="col-md-3 control-label">Status</label>
                                <div class="col-md-9">
                                  <div data-on="success" data-off="primary" class="make-switch">
                                  {{Form::checkbox('active', 1 ,array('id'=>'active','class' => 'form-control'))}}
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Title <span class='require'>*</span></label>
                                <div class="col-md-9">
                                  {{ Form::text('title','',array('id' => 'title','class' => 'form-control', 'placeholder' => 'Title' )) }} 
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Date <span class='require'>*</span></label>
                                <div class="col-md-5">
                                  <div class="input-group">
                                  {{Form::text('date','',array('id'=>'date','class' => 'datepicker-default form-control','data-date-format' => 'dd/mm/yyyy', 'placeholder' => 'dd/mm/yyyy'))}}  
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                  </div>
                                </div>
                              </div>
							  <div class="form-group">
                              	<label for="inputContent" class="col-md-3 control-label">Content</label>
								<div class="col-md-9">
                                	
                                     <div contenteditable="true" id="content">
                  
                  </div>
				  {{ Form::textarea('content','',array("id" => "textarea-content","class" => "hideThisField")) }} 
                                </div>
                              </div>
							  <div class="form-group">
                               <label class="col-md-3 control-label">Upload AGM <br/> Cover <span class='require'>*</span></label>
                                <div class="col-md-8">
                                  <div class="text-15px margin-top-10px">
                                   {{ Form::file('image','',array('id' => 'image','class' => 'form-control' )) }} 
                                    <br/>
                                    <span class="help-block">(Image dimension: 300 x 400 pixels, JPEG/GIF/PNG only, Max. 2MB) </span> </div>
                                </div>
                              </div>
                              <div class="form-group">
                               <label class="col-md-3 control-label">Upload Notice of AGM (PDF)</label>
                                <div class="col-md-8">
                                  <div class="text-15px margin-top-10px">
                                   {{ Form::file('pdf','',array('id' => 'pdf','class' => 'form-control' )) }} 
                                  </div>
                                </div>
                              </div>
							    <div class="form-group">
                               <label class="col-md-3 control-label">Upload Notice of EGM (PDF)</label>
                                <div class="col-md-8">
                                  <div class="text-15px margin-top-10px">
                                   {{ Form::file('pdf2','',array('id' => 'pdf2','class' => 'form-control' )) }} 
                                  </div>
                                </div>
                              </div>
							  <div class="form-group">
                               <label class="col-md-3 control-label">Upload MSWG (PDF)</label>
                                <div class="col-md-8">
                                  <div class="text-15px margin-top-10px">
                                   {{ Form::file('pdf3','',array('id' => 'pdf3','class' => 'form-control' )) }} 
                                  </div>
                                </div>
                              </div>
							    <div class="form-group">
                               <label class="col-md-3 control-label">Upload MSWG Letter (PDF)</label>
                                <div class="col-md-8">
                                  <div class="text-15px margin-top-10px">
                                   {{ Form::file('pdf4','',array('id' => 'pdf4','class' => 'form-control' )) }} 
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                               <label class="col-md-3 control-label">Upload Minutes Of AGM (PDF)</label>
							    
                                <div class="col-md-9">
                                  <div class="text-15px margin-top-10px">
                                   {{ Form::file('pdf5','',array('id' => 'pdf5','class' => 'form-control' )) }} 
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                               <label class="col-md-3 control-label">Upload Annual Report (PDF)</label>
							    
                                <div class="col-md-9">
                                  <div class="text-15px margin-top-10px">
                                   {{ Form::file('pdf6','',array('id' => 'pdf6','class' => 'form-control' )) }} 
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                               <label class="col-md-3 control-label">Upload Form Of Proxy (PDF)</label>
							    
                                <div class="col-md-9">
                                  <div class="text-15px margin-top-10px">
                                   {{ Form::file('pdf7','',array('id' => 'pdf7','class' => 'form-control' )) }} 
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                               <label class="col-md-3 control-label">Upload Circular To Shareholders (PDF)</label>
							    
                                <div class="col-md-9">
                                  <div class="text-15px margin-top-10px">
                                   {{ Form::file('pdf8','',array('id' => 'pdf8','class' => 'form-control' )) }} 
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                               <label class="col-md-3 control-label">Upload Corporate Governance Report (PDF)</label>
							    
                                <div class="col-md-9">
                                  <div class="text-15px margin-top-10px">
                                   {{ Form::file('pdf9','',array('id' => 'pdf9','class' => 'form-control' )) }} 
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                               <label class="col-md-3 control-label">Upload Administrative Guide (PDF)</label>
							    
                                <div class="col-md-9">
                                  <div class="text-15px margin-top-10px">
                                   {{ Form::file('pdf10','',array('id' => 'pdf10','class' => 'form-control' )) }} 
                                  </div>
                                </div>
                              </div>
                              <!-- FIELD 11 -->
                              <div class="form-group">
                               <label class="col-md-3 control-label">Name</label>
                                <div class="col-md-5">
                                  <div class="text-15px margin-top-10px">
                                   {{ Form::text('pdf11_name','',array('id' => 'pdf11_name','class' => 'form-control' )) }} 
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="text-15px margin-top-10px">
                                   {{ Form::file('pdf11','',array('id' => 'pdf11','class' => 'form-control' )) }} 
                                  </div>
                                </div>
                              </div>
                              <!-- FIELD 12 -->
                              <div class="form-group">
                               <label class="col-md-3 control-label">Name</label>
                                <div class="col-md-5">
                                  <div class="text-15px margin-top-10px">
                                   {{ Form::text('pdf12_name','',array('id' => 'pdf12_name','class' => 'form-control' )) }} 
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="text-15px margin-top-10px">
                                   {{ Form::file('pdf12','',array('id' => 'pdf12','class' => 'form-control' )) }} 
                                  </div>
                                </div>
                              </div>
                              <!-- FIELD 13 -->
                              <div class="form-group">
                               <label class="col-md-3 control-label">Name</label>
                                <div class="col-md-5">
                                  <div class="text-15px margin-top-10px">
                                   {{ Form::text('pdf13_name','',array('id' => 'pdf13_name','class' => 'form-control' )) }} 
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="text-15px margin-top-10px">
                                   {{ Form::file('pdf13','',array('id' => 'pdf13','class' => 'form-control' )) }} 
                                  </div>
                                </div>
                              </div>
                              <!-- FIELD 14 -->
                              <div class="form-group">
                               <label class="col-md-3 control-label">Name</label>
                                <div class="col-md-5">
                                  <div class="text-15px margin-top-10px">
                                   {{ Form::text('pdf14_name','',array('id' => 'pdf14_name','class' => 'form-control' )) }} 
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="text-15px margin-top-10px">
                                   {{ Form::file('pdf14','',array('id' => 'pdf14','class' => 'form-control' )) }} 
                                  </div>
                                </div>
                              </div>
                              {{Form::hidden('type','prospectusarreports')}}
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
                              {{ Form::open(array('url' => 'admin/deleteMultipleReports', 'method' => 'post', 'name' => 'deletemultiple', 'id' => 'deletemultiple', 'class' => 'form-horizontal','onsubmit' => 'getAllChecked();')) }} 
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
                            <div class="col-md-offset-4 col-md-8"> {{ Form::open(array('url' => 'admin/deleteall', 'method' => 'post', 'name' => 'deleteallsementra', 'id' => 'deleteallsementra', 'class' => 'form-horizontal','files' => true)) }} {{Form::hidden('type','prospectusarreports')}}<button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> 
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
                        <th>Title</th>
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
                        <td>  <a href="{{$slidingbanner->pdf->url()}}" target="_blank">{{ $slidingbanner->title }}</a></td>
                        <td><a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-director{{$slidingbanner->id}}" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-dir{{$slidingbanner->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                            <!--Modal Edit director start-->
                            <div id="modal-edit-director{{$slidingbanner->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                              <div class="modal-dialog modal-wide-width">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                    <h4 id="modal-login-label2" class="modal-title">Edit Report</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="form">
                                  {{ Form::open(array('url' => 'admin/edit','class'=> 'form-horizontal','method' => 'post','files' => true)) }}
                                        <div class="form-group">
                                          <label class="col-md-3 control-label">Status</label>
                                          <div class="col-md-9">
                                            <div data-on="success" data-off="primary" class="make-switch">
                                          {{Form::checkbox('active', $slidingbanner->active, $slidingbanner->active ,array('id'=>'active','class' => 'form-control'))}}
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-3 control-label">Title <span class='require'>*</span></label>
                                          <div class="col-md-9"> {{ Form::textarea('title',$slidingbanner->title, array('id' => 'title','class' => 'form-control', 'rows' => '2')) }}
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-3 control-label">Date <span class='require'>*</span></label>
                                          <div class="col-md-5">
                                            <div class="input-group">
                                             {{Form::text('date',$slidingbanner->date,array('id'=>'date','class' => 'datepicker-default form-control','data-date-format' => 'dd/mm/yyyy', 'placeholder' => 'dd/mm/yyyy'))}}
                                              <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            </div>
                                          </div>
                                        </div>
										<div class="form-group">
                              	<label for="inputContent" class="col-md-3 control-label">Content</label>
								<div class="col-md-9">
                                	
                                     <div contenteditable="true" id="content{{$slidingbanner->id}}">
                  {{$slidingbanner->content}}
                  </div>
				  {{ Form::textarea('content',$slidingbanner->content,array("id" => "textarea-content".$slidingbanner->id,"class" => "hideThisField")) }} 
                                </div>
                              </div>
                                        <div class="form-group">
                                          <label class="col-md-3 control-label">Upload AGM Cover </label>
                                          <div class="col-md-9">
                                            <div class="text-15px margin-top-10px"> 
{{HTML::image($slidingbanner->image->url('large'),'image',array( 'class' => 'img-responsive' ))}}
<br>
{{ Form::file('image',array('id' => 'image')) }}        
                                                <br>
                                                <span class="help-block">(Image dimension: 300 x 400 pixels, JPEG/GIF/PNG only, Max. 2MB) </span> </div>
                                          </div>
                                        </div>
										<div class="form-group">
                                          <label for="inputContent" class="col-md-3 control-label">Upload Notice of AGM (PDF)</label>
                                         
                                          <div class="col-md-9">
                                          	  <a href="{{$slidingbanner->pdf->url()}}" target="_blank">{{$slidingbanner->pdf_file_name}}</a><br />
                                             {{Form::file('pdf', null,array('id'=>'pdfInput'))}}
                                    {{ Form::hidden('id',$slidingbanner->id) }}       
                                            <!-- end content editable-->
                                          </div>
                                        </div>
										 <div class="form-group">
                               <label class="col-md-3 control-label">Upload Notice of EGM (PDF)</label>
							     
                                <div class="col-md-9">
                                	<a href="{{$slidingbanner->pdf2->url()}}" target="_blank">{{$slidingbanner->pdf2_file_name}}</a>
                                  <div class="text-15px margin-top-10px">
                                   {{ Form::file('pdf2',null,array('id' => 'pdf2','class' => 'form-control' )) }} 
                                  </div>
                                </div>
                              </div>
							  <div class="form-group">
                               <label class="col-md-3 control-label">Upload MSWG (PDF)</label>
							     
                                <div class="col-md-9">
                                	<a href="{{$slidingbanner->pdf3->url()}}" target="_blank">{{$slidingbanner->pdf3_file_name}}</a>
                                  <div class="text-15px margin-top-10px">
                                   {{ Form::file('pdf3','',array('id' => 'pdf3','class' => 'form-control' )) }} 
                                  </div>
                                </div>
                              </div>
							    <div class="form-group">
                               <label class="col-md-3 control-label">Upload MSWG Letter (PDF)</label>
							    
                                <div class="col-md-9">
                                   <a href="{{$slidingbanner->pdf4->url()}}" target="_blank">{{$slidingbanner->pdf4_file_name}}</a>
                                  <div class="text-15px margin-top-10px">
                                   {{ Form::file('pdf4','',array('id' => 'pdf4','class' => 'form-control' )) }} 
                                  </div>
                                </div>
                              </div>
							  <div class="form-group">
                               <label class="col-md-3 control-label">Upload Minutes Of AGM (PDF)</label>
							     
                                <div class="col-md-9">
                                	<a href="{{$slidingbanner->pdf5->url()}}" target="_blank">{{$slidingbanner->pdf5_file_name}}</a>
                                  <div class="text-15px margin-top-10px">
                                   {{ Form::file('pdf5','',array('id' => 'pdf5','class' => 'form-control' )) }} 
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                               <label class="col-md-3 control-label">Upload Annual Report (PDF)</label>
							     
                                <div class="col-md-9">
                                	<a href="{{$slidingbanner->pdf6->url()}}" target="_blank">{{$slidingbanner->pdf6_file_name}}</a>
                                  <div class="text-15px margin-top-10px">
                                   {{ Form::file('pdf6','',array('id' => 'pdf6','class' => 'form-control' )) }} 
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                               <label class="col-md-3 control-label">Upload Form Of Proxy (PDF)</label>
							     
                                <div class="col-md-9">
                                	<a href="{{$slidingbanner->pdf7->url()}}" target="_blank">{{$slidingbanner->pdf7_file_name}}</a>
                                  <div class="text-15px margin-top-10px">
                                   {{ Form::file('pdf7','',array('id' => 'pdf7','class' => 'form-control' )) }} 
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                               <label class="col-md-3 control-label">Upload Circular To Shareholders (PDF)</label>
							    
                                <div class="col-md-9">
                                  <a href="{{$slidingbanner->pdf8->url()}}" target="_blank">{{$slidingbanner->pdf8_file_name}}</a>
                                  <div class="text-15px margin-top-10px">
                                   {{ Form::file('pdf8','',array('id' => 'pdf8','class' => 'form-control' )) }} 
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                               <label class="col-md-3 control-label">Upload Corporate Governance Report (PDF)</label>
							    
                                <div class="col-md-9">
                                  <a href="{{$slidingbanner->pdf9->url()}}" target="_blank">{{$slidingbanner->pdf9_file_name}}</a>
                                  <div class="text-15px margin-top-10px">
                                   {{ Form::file('pdf9','',array('id' => 'pdf9','class' => 'form-control' )) }} 
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                               <label class="col-md-3 control-label">Upload Administrative Guide (PDF)</label>
							    
                                <div class="col-md-9">
                                  <a href="{{$slidingbanner->pdf10->url()}}" target="_blank">{{$slidingbanner->pdf10_file_name}}</a>
                                  <div class="text-15px margin-top-10px">
                                   {{ Form::file('pdf10','',array('id' => 'pdf10','class' => 'form-control' )) }} 
                                  </div>
                                </div>
                              </div>
                              <?php $pending_files = 11; ?>
                              @for($i=11;$i<=14;$i++)
                              <?php

                              $count_file_label_name = "pdf".$i."_name";
                              $file_label_name = $slidingbanner->$count_file_label_name;

                              $count_file_name = "pdf".$i."_file_name";
                              $file_name = $slidingbanner->$count_file_name;
                              
                              ?>
                              @if(!empty($file_label_name) && !empty($file_name))
                              <?php
                              $count_file_url = "pdf".$i;
                              $file_url = $slidingbanner->$count_file_url->url();
                              ?>
                              <div class="form-group">
                               <label class="col-md-3 control-label">{{ $file_label_name }}</label>
                  
                                <div class="col-md-9">
                                  <a href="{{$file_url}}" target="_blank">{{$file_name}}</a>
                                  <div class="text-15px margin-top-10px">
                                   {{ Form::file('pdf'.$i,'',array('id' => 'pdf'.$i,'class' => 'form-control' )) }} 
                                  </div>
                                </div>
                              </div>
                              <?php $pending_files++; ?>
                              
                              @endif
                              @endfor

                              @if($pending_files>=11 && $pending_files<=14)
                              <div class="form-group">
                               <label class="col-md-3 control-label">Name</label>
                                <div class="col-md-5">
                                  <div class="text-15px margin-top-10px">
                                   {{ Form::text('pdf'.$pending_files.'_name','',array('id' => 'pdf'.$pending_files.'_name','class' => 'form-control' )) }} 
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div class="text-15px margin-top-10px">
                                   {{ Form::file('pdf'.$pending_files,'',array('id' => 'pdf'.$pending_files,'class' => 'form-control' )) }} 
                                  </div>
                                </div>
                              </div>
                              @endif

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
                                    <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this report? </h4>
                                  </div>
                                  <div class="modal-body">
                                    <p><strong>#{{$slidingbanner->id}}:</strong> {{$slidingbanner->title}}</p>
                                    <div class="form-actions">
                                      <div class="col-md-offset-4 col-md-8">  {{ Form::open(array('url' => 'admin/singledelete', 'method' => 'post', 'name' => 'delete'.$slidingbanner->id, 'id' => 'delete'.$slidingbanner->id, 'class' => 'form-horizontal','files' => true)) }}
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
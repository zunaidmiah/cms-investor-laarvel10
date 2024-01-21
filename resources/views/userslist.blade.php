@extends('layouts.admin')
@section('content')
  <div class="row">
            <div class="col-lg-12">
              <h2>Users <i class="fa fa-angle-right"></i> Listing</h2>
              <div class="clearfix"></div>
             
            <!--  <div class="pull-left"> Last updated: <span class="text-blue">15 Sept, 2014 @ 12.00PM</span> </div>-->
              <div class="clearfix"></div>
              <p></p>
              
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Users Listing</div>
                  <br/>
                  <p class="margin-top-10px"></p>
                  <a href="#" data-target="#modal-add-user" data-toggle="modal" class="btn btn-success">Add New &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary">Delete</button>
                    <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                    <ul role="menu" class="dropdown-menu">
                      <li><a href="#" data-target="#modal-delete-selected" data-toggle="modal"  class="deleteid" rel="{{url();}}/admin/page/deletemultipleuserlist" rev="modal-delete-selected">Delete selected item(s)</a></li>
                      <li class="divider"></li>
                      <li><a href="#" data-target="#modal-delete-all" data-toggle="modal">Delete all</a></li>
                    </ul>
                  </div>
                   
				  <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                  <!--Modal Add New start-->
                  <div id="modal-add-user" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog modal-wide-width">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label3" class="modal-title">Add New User</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form">
                          {{ Form::open(array('url' => 'admin/users/saveuser','name' => 'newuser','id' => 'newuser', 'class'=> 'form-horizontal','method' => 'post')) }}
                              <div class="form-group">
                                <label class="col-md-3 control-label">Status</label>
                                <div class="col-md-9">
                                  <div data-on="success" data-off="primary" class="make-switch">
                  {{Form::checkbox('active', 1,array('id'=>'active','class' => 'form-control'))}}

                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Name <span class='require'>*</span></label>
                                <div class="col-md-9">
                     {{Form::text('name', null ,array('id'=>'name','class' => 'validate[required] form-control'))}}
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Company <span class='require'>*</span></label>
                                <div class="col-md-9">
                  {{Form::textarea('company', null ,array('id'=>'company','class' => 'validate[required] form-control','rows' => '2','placeholder' => "eg. Yee Lee Corporation Bhd"))}}
     
                                </div>
                              </div>
                              <div class="form-group">
                              	<label class="col-md-3 control-label">Role <span class='require'>*</span></label>
                                <div class="col-md-3">
            {{ Form::select('role', array('1' => 'Administrator','2' => 'User'), null,array('id' => 'role','class' => 'form-control')) }}
                                </div>
                              </div>
                              <div class="form-group">
                              	<label class="col-md-3 control-label">Email Address <span class='require'>*</span></label>
								<div class="col-md-6">
                                	<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                 {{Form::text('email', null ,array('id'=>'email','class' => 'validate[required,custom[email]] form-control'))}}
</div>
                                    <span class="help-block">Email address is your login ID.</span>
                                </div>
                              </div>
                              <div class="form-group">
                                  <label for="password" class="control-label col-md-3">Password <span class='require'>*</span></label>

                                  <div class="col-md-6">
                                   	<div class="input-icon"><i class="fa fa-key"></i> 
                                  {{Form::password('password', array('id'=>'password1', 'class' => 'validate[required,minSize[6],maxSize[12]] form-control'))}}<span class="text-10px">(Password length should be between 6-12 characters)</span>                                    </div>
                                  </div>
                             </div>
                                        
                             <div class="form-group">
                                <label for="password" class="control-label col-md-3">Confirm Password <span class='require'>*</span></label>
							    <div class="col-md-6">
                                    <div class="input-icon"><i class="fa fa-key"></i> 
                              {{Form::password('confirmpassword', array('id'=>'confirmpassword','class' => 'validate[required] form-control'))}}<span class="text-10px">(Password length should be between 6-12 characters)</span>                                    </div>
                                 </div>
                              </div>
                              <div class="form-group">
                              	<label  class="control-label col-md-3">Permission &amp; Edit Pages</label>
								<div class="col-md-9 margin-top-5px">
                                 	<div class="text-blue border-bottom">You can select multiple pages from the below section.</div>
                                    <div class="checkbox-list margin-top-10px">
                                    	<label class="checkbox-inline"><input name="access[]" id="inlineCheckbox1" type="checkbox" value="all"/>&nbsp; All Pages</label>
                                        <label class="checkbox-inline"><input name="access[]" id="inlineCheckbox2" type="checkbox" value="index"/>&nbsp; Index</label>
                                    	<label class="checkbox-inline"><input name="access[]" id="inlineCheckbox3" type="checkbox" value="career"/>&nbsp; Careers</label>
                                        <label class="checkbox-inline"><input name="access[]" id="inlineCheckbox3" type="checkbox" value="contact"/>&nbsp; Contact Us</label>
                            
                                    </div>
                                    <div class="margin-top-10px"><strong>Investor Relations:</strong></div>
                                    <div class="checkbox-list">
                                    	<label class="checkbox-inline"><input name="access[]" id="inlineCheckbox1" type="checkbox" value="announcements"/>&nbsp; Announcements</label>
                                        <label class="checkbox-inline"><input name="access[]" id="inlineCheckbox2" type="checkbox" value="annualreports"/>&nbsp; Annual Reports</label>
                                    	<label class="checkbox-inline"><input name="access[]" id="inlineCheckbox3" type="checkbox" value="pressreleases"/>&nbsp; Press Releases</label> 
                                    </div>
                                    
                                    <div class="margin-top-10px"><strong>Manufacturing:</strong></div>
                                    <div class="checkbox-list">
                                    	<label class="checkbox-inline"><input name="access[]" id="inlineCheckbox1" type="checkbox" value="pkcanpac"/>&nbsp; Canpac Sdn Bhd</label>
                                        <label class="checkbox-inline"><input name="access[]" id="inlineCheckbox2" type="checkbox" value="pksoutheast"/>&nbsp; South East Asia Paper Products Sdn Bhd</label>
                                    </div>
                                    <div class="checkbox-list">
                                    	<label class="checkbox-inline"><input name="access[]" id="inlineCheckbox1" type="checkbox" value="pmoil"/>&nbsp; Yee Lee Edible Oils Sdn Bhd</label>
                                        <label class="checkbox-inline"><input name="access[]" id="inlineCheckbox2" type="checkbox" value="pmmill"/>&nbsp; Yee Lee Palm Oil Industries Sdn Bhd</label>
                                    </div>
                                    <div class="margin-top-10px"><strong>Trading:</strong></div>
                                    <div class="checkbox-list">
                                    	<label class="checkbox-inline"><input name="access[]" id="inlineCheckbox1" type="checkbox" value="trading"/>&nbsp; Yee Lee Trading Co. Sdn Bhd </label>

                                    </div>
                                    <div class="margin-top-10px"><strong>Plantation:</strong></div>
                                    <div class="checkbox-list">
                                    	<label class="checkbox-inline"><input name="access[]" id="inlineCheckbox1" type="checkbox" value="sementra"/>&nbsp; Sementra Plantations Sdn Bhd</label>
                                        <label class="checkbox-inline"><input name="access[]" id="inlineCheckbox2" type="checkbox" value="desa"/>&nbsp; Desa Tea Sdn Bhd</label>
                                    </div>
                                    <div class="margin-top-10px"><strong>Hospitality:</strong></div>
                                    <div class="checkbox-list">
                                    	<label class="checkbox-inline"><input name="access[]" id="inlineCheckbox1" type="checkbox" value="sabah"/>&nbsp; Sabah Tea Resort Sdn Bhd</label>
                                    </div>
                                    
                                    
                                </div>
                              </div>
                              <div class="form-actions">
                                <div class="col-md-offset-5 col-md-8"> 
                                    <button type="submit" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                              </div>
                           {{ Form::close() }}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--END MODAL Add New-->
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
                            <div class="col-md-offset-4 col-md-8"> {{ Form::open(array('url' => 'admin/deleteallusers', 'method' => 'post', 'name' => 'deleteallpressrelease', 'id' => 'deleteallpressrelease', 'class' => 'form-horizontal','files' => true)) }} <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> 
                                      {{ Form::close() }}</div>
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
                       {{ Form::open(array('url' => 'admin/userslist','class'=> 'form-horizontal','method' => 'get')) }}
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
                        <th width="1%"><input type="checkbox"/></th>
                        <th>#</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $k => $user)
                      <tr>
                        <td><input type="checkbox"  class="chkNumber"  value="{{$user->id}}"/></td>
                        <td>{{ $k+1 }}</td>
                        <td>
                            @if($user->active == 1)
                            <span class="label label-sm label-success">Active</span>
                            @else
                             <span class="label label-sm label-red">In Active</span>
                            @endif
                        </td>
                        <td>{{ date("d F, Y",strtotime($user->updated_at)) }}</td>
                        <td>{{ $user->name }}</td>
                        <td>@if($user->role == 1) Administrator @else User @endif </td>
                        <td><a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-user{{ $user->id }}" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-user{{$user->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                            <!--Modal edit user start-->
                              <div id="modal-edit-user{{ $user->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                <div class="modal-dialog modal-wide-width">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                      <h4 id="modal-login-label3" class="modal-title">Edit User</h4>
                                    </div>
                                    <div class="modal-body">
                                      <div class="form">
                               {{ Form::open(array('url' => 'admin/users/updateuser','name' => 'edituser','id' => 'edituser', 'class'=> 'form-horizontal','method' => 'post')) }}
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Status</label>
                                            <div class="col-md-9">
                                              <div data-on="success" data-off="primary" class="make-switch">
                              {{ Form::hidden('userid',$user->id) }}
                             {{Form::checkbox('active', $user->active , $user->active ,array('id'=>'active','class' => 'form-control'))}}

                                              </div>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Name <span class='require'>*</span></label>
                                            <div class="col-md-9">
                                {{Form::text('name', $user->name ,array('id'=>'name','class' => 'validate[required] form-control'))}}
       
                                                                 </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Company <span class='require'>*</span></label>
                                            <div class="col-md-9">
                         {{Form::textarea('company', $user->company ,array('id'=>'company','class' => 'validate[required] form-control','rows' => '2','placeholder' => "eg. Yee Lee Corporation Bhd"))}}

                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Role <span class='require'>*</span></label>
                                            <div class="col-md-3">
               {{ Form::select('role', array('1' => 'Administrator','2' => 'User'), $user->role ,array('id' => 'role','class' => 'form-control')) }}

                                            </div>
                                          </div>
                                         <div class="form-group">
                              	<label class="col-md-3 control-label">Email Address <span class='require'>*</span></label>
								<div class="col-md-6">
                                	<div class="input-group"><span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                 {{Form::text('email', $user->username ,array('id'=>'email','class' => 'validate[required,custom[email]] form-control', 'readonly' => 'readonly'))}}
</div>
                                    <span class="help-block">Email address is your login ID.</span>
                                </div>
                              </div>
                                          <div class="form-group">
                                              <label for="password" class="control-label col-md-3">Password <span class='require'>*</span></label>
            
                                              <div class="col-md-6">
                                                <div class="input-icon"><i class="fa fa-key"></i> 
    {{Form::password('password', array('id'=>"password$user->id", 'class' => 'validate[required,minSize[6],maxSize[12]] form-control'))}}<span class="text-10px">(Password length should be between 6-12 characters)</span>                                    </div>

                                   			</div>
                                              </div>
                                       
                                                    
                                         <div class="form-group">
                                            <label for="password" class="control-label col-md-3">Confirm Password <span class='require'>*</span></label>
                                            <div class="col-md-6">
                                                <div class="input-icon"><i class="fa fa-key"></i> 
                                  {{Form::password("confirmpassword$user->id", array('id'=>'confirmpassword','class' => "validate[required,equals[password$user->id]] form-control"))}}<span class="text-10px">(Password length should be between 6-12 characters)</span>                                    </div>
                               			</div>
                                             </div>
                                          </div>
                                 <div class="form-group">
                                <?php  
								 $data = unserialize($user->accesslist);
								 if(is_array($data))
								 {
								    if(in_array('all',$data))
									{
										$checked1 = "checked='checked'";
									}
									else
									{
										 $checked1 = "";
									}
									
									 if(in_array('index',$data))
									{
										$checked2 = "checked='checked'";
									}
									else
									{
										 $checked2 = "";
									}
									
									 if(in_array('career',$data))
									{
										$checked3 = "checked='checked'";
									}
									else
									{
										 $checked3 = "";
									}
									
									 if(in_array('contact',$data))
									{
										$checked4 = "checked='checked'";
									}
									else
									{
										 $checked4 = "";
									}
									
									 if(in_array('announcements',$data))
									{
										$checked5 = "checked='checked'";
									}
									else
									{
										 $checked5 = "";
									}
									
									 if(in_array('annualreports',$data))
									{
										$checked6 = "checked='checked'";
									}
									else
									{
										 $checked6 = "";
									}
									
									 if(in_array('pressreleases',$data))
									{
										$checked7 = "checked='checked'";
									}
									else
									{
										 $checked7 = "";
									}
									
									 if(in_array('pkcanpac',$data))
									{
										$checked8 = "checked='checked'";
									}
									else
									{
										 $checked8 = "";
									}
									
									 if(in_array('pksoutheast',$data))
									{
										$checked9 = "checked='checked'";
									}
									else
									{
										 $checked9 = "";
									}
									
									 if(in_array('pmoil',$data))
									{
										$checked10 = "checked='checked'";
									}
									else
									{
										 $checked10 = "";
									}
									
									if(in_array('pmmill',$data))
									{
										$checked11 = "checked='checked'";
									}
									else
									{
										 $checked11 = "";
									}
									
									if(in_array('trading',$data))
									{
										$checked12 = "checked='checked'";
									}
									else
									{
										 $checked12 = "";
									}
									
									if(in_array('sementra',$data))
									{
										$checked13 = "checked='checked'";
									}
									else
									{
										 $checked13 = "";
									}
									
									
									if(in_array('desa',$data))
									{
										$checked14 = "checked='checked'";
									}
									else
									{
										 $checked14 = "";
									}
									
									
									if(in_array('sabah',$data))
									{
										$checked15 = "checked='checked'";
									}
									else
									{
										 $checked15 = "";
									}
								 }
								 ?>
                              	<label  class="control-label col-md-3">Permission &amp; Edit Pages</label>
                              								<div class="col-md-9 margin-top-5px">
                                 	<div class="text-blue border-bottom">You can select multiple pages from the below section.</div>
                                    <div class="checkbox-list margin-top-10px">
                                    	<label class="checkbox-inline"><input name="access[]" id="inlineCheckbox1" type="checkbox" value="all" {{ $checked1 }}  />&nbsp; All Pages</label>
                                        <label class="checkbox-inline"><input name="access[]" id="inlineCheckbox2" type="checkbox" value="index" {{ $checked2 }}/>&nbsp; Index</label>
                                    	<label class="checkbox-inline"><input name="access[]" id="inlineCheckbox3" type="checkbox" value="career" {{ $checked3 }}/>&nbsp; Careers</label>
                                        <label class="checkbox-inline"><input name="access[]" id="inlineCheckbox3" type="checkbox" value="contact" {{ $checked4 }}/>&nbsp; Contact Us</label>
                            
                                    </div>
                                    <div class="margin-top-10px"><strong>Investor Relations:</strong></div>
                                    <div class="checkbox-list">
                                    	<label class="checkbox-inline"><input name="access[]" id="inlineCheckbox1" type="checkbox" value="announcements" {{ $checked5 }}/>&nbsp; Announcements</label>
                                        <label class="checkbox-inline"><input name="access[]" id="inlineCheckbox2" type="checkbox" value="annualreports" {{ $checked6 }}/>&nbsp; Annual Reports</label>
                                    	<label class="checkbox-inline"><input name="access[]" id="inlineCheckbox3" type="checkbox" value="pressreleases" {{ $checked7 }}/>&nbsp; Press Releases</label> 
                                    </div>
                                    
                                    <div class="margin-top-10px"><strong>Manufacturing:</strong></div>
                                    <div class="checkbox-list">
                                    	<label class="checkbox-inline"><input name="access[]" id="inlineCheckbox1" type="checkbox" value="pkcanpac" {{ $checked8 }}/>&nbsp; Canpac Sdn Bhd</label>
                                        <label class="checkbox-inline"><input name="access[]" id="inlineCheckbox2" type="checkbox" value="pksoutheast" {{ $checked9 }}/>&nbsp; South East Asia Paper Products Sdn Bhd</label>
                                    </div>
                                    <div class="checkbox-list">
                                    	<label class="checkbox-inline"><input name="access[]" id="inlineCheckbox1" type="checkbox" value="pmoil" {{ $checked10 }}/>&nbsp; Yee Lee Edible Oils Sdn Bhd</label>
                                        <label class="checkbox-inline"><input name="access[]" id="inlineCheckbox2" type="checkbox" value="pmmill" {{ $checked11 }}/>&nbsp; Yee Lee Palm Oil Industries Sdn Bhd</label>
                                    </div>
                                    <div class="margin-top-10px"><strong>Trading:</strong></div>
                                    <div class="checkbox-list">
                                    	<label class="checkbox-inline"><input name="access[]" id="inlineCheckbox1" type="checkbox" value="trading" {{ $checked12 }}/>&nbsp; Yee Lee Trading Co. Sdn Bhd </label>

                                    </div>
                                    <div class="margin-top-10px"><strong>Plantation:</strong></div>
                                    <div class="checkbox-list">
                                    	<label class="checkbox-inline"><input name="access[]" id="inlineCheckbox1" type="checkbox" value="sementra" {{ $checked13 }}/>&nbsp; Sementra Plantations Sdn Bhd</label>
                                        <label class="checkbox-inline"><input name="access[]" id="inlineCheckbox2" type="checkbox" value="desa" {{ $checked14 }}/>&nbsp; Desa Tea Sdn Bhd</label>
                                    </div>
                                    <div class="margin-top-10px"><strong>Hospitality:</strong></div>
                                    <div class="checkbox-list">
                                    	<label class="checkbox-inline"><input name="access[]" id="inlineCheckbox1" type="checkbox" value="sabah" {{ $checked15 }}/>&nbsp; Sabah Tea Resort Sdn Bhd</label>
                                    </div>
                                    
                                    
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
                              <!--END MODAL Add New-->
                            <!--Modal delete start-->
                            <div id="modal-delete-user{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                    <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this feedback? </h4>
                                  </div>
                                  <div class="modal-body">
                                    <p><strong>#{{$user->id}}:</strong> {{$user->name}}</p>
                                    <div class="form-actions">
                                      <div class="col-md-offset-4 col-md-8"> {{ Form::open(array('url' => 'admin/deletesingleuser', 'method' => 'post', 'name' => 'deletepressrelease'.$user->id, 'id' => 'deletepressrelease'.$user->id, 'class' => 'form-horizontal','files' => true)) }}{{ Form::hidden('userid',$user->id) }} <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> 
                                      {{ Form::close() }} </div>
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
                        <td colspan="7"></td>
                      </tr>
                    </tfoot>
                  </table>
               
                  <div class="tool-footer text-right">
                    <p class="pull-left">Showing {{ $users->getFrom() }} to {{ $users->getTo() }} of {{ $users->getTotal() }} entries</p>
                     {{ $users->appends(Input::except('page'))->links() }}
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <!-- end portlet -->
            </div>
          </div>
@stop
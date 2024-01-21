@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h2>Enquiry Email <i class="fa fa-angle-right"></i> Setup</h2>
        <div class="clearfix"></div>
        {{ Session::get('message') }}
		<?php if (isset($emails[0])){ ?>
        <div class="pull-left"> Last updated: <span class="text-blue">{{ date("d F Y",strtotime($emails[0]->updated_at->toDateTimeString())) }} @ {{ date("g:i A",strtotime($emails[0]->updated_at->toDateTimeString())) }}</span> </div>
       <?php } else{?>
	   <div class="pull-left"> Last updated: <span class="text-blue">No Reords</span> </div>
       
	   <?php }?>
	   
	   <div class="clearfix"></div>
        <p></p>

        <div class="portlet">
            <div class="portlet-header">
                <div class="caption">Enquiry Email Setup</div>
                <br/>
                <p class="margin-top-10px"></p>

                <a href="#" data-target="#modal-add-email" data-toggle="modal" class="btn btn-success">Add New &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">Delete</button>
                    <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                    <ul role="menu" class="dropdown-menu">
                        <li><a href="#" data-target="#modal-delete-selectednot" data-toggle="modal" class="deleteid" rel="{{url();}}/admin/page/deletemultipleenquiryemail" rev="modal-delete-selected">Delete selected item(s)</a></li>
                        <li class="divider"></li>
                        <li><a href="#" data-target="#modal-delete-all" data-toggle="modal">Delete all</a></li>
                    </ul>
                </div>
                 
                <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                <!--Modal Add New start-->
                <div id="modal-add-email" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog modal-wide-width">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                <h4 id="modal-login-label3" class="modal-title">Add New Email</h4>
                            </div>
                            <div class="modal-body">
                                <div class="form">
                                    {{ Form::open(array('url' => 'admin/enquiry_email/addemail', 'name' => 'add_enq_email', 'id' => 'add_enq_email', 'method' => 'post', 'class' => 'form-horizontal','files' => true)) }}      
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Status</label>
                                        <div class="col-md-9">
                                            <div data-on="success" data-off="primary" class="make-switch">
                                                {{Form::checkbox('active', 1,1,array('id'=>'active','class' => 'form-control'))}}  
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Name <span class='require'>*</span></label>
                                        <div class="col-md-6">
                                            {{Form::text('name','',array('id'=>'name','class' => 'validate[required] form-control'))}}   
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Email <span class='require'>*</span></label>
                                        <div class="col-md-6">
                                            {{Form::text('email','',array('id'=>'email','class' => 'validate[required,custom[email]] form-control',"placeholder"=>"eg. name@kym.com.my"))}}   
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Enquiry Related to <span class='require'>*</span></label>
                                        <div class="col-md-4">
                                            {{Form::select('cat_id', $categories_arr,'',['id'=>'cat_id','class'=>"validate[required] form-control"])}}
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Sub Category</label>
                                        <div class="col-md-4">
                                            {{Form::select('subcat_id', $subcategories_arr,'',['id'=>'subcat_id','class'=>"form-control"])}}
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
                <div class="table-responsive mtl">
                    <table class="table table-hover table-striped">
                        <thead>
                            <tr>
                                <th width="1%"><input type="checkbox"/></th>
                                <th>#</th>
                                <th>Status</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Enquiry Related to</th>
                                <th>Sub Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = $emails->getFrom(); ?>
                            @foreach ($emails as $k => $email)
                            <tr>
                                <td><input class="chkNumber" type="checkbox" value="{{$email->id}}" /></td>
                                <td>{{ $i }}</td>
                                <td>
                                    @if($email->active == 1)
                                    <span class="label label-sm label-success">Active</span>
                                    @else
                                    <span class="label label-sm label-red">In Active</span>
                                    @endif
                                </td>
                                <td>{{$email->name}}</td>
                                <td>{{$email->email}}</td>
								 
                                <td>{{$email->title}}</td>
								 
                                <td> </td>
                                <td><a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-email{{ $email->id }}" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-{{ $email->id }}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                    <!--Modal edit email start-->
                                    <div id="modal-edit-email{{ $email->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                        <div class="modal-dialog modal-wide-width">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                    <h4 id="modal-login-label3" class="modal-title">Edit Email</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="form">
                                                        {{ Form::open(array('url' => 'admin/enquiry_email/editemail', 'name' => "editemail$email->id", 'id' => "editemail$email->id" , 'method' => 'post', 'class' => 'form-horizontal','files' => true)) }} 
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Status</label>
                                                            <div class="col-md-9">
                                                                <div data-on="success" data-off="primary" class="make-switch" >
                                                                    {{Form::hidden('active',0)}}
                                                                    {{ Form::checkbox('active',1,$email->active,array('id' => 'active','class' => 'check-switch')) }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Name <span class='require'>*</span></label>
                                                            <div class="col-md-6">
                                                                {{ Form::text('name',$email->name,array('id' => 'name','class' => 'form-control')) }}	
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Email <span class='require'>*</span></label>
                                                            <div class="col-md-6">
                                                                {{ Form::text('email',$email->email,array('id' => 'email','class' => 'form-control')) }}
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Enquiry Related to <span class='require'>*</span></label>
                                                            <div class="col-md-4">
                                                                {{Form::select('cat_id', $categories_arr,$email->cat_id,['id'=>$email->id,'class'=>"validate[required] form-control cat_id"])}}
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Sub Category</label>
                                                            <div class="col-md-4">
                                                                <?php
                                                                $s_categories_arr = array("" => "--Please Select--");
                                                                if (isset($email->category->scat)) {
                                                                    foreach ($email->category->scat as $k => $v) {
                                                                        $s_categories_arr[$v->id] = $v->title;
                                                                    }
                                                                }
                                                                ?>
                                                                {{Form::select('subcat_id',$s_categories_arr,$email->subcat_id,['id'=>'subcat_id'.$email->id,'class'=>"validate[required] form-control"])}}
                                                            </div>
                                                        </div>
                                                        {{ Form::hidden('emailid',$email->id,array('id' => 'emailid')) }}   
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
                                    <!--END MODAL edit email-->
                                    <!--Modal delete start-->
                                    <div id="modal-delete-{{ $email->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                    <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this email? </h4>
                                                </div>
                                                <div class="modal-body">
                                                    <p><strong>#{{ $email->id }}:</strong> {{ $email->name }}</p>
                                                    <div class="form-actions">
                                                        <div class="col-md-offset-4 col-md-8">
                                                            {{ Form::open(array('url' => 'admin/enquiry_email/deleteemail', 'method' => 'post', 'name' => 'deleteemail'.$email->id, 'id' => 'deleteemail'.$email->id, 'class' => 'form-horizontal validate[required]','files' => true)) }}{{ Form::hidden('emailid',$email->id) }} <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> 
                                                            {{ Form::close() }}  
                                                        </div>
                                                    </div>    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- modal delete end -->
                                </td>
                            </tr>
                            <?php $i++; ?>   
                            @endforeach 
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="8"></td>
                            </tr>
                        </tfoot>
                    </table>
                </div><!-- end table responsive -->
                <div class="tool-footer text-right">
                    <p class="pull-left">Showing {{ $emails->getFrom() }} to {{ $emails->getTo() }} of {{ $emails->getTotal() }} entries</p>
                    {{ $emails->links() }}
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- end portlet -->
    </div>

</div>
@stop
@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h2>Enquiry Category <i class="fa fa-angle-right"></i> Setup</h2>
        <div class="clearfix"></div>
        {{ Session::get('message') }}
		<?php if (isset($categories[0])){ ?>
        <div class="pull-left"> Last updated: <span class="text-blue">{{ date("d F Y",strtotime($categories[0]->updated_at->toDateTimeString())) }} @ {{ date("g:i A",strtotime($categories[0]->updated_at->toDateTimeString())) }}</span> </div>
          <?php } ?>
		<div class="clearfix"></div>
        <p></p>

        <ul id="myTab" class="nav nav-tabs">
            <li class="active main-cat"><a href="#main-category" data-toggle="tab">Main Category Setup</a></li>
            <li class="sub-cat"><a href="#sub-category" data-toggle="tab">Sub Category Setup</a></li>
        </ul>

        <div id="myTabContent" class="tab-content">
            <div id="main-category" class="tab-pane fade in active">

                <div class="portlet">
                    <div class="portlet-header">
                        <div class="caption">Enquiry Main Category Setup</div>
                        <br/>
                        <p class="margin-top-10px"></p>

                        <a href="#" data-target="#modal-add-new" data-toggle="modal" class="btn btn-success">Add New &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">Delete</button>
                            <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                            <ul role="menu" class="dropdown-menu">
                                <li><a href="#" data-target="#modal-delete-selectednot" data-toggle="modal" class="deleteid" rel="{{url();}}/admin/page/deletemultipleenquirycategory" rev="modal-delete-selected">Delete selected item(s)</a></li>
                                <li class="divider"></li>
                                <li><a href="#" data-target="#modal-delete-all" data-toggle="modal">Delete all</a></li>
                            </ul>
                        </div>
                         
                        <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                        <!--Modal Add New main category start-->
                        <div id="modal-add-new" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                            <div class="modal-dialog modal-wide-width">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                        <h4 id="modal-login-label3" class="modal-title">Add New Main Category</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form">
                                            {{ Form::open(array('url' => 'admin/enquiry_category/addcategory', 'name' => 'add_enq_category', 'id' => 'add_enq_category', 'method' => 'post', 'class' => 'form-horizontal','files' => true)) }}
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Status</label>
                                                <div class="col-md-9">
                                                    <div data-on="success" data-off="primary" class="make-switch">
                                                        {{Form::checkbox('active', 1,1,array('id'=>'active','class' => 'form-control'))}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Enquiry Related to <br/> (Main Category) <span class='require'>*</span></label>
                                                <div class="col-md-6">
                                                    {{Form::text('title','',array('id'=>'title','class' => 'validate[required] form-control','placeholder'=>'eg. Sales'))}}
                                                    <div class="text-blue text-12px margin-top-5px">This is to set up the main category dropdown list in the enquiry/feedback form.</div>
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
                        <!--END MODAL Add New main categroy-->
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
                                        <th width="1%"><input class="wholecheck" type="checkbox"/></th>
                                        <th>#</th>
                                        <th>Status</th>
                                        <th>Enquiry Related to (Main Category)</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $cat_count = $categories->getFrom(); ?>
                                    @foreach ($categories as $k => $category)
                                    <tr>
                                        <td><input class="chkNumber" type="checkbox" value="{{$category->id}}" /></td>
                                        <td>{{ $cat_count }}</td>
                                        <td>
                                            @if($category->active == 1)
                                            <span class="label label-sm label-success">Active</span>
                                            @else
                                            <span class="label label-sm label-red">In Active</span>
                                            @endif
                                        </td>
                                        <td>{{$category->title}}</td>
                                        <td><a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-category{{ $category->id }}" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-{{ $category->id }}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                            <!--Modal edit main category start-->
                                            <div id="modal-edit-category{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                                <div class="modal-dialog modal-wide-width">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                            <h4 id="modal-login-label3" class="modal-title">Edit Main Category</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form">
                                                                {{ Form::open(array('url' => 'admin/enquiry_category/editcategory', 'name' => "editcategory$category->id", 'id' => "editcategory$category->id" , 'method' => 'post', 'class' => 'form-horizontal','files' => true)) }}
                                                                <div class="form-group">
                                                                    <label class="col-md-3 control-label">Status</label>
                                                                    <div class="col-md-9">
                                                                        <div data-on="success" data-off="primary" class="make-switch" >
                                                                            {{Form::hidden('active',0)}}
                                                                            {{ Form::checkbox('active',1,$category->active,array('id' => 'active','class' => 'check-switch')) }}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-3 control-label">Enquiry Related to <br/> (Main Category) <span class='require'>*</span></label>
                                                                    <div class="col-md-6">
                                                                        {{ Form::text('title',$category->title,array('id' => 'title','class' => 'form-control')) }}
                                                                        <div class="text-blue text-12px margin-top-5px">This is to set up the main category dropdown list in the enquiry/feedback form.</div>
                                                                    </div>
                                                                </div>
                                                                {{ Form::hidden('categoryid',$category->id,array('id' => 'categoryid')) }}
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
                                            <!--END MODAL Edit main category-->
                                            <!--Modal delete start-->
                                            <div id="modal-delete-{{ $category->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                            <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this category? </h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p><strong>#{{ $category->id }}:</strong> {{ $category->title }}</p>
                                                            <div class="form-actions">
                                                                <div class="col-md-offset-4 col-md-8">
                                                                    {{ Form::open(array('url' => 'admin/enquiry_category/deletecategory', 'method' => 'post', 'name' => 'deletecategory'.$category->id, 'id' => 'deletecategory'.$category->id, 'class' => 'form-horizontal validate[required]','files' => true)) }}{{ Form::hidden('categoryid',$category->id) }} <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a>
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
                                       <?php $cat_count++; ?>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="5"></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div><!-- end table responsive -->
                        <div class="tool-footer text-right">
                            <p class="pull-left">Showing {{ $categories->getFrom() }} to {{ $categories->getTo() }} of {{ $categories->getTotal() }} entries</p>
                            {{ $categories->links() }}
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div><!-- end portlet -->

            </div><!-- end tab main category setup -->

            <div id="sub-category" class="tab-pane fade">

                <div class="portlet">
                    <div class="portlet-header">
                        <div class="caption">Enquiry Sub Category Setup</div>
                        <br/>
                        <p class="margin-top-10px"></p>

                        <a href="#" data-target="#modal-add-new-sub" data-toggle="modal" class="btn btn-success">Add New &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">Delete</button>
                            <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                             <ul role="menu" class="dropdown-menu">
                                <li><a href="#" data-target="#modal-delete-selectednot" data-toggle="modal" class="deletesubcatid" rel="{{url();}}/admin/page/deletemultipleenquirysubcategory" rev="modal-delete-selected-sub">Delete selected item(s)</a></li>
                                <li class="divider"></li>
                                <li><a href="#" data-target="#modal-delete-all-sub" data-toggle="modal">Delete all</a></li>
                            </ul>
                        </div>
                         
                        <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                        <!--Modal Add New sub category start-->
                        <div id="modal-add-new-sub" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                            <div class="modal-dialog modal-wide-width">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                        <h4 id="modal-login-label3" class="modal-title">Add New Sub Category</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="form">
                                            {{ Form::open(array('url' => 'admin/enquiry_category/addsubcategory', 'name' => 'add_enq_subcategory', 'id' => 'add_enq_subcategory', 'method' => 'post', 'class' => 'form-horizontal','files' => true)) }}
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Status</label>
                                                <div class="col-md-9">
                                                    <div data-on="success" data-off="primary" class="make-switch">
                                                        {{Form::checkbox('active', 1,1,array('id'=>'active','class' => 'form-control'))}}
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Enquiry Related to <br/> (Main Category) <span class='require'>*</span></label>
                                                <div class="col-md-6">
                                                    {{Form::select('parent_id', $categories_arr,'',['id'=>'parent_id','class'=>"validate[required] form-control"])}}
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-3 control-label">Sub Category <span class='require'>*</span></label>
                                                <div class="col-md-6">
                                                    {{Form::text('title','',array('id'=>'title','class' => 'validate[required] form-control','placeholder'=>'eg. Sales'))}}
                                                    <div class="text-blue text-12px margin-top-5px">This is to set up the sub category dropdown list in the enquiry/feedback form. If there is no sub category, please fill in "None".</div>
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
                        <div id="modal-delete-selected-sub" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
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
                        <div id="modal-delete-all-sub" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
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
                                @if($sub_cntarray1 != 0 )
                                {{ Form::open(array('url' => Request::url(),'class'=> 'form-horizontal','method' => 'get')) }}
                                {{ Form::select('sub_noperpage1', $sub_cntarray1, Input::get('sub_noperpage1'),array('class' => 'form-control','onchange' => 'this.form.submit();')) }}
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
                                        <th>Sub Category</th>
                                        <th>Enquiry Related to (Main Category)</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $subcat_count = $sub_categories->getFrom(); ?>
                                    @foreach ($sub_categories as $ks => $sub_category)
                                    <?php
//                                    print "<pre>";
//                                    print_r($sub_category);
//                                    die("here");
                                    ?>
                                    <tr>
                                        <td><input class="chkSubNumber" type="checkbox" value="{{$sub_category->id}}" /></td>
                                        <td>{{ $subcat_count }}</td>
                                        <td>
                                            @if($sub_category->active == 1)
                                            <span class="label label-sm label-success">Active</span>
                                            @else
                                            <span class="label label-sm label-red">In Active</span>
                                            @endif
                                        </td>
                                        <td>{{$sub_category->title}}</td>
                                        <td>@if($sub_category->parent_category()->count() > 0) {{ $sub_category->parent_category->title}} @else Parent not exits @endif</td>
                                        <td><a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-category-sub{{ $sub_category->id }}" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-sub-{{ $sub_category->id }}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                            <!--Modal edit sub category start-->
                                            <div id="modal-edit-category-sub{{ $sub_category->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                                <div class="modal-dialog modal-wide-width">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                            <h4 id="modal-login-label3" class="modal-title">Edit Sub Category</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form">
                                                                {{ Form::open(array('url' => 'admin/enquiry_category/editsubcategory', 'name' => "editsubcategory$sub_category->id", 'id' => "editsubcategory$sub_category->id" , 'method' => 'post', 'class' => 'form-horizontal edit_sub_category','files' => true)) }}
                                                                <div class="form-group">
                                                                    <label class="col-md-3 control-label">Status</label>
                                                                    <div class="col-md-9">
                                                                        <div data-on="success" data-off="primary" class="make-switch" >
                                                                            {{Form::hidden('active',0)}}
                                                                            {{ Form::checkbox('active',1,$sub_category->active,array('id' => 'active','class' => 'check-switch')) }}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-3 control-label">Enquiry Related to <br/> (Main Category)<span class='require'>*</span></label>
                                                                    <div class="col-md-6">
                                                                         {{Form::select('parent_id', $categories_arr, (($sub_category->parent_category()->count() > 0)? $sub_category->parent_category->id:0),['id'=>'parent_id','class'=>"validate[required] form-control"])}}
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="col-md-3 control-label">Sub Category <span class='require'>*</span></label>
                                                                    <div class="col-md-6">
                                                                         {{ Form::text('title',$sub_category->title,array('id' => 'title','class' => 'validate[required] form-control')) }}
                                                                        <div class="text-blue text-12px margin-top-5px">This is to set up the sub category dropdown list in the enquiry/feedback form. If there is no sub category, please fill in "None".</div>
                                                                    </div>
                                                                </div>
                                                                {{ Form::hidden('subcategoryid',$sub_category->id,array('id' => 'subcategoryid')) }}
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
                                            <!--END MODAL Edit category-->
                                            <!--Modal delete start-->
                                            <div id="modal-delete-sub-{{ $sub_category->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                            <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this category? </h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p><strong>#{{ $sub_category->id }}:</strong> {{ $sub_category->title }}</p>
                                                            <div class="form-actions">
                                                                <div class="col-md-offset-4 col-md-8">
                                                                    {{ Form::open(array('url' => 'admin/enquiry_category/deletesubcategory', 'method' => 'post', 'name' => 'deletesubcategory'.$sub_category->id, 'id' => 'deletesubcategory'.$sub_category->id, 'class' => 'form-horizontal validate[required]','files' => true)) }}{{ Form::hidden('subcategoryid',$sub_category->id) }} <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a>
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
                                    <?php $subcat_count++;  ?>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="6"></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div><!-- end table responsive -->
                        <div class="tool-footer text-right">
                            <p class="pull-left">Showing {{ $sub_categories->getFrom() }} to {{ $sub_categories->getTo() }} of {{ $sub_categories->getTotal() }} entries</p>
                            {{ $sub_categories->links() }}
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div><!-- end portlet -->

            </div><!-- end tab sub category setup -->

        </div><!-- end tab content -->
    </div>
</div>
@stop
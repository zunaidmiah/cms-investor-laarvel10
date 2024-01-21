@extends('layouts.admin')
@section('content')
           <div class="row">
            <div class="col-lg-12">
              <h2>Online Job Applicants <i class="fa fa-angle-right"></i> Listing</h2>
              <div class="clearfix"></div>
              <div class="pull-left"> Last updated: <span class="text-blue"> {{ date("d F Y",strtotime($page[0]->updated_at)) }} @ {{ date("g:i A",strtotime($page[0]->updated_at)) }}
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
                {{ Form::textarea('page_title','',array("id" => "textarea-page-title","class" => "hideThisField")) }}
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
                      <div class="grid_8">
                        <header class="entry-header clearfix">
                          <div class="format-icon">
                            <div class="format-icon-inner"> <i class="icon-group"></i> </div>
                          </div>
                          <div class="entry-header-inner">
                              <div contenteditable="true" id="left-block1-title">
                          {{ $page[0]->left_block1_title }}
                            </div>
               {{ Form::textarea('left_block1_title','',array("id" => "textarea-left-block1-title","class" => "hideThisField")) }}
                          </div>
                        </header>
                        <div class="line"></div>
                        <div contenteditable="true" id="left-block1-content">
                  {{ $page[0]->left_block1_content }}
                        </div>
                {{ Form::textarea('left_block1_content','',array("id" => "textarea-left-block1-content","class" => "hideThisField")) }}
                        <div class="clearfix"></div>
                        <div class="hr hr__double">
                          <div class="hr-first"></div>
                          <div class="hr-second"></div>
                        </div>
                        <!-- Vacancies Listing start -->
                      @if ($page[0]->left_block2_title != '')
                        <header class="entry-header clearfix">
                          <div class="format-icon">
                            <div class="format-icon-inner"> <i class="icon-file-alt"></i> </div>
                          </div>
                          <div class="entry-header-inner">
                              <div contenteditable="true" id="left-block2-title">
                         {{ $page[0]->left_block2_title }} 
                            </div>
                          </div>
                {{ Form::textarea('left_block2_title','',array("id" => "textarea-left-block2-title","class" => "hideThisField")) }}
                        </header>
                      @endif
                        <div class="line"></div>
                      </div>
<div class="grid_4">
                        <!-- Extra Contact Box -->
                        <div class="cta">
                            <div contenteditable="true" id="right-block1-title">
                            {{ $page[0]->right_block1_title }} 
                          </div>
                {{ Form::textarea('right_block1_title','',array("id" => "textarea-right-block1-title","class" => "hideThisField")) }}
                          <div contenteditable="true" id="right-block1-content">
                            {{ $page[0]->right_block1_content }} 
                          </div>
                {{ Form::textarea('right_block1_content','',array("id" => "textarea-right-block1-content","class" => "hideThisField")) }}
                          <div class="bg-black">
                            <div class="center">
                                <div contenteditable="true" id="right-block2-content">
                                {{ $page[0]->right_block2_content }}     
                                </div>
                {{ Form::textarea('right_block2_content','',array("id" => "textarea-right-block2-content","class" => "hideThisField")) }}
                              <div class="clearfix"></div>
                              <div class="hr"></div>
                            </div>
                          </div>
                        </div>
                        <!-- Extra Contact Box / End -->
                      </div>
</div>
                  </div>
                </div>
              
              	<!-- save button start -->
                <div class="form-actions none-bg">  <a href="javascript:void(0);" class="btn btn-red" onclick="Addsavepage('millsave','company/careers');">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp; <a href="#publish online" class="btn btn-blue">Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></a>&nbsp; <a href="#" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                <!-- save button end -->
                
              </div>
              {{ Form::close() }}
              
             <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Online Job Applicants Listing</div>
                  <br/>
                  <p class="margin-top-10px"></p>
                 
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary">Delete</button>
                    <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                    <ul role="menu" class="dropdown-menu">
                      <li><a href="#" data-target="#modal-delete-selected" data-toggle="modal"  class="deleteid" rel="{{url();}}/admin/page/deletemultipleapplicants" rev="modal-delete-selected">Delete selected item(s)</a></li>
                      <li class="divider"></li>
                      <li><a href="#" data-target="#modal-delete-all" data-toggle="modal">Delete all</a></li>
                    </ul>
                  </div>
                   
				  <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                 
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
                        <th width="1%"><input type="checkbox"/></th>
                        <th>#</th>
                        <th>Status</th>
                        <th>Date Applied</th>
                        <th>Applicant Name</th>
                        <th>Position Applied</th>
                        <th>Company</th>
                        <th>Job Location</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($applicants as $k => $applicant)
                        <tr>
                        <td><input type="checkbox" class="chkNumber" value="{{ $applicant->id}}"/></td>
                        <td>{{ $k+1 }}</td>
                        <td><span class="label label-sm label-success">Active</span></td>
                        <td>{{ $applicant->created_at }}</td>
                        <td>{{ $applicant->name }}</td>
                        <td>{{ $applicant->job_title }}</td>
                        <td>{{ $applicant->company }}</td>
                        <td>{{ $applicant->job_location }}</td>
                        <td><a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-view-details{{ $applicant->id }}" data-toggle="modal" title="View Details"><span class="label label-sm label-yellow"><i class="fa fa-search"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-deleteApp{{ $applicant->id }}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                            <!--Modal view details start-->
                            <div id="modal-view-details{{ $applicant->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                              <div class="modal-dialog modal-wide-width">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                    <h4 id="modal-login-label2" class="modal-title">View Applicant Details</h4>
                                  </div>
                                  <div class="modal-body">
    								  <form action="#" class="form-horizontal">
                                                    <div class="form-body pal">
                                                    	<h3 class="block-heading">Personal</h3>

                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                	<label for="inputFirstName" class="col-md-4 control-label">Name:</label>

                                                                    <div class="col-md-8"><p class="form-control-static">{{ $applicant->name }}</p></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                	<label for="inputLastName" class="col-md-4 control-label">Gender:</label>

                                                                    <div class="col-md-8"><p class="form-control-static">@if( $applicant->gender == 'm' ) Male @else Female @endif</p></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                	<label for="inputBirthday" class="col-md-4 control-label">Date of Birth:</label>

                                                                    <div class="col-md-8"><p class="form-control-static">{{ $applicant->dob }}</p></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                	<label for="inputEmail" class="col-md-4 control-label">Email:</label>

                                                                    <div class="col-md-8"><p class="form-control-static">{{ $applicant->email }}</p></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                	<label for="inputPhone" class="col-md-4 control-label">Mobile Number:</label>

                                                                    <div class="col-md-8"><p class="form-control-static">{{ $applicant->contactno }}</p></div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        
                                                        
                                                        <!-- education background start -->
                                                        <h3 class="block-heading">Education Background</h3>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                	<label for="inputPostCode" class="col-md-4 control-label">Education Level:</label>

                                                                    <div class="col-md-8"><p class="form-control-static">{{ $applicant->education }}</p></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end education background-->
                                                        <!-- CV start -->
                                                        <h3 class="block-heading">Attached CV</h3>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                	<label for="inputPostCode" class="col-md-4 control-label">Applicant CV:</label>

                                                                    <div class="col-md-8">
                                                                    	<p class="form-control-static"><a href="{{ url().$applicant->resume->url() }}" target="_blank">use the uploaded cv file name</a></p></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end CV-->
                                                    </div>
                                                    <div class="form-actions">
                                                        <div class="col-md-offset-5 col-md-8"> 
                                                        	<a href="#" data-dismiss="modal" class="btn btn-green">Close &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                                      </div>
                                                </form>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <!--END MODAL view details-->
                            <!--Modal delete start-->
                            <div id="modal-deleteApp{{ $applicant->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                    <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this applicant? </h4>
                                  </div>
                                  <div class="modal-body">
                                    <p><strong>#{{ $applicant->id }}:</strong> Applied: {{ $applicant->job_title }} <br/>
                                    						Applicant Name: {{ $applicant->name }}                                    </p>

                                    <div class="form-actions">
                                      <div class="col-md-offset-4 col-md-8"> {{ Form::open(array('url' => 'admin/applicants/deleteapplication', 'method' => 'post', 'name' => 'deleteapplication'.$applicant->id, 'id' => 'deleteapplication'.$applicant->id, 'class' => 'form-horizontal','files' => true)) }}{{ Form::hidden('applicantid',$applicant->id) }} <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> 
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
                        <td colspan="9"></td>
                      </tr>
                    </tfoot>
                  </table>
                  <div class="tool-footer text-right">
                     <p class="pull-left">Showing {{ $applicants->getFrom() }} to {{ $applicants->getTo() }} of {{ $applicants->getTotal() }} entries</p>
                    {{ $applicants->appends(Input::except('page'))->links() }}
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <!-- end portlet -->
            </div>
          </div>
@stop
@extends('layouts.admin')
@section('content')
   <div class="row">
                <div class="col-lg-12">
                  <h2>Dashboard</h2>
                  <div class="clearfix"></div>
                </div>
                <!-- end col-lg-12 -->
                
                <div class="col-lg-8">
                   
                        
                        <!-- last 5 job applicants listing start -->
                       
                        <div class="panel panel-primary">
                                    <div class="panel-heading">Last 5 Job Applicants</div>
                                    <div class="panel-body">
                                        <table class="table table-border-dashed table-hover mbn">
                                            <thead>
                                            <tr>
                                                <th>Applicant Name</th>
                                                <th>Position Applied</th>
                                                <th>Date</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                           @foreach ($applicants as $k => $applicant) 
                                           <tr>
                                                <td><a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-view-details{{ $applicant->id }}" data-toggle="modal" title="View Details">{{ $applicant->name }}</a><div id="modal-view-details{{ $applicant->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
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
                                                                    	<p class="form-control-static"><a href="{{ url().$applicant->resume->url() }}" target="_blank">{{ $applicant->resume_file_name }}</a></p></div>
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
                          </div></td>
                                                <td>{{ $applicant->job_title }}</td>
                                                <td>{{ date("d F, Y",strtotime($applicant->created_at)) }}</td>
												
                                            </tr>
                                            @endforeach
                                         
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- End last 5 job applicants listing -->
                                
                                <!-- last 5 press releases listing start -->
                        		<div class="panel panel-primary">
                                    <div class="panel-heading">Last 5 Press Releases</div>
                                    <div class="panel-body">
                                        <table class="table table-border-dashed table-hover mbn">
                                            <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th width="20%">Date</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                           @foreach ($pressreleases as $k => $pressrelease)
                                            <tr>
                                                <td><a href="#" data-toggle="modal" data-placement="top" data-target="#modal-edit-pdf{{$pressrelease->id}}">{{ $pressrelease->title }}</a><!--Modal Edit PDF start-->
                            <div id="modal-edit-pdf{{$pressrelease->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                              <div class="modal-dialog modal-wide-width">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                    <h4 id="modal-login-label2" class="modal-title">Edit Press Release</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="form">
                                      {{ Form::open(array('url' => 'admin/investor/editpressrelease', 'method' => 'post', 'name' => 'editpressrelease'.$pressrelease->id, 'id' => 'editpressrelease'.$pressrelease->id, 'class' => 'form-horizontal','files' => true)) }}      
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Status</label>
                                          <div class="col-md-8">
                                            <div data-on="success" data-off="primary" class="make-switch">
                                       
                      {{Form::checkbox('active', $pressrelease->active, $pressrelease->active,array('id'=>'active','class' => 'form-control'))}}
                      
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Title <span class='require'>*</span></label>
                                          <div class="col-md-8">
{{Form::text('title', $pressrelease->title ,array('id'=>'title','class' => 'form-control'))}}
                                          </div>
                                        </div>  
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Date <span class='require'>*</span></label>
                                          <div class="col-md-5">
                                            <div class="input-group">
                                               {{Form::text('date',$pressrelease->date,array('id'=>'date','class' => 'datepicker-default form-control','data-date-format' => 'dd/mm/yyyy', 'placeholder' => 'dd/mm/yyyy'))}} 
                                              <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Citation <span class='require'>*</span></label>
                                            <div class="col-md-8">
                                             {{Form::text('citation', $pressrelease->citation ,array('id'=>'citation','class' => 'form-control'))}}
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-md-4 control-label">Content</label>
                                            <div class="col-md-8">
            
                                                <!-- begin post content -->
                                                <div class="entry-content">
                                                  
                                                     <div contenteditable="true" id="content{{ $pressrelease->id }}">
                                {{ $pressrelease->content }}     
                                </div>
                {{ Form::textarea('content',$pressrelease->content,array("id" => "textarea-content$pressrelease->id","class" => "hideThisField")) }}
                                                </div>
                                                <!-- end post content -->
                                              
                                            </div>
                                          </div>
										
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Upload Press Thumbnail <span class='require'>*</span></label>
                                          <div class="col-md-8">
                                            <div class="text-15px margin-top-10px"> 
                                            	 {{HTML::image($pressrelease->image->url('large'),'image',array( 'class' => 'img-responsive' ));}}
                                              <br/>
                                         {{Form::file('image', null,array('id'=>'imageInput'))}}
                                              <br/>
                                                <span class="help-block">(Image dimension: 600 x 624 pixels, JPEG/GIF/PNG only, Max. 2MB) </span> </div>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-4 control-label">Enable "Read More" Button </label>
                                            <div class="col-md-8">
                                              <span class="help-block">If you have additional information for this press release, please tick the "Yes" button and upload PDF document below.</span>
                                              <div class="text-15px margin-top-10px">
                                                 <div class="radio-list">
                                                    <label class="radio-inline"><input id="yes" type="radio" name="read_more" value="1" checked="checked"/>&nbsp; Yes</label>
                                                    <label class="radio-inline"><input id="no" type="radio" name="read_more" value="0" />&nbsp; No</label>
                                                 </div>
                                                 
                                              </div>
                                            </div>
                                          </div>
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Upload PDF </label>
                                          <div class="col-md-8"> 
                                          	<a href="../images/press_release/2014/red_eagle_award_2014.pdf" target="_blank">red_eagle_award_2014.pdf</a>
                                            <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-1-1" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                              <div class="text-15px margin-top-10px">
                                               {{Form::file('pdf', null,array('id'=>'pdf'))}}
                                              </div>
                                          </div>
                                        </div>
                                        {{ Form::hidden('pressreleaseid',$pressrelease->id) }}
                                        <div class="form-actions">
                                          <div class="col-md-offset-5 col-md-8"> <button type="submit" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                        </div>
                                      {{ Form::close()}}
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <!--END MODAL Edit PDF--></td>
                                                <td>{{ date("d F, Y",strtotime($pressrelease->created_at)) }}</td>
                                            </tr>
                                           @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!-- End last 5 press releases listing -->
                    </div>
        			<!-- End col-lg-8 -->
                    
                    
                    
                    
                    
                	<div class="col-lg-4">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="lifetime-sales">
                                            <div class="row">
                                                <div class="col-md-4 text-center">
                                                    <i class="fa fa-suitcase icon-4x"></i>                                                </div>
                                                <div class="col-md-8 mts">
                                                    <div class="ls-total">{{ $vaccancies_count }}</span></div>
                                                    <div class="ls-title">Jobs Posted</div>
                                                </div>
                                            </div>
                                        </div>
                                  </div>
                                </div>
                 	</div>
        			<!-- end # of job posted -->
                    
                 	<div class="col-lg-4">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="average-orders">
                                            <div class="row">
                                                <div class="col-md-4 text-center">
                                                    <i class="fa fa-users icon-4x"></i>                                                </div>
                                                <div class="col-md-8 mts">
                                                    <div class="ao-total">{{ $applicants_count }}</div>
                                                    <div class="ao-title">Job Applicants</div>
                                                </div>
                                            </div>
                                        </div>
                                  </div>
                                </div>
                	</div>
       				<!-- end # of job applicants --> 
                    
                    
                    <div class="col-lg-4">
                                <div class="panel">
                                    <div class="panel-body">
                                        <div class="average-orders">
                                            <div class="row">
                                                <div class="col-md-4 text-center">
                                                    <i class="fa fa-file icon-4x"></i>                                                </div>
                                                <div class="col-md-8 mts">
                                                    <div class="ao-total">{{ $pressreleases_count }}</div>
                                                    <div class="ao-title">Press Releases Posted</div>
                                                </div>
                                            </div>
                                        </div>
                                  </div>
                                </div>
                	</div>
               	<!-- end # of Event photos Posted--> 
                               
                            
                
                
              </div>
@stop
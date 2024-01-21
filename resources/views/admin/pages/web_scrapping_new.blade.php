@extends('layouts.default')

@section('content')
   <div class="row">
              		
                    <div class="col-lg-12">
                    	<h2>Web Scrapping <i class="fa fa-angle-right"></i> Add New URL</h2>
                        @if(Session::get('success') == 1)
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                            <i class="fa fa-check-circle"></i> <strong>Success!</strong> <p>The information has been saved/updated successfully.</p>
                        </div>
                        {{Session::forget('success')}}
                        @elseif(Session::get('success') == 2)
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                            <i class="fa fa-times-circle"></i> <strong>Error!</strong> <p>The information has not been saved/updated. Please correct the errors.</p>
                        </div>
                        {{Session::forget('success')}}
                        @endif
                        
                        <div class="portlet">
                            <div class="portlet-header">
                                                <div class="caption">Add New URL</div>
                                                <div class="tools">
                                                	<i class="fa fa-chevron-up"></i>
                                                </div>
                                            </div>                
                                            <div class="portlet-body pan">
                                                {{ Form::open(array('action' => 'adminController@web_scrapping_new_save', 'method'=>'post', 'class'=>'form-horizontal form-bordered form-row-stripped web_scrapping_new_form')) }}
                                                    <div class="form-body">
                                                        
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Status <span class='require'>*</span></label>
                                                            <div class="col-md-9">
                                                                <div data-on="success" data-off="primary" class="make-switch">{{ Form::checkbox('status', '1', true) }}</div>    
                                                            </div>  
                                                        </div>
                                                         
                                                        <div class="form-group has-error">
                                                        	<label class="col-md-3 control-label">Website URL <span class='require'>*</span></label>

                                            				<div class="col-md-6">
                                                                <div class="input-icon"><i class="fa fa-link"></i>{{ Form::text('url', null, array('placeholder'=>'URL', 'class'=>'form-control newUrl')); }}</div>   
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="popover popover-validator right">
                                                                    <div class="arrow"></div>
                                                                    <div class="popover-content"><p class="mbn">URL is empty!</p></div>
                                                                </div>
                                            				</div>
                                                            
                                        				</div>
                                                        
                                                         
                                                    </div>
                                                    <div class="form-actions pll prl">
                                                     
                                                        {{ Form::button(
                                                            'Save &nbsp;<i class="fa fa-floppy-o"></i>',
                                                            array(
                                                                'class'=>'btn btn-red',
                                                                'type'=>'submit')) 
                                                        }}
                                                        
                                                        &nbsp;
                                                    
                                                        <a href="{{ URL::route('web_scrapping_list', [], false) }}" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a>
                         
                                                    </div>
                                                {{ Form::close() }}
                                                
                                                
                                            </div>
                                                
                                            
                                        </div>
                                        
                                        
                                        
                                        

                        
                    </div>
                </div>
@stop
@extends('layouts.default')

@section('content')
   <div class="row">
              		
                    <div class="col-lg-12">
                    	<h2>Media News <i class="fa fa-angle-right"></i> Edit</h2>
                        
                        @if(Session::get('success') == 1)
                        <div class="alert alert-success alert-dismissable">
                            <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                            <i class="fa fa-check-circle"></i> <strong>Success!</strong> <p>{{Session::get('message')}}</p>
                        </div>
                        {{Session::forget('success')}}
                        @elseif(Session::get('success') == 2)
                        <div class="alert alert-danger alert-dismissable">
                            <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                            <i class="fa fa-times-circle"></i> <strong>Error!</strong> <p>{{Session::get('message')}}</p>
                        </div>
                        {{Session::forget('success')}}
                        @endif
                        {{ Form::open(array('id'=>'media_news_new', 'name'=>'media_news_new', 'action' => 'adminController@media_news_edit_save', 'method'=>'post', 'class'=>'form-horizontal form-bordered form-row-stripped', 'enctype' => 'multipart/form-data')) }}
                        <div class="portlet">
                            <div class="portlet-header">
                                                <div class="caption">News Info</div>
                                                <div class="tools">
                                                	<i class="fa fa-chevron-up"></i>
                                                </div>
                                            </div>                
                                            <div class="portlet-body pan">
                                                
                                                    <div class="form-body">
                                                        {{ Form::hidden('id', $mediaNews->id) }}
                                                        @if($mediaNews->status == 1) <?php $checked = true ?> @else <?php  $checked = false ?> @endif
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Status <span class='require'>*</span></label>
                                                            <div class="col-md-9">
                                                                <div data-on="success" data-off="primary" class="make-switch">{{ Form::checkbox('status', '1', $checked) }}</div>    
                                                            </div>  
                                                        </div>
                                                         
                                                        <div class="form-group">
                                                        	<label class="col-md-3 control-label">Date <span class='require'>*</span></label>

                                            				<div class="col-md-3">
                                                            	<div class="input-group">
                                                                    {{ Form::text('date', date('d/m/Y', $mediaNews->date), array('placeholder'=>'dd/mm/yyyy', 'class'=>'datepicker-default form-control', 'data-date-format'=>'dd/mm/yyyy')); }}
									<div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                                                </div>
                                                                
                                                                        </div>
                                                        </div>
                                                    </div>
                                            </div>
                        </div>
                                        
                                        <div class="portlet">
                                            <div class="portlet-header">
                                                <div class="caption">News Content</div><br/>
                                                <span class="text-blue text-12px">Please add in / edit the news content by clicking the text below.</span>
                                                <div class="tools">
                                                	<i class="fa fa-chevron-up"></i>
                                                    <i class="fa fa-refresh" data-hover="tooltip" data-placement="top" title="Update News"></i>
                                                </div>
                                            </div>
        
                                            <div class="portlet-body">
                                                
                                                
                                                    <div class="form-body">
 
                                                        <div class="form-group">
                                                        	<div class="col-md-12">
                                                                
                                           						<!-- note to programmer: 1. when click save &amp; publish, the layout &amp; css styling should be 100% the same as shown in front end. 2. please use the ckeditor that has the full features, has tool bars such as "source", "font-size", etc... 3. insert image function, please use the "browse file" and "upload" feature instead of asking user to specify the correct image url.-->
                                                                <div contenteditable="true">
                                                                    <h2 class="red-title">{{$mediaNews->title}}</h2>
                                                                </div>
                                                                <div contenteditable="true">
                                                                     <h5 class="headlineEditor">{{$mediaNews->headline}}</h5>
                                                                </div>
                                                                <div contenteditable="true">
                                                                     <blockquote>
                                                                     <footer><cite title="Source Title" class="footerEditor">{{$mediaNews->footer}}</cite></footer>
                                                                     </blockquote>
                                                                </div>
                                                                <div contenteditable="true" class='contentEditor'>
                                                                  {{$mediaNews->content}}
                                                                </div>
                                                                <div class="clearfix"></div>
                                                                {{Form::file('imgFile')}}
                                                            </div>
                                                        </div>            
                                                    </div>
                                                   
                                               
                                            </div>
                                        </div>
                                        {{ Form::hidden('title') }}
                                        {{ Form::hidden('heading') }}
                                        {{ Form::hidden('footer') }}
                                        {{ Form::hidden('content') }}
                                        <div class="form-actions none-bg">
                                                        <!--<a href="#preview in browser/not yet published" class="btn btn-red">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp;-->
                                                        {{ Form::button(
                                                            'Save &nbsp;<i class="fa fa-globe"></i>',
                                                            array(
                                                                'class'=>'btn btn-blue',
                                                                'type'=>'submit')) 
                                                        }}
                                                        &nbsp;<a href="{{ URL::route('media_news_list', [], false) }}" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a>
                         
                                                    </div>
                        {{ Form::close() }}
                        
                    </div>
                </div>
@stop
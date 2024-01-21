@extends('layouts.default')

@section('content')
   <div class="row">
              <div class="col-lg-12">
                <h2>Media News <i class="fa fa-angle-right"></i> Listing</h2>
                
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
                
                <div class="portlet">
                  <div class="portlet-header"> 
                  	<a href="{{ URL::route('media_news_new', [], false) }}" class="btn btn-success">Add New &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">Delete</button>
                        <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                        <ul role="menu" class="dropdown-menu">
                            <li><a href="#" id="deleteMultipleTriger" data-target="#modal-delete-selected" data-toggle="modal">Delete selected item(s)</a></li>
                          <li class="divider"></li>
                          <li><a href="#" data-target="#modal-delete-all" data-toggle="modal">Delete all</a></li>
                        </ul>
                    </div>
                    &nbsp;<a href="{{ URL::to('webscraper/grabAllDataAdmin') }}" class="btn btn-info">Grab All News &nbsp;<i class="fa fa-cloud-download"></i></a> 
                    &nbsp;<a href="#" class="btn btn-dark publishSelected">Publish News &nbsp;<i class="fa fa-globe"></i></a> 
                    &nbsp;<a href="{{ URL::route('web_scrapping_list', [], false) }}" class="btn btn-warning">Web Scrapping List &nbsp;<i class="fa fa-external-link"></i></a>&nbsp;
                      <div class="tools"> <i class="fa fa-refresh" data-hover="tooltip" data-placement="top" title="Update News"></i> </div>
                      <!-- modal delete selected items end -->
                    <!--Modal delete selected items start-->
                      <div id="modal-delete-selected" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                              <h4 id="modal-login-label2" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the selected item(s)? </h4>
                            </div>
                            <div class="modal-body">
                              <!--<p><strong>#4:</strong> 15 Sept, 2014 - OCK To More Than Double Indonesian Operation</p>-->
                              <div class="form-actions">
                                  <div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red deleteMultiple">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                              <h4 id="modal-login-label2" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete all items? </h4>
                            </div>
                            <div class="modal-body">
                              <div class="form-actions">
                                <div class="col-md-offset-4 col-md-8"> <a href="#" class="btn btn-red deleteAll">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                          {{ Form::select('recordsperpage', ['10' => '10', '20' => '20', '30' => '30', '50' => '50', '100' => '100'], $limit, ['class' => 'form-control recordsPerPage']); }}
                        &nbsp;
                        <label class="control-label">Records per page</label>
                      </div>
                    </div>
                    <div class="pull-right">Last updated: <span class="text-blue">15 Sept, 2014 @ 12.00PM</span></div>
                    <div class="clearfix"></div>
                    <br/>
                    <br/>
                    {{ Form::open(array('id'=>'media_news_list', 'name'=>'media_news_list', 'action' => 'adminController@media_news_delete_all', 'method'=>'post', 'class'=>'selectionForm')) }}
                    {{ Form::hidden('deleteHidden', '', array('class' => 'deleteHidden')) }}
                    <table class="table table-hover table-striped">
                      <thead>
                        <tr>
                          <th width="1%">{{ Form::checkbox('selectionAll', '1', false) }}</th>
                          <th>#</th>
                          <th>Status</th>
                          <th>Date</th>
                          <th>News Title</th>
                          <th>Source</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($mediaNews as $mediaNew)
                        <tr>
                          <td>{{ Form::checkbox('selectionCheck[]', $mediaNew->id, false, ['class'=> 'selectionCheck']) }}</td>
                          <td>{{$mediaNew->id}}</td>
                          <td><span class="label label-sm {{$mediaNew->status == 1 ? 'label-success' : 'label-danger'}}">{{$mediaNew->status == 1 ? 'Active' : 'Inactive'}}</span></td>
                          <td>{{ date('d M, Y', $mediaNew->date) }}</td>
                          <td><a href="{{ URL::route('media_news_edit', ['id'=>$mediaNew->id], false) }}">{{$mediaNew->title}}</a></td>
                          <td>{{$mediaNew->footer}}</td>
                          <td><a href="{{ URL::route('media_news_edit', ['id'=>$mediaNew->id], false) }}" data-hover="tooltip" data-placement="top" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-{{$mediaNew->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Publish"><span class="label label-sm label-blue"><i class="fa fa-globe"></i></span></a>
                              <!--Modal delete start-->
                              <div id="modal-delete-{{$mediaNew->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                      <h4 id="modal-login-label2" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this news? </h4>
                                    </div>
                                    <div class="modal-body">
                                      <p><strong>#{{$mediaNew->id}}:</strong> {{$mediaNew->title}}</p>
                                      <div class="form-actions">
                                        <div class="col-md-offset-4 col-md-8"> <a href="{{ URL::route('media_news_delete', ['id'=>$mediaNew->id], false) }}" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
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
                          <td colspan="7"></td>
                        </tr>
                      </tfoot>
                    </table>
                    {{ Form::close() }}
                    <div class="tool-footer text-right">
                        <p class="pull-left">Showing {{ $mediaNews->getFrom() }} to {{ $mediaNews->getTo() }} of {{ number_format($mediaNews->getTotal()) }} entries</p>
                        {{ $mediaNews->appends(Input::except('page'))->links() }}
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
            </div>
@stop
@extends('layouts.default')

@section('content')
   <div class="row">
              		
                    <div class="col-lg-12">
                    	<h2>Web Scrapping <i class="fa fa-angle-right"></i> Listing</h2>
                        
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
                                <a href="{{ URL::route('web_scrapping_new', [], false) }}" class="btn btn-success">Add New URL &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                                <div class="btn-group">
                                    <button type="button" class="btn btn-primary">Delete</button>
                                    <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                                    <ul role="menu" class="dropdown-menu">
                                        <li><a href="#" data-target="#modal-delete-selected" data-toggle="modal">Delete selected item(s)</a></li>
                                        <li class="divider"></li>
                                        <li><a href="#" data-target="#modal-delete-all" data-toggle="modal">Delete all</a></li>
                                    </ul>
                                </div>
                                
                                <!--Modal delete selected items start-->
                                <div id="modal-delete-selected" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                <h4 id="modal-login-label" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the selected item(s)? </h4></div>
                                                <div class="modal-body">
                                                	<!--<p><strong>#3:</strong> thestar.com.my</p>-->
                                                    <div class="form-actions">
                                                        <div class="col-md-offset-4 col-md-8">
                                                            <a href="#" class="btn btn-red deleteMultiple">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp;
                                                            <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a>
                                                        </div>
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
                                                <h4 id="modal-login-label" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete all items? </h4></div>
                                                <div class="modal-body">

                                                    <div class="form-actions">
                                                        <div class="col-md-offset-4 col-md-8">
                                                            <a href="#" class="btn btn-red deleteAll">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp;
                                                            <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a>
                                                        </div>
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
                                     	{{ Form::select('recordsperpage', ['2' => '2', '3' => '3', '10' => '10', '20' => '20', '30' => '30', '50' => '50', '100' => '100'], $limit, ['class' => 'form-control recordsPerPage']); }}
                                        &nbsp;<label class="control-label">Records per page</label>
                                     </div>
                                </div>
                                <br/><br/>
                                {{ Form::open(array('id'=>'web_scrapping_list', 'name'=>'media_news_list', 'action' => 'adminController@web_scrapping_delete_all', 'method'=>'post', 'class'=>'selectionForm')) }}
                                {{ Form::hidden('deleteHidden', '', array('class' => 'deleteHidden')) }}
                                <table class="table table-hover table-striped">
                                    <thead>
                                    <tr>
                                        <th width="1%">{{ Form::checkbox('selectionAll', '1', false) }}</th>
                                        <th>#</th>
                                        <th>Status</th>
                                        <th>URL</th>
                                        <th>Date Added</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    
                                    @foreach($urls as $url)
                                    
                                    <tr>
                                        <td>{{ Form::checkbox('selectionCheck[]', $url->id, false, ['class'=> 'selectionCheck']) }}</td>
                                        <td>{{$url->id}}</td>
                                        <td><span class="label label-sm {{$url->status == 1 ? 'label-success' : 'label-danger'}}">{{$url->status == 1 ? 'Active' : 'Inactive'}}</span></td>
                                        <td><a href="{{$url->link}}" target="_blank">{{$url->url}}</a></td>
                                        <td>{{$url->created_at}}</td>
                                        <td>
                                        <a href="{{ URL::route('web_scrapping_edit', ['id'=>$url->id], false) }}" data-hover="tooltip" data-placement="top" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> 
                                        <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-{{ $url->id }}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                                        <a href="#" data-hover="tooltip" data-placement="top" title="Publish"><span class="label label-sm label-blue"><i class="fa fa-globe"></i></span></a>
                                        <!--Modal delete start-->
                                        <div id="modal-delete-{{$url->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                                        <h4 id="modal-login-label" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this news? </h4></div>
                                                        <div class="modal-body">
                                                            <p><strong>#{{ $url->id }}:</strong> {{$url->url}}</p>
                                                            <div class="form-actions">
                                                                <div class="col-md-offset-4 col-md-8">
                                                                    <a href="{{ URL::route('web_scrapping_delete', ['id'=>$url->id], false) }}" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp;
                                                                    <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a>
                                                                </div>
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
                                	<p class="pull-left">Showing {{ $urls->getFrom() }} to {{ $urls->getTo() }} of {{ number_format($urls->getTotal()) }} entries</p>
                                    {{ $urls->appends(Input::except('page'))->links() }}
                                </div>
                                <div class="clearfix"></div>
                                
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
@stop
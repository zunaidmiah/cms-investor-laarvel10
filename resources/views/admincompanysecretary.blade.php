@extends('layouts.admin')
@section('content')

<script type="text/javascript" src="{{ URL::asset('js/modalPopup.js') }}"></script>


<script type="text/javascript">
<!--
function getAllChecked(){
	var checkedValues = $('input.chkNumber:checked').map(function() {
	    return this.value;
	}).get().join(',');

	$('#deletemultiple input[name=deleteid]').val(checkedValues);
}

//-->
</script>

          <!--<div class="page-content">-->
          <div class="row">
            <div class="col-lg-12">
              <h2>Change of Company Secretary <i class="fa fa-angle-right"></i> Listing</h2>
              <div class="clearfix"></div>
              
              <div class="pull-left margin-top-10px"> Last updated: <span class="text-blue">{{ date("d F Y",strtotime($page[0]->updated_at)) }} @ {{ date("g:i A",strtotime($page[0]->updated_at)) }}</span> </div>
              <div class="pull-right"> <a href="#" class="btn btn-red btn-lg">Update Announcement &nbsp;<i class="fa fa-refresh"></i></a> </div>
              <div class="clearfix"></div>
              <p></p>
              {{ Form::open(array('url' => 'admin/page/savepage','class'=> 'form-horizontal','method' => 'post','name' => 'corporatdirprofile','id' => 'corporatdirprofile')) }} 
				   {{Form::hidden('preview','')}}
		           {{Form::hidden('pageid',$page[0]->id)}}
		           {{Form::hidden('type',$page[0]->type)}}
		           
		            <div class="portlet">
	                 <div class="portlet-header">
	                    <div class="caption">Page Info</div><br/>
	                    <span class="text-blue text-12px">You can edit the content by clicking the text section below.</span>
	                    <div class="tools">
	                       <i class="fa fa-chevron-up"></i>
	                    </div>
	                 </div>
	                 <div class="portlet-body">
	                   <div class="portlet-body">
		                  <div contenteditable="true" id="page-title">
		                   {{$page[0]->page_title}}
		                  </div>
						  {{ Form::textarea('page_title',$page[0]->page_title,array("id" => "textarea-page-title","style" => "display:none;")) }} 
	                 </div>
	     	      </div>
	     	      </div>
	     	      
	     	      <div class="portlet">
	                 <div class="portlet-header">
	                    <div class="caption">Page Content</div><br/>
	                    <span class="text-blue text-12px">You can edit the content by clicking the text section below.</span>
	                    <div class="tools">
	                       <i class="fa fa-chevron-up"></i>
	                    </div>
	                 </div>
	                 <div class="portlet-body">
	                    <div contenteditable="true"  id="left-block1-title">
	                       {{ $page[0]->left_block1_title }}
	                    </div>  
	                    {{ Form::textarea('left_block1_title',$page[0]->left_block1_title,array("id" => "textarea-left-block1-title","style" => "display:none;")) }}            
	                 </div>
	                 <!-- end portlet body -->
	                    
	              </div>
	              <!-- End portlet -->

			  
				<div class="form-actions none-bg"> 
					<a href="javascript:void(0);" class="btn btn-red" onclick="Addsavepage('corporatdirprofile','');">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp; 
					<button type="submit" class="btn btn-blue">Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></button>&nbsp; 
					<a href="#" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> 
				</div>
			 {{ Form::close()}} 
              
             
              
              
              
              
              
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Change of Company Secretary Announcements Listing</div>
                  <br/>
                  <p class="margin-top-10px"></p>
                  <a href="#" data-target="#modal-add-announcement" data-toggle="modal" class="btn btn-success">Add New Announcement &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary">Delete</button>
                    <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                    <ul role="menu" class="dropdown-menu">
                    <li><a href="#" onclick="MyFunction();return false;">Delete selected item(s)</a></li>
                      <!-- <li><a href="#" data-target="#modal-delete-selected" data-toggle="modal">Delete selected item(s)</a></li> -->
                      <li class="divider"></li>
                      <li><a href="#" data-target="#modal-delete-all" data-toggle="modal">Delete all</a></li>
                    </ul>
                  </div>
                   
				  <div class="tools"> 
                  	<i class="fa fa-chevron-up"></i> 
                  </div>
                  <!--Modal Add New announcement start-->
                  <div id="modal-add-announcement" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog modal-wide-width">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label2" class="modal-title">Add New Announcement</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form">
                          {{ Form::open(array('url' => 'admin/newscenter/saveannouncements','class'=> 'form-horizontal','method' => 'post','files' => true, 'onsubmit' => 'fillRefernce();')) }}
                              <div class="form-group">
                               <label class="col-md-3 control-label">Status</label>
                                <div class="col-md-8">
                                  <div data-on="success" data-off="primary" class="make-switch">
                                  	{{Form::checkbox('status', 1 ,array('id'=>'active','class' => 'form-control'))}}
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Company <span class='require'>*</span></label>
                                <div class="col-md-6">
								{{ Form::text('company_name','FAR EAST HOLDINGS BERHAD',array('id' => 'company','class' => 'form-control', 'placeholder' => 'company name' )) }} 
                                 
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Title <span class='require'>*</span></label>
                                <div class="col-md-6">
								{{ Form::textarea('title','',array('id' => 'title','class' => 'form-control', 'placeholder' => 'title','rows'=>2 )) }} 
                                 
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-3 control-label">Announcement Date <span class='require'>*</span></label>
                                <div class="col-md-5">
                                  <div class="input-group">
                                   {{Form::text('date_of_publishing','',array('id'=>'date','class' => 'datepicker-default form-control','data-date-format' => 'dd/mm/yyyy', 'placeholder' => 'dd/mm/yyyy'))}}  
                                    <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="inputContent" class="col-md-3 control-label">Content</label>
                                <div class="col-md-9"> 
                                   <p class="text-blue margin-top-10px border-bottom">You can add content by clicking the text below.</p>
                                   <div onblur="return div_val1(this.id)" id="announcement_content" contenteditable="true">

										   <table class="table table-striped">
                                            <col />
                                            <col />
                                            
                                            <tbody>
                                              <tr>
                                                <td><strong>Date of change</strong></td>
                                                <td>Please fill in content</td>
                                              </tr>
                                              <tr>
                                                <td><strong>Type of change</strong></td>
                                                <td>Please fill in content</td>
                                              </tr>
                                              <tr>
                                                <td><strong>Designation</strong></td>
                                                <td>Please fill in content</td>
                                              </tr>
                                              <tr>
                                                <td><strong>License no.</strong></td>
                                                <td>Please fill in content</td>
                                              </tr>
                                              <tr>
                                                <td><strong>Name</strong></td>
                                                <td>Please fill in content</td>
                                              </tr>
                                              <tr>
                                                <td><strong>Working experience and occupation during past 5 years</strong></td>
                                                <td>Please fill in content</td>
                                              </tr>
                                              
                                            </tbody>
                                            <tfoot>
                                              <tr>
                                                <td></td>
                                                <td></td>
                                              </tr>
                                            </tfoot>
                                          </table>
											<p>Remarks: N/A.</p> 
											
									
                                   
										
                                   </div>
                                   {{ Form::textarea('html', '',array("id" => "textarea_announcement_content","style" => "display:none;")) }} 
                                     <!-- Info Resalt-->
                                  <div class="info_resalt border_bottom">
                                      <div class="row-fluid">
                                        <div class="col-lg-12">
                                          <h2 class="red-title"><span>Announcement Info</span></h2>
                                          <div class="alert alert-error">
                                          	<strong>Reference No:</strong> <div contenteditable="true"  onblur="return div_val1(this.id)" id="announcement_reference"><p>Please fill in reference no.</p></div>
                                          </div>
                                          
                                        </div>      
                                      </div>
                                      
                                  </div>
                                  <!-- End Info Resalt-->
                                   
                                </div>
                              </div>
                              {{Form::hidden('reference_no','',array('id' => 'textarea_announcement_reference'))}}
                              {{Form::hidden('category',$base_category)}}
                              <div class="form-actions">
                                <div class="col-md-offset-4 col-md-8"> <button type="submit" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                              </div>
                           {{Form :: close()}}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--END MODAL Add New announcement-->
                  <!--Modal delete selected items start-->
                 <div id="modal-delete-selected-process" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the selected item(s)? </h4>
                        </div>
                        <div class="modal-body">
                          <div class="form-actions">
                            <div class="col-md-offset-4 col-md-8"> 
                            	{{ Form::open(array('url' => 'admin/newscenter/deletemultipleannouncement', 'method' => 'post', 'name' => 'deletemultiple', 'id' => 'deletemultiple', 'class' => 'form-horizontal','onsubmit' => 'getAllChecked();')) }} 
	                            	{{Form::hidden('deleteid')}} 
	                            	<button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; 
	                            	<a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> 
                                {{ Form::close() }} 
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
                          <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete all items? </h4>
                        </div>
                        <div class="modal-body">
                          <div class="form-actions">
                           <div class="col-md-offset-4 col-md-8">
                           {{ Form::open(array('url' => 'admin/newscenter/deleteallannouncement', 'method' => 'post', 'name' => 'deleteallsementra', 'id' => 'deleteallsementra', 'class' => 'form-horizontal','files' => true)) }} 
                           		{{Form::hidden('type', $base_category)}}
                           		<button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; 
                           		<a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> 
                           {{ Form::close() }} 
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
                    @if($cntarray1 != 0 )
                   
                    {{ Form::open(array('url' => Request::url(),'class'=> 'form-horizontal','method' => 'get')) }}
						{{ Form::select('noperpage1', $cntarray1, Input::get('noperpage1'),array('class' => 'form-control','onchange' => 'this.form.submit();')) }}
					{{ Form::close() }}
         
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
                        <th>Company</th>
                        <th>Title</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
					 $i=1;
					 foreach($accountlisting as $data){
					 ?>
                      <tr>
                          <td><input type="checkbox" class="chkNumber case" value="{{$data->id}}"></td>
                        <td><?php echo $i; ?></td>
                        <td><?php  if($data->status==1){ ?><span class="label label-sm label-success">Active</span><?php }else{ ?><span class="label label-sm  btn-primary">Inactive</span> <?php } ?></td>
                        <td><?php echo $data->date_of_publishing;?></td>
                        <td><?php echo $data->company_name;?></td>
                        <td><?php echo $data->title;?></td>
                        <td><a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-announcement<?php echo $data->id;?>" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-<?php echo $data->id;?>" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                            <!--Modal edit announcement start-->
                              <div id="modal-edit-announcement<?php echo $data->id;?>" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                                <div class="modal-dialog modal-wide-width">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                      <h4 id="modal-login-label2" class="modal-title">Edit Announcement</h4>
                                    </div>
                                    <div class="modal-body">
                                      <div class="form">
									   {{ Form::open(array('url' => 'admin/newscenter/editannouncements','class'=> 'form-horizontal','method' => 'post','files' => true)) }}
                                          <div class="form-group">
                                          <label class="col-md-3 control-label">Status</label>
			                                <div class="col-md-8">
			                                  <div data-on="success" data-off="primary" class="make-switch">
			                                  	<?php 
			                                  	$opt =array('class' => 'form-control');
			                                  	if($data->status)
			                                  		$opt['checked'] = 'checked';
			                                  	else
			                                  		$opt['checked'] = '';
			                                  	?>
			                                  	<input <?php if($data->status == 1) {?>checked <?php }?>name="status" type="checkbox" value="1">
			                                  	<!-- {{Form::checkbox('status', 1,$opt)}} -->
			                                  </div>
			                                </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Company <span class='require'>*</span></label>
                                            <div class="col-md-6">
                                              {{ Form::text('company_name',$data->company_name,array('id' => 'company','class' => 'form-control', 'placeholder' => 'company name' )) }}
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Title <span class='require'>*</span></label>
                                            <div class="col-md-6">
                                             {{ Form::textarea('title',$data->title,array('id' => 'title','class' => 'form-control', 'placeholder' => 'title','rows'=>2 )) }} 
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label class="col-md-3 control-label">Announcement Date <span class='require'>*</span></label>
                                            <div class="col-md-5">
                                              <div class="input-group">
                                                {{Form::text('date_of_publishing',date('d/m/Y',strtotime($data->date_of_publishing)),array('id'=>'date','class' => 'datepicker-default form-control','data-date-format' => 'dd/mm/yyyy', 'placeholder' => 'dd/mm/yyyy'))}}  
                                                <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="form-group">
                                            <label for="inputContent" class="col-md-3 control-label">Content</label>
                                            <div class="col-md-9"> 
                                               <p class="text-blue margin-top-10px border-bottom">You can add content by clicking the text below.</p>
                                               <div onblur="return div_val1(this.id)" id="announcement_content<?php echo $data->id;?>" contenteditable="true">
                                                   {{$data->html}}
                                               </div>
                                               <textarea style="display: none;" name="html" id="textarea_announcement_content{{$data->id}}">{{$data->html}}</textarea>
                                               <!-- Info Resalt-->
                                              <div class="info_resalt border_bottom">
                                                  <div class="row-fluid">
                                                    <div class="col-lg-12">
                                                      <div>
                                                        <h2 class="red-title"><span>Announcement Info</span></h2>
                                                      </div>
                                                       <div class="alert alert-error">
			                                          	<strong>Reference No:</strong> <div onblur="return div_val1(this.id)" id="announce_reference_no<?php echo $data->id; ?>"  contenteditable="true"><p><?php echo $data->reference_no;?></p></div>
			                                          </div>
                                                    </div>      
                                                  </div>
                                                  
                                              </div>
                                              <!-- End Info Resalt-->
                                               
                                            </div>
                                          </div>
                                          <input type="hidden" name="reference_no" value="<?php echo $data->reference_no;?>" id="textarea_announce_reference_no<?php echo $data->id;?>">
                                          {{Form::hidden('id',$data->id)}}
                                          <div class="form-actions">
                                            <div class="col-md-offset-5 col-md-8"> <button type="submit" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                          </div>
                                        {{ Form :: close()}} 
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <!--END MODAL edit announcement-->
                            <!--Modal delete start-->
                            <div id="modal-delete-{{$data->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                    <h4 id="modal-login-label3" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this announcement? </h4>
                                  </div>
                                  <div class="modal-body">
                                     <p><strong>#{{$data->id}}:</strong> {{$data->title}}</p>
                                    <div class="form-actions">
                                      <div class="col-md-offset-4 col-md-8"> {{ Form::open(array('url' => 'admin/newscenter/deleteannouncement', 'method' => 'post', 'name' => 'delete'.$data->id, 'id' => 'delete'.$data->id, 'class' => 'form-horizontal','files' => true)) }}
									  {{ Form::hidden('id',$data->id) }} <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> 
                                      {{ Form::close() }}</div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <!-- modal delete end -->
                           
                        </td>
                      </tr>
					  <?php
					  $i++;
					  } ?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <td colspan="7"></td>
                      </tr>
                    </tfoot>
                  </table>
                  <div class="tool-footer text-right">
                   <p class="pull-left">Showing {{ $accountlisting->getFrom() }} to {{ $accountlisting->getTo() }} of {{ $accountlisting->getTotal() }} entries</p>
                    {{ $accountlisting->appends(Input::except('page'))->links() }}
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              
                      
                      
            </div>
          </div>
         
@stop
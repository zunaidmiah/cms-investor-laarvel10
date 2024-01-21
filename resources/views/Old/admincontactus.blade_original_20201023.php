@extends('layouts.admin')
@section('content')

      <div class="row">
            <div class="col-lg-12">
              <h2>CONTACT US  <i class="fa fa-angle-right"></i> EDIT</h2>
              <div class="clearfix"></div>
              <!--<div class="alert alert-success alert-dismissable">
                <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                <i class="fa fa-check-circle"></i> <strong>Success!</strong>
                <p>The information has been saved/updated successfully.</p>
              </div>-->
              <!--<div class="alert alert-danger alert-dismissable">
                <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
                <i class="fa fa-times-circle"></i> <strong>Error!</strong>
                <p>The information has not been saved/updated. Please correct the errors.</p>
              </div>-->
              
              <div class="pull-left margin-top-10px"> Last updated: <span class="text-blue"> {{ date("d F Y",strtotime($page[0]->updated_at)) }} @ {{ date("g:i A",strtotime($page[0]->updated_at)) }}
</span> </div>
              <div class="clearfix"></div>
              <p></p>
              
           {{ Form::open(array('url' => 'admin/page/savepage','class'=> 'form-horizontal','method' => 'post','name' => 'contactsave','id' => 'contactsave')) }} 
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
{{ Form::textarea('page_title',$page[0]->page_title,array("id" => "textarea-page-title","class" => "hideThisField")) }}

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
                      <div class="grid_12">
                        <header class="entry-header clearfix">
                          <div class="format-icon">
                            <div class="format-icon-inner"> <i class="icon-pushpin"></i> </div>
                          </div>
                          <div class="entry-header-inner">
                            <div contenteditable="true" id="left-block1-title">
          {{ $page[0]->left_block1_title }}
                            </div>
  {{ Form::textarea('left_block1_title',$page[0]->left_block1_title,array("id" => "textarea-left-block1-title","class" => "hideThisField")) }}

                          </div>
                        </header>
                        <div class="hr"></div>
                      </div>
                    </div>
                     
                    <div class="clearfix">
                      <div class="grid_12">
                      
                      <!-- Google Map -->
                      <div class="map-wrapper map-wrapper__small">
                        <div class="map-canvas map-canvas__small">
                         <iframe id="map_left_inner_block_title20" 
                         src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC3bDbxNOKRdamYrBDlTrInjywsZUzkY44
    &q={{ $page[0]->left_inner_block_title20 }}"
                         
                         width="100%" height="150" frameborder="0" style="border:0;"></iframe>
         <input type="hidden" name="left_inner_block_title20" id="left_inner_block_title20" value="{{ $page[0]->left_inner_block_title20 }}">
                        </div>
                      </div>
                      <!-- Google Map / End -->
                        <div class="clearfix"></div>
                        <a href="#" data-target="#modal-edit-map-block9" data-toggle="modal">
                          <button type="button" class="btn btn-yellow">Edit Google Map <i class="fa fa-edit"></i></button>
                        </a>
                        <div class="clearfix"></div>
                        <br/>
                      <!-- Contact Information -->
                      
                      
                      
                      	<!-- Contact Information -->
                        <div contenteditable="true" id="left-block2-title">
     {{ $page[0]->left_block2_title }}
                        </div>
 {{ Form::textarea('left_block2_title',$page[0]->left_block2_title,array("id" => "textarea-left-block2-title","class" => "hideThisField")) }}

                        <div contenteditable="true" id="left-block2-content">
   {{ $page[0]->left_block2_content }}
                        </div>
 {{ Form::textarea('left_block2_content',$page[0]->left_block2_content,array("id" => "textarea-left-block2-content","class" => "hideThisField")) }}

                        <!-- Contact Information / End -->

                      </div>    
					</div>
                    <div class="clearfix"></div>
                    <div class="hr hr__double">
                      <div class="hr-first"></div>
                      <div class="hr-second"></div>
                    </div>
                    
                    <!-- manufacturing contact start -->
                    <div class="clearfix">
                      <div class="grid_12">
                        <header class="entry-header clearfix">
                          <div class="format-icon">
                            <div class="format-icon-inner"> <i class="icon-pushpin"></i> </div>
                          </div>
                          <div class="entry-header-inner">
                            <div contenteditable="true" id="left-block3-title">
          {{ $page[0]->left_block3_title }}
                            </div>
    {{ Form::textarea('left_block3_title',$page[0]->left_block3_title,array("id" => "textarea-left-block3-title","class" => "hideThisField")) }}

                          </div>
                        </header>
                        <div class="line"></div>
                      </div>
                    </div>
                    <div class="grid_6">
                      <!-- Google Map -->
                      <div class="map-wrapper map-wrapper__small">
                        <div class="map-canvas map-canvas__small">
  <iframe id="map_right_block1_content" 
                         src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC3bDbxNOKRdamYrBDlTrInjywsZUzkY44
    &q={{ $page[0]->right_block1_content }}"
                         
                         width="100%" height="150" frameborder="0" style="border:0;"></iframe>                      
                         
   <input type="hidden" name="right_block1_content" id="right_block1_content" value="{{ $page[0]->right_block1_content }}">                      
                           </div>
                      </div>
                      <!-- Google Map / End -->
                      
                        <div class="clearfix"></div>
                        <a href="#" data-target="#modal-edit-map-block1" data-toggle="modal">
                          <button type="button" class="btn btn-yellow">Edit Google Map <i class="fa fa-edit"></i></button>
                        </a>
                        <div class="clearfix"></div>
                        <br/>
                      <!-- Contact Information -->
                      <div contenteditable="true" id="left-inner-block-title1">
             {{ $page[0]->left_inner_block_title1 }} 
                      </div>
 {{ Form::textarea('left_inner_block_title1', $page[0]->left_inner_block_title1,array("id" => "textarea-left-inner-block-title1","class" => "hideThisField")) }}

					  <div contenteditable="true" id="left-inner-block-content1">
    {{ $page[0]->left_inner_block_content1 }} 
                      </div>
 {{ Form::textarea('left_inner_block_content1', $page[0]->left_inner_block_content1,array("id" => "textarea-left-inner-block-content1","class" => "hideThisField")) }}

                      <!-- Contact Information / End -->
                    </div>
                    <div class="grid_6">
                      <!-- Google Map -->
                      <div class="map-wrapper map-wrapper__small">
                        <div id="map_canvas" class="map-canvas map-canvas__small">
 <iframe id="map_left_inner_block_title2" 
                         src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC3bDbxNOKRdamYrBDlTrInjywsZUzkY44
    &q={{ $page[0]->left_inner_block_title2 }}"
                         
                         width="100%" height="150" frameborder="0" style="border:0;"></iframe>    
      <input type="hidden" name="left_inner_block_title2" id="left_inner_block_title2" value="{{ $page[0]->left_inner_block_title2 }}">                   
                         
                                                </div>
                      </div>
                      <!-- Google Map / End -->
                      
                        <div class="clearfix"></div>
                        <a href="#" data-target="#modal-edit-map-block2" data-toggle="modal">
                          <button type="button" class="btn btn-yellow">Edit Google Map <i class="fa fa-edit"></i></button>
                        </a>
                        <div class="clearfix"></div>
                        <br/>
                      <!-- Contact Information -->
                      <div contenteditable="true" id="left-inner-block-title3">
    {{ $page[0]->left_inner_block_title3 }} 
                      </div>
     {{ Form::textarea('left_inner_block_title3', $page[0]->left_inner_block_title3,array("id" => "textarea-left-inner-block-title3","class" => "hideThisField")) }}

                      <div contenteditable="true" id="left-inner-block-content3">	
    {{ $page[0]->left_inner_block_content3 }} 
                      </div>  
     {{ Form::textarea('left_inner_block_content3', $page[0]->left_inner_block_content3,array("id" => "textarea-left-inner-block-content3","class" => "hideThisField")) }}

                      <!-- Contact Information / End -->
                    </div>
                    <div class="clearfix"></div>
                    <br/>
                    <div class="grid_6">
                      <!-- Google Map -->
                      <div class="map-wrapper map-wrapper__small">
                        <div class="map-canvas map-canvas__small">
<iframe id="map_left_inner_block_title4" 
                         src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC3bDbxNOKRdamYrBDlTrInjywsZUzkY44
    &q={{ $page[0]->left_inner_block_title4 }}"
                         
                         width="100%" height="150" frameborder="0" style="border:0;"></iframe>                           </div>
                          <input type="hidden" name="left_inner_block_title4" id="left_inner_block_title4" value="{{ $page[0]->left_inner_block_title4 }}">
                      </div>
                      <!-- Google Map / End -->
                      
                        <div class="clearfix"></div>
                        <a href="#" data-target="#modal-edit-map-block3" data-toggle="modal">
                          <button type="button" class="btn btn-yellow">Edit Google Map <i class="fa fa-edit"></i></button>
                        </a>
                        <div class="clearfix"></div>
                        <br/>
                      <!-- Contact Information -->
                      <div contenteditable="true" id="left-inner-block-title5">
                {{ $page[0]->left_inner_block_title5 }}
                      </div>
          {{ Form::textarea('left_inner_block_title5', $page[0]->left_inner_block_title5,array("id" => "textarea-left-inner-block-title5","class" => "hideThisField")) }}

                      <div contenteditable="true" id="left-inner-block-content5">
         {{ $page[0]->left_inner_block_content5 }} 
                      </div>
              {{ Form::textarea('left_inner_block_content5', $page[0]->left_inner_block_content5,array("id" => "textarea-left-inner-block-content5","class" => "hideThisField")) }}

                      <!-- Contact Information / End -->
                    </div>
                    <div class="grid_6">
                      <!-- Google Map -->
                      <div class="map-wrapper map-wrapper__small">
                        <div id="map_canvas" class="map-canvas map-canvas__small">
<iframe id="map_left_inner_block_title6" 
                         src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC3bDbxNOKRdamYrBDlTrInjywsZUzkY44
    &q={{ $page[0]->left_inner_block_title6 }}"
                         
                         width="100%" height="150" frameborder="0" style="border:0;"></iframe> 
 <input type="hidden" name="left_inner_block_title6" id="left_inner_block_title6" value="{{ $page[0]->left_inner_block_title6 }}">

                        </div>
                      </div>
                      <!-- Google Map / End -->
                      
                        <div class="clearfix"></div>
                        <a href="#" data-target="#modal-edit-map-block4" data-toggle="modal">
                          <button type="button" class="btn btn-yellow">Edit Google Map <i class="fa fa-edit"></i></button>
                        </a>
                        <div class="clearfix"></div>
                        <br/>
                      <!-- Contact Information -->
                      <div contenteditable="true" id="left-inner-block-title7">
          {{ $page[0]->left_inner_block_title7 }}
                      </div>
                {{ Form::textarea('left_inner_block_title7', $page[0]->left_inner_block_title7,array("id" => "textarea-left-inner-block-title7","class" => "hideThisField")) }}

                      <div contenteditable="true" id="left-inner-block-content7">	
              {{ $page[0]->left_inner_block_content7 }} 
    				  </div>
    {{ Form::textarea('left_inner_block_content7', $page[0]->left_inner_block_content7,array("id" => "textarea-left-inner-block-content7","class" => "hideThisField")) }}

                      <!-- Contact Information / End -->
                    </div>
                    <div class="clearfix"></div>
                    <div class="hr hr__double">
                      <div class="hr-first"></div>
                      <div class="hr-second"></div>
                    </div>
                    <!-- manufacturing contact end -->
                    
                    <!-- trading contact start -->
                    <div class="clearfix">
                      <div class="grid_12">
                        <header class="entry-header clearfix">
                          <div class="format-icon">
                            <div class="format-icon-inner"> <i class="icon-pushpin"></i> </div>
                          </div>
                          <div class="entry-header-inner">
                            <div contenteditable="true" id="left-inner-block-title8">
        {{ $page[0]->left_inner_block_title8 }}
                            </div>
     {{ Form::textarea('left_inner_block_title8', $page[0]->left_inner_block_title8,array("id" => "textarea-left-inner-block-title8","class" => "hideThisField")) }}

                          </div>
                        </header>
                        <div class="line"></div>
                      </div>
                    </div>
                    <div class="grid_6">
                      <!-- Google Map -->
                      <div class="map-wrapper map-wrapper__small">
                        <div class="map-canvas map-canvas__small">
<iframe id="map_left_inner_block_title9" 
                         src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC3bDbxNOKRdamYrBDlTrInjywsZUzkY44
    &q={{ $page[0]->left_inner_block_title9 }}"
                         
                         width="100%" height="150" frameborder="0" style="border:0;"></iframe>                         </div>
  <input type="hidden" name="left_inner_block_title9" id="left_inner_block_title9" value="{{ $page[0]->left_inner_block_title9 }}">

                      </div>
                      <!-- Google Map / End -->
                      
                        <div class="clearfix"></div>
                        <a href="#" data-target="#modal-edit-map-block5" data-toggle="modal">
                          <button type="button" class="btn btn-yellow">Edit Google Map <i class="fa fa-edit"></i></button>
                        </a>
                        <div class="clearfix"></div>
                        <br/>
                      <!-- Contact Information -->
                      <div contenteditable="true" id="left-inner-block-title10">
                       {{ $page[0]->left_inner_block_title10 }}
                      </div>
                        {{ Form::textarea('left_inner_block_title10', $page[0]->left_inner_block_title10,array("id" => "textarea-left-inner-block-title10","class" => "hideThisField")) }}

					    <div contenteditable="true" id="left-inner-block-content10">
                      {{ $page[0]->left_inner_block_content10 }} 
    				  </div>
    {{ Form::textarea('left_inner_block_content10', $page[0]->left_inner_block_content10,array("id" => "textarea-left-inner-block-content10","class" => "hideThisField")) }}
                      <!-- Contact Information / End -->
                    </div>
                    
                    <div class="clearfix"></div>
                    <div class="hr hr__double">
                      <div class="hr-first"></div>
                      <div class="hr-second"></div>
                    </div>
                    <!-- trading contact end -->
                    
                    <!-- plantation contact start -->
                    <div class="clearfix">
                      <div class="grid_12">
                        <header class="entry-header clearfix">
                          <div class="format-icon">
                            <div class="format-icon-inner"> <i class="icon-pushpin"></i> </div>
                          </div>
                          <div class="entry-header-inner">
                            <div contenteditable="true" id="left-inner-block-title11">
                            	 {{ $page[0]->left_inner_block_title11 }}
                      </div>
                        {{ Form::textarea('left_inner_block_title11', $page[0]->left_inner_block_title11,array("id" => "textarea-left-inner-block-title11","class" => "hideThisField")) }}
                          </div>
                        </header>
                        <div class="line"></div>
                      </div>
                    </div>
                    <div class="grid_6">
                      <!-- Google Map -->
                      <div class="map-wrapper map-wrapper__small">
                        <div class="map-canvas map-canvas__small">
                          <iframe id="map_left_inner_block_title12" 
                         src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC3bDbxNOKRdamYrBDlTrInjywsZUzkY44
    &q={{ $page[0]->left_inner_block_title12 }}"
                         
                         width="100%" height="150" frameborder="0" style="border:0;"></iframe>
      <input type="hidden" name="left_inner_block_title12" id="left_inner_block_title12" value="{{ $page[0]->left_inner_block_title12 }}">
                        </div>
                      </div>
                      <!-- Google Map / End -->
                      
                        <div class="clearfix"></div>
                        <a href="#" data-target="#modal-edit-map-block6" data-toggle="modal">
                          <button type="button" class="btn btn-yellow">Edit Google Map <i class="fa fa-edit"></i></button>
                        </a>
                        <div class="clearfix"></div>
                        <br/>
                      <!-- Contact Information -->
                      <div contenteditable="true" id="left-inner-block-title13">
                      	 {{ $page[0]->left_inner_block_title13 }}
                      </div>
                        {{ Form::textarea('left_inner_block_title13', $page[0]->left_inner_block_title13,array("id" => "textarea-left-inner-block-title13","class" => "hideThisField")) }}
					  <div contenteditable="true" id="left-inner-block-content13">
                          {{ $page[0]->left_inner_block_content13 }} 
    				  </div>
    {{ Form::textarea('left_inner_block_content13', $page[0]->left_inner_block_content13,array("id" => "textarea-left-inner-block-content13","class" => "hideThisField")) }}
                      <!-- Contact Information / End -->
                    </div>
                    <div class="grid_6">
                      <!-- Google Map -->
                      <div class="map-wrapper map-wrapper__small">
                        <div class="map-canvas map-canvas__small">
                          <iframe id="map_left_inner_block_title14" 
                         src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC3bDbxNOKRdamYrBDlTrInjywsZUzkY44
    &q={{ $page[0]->left_inner_block_title14 }}"
                         
                         width="100%" height="150" frameborder="0" style="border:0;"></iframe>
         <input type="hidden" name="left_inner_block_title14" id="left_inner_block_title14" value="{{ $page[0]->left_inner_block_title14 }}">

                        </div>
                      </div>
                      <!-- Google Map / End -->
                      
                        <div class="clearfix"></div>
                        <a href="#" data-target="#modal-edit-map-block7" data-toggle="modal">
                          <button type="button" class="btn btn-yellow">Edit Google Map <i class="fa fa-edit"></i></button>
                        </a>
                        <div class="clearfix"></div>
                        <br/>
                      <!-- Contact Information -->
                      <div contenteditable="true" id="left-inner-block-title15">
                      		 {{ $page[0]->left_inner_block_title15 }}
                      </div>
                        {{ Form::textarea('left_inner_block_title15', $page[0]->left_inner_block_title15,array("id" => "textarea-left-inner-block-title15","class" => "hideThisField")) }}
                      <div contenteditable="true" id="left-inner-block-content15">
                        {{ $page[0]->left_inner_block_content15 }} 
    				  </div>
    {{ Form::textarea('left_inner_block_content15', $page[0]->left_inner_block_content15,array("id" => "textarea-left-inner-block-content15","class" => "hideThisField")) }}
                      <!-- Contact Information / End -->
                    </div>
                    <div class="clearfix"></div>
                    <div class="hr hr__double">
                      <div class="hr-first"></div>
                      <div class="hr-second"></div>
                    </div>
                    <!-- plantation contact end -->
                    
                    <!-- hospitality contact start -->
                    <div class="clearfix">
                      <div class="grid_12">
                        <header class="entry-header clearfix">
                          <div class="format-icon">
                            <div class="format-icon-inner"> <i class="icon-pushpin"></i> </div>
                          </div>
                          <div class="entry-header-inner">
                            <div contenteditable="true" id="left-inner-block-title16">
                            	 {{ $page[0]->left_inner_block_title16 }}
                      </div>
                        {{ Form::textarea('left_inner_block_title16', $page[0]->left_inner_block_title16,array("id" => "textarea-left-inner-block-title16","class" => "hideThisField")) }}
                          </div>
                        </header>
                        <div class="line"></div>
                      </div>
                    </div>
                    <div class="grid_6">
                      <!-- Google Map -->
                      <div class="map-wrapper map-wrapper__small">
                        <div class="map-canvas map-canvas__small">
                         <iframe id="map_left_inner_block_title17" 
                         src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC3bDbxNOKRdamYrBDlTrInjywsZUzkY44
    &q={{ $page[0]->left_inner_block_title17 }}"
                         
                         width="100%" height="150" frameborder="0" style="border:0;"></iframe>
         <input type="hidden" name="left_inner_block_title17" id="left_inner_block_title17" value="{{ $page[0]->left_inner_block_title17 }}">
                        </div>
                      </div>
                      <!-- Google Map / End -->
                      
                        <div class="clearfix"></div>
                        <a href="#" data-target="#modal-edit-map-block8" data-toggle="modal">
                          <button type="button" class="btn btn-yellow">Edit Google Map <i class="fa fa-edit"></i></button>
                        </a>
                        <div class="clearfix"></div>
                        <br/>
                      <!-- Contact Information -->
                      <div contenteditable="true" id="left-inner-block-title18">
                       {{ $page[0]->left_inner_block_title18 }}
                      </div>
                        {{ Form::textarea('left_inner_block_title18', $page[0]->left_inner_block_title18,array("id" => "textarea-left-inner-block-title18","class" => "hideThisField")) }}
                      <div contenteditable="true" id="left-inner-block-content18">
                      	 {{ $page[0]->left_inner_block_content18 }} 
    				  </div>
    {{ Form::textarea('left_inner_block_content18', $page[0]->left_inner_block_content18,array("id" => "textarea-left-inner-block-content18","class" => "hideThisField")) }}
                      <!-- Contact Information / End -->
                    </div>
                    <div class="clearfix"></div>
                    <div class="hr hr__double">
                      <div class="hr-first"></div>
                      <div class="hr-second"></div>
                    </div>
                    <!-- hospitality contact end -->
                    
                  </div>
                </div>
                <!-- save button start -->
                <div class="form-actions none-bg"> <a href="javascript:void(0);" class="btn btn-red" onclick="Addsavepage('contactsave','contacts/contactus');">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp; <button type="submit" class="btn btn-blue">Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></button>&nbsp; <a href="#" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                <!-- save button end -->
              </div>
              
              <!--Modal Edit Google Map start-->
              <div id="modal-edit-map-block1" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                <div class="modal-dialog modal-wide-width">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                      <h4 id="modal-login-label3" class="modal-title">Edit Google Map</h4>
                    </div>
                    <div class="modal-body">
                      <div class="form">
                          <div class="form-group">
                            <label class="col-md-3 control-label">Search Google Map <span class='require'>*</span></label>
                            <div class="col-md-9">
                              <input type="text" id="gmap_geocoding_address1" class=" form-control" placeholder="Enter Address" value="{{ $page[0]->right_block1_content }}" />
                              <div class="margin-top-10px">
                                <input type="button" id="gmap_geocoding_btn" onClick="updateMapAddContact('gmap_geocoding_address1','right_block1_content','search');" class="btn btn-dark" value="Search" />
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label">Preview Map</label>
                            <div class="col-md-9"> 
                              <div class="mapmodal-wrapper map-wrapper__small">
                                  <div id="map_canvas" class="map-canvas">
                                  <iframe id="mapmodal_right_block1_content" 
                         src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC3bDbxNOKRdamYrBDlTrInjywsZUzkY44
    &q={{ $page[0]->right_block1_content }}"
                         
                         width="100%" height="230" frameborder="0" style="border:0;"></iframe>  
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-actions">
                            <div class="col-md-offset-5 col-md-8"> <a href="javascript:void(0);" onClick="updateMapAddContact('gmap_geocoding_address1','right_block1_content','save');"  class="btn btn-red" data-dismiss="modal">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                          </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--END MODAL Edit Map-->
        
        
          <!--Modal Edit Google Map start-->
              <div id="modal-edit-map-block2" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                <div class="modal-dialog modal-wide-width">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                      <h4 id="modal-login-label3" class="modal-title">Edit Google Map</h4>
                    </div>
                    <div class="modal-body">
                      <div class="form">
                          <div class="form-group">
                            <label class="col-md-3 control-label">Search Google Map <span class='require'>*</span></label>
                            <div class="col-md-9">
                              <input type="text" id="gmap_geocoding_address2" class=" form-control" placeholder="Enter Address" value="{{ $page[0]->left_inner_block_title2 }}" />
                              <div class="margin-top-10px">
                                   <input type="button" id="gmap_geocoding_btn" onClick="updateMapAddContact('gmap_geocoding_address2','left_inner_block_title2','search');" class="btn btn-dark" value="Search" />
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label">Preview Map</label>
                            <div class="col-md-9"> 
                              <div class="map-wrapper map-wrapper__small">
                                  <div id="map_canvas" class="map-canvas">
                                    <iframe id="mapmodal_left_inner_block_title2" 
                         src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC3bDbxNOKRdamYrBDlTrInjywsZUzkY44
    &q={{ $page[0]->left_inner_block_title2 }}"
                         
                         width="100%" height="150" frameborder="0" style="border:0;"></iframe>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-actions">
                            <div class="col-md-offset-5 col-md-8"> <a href="javascript:void(0);" onClick="updateMapAddContact('gmap_geocoding_address2','left_inner_block_title2','save');" class="btn btn-red" data-dismiss="modal">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                          </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--END MODAL Edit Map-->
              
              
                <!--Modal Edit Google Map start-->
              <div id="modal-edit-map-block3" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                <div class="modal-dialog modal-wide-width">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                      <h4 id="modal-login-label3" class="modal-title">Edit Google Map</h4>
                    </div>
                    <div class="modal-body">
                      <div class="form">
                          <div class="form-group">
                            <label class="col-md-3 control-label">Search Google Map <span class='require'>*</span></label>
                            <div class="col-md-9">
                              <input type="text" id="gmap_geocoding_address3" class=" form-control" placeholder="Enter Address" value="{{ $page[0]->left_inner_block_title4 }}" />
                              <div class="margin-top-10px">
                                   <input type="button" id="gmap_geocoding_btn" onClick="updateMapAddContact('gmap_geocoding_address3','left_inner_block_title4','search');" class="btn btn-dark" value="Search" />
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label">Preview Map</label>
                            <div class="col-md-9"> 
                              <div class="map-wrapper map-wrapper__small">
                                  <div id="map_canvas" class="map-canvas">
                                    <iframe id="mapmodal_left_inner_block_title4" 
                         src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC3bDbxNOKRdamYrBDlTrInjywsZUzkY44
    &q={{ $page[0]->left_inner_block_title4 }}"
                         
                         width="100%" height="230" frameborder="0" style="border:0;"></iframe>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-actions">
                            <div class="col-md-offset-5 col-md-8"> <a href="javascript:void(0);" onClick="updateMapAddContact('gmap_geocoding_address3','left_inner_block_title4','save');" class="btn btn-red" data-dismiss="modal">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                          </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--END MODAL Edit Map-->
        
        
          <!--Modal Edit Google Map start-->
              <div id="modal-edit-map-block4" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                <div class="modal-dialog modal-wide-width">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                      <h4 id="modal-login-label3" class="modal-title">Edit Google Map</h4>
                    </div>
                    <div class="modal-body">
                      <div class="form">
                          <div class="form-group">
                            <label class="col-md-3 control-label">Search Google Map <span class='require'>*</span></label>
                            <div class="col-md-9">
                              <input type="text" id="gmap_geocoding_address4" class=" form-control" placeholder="Enter Address" value="{{ $page[0]->left_inner_block_title6 }}" />
                              <div class="margin-top-10px">
                                   <input type="button" id="gmap_geocoding_btn" onClick="updateMapAddContact('gmap_geocoding_address4','left_inner_block_title6','search');" class="btn btn-dark" value="Search" />
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label">Preview Map</label>
                            <div class="col-md-9"> 
                              <div class="map-wrapper map-wrapper__small">
                                  <div id="map_canvas" class="map-canvas">
                                                             <iframe id="mapmodal_left_inner_block_title6" 
                         src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC3bDbxNOKRdamYrBDlTrInjywsZUzkY44
    &q={{ $page[0]->left_inner_block_title6 }}"
                         
                         width="100%" height="230" frameborder="0" style="border:0;"></iframe>
                         
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-actions">
                            <div class="col-md-offset-5 col-md-8"> <a href="javascript:void(0);" onClick="updateMapAddContact('gmap_geocoding_address4','left_inner_block_title6','save');" class="btn btn-red" data-dismiss="modal">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                          </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--END MODAL Edit Map-->
        
      
        <!--Modal Edit Google Map start-->
              <div id="modal-edit-map-block5" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                <div class="modal-dialog modal-wide-width">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                      <h4 id="modal-login-label3" class="modal-title">Edit Google Map</h4>
                    </div>
                    <div class="modal-body">
                      <div class="form">
                          <div class="form-group">
                            <label class="col-md-3 control-label">Search Google Map <span class='require'>*</span></label>
                            <div class="col-md-9">
                              <input type="text" id="gmap_geocoding_address5" class=" form-control" placeholder="Enter Address" value="{{ $page[0]->left_inner_block_title9 }}" />
                              <div class="margin-top-10px">
                                   <input type="button" id="gmap_geocoding_btn" onClick="updateMapAddContact('gmap_geocoding_address5','left_inner_block_title9','search');" class="btn btn-dark" value="Search" />
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label">Preview Map</label>
                            <div class="col-md-9"> 
                              <div class="map-wrapper map-wrapper__small">
                                  <div id="map_canvas" class="map-canvas">
                                           <iframe id="mapmodal_left_inner_block_title9" 
                         src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC3bDbxNOKRdamYrBDlTrInjywsZUzkY44
    &q={{ $page[0]->left_inner_block_title9 }}"
                         
                         width="100%" height="230" frameborder="0" style="border:0;"></iframe>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-actions">
                            <div class="col-md-offset-5 col-md-8"> <a href="javascript:void(0);" onClick="updateMapAddContact('gmap_geocoding_address5','left_inner_block_title9','save');" class="btn btn-red" data-dismiss="modal">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                          </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--END MODAL Edit Map-->
      
      
      
        <!--Modal Edit Google Map start-->
              <div id="modal-edit-map-block6" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                <div class="modal-dialog modal-wide-width">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                      <h4 id="modal-login-label3" class="modal-title">Edit Google Map</h4>
                    </div>
                    <div class="modal-body">
                      <div class="form">
                          <div class="form-group">
                            <label class="col-md-3 control-label">Search Google Map <span class='require'>*</span></label>
                            <div class="col-md-9">
                              <input type="text" id="gmap_geocoding_address6" class=" form-control" placeholder="Enter Address" value="{{ $page[0]->left_inner_block_title12 }}" />
                              <div class="margin-top-10px">
                                   <input type="button" id="gmap_geocoding_btn" onClick="updateMapAddContact('gmap_geocoding_address6','left_inner_block_title12','search');" class="btn btn-dark" value="Search" />
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label">Preview Map</label>
                            <div class="col-md-9"> 
                              <div class="map-wrapper map-wrapper__small">
                                  <div id="map_canvas" class="map-canvas">
                                                             <iframe id="mapmodal_left_inner_block_title12" 
                         src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC3bDbxNOKRdamYrBDlTrInjywsZUzkY44
    &q={{ $page[0]->left_inner_block_title12 }}"
                         
                         width="100%" height="230" frameborder="0" style="border:0;"></iframe>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-actions">
                            <div class="col-md-offset-5 col-md-8"> <a href="javascript:void(0);" onClick="updateMapAddContact('gmap_geocoding_address6','left_inner_block_title12','save');" class="btn btn-red" data-dismiss="modal">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                          </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--END MODAL Edit Map-->
      
      
        <!--Modal Edit Google Map start-->
              <div id="modal-edit-map-block7" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                <div class="modal-dialog modal-wide-width">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                      <h4 id="modal-login-label3" class="modal-title">Edit Google Map</h4>
                    </div>
                    <div class="modal-body">
                      <div class="form">
                          <div class="form-group">
                            <label class="col-md-3 control-label">Search Google Map <span class='require'>*</span></label>
                            <div class="col-md-9">
                              <input type="text" id="gmap_geocoding_address7" class=" form-control" placeholder="Enter Address" value="{{ $page[0]->left_inner_block_title14 }}" />
                              <div class="margin-top-10px">
                                   <input type="button" id="gmap_geocoding_btn" onClick="updateMapAddContact('gmap_geocoding_address7','left_inner_block_title14','search');" class="btn btn-dark" value="Search" />
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label">Preview Map</label>
                            <div class="col-md-9"> 
                              <div class="map-wrapper map-wrapper__small">
                                  <div id="map_canvas" class="map-canvas">
                                    <iframe id="mapmodal_left_inner_block_title14" 
                         src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC3bDbxNOKRdamYrBDlTrInjywsZUzkY44
    &q={{ $page[0]->left_inner_block_title14 }}"
                         
                         width="100%" height="230" frameborder="0" style="border:0;"></iframe>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-actions">
                            <div class="col-md-offset-5 col-md-8"> <a href="javascript:void(0);" onClick="updateMapAddContact('gmap_geocoding_address7','left_inner_block_title14','save');" class="btn btn-red" data-dismiss="modal">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                          </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--END MODAL Edit Map-->
      
      
      
        <!--Modal Edit Google Map start-->
              <div id="modal-edit-map-block8" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                <div class="modal-dialog modal-wide-width">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                      <h4 id="modal-login-label3" class="modal-title">Edit Google Map</h4>
                    </div>
                    <div class="modal-body">
                      <div class="form">
                          <div class="form-group">
                            <label class="col-md-3 control-label">Search Google Map <span class='require'>*</span></label>
                            <div class="col-md-9">
                              <input type="text" id="gmap_geocoding_address8" class=" form-control" placeholder="Enter Address" value="{{ $page[0]->left_inner_block_title17 }}" />
                              <div class="margin-top-10px">
                                   <input type="button" id="gmap_geocoding_btn" onClick="updateMapAddContact('gmap_geocoding_address8','left_inner_block_title17','search');" class="btn btn-dark" value="Search" />
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label">Preview Map</label>
                            <div class="col-md-9"> 
                              <div class="map-wrapper map-wrapper__small">
                                  <div id="map_canvas" class="map-canvas">
                                    <iframe id="mapmodal_left_inner_block_title17" 
                         src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC3bDbxNOKRdamYrBDlTrInjywsZUzkY44
    &q={{ $page[0]->left_inner_block_title17 }}"
                         
                         width="100%" height="230" frameborder="0" style="border:0;"></iframe>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-actions">
                            <div class="col-md-offset-5 col-md-8"> <a href="javascript:void(0);" onClick="updateMapAddContact('gmap_geocoding_address8','left_inner_block_title17','save');" class="btn btn-red" data-dismiss="modal">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                          </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--END MODAL Edit Map-->
      
      
      
       <!--Modal Edit Google Map start-->
              <div id="modal-edit-map-block9" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                <div class="modal-dialog modal-wide-width">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                      <h4 id="modal-login-label3" class="modal-title">Edit Google Map</h4>
                    </div>
                    <div class="modal-body">
                      <div class="form">
                          <div class="form-group">
                            <label class="col-md-3 control-label">Search Google Map <span class='require'>*</span></label>
                            <div class="col-md-9">
                              <input type="text" id="gmap_geocoding_address9" class=" form-control" placeholder="Enter Address" value="{{ $page[0]->left_inner_block_title20 }}" />
                              <div class="margin-top-10px">
                                   <input type="button" id="gmap_geocoding_btn" onClick="updateMapAddContact('gmap_geocoding_address9','left_inner_block_title20','search');" class="btn btn-dark" value="Search" />
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="col-md-3 control-label">Preview Map</label>
                            <div class="col-md-9"> 
                              <div class="map-wrapper map-wrapper__small">
                                  <div id="map_canvas" class="map-canvas">
                                    <iframe id="mapmodal_left_inner_block_title20" 
                         src="https://www.google.com/maps/embed/v1/place?key=AIzaSyC3bDbxNOKRdamYrBDlTrInjywsZUzkY44
    &q={{ $page[0]->left_inner_block_title17 }}"
                         
                         width="100%" height="230" frameborder="0" style="border:0;"></iframe>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-actions">
                            <div class="col-md-offset-5 col-md-8"> <a href="javascript:void(0);" onClick="updateMapAddContact('gmap_geocoding_address9','left_inner_block_title20','save');" class="btn btn-red" data-dismiss="modal">Save &nbsp;<i class="fa fa-floppy-o"></i></a>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                          </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!--END MODAL Edit Map-->
      
           
              {{ Form::close() }}
           
              <!-- end portlet -->
            </div>
          </div>
        </div>
        
        @stop
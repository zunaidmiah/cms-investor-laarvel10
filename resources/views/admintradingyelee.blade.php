@extends('layouts.admin')
@section('content')
  <div class="row">
            <div class="col-lg-12">
              <h2>Yee Lee Trading Co. Sdn Bhd  <i class="fa fa-angle-right"></i> Edit</h2>
              <div class="clearfix"></div>
             <div class="pull-left margin-top-10px"> Last updated: <span class="text-blue">{{$page->created_at}}</span> </div>
              <div class="clearfix"></div>
              <p></p>
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Page Info</div>
                  <div class="clearfix"></div>
                  <span class="text-blue text-12px">You can edit the content by clicking the text section below.</span>
                  <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                </div>
           {{ Form::open(array('url' => 'admin/page/savepage','class'=> 'form-horizontal','method' => 'post','name' => 'millsave','id' => 'millsave')) }} 

                <div class="portlet-body">
                    <div contenteditable="true" id="left-block2-title">
                      {{ $page->left_block2_title }}
                    </div>
                    {{ Form::textarea('left_block2_title',$page->left_block2_title,array("id" => "textarea-left-block2-title","class" => "hideThisField")) }}
                </div>
              </div>
		   {{Form::hidden('preview','')}}  
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
                            <div class="format-icon-inner"> <i class="icon-tint"></i> </div>
                          </div>
                          <div class="entry-header-inner">
                            <div contenteditable="true" id="page-title">
                             {{ $page->page_title }}
                            </div>
                {{ Form::textarea('page_title',$page->page_title,array("id" => "textarea-page-title","class" => "hideThisField")) }}
                          </div>
                        </header>
                        <div class="hr"></div>
                        <div class="clearfix">
                          <div class="grid_8 alpha">
                            <!-- Project Description -->
                            <div class="project-desc project-desc__single">
                              <div contenteditable="true" id="left-block1-title">
                              {{ $page->left_block1_title }}
                              </div>
    {{ Form::textarea('left_block1_title',$page->left_block1_title ,array("id" => "textarea-left-block1-title","class" => "hideThisField")) }}

                              <div class="project-excerpt">
                                <div contenteditable="true" id="left-block2-content">
     {{ $page->left_block2_content }}
                                </div>
        {{ Form::textarea('left_block2_content',$page->left_block2_content ,array("id" => "textarea-left-block2-content","class" => "hideThisField")) }}

                                <div contenteditable="true" id="left-block3-content">
                                  {{ $page->left_block3_content }}
                              </div>
{{ Form::textarea('left_block3_content',$page->left_block3_content,array("id" => "textarea-left-block3-content","class" => "hideThisField")) }}

                            </div>
                            <!-- Project Description / End -->
                          </div>
<!-- end grid 8 -->

                          </div>
                          <div class="grid_4 omega">
                            <div contenteditable="true" id="right-block1-title">
                              {{ $page->right_block1_title }}
                            </div>
       {{ Form::textarea('right_block1_title',$page->right_block1_title,array("id" => "textarea-right-block1-title","class" => "hideThisField")) }}

                            
                            <div contenteditable="true" id="right-block1-content">
                           {{ $page->right_block1_content }}
                            </div>
      {{ Form::textarea('right_block1_content',$page->right_block1_content,array("id" => "textarea-right-block1-content","class" => "hideThisField")) }}

      <div contenteditable="true" id="right-block2-content">
           {{ $page->right_block2_content }}                           
                            </div>
            {{ Form::textarea('right_block2_content',$page->right_block2_content,array("id" => "textarea-right-block2-content","class" => "hideThisField")) }}

                            <br/>
                            <div contenteditable="true" id="right-block3-title">
         {{ $page->right_block3_title }}
                            </div>
   {{ Form::textarea('right_block3_title',$page->right_block3_title,array("id" => "textarea-right-block3-title","class" => "hideThisField")) }}

                            <div contenteditable="true" id="right-block3-content">
     {{ $page->right_block3_content }}
                            </div>
     {{ Form::textarea('right_block3_content',$page->right_block3_content,array("id" => "textarea-right-block3-content","class" => "hideThisField")) }}

                          </div>
<!-- end grid 4 -->
                        </div>
                        <!-- end clearfix -->
                        <!-- west malaysia contact start -->
                        <div contenteditable="true" id="left-inner-block-title1">
  {{ $page->left_inner_block_title1 }}
                        </div>
       {{ Form::textarea('left_inner_block_title1',$page->left_inner_block_title1,array("id" => "textarea-left-inner-block-title1","class" => "hideThisField")) }}

                        <div class="clearfix">
                          <div class="grid_6 alpha">
                              <div contenteditable="true" id="left-inner-block-title2">
   {{ $page->left_inner_block_title2 }}
                            </div>
 {{ Form::textarea('left_inner_block_title2',$page->left_inner_block_title2,array("id" => "textarea-left-inner-block-title2","class" => "hideThisField")) }}

 <div contenteditable="true" id="left-inner-block-content1">
    {{ $page->left_inner_block_content1 }}
                            </div>
  {{ Form::textarea('left_inner_block_content1',$page->left_inner_block_content1,array("id" => "textarea-left-inner-block-content1","class" => "hideThisField")) }}

                          </div>
<div class="grid_6 omega">
    <div contenteditable="true" id="left-inner-block-title3">
            {{ $page->left_inner_block_title3 }}
                            </div>
   {{ Form::textarea('left_inner_block_title3',$page->left_inner_block_title3,array("id" => "textarea-left-inner-block-title3","class" => "hideThisField")) }}

   <div contenteditable="true" id="left-inner-block-content3">
       {{ $page->left_inner_block_content3 }}

                            </div>
    {{ Form::textarea('left_inner_block_content3',$page->left_inner_block_content3,array("id" => "textarea-left-inner-block-content3","class" => "hideThisField")) }}

                          </div>
</div>
                        <br/>
                        <!-- end clearfix -->
                        <div class="margin-top-5px clearfix">
                          <div class="grid_6 alpha">
                              <div contenteditable="true" id="left-inner-block-title4">
              {{ $page->left_inner_block_title4 }}

                            </div>
       {{ Form::textarea('left_inner_block_title4',$page->left_inner_block_title4,array("id" => "textarea-left-inner-block-title4","class" => "hideThisField")) }}

       <div contenteditable="true" id="left-inner-block-content4">
             {{ $page->left_inner_block_content4 }}

                            </div>
                  {{ Form::textarea('left_inner_block_content4',$page->left_inner_block_content4,array("id" => "textarea-left-inner-block-content4","class" => "hideThisField")) }}

                          </div>
<div class="grid_6 omega">
    <div contenteditable="true" id="left-inner-block-title5">
                        {{ $page->left_inner_block_title5 }}
                            </div>
         {{ Form::textarea('left_inner_block_title5',$page->left_inner_block_title5,array("id" => "textarea-left-inner-block-title5","class" => "hideThisField")) }}

         <div contenteditable="true" id="left-inner-block-content5">
           {{ $page->left_inner_block_content5 }}
                            </div>
  {{ Form::textarea('left_inner_block_content5',$page->left_inner_block_content5,array("id" => "textarea-left-inner-block-content5","class" => "hideThisField")) }}

                          </div>
</div>
                        <br/>
                        <!-- end clearfix -->
                        <div class="margin-top-5px clearfix">
                          <div class="grid_6 alpha">
                              <div contenteditable="true" id="left-inner-block-title6">
                   {{ $page->left_inner_block_title6 }}
                            </div>
          {{ Form::textarea('left_inner_block_title6',$page->left_inner_block_title6,array("id" => "textarea-left-inner-block-title6","class" => "hideThisField")) }}

          <div contenteditable="true" id="left-inner-block-content6">
              {{ $page->left_inner_block_content6 }}
                            </div>
            {{ Form::textarea('left_inner_block_content6',$page->left_inner_block_content6,array("id" => "textarea-left-inner-block-content6","class" => "hideThisField")) }}

                          </div>
<div class="grid_6 omega">
    <div contenteditable="true" id="left-inner-block-title7">
                   {{ $page->left_inner_block_title7 }}
                            </div>
             {{ Form::textarea('left_inner_block_title7',$page->left_inner_block_title7,array("id" => "textarea-left-inner-block-title7","class" => "hideThisField")) }}

             <div contenteditable="true" id="left-inner-block-content7">
                          {{ $page->left_inner_block_content7 }}

                            </div>
   {{ Form::textarea('left_inner_block_content7',$page->left_inner_block_content7,array("id" => "textarea-left-inner-block-content7","class" => "hideThisField")) }}

                          </div>
</div>
                        <br/>
                        <!-- end clearfix -->
                        <div class="margin-top-5px clearfix">
                          <div class="grid_6 alpha">
                              <div contenteditable="true" id="left-inner-block-title8">
                         {{ $page->left_inner_block_title8 }}

                            </div>
                     {{ Form::textarea('left_inner_block_title8',$page->left_inner_block_title8,array("id" => "textarea-left-inner-block-title8","class" => "hideThisField")) }}

                     <div contenteditable="true" id="left-inner-block-content8">
                       {{ $page->left_inner_block_content8 }}
                            </div>
               {{ Form::textarea('left_inner_block_content8',$page->left_inner_block_content8,array("id" => "textarea-left-inner-block-content8","class" => "hideThisField")) }}

                          </div>
</div>
                        <br/>
                        <!-- end clearfix -->
                        <!-- west malaysia contacts end -->
                        <!-- east coast malaysia contact start -->
                        <div contenteditable="true" id="left-inner-block-title9">
                           {{ $page->left_inner_block_title9 }}
                        </div>
                           {{ Form::textarea('left_inner_block_title9',$page->left_inner_block_title9,array("id" => "textarea-left-inner-block-title9","class" => "hideThisField")) }}

                        <div class="clearfix">
                          <div class="grid_6 alpha">
                              <div contenteditable="true" id="left-inner-block-title10">
                                         {{ $page->left_inner_block_title10 }}

                            </div>
  {{ Form::textarea('left_inner_block_title10',$page->left_inner_block_title10,array("id" => "textarea-left-inner-block-title10","class" => "hideThisField")) }}

  <div contenteditable="true" id="left-inner-block-content10">
                          {{ $page->left_inner_block_content10 }}
                            </div>
                {{ Form::textarea('left_inner_block_content10',$page->left_inner_block_content10,array("id" => "textarea-left-inner-block-content10","class" => "hideThisField")) }}

                          </div>
<div class="grid_6 omega">
    <div contenteditable="true" id="left-inner-block-title11">
                    {{ $page->left_inner_block_title11 }}
                            </div>
     {{ Form::textarea('left_inner_block_title11',$page->left_inner_block_title11,array("id" => "textarea-left-inner-block-title11","class" => "hideThisField")) }}

     <div contenteditable="true" id="left-inner-block-content12">
                                 {{ $page->left_inner_block_content12 }}

                            </div>
                     {{ Form::textarea('left_inner_block_content12',$page->left_inner_block_content12,array("id" => "textarea-left-inner-block-content12","class" => "hideThisField")) }}

                          </div>
</div>
                        <br/>
                        <!-- end clearfix -->
                        <div class="margin-top-5px clearfix">
                          <div class="grid_6 alpha">
                              <div contenteditable="true" id="left-inner-block-title13">
         {{ $page->left_inner_block_title13 }}
                            </div>
       {{ Form::textarea('left_inner_block_title13',$page->left_inner_block_title13,array("id" => "textarea-left-inner-block-title13","class" => "hideThisField")) }}

       <div contenteditable="true" id="left-inner-block-content13">
        {{ $page->left_inner_block_content13 }}
                            </div>
         {{ Form::textarea('left_inner_block_content13',$page->left_inner_block_content13,array("id" => "textarea-left-inner-block-content13","class" => "hideThisField")) }}

                          </div>
</div>
                        <br/>
                        <!-- end clearfix -->
                        <!-- east coast malaysia contacts end -->
                        <!-- east malaysia contact start -->
                        <div contenteditable="true" id="left-inner-block-title14">
         {{ $page->left_inner_block_title14 }}

                        </div>
          {{ Form::textarea('left_inner_block_title14',$page->left_inner_block_title14,array("id" => "textarea-left-inner-block-title14","class" => "hideThisField")) }}

                        <div class="clearfix">
                          <div class="grid_6 alpha">
                              <div contenteditable="true" id="left-inner-block-title15">
                  {{ $page->left_inner_block_title15 }}
                            </div>
                {{ Form::textarea('left_inner_block_title15',$page->left_inner_block_title15,array("id" => "textarea-left-inner-block-title15","class" => "hideThisField")) }}

                <div contenteditable="true" id="left-inner-block-content15">
                     {{ $page->left_inner_block_content15 }}
                            </div>
                       {{ Form::textarea('left_inner_block_content15',$page->left_inner_block_content15,array("id" => "textarea-left-inner-block-content15","class" => "hideThisField")) }}

                          </div>
<div class="grid_6 omega">
    <div contenteditable="true" id="left-inner-block-title16">
              {{ $page->left_inner_block_title16 }}
                            </div>
                   {{ Form::textarea('left_inner_block_title16',$page->left_inner_block_title16,array("id" => "textarea-left-inner-block-title16","class" => "hideThisField")) }}

                   <div contenteditable="true" id="left-inner-block-content16">
                  {{ $page->left_inner_block_content16 }}
                            </div>
                           {{ Form::textarea('left_inner_block_content16',$page->left_inner_block_content16,array("id" => "textarea-left-inner-block-content16","class" => "hideThisField")) }}

                          </div>
</div>
                        <br/>
                        <!-- end clearfix -->
                        <div class="margin-top-5px clearfix">
                          <div class="grid_6 alpha">
                              <div contenteditable="true" id="left-inner-block-title17">
   {{ $page->left_inner_block_title17 }}
                            </div>
                      {{ Form::textarea('left_inner_block_title17',$page->left_inner_block_title17,array("id" => "textarea-left-inner-block-title17","class" => "hideThisField")) }}

                      <div contenteditable="true" id="left-inner-block-content17">
           {{ $page->left_inner_block_content17 }}
                            </div>
                               {{ Form::textarea('left_inner_block_content17',$page->left_inner_block_content17,array("id" => "textarea-left-inner-block-content17","class" => "hideThisField")) }}

                          </div>
<div class="grid_6 omega">
    <div contenteditable="true" id="left-inner-block-title18">
     {{ $page->left_inner_block_title18 }}

                            </div>
{{ Form::textarea('left_inner_block_title18',$page->left_inner_block_title18,array("id" => "textarea-left-inner-block-title18","class" => "hideThisField")) }}

<div contenteditable="true" id="left-inner-block-content18">
    {{ $page->left_inner_block_content18 }}
                            </div>
   {{ Form::textarea('left_inner_block_content18',$page->left_inner_block_content18,array("id" => "textarea-left-inner-block-content18","class" => "hideThisField")) }}

                          </div>
</div>
                        <br/>
                        <!-- end clearfix -->
                        <div class="margin-top-5px clearfix">
                          <div class="grid_6 alpha">
                              <div contenteditable="true" id="left-inner-block-title19">
   {{ $page->left_inner_block_title19 }}
                            </div>
    {{ Form::textarea('left_inner_block_title19',$page->left_inner_block_title19,array("id" => "textarea-left-inner-block-title19","class" => "hideThisField")) }}

    <div contenteditable="true" id="left-inner-block-content19">
       {{ $page->left_inner_block_content19 }}
                            </div>
      {{ Form::textarea('left_inner_block_content19',$page->left_inner_block_content19,array("id" => "textarea-left-inner-block-content19","class" => "hideThisField")) }}

                          </div>
<div class="grid_6 omega">
    <div contenteditable="true" id="left-inner-block-title20">
       {{ $page->left_inner_block_title20 }}
                            </div>
       {{ Form::textarea('left_inner_block_title20',$page->left_inner_block_title20,array("id" => "textarea-left-inner-block-title20","class" => "hideThisField")) }}

       <div contenteditable="true" id="left-inner-block-content20">
      {{ $page->left_inner_block_content20 }}
                            </div>
  {{ Form::textarea('left_inner_block_content20',$page->left_inner_block_content20,array("id" => "textarea-left-inner-block-content20","class" => "hideThisField")) }}

                          </div>
</div>
                        <!-- end clearfix -->
                        <!-- east malaysia contacts end -->
                        <div class="hr"></div>
                        <!-- Related Projects -->
                        <div class="clearfix">
                            <div contenteditable="true" id="left-inner-block-title21">
                       {{ $page->left_inner_block_title21 }}
                          </div>
      {{ Form::textarea('left_inner_block_title21',$page->left_inner_block_title21 ,array("id" => "textarea-left-inner-block-title21","class" => "hideThisField")) }}

                        </div>
                      </div>
</div>
                    <!-- end clearfix -->
                  </div>
                </div>
                    {{ Form::hidden('type','tdyelee',array('id' => 'type')) }}
                <!-- save button start -->
                <div class="form-actions none-bg">  <a href="javascript:void(0);" class="btn btn-red" onclick="Addsavepage('millsave','trading/tradingdivision/yelee');">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp; 
                    <button type="submit" class="btn btn-blue" >Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></button>&nbsp; <a class="btn btn-green" href="#">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                <!-- save button end -->
              </div>
                  
 {{ Form::close() }}             
              <!-- End portlet-->
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Sliding Banner Images Listing</div>
                  <br>
                  <p class="margin-top-10px"></p>
                 <a class="btn btn-success" data-toggle="modal" data-target="#modal-add-new-banner" href="#">Add New Banner &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                  <div class="btn-group">
                    <button class="btn btn-primary" type="button">Delete</button>
                    <button class="btn btn-red dropdown-toggle" data-toggle="dropdown" type="button"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                    <ul class="dropdown-menu" role="menu">
                      <li><a data-toggle="modal" data-target="#modal-delete-selected-process" href="#" class="deleteid" rel="{{url();}}/admin/page/deletemultiplebanner" rev="modal-delete-selected-process">Delete selected item(s)</a></li>
                      <li class="divider"></li>
                      <li><a data-toggle="modal" data-target="#modal-delete-all-sbanners" href="#">Delete all</a></li>
                    </ul>
                  </div>
                  &nbsp;
                  <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                  <!--Modal Add New Banner start-->
                  <div class="modal fade" aria-hidden="true" aria-labelledby="modal-login-label" role="dialog" tabindex="-1" id="modal-add-new-banner">
                    <div class="modal-dialog modal-wide-width">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button class="close" aria-hidden="true" data-dismiss="modal" type="button">×</button>
                          <h4 class="modal-title" id="modal-login-label3">Add New Banner Image</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form">
                      {{ Form::open(array('url' => 'admin/trading/addslidingbanner','class'=> 'form-horizontal','method' => 'post','files' => true)) }}
                              <div class="form-group">
                                <label class="col-md-4 control-label">Status</label>
                                <div class="col-md-8">
                                 <div data-on="success" data-off="primary" class="make-switch">
 {{Form::checkbox('active', 1 ,array('id'=>'active','class' => 'form-control'))}}

                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-4 control-label">Title <span class="require">*</span></label>
                                <div class="col-md-8">
               {{ Form::textarea('title','',array('id' => 'title','class' => 'form-control', 'rows' => '2' )) }}
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-4 control-label">Display Order <span class="require">*</span></label>
                                <div class="col-md-2">
               {{ Form::text('display_order','',array('id' => 'display_order','class' => 'form-control', 'placeholder' => '1' )) }} 
              
                                </div>
                                <div class="col-md-8 pull-right"> <span class="help-block">Display order is to determine the item appearing sequence in the website.</span> </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-4 control-label">Upload Image <span class="require">*</span></label>
                                <div class="col-md-8">
                                  <div class="text-15px margin-top-10px">
               {{ Form::file('bannerimage','',array('id' => 'bannerimage','class' => 'form-control' )) }} 
                                    <br>
                                    <span class="help-block">(Image dimension: 920 x 300 pixels, JPEG/GIF/PNG only, Max. 2MB) </span> </div>
                                </div>
                              </div>
                              <div class="form-actions">
               {{ Form::hidden('type','tdyelee',array('id' => 'type')) }}
                                 <div class="col-md-offset-5 col-md-8"> 
                                    <button type="submit" class="btn btn-red" >Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp; <a class="btn btn-green" data-dismiss="modal" href="#">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                              </div>
               {{ Form::close() }}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--END MODAL Add New Banner-->
                  <!--Modal delete selected items start-->
                  <div class="modal fade" aria-hidden="true" aria-labelledby="modal-login-label" role="dialog" tabindex="-1" id="modal-delete-selected-process">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button class="close" aria-hidden="true" data-dismiss="modal" type="button">×</button>
                          <h4 class="modal-title" id="modal-login-label4"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete the selected item(s)? </h4>
                        </div>
                        <div class="modal-body">
                           <div class="form-actions">
                            <div class="col-md-offset-4 col-md-8"> <a class="btn btn-red" href="#">Yes &nbsp;<i class="fa fa-check"></i></a>&nbsp; <a class="btn btn-green" data-dismiss="modal" href="#">No &nbsp;<i class="fa fa-times-circle"></i></a> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- modal delete selected items end -->
                  <!--Modal delete all items start-->
                  <div class="modal fade" aria-hidden="true" aria-labelledby="modal-login-label" role="dialog" tabindex="-1" id="modal-delete-all-sbanners">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button class="close" aria-hidden="true" data-dismiss="modal" type="button">×</button>
                          <h4 class="modal-title" id="modal-login-label4"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete all items? </h4>
                        </div>
                        <div class="modal-body">
                          <div class="form-actions">
                            <div class="col-md-offset-4 col-md-8"> {{ Form::open(array('url' => 'admin/trading/admindeleteallbanner', 'method' => 'post', 'name' => 'deleteallpressrelease', 'id' => 'deleteallpressrelease', 'class' => 'form-horizontal','files' => true)) }} <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> 
                                      {{ Form::close() }} </div>
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
                  <div class="pull-right"> <a class="btn btn-danger updateOrder" href="javascript:void(0);" >Update Display Order &nbsp;<i class="fa fa-refresh"></i></a> </div>
                  <div class="clearfix"></div>
                  <br>
                  <br>
                  <table class="table table-hover table-striped">
                    <thead>
                      <tr>
                        <th width="1%"><input type="checkbox"></th>
                        <th>#</th>
                        <th>Status</th>
                        <th>Title</th>
                        <th width="12%">Display Order</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                   @foreach ($slidingbanners as $k => $slidingbanner)   
                   <tr>
                        <td><input type="checkbox"  class="chkNumber" value="{{$slidingbanner->id}}"></td>
                        <td>{{ $k+1 }}</td>
                        <td>
                        @if ( $slidingbanner->active == 1)
                            <span class="label label-sm label-success">Active</span>
                        @else
                            <span class="label label-sm label-red">In Active</span>
                        @endif
                        </td>
                        <td>{{ $slidingbanner->title }}</td>
                        <td>
					 <input type="hidden" id="updateOrdermname" value="slidingbanner" />
                    {{ Form::text('display_order$slidingbanner->id',$slidingbanner->display_order,array('id' => $slidingbanner->id,'class' => 'display_order form-control')) }}   
                   </td>
                        <td><a title="" data-toggle="modal" data-target="#modal-edit-banner{{$slidingbanner->id}}" data-placement="top" data-hover="tooltip" href="#" data-original-title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a data-toggle="modal" data-target="#modal-delete-process{{$slidingbanner->id}}" title="" data-placement="top" data-hover="tooltip" href="#" data-original-title="Delete"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                            <!--Modal Edit Banner start-->
                            <div class="modal fade" aria-hidden="true" aria-labelledby="modal-login-label" role="dialog" tabindex="-1" id="modal-edit-banner{{ $slidingbanner->id }}">
                              <div class="modal-dialog modal-wide-width">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button class="close" aria-hidden="true" data-dismiss="modal" type="button">×</button>
                                    <h4 class="modal-title" id="modal-login-label3">Edit Banner Image</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="form">
    {{ Form::open(array('url' => 'admin/trading/editslidingbanner','class'=> 'form-horizontal','method' => 'post','files' => true)) }}

                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Status</label>
                                          <div class="col-md-8">
                                          <div data-on="success" data-off="primary" class="make-switch">
  
   {{Form::checkbox('active', $slidingbanner->active, $slidingbanner->active ,array('id'=>'active','class' => 'form-control'))}}
  
   </div>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Title <span class="require">*</span></label>
                                          <div class="col-md-8">
  
 {{ Form::textarea('title',$slidingbanner->title, array('id' => 'title','class' => 'form-control', 'rows' => '2')) }}                                      
      
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Display Order <span class="require">*</span></label>
                                          <div class="col-md-2">
 {{ Form::text('display_order',$slidingbanner->display_order, array('id' => 'display_order','class' => 'form-control')) }}                                      

                                          </div>
                                          <div class="col-md-8 pull-right"> <span class="help-block">Display order is to determine the item appearing sequence in the website.</span> </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Upload Image <span class="require">*</span></label>
                                          <div class="col-md-8">
                                            <div class="text-15px margin-top-10px"> 
{{HTML::image($slidingbanner->bannerimage->url('medium'),'bannerimage',array( 'class' => 'img-responsive' ))}}
<br>
{{ Form::file('bannerimage',array('id' => 'bannerimage')) }}        
                                                <br>
                                                <span class="help-block">(Image dimension: 920 x 300 pixels, JPEG/GIF/PNG only, Max. 2MB) </span> </div>
                                          </div>
                                        </div>
                                        <div class="form-actions">
 {{ Form::hidden('type','tdyelee',array('id' => 'type')) }}
 {{ Form::hidden('bannerid',$slidingbanner->id,array('id' => 'bannerid')) }}
                                            <div class="col-md-offset-5 col-md-8"> <button type="submit" class="btn btn-red" >Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp; <a class="btn btn-green" data-dismiss="modal" href="#">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                        </div>
                    {{ Form::close() }}
                                    </div>
                                  </div>
                                </div>
                              </div>
                          </div>
                          <!--END MODAL Edit Processes-->
                            <!--Modal delete start-->
                            <div class="modal fade" aria-hidden="true" aria-labelledby="modal-login-label" role="dialog" tabindex="-1" id="modal-delete-process{{$slidingbanner->id}}">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button class="close" aria-hidden="true" data-dismiss="modal" type="button">×</button>
                                    <h4 class="modal-title" id="modal-login-label4"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this item? </h4>
                                  </div>
                                  <div class="modal-body">
                                    <p><strong>#{{$slidingbanner->id}}:</strong> {{$slidingbanner->title}}</p>
                                    <div class="form-actions">
                                      <div class="col-md-offset-4 col-md-8"> {{ Form::open(array('url' => 'admin/trading/admindeletebanner', 'method' => 'post', 'name' => 'deletepressrelease'.$slidingbanner->id, 'id' => 'deletepressrelease'.$slidingbanner->id, 'class' => 'form-horizontal','files' => true)) }}{{ Form::hidden('bannerid',$slidingbanner->id) }} <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> 
                                      {{ Form::close() }} </div>
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
                        <td colspan="6"></td>
                      </tr>
                    </tfoot>
                  </table>
                       <div class="tool-footer text-right">
                    <p class="pull-left">Showing {{ $slidingbanners->getFrom() }} to {{ $slidingbanners->getTo() }} of {{ $slidingbanners->getTotal() }} entries</p>
                    {{ $slidingbanners->appends(Input::except('page'))->links() }}
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
             <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Brands Listing</div>
                  <br/>
                  <p class="margin-top-10px"></p>
                  <a href="#" data-target="#modal-add-new-process" data-toggle="modal" class="btn btn-success">Add New &nbsp;<i class="fa fa-plus"></i></a>&nbsp;
                  <div class="btn-group">
                    <button type="button" class="btn btn-primary">Delete</button>
                    <button type="button" data-toggle="dropdown" class="btn btn-red dropdown-toggle"><span class="caret"></span><span class="sr-only">Toggle Dropdown</span></button>
                    <ul role="menu" class="dropdown-menu">
                      <li><a href="#" data-target="#modal-delete-selected" data-toggle="modal"  class="deleteid" rel="{{url();}}/admin/page/deletemultiplebrandlisting" rev="modal-delete-selected">Delete selected item(s)</a></li>
                      <li class="divider"></li>
                      <li><a href="#" data-target="#modal-delete-all-brands" data-toggle="modal">Delete all</a></li>
                    </ul>
                  </div>
                   
<div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                  <!--Modal Add New Process start-->
                  <div id="modal-add-new-process" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog modal-wide-width">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label3" class="modal-title">Add New</h4>
                        </div>
                        <div class="modal-body">
                          <div class="form">
{{ Form::open(array('url' => 'admin/trading/addbrands', 'method' => 'post', 'class' => 'form-horizontal','files' => true)) }}      

                              <div class="form-group">
                                <label class="col-md-4 control-label">Status</label>
                                <div class="col-md-8">
                                  <div data-on="success" data-off="primary" class="make-switch">
 {{Form::checkbox('active', 1,array('id'=>'active','class' => 'form-control'))}}

                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-4 control-label">Title <span class='require'>*</span></label>
                                <div class="col-md-8">
       {{Form::textarea('title', '',array('id'=>'title','class' => 'form-control','rows' => '2'))}}
                                   </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-4 control-label">Short Description </label>
                                <div class="col-md-8">
      {{Form::textarea('short_description', '',array('id'=>'short_description','class' => 'form-control','rows' => '3'))}}
                                </div>
                              </div>
                              <div class="form-group has-error">
                                <label class="col-md-4 control-label">URL</label>
                                <div class="col-md-6">
                                  <div class="input-icon"><i class="fa fa-link"></i>
        {{Form::text('url', '',array('id'=>'url','class' => 'form-control','placeholder' => 'http://'))}}
        <span class="help-block">Please enter the page link to link it to the sub page.</span> </div>
                                </div>
                                <div class="col-md-2">
                                  <div class="popover popover-validator margin-top-5px right">
                                    <div class="arrow"></div>
                                    <div class="popover-content">
                                      <p class="mbn">URL is empty!</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-4 control-label">Display Order <span class='require'>*</span></label>
                                <div class="col-md-2">
     {{Form::text('display_order', '',array('id'=>'display_order','class' => 'form-control','placeholder' => '1'))}}
                                </div>
                                <div class="col-md-8 pull-right"> <span class="help-block">Display order is to determine the item appearing sequence in the website.</span> </div>
                              </div>
                              <div class="form-group">
                                <label class="col-md-4 control-label">Upload Image <span class='require'>*</span></label>
                                <div class="col-md-8">
                                  <div class="text-15px margin-top-10px">
  {{Form::file('bannerimage', '',array('id'=>'bannerimage','class' => 'form-control'))}}

                                    <br/>
                                    <span class="help-block">(Image dimension: 200 x 208 pixels, JPEG/GIF/PNG only, Max. 2MB) </span> </div>
                                </div>
                              </div>
 {{ Form::hidden('type','tdyelee',array('id' => 'type')) }}
                              <div class="form-actions">
                                <div class="col-md-offset-5 col-md-8"><button type="submit" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                              </div>
                        {{Form::close()}}
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--END MODAL Add New Process-->
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
                  <div id="modal-delete-all-brands" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                          <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete all items? </h4>
                        </div>
                        <div class="modal-body">
                          <div class="form-actions">
                            <div class="col-md-offset-4 col-md-8"> {{ Form::open(array('url' => 'admin/trading/admindeleteallbrands', 'method' => 'post', 'name' => 'deleteallpressrelease', 'id' => 'deleteallpressrelease', 'class' => 'form-horizontal','files' => true)) }} <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> 
                                      {{ Form::close() }} </div>
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
                     @if($cntarray2 != 0 )
                   
                    {{ Form::open(array('url' => Request::url(),'class'=> 'form-horizontal','method' => 'get')) }}
	{{ Form::select('noperpage2', $cntarray2, Input::get('noperpage2'),array('class' => 'form-control','onchange' => 'this.form.submit();')) }}
	 {{ Form::close() }}
         
        
                      &nbsp;
                      <label class="control-label">Records per page</label>
                       @endif
                    </div>
                  </div>
                  <div class="pull-right"> <a class="btn btn-danger updateOrder1" href="javascript:void(0);">Update Display Order &nbsp;<i class="fa fa-refresh"></i></a> </div>
                  <div class="clearfix"></div>
                  <br/>
                  <br/>
                  <table class="table table-hover table-striped">
                    <thead>
                      <tr>
                        <th width="1%"><input type="checkbox"/></th>
                        <th>#</th>
                        <th>Status</th>
                        <th>Title</th>
                        <th width="12%">Display Order</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach($corebusinesses as $k => $corebusiness)
                      <tr>
                        <td><input type="checkbox" class="chkNumber" value="{{$corebusiness->id}}"/></td>
                        <td>{{ $k + 1 }}</td>
                        <td>  @if($corebusiness->active == 1)
                            <span class="label label-sm label-success">Active</span>
                            @else
                             <span class="label label-sm label-red">In Active</span>
                            @endif</td>
                        <td>{{ $corebusiness->title }}</td>
                        <td>
						<input type="hidden" id="updateOrder1mname" value="brandslisting" />
     {{Form::text('display_order', $corebusiness->display_order ,array('id'=>$corebusiness->id,'class' => 'display_order1 form-control','placeholder' => '1'))}}

                        </td>
                        <td><a href="#" data-hover="tooltip" data-placement="top" data-target="#modal-edit-processes{{ $corebusiness->id }}" data-toggle="modal" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Delete" data-target="#modal-delete-processbrand{{$corebusiness->id}}" data-toggle="modal"><span class="label label-sm label-red"><i class="fa fa-trash-o"></i></span></a>
                            <!--Modal Edit Processes start-->
                            <div id="modal-edit-processes{{ $corebusiness->id }}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                              <div class="modal-dialog modal-wide-width">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                    <h4 id="modal-login-label3" class="modal-title">Edit</h4>
                                  </div>
                                  <div class="modal-body">
                                    <div class="form">
{{ Form::open(array('url' => 'admin/trading/editbrands', 'name' => 'editbrands', 'id' => 'editbrands', 'method' => 'post', 'class' => 'form-horizontal','files' => true)) }}      

                              <div class="form-group">
                                <label class="col-md-4 control-label">Status</label>
                                <div class="col-md-8">
                                  <div data-on="success" data-off="primary" class="make-switch">
 {{Form::checkbox('active', $corebusiness->active, $corebusiness->active ,array('id'=>'active','class' => 'form-control'))}}
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Title <span class='require'>*</span></label>
                                          <div class="col-md-8">
                                          {{Form::textarea('title', $corebusiness->title ,array('id'=>'title','class' => 'form-control','rows' => '2'))}}
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Short Description</label>
                                          <div class="col-md-8">
    {{Form::textarea('short_description', $corebusiness->short_description ,array('id'=>'short_description','class' => 'form-control','rows' => '3'))}}                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Website URL</label>
                                          <div class="col-md-6">
                                            <div class="input-icon"><i class="fa fa-link"></i>
    {{Form::text('url', $corebusiness->url ,array('id'=>'url','class' => 'form-control'))}}                                          </div>
                                                <span class="help-block">Please enter the page link to link it to the sub page.</span> </div>
                                          </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Display Order <span class='require'>*</span></label>
                                          <div class="col-md-2">
     {{Form::text('display_order', $corebusiness->display_order ,array('id'=>'display_order','class' => 'form-control'))}} 
                                          </div>
                                          <div class="col-md-8 pull-right"> <span class="help-block">Display order is to determine the item appearing sequence in the website.</span> </div>
                                        </div>
                                        <div class="form-group">
                                          <label class="col-md-4 control-label">Upload Image <span class='require'>*</span></label>
                                          <div class="col-md-8">
                                            <div class="text-15px margin-top-10px">    
                                         {{HTML::image($corebusiness->bannerimage->url('thumb'),'bannerimage',array( 'class' => 'img-responsive' ));}}
                                              <br/>
                                         {{Form::file('bannerimage', null,array('id'=>'bannerimageInput'))}}
                                            <br/>
                                            <span class="help-block">(Image dimension: min. 200 x 208 pixels, JPEG/GIF/PNG only, Max. 1MB) </span> </div>
                                        </div>
                                      </div>
                                      {{ Form::hidden('brandid',$corebusiness->id) }}
                                      {{ Form::hidden('type','tdyelee',array('id' => 'type')) }}
                                      <div class="form-actions">
                                        <div class="col-md-offset-5 col-md-8"> <button type="submit" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button> <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                                      </div>
                                    
                                    {{ Form::close() }}        
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          <!--END MODAL Edit Processes-->
                            <!--Modal delete start-->
                            <div id="modal-delete-processbrand{{$corebusiness->id}}" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="true" class="modal fade">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                                    <h4 id="modal-login-label4" class="modal-title"><a href=""><i class="fa fa-exclamation-triangle"></i></a> Are you sure you want to delete this item? </h4>
                                  </div>
                                  <div class="modal-body">
                                    <p><strong>#{{$corebusiness->id}}:</strong> {{$corebusiness->title}}</p>
                                    <div class="form-actions">
                                      <div class="col-md-offset-4 col-md-8"> {{ Form::open(array('url' => 'admin/trading/admindeletebrand', 'method' => 'post', 'name' => 'deletepressrelease'.$corebusiness->id, 'id' => 'deletepressrelease'.$corebusiness->id, 'class' => 'form-horizontal','files' => true)) }}{{ Form::hidden('brandid',$corebusiness->id) }} <button type="submit" class="btn btn-red">Yes &nbsp;<i class="fa fa-check"></i></button>&nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">No &nbsp;<i class="fa fa-times-circle"></i></a> 
                                      {{ Form::close() }} </div>
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
                        <td colspan="6"></td>
                      </tr>
                    </tfoot>
                  </table>
                    <div class="tool-footer text-right">
                    <p class="pull-left">Showing {{ $corebusinesses->getFrom() }} to {{ $corebusinesses->getTo() }} of {{ $corebusinesses->getTotal() }} entries</p>
                    {{ $corebusinesses->appends(Input::except('page'))->links() }}
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
              <!-- end portlet -->
            </div>
          </div>
@stop
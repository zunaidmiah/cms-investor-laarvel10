@extends('layouts.admin')
@section('content')
  <!--<div class="page-content">-->
          <div class="row">
            <div class="col-lg-12">
              <h2>Ratio Analysis <i class="fa fa-angle-right"></i> Edit</h2>
              <div class="clearfix"></div>
              
               <div class="pull-left margin-top-10px">
              	Last updated: <span class="text-blue">{{ date("d F Y",strtotime($page[0]->updated_at)) }} @ {{ date("g:i A",strtotime($page[0]->updated_at)) }}</span>
              </div>
              
              <!--<div class="pull-right"> 
              	<a href="#" class="btn btn-red btn-lg">Update Stock Info &nbsp;<i class="fa fa-refresh"></i></a> 
              </div>-->
              <div class="clearfix"></div>
              <p></p>
                {{ Form::open(array('url' => 'admin/page/savepage','class'=> 'form-horizontal','method' => 'post','name' => 'corporategeneral','id' => 'corporategeneral')) }} 
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
				  <div contenteditable="true" id="page-title">
                  {{ $page[0]->page_title }}
                  </div>
                  {{ Form::textarea('page_title',$page[0]->page_title,array("id" => "textarea-page-title","class" => "hideThisField")) }}
                  
                 </div>
              </div>
              <div class="clearfix"></div>
             <div class="portlet">
                       <div class="portlet-header">
                          <div class="caption">Page Content</div><br/>
                          <span class="text-blue text-12px">You can edit the content by clicking the text section below.</span>
                          <div class="tools"><i class="fa fa-chevron-up"></i></div>
                       </div>
                       
                       <div class="portlet-body">
                       	  <div contenteditable="true" id="left-block1-title">
                             {{ $page[0]->left_block1_title }}
                            </div>
{{ Form::textarea('left_block1_title',$page[0]->left_block1_title,array("id" => "textarea-left-block1-title","class" => "hideThisField")) }}
	  
                          <div class="table-responsive">
                           <div contenteditable="true" id="left-block1-content">
                         {{ $page[0]->left_block1_content }}
 </div>
{{ Form::textarea('left_block1_content',$page[0]->left_block1_content,array("id" => "textarea-left-block1-content","class" => "hideThisField")) }}
                          </div>
                          <!-- end responsive table -->
                          
                          
                        <div contenteditable="true" id="left-block2-title">
                         {{ $page[0]->left_block2_title }}
 </div>
{{ Form::textarea('left_block2_title',$page[0]->left_block2_title,array("id" => "textarea-left-block2-title","class" => "hideThisField")) }}
	  
                          <div class="table-responsive">
                         <div contenteditable="true" id="left-block2-content">
                         {{ $page[0]->left_block2_content }}
                            </div>
               {{ Form::textarea('left_block2_content',$page[0]->left_block2_content,array("id" => "textarea-left-block2-content","class" => "hideThisField")) }}
                          </div>
                          <!-- end responsive table -->
                          
                          
                         <div contenteditable="true" id="left-block3-title">
                         {{ $page[0]->left_block3_title }}
                            </div>
               {{ Form::textarea('left_block3_title',$page[0]->left_block3_title,array("id" => "textarea-left-block3-title","class" => "hideThisField")) }}
                          <div class="table-responsive">
                          <div contenteditable="true" id="left-block3-content">
                         {{ $page[0]->left_block3_content }}
                            </div>
               {{ Form::textarea('left_block3_content',$page[0]->left_block3_content,array("id" => "textarea-left-block3-content","class" => "hideThisField")) }}
                          </div>
                          <!-- end responsive table -->
                          
                          
                          <div contenteditable="true" id="left-inner-block-title1">
                        {{ $page[0]->left_inner_block_title1 }}
                            </div>
               {{ Form::textarea('left_inner_block_title1',$page[0]->left_inner_block_title1,array("id" => "textarea-left-inner-block-title1","class" => "hideThisField")) }}
	  
                          <div class="table-responsive">
                            <div contenteditable="true" id="left-inner-block-content1">
                           {{ $page[0]->left_inner_block_content1 }}
                            </div>
{{ Form::textarea('left_inner_block_content1',$page[0]->left_inner_block_content1,array("id" => "textarea-left-inner-block-content1","class" => "hideThisField")) }}
                          </div>
                          <!-- end responsive table -->
                          
                          
                        <div contenteditable="true" id="left-inner-block-title2">
                        {{ $page[0]->left_inner_block_title2 }}
                            </div>
               {{ Form::textarea('left_inner_block_title2',$page[0]->left_inner_block_title2,array("id" => "textarea-left-inner-block-title2","class" => "hideThisField")) }}
	  
                          <div class="table-responsive">
                           <div contenteditable="true" id="left-inner-block-content2">
                           {{ $page[0]->left_inner_block_content2 }}
                            </div>
{{ Form::textarea('left_inner_block_content2',$page[0]->left_inner_block_content2,array("id" => "textarea-left-inner-block-content2","class" => "hideThisField")) }}
                          </div>
                          <!-- end responsive table -->
                          
                          
                        <div contenteditable="true" id="left-inner-block-title3">
                        {{ $page[0]->left_inner_block_title3 }}
                            </div>
               {{ Form::textarea('left_inner_block_title3',$page[0]->left_inner_block_title3,array("id" => "textarea-left-inner-block-title3","class" => "hideThisField")) }}
	  
                          <div class="table-responsive">
                             <div contenteditable="true" id="left-inner-block-content3">
                           {{ $page[0]->left_inner_block_content3 }}
                            </div>
{{ Form::textarea('left_inner_block_content3',$page[0]->left_inner_block_content3,array("id" => "textarea-left-inner-block-content3","class" => "hideThisField")) }}
                          </div>
                          <!-- end responsive table -->
                          
                          
                          <div class="table-responsive">
                             <div contenteditable="true" id="left-inner-block-title4">
                        {{ $page[0]->left_inner_block_title4 }}
                            </div>
               {{ Form::textarea('left_inner_block_title4',$page[0]->left_inner_block_title4,array("id" => "textarea-left-inner-block-title4","class" => "hideThisField")) }}
                          </div>
                          <!-- end responsive table -->
                          
                          
                       <div contenteditable="true" id="left-inner-block-content4">
                           {{ $page[0]->left_inner_block_content4 }}
                            </div>
{{ Form::textarea('left_inner_block_content4',$page[0]->left_inner_block_content4,array("id" => "textarea-left-inner-block-content4","class" => "hideThisField")) }}  
                            
                            
                       </div>
                       <!-- End portlet body -->
                            
                   </div>
                   <!-- End portlet -->

  
                      <div class="portlet">
                        <div class="portlet-header">
                          <div class="caption">Remark</div>
                          <br/>
                          <span class="text-blue text-12px">You can edit the content by clicking the text section below.</span>
                          <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                        </div>
                        <div class="portlet-body">
                        	     <div contenteditable="true" id="left-inner-block-title5">
                        {{ $page[0]->left_inner_block_title5 }}
                            </div>
               {{ Form::textarea('left_inner_block_title5',$page[0]->left_inner_block_title5,array("id" => "textarea-left-inner-block-title5","class" => "hideThisField")) }}
                          </div>
                      </div> 
                 	
                   <!-- End portlet -->

  
   <div class="form-actions none-bg"> <a href="javascript:void(0);" class="btn btn-red" onclick="Addsavepage('corporategeneral','');">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp; <button type="submit" class="btn btn-blue">Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></button>&nbsp; <a href="#" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
					  
					  {{Form :: close()}}
            </div>
          </div>
        <!--</div>-->
@stop
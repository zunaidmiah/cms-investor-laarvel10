@extends('layouts.admin')
@section('content')
  <!--<div class="page-content">-->
          <div class="row">
            <div class="col-lg-12">
              <h2>Risk Factors <i class="fa fa-angle-right"></i> Edit</h2>
              <div class="clearfix"></div>
              
               <div class="pull-left margin-top-10px">
              	Last updated: <span class="text-blue">{{ date("d F Y",strtotime($page[0]->updated_at)) }} @ {{ date("g:i A",strtotime($page[0]->updated_at)) }}</span>
              </div>
              
              
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
                          <div class="tools">
                          	<i class="fa fa-chevron-up"></i>
                          </div>
                       </div>
                       
                       <div class="portlet-body">
                       	                          <!-- Info white--> 
                         <div class="info_white1 border_bottom">
                             <div contenteditable="true" id="left-block1-title">
                             {{ $page[0]->left_block1_title }}
                            </div>
{{ Form::textarea('left_block1_title',$page[0]->left_block1_title,array("id" => "textarea-left-block1-title","class" => "hideThisField")) }}
       
<div class="row-fluid">
                        <div class="span12">
                          
                          	<div contenteditable="true" id="left-block1-content">
                         {{ $page[0]->left_block1_content }}
 </div>
{{ Form::textarea('left_block1_content',$page[0]->left_block1_content,array("id" => "textarea-left-block1-content","class" => "hideThisField")) }}
                       
<div contenteditable="true" id="left-block2-title">{{ $page[0]->left_block2_title }}</div>
{{ Form::textarea('left_block2_title',$page[0]->left_block2_title,array("id" => "textarea-left-block2-title","class" => "hideThisField")) }}    
                       
						
                         <div contenteditable="true" id="left-block2-content">
                         {{ $page[0]->left_block2_content }}
 </div>
{{ Form::textarea('left_block2_content',$page[0]->left_block2_content,array("id" => "textarea-left-block2-content","class" => "hideThisField")) }}
                        
                       <div contenteditable="true" id="left-block3-title">
                         {{ $page[0]->left_block3_title }}
 </div>
{{ Form::textarea('left_block3_title',$page[0]->left_block3_title,array("id" => "textarea-left-block3-title","class" => "hideThisField")) }}    
                        </div>
                           
                      </div>       
                             

                             
                          </div>
                                                     
                            
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
                   
               
                         <div contenteditable="true" id="left-inner-block-title3">
                        {{ $page[0]->left_inner_block_title3 }}
                            </div>
               {{ Form::textarea('left_inner_block_title3',$page[0]->left_inner_block_title3,array("id" => "textarea-left-inner-block-title3","class" => "hideThisField")) }}
               
                          <br/>
                      
                  <!-- End Info white-->
                  
                </div>
              </div>
   <div class="form-actions none-bg"> <a href="javascript:void(0);" class="btn btn-red" onclick="Addsavepage('corporategeneral','');">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp; <button type="submit" class="btn btn-blue">Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></button>&nbsp; <a href="#" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
					  
					  {{Form :: close()}}
            </div>
          </div>
        <!--</div>-->
@stop
@extends('layouts.admin')
@section('content')

      <div class="row">
            <div class="col-lg-12">
              <h2>Company Announcements <i class="fa fa-angle-right"></i> Edit</h2>
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
              
           {{ Form::open(array('url' => 'admin/page/savepage','class'=> 'form-horizontal','method' => 'post','name' => 'announcementsave','id' => 'announcementsave')) }} 
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
                            <div class="format-icon-inner"> <i class="icon-bullhorn"></i> </div>
                          </div>
                          <div class="entry-header-inner">
                           <div contenteditable="true" id="left-block1-title">
                          {{ $page[0]->left_block1_title }}
                            </div>
               {{ Form::textarea('left_block1_title',$page[0]->left_block1_title,array("id" => "textarea-left-block1-title","class" => "hideThisField")) }}
                          </div>
                        </header>
                        <div class="hr"></div>
                        <div class="clearfix"></div>
                      </div>		  
					  
					  
<div class="grid_4">
                        <!-- company announcements start -->
                        <div contenteditable="true" id="left-block1-content">
                         {{ $page[0]->left_block1_content }}
                            </div>
               {{ Form::textarea('left_block1_content',$page[0]->left_block1_content,array("id" => "textarea-left-block1-content","class" => "hideThisField")) }}
                        <div class="list list-style__check">
                          <ul>
                           <div contenteditable="true" id="left-block2-title">
                         {{ $page[0]->left_block2_title }}
                            </div>
               {{ Form::textarea('left_block2_title',$page[0]->left_block2_title,array("id" => "textarea-left-block2-title","class" => "hideThisField")) }}
                            
                            <div contenteditable="true" id="left-block2-content">
                         {{ $page[0]->left_block2_content }}
                            </div>
               {{ Form::textarea('left_block2_content',$page[0]->left_block2_content,array("id" => "textarea-left-block2-content","class" => "hideThisField")) }}
                           
                           <div contenteditable="true" id="left-block3-title">
                         {{ $page[0]->left_block3_title }}
                            </div>
               {{ Form::textarea('left_block3_title',$page[0]->left_block3_title,array("id" => "textarea-left-block3-title","class" => "hideThisField")) }}
                             
                        
                          </ul>
                        </div>
                        <!-- company announcements end -->
                        <!-- annual audited accounts start -->
                        <div contenteditable="true" id="left-inner-block-title1">
                        {{ $page[0]->left_inner_block_title1 }}
                            </div>
               {{ Form::textarea('left_inner_block_title1',$page[0]->left_inner_block_title1,array("id" => "textarea-left-inner-block-title1","class" => "hideThisField")) }}
                        <div class="list list-style__check">
                          <ul>
                            <div contenteditable="true" id="left-inner-block-content1">
                           {{ $page[0]->left_inner_block_content1 }}
                            </div>
               {{ Form::textarea('left_inner_block_content1',$page[0]->left_inner_block_content1,array("id" => "textarea-left-inner-block-content1","class" => "hideThisField")) }}
                            <div contenteditable="true" id="left-inner-block-title2">
                           {{ $page[0]->left_inner_block_title2 }}
                            </div>
               {{ Form::textarea('left_inner_block_title2',$page[0]->left_inner_block_title2,array("id" => "textarea-left-inner-block-title2","class" => "hideThisField")) }}
                            <div contenteditable="true" id="left-inner-block-content2">
                            {{ $page[0]->left_inner_block_content2 }}
                            </div>
               {{ Form::textarea('left_inner_block_content2',$page[0]->left_inner_block_content2,array("id" => "textarea-left-inner-block-content2","class" => "hideThisField")) }}
                          </ul>
                        </div>
                        <!-- annual audited accounts end -->
                        <!-- circulars / notice to shareholders start -->
                        <div contenteditable="true" id="left-inner-block-title3">
                           {{ $page[0]->left_inner_block_title3 }}
                            </div>
               {{ Form::textarea('left_inner_block_title3',$page[0]->left_inner_block_title3,array("id" => "textarea-left-inner-block-title3","class" => "hideThisField")) }}
                        <div class="list list-style__check">
                          <ul>
                            <div contenteditable="true" id="left-inner-block-content3">
                            {{ $page[0]->left_inner_block_content3 }}
                            </div>
               {{ Form::textarea('left_inner_block_content3',$page[0]->left_inner_block_content3,array("id" => "textarea-left-inner-block-content3","class" => "hideThisField")) }}
                            <div contenteditable="true" id="left-inner-block-title4">
                           {{ $page[0]->left_inner_block_title4 }}
                            </div>
               {{ Form::textarea('left_inner_block_title4',$page[0]->left_inner_block_title4,array("id" => "textarea-left-inner-block-title4","class" => "hideThisField")) }}
                            <div contenteditable="true" id="left-inner-block-content4">
                            {{ $page[0]->left_inner_block_content4 }}
                            </div>
               {{ Form::textarea('left_inner_block_content4',$page[0]->left_inner_block_content4,array("id" => "textarea-left-inner-block-content4","class" => "hideThisField")) }}
                          </ul>
                        </div>
                        <!-- circulars / notice to shareholders end -->
                      </div>					  
					  
<div class="grid_4">
                        <!-- changes in s/holding start -->
                        <div contenteditable="true" id="left-inner-block-title5">
                           {{ $page[0]->left_inner_block_title5 }}
                            </div>
               {{ Form::textarea('left_inner_block_title5',$page[0]->left_inner_block_title5,array("id" => "textarea-left-inner-block-title5","class" => "hideThisField")) }}
                        <div class="list list-style__check">
                          <ul>
                             <div contenteditable="true" id="left-inner-block-content5">
                            {{ $page[0]->left_inner_block_content5 }}
                            </div>
               {{ Form::textarea('left_inner_block_content5',$page[0]->left_inner_block_content5,array("id" => "textarea-left-inner-block-content5","class" => "hideThisField")) }}
                            <div contenteditable="true" id="left-inner-block-title6">
                           {{ $page[0]->left_inner_block_title6 }}
                            </div>
               {{ Form::textarea('left_inner_block_title6',$page[0]->left_inner_block_title6,array("id" => "textarea-left-inner-block-title6","class" => "hideThisField")) }}
                           <div contenteditable="true" id="left-inner-block-content6">
                            {{ $page[0]->left_inner_block_content6 }}
                            </div>
               {{ Form::textarea('left_inner_block_content6',$page[0]->left_inner_block_content6,array("id" => "textarea-left-inner-block-content6","class" => "hideThisField")) }}
                          </ul>
                        </div>
                        <!-- changes in s/holding end -->
                        <!-- annual reports start -->
                       <div contenteditable="true" id="left-inner-block-title7">
                           {{ $page[0]->left_inner_block_title7 }}
                            </div>
               {{ Form::textarea('left_inner_block_title7',$page[0]->left_inner_block_title7,array("id" => "textarea-left-inner-block-title7","class" => "hideThisField")) }}
                        <div class="list list-style__check">
                          <ul>
                             <div contenteditable="true" id="left-inner-block-content7">
                            {{ $page[0]->left_inner_block_content7 }}
                            </div>
               {{ Form::textarea('left_inner_block_content7',$page[0]->left_inner_block_content7,array("id" => "textarea-left-inner-block-content7","class" => "hideThisField")) }}
                             <div contenteditable="true" id="left-inner-block-title8">
                           {{ $page[0]->left_inner_block_title8 }}
                            </div>
               {{ Form::textarea('left_inner_block_title8',$page[0]->left_inner_block_title8,array("id" => "textarea-left-inner-block-title8","class" => "hideThisField")) }}
                            <div contenteditable="true" id="left-inner-block-content8">
                            {{ $page[0]->left_inner_block_content8 }}
                            </div>
               {{ Form::textarea('left_inner_block_content8',$page[0]->left_inner_block_content8,array("id" => "textarea-left-inner-block-content8","class" => "hideThisField")) }}
                          </ul>
                        </div>
                        <!-- annual reports end -->
                      </div>
					  <div class="grid_4">
                        <!-- Extra Contact Box -->
                        <div class="cta">
                          <div contenteditable="true" id="right-block1-title">
                         {{ $page[0]->right_block1_title }}
                            </div>
               {{ Form::textarea('right_block1_title',$page[0]->right_block1_title,array("id" => "textarea-right-block1-title","class" => "hideThisField")) }}
                          <div contenteditable="true" id="right-block1-content">
                         {{ $page[0]->right_block1_content }}
                            </div>
               {{ Form::textarea('right_block1_content',$page[0]->right_block1_content,array("id" => "textarea-right-block1-content","class" => "hideThisField")) }}
                          <div class="bg-black">
                            <div class="center">
                                <div contenteditable="true" id="right-block2-title">
                         {{ $page[0]->right_block2_title }}
                            </div>
               {{ Form::textarea('right_block2_title',$page[0]->right_block2_title,array("id" => "textarea-right-block2-title","class" => "hideThisField")) }}
                            <div contenteditable="true" id="right-block2-content">
                         {{ $page[0]->right_block2_content }}
                            </div>
               {{ Form::textarea('right_block2_content',$page[0]->right_block2_content,array("id" => "textarea-right-block2-content","class" => "hideThisField")) }}
                            </div>
                          </div>
                        </div>
                        <!-- Extra Contact Box / End -->
                      </div>
					
						
						
						
						
</div>
                  </div>
                </div>
              
              	<!-- save button start -->
                <div class="form-actions none-bg"> <a href="javascript:void(0);" class="btn btn-red" onclick="Addsavepage('announcementsave','investorrelations/announcements');">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp; <button type="submit" class="btn btn-blue">Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></button>&nbsp; <a href="#" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
                <!-- save button end -->
                
              </div>
           
            <!--Modal Edit Google Map start-->
              
          
           
              {{ Form::close() }}
              
              </div>
              <!-- end portlet -->
            </div>
          </div>
        </div>
        
        @stop
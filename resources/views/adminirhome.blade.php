@extends('layouts.admin')
@section('content')
  <!--<div class="page-content">-->
          <div class="row">
            <div class="col-lg-12">
              <h2>Investor Relations Home <i class="fa fa-angle-right"></i> Edit</h2>
              <div class="clearfix"></div>
                         
              <div class="pull-left"> Last updated: <span class="text-blue">{{ date("d F Y",strtotime($page[0]->updated_at)) }} @ {{ date("g:i A",strtotime($page[0]->updated_at)) }}</span> </div>
			   <!--<div class="pull-right"> 
              	<a href="#" class="btn btn-red btn-lg">Update PDF Report &nbsp;<i class="fa fa-refresh"></i></a> 
              </div>-->
              <div class="clearfix"></div>
              <p></p>
              {{ Form::open(array('url' => 'admin/page/savepage','class'=> 'form-horizontal','method' => 'post','name' => 'irhome','id' => 'irhome')) }} 
		   {{Form::hidden('preview','')}}
           {{Form::hidden('pageid',$page[0]->id)}}
           {{Form::hidden('type',$page[0]->type)}}

        <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Page Info</div>
                  <br/>
                  <span class="text-blue text-12px">You can edit the content by clicking the text section below.</span>
                  <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                </div>
                <div class="portlet-body">
                     <div contenteditable="true" id="page-title">
                   {{$page[0]->page_title}}
                  </div>
				  {{ Form::textarea('page_title',$page[0]->page_title,array("id" => "textarea-page-title","class" => "hideThisField")) }} 
                </div>
              </div>
              <div class="portlet">
                <div class="portlet-header">
                  <div class="caption">Page Content</div>
                  <br/>
                  <span class="text-blue text-12px">You can edit the content by clicking the text section below.</span>
                  <div class="tools"> <i class="fa fa-chevron-up"></i> </div>
                </div>
                <div class="portlet-body">
                  <!-- Info title-->
                    <div class="info_title border_bottom">
                      <div class="vertical_line animated fadeInUp delay2">
                        <div class="circle_top"></div>
                      </div>
                      <div class="row-fluid animated fadeInUp delay2">
                        <div class="col-lg-6">
                           <div contenteditable="true" id="left-block1-title">
                   {{$page[0]->left_block1_title}}
                  </div>
				  {{ Form::textarea('left_block1_title',$page[0]->left_block1_title,array("id" => "textarea-left-block1-title","class" => "hideThisField")) }}
                         <div contenteditable="true" id="left-block1-content">
                   {{$page[0]->left_block1_content}}
                  </div>
				  {{ Form::textarea('left_block1_content',$page[0]->left_block1_content,array("id" => "textarea-left-block1-content","class" => "hideThisField")) }}
                        </div>
                        <div class="col-lg-3 pull-left">
                          <p class="black-title"><strong>Stock Price</strong></p>
                          <div class="alert alert-success"> <strong>LIENHOE 3573</strong> </div>
                        </div>
                        <div class="col-lg-3 pull-left">
                          <p class="black-title"><strong>Last Done</strong></p>
                          <div class="alert alert-success"> <strong>{{ $stockdata->close }}</strong> </div>
                        </div>
                        <div class="col-lg-6">
                         <table class="table table-striped">
                  	<col width="1"/>
                	<col width="1"/>
                    <col width="1"/>

                    <thead>
                    	<th>Change</th>
                        <th>Change %</th>
                        <th>Volume</th>
                    </thead>

                    <tbody>
                      <tr>
                         <td><!--<span class="green-title"><i class="icon-arrow-up"></i> <strong>0.030</strong></span>-->
                               <?php
                            if ($stockdata->adj > 0)
                            {
                                $sclass = "green-title";
                                $iclass = "icon-arrow-up";
                            }
                            else
                            {
                                $sclass = "red-title";
                                $iclass = "icon-arrow-down";
                            }
                         ?>
                         <span class="{{ $sclass }}"><i class="{{ $iclass }}"></i> <strong>{{ $stockdata->adj }}</strong></span></td>
                         <td><!--<span class="green-title"><i class="icon-arrow-up"></i> <strong>3.45%</strong></span>-->
                         <?php
                            if ($stockdata->percentage_change > 0)
                            {
                                $sclass = "green-title";
                                $iclass = "icon-arrow-up";
                            }
                            else
                            {
                                $sclass = "red-title";
                                $iclass = "icon-arrow-down";
                            }
                         ?>
                              
                              <span class="{{ $sclass }}"><i class="{{ $iclass }}"></i> <strong>
                               {{ $stockdata->percentage_change }}
                             </strong></span>
                         </td>
                         <td>{{ $stockdata->volume }}</td>
                      </tr>

                      <tr>
                         <td><strong>Open</strong></td>
                         <td><strong>High</strong></td>
                         <td><strong>Low</strong></td>
                      </tr>

                       <tr>
                         <td>{{ $stockdata->open }}</td>
                         
                         <td><span class="green-title"><strong>{{ $stockdata->high }}</strong></span></td>
                         <td><span class="red-title"><strong>{{ $stockdata->low }}</strong></span></td>
                      </tr>

                    </tbody>
                    <tfoot>
                    	<tr>
                        	<td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tfoot>
                  </table>
                          <p>Quotes Last Updated: {{ $stockdata->date }}. <br/>All Prices Are Quoted In Ringgit Malaysia.<br/>
                  	</p>
                        </div>
                      </div>
                      <div style="clear:both"></div>
                      <div class="vertical_line"></div>
                      <i class="icon-signal right"></i> 
                  </div>
                  <!-- End Info title-->
                    <div class="clearfix"></div>
                  <!-- Info resalt-->
                    <div class="info_resalt border_bottom">
                      <div class="row-fluid animated fadeInUp delay5">
                        <div class="col-lg-6">
                         <div contenteditable="true" id="left-inner-block-title1">
                   {{$page[0]->left_inner_block_title1}}
                  </div>
				  {{ Form::textarea('left_inner_block_title1',$page[0]->left_inner_block_title1,array("id" => "textarea-left-inner-block-title1","class" => "hideThisField")) }}
                          <div contenteditable="true" id="left-inner-block-content1">
                   {{$page[0]->left_inner_block_content1}}
                  </div>
				  {{ Form::textarea('left_inner_block_content1',$page[0]->left_inner_block_content1,array("id" => "textarea-left-inner-block-content1","class" => "hideThisField")) }}
                        </div>
                        <div class="col-lg-6">
                          <div contenteditable="true" id="left-inner-block-title2">
                   {{$page[0]->left_inner_block_title2}}
                  </div>
				  {{ Form::textarea('left_inner_block_title2',$page[0]->left_inner_block_title2,array("id" => "textarea-left-inner-block-title2","class" => "hideThisField")) }}
                           <div contenteditable="true" id="left-inner-block-content2">
                   {{$page[0]->left_inner_block_content2}}
                  </div>
				  {{ Form::textarea('left_inner_block_content2',$page[0]->left_inner_block_content2,array("id" => "textarea-left-inner-block-content2","class" => "hideThisField")) }}
                        </div>
                      </div>
                    </div>
                  <!-- End Info resalt -->
                </div>
                <!-- end portlet body-->
              </div>
            
			
<div class="form-actions none-bg"> <a href="javascript:void(0);" class="btn btn-red" onclick="Addsavepage('/','');">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp; <button type="submit" class="btn btn-blue">Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></button>&nbsp; <a href="#" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
			 {{ Form::close()}} 
           
              <!-- end portlet -->
            </div>
          </div>
        <!--</div>-->
@stop
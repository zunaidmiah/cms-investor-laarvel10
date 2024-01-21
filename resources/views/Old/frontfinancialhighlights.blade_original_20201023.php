@extends('layouts.front')
@section('content')
   <style>
           
			#year #table1 th, #year #table1 td{ width:32%;} 
			#table1 th:nth-child(1), #table1 td:nth-child(1) { position: absolute;left:100px;   }
			#table1{ width:62%;overflow:auto;margin-left:39%;}
        </style>
         <script type="text/javascript">
		   $(function(){
		   $("#year #table1 th").attr('nowrap','nowrap');
		   });
          </script>	          
<!--<section class="content_info">-->
          
          <!-- Info white-->
          <div class="info_white1 border_bottom">
            <div class="container">
              {{$page[0]->left_block1_title }}
              <!--<h2 class="red-title">{{$page[0]->page_title}}</h2>-->
              <div class="clearfix"></div>
              
              <div class="row-fluid">
                <div class="span12">
				  <div id="twitter-bootstrap-container">
                    <div id="twitter-bootstrap-tabs">
                     <ul class="nav nav-tabs">
                      <li><a href="#year">View by Year</a></li>
                      <li><a href="#quarter">View by Quarter</a></li>
                     </ul>
                     <div class="panels">
                     	<div id="year">
						<!--<div id="table1">-->
                       		{{ $page[0]->left_block1_content }}
							<!--</div>-->
                              {{ $page[0]->left_block2_title }}
						
                      	</div>
                        
                      	<div id="quarter">
                        	
                       		 {{ $page[0]->left_block2_content }}
                            <!-- note to programmer: please make the following charts dynamic, not just static image -->
							<div id="revenue">
                            <div class="row">
                                <div id="spline-with-symbols1"></div>
                            </div>
                           
                        	 {{ $page[0]->left_block3_title }}
                               </div>
                              <h5> {{ $page[0]->left_block3_content }}</h5>
							  <div id="profit_before_sale">
                              <div class="row">
                              	<div id="spline-with-symbols2"></div>
                              </div>
							  
                        	   {{ $page[0]->left_inner_block_title1 }}
                              </div>
                              <h5>{{ $page[0]->left_inner_block_content1 }}</h5>
							  <div id="profit_after_sale">
                              <div class="row">
                              	<div id="spline-with-symbols3"></div>
                              </div>
							  
                        	    {{ $page[0]->left_inner_block_title2 }}
								</div>
                      	</div>
                     </div>
                     <!-- end panels -->
                    </div>
                  </div>

				  <script type="text/javascript">
                  $('#twitter-bootstrap-tabs').easytabs();
                  </script>
                </div>
              </div>
            </div>
            <i class="icon-dollar right"></i>          </div>
          <!-- End Info white -->
          
          <!-- Info Resalt-->
          <div class="info_resalt border_bottom">
            <div class="container">
              <div class="row-fluid">
                <div class="span12">
                  {{ $page[0]->left_inner_block_content2 }}
                </div>      
              </div>
            </div>
          </div>
          <!-- End Info Resalt-->
  <!--</section>	-->	
@stop
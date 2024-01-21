@extends('layouts.front')
@section('content')
                 
                  <div class="clearfix">
                  <div class="grid_12">
                      
                  <!-- Page Title Section -->
                   <header class="entry-header clearfix">
                      <div class="format-icon">
                        <div class="format-icon-inner"> <i class="icon-archive"></i> </div>
                      </div>
                      <div class="entry-header-inner">
                      {{ $pageTitle }}
                      </div>
                    </header>
                    <div class="hr"></div>
                  <!-- End of Page Title Section -->
                  
                  <!-- Include the slider -->  
                  @if(count($slidingbanners) > 0)
                  @include('includes.manuslider')
                  @endif
                  <!-- End of Include Slider -->
                  
                  <!-- Start of Page Content -->
                                    <div class="clearfix">
                      <div class="grid_8 alpha">
                        <!-- Project Description -->
                        <div class="project-desc project-desc__single">
                         {{ $page->left_block1_title }}
                          <div class="project-excerpt">
                           {{ $page->left_block2_content }}                            
                           {{ $page->left_block3_content }}              
                          </div>
                        </div>
                        <!-- Project Description / End -->
                          
                        
                      </div>
					  <div class="grid_4 omega">
                         {{ $page->right_block1_title }}    
                         {{ $page->right_block1_content }}  
                         {{ $page->right_block2_content }}                          
                        <br/>
                         {{ $page->right_block3_title }} 
                         {{ $page->right_block3_content }}
                        
                      </div>
                      <!-- end grid 4 -->
                       
                    </div>
                    
                    
                    
                    <!-- west malaysia contact start -->
                   {{ $page->left_inner_block_title1 }}
                    <div class="hr"></div>
                     
                      <div class="clearfix">
                      	<div class="grid_6 alpha">
                        {{ $page->left_inner_block_title2 }}
                        {{ $page->left_inner_block_content1 }}
                        </div>
                        
                        <div class="grid_6 omega">
                            {{ $page->left_inner_block_title3 }}
                        {{ $page->left_inner_block_content3 }}
                        </div>
                      </div>
                      <br/>
                      <!-- end clearfix -->
                      
                      <div class="margin-top-5px clearfix">
                      	<div class="grid_6 alpha">
                         {{ $page->left_inner_block_title4 }}
                        {{ $page->left_inner_block_content4 }}
                        </div>
                        
                        <div class="grid_6 omega">
                          {{ $page->left_inner_block_title5 }}
                        {{ $page->left_inner_block_content5 }}
                        </div>
                      </div>
                      <br/>
                      <!-- end clearfix -->
                      
                      <div class="margin-top-5px clearfix">
                      	<div class="grid_6 alpha">
                            {{ $page->left_inner_block_title6 }}
                        {{ $page->left_inner_block_content6 }}
                        </div>
                        
                        <div class="grid_6 omega">
                            {{ $page->left_inner_block_title7 }}
                        {{ $page->left_inner_block_content7 }}
                        </div>
                      </div>
                      <br/>
                      <!-- end clearfix -->
                      
                      <div class="margin-top-5px clearfix">
                      	<div class="grid_6 alpha">
                        {{ $page->left_inner_block_title8 }}
                        {{ $page->left_inner_block_content8 }}
                        </div>

                      </div>
                      <br/>
                      <!-- end clearfix -->   
                      <!-- west malaysia contacts end -->
                      
                      <!-- east coast malaysia contact start -->
                         {{ $page->left_inner_block_title9 }}
                   
                      <div class="hr"></div>
                     
                      <div class="clearfix">
                      	<div class="grid_6 alpha">
                        {{ $page->left_inner_block_title10 }}
                        {{ $page->left_inner_block_content10 }}
                        </div>
                        
                        <div class="grid_6 omega">
                        {{ $page->left_inner_block_title11 }}
                        {{ $page->left_inner_block_content12 }}
                        </div>
                      </div>
                      <br/>
                      <!-- end clearfix -->
                      
                      <div class="margin-top-5px clearfix">
                      	<div class="grid_6 alpha">
                        {{ $page->left_inner_block_title13 }}
                        {{ $page->left_inner_block_content13 }}
                        </div>
                        
                      </div>
                      <br/>
                      <!-- end clearfix -->
                      <!-- east coast malaysia contacts end -->
                    
                    <!-- east malaysia contact start -->
                {{ $page->left_inner_block_title14 }}
                                 <div class="hr"></div>
                     
                      <div class="clearfix">
                      	<div class="grid_6 alpha">
                         {{ $page->left_inner_block_title15 }}
                        {{ $page->left_inner_block_content15 }}
                        </div>
                        
                        <div class="grid_6 omega">
                      {{ $page->left_inner_block_title16 }}
                        {{ $page->left_inner_block_content16 }}
                        </div>
                      </div>
                      <br/>
                      <!-- end clearfix -->
                      
                      <div class="margin-top-5px clearfix">
                      	<div class="grid_6 alpha">
                         {{ $page->left_inner_block_title17 }}
                        {{ $page->left_inner_block_content17 }}
                        </div>
                        
                        <div class="grid_6 omega">
                        	 {{ $page->left_inner_block_title18 }}
                        {{ $page->left_inner_block_content18 }}
                        </div>
                        
                      </div>
                      <br/>
                      <!-- end clearfix -->
                      
                      <div class="margin-top-5px clearfix">
                      	<div class="grid_6 alpha">
                        	 {{ $page->left_inner_block_title19 }}
                        {{ $page->left_inner_block_content19 }}
                        </div>
                        
                        <div class="grid_6 omega">
                         {{ $page->left_inner_block_title20 }}
                        {{ $page->left_inner_block_content20 }}
                        </div>
                        
                      </div>
                      <!-- end clearfix -->
                      <!-- east malaysia contacts end -->
                    
                    
                    
                    
                    <div class="hr"></div>
                    <!-- Related Projects -->
                  
                  <!-- End of Page Content -->
                  
                  <!-- Processes Listing -->
                  @if(count($brandslistings) > 0)
                  @include('includes.tradingbrandslisting')
                  @endif
                 
                  <!-- End of Processes Listing -->
                  
                  
                  </div>
                  </div>
                  
		
@stop
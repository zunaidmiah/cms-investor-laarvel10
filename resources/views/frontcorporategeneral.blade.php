@extends('layouts.front')
@section('content')

                 
<section class="content_info">    <!-- Info white-->
            <div class="info_white1 border_bottom">
                <div class="container">
                    
                    <div class="row-fluid">
                        
                    	<div class="span12">
                        	 {{ $page[0]->left_block1_title }}
                           
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    
                    <div class="row-fluid">   
                       {{ @str_replace('col-lg-2','span2',$page[0]->left_block1_content) }}
                     </div>
                </div>
                <br/>
                <!--<i class="icon-signal right"></i>-->
            </div>   
            <!-- End Info white-->
            
            <!-- Info Resalt-->
          <div class="info_resalt border_bottom">
            <div class="container">
              <div class="row-fluid">
                <div class="span12">
                   {{ $page[0]->left_block2_title }}
                 
                  {{ $page[0]->left_block2_content }}    
                </div>      
              </div>
              
            </div>
          </div>
          <!-- End Info Resalt-->
          
          <!-- Info white-->
          <div class="info_white1 border_bottom">
            <div class="container">
              <div class="row-fluid">
                <div class="span12">
                  {{ $page[0]->left_block3_title }}
                 {{ $page[0]->left_block3_content }}  
                </div>
                   
              </div>
            </div>
            <!--<i class="icon-cogs left"></i>-->
          </div>
          <!-- End Info white -->
          
          <!-- Info Resalt-->
          <div class="info_resalt border_bottom">
            <div class="container">
              <div class="row-fluid">
                <div class="span12">
                  {{ $page[0]->left_inner_block_title1 }}  
                  {{ $page[0]->left_inner_block_content1 }}
                </div>
                   
              </div>
            </div>
          </div>
          <!-- End Info Resalt--> 
          
          <!-- Info white-->
          <div class="info_white1 border_bottom">
            <div class="container">
            {{ $page[0]->left_inner_block_title2 }}  
            {{ @str_replace('col-lg-6','span6',$page[0]->left_inner_block_content2) }}
              
            </div>
            <br/>
            <!--<i class="icon-user right"></i>-->
          </div>
          <!-- End Info white -->
          
          <!-- Info Resalt-->
          <div class="info_resalt border_bottom">
            <div class="container">
              <div class="row-fluid">
                <div class="span12">
                 {{ $page[0]->left_inner_block_title3 }}  
                {{ $page[0]->left_inner_block_content3 }} 
                </div>
                   
              </div>
            </div>
          </div>
          <!-- End Info Resalt-->
          
          <!-- Info white-->
          <div class="info_white1 border_bottom">
            <div class="container">
    
              <div class="row-fluid">
              	<div class="span6">   
                  {{ $page[0]->left_inner_block_title4 }}    
                 {{ $page[0]->left_inner_block_content4 }}       
                </div>
                <div class="span6">
                  {{ $page[0]->left_inner_block_title5 }}    
                 {{ $page[0]->left_inner_block_content5 }}                      
                </div>
              </div>
                
            </div>
            <br/>
            <!--<i class="icon-map-marker left"></i>-->
          </div>
          <!-- End Info white -->
          
          <!-- Info Resalt-->
          <div class="info_resalt border_bottom">
            <div class="container">
              <div class="row-fluid">
              	<div class="span6">   
                  {{ $page[0]->left_inner_block_title6 }}    
                 {{ $page[0]->left_inner_block_content6 }}                                  
                </div>
                <div class="span6">
                  {{ $page[0]->left_inner_block_title8 }}    
                 {{ $page[0]->left_inner_block_content8 }}          
                </div>
              </div>
              
              
            </div>
          </div>
          <!-- End Info Resalt-->
          
          <!-- Info white-->
          <div class="info_white1 border_bottom">
            <div class="container">
    		{{ $page[0]->left_inner_block_title10 }}    
                   
              <div class="row-fluid">
              	<div class="span6 border_bottom">   
                  {{ $page[0]->left_inner_block_content10 }}  
                 {{ $page[0]->left_inner_block_title11 }}          
                </div>
                <div class="span6 border_bottom">
                   {{ $page[0]->left_inner_block_content11 }} 
                  {{ $page[0]->left_inner_block_title12 }}                 
                </div>
              </div>
              
              <div class="row-fluid">
              	<div class="span6 margin_top_10px border_bottom">   
                 {{ $page[0]->left_inner_block_content12 }} 
                 {{ $page[0]->left_inner_block_title13 }}        
                </div>
                <div class="span6 margin_top_10px border_bottom">
                  {{ $page[0]->left_inner_block_content13 }} 
                 {{ $page[0]->left_inner_block_title14 }}                   
                </div>
              </div>
                
            </div>
            <br/>
            <!--<i class="icon-dollar right"></i>-->
          </div>
          <!-- End Info white -->
          
          <!-- Info Resalt-->
          <div class="info_resalt border_bottom">
            <div class="container">
              <div class="row-fluid">
                <div class="span12">
                   {{ $page[0]->left_inner_block_title15 }}
                  {{ $page[0]->left_inner_block_content15 }}
                </div>
                   
              </div>
            </div>
          </div>
          <!-- End Info Resalt-->
</section>
		
@stop
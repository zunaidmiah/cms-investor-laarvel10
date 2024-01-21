@extends('layouts.front')
@section('content')

                    
   <!-- Info white-->
         
     
            <!-- Info white-->
        
      <!-- Info white-->
          <div class="info_white1 border_bottom">
            <div class="container">
              {{ $page[0]->left_block1_title }}
              <div class="clearfix"></div>
              
              <div class="row-fluid">
                <div class="span12">
 {{ $page[0]->left_inner_block_title2 }}                  
 {{ $page[0]->left_block1_content }}
                  
                </div>
                   
              </div>
            </div>
            <i class="icon-dollar right"></i>
          </div>
          <!-- End Info white -->
          
          <!-- Info Resalt-->
          <div class="info_resalt border_bottom">
            <div class="container">
              <div class="row-fluid">
                <div class="span12">
                 {{ $page[0]->left_inner_block_title3 }}
                </div>      
              </div>
              
            </div>
          </div>
          <!-- End Info Resalt-->
                      
         
		
@stop
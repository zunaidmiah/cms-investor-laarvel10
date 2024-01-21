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
                  {{ $page[0]->left_block1_content }}
                  
                </div>
                   
              </div>
            </div>
            <i class="icon-bar-chart right"></i>
          </div>
          <!-- End Info white -->
          
          <!-- Info Resalt-->
          <div class="info_resalt border_bottom">
            <div class="container">
              <div class="row-fluid">
                <div class="span12">
                    {{ $page[0]->left_block2_title }}
                 {{ $page[0]->left_block2_content }}
                  {{ $page[0]->left_block3_title }}
                 {{ $page[0]->left_block3_content }}
                {{ $page[0]->left_inner_block_title1 }}                 
                {{ $page[0]->left_inner_block_content1 }}
                {{ $page[0]->left_inner_block_title2 }}
                  {{ $page[0]->left_inner_block_content2 }}
    
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
                {{ $page[0]->left_inner_block_title3 }}
                {{ $page[0]->left_inner_block_content3 }}
                  <br/>
                </div>      
              </div>
              
            </div>
            <i class="icon-info-sign right"></i>
          </div>
          <!-- End Info white-->
     
            <script type="text/javascript">
                  $('#twitter-bootstrap-tabs').easytabs();
                  </script>
          <!-- End Info white -->                 
         
		
@stop
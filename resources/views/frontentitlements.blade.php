@extends('layouts.front')
@section('content')

                    
 <!-- Info white-->
          <div class="info_white1 border_bottom">
            <div class="container">
              {{ $page[0]->left_block1_title }}
              <div class="clearfix"></div>
              
              <div class="row-fluid">
                <div class="span12">
                  {{ $page[0]->left_block1_content }}
                  {{ $page[0]->left_block2_title }}
                  
                  
                </div>
                   
              </div>
            </div>
            <i class="icon-dollar right"></i>
          </div>
          <!-- End Info white -->
          
          <!-- Info Resalt-->
          <div class="info_resalt border_bottom">
            <div class="container">
              {{ $page[0]->left_block2_content }}
              <div class="row-fluid">
                <div class="span12">
                 	{{ $page[0]->left_block3_title }}
                  
                </div>      
              </div>
              
            </div>
          </div>
          <!-- End Info Resalt-->
          
          <!-- Info white -->
          <div class="info_white1 border_bottom">
            <div class="container">
              {{ $page[0]->left_block3_content }}
              <div class="row-fluid">
                <div class="span12">
                 {{ $page[0]->left_inner_block_title1 }}
                  
                </div>      
              </div>
              
            </div>
          </div>
          <!-- End Info white -->
          
          <!-- Info Resalt-->
          <div class="info_resalt border_bottom">
            <div class="container">
              {{ $page[0]->left_inner_block_content1 }}
              <div class="row-fluid">
                <div class="span12">
                  {{ $page[0]->left_inner_block_title2 }}
                  
                </div>      
              </div>
              
            </div>
          </div>
          <!-- End Info Resalt-->
         
		
@stop
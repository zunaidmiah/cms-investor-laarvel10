@extends('layouts.front')
@section('content')

                    
  <div class="info_white1 border_bottom">
            <div class="container">
              <div class="clearfix"></div>
              
              <div class="row-fluid">
                <div class="span12">
           {{ $page[0]->left_block1_title }}
           {{ $page[0]->left_block1_content }}
                  
                </div>
                   
              </div>
            </div>
            <i class="icon-pencil right"></i>
          </div>
          <!-- End Info white -->
          
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
         
		
@stop
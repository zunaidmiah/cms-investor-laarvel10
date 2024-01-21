@extends('layouts.front')
@section('content')

  <div class="info_white1 border_bottom">
            <div class="container">
  
              <div class="row-fluid">
                <div class="span12">
                 {{ $page[0]->left_block1_title }}
                 
                 <div class="clearfix"></div>
                  {{ $page[0]->left_block2_content }}
                  
                  
                  
                  {{ $page[0]->left_block1_content }}
                  
                  {{ $page[0]->left_block2_title }}
                 </div>
                   
              </div>
            </div>
            <i class="icon-signal right"></i>
          </div>
@stop
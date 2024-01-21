@extends('layouts.front')
@section('content')

                 
<div class="info_white1 border_bottom">
            <div class="container">
              <h2 class="red-title">Production Statistics</h2>
              <div class="clearfix"></div>
              
              <div class="row-fluid">
                <div class="span12">
				  <h5>Company Operational / Production Statistics</h5>
                     {{ $page[0]->left_block1_content }} 
                  
                    {{ $page[0]->left_block2_content }} 
                   
                </div>
                   
              </div>
            </div>
            <i class="icon-dollar right"></i>
          </div>	
		  <!--<div class="info_resalt border_bottom">
            <div class="container">
              <h2 class="red-title"><span>Ratio Analysis</span></h2>
              <div class="row-fluid">
                <div class="span12">
                  <h5>Per Share Data</h5>
                   {{ $page[0]->left_block3_content }}  
                  
                 {{ $page[0]->left_inner_block_title1 }}
                  {{ $page[0]->left_inner_block_content1 }} 
                  
                  {{ $page[0]->left_inner_block_title2}}
                  {{ $page[0]->left_inner_block_content2}}
                  
                  {{ $page[0]->left_inner_block_title3}}
                  {{ $page[0]->left_inner_block_content3}}
                  
                      
                </div>      
              </div>
              
            </div>
          </div>-->	
		  <!--<div class="info_white1 border_bottom">
            <div class="container">
              <div class="clearfix"></div>
              
              <div class="row-fluid">
                <div class="span12">
				 {{ $page[0]->left_inner_block_title4}}
                  
                  {{ $page[0]->left_inner_block_content4}}
                   
 
                </div>
                   
              </div>
            </div>

          </div>-->
		  <div class="info_resalt border_bottom">
            <div class="container">
              <div class="row-fluid">
                <div class="span12">
                 {{ $page[0]->left_inner_block_title5}}
                </div>      
              </div>
              
            </div>
          </div>
@stop
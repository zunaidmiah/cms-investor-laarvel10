@extends('layouts.front')
@section('content')

          
                  
          <!-- Info white-->
          <div class="info_white1 border_bottom">
            <div class="container">
              <h2 class="red-title pull-left"><span>{{ $announcement->title }}</span></h2>
              <div class="pull-right margin_top_10px">
              	<a class="button" href="news_centre_bursa_financial_results.html">Back</a>
              </div>
              <div class="clearfix"></div>
              
              
              <!-- note to programmer: the order of the announcement is from top (the latest) to bottom (the oldest) -->
              <div class="row-fluid">
                {{ $announcement->html }}
                   
              </div>
            </div>
            <i class="icon-bullhorn right"></i>
          </div>
          <!-- End Info white -->
          
          <!-- Info Resalt-->
          <div class="info_resalt border_bottom">
            <div class="container">
              <div class="row-fluid">
                <div class="span12">
                  <h2 class="red-title"><span>Announcement Info</span></h2>
                  <div class="alert alert-error">
                      <strong>Reference No:</strong> CC-150226-B7D29 
                  </div>
                </div>      
              </div>
              
            </div>
          </div>
          <!-- End Info Resalt-->
    
                 
		
@stop
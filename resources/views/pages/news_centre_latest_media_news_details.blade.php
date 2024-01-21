@extends('layouts.front')

@section('content')
            
          
          <!-- Info white-->
          <div class="info_white border_bottom">
            <div class="container">
            	<h2 class="red-title">{{ $mediaNews->title }}</h2>
              	<div class="row-fluid">
                 <!--<h5>To increase telecommunication sites to 20,000 within two years</h5>-->
                 <div class="label label-info pull-right">{{ date('d M, Y', $mediaNews->date) }}</div>  
                  	<blockquote>
                       <small><cite title="Source Title">{{ $mediaNews->footer }}</cite></small>
                    </blockquote>
                    
                 @if($mediaNews->news_image != '')
                 <img src="/{{ $mediaNews->news_image }}" alt="Insert Image" class="pull-left margin_right_15px news_details_img">
                 @endif
                 <p>{{ $mediaNews->content }}</p>

              </div>
              <div class="clearfix"></div>
            </div>
          </div>
          <!-- End Info white -->
@stop
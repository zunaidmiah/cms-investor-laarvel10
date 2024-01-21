@extends('layouts.front')
@section('content')


          
          <!-- Info white-->
          <div class="info_white1 border_bottom">
            <div class="container">
              <h2 class="red-title pull-left">News Alert Subscription</h2>
              <div class="clearfix"></div>
			  <div class="row-fluid">
                <div class="span12">
                  <p>Please subscribe for <strong>OCK GROUP BERHAD</strong>'s News Alert. You will receive our company's latest news and announcements via email.</p>
                  <p>Kindly read our <a href="#" target="_blank">Privacy Policy</a> and key in your name and email address below:</p>
                   {{ Session::get('message') }}
                {{ Form::open(array('url' => 'investorrelations/investortools/newsalertssubscribesubmit','name' => 'newsalertssubscribe','id' => 'form1','class'=> 'form-horizontal','method' => 'post')) }}
                      <h6>Name <span class="red-title">*</span></h6>
       {{ Form::text('name','',array("id" => "name","class" => "input-xxlarge",  "placeholder" => "Your Name", "required")) }}
     
                      <h6>E-mail Address <span class="red-title">*</span></h6>
       
  {{ Form::text('email','',array("id" => "name","class" => "input-xxlarge",  "placeholder" => "E-mail Address", "required")) }}
                      
                      <div class="clearfix"></div>
                      <button type="submit" name="Submit" class="button">Subscribe</button>
     	 {{ Form::close() }}
                  
                  <p><a href="{{ url() }}/investorrelations/investortools/newsalertsunsubscribe">Unsubscribe</a> from <strong>OCK GROUP BERHAD</strong>'s News Alert service.</p>
                  
                  
                </div>
                   
              </div>
            </div>
            <i class="icon-bullhorn right"></i>
          </div>
          <!-- End Info white -->
          
        
          
@stop
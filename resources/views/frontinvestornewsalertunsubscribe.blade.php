@extends('layouts.front')
@section('content')


          
          <!-- Info white-->
          <div class="info_white1 border_bottom">
            <div class="container">
      <h2 class="red-title pull-left">News Alert Unsubscription</h2>
              <div class="clearfix"></div>
			  <div class="row-fluid">
                <div class="span12">
                <p>Thank you for using <strong>FAR EAST HOLDINGS BERHAD</strong>'s News Alert. If you wish to unsubscribe the email alerts, please provide us your email address as below.</p>
                   {{ Session::get('message') }}
                {{ Form::open(array('url' => 'investorrelations/investortools/newsalertsunsubscribesubmit','name' => 'newsalertssubscribe','id' => 'form1','class'=> 'form-horizontal','method' => 'post')) }}
                         
                      <h6>E-mail Address <span class="red-title">*</span></h6>
       
  {{ Form::text('email','',array("id" => "name","class" => "input-xxlarge",  "placeholder" => "E-mail Address", "required")) }}
                      
                      <div class="clearfix"></div>
                      <button type="submit" name="Submit" class="button">Unsubscribe</button>
     	 {{ Form::close() }}
                  
                  <p><a href="{{ url() }}/investorrelations/investortools/newsalertsunsubscribe">Unsubscribe</a> from <strong>FAR EAST HOLDINGS BERHAD</strong>'s News Alert service.</p>
                  
                  
                </div>
                   
              </div>
            </div>
            <i class="icon-bullhorn right"></i>
          </div>
          <!-- End Info white -->
          
        
          
@stop
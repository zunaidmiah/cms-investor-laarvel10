@extends('layouts.front')
@section('content')


          
          <!-- Info white-->
          <div class="info_white1 border_bottom">
            <div class="container">
              {{ $page[0]->left_block1_title }}
                   {{ Session::get('message') }}
                {{ Form::open(array('url' => 'investorrelations/investortools/newsalertssubscribesubmit','name' => 'newsalertssubscribe','id' => 'form1','class'=> 'form-horizontal','method' => 'post')) }}
                      <h6>Name <span class="red-title">*</span></h6>
       {{ Form::text('name','',array("id" => "name","class" => "input-xxlarge",  "placeholder" => "Your Name", "required")) }}
     
                      <h6>E-mail Address <span class="red-title">*</span></h6>
       
  {{ Form::text('email','',array("id" => "name","class" => "input-xxlarge",  "placeholder" => "E-mail Address", "required")) }}
                      
                      <div class="clearfix"></div>
                      <button type="submit" name="Submit" class="button">Subscribe</button>
     	 {{ Form::close() }}
                  
                  <p><a href="{{ url() }}/investorrelations/investortools/newsalertsunsubscribe">Unsubscribe</a> from <strong>FAR EAST HOLDINGS BERHAD</strong>'s News Alert service.</p>
                  
                  
                </div>
              <i class="icon-bullhorn right"></i>      
              </div>
            </div>
           
          </div>
          <!-- End Info white -->
          
        
          
@stop
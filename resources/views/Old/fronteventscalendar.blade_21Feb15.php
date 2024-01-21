@extends('layouts.front')
@section('content')

                    
   <!-- Info white-->
         
     
   
         <div class="info_white1 border_bottom">
            <div class="container">
              <h2 class="red-title pull-left"><span>{{$page[0]->type}}</span></h2>
              <div class="margin_top_10px">
           	   
                   {{ Form::open(array('url' => 'investorrelations/eventcalendar','method' => 'post','name' => 'eventcalendar', 'id' => 'eventcalendar' )) }}       
                                 
                                    <p class="pull-right">View Year:
                                 {{ Form::select('datesort', $yearsorts, Input::get('datesort'),array('class' => 'form-control','onchange' => 'this.form.submit();')) }}
                                 </p>  
                                 
                                 {{ Form::close() }}  
                </p>
              </div>
              <div class="clearfix"></div>
              
              <div class="row-fluid">
                <div class="span12">
                           <div id="accordion2" class="accordion">
                            
                              
                            @foreach($events as $k => $event)   
                            <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a href="#collapse{{ $k }}" data-parent="#accordion2" data-toggle="collapse" class="accordion-toggle">
                                        <i class="icon-chevron-down"></i> <span class="title">{{ $event->date }}</span></a>
                                    </div>
                                    <div class="accordion-body collapse" id="collapse{{ $k }}">
                                        <div class="accordion-inner">
                                          <div class="row-fluid"> 
                                            <div class="span12">      
                                              <p><strong>{{ $event->title }}</strong></p>
                                               <ul class="unstyled">
                                               	<li><span class="label label-important">Date of Meeting:</span> {{ $event->date }}</li>
                                                <li><span class="label label-info">Time:</span> {{ $event->time }}</li>
                                                <li><span class="label label-success">Venue:</span> {{ $event->venue }}</li>
                                              </ul>
                                              <p>{{ $event->content }}</p>
                                            </div>
                                            
                                          </div>
      
                                        </div>
                                    </div>
                                </div>
                              @endforeach
                                <!-- accordion group end-->
                                
                                
                  </div>
 
                </div>  
              </div>
              
             
            </div>
            <i class="icon-coffee right"></i>
          </div>
            <!-- Info white-->
      
          
          <!-- End Info white -->                 
         
		
@stop
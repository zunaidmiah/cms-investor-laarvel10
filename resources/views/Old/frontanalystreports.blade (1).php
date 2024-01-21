@extends('layouts.front')
@section('content')

 <div class="info_white1 border_bottom">
            <div class="container">               
              <div class="row-fluid">
                <div class="span12">
                    <div class="portfolio">

                       <ul id="portfolio-list">
                        
                           @foreach ($Reports as $Report)
                           <!-- Item Portfolio-->
                            <li class="span4">
                                <div class="hover">
                                    <img src="{{ url() }}/{{ $Report->image->url('large') }}" alt="{{ $Report->title }}"/>                               
                                    <a href="{{ url() }}{{ $Report->pdf->url() }}" title="Download"><div class="overlay"></div></a>
                                </div> 
                                                                   
                                <div class="info">
                                    <a href="{{ url() }}{{ $Report->pdf->url() }}" target="_blank">{{ $Report->title }}</a>
 
                                </div>  
                            </li>  
                            <!-- End Item Portfolio-->
                            @endforeach

                                    

                             

                        </ul>
                    </div>
					
                </div>
                   
              </div>
            </div>
            <i class="icon-file-text right"></i>
          </div>
		
@stop
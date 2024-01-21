@extends('layouts.front')
@section('content')

 <div class="info_white1 border_bottom">
            <div class="container">              
              <div class="row-fluid">
                <div class="span12">
				  <div class="accordion" id="accordion2">
                                @foreach ($Reports as $k => $Report)
                                      <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse{{$k}}">
                                        <i class="icon-chevron-down"></i> <span class="title">{{ $Report->title }}</span> </a>
                                    </div>
                                    <div id="collapse{{$k}}" class="accordion-body collapse" style="height: 0px;">
                                        <div class="accordion-inner">
                                             <div class="row-fluid">
                								<div class="span3 pull-left">
                                                	<img alt="{{ $Report->title }}" src="{{ url() }}{{ $Report->image->url('large') }}">
                                                   
                                                </div>
                				@if ($Report->pdf_file_name != '' )
                                                 <div class="span3 pull-left">
                                                    <h5>1st Quarter</h5>
                                                    <p class="margin_top_10px">
                                                    	<a target="_blank" href="{{ url() }}{{ $Report->pdf->url() }}"><input type="submit" class="button" value="View PDF" name="Submit"></a>
                                            			<a href="{{ url() }}{{ $Report->pdf->url() }}"><input type="submit" class="button" value="Download" name="Submit"></a>
                                                    </p>
                                                 </div>
                                                @endif
                                                    
                                                @if ($Report->pdf_file_name != '' ) 
                                                <div class="span3 pull-left">
                                                    <h5>2nd Quarter</h5>
                                                    <p class="margin_top_10px">
                                                    	<a target="_blank" href="{{ url() }}{{ $Report->pdf2->url() }}"><input type="submit" class="button" value="View PDF" name="Submit"></a>
                                            			<a href="{{ url() }}{{ $Report->pdf2->url() }}"><input type="submit" class="button" value="Download" name="Submit"></a>
                                                    </p>
                                                 </div>
                                                @endif
                                                 
                                                @if ($Report->pdf_file_name != '' )
                                                <div class="span3 pull-left">
                                                    <h5>3rd Quarter</h5>
                                                    <p class="margin_top_10px">
                                                    	<a target="_blank" href="{{ url() }}{{ $Report->pdf3->url() }}"><input type="submit" class="button" value="View PDF" name="Submit"></a>
                                            			<a href="{{ url() }}{{ $Report->pdf3->url() }}"><input type="submit" class="button" value="Download" name="Submit"></a>
                                                    </p>
                                                 </div> 
                                                @endif
                                                
                                                @if ($Report->pdf_file_name != '' )
                                                <div class="span3 pull-left">
                                                    <h5>4th Quarter</h5>
                                                    <p class="margin_top_10px">
                                                    	<a target="_blank" href="{{ url() }}{{ $Report->pdf4->url() }}"><input type="submit" class="button" value="View PDF" name="Submit"></a>
                                            			<a href="{{ url() }}{{ $Report->pdf4->url() }}"><input type="submit" class="button" value="Download" name="Submit"></a>
                                                    </p>
                                                 </div> 
                                                @endif
                                                
                                           		
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <!-- end accordion group 1 -->
                                @endforeach
                            </div>
                                   
                  
                </div>
                   
              </div>
            </div>
            <i class="icon-file-text right"></i>
          </div>
		
@stop
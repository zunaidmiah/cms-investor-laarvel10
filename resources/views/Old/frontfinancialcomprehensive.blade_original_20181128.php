@extends('layouts.front')
@section('content')

                 
<div class="info_white1 border_bottom">
            <div class="container">
                {{$page[0]->left_block1_title }}
            
              <div class="clearfix"></div>
              
              <div class="row-fluid">
                <div class="span12">
				  <div id="twitter-bootstrap-container">
                    <div id="twitter-bootstrap-tabs">
                     <ul class="nav nav-tabs">
                      <li><a href="#5years">5 Years Report</a></li>
                      <li><a href="#viewpdf">View PDF</a></li>
                     </ul>
					
                     <div class="panels">
                     	<div id="5years">
                        	 {{ $page[0]->left_inner_block_content2 }}
                       		  {{ $page[0]->left_block1_content }}
                              
                              <h5>      {{ $page[0]->left_block2_title }}</h5>
                              {{ $page[0]->left_block2_content }}
                              
                              <h5>  {{ $page[0]->left_block3_title }}</h5>
                              {{ $page[0]->left_block3_content }}
                              
                              <h5>  {{ $page[0]->left_inner_block_title1 }}</h5>
                               {{ $page[0]->left_inner_block_content1 }}
                              
                               {{ $page[0]->left_inner_block_title2 }}
                      	</div>
                        
                      	<div id="viewpdf">
                            @foreach ($pdfs as $k => $pdf)
                                         
                                    
                             @if($k == 0)
                             {{ Form::open(array('url' => '/investorrelations/financialinformation/comprehensiveincome','method' => 'post','name' => 'ourproperties', 'id' => 'ourproperties' )) }}       
                                 
                                    <p class="pull-right">View Report Year:
                                 {{ Form::select('datesort', $profieDates, Input::get('datesort'),array('class' => 'form-control','onchange' => 'this.form.submit();')) }}
                                 </p>  
                                 
                                 {{ Form::close() }}  
                             @endif
                                    </p>
                                    <div class="clearfix"></div>
                                            
 <object data="{{ url() }}/{{ $pdf->pdf->url() }}" type="application/pdf" width="100%" height="1300px">
 
  <p>It appears you don't have a PDF plugin for this browser.
  No biggie... you can <a href="{{ url() }}/{{ $pdf->pdf->url() }}">click here to
  download the PDF file.</a></p>
  
</object>                             
                          @endforeach
							

                      	</div>
                      
                     </div>
                     <!-- end panels -->
                    </div>
                  </div>

				  <script type="text/javascript">
                  $('#twitter-bootstrap-tabs').easytabs();
                  </script>
                  
                </div>
                   
              </div>
            </div>
            <i class="icon-dollar right"></i>
          </div>		
@stop
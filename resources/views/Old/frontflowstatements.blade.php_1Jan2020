@extends('layouts.front')
@section('content')

                    
   <!-- Info white-->
         
     
            <!-- Info white-->
        
          <div class="info_white1 border_bottom">
            <div class="container">
              <h2 class="red-title"> {{ $page[0]->left_block1_title }}</h2>
              <div class="clearfix"></div>
              
              <div class="row-fluid">
                <div class="span12">
                	<div id="twitter-bootstrap-container">
                        <div id="twitter-bootstrap-tabs">
                             <ul class="nav nav-tabs">
                              <li><a href="#viewpdf">View PDF</a></li>
                             </ul>
                              @foreach ($pdfs as $k => $pdf)
                             <div class="panels">
                                <div id="viewpdf">              
                                    
                             @if($k == 0)
                             {{ Form::open(array('url' => '/investorrelations/financialinformation/cashflowstatement','method' => 'post','name' => 'ourproperties', 'id' => 'ourproperties' )) }}       
                                 
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
  
</object>                                </div>
                            </div>
                          @endforeach
                           <!-- end panels -->
                       </div>
                  </div>
                  
                
                  
                </div>
                   
              </div>
            </div>
             <i class="icon-dollar right"></i>
          </div>
     
            <script type="text/javascript">
                  $('#twitter-bootstrap-tabs').easytabs();
                  </script>
          <!-- End Info white -->                 
         
		
@stop
@extends('layouts.front2')
@section('content')


        	<!-- Begin main content -->
                    <div class="inner-wrapper">
                        <div class="sidebar-content fullwidth">
                            <div data-elementor-type="wp-page" data-elementor-id="5671" class="elementor elementor-5671" data-elementor-settings="[]">
                                <div class="elementor-inner">
                                    <div class="elementor-section-wrap">
                                        
					<section class="elementor-element elementor-element-e2101b7 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="e2101b7" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-row">
                                            <div class="elementor-element elementor-element-231d024 elementor-column elementor-col-100 elementor-top-column" data-id="231d024" data-element_type="column" data-settings="{&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_is_smoove&quot;:&quot;false&quot;,&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        
                                                        <div class="elementor-element elementor-element-3a8134e elementor-widget__width-inherit elementor-widget elementor-widget-heading" data-id="3a8134e" data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-90,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-140,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                {{ $page[0]->page_title }}
                                                            </div>
                                                        </div>
							
                                                      
							
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </section>
                                      
                                    </div>
                                </div>
                            </div>
                            <div class="comment_disable_clearer">
                            </div>
                        </div>
                    </div>
                    <!-- End main content -->

             {{ $page[0]->left_block1_title }}
              <div class="clearfix"></div>
              
  
                <div class="col-md-12">
                	<div id="twitter-bootstrap-container">
                        <div id="twitter-bootstrap-tabs">
                             <ul class="nav nav-tabs">
                              <li><a href="#viewpdf">View PDF</a></li>
                             </ul>
                              @foreach ($pdfs as $k => $pdf)
                             <div class="blog-post-content-wrapper">
                                <div id="viewpdf">              
                                    
                             @if($k == 0)
                             {{ Form::open(array('url' => '/investorrelations/corporateinformation/oursubsidiaries','method' => 'post','name' => 'oursubsidiaries', 'id' => 'oursubsidiaries' )) }}       
                                 
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
                                </div>
                            </div>
                          @endforeach
                           <!-- end panels -->
                       </div>
                  </div>
                  
                
                  
                </div>
                   

     
            <script type="text/javascript">
                  $('#twitter-bootstrap-tabs').easytabs();
                  </script>
                 
         
		
@stop
@extends('layouts.front2')
@section('content')

          
          <!-- Begin main content -->
                    <div class="inner-wrapper">
                        <div class="sidebar-content fullwidth">
                            <div data-elementor-type="wp-page" data-elementor-id="4903" class="elementor elementor-4903" data-elementor-settings="[]">
                                <div class="elementor-inner">
                                    <div class="elementor-section-wrap">
                                        
									

					<section class="elementor-element elementor-element-db5be31 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="db5be31" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
	                                   	
					<div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-row">
                                            <div class="elementor-element elementor-element-ff8784c elementor-column elementor-col-100 elementor-top-column" data-id="ff8784c" data-element_type="column" data-settings="{&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_is_smoove&quot;:&quot;false&quot;,&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        
                                                        <div class="elementor-element elementor-element-7c720c1 elementor-widget__width-inherit elementor-widget-mobile__width-inherit elementor-widget elementor-widget-heading" data-id="7c720c1" data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-90,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-140,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Latest Bursa Announcements</h2>
                                                                <a href="{{URL('/investorrelations/newscentre/bursaannouncements')}}"><input type="submit" style="float:right" name="Submit" value="Back" class="button"></a>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-35793f8 elementor-widget elementor-widget-avante-blog-posts" data-id="35793f8" data-element_type="widget" data-settings="{&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_is_smoove&quot;:&quot;false&quot;,&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="avante-blog-posts.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="table-respoinsive">
                                                                    <table class="table table-striped">
                                                                        <colgroup>
                                                                            <col width="1">
                                                                            <col width="1">
                                                                            <col>
                                                        
                                                                         </colgroup>
                                                                        <thead>
                                                                        	<tr>
                                                                            	<th>No.</th>
                                                                                <th>Announcement Date</th>
                                                                                <th>Title</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                                    		
                                                         		 			@foreach ($announcelists as $k => $announcelist)
                                                                            <tr>
                                                                            	<td>{{ $k+1 }}</td>
                                                                                <td><div class="label label-danger">{{ date("d F Y",strtotime($announcelist->date_of_publishing)) }}</div> </td>
                                                                                <td><a href="{{ url() }}/{{$details_annc[$announcelist->category]}}/{{ $announcelist->id }}">{{ $announcelist->title }}</a></td>
                                    
                                                                             </tr>
                                                                             @endforeach                  
                                                                         </tbody>
                                                                         <tfoot>
                                                                           	 <tr>
                                                                             	<td></td>
                                                                                <td></td>
                                                                                <td></td>
                                                                             </tr>
                                                                          </tfoot>
                                                                     </table>
                                                                </div><!-- end table responsive -->
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
                          
                        </div>
                    </div>
                    <!-- End main content -->
          
          
          
          <!-- Begin main content -->
                    <div class="inner-wrapper">
                        <div class="sidebar-content fullwidth">
                            <div data-elementor-type="wp-page" data-elementor-id="4903" class="elementor elementor-4903" data-elementor-settings="[]">
                                <div class="elementor-inner">
                                    <div class="elementor-section-wrap">
                                        
									

					<section class="elementor-element elementor-element-db5be31 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="db5be31" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">

					<div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-row">
                                            <div class="elementor-element elementor-element-ff8784c elementor-column elementor-col-100 elementor-top-column" data-id="ff8784c" data-element_type="column" data-settings="{&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_is_smoove&quot;:&quot;false&quot;,&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        
                                                        <div class="elementor-element elementor-element-7c720c1 elementor-widget__width-inherit elementor-widget-mobile__width-inherit elementor-widget elementor-widget-heading" data-id="7c720c1" data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-90,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-140,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">Type of Announcements / News</h2>
                                                            </div>
                                                        </div>
                                                       
							
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </section>



				    <section style="background-color: #f9f9f9;" class="elementor-element elementor-element-db5be31 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="db5be31" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                    	<div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-row">
                                            <div class="elementor-element elementor-element-ff8784c elementor-column elementor-col-100 elementor-top-column" data-id="ff8784c" data-element_type="column" data-settings="{&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_is_smoove&quot;:&quot;false&quot;,&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        
                                                        <div class="elementor-element elementor-element-7c720c1 elementor-widget__width-inherit elementor-widget-mobile__width-inherit elementor-widget elementor-widget-heading" data-id="7c720c1" data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-90,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-140,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <?php
																	foreach($typelisting as $types){
																?>
                                                                <h5 class="margin_top_10px"><?php echo $types->Title;?></h5>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-35793f8 elementor-widget elementor-widget-avante-blog-posts" data-id="35793f8" data-element_type="widget" data-settings="{&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_is_smoove&quot;:&quot;false&quot;,&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="avante-blog-posts.default">
                                                            <div class="elementor-widget-container">
                                                               
															<div class="blog-post-content-wrapper">
                                                            	<div class="row">
																<?php
																  foreach($types->names as $ann)
																  {
															    ?>
                                                                    <div class="col-md-6">
                                                                        <ul class="list unstyled">
                                                                               <li><i class="fa fa-check-circle text-danger"></i>&nbsp; <a href="<?php echo $ann->announcementurl; ?>"><?php echo $ann->announcementname; ?></a></li>
                                                                               
                                                    
                                                                            </ul> 	
                                                                        </div><!-- end col-md-6-->
                                                                        
																		<?php 
																		  }
																		 ?> 
                                            
                                                                </div><!-- end row-->     
																<?php }
             													?>
                                                                        
                                                                </div><!-- blog-post-content-wrapper-->
                                                                
                                                            
							   								</div><!-- end elementor widget container -->
                                                        </div>
							

							
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </section>

				    

			                           <br class="clearfix margin_bottom_10px;">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="comment_disable_clearer">
                            </div>
                        </div>
                    </div>
                    <!-- End main content -->

		
@stop
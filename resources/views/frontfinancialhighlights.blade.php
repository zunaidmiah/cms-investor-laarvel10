@extends('layouts.front2')
@section('content')
   <style>
           
			#year #table1 th, #year #table1 td{ width:32%;} 
			#table1 th:nth-child(1), #table1 td:nth-child(1) { position: absolute;left:100px;   }
			#table1{ width:62%;overflow:auto;margin-left:39%;}

            .highcharts-figure,
            .highcharts-data-table table {
                min-width: 310px;
                max-width: 800px;
                margin: 1em auto;
            }

            #revenue_bar_graph {
                height: 400px;
            }

            .highcharts-data-table table {
                font-family: Verdana, sans-serif;
                border-collapse: collapse;
                border: 1px solid #ebebeb;
                margin: 10px auto;
                text-align: center;
                width: 100%;
                max-width: 500px;
            }

            .highcharts-data-table caption {
                padding: 1em 0;
                font-size: 1.2em;
                color: #555;
            }

            .highcharts-data-table th {
                font-weight: 600;
                padding: 0.5em;
            }

            .highcharts-data-table td,
            .highcharts-data-table th,
            .highcharts-data-table caption {
                padding: 0.5em;
            }

            .highcharts-data-table thead tr,
            .highcharts-data-table tr:nth-child(even) {
                background: #f8f8f8;
            }

            .highcharts-data-table tr:hover {
                background: #f1f7ff;
            }

            .highcharts-figure g.highcharts-button {
                display: none;
            }

            .highcharts-figure {
                margin: 0 auto !important;
            }
        </style>

        <script src="https://code.highcharts.com/highcharts.js"></script>
        <script src="https://code.highcharts.com/modules/exporting.js"></script>
        <script src="https://code.highcharts.com/modules/export-data.js"></script>
        <script src="https://code.highcharts.com/modules/accessibility.js"></script>

         <script type="text/javascript">
		   $(function(){
		    $("#year #table1 th").attr('nowrap','nowrap');

            //Highcharts.chart('container', {
            $('#revenue_bar_graph').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Revenue',
                    useHTML: true,
                },
                subtitle: {
                text: "(in RM mil)"
                },
                colors: [
                '#666666',
                '#666666',
                '#666666',
                '#666666',
                '#1e398d',
                ],
                xAxis: {
                    categories: [
                        '2018',
                        '2019',
                        '2020',
                        '2021',
                        '2022',
                    ],
                    labels: {
                    useHTML: true,
                    formatter: function () {
                        console.log(this.value);
                        return '<div class="labelchart">' + this.value + '</div>';
                    }
                    },
                    lineColor: '#444',
                },
                yAxis: {
                    alternateGridColor: '#f9f9f9',
                    title: {
                    text: ''
                    }
                },
                credits: {
                enabled: false
                },
                legend: {
                enabled: false
                },
                tooltip: {
                //valueDecimals: 2, //set to 2 decimal point
                shared: true
                },
                plotOptions: {
                series: {
                    colorByPoint: true
                },
                column: {
                    pointPadding: 0.1,
                    borderWidth: 0,
                    dataLabels: {
                    enabled: false,	//'True' to display Bar figure
                    }
                },
                },
                series: [{
                name: '(RM mil)',
                data: [25.16, 24.897, 11.355, 9.278, 20.627],
                //color:'#0d80c5'
                }]
            });

		   });
          </script>	          
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
                                                                {{ $page[0]->page_title }}
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-35793f8 elementor-widget elementor-widget-avante-blog-posts" data-id="35793f8" data-element_type="widget" data-settings="{&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_is_smoove&quot;:&quot;false&quot;,&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="avante-blog-posts.default">
                                                            <div class="elementor-widget-container">

                                                                <!-- Bar Graph -->
                                                                <figure class="highcharts-figure">
                                                                    <div id="revenue_bar_graph"></div>
                                                                </figure>

                                                                {{$page[0]->left_block1_title }}

                                                                <div id="twitter-bootstrap-container">
                                                                    <div id="twitter-bootstrap-tabs">
                                                                     <ul class="nav nav-tabs">
                                                                      <li><a href="#year">View by Year</a></li>
                                                                      <li><a href="#quarter">View by Quarter</a></li>
                                                                     </ul>
                                                                     <div class="panels">
                                                                        <div id="year">
                                                                            {{ $page[0]->left_block1_content }}
                                                                            {{ $page[0]->left_block2_title }}
                                                               
                                                                        </div>
                                                                        
                                                                        <div id="quarter">
                                                                            
                                                                            <h5>{{ $page[0]->left_block2_content }}</h5>
                                                                            <div id="revenue">
                            													<div class="row">
                                                                            		<div id="spline-with-symbols1"></div>
                                                                             	</div>
																			{{ $page[0]->left_block3_title }}
                               												</div><!-- end revenue-->
                                                
                                                                              <h5> {{ $page[0]->left_block3_content }}</h5>
                                                                              <div id="profit_before_sale">
                                                                                  <div class="row">
                                                                                    <div id="spline-with-symbols2"></div>
                                                                                  </div>
                                                                              
                                                                               {{ $page[0]->left_inner_block_title1 }}
                                                                              </div><!-- end profit before sale-->
                                                                              
                                                                              
                                                                              <h5>{{ $page[0]->left_inner_block_content1 }}</h5>
                                                                              <div id="profit_after_sale">
                                                                                  <div class="row">
                                                                                    <div id="spline-with-symbols3"></div>
                                                                                  </div>
                                                                              
                                                                                {{ $page[0]->left_inner_block_title2 }}
                                                                                </div><!-- end profit after sale -->
                                                                              
                                                                        </div>
                                                                     </div>
                                                                     <!-- end panels -->
                                                                    </div>
                                                                  </div>
                                                
                                                                  <script type="text/javascript">
                                                                  $('#twitter-bootstrap-tabs').easytabs();
                                                                  </script>
                                
                                                                <br class="clear">
							    
																{{ $page[0]->left_inner_block_content2 }}
	
							 
                                                            </div><!--elementor-widget-container-->
                                                        </div><!--elementor-element-35793f8-->
                                                        
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

					
                    
@stop
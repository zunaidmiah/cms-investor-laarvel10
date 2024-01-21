@extends('layouts.front')
@section('content')
 
@if($popup->status=='1')
<a class="hidden" data-fancybox  id="onload" href="{{asset('images/'.$popup->image)}}"> </a>
@endif      
            <!-- Begin content -->
            <div id="page-content-wrapper" class="">
                <div class="inner">
                    <!-- Begin main content -->
                    <div class="inner-wrapper">
                        <div class="sidebar-content fullwidth">
                            <div data-elementor-type="wp-page" data-elementor-id="4074" class="elementor elementor-4074" data-elementor-settings="[]">
                                <div class="elementor-inner">
                                    <div class="elementor-section-wrap">
                                        <section class="elementor-element elementor-element-fb7667e elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"  data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;shape_divider_bottom&quot;:&quot;curve&quot;,&quot;shape_divider_bottom_negative&quot;:&quot;yes&quot;}">
                                        <div class="elementor-shape elementor-shape-bottom" data-negative="true">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 1000 100" preserveaspectratio="none">
                                            <path class="elementor-shape-fill" d="M500,97C126.7,96.3,0.8,19.8,0,0v100l1000,0V1C1000,19.4,873.3,97.8,500,97z"></path>
                                            </svg>
                                        </div>
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-element elementor-element-badcbdc elementor-column elementor-col-100 elementor-top-column"  data-element_type="column" >
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-7bef6e7 elementor-widget elementor-widget-avante-slider-parallax"  data-element_type="widget"  data-widget_type="avante-slider-parallax.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="slider-parallax-wrapper" data-autoplay="8000" data-pagination="0" data-navigation="1">
                                                                        <div class="slider_parallax_inner">
                                                                            <div class="slider_parallax_slides">
                                                                             
                                                                                @foreach ($montages as $index=>$montage)
                                                                                <div class="slide @if ($index==0) is-active @endif">
                                                                                  <div class="slide-content align-center">
                                                                                      <div class="standard-wrapper">
                                                                                          <div class="caption">
                                                                                            <div class="title">
                                                                                                <h2>{{$montage->title}}</h2>
                                                                                            </div>
                                                                                            <div class="text " style="color: white">
                                                                                                {{strip_tags($montage->body)}}
                                                                                            </div>
                                                                                          
                                                                                            @if($montage->MoreStatus == 1)
                                                                                           <a href="{{$montage->url}}" class="button animated fadeInUp">
                                                                                               <span><i class="icon-hand-right"></i></span>Explore More</a>
                                                                                            @endif
                                                                                           
                                                                                          </div>
                                                                                      </div>
                                                                                  </div>
                                                                                  <div class="image-container">
                                                                                      <img src="{{ URL::asset('uploads/slides/'.$montage->Banner) }}" alt="" class="image">
                                                                                  </div>
                                                                              </div>
                                                                                @endforeach
                                                                               
                                                                                <!--<div class="slide ">
                                                                                    <div class="slide-content align-center">
                                                                                        <div class="standard-wrapper">
                                                                                            <div class="caption">
                                                                                                <div class="title">
                                                                                                    <h2>Our Strength Is Our Ability</h2>
                                                                                                </div>
                                                                                                <div class="text">
                                                                                                     We can tap into our collective mindshare
                                                                                                </div>
                                                                                                <a class="button" href="{{ URL::to('bursa/contactus') }}">
                                                                                                Get In Touch </a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="image-container">
                                                                                        <img src="/assets/new/upload/business-man-and-woman-meeting-at-work-in-office-QX9VMGL.jpg" alt="" class="image">
                                                                                    </div>
                                                                                </div>-->
                                                                            </div>
                                                                            <div class="arrows">
                                                                                <div class="arrow prev">
                                                                                    <span class="svg svg-arrow-left">
                                                                                    <svg version="1.1" id="svg4-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewbox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve"><path d="M13,26c-0.256,0-0.512-0.098-0.707-0.293l-12-12c-0.391-0.391-0.391-1.023,0-1.414l12-12c0.391-0.391,1.023-0.391,1.414,0s0.391,1.023,0,1.414L2.414,13l11.293,11.293c0.391,0.391,0.391,1.023,0,1.414C13.512,25.902,13.256,26,13,26z"></path></svg>
                                                                                    <span class="alt sr-only"></span>
                                                                                    </span>
                                                                                </div>
                                                                                <div class="arrow next">
                                                                                    <span class="svg svg-arrow-right">
                                                                                    <svg version="1.1" id="svg5-Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14px" height="26px" viewbox="0 0 14 26" enable-background="new 0 0 14 26" xml:space="preserve"><path d="M1,0c0.256,0,0.512,0.098,0.707,0.293l12,12c0.391,0.391,0.391,1.023,0,1.414l-12,12c-0.391,0.391-1.023,0.391-1.414,0s-0.391-1.023,0-1.414L11.586,13L0.293,1.707c-0.391-0.391-0.391-1.023,0-1.414C0.488,0.098,0.744,0,1,0z"></path></svg>
                                                                                    <span class="alt sr-only"></span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </section>
                                        <section class="elementor-element elementor-element-b1a9c78 elementor-section-stretched elementor-section-height-min-height elementor-section-items-top elementor-section-boxed elementor-section-height-default elementor-section elementor-top-section"  data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-background-overlay">
                                        </div>
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-element elementor-element-091affe elementor-column elementor-col-33 elementor-top-column"  data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;avante_ext_is_scrollme&quot;:&quot;true&quot;,&quot;avante_ext_scrollme_disable&quot;:&quot;tablet&quot;,&quot;avante_ext_scrollme_smoothness&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:50,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:100,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_scalez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-6d799e4 elementor-widget elementor-widget-heading"  data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="heading.default">
                                                                <div class="elementor-widget-container">
                                                                    <h2 class="elementor-heading-title elementor-size-default">{{ $homePageData->heading1 }}</h2>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-8b91059 elementor-widget-divider--separator-type-pattern elementor-widget elementor-widget-divider"  data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="divider.default">
                                                                
                                                            </div>
                                                            <div class="elementor-element elementor-element-3b14cce elementor-widget elementor-widget-text-editor"  data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="text-editor.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-text-editor elementor-clearfix">
                                                                        <div class="lqd-lines split-unit lqd-unit-animation-done">
                                                                          {{$homePageData->body1}}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-7b8683d elementor-column elementor-col-66 elementor-top-column"  data-element_type="column" >
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <section class="elementor-element elementor-element-f2a4f49 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-inner-section"  data-element_type="section">
                                                            <div class="elementor-container elementor-column-gap-default">
                                                                <div class="elementor-row">
                                                                    <div class="elementor-element elementor-element-3a4292d elementor-column elementor-col-33 elementor-inner-column"  data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;avante_ext_is_scrollme&quot;:&quot;true&quot;,&quot;avante_ext_scrollme_disable&quot;:&quot;tablet&quot;,&quot;avante_ext_scrollme_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-100,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_smoothness&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:30,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_scalez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_is_smoove&quot;:&quot;false&quot;,&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}">
                                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                                            <div class="elementor-widget-wrap">
                                                                                <div class="elementor-element elementor-element-c9aba2b elementor-widget elementor-widget-image"  data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:500,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.7,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.7,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="image.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-image">
                                                                                            <img width="184" height="116" src="{{ URL::asset('uploads/corporates/'.$corporate_information_create[0]->image) }}" class="attachment-large size-large" alt="">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-8447cf0 elementor-widget elementor-widget-heading"  data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="heading.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <h2 class="elementor-heading-title elementor-size-default">{{$corporate_information_create[0]->title}}</h2>
                                                                                    </div>
                                                                                </div>
                       
                                                                                <div class="elementor-element elementor-element-ff2c4b7 elementor-widget elementor-widget-text-editor"  data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="text-editor.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                                            <div class="lqd-lines split-unit lqd-unit-animation-done">
                                                                                                <p class="p1">
                                                                                                    {{$corporate_information_create[0]->text}}
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-134ab24 elementor-column elementor-col-33 elementor-inner-column"  data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;avante_ext_is_scrollme&quot;:&quot;true&quot;,&quot;avante_ext_scrollme_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:120,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_disable&quot;:&quot;mobile&quot;,&quot;avante_ext_scrollme_smoothness&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:30,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_scalez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_is_smoove&quot;:&quot;false&quot;,&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}">
                                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                                            <div class="elementor-widget-wrap">
                                                                                <div class="elementor-element elementor-element-3d4a67c elementor-widget elementor-widget-image"  data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:500,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.7,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.7,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="image.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-image">
                                                                                            <img width="152" height="156" src="{{ URL::asset('uploads/corporates/'.$corporate_information_create[1]->image) }}" class="attachment-large size-large" alt="">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-7bf36ea elementor-widget elementor-widget-heading"  data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="heading.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <h2 class="elementor-heading-title elementor-size-default">{{$corporate_information_create[1]->title}}</h2>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="elementor-element elementor-element-8f08a44 elementor-widget elementor-widget-text-editor"  data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="text-editor.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                                            <div class="lqd-lines split-unit lqd-unit-animation-done">
                                                                                                <p class="p1">
                                                                                                    {{$corporate_information_create[1]->text}}
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="elementor-element elementor-element-6812087 elementor-column elementor-col-33 elementor-inner-column"  data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;avante_ext_is_scrollme&quot;:&quot;true&quot;,&quot;avante_ext_scrollme_disable&quot;:&quot;tablet&quot;,&quot;avante_ext_scrollme_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-120,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_smoothness&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:30,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_scalez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_is_smoove&quot;:&quot;false&quot;,&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}">
                                                                        <div class="elementor-column-wrap elementor-element-populated">
                                                                            <div class="elementor-widget-wrap">
                                                                                <div class="elementor-element elementor-element-ccbc68f elementor-widget elementor-widget-image"  data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:500,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.7,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0.7,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="image.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-image">
                                                                                            <img width="100" height="124" src="{{ URL::asset('uploads/corporates/'.$corporate_information_create[2]->image) }}" class="attachment-large size-large" alt="">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="elementor-element elementor-element-b82a783 elementor-widget elementor-widget-heading"  data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="heading.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <h2 class="elementor-heading-title elementor-size-default">{{$corporate_information_create[2]->title}}</h2>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="elementor-element elementor-element-ae8fd97 elementor-widget elementor-widget-text-editor"  data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="text-editor.default">
                                                                                    <div class="elementor-widget-container">
                                                                                        <div class="elementor-text-editor elementor-clearfix">
                                                                                            <div class="lqd-lines split-unit lqd-unit-animation-done">
                                                                                                <p class="p1">
                                                                                                    {{$corporate_information_create[2]->text}}
                                                                                                </p>
                                                                                            </div>
                                                                                        </div>
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
                                        </section>
                                        

					<section class="elementor-element elementor-element-05cc049 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="05cc049" data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                
						<div class="elementor-element elementor-element-2a0293b elementor-column elementor-col-25 elementor-top-column" data-id="2a0293b" data-element_type="column" data-settings="{&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_is_smoove&quot;:&quot;false&quot;,&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-2002061 elementor-widget elementor-widget-counter" data-id="2002061" data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-90,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-140,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="counter.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-counter">
                                                                        <div class="elementor-counter-title">
                                                                             KLSE
                                                                        </div>
									<div class="elementor-counter-number-wrapper">
                                                                            <span class="elementor-counter-number-prefix"></span>
                                                                            <span class="elementor-counter-number" style="font-size: 32px; color: #015AAA;">LIENHOE</span>
                                                                            <span class="elementor-counter-number-suffix"></span>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
						<div class="elementor-element elementor-element-2a0293b elementor-column elementor-col-25 elementor-top-column" data-id="2a0293b" data-element_type="column" data-settings="{&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_is_smoove&quot;:&quot;false&quot;,&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-2002061 elementor-widget elementor-widget-counter" data-id="2002061" data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-90,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-140,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="counter.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-counter">
                                                                        <div class="elementor-counter-title">
                                                                             Stock Code
                                                                        </div>
									<div class="elementor-counter-number-wrapper">
                                                                            <span class="elementor-counter-number-prefix"></span>
                                                                            <span class="elementor-counter-number" style="font-size: 32px; color: #015AAA;">3573</span>
                                                                            <span class="elementor-counter-number-suffix"></span>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-f8bc87e elementor-column elementor-col-25 elementor-top-column" data-id="f8bc87e" data-element_type="column" data-settings="{&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_is_smoove&quot;:&quot;false&quot;,&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-d4f98a1 elementor-widget elementor-widget-counter" data-id="d4f98a1" data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-90,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-140,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="counter.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-counter">
                                                                        
									<div class="elementor-counter-title">
                                                                            Open
                                                                        </div>
									<div class="elementor-counter-number-wrapper">
                                                                            <span class="elementor-counter-number-prefix"></span>
                                                                            <span class="elementor-counter-number" style="font-size: 32px; color: #015AAA;">@if($stockdata[0]->open == 0) - @else {{$stockdata[0]->open}} @endif</span>
                                                                            <span class="elementor-counter-number-suffix"></span>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-525fe0f elementor-column elementor-col-25 elementor-top-column" data-id="525fe0f" data-element_type="column" data-settings="{&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_is_smoove&quot;:&quot;false&quot;,&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-755821e elementor-widget elementor-widget-counter" data-id="755821e" data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-90,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-140,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="counter.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-counter">
									<div class="elementor-counter-title">
                                                                            Last Done
                                                                            <?php
                                                                            if ($stockdata[0]->adj > 0)
                                                                            {
                                                                                $sclass = "stock_number_up";
                                                                                $iclass = "fa fa-arrow-up";
                                                                            }
                                                                            else if ($stockdata[0]->adj < 0)
                                                                            {
                                                                                $sclass = "stock_number_down";
                                                                                $iclass = "fa fa-arrow-down";
                                                                            }
                                                                            else{
                                                                                $sclass = "";
                                                                                $iclass = "";
                                                                            }
                                        
                                                                         ?> <style> .stock_number_up{font-size:28px; color: #339966;}.stock_number_down{font-size:28px; color: rgb(255, 0, 0);} </style>
                                                                        </div>                                                                        
									<div class="elementor-counter-number-wrapper">
                                                                            <span class="elementor-counter-number-prefix"></span>
                                                                            <span class="elementor-counter-number" style="font-size: 32px; color: #015AAA; padding-right: 5px;">@if($stockdata[0]->last_done == 0) - @else {{$stockdata[0]->last_done}} @endif</span><span class="{{ $sclass }}"><i class="  {{ $iclass }}" ></i></span>
                                                                            <span class="elementor-counter-number-suffix"></span>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-7c4c84b elementor-column elementor-col-25 elementor-top-column" data-id="7c4c84b" data-element_type="column" data-settings="{&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_is_smoove&quot;:&quot;false&quot;,&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}">
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-1ed49e2 elementor-widget elementor-widget-counter" data-id="1ed49e2" data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-90,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-140,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="counter.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-counter">
                                                                        <div class="elementor-counter-title">
                                                                            Volume
                                                                        </div>
									<div class="elementor-counter-number-wrapper">
                                                                            <span class="elementor-counter-number-prefix"></span>
                                                                            <span class="elementor-counter-number" style="font-size: 32px; color: #015AAA;">@if($stockdata[0]->volume == 0) - @else {{$stockdata[0]->volume}} @endif</span>
                                                                            <span class="elementor-counter-number-suffix"></span>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </section>
                                        <div id="price_ticker_container" class="text-center">
                                        	@foreach($stockdata as $ticker)
                                            <p>Quotes Last Updated: {{date('d F Y H:i:s', strtotime($ticker->date))}}.  All Prices Are Quoted In Ringgit Malaysia.</p>
                                            @endforeach
                                        </div>

                                        <section class="elementor-element elementor-element-4a74c44 elementor-section-stretched elementor-section-full_width elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"  data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-element elementor-element-2e835ee elementor-column elementor-col-100 elementor-top-column"  data-element_type="column" >
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-debe417 elementor-widget elementor-widget-avante-background-list"  data-element_type="widget"  data-widget_type="avante-background-list.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="background-list-wrapper three-cols">
                                                                        <!--<div class="background-list-column ">
                                                                            <div class="background-list-content">
                                                                                <div class="background-list-title">
                                                                                    <h3>Energy</h3>
                                                                                </div>
                                                                                <div class="background-list-link">
                                                                                    <div class="background-list-desc">
                                                                                        The plants operate under the Feed In Tariff Renewable Energy Act 2011, and collectively generated a total of 1.5MW of electricity in general every year.
                                                                                    </div>
                                                                                    <a class="button ghost" href="#">Learn More</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <figure class="background-list-img hover">
                                                                        <div class="background-list-overlay">
                                                                        </div>
                                                                        <img src="/assets/new/images/index/img_energy.jpg" alt="Energy">
                                                                        </figure>-->
                                                                        <div class="background-list-column ">
                                                                            <div class="background-list-content">
                                                                                <div class="background-list-title">
                                                                                    <h3>{{strip_tags($businesses_create[1]->title)}}</h3>
                                                                                </div>
                                                                                <div class="background-list-link">
                                                                                    <div class="background-list-desc">
                                                                                       {{strip_tags($businesses_create[1]->text)}}
                                                                                    </div>
                                                                                    <a class="button ghost" href="{{$businesses_create[1]->url}}">Learn More</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <figure class="background-list-img ">
                                                                        <div class="background-list-overlay">
                                                                        </div>
                                                                        <img src="{{ URL::asset('uploads/corporates/'.$businesses_create[1]->image) }}" alt="Property Development & Infrastructure">
                                                                        </figure>
                                                                        <div class="background-list-column ">
                                                                            <div class="background-list-content">
                                                                                <div class="background-list-title">
                                                                                    <h3>{{strip_tags($businesses_create[0]->title)}}</h3>
                                                                                </div>
                                                                                <div class="background-list-link">
                                                                                    <div class="background-list-desc">
                                                                                       {{strip_tags($businesses_create[0]->text)}}
                                                                                    </div>
                                                                                    <a class="button ghost" href="{{$businesses_create[0]->url}}">Learn More</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <figure class="background-list-img ">
                                                                        <div class="background-list-overlay">
                                                                        </div>
                                                                        <img src="{{ URL::asset('uploads/corporates/'.$businesses_create[0]->image) }}" alt="Strategic Business">
                                                                        </figure>
                                                                        <div class="background-list-column last">
                                                                            <div class="background-list-content">
                                                                                <div class="background-list-title">
                                                                                    <h3>{{strip_tags($businesses_create[2]->title)}}</h3>
                                                                                </div>
                                                                                <div class="background-list-link">
                                                                                    <div class="background-list-desc">
                                                                                       {{strip_tags($businesses_create[2]->text)}}
                                                                                    </div>
                                                                                    <a class="button ghost" href="{{$businesses_create[2]->url}}">Learn More</a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <figure class="background-list-img ">
                                                                        <div class="background-list-overlay">
                                                                        </div>
                                                                        <img src="{{ URL::asset('uploads/corporates/'.$businesses_create[2]->image) }}" alt="Land, Asset & Facility Management">
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </section>

                                        <section class="elementor-element elementor-element-df28148 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"  data-element_type="section">
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-element elementor-element-aeea03c elementor-column elementor-col-50 elementor-top-column"  data-element_type="column" >
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-32597b7 elementor-widget__width-initial elementor-widget-tablet__width-initial elementor-absolute elementor-hidden-tablet elementor-hidden-phone elementor-widget elementor-widget-image"  data-element_type="widget" data-settings="{&quot;avante_ext_is_infinite&quot;:&quot;true&quot;,&quot;avante_ext_infinite_animation&quot;:&quot;if_scale&quot;,&quot;avante_ext_infinite_duration&quot;:3,&quot;_position&quot;:&quot;absolute&quot;,&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_is_smoove&quot;:&quot;false&quot;,&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_infinite_easing&quot;:&quot;0.250, 0.250, 0.750, 0.750&quot;}" data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image">
                                                                        <img width="90" height="90" src="assets/new/upload/blue_bubble.png" class="attachment-large size-large" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-35ce208 elementor-widget__width-initial elementor-absolute elementor-hidden-tablet elementor-hidden-phone elementor-widget elementor-widget-image"  data-element_type="widget" data-settings="{&quot;avante_ext_is_scrollme&quot;:&quot;true&quot;,&quot;avante_ext_scrollme_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:80,&quot;sizes&quot;:[]},&quot;_position&quot;:&quot;absolute&quot;,&quot;avante_ext_scrollme_disable&quot;:&quot;mobile&quot;,&quot;avante_ext_scrollme_smoothness&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:30,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_scalez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_scrollme_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_is_smoove&quot;:&quot;false&quot;,&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;}" data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image">
                                                                        <img width="70" height="70" src="assets/new/upload/orange_bubble.png" class="attachment-large size-large" alt="">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-868d36d elementor-widget__width-auto elementor-widget-mobile__width-auto elementor-widget elementor-widget-heading"  data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-90,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-140,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="heading.default">
                                                                <div class="elementor-widget-container">
                                                                    <h2 class="elementor-heading-title elementor-size-default text-center">Media News</h2>
                                                                </div>
                                                            </div>
                                                            <!--<div class="elementor-element elementor-element-841415f elementor-widget__width-auto elementor-widget-mobile__width-auto elementor-widget-divider--separator-type-pattern elementor-widget elementor-widget-divider"  data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-90,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-140,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="divider.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-divider"  >
                                                                        <span class="elementor-divider-separator">
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>-->
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--<div class="elementor-element elementor-element-3499695 elementor-column elementor-col-50 elementor-top-column"  data-element_type="column" >
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-649be58 elementor-align-right elementor-widget__width-auto elementor-mobile-align-left elementor-widget-mobile__width-inherit elementor-widget elementor-widget-button"  data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-90,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-140,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="button.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-button-wrapper">
                                                                        <a href="#" class="elementor-button-link elementor-button elementor-size-md" role="button">
                                                                        <span class="elementor-button-content-wrapper">
                                                                        <span class="elementor-button-icon elementor-align-icon-right">
                                                                        <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i></span>
                                                                        <span class="elementor-button-text">Visit All News</span>
                                                                        </span>
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>-->
                                            </div>
                                        </div>
                                        </section>
                                        <div class="margin_top_20px"></div>
                                        
                                        <section class="elementor-element elementor-element-db5be31 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="db5be31" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
                                    	<div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-row">
                                            <div class="elementor-element elementor-element-ff8784c elementor-column elementor-col-100 elementor-top-column" data-id="ff8784c" data-element_type="column" data-settings="{&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_is_smoove&quot;:&quot;false&quot;,&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                   <div class="elementor-widget-container">
                                                                @foreach (array_chunk($latestNews,2) as $chunk)  
																<div class="blog-post-content-wrapper">
                                                                    @foreach ($chunk as $latestNew)
                                                                    <div class="col-md-6">
                   														<ul class="list unstyled">
                    							   							<li><div class="post-content-wrapper text-">
                                                                                    <div class="post-header">
                                                                                        <div class="post-detail single-post">
                                                                                            <span class="post-info-cat"><a href="#"></a>  &nbsp;&middot;&nbsp; {{ date("d M, Y",$latestNew->date) }}  </span>
                                                                                        </div>
                                                                                        <div class="post-header-title">
                                                                                            <h6><a href="{{ URL::to('media_news/news/news_centre_latest_media_news_details?show=' . $latestNew->id) }}">{{ $latestNew->title }}</a></h6>
                                                                                        </div>
											                                        </div>
                                                                                </div>
                                                                            </li>                        
                    							                        </ul> 	
                						                            </div><!-- end col-md-6-->
                                                                     @endforeach
                                                                </div><!-- blog-post-content-wrapper-->
                                                                <br class="clear">
                                                                <div class="margin_top_20px"></div>
                                                                @endforeach
                                                            </div><!-- end elementor widget container -->
                                                        </div>
							

							
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </section>
                                        
                      			
<section class="elementor-element elementor-element-509d473 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"  data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-background-overlay">
                                        </div>
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-element elementor-element-174d4c6 elementor-column elementor-col-66 elementor-top-column"  data-element_type="column" >
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-e10c44d animation elementor-widget__width-auto elementor-widget-tablet__width-inherit elementor-widget elementor-widget-image"  data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;false&quot;,&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="image.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-image">
                                                                        <!--<img width="1260" height="840" src="{{ URL::asset('uploads/slides/'.$BottomMontages[0]->Banner) }}" class="attachment-full size-full" alt="" >-->
    
                                                                    		
                                                                            <div class="col-md-10 col-sm-12 col-xs-12">
                                                                            	
                                                                                <hr>
                                                                                <div class="card">
                                                                                              <div class="panel-heading"><h4>Share Price</h4></div>
                                                                                              <div class="card-body">
                                                                                        
                    																			
                                                                                               <!--<div id="candlestick"></div>-->
                                                                                                <div id="share-price"></div>
                                                                                         
                  																			   </div>
                                                                                            </div>
                                                                                           
                                                                                <hr>            
                   																
                                                                           
              
                                                                            	
                                                                        </div><!-- end col-md-6-->
                                                                        <div class="clearfix"></div>
                                            
                                                                        <div class="col-md-5 col-sm-12 col-xs-12">
                                               
                                                                            <ul class="list unstyled">
                                                                              
                                                                            	
                                                                               <li><div class="post-content-wrapper text-">
                                                                                    <div class="panel-heading"><h4>Latest Quarterly Report</h4></div>
                                                                                    <div class="margin_top_10px"></div>
                                                                                    <div class="post-header">
                                                                                        
                                                                                        <div class="post-header-title">
                                                                                         
                                                                                            <a href="{{ URL::to('bursa/public/system/Report/pdf3s/000/000/037/original/LHC_Q3_2022.pdf') }}" target="_blank"><img src="assets/new/images/index/img_quarterly_report.jpg"></a>
                                                                                        </div>
											
                                                                                    </div>
                                                                                    
                                                                                </div><!-- end post-wrapper-->
                                                                            </li>
                        						   
                        
                                                                        </ul> 
                                                                        <div class="margin_top_20px"></div>
                                                                        <hr>	
                                                                    </div><!-- end col-md-6-->
                                                                    
                                                                    <div class="col-md-5 col-sm-12 col-xs-12">
                                                                      
                                                                            <ul class="list unstyled">
                                                                               <li><div class="post-content-wrapper">
                                                                               	    <div class="panel-heading"><h4>Latest Annual Report</h4></div>
                                                                                    <div class="margin_top_10px"></div>
                                                                                    <div class="post-header">
                                                                                       
                                                                                        <div class="post-header-title">
                                                                                            <a href="http://bursa.investor.com.my/system/Report/pdfs/000/000/033/original/LH_AR_2021.pdf" target="_blank"><img src="assets/new/images/annual_report/img2021.jpg"></a>
                                                                                        </div>
                                                                                        
											
                                                                                    </div>
                                                                                    
                                                                                </div></li>
                        
                                                                        </ul> 
                                                                        <div class="margin_top_20px"></div>
                                                                        <hr>	
                                                                    </div><!-- end col-md-6-->
																				
             
                                                                        
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="elementor-element elementor-element-dffa352 elementor-column elementor-col-33 elementor-top-column"  data-element_type="column" >
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-48a942d elementor-widget__width-auto elementor-widget elementor-widget-heading"  data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-90,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-140,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="heading.default">
                                                                <div class="elementor-widget-container">
                                                                    <h2 class="elementor-heading-title elementor-size-default">{{$BottomMontages[0]->title}}</h2>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-155d56c elementor-widget elementor-widget-heading"  data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-90,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-140,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="heading.default">
                                                                <div class="elementor-widget-container">
                                                                    <span class="elementor-heading-title elementor-size-default"><!--{{$BottomMontages[0]->body}}-->
                                                                    	
                                                                        <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                                                                              <tr>
                                                                                <td width="70" height="70" bgcolor="#015AAA" style="color: #fff; line-height: 18px; padding: 15px 10px; font-size: 16px; text-align: center;" > 17 Jun 2022</td>
                                                                                <td width="10"></td>        
                                                                                <td><h7><a href="http://bursa.investor.com.my/investorrelations/frontgeneralmeetingdetail/3101">GENERAL MEETINGS: Outcome of Meeting</a></h7></td>
                                                                               
                                                                          	  </tr>
                                                                              <tr>
                                                                              	<td colspan="2"> <div class="margin_top_20px"></div></td>
                                                                              </tr>
                                                                              <tr>
                                                                                <td width="70" height="70"  bgcolor="#015AAA" style="color: #fff; line-height: 18px; padding: 15px 10px; font-size: 16px; text-align: center; margin-bottom: 20px;">17 Jun 2022</td>
                                                                                <td width="10"></td>
                                                                                <td><h7><a href="http://bursa.investor.com.my/investorrelations/frontgeneralmeetingdetail/3095">GENERAL MEETINGS: Notice of Meeting</a></h7></td>
                                                                                
                                                                          </tr>
                                                                    </table>

                                                                       
                                                                  </span>
                                                              </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-82621aa elementor-view-stacked elementor-widget__width-auto elementor-shape-circle elementor-widget elementor-widget-icon"  data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-90,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-140,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="icon.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-icon-wrapper">
                                                                        <a class="elementor-icon" href="#">
                                                                        <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            @if($BottomMontages[0]->MoreStatus == 1)
                                                            {{-- <a href="{{$BottomMontages[0]->url}}" class="button animated fadeInUp">
                                                                <span><i class="icon-hand-right"></i></span>Explore More</a> --}}
                                                                <div class="elementor-element elementor-element-14bb544 elementor-widget__width-auto elementor-widget elementor-widget-heading"  data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-90,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-140,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="heading.default">
                                                                    <div class="elementor-widget-container">
                                                                        <span class="elementor-heading-title elementor-size-default"><!--<a href="{{ URL::to('bursa/investorrelations/financialinformation/segmentalanalysis') }}">-->
                                                                        <a href="{{ URL::to('bursa/investorrelations/newscentre/bursaannouncements') }}">View all</a></span>
                                                                    </div>
                                                                </div>
                                                             @endif
                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </section>

                                        
                                        <section class="elementor-element elementor-element-dedb10d elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"  data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-background-overlay">
                                        </div>
                                        <div class="elementor-container elementor-column-gap-default">
                                            <div class="elementor-row">
                                                <div class="elementor-element elementor-element-41efb89 elementor-column elementor-col-100 elementor-top-column"  data-element_type="column" >
                                                    <div class="elementor-column-wrap elementor-element-populated">
                                                        <div class="elementor-widget-wrap">
                                                            <div class="elementor-element elementor-element-a9770aa elementor-widget__width-inherit elementor-widget-tablet__width-inherit elementor-widget elementor-widget-heading"  data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-90,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-140,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="heading.default">
                                                                <div class="elementor-widget-container">
                                                                    <h2 class="elementor-heading-title elementor-size-default">We help you to <span class="elementor-heading-title elementor-size-default">unlock</span> & <span class="elementor-heading-title elementor-size-default">unleash</span> the power within.</h2>
                                                                </div>
                                                            </div>
                                                            <div class="elementor-element elementor-element-c0b132e elementor-widget__width-inherit elementor-widget-tablet__width-inherit elementor-widget elementor-widget-heading"  data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-90,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-140,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="heading.default">
                                                                <!--<div class="elementor-widget-container">
                                                                    <h2 class="elementor-heading-title elementor-size-default">together</h2>
                                                                </div>-->
                                                            </div>
                                                            <div class="elementor-element elementor-element-bbce998 elementor-align-center elementor-widget elementor-widget-button"  data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-90,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-140,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_duration&quot;:400,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="button.default">
                                                                <div class="elementor-widget-container">
                                                                    <div class="elementor-button-wrapper">
                                                                        <a href="{{ URL::to('bursa/contactus') }}" class="elementor-button-link elementor-button elementor-size-md" role="button">
                                                                        <span class="elementor-button-content-wrapper">
                                                                        <span class="elementor-button-icon elementor-align-icon-right">
                                                                        <i aria-hidden="true" class="fas fa-long-arrow-alt-right"></i></span>
                                                                        <span class="elementor-button-text">Get In Touch</span>
                                                                        </span>
                                                                        </a>
                                                                    </div>
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
                </div>
            </div>
        </div>
        @endsection
        @section('js')
        <script>
            // basic area chart
            var options = {
                chart: {
                    height: 280,
                    type: 'area',
                    zoom: {
                        enabled: false
                    },
                    toolbar:{
                      show: false
                    }
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'straight'
                },
                series: [{
                    name: "LIENHOE 3573",
                    data: [
                    @foreach($share_price as $data)
                      '{{$data->last_done}}',
                    @endforeach
                ],
                }],
                title: {
                    text: 'LIENHOE 3573',
                    align: 'left'
                },
                /*subtitle: {
                    text: 'Price Movements',
                    align: 'left'
                },*/
                labels: [
                    @foreach($share_price as $data)
                      '{{$data->date}}',
                    @endforeach
                ],
                xaxis: {
                    type: 'datetime',
                },
                yaxis: {
                    /*opposite: true*/
                    opposite: false
                },
                legend: {
                    horizontalAlign: 'left'
                },
                colors:[ zetaAdminConfig.primary ]

            }

            var chart = new ApexCharts(
                document.querySelector("#share-price"),
                options
            );

            chart.render();
        </script>  
        @endsection
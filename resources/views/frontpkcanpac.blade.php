@extends('layouts.front')
@section('content')

                 
                    <div class="container">
                <div class="clearfix">
                  <div class="grid_12">
                    <header class="entry-header clearfix">
                      <div class="format-icon">
                        <div class="format-icon-inner"> <i class="icon-archive"></i> </div>
                      </div>
                      <div class="entry-header-inner">
                       {{ $page->left_block1_title }}
                      </div>
                    </header>
                    <div class="hr"></div>
                    <div class="clearfix">
                      <div class="grid_12 alpha omega">
                        <!-- Project Thumbnail -->
                        <div class="flexslider project-thumbs project-thumbs__fullw flexslider__nav-on">
                          <ul class="slides">
						    @foreach( $slidingbanners as $k => $slidingbanner)
							<li>
                            {{HTML::image($slidingbanner->bannerimage->url('medium'),'',array( 'class' => 'img-responsive', 'height' => '248', 'width' => '200' ));}}
							</li>
							@endforeach
                          </ul>
                        </div>
                        <!-- Project Thumbnail / End -->
                      </div>
                    </div>
								<div class="clearfix">
                      <div class="grid_8 alpha">
                        <!-- Project Description -->
                        <div class="project-desc project-desc__single">
                            {{ $page->left_block1_content }}
                          <div class="project-excerpt">
                             {{ $page->left_block2_title }}
                            
                          </div>
                          
                             {{ $page->left_block2_content }}
                             <br />
                        {{ $page->left_block3_title }}
                        </div>
                        <!-- Project Description / End -->
                      </div>
<div class="grid_4 omega">
                       {{ $page->left_inner_block_title1}}
                        {{ $page->left_inner_block_title2}}
                       
                      </div>
</div>

					
					
                    <div class="hr"></div>
                    <!-- Related Projects -->
                    <div class="clearfix">
                     {{ $page->left_inner_block_content2 }}
                      <div class="list-carousel carousel__projects">
                        <ul id="projects-scroller">
                          @foreach( $processlistings as $k => $slidingbanner)
							<li>
							   <div class="item-inner">
                              <figure class="img-holder">
                            {{HTML::image($slidingbanner->bannerimage->url('medium'),'',array( 'class' => 'img-responsive', 'height' => '208', 'width' => '200' ));}}
							 <div class="overlay"> <a href="{{url().$slidingbanner->bannerimage->url('medium')}}" class="popup-link zoom" title="Harvesting"><i class="icon-zoom-in"></i></a> </div>
                              </figure>
                              <h5 class="title"><a href="{{url().$slidingbanner->bannerimage->url('medium')}}" class="popup-link">{{$slidingbanner->title}}</a></h5>
                               <span class="cats">{{$slidingbanner->short_description}}</span>
                            </div>
							</li>
							@endforeach  
                          
                        </ul>
                        <div class="carousel-nav"> <a id="prev2" class="prev" href="#"><i class="icon-chevron-left"></i></a> <a id="next2" class="next" href="#"><i class="icon-chevron-right"></i></a> </div>
                      </div>
                    </div>
                    <!-- Related Projects / End -->
                  </div>
                </div>
		    </div>
					<!-- Our Products / End -->
		
@stop
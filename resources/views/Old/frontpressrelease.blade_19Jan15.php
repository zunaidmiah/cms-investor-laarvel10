@extends('layouts.front')
@section('content')
                 
                 
                  <div class="clearfix">
                  <div class="grid_12">
			<header class="entry-header clearfix">
				<div class="format-icon">
				<div class="format-icon-inner">
				<i class="icon-book"></i> </div>
                                </div>
                            <div class="entry-header-inner">
                                  
                                    {{ $page->left_block1_title }}
                                   
				</div>
                                </div>
				
							</header>
                              <div class="hr"></div>
                            <div class="clearfix"></div>
                  </div>	
                      
                 <div class="content grid_9" id="content">
						
                        <!-- Post -->
                        @foreach ($pressreleases as $k => $pressrelease)
						<article class="entry entry__simple entry__medium">
							<div class="clearfix">
								<!-- begin post image -->
								<figure class="thumb">
									<a href="{{ url().$pressrelease->image->url('thumb') }}" class="popup-link" title="{{ $pressrelease->title }}">    {{HTML::image($pressrelease->image->url('thumb'),$pressrelease->title,array( 'class' => 'img-responsive', 'height' => '208', 'width' => '200' ));}}
</a>
								</figure>
								<!-- end post image -->

								<!-- begin post heading -->
								<header class="entry-header">
									<div class="entry-header-inner">
										<h3 class="title">{{ $pressrelease->title }}</h3>
								  <p class="post-meta">
											<span class="post-meta-date"><i class="icon-calendar"></i>{{ $pressrelease->year }}</span>
											
                                            <span class="post-meta-cats"><i class="icon-tag"></i>
                                            @if ($pressrelease->citation != '')
                                            {{ $pressrelease->citation }}
                                            @else
                                            N/A
                                            @endif
                                            </span>
                                       
										</p>
									</div>
							  </header>
								<!-- end post heading -->

								<!-- begin post content -->
								<div class="entry-content">
									{{ $pressrelease->content }}
								</div>
								<!-- end post content -->
                                
                                <!-- begin post footer -->
								@if( $pressrelease->read_more == 1 )
                                <footer class="entry-footer">
									<a href="{{ url().$pressrelease->pdf->url() }}" class="link" target="_blank">Read More <i class="icon-chevron-sign-right"></i></a>
								</footer>
                                @endif
								<!-- end post footer -->

							</div>
						</article>
                        @endforeach
						<!-- /Post -->
                        
                     
                        
                       
						<!-- /Post -->
				
					</div>
					<!-- Content / End -->

					<!-- Sidebar -->
					<aside class="sidebar grid_3" id="sidebar">
						
						<!-- Categories Widget -->
						<div class="categories widget widget__sidebar">
							<h3 class="title">Categories</h3>
							<div class="widget-content">
								<div class="list list-style__check">
									<ul>
										@foreach( $categories as $category)
                                        <li><a href="#">{{ $category->year }}</a> ({{ $category->count }})</li>
                                        @endforeach
                                       
									</ul>
								</div>
							</div>
                            <div class="hr"></div>
						</div>
						<!-- /Categories Widget -->
						
						
						<!-- Recent Posts Widget -->
						<div class="latest-posts widget widget__sidebar">
							{{ $page->right_block1_title }}
							<div class="widget-content">
								<ul class="thumbs-list thumbs-list__clean">
									<li class="list-item clearfix">
										{{ $page->right_block1_content }}
								  </li>
                                  <div class="hr"></div>
									<li class="list-item clearfix">
										{{ $page->right_block2_content }}
								  </li>
                                  <div class="hr"></div>
									<li class="list-item clearfix">
										{{ $page->right_block3_content }}
								  </li>
                                  <div class="hr"></div>
								</ul>
								<a href="{{ url() }}/company/corporatesocialresponsibility" class="button"><span class="button-inner">View All</span></a>
							</div>
						</div>
						<!-- /Recent Posts Widget -->
					</aside>
                           
		
                
                  
		
@stop
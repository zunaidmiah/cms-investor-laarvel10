   <div class="clearfix">
                      <h3>{{ $page->left_inner_block_title21 }}</h3>
                      <div class="list-carousel carousel__projects">
                        <ul id="projects-scroller">
                        @foreach ($brandslistings as $brandslisting)
                        <li>
                            <div class="item-inner">
                              <figure class="img-holder"> 
{{HTML::image($brandslisting->bannerimage->url('thumb'),'bannerimage',array( 'width' => '200','height' => '208', 'class' => 'banner-subpage' ))}}  
                                  <div class="overlay"> 
                <a href="{{ url() }}/{{ $brandslisting->bannerimage->url('thumb') }}" class="popup-link zoom" title="Printing"><i class="icon-zoom-in"></i></a> </div>
                              </figure>
                                        
                             
                            </div>
                          </li>                           
                        @endforeach  
                        </ul>
                        <div class="carousel-nav"> <a id="prev2" class="prev" href="#"><i class="icon-chevron-left"></i></a> <a id="next2" class="next" href="#"><i class="icon-chevron-right"></i></a> </div>
                      </div>
                    </div>
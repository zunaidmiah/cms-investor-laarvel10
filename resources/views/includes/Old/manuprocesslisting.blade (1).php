   <div class="clearfix">
                      <h3>Processes</h3>
                      <div class="list-carousel carousel__projects">
                        <ul id="projects-scroller">
                        @foreach ($processlistings as $processlisting)
                        <li>
                            <div class="item-inner">
                              <figure class="img-holder"> 
{{HTML::image($processlisting->bannerimage->url('medium'),'bannerimage',array( 'width' => '200','height' => '208', 'class' => 'banner-subpage' ))}}  
                                  <div class="overlay"> 
                <a href="{{ url() }}/{{ $processlisting->bannerimage->url('medium') }}" class="popup-link zoom" title="Printing"><i class="icon-zoom-in"></i></a> </div>
                              </figure>
                                        <h5 class="title"><a href="{{ url() }}/{{ $processlisting->bannerimage->url('medium') }}" class="popup-link">
                                  {{ $processlisting->title }}
                                    </a></h5>
                                <span class="cats"> {{ $processlisting->short_description }}</span>
                             
                            </div>
                          </li>                           
                        @endforeach  
                        </ul>
                        <div class="carousel-nav"> <a id="prev2" class="prev" href="#"><i class="icon-chevron-left"></i></a> <a id="next2" class="next" href="#"><i class="icon-chevron-right"></i></a> </div>
                      </div>
                    </div>
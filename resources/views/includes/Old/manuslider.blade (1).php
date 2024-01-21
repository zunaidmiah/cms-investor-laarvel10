  <div class="clearfix">
                      <div class="grid_12 alpha omega">
                        <!-- Project Thumbnail -->
                        <div class="flexslider project-thumbs project-thumbs__fullw flexslider__nav-on">
                        
                            <ul class="slides">
                              
               @foreach($slidingbanners as $k => $slidingbanner)           
               <li>
               {{HTML::image($slidingbanner->bannerimage->url('medium'),'bannerimage',array( 'class' => 'banner-subpage','height' => '300','width' => '920' ))}}
               </li>
               @endforeach           
                          </ul>
                        </div>
                        <!-- Project Thumbnail / End -->
                      </div>
 </div>
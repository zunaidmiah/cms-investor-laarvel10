<div class="list-carousel carousel__projects">
									<ul id="projects-scroller">
	@foreach($corebusinesses as $k => $corebusiness)
        <li>
	<div class="item-inner">
	<figure class="img-holder"> 
      {{HTML::image($corebusiness->corebusinessimage->url('thumb'),'corebusinessimage',array( 'height' => '208', 'width' => '200' ));}}

        <div class="overlay"> <a href="{{ $corebusiness->url }}" class="dlink"><i class="icon-link"></i></a> <a href="{{ url() }}{{ $corebusiness->corebusinessimage->url('large') }}" class="popup-link zoom" title="Packaging"><i class="icon-zoom-in"></i></a> </div>
	</figure>
	<h5 class="title"><a href="{{ $corebusiness->url }}">{{ $corebusiness->title }}</a></h5>
	<span class="cats"><a href="{{ $corebusiness->url }}">{{ $corebusiness->short_description }}</a></span>											</div>
	</li>
        @endforeach
       </ul>
		
								  
                                  <div class="carousel-nav">
										<a id="prev2" class="prev" href="#"><i class="icon-chevron-left"></i></a>
										<a id="next2" class="next" href="#"><i class="icon-chevron-right"></i></a>
							      </div>
                                  
								</div>
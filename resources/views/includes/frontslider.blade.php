
<section id="camera-slider" class="clearfix">
				<div class="camera_wrap" id="camera_wrap">
	            @foreach ($banners as $k => $banner)
                                    <div data-src="{{ url() }}{{ $banner->bannerimage->url('large') }}">
	                <div class="camera_caption moveFromRight">
							<h2>
								<span class="first">{{ $banner->banner_text1 }} </span>
							</h2>
						</div>
                        <div class="camera_caption moveFromBottom">
							<h2>
							    <span class="second">{{ $banner->banner_text2 }}</span>
							</h2>
						</div>
	            </div>
               @endforeach
	        </div><!-- #camera_wrap -->
			</section>

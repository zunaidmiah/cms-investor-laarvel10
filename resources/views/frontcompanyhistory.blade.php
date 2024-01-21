@extends('layouts.front')
@section('content')
                 
                 
                <div class="clearfix">
                  <div class="grid_12">
                    <header class="entry-header clearfix">
                      <div class="format-icon">
                        <div class="format-icon-inner"> <i class="icon-reorder"></i> </div>
                      </div>
                      <div class="entry-header-inner">
                        <h3 class="entry-title">COMPANY HISTORY</h3>
                      </div>
                    </header>
                    <div class="hr"></div>
                    <figure class="thumb thumb-fullw-mobile"><img src="{{ url() }}/images/company_history/img_yeelee.jpg" height="226" width="360" alt="Yee Lee Corporation Bhd"></figure>
                    <h4>Yee Lee Corporation Bhd</h4>
                    <p>Yee Lee Corporation Bhd group (YLC) began its core business as an edible oil repacker in Malaysia in 1968. Since then it has grown into a fully integrated manufacturer and distributor. YLC group of companies are involved in various sectors such as manufacturing, marketing and distribution of fast moving consumer products, plantation and eco-tourism. </p>
                    <p>Today YLC has an established marketing and distribution network servicing both local as well as international customers. YLC products include food, bottled water, oral care, household cleaners and industrial products. It also manufactures corrugated cartons and aerosol cans for a wide range of customers.</p>
                    <p>YLC was listed on the Main Market of Bursa Malaysia Securities Berhad.</p>
                    <div class="clearfix"></div>
                    <div class="hr"></div>
                    <!-- Related Projects -->
                    <div class="clearfix">
                      <header class="entry-header clearfix">
                        <div class="format-icon">
                          <div class="format-icon-inner"> <i class="icon-reorder"></i> </div>
                        </div>
                        <div class="entry-header-inner">
                          <h3 class="entry-title">CORE BUSINESSES</h3>
                        </div>
                      </header>
                      <p>With a total employee strength of 2000, YLC is a diversified entity engaged in the following core businesses:</p>
                      <div class="list-carousel carousel__projects">
                        <ul id="projects-scroller">
										<li>
											<div class="item-inner">
											  <figure class="img-holder"> <img src="{{ url() }}/images/index/img_packaging.jpg" height="208" width="300" alt="Packaging">
                                                  <div class="overlay"> <a href="manufacturing_packaging_canpac.html" class="dlink"><i class="icon-link"></i></a> <a href="{{ url() }}/images/index/img_packaging.jpg" class="popup-link zoom" title="Packaging"><i class="icon-zoom-in"></i></a> </div>
										      </figure>
											  <h5 class="title"><a href="manufacturing_packaging_canpac.html">Packaging</a></h5>
										  <span class="cats"><a href="manufacturing_packaging_canpac.html">Our packaging division comprises of aerosol can division and corrugated carton boxes division.</a></span>											</div>
										</li>
                                        <li>
											<div class="item-inner">
											  <figure class="img-holder"> <img src="{{ url() }}/images/index/img_palm_oil_refinery.jpg" height="208" width="300" alt="Palm Oil Refinery">
                                                  <div class="overlay"> <a href="manufacturing_palm_oil_refinery.html" class="dlink"><i class="icon-link"></i></a> <a href="{{ url() }}/images/index/img_palm_oil_refinery.jpg" class="popup-link zoom" title="Palm Oil Refinery"><i class="icon-zoom-in"></i></a> </div>
										      </figure>
											  <h5 class="title"><a href="manufacturing_palm_oil_refinery.html">Palm Oil Refinery</a></h5>
										  <span class="cats"><a href="manufacturing_palm_oil_refinery.html">Our refinery division is involved in the manufacturing of high quality cooking oil, margarine and shortening.</a></span>											</div>
										</li>
                                        <li>
											<div class="item-inner">
											  <figure class="img-holder"> <img src="{{ url() }}/images/index/img_palm_oil_mill.jpg" height="208" width="300" alt="Palm Oil Mill">
                                                  <div class="overlay"> <a href="manufacturing_palm_oil_mill.html" class="dlink"><i class="icon-link"></i></a> <a href="{{ url() }}/images/index/img_palm_oil_mill.jpg" class="popup-link zoom" title="Palm Oil Mill"><i class="icon-zoom-in"></i></a> </div>
										      </figure>
											  <h5 class="title"><a href="manufacturing_palm_oil_mill.html">Palm Oil Mill</a></h5>
										  <span class="cats"><a href="manufacturing_palm_oil_mill.html">Our palm oil mill is located in Northern part of Malaysia, serving the customers in the region.</a></span>											</div>
										</li>
										<li>
											<div class="item-inner">
												<figure class="img-holder">
													<img src="{{ url() }}/images/index/img_trading.jpg" height="208" width="200" alt="Trading">
													<div class="overlay">
														<a href="trading.html" class="dlink"><i class="icon-link"></i></a>
														<a href="{{ url() }}/images/index/img_trading.jpg" class="popup-link zoom" title="Trading"><i class="icon-zoom-in"></i></a>							    </div>
												</figure>
												<h5 class="title"><a href="trading.html">Trading</a></h5>
												<span class="cats"><a href="trading.html">Our marketing and distribution arm of fast-moving, high quality consumer products.</a></span>											</div>
										</li>
										<li>
											<div class="item-inner">
												<figure class="img-holder">
													<img src="{{ url() }}/images/index/img_plantation.jpg" height="208" width="200" alt="Plantation">
													<div class="overlay">
														<a href="plantation_oil_palm_estate.html" class="dlink"><i class="icon-link"></i></a>
														<a href="{{ url() }}/images/index/img_plantation.jpg" class="popup-link zoom" title="Plantation"><i class="icon-zoom-in"></i></a>						</div>
												</figure>
												<h5 class="title"><a href="plantation_oil_palm_estate.html">Plantation</a></h5>
												<span class="cats"><a href="plantation_oil_palm_estate.html">Our plantation division comprises of oil palm estates and tea plantation.</a></span>											</div>
										</li>
                                        <li>
											<div class="item-inner">
												<figure class="img-holder">
													<img src="{{ url() }}/images/index/img_hospitality.jpg" height="208" width="200" alt="Hospitality">
													<div class="overlay">
														<a href="others_hospitality.html" class="dlink"><i class="icon-link"></i></a>
														<a href="{{ url() }}/images/index/img_hospitality.jpg" class="popup-link zoom" title="Hospitality"><i class="icon-zoom-in"></i></a>						</div>
												</figure>
												<h5 class="title"><a href="others_hospitality.html">Hospitality</a></h5>
												<span class="cats"><a href="others_hospitality.html">Our hospitality division offers tourist a unique eco-tourism experience in Borneo&rsquo;s well-known rainforest.</a></span>											</div>
										</li>
								  </ul>
                        <div class="carousel-nav"> <a id="prev2" class="prev" href="#"><i class="icon-chevron-left"></i></a> <a id="next2" class="next" href="#"><i class="icon-chevron-right"></i></a> </div>
                      </div>
                    </div>
                    <!-- Related Projects / End -->
                  </div>
</div>
		
                
                  
		
@stop
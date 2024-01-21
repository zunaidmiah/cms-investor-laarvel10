@extends('layouts.front')
@section('content')
                 
                  <div id="content-wrapper" class="content-wrapper"><!-- InstanceBeginEditable name="EditRegion3" -->
		  <div class="container">
                  <div class="clearfix">
                  <div class="grid_12">
                      
                  <!-- Page Title Section -->
                   <header class="entry-header clearfix">
                      <div class="format-icon">
                        <div class="format-icon-inner"> <i class="icon-archive"></i> </div>
                      </div>
                      <div class="entry-header-inner">
                        <h3 class="entry-title">{{ $pageTitle }}</h3>
                      </div>
                    </header>
                    <div class="hr"></div>
                  <!-- End of Page Title Section -->
                  
                  <!-- Include the slider -->  
                  @if(count($slidingbanners) > 0)
                  @include('includes.manuslider')
                  @endif
                  <!-- End of Include Slider -->
                  
                  <!-- Start of Page Content -->
                   <div class="clearfix">
                      <div class="grid_8 alpha">
                        <!-- Project Description -->
                        <div class="project-desc project-desc__single">
                          <h3 class="title">CanPac Sdn Bhd (110093-M)</h3>
                          <div class="project-excerpt">
                            <figure class="thumb alignleft"><img src="images/logo/img_canpac.jpg" alt="Can Pac Sdn Bhd"></figure>
                            <h5>We are the only company specialize in manufacturing Aerosol cans in Malaysia.</h5>
                            <p>Canpac Sdn Bhd (Canpac) is established in manufacturing Aerosol can in year 1990. In year 2005, Canpac has invested a manufacturing plant in Ho Chi Minh City, Vietnam, manufacturing aerosol tin cans for domestic and exports. </p>
                            <p>Canpac is fully equipped with latest metal printing &amp; can making machines from Europe, with a total capacity of 100 million cans per year. It has well experience team and skilled labour which is an asset to the company and benefit to its clients. Canpac guarantee you of the highest quality standards in all aspects of manufacturing products. It has well developed and expanded the business towards global market needs for domestic and exports. Canpac has been supplying to the major multinational Europe customers like Reckitt &amp; Benkiser and SCJ. It also exports to Australia, Bangladesh, Vietnam, Sri Lanka and others countries.</p>
                            <p>Top priority Canpac takes all possible steps to maintain quality and safety at its factory.</p>
                            <p>Canpac is accredited ISO 9001-2008 system, by an International certification body called SGS Malaysia.</p>
                            
                            <h5>Canpac Business</h5>
                            <p>The aerosol production is more of specialized products manufactured for paints, cosmetic (hair sprays/moose), air fresheners, insecticide, butane gas, car care products and etc. Products were being supplied to domestic and export market. </p>
                            
                            <h5>Quality Control &amp; Assurance</h5>
                            <p>The quality of Canpac's products is not only a reflection of the company but also of its valued customers. It has been proven by global customers satisfaction and long term intimate business relationship with its significant business partners. That is why quality is the focus and responsibility of every employee at Canpac.</p>
                           
                          </div> 
                          
                          <h3 class="title">OUR SUBSIDIARY COMPANY</h3>
                          <br/>
                          <h5>CANPAC VIETNAM PTE LTD</h5>
                          <ul class="contact-info">
                          <li><i class="icon-map-marker"></i> <strong>Address:</strong> Lot No. 6, Road 2A, Bien Hoa, Industrial Zone Bien Hoa City, Dong Nai Provine, Vietnam.
</li>
                          <li><i class="icon-phone"></i> <strong>Phone:</strong> +(0084) 6139 94216</li>
                          <li><i class="icon-print"></i> <strong>Fax:</strong> +(0084) 6139 94215</li>
                    
                        </ul>
                                                  
                        </div>
                        <!-- Project Description / End -->
                        
                         
                        
                      </div>
                      <div class="grid_4 omega">
                        <h4 class="title">Contact</h4>
                        <ul class="contact-info">
                          <li><i class="icon-map-marker"></i> <strong>Address:</strong> Lot 119, Taman Industri Integrasi, Jalan Industri 3/5, 48000 Rawang Selangor, Malaysia.</li>
                          <div class="line"></div>
                          <li><i class="icon-phone"></i> <strong>Phone:</strong> +(603) 6092 9929/39/49/59/89</li>
                          <div class="line"></div>
                          <li><i class="icon-print"></i> <strong>Fax:</strong> +(603) 6092 9909</li>
                          <div class="line"></div>
                          <li><i class="icon-envelope"></i> <strong>Email:</strong> <a href="mailto:canpac@po.jaring.my">canpac@po.jaring.my</a></li>
                          <div class="line"></div>
                          <li><i class="icon-globe"></i> <strong>Website:</strong> <a href="http://www.canpac.com.my" target="_blank">www.canpac.com.my</a></li>
                          <div class="line"></div>
                        </ul>
                        <footer class="project-footer"> <a href="http://www.canpac.com.my" class="button"><span class="button-inner"><i class="icon-double-angle-right"></i> Visit Site</span> </a> </footer>
                      </div>
                    </div>
                    <div class="hr"></div>
                  <!-- End of Page Content -->
                  
                  <!-- Processes Listing -->
                  @if(count($processlistings) > 0)
                  @include('includes.manuprocesslisting')
                  @endif
                  <!-- End of Processes Listing -->
                  
                  </div>
                  </div>
                  </div>
                  </div>
                  
		
@stop
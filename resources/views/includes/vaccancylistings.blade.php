    <div class="box clearfix">  
	{{ Form::open(array('url' => 'company/searchcareers','class'=> 'form-horizontal','method' => 'post')) }}
                              <div class="grid_3">	
                             
										<label for="name"><strong>Job Vacancy:</strong> </label>
										{{ Form::select('job_title', $vaccTitles, $selectedJob)}}
										
                              
                              </div>
                              
                              <div class="grid_3">	
                               
										<label for="name"><strong>Job Location:</strong> </label>
										{{ Form::select('job_location', $vaccLocs, $selectedLoc)}}
										
                              
                              </div>
                              
                              <div class="grid_1"><label></label><button type="submit" class="button" style="margin-top: 3px; padding: 2px 0 3px 0;"><span class="button-inner">Search</span></button></div>
                             {{Form::close()}}   
                            </div>
                            
                            <div class="line"></div>
 @if(count($vaccancies) > 0)                         
                            
<div class="accordion-wrapper">
@foreach($vaccancies as $k => $vaccancy)
<div class="acc-head">
									<a href="#">{{ $vaccancy->job_title}}</a> 
								</div>
                                
<div class="acc-body">
                                    <div class="left"><i class="icon-group"></i> Company: <strong>{{ $vaccancy->company }}</strong></div>
                            		<br/>
                                    <p class="post-meta">
										<span class="post-meta-date"><i class="icon-calendar"></i>Post Date: <strong>{{ $vaccancy->post_date }}</strong></span>
                                        <span class="post-meta-cats"><i class="icon-map-marker"></i>Job Location: <strong>{{ $vaccancy->job_location }}</strong></span>
									</p>
									<div class="underline clearfix">Responsibilities</div>
                                    <div class="list list-style__arrow1">
										<ul>
                                          {{ $vaccancy->responsibilities_content }}
										</ul>
						  			</div>
                                   
                                    <div class="underline clearfix">Requirements</div>
                                    <div class="list list-style__arrow1">
										<ul>
                                            {{ $vaccancy->requirements_content }}
										</ul>
                                        
                                        <div class="line"></div>
                                       {{ $vaccancy->footer_content }}
						  			</div>
                                    
  <a href="{{ url().'/company/careers/apply/'.$vaccancy->id }}" class="button"><span class="button-inner"><i class="icon-location-arrow"></i>Apply Now</span></a>
								</div><!-- //.acc-body -->
								
@endforeach							
								
							</div>
                            
 @else
 
 <strong>Sorry, there is no vacancy at this chosen location. Please check again later.</strong>
 
 @endif

							<!-- Vacancies Listing End -->
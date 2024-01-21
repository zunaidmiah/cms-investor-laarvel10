@extends('layouts.front')
@section('content')
                 
                  <div id="content-wrapper" class="content-wrapper"><!-- InstanceBeginEditable name="EditRegion3" -->
		  <div class="container">
                  <div class="clearfix">
                  <div class="grid_8">
			<header class="entry-header clearfix">
				<div class="format-icon">
				<div class="format-icon-inner">
				<i class="icon-edit"></i>
                                </div>
                                </div>
				<div class="entry-header-inner">
                                  
                                    {{ $pageTitle }}
                               
				</div>
							</header>
                            <div class="line"></div>
				
                          <!-- Vacancies Listing start -->
                         <!-- Form Starts Here -->
                         <h4 class="title">You are applying the job position of :</h4>
                            Job Position: <strong>{{ $vaccancy->job_title }}</strong><br/>
                            <div class="right">
                            	<i class="icon-map-marker"></i> Job Location: <strong>{{ $vaccancy->job_location }}</strong><br/>
                                <i class="icon-group"></i> Company: <strong>{{ $vaccancy->company }}</strong>
                            </div>
                            
                              {{ Session::get('message') }}
                            <br/>
                            
                            
							<!-- Contact Form -->
							<div class="box">
  {{ Form::open(array('url' => 'company/careers/submitapp', 'id' => 'career-apply-form', 'method' => 'post', 'class' => 'contact-form input-blocks','files' => true)) }}      				
									<div class="field">
  {{ Form::text('name','',array('id' => 'name','class' => 'validate[required]'))}}										<label for="name"><strong>Your Name</strong> <span class="text-red">(*required)</span></label>
 
									</div>
                                    <div class="field">
										<label for="name"><strong>Date of Birth</strong> <span class="text-red">(*required)</span></label>
   {{ Form::text('dob','DD / MM / YYYY',array('id' => 'dob','class' => 'datepicker-default validate[required]', "data-date-format" => "dd/mm/yyyy"))}}

									</div>
                                    <div class="field">
										<label for="name"><strong>Gender</strong> </label><br/>
       
      {{ Form::radio('gender', 'm') }} Male
      {{ Form::radio('gender', 'f') }} Female
									</div>
                                   
                                    <div class="field">
										<label for="name"><strong>Education Level</strong> <span class="text-red">(*required)</span></label>
		{{ Form::select('education', array('no' => '-- Please select --', 
                                                       'Higher secondary / STPM / &quot;A&quot; Level / Pre-U' => 'Higher secondary / STPM / &quot;A&quot; Level / Pre-U',
                                                       'Diploma / Advanced Higher / Graduate Diploma' => 'Diploma / Advanced Higher / Graduate Diploma',
                                                       'Professional Certificated / Degree / Master' => 'Professional Certificated / Degree / Master'       
                                                       ), 'no',array('class' => 'validate[required]')) }}
                									</div>
                                    <div class="field">
		<label for="email"><strong>Contact No.</strong> <span class="text-red">(*required)</span></label>
		 {{ Form::text('contactno','',array('id' => 'contactno','class' => 'validate[required]'))}}  
									</div>
									<div class="field">
										<label for="email"><strong>E-mail</strong> <span class="text-red">(*required)</span></label>
		 {{ Form::text('email','',array('id' => 'email','class' => 'validate[required,custom[email]]'))}}  
									</div>
                                    <div class="field">
										<label for="email"><strong>Attach Your CV</strong> <span class="text-red">(*required)</span></label><br/>
                                        Click "Browse" button to attach your CV (PDF, RTF, MS Word or JPEG file). Max file size: 2MB<br/>
		{{ Form::file('resume',array('id' => 'resume','class' => 'validate[required,checkFileType[pdf|PDF|rtf|RTF|doc|DOC|docx|DOCX|jpg|JPG|jpeg|JPEG]]'))}}  
                
									</div>
                                    <div class="field">
                {{ Form::checkbox('agree','',array('id' => 'agree','class' => 'validate[required]'))}}   By clicking the "Submit" button,below, I agree to the terms stipulated in the service agreement & privacy policy. 
                                    </div>
                                    <div class="line"></div>
		 {{ Form::hidden('vaccancyid',$vaccancy->id,array('id' => 'vaccancyid'))}} 							
									<div class="button-wrapper">
				<input type="submit" name="submit" id="submit" value="Submit CV">
									</div>
									<div id="response"></div>
	{{ Form::close() }}
							</div>
							<!-- Contact Form / End -->
                         <!-- End of Form -->
                
                            
                         
                          
                            <div class="clearfix"></div>
                            
                        
                            
                            
							
						</div>
						<div class="grid_4">
							<!-- Extra Contact Box -->
							<div class="cta">
			<h3>{{ $page->right_block1_title }}</h3>
				{{ $page->right_block1_content }}

                                
                                <div class="bg-black">
                                    <div class="center">
                                      {{ $page->right_block2_content }}
                                        <div class="clearfix"></div>
                                        <div class="hr"></div>
                                        <a href="#" class="button"><span class="button-inner">Submit Your CV</span></a>
                                    </div>
                                    
                                </div>
                                
								
							</div>
							<!-- Extra Contact Box / End -->
						</div>
                  </div>
                  </div>
                  </div>
                  
		
@stop
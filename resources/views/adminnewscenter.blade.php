@extends('layouts.admin')
@section('content')
  <!--<div class="page-content">-->
          <div class="row">
            <div class="col-lg-12">
               <h2> Bursa Announcements <i class="fa fa-angle-right"></i> Listing</h2>
              <div class="clearfix"></div>
              
               <div class="pull-left margin-top-10px">
              	Last updated: <span class="text-blue">{{ date("d F Y",strtotime($page[0]->updated_at)) }} @ {{ date("g:i A",strtotime($page[0]->updated_at)) }}</span>
              </div>
              
             
              <div class="clearfix"></div>
              <p></p>
                {{ Form::open(array('url' => 'admin/page/savepage','class'=> 'form-horizontal','method' => 'post','name' => 'corporategeneral','id' => 'corporategeneral')) }} 
		   {{Form::hidden('preview','')}}
           {{Form::hidden('pageid',$page[0]->id)}}
           {{Form::hidden('type',$page[0]->type)}}

              <div class="portlet">
                 <div class="portlet-header">
                     <div class="caption">Page Info</div><br/>
                     <span class="text-blue text-12px">You can edit the content by clicking the text section below.</span>
                     <div class="tools">
                        <i class="fa fa-chevron-up"></i>
                     </div>
                 </div>
                 <div class="portlet-body">
				  <div contenteditable="true" id="page-title">
                  {{ $page[0]->page_title }}
                  </div>
                  {{ Form::textarea('page_title',$page[0]->page_title,array("id" => "textarea-page-title","class" => "hideThisField")) }}
                  
                 </div>
              </div>
              <div class="clearfix"></div>
       		  
              <div class="portlet">	
              	<div class="portlet-header">
                     <div class="caption">Page Content</div>
                     <div class="tools">
                        <i class="fa fa-chevron-up"></i>
                     </div>
                 </div>
                 
                <div class="portlet-body"> 
                 
           <div class="info_white1 border_bottom">
              <h2 class="red-title pull-left"><span>Type of Announcements / News</span></h2>
              <div class="clearfix"></div>

              <div class="row-fluid">
                <div class="span6">
                   <ul class="list icons">
                    	<li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/frontadditionallisting">Additional Listing Announcement</a></li>
                        <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/frontentitlement">Entitlements</a></li>
                        <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/frontinvestoralert">Investor Alert</a></li>
                        <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/frontlistingcircular">Listing Circulars</a></li>
                        <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/fronttradingright">Trading of Rights Announcement</a></li>
                    </ul> 	
                </div>  
                
                <div class="span6">
                   <ul class="list icons">
                    	<li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/frontfinanciallisting">Financial Results</a></li>
                        <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/frontgeneralannouncementlisting">General Announcement</a></li>
                        <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/frontgeneralmeetinglisting">General Meetings</a></li>
                        <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/frontspecialannouncementlisting">Special Announcements</a></li>
                    </ul> 	
                </div> 
                <div class="clearfix"></div>
     
              </div> 
              
              <h5 class="margin_top_10px">Changes in Shareholdings</h5>
              <div class="row-fluid">
              	 
                 <div class="span6">
                   <ul class="list icons">
                    	<li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/directorinterest">Changes in Director's Interest (S135)</a></li>
                        <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/shareholderinterest">Changes in Substantial Shareholder's Interest (29B)</a></li>
                    </ul> 	
                </div>
                
                <div class="span6">
                   <ul class="list icons">
                        <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/interestshareholderlist">Notice of Interest Substantial Shareholder (29A)</a></li>
                        <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/personceasing">Notice of Person Ceasing (29C)</a></li>
                    </ul> 	
                </div>
                
              </div> 
              
              <h5 class="margin_top_10px">Changes of Corporate Information</h5>
              <div class="row-fluid">
              	 
                 <div class="span6">
                   <ul class="list icons">
                      <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/auditcommittee">Changes in Audit Committee</a></li>
                      <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/boardroom">Change in Boardroom</a></li>
                      <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/chiefexecutiveofficer">Change in Chief Executive Officer</a></li>
                      <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/principalofficer">Change in Principal Officer</a></li>
                      
                    </ul> 	
                </div>
                
                <div class="span6">
                   <ul class="list icons">
                     <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/addresslisting">Change of Address</a></li>
                     <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/compsectretarylisting">Change of Company Secretary</a></li>
                     <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/registrarlist">Change of Registrar</a></li>
                    </ul> 	
                </div>
                
              </div>
              
              
              <h5 class="margin_top_10px">Shares Buy Back</h5>
              <div class="row-fluid">
              	 
                 <div class="span6">
                   <ul class="list icons">
                    	<li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/resale">Notice of Resale/Cancellation of Treasury Share - Immediate Announcement</a></li>
                        <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/immediateannouncement">Notice of Shares Buy Back - Immediate Announcement</a></li>
                    </ul> 	
                </div>
                
                <div class="span6">
                   <ul class="list icons">
                        <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/companypursuant">Notice of Shares Buy Back by a Company Pursuant to Form 28A</a></li>
                        <li><i class="icon-ok"></i> <a href="{{ url() }}/investorrelations/sharecompanypursuant">Notice of Shares Buy Back by a Company Pursuant to Form 28B</a></li>
                    </ul> 	
                </div>
                
              </div>  
                               
          </div>
                  
                  
                  
                </div>
                <!-- End portlet body -->
         
                  
              </div>
              <!-- End portlet -->

   <div class="form-actions none-bg"> <a href="javascript:void(0);" class="btn btn-red" onclick="Addsavepage('corporategeneral','');">Save &amp; Preview &nbsp;<i class="fa fa-search"></i></a>&nbsp; <button type="submit" class="btn btn-blue">Save &amp; Publish &nbsp;<i class="fa fa-globe"></i></button>&nbsp; <a href="#" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
					  
					  {{Form :: close()}}
            </div>
          </div>
        <!--</div>-->
@stop
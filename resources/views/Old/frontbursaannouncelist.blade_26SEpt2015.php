@extends('layouts.front')
@section('content')

          
          <!-- Info white-->
          <div class="info_white1 border_bottom">
            <div class="container">
              <h2 class="red-title pull-left"><span>Latest Bursa Announcements</span></h2>
              <div class="clearfix"></div>
              
              <!-- note to programmer: the order of the announcement is from top (the latest) to bottom (the oldest) -->
              <div class="row-fluid">
                <div class="span12">
                  <table class="table table-striped">
                  	<colgroup><col width="1">
                	<col width="1">
                    <col>
                    <col>
                    
                    </colgroup><thead>
                      <tr>
                        <th>No.</th>
                        <th>Announcement Date</th>
                        <th>Company</th>
                        <th>Title</th>
                      </tr>
                    </thead>
                    <tbody>
                      
                      @foreach ($announcelists as $k => $announcelist)
                      <tr>
                         <td>{{ $k+1 }}</td>
                         <td>{{ $announcelist->date_of_publishing }}</td>
                         <td>OCK GROUP BERHAD</td>
                         <td><a href="{{ url() }}/{{$details_annc[$announcelist->category]}}/{{ $announcelist->id }}">{{ $announcelist->title }}</a></td>
                      </tr>
                    
                      @endforeach
                                    
                    </tbody>
                    <tfoot>
                    	<tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tfoot>
                  </table> 
                  
                  
                </div>
                   
              </div>                    
                   
            </div>
            <i class="icon-bullhorn right"></i>
          </div>
          <!-- End Info white -->
          
          <!-- Info Resalt-->
          <!--<div class="info_resalt border_bottom">
            <div class="container">
            
             <h2 class="red-title pull-left"><span>Summary Table For</span></h2>
              <div class="clearfix"></div> 
              <div class="row-fluid">  	 
              	 <div class="span6">
					<ul class="list icons">
                    	<li><i class="icon-ok"></i> <a href="news_centre_bursa_financial_summary.html">Financial Results Summary</a></li>
                        <li><i class="icon-ok"></i> <a href="news_centre_bursa_changes_in_audit_committee_boardroom_principal_officer_summary.html">Change in Audit Committee / Boardroom / Principal Officer Summary</a></li>
                    </ul>                 
                 </div>
                 <div class="span6">
					<ul class="list icons">
                    	<li><i class="icon-ok"></i> <a href="news_centre_bursa_entitlements_summary.html">Entitlements Summary</a></li>
                        <li><i class="icon-ok"></i> <a href="news_centre_bursa_changes_in_shareholdings_summary.html">Changes in Shareholdings Summary</a></li>
                    </ul>                 
                 </div> 
                                
                 
              </div>
              <div class="clearfix"></div> 
              
            </div>
          </div>-->
          <!-- End Info Resalt-->
          
          <!-- Info white-->
          <div class="info_resalt border_bottom">
          <!--<div class="info_white1 border_bottom">-->
            <div class="container">
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
            <!--<i class="icon-bullhorn right"></i>-->
          </div>
          <!-- End Info white -->
                 
		
@stop
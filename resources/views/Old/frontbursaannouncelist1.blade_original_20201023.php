@extends('layouts.front')
@section('content')

          
          <!-- Info white-->
          <div class="info_white1 border_bottom">
            <div class="container">
              <h2 class="red-title pull-left"><span>Latest Bursa Announcements</span></h2>
		  <a href="{{URL('/investorrelations/newscentre/bursaannouncements')}}"><input type="submit" style="float:right" name="Submit" value="Back" class="button"></a>
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
                         <td>{{ date("d F Y",strtotime($announcelist->date_of_publishing)) }}</td>
                         <td>FAREAST HOLDINGS BERHAD</td>
                         <td><a href="{{ url() }}/{{$details_annc[$announcelist->category]}}/{{ $announcelist->id }}">{{ $announcelist->title }}</a></td>
                      </a></td>

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

              <?php
                foreach($typelisting as $types){
              ?>
 
              <h5 class="margin_top_10px"><?php echo $types->Title;?></h5>
              <div class="row">
              <?php
              foreach($types->names as $ann)
              {
              ?>
                 <div class="span6">
                   <ul class="list icons">
                    	<li><i class="icon-ok"></i> <a href="<?php echo $ann->announcementurl; ?>"><?php echo $ann->announcementname; ?></a></li>
                   </ul> 	
                </div>
               
              <?php 
              }
             ?>
             </div> 
             <?php }
             ?>
              
            <!--<i class="icon-bullhorn right"></i>-->
          </div>
          <!-- End Info white -->
                 </div>
		
@stop
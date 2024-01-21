@extends('layouts.front1')
@section('content')
 <div class="info_white1 border_bottom">
            <div class="container">
              <h2 class="red-title pull-left"><span>Change in Boardroom</span></h2>
              <div class="pull-right margin_top_10px">
              	<a href="news_centre_bursa_change_in_boardroom.html" class="button">Back</a>
              </div>
              <div class="clearfix"></div>
              
              
              <!-- note to programmer: the order of the announcement is from top (the latest) to bottom (the oldest) -->
              <div class="row-fluid">
                <div class="span12">
                  <a href="javascript:window.print()"><button class="btn pull-right" type="button"><i class="icon-print"></i> Print</button></a>

                    {{ $announcement->html }}
                  {{--<table class="table table-striped margin_top">--}}
                  	{{--<col />--}}
                	{{--<col />--}}

                    {{--<tbody>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Admission Sponsor</strong></td>--}}
                         {{--<td>RHB Investment Bank Bhd</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Sponsor</strong></td>--}}
                         {{--<td>Same as above</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Date of Change</strong></td>--}}
                         {{--<td>09/12/2013</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Name</strong></td>--}}
                         {{--<td>Rear Admiral Dato' Mohd Som Bin Ibrahim (Retired)</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Age</strong></td>--}}
                         {{--<td>59</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Nationality</strong></td>--}}
                         {{--<td>Malaysian</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Type of Change</strong></td>--}}
                         {{--<td>Appointment</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Designation</strong></td>--}}
                         {{--<td>Non-Executive Director</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Directorate</strong></td>--}}
                         {{--<td>Non Independent &amp; Non Executive</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Qualifications</strong></td>--}}
                         {{--<td>Advance Diploma in Business Engineering Management from University Technology Malaysia</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Working Experience and Occupation </strong></td>--}}
                         {{--<td>--}}
                         	{{--<p>Rear Admiral Dato' Mohd Som Bin Ibrahim ("RADM Dato' Mohd Som") (Retired) began his career in the Royal Malaysia Navy ("RMN") as a Cadet Officer in September 1973. He received his Naval Training in the Britannia Royal Naval College  Dartmouth, United Kingdom ("UK") in 1974 and was commissioned as a Sub-Lieutenant in January 1977. He became as a specialist in Navigation after passing the course in 1980 in the UK.--}}
                            {{--<p>With more than 37 years of service, RADM Dato' Mohd Som served on board many ships and shore jobs. He commanded 5 RMN warships from 1981-2004, including the 4400 tons Multi-role Support ship KD MAHAWANGSA. </p>--}}
                            {{--<p>Besides the sea service, he also held several shore appointments in the Malaysian Armed Forces. Among the notable ones are as Assistant Defense Advisor Embassy of Malaysia in Jakarta (1990-1993), Director of Operations (1998-2002) and as Deputy Head of Mission to the Malaysia Lead International Monitoring Team in Mindanao (2006). RADM Dato' Mohd Som held the post of Assistant Chief of Staff Communications and Electronics of the Armed Forces in 2007. Before his retirement in February 2011, he was appointed as The Naval Region Commander Area 1, based in Tanjung Gelang, Kuantan. In this capacity he was involved in many inter agency cooperation maritime security and communications market of South East Asia countries. </p>--}}
                            {{--<p>RADM Dato' Mohd Som has attended many courses both local and abroad. He attended the Navigation Course in UK (1980), Naval Staff College, Jakarta (1988) and Defense College Course Kuala Lumpur (1997). He obtained his Advance Diploma in Business Engineering Management from University Technology Malaysia (UTM) in 1999. He now acts as free-lance consultant in ship supply and repair services. </p>--}}
{{--</p>--}}
                         {{--</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Directorship of Public Companies (if any)</strong></td>--}}
                         {{--<td>N/A</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Family relationship with any director and/or major shareholder of the listed issuer</strong></td>--}}
                         {{--<td>N/A</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Any conflict of interests that he/she has with the listed issuer</strong></td>--}}
                         {{--<td>N/A</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Details of any interest in the securities of the listed issuer or its subsidiaries</strong></td>--}}
                         {{--<td>N/A</td>--}}
                      {{--</tr>--}}
                                       {{----}}
                    {{--</tbody>--}}
                    {{--<tfoot>--}}
                    	{{--<tr>--}}
                            {{--<td></td>--}}
                            {{--<td></td>--}}
                        {{--</tr>--}}
                    {{--</tfoot>--}}
                  {{--</table>--}}
                  {{--<p>Remarks: N/A.</p> --}}
 				  
                  
                </div>
                   
              </div>
            </div>
            <i class="icon-bullhorn right"></i>
          </div>
          <!-- End Info white -->
          
          <!-- Info Resalt-->
          {{--<div class="info_resalt border_bottom">--}}
            {{--<div class="container">--}}
              {{--<div class="row-fluid">--}}
                {{--<div class="span12">--}}
                  {{--<h2 class="red-title"><span>Announcement Info</span></h2>--}}
                  {{--<div class="alert alert-error">--}}
                      {{--<strong>Reference No:</strong> CC-131118-33776 --}}
                  {{--</div>--}}
                {{--</div>      --}}
              {{--</div>--}}
              {{----}}
            {{--</div>--}}
          {{--</div>--}}
@stop
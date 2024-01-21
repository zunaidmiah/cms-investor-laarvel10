@extends('layouts.front1')
@section('content')
 <div class="info_white1 border_bottom">
            <div class="container">
              <h2 class="red-title pull-left"><span>{{ $announcement->title }}</span></h2>
              <div class="pull-right margin_top_10px">
              	<a href="news_centre_bursa_changes_in_nomination_committee.html" class="button">Back</a>
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
                         {{--<td><strong>Date of Change</strong></td>--}}
                         {{--<td>03/01/2013</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Name</strong></td>--}}
                         {{--<td>Dato' Syed Norulzaman Bin Syed Kamarulzaman</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Age</strong></td>--}}
                         {{--<td>64</td>--}}
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
                         {{--<td>Chairman of Audit Committee</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Directorate</strong></td>--}}
                         {{--<td>Independent &amp; Non Executive</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Qualifications</strong></td>--}}
                         {{--<td>Bachelor of Arts (Hons), University of Malaya.</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Working Experience and Occupation</strong></td>--}}
                         {{--<td>--}}
                         	{{--<p>Upon graduation from the University of Malaya, Dato' Syed Norulzaman Bin Syed Kamarulzaman joined the Administrative and Diplomatic Service of the Malaysian Government in 1973 and was assigned to the Ministry of Foreign Affairs. Dato' Syed Norulzaman served in different capacities in the Ministry's Political and Administration divisions as well as in Malaysia's diplomatic mission in Geneva, Baghdad, Ottawa and Jakarta.</p>--}}
                            {{--<p>In September 1994, Dato' Syed Norulzaman was appointed as Malaysia's Ambassador to Spain where he served for 3 years. On returning to Kuala Lumpur in November 1997, he assumed the post of Undersecretary for East Asia and South-Asia at the Ministry of Foreign Affairs, prior to his appointment to head the Institute of Diplomacy and Foreign Relations, Prime Minister's Department, as its Director General in June 1999. He returned to the Ministry of Foreign Affairs in November 2001 before his appointment as Malaysia's Ambassador to the Kingdom of Thailand, a position he held until January 2005. He was subsequently appointed as Malaysia's Ambassador to the People's Republic of China, based in Beijing where he served for 5 years till December 2009 before returning to Malaysia to retire from government service.</p>--}}
                            {{--<p>Upon his return to Malaysia, Dato' Syed Norulzaman was appointed as Public Interest Director at the Federation of Investment Managers Malaysia (FIMM), a position he held until August 2012. He is currently a Director of Winnburner Asia Sdn Bhd. Dato' Syed Norulzaman is also the Chairman of Mah Sing Foundation, a charitable organisation providing assistance to the neeedy within the community. </p>--}}
                         {{--</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Directorship of Public Companies (if any)</strong></td>--}}
                         {{--<td>Nil</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Family relationship with any director and/or major shareholder of the listed issuer</strong></td>--}}
                         {{--<td>Nil</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Any conflict of interests that he/she has with the listed issuer</strong></td>--}}
                         {{--<td>Nil</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Details of any interest in the securities of the listed issuer or its subsidiaries</strong></td>--}}
                         {{--<td>Nil</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Composition of Audit Committee (Name and Directorate of members after change)</strong></td>--}}
                         {{--<td>--}}
                         	{{--<ul class="list icons">--}}
                            	{{--<li><i class="icon-ok"></i> Dato' Syed Norulzaman Bin Syed Kamarulzaman, Independent Non-Executive Director (Chairman)</li>--}}
                                {{--<li><i class="icon-ok"></i> Fu Lit Fung, Independent Non-Executive Director (Member)</li>--}}
                            	{{--<li><i class="icon-ok"></i> Lee Yow Fui, Independent Non-Executive Director (Member)</li>--}}
                            {{--</ul>--}}
                         {{--</td>--}}
                      {{--</tr>--}}
                     {{----}}
                                        {{----}}
                    {{--</tbody>--}}
                    {{--<tfoot>--}}
                    	{{--<tr>--}}
                            {{--<td></td>--}}
                            {{--<td></td>--}}
                        {{--</tr>--}}
                    {{--</tfoot>--}}
                  {{--</table> --}}
                  {{--<p>Remarks: N/A.</p>--}}

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
                      {{--<strong>Reference No:</strong> CC-130104-6CE19--}}
                  {{--</div>--}}
                {{--</div>--}}
              {{--</div>--}}

            {{--</div>--}}
          {{--</div>--}}
@stop
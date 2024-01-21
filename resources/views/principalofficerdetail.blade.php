@extends('layouts.front1')
@section('content')
 <div class="info_white1 border_bottom">
            <div class="container">
              <h2 class="red-title pull-left"><span>Change in Principal Officer</span></h2>
              <div class="pull-right margin_top_10px">
              	<a href="news_centre_bursa_change_in_principal_officer.html" class="button">Back</a>
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
                         {{--<td>29/08/2014</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Name</strong></td>--}}
                         {{--<td>Chan Ying Wei</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Age</strong></td>--}}
                         {{--<td>42</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Nationality</strong></td>--}}
                         {{--<td>Malaysian</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Designation</strong></td>--}}
                         {{--<td>Chief Financial Officer</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Type of Change</strong></td>--}}
                         {{--<td>Resignation</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Reason</strong></td>--}}
                         {{--<td>Career advancement</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Details of any disagreement that he/she has with the Board of Directors</strong></td>--}}
                         {{--<td>No</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Qualifications</strong></td>--}}
                         {{--<td>--}}
                         	{{--<ul class="list icons">--}}
                            	{{--<li><i class="icon-ok"></i> Bachelor of Business (Accountancy) - RMIT University, Melbourne Australia.</li>--}}
                                {{--<li><i class="icon-ok"></i> Member of Malaysian Institute of Accountants.</li>--}}
                                {{--<li><i class="icon-ok"></i> Member of CPA Australia.</li>--}}
                            {{--</ul>--}}
                         {{--</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Working Experience and Occupation </strong></td>--}}
                         {{--<td>Mr Chan Ying Wei has about 19 years of experience in the areas of auditing, accounting, treasury, taxation and corporate finance &amp; planning in various industries. Mr Chan Ying Wei began his career with Arthur Andersen/Ernst &amp; Young and since then, he has held senior financial position in a private company and as Chief Financial Officer in a public listed company. Prior to joining Far East Holdings Berhad, he was the Vice President - Treasury &amp; Corporate Finance with IEV Holdings Limited.</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Family relationship with any director and/or major shareholder of the listed issuer</strong></td>--}}
                         {{--<td>No</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Any conflict of interests that he/she has with the listed issuer or its subsidiaries</strong></td>--}}
                         {{--<td>No</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Details of any interest in the securities of the listed issuer or its subsidiaries</strong></td>--}}
                         {{--<td>No</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Details of any disagreement that he/she has with the Board of Directors</strong></td>--}}
                         {{--<td>No</td>--}}
                      {{--</tr>--}}
                                       {{----}}
                    {{--</tbody>--}}
                    {{--<tfoot>--}}
                    	{{--<tr>--}}
                            {{--<td></td>--}}
                            {{--<td></td>--}}
                        {{--</tr>--}}
                    {{--</tfoot>--}}
                  {{--</table> --}}
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
                      {{--<strong>Reference No:</strong> CC-140825-64952 --}}
                  {{--</div>--}}
                {{--</div>      --}}
              {{--</div>--}}
              {{----}}
            {{--</div>--}}
          {{--</div>--}}
@stop
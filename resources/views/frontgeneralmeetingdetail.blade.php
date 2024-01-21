@extends('layouts.front1')
@section('content')
 <div class="info_white1 border_bottom">
            <div class="container">
              <h2 class="red-title pull-left"><span>{{$announcement->title}}</span></h2>
              <div class="pull-right margin_top_10px">
              	<a href="news_centre_bursa_general_meetings.html" class="button">Back</a>
              </div>
              <div class="clearfix"></div>
              
              <?php $data = explode('<div class="ven_announcement_info">', $announcement->html); ?>

              <!-- note to programmer: the order of the announcement is from top (the latest) to bottom (the oldest) -->
              <div class="row-fluid">
                <div class="span12">
                  <a href="javascript:window.print()"><button class="btn pull-right" type="button"><i class="icon-print"></i> Print</button></a>
                  <div class="clearfix"></div>
                  {{ $data[0] }}

                  {{--<table class="table table-striped margin_top">--}}
                    {{--<col />--}}
                    {{--<col />--}}
                    {{----}}
                    {{--<tbody>--}}
                      {{--<tr>--}}
                        {{--<td><strong>Admission Sponsor</strong></td>--}}
                        {{--<td>Alliance Investment Bank Berhad</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                        {{--<td><strong>Sponsor</strong></td>--}}
                        {{--<td>RHB Investment Bank Bhd</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                        {{--<td><strong>Type of Meeting</strong></td>--}}
                        {{--<td>EGM</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                        {{--<td><strong>Indicator</strong></td>--}}
                        {{--<td>Outcome of Meeting</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                        {{--<td><strong>Date of Meeting</strong></td>--}}
                        {{--<td>02/09/2014</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                        {{--<td><strong>Time</strong></td>--}}
                        {{--<td>10:00 AM</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                        {{--<td><strong>Venue</strong></td>--}}
                        {{--<td>Redang Room, Bukit Jalil Golf &amp; Country Resort, Jalan 3/155B, Bukit Jalil, 57000 Kuala Lumpur</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                        {{--<td><strong>Outcome of Meeting</strong></td>--}}
                        {{--<td>--}}
                        	{{--<p>The Board of Directors of OCK is pleased to announce that the resolutions as set out in the Notice of Extraordinary General Meeting ("EGM") dated 8 August 2014 were approved by the shareholders at the EGM held on 2 September 2014. </p>--}}
                            {{--<p>This announcement is dated 2 September 2014.</p>--}}
                        {{--</td>--}}
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
 				  
                  
 <div class="ven_announcement_info">
   {{ $data[1] }}
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
                      {{--<strong>Reference No:</strong> CC-140902-7F7CA   --}}
                  {{--</div>--}}
                {{--</div>      --}}
              {{--</div>--}}
              {{----}}
            {{--</div>--}}
          {{--</div>--}}
          <!-- End Info Resalt-->
          
        <!-- InstanceEndEditable -->
@stop
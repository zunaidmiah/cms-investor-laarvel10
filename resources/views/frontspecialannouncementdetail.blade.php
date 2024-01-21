@extends('layouts.front1')
@section('content')
 <div class="info_white1 border_bottom">
            <div class="container">
              <h2 class="red-title pull-left"><span>{{ $announcement->title }}</span></h2>
              <div class="pull-right margin_top_10px">
              	<a href="news_centre_bursa_special_announcements.html" class="button">Back</a>
              </div>
              <div class="clearfix"></div>
              
              
              <!-- note to programmer: the order of the announcement is from top (the latest) to bottom (the oldest) -->
              <div class="row-fluid">
                <div class="span12">
                  <a href="javascript:window.print()"><button class="btn pull-right" type="button"><i class="icon-print"></i> Print</button></a>

                    <?php $data = explode('<div class="ven_announcement_info">', $announcement->html); ?>
                    {{ $data[0] }}
                  {{--<table class="table table-striped margin_top">--}}
                  	{{--<col />--}}
                	{{--<col />--}}

                    {{--<tbody>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Opening of Application</strong></td>--}}
                         {{--<td>29/06/2012</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Closing of Application</strong></td>--}}
                         {{--<td>06/07/2012</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Balloting of Applications</strong></td>--}}
                         {{--<td>10/07/2012</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Allotment of IPO shares to successful applicants</strong></td>--}}
                         {{--<td>13/07/2012</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Tentative Listing Date</strong></td>--}}
                         {{--<td>17/07/2012</td>--}}
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
                  <p>Remarks: <p> All defined terms used in this announcement shall have the same meaning as those defined in the Prospectus issued by Far East Holdings Berhad. The application period will remain open until 5.00 p.m. on 06 July 2012 or such later date or dates as the Board, Promoters, together with Alliance, may mutually decide at their absolute discretion to extend the date for the closing of applications to any later date or dates.</p>
                  <p>If the date of closing of application is extended, the dates of balloting, allotment and listing would be extended accordingly. We will publish any extension of the date of closing of application in a widely circulated English and Bahasa Malaysia newspaper in Malaysia prior to the original closing date of application.</p>
                  </p>


                </div>
                    <div class="ven_announcement_info">
                        {{ $data[1] }}

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
                      {{--<strong>Reference No:</strong> CC-140908-39310 --}}
                  {{--</div>--}}
                {{--</div>      --}}
              {{--</div>--}}
              {{----}}
            {{--</div>--}}
          </div>
@stop
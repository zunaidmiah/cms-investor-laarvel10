@extends('layouts.front1')
@section('content')
<div class="info_white1 border_bottom">
            <div class="container">
              <h2 class="red-title pull-left"><span>
                  @if( stripos($announcement->title, 'OTHER') === 0 )
                      {{substr($announcement->title, 0, 5)}}
                  @elseif( stripos($announcement->title, 'MULTIPLE PROPOSALS') === 0 )
                      {{substr($announcement->title, 0, 18)}}
                  @elseif( stripos($announcement->title, 'MATERIAL LITIGATION') === 0 )
                      {{substr($announcement->title, 0, 19)}}
                  @elseif( stripos($announcement->title, 'NEW ISSUE OF SECURITIES') === 0 )
                      {{substr($announcement->title, 0, 23)}}
                  @elseif( stripos($announcement->title, 'TRANSACTIONS') === 0 )
                      {{substr($announcement->title, 0, 12)}}
                  @elseif( stripos($announcement->title, 'PROPOSED ACQUISITION') === 0 )
                      {{substr($announcement->title, 0, 20)}}
                  @else
                      {{ $announcement->title }}
                  @endif

                </span></h2>
              <div class="pull-right margin_top_10px">
              	<a href="news_centre_bursa_general_announcement.html" class="button">Back</a>
              </div>
              <div class="clearfix"></div>
                  <a href="javascript:window.print()"><button class="btn pull-right" type="button"><i class="icon-print"></i> Print</button></a>

              <p>{{substr($announcement->title, 21)}}</p>

              <?php $data = explode('<div class="ven_announcement_info">', $announcement->html); ?>
              {{ $data[0] }}
              <div class="ven_announcement_info">
                {{ $data[1] }}

              <!-- note to programmer: the order of the announcement is from top (the latest) to bottom (the oldest) -->
              {{--<div class="row-fluid">--}}
                {{--<div class="span12">--}}
                  {{--<div class="clearfix"></div>--}}
                  {{--<p class="margin_top">MATERIAL LITIGATION Writ of Summon No. B52NCVC-219-07/2014 filed in the Kuala Lumpur Session Court by the solicitors acting for Ch'ng So-Fia (trading under the business name HNY Trading Services) against OCK Setia Engineering Sdn Bhd ("Summon I") Writ of Summon No. B52NCVC-224-07/2014 filed in the Kuala Lumpur Session Court by the solicitors acting for Hooi Tuck Min against OCK Setia Engineering Sdn Bhd and Ooi Chin Khoon ("Summon II")</p>--}}
                  {{--<table class="table table-striped">--}}
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
                        {{--<td><strong>Type</strong></td>--}}
                        {{--<td>Announcement</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                        {{--<td><strong>Subject</strong></td>--}}
                        {{--<td>MATERIAL LITIGATION</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                        {{--<td><strong>Description</strong></td>--}}
                        {{--<td>--}}
                        	{{--<p>Writ of Summon No. B52NCVC-219-07/2014 filed in the Kuala Lumpur Session Court by the solicitors acting for Ch'ng So-Fia (trading under the business name HNY Trading Services) against OCK Setia Engineering Sdn Bhd ("Summon I")</p>--}}
                            {{--<p>Writ of Summon No. B52NCVC-224-07/2014 filed in the Kuala Lumpur Session Court by the solicitors acting for Hooi Tuck Min against OCK Setia Engineering Sdn Bhd and Ooi Chin Khoon ("Summon II")</p>--}}
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
                  {{--<p>Further to the Company's announcements dated 1 August 2014, 6 August 2014, 8 August 2014 and 21 August 2014, the Board wishes to announce that since there is no monetary payment made by OCK Setia Engineering Sdn Bhd, there is no financial impact on Far East Holdings Berhad arising from the settlement of the said cases.</p>--}}
                  {{--<p>This announcement is dated 2 September 2014.</p>--}}
                  {{--<p>Remarks: N/A.</p> --}}
 				  {{----}}
                  {{----}}
                {{--</div>--}}
                   {{----}}
              {{--</div>--}}
            {{--</div>--}}
            {{--<i class="icon-bullhorn right"></i>--}}
          {{--</div>--}}
          {{--<!-- End Info white -->--}}
          {{----}}
          {{--<!-- Info Resalt-->--}}
          {{--<div class="info_resalt border_bottom">--}}
            {{--<div class="container">--}}
              {{--<div class="row-fluid">--}}
                {{--<div class="span12">--}}
                  {{--<h2 class="red-title"><span>Announcement Info</span></h2>--}}
                  {{--<div class="alert alert-error">--}}
                      {{--<strong>Reference No:</strong> CC-140902-0C02C  --}}
                  {{--</div>--}}
                {{--</div>      --}}
              {{--</div>--}}
              {{----}}
            {{--</div>--}}
          </div>
@stop
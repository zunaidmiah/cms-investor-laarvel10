@extends('layouts.front1')
@section('content')
 <div class="info_white1 border_bottom">
            <div class="container">
              <h2 class="red-title pull-left"><span>{{ $announcement->title }}</span></h2>
              <div class="pull-right margin_top_10px">
              	<a href="news_centre_bursa_change_in_director_interest.html" class="button">Back</a>
              </div>
              <div class="clearfix"></div>
              

              <!-- note to programmer: the order of the announcement is from top (the latest) to bottom (the oldest) -->
              <div class="row-fluid">
                <div class="span12">
                  <a href="javascript:window.print()"><button class="btn pull-right" type="button"><i class="icon-print"></i> Print</button></a>
                  <div class="clearfix"></div>
                    <?php $data = explode('<div class="ven_announcement_info">', $announcement); ?>
                    {{ $announcement->html }}

                  {{--<p>Information Compiled By KLSE</p>--}}
                  {{--<h5>Particulars of Director</h5>--}}
                  {{--<table class="table table-striped">--}}
                  	{{--<col />--}}
                	{{--<col />--}}

                    {{--<tbody>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Name</strong></td>--}}
                         {{--<td>Low Hock Keong</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Address</strong></td>--}}
                         {{--<td>7, Jalan Murai Off Jalan Meru, 41050 Klang, Selangor Darul Ehsan</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Descriptions (Class &amp; Nominal Value)</strong></td>--}}
                         {{--<td>Ordinary Shares of RM0.10 each</td>--}}
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
                  {{----}}
                  {{--<h5>Details of Changes</h5>--}}
                  {{--<table class="table table-striped">--}}
                  	{{--<col width="1" />--}}
                	{{--<col width="1" />--}}
                    {{--<col width="1" />--}}
                	{{--<col width="1" />--}}

                    {{--<thead>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Type of Transaction</strong></td>--}}
                         {{--<td><strong>Date of Change</strong></td>--}}
                         {{--<td><strong>No of Securities</strong></td>--}}
                         {{--<td><strong>Price Transacted (RM)</strong></td>--}}
                      {{--</tr>--}}
                    {{--</thead>--}}
                    {{--<tbody>--}}
                      {{--<tr>--}}
                         {{--<td>Disposed</td>--}}
                         {{--<td>10/10/2014</td>--}}
                         {{--<td>400,000</td>--}}
                         {{--<td></td>--}}
                      {{--</tr>--}}
                  {{----}}
                    {{--</tbody>--}}
                    {{--<tfoot>--}}
                    	{{--<tr>--}}
                            {{--<td></td>--}}
                            {{--<td></td>--}}
                            {{--<td></td>--}}
                            {{--<td></td>--}}
                        {{--</tr>--}}
                    {{--</tfoot>--}}
                  {{--</table>--}}
                  {{----}}
                  {{--<table class="table table-striped">--}}
                  	{{--<col />--}}
                	{{--<col />--}}

                    {{--<tbody>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Circumstances by reason of which change has occurred</strong></td>--}}
                         {{--<td>Married Deal</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Nature of Interest</strong></td>--}}
                         {{--<td>Direct Interest</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Consideration (if any)</strong></td>--}}
                         {{--<td></td>--}}
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
                  {{----}}
                  {{--<h5>Total No of Securities After Change</h5>--}}
                  {{--<table class="table table-striped">--}}
                  	{{--<col />--}}
                	{{--<col />--}}

                    {{--<tbody>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Direct (Units)</strong></td>--}}
                         {{--<td>6,960,000</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Direct (%)</strong></td>--}}
                         {{--<td>2.04</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Indirect / Deemed Interest (Units)</strong></td>--}}
                         {{--<td>1,278,000</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Indirect / Deemed Interest (%)</strong></td>--}}
                         {{--<td>0.37</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Date of Notice</strong></td>--}}
                         {{--<td>15/10/2014</td>--}}
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


                  {{--<p>Remarks:--}}
                  	{{--<ul class="list icons">--}}
                    	{{--<li><i class="icon-ok"></i> Name of Registered Holders- Total No. of Shares after changes (%)</li>--}}
                        {{--<li><i class="icon-ok"></i> Direct Interest: Low Hock Keong - 6,960,000 (2.04%)</li>--}}
                        {{--<li><i class="icon-ok"></i> Indirect Interest: Hoh Moh Ying - 1,278,000 (0.37%)*</li>--}}
                    {{--</ul>--}}
                  {{--</p>--}}

                  {{--<p>Notes:--}}
                  	{{--<ul class="list icons">--}}
                    	{{--<li><i class="icon-ok"></i> * Deemed interested in his Mother, Hoh Moh Ying's direct shareholdings in Far East Holdings Berhad. </li>--}}
                        {{--<li><i class="icon-ok"></i> i) The disposal of 400,000 ordinary shares of RM0.10 each represent 0.12% of the total paid-up capital of the Company by Mr Low Hock Keong.</li>--}}
                        {{--<li><i class="icon-ok"></i> ii) Based on the paid-up capital of the Company of RM34,188,000.00 divided into 341,880,000 ordinary shares of RM0.10 each as at 15 October 2014.</li>--}}
                        {{--<li><i class="icon-ok"></i> iii) This announcement serves as an announcement pursuant to Chapter 14.09 of the Ace Market Listing Requirements for dealing outside closed period.</li>--}}
                    {{--</ul>--}}
                  {{--</p>--}}


                {{--</div>--}}
                    @if(count($data) > 1)
                        <div class="ven_announcement_info">
                        {{ $data[1] }}
                    @endif
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
                      {{--<strong>Reference No:</strong> CC-141015-F541C --}}
                  {{--</div>--}}
                {{--</div>      --}}
              {{--</div>--}}
              {{----}}
            {{--</div>--}}
          {{--</div>--}}
@stop
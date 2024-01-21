@extends('layouts.front1')
@section('content')
 <div class="info_white1 border_bottom">
            <div class="container">
              <h2 class="red-title pull-left"><span>{{ $announcement->title }}</span></h2>
              <div class="pull-right margin_top_10px">
              	<a href="news_centre_bursa_notice_interest_substantial_shareholder.html" class="button">Back</a>
              </div>
              <div class="clearfix"></div>
              
              
              <!-- note to programmer: the order of the announcement is from top (the latest) to bottom (the oldest) -->
              <div class="row-fluid">
                <div class="span12">
                  <a href="javascript:window.print()"><button class="btn pull-right" type="button"><i class="icon-print"></i> Print</button></a>
                  <div class="clearfix"></div>

                    {{ $announcement->html }}

                  {{--<h5>Particulars of Substantial Securities Holder</h5>--}}
                  {{--<table class="table table-striped">--}}
                  	{{--<col />--}}
                	{{--<col />--}}

                    {{--<tbody>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Name</strong></td>--}}
                         {{--<td>Lembaga Tabung Angkatan Tentera</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Address</strong></td>--}}
                         {{--<td>Tingkat 10-12 Bangunan LTAT, Jalan Bukit Bintang, 55100 Kuala Lumpur</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>NRIC / Passport No / Company No.</strong></td>--}}
                         {{--<td>Act101 1973</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Nationality / Country of Incorporation</strong></td>--}}
                         {{--<td>Malaysia</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Descriptions (Class &amp; Nominal Value)</strong></td>--}}
                         {{--<td>Ordinary Shares of RM0.10 each</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Name &amp; Address of Registered Holder</strong></td>--}}
                         {{--<td>Lembaga Tabung Angkatan Tentera, Tingkat 10-12 Bangunan LTAT, Jalan Bukit Bintang, 55100 Kuala Lumpur</td>--}}
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
                  {{--<h5>Date Interest Acquired &amp; No of Securities Acquired</h5>--}}
                  {{--<table class="table table-striped">--}}
                  	{{--<col />--}}
                	{{--<col />--}}

                    {{--<tbody>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Currency</strong></td>--}}
                         {{--<td>Malaysian Ringgit (MYR)</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Date Interest Acquired</strong></td>--}}
                         {{--<td>05/08/2013</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>No of Securities</strong></td>--}}
                         {{--<td>16,835,000</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Circumstances by reason of which Securities Holder has interest</strong></td>--}}
                         {{--<td>Direct Business Transfer</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Nature of Interest</strong></td>--}}
                         {{--<td>Direct Interest</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Price Transacted (RM)</strong></td>--}}
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
                         {{--<td>16,835,000</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Direct (%)</strong></td>--}}
                         {{--<td>6.5</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Indirect / Deemed Interest (Units)</strong></td>--}}
                         {{--<td></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Indirect / Deemed Interest (%)</strong></td>--}}
                         {{--<td></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Date of Notice</strong></td>--}}
                         {{--<td>07/08/2013</td>--}}
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
                  {{--<p>Remarks: N/A.</p>  --}}
 				  {{----}}
                  
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
                      {{--<strong>Reference No:</strong> CC-130807-49951 --}}
                  {{--</div>--}}
                {{--</div>      --}}
              {{--</div>--}}
              {{----}}
            {{--</div>--}}
          {{--</div>--}}
@stop
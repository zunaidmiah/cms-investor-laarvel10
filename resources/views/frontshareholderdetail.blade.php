@extends('layouts.front1')
@section('content')
<div class="info_white1 border_bottom">
            <div class="container">
              <h2 class="red-title pull-left"><span>{{ $announcement->title }}</span></h2>
              <div class="pull-right margin_top_10px">
              	<a href="news_centre_bursa_change_in_substantial_shareholder_interest.html" class="button">Back</a>
              </div>
              <div class="clearfix"></div>
              
              
              <!-- note to programmer: the order of the announcement is from top (the latest) to bottom (the oldest) -->
              <div class="row-fluid">
                <div class="span12">
                  <a href="javascript:window.print()"><button class="btn pull-right" type="button"><i class="icon-print"></i> Print</button></a>
                  <div class="clearfix"></div>

                    {{ $announcement->html }}
                  {{--<h5>Particulars of substantial Securities Holder</h5>--}}
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
                         {{--<td>ACT101 1973</td>--}}
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
                    {{----}}
                    {{--<tbody>--}}
                      {{--<tr>--}}
                         {{--<td>Acquired</td>--}}
                         {{--<td>18/09/2014</td>--}}
                         {{--<td>1,069,000</td>--}}
                         {{--<td></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>Disposed</td>--}}
                         {{--<td>19/09/2014 </td>--}}
                         {{--<td>2,034,100</td>--}}
                         {{--<td></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>Acquired</td>--}}
                         {{--<td>22/09/2014</td>--}}
                         {{--<td>124,100</td>--}}
                         {{--<td></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>Acquired</td>--}}
                         {{--<td>23/09/2014</td>--}}
                         {{--<td>80,000</td>--}}
                         {{--<td></td>--}}
                      {{--</tr>                      --}}
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
                         {{--<td>Dealings of Shares</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Nature of Interest</strong></td>--}}
                         {{--<td>Direct Interest</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Direct (Units)</strong></td>--}}
                         {{--<td>49,076,300</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Direct (%)</strong></td>--}}
                         {{--<td>14.35</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Indirect / Deemed Interest (Units)</strong></td>--}}
                         {{--<td>0</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Indirect / Deemed Interest (%)</strong></td>--}}
                         {{--<td>0</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Total No of Securities After Change</strong></td>--}}
                         {{--<td>49,076,300</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Date of Notice</strong></td>--}}
                         {{--<td>26/09/2014</td>--}}
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
                  {{--<p>Remarks: N/A.</p>  --}}
 				  
                  
                {{--</div>--}}
                   
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
                      {{--<strong>Reference No:</strong> CC-140926-BE17B --}}
                  {{--</div>--}}
                {{--</div>      --}}
              {{--</div>--}}
              {{----}}
            {{--</div>--}}
          {{--</div>--}}
          <!-- End Info Resalt-->
          
        <!-- InstanceEndEditable -->
@stop
@extends('layouts.front1')
@section('content')
 <!-- Info white-->
          <div class="info_white1 border_bottom">
            <div class="container">
              <h2 class="red-title pull-left"><span>{{ $announcement->title }}</span></h2>
              <div class="pull-right margin_top_10px">
              	<a href="news_centre_bursa_entitlements.html" class="button">Back</a>
              </div>
              <div class="clearfix"></div>

                <?php
                    $data = explode('<div class="ven_announcement_info">', $announcement->html);
                ?>
                  <a href="javascript:window.print()"><button class="btn pull-right" type="button"><i class="icon-print"></i> Print</button></a>
                {{ $data[0] }}

              <!-- note to programmer: the order of the announcement is from top (the latest) to bottom (the oldest) -->
              {{--<div class="row-fluid">--}}
                {{--<div class="span12">--}}
                  {{--<table class="table table-striped margin_top">--}}
                  	{{--<col />--}}
                	{{--<col />--}}

                    {{--<tbody>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Admission Sponsor</strong></td>--}}
                         {{--<td>Alliance Investment Bank Berhad</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Sponsor</strong></td>--}}
                         {{--<td>Same as above</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>EX-date</strong></td>--}}
                         {{--<td>07/06/2013</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Entitlement Date</strong></td>--}}
                         {{--<td>11/06/2013</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Entitlement Time</strong></td>--}}
                         {{--<td>05:00:00 PM</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Entitlement Subject</strong></td>--}}
                         {{--<td>Final Dividend</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Entitlement Description</strong></td>--}}
                         {{--<td>Final Single Tier Dividend of RM0.005 per ordinary share in respect of the financial year ended 31 December 2012</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Financial Year End</strong></td>--}}
                         {{--<td>31/12/2012</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Share transfer book &amp; register of members will be </strong></td>--}}
                         {{--<td>11/06/2013 to 11/06/2013 closed from (both dates inclusive) for the purpose of determining the entitlements</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Registrar's Name, Address, Telephone No</strong></td>--}}
                         {{--<td>Equiniti Services Sdn Bhd <br/>Level 8, Menara MIDF, 82, Jalan Raja Chulan, 50200 Kuala Lumpur <br/>Tel No.: +(603) 2166-0933</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Payment Date</strong></td>--}}
                         {{--<td>10/07/2013</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>a. Securities transferred into the Depositor's Securities Account before 4:00 pm in respect of transfers</strong></td>--}}
                         {{--<td>11/06/2013</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>b. Securities deposited into the Depositor's Securities Account before 12:30 pm in respect of securities exempted from mandatory deposit</strong></td>--}}
                         {{--<td></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>c. Securities bought on the Exchange on a cum entitlement basis according to the Rules of the Exchange</strong></td>--}}
                         {{--<td></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Number of new shares/securities issued (units) (If applicable)</strong></td>--}}
                         {{--<td></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Entitlement Indicator</strong></td>--}}
                         {{--<td>Currency</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Currency</strong></td>--}}
                         {{--<td>Malaysian Ringgit (MYR)</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Entitlement in Currency</strong></td>--}}
                         {{--<td>0.005</td>--}}
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
                  {{--<p>Remarks: The final dividend of RM0.005 per share under the single tier system for the financial year ended 31 December 2012 is subject to the shareholders' approval at the forthcoming Second Annual General Meeting Far East Holdings Berhad to be held on Monday, 27 May 2013.</p> --}}
 				  {{----}}
                  {{----}}
                {{--</div>--}}
                   {{----}}
              {{--</div>--}}
            </div>
            <i class="icon-bullhorn right"></i>
          </div>
          <!-- End Info white -->
          
          <!-- Info Resalt-->
          <div class="info_resalt border_bottom">
            <div class="container">
              <div class="row-fluid">
                <div class="span12">
                  <h2 class="red-title"><span>Announcement Info</span></h2>
                  <div class="alert alert-error">
                      <strong>Reference No:</strong> CC-130502-2BBBF 
                  </div>
                </div>      
              </div>
              
            </div>
          </div>
          <!-- End Info Resalt-->
          
        <!-- InstanceEndEditable -->

@stop
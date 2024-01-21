@extends('layouts.front1')
@section('content')
 <div class="info_white1 border_bottom">
            <div class="container">
              <h2 class="red-title pull-left"><span>{{ $announcement->title }}</span></h2>
              <div class="pull-right margin_top_10px">
              	<a href="news_centre_bursa_financial_results.html" class="button">Back</a>
              </div>
              <div class="clearfix"></div>
              <a href="javascript:window.print()"><button class="btn pull-right" type="button"><i class="icon-print"></i> Print</button></a>

                <?php $data = explode('<div class="ven_announcement_info">', $announcement->html); ?>
                {{ $data[0] }}
                <div class="ven_announcement_info">
                {{ $data[1] }}
                <!-- note to programmer: the order of the announcement is from top (the latest) to bottom (the oldest) -->
              {{--<div class="row-fluid">--}}
                {{--<div class="span12">--}}
                  {{--<div class="clearfix"></div>--}}
                  {{--<div class="margin_top"></div>--}}
                  {{--<table class="table table-striped">--}}
                  	{{--<col width="1"/>--}}
                	{{--<col width="1"/>--}}

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
                         {{--<td><strong>Financial Year End</strong></td>--}}
                         {{--<td>31/12/2014</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Quarter</strong></td>--}}
                         {{--<td>2</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Quarterly report for the financial period ended</strong></td>--}}
                         {{--<td>30/06/2014</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>The Figures</strong></td>--}}
                         {{--<td>have not been audited</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Attachments</strong></td>--}}
                         {{--<td><a href="img/quarterly_reports/OCK_QR_Q2_30-06-2014.pdf" target="_blank">Q2 Quarterly Report 2014</a></td>--}}
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
                  {{----}}
                  {{--<h5>Summary of Key Financial Information 30/06/2014</h5>--}}
                  {{--<table class="table table-striped">--}}
                  	{{--<col width="1"/>--}}
                	{{--<col />--}}
                    {{--<col />--}}
                    {{--<col />--}}
                    {{--<col />--}}
                    {{--<col />--}}

					{{--<thead>--}}
                      {{--<tr>--}}
                         {{--<td colspan="2"></td>--}}
                         {{--<td colspan="2"><div align="center"><strong>Individual Period</strong></div></td>--}}
                         {{--<td colspan="2"><div align="center"><strong>Cumulative Period</strong></div></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td colspan="2"></td>--}}
                         {{--<td><strong>Current Year Quarter</strong></td>--}}
                         {{--<td><strong>Preceding Year Corresponding Quarter</strong></td>--}}
                         {{--<td><strong>Current Year to Date</strong></td>--}}
                         {{--<td><strong>Preceding Year Corresponding Period</strong></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td colspan="2"></td>--}}
                         {{--<td>30/06/2014</td>--}}
                         {{--<td>30/06/2013</td>--}}
                         {{--<td>30/06/2014</td>--}}
                         {{--<td>30/06/2013</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td colspan="2"></td>--}}
                         {{--<td><strong>RM '000</strong></td>--}}
                         {{--<td><strong>RM '000</strong></td>--}}
                         {{--<td><strong>RM '000</strong></td>--}}
                         {{--<td><strong>RM '000</strong></td>--}}
                      {{--</tr>--}}
                    {{--</thead>--}}
                    {{----}}
                    {{--<tbody>--}}
                      {{--<tr>--}}
                         {{--<td><strong>1</strong></td>--}}
                         {{--<td><strong>Revenue</strong></td>--}}
                         {{--<td>43,430</td>--}}
                         {{--<td>33,317</td>--}}
                         {{--<td>80,034</td>--}}
                         {{--<td>63,690</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>2</strong></td>--}}
                         {{--<td><strong>Profit/(loss) before tax</strong></td>--}}
                         {{--<td>4,590</td>--}}
                         {{--<td>4,147</td>--}}
                         {{--<td>9,115</td>--}}
                         {{--<td>7,385</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>3</strong></td>--}}
                         {{--<td><strong>Profit/(loss) for the period</strong></td>--}}
                         {{--<td>3,399</td>--}}
                         {{--<td>3,109</td>--}}
                         {{--<td>6,832</td>--}}
                         {{--<td>5,537</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>4</strong></td>--}}
                         {{--<td><strong>Profit/(loss) attributable to ordinary equity holders of the parent</strong></td>--}}
                         {{--<td>3,023</td>--}}
                         {{--<td>2,621</td>--}}
                         {{--<td>6,038</td>--}}
                         {{--<td>4,785</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>5</strong></td>--}}
                         {{--<td><strong>Basic earnings/(loss) per share (Subunit)</strong></td>--}}
                         {{--<td>1.02</td>--}}
                         {{--<td>1.01</td>--}}
                         {{--<td>2.09</td>--}}
                         {{--<td>1.85</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>6</strong></td>--}}
                         {{--<td><strong>Proposed/Declared dividend per share (Subunit)</strong></td>--}}
                         {{--<td>0.00</td>--}}
                         {{--<td>0.00</td>--}}
                         {{--<td>0.00</td>--}}
                         {{--<td>0.00</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td colspan="2"></td>--}}
                         {{--<td colspan="2"><strong>As At End of Current Quarter</strong></td>--}}
                         {{--<td colspan="2"><strong>As At Preceding Financial Year End</strong></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>7</strong></td>--}}
                         {{--<td><strong>Net assets per share attributable to ordinary equity holders of the parent (RM)</strong></td>--}}
                         {{--<td colspan="2">0.4600</td>--}}
                         {{--<td colspan="2">0.2800</td>--}}
                      {{--</tr>--}}
                      {{----}}
                                        {{----}}
                    {{--</tbody>--}}
                    {{--<tfoot>--}}
                    	{{--<tr>--}}
                            {{--<td></td>--}}
                            {{--<td></td>--}}
                            {{--<td></td>--}}
                            {{--<td></td>--}}
                            {{--<td></td>--}}
                            {{--<td></td>--}}
                        {{--</tr>--}}
                    {{--</tfoot>--}}
                  {{--</table> --}}
                  {{----}}
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
                      {{--<strong>Reference No:</strong> CC-140828-E1EA5 --}}
                  {{--</div>--}}
                {{--</div>      --}}
              {{--</div>--}}
              {{----}}
            {{--</div>--}}
          </div>
@stop
@extends('layouts.front1')
@section('content')
  <!-- Info white-->
          <div class="info_white1 border_bottom">
            <div class="container">
              <h2 class="red-title pull-left"><span>Change of Address</span></h2>
              <div class="pull-right margin_top_10px">
              	<a href="news_centre_bursa_change_address.html" class="button">Back</a>
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
                         {{--<td><strong>Change Description</strong></td>--}}
                         {{--<td>Registrar</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Old Address</strong></td>--}}
                         {{--<td>Level 8, Menara MIDF, 82, Jalan Raja Chulan, 50200 Kuala Lumpur</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>New Address</strong></td>--}}
                         {{--<td>Level 17, The Gardens North Tower, Mid-Valley City, Lingkaran Syed Putra, 59200 Kuala Lumpur </td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Name of Registrar</strong></td>--}}
                         {{--<td>Equiniti Services Sdn Bhd</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Telephone No</strong></td>--}}
                         {{--<td>+(603) 2264-3883</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Facsimile No</strong></td>--}}
                         {{--<td>+(603) 2282-1886 </td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>E-mail Address</strong></td>--}}
                         {{--<td></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td><strong>Effective Date</strong></td>--}}
                         {{--<td>08/09/2014</td>--}}
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
                      {{--<strong>Reference No:</strong> CC-140908-39310 --}}
                  {{--</div>--}}
                {{--</div>      --}}
              {{--</div>--}}
              {{----}}
            {{--</div>--}}
          {{--</div>--}}
          <!-- End Info Resalt-->
@stop
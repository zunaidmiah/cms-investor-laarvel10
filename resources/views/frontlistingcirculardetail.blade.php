@extends('layouts.front1')
@section('content')
<div class="info_white1 border_bottom">
            <div class="container">
                <?php $data = explode('<div class="ven_announcement_info">', $announcement->html); ?>
              <h2 class="red-title pull-left"><span>{{ $announcement->title }}</span></h2>
              <div class="pull-right margin_top_10px">
              	<a href="news_centre_bursa_listing_circulars.html" class="button">Back</a>
              </div>
              <div class="clearfix"></div>
                  <a href="javascript:window.print()"><button class="btn pull-right" type="button"><i class="icon-print"></i> Print</button></a>


              <!-- note to programmer: the order of the announcement is from top (the latest) to bottom (the oldest) -->
              <div class="row-fluid">
                <div class="span12">
                  <div class="clearfix"></div>
                    {{ $data[0] }}
                  {{--<h5>LISTING'S CIRCULAR NO. L/Q : 66061 OF 2012</h5>--}}
                  {{--<p><strong>Interim Single Tier Dividend of 0.5 sen per share in respect of the financial year ending 31 December 2012.</strong></p>--}}
                  {{--<p>Kindly be advised of the following : --}}
                  	{{--<ul class="list icons">--}}
                    	{{--<li><i class="icon-ok"></i> The above Company's securities will be traded and quoted [ "Ex - Dividend" ] as from : [ 1 October 2012 ]</li>--}}
                        {{--<li><i class="icon-ok"></i> The last date of lodgement : [ 3 October 2012 ]</li>--}}
                        {{--<li><i class="icon-ok"></i> Date Payable : [ 17 October 2012 ]</li>--}}
                    {{--</ul>--}}
                  {{--</p>--}}
                  {{----}}
 				  {{----}}
                  {{----}}
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
                      {{--<strong>Reference No:</strong> RN-120921-30630  --}}
                  {{--</div>--}}
                {{--</div>      --}}
              {{--</div>--}}
              {{----}}
            {{--</div>--}}
          {{--</div>--}}
@stop
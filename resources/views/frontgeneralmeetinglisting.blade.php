@extends('layouts.front1')
@section('content')
<div class="info_white1 border_bottom">
            <div class="container">
              <h2 class="red-title pull-left"><span>General Meetings</span></h2>
              <p class="pull-right">View Year:
                 <select name="select" id="subject">
                    <option>-- Select --</option>
                    <option>2014</option>
                    <option>2013</option>
                    <option>2012</option>
                    <option>2011</option>
                    <option>2010</option>
                    <option>Archives</option>
                 </select>
              </p>
              <div class="clearfix"></div>
              
              <div class="margin_top_10px">
                  <form id="form" method="POST">
                     <h6>Search Date</h6>
                     <input type="text" placeholder="From (dd/mm/yyyy)" name="dateFrom" class="input-medium">
                     <input type="text" placeholder="To (dd/mm/yyyy)" name="dateTo" class="input-medium">
                     <input type="submit" name="Submit" value="Filter" class="button">
                     <input type="reset" name="reset" value="Reset" class="button">
                  </form>
              </div>           
              
              <!-- note to programmer: the order of the announcement is from top (the latest) to bottom (the oldest) -->
              <div class="row-fluid">
                <div class="span12">
                  <table class="table table-striped">
                  	<col width="1"/>
                	<col />
                    <col />
                    <col />
                    
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Announcement Date</th>
                        <th>Company</th>
                        <th>Title</th>
                      </tr>
                    </thead>
                    <tbody>
                    @if( isset($announcements) && count($announcements) > 0 )
                        <?php $counter = 1; ?>
                        @foreach( $announcements as $announcement )
                            <tr>
                                <td>{{ $counter++ }}</td>
                                <td>{{ $announcement->date_of_publishing }}</td>
                                <td>{{ $announcement->company_name }}</td>
                                <td>
                                    <a href="/investorrelations/frontgeneralmeetingdetail/{{ $announcement->id }}">
                                        {{ $announcement->title }}
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                      {{--<tr>--}}
                         {{--<td>1</td>--}}
                         {{--<td>02 Sep 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="news_centre_bursa_general_meetings_details.html">GENERAL MEETINGS: OUTCOME OF MEETING</a></td>--}}
                      {{--</tr>--}}
                      {{--<!--<tr>--}}
                         {{--<td>2</td>--}}
                         {{--<td>07 Aug 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">GENERAL MEETINGS: NOTICE OF MEETING</a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>3</td>--}}
                         {{--<td>28 May 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">GENERAL MEETINGS: OUTCOME OF MEETING</a></td>--}}
                      {{--</tr> --}}
                      {{--<tr>--}}
                         {{--<td>4</td>--}}
                         {{--<td>28 May 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">GENERAL MEETINGS: OUTCOME OF MEETING</a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>5</td>--}}
                         {{--<td>09 May 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">GENERAL MEETINGS: NOTICE OF MEETING </a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>6</td>--}}
                         {{--<td>05 May 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">GENERAL MEETINGS: NOTICE OF MEETING</a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>7</td>--}}
                         {{--<td>27 May 2013</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">GENERAL MEETINGS: OUTCOME OF MEETING</a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>8</td>--}}
                         {{--<td>27 May 2013</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">GENERAL MEETINGS: OUTCOME OF MEETING</a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>9</td>--}}
                         {{--<td>02 May 2013</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">GENERAL MEETINGS: NOTICE OF MEETING</a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>10</td>--}}
                         {{--<td>02 May 2013</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">GENERAL MEETINGS: NOTICE OF MEETING </a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>11</td>--}}
                         {{--<td>07 Dec 2012</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">GENERAL MEETINGS: OUTCOME OF MEETING</a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>12</td>--}}
                         {{--<td>20 Nov 2012</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">GENERAL MEETINGS: NOTICE OF MEETING</a></td>--}}
                      {{--</tr>-->--}}
                                    {{----}}
                    </tbody>
                    <tfoot>
                    	<tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tfoot>
                  </table> 
                  
                </div>
                   
              </div>
            </div>
            <i class="icon-bullhorn right"></i>
          </div>
          <!-- End Info white -->
          
        <!-- InstanceEndEditable -->
@stop
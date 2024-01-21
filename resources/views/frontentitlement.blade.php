@extends('layouts.front1')
@section('content')

<!-- InstanceBeginEditable name="EditRegion4" -->
          <!-- Info white-->
          <div class="info_white1 border_bottom">
            <div class="container">
              <h2 class="red-title pull-left"><span>Entitlements Summary</span></h2>
              <p class="pull-right">View Year:
              <form id="form" method="POST">
                 <select name="selectYear" id="subject" onchange="submit()">
                    <option>-- Select --</option>
                    <option>2014</option>
                    <option>2013</option>
                    <option>2012</option>
                    <option>2011</option>
                    <option>2010</option>
                    <option>Archives</option>
                 </select>
                    </form>
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
                    <col />
                    <col />
                    <col />

                    
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Announcement Date</th>
                        <th>Company</th>
                        <th>Title</th>
                        <th>EX Date</th>
                        <th>Payment Date</th>
                        <th>Lodgement Date</th>
                      </tr>
                    </thead>
                    <tbody>
                    @if( isset($announcements) )
                        <?php $counter = 1; ?>
                        @foreach( $announcements as $announcement )
                          <tr>
                             <td>{{ $counter++ }}</td>
                             <td>{{ $announcement->date_of_publishing }}</td>
                             <td>{{ $announcement->company_name }}</td>
                             <td><a href="/investorrelations/frontentitlementdetail/{{ $announcement->id }}">{{ $announcement->title }}</a></td>
                             <td>24 Nov 2014</td>
                             <td>-</td>
                             <td>26 Nov 2014</td>
                          </tr>
                        @endforeach
                    @endif
                      {{--<tr>--}}
                         {{--<td>1</td>--}}
                         {{--<td>12 Nov 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">Bonus Issue 1 : 2</a></td>--}}
                         {{--<td>24 Nov 2014</td>--}}
                         {{--<td>-</td>--}}
                         {{--<td>26 Nov 2014</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>2</td>--}}
                         {{--<td>02 May 2013</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="news_centre_bursa_entitlements_details.html">Final Dividend</a></td>--}}
                         {{--<td>7 Jun 2013</td>--}}
                         {{--<td>10 Jul 2013</td>--}}
                         {{--<td>11 Jun 2013</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>3</td>--}}
                         {{--<td>18 Sep 2012</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">Interim Dividend</a></td>--}}
                         {{--<td>1 Oct 2012</td>--}}
                         {{--<td>17 Oct 2012</td>--}}
                         {{--<td>3 Oct 2012</td>--}}
                      {{--</tr>--}}
                                    
                    </tbody>
                    <tfoot>
                    	<tr>
                            <td></td>
                            <td></td>
                            <td></td>
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
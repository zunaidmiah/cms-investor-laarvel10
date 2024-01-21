@extends('layouts.front2')
@section('content')
 <div class="info_white1 border_bottom">
            <div class="container">
              <h2 class="red-title pull-left"><span>General Announcement</span></h2>
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
                  <form id="form" action="#">
                     <h6>Search Date</h6>
                     <input type="text" placeholder="From (dd/mm/yyyy)" name="Name" class="input-medium">
                     <input type="text" placeholder="To (dd/mm/yyyy)" name="Name" class="input-medium">
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
                                    @if( stripos($announcement->title, 'OTHER') === 0 )
                                        <a href="/investorrelations/frontgeneralannouncementdetail/{{ $announcement->id }}">
                                            {{substr($announcement->title, 0, 5)}}
                                        </a>
                                        <br />
                                        {{substr($announcement->title, 6)}}
                                    @elseif( stripos($announcement->title, 'MULTIPLE PROPOSALS') === 0 )
                                        <a href="/investorrelations/frontgeneralannouncementdetail/{{ $announcement->id }}">
                                            {{substr($announcement->title, 0, 18)}}
                                        </a>
                                        <br />
                                        {{substr($announcement->title, 19)}}
                                    @elseif( stripos($announcement->title, 'MATERIAL LITIGATION') === 0 )
                                        <a href="/investorrelations/frontgeneralannouncementdetail/{{ $announcement->id }}">
                                            {{substr($announcement->title, 0, 19)}}
                                        </a>
                                        <br />
                                        {{substr($announcement->title, 20)}}
                                    @elseif( stripos($announcement->title, 'NEW ISSUE OF SECURITIES') === 0 )
                                        <a href="/investorrelations/frontgeneralannouncementdetail/{{ $announcement->id }}">
                                            {{substr($announcement->title, 0, 23)}}
                                        </a>
                                        <br />
                                        {{substr($announcement->title, 24)}}
                                    @elseif( stripos($announcement->title, 'TRANSACTIONS') === 0 )
                                        <a href="/investorrelations/frontgeneralannouncementdetail/{{ $announcement->id }}">
                                            {{substr($announcement->title, 0, 12)}}
                                        </a>
                                        <br />
                                        {{substr($announcement->title, 13)}}
                                    @elseif( stripos($announcement->title, 'PROPOSED ACQUISITION') === 0 )
                                        <a href="/investorrelations/frontgeneralannouncementdetail/{{ $announcement->id }}">
                                            {{substr($announcement->title, 0, 20)}}
                                        </a>
                                        <br />
                                        {{substr($announcement->title, 21)}}
                                    @else
                                        <a href="/investorrelations/frontgeneralannouncementdetail/{{ $announcement->id }}">
                                            {{ $announcement->title }}
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4">No Announcements</td>
                        </tr>
                    @endif
                   	  {{--<tr> 	--}}
                        {{--<td>1</td>--}}
                         {{--<td>29 Jan 2015</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="news_centre_bursa_general_announcement_details_20150129.html">OTHERS</a> <br/>INCORPORATION OF A NEW SUBSIDIARY - MIN-OCK INFRASTRUCTURE PTE. LTE.</td>--}}
                      {{--</tr>--}}
                      {{--<tr> 	--}}
                        {{--<td>2</td>--}}
                         {{--<td>22 Dec 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="news_centre_bursa_general_announcement_details_20141222.html">OTHERS</a><br/>INCORPORATION OF NEW SUBSIDIARY – OCK TELCO INFRA PTE. LTD.</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>3</td>--}}
                         {{--<td>27 Nov 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="news_centre_bursa_general_announcement_details_20141127.html">MULTIPLE PROPOSALS</a><br/>FAR EAST HOLDINGS BERHAD ("OCK" OR THE "COMPANY") I. ACQUISITION; II. BONUS ISSUE; III. ESOS; IV. INCREASE IN AUTHORISED SHARE CAPITAL; AND V. AMENDMENTS (COLLECTIVELY REFERRED TO AS THE "CORPORATE EXERCISES")</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>4</td>--}}
                         {{--<td>26 Nov 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="news_centre_bursa_general_announcement_details_20141126.html">MULTIPLE PROPOSALS</a><br/>FAR EAST HOLDINGS BERHAD ("OCK" OR THE "COMPANY") I. ACQUISITION; II. BONUS ISSUE; III. ESOS; IV. INCREASE IN AUTHORISED SHARE CAPITAL; AND V. AMENDMENTS (COLLECTIVELY REFERRED TO AS THE "CORPORATE EXERCISES")</td>--}}
                      {{--<tr>--}}
                         {{--<td>5</td>--}}
                         {{--<td>20 Nov 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="news_centre_bursa_general_announcement_details_20141120.html">OTHERS</a><br/>FAR EAST HOLDINGS BERHAD ("OCK" OR THE "COMPANY") TRANSFER OF THE LISTING OF AND QUOTATION FOR THE ENTIRE ISSUED AND PAID-UP SHARE CAPITAL OF OCK FROM THE ACE MARKET TO THE MAIN MARKET OF BURSA MALAYSIA SECURITIES BERHAD ("TRANSFER ")</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>6</td>--}}
                         {{--<td>12 Nov 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="news_centre_bursa_general_announcement_details_20141112.html">MULTIPLE PROPOSALS</a><br/>FAR EAST HOLDINGS BERHAD ("OCK" OR THE "COMPANY") I. ACQUISITION; II. BONUS ISSUE; III. ESOS; IV. INCREASE IN AUTHORISED SHARE CAPITAL; V. AMENMENTS (COLLECTIVELY REFERRED TO AS THE "CORPORATE EXERCISES")</td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>7</td>--}}
                         {{--<td>05 Nov 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="news_centre_bursa_general_announcement_details_20141105.html">OTHERS</a><br/>FAR EAST HOLDINGS BERHAD ("OCK" OR THE "COMPANY") TRANSFER OF THE LISTING OF AND QUOTATION FOR THE ENTIRE ISSUED AND PAID-UP SHARE CAPITAL OF OCK FROM THE ACE MARKET TO THE MAIN MARKET OF BURSA MALAYSIA SECURITIES BERHAD ("TRANSFER ")</td>--}}
                      {{--</tr>--}}
                     
                                          
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
                  <div class="pagination pull-right">
                     <ul>
                        <li><a href="#">&laquo;</a></li>
                        <li><a href="#">&#8249;</a></li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&#8250;</a></li>
                        <li><a href="#">&raquo;</a></li>
                     </ul>
                   </div>
                  
                </div>
                   
              </div>
            </div>
            <i class="icon-bullhorn right"></i>
          </div>
@stop
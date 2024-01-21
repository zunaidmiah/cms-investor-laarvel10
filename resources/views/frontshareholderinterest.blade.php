@extends('layouts.front1')
@section('content')
 <div class="info_white1 border_bottom">
            <div class="container">
              <h2 class="red-title pull-left"><span>Changes in Substantial Shareholder's Interest (29B)</span></h2>
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
                                <td><a href="/investorrelations/shareholderdetail/{{ $announcement->id }}">{{ $announcement->title }}</a></td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4">No Announcements</td>
                        </tr>
                    @endif
                    	{{--<tr>--}}
                         {{--<td>1</td>--}}
                         {{--<td>23 Feb 2015</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="news_centre_bursa_change_in_substantial_shareholder_interest_details_20150223.html">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                         {{--<td>2</td>--}}
                         {{--<td>13 Feb 2015</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="news_centre_bursa_change_in_substantial_shareholder_interest_details_20150213.html">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                         {{--<td>3</td>--}}
                         {{--<td>21 Jan 2015</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="news_centre_bursa_change_in_substantial_shareholder_interest_details_20150121.html">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                         {{--<td>4</td>--}}
                         {{--<td>14 Jan 2015</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="news_centre_bursa_change_in_substantial_shareholder_interest_details_20150114.html">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                         {{--<td>5</td>--}}
                         {{--<td>09 Jan 2015</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="news_centre_bursa_change_in_substantial_shareholder_interest_details_20150109.html">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                        {{--</tr>--}}
                        {{--<tr>--}}
                         {{--<td>6</td>--}}
                         {{--<td>05 Jan 2015</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="news_centre_bursa_change_in_substantial_shareholder_interest_details_20150105.html">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>7</td>--}}
                         {{--<td>26 Dec 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="news_centre_bursa_change_in_substantial_shareholder_interest_details_20141226.html">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>8</td>--}}
                         {{--<td>22 Dec 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="news_centre_bursa_change_in_substantial_shareholder_interest_details_20141222.html">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>9</td>--}}
                         {{--<td>08 Dec 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="news_centre_bursa_change_in_substantial_shareholder_interest_details_20141208.html">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>10</td>--}}
                         {{--<td>02 Dec 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="news_centre_bursa_change_in_substantial_shareholder_interest_details_20141202.html">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                      {{--</tr>--}}
                      {{--<!--<tr>--}}
                         {{--<td>1</td>--}}
                         {{--<td>26 Sep 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="news_centre_bursa_change_in_substantial_shareholder_interest_details.html">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>2</td>--}}
                         {{--<td>22 Sep 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>3</td>--}}
                         {{--<td>18 Sep 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>4</td>--}}
                         {{--<td>15 Sep 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>5</td>--}}
                         {{--<td>09 Sep 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>6</td>--}}
                         {{--<td>29 Aug 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>7</td>--}}
                         {{--<td>25 Aug 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>8</td>--}}
                         {{--<td>20 Aug 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>9</td>--}}
                         {{--<td>12 Aug 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>10</td>--}}
                         {{--<td>06 Aug 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>11</td>--}}
                         {{--<td>23 Jul 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>12</td>--}}
                         {{--<td>18 Jul 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>13</td>--}}
                         {{--<td>09 Jul 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>14</td>--}}
                         {{--<td>03 Jul 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>15</td>--}}
                         {{--<td>30 Jun 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>16</td>--}}
                         {{--<td>26 Jun 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>17</td>--}}
                         {{--<td>19 Jun 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>18</td>--}}
                         {{--<td>16 Jun 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>19</td>--}}
                         {{--<td>09 Jun 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>20</td>--}}
                         {{--<td>28 May 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>21</td>--}}
                         {{--<td>23 May 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>22</td>--}}
                         {{--<td>08 May 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>23</td>--}}
                         {{--<td>02 May 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>24</td>--}}
                         {{--<td>25 Apr 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>25</td>--}}
                         {{--<td>21 Apr 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>26</td>--}}
                         {{--<td>16 Apr 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>27</td>--}}
                         {{--<td>14 Apr 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>28</td>--}}
                         {{--<td>08 Apr 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>29</td>--}}
                         {{--<td>02 Apr 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                      {{--</tr>--}}
                      {{--<tr>--}}
                         {{--<td>30</td>--}}
                         {{--<td>02 Apr 2014</td>--}}
                         {{--<td>FAR EAST HOLDINGS BERHAD</td>--}}
                         {{--<td><a href="#">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera </a></td>--}}
                      {{--</tr>-->--}}
                      
                                          
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
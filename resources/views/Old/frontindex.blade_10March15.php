@extends('layouts.front')
@section('content')

                 
<section class="content_info"><!-- InstanceBeginEditable name="EditRegion4" -->

          <!-- Info title-->
          <div class="info_title border_bottom">
            <div class="vertical_line animated fadeInUp delay2">
              <div class="circle_top"></div>
            </div>
            <div class="container">
              <div class="row-fluid animated fadeInUp delay2">
                <div class="span6">
                  {{ $page[0]->left_block1_title }}
                  {{ $page[0]->left_block1_content }}

                </div>
                <div class="span3 pull-left">
                       <p class="black-title"><strong>Stock Price</strong></p>
                       <div class="alert alert-success">
                           <strong>OCK 0172</strong>
                       </div>
                </div>

                 <div class="span3 pull-left">
                       <p class="black-title"><strong>Last Done</strong></p>
                       <div class="alert alert-error">
                           <strong>{{ $stockdata->close }}</strong>
                       </div>
                       <!--<div class="alert alert-success">
                           <strong>0.900</strong>
                       </div>-->
                    </div>

                 <div class="span6">
                 	<table class="table table-striped">
                  	<col width="1"/>
                	<col width="1"/>
                    <col width="1"/>

                    <thead>
                    	<th>Change</th>
                        <th>Change %</th>
                        <th>Volume</th>
                    </thead>

                    <tbody>
                      <tr>
                         <td><!--<span class="green-title"><i class="icon-arrow-up"></i> <strong>0.030</strong></span>-->
                         <span class="red-title"><i class="icon-arrow-down"></i> <strong>{{ $stockdata->adj }}</strong></span></td>
                         <td><!--<span class="green-title"><i class="icon-arrow-up"></i> <strong>3.45%</strong></span>-->
                         <span class="red-title"><i class="icon-arrow-down"></i> <strong>
                                <?php $stockper = $stockdata->adj * 100 ?>
                                 {{ $stockper }}
                             </strong></span>
                         </td>
                         <td>{{ $stockdata->volume }}</td>
                      </tr>

                      <tr>
                         <td><strong>Open</strong></td>
                         <td><strong>High</strong></td>
                         <td><strong>Low</strong></td>
                      </tr>

                       <tr>
                         <td>{{ $stockdata->open }}</td>
                         <td><span class="green-title"><strong>{{ $stockdata->high }}</strong></span></td>
                         <td><span class="red-title"><strong>{{ $stockdata->low }}</strong></span></td>
                      </tr>

                    </tbody>
                    <tfoot>
                    	<tr>
                        	<td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tfoot>
                  </table>
                  	<p>Quotes Last Updated: {{ $stockdata->date }}. <br/>All Prices Are Quoted In Ringgit Malaysia.<br/>
                  	</p>



                 </div>

              </div>
            </div>
            <div style="clear:both"></div>
            <div class="vertical_line"></div>

            <i class="icon-signal right"></i>
          </div>
          <!-- End Info title-->
          <div class="clearfix"></div>

          <!-- Info resalt-->
          <div class="info_resalt border_bottom">
            <div class="container">
              <div class="row-fluid animated fadeInUp delay3">
              	<h2 class="red-title text-center margin_bottom_20px"><span>Latest Reports</span></h2>
                <div class="span12">
                    <div class="portfolio animated fadeInUp delay3">

                       <ul id="portfolio-list">

                            @foreach ($Reports as $Report)
                           <!-- Item Portfolio-->
                            <li class="span4">
                                <div class="hover">
                                    <img src="{{ url() }}/{{ $Report->image->url('large') }}" alt="{{ $Report->title }}"/>                               
                                    <a href="{{ url() }}{{ $Report->pdf->url() }}" title="Download"><div class="overlay"></div></a>
                                </div> 
                                                                   
                                <div class="info">
                                    <a href="{{ url() }}{{ $Report->pdf->url() }}" target="_blank">{{ $Report->title }}</a>
 
                                </div>  
                            </li>  
                            <!-- End Item Portfolio-->
                            @endforeach


                        </ul>
                    </div>

                </div>

              </div>
            </div>

          </div>
          <!-- End Info resalt -->

           <!-- Info title-->
            <div class="row-fluid info_title margin_top_10px border_bottom">
                <div class="vertical_line animated fadeInUp delay4">
                    <div class="circle_top"></div>
                </div>
              <div class="info_vertical">
                <div class="span6">
                	<div class="row-fluid animated fadeInUp delay4">
                      <h2 class="margin_bottom_20px"><span>Latest Announcements</span></h2>
                      <div align="left">
                          @foreach($latestannouncements as $latest)
                      
                         <blockquote>
                            <div class="label label-info">{{ $latest->date_of_publishing }}</div> <a href="#">{{ $latest->title }}</a>
                        </blockquote>
                           @endforeach
                        

                        <!--<blockquote>
                        	<div class="label label-info">05 Jan, 2015</div> <a href="news_centre_bursa_change_in_substantial_shareholder_interest_details_20150105.html">Changes in Sub. S-hldr's Int. (29B) - Lembaga Tabung Angkatan Tentera</a>
                    	</blockquote>-->
                    </div>
                	</div>
                </div>
                <div class="span6">
                	<div class="row-fluid animated fadeInUp delay4">
                      <h2 class="margin_bottom_20px"><span>Latest Media News</span></h2>
                      <div align="left">
                       @foreach($latestnews as $latest)
                       <blockquote>
                            <div class="label label-info">{{ date("d M, Y",$latest->date) }}</div> <a href="http://medianews.ock.net.my/news/news_centre_latest_media_news_details?show={{ $latest->id }}" target="_blank">{{ $latest->title }}</a>
                            <small><cite title="Source Title">{{  $latest->footer }}</cite></small>
                        </blockquote>
                       @endforeach 


                    </div>

                	</div>
                </div>
                </div>
                <div style="clear:both"></div>
                <div class="vertical_line"></div>

                <i class="icon-bullhorn right"></i>
            </div>
            <!-- End Info title-->

            <!-- Info resalt-->
          <div class="info_resalt border_bottom">
            <div class="container">
              <div class="row-fluid animated fadeInUp delay5">
                <div class="span6">
                  {{ $page[0]->left_inner_block_title1 }}
                  {{ $page[0]->left_inner_block_content1 }}
                   {{ Session::get('message') }}
                {{ Form::open(array('url' => 'investorrelations/investortools/newsalertssubscribesubmit','name' => 'newsalertssubscribe','id' => 'form1','class'=> 'form-horizontal','method' => 'post')) }}
                      <h6>Name <span class="red-title">*</span></h6>
       {{ Form::text('name','',array("id" => "name","class" => "input-xxlarge",  "placeholder" => "Your Name", "required")) }}

                      <h6>E-mail Address <span class="red-title">*</span></h6>

  {{ Form::text('email','',array("id" => "name","class" => "input-xxlarge",  "placeholder" => "E-mail Address", "required")) }}

                      <div class="clearfix"></div>
                      <button type="submit" name="Submit" class="button">Subscribe</button>
     	 {{ Form::close() }}

                  


                </div>

                <div class="span6">
					 {{ $page[0]->left_inner_block_title2 }}
                     {{ $page[0]->left_inner_block_content2 }}
                </div>

              </div>
            </div>

          </div>
          <!-- End Info resalt -->

        <!-- InstanceEndEditable --></section>
		
@stop
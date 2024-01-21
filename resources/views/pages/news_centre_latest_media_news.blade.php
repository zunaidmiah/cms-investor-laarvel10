@extends('layouts.front')

@section('content')
            
          
          <!-- Info white-->
          <div class="info_white1 border_bottom">
            <div class="container">
              <h2 class="red-title pull-left">Year <?php echo $year ?></h2>
              <p class="pull-right">View Year:
                  <select name="select" id="subject" class="selectNewsYear">
                      <?php $currentYear = date('Y', time()); ?>
                      @for($i=$maxYearDate; $i>=2011; $i--)
                      <option value="<?php echo $i ?>" <?php echo $i == $year ? 'selected="selected"' : '' ?> >{{ $i }}</option>
                      @endfor
                 </select>
              </p>
              <div class="clearfix"></div>              
              <?php
              $Jan = $Feb = $Mar = $Apr = $May = $Jun = $Jul = $Aug = $Sep = $Oct = $Nov = $Dec = array();
              foreach($mediaNews as $mediaNewsSingle){
                  $month = date('M', $mediaNewsSingle->date);
                  //$$month[] = $mediaNewsSingle;
                  array_push($$month, $mediaNewsSingle);
              }
              
              ?>
              
              <div class="row-fluid">
              	<div id="twitter-bootstrap-container">
                        <div id="twitter-bootstrap-tabs">
                             <ul class="nav nav-tabs">
                                <li><a href="#dec" class="Dec">December</a></li>
                                <li><a href="#nov" class="Nov">November</a></li>
                                <li><a href="#oct" class="Oct">October</a></li>
                                <li><a href="#sept" class="Sep">September</a></li>
                                <li><a href="#aug" class="Aug">August</a></li>
                                <li><a href="#jul" class="Jul">July</a></li>
                                <li><a href="#jun" class="Jun">June</a></li>
                                <li><a href="#may" class="May">May</a></li>
                                <li><a href="#apr" class="Apr">April</a></li>
                                <li><a href="#mar" class="Mar">March</a></li>
                                <li><a href="#feb" class="Feb">February</a></li>
                                <li><a href="#jan" class="Jan">January</a></li>
                             </ul>
                             <div class="panels">
                                <div id="dec">
                                    @if(!empty($Dec))
                                        @foreach($Dec as $key => $value)
                                            @if($key%2 == 0)
                                                <?php $Dec['even'][] = $value; unset($Dec[$key]); ?>
                                            @else
                                                <?php $Dec['odd'][] = $value; unset($Dec[$key]); ?>
                                            @endif
                                        @endforeach 
                                        <div class="span6">
                                            @foreach($Dec['even'] as $evenValue)    
                                            <blockquote>
                                                @if(!empty($evenValue->date))<div class="label label-info">{{ date('d M, Y', $evenValue->date) }}</div>@endif <a href="{{ URL::to('news/news_centre_latest_media_news_details?show='.$evenValue->id) }}" target="_blank">{{ $evenValue->title }}</a> 
                                                <small><cite title="Source Title">{{ $evenValue->footer }}</cite></small>
                                            </blockquote>
                                            @endforeach
                                        </div>
                                        
                                        @if(array_key_exists('odd', $Dec))
                                            <div class="span6">
                                                @foreach($Dec['odd'] as $oddValue)
                                                <blockquote>
                                                    @if(!empty($oddValue->date))<div class="label label-info">{{ date('d M, Y', $oddValue->date) }}</div>@endif <a href="{{ URL::to('news/news_centre_latest_media_news_details?show='.$oddValue->id) }}" target="_blank">{{ $oddValue->title }}</a> 
                                                    <small><cite title="Source Title">{{ $oddValue->footer }}</cite></small>
                                                </blockquote>
                                                @endforeach
                                            </div>
                                        @endif
                                        
                                    @else
                                    <p>There is no news at the moment.</p>
                                    @endif
                                </div>
                                
                                <div id="nov">              
                                    @if(!empty($Nov))
                                        @foreach($Nov as $key => $value)
                                            @if($key%2 == 0)
                                                <?php $Nov['even'][] = $value;  unset($Nov[$key]); ?>
                                            @else
                                                <?php $Nov['odd'][] = $value;  unset($Nov[$key]); ?>
                                            @endif
                                        @endforeach
                                        <div class="span6">
                                            @foreach($Nov['even'] as $evenValue)    
                                            <blockquote>
                                                @if(!empty($evenValue->date))<div class="label label-info">{{ date('d M, Y', $evenValue->date) }}</div>@endif <a href="{{ URL::to('news/news_centre_latest_media_news_details?show='.$evenValue->id) }}" target="_blank">{{ $evenValue->title }}</a> 
                                                <small><cite title="Source Title">{{ $evenValue->footer }}</cite></small>
                                            </blockquote>
                                            @endforeach
                                        </div>
                                        
                                        @if(array_key_exists('odd', $Nov))
                                            <div class="span6">
                                                @foreach($Nov['odd'] as $oddValue)
                                                <blockquote>
                                                    @if(!empty($oddValue->date))<div class="label label-info">{{ date('d M, Y', $oddValue->date) }}</div>@endif <a href="{{ URL::to('news/news_centre_latest_media_news_details?show='.$oddValue->id) }}" target="_blank">{{ $oddValue->title }}</a> 
                                                    <small><cite title="Source Title">{{ $oddValue->footer }}</cite></small>
                                                </blockquote>
                                                @endforeach
                                            </div>
                                        @endif
                                        
                                    @else
                                    <p>There is no news at the moment.</p>
                                    @endif
                                </div>
                                
                                <div id="oct">              
                                    @if(!empty($Oct))
                                        @foreach($Oct as $key => $value)
                                            @if($key%2 == 0)
                                                <?php $Oct['even'][] = $value; unset($Oct[$key]); ?>
                                            @else
                                                <?php $Oct['odd'][] = $value; unset($Oct[$key]); ?>
                                            @endif
                                        @endforeach
                                        
                                        <div class="span6">
                                            @foreach($Oct['even'] as $evenValue)
                                            <blockquote>
                                                @if(!empty($evenValue->date))<div class="label label-info">{{ date('d M, Y', $evenValue->date) }}</div>@endif <a href="{{ URL::to('news/news_centre_latest_media_news_details?show='.$evenValue->id) }}" target="_blank">{{ $evenValue->title }}</a> 
                                                <small><cite title="Source Title">{{ $evenValue->footer }}</cite></small>
                                            </blockquote>
                                            @endforeach
                                        </div>
                                        
                                        @if(array_key_exists('odd', $Oct))
                                            <div class="span6">
                                                @foreach($Oct['odd'] as $oddValue)
                                                <blockquote>
                                                    @if(!empty($oddValue->date))<div class="label label-info">{{ date('d M, Y', $oddValue->date) }}</div>@endif <a href="{{ URL::to('news/news_centre_latest_media_news_details?show='.$oddValue->id) }}" target="_blank">{{ $oddValue->title }}</a> 
                                                    <small><cite title="Source Title">{{ $oddValue->footer }}</cite></small>
                                                </blockquote>
                                                @endforeach
                                            </div>
                                        @endif
                                        
                                    @else
                                    <p>There is no news at the moment.</p>
                                    @endif
                                </div>
                                
                                <div id="sept">
                                    @if(!empty($Sep))
                                        @foreach($Sep as $key => $value)
                                            @if($key%2 == 0)
                                                <?php $Sep['even'][] = $value;  unset($Sep[$key]); ?>
                                            @else
                                                <?php $Sep['odd'][] = $value;  unset($Sep[$key]); ?>
                                            @endif
                                        @endforeach
                                        <div class="span6">
                                            @foreach($Sep['even'] as $evenValue)    
                                            <blockquote>
                                                @if(!empty($evenValue->date))<div class="label label-info">{{ date('d M, Y', $evenValue->date) }}</div>@endif <a href="{{ URL::to('news/news_centre_latest_media_news_details?show='.$evenValue->id) }}" target="_blank">{{ $evenValue->title }}</a> 
                                                <small><cite title="Source Title">{{ $evenValue->footer }}</cite></small>
                                            </blockquote>
                                            @endforeach
                                        </div>
                                        
                                        @if(array_key_exists('odd', $Sep))
                                            <div class="span6">
                                                @foreach($Sep['odd'] as $oddValue)
                                                <blockquote>
                                                    @if(!empty($oddValue->date))<div class="label label-info">{{ date('d M, Y', $oddValue->date) }}</div>@endif <a href="{{ URL::to('news/news_centre_latest_media_news_details?show='.$oddValue->id) }}" target="_blank">{{ $oddValue->title }}</a> 
                                                    <small><cite title="Source Title">{{ $oddValue->footer }}</cite></small>
                                                </blockquote>
                                                @endforeach
                                            </div>
                                        @endif
                                        
                                    @else
                                    <p>There is no news at the moment.</p>
                                    @endif
                                </div>
                                <!-- end sept news -->
                                
                                <div id="aug">
                                    @if(!empty($Aug))
                                        @foreach($Aug as $key => $value)
                                            @if($key%2 == 0)
                                                <?php $Aug['even'][] = $value;  unset($Aug[$key]); ?>
                                            @else
                                                <?php $Aug['odd'][] = $value;  unset($Aug[$key]); ?>
                                            @endif
                                        @endforeach
                                        <div class="span6">
                                            @foreach($Aug['even'] as $evenValue)    
                                            <blockquote>
                                                @if(!empty($evenValue->date))<div class="label label-info">{{ date('d M, Y', $evenValue->date) }}</div>@endif <a href="{{ URL::to('news/news_centre_latest_media_news_details?show='.$evenValue->id) }}" target="_blank">{{ $evenValue->title }}</a> 
                                                <small><cite title="Source Title">{{ $evenValue->footer }}</cite></small>
                                            </blockquote>
                                            @endforeach
                                        </div>
                                        
                                        @if(array_key_exists('odd', $Aug))
                                            <div class="span6">
                                                @foreach($Aug['odd'] as $oddValue)
                                                <blockquote>
                                                    @if(!empty($oddValue->date))<div class="label label-info">{{ date('d M, Y', $oddValue->date) }}</div>@endif <a href="{{ URL::to('news/news_centre_latest_media_news_details?show='.$oddValue->id) }}" target="_blank">{{ $oddValue->title }}</a> 
                                                    <small><cite title="Source Title">{{ $oddValue->footer }}</cite></small>
                                                </blockquote>
                                                @endforeach
                                            </div>
                                        @endif
                                        
                                    @else
                                    <p>There is no news at the moment.</p>
                                    @endif
                                </div>
                                <!-- end aug news -->
                                
                                <div id="jul">
                                    @if(!empty($Jul))
                                        @foreach($Jul as $key => $value)
                                            @if($key%2 == 0)
                                                <?php $Jul['even'][] = $value;  unset($Jul[$key]); ?>
                                            @else
                                                <?php $Jul['odd'][] = $value;  unset($Jul[$key]); ?>
                                            @endif
                                        @endforeach
                                        <div class="span6">
                                            @foreach($Jul['even'] as $evenValue)    
                                            <blockquote>
                                                @if(!empty($evenValue->date))<div class="label label-info">{{ date('d M, Y', $evenValue->date) }}</div>@endif <a href="{{ URL::to('news/news_centre_latest_media_news_details?show='.$evenValue->id) }}" target="_blank">{{ $evenValue->title }}</a> 
                                                <small><cite title="Source Title">{{ $evenValue->footer }}</cite></small>
                                            </blockquote>
                                            @endforeach
                                        </div>
                                        
                                        @if(array_key_exists('odd', $Jul))
                                            <div class="span6">
                                                @foreach($Jul['odd'] as $oddValue)
                                                <blockquote>
                                                    @if(!empty($oddValue->date))<div class="label label-info">{{ date('d M, Y', $oddValue->date) }}</div>@endif <a href="{{ URL::to('news/news_centre_latest_media_news_details?show='.$oddValue->id) }}" target="_blank">{{ $oddValue->title }}</a> 
                                                    <small><cite title="Source Title">{{ $oddValue->footer }}</cite></small>
                                                </blockquote>
                                                @endforeach
                                            </div>
                                        @endif
                                        
                                    @else
                                    <p>There is no news at the moment.</p>
                                    @endif
                                </div>
                                <!-- end july news -->
                                
                                <div id="jun">
                                    @if(!empty($Jun))
                                        @foreach($Jun as $key => $value)
                                            @if($key%2 == 0)
                                                <?php $Jun['even'][] = $value;  unset($Jun[$key]); ?>
                                            @else
                                                <?php $Jun['odd'][] = $value;  unset($Jun[$key]); ?>
                                            @endif
                                        @endforeach
                                        <div class="span6">
                                            @foreach($Jun['even'] as $evenValue)    
                                            <blockquote>
                                                @if(!empty($evenValue->date))<div class="label label-info">{{ date('d M, Y', $evenValue->date) }}</div>@endif <a href="{{ URL::to('news/news_centre_latest_media_news_details?show='.$evenValue->id) }}" target="_blank">{{ $evenValue->title }}</a> 
                                                <small><cite title="Source Title">{{ $evenValue->footer }}</cite></small>
                                            </blockquote>
                                            @endforeach
                                        </div>
                                        
                                        @if(array_key_exists('odd', $Jun))
                                            <div class="span6">
                                                @foreach($Jun['odd'] as $oddValue)
                                                <blockquote>
                                                    @if(!empty($oddValue->date))<div class="label label-info">{{ date('d M, Y', $oddValue->date) }}</div>@endif <a href="{{ URL::to('news/news_centre_latest_media_news_details?show='.$oddValue->id) }}" target="_blank">{{ $oddValue->title }}</a> 
                                                    <small><cite title="Source Title">{{ $oddValue->footer }}</cite></small>
                                                </blockquote>
                                                @endforeach
                                            </div>
                                        @endif
                                        
                                    @else
                                    <p>There is no news at the moment.</p>
                                    @endif
                                </div>
                                <!-- end june news -->
                                
                                
                                <div id="may">
                                    @if(!empty($May))
                                        @foreach($May as $key => $value)
                                            @if($key%2 == 0)
                                                <?php $May['even'][] = $value;  unset($May[$key]); ?>
                                            @else
                                                <?php $May['odd'][] = $value;  unset($May[$key]); ?>
                                            @endif
                                        @endforeach
                                        <div class="span6">
                                            @foreach($May['even'] as $evenValue)    
                                            <blockquote>
                                                @if(!empty($evenValue->date))<div class="label label-info">{{ date('d M, Y', $evenValue->date) }}</div>@endif <a href="{{ URL::to('news/news_centre_latest_media_news_details?show='.$evenValue->id) }}" target="_blank">{{ $evenValue->title }}</a> 
                                                <small><cite title="Source Title">{{ $evenValue->footer }}</cite></small>
                                            </blockquote>
                                            @endforeach
                                        </div>
                                        
                                        @if(array_key_exists('odd', $May))
                                            <div class="span6">
                                                @foreach($May['odd'] as $oddValue)
                                                <blockquote>
                                                    @if(!empty($oddValue->date))<div class="label label-info">{{ date('d M, Y', $oddValue->date) }}</div>@endif <a href="{{ URL::to('news/news_centre_latest_media_news_details?show='.$oddValue->id) }}" target="_blank">{{ $oddValue->title }}</a> 
                                                    <small><cite title="Source Title">{{ $oddValue->footer }}</cite></small>
                                                </blockquote>
                                                @endforeach
                                            </div>
                                        @endif
                                        
                                    @else
                                    <p>There is no news at the moment.</p>
                                    @endif
                                </div>
                                <!-- end may news -->
                                
                                <div id="apr">
                                    @if(!empty($Apr))
                                        @foreach($Apr as $key => $value)
                                            @if($key%2 == 0)
                                                <?php $Apr['even'][] = $value;  unset($Apr[$key]); ?>
                                            @else
                                                <?php $Apr['odd'][] = $value;  unset($Apr[$key]); ?>
                                            @endif
                                        @endforeach
                                        <div class="span6">
                                            @foreach($Apr['even'] as $evenValue)    
                                            <blockquote>
                                                @if(!empty($evenValue->date))<div class="label label-info">{{ date('d M, Y', $evenValue->date) }}</div>@endif <a href="{{ URL::to('news/news_centre_latest_media_news_details?show='.$evenValue->id) }}" target="_blank">{{ $evenValue->title }}</a> 
                                                <small><cite title="Source Title">{{ $evenValue->footer }}</cite></small>
                                            </blockquote>
                                            @endforeach
                                        </div>
                                        
                                        @if(array_key_exists('odd', $Apr))
                                            <div class="span6">
                                                @foreach($Apr['odd'] as $oddValue)
                                                <blockquote>
                                                    @if(!empty($oddValue->date))<div class="label label-info">{{ date('d M, Y', $oddValue->date) }}</div>@endif <a href="{{ URL::to('news/news_centre_latest_media_news_details?show='.$oddValue->id) }}" target="_blank">{{ $oddValue->title }}</a> 
                                                    <small><cite title="Source Title">{{ $oddValue->footer }}</cite></small>
                                                </blockquote>
                                                @endforeach
                                            </div>
                                        @endif
                                        
                                    @else
                                    <p>There is no news at the moment.</p>
                                    @endif
                                </div>
                                <!-- end april news -->
                                
                                <div id="mar">
                                    @if(!empty($Mar))
                                        @foreach($Mar as $key => $value)
                                            @if($key%2 == 0)
                                                <?php $Mar['even'][] = $value;  unset($Mar[$key]); ?>
                                            @else
                                                <?php $Mar['odd'][] = $value;  unset($Mar[$key]); ?>
                                            @endif
                                        @endforeach
                                        <div class="span6">
                                            @foreach($Mar['even'] as $evenValue)    
                                            <blockquote>
                                                @if(!empty($evenValue->date))<div class="label label-info">{{ date('d M, Y', $evenValue->date) }}</div>@endif <a href="{{ URL::to('news/news_centre_latest_media_news_details?show='.$evenValue->id) }}" target="_blank">{{ $evenValue->title }}</a> 
                                                <small><cite title="Source Title">{{ $evenValue->footer }}</cite></small>
                                            </blockquote>
                                            @endforeach
                                        </div>
                                        
                                        @if(array_key_exists('odd', $Mar))
                                            <div class="span6">
                                                @foreach($Mar['odd'] as $oddValue)
                                                <blockquote>
                                                    @if(!empty($oddValue->date))<div class="label label-info">{{ date('d M, Y', $oddValue->date) }}</div>@endif <a href="{{ URL::to('news/news_centre_latest_media_news_details?show='.$oddValue->id) }}" target="_blank">{{ $oddValue->title }}</a> 
                                                    <small><cite title="Source Title">{{ $oddValue->footer }}</cite></small>
                                                </blockquote>
                                                @endforeach
                                            </div>
                                        @endif
                                        
                                    @else
                                    <p>There is no news at the moment.</p>
                                    @endif
                                </div>
                                <!-- end march news -->
                                
                                <div id="feb">
                                    @if(!empty($Feb))
                                        @foreach($Feb as $key => $value)
                                            @if($key%2 == 0)
                                                <?php $Feb['even'][] = $value;  unset($Feb[$key]); ?>
                                            @else
                                                <?php $Feb['odd'][] = $value;  unset($Feb[$key]); ?>
                                            @endif
                                        @endforeach
                                        <div class="span6">
                                            @foreach($Feb['even'] as $evenValue)    
                                            <blockquote>
                                                @if(!empty($evenValue->date))<div class="label label-info">{{ date('d M, Y', $evenValue->date) }}</div>@endif <a href="{{ URL::to('news/news_centre_latest_media_news_details?show='.$evenValue->id) }}" target="_blank">{{ $evenValue->title }}</a> 
                                                <small><cite title="Source Title">{{ $evenValue->footer }}</cite></small>
                                            </blockquote>
                                            @endforeach
                                        </div>
                                        
                                        @if(array_key_exists('odd', $Feb))
                                            <div class="span6">
                                                @foreach($Feb['odd'] as $oddValue)
                                                <blockquote>
                                                    @if(!empty($oddValue->date))<div class="label label-info">{{ date('d M, Y', $oddValue->date) }}</div>@endif <a href="{{ URL::to('news/news_centre_latest_media_news_details?show='.$oddValue->id) }}" target="_blank">{{ $oddValue->title }}</a> 
                                                    <small><cite title="Source Title">{{ $oddValue->footer }}</cite></small>
                                                </blockquote>
                                                @endforeach
                                            </div>
                                        @endif
                                        
                                    @else
                                    <p>There is no news at the moment.</p>
                                    @endif
                                </div>
                                <!-- end february news -->
                                
                                <div id="jan">
                                    @if(!empty($Jan))
                                        @foreach($Jan as $key => $value)
                                            @if($key%2 == 0)
                                                <?php $Jan['even'][] = $value;  unset($Jan[$key]); ?>
                                            @else
                                                <?php $Jan['odd'][] = $value;  unset($Jan[$key]); ?>
                                            @endif
                                        @endforeach
                                        <div class="span6">
                                            @foreach($Jan['even'] as $evenValue)    
                                            <blockquote>
                                                @if(!empty($evenValue->date))<div class="label label-info">{{ date('d M, Y', $evenValue->date) }}</div>@endif <a href="{{ URL::to('news/news_centre_latest_media_news_details?show='.$evenValue->id) }}" target="_blank">{{ $evenValue->title }}</a> 
                                                <small><cite title="Source Title">{{ $evenValue->footer }}</cite></small>
                                            </blockquote>
                                            @endforeach
                                        </div>
                                        
                                        @if(array_key_exists('odd', $Jan))
                                            <div class="span6">
                                                @foreach($Jan['odd'] as $oddValue)
                                                <blockquote>
                                                    @if(!empty($oddValue->date))<div class="label label-info">{{ date('d M, Y', $oddValue->date) }}</div>@endif <a href="{{ URL::to('news/news_centre_latest_media_news_details?show='.$oddValue->id) }}" target="_blank">{{ $oddValue->title }}</a> 
                                                    <small><cite title="Source Title">{{ $oddValue->footer }}</cite></small>
                                                </blockquote>
                                                @endforeach
                                            </div>
                                        @endif
                                        
                                    @else
                                    <p>There is no news at the moment.</p>
                                    @endif
                                </div>
                                <!-- end january news -->
                                
                            </div>
                           <!-- end panels -->
                       </div>
                  </div>
                  
                  <script type="text/javascript">
                  $('#twitter-bootstrap-tabs').easytabs();
                  </script>
    
              </div>
            </div>
            <i class="icon-bullhorn right"></i>
          </div>
          <!-- End Info white -->
@stop
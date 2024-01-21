@extends('layouts.front')
@section('content')

  <div class="info_white1 border_bottom">
            <div class="container">
            
            
             <!--  <h2 class="red-title pull-left">30 Largest Securities Account Holders</h2> -->
               {{ Form::open(array('url' => '/investorrelations/shareinformation/topshareholders','method' => 'post','name' => 'ourproperties', 'id' => 'ourproperties' )) }}       
                                 
                                   <!-- <p class="pull-right">View Year:
                                 {{ Form::select('datesort', $dateSorts, Input::get('datesort'),array('class' => 'form-control','onchange' => 'this.form.submit();')) }}
                                 </p> -->  
                                 
                      {{ Form::close() }} 
                      
                      
              {{$page[0]->left_block1_title}}
              <!-- <div class="clearfix"></div>
              <h5>30 Largest Securities Account Holders For Ordinary Shares As At 14/04/2014</h5> -->.
              
              
              
              
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
                        <th>Name</th>
                        <th>No. of Shares Held</th>
                        <th>%</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($shares as $k => $share)
                        <tr>
                         <td>{{$shares->getFrom()+$k}}</td>
                         <td>
                         	<ul class="list icons">
                            	<li><i class="icon-ok"></i> {{ $share->name }}</li>
                                
                            </ul>
                         </td>
                         <td>{{ $share->shareheld }}</td>
                         <td>{{ $share->shareheld2 }}</td>
                      </tr>
                      
                      @endforeach
                    
                    </tbody>
                    <tfoot>
                    	<tr>
                        	<td colspan="2">TOTAL</td>
                            <td>610,058,330</td>
                            <td>77.004</td>
                        </tr>
                    </tfoot>
                  </table> 

                </div>
                   
              </div>
            </div>
            <i class="icon-signal right"></i>
          </div>
@stop
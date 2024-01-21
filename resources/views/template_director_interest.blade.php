@section('content')
                  <p>Information Compiled By KLSE</p>
                  <h5>Particulars of Director</h5>
                  <table class="table table-striped">
                  	<colgroup><col>
                	<col>

                    </colgroup><tbody>
                      <tr>
                         <td><strong>Name</strong></td>
                         <td>{{{ isset($data['Name']) ? $data['Name'] : '' }}}</td>
                      </tr>
                      <tr>
                         <td><strong>Address</strong></td>
                         <td>{{{ isset($data['Address']) ? $data['Address'] : '' }}}</td>
                      </tr>
                      <tr>
                         <td><strong>Descriptions (Class &amp; Nominal Value)</strong></td>
                         <td>{{{ isset($data['Descriptions(Class & nominal value)']) ? $data['Descriptions(Class & nominal value)'] : '' }}}</td>
                      </tr>
                  
                    </tbody>
                    <tfoot>
                    	<tr>
                            <td></td>
                            <td></td>
                        </tr>
                    </tfoot>
                  </table>
                  
                  <h5>Details of Changes</h5>
                  <table class="table table-striped">
                  	<colgroup><col width="1">
                	<col width="1">
                    <col width="1">
                	<col width="1">

                    </colgroup><thead>
                      <tr>
                         <td><strong>Type of Transaction</strong></td>
                         <td><strong>Date of Change</strong></td>
                         <td><strong>No of Securities</strong></td>
                         <td><strong>Price Transacted (RM)</strong></td>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                         <td>{{{ isset($dataTable[1][0]) ? $dataTable[1][0] : '' }}}</td>
                         <td>{{{ isset($dataTable[1][1]) ? $dataTable[1][1] : '' }}}</td>
                         <td>{{{ isset($dataTable[1][2]) ? $dataTable[1][2] : '' }}}</td>
                         <td></td>
                      </tr>
                  
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
                  
                  <table class="table table-striped">
                  	<colgroup><col>
                	<col>

                    </colgroup><tbody>
                      <tr>
                         <td><strong>Circumstances by reason of which change has occurred</strong></td>
                         <td>{{{ isset($data['Circumstances by reason of which change has occurred']) ? $data['Circumstances by reason of which change has occurred'] : '' }}}</td>
                      </tr>
                      <tr>
                         <td><strong>Nature of Interest</strong></td>
                         <td>{{{ isset($data['Nature of Interest']) ? $data['Nature of Interest'] : '' }}}</td>
                      </tr>
                      <tr>
                         <td><strong>Consideration (if any)</strong></td>
                         <td>{{{ isset($data['Consideration (if any)']) ? $data['Consideration (if any)'] : '' }}}</td>
                      </tr>
                  
                    </tbody>
                    <tfoot>
                    	<tr>
                            <td></td>
                            <td></td>
                        </tr>
                    </tfoot>
                  </table>
                  
                  <h5>Total No of Securities After Change</h5>
                  <table class="table table-striped">
                  	<colgroup><col>
                	<col>

                    </colgroup><tbody>
                      <tr>
                         <td><strong>Direct (Units)</strong></td>
                         <td>{{{ isset($data['Direct (units)']) ? $data['Direct (units)'] : '' }}}</td>
                      </tr>
                      <tr>
                         <td><strong>Direct (%)</strong></td>
                         <td>{{{ isset($data['Direct (%)']) ? $data['Direct (%)'] : '' }}}</td>
                      </tr>
                      <tr>
                         <td><strong>Indirect / Deemed Interest (Units)</strong></td>
                         <td>{{{ isset($data['Indirect/deemed interest (units)']) ? $data['Indirect/deemed interest (units)'] : '' }}}</td>
                      </tr>
                      <tr>
                         <td><strong>Indirect / Deemed Interest (%)</strong></td>
                         <td>{{{ isset($data['Indirect/deemed interest (%)']) ? $data['Indirect/deemed interest (%)'] : '' }}}</td>
                      </tr>
                      <tr>
                         <td><strong>Date of Notice</strong></td>
                         <td>{{{ isset($data['Date of notice']) ? $data['Date of notice'] : '' }}}</td>
                      </tr>
                  
                    </tbody>
                    <tfoot>
                    	<tr>
                            <td></td>
                            <td></td>
                        </tr>
                    </tfoot>
                  </table>
                  
                  
                  <p>Remarks:
                  	</p><ul class="list icons">
                            @foreach($footnote as $foot)
                                <li><i class="icon-ok"></i> {{$foot}} </li>
                            @endforeach
                            
                    </ul> 
                  <p></p> 
                  
                  <p>Notes:
                  	</p><ul class="list icons">
                            @foreach($footnote as $foot)
                                <li><i class="icon-ok"></i> {{$foot}} </li>
                            @endforeach
                            
                    </ul> 
@stop

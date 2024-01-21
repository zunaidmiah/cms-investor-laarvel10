@section('content')
                  <div class="clearfix"></div>
                  
                  <h5>{{$title}}</h5>
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
                         <td><strong>NRIC / Passport No / Company No.</strong></td>
                         <td>{{{ isset($data["Company No."]) ? $data["Company No."] : '' }}}</td>
                      </tr>
                      <tr>
                         <td><strong>Nationality/Country of incorporation</strong></td>
                         <td>{{{ isset($data['Nationality/Country of incorporation']) ? $data['Nationality/Country of incorporation'] : '' }}}</td>
                      </tr>
                      <tr>
                         <td><strong>Descriptions (Class & nominal value)</strong></td>
                         <td>{{{ isset($data['Descriptions (Class & nominal value)']) ? $data['Descriptions (Class & nominal value)'] : '' }}}</td>
                      </tr>
                      <tr>
                         <td><strong>Name & address of registered holder</strong></td>
                         <td>{{{ isset($data['Name & address of registered holder']) ? $data['Name & address of registered holder'] : '' }}}</td>
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
                         <td><strong>Description of Others</strong></td>
                         <td><strong>Date of Change</strong></td>
                         <td><strong>No of Securities</strong></td>
                         <td><strong>Price Transacted (RM)</strong></td>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($dataTable as $key => $newData)
                        @if ($key > 0)
                            <tr>
                               <td>{{{ isset($newData[0]) ? $newData[0] : '' }}}</td>
                               <td>{{{ isset($newData[1]) ? $newData[1] : '' }}}</td>
                               <td>{{{ isset($newData[2]) ? $newData[2] : '' }}}</td>
                               <td>{{{ isset($newData[3]) ? $newData[3] : '' }}}</td>
                               <td>{{{ isset($newData[4]) ? $newData[4] : '' }}}</td>
                            </tr>
                        @endif
                      @endforeach
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
                         <td>{{{ isset($data['Nature of interest']) ? $data['Nature of interest'] : '' }}}</td>
                      </tr>
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
                         <td><strong>Total No of Securities After Change</strong></td>
                         <td>{{{ isset($data['Total no of securities after change']) ? $data['Total no of securities after change'] : '' }}}</td>
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
                  
                  
                  <p>Remarks: {{ $data["Remarks :"] or '' }} </p>
@stop

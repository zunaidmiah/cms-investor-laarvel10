@section('content')
                  <h5>Particulars of Substantial Securities Holder</h5>
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
                         <td>{{{ isset($data['NRIC/Passport No/Company No.']) ? $data['NRIC/Passport No/Company No.'] : '' }}}</td>
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
                  
                  <h5>Date Interest Acquired &amp; No of Securities Acquired</h5>
                  <table class="table table-striped">
                  	<colgroup><col>
                	<col>

                    </colgroup><tbody>
                      <tr>
                         <td><strong>Currency</strong></td>
                         <td>{{{ isset($data['Currency']) ? $data['Currency'] : '' }}}</td>
                      </tr>
                      <tr>
                         <td><strong>Date Interest Acquired</strong></td>
                         <td>{{{ isset($data['Date interest acquired']) ? $data['Date interest acquired'] : '' }}}</td>
                      </tr>
                      <tr>
                         <td><strong>No of Securities</strong></td>
                         <td>{{{ isset($data['No of securities']) ? $data['No of securities'] : '' }}}</td>
                      </tr>
                      <tr>
                         <td><strong>Circumstances by reason of which Securities Holder has interest</strong></td>
                         <td>{{{ isset($data['Circumstances by reason of which Securities Holder has interest']) ? $data['Circumstances by reason of which Securities Holder has interest'] : '' }}}</td>
                      </tr>
                      <tr>
                         <td><strong>Nature of Interest</strong></td>
                         <td>{{{ isset($data['Nature of interest']) ? $data['Nature of interest'] : '' }}}</td>
                      </tr>
                      <tr>
                         <td><strong>Price Transacted (RM)</strong></td>
                         <td></td>
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
                  
                  <p>Remarks: N/A.</p>  
@stop

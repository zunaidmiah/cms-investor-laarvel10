@section('content')
        <table class="table table-striped margin_top">
            <colgroup><col>
                <col>

            </colgroup><tbody>
                <tr>
                    <td><strong>Name</strong></td>
                    <td>{{{ isset($data['Name']) ? $data['Name'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>NRIC/Passport No/Company No.</strong></td>
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
                    <td><strong>Date of cessation</strong></td>
                    <td>{{{ isset($data['Date of cessation']) ? $data['Date of cessation'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Name & address of registered holder</strong></td>
                    <td>{{{ isset($data['Name & address of registered holder']) ? $data['Name & address of registered holder'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Currency</strong></td>
                    <td>{{{ isset($data['Currency']) ? $data['Currency'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>No of securities disposed</strong></td>
                    <td>{{{ isset($data['No of securities disposed']) ? $data['No of securities disposed'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Price Transacted ($$)</strong></td>
                    <td>{{{ isset($data['Price Transacted ($$)']) ? $data['Price Transacted ($$)'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Circumstances by reason of which Securities Holder has interest</strong></td>
                    <td>{{{ isset($data['Circumstances by reason of which Securities Holder has interest']) ? $data['Circumstances by reason of which Securities Holder has interest'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Nature of interest</strong></td>
                    <td>{{{ isset($data['Nature of interest']) ? $data['Nature of interest'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Date of notice</strong></td>
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

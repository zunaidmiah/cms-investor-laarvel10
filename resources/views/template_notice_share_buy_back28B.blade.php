@section('content')
        <table class="table table-striped margin_top">
            <colgroup><col>
                <col>

            </colgroup><tbody>
                <tr>
                    <td><strong>Date of shares sold from</strong></td>
                    <td>{{{ isset($data['Date of shares sold from']) ? $data['Date of shares sold from'] : '' }}}</td>
                </tr>
                <tr>
                   <td><strong>Date of shares cancelled from</strong></td>
                   <td>{{{ isset($data['Date of shares cancelled from']) ? $data['Date of shares cancelled from'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Number of treasury shares sold (units)</strong></td>
                    <td>{{{ isset($data['Number of treasury shares sold (units)']) ? $data['Number of treasury shares sold (units)'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Currency</strong></td>
                    <td>{{{ isset($data['Currency']) ? $data['Currency'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>The minimum price at which the treasury shares were sold ($$)</strong></td>
                    <td>{{{ isset($data['The minimum price at which the treasury shares were sold ($$)']) ? $data['The minimum price at which the treasury shares were sold ($$)'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>The maximum price at which the treasury shares were sold ($$)</strong></td>
                    <td>{{{ isset($data['The maximum price at which the treasury shares were sold ($$)']) ? $data['The maximum price at which the treasury shares were sold ($$)'] : '' }}}</td>
                </tr>
                
                <tr>
                    <td><strong>Total consideration received for the treasury shares sold ($$)</strong></td>
                    <td>{{{ isset($data['Total consideration received for the treasury shares sold ($$)']) ? $data['Total consideration received for the treasury shares sold ($$)'] : '' }}}</td>
                </tr>
                
                <tr>
                    <td><strong>The name of the Stock Exchange through which the treasury shares were sold</strong></td>
                    <td>{{{ isset($data['The name of the Stock Exchange through which the treasury shares were sold']) ? $data['The name of the Stock Exchange through which the treasury shares were sold'] : '' }}}</td>
                </tr>
                
                <tr>
                    <td><strong>Total number of shares still in treasury (units)</strong></td>
                    <td>{{{ isset($data['Total number of shares still in treasury (units)']) ? $data['Total number of shares still in treasury (units)'] : '' }}}</td>
                </tr>
                
                <tr>
                    <td><strong>Number of treasury shares cancelled (units)</strong></td>
                    <td>{{{ isset($data['Number of treasury shares cancelled (units)']) ? $data['Number of treasury shares cancelled (units)'] : '' }}}</td>
                </tr>
                
                <tr>
                    <td><strong>Total issued capital as diminished</strong></td>
                    <td>{{{ isset($data['Total issued capital as diminished']) ? $data['Total issued capital as diminished'] : '' }}}</td>
                </tr>
                
                <tr>
                    <td><strong>Date lodged with registrar of companies</strong></td>
                    <td>{{{ isset($data['Date lodged with registrar of companies']) ? $data['Date lodged with registrar of companies'] : '' }}}</td>
                </tr>
                
                <tr>
                    <td><strong>Lodged by</strong></td>
                    <td>{{{ isset($data['Lodged by']) ? $data['Lodged by'] : '' }}}</td>
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

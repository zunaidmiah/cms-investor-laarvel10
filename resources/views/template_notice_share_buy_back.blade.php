@section('content')
        <table class="table table-striped margin_top">
            <colgroup><col>
                <col>

            </colgroup><tbody>
                <tr>
                    <td><strong>Date of buy back from</strong></td>
                    <td>{{{ isset($data['Date of buy back from']) ? $data['Date of buy back from'] : '' }}}</td>
                </tr>
                <tr>
                   <td><strong>Date of buy back to</strong></td>
                   <td>{{{ isset($data['Date of buy back to']) ? $data['Date of buy back to'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Currency</strong></td>
                    <td>{{{ isset($data['Currency']) ? $data['Currency'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Total number of shares purchased (units)</strong></td>
                    <td>{{{ isset($data['Total number of shares purchased (units)']) ? $data['Total number of shares purchased (units)'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Minimum price paid for each share purchased ($$)</strong></td>
                    <td>{{{ isset($data['Minimum price paid for each share purchased ($$)']) ? $data['Minimum price paid for each share purchased ($$)'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Maximum price paid for each share purchased ($$)</strong></td>
                    <td>{{{ isset($data['Maximum price paid for each share purchased ($$)']) ? $data['Maximum price paid for each share purchased ($$)'] : '' }}}</td>
                </tr>
                
                <tr>
                    <td><strong>Total amount paid for shares purchased ($$)</strong></td>
                    <td>{{{ isset($data['Total amount paid for shares purchased ($$)']) ? $data['Total amount paid for shares purchased ($$)'] : '' }}}</td>
                </tr>
                
                <tr>
                    <td><strong>The name of the stock exchange through which the shares were purchased </strong></td>
                    <td>{{{ isset($data['The name of the stock exchange through which the shares were purchased']) ? $data['The name of the stock exchange through which the shares were purchased'] : '' }}}</td>
                </tr>
                
                <tr>
                    <td><strong>Number of shares purchased retained in treasury (units)</strong></td>
                    <td>{{{ isset($data['Number of shares purchased retained in treasury (units)']) ? $data['Number of shares purchased retained in treasury (units)'] : '' }}}</td>
                </tr>
                
                <tr>
                    <td><strong>Total number of shares retained in treasury (units)</strong></td>
                    <td>{{{ isset($data['Total number of shares retained in treasury (units)']) ? $data['Total number of shares retained in treasury (units)'] : '' }}}</td>
                </tr>
                
                <tr>
                    <td><strong>Number of shares purchased which were cancelled (units)</strong></td>
                    <td>{{{ isset($data['Number of shares purchased which were cancelled (units)']) ? $data['Number of shares purchased which were cancelled (units)'] : '' }}}</td>
                </tr>
                
                <tr>
                    <td><strong>Total number of shares retained in treasury (units)</strong></td>
                    <td>{{{ isset($data['Total issued capital as diminished']) ? $data['Total issued capital as diminished'] : '' }}}</td>
                </tr>
                
                <tr>
                    <td><strong>Date lodged with registrar of companies</strong></td>
                    <td>{{{ isset($data['Date lodged with registrar of companies']) ? $data['Date lodged with registrar of companies'] : '' }}}</td>
                </tr>
                
                <tr>
                    <td><strong>Lodged by </strong></td>
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

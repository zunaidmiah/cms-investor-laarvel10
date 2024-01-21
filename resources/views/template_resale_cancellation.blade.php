@section('content')
        <table class="table table-striped margin_top">
            <colgroup><col>
                <col>

            </colgroup><tbody>
                <tr>
                    <td><strong>Date of transaction</strong></td>
                    <td>{{{ isset($data['Date of transaction']) ? $data['Date of transaction'] : '' }}}</td>
                </tr>
                <tr>
                   <td><strong>Currency</strong></td>
                   <td>{{{ isset($data['Currency']) ? $data['Currency'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Total number of treasury shares sold (units)</strong></td>
                    <td>{{{ isset($data['Total number of treasury shares sold (units)']) ? $data['Total number of treasury shares sold (units)'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Minimum price paid for each share sold ($$)</strong></td>
                    <td>{{{ isset($data['Minimum price paid for each share sold ($$)']) ? $data['Minimum price paid for each share sold ($$)'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Maximum price paid for each share sold ($$)</strong></td>
                    <td>{{{ isset($data['Maximum price paid for each share sold ($$)']) ? $data['Maximum price paid for each share sold ($$)'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Total amount received for treasury shares sold ($$)</strong></td>
                    <td>{{{ isset($data['Total amount received for treasury shares sold ($$)']) ? $data['Total amount received for treasury shares sold ($$)'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Cumulative net outstanding treasury shares as at to-date (units)</strong></td>
                    <td>{{{ isset($data['Cumulative net outstanding treasury shares as at to-date (units)']) ? $data['Cumulative net outstanding treasury shares as at to-date (units)'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Adjusted issued capital after cancellation/resale (no. of shares) (units)</strong></td>
                    <td>{{{ isset($data['Adjusted issued capital after cancellation/resale (no. of shares) (units)']) ? $data['Adjusted issued capital after cancellation/resale (no. of shares) (units)'] : '' }}}</td>
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

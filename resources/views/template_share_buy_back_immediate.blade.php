@section('content')
        <table class="table table-striped margin_top">
            <colgroup><col>
                <col>

            </colgroup><tbody>
                <tr>
                    <td><strong>Date of buy back</strong></td>
                    <td>{{{ isset($data['Date of buy back']) ? $data['Date of buy back'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Description of shares purchased</strong></td>
                    <td>{{{ isset($data['Description of shares purchased']) ? $data['Description of shares purchased'] : '' }}}</td>
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
                    <td><strong>Total consideration paid ($$)</strong></td>
                    <td>{{{ isset($data['Total consideration paid ($$)']) ? $data['Total consideration paid ($$)'] : '' }}}</td>
                </tr>             
                <tr>
                    <td><strong>Number of shares purchased retained in treasury (units)</strong></td>
                    <td>{{{ isset($data['Number of shares purchased retained in treasury (units)']) ? $data['Number of shares purchased retained in treasury (units)'] : '' }}}</td>
                </tr>             
                <tr>
                    <td><strong>Number of shares purchased which are proposed to be cancelled (units)</strong></td>
                    <td>{{{ isset($data['Number of shares purchased which are proposed to be cancelled (units)']) ? $data['Number of shares purchased which are proposed to be cancelled (units)'] : '' }}}</td>
                </tr>             
                <tr>
                    <td><strong>Cumulative net outstanding treasury shares as at to-date (units)</strong></td>
                    <td>{{{ isset($data['Cumulative net outstanding treasury shares as at to-date (units)']) ? $data['Cumulative net outstanding treasury shares as at to-date (units)'] : '' }}}</td>
                </tr>             
                <tr>
                    <td><strong>Adjusted issued capital after cancellation (no. of shares) (units)</strong></td>
                    <td>{{{ isset($data['Adjusted issued capital after cancellation(no. of shares) (units)']) ? $data['Adjusted issued capital after cancellation(no. of shares) (units)'] : '' }}}</td>
                </tr>             
                <tr>
                    <td><strong>Total number of shares purchased and/or held as treasury shares against the total number of outstanding shares of the listed issuer (%)</strong></td>
                    <td>{{{ isset($data['Total number of shares purchased and/or held as treasury shares against the total number of outstanding shares of the listed issuer (%)']) ? $data['Total number of shares purchased and/or held as treasury shares against the total number of outstanding shares of the listed issuer (%)'] : '' }}}</td>
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

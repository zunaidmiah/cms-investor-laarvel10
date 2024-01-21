@section('content')
        <table class="table table-striped margin_top">
            <colgroup><col>
                <col>

            </colgroup><tbody>
                <tr>
                    <td><strong>Date of change</strong></td>
                    <td>{{{ isset($data['Date of change']) ? $data['Date of change'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Type of change</strong></td>
                    <td>{{{ isset($data['Type of change']) ? $data['Type of change'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Designation</strong></td>
                    <td>{{{ isset($data['Designation']) ? $data['Designation'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>License No</strong></td>
                    <td>{{{ isset($data['License No']) ? $data['License No'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Name</strong></td>
                    <td>{{{ isset($data['Name']) ? $data['Name'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Working experience and occupation during past 5 years</strong></td>
                    <td>{{{ isset($data['Working experience and occupation during past 5 years']) ? $data['Working experience and occupation during past 5 years'] : '' }}}</td>
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

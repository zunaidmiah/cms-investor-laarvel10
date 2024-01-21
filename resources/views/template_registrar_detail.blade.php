@section('content')
        <table class="table table-striped margin_top">
            <colgroup><col>
                <col>

            </colgroup><tbody>
                <tr>
                    <td><strong>Old Registrar</strong></td>
                    <td>{{{ isset($data['Old registrar']) ? $data['Old registrar'] : '' }}}</td>
                </tr>
                <tr>
                   <td><strong>New Registrar</strong></td>
                   <td>{{{ isset($data['New registrar']) ? $data['New registrar'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Address</strong></td>
                    <td>{{{ isset($data['Address']) ? $data['Address'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Telephone No</strong></td>
                    <td>{{{ isset($data['Telephone No']) ? $data['Telephone No'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Facsimile No</strong></td>
                    <td>{{{ isset($data['Facsimile No']) ? $data['Facsimile No'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Effective Date</strong></td>
                    <td>{{{ isset($data['Effective date']) ? $data['Effective date'] : '' }}}</td>
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

@section('content')
        <table class="table table-striped margin_top">
            <colgroup><col>
                <col>

            </colgroup><tbody>
                <tr>
                    <td><strong>Change Description</strong></td>
                    <td>{{{ isset($data['change description']) ? $data['change description'] : '' }}}</td>
                </tr>
                <tr>
                   <td><strong>Old Address</strong></td>
                   <td>{{{ isset($data['old address']) ? $data['old address'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>New Address</strong></td>
                    <td>{{{ isset($data['new address']) ? $data['new address'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Name of Registrar</strong></td>
                    <td>{{{ isset($data['name of registrar']) ? $data['name of registrar'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Telephone no</strong></td>
                    <td>{{{ isset($data['telephone no']) ? $data['telephone no'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Facsimile no</strong></td>
                    <td>{{{ isset($data['facsimile no']) ? $data['facsimile no'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>E-mail address</strong></td>
                    <td>{{{ isset($data['e-mail address']) ? $data['e-mail address'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Effective Date</strong></td>
                    <td>{{{ isset($data['effective date']) ? $data['effective date'] : '' }}}</td>
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

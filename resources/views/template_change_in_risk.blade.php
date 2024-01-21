@section('content')
        <table class="table table-striped margin_top">
            <colgroup><col>
                <col>

            </colgroup><tbody>
                <tr>
                    <td><strong>Type of Board Committee</strong></td>
                    <td>{{{ isset($data['Type of Board Committee']) ? $data['Type of Board Committee'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Date of Change</strong></td>
                    <td>{{{ isset($data['Date of change']) ? $data['Date of change'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Salutation</strong></td>
                    <td>{{{ isset($data['Salutation']) ? $data['Salutation'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Name</strong></td>
                    <td>{{{ isset($data['Name']) ? $data['Name'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Age</strong></td>
                    <td>{{{ isset($data['Age']) ? $data['Age'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Gender</strong></td>
                    <td>{{{ isset($data['Gender']) ? $data['Gender'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Nationality</strong></td>
                    <td>{{{ isset($data['Nationality']) ? $data['Nationality'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Type of Change</strong></td>
                    <td>{{{ isset($data['Type of change']) ? $data['Type of change'] : '' }}}</td>
                </tr>

                <!--<tr>
                    <td><strong>Designation</strong></td>
                    <td>{{{ isset($data['Designation']) ? $data['Designation'] : '' }}}</td>
                </tr>-->

                <tr>
                    <td><strong>Previous Position</strong></td>
                    <td>{{{ isset($data['Previous Position']) ? $data['Previous Position'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>New Position</strong></td>
                    <td>{{{ isset($data['New Position']) ? $data['New Position'] : '' }}}</td>
                </tr>

                <tr>
                    <td><strong>Directorate</strong></td>
                    <td>{{{ isset($data['Directorate']) ? $data['Directorate'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Composition of Nomination Committee(Name and Directorate of members after change)</strong></td>
                    <td>{{{ isset($data['Composition of Nomination Committee(Name and Directorate of members after change)']) ? $data['Composition of Nomination Committee(Name and Directorate of members after change)'] : '' }}}</td>
                </tr>

            </tbody>
            <tfoot>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
            </tfoot>
        </table>


@stop

@section('content')
        <table class="table table-striped margin_top">
            <colgroup><col>
                <col>

            </colgroup><tbody>
                <tr>
                    <td><strong>Date of Change</strong></td>
                    <td>{{{ isset($data['Date of change']) ? $data['Date of change'] : '' }}}</td>
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
                    <td><strong>Nationality</strong></td>
                    <td>{{{ isset($data['Nationality']) ? $data['Nationality'] : '' }}}</td>
                </tr>
                <tr>
                    <td><strong>Type of Change</strong></td>
                    <td>{{{ isset($data['Type of change']) ? $data['Type of change'] : '' }}}</td>
                </tr>
                @if(isset($data['Designation']))
                <tr>
                    <td><strong>Designation</strong></td>
                    <td>{{$data['Designation'] }}</td>
                </tr>
                @endif
                @if(isset($data['Previous Position']))
                <tr>
                    <td><strong>Previous Position</strong></td>
                    <td>{{$data['Previous Position'] }}</td>
                </tr>
                @endif
                @if(isset($data['New Position']))
                <tr>
                    <td><strong>New Position</strong></td>
                    <td>{{$data['New Position'] }}</td>
                </tr>
                @endif
                @if(isset($data['Directorate']))
                <tr>
                    <td><strong>Directorate</strong></td>
                    <td>{{{ isset($data['Directorate']) ? $data['Directorate'] : '' }}}</td>
                </tr>
                @endif
                @if(isset($data['Qualifications']))
                <tr>
                    <td><strong>Qualifications</strong></td>
                    <td>{{{ isset($data['Qualifications']) ? $data['Qualifications'] : '' }}}</td>
                </tr>
                @endif
                @if(isset($data['Working experience and occupation']))
                <tr>
                    <td><strong>Working Experience and Occupation</strong></td>
                    <td>
                        {{{ isset($data['Working experience and occupation']) ? $data['Working experience and occupation'] : '' }}}
                    </td>
                </tr>
                @endif
                @if(isset($data['Directorship of public companies (if any)']))
                <tr>
                    <td><strong>Directorship of Public Companies (if any)</strong></td>
                    <td>{{{ isset($data['Directorship of public companies (if any)']) ? $data['Directorship of public companies (if any)'] : '' }}}</td>
                </tr>
                @endif
                @if(isset($data['Family relationship with any director and/or major shareholder of the listed issuer']))
                <tr>
                    <td><strong>Family relationship with any director and/or major shareholder of the listed issuer</strong></td>
                    <td>{{{ isset($data['Family relationship with any director and/or major shareholder of the listed issuer']) ? $data['Family relationship with any director and/or major shareholder of the listed issuer'] : '' }}}</td>
                </tr>
                @endif
                @if(isset($data['Any conflict of interests that he/she has with the listed issuer']))
                <tr>
                    <td><strong>Any conflict of interests that he/she has with the listed issuer</strong></td>
                    <td>{{{ isset($data['Any conflict of interests that he/she has with the listed issuer']) ? $data['Any conflict of interests that he/she has with the listed issuer'] : '' }}}</td>
                </tr>
                @endif
                @if(isset($data['Details of any interest in the securities of the listed issuer or its subsidiaries']))
                <tr>
                    <td><strong>Details of any interest in the securities of the listed issuer or its subsidiaries</strong></td>
                    <td>{{{ isset($data['Details of any interest in the securities of the listed issuer or its subsidiaries']) ? $data['Details of any interest in the securities of the listed issuer or its subsidiaries'] : '' }}}</td>
                </tr>
                @endif
                <tr>
                    <td><strong>Composition of Audit Committee (Name and Directorate of members after change)</strong></td>
                    <td>
                        <ul>
                            @foreach($footnote as $foot)
                            <li>{{$foot}}</li>
                            @endforeach
                        </ul>
                    </td>
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

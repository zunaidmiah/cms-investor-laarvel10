@section('content')

<table class="table table-striped">
    <colgroup><col>
        <col>

    </colgroup><tbody>
        <tr>
            <td><strong>Admission Sponsor</strong></td>
            <td>{{{ isset($data['Admission Sponsor']) ? $data['Admission Sponsor'] : '' }}}</td>
        </tr>
        <tr>
            <td><strong>Sponsor</strong></td>
            <td>{{{ isset($data['Sponsor']) ? $data['Sponsor'] : '' }}}</td>
        </tr>
        <tr>
            <td><strong>Type of Meeting</strong></td>
            <td>{{{ isset($data['Type of Meeting']) ? $data['Type of Meeting'] : '' }}}</td>
        </tr>
        <tr>
            <td><strong>Indicator</strong></td>
            <td>{{{ isset($data['Indicator']) ? $data['Indicator'] : '' }}}</td>
        </tr>
        <tr>
            <td><strong>Date of Meeting</strong></td>
            <td>
                {{{ isset($data['Date of Meeting']) ? $data['Date of Meeting'] : '' }}}
            </td>
        </tr>
        <tr>
            <td><strong>Time</strong></td>
            <td>
                {{{ isset($data['Time']) ? $data['Time'] : '' }}}
            </td>
        </tr>
        <tr>
            <td><strong>Venue</strong></td>
            <td>
                {{{ isset($data['Venue']) ? $data['Venue'] : '' }}}
            </td>
        </tr>
        <tr>
            <td><strong>Outcome of Meeting</strong></td>
            <td>
               {{{ isset($data['Outcome of Meeting']) ? $data['Outcome of Meeting'] : '' }}}
            </td>
        </tr>
        @if(isset($data['Attachments']))
        <tr>
            <td><strong>Attachments</strong></td>
            <td>{{HTML::link($attached, $data['Attachments'])}} </td>
        </tr>
        @endif

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
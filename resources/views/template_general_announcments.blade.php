@section('content')

<p class="margin_top">{{$subtitle}}</p>
<table class="table table-striped">
    <colgroup>
    <col>
        <col>

    </colgroup><tbody>
    @if(isset($data['Admission Sponsor']))
        <tr>
            <td><strong>Admission Sponsor</strong></td>
            <td>{{$data['Admission Sponsor'] }}</td>
        </tr>
    @endif
    @if(isset($data['Sponsor']) )
        <tr>
            <td><strong>Sponsor</strong></td>
            <td>{{ $data['Sponsor'] }}</td>
        </tr>
    @endif
        <tr>
            <td><strong>Type</strong></td>
            <td>{{{ isset($data['Type']) ? $data['Type'] : '' }}}</td>
        </tr>
        <tr>
            <td><strong>Subject</strong></td>
            <td>{{{ isset($data['Subject']) ? $data['Subject'] : '' }}}</td>
        </tr>
        <tr>
            <td><strong>Description</strong></td>
            <td>
                {{{ isset($data['Description']) ? $data['Description'] : '' }}}
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

{{isset($data['Bottom Footer']) ? $data['Bottom Footer']:'-'}}


<p>Remarks: N/A.</p>
@stop
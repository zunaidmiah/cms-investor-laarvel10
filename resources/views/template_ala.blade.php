@section('content')

<h5>Details of Corporate Proposal</h5>
<table class="table table-striped">
	<col />
	<col />
	<tbody>
	{{-- commented by gjs	<tr>
			<td><strong>Whether the corporate proposal involves the issuance
					of new type and new class of securities?</strong></td>
			<td>{{ $data['Whether the corporate proposal involves the issuance of new type and new class of securities?'] }}</td>
		</tr> --}}
		<tr>
			<td><strong>Types of corporate proposal</strong></td>
			<td>{{ $data['Types of corporate proposal'] }}</td>
		</tr>
		<tr>
			<td><strong>Details of corporate proposal</strong></td>
			<td>{{ $data['Details of corporate proposal'] }}</td>
		</tr>
		<tr>
			<td><strong>No. of shares issued under this corporate proposal</strong></td>
			<td>{{ $data['No. of shares issued under this corporate proposal'] }}</td>
		</tr>
		<tr>
			<td><strong>Issue price per share ($$)</strong></td>
			<td>{{ $data['Issue price per share ($$)'] }}</td>
		</tr>
		<tr>
			<td><strong>Par Value ($$)</strong></td>
			<td>{{ $data['Par Value ($$)'] }}</td>
		</tr>

	</tbody>
	<tfoot>
		<tr>
			<td></td>
			<td></td>
		</tr>
	</tfoot>
</table>
<h5>Latest issued and paid up share capital after the above corporate
	proposal in the following</h5>
<table class="table table-striped">
	<col />
	<col />

	<tbody>
		<tr>
			<td><strong>Units</strong></td>
			<td>{{ $data['Units'] }}</td>
		</tr>
		<tr>
			<td><strong>Currency</strong></td>
			<td>{{ $data['Currency'] }}</td>
		</tr>
		<tr>
			<td><strong>Listing Date</strong></td>
			<td>{{ $data['Listing Date'] }}</td>
		</tr>

	</tbody>
	<tfoot>
		<tr>
			<td></td>
			<td></td>
		</tr>
	</tfoot>
</table>
{{-- commented by gjs <p>Remarks: {{ $data['Remarks :'] }}</p>  --}}
	
@stop

@section('content')
		<table class="table table-striped margin_top">
			<colgroup>
				<col>
				<col>

			</colgroup>
			<tbody>
				<tr>
					<td><strong>Admission Sponsor</strong></td>
					<td>{{{ isset($data['Admission Sponsor']) ? $data['Admission Sponsor'] : '' }}}</td>
				</tr>
				<tr>
					<td><strong>Sponsor</strong></td>
					<td>{{{ isset($data['Sponsor']) ? $data['Sponsor'] : '' }}}</td>
				</tr>
				<tr>
					<td><strong>EX-date</strong></td>
					<td>{{{ isset($data['EX-date']) ? $data['EX-date'] : '' }}}</td>
				</tr>
				<tr>
					<td><strong>Entitlement Date</strong></td>
					<td>{{{ isset($data['Entitlement date']) ? $data['Entitlement date'] : '' }}}</td>
				</tr>
				<tr>
					<td><strong>Entitlement Time</strong></td>
					<td>{{{ isset($data['Entitlement time']) ? $data['Entitlement time'] : '' }}}</td>
				</tr>
				<tr>
					<td><strong>Entitlement Subject</strong></td>
					<td>{{{ isset($data['Entitlement subject']) ? $data['Entitlement subject'] : '' }}}</td>
				</tr>
				<tr>
					<td><strong>Entitlement Description</strong></td>
					<td>{{{ isset($data['Entitlement description']) ? $data['Entitlement description'] : '' }}}</td>
				</tr>
				<tr>
					<td><strong>Financial Year End</strong></td>
					<td>{{{ isset($data['Financial Year End']) ? $data['Financial Year End'] : '' }}}</td>
				</tr>
				<tr>
					<td><strong>Share transfer book &amp; register of members will be </strong></td>
					<td>{{{ isset($data['Share transfer book & register of members will be']) ? $data['Share transfer book & register of members will be'] : '' }}}</td>
				</tr>
				<tr>
					<td><strong>Registrar's Name, Address, Telephone No</strong></td>
					<td>{{{ isset($data["Registrar's name ,address, telephone no"]) ? $data["Registrar's name ,address, telephone no"] : '' }}}</td>
				</tr>
				<tr>
					<td><strong>Payment Date</strong></td>
					<td>{{{ isset($data['Payment date']) ? $data['Payment date'] : '' }}}</td>
				</tr>
				<tr>
					<td><strong>a. Securities transferred into the Depositor's
							Securities Account before 4:00 pm in respect of transfers</strong></td>
					<td>{{{ isset($data["a.Securities transferred into the Depositor's Securities Account before 4:00 pm in respect of transfers"]) ? $data["a.Securities transferred into the Depositor's Securities Account before 4:00 pm in respect of transfers"] : '' }}}</td>
				</tr>
				<tr>
					<td><strong>b. Securities deposited into the Depositor's Securities
							Account before 12:30 pm in respect of securities exempted from
							mandatory deposit</strong></td>
					<td></td>
				</tr>
				<tr>
					<td><strong>c. Securities bought on the Exchange on a cum
							entitlement basis according to the Rules of the Exchange</strong></td>
					<td></td>
				</tr>
				<tr>
					<td><strong>Number of new shares/securities issued (units) (If
							applicable)</strong></td>
					<td></td>
				</tr>
				<tr>
					<td><strong>Entitlement Indicator</strong></td>
					<td>{{{ isset($data['Entitlement indicator']) ? $data['Entitlement indicator'] : '' }}}</td>
				</tr>
				@if(isset($data['Ratio']))
				<tr>
					<td><strong>Ratio</strong></td>
					<td>{{ $data['Ratio'] }}</td>
				</tr>
				
				@endif
				@if(isset($data['Rights Issues/Offer Price']))
				<tr>
					<td><strong>Rights Issues/Offer Price</strong></td>
					<td>{{ $data['Rights Issues/Offer Price'] }}</td>
				</tr>
				
				@endif
				@if(isset($data['Currency']))
				<tr>
					<td><strong>Currency</strong></td>
					<td>{{ $data['Currency'] }}</td>
				</tr>
				@endif
				@if(isset($data['Entitlement in Currency']))
				<tr>
					<td><strong>Entitlement in Currency</strong></td>
					<td>{{ $data['Entitlement in Currency']}}</td>
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
		<p>Remarks: {{ $remark }}</p>
@stop
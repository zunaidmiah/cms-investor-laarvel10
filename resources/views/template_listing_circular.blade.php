@section('content')

		<h5>{{ $title2}}</h5>
		<p>
			<strong>{{ $title3}}</strong>
		</p>
		<p>Kindly be advised of the following :</p>
		<ul class="list icons">
		@foreach ($list as $l)
		    <li><i class="icon-ok"></i> {{$l}}</li>
		@endforeach
		</ul>
		
		<p>{{ $remark }}</p>

@stop
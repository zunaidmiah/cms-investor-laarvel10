@extends('layouts.front') 
@section('content')
<!-- Info white-->
<div class="info_white1 border_bottom">
	<div class="container">
		<div class="row">
			<h2 class="red-title pull-left span11">
				<span>{{ $announcement->title }}</span>
			</h2>
			<div class="pull-right margin_top_10px span1">
				<a class="button"
					href="{{url()}}{{$back_url}}">Back</a>
			</div>
		</div>
		
		<div class="clearfix"></div>
		<div class="row-fluid">
			<div class="span12">
				<a href="javascript:window.print()"><button class="btn pull-right"
						type="button">
						<i class="icon-print"></i> Print
					</button></a>
				<div class="clearfix"></div>

					{{ $announcement->html }}
					</div></div>

	</div>
	<i class="icon-bullhorn right"></i>
</div>
<!-- End Info white -->

<!-- Info Resalt-->
<div class="info_resalt border_bottom">
	<div class="container">
		<div class="row-fluid">
			<div class="span12">
				<h2 class="red-title">
					<span>Announcement Info</span>
				</h2>
				<div class="alert alert-error">
					<strong>Reference No:</strong> {{ $announcement->reference_no }}
				</div>
			</div>
		</div>

	</div>
</div>
<!-- End Info Resalt-->
@stop

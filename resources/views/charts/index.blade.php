@extends('layouts/front')

@section('content')
<div class="page-content">
<div class="row">
<div class="col-lg-12">
<h2>Stock Charts <i class="fa fa-angle-right"></i> List</h2><div class="portlet">
<div class="portlet-header">
  <div class="tools"> <i class="fa fa-refresh" data-hover="tooltip" data-placement="top" title="Update All Charts"></i> </div>
</div>
<div class="portlet-body">
  <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th>#</th>
        <th>Status</th>
        <th>Chart Title</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($charts as $chart)
      <tr>
        <td>{{ $chart->id }}</td>
        <td><span class="label label-sm 
        @if($chart->published==1)
        	 label-success">Active</span>
        @else    
        	 label-danger">Inactive</span>
        @endif
        </td>
        <td><a href="#">{{ $chart->title }}</a></td>
        <td>
<a href="/charts/{{ $chart->id }}" data-hover="tooltip" data-placement="top" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a>

        @if($chart->published==1)
        	 <a href="/charts/publish/{{ $chart->id }}/0" data-hover="tooltip" data-placement="top" title="Inactivate"><span class="label label-sm label-red"><i class="fa fa-globe"></i></span></a>
        @else    
        	 <a href="/charts/publish/{{ $chart->id }}/1" data-hover="tooltip" data-placement="top" title="Activate"><span class="label label-sm label-blue"><i class="fa fa-globe"></i></span></a>
        @endif


</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>
</div>
</div>
</div>
</div>
@stop
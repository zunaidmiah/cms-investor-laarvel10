@extends('layouts.front')

@section('content')

<div class="portlet">
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
      <tr>
        <td>1</td>
        <td><span class="label label-sm label-success">Active</span></td>
        <td><a href="#">Candlestick Chart with MA, Volume and MACD</a></td>
        <td><a href="#" data-hover="tooltip" data-placement="top" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Publish"><span class="label label-sm label-blue"><i class="fa fa-globe"></i></span></a></td>
      </tr>
      <tr>
        <td>2</td>
        <td><span class="label label-sm label-success">Active</span></td>
        <td><a href="#">Candlestick Chart with MA, Volume, MACD and Stochastic Oscillator</a></td>
        <td><a href="#" data-hover="tooltip" data-placement="top" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Publish"><span class="label label-sm label-blue"><i class="fa fa-globe"></i></span></a></td>
      </tr>
      <tr>
        <td>3</td>
        <td><span class="label label-sm label-success">Active</span></td>
        <td><a href="#">Candlestick Chart with MA, Volume, MACD and RSI</a></td>
        <td><a href="#" data-hover="tooltip" data-placement="top" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Publish"><span class="label label-sm label-blue"><i class="fa fa-globe"></i></span></a></td>
      </tr>
      <tr>
        <td>4</td>
        <td><span class="label label-sm label-success">Active</span></td>
        <td><a href="#">Candlestick Chart with Bollinger Bands, Volume and MACD</a></td>
        <td><a href="#" data-hover="tooltip" data-placement="top" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Publish"><span class="label label-sm label-blue"><i class="fa fa-globe"></i></span></a></td>
      </tr>
      <tr>
        <td>5</td>
        <td><span class="label label-sm label-success">Active</span></td>
        <td><a href="#">Line Chart with MA, Volume and MACD</a></td>
        <td><a href="#" data-hover="tooltip" data-placement="top" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Publish"><span class="label label-sm label-blue"><i class="fa fa-globe"></i></span></a></td>
      </tr>
      <tr>
        <td>6</td>
        <td><span class="label label-sm label-success">Active</span></td>
        <td><a href="#">Line Chart and Volume</a></td>
        <td><a href="#" data-hover="tooltip" data-placement="top" title="Edit"><span class="label label-sm label-success"><i class="fa fa-pencil"></i></span></a> <a href="#" data-hover="tooltip" data-placement="top" title="Publish"><span class="label label-sm label-blue"><i class="fa fa-globe"></i></span></a></td>
      </tr>
    </tbody>
  </table>
</div>
</div>
@stop
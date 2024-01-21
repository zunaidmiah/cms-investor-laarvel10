@extends('layouts/front')

@section('content')
<style>
.datepicker{
z-index:2000 !important
}
</style>
<div id="modal-add-data" tabindex="-1" role="dialog" aria-labelledby="modal-login-label" aria-hidden="false" class="modal fade in">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
        <h4 id="modal-login-label" class="modal-title">Add New Data</h4>
      </div>
      <div class="modal-body">
        <div class="form">
          <form action="{{ action('ChartsController@addnew') }}" method="POST" class="form-horizontal">
            <div class="form-group">
              <label class="col-md-4 control-label">Open <span class="require">*</span></label>
              <div class="col-md-8">
                <input type="text" name="open" placeholder="Open" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">High <span class="require">*</span></label>
              <div class="col-md-8">
                <input type="text" name="high" placeholder="High" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">Low <span class="require">*</span></label>
              <div class="col-md-8">
                <input type="text" name="low" placeholder="Low" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">Close <span class="require">*</span></label>
              <div class="col-md-8">
                <input type="text" name="close" placeholder="Close" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">Volume <span class="require">*</span></label>
              <div class="col-md-8">
                <input type="text" name="volume" placeholder="Volume" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">Adjustment <span class="require">*</span></label>
              <div class="col-md-8">
                <input type="text" name="adjustment" placeholder="Adjustment" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-4 control-label">Date <span class="require">*</span></label>
              <div class="col-md-5">
                <div class="input-group">
                  <input type="text" name="date" class="form-control" value="12-02-2012" id="dp3" data-date="12-02-2012" data-date-format="dd-mm-yyyy" data-provide="datepicker" readonly>
                  <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
                  
                  <!--<input type="text" id="dp3" class="datepicker-default form-control" data-date-format="dd/mm/yyyy" readonly>
                  <div class="input-group-addon"><i class="fa fa-calendar"></i></div>--> 
                </div>
              </div>
            </div>
            <div class="form-actions">
              <div class="col-md-offset-4 col-md-8">
                <button type="submit" class="btn btn-red">Save &nbsp;<i class="fa fa-floppy-o"></i></button>
                &nbsp; <a href="#" data-dismiss="modal" class="btn btn-green">Cancel &nbsp;<i class="glyphicon glyphicon-ban-circle"></i></a> </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="page-content">
<div class="row">
<div class="col-lg-12">
<h2>Stock Charts <i class="fa fa-angle-right"></i> Edit</h2>
<div class="pull-left">
              	Last updated: <span class="text-blue">{{ $dt }}</span>
              </div>
<div class="pull-right"> <a href="#" data-target="#modal-add-data" data-toggle="modal" class="btn btn-success">Add New &nbsp;<i class="fa fa-plus"></i></a> <a href="javascript:json('/charts/data',$('#title').data('func'),'#container',true);" class="btn btn-red">Update Chart &nbsp;<i class="fa fa-refresh"></i></a> </div>
<div class="clearfix"></div>
<p> </p>
<div class="portlet">
  <div class="portlet-header">
    <div class="caption">Chart Info</div>
  </div>
  <div class="portlet-body pan">
    <form action="#" class="form-horizontal form-bordered form-row-stripped" onsubmit="return false">
      <div class="form-body">
        <div class="form-group">
          <label class="col-md-3 control-label">Status <span class='require'>*</span></label>
          <div class="col-md-9">
            <input id="switch-active" type="checkbox" 
              @if($chart->
            published)
            checked
            @endif
            /> </div>
        </div>
        <div class="form-group">
          <label class="col-md-3 control-label">Chart Title <span class='require'>*</span></label>
          <div class="col-md-7">
            <input type="text" class="form-control" data-id="{{ $chart->id }}" name="title" data-func="{{ $chart->func }}" id="title" value="{{ $chart->title }}" placeholder="eg. Candlestick Chart with MA, Volume and MACD"/>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
<div class="clearfix"></div>
<div class="portlet">
  <div class="portlet-header">
    <div class="caption">Chart Data</div>
  </div>
  <div class="portlet-body pan">
    <table class="table table-hover table-striped" id="dtbl">
      <thead>
        <tr>
          <td>Date</td>
          <td>Open</td>
          <td>High</td>
          <td>Low</td>
          <td>Close</td>
          <td>Volume</td>
          <td>Adjustment</td>
        </tr>
      </thead>
      <tbody>
      </tbody>
      <tfoot>
        <tr>
          <td>Date</td>
          <td>Open</td>
          <td>High</td>
          <td>Low</td>
          <td>Close</td>
          <td>Volume</td>
          <td>Adjustment</td>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
<div class="clearfix"></div>
<div class="portlet">
  <div class="portlet-header">
    <div class="caption">Graph</div>
  </div>
  <div class="portlet-body pan">
    <div id="container" style="min-height:500px"> </div>
  </div>
</div>
</div>
</div>
</div>
@stop
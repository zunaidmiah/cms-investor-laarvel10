@extends('layouts.front')
@section('content')

          
      <section class="content_info"><!-- InstanceBeginEditable name="EditRegion4" -->
          <div class="info_white1 border_bottom">
<div class="container">
    <h2 class="red-title pull-left"><span>{{ $entitlement->title }}</span></h2>
    <div class="pull-right margin_top_10px">
        <a class="button" href="http://bursa.ock.net.my/investorrelations/entitlements">Back</a> <br><br><br>
                 <a href="javascript:window.print()"><button type="button" class="btn pull-right"><i class="icon-print"></i> Print</button></a>
              </div>
    <br><br><br>
      {{ $entitlement->html }}    
</div>
          </div>
      </section>
    
                 
		
@stop
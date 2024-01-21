@extends('layouts.front')
@section('content')
<style type="text/css">
    div#main h3 {
  display: none;
}
   
table tbody > tr:nth-child(2n+1) > td, table tbody > tr:nth-child(2n+1) > th {
    background-color: #f9f9f9;
}

table th, table td {
    border-top: 1px solid #dddddd;
    color: #403e3d;
    font-size: 14px;
    line-height: 20px;
    padding: 8px;
    text-align: left;
    vertical-align: top;
}
</style>
         
                  
          <!-- Info white-->
          <div class="info_white1 border_bottom">
            <div class="container">
              <h2 class="red-title pull-left"><span>{{ $announcement->title }}</span></h2>
              <div class="pull-right margin_top_10px">
              	<a class="button" href="http://bursa.lienhoecorporationbhd.com/investorrelations/newscentre/bursaannouncements">Back</a>
              </div>
              <div class="clearfix"></div>
              
              
              <!-- note to programmer: the order of the announcement is from top (the latest) to bottom (the oldest) -->
              <div class="row-fluid">
              <?php 
             $announcement_html=explode('<div class="ven_announcement_info">',$announcement->html);
             echo $announcement_html[0];
              ?>
              
                   
              </div>
            </div>
            <i class="icon-bullhorn right"></i>
          </div>
          <!-- End Info white -->
          
          <!-- Info Resalt-->
          <div class="info_resalt border_bottom announcement_below">
            <div class="container">
              <div class="row-fluid">
                <div class="span12">
                 <?php echo '<div class="ven_announcement_info">'.$announcement_html[1];?>
                 <!-- <h2 class="red-title"><span>Announcement Info</span></h2>
                  <div class="alert alert-error">
                      <strong>Reference No:</strong> CC-150226-B7D29 
                  </div>-->
                </div>      
              </div>
              
            </div>
          </div>
          <!-- End Info Resalt-->
    
                 
		
@stop
@extends('layouts.front')
@section('content')
<style>
    .pricepicket-tbl {
        display: none;
    }
	 
.margin_top_10px {
	margin-right: 5%;
}
.pricepicket-tbl{
	display:block !important;
}
col {
    width: 10% !important;
}
.span2 {
    width: 14.5%;
    padding: .5%; 
    margin-left: -3px;
}
</style>
 <div class="info_white1 border_bottom">
            <div class="container">
              <h2 class="red-title pull-left"><span>Lien Hoe Corporation Bhd</span></h2>
              <div class="pull-right margin_top_10px"><button style="opacity: 5;" class="button updatePriceFront" onclick="refreshPage()">Update Price <i class="fa fa-refresh"></i></button></div> 
              <div class="clearfix"></div>
              <h5>LIENHOE - 3573</h5>    
               
              
              <div class="row-fluid" style="
    margin-left: -3%;
">
		<div class="span2 pull-left">
                       <p class="black-title"><strong>Board</strong></p>
                       <div class="alert alert-info">
                           Main Market 
                       </div>
                  </div> 
                    
                    <div class="span2 pull-left">
                       <p class="black-title"><strong>Sector</strong></p>
                       <div class="alert alert-info">
                           Property
                       </div>
                    </div> 
                    
                    <div class="span2 pull-left">
                       <p class="black-title"><strong>Syariah Compliance</strong></p>
                       <div class="alert alert-info">
                           Yes
                       </div>
                    </div> 
                    
                    <div class="span2 pull-left">
                       <p class="black-title"><strong>Price</strong></p>
                       <!--<div class="alert alert-error">
                           <strong>0.835</strong>
                       </div>-->
                        <?php
                            if ($stockdata->adj > 0)
                            {
                                $sclass = "alert-success";
                                $iclass = "icon-arrow-up";
                            }
                           
                            else
                            {
                                $sclass = "alert-error";
                                $iclass = "icon-arrow-down";
                            }
                         ?>
                       <div class="alert {{ $sclass }}">
                           <strong id="price">{{ number_format($stockdata->close,2) }}</strong>
                       </div>
                    </div> 
                    
                    <div class="span2 pull-left">
                        <p class="black-title"><strong>Change</strong></p>
                       <!--<div class="alert alert-error">
                           <i class="icon-arrow-down"></i> <strong>0.005</strong>
                       </div>-->
                        <?php
                            if ($stockdata->adj > 0)
                            {
                                $sclass = "alert-success";
                                $iclass = "icon-arrow-up";
                            }
                             else if ($stockdata->adj == 0)
                            {
                                $sclass = "alert-info";
                                $iclass = "icon-minus";
                            }
                            else
                            {
                                $sclass = "alert-error";
                                $iclass = "icon-arrow-down";
                            }
                         ?>
                       <div class="alert {{ $sclass }}">
                           <i class="{{ $iclass }}"></i> <strong id="change">{{ number_format($stockdata->adj,2) }}</strong>
                       </div>
                    </div> 
                    
                    <div class="span2 pull-left">
                        <?php
                            if ($stockdata->percentage_change > 0)
                            {
                                $sclass = "alert-success";
                                $iclass = "icon-arrow-up";
                            }
                             else if ($stockdata->percentage_change == 0)
                            {
                                $sclass = "alert-info";
                                $iclass = "icon-minus";
                            }
                            else
                            {
                                $sclass = "alert-error";
                                $iclass = "icon-arrow-down";
                            }
                         ?>
                       <p class="black-title"><strong>Change %</strong></p>
                       <!--<div class="alert alert-error">
                           <i class="icon-arrow-down"></i> <strong>0.60%</strong>
                       </div>-->
                       <div class="alert {{ $sclass }}">
                           <i class="{{ $iclass }}"></i> <strong id="percent">{{ number_format($stockdata->percentage_change,2) }}%</strong>
                       </div>
                    </div> 
     
              </div>
              
			  <br />
				
            </div>
            <i class="icon-signal right"></i>
          </div>
		    <div class="row">
					<div class="row-fluid">
						<div class="span12"  >
							{{ $page[0]->left_block1_content }}  
							{{ $page[0]->left_block2_title }}   
						</div>
					</div> 
				  </div>
<script>
function refreshPage(){
    window.location.reload();
} 
</script>
@stop
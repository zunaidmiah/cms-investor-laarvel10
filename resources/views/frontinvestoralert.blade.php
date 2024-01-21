@extends('layouts.front1')
@section('content')
<script type="text/javascript">
    $(function() {
   $('.date-picker').datepicker({dateFormat: 'dd-mm-yy'});
    });
	function year(yr){
	 $('#from_year').val(yr+'-01-01');
	 $('#to_year').val(yr+'-12-12');
	 $("#year_form").submit();
	}
</script>
<style>
    #ui-datepicker-div {
        display: none; 
    }
</style>

<form method="POST" id="year_form">
					
					<input type="hidden"  name="from_year" id="from_year">
					<input type="hidden"  name="to_year" id="to_year">
					
					
				</form>
  

 <div class="info_white1 border_bottom">
            <div class="container">
              <h2 class="red-title pull-left"><span>Investor Alert</span></h2>
              <p class="pull-right">View Year:
			  
                 <select name="select" id="subject" onchange="return year(this.value)">
                    <option>-- Select --</option>
					<option>2015</option>
                    <option>2014</option>
                    <option>2013</option>
                    <option>2012</option>
                    <option>2011</option>
                    <option>2010</option>
                  
                 </select>
              </p>
              <div class="clearfix"></div>
              
              <div class="margin_top_10px">
			  <form method="POST">
					<h6>Search Date</h6>
					<input type="text" class="input-medium date-picker" name="dDateFrom" placeholder="From (dd-mm-yyyy)" id="dDateFrom">
					<input type="text" class="input-medium date-picker" name="dDateTo" placeholder="To (dd-mm-yyyy)"  id="dDateTo">
					<input type="submit" class="button" value="Search" name="Submit">
					 <input type="reset" name="reset" value="Reset" class="button">
				</form>
                
              </div>           
              
              <!-- note to programmer: the order of the announcement is from top (the latest) to bottom (the oldest) -->
              <div class="row-fluid">
                <div class="span12">
                  <table class="table table-striped">
                  	<col width="1"/>
                	<col />
                    <col />
                    <col />
                    
                    <thead>
                      <tr>
                        <th>No.</th>
                        <th>Announcement Date</th>
                        <th>Company</th>
                        <th>Title</th>
                      </tr>
                    </thead>
                    <tbody> 
					<?php
					$i=1;
					
					if((!empty($investoralert)) && (count($investoralert)!=0)){
					foreach($investoralert as $investor){
					?>
					<tr>
                        <td><?php echo $i;?></td>
                        <td><?php echo $investor->date_of_publishing;?></td>
                        <td><?php echo $investor->company_name;?></td>
                        <th><?php echo $investor->title;?></th>
                      </tr>
					<?php
					$i++; 
					}
					}else{
					?>
                      <tr>
                         <td colspan="4"><div align="center">There are no announcements.</div></td>
                      </tr>
                      <?php } ?>              
                    </tbody>
                    <tfoot>
                    	<tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tfoot>
                  </table> 
                  
                </div>
                   
              </div>
            </div>
            <i class="icon-bullhorn right"></i>
          </div>
          <!-- End Info white -->
          
        <!-- InstanceEndEditable -->
@stop
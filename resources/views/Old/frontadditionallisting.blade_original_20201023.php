@extends('layouts.front1')
@section('content')

<script type="text/javascript">
    $(function() {
   		$('.date-picker').datepicker({dateFormat: 'dd-mm-yy'});

   		$.unique($('.filter_year').map(function() {
   		    return $(this).attr('data-year');
   		}))
   		.sort(function(a, b){return b-a})
   		.each( function(key, value) {   
		     $('#subject')
		         .append($("<option></option>")
		         .text(value)); 
		});
   		
    });
	/* function year(yr){
		if(yr!== '' && yr != 'Archives'){
			$('#from_year').val(yr+'-01-01');
			$('#to_year').val(yr+'-12-12');
			$("#year_form").submit();
		} else {
			window.location = window.location.pathname;
		}
	} */
	function year(yr){
		if(yr)
			$('.filter_year').parent().show().find('.filter_year').not('[data-year="'+yr+'"]').parent().hide();
		else
			$('.filter_year').parent().show();
	}
</script>
<style>
    #ui-datepicker-div {
        display: none; 
    }
</style>		
				
<div class="info_white1 border_bottom">
            <div class="container">
              {{$page[0]->left_block1_title}}
                <p class="pull-right">View Year:
              <select id="subject" onchange="year(this.value)">
                    <option value=''>-- ALL --</option>
                 </select>
              <!-- <form id="year_form" action="#">
              <p class="pull-right">View Year:
              <input type="hidden" id="from_year" name="from_year">
              <input type="hidden" id="to_year" name="to_year">
                 <select id="subject" onchange="year(this.value)">
                    <option>-- Select --</option>
                    @for($i = date('Y'); $i >= 2010; $i--)
                    <option>{{$i}}</option>
                    @endfor
                 </select>
              </p>
              </form> -->
              
              <div class="margin_top_10px">
                  <form method="get">
                     <h6>Search Date</h6>
                     <input type="text" placeholder="From (dd-mm-yyyy)" name="dDateFrom" class="input-medium date-picker" <?php if(isset($_REQUEST['dDateFrom'])) {?>value="<?php echo $_REQUEST['dDateFrom']; ?>" <?php }?>>
                     <input type="text" placeholder="To (dd-mm-yyyy)" name="dDateTo" class="input-medium date-picker" <?php if(isset($_REQUEST['dDateTo'])) {?>value="<?php echo $_REQUEST['dDateTo']; ?>" <?php }?>>
                     <input type="submit" name="Submit" value="Filter" class="button">
                     <input type="reset" name="Reset" value="Reset" class="button">
                  </form>
              </div>  
              
              <div class="clearfix"></div>         
              
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
                     @if(count($announcelists) > 0)
	                     @foreach ($announcelists as $k => $announcelist)
	                      <tr>
	                         <td>{{ $k+1 }}</td>
	                         <td class="filter_year" data-year="{{ date('Y', strtotime($announcelist->date_of_publishing)) }}">{{ date('d M Y', strtotime($announcelist->date_of_publishing)) }}</td>
	                         <td>{{$announcelist->company_name}}</td>
	                         @if($announcelist->category != 'General Announcement')
	                     		<td><a href="{{ url() }}{{$detail_url}}{{ $announcelist->id }}">{{ $announcelist->title }}</a></td>
	                     	 @else
		                     	 <?php $title = explode("\n", $announcelist->title); ?>
		                     	 <td><a href="{{ url() }}{{$detail_url}}{{ $announcelist->id }}">{{ array_shift($title) }}</a><br/>{{ implode(PHP_EOL, $title)}}</td>
	                     	 @endif
	                      </tr>
	                    
	                      @endforeach
                     @else             
	                    <tr>
	                        <td colspan="4"><div align="center">There are no announcements.</div></td>
	                    </tr>		
                     @endif
   
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
                  
                  <div class="pagination pull-right">
                    {{ $announcelists->appends(Input::except('page'))->links() }}
                   </div>
                  
                </div>
                   
              </div>
            </div>
            <i class="icon-bullhorn right"></i>
          </div>
          <!-- End Info white -->
          
        <!-- InstanceEndEditable -->
@stop
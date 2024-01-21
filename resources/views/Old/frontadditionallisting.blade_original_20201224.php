@extends('layouts.front2')
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
				
<!-- Begin main content -->
                    <div class="inner-wrapper">
                        <div class="sidebar-content fullwidth">
                            <div data-elementor-type="wp-page" data-elementor-id="4903" class="elementor elementor-4903" data-elementor-settings="[]">
                                <div class="elementor-inner">
                                    <div class="elementor-section-wrap">
                                        
									

					<section class="elementor-element elementor-element-db5be31 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section" data-id="db5be31" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;}">
	                                   	
					<div class="elementor-container elementor-column-gap-default">
                                        <div class="elementor-row">
                                            <div class="elementor-element elementor-element-ff8784c elementor-column elementor-col-100 elementor-top-column" data-id="ff8784c" data-element_type="column" data-settings="{&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_is_smoove&quot;:&quot;false&quot;,&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}">
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class="elementor-widget-wrap">
                                                        
                                                        <div class="elementor-element elementor-element-7c720c1 elementor-widget__width-inherit elementor-widget-mobile__width-inherit elementor-widget elementor-widget-heading" data-id="7c720c1" data-element_type="widget" data-settings="{&quot;avante_ext_is_smoove&quot;:&quot;true&quot;,&quot;avante_ext_smoove_disable&quot;:&quot;769&quot;,&quot;avante_ext_smoove_duration&quot;:1000,&quot;avante_ext_smoove_rotatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-90,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:40,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:-140,&quot;sizes&quot;:[]},&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_smoove_scalex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_scaley&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatey&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_rotatez&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_translatex&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewx&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_skewy&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;avante_ext_smoove_perspective&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:1000,&quot;sizes&quot;:[]},&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="heading.default">
                                                            <div class="elementor-widget-container">
                                                                <h2 class="elementor-heading-title elementor-size-default">						
                                                                <span class="pull-left">{{$page[0]->left_block1_title}}</span></h2>
                                                                                                                                
                                                                <div class="clearfix"></div>
                                                                <div style="margin-top: 30px;"></div>
                                                                <div class="pull-left">
                                                                  <form method="get">
                                                                     <h6 class="pull-left margin_top_10px">Search Date</h6>&nbsp;
                                                                     <input type="text" placeholder="From (dd-mm-yyyy)" name="dDateFrom" class="input-medium date-picker" <?php if(isset($_REQUEST['dDateFrom'])) {?>value="<?php echo $_REQUEST['dDateFrom']; ?>" <?php }?>>
                                                                     <input type="text" placeholder="To (dd-mm-yyyy)" name="dDateTo" class="input-medium date-picker" <?php if(isset($_REQUEST['dDateTo'])) {?>value="<?php echo $_REQUEST['dDateTo']; ?>" <?php }?>>
                                                                     <input type="submit" name="Submit" value="Filter" class="button">
                                                                     <input type="reset" name="Reset" value="Reset" class="button">
                                                                  </form>
                                                                </div> 
                                                                <div class="pull-right">View Year:
                                                                    <select id="subject" onchange="year(this.value)">
                                                                        <option value=''>-- ALL --</option>
                                                                    </select>
                                                                </div>
                                                                
                                                                 
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-35793f8 elementor-widget elementor-widget-avante-blog-posts" data-id="35793f8" data-element_type="widget" data-settings="{&quot;avante_ext_is_scrollme&quot;:&quot;false&quot;,&quot;avante_ext_is_smoove&quot;:&quot;false&quot;,&quot;avante_ext_is_parallax_mouse&quot;:&quot;false&quot;,&quot;avante_ext_is_infinite&quot;:&quot;false&quot;}" data-widget_type="avante-blog-posts.default">
                                                            <div class="elementor-widget-container">
                                                                <div class="table-respoinsive">
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
                                                                </div><!-- end table responsive -->
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </section>

                                        
                                    </div>
                                </div>
                            </div>
                          
                        </div>
                    </div>
                    <!-- End main content -->
          
 
@stop
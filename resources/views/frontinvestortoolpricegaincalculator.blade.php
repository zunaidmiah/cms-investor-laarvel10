@extends('layouts.front')
@section('content')

    <!-- Info white-->
        <div class="info_white1 border_bottom">
          <div class="container">
             
              <div class="row-fluid">
                <div class="span12">
				  <div id="twitter-bootstrap-container">
                    <div id="twitter-bootstrap-tabs">
                     <ul class="nav nav-tabs">
                      <li><a href="#normalstock" id="ctl00_cphContent_rNormal" onClick="Radio_Click(this.id)">Normal Stock</a></li>
                      <li><a href="#loanstock" id="ctl00_cphContent_rLoan" onClick="Radio_Click(this.id)">Loan Stock</a></li>
                     </ul>
                     <div class="panels">
                     	
                        <div id="normalstock">
                            <h5>For Normal Stock</h5> 
                        </div>
                        <div id="loanstock">
                            <h5>For Loan Stock</h5> 
                        </div>
                            <div class="clearfix"></div>
                            <form id="form" action="#">
                                <table class="table table-striped border_top">
                                    <col />
                                    <col />
                                    <col />
                                    <col />
                                    <col />
                                    <col />
                                                                    
                                    
                                    <tbody>
                                      <tr>
                                         <td>Quantity (Lots)</td>
                                         <td>:</td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td><span class="pull-right"><input type="text" class="input-medium id_Calculator_EditBox" value="1" required onKeyPress="return onFilter('0123456789')" onKeyDown="onKeyDown()" onBlur="ConvertToCurrency(this.id)" onFocus="TextBoxOn_Click(this.id)" tabindex="3" id="ctl00_cphContent_txtQuantity" maxlength="8" name="ctl00$cphContent$txtQuantity">
                                         </span></td>
                                      </tr>
                                      <tr>
                                         <td>Price</td>
                                         <td>:</td>
                                         <td></td>
                                         <td></td>
                                         <td></td>
                                         <td><span class="pull-right"><input type="text" class="input-medium id_Calculator_EditBox" value="10.000" required onKeyPress="return onFilter('.0123456789')" onKeyDown="onKeyDown()" onBlur="ConvertToCurrency(this.id)" onFocus="TextBoxOn_Click(this.id)" tabindex="3" id="ctl00_cphContent_txtPrice" maxlength="8" name="ctl00$cphContent$txtPrice">
                                         </span></td>
                                      </tr>
                                      <tr>
                                         <td>Purchase / Sales Value</td>
                                         <td>:</td>
                                         <td><span class="id_Calculator_BoldLabel" id="ctl00_cphContent_lblFormula">10.000 x 100</span></td>
                                         <td></td>
                                         <td></td>
                                         <td><span class="pull-right"><strong><span class="id_Calculator_Total" id="ctl00_cphContent_lblPSValue">1,000.00</span></strong></span></td>
                                      </tr>
                                      <tr>
                                         <td>Brokerage</td>
                                         <td>:</td>
                                         <td><input type="text" class="input-medium id_Calculator_EditBox_Medium" value="0.420" required name="ctl00$cphContent$txtBrokerage" maxlength="8" id="ctl00_cphContent_txtBrokerage" tabindex="4" onFocus="TextBoxOn_Click(this.id)" onBlur="ConvertToCurrency(this.id)" onKeyDown="onKeyDown()" onKeyPress="return onFilter('.0123456789')"> %</td>
                                         <td></td>
                                         <td></td>
                                         <td><span class="pull-right"><strong><span class="id_Calculator_Total" id="ctl00_cphContent_lblBrokerage">28.00</span></strong></span></td>
                                      </tr>
                                      <tr>
                                         <td><div class="margin_left_20px">Minimum</div></td>
                                         <td>: RM</td>
                                         <td><input type="text" class="input-medium id_Calculator_EditBox_Medium" value="28.00" required name="ctl00$cphContent$txtMinimum" maxlength="8" id="ctl00_cphContent_txtMinimum" tabindex="5" onFocus="TextBoxOn_Click(this.id)" onBlur="ConvertToCurrency(this.id)" onKeyDown="onKeyDown()" onKeyPress="return onFilter('.0123456789')"></td>
                                         <td></td>
                                         <td></td>
                                         <td><strong><span class="pull-right id_Calculator_Total" id="ctl00_cphContent_lblMinimum"></span></strong></td>
                                      </tr>
                                      <tr>
                                         <td>Clearing Fee</td>
                                         <td>:</td>
                                         <td><input type="text" class="input-medium id_Calculator_EditBox_Medium" value="0.030" required name="ctl00$cphContent$txtClearingFee" maxlength="8" id="ctl00_cphContent_txtClearingFee" tabindex="6" onFocus="TextBoxOn_Click(this.id)" onBlur="ConvertToCurrency(this.id)" onKeyDown="onKeyDown()" onKeyPress="return onFilter('.0123456789')"> %</td>
                                         <td></td>
                                         <td></td>
                                         <td><strong><span class="pull-right id_Calculator_Total" id="ctl00_cphContent_lblClearingFee">0.30</span></strong></td>
                                      </tr>
                                      <tr>
                                         <td><div class="margin_left_20px">Maximum</div></td>
                                         <td>: RM</td>
                                         <td><input type="text" class="input-medium id_Calculator_EditBox_Medium" value="1,000.00" required name="ctl00$cphContent$txtMaximumCF" maxlength="8" id="ctl00_cphContent_txtMaximumCF" tabindex="7" onFocus="TextBoxOn_Click(this.id)" onBlur="ConvertToCurrency(this.id)" onKeyDown="onKeyDown()" onKeyPress="return onFilter('.0123456789')"></td>
                                         <td></td>
                                         <td></td>
                                         <td><strong><span class="pull-right id_Calculator_Total" id="ctl00_cphContent_lblMaximum"></span></strong></td>
                                      </tr>
                                      <tr>
                                         <td>Stamp Duty</td>
                                         <td>: RM</td>
                                         <td><input type="text" class="input-medium id_Calculator_EditBox_Medium" value="1.00" required name="ctl00$cphContent$txtStampDuty" maxlength="8" id="ctl00_cphContent_txtStampDuty" tabindex="8" onFocus="TextBoxOn_Click(this.id)" onBlur="ConvertToCurrency(this.id)" onKeyDown="onKeyDown()" onKeyPress="return onFilter('.0123456789')"> </td>
                                         <td>for every RM</td>
                                         <td><input type="text" class="input-medium id_Calculator_EditBox_Medium" value="1,000.00" required name="ctl00$cphContent$txtEvery" maxlength="8" id="ctl00_cphContent_txtEvery" tabindex="9" onFocus="TextBoxOn_Click(this.id)" onBlur="ConvertToCurrency(this.id)" onKeyDown="onKeyDown()" onKeyPress="return onFilter('.0123456789')"></td>
                                         <td><strong><span id="ctl00_cphContent_lblStampDuty" class="pull-right id_Calculator_Total">1.00</span></strong></td>
                                      </tr>
                                      <tr>
                                         <td><div class="margin_left_20px">Maximum</div></td>
                                         <td>: RM</td>
                                         <td><input type="text" class="input-medium id_Calculator_EditBox_Medium" value="200.00" required name="ctl00$cphContent$txtMaximumSD" maxlength="8" id="ctl00_cphContent_txtMaximumSD" tabindex="10" onFocus="TextBoxOn_Click(this.id)" onBlur="ConvertToCurrency(this.id)" onKeyDown="onKeyDown()" onKeyPress="return onFilter('.0123456789')"></td>
                                         <td></td>
                                         <td></td>
                                         <td><strong><span id="ctl00_cphContent_lblMaximumSD" class="pull-right id_Calculator_Total"></span></strong></td>
                                      </tr>
                                    </tbody>
                                    <tfoot>
                                      <tr>
                                        <td colspan="4"></td>
                                        <td><span class="pull-right">Total Transaction Cost</span></td>
                                        <td><span class="pull-right id_Calculator_Total" id="ctl00_cphContent_lblTtlTransCost">29.30</span></td>
                                      </tr>
                                      <tr>
                                        <td colspan="4"></td>
                                        <td><span class="pull-right">Total Purchase Cost</span></td>
                                        <td><span class="pull-right id_Calculator_Total" id="ctl00_cphContent_lblTtlPurchaseCost">1,029.30</span></td>
                                      </tr>
                                      <tr>
                                        <td colspan="4"></td>
                                        <td><span class="pull-right">Net Sales Proceeds</span></td>
                                        <td><span class="pull-right id_Calculator_Total" id="ctl00_cphContent_lblNetSalesProceeds">970.70</span></td>
                                      </tr>
                                    </tfoot>
                                  </table>
                            	  <p><input type="radio" style="margin-top: -3px" id="ctl00_cphContent_rMakeProfit" name="ctl00$cphContent$rMakeProfit" value="rMakeProfit" checked="checked" onClick="return BottomRadio_Click(this.id);" tabindex="11"> <span onClick="return BottomRadio_Click('ctl00_cphContent_rMakeProfit')" style="cursor:default; ">If I make profit of RM <input type="text" class="input-small id_Calculator_EditBox_Medium" value="20.00" required name="ctl00$cphContent$txtMakeProfit" maxlength="9" id="ctl00_cphContent_txtMakeProfit" tabindex="12" onFocus="TextBoxOn_Click(this.id)" onBlur="ConvertToCurrency(this.id)" onKeyDown="onKeyDown()" onKeyPress="return onFilter('., %0123456789')"> 
                                          . The selling price will be...</span></p>
                                          <p><input type="radio" style="margin-top: -3px" id="ctl00_cphContent_rSellStock" name="ctl00$cphContent$rSellStock" value="rSellStock" onClick="return BottomRadio_Click(this.id);" tabindex="13"> <span onClick="return BottomRadio_Click('ctl00_cphContent_rSellStock')" style="cursor:default; ">If I sell stock at price of RM <input type="text" class="input-small id_Calculator_EditBox_Medium" value="2.500" required name="ctl00$cphContent$txtSellStock" maxlength="8" id="ctl00_cphContent_txtSellStock" tabindex="14" onFocus="TextBoxOn_Click(this.id)" onBlur="ConvertToCurrency(this.id)" onKeyDown="onKeyDown()" onKeyPress="return onFilter('.0123456789')"> 
                                  . The profit / loss of the stock will be...</span></p>
                                  
                                  <input type="submit" value="Calculate" class="button" name="ctl00$cphContent$btnCalculate" id="ctl00_cphContent_btnCalculate" onClick="return btnCal_click();">
                              </form>
                              
                              <div class="border_bottom margin_bottom_20px"></div>
                              
                              
                              <h5>Calculation Result</h5>
                              <div class="row-fluid">
                                 <div class="span6">
                                    <div class="alert alert-info">
                                        <strong>Purchase Value: </strong> <br/>
                                         <span id="ctl00_cphContent_lblPSPrices" class="id_Calculator_Value">10.000</span> x <span id="ctl00_cphContent_lblShares" class="id_Calculator_Value">100</span> = <span id="ctl00_cphContent_lblPurchaseValue" class="id_Calculator_Value">1,000.00</span>                                    </div>
                                 </div>
                                 <div class="span6">
                                    <div class="alert alert-info">
                                        <strong> Total Purchase Cost: </strong> <br/>
                                         <span id="ctl00_cphContent_lblPSValueResult" class="id_Calculator_Value">1,000.00</span> + <span id="ctl00_cphContent_lblTtlTransCostResult" class="id_Calculator_Value">29.30</span> = <span id="ctl00_cphContent_lblTtlPurchaseCostResult" class="id_Calculator_Value">1,029.30</span>                                    </div>
                                 </div>
                              </div>
                              
                              <!-- note to programmer: below table result is sample data for selecting option " If I make profit of RM 20.00 . The selling price will be..." please display all sell price range from 9.800 to 11.800 in the below table. Display one of the calculation result table below and hide the other one depending on the option above. -->
                              <p id="ctl00_cphContent_txtMakeProfit_p">If I make profit of <span class="black-title"><strong>RM <span id="ctl00_cphContent_txtMakeProfit_strong">20.00</span></strong></span>. The selling price will be...</p><!-- note to programmer: the price RM20.00 varies depends on the user types the price in the above selection.-->
                              <p id="ctl00_cphContent_txtSellStock_p">If I sell stock at price of <span class="black-title"><strong>RM <span id="ctl00_cphContent_txtSellStock_strong">2.500</span></strong></span>. The profit / loss of the stock will be...</p>
                              <div id="ctl00_cphContent_pnlWrapper">
                              <table class="table table-striped" onMouseUp="TableResize_OnMouseUp(this);" onMouseDown="TableResize_OnMouseDown(this);" onMouseMove="TableResize_OnMouseMove(this);" id="ctl00_cphContent_gvResult">
                                <col width="1"/>
                                <col width="1"/>
                                <col width="1"/>
                                <col width="1"/>
                                <col width="1"/>
                                <col width="1"/>
                                <col width="1"/>
                                
                                <thead>
                                  <tr id="ctl00_cphContent_gvResult_tr_header">
                                    <th>Sell</th>
                                    <th>Diff</th>
                                    <th>Sales Val</th>
                                    <th>Overhead</th>
                                    <th>Net S.P</th>
                                    <th>P/L</th>
                                    <th>P/L %</th>
                                  </tr>   
                                </thead>
                                <tbody id="ctl00_cphContent_gvResult_tr_body">
                                  <tr>
                                     <td><span class="red-title">10.000</span></td>
                                     <td><span class="red-title">0.000</span></td>
                                     <td>1,000.00</td>
                                     <td>29.30</td>
                                     <td>970.70</td>
                                     <td><span class="red-title">-58.59</span></td>
                                     <td><span class="red-title">-5.69</span></td>
                                  </tr>
                                  <tr>
                                     <td><span class="green-title">10.020</span></td>
                                     <td><span class="green-title">+0.020</span></td>
                                     <td>1,002.00</td>
                                     <td>30.30</td>
                                     <td>971.70</td>
                                     <td><span class="red-title">-57.59</span></td>
                                     <td><span class="red-title">-5.60</span></td>
                                  </tr>
                                </tbody>
                              </table>
                              </div>
                              <!-- note to programmer: below table result is sample data for selecting option "If I sell stock at price of RM 2.500 The profit / loss of the stock will be..." please display all sell price range from 2.00 to 3.00 in the below table. Display one of the calculation result table below and hide the other one depending on the option above. -->
                              <!--<p>If I sell stock at price of <span class="black-title"><strong>RM <span id="ctl00_cphContent_txtSellStock_strong">2.500</span></strong></span>. The profit / loss of the stock will be...</p>--><!-- note to programmer: the price RM 2.500 varies depends on the user types the price in the above selection.-->
                              <!--<table class="table table-striped">
                                <col width="1"/>
                                <col width="1"/>
                                <col width="1"/>
                                <col width="1"/>
                                <col width="1"/>
                                <col width="1"/>
                                <col width="1"/>
                                
                                <thead>
                                  <tr>
                                    <th>Sell</th>
                                    <th>Diff</th>
                                    <th>Sales Val</th>
                                    <th>Overhead</th>
                                    <th>Net S.P</th>
                                    <th>P/L</th>
                                    <th>P/L %</th>
                                  </tr>   
                                </thead>
                                <tbody>
                                  <tr>
                                     <td><span class="red-title">2.000</span></td>
                                     <td><span class="red-title">-8.000</span></td>
                                     <td>200.00</td>
                                     <td>29.06</td>
                                     <td>170.94</td>
                                     <td><span class="red-title">-858.35</span></td>
                                     <td><span class="red-title">-83.39</span></td>
                                  </tr>
                                  <tr>
                                     <td><span class="red-title">2.010</span></td>
                                     <td><span class="red-title">-7.990</span></td>
                                     <td>200.99</td>
                                     <td>29.06</td>
                                     <td>171.94</td>
                                     <td><span class="red-title">-857.35</span></td>
                                     <td><span class="red-title">-83.30</span></td>
                                  </tr>
                                                                   
                                </tbody>
                              </table>
                              -->
                      	<!--</div>-->
                     </div>
                     <!-- end panels -->
                    </div>
                  </div>

				  <script type="text/javascript">
                  $('#twitter-bootstrap-tabs').easytabs();
                  </script>
                </div>
              </div>
            </div>
            <i class="icon-dollar right"></i>          </div>
        <!-- End Info white -->
          
          
          <!-- Info Resalt-->
          <div class="info_resalt border_bottom">
            <div class="container">
              <h2 class="red-title"><span>Notes:</span></h2>
              <div class="row-fluid">
                <div class="span6">              
                  <h5>For Normal Stock</h5>
                  <ul class="list icons">
                     <li><i class="icon-ok"></i>  1 Lot = 100 Shares</li>
                     <li><i class="icon-ok"></i>  Valid quantity range is from 1 lot to 100,000 lots</li>
                     <li><i class="icon-ok"></i>  Valid price range is from RM 0.005 to RM 999.500</li>
                  </ul>
                </div>  
                
                <div class="span6">
                  <h5>For Loan Stock</h5>
                  <ul class="list icons">
                     <li><i class="icon-ok"></i>  1 Lot = 100 Shares</li>
                     <li><i class="icon-ok"></i>  Valid quantity range is from 1 lot to 100,000 lots</li>
                     <li><i class="icon-ok"></i>  Valid price range is from RM 0.005 to RM 999.500</li>
                     <li><i class="icon-ok"></i>  For specific profit in percentage, add % at the end</li> 
                  </ul>
                </div>      
              </div>
            </div>
          </div>
          <!-- End Info Resalt-->
          
@stop
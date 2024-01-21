var oResizeTarget = null;
var iStartX = null;
var iEndX = null;
var iSizeX = null;
var sResizableElement = "TH";
var iResizeThreshold = 8;
var iEdgeThreshold = 8;
var iSizeThreshold = 20;
var sVBarID = "VBar";
var CurrntPost = 0;

function TableResize_CreateVBar()
{
    // Returns a reference to the resizer VBar for the table
    var objItem = document.getElementById(sVBarID);

    // Check if the item doesn't yet exist
    if (!objItem)
    {
        // and Create the item if necessary
        objItem = document.createElement("SPAN");

        // Setup the bar
        objItem.id = sVBarID;
        objItem.style.position = "absolute";
        objItem.style.top = "0px";
        objItem.style.left = "0px";
        objItem.style.height = "0px";
        objItem.style.width = "2px";
        objItem.style.background = "silver";
        objItem.style.borderLeft = "1px solid black";
        objItem.style.display = "none";

        // Add the bar to the document
        document.body.appendChild(objItem);
    }
}

//window.attachEvent("onload", TableResize_CreateVBar);

function TableResize_GetOwnerHeader(objReference)
{
    var oElement = objReference;
    while (oElement != null && oElement.tagName != null && oElement.tagName != "BODY")
    {
        if (oElement.tagName.toUpperCase() == sResizableElement)
        {
            return oElement;
        }

        oElement = oElement.parentElement;
    }

    // The TH wasn't found
    return null;
}

function TableResize_GetFirstColumnCell(objTable, iCellIndex)
{
    var oHeaderCell = objTable.rows(0).cells(iCellIndex);
    return oHeaderCell;
}

function TableResize_CleanUp()
{
    // Void the Global variables and hide the resizer VBar.
    var oVBar = document.getElementById(sVBarID);

    if (oVBar)
    {
        oVBar.runtimeStyle.display = "none";
    }

    iEndX = null;
    iSizeX = null;
    iStartX = null;
    oResizeTarget = null;
    oAdjacentCell = null;

    return true;
}

function TableResize_OnMouseMove(objTable)
{
    // Change cursor and store cursor position for resize indicator on column
    var objTH = TableResize_GetOwnerHeader(event.srcElement);
    if (!objTH)
        return;

    var oVBar = document.getElementById(sVBarID);
    if (!oVBar)
        return;

    var oAdjacentCell = objTH.nextSibling;

    // Show the resize cursor if we are within the edge threshold.
    if ((event.offsetX >= (objTH.offsetWidth - iEdgeThreshold)) && (oAdjacentCell != null))
    {
        objTH.runtimeStyle.cursor = "e-resize";
    }
    else
    {
        if (objTH.style.cursor)
        {
            objTH.runtimeStyle.cursor = objTH.style.cursor;
        }
        else
        {
            objTH.runtimeStyle.cursor = "";
        }
    }

    if (oVBar.runtimeStyle.display == "inline")
    {
        // We have to add the body.scrollLeft in case the table is wider than the view window
        // where the table is entirely within the screen this value should be zero...
        oVBar.runtimeStyle.left = window.event.clientX + document.body.scrollLeft;
        oVBar.runtimeStyle.top = window.event.clientY + document.body.scrollTop;
        document.selection.empty();

        //objTH.parentElement.left = window.event.clientX + document.body.scrollLeft;
        //objTH.runtimeStyle.left = window.event.clientX + document.body.scrollLeft;
        iEndX = event.screenX;
        iEndY = event.screenY;

        iSizeX = iEndX - iStartX;
        iSizeY = iEndY - iStartY;

        // Mark the table with the resize attribute for not resizing
        objTable.setAttribute("Resizing", "false");

        iResizeOldWidth = (oResizeTarget.offsetWidth);

        var ScrollPanel = document.getElementById("ctl00_cphContent_pnlWrapper");

        if (ScrollPanel.scrollTop != 0)
            CurrntPost = ScrollPanel.scrollTop;
        ScrollPanel.scrollTop = 0;

        //var CrrntPost = oResizeTarget.style.position;
        oResizeTarget.style.width = iResizeOldWidth + iSizeX;
        //oResizeTarget.style.position = CrrntPost;
        //ScrollPanel.scrollTop = CurrntPost;
    }

    return true;
}

function TableResize_OnMouseDown(objTable)
{
    // Record start point and show vertical bar resize indicator
    var oTargetCell = event.srcElement;
    if (!oTargetCell)
        return;

    var oVBar = document.getElementById(sVBarID);
    if (!oVBar)
        return;

    if (oTargetCell.parentElement.tagName.toUpperCase() == sResizableElement)
    {
        oTargetCell = oTargetCell.parentElement;
    }

    var oHeaderCell = TableResize_GetFirstColumnCell(objTable, oTargetCell.cellIndex);

    if ((oHeaderCell.tagName.toUpperCase() == sResizableElement) && (oTargetCell.runtimeStyle.cursor == "e-resize"))
    {
        iStartX = event.screenX;
        iStartY = event.screenY;
        oResizeTarget = oHeaderCell;

        // Mark the table with the resize attribute and show the resizer VBar.
        // We also capture all events on the table we are resizing because Internet 
        // Explorer sometimes forgets to bubble some events up.
        // Now all events will be fired on the table we are resizing.
        objTable.setAttribute("Resizing", "true");
        objTable.setCapture();

        // Set up the VBar for display

        // We have to add the body.scrollLeft in case the table is wider than the view window
        // where the table is entriely within the screen this value should be zero...
        oVBar.runtimeStyle.left = window.event.clientX + document.body.scrollLeft;

        oVBar.runtimeStyle.top = objTable.parentElement.offsetTop + objTable.offsetTop;
        ;
        oVBar.runtimeStyle.height = objTable.parentElement.clientHeight;
        oVBar.runtimeStyle.display = "inline";
    }

    return true;
}

function TableResize_OnMouseUp(objTable)
{
    // Resize the column and its adjacent sibling if position and size are within threshold values
    var oAdjacentCell = null;
    var iAdjCellOldWidth = 0;
    var iResizeOldWidth = 0;

    var ScrollPanel = document.getElementById("ctl00_cphContent_pnlWrapper");
    //ScrollPanel.scrollTop = CurrntPost;

    if (iStartX != null && oResizeTarget != null)
    {
        iEndX = event.screenX;
        iSizeX = iEndX - iStartX;

        // Mark the table with the resize attribute for not resizing
        objTable.setAttribute("Resizing", "false");

        if ((oResizeTarget.offsetWidth + iSizeX) >= iSizeThreshold)
        {
            if (Math.abs(iSizeX) >= iResizeThreshold)
            {
                if (oResizeTarget.nextSibling != null)
                {
                    oAdjacentCell = oResizeTarget.nextSibling;
                    iAdjCellOldWidth = (oAdjacentCell.offsetWidth);
                }
                else
                {
                    oAdjacentCell = null;
                }

                iResizeOldWidth = (oResizeTarget.offsetWidth);

                //CurrntPost = ScrollPanel.scrollTop;
                //ScrollPanel.scrollTop = 0;              

                //oResizeTarget.style.width = iResizeOldWidth + iSizeX;              

                if ((oAdjacentCell != null) && (oAdjacentCell.tagName.toUpperCase() == sResizableElement))
                {
                    oAdjacentCell.style.width = (((iAdjCellOldWidth - iSizeX) >= iSizeThreshold) ? (iAdjCellOldWidth - iSizeX) : (oAdjacentCell.style.width = iSizeThreshold));
                }
            }
        }
        else
        {
            oResizeTarget.style.width = iSizeThreshold;
        }

        ScrollPanel.scrollTop = CurrntPost;
    }

    // Clean up the VBar and release event capture.
    TableResize_CleanUp();
    objTable.releaseCapture();

    return true;
}

var sCrrntID = "";
function btnCal_click()
{
    // check text box for quantity and price
    var txtPrice = document.getElementById("ctl00_cphContent_txtPrice");
    var txtQuantity = document.getElementById("ctl00_cphContent_txtQuantity");
    var lblShares = document.getElementById("ctl00_cphContent_lblShares");
    var lblPurchaseValue = document.getElementById("ctl00_cphContent_lblPurchaseValue");

    // check for validity of quantity
    if (isEmpty(txtQuantity.value))
    {
        alert("Please enter the quantity!");
        txtQuantity.focus();
        return false;
    }

    var iMaxPrice = 999.500;

    // check for validity of quantity
    if (isEmpty(txtPrice.value))
    {
        alert("Please enter the price!");
        txtPrice.focus();
        return false;
    }

    var txtSellStock = document.getElementById("ctl00_cphContent_txtSellStock");
    var sTmp = txtSellStock.value.replace(/\,/g, '');
    var dSellStock = parseFloat(sTmp);

    if (dSellStock > iMaxPrice)
    {
        alert("Maximum of sell price is RM999.500");
        txtSellStock.value = "";
        txtSellStock.focus();
        return false;
    }

    var rSellStock = document.getElementById("ctl00_cphContent_rSellStock");
    var rMakeProfit = document.getElementById("ctl00_cphContent_rMakeProfit");
    var txtMakeProfit = document.getElementById("ctl00_cphContent_txtMakeProfit");
    var ScrollPanel = document.getElementById("ctl00_cphContent_pnlWrapper");
    //var trSpace = document.getElementById("ctl00_cphContent_trSpace");
    //var trResult = document.getElementById("ctl00_cphContent_trResult");
    //var pCalResult = document.getElementById("ctl00_cphContent_pCalResult");
    var lblPSValue = document.getElementById("ctl00_cphContent_lblPSValue");

    if (!isEmpty(lblPSValue.innerHTML))
    {
        // check sell price empty
        if (rSellStock.checked)
        {
            if (isEmpty(txtSellStock.value))
            {
                alert("Please enter your sell stock price!");
                txtSellStock.focus();

                ScrollPanel.style.visibility = 'hidden';
                //trSpace.style.display = 'none';
                //trResult.style.display = 'none';
                return false;
            }
        }
        else if (rMakeProfit.checked)
        {
            var txtMakeProfit = document.getElementById("ctl00_cphContent_txtMakeProfit");
            var sTmpMakeProfit = txtMakeProfit.value.replace(/\,/g, '');

            if (isEmpty(txtMakeProfit.value))
            {
                alert("Please enter your profit value!");
                txtMakeProfit.focus();

                ScrollPanel.style.visibility = 'hidden';
                //trSpace.style.display = 'none';
                //trResult.style.display = 'none';
                return false;
            }
        }

        var lblPSPrices = document.getElementById("ctl00_cphContent_lblPSPrices");
        lblPSPrices.innerHTML = txtPrice.value;

        var dShares = txtQuantity.value.replace(/\,/g, '');
        var dValue = parseFloat(dShares) * 100;
        lblShares.innerHTML = dValue;
        lblShares.innerHTML = CurrencyFormattedDecimal(lblShares.innerHTML);

        // convert to Quantity
        lblShares.innerHTML = lblShares.innerHTML.replace('.00', '');

        lblPurchaseValue.innerHTML = lblPSValue.innerHTML;

        // Show Total Purchase Cost Value
        var lblPSValueResult = document.getElementById("ctl00_cphContent_lblPSValueResult");
        lblPSValueResult.innerHTML = lblPurchaseValue.innerHTML;

        var lblTtlTransCost = document.getElementById("ctl00_cphContent_lblTtlTransCost");
        var lblTtlTransCostResult = document.getElementById("ctl00_cphContent_lblTtlTransCostResult");
        lblTtlTransCostResult.innerHTML = lblTtlTransCost.innerHTML;

        // Calculate result for bit table
        var bitColumn = document.getElementById("ctl00_cphContent_gvResult");
        var txtPrice = document.getElementById("ctl00_cphContent_txtPrice");

        // Reset all color
        for (var i = 1; i < 102; i++)
        {
            var selRow = getSelectedRow(i);
            if (selRow != null)
            {
                selRow.style.backgroundColor = '#ffffff';
            }
        }

        // Clear all the row in grid view table
        for (var j = 0; j < 7; j++)
        {
            for (var i = 1; i < 102; i++)
            //for (var i = 1; i < 3; i++)
            {
                if (bitColumn.rows[i].cells.length > 0)
                    bitColumn.rows[i].deleteCell(0);
            }
        }

        // reset scroll bar position
        ScrollPanel.scrollLeft = 0;
        ScrollPanel.scrollTop = 0;

        var dShares = lblShares.innerHTML.replace(/\,/g, '');
        var lblTtlPurchaseCostResult = document.getElementById("ctl00_cphContent_lblTtlPurchaseCostResult");
        var lblTtlPurchaseCost = document.getElementById("ctl00_cphContent_lblTtlPurchaseCost");
        lblTtlPurchaseCostResult.innerHTML = lblTtlPurchaseCost.innerHTML;

        //////////////////////////////////////////////////////////////
        document.getElementById("ctl00_cphContent_txtMakeProfit_strong").innerHTML = document.getElementById("ctl00_cphContent_txtMakeProfit").value;
        document.getElementById("ctl00_cphContent_txtSellStock_strong").innerHTML = document.getElementById("ctl00_cphContent_txtSellStock").value;
        
        if (rMakeProfit.checked)
        {
            document.getElementById("ctl00_cphContent_txtMakeProfit_p").style.display = 'block';
            document.getElementById("ctl00_cphContent_txtSellStock_p").style.display = 'none';
        }else{
            document.getElementById("ctl00_cphContent_txtMakeProfit_p").style.display = 'none';
            document.getElementById("ctl00_cphContent_txtSellStock_p").style.display = 'block';
        }
        
        // Find make profit price
        if (rMakeProfit.checked)
        {
            
            // Find target price for make profit
            var sTmpMakeProfit = txtMakeProfit.value.replace(/\,/g, '');
            var fBit = 0.000;
            var fPrice = 0.000;
            var sTmp = txtPrice.value.replace(/\,/g, '');
            fPrice = parseFloat(sTmp);

            // Check increasing bit for price
            if (fPrice < 1.000)
                fBit = 0.005;
            else if (fPrice >= 1.000 && fPrice < 3.000)
                fBit = 0.010;
            else if (fPrice >= 3.000 && fPrice < 4.990)
                fBit = 0.010;
            else if (fPrice >= 5.000 && fPrice < 9.990)
                fBit = 0.010;
            else if (fPrice >= 10.000 && fPrice < 24.990)
                fBit = 0.020;
            else if (fPrice >= 25.000 && fPrice < 99.990)
                fBit = 0.020;
            else if (fPrice >= 100.000)
                fBit = 0.100;

            var dShares = lblShares.innerHTML.replace(/\,/g, '');
            var fCrrntPrice = 0.000;
            var i = 0;

            // insert upper, lower values for buying price
            while (i < 1000)
            {
                i = i + 1;

                if (i == 1)
                    var fTmp = fPrice + fBit * i;
                else
                    var fTmp = fCrrntPrice + fBit;

                fTmp = fTmp.toFixed(3);
                if (fTmp >= iMaxPrice)
                {
                    alert("The price is out of range!");
                    fCrrntPrice = iMaxPrice;
                    break;
                }

                var fDiff = fTmp - fPrice;
                fDiff = fDiff.toFixed(3);

                var dSPValue = CalNewSalesPurchaseValue(fTmp, dShares);

                // Cal P/L
                var TotalPC = lblTtlPurchaseCostResult.innerHTML.replace(/\,/g, '');
                var dPL = dSPValue - parseFloat(TotalPC);

                if (sTmpMakeProfit.indexOf('%') > -1)
                {
                    var dPLPercent = dPL / parseFloat(TotalPC) * 100;
                    dPLPercent = dPLPercent.toFixed(2);

                    sTmp = ""
                    sTmp = sTmpMakeProfit.replace('%', '');
                    var dMakeProfitPercent = parseFloat(sTmp);

                    if (dPLPercent > dMakeProfitPercent)
                    {
                        var fSelectedPrice = fTmp;
                        break;
                    }
                }
                else
                {
                    if (dPL >= parseFloat(sTmpMakeProfit))
                    {
                        var fSelectedPrice = fTmp;
                        break;
                    }
                }

                var sTmp = fTmp;
                fTmp = parseFloat(sTmp);

                if (fTmp < iMaxPrice)
                    fCrrntPrice = fTmp;

                // determine next start price
                if (i > 1)
                {
                    var fBitSum = fBit * 1000;

                    sTmp = "";
                    sTmp = fBitSum;
                    fBitSum = parseFloat(sTmp);

                    var fPriceBitSum = 0.000;
                    fPriceBitSum = fCrrntPrice + fBitSum;

                    var fMakeProfit = parseFloat(sTmpMakeProfit);
                    dSPValue = CalNewSalesPurchaseValue(fPriceBitSum, dShares);
                    dPL = dSPValue - parseFloat(TotalPC);

                    dPLPercent = dPL / parseFloat(TotalPC) * 100;
                    dPLPercent = dPLPercent.toFixed(2);

                    if ((sTmpMakeProfit.indexOf('%') == -1 && dPL < fMakeProfit) || dPLPercent < dMakeProfitPercent)
                    {
                        if (fPriceBitSum < iMaxPrice)
                            fCrrntPrice = fPriceBitSum;
                    }
                    else
                    {
                        fBitSum = 0.000;
                        fBitSum = fBit * 100;

                        sTmp = "";
                        sTmp = fBitSum;
                        fBitSum = parseFloat(sTmp);

                        fPriceBitSum = 0.000;
                        fPriceBitSum = fCrrntPrice + fBitSum;

                        fMakeProfit = parseFloat(sTmpMakeProfit);
                        dSPValue = CalNewSalesPurchaseValue(fPriceBitSum, dShares);
                        dPL = dSPValue - parseFloat(TotalPC);

                        dPLPercent = dPL / parseFloat(TotalPC) * 100;
                        dPLPercent = dPLPercent.toFixed(2);

                        if ((sTmpMakeProfit.indexOf('%') == -1 && dPL < fMakeProfit) || dPLPercent < dMakeProfitPercent)
                        {
                            if (fPriceBitSum < iMaxPrice)
                                fCrrntPrice = fPriceBitSum;
                        }
                        else
                        {
                            fBitSum = 0.000;
                            fBitSum = fBit * 10;

                            sTmp = "";
                            sTmp = fBitSum;
                            fBitSum = parseFloat(sTmp);

                            fPriceBitSum = 0.000;
                            fPriceBitSum = fCrrntPrice + fBitSum;

                            fMakeProfit = parseFloat(sTmpMakeProfit);
                            dSPValue = CalNewSalesPurchaseValue(fPriceBitSum, dShares);
                            dPL = dSPValue - parseFloat(TotalPC);

                            dPLPercent = dPL / parseFloat(TotalPC) * 100;
                            dPLPercent = dPLPercent.toFixed(2);

                            if ((sTmpMakeProfit.indexOf('%') == -1 && dPL < fMakeProfit) || dPLPercent < dMakeProfitPercent)
                            {
                                if (fPriceBitSum < iMaxPrice)
                                    fCrrntPrice = fPriceBitSum;
                            }
                        }
                    }
                }

                // Determine increasing bit for next price
                if (fCrrntPrice < 1.000)
                    fBit = 0.005;
                else if (fCrrntPrice >= 1.000 && fCrrntPrice < 3.000)
                    fBit = 0.010;
                else if (fCrrntPrice >= 3.000 && fCrrntPrice < 4.990)
                    fBit = 0.010;
                else if (fCrrntPrice >= 5.000 && fCrrntPrice < 9.990)
                    fBit = 0.010;
                else if (fCrrntPrice >= 10.000 && fCrrntPrice < 24.990)
                    fBit = 0.020;
                else if (fCrrntPrice >= 25.000 && fCrrntPrice < 99.990)
                    fBit = 0.020;
                else if (fCrrntPrice >= 100.000)
                    fBit = 0.100;
            }

            if (isEmpty(fSelectedPrice))
                fSelectedPrice = fCrrntPrice;
        }

        //////////////////////////////////////////////////////////////
        // Display grid view

        var fBit = 0.000;
        var fPrice = 0.000;
        var sTmp = txtSellStock.value.replace(/\,/g, '');

        if (rSellStock.checked)
            fPrice = parseFloat(sTmp);
        else if (rMakeProfit.checked)
            fPrice = fSelectedPrice;

        var fBuyPrice = parseFloat(txtPrice.value);

        // Check increasing bit for price
        if (fPrice < 1.000)
            fBit = 0.005;
        else if (fPrice >= 1.000 && fPrice < 3.000)
            fBit = 0.010;
        else if (fPrice >= 3.000 && fPrice < 4.990)
            fBit = 0.010;
        else if (fPrice >= 5.000 && fPrice < 9.990)
            fBit = 0.010;
        else if (fPrice >= 10.000 && fPrice < 24.990)
            fBit = 0.020;
        else if (fPrice >= 25.000 && fPrice < 99.990)
            fBit = 0.020;
        else if (fPrice >= 100.000)
            fBit = 0.100;

        fCrrntPrice = 0.000;

        // insert upper, lower values for buying price
        for (var i = 1; i < 102; i++)
        //for (var i = 1; i < 3; i++)
        {
            var SellPrice = bitColumn.rows[i].insertCell(0);
            SellPrice.className = "id_Calculator_Result";

            var DiffPrice = bitColumn.rows[i].insertCell(1);
            DiffPrice.className = "id_Calculator_Result_Right";

            var SalesVal = bitColumn.rows[i].insertCell(2);
            SalesVal.className = "id_Calculator_Result_Right";

            var Overhead = bitColumn.rows[i].insertCell(3);
            Overhead.className = "id_Calculator_Result_Right";

            var NetSP = bitColumn.rows[i].insertCell(4);
            NetSP.className = "id_Calculator_Result_Right";

            var PL = bitColumn.rows[i].insertCell(5);
            PL.className = "id_Calculator_Result_Right";

            var PLPercent = bitColumn.rows[i].insertCell(6);
            PLPercent.className = "id_Calculator_Result_Right";

            if (i < 51)
            {
                if (i == 1)
                    var fTmp = fPrice - fBit * (51 - i);
                else
                    fTmp = fCrrntPrice + fBit;

                fTmp = fTmp.toFixed(3);
                if (fTmp > iMaxPrice)
                    break;
                SellPrice.innerHTML = fTmp;

                var fDiff = fTmp - fBuyPrice;
                fDiff = fDiff.toFixed(3);

                // Cal Sales Values                  
                var CSValue = fTmp * parseFloat(dShares);
            }

            if (i == 51)
            {
                fTmp = fPrice;
                if (fTmp > iMaxPrice)
                    break;
                SellPrice.innerHTML = fPrice;
                var sTmp = SellPrice.innerHTML;
                var iFind = sTmp.indexOf('.');
                sTmp = sTmp.substring(iFind, sTmp.length);

                if (iFind > -1 && sTmp.length < 4)
                {
                    if (sTmp.length == 3)
                        SellPrice.innerHTML = SellPrice.innerHTML + "0";
                    else if (sTmp.length == 2)
                        SellPrice.innerHTML = SellPrice.innerHTML + "00";
                    else if (sTmp.length == 1)
                        SellPrice.innerHTML = SellPrice.innerHTML + "000";
                }
                else if (iFind == -1)
                    SellPrice.innerHTML = SellPrice.innerHTML + ".000";

                var fDiff = fPrice - fBuyPrice;
                fDiff = fDiff.toFixed(3);
                DiffPrice.innerHTML = fDiff;

                // Cal Sales Values
                var CSValue = fPrice * parseFloat(dShares);
            }

            if (i > 51)
            {
                sTmp = "";
                sTmp = fPrice;
                fPrice = parseFloat(sTmp);

                var fTmp = fCrrntPrice + fBit;
                fTmp = fTmp.toFixed(3);

                if (fTmp > iMaxPrice)
                {
                    // Clear unneccessary row(s) in grid view table
                    for (var j = 0; j < 7; j++)
                    {
                        for (var l = i; l < 102; l++)
                        {
                            if (bitColumn.rows[l].cells.length > 0)
                                bitColumn.rows[l].deleteCell(0);
                        }
                    }

                    break;
                }

                SellPrice.innerHTML = fTmp;

                var fDiff = fTmp - fBuyPrice;
                fDiff = fDiff.toFixed(3);
                DiffPrice.innerHTML = fDiff;

                // Cal Sales Values
                var CSValue = fTmp * parseFloat(dShares);
            }

            if (fDiff > 0)
            {
                SellPrice.style.color = "green";
                DiffPrice.style.color = "green";
                DiffPrice.innerHTML = "+" + fDiff;
            }
            else
            {
                SellPrice.style.color = "red";
                DiffPrice.style.color = "red";
                DiffPrice.innerHTML = fDiff;
            }

            SalesVal.innerHTML = CSValue;
            SalesVal.innerHTML = CurrencyFormattedDecimal(SalesVal.innerHTML);

            CSValue = CSValue.toFixed(2);

            // Cal Overhead
            OverheadSPValuePLPLPercentCalculation(Overhead, CSValue, lblTtlPurchaseCostResult, NetSP, PL, PLPercent);

            // Determine increasing bit for next price
            var sTmp = fTmp;
            fTmp = parseFloat(sTmp);
            fCrrntPrice = fTmp;

            if (fTmp < 1.000)
                fBit = 0.005;
            else if (fTmp >= 1.000 && fTmp < 3.000)
                fBit = 0.010;
            else if (fTmp >= 3.000 && fTmp < 4.990)
                fBit = 0.010;
            else if (fTmp >= 5.000 && fTmp < 9.990)
                fBit = 0.010;
            else if (fTmp >= 10.000 && fTmp < 24.990)
                fBit = 0.020;
            else if (fTmp >= 25.000 && fTmp < 99.990)
                fBit = 0.020;
            else if (fTmp >= 100.000)
                fBit = 0.100;
        }

        // show space, panel, result
        // show space
        //trSpace.style.display = 'block';
        //trResult.style.display = 'block';
        //pCalResult.style.visibility = 'visible';
        ScrollPanel.style.visibility = 'visible';

        // highlight select value

        if (i >= 51)
        {
            //onGridViewRowSelected(51);
            if ("0172" == "7033")
                CurrntPost = 17.7 * 51;
            else
                CurrntPost = 16.30 * 51;
            ScrollPanel.scrollTop = CurrntPost;
        }
        else
        {
            //onGridViewRowSelected(i - 1);
            CurrntPost = 16.09 * i;
            ScrollPanel.scrollTop = CurrntPost;
        }
    }

    return false;
}

function CalBrokerage()
{
    var lblPSValue = document.getElementById("ctl00_cphContent_lblPSValue");
    var txtBrokerage = document.getElementById("ctl00_cphContent_txtBrokerage");
    var lblBrokerage = document.getElementById("ctl00_cphContent_lblBrokerage");
    var dTotal = 0.00;

    if (!isEmpty(lblPSValue.innerHTML) && !isEmpty(txtBrokerage.value))
    {
        var PSValue = lblPSValue.innerHTML.replace(/\,/g, '');
        var Brokerage = txtBrokerage.value.replace(/\,/g, '');

        var dTotal = parseFloat(PSValue) * parseFloat(Brokerage) / 100;

        // check total whether is less than minimum value
        var txtMinimum = document.getElementById("ctl00_cphContent_txtMinimum");
        if (dTotal < parseFloat(txtMinimum.value))
            dTotal = txtMinimum.value

        lblBrokerage.innerHTML = dTotal;
        lblBrokerage.innerHTML = CurrencyFormattedDecimal(lblBrokerage.innerHTML);
    }
}

function CalClearingFee()
{
    var lblPSValue = document.getElementById("ctl00_cphContent_lblPSValue");
    var txtClearingFee = document.getElementById("ctl00_cphContent_txtClearingFee");
    var lblClearingFee = document.getElementById("ctl00_cphContent_lblClearingFee");
    var dTotal = 0.00;

    if (!isEmpty(lblPSValue.innerHTML) && !isEmpty(txtClearingFee.value))
    {
        var PSValue = lblPSValue.innerHTML.replace(/\,/g, '');
        var ClearingFee = txtClearingFee.value.replace(/\,/g, '');

        var dTotal = parseFloat(PSValue) * parseFloat(ClearingFee) / 100;

        // check total whether is greater than maximum value
        var txtMaximumCF = document.getElementById("ctl00_cphContent_txtMaximumCF");
        var MaximumCF = txtMaximumCF.value.replace(/\,/g, '');
        if (dTotal > parseFloat(MaximumCF))
            dTotal = parseFloat(MaximumCF);

        if (dTotal < 0.01)
            dTotal = 0.01;

        lblClearingFee.innerHTML = dTotal;
        lblClearingFee.innerHTML = CurrencyFormattedDecimal(lblClearingFee.innerHTML);
    }
}

function CalNetSalesProceeds()
{
    var lblPSValue = document.getElementById("ctl00_cphContent_lblPSValue");
    var lblTtlTransCost = document.getElementById("ctl00_cphContent_lblTtlTransCost");
    var lblNetSalesProceeds = document.getElementById("ctl00_cphContent_lblNetSalesProceeds");
    var dTotal = 0.00;

    if (!isEmpty(lblPSValue.innerHTML) || !isEmpty(lblTtlTransCost.innerHTML))
    {
        var PSValue = lblPSValue.innerHTML.replace(/\,/g, '');
        var TransCost = lblTtlTransCost.innerHTML.replace(/\,/g, '');

        if (isEmpty(lblPSValue.innerHTML))
            lblPSValue.innerHTML = "0.00";

        if (isEmpty(lblTtlTransCost.innerHTML))
            lblTtlTransCost.innerHTML = "0.00";

        dTotal = parseFloat(PSValue) - parseFloat(TransCost);
        lblNetSalesProceeds.innerHTML = dTotal;
        lblNetSalesProceeds.innerHTML = CurrencyFormattedDecimal(lblNetSalesProceeds.innerHTML);
    }
}

function CalNewSalesPurchaseValue(fTmp, dShares)
{
    // Cal Sales Values
    var CSValue = fTmp * parseFloat(dShares);

    var txtBrokerage = document.getElementById("ctl00_cphContent_txtBrokerage");
    var txtMinimum = document.getElementById("ctl00_cphContent_txtMinimum");
    var sTmp = txtBrokerage.value.replace(/\,/g, '');
    var dBrokerage = 0.000;
    dBrokerage = CSValue * (parseFloat(sTmp) / 100);
    sTmp = "";
    sTmp = txtMinimum.value.replace(/\,/g, '');
    var dMinimum = parseFloat(sTmp);
    if (dBrokerage < dMinimum)
        dBrokerage = dMinimum;

    var txtClearingFee = document.getElementById("ctl00_cphContent_txtClearingFee");
    var txtMaximumCF = document.getElementById("ctl00_cphContent_txtMaximumCF");
    var dClearingFee = 0.000;
    sTmp = "";
    sTmp = txtClearingFee.value.replace(/\,/g, '');
    dClearingFee = CSValue * (parseFloat(sTmp) / 100);
    sTmp = "";
    sTmp = txtMaximumCF.value.replace(/\,/g, '');
    var dMaximumCF = parseFloat(sTmp);
    if (dClearingFee > dMaximumCF)
        dClearingFee = dMaximumCF;

    var txtEvery = document.getElementById("ctl00_cphContent_txtEvery");
    var txtMaximumSD = document.getElementById("ctl00_cphContent_txtMaximumSD");
    var sTmpEvery = txtEvery.value.replace(/\,/g, '');
    var dStampDuty = 0.000;
    dStampDuty = CSValue / parseFloat(sTmpEvery);
    sTmp = "";
    sTmp = txtMaximumSD.value.replace(/\,/g, '');
    var dMaximumSD = parseFloat(sTmp);
    if (dStampDuty > dMaximumSD)
        dStampDuty = dMaximumSD;

    dStampDuty = Math.ceil(dStampDuty);
    var dOverhead = dBrokerage + dClearingFee + dStampDuty;

    // Cal S.P Value
    var dSPValue = CSValue - dOverhead;

    return dSPValue;
}

function CalPSValue()
{
    var lblPSValue = document.getElementById("ctl00_cphContent_lblPSValue");
    var txtQuantity = document.getElementById("ctl00_cphContent_txtQuantity");
    var txtPrice = document.getElementById("ctl00_cphContent_txtPrice");
    var dTotal = 0.00;

    if (!isEmpty(txtQuantity.value) && !isEmpty(txtPrice.value))
    {
        var Quantity = txtQuantity.value.replace(/\,/g, '');
        var Price = txtPrice.value.replace(/\,/g, '');

        var dTotal = parseFloat(Quantity) * 100 * parseFloat(Price);
        lblPSValue.innerHTML = dTotal;
        lblPSValue.innerHTML = CurrencyFormattedDecimal(lblPSValue.innerHTML);

        // show formula cal in label
        var lblFormula = document.getElementById("ctl00_cphContent_lblFormula");
        var dQuantity = parseFloat(Quantity) * 100;
        var sQuantity = String(dQuantity);
        sQuantity = CurrencyFormattedDecimal(sQuantity);
        sQuantity = sQuantity.replace(".00", "");
        lblFormula.innerHTML = txtPrice.value + " X " + sQuantity;
    }
}

function CalStampDuty()
{
    var lblPSValue = document.getElementById("ctl00_cphContent_lblPSValue");
    var lblStampDuty = document.getElementById("ctl00_cphContent_lblStampDuty");
    var txtEvery = document.getElementById("ctl00_cphContent_txtEvery");
    var dTotal = 0.00;

    if (!isEmpty(lblPSValue.innerHTML) && !isEmpty(txtEvery.value))
    {
        var PSValue = lblPSValue.innerHTML.replace(/\,/g, '');
        var Every = txtEvery.value.replace(/\,/g, '');

        var dTotal = parseFloat(PSValue) / parseFloat(Every);

        // check total whether is greater than maximum value
        var txtMaximumSD = document.getElementById("ctl00_cphContent_txtMaximumSD");
        var MaximumSD = txtMaximumSD.value.replace(/\,/g, '');
        if (dTotal > parseFloat(MaximumSD))
            dTotal = parseFloat(MaximumSD);

        if (dTotal < 1)
            dTotal = 1;
        else
            dTotal = Math.ceil(dTotal);

        lblStampDuty.innerHTML = dTotal;
        lblStampDuty.innerHTML = CurrencyFormattedDecimal(lblStampDuty.innerHTML);
    }
}

function CalTotalPurchaseCost()
{
    var lblPSValue = document.getElementById("ctl00_cphContent_lblPSValue");
    var lblTtlTransCost = document.getElementById("ctl00_cphContent_lblTtlTransCost");
    var lblTtlPurchaseCost = document.getElementById("ctl00_cphContent_lblTtlPurchaseCost");
    var dTotal = 0.00;

    if (!isEmpty(lblPSValue.innerHTML) || !isEmpty(lblTtlTransCost.innerHTML))
    {
        var PSValue = lblPSValue.innerHTML.replace(/\,/g, '');
        var TransCost = lblTtlTransCost.innerHTML.replace(/\,/g, '');

        dTotal = parseFloat(PSValue) + parseFloat(TransCost);
        lblTtlPurchaseCost.innerHTML = dTotal;
        lblTtlPurchaseCost.innerHTML = CurrencyFormattedDecimal(lblTtlPurchaseCost.innerHTML);
    }
}

function CalTotalTransactionCost()
{
    var lblBrokerage = document.getElementById("ctl00_cphContent_lblBrokerage");
    var lblClearingFee = document.getElementById("ctl00_cphContent_lblClearingFee");
    var lblStampDuty = document.getElementById("ctl00_cphContent_lblStampDuty");
    var lblTtlTransCost = document.getElementById("ctl00_cphContent_lblTtlTransCost");
    var dTotal = 0.00;

    if (!isEmpty(lblBrokerage.innerHTML) || !isEmpty(lblClearingFee.innerHTML) || !isEmpty(lblStampDuty.innerHTML))
    {
        var Brokerage = lblBrokerage.innerHTML.replace(/\,/g, '');
        var ClearingFee = lblClearingFee.innerHTML.replace(/\,/g, '');
        var StampDuty = lblStampDuty.innerHTML.replace(/\,/g, '');

        var dTotal = parseFloat(Brokerage) + parseFloat(ClearingFee) + parseFloat(StampDuty);
        lblTtlTransCost.innerHTML = dTotal;
        lblTtlTransCost.innerHTML = CurrencyFormattedDecimal(lblTtlTransCost.innerHTML);
    }
}

function CurrencyFormattedDecimal(amount)
{
    if (isNaN(amount))
        return amount;

    var Num = amount;
    var newNum = "";
    var newNum2 = "";
    var count = 0;

    // check zero
    if (Num == 0)
        return "0.00";

    //check for decimal number
    if (Num.indexOf('.') != -1)
    {
        //number ends with a decimal point
        if (Num.indexOf('.') == Num.length - 1)
        {
            Num += "00";
        }
        if (Num.indexOf('.') == Num.length - 2)
        {
            //number ends with a single digit
            Num += "0";
        }

        if (Num.indexOf('.') < Num.length - 3)
        {
            //number ends with a more than one digit
            Num = Num.substring(0, Num.indexOf('.') + 3);
        }

        var a = Num.split(".");
        Num = a[0];   //the part we will commify
        var end = a[1] //the decimal place we will ignore and add back later
    }
    else
    {
        var end = "00";
    }

    //this loop actually adds the commas   
    for (var k = Num.length - 1; k >= 0; k--)
    {
        var oneChar = Num.charAt(k);
        if (count == 3)
        {
            if (oneChar != '-')
                newNum += ",";
            newNum += oneChar;
            count = 1;
            continue;
        }
        else
        {
            newNum += oneChar;
            count++;
        }
    }  //but now the string is reversed!

    //re-reverse the string
    for (var k = newNum.length - 1; k >= 0; k--)
    {
        var oneChar = newNum.charAt(k);
        newNum2 += oneChar;
    }

    // add dollar sign and decimal ending from above
    newNum2 = newNum2 + "." + end;

    return newNum2;
}

function CurrencyFormattedThreeDecimal(amount)
{
    if (isNaN(amount))
        return amount;

    var Num = amount;
    var newNum = "";
    var newNum2 = "";
    var count = 0;

    // check zero
    if (Num == 0)
        return "0.000";

    //check for decimal number
    if (Num.indexOf('.') != -1)
    {
        //number ends with a decimal point
        if (Num.indexOf('.') == Num.length - 1)
        {
            Num += "000";
        }
        if (Num.indexOf('.') == Num.length - 2)
        {
            //number ends with a single digit
            Num += "00";
        }
        if (Num.indexOf('.') == Num.length - 3)
        {
            //number ends with a single digit
            Num += "0";
        }

        if (Num.indexOf('.') < Num.length - 4)
        {
            //number ends with a more than one digit
            Num = Num.substring(0, Num.indexOf('.') + 4);
        }

        var a = Num.split(".");
        Num = a[0];   //the part we will commify
        var end = a[1] //the decimal place we will ignore and add back later
    }
    else
    {
        var end = "000";
    }

    //this loop actually adds the commas   
    for (var k = Num.length - 1; k >= 0; k--)
    {
        var oneChar = Num.charAt(k);
        if (count == 3)
        {
            if (oneChar != '-')
                newNum += ",";
            newNum += oneChar;
            count = 1;
            continue;
        }
        else
        {
            newNum += oneChar;
            count++;
        }
    }  //but now the string is reversed!

    //re-reverse the string
    for (var k = newNum.length - 1; k >= 0; k--)
    {
        var oneChar = newNum.charAt(k);
        newNum2 += oneChar;
    }

    // add dollar sign and decimal ending from above
    newNum2 = newNum2 + "." + end;

    return newNum2;
}

function ConvertToCurrency(id)
{
    var txtTextBox = document.getElementById(id);
    txtTextBox.value = txtTextBox.value.replace(/\,/g, '');
    txtTextBox.value = txtTextBox.value.replace(/\ /g, '');
    txtTextBox.value = txtTextBox.value.replace('(', '-');
    txtTextBox.value = txtTextBox.value.replace(')', '');
    if (txtTextBox.value == '-')
        txtTextBox.value = "0.00";

    // add 0 if the first char is dot
    if (txtTextBox.value.indexOf('.') == 0)
        txtTextBox.value = "0" + txtTextBox.value;

    // delete zero if located in front of numbers
    if (txtTextBox.value.indexOf('0') == 0 && txtTextBox.value.indexOf('.') != 1)
    {
        //txtTextBox.value = txtTextBox.value.replace('0', '');
        var sTmp = txtTextBox.value;
        for (var k = 0; k < sTmp.length; k++)
        {
            var oneChar = sTmp.charAt(k);
            if (oneChar == '0')
                txtTextBox.value = txtTextBox.value.replace('0', '');
            else
                break;
        }
    }

    // Ignore empty value
    if (!isEmpty(txtTextBox.value))
    {
        if (!IsNumeric(txtTextBox.value, id))
        {
            txtTextBox.value = "";
            return false;
        }
        else
        {
            if (id == "ctl00_cphContent_txtPrice" || id == "ctl00_cphContent_txtBrokerage" || id == "ctl00_cphContent_txtClearingFee" ||
                    id == "ctl00_cphContent_txtSellStock")
                txtTextBox.value = CurrencyFormattedThreeDecimal(txtTextBox.value);
            else
                txtTextBox.value = CurrencyFormattedDecimal(txtTextBox.value);

            // convert to Quantity
            if (id == "ctl00_cphContent_txtQuantity")
            {
                var txtQuantity = document.getElementById(id);
                txtQuantity.value = txtQuantity.value.replace('.00', '');
            }
        }
    }

    sCrrntID = "";

    var iMaxQuantity = 100000;
    var iMinQuantity = 1;
    var txtQuantity = document.getElementById("ctl00_cphContent_txtQuantity");
    var sTmp = txtQuantity.value.replace(/\,/g, '');
    var dQuantity = parseFloat(sTmp);

    if (dQuantity > iMaxQuantity)
    {
        alert("Maximum of quantity is " + iMaxQuantity + " lots");
        txtQuantity.value = iMaxQuantity;
        txtQuantity.focus();
        return false;
    }

    if (dQuantity < iMinQuantity)
    {
        alert("Minimum of quantity is " + iMinQuantity + " lots");
        txtQuantity.value = iMinQuantity;
        txtQuantity.focus();
        return false;
    }

    if (id.indexOf('txtPrice') > -1 || id.indexOf('txtSellStock') > -1)
    {
        if (id.indexOf('txtPrice') > -1)
            var txtPrice = document.getElementById("ctl00_cphContent_txtPrice");
        else
            var txtPrice = document.getElementById("ctl00_cphContent_txtSellStock");

        sTmp = "";
        sTmp = txtPrice.value.replace(/\,/g, '');
        var dPrice = parseFloat(sTmp);
        var iMaxPrice = 999.500;
        var iMinPrice = 0.005;
        iMaxPrice = iMaxPrice.toFixed(3);

        if (dPrice > iMaxPrice)
        {
            alert("Maximum of price is " + iMaxPrice);
            txtPrice.value = iMaxPrice;
            txtPrice.focus();
        }

        if (dPrice < iMinPrice)
        {
            alert("Minimum of price is " + iMinPrice);
            txtPrice.value = iMinPrice;
            txtPrice.focus();
        }
    }

    CalBrokerageFee();
}

function CalBrokerageFee()
{
    //var ScrollPanel = document.getElementById("ctl00_cphContent_pnlWrapper");
    //CurrntPost = ScrollPanel.scrollTop;
    //ScrollPanel.scrollTop = 0;

    CalPSValue();
    CalBrokerage();
    CalClearingFee();
    CalStampDuty();
    CalTotalTransactionCost();
    CalTotalPurchaseCost();
    CalNetSalesProceeds();

    //ScrollPanel.scrollTop = CurrntPost;
}

function isEmpty(str)
{
    var b = false;

    strTemp = new String(str);
    strTemp = trim(strTemp);

    if (strTemp == null)
        b = true;
    else
    if (strTemp == 'undefined' || strTemp == 'null' || strTemp.length == 0)
        b = true;

    return b;
}

function IsNumeric(sText, id)
{
    var ValidChars = "0123456789.%";
    var IsNumber = true;
    var Char;
    var item = document.getElementById(id);

    for (i = 0; i < sText.length && IsNumber == true; i++)
    {
        Char = sText.charAt(i);

        if (i == 0 && Char == '-')
        {
        }
        else if (ValidChars.indexOf(Char) == -1)
        {
            IsNumber = false;
            alert("Invalid value.");
            item.focus();
        }
    }

    // check dot whether is appeared twice
    var sTmp = sText.replace(".", "");
    if (sTmp.indexOf('.') > -1)
    {
        IsNumber = false;
        alert("Invalid value.");
        item.focus();
    }

    // check % whether is not appeared at the end
    var iPercent = sText.indexOf('%');
    if (iPercent > -1)
    {
        if (iPercent != sText.length - 1)
        {
            IsNumber = false;
            alert("Invalid value.");
            item.focus();
        }
    }

    return IsNumber;
}

function lbl_SellPrice_Click(id)
{
    var radio1 = document.getElementById(id);

    if (id == "ctl00_cphContent_rSellStock")
    {
        var radio2 = document.getElementById("ctl00_cphContent_rMakeProfit");
        var textbox = document.getElementById("ctl00_cphContent_txtSellStock");
    }
    else
    {
        var radio2 = document.getElementById("ctl00_cphContent_rSellStock");
        var textbox = document.getElementById("ctl00_cphContent_txtMakeProfit");
    }

    radio1.checked = true;
    radio2.checked = false;

    textbox.focus();
    textbox.select();
}

function LoadData()
{
    // Calculate formula for Purchase / Sales Value
    //CalPSValue();

    // Set Minimum for Brokerage
    var txtMinimum = document.getElementById("ctl00_cphContent_txtMinimum");
    var rLoan = document.getElementById("ctl00_cphContent_rLoan");
    if (rLoan.checked)
        txtMinimum.value = "2.00";

    // make invisible to result panel
    //var pCalResult = document.getElementById("ctl00_cphContent_pCalResult");
    //pCalResult.style.visibility = 'hidden';

    //var trSpace = document.getElementById("ctl00_cphContent_trSpace");
    //trSpace.style.display = 'none';
    //var trResult = document.getElementById("ctl00_cphContent_trResult");
    //trResult.style.display = 'none';

    // load width for diff browser
    var tbLine = document.getElementById("ctl00_cphContent_tbLine");
    var pnlWrapper = document.getElementById("ctl00_cphContent_pnlWrapper");
    var gvResult = document.getElementById("ctl00_cphContent_gvResult");

    if (navigator.userAgent.indexOf("IE") == -1)
    {
        //tbLine.style.width = "690px";  
        gvResult.style.width = "100%";
    }
}

var gridViewCtlId = "ctl00_cphContent_gvResult";
var gridViewCtl = null;
var curSelRow = null;
function getGridViewControl()
{
    if (gridViewCtl == null)
    {
        gridViewCtl = document.getElementById("ctl00_cphContent_gvResult");
    }
}

function onGridViewRowSelected(rowIdx)
{
    var selRow = getSelectedRow(rowIdx);
    if (curSelRow != null)
    {
        curSelRow.style.backgroundColor = '#ffffff';
    }

    if (null != selRow)
    {
        curSelRow = selRow;
        curSelRow.style.backgroundColor = '#D4D4D4';
    }
}

function OverheadSPValuePLPLPercentCalculation(Overhead, CSValue, lblTtlPurchaseCostResult, NetSP, PL, PLPercent)
{
    var txtBrokerage = document.getElementById("ctl00_cphContent_txtBrokerage");
    var txtMinimum = document.getElementById("ctl00_cphContent_txtMinimum");
    var sTmp = txtBrokerage.value.replace(/\,/g, '');
    var dBrokerage = 0.000;
    dBrokerage = CSValue * (parseFloat(sTmp) / 100);
    sTmp = "";
    sTmp = txtMinimum.value.replace(/\,/g, '');
    var dMinimum = parseFloat(sTmp);
    if (dBrokerage < dMinimum)
        dBrokerage = dMinimum;

    var txtClearingFee = document.getElementById("ctl00_cphContent_txtClearingFee");
    var txtMaximumCF = document.getElementById("ctl00_cphContent_txtMaximumCF");
    var dClearingFee = 0.000;
    sTmp = "";
    sTmp = txtClearingFee.value.replace(/\,/g, '');
    dClearingFee = CSValue * (parseFloat(sTmp) / 100);
    sTmp = "";
    sTmp = txtMaximumCF.value.replace(/\,/g, '');
    var dMaximumCF = parseFloat(sTmp);
    if (dClearingFee > dMaximumCF)
        dClearingFee = dMaximumCF;

    var txtEvery = document.getElementById("ctl00_cphContent_txtEvery");
    var txtMaximumSD = document.getElementById("ctl00_cphContent_txtMaximumSD");
    var sTmpEvery = txtEvery.value.replace(/\,/g, '');
    var dStampDuty = 0.000;
    dStampDuty = CSValue / parseFloat(sTmpEvery);
    sTmp = "";
    sTmp = txtMaximumSD.value.replace(/\,/g, '');
    var dMaximumSD = parseFloat(sTmp);
    if (dStampDuty > dMaximumSD)
        dStampDuty = dMaximumSD;

    dStampDuty = Math.ceil(dStampDuty);

    var dOverhead = dBrokerage + dClearingFee + dStampDuty;
    Overhead.innerHTML = dOverhead;
    dOverhead = parseFloat(Overhead.innerHTML).toFixed(2);
    Overhead.innerHTML = dOverhead;
    Overhead.innerHTML = CurrencyFormattedDecimal(Overhead.innerHTML);

    // Cal S.P Value
    var dSPValue = CSValue - dOverhead;
    NetSP.innerHTML = dSPValue;
    NetSP.innerHTML = CurrencyFormattedDecimal(NetSP.innerHTML);

    // Cal P/L
    var TotalPC = lblTtlPurchaseCostResult.innerHTML.replace(/\,/g, '');
    var dPL = dSPValue - parseFloat(TotalPC);
    PL.innerHTML = dPL;
    PL.innerHTML = CurrencyFormattedDecimal(PL.innerHTML);

    // Cal P/L %
    var dPLPercent = dPL / parseFloat(TotalPC) * 100;
    dPLPercent = dPLPercent.toFixed(2);
    PLPercent.innerHTML = dPLPercent;
    PLPercent.innerHTML = CurrencyFormattedDecimal(PLPercent.innerHTML);

    if (dPL > 0)
    {
        PL.style.color = "green";
        PLPercent.style.color = "green";
    }
    else
    {
        PL.style.color = "red";
        PLPercent.style.color = "red";
    }
}

function getSelectedRow(rowIdx)
{
    getGridViewControl();
    if (null != gridViewCtl)
    {
        //gridViewCtl.view.scrollToTop();
        //gridViewCtl.focusRow(rowIdx);
        return gridViewCtl.rows[rowIdx];
    }
    return null;
}

function BottomRadio_Click(id)
{
    var rButton = document.getElementById(id);
    var spPercent = document.getElementById("ctl00_cphContent_spPercent");

    if (id == "ctl00_cphContent_rMakeProfit")
    {
        var txtMakeProfit = document.getElementById("ctl00_cphContent_txtMakeProfit");
        txtMakeProfit.focus();
        var rButton2 = document.getElementById("ctl00_cphContent_rSellStock");
        spPercent.style.display = 'block';
    }
    else
    {
        var txtSellStock = document.getElementById("ctl00_cphContent_txtSellStock");
        txtSellStock.focus();
        var rButton2 = document.getElementById("ctl00_cphContent_rMakeProfit");
        spPercent.style.display = 'none';
    }

    rButton2.checked = false;
    return false;
}

function onKeyDown()
{
    if (event.keyCode == 13)
    {
        event.keyCode = 9;
        return event.keyCode;
    }

    return true;
}

function Radio_Click(id)
{
    var txtMinimum = document.getElementById("ctl00_cphContent_txtMinimum");
    var radio1 = document.getElementById(id);

    if (id == "ctl00_cphContent_rLoan")
    {
        txtMinimum.value = "2.00";
        var radio2 = document.getElementById("ctl00_cphContent_rNormal");
    }
    else
    {
        txtMinimum.value = "28.00";
        var radio2 = document.getElementById("ctl00_cphContent_rLoan");
    }

    radio1.checked = true;
    radio2.checked = false;
    CalBrokerageFee();
}

function TextBoxOn_Click(id)
{
    var txtTextBox = document.getElementById(id);
    if (id != sCrrntID)
    {
        txtTextBox.focus();
        txtTextBox.select();
        sCrrntID = id;
    }

    if (id.indexOf("MakeProfit") > -1 || id.indexOf("SellStock") > -1)
    {
        var rMakeProfit = document.getElementById("ctl00_cphContent_rMakeProfit");
        rMakeProfit.checked = false;
        var rSellStock = document.getElementById("ctl00_cphContent_rSellStock");
        rSellStock.checked = false;

        if (id.indexOf("MakeProfit") > -1)
            rMakeProfit.checked = true;
        else
            rSellStock.checked = true;
    }
}

function trim(stringToTrim)
{
    return stringToTrim.replace(/^\s+|\s+$/g, "");
}

function createNonScrollableHeader(curHdrRowID, newHdrRowID)
{
    var curHdrRow = document.getElementById(curHdrRowID);
    var newHdrRow = document.getElementById(newHdrRowID);

    copyAttributes(curHdrRow, newHdrRow);

    // The following line works with FireFox but not IE...would've made it a hell of a lot easier
    //newHdrRow.innerHTML = curHdrRow.innerHTML;
    //Instead we have to copy each individual cell
    for (var i = 0; i < curHdrRow.cells.length; i++)
    {
        var curHdrCell = curHdrRow.cells.item(i);
        var newHdrCell = document.createElement('th');

        if (i == 0)
            newHdrCell.className = "LeftAlign";
        else
            newHdrCell.className = "RightAlign";

        copyAttributes(curHdrCell, newHdrCell);
        newHdrCell.innerHTML = curHdrCell.innerHTML;
        newHdrRow.appendChild(newHdrCell);
    }

    curHdrRow.style.display = "none";
}


// This needs some work, I'm only copying the attributes I know will be used ahead of time
function copyAttributes(src, cpy)
{
    if (src.style.width != "")
        cpy.style.width = src.style.width;
    if (src.style.height != "")
        cpy.style.height = src.style.height;
    if (src.style.color != "")
        cpy.style.color = src.style.color;
    if (src.style.backgroundColor != "")
        cpy.style.backgroundColor = src.style.backgroundColor;
    if (src.style.fontSize != "")
        cpy.style.fontSize = src.style.fontSize;
    if (src.style.fontWeight != "")
        cpy.style.fontWeight = src.style.fontWeight;
    if (src.style.fontFamily != "")
        cpy.style.fontFamily = src.style.fontFamily;
    if (src.style.textAlign != "")
        cpy.style.textAlign = src.style.textAlign;
    if (src.align != "")
        cpy.align = src.align;
    if (src.scope != "")
        cpy.scope = src.scope;
}


//////
var resultTableBody = document.getElementById("ctl00_cphContent_gvResult_tr_body");
resultTableBody.innerHTML = '';
var resultTableBodyInnerHtml = '<tr>'+
    '<td><span class="red-title">0.000</span></td>'+
    '<td><span class="red-title">0.000</span></td>'+
    '<td>0.000</td>'+
    '<td>0.000</td>'+
    '<td>0.000</td>'+
    '<td><span class="red-title">0.000</span></td>'+
    '<td><span class="red-title">0.000</span></td>'+
 '</tr>';
for (var i = 1; i < 102; i++)
{
    resultTableBody.innerHTML = resultTableBody.innerHTML + resultTableBodyInnerHtml;
}
//////

btnCal_click();

$(document).ready(function () {
    /*$("#ctl00_cphContent_txtQuantity").blur(function(event){
        ConvertToCurrency($(this).attr('id'));
    });*/
});
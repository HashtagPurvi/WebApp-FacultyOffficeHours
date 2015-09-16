
// Script for addding and deleting rows
  var count = "1";
  var id1 = "0";
  var id2 = "0";
  function addRow(in_tbl_name)
  {
    var tbody = document.getElementById(in_tbl_name).getElementsByTagName("TBODY")[0];
    // create row
    var row = document.createElement("TR");
   //id1++;		// Increase row number when row is created


    // create table cell 3
    var td3 = document.createElement("TD")
    var strHtml3 = "Meeting Start Time";
    td3.innerHTML = strHtml3.replace(/!count!/g,count);

    // create table cell 4
    var td4 = document.createElement("TD")
    id1++;

	var strHtml4 = "<INPUT class=\"start_time\" type=\"text\" class=\"time\" name=\"mt[]\"  id=id1>";
	
	    td4.innerHTML = strHtml4.replace(/!count!/g,count);


   // create table cell 5
    var td5 = document.createElement("TD")
	var strHtml5 = "Meeting End Time";
    td5.innerHTML = strHtml5.replace(/!count!/g,count);    

   // create table cell 6
    var td6 = document.createElement("TD")
    id2++;
	var strHtml6 = "<INPUT class=\"end_time\" type=\"text\" class=\"time\"  name=\"mt[]\" id=id2 >";
	
					$(function() {
                	$('.end_time').timepicker({ 'disableTimeRanges': [
                		['12am', '1am'], ['1am', '2am'], ['2am', '3am'], ['3am', '4am'], ['4am', '5am'], 
                		['5am', '6am'], ['6am', '7am'], ['7am', '8am'], 
                		
                	] 
                });
                    
                });
					

    td6.innerHTML = strHtml6.replace(/!count!/g,count);

   // create table cell 7
    var td7 = document.createElement("TD")
    var strHtml7 = "<INPUT TYPE=\"Button\" CLASS=\"Button\" onClick=\"delRow()\" VALUE=\"Delete Row\">";
    td7.innerHTML = strHtml7.replace(/!count!/g,count);
    // append data to row
   
    row.appendChild(td3);
 	row.appendChild(td4);
    row.appendChild(td5);
    row.appendChild(td6);
    row.appendChild(td7);
    
    //row.setAttribute("id",id1);

    //alert(id1);
    // add to count variable
    count = parseInt(count) + 1;
    // append row to table
    tbody.appendChild(row);

    					$(function() {
                	$('.start_time').timepicker({ 'disableTimeRanges': [
                		['12am', '1am'], ['1am', '2am'], ['2am', '3am'], ['3am', '4am'], ['4am', '5am'], 
                		['5am', '6am'], ['6am', '7am'], ['7am', '8am'], 
                		
                	] 
                });
                    	
                });


					$(function() {
                	$('.end_time').timepicker({ 'disableTimeRanges': [
                		['12am', '1am'], ['1am', '2am'], ['2am', '3am'], ['3am', '4am'], ['4am', '5am'], 
                		['5am', '6am'], ['6am', '7am'], ['7am', '8am'], 
                		
                	] 
                });
                    	
                });

				//	alert(id);
				//	return id1;
  }
  
  function delRow()
  {
    var current = window.event.srcElement;
    //here we will delete the line
    while ( (current = current.parentElement)  && current.tagName !="TR");
         current.parentElement.removeChild(current);

   // id1--;
   // return id1;
  }


  

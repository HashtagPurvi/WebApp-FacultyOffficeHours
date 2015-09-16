// script for adding meeting start time and end time once the checkbox is selected


/*function myFunction() {
		
//		<table id="dataTable">
		<tr >
			<td>Meeting Start Time</td> 
	        <td><input class="start_time" type="text" class="time" name="mt[]" id="st0"/></td>

		</tr>

            $(function() {
                	$('.start_time').timepicker({ 'disableTimeRanges': [
                		['12am', '1am'], ['1am', '2am'], ['2am', '3am'], ['3am', '4am'], ['4am', '5am'], 
                		['5am', '6am'], ['6am', '7am'], ['7am', '8am'], 
                		
                	] 
                });
                    
                });


	<tr >
		<td>Meeting End Time</td>
		    <td><input class="end_time" type="text" class="time" name="mt[]" id="et0"/></td>
	    

	            $(function() {
	            	$('.end_time').timepicker({ 'disableTimeRanges': [
	            		['12am', '1am'], ['1am', '2am'], ['2am', '3am'], ['3am', '4am'], ['4am', '5am'], ['5am', '6am'],
	            		['6am', '7am'], ['7am', '8am'], 
	            		
	            	] 
	            });
	                
	            });

	 	

	</tr>

	<tr><td><input type="button" value="Add Another Office hour"  onclick="addRow('dataTable')"> </td> </tr>

	
//	</table>

}
*/



$(function(){
			        $("#t1 input:checkbox.chk1").click(function(){
			            if ($(this).is(":checked"))
			           {
			             //$("#t1").append("<tr><td>after</td></tr>");  
			              
			              $("<tr><td>Meeting Start Time</td> <td><input class='start_time' type='text' class='time' name='mt[]'' id	='st0'/></td></tr>").appendTo("#tr1");
			              $("<tr><td>Meeting End Time</td><td><input class='end_time' type='text' class='time' name='mt[]'' id='et0'/></td></tr>").appendTo("#tr1");
			              $(function() {
                	$('.start_time').timepicker({ 'disableTimeRanges': [
                		['12am', '1am'], ['1am', '2am'], ['2am', '3am'], ['3am', '4am'], ['4am', '5am'], 
                		['5am', '6am'], ['6am', '7am'], ['7am', '8am'], 
                		
                	] 
                });
                    
                });
			              $(function() {
	            	$('.end_time').timepicker({ 'disableTimeRanges': [
	            		['12am', '1am'], ['1am', '2am'], ['2am', '3am'], ['3am', '4am'], ['4am', '5am'], ['5am', '6am'],
	            		['6am', '7am'], ['7am', '8am'], 
	            		
	            	] 
	            });
	                
	            });
			          		

			    }

			  });
			});

$(function(){
			        $("#t1 input:checkbox.chk2").click(function(){
			            if ($(this).is(":checked"))
			           {
			         		$("<td>Meeting Start Time</td> <td><input class='start_time' type='text' class='time' name='mt[]'' id	='st0'/></td>").appendTo("#tr2");
			              $("<tr><td>Meeting End Time</td><td><input class='end_time' type='text' class='time' name='mt[]'' id='et0'/></td></tr>").appendTo("#tr2");
			              $(function() {
                	$('.start_time').timepicker({ 'disableTimeRanges': [
                		['12am', '1am'], ['1am', '2am'], ['2am', '3am'], ['3am', '4am'], ['4am', '5am'], 
                		['5am', '6am'], ['6am', '7am'], ['7am', '8am'], 
                		
                	] 
                });
                    
                });
			              $(function() {
	            	$('.end_time').timepicker({ 'disableTimeRanges': [
	            		['12am', '1am'], ['1am', '2am'], ['2am', '3am'], ['3am', '4am'], ['4am', '5am'], ['5am', '6am'],
	            		['6am', '7am'], ['7am', '8am'], 
	            		
	            	] 
	            	});
	                
	           	  });
	
			             
			           
			           	 //$('<tr><td><input type="button" value="Add Meeting Times" onclick="addRow("t1")"></td></tr>').appendTo("#tr2");
			           }
		
			  });
			});

$(function(){
			        $("#t1 input:checkbox.chk3").click(function(){
			            if ($(this).is(":checked"))
			           {$("<tr><td>Meeting Start Time</td> <td><input class='start_time' type='text' class='time' name='mt[]'' id	='st0'/></td></tr>").appendTo("#tr3");
			              $("<tr><td>Meeting End Time</td><td><input class='end_time' type='text' class='time' name='mt[]'' id='et0'/></td></tr>").appendTo("#tr3");
			              $(function() {
                	$('.start_time').timepicker({ 'disableTimeRanges': [
                		['12am', '1am'], ['1am', '2am'], ['2am', '3am'], ['3am', '4am'], ['4am', '5am'], 
                		['5am', '6am'], ['6am', '7am'], ['7am', '8am'], 
                		
                	] 
                });
                    
                });
			              $(function() {
	            	$('.end_time').timepicker({ 'disableTimeRanges': [
	            		['12am', '1am'], ['1am', '2am'], ['2am', '3am'], ['3am', '4am'], ['4am', '5am'], ['5am', '6am'],
	            		['6am', '7am'], ['7am', '8am'], 
	            		
	            	] 
	            	});
	                
	           	  });
			           }
		
			  });
			});

$(function(){
			        $("#t1 input:checkbox.chk4").click(function(){
			            if ($(this).is(":checked"))
			           {
			           	  $("<tr><td>Meeting Start Time</td> <td><input class='start_time' type='text' class='time' name='mt[]'' id	='st0'/></td></tr>").appendTo("#tr4");
			              $("<tr><td>Meeting End Time</td><td><input class='end_time' type='text' class='time' name='mt[]'' id='et0'/></td></tr>").appendTo("#tr4");
			              $(function() {
                	$('.start_time').timepicker({ 'disableTimeRanges': [
                		['12am', '1am'], ['1am', '2am'], ['2am', '3am'], ['3am', '4am'], ['4am', '5am'], 
                		['5am', '6am'], ['6am', '7am'], ['7am', '8am'], 
                		
                	] 
                });
                    
                });
			              $(function() {
	            	$('.end_time').timepicker({ 'disableTimeRanges': [
	            		['12am', '1am'], ['1am', '2am'], ['2am', '3am'], ['3am', '4am'], ['4am', '5am'], ['5am', '6am'],
	            		['6am', '7am'], ['7am', '8am'], 
	            		
	            	] 
	            	});
	                
	           	  });

			           }
		
			  });
			});

$(function(){
			        $("#t1 input:checkbox.chk5").click(function(){
			            if ($(this).is(":checked"))
			           {
			             	              
			              $("<tr><td>Meeting Start Time</td> <td><input class='start_time' type='text' class='time' name='mt[]'' id	='st0'/></td></tr>").appendTo("#tr5");
			              $("<tr><td>Meeting End Time</td><td><input class='end_time' type='text' class='time' name='mt[]'' id='et0'/></td></tr>").appendTo("#tr5");
			              $(function() {
                	$('.start_time').timepicker({ 'disableTimeRanges': [
                		['12am', '1am'], ['1am', '2am'], ['2am', '3am'], ['3am', '4am'], ['4am', '5am'], 
                		['5am', '6am'], ['6am', '7am'], ['7am', '8am'], 
                		
                	] 
                });
                    
                });
			              $(function() {
	            	$('.end_time').timepicker({ 'disableTimeRanges': [
	            		['12am', '1am'], ['1am', '2am'], ['2am', '3am'], ['3am', '4am'], ['4am', '5am'], ['5am', '6am'],
	            		['6am', '7am'], ['7am', '8am'], 
	            		
	            	] 
	            	});
	                
	           	  });
			    }
		
			  });
			});




$(function(){
			        $("#t1 input:checkbox.chk1").click(function(){
			            if ($(this).is(":checked"))
			           {
			             //$("#t1").append("<tr><td>after</td></tr>");  
			              
			              $("<td>Meeting Start Time</td> <td><input class='start_time' type='text' class='time' name='Day1[]' id='st0'/></td>").appendTo("#tr1");
			              $("<td>Meeting End Time</td><td><input class='end_time' type='text' class='time' name='Day1[]' id='et0'/></td>").appendTo("#tr1");
			              $(function() {
                	$('.start_time').timepicker({ 'disableTimeRanges': [
                		['12am', '1am'], ['1am', '2am'], ['2am', '3am'], ['3am', '4am'], ['4am', '5am'], 
                		['5am', '6am'], ['6am', '7am'], ['7am', '8am'], 
                		
                	] 
                });
                
             //   		$('<td><input type="button" value="Add Another Office hour"  onclick="addRow(\"dataTable\")"> </td>').appendTo("#tr1");

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
			         		$("<td>Meeting Start Time</td> <td><input class='start_time' type='text' class='time' name='Day2[]' id='st0'/></td>").appendTo("#tr2");
			              $("<td>Meeting End Time</td><td><input class='end_time' type='text' class='time' name='Day2[]' id='et0'/></td>").appendTo("#tr2");
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
			        $("#t1 input:checkbox.chk3").click(function(){
			            if ($(this).is(":checked"))
			           {
			           	  $("<td>Meeting Start Time</td> <td><input class='start_time' type='text' class='time' name='Day3[]' id='st0'/></td>").appendTo("#tr3");
			              $("<td>Meeting End Time</td><td><input class='end_time' type='text' class='time' name='Day3[]' id='et0'/></td>").appendTo("#tr3");
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
			           	  $("<td>Meeting Start Time</td> <td><input class='start_time' type='text' class='time' name='Day4[]' id	='st0'/></td>").appendTo("#tr4");
			              $("<td>Meeting End Time</td><td><input class='end_time' type='text' class='time' name='Day4[]' id='et0'/></td>").appendTo("#tr4");
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
			             	              
			              $("<td>Meeting Start Time</td> <td><input class='start_time' type='text' class='time' name='Day5[]' id	='st0'/></td>").appendTo("#tr5");
			              $("<td>Meeting End Time</td><td><input class='end_time' type='text' class='time' name='Day5[]' id='et0'/></td>").appendTo("#tr5");
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


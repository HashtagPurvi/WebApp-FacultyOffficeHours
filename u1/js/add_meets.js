// script for adding meeting start time and end time once the checkbox is selected

function myFunction() {
   var myWindow =  window.open("meeting_times.php", "", "width=800, height=700");
}

$(function(){
			        $("#t1 input:checkbox.chk1").click(function(){
			            if ($(this).is(":checked"))
			           {
			             //$("#t1").append("<tr><td>after</td></tr>");  
			              
			              $("<tr><td>after</td></tr>").appendTo("#tr1");
			          

			    }
/*			    else
			    {
			      var index = $(this).closest("tr").attr("data-index");
			      var findRow = $("#tbl2 tr[data-index='" + index + "']");
			      findRow.remove();
			    }
*/
			  });
			});

$(function(){
			        $("#t1 input:checkbox.chk2").click(function(){
			            if ($(this).is(":checked"))
			           {
			             	              
			              $('<tr><td><input type="button" value="Add Meeting Times" onclick="myFunction()"></td></tr>').appendTo("#tr2");
			           

			           }
		
			  });
			});

$(function(){
			        $("#t1 input:checkbox.chk3").click(function(){
			            if ($(this).is(":checked"))
			           {
			             	              
			              $("<tr><td>after</td></tr>").appendTo("#tr3");
			           }
		
			  });
			});

$(function(){
			        $("#t1 input:checkbox.chk4").click(function(){
			            if ($(this).is(":checked"))
			           {
			             	              
			              $("<tr><td>after</td></tr>").appendTo("#tr4");
			           }
		
			  });
			});

$(function(){
			        $("#t1 input:checkbox.chk5").click(function(){
			            if ($(this).is(":checked"))
			           {
			             	              
			              $("<tr><td>after</td></tr>").appendTo("#tr5");
			           }
		
			  });
			});
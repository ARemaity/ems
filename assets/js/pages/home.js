var page_init = function(){
	$.ajax({
		url: "action/home/action.php",
		type: "POST",
		data: {action :"init" },
		dataType: "json",
		success: function (response) {  
		  if (response != "0") {                                    
			$("#total_projects").text(response.numberofprojects);
			$("#total_expenses").text(Math.round(response.numberofexpense_transaction));
			$("#total_income").text(Math.round(response.numberofincome_transaction));
			$("#total_profit").text(Math.round(response.numberofexpense_transaction-response.numberofincome_transaction));

		  }
		},
	  });

};
 $( document ).ready(function() {

page_init();






		var start = moment().subtract(29, 'days');
		   var end = moment();
   
		   $('#kt_daterangepicker').daterangepicker({
			   buttonClasses: ' btn',
			   applyClass: 'btn-primary',
			   cancelClass: 'btn-secondary',
			   startDate: start,
			   endDate: end,
			   ranges: {
				  'All Time': [moment().subtract(10, 'years').endOf('week'), moment().add('days', 1)],
                  'Today': [moment()],
                  'Yesterday': [moment().subtract(1, 'days'),moment().subtract(1, 'days')],
				  'Last 7 Days': [moment().subtract(6, 'days'), moment()],
				  'Last 30 Days': [moment().subtract(29, 'days'), moment()],
				  'This Month': [moment().startOf('month'), moment().endOf('month')],
				  'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
				  
			   }
		   }, function(start, end, label) {
			   $('#kt_daterangepicker .form-control').val( start.format('MM/DD/YYYY') + ' - ' + end.format('MM/DD/YYYY'));
			  $("#loader_table").show();
			   $.ajax(
				{
					type: "POST",
					data: { all: 0,action:"select",start_dt: start.format('YYYY-MM-DD'), end_dt: end.format('YYYY-MM-DD') },
                    url: "action/home/action.php",
					dataType: "json",
                    success: function (result) {
                       
						$("#total_projects").text((result.numberofprojects));
						$("#total_expenses").text(Math.round(result.numberofexpense_transaction));
						$("#total_income").text(Math.round(result.numberofincome_transaction));
				
						$("#total_profit").text(Math.round(result.numberofexpense_transaction-result.numberofincome_transaction));








                    }
				});
		   });
	 
	



}) 
    
    
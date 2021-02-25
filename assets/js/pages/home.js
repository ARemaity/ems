
 $( document ).ready(function() {

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
                  'Today': [moment(), moment().add('days', 2)],
                  'Yesterday': [moment().subtract(1, 'days'), moment()],
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
					data: { all: 0,pr:productid,type:3,start_dt: start.format('YYYY-MM-DD'), end_dt: end.format('YYYY-MM-DD') },
                    url: "admin/dashboard/widgets.php",
                    success: function (result) {
                        // $("#range_user_product").html(result);
                        // $("#loader_table").hide();
                    }
				});
		   });
	 
	



}) 
    
    
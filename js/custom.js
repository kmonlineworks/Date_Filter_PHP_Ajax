$(document).ready(function(){

	// Date Range Picker
	$( function() {
    	
    	var d1;
    	var d2;
    	var dateFormat = "",

      	from = $( "#from" ).datepicker({
		        
	        defaultDate: "+1w",
	        changeMonth: true,
	        dateFormat: "yy-mm-dd",
	        numberOfMonths: 1

	    }).on( "change", function() {

	        to.datepicker( "option", "minDate", getDate(this) );

	        if (d1 !== '' && d2 !== '') {

	        	d1 = $(this).val();
	        	date_filter(d1, d2);
	        }
	        else{
	        	date_filter();
	        }

        }),

		to = $( "#to" ).datepicker({
        	
        	defaultDate: "+1w",
        	changeMonth: true,
        	dateFormat: "yy-mm-dd",
        	numberOfMonths: 1
      		
      	}).on( "change", function() {
        	
        	from.datepicker( "option", "maxDate", getDate(this) );

        	if (d1 !== '' && d2 !== '') {

	        	d2 = $(this).val();
	        	date_filter(d1, d2);
	        }
	        else{
	        	date_filter();
	        }

      	});
 
	    function getDate( element ) {
		    
		    var date;
		    try {
		    	date = $.datepicker.parseDate( dateFormat, element.value );
		    }
		    catch( error ) {
		    	date = null;
		    }	 
		    return date;
	    }
	});

	function date_filter(date1, date2){

		$.ajax({ 
			url: "date_filter_process.php",
			method: "POST",
			data: {date1: date1, date2: date2},
			success: function(data){

				$('#date-range').html(data);
			}
		});
	}
	date_filter();

});

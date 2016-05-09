$(document).ready(function() {
	$('.table-tab li button').click(function(event) {
		/* Act on the event */
		// tab
		var deactivated = $('.active-tab').index();
		console.log(deactivated);
		var activated = $(this).parent().index();
		console.log(activated);
		$('.table-tab li').removeClass();
		$(this).parent().addClass('active-tab');
		$('#hide').hide();


		// table
		$('.table').hide();
		var idNumber = $(this).data('id');
		if ( activated > deactivated) {
			$(idNumber).show("slide", {direction: "up" }, 200 );
			console.log('bigger');
		}
		if ( activated < deactivated) {
			$(idNumber).show("slide", {direction: "down" }, 200 );
			console.log('smaller');
		}
		else {
			$(idNumber).show();
		}
	});
});

$(document).foundation();																									
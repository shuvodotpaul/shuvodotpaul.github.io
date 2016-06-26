jQuery(document).ready(function() {
	jQuery('.table-tab li button').click(function(event) {
		/* Act on the event */
		// tab
		var deactivated = $('.active-tab').index();
		console.log(deactivated);
		var activated = $(this).parent().index();
		console.log(activated);
		jQuery('.table-tab li').removeAttr('class');
		jQuery(this).parent().addClass('active-tab');
		jQuery('#hide').hide();


		// table
		jQuery('.table').hide();
		var idNumber = $(this).data('id');
		if ( activated > deactivated) {
			jQuery(idNumber).show("slide", {direction: "up" }, 200 );
			console.log('bigger');
		}
		if ( activated < deactivated) {
			jQuery(idNumber).show("slide", {direction: "down" }, 200 );
			console.log('smaller');
		}
		else {
			jQuery(idNumber).show();
		}
	});
});																								
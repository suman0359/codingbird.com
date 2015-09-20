function clear_cart() {
	var result = confirm('Are you sure want to clear all bookings?');
	
	if(result) {
		window.location = "<?php echo base_url(); ?>cart/remove/all";
	}else{
		return false; // cancel button
	}
}
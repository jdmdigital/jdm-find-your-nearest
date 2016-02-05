var geo = new google.maps.Geocoder;
jQuery(document).ready(function() {
	jQuery('#update_latlong').click(function() {
		var address = jQuery('#fyn_postalcode').val();
		var region = countrycode;
        address = address + ', ' + region;
		geo.geocode({'address':address,'region':region},function(results, status){
			if (status == google.maps.GeocoderStatus.OK) {
				var point = results[0].geometry.location;
				jQuery('#aphs_FYN_latitude').val(point.lat());
				jQuery('#aphs_FYN_longitude').val(point.lng());
			} else {
				alert("Geocode was not successful for the following reason: " + status);
			}
		});
		return false;
	});
});
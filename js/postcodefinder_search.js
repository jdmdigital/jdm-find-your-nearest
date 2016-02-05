var geoSearch = new google.maps.Geocoder;

jQuery(document).ready(function() {

	var address = jQuery('#fyn_postalcode').val();

	if(jQuery.type( address ) === "string"){

		var region = FYN_search.countrycode;

        address = address + ', ' + region;

		geoSearch.geocode({'address':address,'region':region},function(results, status){

			if (status == google.maps.GeocoderStatus.OK) {

				var point = results[0].geometry.location;

				var data={

					action:'return_search_results',

					lat:point.lat(),

					lng:point.lng()

				}

				if (jQuery('#aphsfyntagsearch').length > 0){

					data['aphsfyntagsearch']=jQuery('#aphsfyntagsearch').val()

				}

				if (jQuery('#aphsfyntaglistsearch').length > 0){

					data['aphsfyntaglistsearch']=jQuery('#aphsfyntaglistsearch').val()

				}

				if (jQuery('#fyn_show_within_distance').length > 0){

					data['fyn_show_within_distance']=jQuery('#fyn_show_within_distance').val()

				}

				jQuery.post(FYN_search.ajaxurl, data, function(returndata){

					jQuery('#search_results').html(returndata);

					var FYN_resultsmarkers="";

					if(FYN_search.displaymap){

						var map = jQuery('#FYN_display_results_map').gMap({

							latitude:               point.lat(),

							longitude:              point.lng(),

							zoom:                   10,

							markers:                [{

													latitude: point.lat(),

													longitude: point.lng(),

													html: address,

													icon:	{

															image:"http://labs.google.com/ridefinder/images/mm_20_white.png",

															iconsize: [26, 46],

															iconanchor: [12,46]

															}

													}]

						});

						jQuery( "span.FYN_viewmap" ).each(function( index ) {

							var html ="<a href='" + jQuery(this).attr('data-permalink') + "'>" + jQuery(this).attr('data-title') + "</a>";

							jQuery('#FYN_display_results_map').gMap('addMarker',

								{

									latitude:  jQuery(this).attr('data-lat'),

									longitude: jQuery(this).attr('data-lng'),

									content: html

								}

							);

						});

					}

				});



			} else {

				alert("Geocode was not successful for the following reason: " + status);

			}

		});

	}



	jQuery( "#search_results" ).on( "click",".FYN_viewmap", function() {

		jQuery( "#FYN-viewmap-dialog" ).dialog( "open" );

		//now use ajax call to get postcode, title and lat long data from ID

		var data={

			action:'return_post_data',

			postID:jQuery(this).attr('id')

		}

		jQuery.getJSON(FYN_search.ajaxurl, data, function(locationdata){

			jQuery('#FYN_map').gMap({

				latitude:               locationdata.latitude,

				longitude:              locationdata.longitude,

				zoom:                   13,

				markers:                [{latitude: locationdata.latitude, longitude: locationdata.longitude, html: locationdata.title+', '+locationdata.postcode}],

				controls: {

					panControl: true,

					zoomControl: true,

					mapTypeControl: true,

					scaleControl: true,

					streetViewControl: false,

					overviewMapControl: false

				}

			});

		});

	});






	var wWidth = jQuery(window).width();
	jQuery( "#FYN-viewmap-dialog" ).dialog({

		dialogClass: 'wp-dialog',

		autoOpen: false,

		height: 450,

		width: wWidth * 0.8,

		modal:true

	});

});


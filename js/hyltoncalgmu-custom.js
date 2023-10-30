/* hyltoncalgmu custom scripts */

jQuery(document).ready(function(){

	// Debug
	//alert('custom js file loaded');

	// Fix href of site logo to go back to main Hylton site
	jQuery(".site-logo a").prop("href", "https://hyltoncenter.org")

	// Fix text of event details buttons for all the veterans and the arts initiative events
	jQuery('.event-entry.event-group-veterans-and-the-arts-initiative .event_details_button a').text('Register');

	// ...but not for some specific events
	jQuery('.event-entry-the-u-s-army-blues-veterans-tribute .event_details_button a').text('Get Tickets');
	jQuery('.event-entry-the-u-s-army-band-star-spangled-spectacular-with-christopher-jackson .event_details_button a').text('Get Tickets');

	// Fix text of event details buttons for the gallery exhibitions
	jQuery('.event-entry-gallery-exhibit-bennie-herron-zero-and-one .event_details_button a').text('Learn More');
	jQuery('.event-entry-gallery-exhibit-elizabeth-hall-viriditas .event_details_button a').text('Learn More');
	jQuery('.event-entry-11th-annual-prince-william-county-public-schools-student-exhibition .event_details_button a').text('Learn More');
	jQuery('.event-entry-eric-garner-multiple-repeat-mistakes .event_details_button a').text('Learn More');
	jQuery('.event-entry-patricia-underwood-signs-amp-symbols .event_details_button a').text('Learn More');

});

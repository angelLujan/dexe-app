var map, draggable;
$(document).ready(function () {
	google.maps.event.addDomListener(window, 'load', initialize);
});

function initialize() {	
	if( $('#googleMap').attr('fracc') == 'alcantara' ) {
		var $lat = 28.648836,
			$long = -106.149957,
			$title = 'Puente romano de Alcántara';
	} else if( $('#googleMap').attr('fracc') == 'victoria' ) {
		var $lat = 28.593503,
			$long = -106.154885,
			$title = 'Cerrada Victoria';
	}
	
	var map_canvas = document.getElementById('googleMap');

	var map_options = {
		center: new google.maps.LatLng($lat, $long),
		zoom: 15,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		scrollwheel: false,
		draggable: !("ontouchend" in document)
	};

	map = new google.maps.Map(map_canvas, map_options);

	var marker = new google.maps.Marker({
		position: new google.maps.LatLng($lat, $long),
		map: map,
		title: $title
	});
}
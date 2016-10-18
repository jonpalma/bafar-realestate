var map, draggable;
$(document).ready(function () {
	google.maps.event.addDomListener(window, 'load', initialize);
});

function initialize() {
	if( $('#googleMap').attr('position') == 'real-estate' ) {
		var $lat = 28.582263,
			$long = -106.119934,
			$title = 'Bafar Real Estate';
	}
	
	var map_canvas = document.getElementById('googleMap');

	var map_options = {
		center: new google.maps.LatLng(($lat+0.01000), $long),
		zoom: 15,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		scrollwheel: false,
        streetViewControl: false,
		//draggable: !("ontouchend" in document)
	};

	map = new google.maps.Map(map_canvas, map_options);

	var marker = new google.maps.Marker({
		position: new google.maps.LatLng($lat, $long),
		map: map,
		title: $title,
		url: 'http://maps.google.com/maps?q=loc:'+String($lat)+','+String($long)
	});
	
	google.maps.event.addListener(marker, 'click', function() {
		/*window.location.href = this.url;*/
		window.open(this.url,'_blank');
	});
}
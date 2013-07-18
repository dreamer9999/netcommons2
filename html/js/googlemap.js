var my_google_map;
var my_google_geo;

function googlemap_init( id_name, addr_name, lat, lng, cowname) {
		if(lat == ''){
		    var latlng = new google.maps.LatLng(41, 133);
		} else {
		    var latlng = new google.maps.LatLng(35.678697,139.782142);
		}
		    var opts = {
		        zoom: 17,
		        mapTypeId: google.maps.MapTypeId.ROADMAP,
		        center: latlng
		    };
		    my_google_map = new google.maps.Map(document.getElementById(id_name), opts);
		    my_google_geo = new google.maps.Geocoder();

		if(lat == 0){
		    var req = {
		        address: addr_name ,
		    };
		    my_google_geo.geocode(req, geoResultCallback);
		} else {
			var marker = new google.maps.Marker({
			    position: latlng,
			    map: my_google_map,
			    title:cowname
			    });
		}
}


function geoResultCallback(result, status) {
    if (status != google.maps.GeocoderStatus.OK) {
        alert(status);
    return;
    }
    var latlng = result[0].geometry.location;
    my_google_map.setCenter(latlng);
    var marker = new google.maps.Marker({position:latlng, map:my_google_map, title:latlng.toString(), draggable:true});
    google.maps.event.addListener(marker, 'dragend', function(event){
        marker.setTitle(event.latLng.toString());
    });
}
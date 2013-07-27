var my_google_map;
var my_google_geo;

var glat;
var glng;

function googlemap_init_all( id_name, addr_name, lat, lng, cowname) {
		my_google_geo = new google.maps.Geocoder();

		glat = 0;
		glng = 0;
		if(lat == ''){
			my_google_geo.geocode(
			  {
			    'address': '東京都江東区豊洲3-3-3',
			    'language': 'ja'
			  },
			  function(results, status){
			    if(status==google.maps.GeocoderStatus.OK){
			       var p = results[0].geometry.location;
			        glatlng[0] = p.lat();
			        glatlng[1] = p.lng();
alert(glatlng[0]);
alert(glatlng[1]);
			    }
			  }
			);
		}
alert('here3');
lert(glatlng[0] + ',' + glatlng[1]);
		var latlng = new google.maps.LatLng(lat,lng);

		var opts = {
			zoom: 17,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			center: latlng
		};
		my_google_map = new google.maps.Map(document.getElementById(id_name), opts);

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

function googlemap_init( id_name, addr_name, lat, lng, cowname) {
		if(lat == ''){
		    var latlng = new google.maps.LatLng(41, 133);
		} else {
		    var latlng = new google.maps.LatLng(lat,lng);
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


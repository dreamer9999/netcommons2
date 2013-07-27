var my_google_map;
var my_google_geo;

var glat = new Array();
var glng = new Array();
var lists = new Array();
var gi;

function googlemap_init_alltest( id_name, addr_name, lat, lng, cowname) {
		my_google_geo = new google.maps.Geocoder();
		data = new Array() 
		i = 0;
		gi = -1;
		data = new Array("Dol'sDessin", "東京都港区南青山5−12−5","");
		lists[i] = data;
		i++;
		data = new Array("CONNECTING THE DOTS", "東京都渋谷区神南1-20-7","");
		lists[i] = data;
		i++;
		data = new Array("PAX Coworking", "東京都世田谷区経堂1－25－18","");
		lists[i] = data;
		i++;
		data = Array("下北沢オープンソースcafé", "東京都世田谷区代田6-11-14","");
		lists[i] = data;
		i++;
		data = Array("ネコワーキング", "東京都千代田区三崎町３－１０－５","");
		lists[i] = data;
		i++;
		data = Array("CERO", "東京都千代田区神田佐久間町１－１４","");
		lists[i] = data;
		i++;
		data = Array("コワーキングスペース茅場町 Co-Edo", "東京都中央区新川1-3-4","");
		lists[i] = data;
		last = i;
		i++;
		max = i;
		for (var i = 0; i < max; i++) {
			data = new Array();
			data = lists[i];
			alert('name=' + data[0] + ' address=' + data[1] + ' i=' + i + ' last=' + last);
			//if(lat == ''){
				my_google_geo.geocode(
				  {
				    'address': data[1],
				    'language': 'ja'
				  },
				  function(results, status){
				    if(status==google.maps.GeocoderStatus.OK){
				       var p = results[0].geometry.location;
						make_all_map_test_pre(p.lat(), p.lng(), last);
				    }
				  }
				);
			//}
		}
}

function make_all_map_test_pre(lat, lng, last)
{
alert('max ' + max);
gi++;
	glat[gi] = lat;
	glng[gi] = lng;
	// 全てのlatlngが取得されたかどうか？
	if(gi == last){
		alert('last');
		max = last + 1;
		make_all_map_test(max);
	} else {
	}
}

function make_all_map_test(max)
{
		last = max - 1;

		var latlng = new google.maps.LatLng(glat[last],glng[last]);

		var opts = {
			zoom: 17,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			center: latlng
		};
		id_name = 'google_map';

		my_google_map = new google.maps.Map(document.getElementById(id_name), opts);

		for (var i = 0; i < max; i++) {
			data = new Array();
			data = lists[i];
			var mlatlng = new google.maps.LatLng(glat[i],glng[i]);
			var marker = new google.maps.Marker({
				position: mlatlng,
				map: my_google_map,
				title:data[0]
				});
		}
}



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
			        glat = p.lat();
			        glng = p.lng();
					make_all_map(glat, glng);
			    }
			  }
			);
		}
}

function make_all_map(glat, glng)
{
		var latlng = new google.maps.LatLng(glat,glng);

		var opts = {
			zoom: 17,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			center: latlng
		};
		id_name = 'google_map';

		my_google_map = new google.maps.Map(document.getElementById(id_name), opts);

		if(glat == 0){
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


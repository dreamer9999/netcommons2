var my_google_map;
var my_google_geo;

var glat = new Array();
var glng = new Array();
var cowname = new Array();
var content_id = new Array();
var detail_url = new Array();
var gi;


function googlemap_init_all(id_name) {
	my_google_geo = new google.maps.Geocoder();
	gi = -1;
	max = item_last -1;
console.log('item_last = ' + item_last);
	for (i = 0; i < item_last; i++){
		var each_item = item[i];
		cowname[i] = each_item[1];
		content_id[i] = each_item[0];
		detail_url[i] = each_item[4];
		make_all_map_pre(each_item, max);
	}

}

function make_all_map_pre(data, max)
{
	gi++;
	var latlng = data[3].split('|');
	glat[gi] = latlng[0];
	glng[gi] = latlng[1];
	
	if(gi == max){
		make_all_map(max);
	} else {
	}
}

function make_all_map(max)
{
//console.log('last ' + last);

		var latlng = new google.maps.LatLng(glat[max],glng[max]);
//console.log('glatlast ' + glat[last]);
//console.log('glnglast ' + glng[last]);

		var opts = {
			zoom: 13,
			mapTypeId: google.maps.MapTypeId.ROADMAP,
			center: latlng
		};
		id_name = 'google_map';

		my_google_map = new google.maps.Map(document.getElementById(id_name), opts);

		for (var i = 0; i <= max; i++) {
console.log('cownamesss ' + cowname[i]);
//console.log('glat ' + glat[i]);
//console.log('glng ' + glng[i]);
			var mlatlng = new google.maps.LatLng(glat[i],glng[i]);
			var marker = new google.maps.Marker({
				position: mlatlng,
				map: my_google_map,
				title:htmlspecialstrars_decode(cowname[i]),
				});
			attachMessage(marker, "<a href='" + detail_url[i] + "'>" + htmlspecialstrars_decode(cowname[i]) + "</a>");
			// clickイベントを取得するListenerを追加
		//	google.maps.event.addListener(marker, 'click', clickEventFunc);
		}
}

function clickEventFunc(event) {
  alert(event.content());
}
 function attachMessage(marker, msg) {
    google.maps.event.addListener(marker, 'click', function(event) {
      new google.maps.InfoWindow({
        content: msg
      }).open(marker.getMap(), marker);
    });
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

function htmlspecialstrars_decode(str) {
	str = str.replace("&amp;","&");
	str = str.replace("&quot;",'"');
	str = str.replace("&#039;","'");
	str = str.replace("&lt;","<");
	str = str.replace("&gt;",">");
	return str;
}

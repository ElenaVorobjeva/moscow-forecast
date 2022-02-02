function initMap() {
	var meteoCenterCoord = new google.maps.LatLng(55.752592, 37.615702);
    var meteoMapOptions = {
		zoom: 10,
		center: meteoCenterCoord,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
        streetViewControl: false,
        mapTypeControl: false,
        fullscreenControl: true
 	};
    var aeroCenterCoord = new google.maps.LatLng(54.300408, 35.530106);
    var aeroMapOptions = {
		zoom: 6,
		center: aeroCenterCoord,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
        streetViewControl: false,
        mapTypeControl: false,
        fullscreenControl: true
 	};
    var coords = [];
    var lMeteoMap, rMeteoMap, lAeroMap, rAeroMap, meteoMap, aeroMap;

	var newTitle;

    if($("#l_meteo_map").length) lMeteoMap = new google.maps.Map(document.getElementById("l_meteo_map"), meteoMapOptions);
	if($("#r_meteo_map").length) rMeteoMap = new google.maps.Map(document.getElementById("r_meteo_map"), meteoMapOptions);
    if($("#l_aero_map").length) lAeroMap = new google.maps.Map(document.getElementById("l_aero_map"), aeroMapOptions);
    if($("#r_aero_map").length) rAeroMap = new google.maps.Map(document.getElementById("r_aero_map"), aeroMapOptions);
	if($("#meteo_map").length) meteoMap = new google.maps.Map(document.getElementById("meteo_map"), meteoMapOptions);
	if($("#aero_map").length) aeroMap = new google.maps.Map(document.getElementById("aero_map"), aeroMapOptions);

    $.ajax({
        type: "POST",
        url: "php/gmap/meteoCoords.php"
    }).done(function(result) {
        coords = JSON.parse(result);
        $.each(coords, function(i, item){
    		var marker = new google.maps.Marker({
    			position: new google.maps.LatLng(item.lat, item.lng),
    			map: lMeteoMap,
    			title: item.title
    		});
    		google.maps.event.addListener(marker, 'click', function() {
    			l_show(item.domen, item.point);
    		});
    	});
    });

    $.ajax({
        type: "POST",
        url: "php/gmap/aeroCoords.php"
    }).done(function(result) {
        coords = JSON.parse(result);
        $.each(coords, function(i, item){
    		var marker = new google.maps.Marker({
    			position: new google.maps.LatLng(item.lat, item.lng),
    			map: lAeroMap,
				title: item.title
    		});
    		google.maps.event.addListener(marker, 'click', function() {
    			l_show(item.point);
    		});
    	});
        $.each(coords, function(i, item){
    		var marker = new google.maps.Marker({
    			position: new google.maps.LatLng(item.lat, item.lng),
    			map: rAeroMap,
				title: item.title
    		});
    		google.maps.event.addListener(marker, 'click', function() {
    			r_show(item.point);
    		});
    	});
		$.each(coords, function(i, item){
    		var marker = new google.maps.Marker({
    			position: new google.maps.LatLng(item.lat, item.lng),
    			map: aeroMap,
				title: item.title
    		});
    		google.maps.event.addListener(marker, 'click', function() {
    			showAerodiagram(item.point);
    		});
    	});
    });
}

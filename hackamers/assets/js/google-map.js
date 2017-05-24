var myCenter = new google.maps.LatLng(45.550405, -73.555608);

function initialize() {
    var mapProp = {
        center: myCenter,
        scrollwheel: true,
        zoom: 16,
        zoomControl: true,
        mapTypeControl: false,
        streetViewControl: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        styles: [{
            "featureType": "landscape",
            "stylers": [{
                "color": "#fff"
            }, {
                "visibility": "on"
            }]
        }, {
            "featureType": "poi",
            "stylers": [{
                "saturation": -100,
                "color": "#14adf4"
            }, {
                "lightness": 10
            }, {
                "visibility": "on"
            }]
        }, {
            "featureType": "road.highway",
            "stylers": [{
                "color": "#f0ede5"
            }, {
                "visibility": "on"
            }]
        }, {
            "featureType": "road.arterial",
            "stylers": [{
                "color": "#fff"
            }, {
                "visibility": "on"
            }]
        }, {
            "featureType": "road.local",
            "stylers": [{
                "color": "#999999"
            }, {
                "visibility": "simplified"
            }]
        }, {
            "featureType": "transit",
            "stylers": [{
                "saturation": -100
            }, {
                "visibility": "simplified"
            }]
        }, {
            "featureType": "administrative.province",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "water",
            "elementType": "labels",
            "stylers": [{
                "visibility": "on"
            }, {
                "color": "#ed734e"
            }]
        }, {
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [{
                "color": "#37BDD8"
            }, {
                "visibility": "on"
            }]
        }]
    };

    var map = new google.maps.Map(document.getElementById("gmap"), mapProp);
    var image = 'https://4.bp.blogspot.com/-r8wyL8Asb6k/WIoMqsOAotI/AAAAAAAAAKk/YDOemVcuOgIPSjh5OCQMvEYQno1vGllcACLcB/s1600/map.png';

    var marker = new google.maps.Marker({
        position: myCenter,
        icon: image
    });

    marker.setMap(map);


}

google.maps.event.addDomListener(window, 'load', initialize);

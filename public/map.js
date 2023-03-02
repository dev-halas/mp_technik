let map; 

function initMap() {
    const pinMap = { lat: 51.95050902270288, lng: 17.532303923167458 };
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 13,
      center: pinMap,
      disableDefaultUI: true,
      styles: [
        {
            "featureType": "all",
            "elementType": "labels.text.fill",
            "stylers": [
                {
                    "color": "#ffffff"
                }
            ]
        },
        {
            "featureType": "all",
            "elementType": "labels.text.stroke",
            "stylers": [
                {
                    "color": "#000000"
                },
                {
                    "lightness": 13
                }
            ]
        },
        {
            "featureType": "administrative",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "color": "#000000"
                }
            ]
        },
        {
            "featureType": "administrative",
            "elementType": "geometry.stroke",
            "stylers": [
                {
                    "color": "#144b53"
                },
                {
                    "lightness": 14
                },
                {
                    "weight": 1.4
                }
            ]
        },
        {
            "featureType": "landscape",
            "elementType": "all",
            "stylers": [
                {
                    "color": "#08304b"
                }
            ]
        },
        {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#0c4152"
                },
                {
                    "lightness": 5
                }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "color": "#000000"
                }
            ]
        },
        {
            "featureType": "road.highway",
            "elementType": "geometry.stroke",
            "stylers": [
                {
                    "color": "#0b434f"
                },
                {
                    "lightness": 25
                }
            ]
        },
        {
            "featureType": "road.arterial",
            "elementType": "geometry.fill",
            "stylers": [
                {
                    "color": "#000000"
                }
            ]
        },
        {
            "featureType": "road.arterial",
            "elementType": "geometry.stroke",
            "stylers": [
                {
                    "color": "#0b3d51"
                },
                {
                    "lightness": 16
                }
            ]
        },
        {
            "featureType": "road.local",
            "elementType": "geometry",
            "stylers": [
                {
                    "color": "#000000"
                }
            ]
        },
        {
            "featureType": "transit",
            "elementType": "all",
            "stylers": [
                {
                    "color": "#146474"
                }
            ]
        },
        {
            "featureType": "water",
            "elementType": "all",
            "stylers": [
                {
                    "color": "#021019"
                }
            ]
        }
    ]
    
    
  
    });
    const contentString =
      '<div id="mapContent">' +
      'MP-Technik' + '<br>' +
      'Witaszyczki 26, ' + '<br>' +
      '63-230 Witaszyce' +
      "</div>";
  
    const infowindow = new google.maps.InfoWindow({
      content: contentString,
      maxWidth: 300,
    });
  

    

    const icon = {
        path: "M65.9,0A31.765,31.765,0,0,0,43.443,54.23L65.9,76.247,88.372,54.226A31.766,31.766,0,0,0,65.9,0Zm0,47.654A15.885,15.885,0,1,1,81.789,31.769,15.884,15.884,0,0,1,65.9,47.654Z",
        fillColor: '#3592ee',
        strokeWeight: 0,
        fillOpacity: 1, 
        anchor: new google.maps.Point(64, 78),
    };
  
    const marker = new google.maps.Marker({
      position: pinMap,
      map,
      icon: icon,
      title: "MP-technik",
    });
  
    marker.addListener("click", () => {
      infowindow.open({
        anchor: marker,
        map,
        shouldFocus: false,
      });
    });
}
  
'use strict';

function initMap() {
  var options = {
    zoom: 14,
    center:{lat:45.556175, lng:18.685048}
  };
  var map = new google.maps.Map(document.getElementById('mapaSkole'), options);

  var marker = new google.maps.Marker({
    position:{lat:45.557195, lng:18.695061},
    map:map
  });
  
  var infoWindow = new google.maps.InfoWindow({
    content: '<p>Elektrotehnička i prometna škola Osijek</p>'
  });

  marker.addListener('click', function() {
    infoWindow.open(map, marker);
  })
}
  
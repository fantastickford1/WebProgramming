function initMap() {
  var school = {lat: 16.749161, lng: -93.098996};
  var home = {lat: 16.748447, lng: -93.162560};

  var map = new google.maps.Map(document.getElementById('mapa'), {
    center: school,
    scrollwheel: false,
    zoom: 7
  });

  var directionsDisplay = new google.maps.DirectionsRenderer({
    map: map
  });

  // Set destination, origin and travel mode.
  var request = {
    destination: home,
    origin: school,
    travelMode: google.maps.TravelMode.DRIVING
  };

  // Pass the directions request to the directions service.
  var directionsService = new google.maps.DirectionsService();
  directionsService.route(request, function(response, status) {
    if (status == google.maps.DirectionsStatus.OK) {
      // Display the route on the map.
      directionsDisplay.setDirections(response);
    }
  });
}
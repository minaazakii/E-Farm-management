let poly;
        let map;
        let points = [];

        function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
            zoom: 8,
            center: { lat:30.06263, lng: 31.24967},
            mapTypeId:'satellite'
        });
        poly = new google.maps.Polyline({
            strokeColor: "red",
            strokeOpacity: 1.0,
            strokeWeight: 3,
            fillColor: "#FF0000",
            fillOpacity: 0.35,

        });
        poly.setMap(map);

        map.addListener("click", addLatLng);
        }


        function addLatLng(event) {
        const path = poly.getPath();

        path.push(event.latLng);
        points.push({lat:event.latLng.lat(),lng:event.latLng.lng()});
        new google.maps.Marker({
            position: event.latLng,
            title: "#" + path.getLength(),
            map: map,
            icon:'/assets/photos/tree.svg'
        });
        }

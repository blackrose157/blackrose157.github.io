            <script>
    var map = new google.maps.Map(document.getElementById('map'), {
        center: new google.maps.LatLng(30.66591682427778, 30.745468196076786),
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        zoom: 8
    });

    var locations = [
        new google.maps.LatLng(31.1977585, 29.887203099999965),
		new google.maps.LatLng(29.93954362819143, 32.56146079877658),
		new google.maps.LatLng(31.1977585, 29.887203099999965),
        new google.maps.LatLng(31.456538028317933, 31.76091310898437])
        // and additional coordinates, just add a new item
    ];

    locations.forEach(function (location) {
        var marker = new google.maps.Marker({
            position: location,
            map: map
        });
    });
</script>
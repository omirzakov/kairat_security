DG.then(function() {
    var map = DG.map('map', {
        center: [43.21234272, 76.89853013],
        zoom: 15
    });

    DG.marker([54.98, 82.89]).addTo(map).bindPopup('Я попап!');
});
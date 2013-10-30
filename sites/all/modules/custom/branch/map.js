var map;
function initialize() {
    var address = document.getElementById('branch_address').value;
    var myLatlng = '';
    geocoder = new google.maps.Geocoder();
    geocoder.geocode( {
        'address': address
    }, function(results, status){
        myLatlng = results[0].geometry.location;
        var myOptions = {
            zoom: 12,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var myOptions = {
            zoom: 12,
            center: myLatlng,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

                    

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title:"Hello World!"
        });
    });
//codeAddress();
//var myLatlng = new google.maps.LatLng(-25.363882,131.044922);
                
//                google.maps.event.addListener(marker, 'click', function() {
//                    map.setZoom(10);
//                });
}

$(document).ready(function() {
    initialize();
});
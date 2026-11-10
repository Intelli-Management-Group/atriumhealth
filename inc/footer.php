<!-- Footer -->
    <footer id="footer" class="footer-fixed bg-dark dark">
        <div class="container">
            <p class="footer">© Copyright <?= date("Y"); ?> Atrium Senior Residential Living. All Rights Reserved. &nbsp; &nbsp; &nbsp; Designed by <a href="http://www.intellimanagement.com" target="new" style="text-decoration:none; color:#b1b7ff">Intelli Management Group</a></p>
        </div>
    </footer>
<!-- Footer / End -->


</div>


<!-- JS Plugins -->
<script src="assets/plugins/jquery/dist/jquery.min.js"></script>
<script src="assets/plugins/animsition/dist/js/animsition.min.js"></script>
<script src="assets/plugins/tether/dist/js/tether.min.js"></script>
<script src="assets/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="assets/plugins/slick-carousel/slick/slick.min.js"></script>
<script src="assets/plugins/jquery.appear/jquery.appear.js"></script>
<script src="assets/plugins/jquery.scrollto/jquery.scrollTo.min.js"></script>
<script src="assets/plugins/jquery.localscroll/jquery.localScroll.min.js"></script>
<!--<script src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>-->
<script src="assets/plugins/waypoints/lib/jquery.waypoints.min.js"></script>
<script src="assets/plugins/photoswipe/dist/photoswipe.min.js"></script>
<script src="assets/plugins/photoswipe/dist/photoswipe-ui-default.min.js"></script>
<script src="assets/plugins/twitter-fetcher/js/twitterFetcher_min.js"></script>

<!-- JS Core -->
<script src="assets/js/core.min.js"></script>
<!--<script src="assets/js/timber.master.min.js"></script>-->


<script>
    // jQuery(function($) {
    //     // Asynchronously Load the map API
    //     var script = document.createElement('script');
    //     script.src = "//maps.googleapis.com/maps/api/js?key=AIzaSyAYS9mF0nSvO_nUlag1oCMRnbR14hjMtQo&sensor=false&callback=initialize";
    //     document.body.appendChild(script);
    // });
    //
    // function initialize() {
    //     var map;
    //     var bounds = new google.maps.LatLngBounds();
    //     var mapOptions = {
    //         mapTypeId: 'roadmap'
    //     };
    //
    //     // Display a map on the page
    //     map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
    //     map.setTilt(45);
    //
    //     // Multiple Markers
    //     var markers = [
    //         ['Hamilton,Richmond', 49.176677,-122.96963],
    //         ['Shuswap Lodge Retirement Residence, Salmon Arm', 50.699647,-119.287547],
    //         ['Richmond Center, Richmond', 49.165921,-123.1388]
    //     ];
    //
    //     // Info Window Content
    //     var infoWindowContent = [
    //         ['<div class="info_content">' +
    //         '<h3>Hamilton - High Street Residence</h3>' +
    //         '</div>'],
    //         ['<div class="info_content">' +
    //         '<h3>Shuswap Lodge Retirement Residence</h3>' +
    //         '</div>'],
    //         ['<div class="info_content">' +
    //         '<h3>Richmond Center</h3>' +
    //         '</div>']
    //     ];
    //
    //     // Display multiple markers on a map
    //     var infoWindow = new google.maps.InfoWindow(), marker, i;
    //
    //     // Loop through our array of markers & place each one on the map
    //     for( i = 0; i < markers.length; i++ ) {
    //         var position = new google.maps.LatLng(markers[i][1], markers[i][2]);
    //         bounds.extend(position);
    //         marker = new google.maps.Marker({
    //             position: position,
    //             map: map,
    //             title: markers[i][0]
    //         });
    //
    //         // Allow each marker to have an info window
    //         google.maps.event.addListener(marker, 'click', (function(marker, i) {
    //             return function() {
    //                 infoWindow.setContent(infoWindowContent[i][0]);
    //                 infoWindow.open(map, marker);
    //             }
    //         })(marker, i));
    //
    //         // Automatically center the map fitting all markers on the screen
    //         map.fitBounds(bounds);
    //     }
    //
    //     // Override our map zoom level once our fitBounds function runs (Make sure it only runs once)
    //     var boundsListener = google.maps.event.addListener((map), 'bounds_changed', function(event) {
    //         this.setZoom(7);
    //         google.maps.event.removeListener(boundsListener);
    //     });
    //
    // }
//

    $(window).on('load', function(){
    // PAGE IS FULLY LOADED
    // FADE OUT YOUR OVERLAYING DIV
    $('#overlay').fadeOut();
});
</script>
</body>
</html>

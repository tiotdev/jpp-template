console.log("test");
jQuery(document).ready(function () {

    jQuery(document).keydown(function(e) {
        var url = false;
        if (e.which == 37) {  // Left arrow key code
            url = jQuery('.next a').attr('href');
        }
        else if (e.which == 39) {  // Right arrow key code
            url = jQuery('.prev a').attr('href');
        }
        if (url) {
            window.location = url;
        }
    });
 });
(function($) {
$(function() {
$('a[href*=#]:not([href=#])').click(function() {
if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
var target = $(this.hash);
target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
if (target.length) {
$('html,body').animate({
scrollTop: target.offset().top
}, 1000);
return false;
}
}
});
});
})(jQuery);

    jQuery(function ($) {
        function init_map1() {
            var myLocation = new google.maps.LatLng(48.75942, 8.24233);
            var mapOptions = {
                center: myLocation,
                zoom: 16
            };
            var marker = new google.maps.Marker({
                position: myLocation,
                title: "Property Location"
            });
            var map = new google.maps.Map(document.getElementById("map1"),
                mapOptions);
            marker.setMap(map);
        }
        init_map1();
    });

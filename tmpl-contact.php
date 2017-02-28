<?php
/**
* Template Name: Contact Template With Google Map
*/
?>
<?php while (have_posts()) : the_post(); ?>
<div class="ps">
  <div class="row">
    <div class="columns">
      <h1 class="heading__title"><?php the_title(); ?></h1>
      <hr>
    </div>
  </div>
  <?php the_content(); ?>
</div>
<div class="ps ps--opaque aps--notop">
  <div class="row">
    <div class="columns">
      <div class="mapcanvas" id="mapcanvas"></div>
    </div>
  </div>
</div>


<!-- Google MAps -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDT99lOn79TnwKX53VjwYSfmFvz97OYpwA"></script>
<script>
  function initialize() {
    var mapOptions = {
      center: new google.maps.LatLng(47.494974, 19.060063),
      zoom: 16,
      zoomControl: true,
      zoomControlOptions: {style: google.maps.ZoomControlStyle.DEFAULT,},
      disableDoubleClickZoom: false,
      mapTypeControl: true,
      mapTypeControlOptions: {style: google.maps.MapTypeControlStyle.DROPDOWN_MENU,},
      scaleControl: true,
      scrollwheel: false,
      streetViewControl: true,
      draggable: true,
      overviewMapControl: true,
      overviewMapControlOptions: {opened: false,},
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      styles: [{featureType: "landscape",stylers: [{saturation: -100}, {lightness: 65}, {visibility: "on"}]}, {featureType: "poi",stylers: [{saturation: -100}, {lightness: 51}, {visibility: "simplified"}]}, {featureType: "road.highway",stylers: [{saturation: -100}, {visibility: "simplified"}]}, {featureType: "road.arterial",stylers: [{saturation: -100}, {lightness: 30}, {visibility: "on"}]}, {featureType: "road.local",stylers: [{saturation: -100}, {lightness: 40}, {visibility: "on"}]}, {featureType: "transit",stylers: [{saturation: -100}, {visibility: "simplified"}]}, {featureType: "administrative.province",stylers: [{visibility: "off"}]/** /},{featureType: "administrative.locality",stylers: [{ visibility: "off" }]},{featureType: "administrative.neighborhood",stylers: [{ visibility: "on" }]/**/}, {featureType: "water",elementType: "labels",stylers: [{visibility: "on"}, {lightness: -25}, {saturation: -100}]}, {featureType: "water",elementType: "geometry",stylers: [{hue: "#ffff00"}, {lightness: -25}, {saturation: -97}]}],
    }
    map = new google.maps.Map(document.getElementById('mapcanvas'), mapOptions);
    //var image = '<?php echo get_stylesheet_directory_uri(); ?>/assets/img/flag.png';
    var myLatLng = new google.maps.LatLng(47.494974, 19.060063);
    var officeMarker = new google.maps.Marker({
      position: myLatLng,
      map: map,
      //icon: image,
      animation: google.maps.Animation.DROP,
    });
    //officeMarker.setAnimation(google.maps.Animation.BOUNCE);
   }
  google.maps.event.addDomListener(window, 'load', initialize);
</script>
<?php endwhile; ?>
<?php get_template_part('templates/sticky', 'block'); ?>
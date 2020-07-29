<!DOCTYPE html>
<html>
<head>
<body>
      <div id="googleMap" style="width:100%;height:400px; margin-bottom: 30px;">
      </div>
            <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBKq8zaO_1i-qBD5PPebuduRU_LmFQSQeI&callback=initMap"></script>
           <!--   <script async="" defer="" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyADersOOu6Q8077as-3o0WuF0Se1zHIe8I&callback=initMap"></script>-->

<script src="assets/js/lib/jquery.validate.js"></script> 
<script src="http://maps.googleapis.com/maps/api/js"></script>
<script>
function initialize() {
  var propertiPeta = {center:new google.maps.LatLng(-7.7722039,110.4045707), zoom:19, mapTypeId:google.maps.MapTypeId.ROADMAP};
  var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);
  
  // membuat Marker
  var marker=new google.maps.Marker({position: new google.maps.LatLng(-7.7722039,110.4045707),map: peta});
}
// event jendela di-load  
google.maps.event.addDomListener(window, 'load', initialize);
</script>
  
</head>
</body>
</html>
<?php
  $title = 'Kontakt';
  $keywords = 'Kontakt';
  $description = 'Kontakt';
  include '../include/header.php';
?>

<div class="row white">
  <div class="wrapper">
    <div class="content fw">

      <div class="bread-crumbs fw">
        <ul>
          <li><a href="home.php">Naslovna</a></li>
          <li>Kontakt</li>
        </ul>
      </div><!-- end of .bread-crumbs -->

      <h1>Kontakt</h1>

      <div class="section group">
        <div class="kontakt-info col col_6">
          <p>Zipline Čikola nalazi se u kanjonu rijeke Čikole,<br> na županijskoj cesti 6078 Ključ - Pakovo Selo
          Kaočine,  kod škole Kulušići 20, 22320 Drniš</p>
          <p>t. + 385 98 442 255</p>
          <p>e. <a href="mailto:zipline.cikola@gmail.com">zipline.cikola@gmail.com</a></p>
          <p>e. <a href="mailto:zadruga@miljevci.com">zadruga@miljevci.com</a></p>
          <p>w. <a href="http://www.ziplinecikola.com">www.ziplinecikola.com</a></p>

        </div><!-- end of .kontakt-info -->

        <div id="kontakt-forma" class="col col_6">

          <form id="forma" name="forma" method="post" action="">

            <input name="ime_i_prezime" type="text" class="" id="" value="" placeholder="Ime i prezime *"/>

            <input name="email" type="text" class="" id="" value="" placeholder="Email *"/>

            <textarea name="poruka" class="" id="poruka" cols="" rows="7" placeholder="Poruka"></textarea>

            <input name="kod" type="text"  class="" id="kod" placeholder="Zbroji 7+8 *"/>


            <input type="submit" class="btn send" name="posalji_upit" value="Pošaljite poruku" />
          </form>

        </div><!-- end of #kontakt-forma -->
      </div><!-- end of .section -->

    </div><!-- end of .content -->
  </div><!-- end of .wrapper -->
</div><!-- end of .white -->

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript">
  google.maps.event.addDomListener(window, 'load', init);

  function init() {
      var mapOptions = {
          zoom: 11,
          center: new google.maps.LatLng(43.839995,16.063647),
          styles: [{"featureType":"all","elementType":"geometry","stylers":[{"color":"#f7f453"}]},{"featureType":"all","elementType":"geometry.fill","stylers":[{"color":"#fed819"},{"visibility":"on"}]},{"featureType":"all","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"all","elementType":"labels.text.fill","stylers":[{"gamma":0.01},{"lightness":20},{"visibility":"on"}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"saturation":-31},{"lightness":-33},{"weight":2},{"gamma":0.8},{"visibility":"off"}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative.locality","elementType":"geometry.fill","stylers":[{"visibility":"off"}]},{"featureType":"administrative.locality","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"administrative.land_parcel","elementType":"geometry.fill","stylers":[{"visibility":"off"}]},{"featureType":"administrative.land_parcel","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"lightness":30},{"saturation":30},{"visibility":"on"}]},{"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffeb55"}]},{"featureType":"landscape","elementType":"labels.text.fill","stylers":[{"visibility":"on"}]},{"featureType":"landscape","elementType":"labels.text.stroke","stylers":[{"color":"#ff0000"},{"visibility":"off"}]},{"featureType":"landscape.natural.landcover","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"landscape.natural.terrain","elementType":"geometry.fill","stylers":[{"color":"#ff0000"},{"visibility":"off"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"saturation":20}]},{"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"lightness":20},{"saturation":-20}]},{"featureType":"road","elementType":"geometry","stylers":[{"lightness":10},{"saturation":-30}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"saturation":25},{"lightness":25}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#f5e044"}]},{"featureType":"road.local","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#f5e044"}]},{"featureType":"water","elementType":"all","stylers":[{"lightness":-20},{"visibility":"on"},{"color":"#ececec"}]}]
      };
      var mapElement = document.getElementById('map');
      var map = new google.maps.Map(mapElement, mapOptions);
      var marker = new google.maps.Marker({
          position: new google.maps.LatLng(43.839995,16.063647),
          map: map,
          icon: '../images/pin.png',
          title: 'Zip line Čikola'
      });
  }
</script>

<?php include '../include/footer.php' ?>

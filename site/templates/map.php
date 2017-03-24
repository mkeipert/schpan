<?php snippet('header') ?>

<div class="row fullheight">
	<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2558.0752936440995!2d8.598406715868222!3d50.122313018834994!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bd098e2f5f9155%3A0xe6bdf12f19d06446!2sSchillinger+%26+Pankratz+GmbH!5e0!3m2!1sde!2sde!4v1465543665600" width="1000" height="800" frameborder="0" style="border:0" allowfullscreen></iframe> -->
	<div id="map" style="height: 100%;""></div>
    <script>
      var map;
      /*function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 50.121829, lng: 8.601179},
          zoom: 15
        });
      }*/
      function initMap() {
  		var uluru = {lat: 50.121829, lng: 8.601179};
  		var map = new google.maps.Map(document.getElementById('map'), {
   		 zoom: 15,
   		 mapTypeControl: true,
    		mapTypeControlOptions: {
        		style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR,
        		position: google.maps.ControlPosition.TOP_CENTER
    	},

    	center: uluru
  		});

  		var contentString = '<div id="content" style="color: black;">'+
      		'<div id="siteNotice">'+
      		'</div>'+
      		'<h1 id="firstHeading" class="firstHeading">Schillinger & Pankratz GmbH</h1>'+
     		 '<div id="bodyContent">'+
      		'<p>Westerbachstraße 47<br>60489 Frankfurt/M</p>' +
      		'<p><a target="_blank" style="color: #4B8C2F" href="https://www.google.de/maps/dir//Westerbachstra%C3%9Fe+47,+60489+Frankfurt+am+Main/@50.1217854,8.5990249,17z/data=!4m16!1m7!3m6!1s0x47bd098e2f5f9155:0x2d92a2e6c8d1ed56!2sWesterbachstra%C3%9Fe+47,+60489+Frankfurt+am+Main!3b1!8m2!3d50.121782!4d8.6012136!4m7!1m0!1m5!1m1!1s0x47bd098e2f5f9155:0x2d92a2e6c8d1ed56!2m2!1d8.6012136!2d50.121782">'+
      		'Routenplaner'+
      		'</a>' +
     		 '</div>'+
      		'</div>';

  		var infowindow = new google.maps.InfoWindow({
    		content: contentString
  		});

  		var marker = new google.maps.Marker({
    		position: uluru,
    		map: map,
    		title: 'Schillinger & Pankratz GmbH'
  		});
  
  		marker.addListener('click', function() {
    		infowindow.open(map, marker);
  		});
	}


    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBo9bv-P2YaHe2L224cbSMrBoKbGTmmel8&callback=initMap"
    async defer></script>


</div>
<?php snippet('separator') ?>
<?php snippet('footer') ?>



<?php 

	$page_slug =  "contact-us";
	include_once 'doc-head.php';
	include_once 'main-header.php';
?>


<style type="text/css">
	#map {
        height: 600px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
</style>



<div class="container-fluid header_clear">

<div class="contentWrapper" style="height: 0px">	

<div class="row">

	<div class="col-12">
		<div class="countriesList">
			<span>Pakistan</span>
			<span>United States</span>
			<span>United Kingdom</span>
			<span>Afghanistan</span>
			<span>Iran</span>
			<span>Iran</span>
		</div>	
	</div>
	
</div>


</div>

</div>



	<div id="map"></div>



	<div class="contentWrapper" >

		<div class="col-12">


			<div class="contactBoxContainer">

				<div class="numberList">

					<p class="cSubtitle">Contact Us</p>

					<p class="cTagline">Have Urgency call us now</p>


					<div class="contryContactList">

						<span class="us">USA +1 432 454 6454</span>
						<span class="uk">Uk +1 432 454 6454</span>
						<span class="pk">PK +1 432 454 6454</span>
						<span class="et">ET +1 432 454 6454</span>
						<span class="tk">TR +1 432 454 6454</span>
						<span class="ag">AG +1 432 454 6454</span>
						<span class="ir">IR +1 432 454 6454</span>
						
						
					</div>



					
				</div>

				<div class="messageBox">

					<h2>Get in Touch</h2>

						<p class="infoT">Thank you for registration to one of the largest producers of embroidery threads.</p>


						<form name="contact_form" id="confact_form" method="post" action="contact-us.php">


							<input type="text" name="company_name" placeholder="Company Name">

							<input type="text" name="full_name" placeholder="Full Name">
							<input type="email" name="email" placeholder="Email">

							<textarea placeholder="Type your message here"></textarea>



							<div id="contactSend">Save</div>


							<div class="clearfix">&nbsp</div>


						</form>

					
				</div>

				
			</div>
			

		</div>	
		
	</div>







<?php 

	include_once 'footer.php';
	include_once 'doc-footer.php';

?>


<script src="https://maps.googleapis.com/maps/api/js?callback=initialize&key=AIzaSyDnKRBDN4y27IXg8_of6hhTS0q5IQX1nDw" async defer></script>



<script type="text/javascript">


	var cars = [];

	cars.push({
  'name'  : 'Candle Point',
  
  'lat'   : '32.1743373',
  'lng'   : '74.1835857',
  
  'city' : "Gujranwala",
  'branch' : "Candle Point",
  'telephone' : "055-3257769",
  'address' : "SHOP NO 6-B TRUST PLAZA MODEL TOWN GT ROAD GUJRANWALA"

});


	cars.push({
  'name'  : 'Candle Gallery',
  
  'lat'   : '32.1619974',
  'lng'   : '74.1895891',
  
  'city' : "Gujranwala",
  'branch' : "Candle Gallery",
  'telephone' : "055-325-8400",
  'address' : "BACK SIDE LIBERTY MARKET SIALKOT ROAD GUJRANWALA"



});

	cars.push({
  'name'  : 'Candle Zone',
  
  
  'lat'   : '32.0643982',
  'lng'   : '73.6956334',
  

  'city' : "Hafizabad",
  'branch' : "Candle Zone",
  'telephone' : "0306-6289442",
  'address' : "MANGATT ROAD NEAR MASJID ALI HAJVAREY HAFIZABAD"

});



  cars.push({
  'name'  : 'Candle Orangi',
  
  
  'lat'   : '24.9397945',
  'lng'   : '67.0006459',
  

  'city' : "karachi",
  'branch' : "Candle Orangi",
  'telephone' : "021-36660092",
  'address' : "Plot No.53,sector 5-D, orangi town # 5"


});


  cars.push({
  'name'  : 'Mehmoodabad',
  
  'lat'   : '24.8601792',
  'lng'   : '67.0887889',
  

  'city' : "Karachi",
  'branch' : "Mehmoodabad",
  'telephone' : "021-35315704",
  'address' : "Plot num : 1761 street 33  Liaquat Ashraf Colony near Friends CNG station Mehmoodabad Karachi"

});


  cars.push({
  'name'  : 'FB Area',
  
  'lat'   : '24.954945',
  'lng'   : '67.0801769',
  
  'city' : "Karachi",
  'branch' : "FB Area",
  'telephone' : "021-36829861",
  'address' : "L-13/4 Dawood Compound Block-22, Opp, Power House. F.B. Area, Karachi Pakistan"

});



  cars.push({
  'name'  : 'Site',
  
  'year'  : '1982',
  'lat'   : '24.8982506',
  'lng'   : '66.9948056',
  

  'city' : "Karachi",
  'branch' : "Site",
  'telephone' : "021-32554509",
  'address' : "Plot no E3 B near dhadhi business avenue Haroon abad site area Karachi"

});


  cars.push({
  'name'  : 'Candle Home',
  'slug'  : 'bmw-3',
  'url'   : '#',
  
  'lat'   : '31.4688617',
  'lng'   : '74.3182732',
  

  'city' : "Lahore",
  'branch' : "Candle Home",
  'telephone' : "042-35447381",
  'address' : "PLOT 8,9 AND 10, AL HAFIZ STREET, NEAR EJAZ PARK, LINK ROAD MODEL TOWN LAHORE"

});


  cars.push({
  'name'  : 'Candle Ravi',
  
  'year'  : '1982',
  'lat'   : '31.6153867',
  'lng'   : '74.2725573',
  

  'city' : "Lahore",
  'branch' : "Candle Ravi",
  'telephone' : "042-37929901-2",
  'address' : "GROUND FLOOR HAYAT MANZIL OPPOSITE SOHRAB RUSTAM FACTORY SHEIKHUPURA ROAD SHAHDRA TOWN LAHORE"

});


  cars.push({
  'name'  : 'Candle Garden',
  'slug'  : 'bmw-3',
  
  'lat'   : '31.5837586',
  'lng'   : '74.3810201',
  

  'city' : "Lahore",
  'branch' : "Candle Garden",
  'telephone' : "042-36860178",
  'address' : "GROUND FLOOR ADJACENT NATIONAL BANK OPPOSITE SHALAMAR GARDEN SHALAMAR CHOWK BAGHBANPURA MAIN GT ROAD LAHORE"

});


  cars.push({
  'name'  : 'Coki Traders',
  'slug'  : 'bmw-3',
  
  'lat'   : '32.4964168',
  'lng'   : '74.4891253',
  

  'city' : "Sialkot",
  'branch' : "Coki Traders",
  'telephone' : "052-3252765",
  'address' : "NEAR JHON & SCOTT SCHOOL WAZIRABAD ROAD HARRAR SIALKOT "

});


  cars.push({
  'name'  : 'Candle Trader',
  'slug'  : 'bmw-3',
  
  'lat'   : '33.635252',
  'lng'   : '73.0735287',
  

  'city' : "Rawalpindi",
  'branch' : "Candle Trader",
  'telephone' : "0321-5949007",
  'address' : "G 24 GROUND FLOOR MIDCITY MALL MUREE ROAD SATELITE RAWALPINDI"

});


  cars.push({
  'name'  : 'Bakar Mandi',
  'slug'  : 'bmw-3',
  
  'lat'   : '31.4152587',
  'lng'   : '73.0567218',
  

  'city' : "Faisalabad",
  'branch' : "Bakar Mandi",
  'telephone' : "+92 324 6495271",
  'address' : "PLOT # 404 LIAQUATABAD NO 1 STREET NO 10 BAKAR MANDI CHOWK FAISLABAD"

});


  cars.push({
  'name'  : 'R colony',
  'slug'  : 'bmw-3',
  
  
  'lat'   : '31.4424406',
  'lng'   : '73.0819378',
  

  'city' : "Faisalabad",
  'branch' : "R colony",
  'telephone' : "+92 300 6683616",
  'address' : "GROUND FLOOR PLOT NO 72 STREET NO 4 RAFIQ COLONY JAIL ROAD FAISALABAD"

});



  cars.push({
  'name'  : 'Dil Ayaz',
  'slug'  : 'bmw-3',
  'url'   : '#',
  
  'lat'   : '25.3989985',
  'lng'   : '68.3946672',
  

  'city' : "Hyderabad",
  'branch' : "Dil Ayaz",
  'telephone' : "0222104132",
  'address' : "Paretabad Hyderabad, Sindh"

});


  cars.push({
  'name'  : 'Rahim',
  'slug'  : 'bmw-3',
  
  
  'lat'   : '25.3989985',
  'lng'   : '68.3946672',
  

  'city' : "Peshawar",
  'branch' : "Rahim",
  'telephone' : "0333-4474103",
  'address' : "Khushal Town, Peshawar, Khyber Pakhtunkhwa"

});









// Variables for Google maps
var map, mapElem, markerImg, infoWindow, marker;
var markers = [], infoWindows = [];

var pakistan = {lat: 30.2920057, lng: 64.8564704};

var mapOptions = {
  mapTypeId: 'roadmap',
  zoom: 15,
  center : pakistan
  //scrollwheel: false,
};




function initialize() {
  markerImg = {
    url:'./images/contact/marker.png',
    size: new google.maps.Size(50, 64),
    anchor: new google.maps.Point(30, 64),
  }
                  
  // Display a map on the page
  mapElem = document.getElementById('map');
  map = new google.maps.Map(mapElem, mapOptions);
  map.setTilt(45);

  // Loop through our array of cars
  for(i = 0; i < cars.length; i++) {


    var car = cars[i];


    console.log(car.lat + ':' + car.lng);


    
  
    // Generate an infowindow content for the marker
  	var infoWindow = new google.maps.InfoWindow();
    infoWindow.setContent(
      
      '<a href="#"><p>'+car.city+','+car.branch+' '+car.address+' '+car.telephone+'</p></a>'
    );
    infoWindows.push(infoWindow);
  
    // Place a marker on the map
    createMarker(car.lat, car.lng, i);
  }
  
  // Center the map fitting all markers on the screen
  fitToMarkers();
}

function createMarker(x, y, i) {
  marker = new google.maps.Marker({
    map: map,
    icon: markerImg,
    position: new google.maps.LatLng(x,y),
    title: cars[i].name
  });
  marker._index = i;
  markers.push(marker);
  
  // Click event on marker
  google.maps.event.addListener(marker, 'click', (function(marker, i) {
    return function() {
      // Close last opened infowindow if any
      if(infoWindow) infoWindow.close();
      // Open clicked infowindow
      infoWindow = infoWindows[i];
      infoWindow.open(map, marker);
    }
  })(marker, i));
}

function mapResize() {
  google.maps.event.trigger(map, "resize");
  fitToMarkers();
}

function fitToMarkers() {
  map.setZoom(15);
  var bounds = new google.maps.LatLngBounds();
  for(var i = 0; i < markers.length; i++) {
   bounds.extend(markers[i].getPosition());
  }
  map.fitBounds(bounds);
  map.setZoom(14); // zoom out when done so markers on the top can be seen
}

$(window).resize(function() {
  
    // Do nothing if mobile
    if($(window).width() < 768) return;

    // Resize map if function is defined
    if(typeof mapResize === 'function') mapResize();
  });





</script>
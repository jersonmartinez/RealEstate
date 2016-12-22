<script>
	function cargarmap1() {
		otromas.style.height='300px';

		var mapOptions = {
			center: new google.maps.LatLng(12.448507495133017, -86.85622571411136),
			zoom: 10,
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};

		var map = new google.maps.Map(document.getElementById("otromas"),mapOptions);
	}		
</script>
<div id="otromas"></div>

<a href="javascript: cargarmap1();">Iniciar mapa</a>

<!-- <script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=false&language=es"></script> -->
<script src="https://maps.google.com/maps/api/js?sensor=false&callback=cargarmap1"></script>

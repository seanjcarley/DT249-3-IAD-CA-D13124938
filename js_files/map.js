var myKey = "AIzaSyAnNd79rZc6yzqoXRBu44ShRkgHKExIwas";

function loadScript(){
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.src = "https://maps.googleapis.com/maps/api/js?key=" + myKey + "&sensor=false&callback=initialize";
    //document.body.appendChild(script);
}

var myCenter=new google.maps.LatLng(53.10282175154, -7.745361325625026);
var m1=new google.maps.LatLng(53.6629248231401, -6.330313680056179);
var m3s=new google.maps.LatLng(53.453738917761605, -6.482448575380886);
var m3n=new google.maps.LatLng(53.672383284299656, -6.775689122561062);
var m4=new google.maps.LatLng(53.41040131969123, -6.739897725466335);
var n6=new google.maps.LatLng(53.282201592112635, -8.413596150759304);
var m7=new google.maps.LatLng(53.000580572096105, -7.393412587526882);
var m50=new google.maps.LatLng(53.36947772505358, -6.3784861539636495);
var n8=new google.maps.LatLng(52.02701624400928, -8.328130242708767);
var n25=new google.maps.LatLng(52.27389511349867, -7.158783671740139);
var estLk=new google.maps.LatLng(53.34430644191077, -6.22466683137759);
var dTun=new google.maps.LatLng(53.35634975401459, -6.228191254023159);
var lTun=new google.maps.LatLng(52.669472853354556, -8.699959514025295);

function initialize(){
	var mapOpt = {
		center:myCenter,
		zoom:7,
		mapTypeId:google.maps.MapTypeId.ROADMAP
	};
	
	var map=new google.maps.Map(document.getElementById("googleMap"),mapOpt);
	
	var marker0=new google.maps.Marker({
		position:m1,
		//icon:'pinkball.png'
		//animation:google.maps.Animation.BOUNCE
		title: "M1"
	});
	
	var marker1=new google.maps.Marker({
		position:m3s,
		//icon:'pinkball.png'
		//animation:google.maps.Animation.BOUNCE
		title: "M3 - Black Bull"
	});
	
	var marker2=new google.maps.Marker({
		position:m3n,
		//icon:'pinkball.png'
		//animation:google.maps.Animation.BOUNCE
		title: "M3 - Grange"
	});
	
	var marker3=new google.maps.Marker({
		position:m4,
		//icon:'pinkball.png'
		//animation:google.maps.Animation.BOUNCE
		title: "M4 - Enfield / Kilcock"
	});
	
	var marker4=new google.maps.Marker({
		position:n6,
		//icon:'pinkball.png'
		//animation:google.maps.Animation.DROP
		title: "N6 - Ballinasloe"
	});
	
	var marker5=new google.maps.Marker({
		position:m7,
		//icon:'pinkball.png'
		//animation:google.maps.Animation.BOUNCE
		title: "M7/M8 Portlaoise"
	});
	
	var marker6=new google.maps.Marker({
		position:m50,
		//icon:'pinkball.png'
		//animation:google.maps.Animation.BOUNCE
		title: "M50"
	});
	
	var marker7=new google.maps.Marker({
		position:n8,
		//icon:'pinkball.png'
		//animation:google.maps.Animation.BOUNCE
		title: "N8 - Fermoy"
	});
	
	var marker8=new google.maps.Marker({
		position:n25,
		//icon:'pinkball.png'
		//animation:google.maps.Animation.BOUNCE
		title: "N25 - Waterford"
	});
	
	var marker9=new google.maps.Marker({
		position:estLk,
		//icon:'pinkball.png'
		//animation:google.maps.Animation.BOUNCE
		title: "East Link"
	});
	
	var marker10=new google.maps.Marker({
		position:dTun,
		//icon:'pinkball.png'
		//animation:google.maps.Animation.BOUNCE
		title: "Dublin Tunnel"
	});
	
	var marker11=new google.maps.Marker({
		position:lTun,
		//icon:'pinkball.png'
		//animation:google.maps.Animation.BOUNCE
		title: "Limerick Tunnel"
	});
	
	marker0.setMap(map);
	marker1.setMap(map);
	marker2.setMap(map);
	marker3.setMap(map);
	marker4.setMap(map);
	marker5.setMap(map);
	marker6.setMap(map);
	marker7.setMap(map);
	marker8.setMap(map);
	marker9.setMap(map);
	marker10.setMap(map);
	marker11.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
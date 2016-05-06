$(document).foundation();



 $('.section-ticket__prices_button').click(function(e) {
  e.preventDefault();

  $('.section-ticket__prices_content').slideToggle(300);

});


 
$(function(){

   function remove_mensage(){
      $(".wpcf7-response-output.wpcf7-validation-errors, .wpcf7-response-output.wpcf7-mail-sent-ok").css('top','-80px');
   };

      function show_mensage(){
      $(".wpcf7-response-output.wpcf7-validation-errors, .wpcf7-response-output.wpcf7-mail-sent-ok").css('top','0px');
   };

   window.setTimeout( show_mensage, 1000 ); // 1 seconds
   window.setTimeout( remove_mensage, 10000 ); // 5 seconds
});




// GOOGLE MAPS  

//map
function initMap() {
  var myLatLng = {lat: -13.0103717, lng: -38.515303};

  var map = new google.maps.Map(document.getElementById('map'), {
    //zoom: 4,
    center: myLatLng,
    zoom: 9,
	disableDoubleClickZoom: true,
	draggable: true,
	scrollwheel: false,
	panControl: false,
	//mapTypeId: google.maps.MapTypeId.ROADMAP
  });



//   var styles = [
//   {
//     stylers: [
//       {  hue: "#00d4ff"},
//       { saturation: 0 }
//     ]
//   },{
//     featureType: "road",
//     elementType: "geometry",
//     stylers: [
//       { lightness: 100 },
//       { visibility: "simplified" }
//     ]
//   },{
//     featureType: "road",
//     elementType: "labels",
//     stylers: [
//       { visibility: "off" }
//     ]
//   }
// ];

// map.setOptions({styles: styles});



  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Hello World!'
  });
}

 


// END GOOGLE MAPS




/*
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-16187030-2', 'auto');
ga('send', 'pageview');

*/
 
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-76337147-1', 'auto');
  ga('send', 'pageview');

 


 

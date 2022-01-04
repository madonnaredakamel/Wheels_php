

  var aud=document.createElement('audio');
aud.setAttribute('src','sound.mp4');
aud.loop=true;
aud.play();



var myNav = document.getElementById("nav");

window.onscroll = function() {
  "use strict";
  if (document.body.scrollTop >= 280 || document.documentElement.scrollTop >= 280) {
    myNav.classList.add("scroll");
  } else {
    myNav.classList.remove("scroll");
  }
};

$(document).ready(function() {
 
  $("#owl-demo").owlCarousel({
    items : 4,
    lazyLoad : true,
    navigation : true
  }); 
 
});
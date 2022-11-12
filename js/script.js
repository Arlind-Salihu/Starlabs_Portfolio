
// START OF NAVBAR SECTION
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
      x.className += " responsive";
  } else {
      x.className = "topnav";
  }
}
// END OF NAVBAR SECTION


// START OF CAROUSEL SECTION
let carousel = 1;
showCarousel(carousel);

function plusSlides(n) {
  showCarousel(carousel += n);
}

function currentSlide(n) {
  showCarousel(carousel = n);
}

function showCarousel(n) {
  let i;
  let slides = document.getElementsByClassName("myProjects");
  let carosuelButtons = document.getElementsByClassName("carosuelButton");
  if (n > slides.length) {carousel = 1}    
  if (n < 1) {carousel = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < carosuelButtons.length; i++) {
    carosuelButtons[i].className = carosuelButtons[i].className.replace(" active", "");
  }
  slides[carousel-1].style.display = "block";  
  carosuelButtons[carousel-1].className += " active";
}

// END OF CAROUSEL SECTION
// START OF NAVBAR SECTION
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("scroll").style.top = "160px";
  } else {
    document.getElementById("scroll").style.top = "0px";
  }
  prevScrollpos = currentScrollPos;
};
// END OF NAVBAR SECTION

// START OF CAROUSEL SECTION
let carousel = 1;
showCarousel(carousel);

function plusSlides(n) {
  showCarousel((carousel += n));
}

function currentSlide(n) {
  showCarousel((carousel = n));
}

function showCarousel(n) {
  let i;
  let slides = document.getElementsByClassName("myProjects");
  let carosuelButtons = document.getElementsByClassName("carosuelButton");
  if (n > slides.length) {
    carousel = 1;
  }
  if (n < 1) {
    carousel = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < carosuelButtons.length; i++) {
    carosuelButtons[i].className = carosuelButtons[i].className.replace(
      " active",
      ""
    );
  }
  slides[carousel - 1].style.display = "block";
  carosuelButtons[carousel - 1].className += " active";
}
// END OF CAROUSEL SECTION


// START OF CONTACT FORM
// TEST SCRIPT

// function registration() {

//   var name = document.getElementById("name");
//   var surname = document.getElementById("surname").value;
//   var email = document.getElementById("email").value;
//   var message = document.getElementById("message").value;
  
//   //email id expression code
//   var letters = /^[A-Za-z]+$/;
//   var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

//   if (name == '') {
//     alert('Ju lutemi shkruani emrin tuaj');
//   }
//   else if (!letters.test(name)) {
//     alert('Fusha e emrit kërkonte vetëm karaktere alfabeti');    
//   }
//   else if (surname == '') {
//     alert('Ju lutemi shkruani mbiemrin tuaj');    
//   }
//   else if (!letters.test(surname)) {
//     alert('Fusha e emrit kërkonte vetëm karaktere alfabeti');    
//   }
//   else if (email == '') {
//     alert('Ju lutemi shkruani email-in tuaj të përdoruesit');
//   }
//   else if (!filter.test(email)) {
//     alert('Email i pavlefshem');    
//   }
//   else if (message == '') {
//     alert('Ju lutemi shkruani mesazhin tuaj');    
//   }
//   else if(name != '' && surname != '' && email != '' && message != ''){
//     window.open("http://localhost:81/Starlabs_Portfolio/php/#contact")
//     alert('Mesazhi u dergua me sukses!');
//   }
// }
// END OF CONTACT FORM
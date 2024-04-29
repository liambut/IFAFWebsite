window.onscroll = function() {stick()};

var header = document.getElementById("header");
var sticky = header.offsetTop;

function stick() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
function uncheck() {
  let input = document.getElementById('menu-toggle');
  input.checked = false;
}
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
const boxes = document.querySelectorAll(".box");
let currentBoxIndex = 0;

function showBox(index) {
  boxes.forEach(box => box.classList.remove("show"));
  boxes[index].classList.add("show");
}

function showNextBox() {
  currentBoxIndex = (currentBoxIndex + 1) % boxes.length;
  showBox(currentBoxIndex);
}

function showPrevBox() {
  currentBoxIndex = (currentBoxIndex - 1 + boxes.length) % boxes.length;
  showBox(currentBoxIndex);
}

// Show the first box initially
showBox(currentBoxIndex);

var slides = document.querySelectorAll('.slide');
var currentSlide = 0;
var slideInterval = setInterval(nextSlide, 2000);
var playing = true;

let prev = document.querySelector('.prev');
let next = document.querySelector('.next');
let pause = document.querySelector('.pause');

function nextSlide() {
  slides[currentSlide].classList.remove('active');
  currentSlide = (currentSlide + 1) % slides.length;
  slides[currentSlide].classList.add('active');
}

function prevSlide() {
  slides[currentSlide].classList.remove('active');
  currentSlide = (currentSlide - 1 + slides.length) % slides.length;
  slides[currentSlide].classList.add('active');
}

function pauseSlide() {
  if (playing) {
    clearInterval(slideInterval);
    playing = false;
  } else {
    slideInterval = setInterval(nextSlide, 2000);
    playing = true;
  }
}



// header carousel

let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("indicators__dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 5 seconds
}

// sticky navigation

window.onscroll = function() {myFunction()};

let navbar = document.querySelector(".header__wrapper");
let sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}


// open search header

const searchBtnSubmit = document.querySelector('.btn-searchSubmit');
const search = document.getElementById('search__popup');

searchBtnSubmit.addEventListener('click', () => {
    search.style.transform = "translateY(0%)";
});

// open hamburger

const hamburgerMenu = document.querySelector('.hamburger-btn');
const navMenu = document.querySelector('.nav');

const close = document.getElementById('menu-item-208');
const overlay = document.querySelector('.overlay');


hamburgerMenu.addEventListener('click', () => {
    navMenu.style.transform = "translateX(0%)";
    overlay.style.display = "block";
})

close.addEventListener('click',()=> {
     navMenu.style.transform = "translateX(-100%)";
       overlay.style.display = "none"; 
})

overlay.addEventListener('click', () => {
       navMenu.style.transform = "translateX(-100%)";
       overlay.style.display = "none";
})






//Image Gallery manual

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

//Original js Imageslider
//
// let slides = document.querySelectorAll('.slide');
// let btns = document.querySelectorAll('.btn');
// let currentSlide = 1;
//
// // Javascript for image slider manual navigation
// let manualNav = function(manual){
//     slides.forEach((slide) => {
//         slide.classList.remove('active');
//
//         btns.forEach((btn) => {
//             btn.classList.remove('active');
//         });
//     });
//
//     slides[manual].classList.add('active');
//     btns[manual].classList.add('active');
// }
//
// btns.forEach((btn, i) => {
//     btn.addEventListener("click", () => {
//         manualNav(i);
//         currentSlide = i;
//     });
// });
//
// // Javascript for image slider autoplay navigation
// let repeat = function(activeClass){
//     let active = document.getElementsByClassName('active');
//     let i = 1;
//
//     let repeater = () => {
//         setTimeout(function(){
//             [...active].forEach((activeSlide) => {
//                 activeSlide.classList.remove('active');
//             });
//
//             slides[i].classList.add('active');
//             btns[i].classList.add('active');
//             i++;
//
//             if(slides.length === i){
//                 i = 0;
//             }
//             if(i >= slides.length){
//                 return;
//             }
//             repeater();
//         }, 5000);
//     }
//     repeater();
// }
// repeat();
//
//
// let slides = document.querySelectorAll('.slide');
// let btns = document.querySelectorAll('.btn');
// let currentSlide = 1;
//
// // Javascript for image slider manual navigation
// let manualNav = function(manual){
//     slides.forEach((slide) => {
//         slide.classList.remove('active');
//
//         btns.forEach((btn) => {
//             btn.classList.remove('active');
//         });
//     });
//
//     slides[manual].classList.add('active');
//     btns[manual].classList.add('active');
// }
//
// btns.forEach((btn, i) => {
//     btn.addEventListener("click", () => {
//         manualNav(i);
//         currentSlide = i;
//     });
// });
//
// // Javascript for image slider autoplay navigation
// let repeat = function(activeClass){
//     let active = document.getElementsByClassName('active');
//     let i = 1;
//
//     let repeater = () => {
//         setTimeout(function(){
//             [...active].forEach((activeSlide) => {
//                 activeSlide.classList.remove('active');
//             });
//
//             slides[i].classList.add('active');
//             btns[i].classList.add('active');
//             i++;
//
//             if(slides.length === i){
//                 i = 0;
//             }
//             if(i >= slides.length){
//                 return;
//             }
//             repeater();
//         }, 5000);
//     }
//     repeater();
// }
// repeat();

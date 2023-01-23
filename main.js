var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("slides");
    if (n > slides.length) {slideIndex = 1} 
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slides[slideIndex-1].style.display = "block"; 
}

// document.addEventListener("DOMContentLoaded", function() {

    
//     var carousel = document.getElementById("carouselContainer");
//     carousel.addEventListener("touchstart", handleTouchStart, false);        
//     carousel.addEventListener("touchmove", handleTouchMove, false);

//     var xDown = null;
//     var yDown = null;

//     function handleTouchStart(evt) {
//         xDown = evt.touches[0].clientX;
//         yDown = evt.touches[0].clientY;
//     }

//     function handleTouchMove(evt) {
//     if ( ! xDown || ! yDown ) {
//         return;
//     }

//     var xUp = evt.touches[0].clientX;
//     var yUp = evt.touches[0].clientY;

//     var xDiff = xDown - xUp;
//     var yDiff = yDown - yUp;

//     if ( Math.abs( xDiff ) > Math.abs( yDiff ) ) {/*most significant*/
//         if ( xDiff > 0 ) {
//         /* left swipe */
//         plusSlides(1);
//         }
//         else {
//         /* right swipe */
//         plusSlides(-1);
//         }                       
//     }
//     /* reset values */
//     xDown = null;
//     yDown = null;
//     }
//   });


const typeWriter = document.getElementById('typewriter-text');
const text = 'Innovating Education, Inspiring Minds.';

typeWriter.innerHTML = text;
typeWriter.style.setProperty('--characters', text.length);

let slideIndex = 0;

function showSlides() {
    const slides = document.getElementsByClassName("mySlides");
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1;
    }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 5000); // Change image every 2 seconds
}

showSlides(); // Initial call to start the slideshow
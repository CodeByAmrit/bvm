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


// class slider
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');
const slider = document.querySelector('.slider');

let slidePosition = 0;
const slides = document.querySelectorAll('.slide');
const totalSlides = slides.length;

// Event listeners for buttons
nextBtn.addEventListener('click', () => {
  slideNext();
});

prevBtn.addEventListener('click', () => {
  slidePrev();
});

// Touch event listeners for swipe gestures
let touchStartX = 0;
let touchEndX = 0;

slider.addEventListener('touchstart', (e) => {
  touchStartX = e.touches[0].clientX;
});

slider.addEventListener('touchend', (e) => {
  touchEndX = e.changedTouches[0].clientX;
  handleGesture();
});

// Handle swipe gestures
function handleGesture() {
  if (touchStartX - touchEndX > 50) {
    // Swipe left
    slideNext();
  }

  if (touchEndX - touchStartX > 50) {
    // Swipe right
    slidePrev();
  }
}

// Function to slide to the next slide
function slideNext() {
  if (slidePosition > -(totalSlides - 1) * 210) {
    slidePosition -= 210;
    slider.style.transform = `translateX(${slidePosition}px)`;
  }
}

// Function to slide to the previous slide
function slidePrev() {
  if (slidePosition < 0) {
    slidePosition += 210;
    slider.style.transform = `translateX(${slidePosition}px)`;
  }
}


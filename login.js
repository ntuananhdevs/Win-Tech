// Selecting elements
let list = document.querySelector('.slider .list'); // Corrected selector for class 'slider'
let item = document.querySelectorAll('.slider .list .item'); // Corrected selector for class 'slider'
let dots = document.querySelectorAll('.slider .dots li'); // Corrected selector for class 'slider'

// Variables
let active = 0;
let lengthItem = item.length - 1;

// Function to reload the slider
function reloadSlider() {
    let checkLeft = item[active].offsetLeft; // Corrected property name offsetLeft
    list.style.left = -checkLeft + 'px';

    // Updating active dot
    let lastActiveDot = document.querySelector('.slider .dots li.active'); // Corrected selector for class 'dots'
    lastActiveDot.classList.remove('active');
    dots[active].classList.add('active'); // Corrected variable name 'dot' to 'dots'
}

// Adding click event listeners to dots
dots.forEach((dot, key) => { // Corrected variable name 'li' to 'dot', and added parentheses for the arrow function
    dot.addEventListener('click', function() { // Corrected parentheses position
        active = key;
        reloadSlider();
    });
});

// Function to automatically move the slider
function autoSlide() {
    // Incrementing active index
    active = (active === lengthItem) ? 0 : active + 1;
    reloadSlider();

    // Setting timeout for next slide
    setTimeout(autoSlide, 3000); // Change 3000 to adjust slide duration (in milliseconds)
}

// Starting automatic slider
autoSlide();

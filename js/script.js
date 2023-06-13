// Icon Buttons
const navButton = document.querySelector('#nav-btn');

// Menu
const menu = document.querySelector('.nav');

// Action
navButton.addEventListener('click', () => {
 menu.classList.toggle('active');
 navButton.classList.toggle('fa-xmark');
});
import jump from "jump.js";

const jump_link = document.querySelector('[data-banner-jump]');

jump_link.addEventListener('click', () => {
    jump('.first-section');
});


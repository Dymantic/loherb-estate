import jump from "jump.js";
import Usher from "./Usher";

const jump_link = document.querySelector('[data-banner-jump]');

jump_link.addEventListener('click', () => {
    jump('.first-section');
});

window.addEventListener('DOMContentLoaded', () => {
    new Usher();
})


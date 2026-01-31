import './bootstrap';

import Alpine from 'alpinejs';

// splide.js slider

import '@splidejs/splide/css';
import '@splidejs/splide/css/core';

import Splide from '@splidejs/splide';

// plyr.js
import Plyr from 'plyr';
import 'plyr/dist/plyr.css';



window.Alpine = Alpine;

Alpine.start();

// spide.js

const slider = document.querySelector(".splide")

if (slider) {
    new Splide('.splide', {
        type: 'loop',
    }).mount();

}

// plyr.js

const video = document.querySelector("#player");
if (video) {
    const player = new Plyr(video);

    player.on("ready", () => {
        console.log("Plyr Ready ✅");
    });
}

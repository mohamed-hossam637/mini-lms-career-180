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



// spide.js

const slider = document.querySelector(".splide")

if (slider) {
    new Splide('.splide', {
        type: 'loop',
    }).mount();

}

// plyr.js
// create alpine component to control player by alpine
Alpine.data("videoPlayer", () => ({
    player: null,
    video_ended: false,
    show_completed: false ,

    init() {
        this.player = new Plyr("#player");

        this.player.on('ended', () => {
            this.video_ended = true;
            this.show_completed = true;
        })
    } ,

    close() {
        this.show_completed = false;
    }
}))

Alpine.start();


// const video = document.querySelector("#player");
// if (video) {
//     const player = new Plyr(video);

//     player.on("ended", () => {
//         console.log("video is ended");
//     });
// }

import './bootstrap';

import Alpine from 'alpinejs';

// splide.js slider

import '@splidejs/splide/css';
import '@splidejs/splide/css/core';

import Splide from '@splidejs/splide';


window.Alpine = Alpine;

Alpine.start();



// spide.js

new Splide('.splide').mount();



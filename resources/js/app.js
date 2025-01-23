import './bootstrap';
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

// Typed.js
import Typed from 'typed.js';
new Typed('#languages', {
    strings: ['PHP', 'Javascript', 'Python', 'Laravel', 'Java', 'Docker', 'MySQL', 'Linux'],
    typeSpeed: 50,
    shuffle: true,
    backDelay: 1000,
    backSpeed: 50,
    loop: true,
});

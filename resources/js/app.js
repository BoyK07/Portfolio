import './bootstrap';
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

// Particles
import { tsParticles } from "@tsparticles/engine";
(async () => {
    await loadStarsPreset(tsParticles);

    await tsParticles.load({
        id: "tsparticles",
        url: "/assets/particles.json",
    });
})();

// Typed.js
import Typed from 'typed.js';

new Typed('#languages', {
    strings: ['PHP', 'Javascript', 'Python', 'Laravel', 'Java',],
    typeSpeed: 50,
    shuffle: true,
    backDelay: 1000,
    backSpeed: 50
});

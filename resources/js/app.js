import './bootstrap';
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();


import { tsParticles } from "@tsparticles/engine";
(async () => {
    await loadStarsPreset(tsParticles);

    await tsParticles.load({
        id: "tsparticles",
        url: "/assets/particles.json",
    });
})();

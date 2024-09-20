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
    strings: ['PHP', 'Javascript', 'Python', 'Laravel', 'Java', 'Docker', 'MySQL', 'Linux'],
    typeSpeed: 50,
    shuffle: true,
    backDelay: 1000,
    backSpeed: 50,
    loop: true,
});

document.addEventListener('DOMContentLoaded', function () {
    // Sections and navigation links mapping
    const sections = {
        hero: document.getElementById('hero'),
        about: document.getElementById('about'),
        projects: document.getElementById('projects'),
    };

    const navLinks = {
        hero: document.getElementById('home-nav'),
        about: document.getElementById('about-nav'),
        projects: document.getElementById('projects-nav'),
    };

    // Function to scroll smoothly to a section
    window.scrollToSection = function (sectionId) {
        const section = sections[sectionId];
        if (section) {
            section.scrollIntoView({ behavior: 'smooth' });
            setActiveNav(sectionId); // Set active navigation when clicked
        }
    };

    // Function to set the active navigation link
    function setActiveNav(activeSectionId) {
        Object.keys(navLinks).forEach(sectionId => {
            if (sectionId === activeSectionId) {
                navLinks[sectionId].classList.add('active-class');
                navLinks[sectionId].classList.remove('default-class');
            } else {
                navLinks[sectionId].classList.add('default-class');
                navLinks[sectionId].classList.remove('active-class');
            }
        });
    }

    // ScrollSpy logic to observe sections coming into view
    function observeSections() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    setActiveNav(entry.target.id); // Set the active nav when a section is visible
                }
            });
        }, {
            threshold: 0.6, // When 60% of the section is in view
        });

        // Observe each section
        Object.values(sections).forEach(section => {
            if (section) {
                observer.observe(section);
            }
        });
    }

    // Initialize scrollSpy functionality
    observeSections();

    // Add event listeners for navigation links
    document.getElementById('home-nav').addEventListener('click', (e) => {
        e.preventDefault();
        scrollToSection('hero');
    });

    document.getElementById('about-nav').addEventListener('click', (e) => {
        e.preventDefault();
        scrollToSection('about');
    });

    document.getElementById('projects-nav').addEventListener('click', (e) => {
        e.preventDefault();
        scrollToSection('projects');
    });
});

import './bootstrap';

// Uncomment if you need Alpine.js
import Alpine from 'alpinejs'
import example from './components/AlpineExample'
Alpine.data('example', example)
window.Alpine = Alpine
Alpine.start()

// Fancybox
import { Fancybox } from "@fancyapps/ui";
import "@fancyapps/ui/dist/fancybox/fancybox.css";

Fancybox.bind("[data-fancybox]", {
  // Solo botón de cerrar (sin contador, zoom, slideshow, fullscreen ni flechas)
  Toolbar: {
    display: {
      left: [],
      middle: [],
      right: ["close"],
    },
  },
  Carousel: {
    Navigation: false,
  },
  Thumbs: {
    type: "classic",
    showOnStart: true,
  },
});


// import Swiper bundle with all modules installed
import Swiper from 'swiper/bundle';

// import styles bundle
import 'swiper/css/bundle';

var swiper = new Swiper(".mySwiper", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  navigation: {
    prevEl: ".flyers-prev",
    nextEl: ".flyers-next",
  },
  coverflowEffect: {
    rotate: 20,
    stretch: 0,
    depth: 80,
    modifier: 1,
    slideShadows: true,
  },
  pagination: {
    el: ".swiper-pagination",
  },
});


// Reveal on scroll (si algo falla, el contenido queda visible)
try {
  document.documentElement.classList.add('js')
  const revealObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible')
        revealObserver.unobserve(entry.target)
      }
    })
  }, { threshold: 0, rootMargin: '0px 0px -8% 0px' })
  document.querySelectorAll('.reveal').forEach((el) => revealObserver.observe(el))
} catch (e) {
  document.documentElement.classList.remove('js')
}

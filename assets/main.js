// Webpack Imports
import * as bootstrap from 'bootstrap';
import Splide from '@splidejs/splide';

(function () {
	'use strict';

	// Focus input if Searchform is empty
	[].forEach.call(document.querySelectorAll('.search-form'), (el) => {
		el.addEventListener('submit', function (e) {
			var search = el.querySelector('input');
			if (search.value.length < 1) {
				e.preventDefault();
				search.focus();
			}
		});
	});

	// Initialize Popovers: https://getbootstrap.com/docs/5.0/components/popovers
	var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'));
	var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
		return new bootstrap.Popover(popoverTriggerEl, {
			trigger: 'focus',
		});
	});
})();

//console.log(Splide, 'Splide');
new Splide('.splide', {
	type: 'loop',
	perMove: 1,
	interval: 2000,
	autoplay: true,
	gap: 50,
	padding: {
		left: '1rem',
		right: '1rem'
	},
	perPage: 4,
	pagination: false,
	arrows: false,
	breakpoints: {
		992: {
			perPage: 3,
		},
		767: {
			perPage: 2,
		},
		449: {
			perPage: 1,
		},
		340: {
			perPage: 1,
		},
	},
}).mount();


// Add/Remove 'active' class to the navigation menu
const navLinks = document.querySelectorAll('a.nav-link');

navLinks.forEach((link) => {
	link.addEventListener('click', () => {
		navLinks.forEach((navLink) => {
			navLink.classList.remove('active');
		});

		link.classList.add('active');
	});
});

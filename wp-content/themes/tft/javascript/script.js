/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */
import {initTabs} from "./Tabs";
import {initAccordions} from "./Accordion";
import {initSymbolsSearch} from "./SymbolsSearch";
import {initSymbolsTable} from "./SymbolsTable";
import Swiper from 'swiper';
import { Scrollbar } from 'swiper';
import 'swiper/css';
document.addEventListener("DOMContentLoaded", function () {
	initTabs();
	initAccordions();
	initSymbolsSearch();
	initSymbolsTable();
});
window.registerSwitch = () => {
	document.querySelectorAll('.v-collection-item').forEach((el) => {
		el.addEventListener('click', (t) => {
			var target = t.target;
			target = target.querySelector('.video-switch');
			if (!target || !target.classList.contains('video-switch')) {
				target = t.target;
				target = getParent(target, 'v-collection-item').querySelector(
					'.video-switch'
				);
			}
			if (!target || !target.classList.contains('video-switch')) {
				target = t.target;
				target = target.querySelector('.video-switch');
			}
			console.log(target.dataset.url);
			if (target.dataset.url) {
				document.getElementById('media_source_iframe').src =
					target.dataset.url;
			}
		});
	});

	function getParent(ele, parentClass = 'parent') {
		var e = ele;
		while (!e.classList.contains(parentClass)) {
			e = e.parentElement;
		}
		console.log(e);
		return e;
	}
};
// import Swiper and modules styles
Swiper.use([Scrollbar]);
const swiper = new Swiper('.swiper-slider', {
	// configure Swiper to use modules
	spaceBetween: 77.8,
	slidesPerView: 5,
	centeredSlides: false,
	freeMode: true,
	loop: false,
	scrollbar: {
		el: '.swiper-scrollbar',
		draggable: true,
		dragSize: 230,
	},
	on: {
		init: function (sw) {
			window.registerSwitch();
		},
	},
	breakpoints: {
		0: {
			spaceBetween: 40,
			slidesPerView: 'auto',
			freeMode: true,
			paginationClickable: true,
		},
		460: {
			spaceBetween: 40,
			slidesPerView: 'auto',
		},
		576: {
			spaceBetween: 40,
			slidesPerView: 'auto',
		},
		768: {
			paceBetween: 77.8,
			slidesPerView: 3,
			slidesPerView: 'auto',
		},
		1280: {
			slidesPerView: 4,
			paceBetween: 77.8,
			slidesPerView: 'auto',
		},
		1530: {
			slidesPerView: 5,
			paceBetween: 77.8,
			slidesPerView: 'auto',
		},
	},
});

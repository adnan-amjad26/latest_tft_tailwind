class SymbolsSearch {
	_form;
	_input;
	_cards;
	_tabPanels;
	_tabs;
	_nextArrow;
	_prevArrow;
	_initialized;
	_activeTabs;

	constructor(formEl, selector) {
		this._form = formEl;
		this._input = formEl.querySelector('input');
		this._cards = document.querySelectorAll('#' + selector + ' [data-accordion]');
		this._tabs = document.querySelectorAll('[data-tabs-toggle="#' + selector + '"] [role="tab"]');
		this._tabPanels = document.querySelectorAll('#' + selector + ' [role="tabpanel"]');
		this._nextArrow = document.querySelector('[data-tabs-toggle="#' + selector + '"] [data-tabs-next]');
		this._prevArrow = document.querySelector('[data-tabs-toggle="#' + selector + '"] [data-tabs-prev]');
		this._activeTabs = [];
		this._initialized = false;
		this.init();
	}

	init() {
		if (this._cards.length && !this._initialized) {
			const searchHandler = (ev) => {
				this.search(ev.target.value);
			}

			const submitHandler = (ev) => {
				this.submitForm(ev);
			}

			this._form.addEventListener('submit', submitHandler);

			this._input.addEventListener('keyup', searchHandler);

			this._initialized = true;
		}
	}

	search(value) {
		const string = value.toLowerCase();

		this._cards.forEach(card => {
			const id = card.id.toLowerCase();
			card.classList.toggle('hidden', !id.includes(string));
		});

		this.hideTabs();
		this.setVisibleTab();
		this.toggleArrows();
	}

	hideTabs() {
		for (let i = 0; i < this._tabPanels.length; i++) {
			const total = this._tabPanels[i].querySelectorAll('[data-accordion]').length;
			const hidden = this._tabPanels[i].querySelectorAll('.hidden[data-accordion]').length;
			const id = this._tabPanels[i].id;
			const tab = document.querySelector('[data-tabs-target="#' + id + '"]')

			if (total === hidden) {
				tab.style.display = 'none';
			} else {
				tab.removeAttribute('style');
			}
		}

		const activeTabs = [];

		this._tabs.forEach(tab => {
			if (!tab.getAttribute('style')) {
				activeTabs.push(tab);
			}
		});

		this._activeTabs = activeTabs;
	}

	setVisibleTab() {
		let isVisibleTab = false;

		this._activeTabs.forEach(tab => {
			if (tab.getAttribute('aria-selected') === 'true') {
				isVisibleTab = true;
			}
		});

		if (!isVisibleTab && this._activeTabs.length > 0) {
			this._activeTabs[0].click();
		}
	}

	toggleArrows() {
		if (this._activeTabs.length <= 1) {
			this._nextArrow.style.display = 'none';
			this._prevArrow.style.display = 'none';
		} else {
			this._nextArrow.removeAttribute('style');
			this._prevArrow.removeAttribute('style');
		}
	}

	submitForm(ev) {
		ev.preventDefault();
		ev.stopPropagation();
		this.search(this._input.value);
	}
}

export const initSymbolsSearch = () => {
	const form = document.getElementById('symbols-spec-search');

	form ? new SymbolsSearch(form, 'symbols-specs-tab-content') : null;
}

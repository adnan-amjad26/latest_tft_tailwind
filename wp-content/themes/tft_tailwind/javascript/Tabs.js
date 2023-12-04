const Default = {
	defaultTabId: null,
	onShow: () => {
	},
};

class Tabs {
	_accordionEl;
	_items;
	_activeTab;
	_options;
	_initialized;

	constructor(
		accordionEl = null,
		items = [],
		options = Default
	) {
		this._accordionEl = accordionEl;
		this._items = items;
		this._activeTab = options ? this.getTab(options.defaultTabId) : null;
		this._options = {...Default, ...options};
		this._initialized = false;
		this.init();
	}

	init() {
		if (this._items.length && !this._initialized) {
			// set the first tab as active if not set by explicitly
			!this._activeTab ? this.setActiveTab(this._items[0]) : null;

			// force show the first default tab
			this.show(this._activeTab.id, true);

			// show tab content based on click
			this._items.map((tab) => {
				tab.triggerEl.addEventListener('click', () => {
					this.show(tab.id);
				});
			});

			const nextButton = this._accordionEl.querySelector('[data-tabs-next]');
			const prevButton = this._accordionEl.querySelector('[data-tabs-prev]');

			nextButton.addEventListener('click', () => {
				const visibleItems = this.getVisibleItems();
				const currentIndex = visibleItems.findIndex(item => item.id === this._activeTab.id);
				const nextIndex = currentIndex === visibleItems.length - 1 ? 0 : currentIndex + 1
				this.show(visibleItems[nextIndex].id);
			});

			prevButton.addEventListener('click', () => {
				const visibleItems = this.getVisibleItems();
				const currentIndex = visibleItems.findIndex(item => item.id === this._activeTab.id);
				const prevIndex = currentIndex === 0 ? visibleItems.length - 1 : currentIndex - 1
				this.show(visibleItems[prevIndex].id);
			});
			//
		}
	}

	destroy() {
		this._initialized ? this._initialized = false : null;
	}

	removeInstance() {
		this.destroy();
	}

	destroyAndRemoveInstance() {
		this.destroy();
		this.removeInstance();
	}

	getActiveTab() {
		return this._activeTab;
	}

	setActiveTab(tab) {
		this._activeTab = tab;
	}

	getTab(id) {
		return this._items.filter((t) => t.id === id)[0];
	}

	getVisibleItems() {
		const visibleItems = [];

		this._items.forEach(item => {
			if (!item.triggerEl.getAttribute('style')) {
				visibleItems.push(item);
			}
		});

		return visibleItems;
	}

	show(id, forceShow = false) {
		const tab = this.getTab(id);

		// don't do anything if already active
		if (tab === this._activeTab && !forceShow) {
			return;
		}

		// hide other tabs
		this._items.map((t) => {
			if (t !== tab) {
				t.targetEl.classList.add('hidden');
				t.triggerEl.setAttribute('aria-selected', 'false');
			}
		});

		// show active tab
		tab.triggerEl.setAttribute('aria-selected', 'true');
		tab.targetEl.classList.remove('hidden');

		this.setActiveTab(tab);

		// callback function
		this._options.onShow(this, tab);
	}
}

export const initTabs = () => {
	document.querySelectorAll('[data-tabs-toggle]').forEach(($parentEl) => {
		const tabItems = [];
		let defaultTabId = null;
		$parentEl
			.querySelectorAll('[role="tab"]')
			.forEach(($triggerEl) => {
				const isActive =
					$triggerEl.getAttribute('aria-selected') === 'true';
				const tab = {
					id: $triggerEl.getAttribute('data-tabs-target'),
					triggerEl: $triggerEl,
					targetEl: document.querySelector(
						$triggerEl.getAttribute('data-tabs-target')
					),
				};
				tabItems.push(tab);

				if (isActive) {
					defaultTabId = tab.id;
				}
			});

		new Tabs(
			$parentEl,
			tabItems, {
				defaultTabId: defaultTabId,
			}
		);
	});
}

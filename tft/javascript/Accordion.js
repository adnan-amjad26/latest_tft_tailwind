// https://github.com/themesberg/flowbite/blob/main/src/components/accordion/index.ts

const Default = {
	alwaysOpen: false,
	activeClasses: 'active',
	inactiveClasses: 'inactive',
	onOpen: () => {
	},
	onClose: () => {
	},
	onToggle: () => {
	},
};

class Accordion {
	_instanceId;
	_accordionEl;
	_items;
	_options;
	_clickHandler;
	_initialized;

	constructor(
		accordionEl = null,
		items = [],
		options = Default,
	) {
		this._accordionEl = accordionEl;
		this._items = items;
		this._options = {...Default, ...options};
		this._initialized = false;
		this.init();
	}

	init() {
		if (this._items.length && !this._initialized) {
			// show accordion item based on click
			this._items.forEach((item) => {
				if (item.active) {
					this.open(item.id);
				}

				const clickHandler = () => {
					this.toggle(item.id);
				};

				item.triggerEl.addEventListener('click', clickHandler);

				// Store the clickHandler in a property of the item for removal later
				item.clickHandler = clickHandler;
			});
			this._initialized = true;
		}
	}

	destroy() {
		if (this._items.length && this._initialized) {
			this._items.forEach((item) => {
				item.triggerEl.removeEventListener('click', item.clickHandler);

				// Clean up by deleting the clickHandler property from the item
				delete item.clickHandler;
			});
			this._initialized = false;
		}
	}

	removeInstance() {
	}

	destroyAndRemoveInstance() {
		this.destroy();
		this.removeInstance();
	}

	getItem(id) {
		return this._items.filter((item) => item.id === id)[0];
	}

	open(id) {
		const item = this.getItem(id);

		// don't hide other accordions if always open
		if (!this._options.alwaysOpen) {
			this._items.map((i) => {
				if (i !== item) {
					i.triggerEl.classList.remove(
						...this._options.activeClasses.split(' ')
					);
					i.triggerEl.classList.add(
						...this._options.inactiveClasses.split(' ')
					);
					i.targetEl.classList.add('hidden');
					i.triggerEl.setAttribute('aria-expanded', 'false');
					i.active = false;

					// rotate icon if set
					if (i.iconEl) {
						i.iconEl.classList.remove('rotate-180');
					}
				}
			});
		}

		// show active item
		item.triggerEl.classList.add(...this._options.activeClasses.split(' '));
		item.triggerEl.classList.remove(
			...this._options.inactiveClasses.split(' ')
		);
		item.triggerEl.setAttribute('aria-expanded', 'true');
		item.targetEl.classList.remove('hidden');
		item.active = true;

		// rotate icon if set
		if (item.iconEl) {
			item.iconEl.classList.add('rotate-180');
		}

		// callback function
		console.log(this._options);

		this._options.onOpen(this, item);
	}

	toggle(id) {
		const item = this.getItem(id);

		if (item.active) {
			this.close(id);
		} else {
			this.open(id);
		}

		// callback function
		this._options.onToggle(this, item);
	}

	close(id) {
		const item = this.getItem(id);

		item.triggerEl.classList.remove(
			...this._options.activeClasses.split(' ')
		);
		item.triggerEl.classList.add(
			...this._options.inactiveClasses.split(' ')
		);
		item.targetEl.classList.add('hidden');
		item.triggerEl.setAttribute('aria-expanded', 'false');
		item.active = false;

		// rotate icon if set
		if (item.iconEl) {
			item.iconEl.classList.remove('rotate-180');
		}

		// callback function
		this._options.onClose(this, item);
	}
}

export const initAccordions = () => {
	document.querySelectorAll('[data-accordion]').forEach(($accordionEl) => {
		const alwaysOpen = $accordionEl.getAttribute('data-accordion');
		const activeClasses = $accordionEl.getAttribute('data-active-classes');
		const inactiveClasses = $accordionEl.getAttribute(
			'data-inactive-classes'
		);

		const items = [];

		$accordionEl
			.querySelectorAll('[data-accordion-target]')
			.forEach(($triggerEl) => {
				// Consider only items that directly belong to $accordionEl
				// (to make nested accordions work).
				if ($triggerEl.closest('[data-accordion]') === $accordionEl) {
					const item = {
						id: $triggerEl.getAttribute('data-accordion-target'),
						triggerEl: $triggerEl,
						targetEl: document.querySelector(
							$triggerEl.getAttribute('data-accordion-target')
						),
						iconEl: $triggerEl.querySelector(
							'[data-accordion-icon]'
						),
						active:
							$triggerEl.getAttribute('aria-expanded') === 'true'
								? true
								: false,
					};
					items.push(item);
				}
			});

		new Accordion(
			$accordionEl,
			items,
			{
				alwaysOpen: alwaysOpen === 'open' ? true : false,
				activeClasses: activeClasses
					? activeClasses
					: Default.activeClasses,
				inactiveClasses: inactiveClasses
					? inactiveClasses
					: Default.inactiveClasses,
			}
		);
	});
}

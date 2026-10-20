const menuButton = document.querySelector('.menu-button');
const accountMenu = document.querySelector('#account-menu');

if (menuButton && accountMenu) {
	const closeAccountMenu = () => {
		accountMenu.hidden = true;
		menuButton.setAttribute('aria-expanded', 'false');
		menuButton.setAttribute('aria-label', 'Open account menu');
	};

	menuButton.addEventListener('click', () => {
		const isOpen = accountMenu.hidden;

		accountMenu.hidden = !isOpen;
		menuButton.setAttribute('aria-expanded', String(isOpen));
		menuButton.setAttribute('aria-label', isOpen ? 'Close account menu' : 'Open account menu');
	});

	document.addEventListener('click', (event) => {
		if (!menuButton.contains(event.target) && !accountMenu.contains(event.target)) {
			closeAccountMenu();
		}
	});

	document.addEventListener('keydown', (event) => {
		if (event.key === 'Escape') {
			closeAccountMenu();
		}
	});
}

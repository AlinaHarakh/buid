// TABS
const tabs = document.querySelectorAll('.tab');
const tabContents = document.querySelectorAll('.tab-content');

tabs.forEach((tab) => {
	tab.addEventListener('click', () => {
		const tabId = tab.getAttribute('data-tab');

		// Переключение класса активности кнопки
		tabs.forEach((tab) => {
			tab.classList.remove('tab-active');
		});
		tab.classList.add('tab-active');

		// Переключение класса видимости контента
		tabContents.forEach((tabContent) => {
			if (tabContent.getAttribute('data-tab') === tabId) {
				tabContent.classList.remove('tab-hide');
			} else {
				tabContent.classList.add('tab-hide');
			}
		});
	});
});

// scroll
// const buttons = document.querySelectorAll('.scroll-button');
// const blocks = document.querySelectorAll('.scroll-block');

// // Меняем порядок элементов в массивах
// const newBlocks = [blocks[1], blocks[3], blocks[2], blocks[4], blocks[1], blocks[0], blocks[3], blocks[2], blocks[4], blocks[0]];
// const newButtons = [buttons[0], buttons[1], buttons[2], buttons[3], buttons[4], buttons[5], buttons[6], buttons[7], buttons[8], buttons[9]];

// // Добавляем обработчики событий на клик по кнопкам
// newButtons.forEach((button, index) => {
// 	button.addEventListener('click', () => {
// 		// Вычисляем позицию блока на странице
// 		const blockPosition = newBlocks[index].getBoundingClientRect().top + window.pageYOffset;

// 		// Запускаем анимацию скролла к блоку
// 		window.scrollTo({
// 			top: blockPosition,
// 			behavior: 'smooth'
// 		});
// 	});
// }
// );
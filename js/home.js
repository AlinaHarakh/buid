// SCROLL
// const buttons = document.querySelectorAll('.scroll-button');
// const blocks = document.querySelectorAll('.scroll-block');

// // Меняем порядок элементов в массивах
// const newBlocks = [blocks[1], blocks[2], blocks[3], blocks[3], blocks[3], blocks[1], blocks[2], blocks[3], blocks[0]];
// const newButtons = [buttons[0], buttons[1], buttons[2], buttons[3], buttons[4], buttons[5], buttons[6], buttons[7], buttons[8]];

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
// });

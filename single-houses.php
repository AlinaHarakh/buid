<?php get_header(); ?>
<?php while ( have_posts() ) : the_post(); ?>
	<div class="info scroll-block">
			<div class="container">
				<div class="info__inner">
					<div class="info__item">
						<img class="info__item-icon" src="images/icons/icon1.svg" alt="icon">
						<p class="info__item-text">Загальна площа:<span> 235.8 м2</span></p>
					</div>
					<div class="info__item">
						<img class="info__item-icon" src="images/icons/icon2.svg" alt="icon">
						<p class="info__item-text">Матеріали:<span> YTONG/POROTHERM</span></p>
					</div>
					<div class="info__item">
						<img class="info__item-icon" src="images/icons/icon3.svg" alt="icon">
						<p class="info__item-text">Гарантія:<span> 12 років</span></p>
					</div>
					<div class="info__item">
						<img class="info__item-icon" src="images/icons/icon4.svg" alt="icon">
						<p class="info__item-text">Кількість спалень:<span> 6</span></p>
					</div>
					<div class="info__item">
						<img class="info__item-icon" src="images/icons/icon5.svg" alt="icon">
						<p class="info__item-text">Кількість санвузлів:<span> 3</span></p>
					</div>
					<div class="info__item">
						<img class="info__item-icon" src="images/icons/icon6.svg" alt="icon">
						<p class="info__item-text">Гараж:<span>2</span></p>
					</div>
				</div>
			</div>
		</div>
		<section class="layout">
			<div class="container">
				<div class="layout__inner">
					<h2 class="layout__title section-title">Планування</h2>
					<div class="layout__items">
						<div class="layout__item">
							<h4 class="layout__item-title">План 1-го поверху</h4>
							<div class="layout__item-content">
								<img class="layout__item-img" src="images/villa/layout1.jpg" alt="layout image">
								<ol class="layout__item-list">
									<li class="layout__item-text">Тамбур 4.10</li>
									<li class="layout__item-text">Хол 18.20 (21.50)</li>
									<li class="layout__item-text">Кладова 1.60</li>
									<li class="layout__item-text">Кухня 11.50</li>
									<li class="layout__item-text">Їдальня 18.00</li>
									<li class="layout__item-text">Вітальня 43.70</li>
									<li class="layout__item-text">Кладова 5.30</li>
									<li class="layout__item-text">Ванна 6.40</li>
									<li class="layout__item-text">Котельня 5.80</li>
									<li class="layout__item-text">Кімната 9.90</li>
									<li class="layout__item-text">Гараж 37.20</li>
								</ol>
							</div>
						</div>
						<div class="layout__item">
							<h4 class="layout__item-title">План 2-го поверхповерху </h4>
							<div class="layout__item-content">
								<img class="layout__item-img" src="images/villa/layout2.jpg" alt="layout image">
								<ol class="layout__item-list">
									<li class="layout__item-text">Хол та сходи 20</li>
									<li class="layout__item-text">Кімната 28.30</li>
									<li class="layout__item-text">Ванна 13.30</li>
									<li class="layout__item-text">Ванна 9.40</li>
									<li class="layout__item-text">Кімната 15.10</li>
									<li class="layout__item-text">Кімната 16.00</li>
									<li class="layout__item-text">Кабінет 14.10</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="equipment">
			<div class="container">
				<div class="equipment__inner">
					<h2 class="equipment__title section-title">Комплектація</h2>
					<div class="equipment__buttons" id="tabs">
						<button class="equipment__buttons-btn tab tab-active" data-tab="foundation">Фундамент</button>
						<button class="equipment__buttons-btn tab" data-tab="walls">Стіни</button>
						<button class="equipment__buttons-btn tab" data-tab="roof">Дах</button>
						<button class="equipment__buttons-btn tab" data-tab="windows">Вікна</button>
						<button class="equipment__buttons-btn tab" data-tab="doors">Двері</button>
						<button class="equipment__buttons-btn tab" data-tab="floor">Підлога</button>
						<button class="equipment__buttons-btn tab" data-tab="covering">Покриття</button>
					</div>

					<div class="equipment__content">

						<!-- FOUNDATION -->
						<div class="equipment__content foundation-content tab-content" data-tab="foundation">
							<div class="equipment__content-box">
								<img class="equipment__content-img" src="images/project/villa-foundation.jpg" alt="foundation image">
								<div class="equipment__content-info">
									<h3 class="equipment__content-title">Фундамент</h3>
									<ul class="equipment__content-list">
										<li class="equipment__content-item">
											Тип:
											<span>плитний</span>
										</li>
										<li class="equipment__content-item">
											Армування:
											<span>сітка з прута 10-12 мм в діаметрі</span>
										</li>
										<li class="equipment__content-item">
											Бетонна суміш:
											<span>цемент М250, щебінь середнього розміру, крупнозернистий промитий пісок</span>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- WALLS -->
						<div class="equipment__content wall-content tab-content tab-hide" data-tab="walls">
							<div class="equipment__content-box">
								<img class="equipment__content-img" src="images/project/villa-wall_top.jpg" alt="wall image">
								<div class="equipment__content-info">
									<h3 class="equipment__content-title">Стіни 1-го поверху</h3>
									<ul class="equipment__content-list">
										<li class="equipment__content-item">
											Зовнішні стіни:
											<span>теплі газобетонні блоки YTONG 375 або POROTHERM 38 Thermo</span>
										</li>
										<li class="equipment__content-item">
											Внутрішні несні стіни:
											<span>газобетонні блоки YTONG 250 або POROTHERM</span>
										</li>
										<li class="equipment__content-item">
											Оригінальні суміші та додаткові елементи
										</li>
										<li class="equipment__content-item">
											Оригінальні віконні перемички
										</li>
										<li class="equipment__content-item">
											Армопояс, гідроізоляція
										</li>
										<li class="equipment__content-item">
											Сходи: <span>однопрогонові, будівельні</span>
										</li>
									</ul>
								</div>
							</div>
							<div class="equipment__content-box">
								<img class="equipment__content-decor" src="images/Build..svg" alt="decor">
								<div class="equipment__content-info">
									<h3 class="equipment__content-title">Стіни 2-го поверху</h3>
									<ul class="equipment__content-list">
										<li class="equipment__content-item">
											Стіновий комплект із клеєного бруса:
											<span>ПРЕМІАЛЬНИЙ 260(В)*200 (Товщина) мм</span>
										</li>
										<li class="equipment__content-item">
											Клей:
											<span>KIILTO (Фінляндія), система ВТК та випробувальна лабораторія</span>
										</li>
										<li class="equipment__content-item">
											Матеріал:
											<span>сосна/ялина – на вибір</span>
										</li>
										<li class="equipment__content-item">
											Міжповерхове перекриття:
											<span>клеєні конструкційні балки 180*115мм</span>
										</li>
										<li class="equipment__content-item">
											Кріплення: <span>SILA</span>
										</li>
										<li class="equipment__content-item">
											Оцинковане кріплення, шпильова система
										</li>
									</ul>
								</div>
								<img class="equipment__content-img" src="images/project/villa-wall_bottom.jpg" alt="wall image">
							</div>
						</div>



						<!-- ROOF -->
						<div class="equipment__content roof-content tab-content tab-hide" data-tab="roof">
							<div class="equipment__content-box">
								<img class="equipment__content-img" src="images/project/villa-roof.jpg" alt="roof image">
								<div class="equipment__content-info">
									<h3 class="equipment__content-title">Дах</h3>
									<ul class="equipment__content-list">
										<li class="equipment__content-item">
											Покриття:
											<span> Поліестер, Матовий Поліестер, Pural, Pural Матовий, Purex, Ice Crystal</span>
										</li>
										<li class="equipment__content-item">
											Модель:
											<span> ХВИЛЯ МАДЕРА</span>
										</li>
										<li class="equipment__content-item">
											Товщини листа:
											<span> 0,4 мм; 0,45 мм; 0,5 мм.</span>
										</li>
										<li class="equipment__content-item">
											Метал:
											<span> Німеччина, Фінляндія</span>
										</li>
										<li class="equipment__content-item">
											Брус дерев'яний будівельний сухий струганий ТОВ САΗРАЙC
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- WINDOWS -->
						<div class="equipment__content-box windows-content tab-content tab-hide" data-tab="windows">
							<div class="equipment__content-box">
								<img class="equipment__content-img" src="images/project/villa-window.jpg" alt="window image">
								<div class="equipment__content-info">
									<h3 class="equipment__content-title">Вікна</h3>
									<ul class="equipment__content-list">
										<li class="equipment__content-item">
											Рама:
											<span> профільний брус</span>
										</li>
										<li class="equipment__content-item">
											Фурнітура:
											<span>Fab&Fix</span>
										</li>
										<li class="equipment__content-item">
											Ручка:
											<span> Connoisseur Inline Non-Locking</span>
										</li>
										<li class="equipment__content-item">
											Петля:
											<span> Harbour Butt Hinge</span>
										</li>
										<li class="equipment__content-item">
											Колір:
											<span> HARDEX GOLD</span>
										</li>
										<li class="equipment__content-item">
											Стулки:
											<span> поворотно-відкидні</span>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- DOORS -->
						<div class="equipment__content-box doors-content tab-content tab-hide" data-tab="doors">
							<div class="equipment__content-box">
								<img class="equipment__content-img" src="images/project/villa-door.jpg" alt="door image">
								<div class="equipment__content-info">
									<h3 class="equipment__content-title">Двері</h3>
									<ul class="equipment__content-list">
										<li class="equipment__content-item">
											Оздоблення зовні:
											<span> МДФ 12 мм (Бетон графіт)</span>
										</li>
										<li class="equipment__content-item">
											Оздоблення всередині:
											<span> МДФ 12 мм (Білий)</span>
										</li>
										<li class="equipment__content-item">
											Замки:
											<span> Securemme</span>
										</li>
										<li class="equipment__content-item">
											Петля:
											<span> Combi Ariano (Італія) d-22мм</span>
										</li>
										<li class="equipment__content-item">
											Товщина полотна дверей:
											<span> 96 мм</span>
										</li>
										<li class="equipment__content-item">
											Наповнення полотна:
											<span> мінеральна вата</span>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- FLOOR -->
						<div class="equipment__content-box floor-content tab-content tab-hide" data-tab="floor">
							<div class="equipment__content-box">
								<img class="equipment__content-img" src="images/project/villa-floor.jpg" alt="floor image">
								<div class="equipment__content-info">
									<h3 class="equipment__content-title">Підлога</h3>
									<ul class="equipment__content-list">
										<li class="equipment__content-item">
											Тип:
											<span> односмугова паркетна дошка</span>
										</li>
										<li class="equipment__content-item">
											Бренд:
											<span> Barlinek</span>
										</li>
										<li class="equipment__content-item">
											Матеріал:
											<span> дуб</span>
										</li>
										<li class="equipment__content-item">
											Колір:
											<span> Cappuccino Grande</span>
										</li>
										<li class="equipment__content-item">
											Конструкція:
											<span> 3-шарова</span>
										</li>
										<li class="equipment__content-item">
											Поверхня:
											<span> брашована</span>
										</li>
									</ul>
								</div>
							</div>
						</div>

						<!-- COVERING -->
						<div class="equipment__content-box covering-content tab-content tab-hide" data-tab="covering">
							<div class="equipment__content-box">
								<img class="equipment__content-img" src="images/project/villa-covering.jpg" alt="covering image">
								<div class="equipment__content-info">
									<h3 class="equipment__content-title">Покриття</h3>
									<ul class="equipment__content-list">
										<li class="equipment__content-item">
											Тип:
											<span> комбіноване</span>
										</li>
										<li class="equipment__content-item">
											Слої:
											<span> конструктивний, теплоізоляційний, декоративний</span>
										</li>
										<li class="equipment__content-item">
											Матеріал:
											<span> планкен термососна</span>
										</li>
									</ul>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</section>

		<section class="projects scroll-block">
			<div class="container">
				<h2 class="projects__title section-title">Наші проекти</h2>
			</div>
			<div class="big-container">
				<div class="projects__slider projects-slider">
					<div class="projects-slider__item" style="background-image: url(./images/projects/proj1.jpg)">
						<div class="projects-slider__item-inner">
							<div class="projects-slider__content">
								<h3 class="projects-slider__content-title">Вілла</h3>
								<ul class="projects-slider__content-list">
									<li class="projects-slider__content-item">двоповерховий</li>
									<li class="projects-slider__content-item">з житловою масандрою</li>
								</ul>
								<p class="projects-slider__content-description">Площа будинку: <span>235.8 м2</span></p>
								<p class="projects-slider__content-description">Введений в експлуатацію: <span>2019</span></p>
								<p class="projects-slider__content-text"></p>
								<a class="projects-slider__btn" href="villa.html">Детальніше</a>
							</div>
						</div>
					</div>
					<div class="projects-slider__item" style="background-image: url(./images/projects/proj2.jpg)">
						<div class="projects-slider__item-inner">
							<div class="projects-slider__content">
								<h3 class="projects-slider__content-title">Сімейний будинок</h3>
								<ul class="projects-slider__content-list">
									<li class="projects-slider__content-item">двоповерховий</li>
									<li class="projects-slider__content-item">з житловою масандрою</li>
								</ul>
								<p class="projects-slider__content-description">Площа будинку: <span>1110.5 м2</span></p>
								<p class="projects-slider__content-description">Введений в експлуатацію: <span>2023</span></p>
								<p class="projects-slider__content-text"></p>
								<a class="projects-slider__btn" href="family_house.html">Детальніше</a>
							</div>
						</div>
					</div>
					<div class="projects-slider__item" style="background-image: url(./images/projects/proj3.jpg)">
						<div class="projects-slider__item-inner">
							<div class="projects-slider__content">
								<h3 class="projects-slider__content-title">Скандинавський будинок</h3>
								<ul class="projects-slider__content-list">
									<li class="projects-slider__content-item">двоповерховий</li>
									<li class="projects-slider__content-item">з житловою масандрою</li>
								</ul>
								<p class="projects-slider__content-description">Площа будинку: <span>142.8 м2</span></p>
								<p class="projects-slider__content-description">Введений в експлуатацію: <span>2022</span></p>
								<p class="projects-slider__content-text"></p>
								<a class="projects-slider__btn" href="scandinavian.html">Детальніше</a>
							</div>
						</div>
					</div>
					<div class="projects-slider__item" style="background-image: url(./images/projects/proj4.jpg)">
						<div class="projects-slider__item-inner">
							<div class="projects-slider__content">
								<h3 class="projects-slider__content-title">Двоповерховий будинок</h3>
								<ul class="projects-slider__content-list">
									<li class="projects-slider__content-item">двоповерховий</li>
									<li class="projects-slider__content-item">з житловою масандрою</li>
								</ul>
								<p class="projects-slider__content-description">Площа будинку: <span>72.3 м2</span></p>
								<p class="projects-slider__content-description">Введений в експлуатацію: <span>2022</span></p>
								<p class="projects-slider__content-text"></p>
								<a class="projects-slider__btn" href="phoenix.html">Детальніше</a>
							</div>
						</div>
					</div>
					<div class="projects-slider__item" style="background-image: url(./images/projects/proj5.jpg)">
						<div class="projects-slider__item-inner">
							<div class="projects-slider__content">
								<h3 class="projects-slider__content-title">Модульний будинок</h3>
								<ul class="projects-slider__content-list">
									<li class="projects-slider__content-item">двоповерховий</li>
									<li class="projects-slider__content-item">з житловою масандрою</li>
								</ul>
								<p class="projects-slider__content-description">Площа будинку: <span>120 м2</span></p>
								<p class="projects-slider__content-description">Введений в експлуатацію: <span>2023</span></p>
								<p class="projects-slider__content-text"></p>
								<a class="projects-slider__btn" href="module_house.html">Детальніше</a>
							</div>
						</div>
					</div>
					<div class="projects-slider__item" style="background-image: url(./images/projects/proj6.jpg)">
						<div class="projects-slider__item-inner">
							<div class="projects-slider__content">
								<h3 class="projects-slider__content-title">Барнхаус</h3>
								<ul class="projects-slider__content-list">
									<li class="projects-slider__content-item">двоповерховий</li>
									<li class="projects-slider__content-item">з житловою масандрою</li>
								</ul>
								<p class="projects-slider__content-description">Площа будинку: <span>163.6 м2</span></p>
								<p class="projects-slider__content-description">Введений в експлуатацію: <span>2023</span></p>
								<p class="projects-slider__content-text"></p>
								<a class="projects-slider__btn" href="barnhouse.html">Детальніше</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="how scroll-block">
			<div class="big-container">
				<div class="container">
					<h2 class="section-title how__title">Як ми працюємо?</h2>
					<div class="how__box">
						<div class="how__item">
							<h4 class="how__item-title">Заявка</h4>
							<p class="how__item-text">
								Приймаємо заявку на сайті або телефоном, обговорюємо з Вами основні нюанси, готуємо комерційну
								пропозицію відповідно до Ваших вимог.
							</p>
						</div>
						<div class="how__item">
							<h4 class="how__item-title">Розробка проекту</h4>
							<p class="how__item-text">
								Розробляємо проекти будинків та план будівництва під Вас або модернізуємо старий, відштовхуючись від
								поставлених цілей.
							</p>
						</div>
						<div class="how__item">
							<h4 class="how__item-title">Вартість і дата здачі</h4>
							<p class="how__item-text">
								Розраховуємо кінцеву вартість та термін здачі будинку, враховуючи всі нюанси ділянки та складності
								робіт.
							</p>
						</div>
						<div class="how__item">
							<h4 class="how__item-title">Починаємо будівництво</h4>
							<p class="how__item-text">
								Починаємо будувати каркасний будинок, витримуємо всі технічні норми та терміни. Для цього ми
								використовуємо лише якісні матеріали.
							</p>
						</div>
						<div class="how__item item-promo">
							<p class="how__item-promo">
								Зроби свої 6 кроків назустріч будинку мрії!
							</p>
						</div>
						<div class="how__item">
							<h4 class="how__item-title">Інженерні системи</h4>
							<p class="how__item-text">
								Облаштовуємо в будинку всі необхідні інженерні системи: опалення, вентиляція, водопровід, каналізація,
								електропроводка.
							</p>
						</div>
						<div class="how__item">
							<h4 class="how__item-title">Здаємо будинок</h4>
							<p class="how__item-text">
								Готовий будинок здаємо під ключ власникам. Надаємо всі проектні документи та сертифікати. Будинок
								готовий до експлуатації.
							</p>
						</div>

					</div>
				</div>
				<div class="decoration"></div>
			</div>
		</section>
<?php endwhile; ?>
	</main>
	<?php get_footer(); 
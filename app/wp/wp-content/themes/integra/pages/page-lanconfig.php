<?php 
/* 
Template Name: lanconfig
*/ 
?>

<?php get_header(); ?>



	<div class="home-banner" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/banner-bg.png)">
		<div class="inner">
			<div class="banner__list">
				<div class="banner__descr">
					<h1 class="banner__title">Настройка сетевого оборудования</h1>
					<span class="banner__text">Делаем сеть Вашей компании по-настроящему безупречной.</span>
				</div>
				<div class="banner__img">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lanconfig/bg_img.png" alt="">
				</div>
			</div>
		</div>
	</div>

	<div class="lanconf1">
		<div class="inner">
			<div class="lanconf__line">
				<div class="lanconf__text">
					<span class="lanconf__notice">Настроить Wi-Fi или подключить Интернет может практически любой IT-шник. Мы
						также способны настраивать выход в Интернет и локальные сети, прокладывать кабели, но это не весь список
						наших возможностей. </span>
					<div class="block__blue">
						<span class="block__blue-not">
							<b>Сложные сети</b> – наша основная специализация
						</span>
					</div>
				</div>
				<div class="lanconf__img">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lanconfig/lanb1.png" alt="">
				</div>
			</div>
		</div>
	</div>

	<div class="adprocess" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/adsec2.jpg')">
		<div class="inner">
			<div class="adprocess__in">
				<h3 class="site__title">Какие сети мы проектируем и внедряем?
				</h3>
				<div class="adprocess-line">
					<span class="adsafe__item">
						<span class="adsafe__num">01</span>
						<span class="adsafe__img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lanconfig/lans1.png" alt=""></span>
						<span class="adsafe__notice">Сети компаний, имеющих разветвлённую филиальную структуру, где есть удалённые
							офисы и сотрудники.</span>
					</span>

					<span class="adsafe__item">
						<span class="adsafe__num">02</span>
						<span class="adsafe__img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lanconfig/lans2.png" alt=""></span>
						<span class="adsafe__notice">Крупные сети</span>
					</span>
					<span class="adsafe__item">
						<span class="adsafe__num">03</span>
						<span class="adsafe__img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lanconfig/lans3.png" alt=""></span>
						<span class="adsafe__notice">Сети с сегментацией на отделы и изоляцией отделов друг от друга</span>
					</span>
					<span class="adsafe__item">
						<span class="adsafe__num">04</span>
						<span class="adsafe__img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lanconfig/lans4.png" alt=""></span>
						<span class="adsafe__notice">Сети с повышенной отказоустойчивостью</span>
					</span>
					<span class="adsafe__item">
						<span class="adsafe__num">05</span>
						<span class="adsafe__img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lanconfig/lans5.png" alt=""></span>
						<span class="adsafe__notice">Сети с резервированием (подключением нескольких провайдеров)</span>
					</span>
					<span class="adsafe__item">
						<span class="adsafe__num">06</span>
						<span class="adsafe__img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lanconfig/lans6.png" alt=""></span>
						<span class="adsafe__notice">Сети с радиоканалами (когда нет возможности создать проводное
							соединение)</span>
					</span>
				</div>
			</div>
		</div>
	</div>

	<div class="mikrotik-form" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/lanconfig/form1bg.jpg')">
		<div class="inner">
			<div class="form__list">
				<div class="form__descr">
					<h3 class="form__title">
							Нужна <span>сложная корпоративная сеть</span> компании</h3>
					<span class="form__text">Проектируем сеть, подбираем и поставляем оборудование, выполняем тонкую настройку, производим монтаж оборудования и прокладку кабельных коммуникаций.</span>
				</div>
				<div class="form__col">
					<div class="form__links">
						<a class="form-open open-active" href="#tab1">Оставить заявку</a>
						<a class="form-open" href="#tab2">Заказать звонок</a>
					</div>
					<div id="tab1" class="tab tab-active">
						<form>
							<div class="form__field">
								<input type="text" name="Имя" placeholder="Имя" required="">
							</div>
							<div class="form__field">
								<input type="text" name="Email" placeholder="Email" required="">
							</div>
							<div class="form__field">
								<input type="tel" name="Телефон" placeholder="Телефон" required="">
							</div>
							<div class="form__sub">
								<div class="form__sbt">
									<input type="submit" value="Отправить заявку">
								</div>
								<div class="form__check">
									<input type="checkbox" checked="" required="">
									<span>Соглашение об обработке персональных данных</span>
								</div>
							</div>

						</form>
					</div>
					<div id="tab2" class="tab">
						<form>
							<div class="form__field">
								<input type="text" name="Имя" placeholder="Имя" required="">
							</div>
							<div class="form__field">
								<input type="tel" name="Телефон" placeholder="Телефон" required="">
							</div>
							<div class="form__text">
								<span class="time-work">Работаем по будням с 10:00 до 19:00. Заявки, отправленные в
									выходные, обрабатываем в первый рабочий день до 10:30</span>
							</div>
							<div class="form__sub">
								<div class="form__sbt">
									<input type="submit" value="Заказать">
								</div>
								<div class="form__check">
									<input type="checkbox" checked="" required="">
									<span>Соглашение об обработке персональных данных</span>
								</div>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="s-added">
		<div class="inner">
			<div class="add__title">
				<h3 class="site__title">Основные компоненты сетевых соединений, с которыми мы работаем:</h3>
			</div>
			<div class="add__list">
				<div class="add__col">
					<div class="add__item">
						<div class="add__img">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lanconfig/acom1.png" alt="">
						</div>
						<div class="add__descr">
							<span class="descr__title">Коммутаторы (свитчи)</span>
							<span class="descr__text">Эти устройства помогают «собирать» воедино все сетевые компоненты компании или её отдельных отделов в общую сеть.</span>
						</div>
					</div>
				</div>
				<div class="add__col">
					<div class="add__item">
						<div class="add__img">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lanconfig/acom2.png" alt="">
						</div>
						<div class="add__descr">
							<span class="descr__title">Маршрутизаторы (роутеры)</span>
							<span class="descr__text">Данные технические средства помогают сети, организованной через коммутаторы, подключаться к другим сетям, например, к Интернету.</span>
						</div>
					</div>
				</div>
				<div class="add__col">
					<div class="add__item">
						<div class="add__img">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lanconfig/acom3.png" alt="">
						</div>
						<div class="add__descr">
							<span class="descr__title">Проводные соединения</span>
							<span class="descr__text">Провода – основа Интернет-соединений. Важно следить за их состоянием и тем, как они подключены к сетевому оборудованию и компьютерам пользователей.</span>
						</div>
					</div>
				</div>
				<div class="add__col">
					<div class="add__item">
						<div class="add__img">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lanconfig/acom4.png" alt="">
						</div>
						<div class="add__descr">
							<span class="descr__title">Wi-Fi оборудование</span>
							<span class="descr__text">Доступ в Интернет без проводов получил широкое применение относительно недавно и используется практически повсеместно. Мы также можем настроить Wi-Fi.</span>
						</div>
					</div>
				</div>
				<div class="add__col">
					<div class="add__item">
						<div class="add__img">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lanconfig/acom5.png" alt="">
						</div>
						<div class="add__descr">
							<span class="descr__title">Программные и аппаратные фаерволы</span>
							<span class="descr__text">Фаерволы – специальные аппаратные или программные средства, которые увеличивают безопасность сети и фильтруют проходящий сетевой трафик в соответствии с заданными правилами.</span>
						</div>
					</div>
				</div>
				<div class="block__blue">
					<span class="block__blue-not">
						<span class="blue__title">
								И другие сетевые устройства
						</span>
						<span class="blue__text">
								Мы привели примеры наиболее популярных сетевых компонентов.  Информацию о ваших устройствах уточняйте по телефону +7 (495) 373 27 53 или через чат на сайте.
						</span>
					</span>
				</div>
			</div>
		</div>
	</div>

	<div class="ic-form">
			<div class="inner">
				<div class="form__container">
					<div class="form__list">
						<div class="form__descr">
							<span class="form__text">Сети - это наша ключевая компетенция.</span>
							<div class="adform__notice">Мы умеем делать сложные и надежные системы, которые обеспечат непрерывной работоспособностью как маленькую компанию с одним офисом, так и большой бизнес с сотнями рабочих мест и десятками удаленных офисов и подразделений.</div>
						</div>
						<div class="form__img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/adic-man.png" alt=""></div>
					</div>
					<div class="form__form">
						<form>
							<div class="form__field">
								<input type="text" name="Имя" placeholder="Имя">
							</div>
							<div class="form__field">
								<input type="text" name="Email" placeholder="Email">
							</div>
							<div class="form__field">
								<input type="tel" name="Телефон" placeholder="Телефон">
							</div>
							<div class="form__btn">
								<input type="submit" value="Отправить">
							</div>
						</form>
						<span>Нажимая на кнопку «Отправить» вы даете согласие на <a href="#">обработку персональных
								данных</a></span>
					</div>
				</div>
			</div>
		</div>


		<div class="home-expancion">
				<div class="inner">
					<div class="expans__list">
						<div class="expans__descr">
							<h3 class="site__title">
									Mikrotik
							</h3>
							<span class="expans__text">
								<b>Самое гибкое, надежное и функциональное сетевое оборудование. По сверхдоступной цене.</b>
<br><br>
									Для обычного IT-шника оно может показаться сложным, но за более чем 10 лет не нашлось ничего более подходящего для бизнеса.
									<br><br> 
									В штате нашей компании есть отличные специалисты, каждый из которых имеет официальные сертификаты. А некоторые из них – настоящие эксперты, которые обучают других работе с этим оборудованием в учебном центре. 
							</span>
							<div class="block__blue">
								<span class="block__blue-not">Мы умеем правильно подбирать и использовать различные <b>сетевые устройства Mikrotik</b> для бизнеса.</span>
							</div>
						</div>
						<div class="expanse__img">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lanconfig/mikroimg.png" alt="">
						</div>
					</div>
				</div>
			</div>

	<div class="mikrotik-form" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/lanconfig/form2bg.jpg')">
		<div class="inner">
			<div class="form__list">
				<div class="form__descr">
					<h3 class="form__title">
							Мы практически уверены, что Mikrotik уже используется в Вашей компании. 
							<span>Мы поможем вывести его возможности на 120% для Вашего бизнеса.</span></h3>
					<span class="form__text">Свяжитесь с нами по телефону +7 (495) 373 27 53 или оставьте свои контакты, мы сами вам позвоним и проконсультируем! </span>
				</div>
				<div class="form__col">
					<div class="form__links">
						<a class="form-open open-active" href="#tab1">Оставить заявку</a>
						<a class="form-open" href="#tab2">Заказать звонок</a>
					</div>
					<div id="tab1" class="tab tab-active">
						<form>
							<div class="form__field">
								<input type="text" name="Имя" placeholder="Имя" required="">
							</div>
							<div class="form__field">
								<input type="text" name="Email" placeholder="Email" required="">
							</div>
							<div class="form__field">
								<input type="tel" name="Телефон" placeholder="Телефон" required="">
							</div>
							<div class="form__sub">
								<div class="form__sbt">
									<input type="submit" value="Отправить заявку">
								</div>
								<div class="form__check">
									<input type="checkbox" checked="" required="">
									<span>Соглашение об обработке персональных данных</span>
								</div>
							</div>

						</form>
					</div>
					<div id="tab2" class="tab">
						<form>
							<div class="form__field">
								<input type="text" name="Имя" placeholder="Имя" required="">
							</div>
							<div class="form__field">
								<input type="tel" name="Телефон" placeholder="Телефон" required="">
							</div>
							<div class="form__text">
								<span class="time-work">Работаем по будням с 10:00 до 19:00. Заявки, отправленные в
									выходные, обрабатываем в первый рабочий день до 10:30</span>
							</div>
							<div class="form__sub">
								<div class="form__sbt">
									<input type="submit" value="Заказать">
								</div>
								<div class="form__check">
									<input type="checkbox" checked="" required="">
									<span>Соглашение об обработке персональных данных</span>
								</div>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="linux-aswell">
			<div class="inner">
					<div class="section__title">
							<h3 class="site__title">Как происходит настройка сети компании?</h3>
					</div>
					<div class="aswell__list">
							<div class="aswell__item">
									<span class="num">01</span>
									<span class="blue__block"></span>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lanconfig/lhap1.png" alt="">
									<span class="aswell__item-title">Обращение к прошлому опыту
									</span>
									<span class="aswell__item-text">У нас есть сотни реализованных проектов. Первым делом мы стараемся найти похожий, анализируем его и приводим в соответствие с вашими требованиями.</span>
							</div>
							<div class="aswell__item">
									<span class="num">02</span>
									<span class="blue__block"></span>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lanconfig/lhap2.png" alt="">
									<span class="aswell__item-title">Проектирование</span>
									<span class="aswell__item-text">Если среди кейсов не нашлось подходящего, наши эксперты по сетям проектируют конфигурацию для вашей компании в соответствии с требованиями. Это может происходить как на реальных, так и на виртуальных сетевых устройствах. <b>Мы помогаем клиентам подбирать оборудование под те или иные задачи.</b> </span>
							</div>
							<div class="aswell__item">
									<span class="num">03</span>
									<span class="blue__block"></span>
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/lanconfig/lhap3.png" alt="">
									<span class="aswell__item-title">Внедрение сети
									</span>
									<span class="aswell__item-text">После того, как сеть спроектирована, оборудование закуплено и проверено, мы приступаем к установке на объекте.</span>
							</div>
					</div>
			</div>
	</div>


	<div class="home-cost">
			<div class="inner">
				<div class="cost__block">
					<h3 class="site__title">Стоимость услуг</h3>
					<span class="cost__text">
						<span class="cost__item-title">Как правило, мы оцениваем стоимость настройки в часах работы.
							</span>
							<ul>
								<li>Один норма-час стоит - 2 200 рублей.</li>
								<li>Базовая настройка Mikrotik, VPN или Qos (2 норма-часа) – 4 400 рублей.</li>
							</ul>
							<span class="cost__item-not">
									Когда компания пользуется IT-аутсорсингом от нашей компании, настройка и проектирование сетевого оборудования осуществляется бесплатно.
							</span>
					</span>
				</div>
			</div>
		</div>







<?php get_footer(); ?>
<?php 
/* 
Template Name: Главная
*/ 
?>

<?php get_header(); ?>

<div class="home-banner" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/home/banner-bg.png)">
		<div class="inner">
			<div class="banner__list">
				<div class="banner__img">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/banner-img.png" alt="">
				</div>
			</div>
		</div>
	</div>

    <section class="block2">
        <div class="inner">
            <div class="block2__list">
                <div class="poss__list">
                    <div class="poss__item poss-first">
                        <svg xmlns="http://www.w3.org/2000/svg" width="70" fill="#f76840" height="70" viewBox="0 0 70 70"><g><g><path  d="M13.808 36.2v-.713c0-.613-.498-1.111-1.11-1.111H11.63a1.468 1.468 0 0 0 0 2.936h.712a3.527 3.527 0 0 1 3.52 3.525 3.529 3.529 0 0 1-2.849 3.46v1.177a1.028 1.028 0 1 1-2.054 0v-1.127a3.172 3.172 0 0 1-2.85-3.153 1.029 1.029 0 0 1 2.055 0c0 .612.498 1.111 1.11 1.111h1.068a1.468 1.468 0 0 0 0-2.936h-.712a3.527 3.527 0 0 1-.671-6.986v-1.176a1.028 1.028 0 1 1 2.055 0v1.127a3.172 3.172 0 0 1 2.849 3.153v.713a1.028 1.028 0 1 1-2.055 0zM36.822 9.863v-.714c0-.613-.498-1.111-1.11-1.111h-1.068a1.468 1.468 0 0 0 0 2.935h.712a3.527 3.527 0 0 1 .671 6.987v1.175a1.029 1.029 0 1 1-2.055 0V18.01a3.172 3.172 0 0 1-2.849-3.154 1.028 1.028 0 1 1 2.055 0c0 .613.498 1.112 1.11 1.112h1.068a1.468 1.468 0 0 0 0-2.936h-.712a3.527 3.527 0 0 1-3.52-3.525 3.529 3.529 0 0 1 2.849-3.46V4.869a1.028 1.028 0 1 1 2.054 0v1.127a3.172 3.172 0 0 1 2.85 3.153v.714a1.028 1.028 0 1 1-2.055 0zM70 31.756c0 6.618-5.377 12.003-11.986 12.003-6.61 0-11.987-5.385-11.987-12.003 0-2.903 1.035-5.568 2.754-7.646l-4.883-4.075A11.951 11.951 0 0 1 35 24.005c-2.392 0-4.622-.705-6.495-1.919l-8.375 7.455a11.98 11.98 0 0 1 3.842 8.8c0 6.618-5.377 12.002-11.986 12.002C5.377 50.343 0 44.96 0 38.34c0-6.618 5.377-12.003 11.986-12.003 2.392 0 4.622.706 6.495 1.92l8.375-7.456a11.98 11.98 0 0 1-3.842-8.798C23.014 5.383 28.39-.001 35-.001c6.61 0 11.986 5.385 11.986 12.004 0 2.347-.677 4.54-1.845 6.39l5.086 4.245a11.927 11.927 0 0 1 7.787-2.885C64.623 19.753 70 25.137 70 31.756zm-58.014-3.36c-5.476 0-9.931 4.46-9.931 9.944 0 5.485 4.455 9.946 9.931 9.946 5.476 0 9.932-4.461 9.932-9.946 0-5.484-4.455-9.945-9.932-9.945zm32.945-16.393c0-5.485-4.455-9.946-9.931-9.946-5.476 0-9.932 4.461-9.932 9.946 0 5.483 4.456 9.944 9.932 9.944s9.931-4.46 9.931-9.944zm23.014 19.753c0-5.484-4.455-9.945-9.932-9.945-2.583 0-4.94.994-6.708 2.618a1.015 1.015 0 0 1-.607.61 9.913 9.913 0 0 0-2.616 6.717c0 5.484 4.455 9.946 9.932 9.946 5.476 0 9.931-4.462 9.931-9.946zm-8.11-2.14v-.714c0-.612-.497-1.11-1.11-1.11h-1.068a1.468 1.468 0 0 0 0 2.935h.713a3.527 3.527 0 0 1 3.52 3.525 3.53 3.53 0 0 1-2.85 3.46v1.177a1.028 1.028 0 1 1-2.054 0v-1.127a3.17 3.17 0 0 1-2.85-3.153 1.028 1.028 0 1 1 2.055 0c0 .613.498 1.111 1.11 1.111h1.068a1.468 1.468 0 0 0 0-2.936h-.712a3.527 3.527 0 0 1-3.52-3.524 3.53 3.53 0 0 1 2.85-3.46v-1.178a1.028 1.028 0 1 1 2.054 0v1.128a3.17 3.17 0 0 1 2.85 3.152v.714a1.028 1.028 0 1 1-2.056 0zM22.877 54.802v14.169c0 .568-.46 1.028-1.028 1.028h-8.767c-.567 0-1.027-.46-1.027-1.028V54.802c0-.569.46-1.03 1.027-1.03h8.767c.568 0 1.028.461 1.028 1.03zm-2.055 1.029H14.11v12.11h6.712zm44.794-1.029v14.169c0 .568-.46 1.028-1.027 1.028h-8.767c-.568 0-1.028-.46-1.028-1.028V54.802c0-.569.46-1.03 1.028-1.03h8.767c.568 0 1.027.461 1.027 1.03zm-2.054 1.029h-6.713v12.11h6.713zm-28.494 1.235V42.66h-6.712v25.28h6.712v-6.074a1.028 1.028 0 1 1 2.055 0v7.104c0 .568-.46 1.028-1.027 1.028h-8.767c-.568 0-1.028-.46-1.028-1.028V41.633c0-.569.46-1.03 1.028-1.03h8.767c.567 0 1.027.461 1.027 1.03v15.433a1.028 1.028 0 1 1-2.055 0zm16.302-8.849v20.754c0 .568-.46 1.028-1.028 1.028h-8.767c-.567 0-1.027-.46-1.027-1.028V48.217c0-.568.46-1.028 1.027-1.028h8.767c.568 0 1.028.46 1.028 1.028zm-2.055 1.029h-6.712V67.94h6.712z"/></g></g></svg>
                        <span class="poss__item-text">Сокращаем расходы на IT</span>
                    </div>
                    <div class="poss__item poss-second">
                       <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="70" height="70" fill="#f76840" viewBox="0 0 70 70"><g><g><image width="70" height="70" xlink:href="data:image/png;base64,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"/></g></g></svg>
                        <span class="poss__item-text">Предоставляем множество специалистов за заработную плату одного сотрудника</span>
                    </div>
                    <div class="poss__item poss-third">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="70" height="70" viewBox="0 0 70 70"><g><g><image width="70" height="70" xlink:href="data:image/png;base64,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"/></g></g></svg>
                        <span class="poss__item-text">Оказываем комплексный набор услуг</span>
                    </div>
                    <div class="poss__item poss-fourth">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="69" height="70" viewBox="0 0 69 70"><g><g><image width="69" height="70" xlink:href="data:image/png;base64,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"/></g></g></svg>
                        <span class="poss__item-text">Можем выполнять несколько задач одновременно</span>
                    </div>
                </div>
                <div class="block2__img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/block2.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="block3">
        <div class="block__head">
            <div class="inner">
                <h2 class="block3__title">Направления деятельности</h2>
            </div>
            <div class="bg__text">IT как драйвер роста бизнеса</div>
        </div>
        <div class="inner">
            <div class="prof__line">
                <div class="prof__block">
                    <div class="prof__block_descr">
                        <span class="num">01</span>
                        <span class="descr__title">IT-аутсорсинг</span>
                        <ul>
                            <li><a href="#">Аутстаффинг</a></li>
                            <li><a href="#">Аутсорсинг</a></li>
                            <li><a href="#">Первая линия поддержки
</a></li>
                            <li><a href="#">Поддержка 1С
</a></li>
                            <li><a href="#">IT-директор</a></li>
                        </ul>
                    </div>
                    <div class="prof__block_img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/block31.png" alt="">
                    </div>
                </div>
            </div>
            <div class="prof__line">
                <div class="prof__block">
                    <div class="prof__block_descr">
                        <span class="num">02</span>
                        <span class="descr__title">Проектные решения
</span>
                        <ul>
                            <li><a href="#">Виртуализация</a></li>
                            <li><a href="#">Кластерные системы
</a></li>
                            <li><a href="#">Высоконагруженные системы
</a></li>
                            <li><a href="#">Контейнеры: Docker & Kubernetes
</a></li>
                            <li><a href="#">IP-телефония
</a></li>
                            <li><a href="#">RDP-системы
</a></li>
                            <li><a href="#">WiFi-системы
</a></li>
                            <li><a href="#">DECT-системы
</a></li>
                            <li><a href="#">Легализация ПО</a></li>
                        </ul>
                    </div>
                    <div class="prof__block_img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/block32.png" alt="">
                    </div>
                </div>
            </div>
            <div class="prof__line">
                <div class="prof__block">
                    <div class="prof__block_descr">
                        <span class="num">03</span>
                        <span class="descr__title">Мониторинг</span>
                        <ul>
                            <li><a href="#">Резервное копирование
</a></li>
                            <li><a href="#">Аудит ИТ-систем
</a></li>
                            <li><a href="#">Настройка сетевого оборудования
</a></li>
                            <li><a href="#">Автоматизация
</a></li>
                            <li><a href="#">Оптимизация серверов
</a></li>
                            <li><a href="#">Профилактика рабочих станций
</a></li>
                        </ul>
                    </div>
                    <div class="prof__block_img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/block33.png" alt="">
                    </div>
                </div>
            </div>
            <div class="prof__line">
                <div class="prof__block">
                    <div class="prof__block_descr">
                        <span class="num">04</span>
                        <span class="descr__title">Безопасный офис
</span>
                        <ul>
                            <li><a href="#">Серверы за границей
</a></li>
                            <li><a href="#">Видеонаблюдение
</a></li>
                            <li><a href="#">Контроль сотрудников
</a></li>
                            <li><a href="#">Учет рабочего времени
</a></li>
                            <li><a href="#">Речевая аналитика
</a></li>
                            <li><a href="#">Защита от утечек данных
</a></li>
                            <li><a href="#">VPN-сети</a></li>
                        </ul>
                    </div>
                    <div class="prof__block_img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/block34.png" alt="">
                    </div>
                </div>
            </div>
            <div class="prof__line">
                <div class="prof__block">
                    <div class="prof__block_descr">
                        <span class="num">05</span>
                        <span class="descr__title">Вендорные решения
</span>
                        <ul>
                            <li><a href="#">Mikrotik</a></li>
                            <li><a href="#">Linux</a></li>
                            <li><a href="#">Microsoft</a></li>
                            <li><a href="#">Nutanix</a></li>
                            <li><a href="#">PostgreSQL</a></li>
                            <li><a href="#">1C</a></li>
                            <li><a href="#">VMWare</a></li>
                            <li><a href="#">Zimbra </a></li>
                            <li><a href="#">Proxmox</a></li>
                        </ul>
                    </div>
                    <div class="prof__block_img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/block35.png" alt="">
                    </div>
                </div>
            </div>
            <div class="prof__line">
                <div class="prof__block">
                    <div class="prof__block_descr">
                        <span class="num">06</span>
                        <span class="descr__title">СКС (структурированные кабельные системы)
</span>
                        <ul>
                            <li><a href="#">Идеальная серверная
</a></li>
                            <li><a href="#">Монтаж СКС
</a></li>
                            <li><a href="#">Монтаж ВОЛС
</a></li>
                            <li><a href="#">Радиомосты</a></li>
                            <li><a href="#">Пожарная и охранная безопасность</a></li>
                        </ul>
                    </div>
                    <div class="prof__block_img">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/block36.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="formw">
        <div class="inner">
            <div class="formw__list">
                <div class="formw-img">
                    <h3 class="site__title">Форматы работы с нами</h3>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/block4.png" alt="">
                </div>
                <div class="formw__block">
                    <div class="formw__item">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/block41.png" alt="">
                        <span class="item__title">Дистанционная поддержка с выездами специалиста</span>
						<span class="item__text">Часть возникающих проблем специалист решает удалённо, в случае необходимости выезжает на место.
                            <span>100% проблем гарантированно будут решены.</span></span>
                        <div class="price">
                            <span class="price__title">стоимость:</span>
                            <span class="price__num">от 20 000 рублей</span>
                        </div>
                        <a href="#" class="more__link">подробнее</a>
						<span class="num">01</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sale">
        <div class="inner">
            <div class="sale__list">
                <div class="formw__item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/block42.png" alt="">
                    <span class="item__title">Дистанционная поддержка</span>
                    <span class="item__text">ЧНаш сотрудник в случае неполадок в IT подключается удалённо через Team Viewer, AnyDesk, AnyAdmin и т.д. и решает проблему. В данный пакет услуг не входит выезд специалиста, но он возможен с отдельной оплатой.
                        <span>Удалённо можно решить до 85% проблем.</span></span>
                    <div class="price">
                        <span class="price__title">стоимость:</span>
                        <span class="price__num">от 15 000 рублей</span>
                    </div>
                    <a href="#" class="more__link">подробнее</a>
                    <span class="num">02</span>
                </div>
                <div class="formw__item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/block43.png" alt="">
                    <span class="item__title">Аутстаффинг</span>
                    <span class="item__text">Наш сотрудник работает в вашем офисе как штатный специалист, но при этом мы оперативно можем заменить его на другого в случае необходимости. Такому работнику не требуется оформление по ТК, платить налоги также не нужно, расходы на услуги учитываются как операционные. </span>
                    <div class="price">
                        <span class="price__title">стоимость:</span>
                        <span class="price__num">от 50 000 рублей</span>
                    </div>
                    <a href="#" class="more__link">подробнее</a>
                    <span class="num">03</span>
                </div>
                <div class="formw__item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/block44.png" alt="">
                    <span class="item__title">Аутстаффинг + Аутсорсинг</span>
                    <span class="item__text">Наш IT-шник находится в вашей компании и решает базовые задачи. Более опытные специалисты занимаются удалённым обслуживанием и устраняют сложные неполадки. </span>
                    <div class="price">
                        <span class="price__title">стоимость:</span>
                        <span class="price__num">от 120 000 рублей</span>
                    </div>
                    <a href="#" class="more__link">подробнее</a>
                    <span class="num">04</span>
                </div>
            </div>
        </div>
    </section>

    <div class="mikrotik-form">
		<div class="inner">
			<div class="form__list">
				<div class="form__descr">
					<h3 class="form__title">
						Штатный сисадмин занимается поддержкой, а не развитием?
                    </h3>
                    <span class="form__text-blue">Мы занимаемся и тем, и другим. Составляем план развития ИТ в компании, внедряем ИТ-решения, которые будут приносить дополнительную прибыль, сокращаем издержки на ИТ.
                    </span>
					<span class="form__text">Оставьте свои контакты, специалист с вами свяжется и проконсультирует.</span>
				</div>
				<div class="form__col">
					<div class="form__links">
						<a class="form-open open-active" href="#tab1">Оставить заявку</a>
						<a class="form-open" href="#tab2">Заказать звонок</a>
					</div>
					<div id="tab1" class="tab tab-active">
						<form>
							<div class="form__field">
								<input type="text" name="Имя" placeholder="Имя" required>
							</div>
							<div class="form__field">
								<input type="text" name="Email" placeholder="Email" required>
							</div>
							<div class="form__field">
								<input type="tel" name="Телефон" placeholder="Телефон" required>
							</div>
							<div class="form__sub">
								<div class="form__sbt">
									<input type="submit" value="Заказать">
								</div>
								<div class="form__check">
									<input type="checkbox" checked required>
									<span>Соглашение об обработке персональных данных</span>
								</div>
							</div>

						</form>
					</div>
					<div id="tab2" class="tab">
						<form>
							<div class="form__field">
								<input type="text" name="Имя" placeholder="Имя" required>
							</div>
							<div class="form__field">
								<input type="tel" name="Телефон" placeholder="Телефон" required>
							</div>
							<div class="form__text">
								<span class="time-work">Работаем по будням с 10:00 до 19:00. Заявки, отправленные в выходные, обрабатываем в первый рабочий день до 10:30</span>
							</div>
							<div class="form__sub">
								<div class="form__sbt">
									<input type="submit" value="Заказать">
								</div>
								<div class="form__check">
									<input type="checkbox" checked required>
									<span>Соглашение об обработке персональных данных</span>
								</div>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
    </div>
    
    <section class="spok">
        <div class="inner">
            <div class="spok__first">
                <div class="spo__title">
                    <h3 class="site__title">Спокойствие как услуга</h3>
                    <span class="title__text">Отвечаем деньгами за простой и проблемы в Вашем ИТ по SLA</span>
                </div>
                <div class="spo__fdescr">
                    <div class="fdescr">
                        <span class="ftitle">SLA (англ. Service Level Agreement)</span>
                        <span class="ftext">– договор, в котором указывается описание услуги, права и обязанности сторон, уровень обслуживания. </span>
                    </div>
                </div>
            </div>
            <div class="spok__body">
                <div class="spok__left">
                    <span class="col__title">Сроки реакции на инцидент
                    </span>
                    <span class="col__text">Мы делим технические проблемы на 3 категории:
                    </span>
                    <div class="block">
                        <span class="block__title">Критические </span>
                        <span class="block__text">Ставят работу компании под угрозу. Время реакции на них – <b>до 10 минут</b>.
                        </span>
                    </div>
                    <div class="block">
                        <span class="block__title">Стандартные</span>
                        <span class="block__text">Менее опасные ситуации, специалист реагирует на них в течение 
                        <b>30 минут.</b>.
                        </span>
                    </div>
                    <div class="block">
                        <span class="block__title">Не срочные</span>
                        <span class="block__text">Требуют внимания, но «могут подождать». <b>Приступаем к решению в течение часа</b>.
                        </span>
                    </div>
                </div>
                <div class="spok__center">
                    <span class="spok__title">SLA-соглашение <br> включает в себя:</span>
                </div>
                <div class="spok__right">
                    <div class="right__block">
                        <span class="col__title">Критические сервисы
                        </span>
                        <span class="block__text">Мы анализируем IT-инфраструктуру компании и указываем те системы, которые находятся в зоне риска.</span>
                    </div>
                    <div class="right__block">
                        <span class="col__title">Ответственность сторон
</span>
                        <span class="block__text">Набор взаимных прав и обязанностей также закрепляется в договоре. Это обеспечит юридическую чистоту нашего сотрудничества. </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tabu">
        <div class="inner">
            <h3 class="site__title">Будем полезны Вашему бизнесу в следующих случаях</h3>
            <div class="tab__contain">
                <div class="tab__links">
                    <a href="#tab1" class="tab__link link-active">
                        <div class="link__thumb"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/tab1.png" alt=""></div>
                        <span>Нет штатного системного администратора</span>
                    </a>
                    <a href="#tab2" class="tab__link">
                        <div class="link__thumb"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/tab2.png" alt=""></div>
                        <span>Сотрудники выполняют работу сисадмина</span>
                    </a>
                    <a href="#tab3" class="tab__link">
                        <div class="link__thumb"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/tab3.png" alt=""></div>
                        <span>Штатный IT-шник не эффективен</span>
                    </a>
                    <a href="#tab4" class="tab__link">
                        <div class="link__thumb"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/tab4.png" alt=""></div>
                        <span>Не хватает компетенции на решение сложных задач</span>
                    </a>
                </div>
                <div class="tab__wrap">
                    <div class="tab tab-active" id="tab1">
                        <div class="tab__descr">
                            <span class="tab__title">Нет штатного системного администратора
                            </span>
                            <div class="tab__text">IT-инфраструктура нуждается в наблюдении специалиста, а возможности нанять штатного IT-шника нет? Обратите внимания на аутсорсинг, зачастую, он обходится дешевле, чем заработная плата работника в штате.</div>
                            <span class="num">01</span>
                        </div>
                        <div class="tab__img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/t1.png" alt="">
                        </div>
                    </div>
                    <div class="tab" id="tab2">
                        <div class="tab__descr">
                            <span class="tab__title">Сотрудники выполняют работу сисадмина
                            </span>
                            <div class="tab__text">Ваши работникиv вместо основной деятельности решают проблемы с IT и тратят на это гораздо больше времени, чем квалифицированный специалист? Доверьте эту работу профессионалам, а освобожденное время ваших сотрудников можно направить на получение прибыли для компании.</div>
                            <span class="num">02</span>
                        </div>
                        <div class="tab__img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/t2.png" alt="">
                        </div>
                    </div>
                    <div class="tab" id="tab3">
                        <div class="tab__descr">
                            <span class="tab__title">Штатный IT-шник не эффективен
                            </span>
                            <div class="tab__text">Мы можем полностью заменить штатного IT-специалиста, взять на себя часть задач или координировать его действия. Обслуживание IT-инфраструктуры станет более эффективным за счёт распределения обязанностей и чёткого планирования.</div>
                            <span class="num">03</span>
                        </div>
                        <div class="tab__img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/t3.png" alt="">
                        </div>
                    </div>
                    <div class="tab" id="tab4">
                        <div class="tab__descr">
                            <span class="tab__title">Не хватает компетенции на решение сложных задач
                            </span>
                            <div class="tab__text">В компании есть сложные IT-системы, дорогостоящее оборудование и уникальная реализация бизнес-логики? Иногда для внедрения определённых идей может не хватать компетенции штатного сисадмина. Мы можем решать ваши самые сложные задачи. У нас есть специалисты по: безопасности, сетям, Linux’u, серверам, видеонаблюдению и другим системам.</div>
                            <span class="num">04</span>
                        </div>
                        <div class="tab__img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/t4.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="itil">
        <div class="inner">
            <div class="itil__list">
                <div class="bg">ITIL</div>
                <div class="itil__title">
                    <h3 class="site__title">
                        Стандарты ITIL на службе Вашего бизнеса
                    </h3>
                </div>
                <div class="itil__descr">
                    <div class="itil__info">
                        <span class="title">ITIL (айтил) -
                        </span>
                        <span class="text">методология управления, отладки и постоянного улучшения бизнес-процессов в IT. В библиотеке ITIL содержится подробный набор наилучших мировых практик, которые мы используем в рамках аутсорсинга. </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="pozv">
        <div class="inner">
            <div class="poz__list">
                <div class="poz__img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/chel.png" alt="">
                </div>
                <div class="poz__descr">
                    <span class="title">
                        Эти методы позволяют:
                    </span>
                    <ul>
                        <li>регламентировать все бизнес-процессы и процедуры с последующим контролем их выполнения; 
                        </li>
                        <li>увеличить гибкость управления IT-отделом на аутсорсинге; 
                        </li>
                        <li>повысить эффективность технической поддержки; 
                        </li>
                        <li>сделать работу IT-подразделения более понятной для бизнеса; 
                        </li>
                        <li>разработать стратегию IT-развития.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="n-features">
        <div class="inner">
            <div class="features__list">
                <h3 class="features__title">Этапы <br>
                    <span class="name">ITIL</span> <span class="number">5</span></h3>
                <div class="features__item">
                    <span class="num">01</span>
                    <span class="feat__title">Разработка стратегии
                    </span>
                    <span class="feat__text">После обращения в нашу компанию, мы составляем для вас индивидуальную стратегию IT-развития.</span>
                </div>
                <div class="features__item"></div>
                <div class="features__item">
                    <span class="num">05</span>
                    <span class="feat__title">Непрерывное <br> совершенствование
                    </span>
                    <span class="feat__text">На основе собранных данных мы регулярно делаем выводы, анализируем недочёты, принимаем меры по улучшению качества обслуживания.</span>
                </div>
            </div>
            <div class="features__list">
                <div class="features__item">
                    <span class="num">02</span>
                    <span class="feat__title">Проектирование </span>
                    <span class="feat__text">Определив приоритетные направления, мы прорабатываем все шаги более детально и знакомим вас с каждым из этапов.</span>
                </div>
                <div class="features__item">
                    <span class="num">03</span>
                    <span class="feat__title">Внедрение</span>
                    <span class="feat__text">На основе разработанных проекта и стратегии мы приступаем к внедрению нашего IT-отдела в вашу компанию.</span>
                </div>
                <div class="features__item">
                    <span class="num">04</span>
                    <span class="feat__title">Использование </span>
                    <span class="feat__text">После внедрения вы приступаете к использованию наших услуг. Мы регистрируем большую часть обращений от ваших сотрудников в специальной системе и предоставляем вам доступ к ней.</span>
                </div>
            </div>
        </div>
    </div>

    <div class="linux-aswell">
		<div class="inner">
			<h3 class="site__title">Концепции ITIL, которых мы придерживаемся:</h3>
			<div class="aswell__list">
				<div class="aswell__item">
					<span class="num">01</span>
					<span class="blue__block"></span>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/block51.png" alt="">
					<span class="aswell__item-title">Ориентируемся на бизнес-задачи клиента и измеримые показатели
					</span>
				</div>
				<div class="aswell__item">
					<span class="num">02</span>
					<span class="blue__block"></span>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/block52.png" alt="">
					<span class="aswell__item-title">Постоянно мониторим вашу IT-инфраструктуру</span>
				</div>
				<div class="aswell__item">
					<span class="num">03</span>
					<span class="blue__block"></span>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/block53.png" alt="">
					<span class="aswell__item-title">Применяем специальные инструменты для организация совместной работы всех сотрудников технической поддержки
</span>
				</div>
				<div class="aswell__item">
					<span class="num">04</span>
					<span class="blue__block"></span>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/block54.png" alt="">
					<span class="aswell__item-title">Помимо восстановления обслуживания также анализируем ключевые причины сбоев и обеспечиваем готовность необходимых вычислительных мощностей.</span>
				</div>
			</div>
		</div>
    </div>
    


    <div class="ic-form">
        <div class="inner">
            <div class="form__container">
                <div class="form__list">
                    <div class="form__descr">
                        <span class="form__text">Мы реализовали сотни проектов для небольших компаний и точно знаем, как сделать телефонию, которая не только полностью окупиться за 6-8 месяцев, но и станет драйвером роста бизнеса на ближайшие несколько лет</span>
                    </div>
                    <div class="form__img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/form.png" alt=""></div>
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
                    <span>Нажимая на кнопку «Отправить» вы даете согласие на <a href="#">обработку персональных данных</a></span>
                </div>
            </div>
        </div>
    </div>

    <div class="linux-youcompany">
		<div class="company__list">
			<div class="company__controls">
				<h3 class="site__title">Наши кейсы</h3>
				<div class="controls">
					<a href="#" class="sl-prev3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linux/sl-prev.png" alt=""></a>
					<a href="#" class="sl-next3"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linux/sl-next.png" alt=""></a>
				</div>
			</div>
			<div class="company__sl">
				<div class="company__slider1">
					<div class="item">
						<div class="item__list">
                            <div class="item__descr">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/logo-item.png" alt="">
                                <span class="item__title">Компания “А”
                                </span>
                                <span class="item__text">Компания «А» решила открыть филиалы в Новосибирске и Екатеринбурге. В штате организации не было специалистов, способных выполнить данную задачу. Мы предложили услугу «IT-директор». В течение нескольких месяцев разрабатывался и реализовывался проект. Филиалы были открыты и подключены к нашему IT-аутсорсингу. Мы продолжаем сотрудничество. </span>
                            </div>
                            <div class="item__img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/list.png" alt=""></div>
                        </div>
					</div>
					<div class="item">
						<div class="item__list">
                            <div class="item__descr">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/logo-item.png" alt="">
                                <span class="item__title">Компания “А”
                                </span>
                                <span class="item__text">Компания «А» решила открыть филиалы в Новосибирске и Екатеринбурге. В штате организации не было специалистов, способных выполнить данную задачу. Мы предложили услугу «IT-директор». В течение нескольких месяцев разрабатывался и реализовывался проект. Филиалы были открыты и подключены к нашему IT-аутсорсингу. Мы продолжаем сотрудничество. </span>
                            </div>
                            <div class="item__img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/list.png" alt=""></div>
                        </div>
                    </div>
                    <div class="item">
						<div class="item__list">
                            <div class="item__descr">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/logo-item.png" alt="">
                                <span class="item__title">Компания “А”
                                </span>
                                <span class="item__text">Компания «А» решила открыть филиалы в Новосибирске и Екатеринбурге. В штате организации не было специалистов, способных выполнить данную задачу. Мы предложили услугу «IT-директор». В течение нескольких месяцев разрабатывался и реализовывался проект. Филиалы были открыты и подключены к нашему IT-аутсорсингу. Мы продолжаем сотрудничество. </span>
                            </div>
                            <div class="item__img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/list.png" alt=""></div>
                        </div>
                    </div>
                    <div class="item">
						<div class="item__list">
                            <div class="item__descr">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/logo-item.png" alt="">
                                <span class="item__title">Компания “А”
                                </span>
                                <span class="item__text">Компания «А» решила открыть филиалы в Новосибирске и Екатеринбурге. В штате организации не было специалистов, способных выполнить данную задачу. Мы предложили услугу «IT-директор». В течение нескольких месяцев разрабатывался и реализовывался проект. Филиалы были открыты и подключены к нашему IT-аутсорсингу. Мы продолжаем сотрудничество. </span>
                            </div>
                            <div class="item__img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/list.png" alt=""></div>
                        </div>
					</div>
				</div>
			</div>
		</div>
    </div>
    
    <div class="mikrotik-form2">
		<div class="inner">
            <div class="form__links">
                <a class="form-open1 open-active" href="#tab-form1">Запросить цену</a>
                <a class="form-open1" href="#tab-form2">Запросить аудит</a>
            </div>
			<div class="form__list">
				<div class="form__descr">
                    <div id="tab-form1" class="tab-form tab-active">
                        <div class="tab__img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/formtab1.png" alt="">
                        </div>
                        <div class="tab__descr">
                            <span class="descr__title">
                                Узнайте предварительную стоимость ИТ-поддержки Вашей компании уже через 10 минут
                            </span>
                            <div class="descr__info">
                                <span class="info"><b>P.s.</b> Мы работаем только с теми компаниями, где уверенны, что наша работа принесет пользу клиенту и будет рентабельна и самоокупаема.</span>
                            </div>
                        </div>
                    </div>
                    <div id="tab-form2" class="tab-form">
                        <div class="tab__img">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/home/formtab2.png" alt="">
                        </div>
                        <div class="tab__descr">
                            <span class="descr__title">
                                Запросите проведение аудита
                            </span>
                            <span class="descr__text">Аудит - это комплексное исследование ИТ в Вашем бизнесе, оценка сильных и слабых мест, зон уязвимости и точек роста.
                            </span>
                            <span class="descr__textb">Предпроектный аудит мы проводим бесплатно.
                            </span>
                            <div class="descr__info">
                                <span class="info"><b>P.s.</b> В результате Вы получите отчет, результаты которого сможете применить как с нашей помощью, так и действуя самостоятельно.</span>
                            </div>
                        </div>
                    </div>
				</div>
				<div class="form__col">
					<div>
						<form>
							<div class="form__field">
								<input type="text" name="Имя" placeholder="Имя" required>
							</div>
							<div class="form__field">
								<input type="text" name="Email" placeholder="Email" required>
							</div>
							<div class="form__field">
								<input type="tel" name="Телефон" placeholder="Телефон" required>
							</div>
							<div class="form__sub">
								<div class="form__sbt">
									<input type="submit" value="Заказать">
								</div>
								<div class="form__check">
									<input type="checkbox" checked required>
									<span>Соглашение об обработке персональных данных</span>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
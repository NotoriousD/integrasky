<?php 
/* 
Template Name: mikrotik
*/ 
?>

<?php get_header(); ?>

<div class="home-banner" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/banner-bg.png)">
		<div class="inner">
			<div class="banner__list">
				<div class="banner__descr">
					<h1 class="banner__title"><?php the_field('banner-title'); ?></h1>
				</div>
				<div class="banner__img">
					<img src="<?php the_field('banner-img'); ?>" alt="">
				</div>
			</div>
		</div>
	</div>

	<div class="home-possibility">
		<div class="inner">
			<div class="poss__list">
                <?php if( have_rows('block2-list') ): ?>
                    <?php while( have_rows('block2-list') ): the_row(); ?>

                        <div class="poss__item <?php the_sub_field('class'); ?>">
                            <?php the_sub_field('icon'); ?>
                            <span class="poss__item-text"><?php the_sub_field('text'); ?></span>
                        </div>

                    <?php endwhile; ?>

                <?php endif; ?>
			</div>
		</div>
	</div>

	<div class="mikrotik">
		<div class="inner">
			<div class="mikrotik__list">
				<div class="mikrotik__descr">
					<h3 class="site__title"><?php the_field('block3-title'); ?></h3>
					<span class="mikrotik__text"><?php the_field('block3-text'); ?></span>
				</div>
				<div class="mikrotik__img"><img src="<?php the_field('block3-img'); ?>" alt=""></div>
			</div>
		</div>
	</div>

	<div class="home-reliability">
		<div class="section__title">
			<div class="inner">
				<h3 class="site__title">Что умеет Mikrotik?</h3>
			</div>
		</div>
		<div class="inner">
			<div class="releab__list">
				<div class="releab__item">
					<span class="num">01</span>
					<div class="releab__item_img">
						<img src="<?php the_field('block4-img'); ?>" alt="">
					</div>
					<div class="releab__descr">
						<span class="releab__title"><?php the_field('block4-title'); ?></span>
						<span class="releab__text"><?php the_field('block4-text'); ?>
					</div>
				</div>
				<?php if( have_rows('block4-list') ): ?>
                    <?php while( have_rows('block4-list') ): the_row(); ?>

						<div class="releab__item">
							<?php $url = get_sub_field('url'); ?>
							<?php $text = get_sub_field('text2'); ?>
							<span class="num"><?php the_sub_field('num'); ?></span>
							<div class="releab__head">
								<img src="<?php the_sub_field('img'); ?>" alt="">
								<span class="releab__title"><?php the_sub_field('title'); ?></span>
							</div>
							<span class="releab__text"><?php the_sub_field('text'); ?></span>
							<?php $list = have_rows('list'); ?>
							<?php if( !empty($list) ) { ?>
								<?php if( have_rows('list') ): ?>
									<?php while( have_rows('list') ): the_row(); ?>
										<ul class="releab__ul">
											<li>ко всему Интернету кроме Яндекс Картинок; </li>
										</ul>	
									<?php endwhile; ?>
               					<?php endif; ?>
							<?php } ?>
							<?php if( !empty($text) ) { ?>
                                <span class="releab__text"><?php the_sub_field('text2'); ?></span>
                            <?php } ?>
							<?php if( !empty($url) ) { ?>
                                <a href="<?php echo $url ?>" class="releab__link">Узнать подробнее про VPN</a>
                            <?php } ?>
						</div>

                    <?php endwhile; ?>
                <?php endif; ?>
				<div class="releab__img">
					<img src="<?php the_field('block4-img2'); ?>" alt="">
				</div>
			</div>
		</div>
	</div>

	<div class="mikrotik-form">
		<div class="inner">
			<div class="form__list">
				<div class="form__descr">
					<h3 class="form__title">
						Подберем оборудование Mikrotik для вашей компании, которое <span>удовлетворит 95-100%
							требований</span>, предъявляемых к корпоративной сети.
					</h3>
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
									<input type="submit" value="Отправить заявку">
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
									<input type="submit" value="Отправить заявку">
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

	<div class="home-perfomance">
		<div class="inner">
			<div class="perform__list">
				<div class="perform__descr">
					<h3 class="site__title">Преимущества Mikrotik для сисадмина</h3>
				</div>
				<div class="perform__blocks">
					<?php if( have_rows('block5-list') ): ?>
						<?php while( have_rows('block5-list') ): the_row(); ?>

							<div class="perform__block">
								<div class="icon"><img src="<?php the_sub_field('img'); ?>" alt=""></div>
								<span class="block__title"><?php the_sub_field('title'); ?></span>
								<span class="block__text"><?php the_sub_field('text'); ?></span>
							</div>

						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>

	<div class="r-block">
		<div class="inner">
			<div class="block__descr">
				<h3 class="block__title"><?php the_field('block6-title'); ?></h3>
				<p class="block__text"><?php the_field('block6-text'); ?></p>
				<a href="<?php the_field('block6-url'); ?>">Подробнее</a>
			</div>
		</div>
	</div>

	<div class="linux-worklinux">
		<div class="inner">
			<div class="section__title">
				<h3 class="site__title">Почему мы настроим Mikrotik качественно?</h3>
			</div>
			<div class="workl__list">
				<?php if( have_rows('block7-list') ): ?>
                    <?php while( have_rows('block7-list') ): the_row(); ?>

                        <?php $img = get_sub_field('img'); ?>
                        <?php $url = get_sub_field('url'); ?>
                        <div class="workl__item">
                            <div class="workl__descr">
                                <span class="num"><?php the_sub_field('num'); ?></span>
                                <span class="workl__title"><?php the_sub_field('title'); ?>
                                </span>
                                <span class="workl__text"><?php the_sub_field('text'); ?></span>
                                <?php if( !empty($url) ) { ?>
                                    <a href="<?php echo $url ?>" class="workl__link">Узнать подробнее об оптимизации серверов</a>
                                <?php } ?>
                            </div>
                            <?php if( !empty($img) ) { ?>
                                <div class="workl__img"><img src="<?php echo $img ?>" alt=""></div>
                            <?php } ?>
                        </div>

                    <?php endwhile; ?>

                <?php endif; ?>
			</div>
		</div>
	</div>

	<div class="ic-form">
		<div class="inner">
			<div class="form__container">
				<div class="form__list">
					<div class="form__descr">
						<span class="form__text">Мы реализовали сотни проектов для небольших компаний и точно знаем, как
							сделать телефонию, которая не только полностью окупиться за 6-8 месяцев, но и станет
							драйвером роста бизнеса на ближайшие несколько лет</span>
					</div>
					<div class="form__img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mikrotik/ic-form.png" alt=""></div>
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

<?php get_footer(); ?>
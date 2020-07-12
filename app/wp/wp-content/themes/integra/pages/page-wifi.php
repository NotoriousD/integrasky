<?php 
/* 
Template Name: wifi
*/ 
?>

<?php get_header(); ?>

<div class="home-banner"
		style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/banner-bg.png)">
		<div class="inner">
			<div class="banner__list">
				<div class="banner__descr">
					<h1 class="banner__title"><?php the_field('banner-title'); ?></h1>
					<span class="banner__text"><?php the_field('banner-text'); ?>
					</span>
				</div>
				<div class="banner__img">
					<img src="<?php the_field('banner-img'); ?>" alt="">
				</div>
			</div>
		</div>
	</div>

	<div class="ic-soft">
		<div class="inner">
				<div class="soft__list">
						<div class="soft__img"><img src="<?php the_field('block1-img'); ?>" alt=""></div>
						<div class="soft__descr">
							<h3 class="adh3"><?php the_field('block1-title'); ?></h3>
								<span class="soft__text"><?php the_field('block1-text'); ?>
									</span>
						</div>
				</div>
		</div>
</div>


<div class="wifi-install">
	<div class="inner">
		<div class="winstall__in">
			<div class="winstall__head">
				<div class="winstal__bg">Wi-Fi</div>
				<h2 class="adh2"><?php the_field('block2-title'); ?></h2>
			</div>
			<div class="wifi-line winstall__top">

					<?php if( have_rows('block2-top') ): ?>
						<?php while( have_rows('block2-top') ): the_row(); ?>
									<div class="winstall__item">
										<img src="<?php the_sub_field('img'); ?>" alt="">
										<p><?php the_sub_field('text'); ?></p>
									</div>
						<?php endwhile; ?>
					<?php endif; ?>

			</div>
			<div class="wifi-line winstall__bottom">
			<?php if( have_rows('block2-bottom') ): ?>
						<?php while( have_rows('block2-bottom') ): the_row(); ?>
									<div class="winstall__item">
										<img src="<?php the_sub_field('img'); ?>" alt="">
										<p><?php the_sub_field('text'); ?></p>
									</div>
						<?php endwhile; ?>
					<?php endif; ?>
			</div>
		</div>
	</div>
</div>


<div class="mikrotik-form" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/wifi/wform1.jpg')">
	<div class="inner">
		<div class="form__list">
			<div class="form__descr">
				<h3 class="form__title">
				<?php the_field('form1-title'); ?>
						</h3>
				<span class="form__text"><?php the_field('form1-text'); ?></span>
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



<div class="wifi-net">
	<div class="inner">
		<div class="wnet__in">
			<div class="wnet__head">
				<h2 class="adh2"><?php the_field('block3-title'); ?></h2>
			</div>
			<div class="wnet__line">
				<div class="wnet__text">
					<p>
					<?php the_field('block3-text'); ?>
					</p>
				</div>
				<div class="wnet__img"><img src="<?php the_field('block3-img'); ?>" alt=""></div>
			</div>
		</div>
	</div>
</div>

<div class="ic-form">
	<div class="inner">
		<div class="form__container">
			<div class="form__list">
				<div class="form__descr">
					<div class="adform__notice"><?php the_field('form2-text'); ?></div>
				</div>
				<div class="form__img"><img src="<?php the_field('form2-img'); ?>" alt=""></div>
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


<div class="home-perfomance">
	<div class="inner">
		<div class="perform__list">
			<div class="perform__descr">
				<h3 class="site__title"><?php the_field('block4-title'); ?></h3>
			</div>
			<div class="perform__blocks">

			<?php if( have_rows('block4-list') ): ?>
					<?php while( have_rows('block4-list') ): the_row(); ?>

							<div class="perform__block">
								<div class="icon"><img src="<?php the_sub_field('img'); ?>" alt=""></div>
								<span class="block__title"><?php the_sub_field('title'); ?></span>
								<span class="block__text"><?php the_sub_field('text'); ?>
								</span>
								<span class="perf__num"><?php the_sub_field('num'); ?></span>
							</div>

					<?php endwhile; ?>
			<?php endif; ?>

			</div>
		</div>
	</div>
</div>



<div class="mikrotik-form" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/wifi/wform2.jpg')">
	<div class="inner">
		<div class="form__list">
			<div class="form__descr">
				<h3 class="form__title"><?php the_field('form3-title'); ?></h3>
				<span class="form__text"><?php the_field('form3-text'); ?></span>
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


<div class="recomend">
	<div class="inner">
		<div class="recomend__head">
			<h3 class="site__title">
			<?php the_field('block5-title'); ?>
					
			</h3>
			<p><?php the_field('block5-ttext'); ?></p>
		</div>
			<div class="rec__blocks">

			<?php if( have_rows('block5-list') ): ?>
						<?php while( have_rows('block5-list') ): the_row(); ?>

								<div class="rec__item">
								<span class="num"><?php the_sub_field('num'); ?></span>
								<span class="rec__text"><?php the_sub_field('text'); ?></span>
							</div>

						<?php endwhile; ?>
				<?php endif; ?>
			</div>
	</div>
</div>



<div class="adprocess" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/wifi/adsec2.jpg')">
	<div class="inner">
		<div class="adprocess__in">
			<h3 class="site__title"><?php the_field('block6-title'); ?>
			</h3>
			<div class="adprocess-line">

			<?php if( have_rows('block6-list') ): ?>
					<?php while( have_rows('block6-list') ): the_row(); ?>
							<span class="adsafe__item">
								<span class="adsafe__num"><?php the_sub_field('num'); ?></span>
								<span class="adsafe__img"><img src="<?php the_sub_field('img'); ?>" alt=""></span>
								<p><?php the_sub_field('title'); ?></p>
								<span class="adsafe__notice"><?php the_sub_field('text'); ?></span>
							</span>
					<?php endwhile; ?>
			<?php endif; ?>

			</div>
		</div>
	</div>
</div>






<div class="wifi-price">
	<div class="inner">
		<div class="wifip__in">
			<div class="wprice__head">
					<h3 class="site__title">
					<?php the_field('block7-title'); ?>
					</h3>
			</div>
			<div class="wprice__line">

			<?php if( have_rows('block7-list') ): ?>
						<?php while( have_rows('block7-list') ): the_row(); ?>

								<div class="wprice__item">
								<img src="<?php the_sub_field('img'); ?>" alt="">
								<p><?php the_sub_field('text'); ?></p>
							</div>

						<?php endwhile; ?>
				<?php endif; ?>

			</div>
		</div>
	</div>
</div>



<div class="mikrotik-form" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/wifi/wform3.jpg')">
	<div class="inner">
		<div class="form__list">
			<div class="form__descr">
				<h3 class="form__title"><?php the_field('form4-title'); ?></h3>
				<span class="form__text"><?php the_field('form4-text'); ?></span>
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



<?php get_footer(); ?>
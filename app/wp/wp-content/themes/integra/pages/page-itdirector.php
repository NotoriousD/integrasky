<?php 
/* 
Template Name: ITdirector
*/ 
?>

<?php get_header(); ?>

<div class="home-banner" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/banner-bg.png)">
		<div class="inner">
			<div class="banner__list">
				<div class="banner__descr">
					<h1 class="banner__title"><?php the_field('banner-title'); ?></h1>
					<span class="banner__text"></span>
				</div>
				<div class="banner__img">
					<img src="<?php the_field('banner-img'); ?>" alt="">
				</div>
			</div>
		</div>
	</div>

	<div class="itdirector__block1">
		<div class="itdirector__h-bg">it-director</div>
		<div class="inner">
			<div class="itdirector__head">
				<h3 class="itdirector__h"><?php the_field('block1-title'); ?></h3>
				<span class="itdir__h-notice">
				<?php the_field('block1-tnotice'); ?>
						
				</span>
			</div>
		</div>
	</div>

	<div class="itdirector__scheme">
		<div class="inner">
			<div class="itscheme__first">
				<span class="itscheme__window">
				<?php the_field('block1-yellow'); ?>
						
				</span>
				<div class="itscheme__line">
					<div class="itscheme__item"><?php the_field('block1-ltext'); ?></div>
					<div class="itscheme__item itscheme__img">
						<img src="<?php the_field('block1-img'); ?>" alt="">
					</div>
					<div class="itscheme__item"><?php the_field('block1-rtext'); ?></div>
				</div>
			</div>
			<div class="itscheme__second">
				<h4 class="itscheme__title">
					<?php the_field('block2-title'); ?>
				</h4>
				<div class="itscheme__blocks">
				<?php if( have_rows('block2-list') ): ?>
						<?php while( have_rows('block2-list') ): the_row(); ?>
									<div class="itscheme__block">
										<img src="<?php the_sub_field('img'); ?>" alt="">
										<span class="itscheme__block-t"><?php the_sub_field('text'); ?></span>
									</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="itscheme__third">
				<div class="itscheme__third-text"><?php the_field('block3-ltext'); ?> </div>
				<div class="itscheme__third-img"><img src="<?php the_field('block3-img'); ?>" alt=""></div>
				<div class="itscheme__third-blue">
					<span class="itscheme__third-notice"><?php the_field('block3-rtext'); ?>
							
					</span>
				</div>
			</div>
		</div>
	</div>



		<div class="mikrotik-form" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/it-director/form1.jpg')">
			<div class="inner">
				<div class="form__list">
					<div class="form__descr">
						<h3 class="form__title">
						<?php the_field('form1-title'); ?></h3>
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


		<div class="adavto__form">
				<div class="inner">
					<div class="adavtof__in">
						<h3 class="site__title"><?php the_field('block4-title'); ?>
						</h3>
						<div class="adavtof__line">
						<?php if( have_rows('block4-list') ): ?>
						<?php while( have_rows('block4-list') ): the_row(); ?>
									<div class="adavtof__item">
										<h4 class="adavtof__head"><?php the_sub_field('title'); ?></h4>
										<p class="adavtof__p"><?php the_sub_field('text'); ?></p>
										<div class="adavtof__img"><img src="<?php the_sub_field('img'); ?>" alt=""></div>
									</div>
						<?php endwhile; ?>
					<?php endif; ?>
						</div>
					</div>
				</div>
			</div>

			<div class="adprocess" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/it-director/adsec2.jpg')">
				<div class="inner">
					<div class="adprocess__in">
						<h3 class="site__title"><?php the_field('block5-title'); ?>
						</h3>
						<div class="adprocess-line">
						<?php if( have_rows('block5-list') ): ?>
						<?php while( have_rows('block5-list') ): the_row(); ?>
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

		<div class="mikrotik-form" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/it-director/form2.jpg')">
			<div class="inner">
				<div class="form__list">
					<div class="form__descr">
						<h3 class="form__title"><?php the_field('form2-title'); ?></h3>
						<span class="form__text"><?php the_field('form2-text'); ?></span>
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

		<div class="adwhocan">
			<div class="inner">
				<div class="adwhocan__line">
					<div class="adwhocan__left">
						<h3 class="site__title">
						<?php the_field('block6-title'); ?>
								
						</h3>
						<div class="adwhocan__text">
							<span class="adwhocan__title"><?php the_field('block6-ttext'); ?></span>
							<ul>
									<?php if( have_rows('block6-list') ): ?>
								<?php while( have_rows('block6-list') ): the_row(); ?>
													<li><?php the_sub_field('text'); ?></li>
									<?php endwhile; ?>
								<?php endif; ?>
							</ul>
						</div>
					</div>
					<div class="adwhocan__right">
						<img src="<?php the_field('block6-img'); ?>" alt="">
					</div>
				</div>
			</div>
		</div>




<?php get_footer(); ?>
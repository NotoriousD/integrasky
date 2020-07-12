<?php 
/* 
Template Name: avtomatization
*/ 
?>

<?php get_header(); ?>

<div class="home-banner" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/banner-bg.png)">
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



		<div class="adreg">
				<div class="inner">
					<div class="adman__in">
						<div class="adman__item"><img src="<?php the_field('block1-img'); ?>" alt=""></div>
						<div class="adman__item">
							<p class="adman-text">
								<span class="adman-s">
								<?php the_field('block1-text'); ?>
								</span>
							</p>
						</div>
					</div>
				</div>
			</div>
		

	<div class="variant advariant2">
		<div class="inner">
			<div class="var__list">
				<div class="var__title">
					<h3 class="site__title">
						<span class="advar-s"><?php the_field('block2-ttext'); ?></span>
						<?php the_field('block2-title'); ?></h3>
				</div>

				<?php if( have_rows('block2-list') ): ?>
						<?php while( have_rows('block2-list') ): the_row(); ?>
								<div class="var__item">
										
										<span class="num"><?php the_sub_field('block2-num'); ?></span>
										<img src="<?php the_sub_field('block2-img'); ?>" alt="">
										<div class="var__item_descr">
											<span class="descr__title"><?php the_sub_field('block2-ititle'); ?></span>
											<p class="descr__text"><?php the_sub_field('block2-itext'); ?> </p>
										</div>
									</div>

						<?php endwhile; ?>

				<?php endif; ?>

			</div>
		</div>
	</div>

	<div class="adlet">
		<div class="adlet__bg">
			Automation
		</div>
		<div class="inner">
			<div class="adlet__in">
				<h3 class="site__title"> <?php the_field('block3-title'); ?> 
				</h3>
				<div class="adlet__line">

				<?php if( have_rows('block3-list') ): ?>
						<?php while( have_rows('block3-list') ): the_row(); ?>
									<div class="adlet__item">
										<span class="adlet__num"><?php the_sub_field('block3-num'); ?></span>
										<div class="adlet__img"><img src="<?php the_sub_field('block3-img'); ?>" alt=""></div>
										<h4 class="adlet-h"><?php the_sub_field('block3-ititle'); ?></h4>
										<p class="adlet-p"><?php the_sub_field('block3-itext'); ?></p>
					</div>

						<?php endwhile; ?>

				<?php endif; ?>


				</div>
			</div>
		</div>
	</div>

	<div class="adprocess" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/avtomatization/adsec2.jpg')">
		<div class="inner">
			<div class="adprocess__in">
				<h3 class="site__title"><?php the_field('block4-title'); ?></h3>
				<div class="adprocess-line">


				<?php if( have_rows('block4-list1') ): ?>
						<?php while( have_rows('block4-list1') ): the_row(); ?>

					<span class="adsafe__item">
						<span class="adsafe__num"><?php the_sub_field('block4-li-num'); ?></span>
						<span class="adsafe__img"><img src="<?php the_sub_field('block4-li-img'); ?>" alt=""></span>
						<p><?php the_sub_field('block4-li-title'); ?></p>
						<span class="adsafe__notice"><?php the_sub_field('block4-li-text'); ?></span>
					</span>


						<?php endwhile; ?>

				<?php endif; ?>

				</div>

				<div class="adprocess__bottom" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/avtomatization/adprocbg.png');">
					<div class="adproc__bitem"><img src="<?php the_field('block5-img'); ?>" alt=""></div>
					<div class="adproc__bitem">
						<div class="advar__link">
							<div class="advar__text">
								<p><?php the_field('block5-text'); ?></p>

							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="mikrotik-form" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/avtomatization/adform-bg.jpg')">
		<div class="inner">
			<div class="form__list">
				<div class="form__descr">
					<h3 class="form__title"><?php the_field('form1-title'); ?></h3>
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
									<input type="submit" value="Заказать">
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


	<div class="adtools">
		<div class="inner">
			<div class="adtools__in">
				<h3 class="adtools-h"><?php the_field('block6-title'); ?>
				</h3>
				<div class="adtools__top">


				<?php if( have_rows('block6-list') ): ?>
						<?php while( have_rows('block6-list') ): the_row(); ?>

					<div class="adtools__topitem">
						<h4 class="adtools-title"><?php the_sub_field('block6-ititle'); ?></h4>
						<p class="adtools-text"><?php the_sub_field('block6-itext'); ?></p>
					</div>

						<?php endwhile; ?>

				<?php endif; ?>
				</div>
			</div>
			<div class="adtools2__in">
				<h3 class="site__title"><?php the_field('block7-title'); ?>
				</h3>
				<div class="adtools2__bg">
					<img src="<?php the_field('block7-bg'); ?>" alt="">
				</div>
				<div class="adtools2__line">

				
				<?php if( have_rows('block7-list') ): ?>
						<?php while( have_rows('block7-list') ): the_row(); ?>

					<div class="adtools2-item">
						<img src="<?php the_sub_field('block7-li-img'); ?>" alt="">
						<h4 class="adtools2-h"><?php the_sub_field('block7-li-title'); ?></h4>
						<p class="adtools2-p"><?php the_sub_field('block7-li-text'); ?></p>
					</div>

						<?php endwhile; ?>

				<?php endif; ?>
				</div>
			</div>
		</div>
	</div>


	<div class="adavto__form">
		<div class="inner">
			<div class="adavtof__in">
				<h3 class="site__title"><?php the_field('block8-title'); ?>
				</h3>
				<div class="adavtof__line">

				<?php if( have_rows('block8-list') ): ?>
						<?php while( have_rows('block8-list') ): the_row(); ?>

					<div class="adavtof__item">
						<h4 class="adavtof__head"><?php the_sub_field('block8-li-title'); ?></h4>
						<p class="adavtof__p"><?php the_sub_field('block8-li-text'); ?> </p>
						<div class="adavtof__img"><img src="<?php the_sub_field('block8-li-img'); ?>" alt=""></div>
					</div>

						<?php endwhile; ?>

				<?php endif; ?>

				</div>
			</div>
		</div>
	</div>



	<div class="ic-form">
			<div class="inner">
				<div class="form__container">
					<div class="form__list">
						<div class="form__descr">
							<span class="form__text"><?php the_field('form2-title'); ?></span>
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
<?php get_footer(); ?>
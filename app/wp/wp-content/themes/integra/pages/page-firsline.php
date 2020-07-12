<?php 
/* 
Template Name: Firstline
*/ 
?>

<?php get_header(); ?>

<div class="home-banner" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/banner-bg.png)">
		<div class="inner">
			<div class="banner__list">
				<div class="banner__descr">
					<h1 class="banner__title"><?php the_field('banner-title'); ?></h1>
					<span class="banner__text"><?php the_field('banner-text'); ?></span>
				</div>
				<div class="banner__img">
					<img src="<?php the_field('banner-img'); ?>" alt="">
				</div>
			</div>
		</div>
	</div>



	<div class="variant">
		<div class="inner">
			<div class="var__list">
				<div class="var__title">
					<h3 class="site__title"><?php the_field('block1-title'); ?></h3>
				</div>
				<?php if( have_rows('block1-list') ): ?>
						<?php while( have_rows('block1-list') ): the_row(); ?>
									<div class="var__item">
										<span class="num"><?php the_sub_field('num'); ?></span>
										<img src="<?php the_sub_field('img'); ?>" alt="">
										<div class="var__item_descr">
											<span class="descr__title"><?php the_sub_field('title'); ?></span>
											<p class="descr__text"><?php the_sub_field('text'); ?></p>
										</div>
									</div>
						<?php endwhile; ?>
					<?php endif; ?>

			</div>
		</div>
	</div>


	<div class="adorder">
		<div class="inner">
			<h3 class="adorder__title"><?php the_field('block2-title'); ?></h3>
			<div class="adorder-line">
			<?php if( have_rows('block2-list') ): ?>
						<?php while( have_rows('block2-list') ): the_row(); ?>
									<div class="adorder-item">
										<span class="adord__item-title"><?php the_sub_field('title'); ?></span>
										<span class="adord__item-text"><?php the_sub_field('text'); ?></span>
									</div>
						<?php endwhile; ?>
					<?php endif; ?>
			</div>
		</div>
	</div>

	<div class="adsimple">
		<div class="inner">
				<div class="var__list">
				<?php if( have_rows('block3-list') ): ?>
						<?php while( have_rows('block3-list') ): the_row(); ?>
									<div class="var__item">
										<span class="num"><?php the_sub_field('num'); ?></span>
										<img src="<?php the_sub_field('img'); ?>" alt="">
										<div class="var__item_descr">
											<span class="descr__title"><?php the_sub_field('title'); ?></span>
											<p class="descr__text"><?php the_sub_field('text'); ?></p>
										</div>
									</div>
						<?php endwhile; ?>
					<?php endif; ?>
					</div>
		</div>
	</div>

	<div class="example">
			<div class="inner">
					<div class="example__list">
							<div class="example__img">
									<img src="<?php the_field('block4-img'); ?>" alt="">
							</div>
							<div class="example__descr">
									<span class="example__title"><?php the_field('block4-title'); ?></span>
									<span class="example__text"><?php the_field('block4-text'); ?></span>
							</div>
					</div>
			</div>
	</div>


	<div class="what-opt">
			<div class="inner">
				<div class="what__head">
					<h3 class="site__title"><?php the_field('block5-title'); ?></h3>
				</div>
				<div class="what__list">
					<div class="what__start-img">
						<img src="<?php the_field('block5-img'); ?>" alt="">
						<div class="what__start-text">Ваша компания</div>
					</div>

					<?php if( have_rows('block5-list') ): ?>
						<?php while( have_rows('block5-list') ): the_row(); ?>
									<div class="what__item">
										<img src="<?php the_sub_field('img'); ?>" alt="">
										<div class="dot"></div>
										<span class="num"><?php the_sub_field('num'); ?></span>
										<span class="what__title"><?php the_sub_field('title'); ?>
										</span>
										<span class="what__text"><?php the_sub_field('text'); ?>
										</span>
									</div>

						<?php endwhile; ?>
					<?php endif; ?>
							<div class="what__end-img">
									<img src="<?php the_field('block5-img2'); ?>" alt="">
									<div class="what__end-text">Компания IntegraSky</div>
								</div>
				</div>
			</div>
		</div>


		<div class="mikrotik-form" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/first-line/form1bg.png')">
			<div class="inner">
				<div class="form__list">
					<div class="form__descr">
						<h3 class="form__title"><?php the_field('form1-title'); ?>
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


		<div class="service">
        <div class="inner">
            <div class="service__head">
                <div class="head__title">
                    <h3 class="site__title"><?php the_field('block6-title'); ?></h3>
                </div>
                <div class="head__descr">
                    <div class="descr__info">
                        <span class="descr__text"><?php the_field('block6-notice'); ?></span>
                    </div>
                </div>
            </div>
        </div>
		</div>
		
		<div class="adjump">
			<div class="inner">
				<div class="adjump__line">
				<?php if( have_rows('block6-list') ): ?>
						<?php while( have_rows('block6-list') ): the_row(); ?>
									<div class="adjump-item">
										<img src="<?php the_sub_field('img'); ?>" alt="">
										<span class="adjump__head"><?php the_sub_field('title'); ?></span>
										<span class="adjump__text"><?php the_sub_field('text'); ?></span>
									</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>


		<div class="ic-form">
        <div class="inner">
            <div class="form__container" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/first-line/form2bg.png');">
                <div class="form__list">
                    <div class="form__descr">
                        <span class="form__text"><?php the_field('form2-text'); ?></span>
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



		<div class="adnuans">
			<div class="nuansbg1">
				<img src="<?php the_field('block7-img1'); ?>" alt="">
			</div>
			<div class="nuansbg2">
				<img src="<?php the_field('block7-img2'); ?>" alt="">
			</div>
        <div class="inner">
            <div class="sec__list">
                <div class="sec__title">
                    <h3 class="site__title"><?php the_field('block7-title'); ?></h3>
								</div>
								<div class="adnuans__line">

									<?php if( have_rows('block7-list1') ): ?>
										<?php while( have_rows('block7-list1') ): the_row(); ?>
														<div class="sec__item">
														<img src="<?php the_sub_field('img'); ?>" alt="">
														<span class="item__title">
														<?php the_sub_field('title'); ?>
														</span>
														<span class="item__text"><?php the_sub_field('text'); ?></span>
												</div>
										<?php endwhile; ?>
									<?php endif; ?>
								</div>
								<div class="adnuans__line nuans__revers">

										<?php if( have_rows('block7-list2') ): ?>
												<?php while( have_rows('block7-list2') ): the_row(); ?>
																<div class="sec__item">
																<img src="<?php the_sub_field('img'); ?>" alt="">
																<span class="item__title">
																<?php the_sub_field('title'); ?>
																</span>
																<span class="item__text"><?php the_sub_field('text'); ?></span>
														</div>
												<?php endwhile; ?>
											<?php endif; ?>
								</div>
            </div>
        </div>
    </div>


		<div class="mikrotik-form" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/first-line/form1bg.png')">
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


		
		



<?php get_footer(); ?>
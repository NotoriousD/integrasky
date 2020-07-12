<?php 
/* 
Template Name: officesecurity
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

	<div class="adsecurity">
		<div class="adsecurity-bg">
			security
		</div>
		<div class="inner">
			<div class="adsecurity__in">
				<div class="adsecurity__title"><?php the_field('block1-title'); ?></div>
				<p class="adsecurity__text"><?php the_field('block1-ttext'); ?>
				</p>
				<div class="adsecurity__line">

				<?php if( have_rows('block1-list') ): ?>
						<?php while( have_rows('block1-list') ): the_row(); ?>

									<div class="adsecurity__item">
												<img src="<?php the_sub_field('img'); ?>" alt="">
												<div class="adsecurity-desc">
													<span><?php the_sub_field('title'); ?></span>
													<p><?php the_sub_field('text'); ?></p>
												</div>
											</div>

						<?php endwhile; ?>

				<?php endif; ?>
				</div>
			</div>
		</div>
	</div>

	<div class="adsafe" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/officesafe/adsec2.jpg')">
		<div class="inner">
			<div class="adsafe__in">
				<h3 class="site__title"><?php the_field('block2-title'); ?>
				</h3>
				<div class="adsafe__line">
					<div class="adsafe__left">
						<span class="adsafe__item">
							<span class="adsafe__num"><?php the_field('block2-lnum'); ?></span>
							<span class="adsafe__img"><img src="<?php the_field('block2-limg'); ?>" alt=""></span>
							<p><?php the_field('block2-ltitle'); ?></p>
							<ul>

									<?php if( have_rows('block2-lul') ): ?>
								<?php while( have_rows('block2-lul') ): the_row(); ?>

										<li><?php the_sub_field('text'); ?></li>

								<?php endwhile; ?>

						<?php endif; ?>
							</ul>
						</span>
					</div>
					<div class="adsafe__right">

					<?php if( have_rows('block2-right') ): ?>
								<?php while( have_rows('block2-right') ): the_row(); ?>


										<span class="adsafe__item">
							<span class="adsafe__num"><?php the_sub_field('num'); ?></span>
							<span class="adsafe__img"><img src="<?php the_sub_field('img'); ?>" alt=""></span>
							<p><?php the_sub_field('title'); ?></p>
						</span>

								<?php endwhile; ?>

						<?php endif; ?>

					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="variant advariant">
		<div class="inner">
			<div class="var__list">
				<div class="var__title">
					<h3 class="site__title"><?php the_field('block3-title'); ?></h3>
				</div>

				<div class="advariant__line">

				<?php if( have_rows('block3-list') ): ?>
                    <?php while( have_rows('block3-list') ): the_row(); ?>


										<?php $url = get_sub_field('url'); ?>
												<div class="var__item">
													<span class="num"><?php the_sub_field('num'); ?></span>
													<img src="<?php the_sub_field('img'); ?>" alt="">
													<div class="var__item_descr">
														<span class="descr__title"><?php the_sub_field('title'); ?></span>
														<p class="descr__text"><?php the_sub_field('text'); ?></p>
													</div>
													<div class="advar__link">
														<div class="advar__text">
															<p><?php the_sub_field('urltext'); ?></p>
															<?php if( !empty($url) ) { ?>
																<a href="<?php echo $url ?>"><span>Подробнее</span><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/officesafe/adarrow.png" alt=""></a>
                                <?php } ?>
														</div>
													</div>
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
						<div class="adform__notice"><?php the_field('form1-text'); ?>
						</div>
					</div>
					<div class="form__img"><img src="<?php the_field('form1-img'); ?>" alt=""></div>
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


	<div class="mikrotik-form" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/officesafe/adform-bg2.jpg')">
		<div class="inner">
			<div class="form__list">
				<div class="form__descr">
					<h3 class="form__title">
					<?php the_field('form2-title'); ?>
						
					</h3>
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



	<div class="linux-worklinux">
		<div class="inner">
			<div class="section__title">
				<h3 class="site__title"><?php the_field('block4-title'); ?></h3>
			</div>
			<div class="workl__list">


			<?php if( have_rows('block4-list') ): ?>
                    <?php while( have_rows('block4-list') ): the_row(); ?>

                        <?php $img = get_sub_field('img'); ?>
                        <?php $url = get_sub_field('url'); ?>
                        <div class="workl__item">
                            <div class="workl__descr">
                                <span class="num"><?php the_sub_field('num'); ?></span>
                                <span class="workl__title"><?php the_sub_field('title'); ?>
                                </span>
                                <span class="workl__text"><?php the_sub_field('text'); ?></span>
                                <?php if( !empty($url) ) { ?>
                                    <a href="<?php echo $url ?>" class="workl__link"><?php the_sub_field('link-text'); ?></a>
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




	<div class="mikrotik-form" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/officesafe/adform-bg3.jpg')">
		<div class="inner">
			<div class="form__list">
				<div class="form__descr">
					<h3 class="form__title">
					<?php the_field('form3-title'); ?>	</h3>
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


<?php get_footer(); ?>
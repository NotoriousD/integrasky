<?php 
/* 
Template Name: montage-vols
*/ 
?>

<?php get_header(); ?>
<div class="home-banner"
		style="background-image: url(http://new.integrasky.ru/wp-content/themes/integra/img/banner-bg.png)">
		<div class="inner">
			<div class="banner__list">
				<div class="banner__descr">
					<h1 class="banner__title"><?php the_field('banner_title'); ?></h1>
					<span class="banner__text"><?php the_field('banner_text'); ?>
					</span>
				</div>
				<div class="banner__img">
					<img src="<?php the_field('banner_img'); ?>" alt="">
				</div>
			</div>
		</div>
	</div>


	<div class="s-ideal">
		<div class="inner">
				<div class="ideal__list">
						<span class="bg">ВОЛС</span>
						<div class="ideal__descr">
								<span class="ideal__title"><?php the_field('block1_title'); ?>
								</span>
								<span class="ideal__text"><?php the_field('block1_text'); ?></span>
						</div>
						<div class="ideal__img">
								<img src="<?php the_field('block1_img'); ?>" alt="">
						</div>
				</div>
		</div>
</div>

<div class="home-perfomance">
	<div class="inner">
			<div class="perform__list">
					<div class="perform__descr">
							<h3 class="site__title"><?php the_field('block2_title'); ?></h3>
					</div>
					<div class="perform__blocks">
					<?php if( have_rows('block2_list') ): ?>
                    <?php while( have_rows('block2_list') ): the_row(); ?>


												<div class="perform__block">
													<div class="icon"><img src="<?php the_sub_field('img'); ?>" alt=""></div>
													<span class="block__title"><?php the_sub_field('title'); ?>Высокое качество связи
													</span>
													<span class="block__text"><?php the_sub_field('text'); ?>Информация способна передаваться по ВОЛС без помех на большие расстояния.
														</span>
											</div>

                    <?php endwhile; ?>

                <?php endif; ?>
					</div>
			</div>
	</div>
</div>

<div class="price">
	<div class="inner">
			<div class="price__title">
					<h3 class="site__title">
					<?php the_field('block3_title'); ?>
						
					</h3>
			</div>
			<div class="price__list">
				<div class="bg-price">
					АБ
				</div>
					<div class="list">
					<?php if( have_rows('block3_list') ): ?>
                    <?php while( have_rows('block3_list') ): the_row(); ?>

											<div class="item">
												<img src="<?php the_sub_field('img'); ?>" alt="">
												<span class="item__text"><?php the_sub_field('text'); ?></span>
										</div>

                    <?php endwhile; ?>

                <?php endif; ?>
					</div>
					<div class="price__descr">
							<span class="descr__text"><?php the_field('block3_text'); ?></span>
					</div>
			</div>
	</div>
</div>


<div class="ic-form">
		<div class="inner">
				<div class="form__container">
						<div class="form__list">
								<div class="form__descr">
										<span class="form__text"><?php the_field('form1_text'); ?></span>
								</div>
								<div class="form__img"><img src="<?php the_field('form1_img'); ?>" alt=""></div>
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


<div class="linux-aswell">
		<div class="inner">
			<div class="linux-title">
				<h3 class="site__title"><?php the_field('block4_title'); ?></h3>
			</div>
			<div class="aswell__list">

			<?php if( have_rows('block4_list') ): ?>
						<?php while( have_rows('block4_list') ): the_row(); ?>

						<div class="aswell__item">
							<span class="num"><?php the_sub_field('num'); ?></span>
							<span class="blue__block"></span>
							<img src="<?php the_sub_field('img'); ?>" alt="">
							<span class="aswell__item-title"><?php the_sub_field('text'); ?>
							</span>
						</div>

						<?php endwhile; ?>

				<?php endif; ?>
				<div class="aswell__img">
					<img src="<?php the_field('block4_img'); ?>" alt="">
				</div>
			</div>
		</div>
	</div>

	<div class="home-form">
			<div class="inner">
					<div class="form__list">
							<div class="form__descr">
									<span class="form__title"><?php the_field('form2_title'); ?>
											
									</span>
									<span class="form__text"><?php the_field('form2_text'); ?></span>
									<div class="form__phone">
											<span class="phone__text">Наш специалист доступен по телефону</span>
											<a href="#" class="phone"><span>8 495</span> 373 27 53</a>
									</div>
							</div>
							<div class="form__form">
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
											<div class="form__check">
													<input type="checkbox" checked required>
													<span>Соглашение об обработке персональных данных</span>
											</div>
											<div class="form__sbt">
													<input type="submit" value="Заказать">
											</div>
									</form>
							</div>
					</div>
			</div>
	</div>
	

	<div class="home-sequence" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/montage-vols/block6bg.png');">
			<div class="inner">
				<div class="seq__list">
					<div class="seq__descr" style="order: 1">
						<h3 class="seq__title"><?php the_field('block5_title'); ?></h3>
					</div>
					<?php if( have_rows('block5_list') ): ?>
						<?php while( have_rows('block5_list') ): the_row(); ?>


						<div class="seq__item" style="order: <?php the_sub_field('order'); ?>">
						<span class="icon"><span class="num"><?php the_sub_field('num'); ?></span><img src="<?php the_sub_field('img'); ?>" alt=""></span>
						<span class="item__title"><?php the_sub_field('title'); ?></span>
						<span class="item__text"><?php the_sub_field('text'); ?></span>
					</div>

						<?php endwhile; ?>

				<?php endif; ?>
					<div class="seq__img" style="order: 5">
						<img src="<?php the_field('block5_img'); ?>" alt="">
					</div>
				</div>
			</div>
		</div>
	



	
	<div class="home-form">
			<div class="inner">
					<div class="form__list">
							<div class="form__descr">
									<span class="form__title">
									<?php the_field('form3_text'); ?>
										
									</span>
									<div class="form__phone">
											<span class="phone__text">Наш специалист доступен по телефону</span>
											<a href="#" class="phone"><span>8 495</span> 373 27 53</a>
									</div>
							</div>
							<div class="form__form">
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
											<div class="form__check">
													<input type="checkbox" checked required>
													<span>Соглашение об обработке персональных данных</span>
											</div>
											<div class="form__sbt">
													<input type="submit" value="Заказать">
											</div>
									</form>
							</div>
					</div>
			</div>
	</div>


	<div class="n-features">
			<div class="inner">
					<div class="features__list">
							<h3 class="features__title"><?php the_field('block6_title'); ?></h3>
							<?php if( have_rows('block6_list1') ): ?>
                    <?php while( have_rows('block6_list1') ): the_row(); ?>

                        <div class="features__item">
                            <span class="num"><?php the_sub_field('num'); ?></span>
                            <span class="feat__title"><?php the_sub_field('title'); ?></span>
                            <span class="feat__text"><?php the_sub_field('text'); ?></span>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
					</div>
					<div class="features__list">
					<?php if( have_rows('block6_list2') ): ?>
                    <?php while( have_rows('block6_list2') ): the_row(); ?>

                        <div class="features__item">
                            <span class="num"><?php the_sub_field('num'); ?></span>
                            <span class="feat__title"><?php the_sub_field('title'); ?></span>
                            <span class="feat__text"><?php the_sub_field('text'); ?></span>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
					</div>
			</div>
	</div>


<?php get_footer(); ?>
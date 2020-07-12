<?php 
/* 
Template Name: fire
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



	<div class="wifi-price">
		<div class="inner">
			<div class="wifip__in">
				<div class="wprice__head">
					<div class="wprice__num">
						<?php the_field('block1-num'); ?>
					</div>
					<h3 class="site__title">
					<?php the_field('block1-title'); ?>
					</h3>
				</div>
				<div class="wprice__line">
				<?php if( have_rows('block1-list') ): ?>
						<?php while( have_rows('block1-list') ): the_row(); ?>
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



	<div class="free-opt">
		<div class="inner">
			<div class="free__list">
				<div class="free__img">
					<img src="<?php the_field('block2-img'); ?>" alt="">
				</div>
				<div class="free__descr">
					<span class="free__title"><?php the_field('block2-title'); ?>
					</span>
					<ul class="free__ul">
					<?php if( have_rows('block2-list') ): ?>
						<?php while( have_rows('block2-list') ): the_row(); ?>
									<li><?php the_sub_field('text'); ?></li>
						<?php endwhile; ?>
					<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>
	</div>


	<div class="adprocess" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/img/wifi/adsec2.jpg')">
		<div class="inner">
			<div class="adprocess__in">
				<h3 class="site__title"><?php the_field('block3-title'); ?>
				</h3>
				<div class="adprocess-line">
					<div class="adprocess-left">
					<?php if( have_rows('block3-llist') ): ?>
						<?php while( have_rows('block3-llist') ): the_row(); ?>
									<span class="adsafe__item">
										<span class="adsafe__num"><?php the_sub_field('num'); ?></span>
										<p><?php the_sub_field('title'); ?></p>
										<span class="adsafe__notice"><?php the_sub_field('text'); ?></span>
									</span>
						<?php endwhile; ?>
					<?php endif; ?>
					</div>
					<div class="adprocess-right">
					<?php if( have_rows('block3-rli1') ): ?>
						<?php while( have_rows('block3-rli1') ): the_row(); ?>
									<span class="adsafe__item">
										<span class="adsafe__num"><?php the_sub_field('num'); ?></span>
										<p><?php the_sub_field('title'); ?></p>
										<span class="adsafe__notice"><?php the_sub_field('text'); ?></span>
									</span>
						<?php endwhile; ?>
					<?php endif; ?>
						
						<div class="adprocess-list">

						<?php if( have_rows('block3-rli2') ): ?>
						<?php while( have_rows('block3-rli2') ): the_row(); ?>

									<div class="adprocess-block">
										<div class="adprocessli_top">
											<div class="adprocessli-num"><?php the_sub_field('num'); ?></div>
											<div class="adprocessli-img"><img src="<?php the_sub_field('img'); ?>" alt=""></div>
										</div>
										<div class="adprocessli-text"><?php the_sub_field('text'); ?></div>
									</div>
						<?php endwhile; ?>
					<?php endif; ?>
						</div>
						<p class="adprocess-notice">
						<?php the_field('block3-notice'); ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="what-opt">
		<div class="inner">
			<div class="what__line">
				<div class="what__left">
					<div class="what__title">
						<h3 class="what__title">
						<?php the_field('block4-title'); ?>
							
						</h3>
					</div>
				</div>
				<div class="what__right">
					<div class="what__list">
					<?php if( have_rows('block4-list') ): ?>
						<?php while( have_rows('block4-list') ): the_row(); ?>

									<div class="what__item">
										<img src="<?php the_sub_field('img'); ?>" alt="">
										<div class="dot"></div>
										<span class="num"><?php the_sub_field('num'); ?></span>
										<span class="what__text">
										<?php the_sub_field('text'); ?>
										</span>
									</div>
						<?php endwhile; ?>
					<?php endif; ?>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="home-form">
		<div class="inner">
			<div class="form__list">
				<div class="form__descr">
					<span class="form__title">
					<?php the_field('form1-title'); ?>
						
					</span>
					<span class="form__text"><?php the_field('form1-text'); ?>
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


	<div class="linux-aswell">
		<div class="inner">
			<div class="aswell__title">
				<h3 class="site__title"><?php the_field('block5-title'); ?></h3>
			</div>
			<div class="aswell__list">

			<?php if( have_rows('block5-list') ): ?>
						<?php while( have_rows('block5-list') ): the_row(); ?>

									<div class="aswell__item">
										<span class="num"><?php the_sub_field('num'); ?></span>
										<span class="blue__block"></span>
										<img src="<?php the_sub_field('img'); ?>" alt="">
										<span class="aswell__item-title"><?php the_sub_field('title'); ?>
										</span>
										<span class="aswell__item-text"><?php the_sub_field('text'); ?></span>
									</div>
						<?php endwhile; ?>
					<?php endif; ?>
				<div class="aswell__img">
					<img src="<?php the_field('block5-img'); ?>" alt="">
				</div>
			</div>
		</div>
	</div>

	<div class="r-block">
		<div class="inner">
			<div class="block__descr">
				<h3 class="block__title"><?php the_field('block6-text'); ?></h3>
				<div class="r-block-link">
				<?php if( have_rows('block6-list') ): ?>
						<?php while( have_rows('block6-list') ): the_row(); ?>

									<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('text'); ?></a>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>


	<div class="wifi-price wifi-price2">
		<div class="inner">
			<div class="wifip__in">
				<div class="wprice__head">
					<div class="wprice__num">
					<?php the_field('block7-num'); ?>
					</div>
					<h3 class="site__title">
						<?php the_field('block7-title'); ?>
					</h3>
					<span class="wifi__head-notice">
					<?php the_field('block7-notice'); ?>
					</span>
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

	<div class="docker-slider">
		<div class="inner">
			<div class="docker__container">
				<div class="docker__controls">
					<div class="r-slider">
									<div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fire/slide.png" alt=""></div>
									<div class="item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/fire/slide.png" alt=""></div>
					</div>
					<div class="r-controls">
						<a href="#" class="rs-prev"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linux/sl-prev.png" alt=""></a>
						<a href="#" class="rs-next"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linux/sl-next.png" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="s-security">
		<div class="inner">
				<div class="sec__list">
						<div class="sec__title">
								<span class="sec__text"><?php the_field('block8-title'); ?></span>
						</div>
						<div class="adsec__line">
						<?php if( have_rows('block8-list') ): ?>
                    <?php while( have_rows('block8-list') ): the_row(); ?>
												<div class="sec__item">
													<img src="<?php the_sub_field('img'); ?>" alt="">
													<span class="item__title">
													<?php the_sub_field('title'); ?>
													</span>
													<ul>
													<?php if( have_rows('list') ): ?>
																				<?php while( have_rows('list') ): the_row(); ?>
																						<li><?php the_sub_field('text'); ?></li>
																				<?php endwhile; ?>
																		<?php endif; ?>
													</ul>
											</div>
                    <?php endwhile; ?>
                <?php endif; ?>
  
						</div>
				</div>
		</div>
</div>

<div class="v-registrator">
	<div class="inner">
		<div class="reg__list">
			<div class="reg__img"><img src="<?php the_field('block9-img'); ?>" alt=""></div>
			<div class="reg__descr">
				<div class="reg__war">
					<div class="reg__icon">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/video/block5war.png" alt="">
					</div>
					<span class="reg__war-text"><?php the_field('block9-text'); ?></span>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="home-form">
	<div class="inner">
		<div class="form__list">
			<div class="form__descr">
				<span class="form__title">
				<?php the_field('form2-title'); ?>
					
				</span>
				<span class="form__text"><?php the_field('form2-text'); ?>
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


<div class="home-sequence">
	<div class="inner">
		<div class="home__title">
			<h3 class="site__title">
			<?php the_field('block10-title'); ?>
					
			</h3>
		</div>
		<div class="seq__list">
		<?php if( have_rows('block10-list') ): ?>
						<?php while( have_rows('block10-list') ): the_row(); ?>

							<div class="seq__item">
								<span class="icon"><span class="num"><?php the_sub_field('num'); ?></span><img src="<?php the_sub_field('img'); ?>" alt=""></span>
								<span class="item__title"><?php the_sub_field('title'); ?></span>
								<span class="item__text"><?php the_sub_field('text'); ?>
										</span>
							</div>

						<?php endwhile; ?>
				<?php endif; ?>
		</div>
	</div>
</div>


<div class="s-added">
		<div class="inner">
				<div class="add__title">
						<h3 class="site__title"><?php the_field('block11-title'); ?></h3>
				</div>
				<div class="add__list">

				<?php if( have_rows('block11-list') ): ?>
						<?php while( have_rows('block11-list') ): the_row(); ?>

							<div class="add__col">
								<div class="add__item">
										<div class="add__img">
												<img src="<?php the_sub_field('img'); ?>" alt="">
										</div>
										<div class="add__descr">
												<span class="descr__title"><?php the_sub_field('title'); ?></span>
												<span class="descr__text"><?php the_sub_field('text'); ?></span>
										</div>
								</div>
						</div>

						<?php endwhile; ?>
				<?php endif; ?>
				
				</div>
		</div>
</div>




<?php get_footer(); ?>
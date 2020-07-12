<?php 
/* 
Template Name: ITmark
*/ 
?>

<?php get_header(); ?>

<div class="home-banner" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/it-mark/banner-bg.jpg)">
		<div class="inner">
			<div class="banner__list">
				<h2 class="adbanner__title"><?php the_field('banner-title'); ?></h2>
				<p class="adbanner__text"><?php the_field('banner-text'); ?></p>
				<span class="adbanner__yellow"><?php the_field('banner-yellow'); ?></span>
				<div class="banner__phone"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/it-mark/phonet.png" alt=""><a href="tel:<?php the_field('banner-phone'); ?>"><?php the_field('banner-phone'); ?></a></div>
			</div>
		</div>
	</div>

	<div class="adhappen">
		<div class="inner">
			<h3 class="site__title"><?php the_field('block1-title'); ?></h3>
			<div class="happen__line">
				<div class="happen__left">
					<span class="happen__left-title"><?php the_field('block1-ltitle'); ?></span>
					<div class="happen__left-blocks">
					<?php if( have_rows('block1-list') ): ?>
						<?php while( have_rows('block1-list') ): the_row(); ?>
								<div class="happen__left-block">
									<img src="<?php the_sub_field('img'); ?>" alt="">
									<span class="happen__left-not"><?php the_sub_field('text'); ?></span>
								</div>
						<?php endwhile; ?>
					<?php endif; ?>
					</div>
				</div>
				<div class="happen__right">
					<div class="block__blue">
						<span class="block__blue-not">
						<?php the_field('block1-rtext'); ?>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="itdanger">
		<div class="inner">
			<h3 class="site__title"><?php the_field('block2-title'); ?></h3>
			<div class="itdanger__line">

			<?php if( have_rows('block2-list') ): ?>
						<?php while( have_rows('block2-list') ): the_row(); ?>
								<div class="itdanger__item">
									<div class="num"><?php the_sub_field('num'); ?></div>
									<div class="itdanger__img"><img src="<?php the_sub_field('img'); ?>" alt=""></div>
									<div class="itdanger__text">
										<sapn class="itdagner__title"><?php the_sub_field('title'); ?></sapn>
										<span class="itdanger__notice"><?php the_sub_field('text'); ?></span>
									</div>
								</div>
						<?php endwhile; ?>
					<?php endif; ?>
			</div>
		</div>
	</div>

	<div class="adask">
		<div class="inner">
			<div class="adask__line">
				<div class="adask__left">
					<div class="adask__title">
						<h3 class="site__title"><?php the_field('block3-ltitle'); ?></h3>
						<span class="adask__title-notice">
						<?php the_field('block3-lnotice'); ?>	
						</span>
					</div>
					<div class="adask__left-line">

					<?php if( have_rows('block3-llist') ): ?>
						<?php while( have_rows('block3-llist') ): the_row(); ?>

									<div class="adask__left-item">
										<img src="<?php the_sub_field('img'); ?>" alt="">
										<div class="adask__left-text">
										<span class="adask__left-title"><?php the_sub_field('title'); ?></span>
										<span class="adask__left-not"><?php the_sub_field('text'); ?></span>
									</div>
								</div>
						<?php endwhile; ?>
					<?php endif; ?>
					</div>
				</div>
				
				<div class="adask__right">
					<div class="adask__right-img"><img src="<?php the_field('block3-rimg'); ?>" alt=""></div>
					<div class="afask__right-text">
						<span class="adask__right-title"><?php the_field('block3-rtitle'); ?>
						</span>
						<span class="adask__right-notice"><?php the_field('block3-rtext'); ?>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="itstaff">
		<div class="inner">
			<h3 class="site__title">
			<?php the_field('block4-title'); ?>
			</h3>
			<div class="itstaff__line">

			<?php if( have_rows('block4-list') ): ?>
						<?php while( have_rows('block4-list') ): the_row(); ?>

								<div class="itstaff__item">
									<span class="num"><?php the_sub_field('num'); ?></span>
									<span class="itstaff__text"><?php the_sub_field('text'); ?></span>
								</div>
						<?php endwhile; ?>
					<?php endif; ?>
			</div>
		</div>
	</div>

	<div class="itthink">
		<div class="inner">
			<div class="ittinhk__line">
				<span class="itthink__item"><?php the_field('block5-ltext'); ?> </span>
				<div class="itthink__man"><img src="<?php the_field('block5-img'); ?>" alt=""></div>
				<span class="itthink__item"><?php the_field('block5-rtext'); ?></span>
			</div>
		</div>
	</div>

	<div class="whatdo">
		<div class="inner">
			<h3 class="whatdo__title">
			<?php the_field('block6-title'); ?>
			</h3>
			<div class="whatdo__content">
				<img src="<?php the_field('block6-img'); ?>" alt="">
			</div>
		</div>
	</div>

	<div class="adhow">
		<div class="inner">
			<div class="how__col">
				<h3 class="site__title"><?php the_field('block7-title'); ?></h3>
				<ul class="how__ul">
				<?php if( have_rows('block7-list') ): ?>
						<?php while( have_rows('block7-list') ): the_row(); ?>

								<li><?php the_sub_field('text'); ?></li>
						<?php endwhile; ?>
					<?php endif; ?>
				</ul>
				<div class="how__check">
					<img src="<?php the_field('block7-nimg'); ?>" alt="">
					<span class="how__check-text"><?php the_field('block7-notice'); ?></span>
				</div>
			</div>
		</div>
	</div>

	<div class="aditget">
		<div class="inner">
			<div class="itget__line">
				<h3 class="site__title" style="order: 1">
				<?php the_field('block8-title'); ?>
				</h3>

				<?php if( have_rows('block8-list') ): ?>
						<?php while( have_rows('block8-list') ): the_row(); ?>

								<div class="itget__item" style="order: <?php the_sub_field('order'); ?>">
									<div class="itget__top">
										<span class="num"><?php the_sub_field('num'); ?></span>
										<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/it-mark/yes.png" alt="">
									</div>
									<div class="itget__text">
										<span class="itget__title"><?php the_sub_field('title'); ?></span>
										<span class="itget__notice"><?php the_sub_field('text'); ?></span>
									</div>
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
						<span class="form__text"><?php the_field('form1-title'); ?></span>
						<div class="adform__notice"><?php the_field('form1-text'); ?>
						</div>
						<div class="adform__link">
							<div class="adform__link-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/it-mark/fphone.png" alt=""></div><a
								href="tel:<?php the_field('form1-phone'); ?>"><?php the_field('form1-phone'); ?></a>
						</div>
						<div class="adform__link">
							<div class="adform__link-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/it-mark/fmail.png" alt=""></div><a
								href="mailto:<?php the_field('form1-mail'); ?>"><?php the_field('form1-mail'); ?></a>
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

	<div class="adstat">
		<div class="inner">
			<h3 class="site__title"><?php the_field('block9-title'); ?></h3>
			<div class="adstat__line">

			<?php if( have_rows('block9-list') ): ?>
						<?php while( have_rows('block9-list') ): the_row(); ?>

								<div class="adstat__item">
									<h4 class="adstat__title"><?php the_sub_field('title'); ?></h4>
									<span class="adstat__text"><?php the_sub_field('text'); ?></span>
								</div>

						<?php endwhile; ?>
					<?php endif; ?>
			</div>
		</div>
	</div>



	<div class="linux-aswell">
		<div class="inner">
			<div class="linux-title">
				<h3 class="site__title"><?php the_field('block10-title'); ?></h3>
			</div>
			<div class="aswell__list">


			<?php if( have_rows('block10-list') ): ?>
						<?php while( have_rows('block10-list') ): the_row(); ?>

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
			</div>
		</div>
	</div>


	<div class="adresult">
		<div class="inner">
			<h3 class="site__title">
			<?php the_field('block11-title'); ?>
				
			</h3>
			<div class="adresult__line">

				<div class="adresult__left">


				<?php if( have_rows('block11-list') ): ?>
						<?php while( have_rows('block11-list') ): the_row(); ?>


							<div class="adresult__item">
								<div class="num"><?php the_sub_field('num'); ?></div>
								<div class="result__text">
									<span class="result__item-title"><?php the_sub_field('title'); ?></span>
									<span class="result__item-text"><?php the_sub_field('text'); ?></span></div>
							</div>

						<?php endwhile; ?>
					<?php endif; ?>

				</div>
				<div class="adresult__right"><img src="<?php the_field('block11-img'); ?>" alt=""></div>
			</div>
		</div>
	</div>




	<div class="adprice">
		<div class="inner">
			<div class="adprice__in">
				<h3 class="price__title"><?php the_field('block12-title'); ?></h3>
				<div class="price__count">
					<p class="price__digits">
						<span><?php the_field('block12-price'); ?></span>
						<?php the_field('block12-text'); ?>	
					</p>
					<span class="price__notice">
					<?php the_field('block12-notice'); ?>	
					</span>
				</div>
				<span class="price__include"><?php the_field('block12-yellow'); ?></span>
			</div>
		</div>
	</div>

	<div class="candidate">
		<div class="inner">
			<div class="candidate__line">

			<?php if( have_rows('block13-list') ): ?>
						<?php while( have_rows('block13-list') ): the_row(); ?>

							<div class="candidate__item">
								<span class="candidate__title"><?php the_sub_field('title'); ?></span>
								<span class="candidate__text"><?php the_sub_field('text'); ?></span>
							</div>

						<?php endwhile; ?>
					<?php endif; ?>

			</div>
		</div>
	</div>

	<div class="adcriter">
		<div class="inner">
			<div class="adcriter__title">
				<h3 class="whatdo__title">
				<?php the_field('block14-title'); ?>
				</h3>
				<span class="criter__notice">
				<?php the_field('block14-notice'); ?>
				</span>
			</div>
			<div class="criter__line">
				<table>
					<thead>
					<?php if( have_rows('block14-li1') ): ?>
						<?php while( have_rows('block14-li1') ): the_row(); ?>

							<tr>
								<td><?php the_sub_field('text'); ?></td>
								<td><?php the_sub_field('text2'); ?></td>
							</tr>

						<?php endwhile; ?>
					<?php endif; ?>
						
					</thead>
					<tbody>

					<?php if( have_rows('block14-li2') ): ?>
						<?php while( have_rows('block14-li2') ): the_row(); ?>

							<tr>
								<td><?php the_sub_field('text'); ?></td>
								<td><?php the_sub_field('text2'); ?></td>
							</tr>

						<?php endwhile; ?>
					<?php endif; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>


	<div class="adcuse">
		<div class="inner">
			<div class="cuse__title">
				<h3 class="site__title"><?php the_field('block15-title'); ?> </h3>
				<div class="block__blue">
						<span class="block__blue-not">
						<?php the_field('block15-tnotice'); ?>
						</span>
					</div>
			</div>
			<div class="cuse__line">

			<?php if( have_rows('block15-list') ): ?>
						<?php while( have_rows('block15-list') ): the_row(); ?>

							<div class="cuse__item"><img src="<?php the_sub_field('img'); ?>" alt=""></div>
						<?php endwhile; ?>
					<?php endif; ?>
			</div>
		</div>
	</div>

	<div class="adnext" data-bg-text="what's next?">
		<div class="inner">
			<h3 class="next__title"><?php the_field('block16-title'); ?></h3>
		</div>
	</div>

	<div class="adfind">
		<div class="inner">
			<div class="find__line">
					<div class="find__left">
							<div class="find__left-img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/it-mark/fcall.png" alt=""></div>
							<sapn class="find__left-question">Остались вопросы? Я с радостью на них отвечу! </sapn>
							<a href="tel:<?php the_field('block17-phone'); ?>" class="find__left-number"><?php the_field('block17-phone'); ?></a>
							<span class="find__left-notice"><?php the_field('block17-notice'); ?></span>
						</div>
						<div class="find__right">
							<form action="" class="find__form">
								<span class="find__form-title"><?php the_field('form2-title'); ?></span>
								<span class="find__form-notice"><?php the_field('form2-text'); ?></span>
								<div class="find__form-in">
									<div class="ffrom__field">
										<input type="text" name="name" placeholder="Имя">
									</div>
									<div class="ffrom__field">
										<input type="text" name="Email" placeholder="Email">
									</div>
									<div class="ffrom__field">
										<input type="text" name="phone" placeholder="Телефон">
									</div>
									<div class="ffrom__field">
										<textarea name="" id="" cols="30" rows="5" placeholder="Пожалуйста, опишите какого ИТ-специалиста и на какой бюджет Вы планируете найти?"></textarea>
									</div>
									<div class="find__form-bottom">
										<input type="submit" value="Отправить заявку">
										<div class="find__form-check">
											<input type="checkbox" name="" id="" checked>
											<span>Соглашение об обработке персональных данных</span>
										</div>
									</div>
								</div>
							</form>
						</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
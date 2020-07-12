<?php 
/* 
Template Name: CKC
*/ 
?>

<?php get_header(); ?>

<div class="home-banner" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/banner-bg.png)">
		<div class="inner">
			<div class="banner__list">
				<div class="banner__descr">
					<h1 class="banner__title"><?php the_field('banner-title'); ?></h1>
					<ul class="banner__ul">
                    <?php if( have_rows('banner-list') ): ?>
                        <?php while( have_rows('banner-list') ): the_row(); ?>

                            <li><?php the_sub_field('text'); ?></li>

                        <?php endwhile; ?>
                    <?php endif; ?>
					</ul>
				</div>
				<div class="banner__img">
					<img src="<?php the_field('banner-img'); ?>" alt="">
				</div>
			</div>
		</div>
	</div>


	<div class="s-ideal">
		<div class="inner">
			<div class="ideal__list">
				<span class="bg">CKC</span>
				<div class="ideal__descr">
					<span class="ideal__title"><?php the_field('block2-title'); ?></span>
					<span class="ideal__text"><?php the_field('block2-text'); ?></span>
				</div>
				<div class="ideal__img">
					<img src="<?php the_field('block2-img'); ?>" alt="">
				</div>
			</div>
		</div>
	</div>

	<div class="s-road">
		<div class="inner">
			<div class="road__head">
				<h3 class="road__title">Состав СКС</h3>
			</div>
			<div class="road__list">
                <?php if( have_rows('block3-list') ): ?>
                    <?php while( have_rows('block3-list') ): the_row(); ?>

                    <div class="road__item">
                        <?php the_sub_field('img'); ?>
                        <span class="road__text"><?php the_sub_field('text'); ?></span>
                    </div>

                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
	</div>

	<div class="s-road_gal">
		<div class="inner">
			<div class="gal__list">
                <?php if( have_rows('block3-list2') ): ?>
                    <?php while( have_rows('block3-list2') ): the_row(); ?>

                    <img src="<?php the_sub_field('img'); ?>" alt="">

                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
	</div>

	<div class="home-perfomance">
		<div class="inner">
			<div class="perform__list">
				<div class="perform__descr">
					<h3 class="site__title">Какие требования предъявляются к системе?</h3>
					<div class="perform-sl-container">
						<div class="perform-slider">
                            <?php if( have_rows('block4-slider') ): ?>
                                <?php while( have_rows('block4-slider') ): the_row(); ?>

                                <div class="item"><img src="<?php the_sub_field('img'); ?>" alt=""></div>

                                <?php endwhile; ?>
                            <?php endif; ?>
						</div>
						<div class="controls">
							<a href="#" class="sl1-prev"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linux/sl-prev.png" alt=""></a>
							<a href="#" class="sl1-next"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linux/sl-next.png" alt=""></a>
						</div>
					</div>
				</div>
				<div class="perform__blocks">
                    <?php if( have_rows('block4-list') ): ?>
                        <?php while( have_rows('block4-list') ): the_row(); ?>

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

	<div class="mikrotik-form" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/sks/formbg.jpg)">
		<div class="inner">
			<div class="form__list">
				<div class="form__descr">
					<h3 class="form__title"><?php the_field('form1-title'); ?></h3>
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
								<span class="time-work">Работаем по будням с 10:00 до 19:00. Заявки, отправленные в
									выходные, обрабатываем в первый рабочий день до 10:30</span>
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

	<div class="home-reliability">
		<div class="section__title">
			<div class="inner">
				<h3 class="site__title">Почему наше сотрудничество будет успешным?</h3>
			</div>
		</div>
		<div class="inner">
			<div class="releab__list">
                <?php if( have_rows('block5-list') ): ?>
                    <?php while( have_rows('block5-list') ): the_row(); ?>

                    <div class="releab__item">
                        <span class="num"><?php the_sub_field('num'); ?></span>
                        <span class="releab__title"><?php the_sub_field('title'); ?></span>
                        <span class="releab__text"><?php the_sub_field('text'); ?></span>
                    </div>

                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
	</div>

	<div class="linux-youcompany">
		<div class="company__list">
			<div class="company__controls">
				<div class="controls">
					<a href="#" class="sl2-prev"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linux/sl-prev.png" alt=""></a>
					<a href="#" class="sl2-next"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linux/sl-next.png" alt=""></a>
				</div>
			</div>
			<div class="company__sl">
				<div class="company__slider2">
                    <?php if( have_rows('block6-slider') ): ?>
                        <?php while( have_rows('block6-slider') ): the_row(); ?>

                        <div class="item">
                            <img src="<?php the_sub_field('img'); ?>" alt="">
                        </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
					<div class="item"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="home-reliability2">
		<div class="inner">
			<div class="releab__list">
				<div class="releab__col">
                    <?php if( have_rows('block6-list') ): ?>
                        <?php while( have_rows('block6-list') ): the_row(); ?>

                        <div class="releab__item">
                            <span class="num"><?php the_sub_field('num'); ?></span>
                            <span class="releab__title"><?php the_sub_field('title'); ?></span>
                            <span class="releab__text"><?php the_sub_field('text'); ?></span>
                        </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
				</div>
				<div class="releab__img">
					<img src="<?php the_field('block6-img'); ?>" alt="">
				</div>
			</div>
		</div>
	</div>

	<div class="home-reliability3">
		<div class="inner">
			<div class="releab__list">
				<div class="releab__sl">
					<div class="releab__slider">
                        <?php if( have_rows('block7-slider') ): ?>
                            <?php while( have_rows('block7-slider') ): the_row(); ?>

                            <div class="item">
                                <img src="<?php the_sub_field('img'); ?>" alt="">
                            </div>

                            <?php endwhile; ?>
                        <?php endif; ?>
					</div>
					<div class="controls">
						<a href="#" class="sl3-prev"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linux/sl-prev.png" alt=""></a>
						<a href="#" class="sl3-next"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linux/sl-next.png" alt=""></a>
					</div>
				</div>
				<div class="releab__col">
                    <?php if( have_rows('block7-list') ): ?>
                        <?php while( have_rows('block7-list') ): the_row(); ?>

                        <div class="releab__item">
                            <span class="num"><?php the_sub_field('num'); ?></span>
                            <span class="releab__title"><?php the_sub_field('title'); ?></span>
                            <span class="releab__text"><?php the_sub_field('text'); ?></span>
                        </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
				</div>
			</div>
		</div>
	</div>

	<div class="home-reliability4">
		<div class="inner">
			<div class="releab__list">
                <?php if( have_rows('block8-list') ): ?>
                    <?php while( have_rows('block8-list') ): the_row(); ?>

                        <div class="releab__item">
                            <span class="num"><?php the_sub_field('num'); ?></span>
                            <span class="releab__title"><?php the_sub_field('title'); ?></span>
                            <span class="releab__text"><?php the_sub_field('text'); ?></span>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
				<div class="releab__img">
					<img src="<?php the_field('block8-img'); ?>" alt="">
				</div>
			</div>
		</div>
	</div>

	<div class="mikrotik-form" style="background-image: url(<?php the_field('form2-bg'); ?>)">
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
								<span class="time-work">Работаем по будням с 10:00 до 19:00. Заявки, отправленные в
									выходные, обрабатываем в первый рабочий день до 10:30</span>
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

	<div class="result">
		<div class="inner">
			<div class="res__title">
				<h3 class="site__title">Что вы получаете в результате:</h3>
			</div>
			<div class="res__list">
				<div class="res__items">
                    <?php if( have_rows('block9-list') ): ?>
                        <?php while( have_rows('block9-list') ): the_row(); ?>

                            <div class="aswell__item">
                                <span class="num"><?php the_sub_field('num'); ?></span>
                                <span class="blue__block"></span>
                                <img src="<?php the_sub_field('img'); ?>" alt="">
                                <span class="aswell__item-title"><?php the_sub_field('title'); ?></span>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
				</div>
				<div class="res__sl">
					<div class="res__slider">
                        <?php if( have_rows('block9-slider') ): ?>
                            <?php while( have_rows('block9-slider') ): the_row(); ?>

                            <div class="item">
                                <img src="<?php the_sub_field('img'); ?>" alt="">
                            </div>

                            <?php endwhile; ?>
                        <?php endif; ?>
					</div>
					<div class="controls">
						<a href="#" class="sl4-prev"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linux/sl-prev.png" alt=""></a>
						<a href="#" class="sl4-next"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linux/sl-next.png" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="sks-block">
		<div class="inner">
			<div class="block__list">
				<div class="block__img">
					<img src="<?php the_field('block10-img'); ?>" alt="">
				</div>
				<div class="block__items">
                    <?php if( have_rows('block10-list') ): ?>
                        <?php while( have_rows('block10-list') ): the_row(); ?>

                            <div class="aswell__item">
                                <span class="num"><?php the_sub_field('num'); ?></span>
                                <span class="blue__block"></span>
                                <img src="<?php the_sub_field('img'); ?>" alt="">
                                <span class="aswell__item-title"><?php the_sub_field('title'); ?></span>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
				</div>
			</div>
		</div>
	</div>

	<div class="sks-block2">
		<div class="inner">
			<div class="block__list">
				<div class="block__items">
                    <?php if( have_rows('block11-list') ): ?>
                        <?php while( have_rows('block11-list') ): the_row(); ?>

                            <div class="<?php the_sub_field('class'); ?>">
                                <?php
                                    $num = get_sub_field('num');
                                    $img = get_sub_field('img');
                                    $text = get_sub_field('text');
                                ?>
                                <?php if( !empty($text) ||  !empty($num) || !empty($img)) { ?>
                                    <span class="num"><?php the_sub_field('num'); ?></span>
                                    <span class="blue__block"></span>
                                    <img src="<?php the_sub_field('img'); ?>" alt="">
                                    <span class="aswell__item-title"><?php the_sub_field('title'); ?></span>
                                <?php } ?>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
				</div>
				<div class="block__img">
					<img src="<?php the_field('block11-img'); ?>" alt="">
				</div>
			</div>
		</div>
	</div>

	<div class="home-sequence">
		<div class="inner">
			<div class="seq__list">
				<div class="seq__descr" style="order: 1">
					<h3 class="seq__title">Этапы нашей <br> работы</h3>
                </div>
                <?php if( have_rows('block12-list') ): ?>
                    <?php while( have_rows('block12-list') ): the_row(); ?>

                        <div class="seq__item" style="order: <?php the_sub_field('order'); ?>">
                            <span class="icon"><span class="num"><?php the_sub_field('num'); ?></span><img src="<?php the_sub_field('img'); ?>" alt=""></span>
                            <span class="item__title"><?php the_sub_field('title'); ?></span>
                            <span class="item__text"><?php the_sub_field('text'); ?></span>
                        </div>

                    <?php endwhile; ?>

                <?php endif; ?>
				<div class="seq__img" style="order: 10">
					<img src="<?php the_field('block12-img'); ?>" alt="">
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
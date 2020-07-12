<?php 
/* 
Template Name: video
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

	<div class="v-project">
		<div class="inner">
			<div class="project__list">
				<div class="project__descr">
					<h3 class="site__title">Мы проектируем и устанавливаем:</h3>
					<div class="descr__list">
                        <?php if( have_rows('block2-list') ): ?>
                            <?php while( have_rows('block2-list') ): the_row(); ?>

                                <div class="descr__item">
                                    <span class="num"><?php the_sub_field('num'); ?></span>
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/video/block2i.png" alt="">
                                    <span class="text"><?php the_sub_field('text'); ?></span>
                                </div>

                            <?php endwhile; ?>

                        <?php endif; ?>
					</div>
				</div>
				<div class="project__img">
					<img src="<?php the_field('block2-img'); ?>" alt="">
					<span class="img__text">- Видеонаблюдение</span>
				</div>
			</div>
		</div>
	</div>

	<div class="v-opport">
		<div class="inner">
			<div class="opp__list">
				<div class="opp__col">
                    <?php if( have_rows('block3-list') ): ?>
                        <?php while( have_rows('block3-list') ): the_row(); ?>

                            <div class="opp__item">
								<span class="left-top"></span>
								<span class="right-top"></span>
								<span class="left-bot"></span>
								<span class="right-bot"></span>
                                <div class="opp__head">
                                    <div class="opp__icon">
                                        <img src="<?php the_sub_field('img'); ?>" alt="">
                                    </div>
                                    <span class="opp__head-title"><?php the_sub_field('title'); ?></span>
                                </div>
                                <span class="opp__text"><?php the_sub_field('text'); ?>
                                </span>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
				</div>
				<div class="opp__col">
					<h3 class="opp__title"><?php the_field('block3-title'); ?></h3>
					<img src="<?php the_field('block3-img'); ?>" alt="">
				</div>
				<div class="opp__col">
                    <?php if( have_rows('block3-list2') ): ?>
                        <?php while( have_rows('block3-list2') ): the_row(); ?>

                            <div class="opp__item">
								<span class="left-top"></span>
								<span class="right-top"></span>
								<span class="left-bot"></span>
								<span class="right-bot"></span>
                                <div class="opp__head">
                                    <div class="opp__icon">
                                        <img src="<?php the_sub_field('img'); ?>" alt="">
                                    </div>
                                    <span class="opp__head-title"><?php the_sub_field('title'); ?></span>
                                </div>
                                <span class="opp__text"><?php the_sub_field('text'); ?>
                                </span>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
				</div>
			</div>
		</div>
	</div>

	<div class="home-form">
		<div class="inner">
			<div class="form__list">
				<div class="form__descr">
					<span class="form__title">
                        <?php the_field('form-title'); ?>
					</span>
					<span class="form__text"><?php the_field('form-text'); ?></span>
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

	<div class="v-components">
		<div class="inner">
			<div class="comp__head">
				<img src="<?php the_field('block4-img'); ?>" alt="">
				<div class="comp__title">
					<span class="comp__title-text">Из каких компонентов состоят системы? </span>
					<span class="comp__title-bg">CCTV</span>
				</div>
			</div>
		</div>
	</div>

	<div class="v-components2">
		<div class="inner">
			<div class="comp__list">
				<div class="comp__descr">
					<span class="num">01</span>
					<h3 class="site__title"><?php the_field('block5-title'); ?></h3>
					<span class="descr__text"><?php the_field('block5-text'); ?></span>
				</div>
				<div class="comp__blocks">
                    <?php if( have_rows('block5-list') ): ?>
                        <?php while( have_rows('block5-list') ): the_row(); ?>

                            <div class="comp__block">
                                <div class="block__descr">
                                    <span class="block__title"><?php the_sub_field('title'); ?></span>
                                    <span class="block__text"><?php the_sub_field('text'); ?></span>
                                    <ul>
                                    <?php if( have_rows('list') ): ?>
                                        <?php while( have_rows('list') ): the_row(); ?>

                                        <li><?php the_sub_field('text'); ?></li>

                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                    </ul>
                                </div>
                                <div class="block__img">
                                    <img src="<?php the_sub_field('img'); ?>" alt="">
                                </div>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
				</div>
			</div>
		</div>
	</div>

	<div class="v-registrator">
		<div class="inner">
			<div class="section__title">
				<span class="num">02</span>
				<h3 class="site__title"><?php the_field('block6-title'); ?></h3>
				<span class="title__text"><?php the_field('block6-text'); ?></span>
			</div>
			<div class="reg__list">
				<div class="reg__img"><img src="<?php the_field('block6-img'); ?>" alt=""></div>
				<div class="reg__descr">
					<div class="reg__descr-cols">
                        <?php if( have_rows('block6-list') ): ?>
                            <?php while( have_rows('block6-list') ): the_row(); ?>

                                <div class="reg__item">
                                    <span class="reg__item-title"><?php the_sub_field('title'); ?></span>
                                    <span class="reg__item-text"><?php the_sub_field('text'); ?>
                                    </span>
                                </div>

                            <?php endwhile; ?>
                        <?php endif; ?>
					</div>
					<div class="reg__war">
						<div class="reg__icon">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/video/block5war.png" alt="">
						</div>
						<span class="reg__war-text"><?php the_field('block6-descr'); ?></span>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="v-po">
		<div class="inner">
			<div class="po__list">
                <?php if( have_rows('block7-list') ): ?>
                    <?php while( have_rows('block7-list') ): the_row(); ?>

                        <div class="po__item">
                            <div class="po__head">
                                <img src="<?php the_sub_field('img'); ?>" alt="">
                                <span class="num"><?php the_sub_field('num'); ?></span>
                            </div>
                            <span class="po__title"><?php the_sub_field('title'); ?></span>
                            <span class="po__text"><?php the_sub_field('text'); ?></span>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
		</div>
	</div>

	<div class="home-form">
		<div class="inner">
			<div class="form__list">
				<div class="form__descr">
					<span class="form__title"><?php the_field('form1-title'); ?></span>
					<span class="form__text"><?php the_field('form1-text'); ?></span>
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

	<div class="home-reliability">
		<div class="section__title">
			<div class="inner">
				<h3 class="site__title">Видеонаблюдение Integra Sky:</h3>
			</div>
		</div>
		<div class="inner">
			<div class="releab__list">
				<div class="releab__col">
                    <?php if( have_rows('block8-list') ): ?>
                        <?php while( have_rows('block8-list') ): the_row(); ?>

                            <div class="releab__item">
                                <span class="num"><?php the_sub_field('num'); ?></span>
                                <span class="releab__title"><?php the_sub_field('title'); ?></span>
                                <span class="releab__text"><?php the_sub_field('text'); ?></span>
                                <ul class="releab__ul">
                                    <?php if( have_rows('list') ): ?>
                                        <?php while( have_rows('list') ): the_row(); ?>
                                            <li>
                                                <span class="releab__ul-text"><?php the_sub_field('text'); ?></span>
                                            </li>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </ul>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>	
				</div>
				<div class="releab__col">
                    <?php if( have_rows('block8-list2') ): ?>
                        <?php while( have_rows('block8-list2') ): the_row(); ?>

                            <div class="releab__item">
                                <span class="num"><?php the_sub_field('num'); ?></span>
                                <span class="releab__title"><?php the_sub_field('title'); ?></span>
                                <span class="releab__text"><?php the_sub_field('text'); ?></span>
                                <ul class="releab__ul">
                                    <?php if( have_rows('list') ): ?>
                                        <?php while( have_rows('list') ): the_row(); ?>
                                            <li>
                                                <span class="releab__ul-text"><?php the_sub_field('text'); ?></span>
                                            </li>
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

<?php get_footer(); ?>
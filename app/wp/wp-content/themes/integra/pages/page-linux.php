<?php 
/* 
Template Name: linux
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

	<div class="home-possibility">
		<div class="inner">
			<div class="poss__list">
				<div class="poss__text">
					<h3 class="poss__title">Что такое Linux?</h3>
					<span class="poss__text-descr">Бесплатная платформа, которая используется при организации:</span>
				</div>
				<?php if( have_rows('block2-list') ): ?>
                    <?php while( have_rows('block2-list') ): the_row(); ?>

                        <div class="poss__item">
                            <?php the_sub_field('icon'); ?>
                            <span class="poss__item-text"><?php the_sub_field('text'); ?></span>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
			</div>
			<span class="poss__bottom">...И других решений</span>
		</div>
	</div>

	<div class="linux-podhodit">
		<div class="inner">
			<div class="section__title">
				<h3 class="site__title">Linux подойдёт для:</h3>
			</div>
			<div class="pod__list">
                <?php if( have_rows('block3-list') ): ?>
                    <?php while( have_rows('block3-list') ): the_row(); ?>

                        <div class="pod__block">
                            <div class="pod__img">
                                <img src="<?php the_sub_field('img'); ?>" alt="">
                            </div>
                            <div class="block__descr">
                                <span class="num"><?php the_sub_field('num'); ?></span>
                                <span class="block__title"><?php the_sub_field('title'); ?></span>
                                <span class="block__text"><?php the_sub_field('text'); ?></span>
                            </div>
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
					<span class="form__title"><?php the_field('form-title'); ?></span>
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

	<div class="linux-youcompany">
		<div class="section__title">
			<div class="inner">
				<h3 class="site__title">Linux для вашей компании: 6 плюсов</h3>
			</div>
		</div>
		<div class="company__list">
			<div class="company__controls">
				<span></span>
				<div class="controls">
					<a href="#" class="sl-prev"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linux/sl-prev.png" alt=""></a>
					<a href="#" class="sl-next"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linux/sl-next.png" alt=""></a>
				</div>
			</div>
			<div class="company__sl">
				<div class="company__slider">
                    <?php if( have_rows('block4-list') ): ?>
                        <?php while( have_rows('block4-list') ): the_row(); ?>

                            <div class="item">
                                <span class="item__title"><?php the_sub_field('title'); ?></span>
                                <span class="item__text"><?php the_sub_field('text'); ?></span>
                                <span class="num"><?php the_sub_field('num'); ?></span>
                            </div>

                        <?php endwhile; ?>
                    <?php endif; ?>
					<div class="item"></div>
				</div>
			</div>
		</div>
	</div>

	<div class="linux-worklinux">
		<div class="inner">
			<div class="section__title">
				<h3 class="site__title">Мы, работая с Linux:</h3>
			</div>
			<div class="workl__list">
                <?php if( have_rows('block5-list') ): ?>
                    <?php while( have_rows('block5-list') ): the_row(); ?>

                        <div class="workl__item">
                            <div class="workl__descr">
                                <?php
                                    $url = get_sub_field('url');
                                    $img = get_sub_field('img');
                                ?>
                                <span class="num"><?php the_sub_field('num'); ?></span>
                                <span class="workl__title"><?php the_sub_field('title'); ?> </span>
                                <span class="workl__text"><?php the_sub_field('text'); ?></span>
                                <?php if( !empty($url) ) { ?>
                                    <a href="<?php echo $url ?>" class="workl__link">Узнать подробнее об оптимизации серверов</a>
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

	<div class="linux-aswell">
		<div class="inner">
			<div class="aswell__block">
				<span class="aswell__bg">as well as</span>
				<span class="aswell__title">а также</span>
			</div>
			<div class="aswell__list">
                <?php if( have_rows('block6-list') ): ?>
                    <?php while( have_rows('block6-list') ): the_row(); ?>

                        <div class="aswell__item">
                            <span class="num"><?php the_sub_field('num'); ?></span>
                            <span class="blue__block"></span>
                            <img src="<?php the_sub_field('img'); ?>" alt="">
                            <span class="aswell__item-title"><?php the_sub_field('title'); ?></span>
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
				<div class="aswell__img">
					<img src="<?php the_field('block6-img'); ?>" alt="">
				</div>
			</div>
		</div>
	</div>

	<div class="home-perfomance">
		<div class="inner">
			<div class="perform__list">
				<div class="perform__descr">
					<h3 class="site__title">4 аргумента в пользу нашего сотрудничества</h3>
					<img src="<?php the_field('block7-img'); ?>" alt="">
				</div>
				<div class="perform__blocks">
                    <?php if( have_rows('block7-list') ): ?>
                        <?php while( have_rows('block7-list') ): the_row(); ?>

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
    
<?php get_footer(); ?>
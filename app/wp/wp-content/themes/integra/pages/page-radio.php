<?php 
/* 
Template Name: radio
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

    <div class="r-connect">
        <div class="inner">
            <span class="connect__title"><?php the_field('block2-title'); ?></span>
            <div class="connect__list">
                <?php if( have_rows('block2-list') ): ?>
                    <?php while( have_rows('block2-list') ): the_row(); ?>

                        <div class="connect__item">
                            <div class="connect__block">
                                <div class="connect__img">
                                    <img src="<?php the_sub_field('img'); ?>" alt="">
                                </div>
                                <div class="connect__descr">
                                    <span class="connect__block-title"><?php the_sub_field('title'); ?></span>
                                    <span class="connect__text"><?php the_sub_field('text'); ?></span>
                                </div>
                            </div>
                        </div>

                    <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="home-perfomance">
        <div class="inner">
            <div class="perform__list">
                <div class="perform__descr">
                    <h3 class="site__title"><?php the_field('block3-title'); ?></h3>
                    <img src="<?php the_field('block3-img'); ?>" alt="">
                </div>
                <div class="perform__blocks">
                    <?php if( have_rows('block3-list') ): ?>
                        <?php while( have_rows('block3-list') ): the_row(); ?>

                                <div class="perform__block">
                                    <div class="icon"><img src="<?php the_sub_field('img'); ?>" alt=""></div>
                                    <span class="block__title"><?php the_sub_field('title'); ?></span>
                                </div>

                        <?php endwhile; ?>

                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

    <div class="home-possibility">
        <div class="inner">
            <div class="poss__list">
                <div class="poss__text">
                    <h3 class="poss__title">Объекты:</h3>
                </div>
                <?php if( have_rows('block4-list') ): ?>
                    <?php while( have_rows('block4-list') ): the_row(); ?>

                        <div class="poss__item">
                            <img src="<?php the_sub_field('img'); ?>" alt="">
                            <span class="poss__item-text"><?php the_sub_field('text'); ?></span>
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
                        <span class="form__text"><?php the_field('form-title'); ?></span>
                    </div>
                    <div class="form__img"><img src="<?php the_field('form-img'); ?>" alt=""></div>
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

    <div class="r-work">
        <div class="inner">
            <div class="work__list">
                <div class="work__title">
                    <h3 class="site__title">Как работает радиомост?</h3>
                </div>
                <div class="work__descr">
                    <span class="work__text">
                        <?php the_field('block5-text'); ?>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <div class="r-work-img">
        <div class="inner">
            <div class="work-img__list">
                <img src="<?php the_field('block6-img1'); ?>" alt="">
                <span class="work-img__text"><?php the_field('block6-text'); ?></span>
                <img src="<?php the_field('block6-img2'); ?>" alt="">
            </div>
        </div>
    </div>

    <div class="r-block">
        <div class="inner">
            <div class="block__descr">
                <p class="block__text"><?php the_field('block7-text'); ?> </p>
                <a href="<?php the_field('block7-url'); ?>">Узнать подробнее о СКС</a>
            </div>
        </div>
    </div>

    <div class="home-reliability">
        <div class="section__title">
            <div class="inner">
                <h3 class="site__title">Аргументы в пользу радиомоста:</h3>
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
                                </div>

                            <?php endwhile; ?>

                        <?php endif; ?>
                    <div class="releab__img"><img src="<?php the_field('block8-img'); ?>" alt=""></div>
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
					<span class="form__text"><?php the_field('form1-text'); ?></span>
					<div class="form__phone">
						<span class="phone__text">Наш специалист доступен по телефону</span>
						<a href="#" class="phone"><span>8 495</span> 373 27 53</a>
                    </div>
                    <span class="form__text2"><?php the_field('form1-text2'); ?></span>
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
			<div class="seq__list">
				<div class="seq__descr" style="order: 1">
					<h3 class="seq__title">Алгоритм установки оборудования</h3>
				</div>
				<?php if( have_rows('block9-list') ): ?>
                    <?php while( have_rows('block9-list') ): the_row(); ?>

                        <div class="seq__item" style="order: <?php the_sub_field('order'); ?>">
                            <span class="icon"><span class="num"><?php the_sub_field('num'); ?></span><img src="<?php the_sub_field('img'); ?>" alt=""></span>
                            <span class="item__title"><?php the_sub_field('title'); ?></span>
                            <span class="item__text"><?php the_sub_field('text'); ?></span>
                        </div>

                    <?php endwhile; ?>

                <?php endif; ?>
				<div class="seq__img" style="order: 4">
					<img src="<?php the_field('block9-img'); ?>" alt="">
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
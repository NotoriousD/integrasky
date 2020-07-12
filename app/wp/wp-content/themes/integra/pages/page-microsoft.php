<?php 
/* 
Template Name: Microsoft
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

    <div class="home-possibility">
        <div class="inner">
            <div class="poss__list">
                <?php if( have_rows('block2-list') ): ?>
                    <?php while( have_rows('block2-list') ): the_row(); ?>

                        <a href="#" class="poss__item">
                            <?php the_sub_field('icon'); ?>
                            <span class="poss__item-text"><?php the_sub_field('text'); ?></span>
                        </a>

                    <?php endwhile; ?>

                <?php endif; ?>
                <div class="poss__text">
                    <h3 class="poss__descr"><?php the_field('block2-title'); ?></h3>
                </div>
            </div>
        </div>
    </div>

    <div class="linux-youcompany">
        <div class="section__title">
            <div class="inner">
                <h3 class="site__title">Почему Microsoft является одним из самых удобных и востребованных вендоров для
                    бизнеса?</h3>
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
                    <?php if( have_rows('block3-list') ): ?>
                        <?php while( have_rows('block3-list') ): the_row(); ?>

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

    <div class="micr-block">
        <div class="inner">
            <div class="block__list">
                <div class="block__descr">
                    <span class="block__title"><?php the_field('block4-title'); ?></span>
                    <span class="block__text"><?php the_field('block4-text'); ?></span>
                    <a href="<?php the_field('block4-url'); ?>" class="block__url">Читать дальше</a>
                </div>
                <div class="block__img">
                    <img src="<?php the_field('block4-img'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="linux-worklinux">
        <div class="inner">
            <div class="section__title">
                <h3 class="site__title">Наша работа с решениями Microsoft</h3>
            </div>
            <div class="workl__list">
                <?php if( have_rows('block5-list') ): ?>
                    <?php while( have_rows('block5-list') ): the_row(); ?>

                        <?php $img = get_sub_field('img'); ?>
                        <?php $list = get_sub_field('list'); ?>
                        <div class="workl__item">
                            <div class="workl__descr">
                                <span class="num"><?php the_sub_field('num'); ?></span>
                                <span class="workl__title"><?php the_sub_field('title'); ?>
                                </span>
                                <span class="workl__text"><?php the_sub_field('text'); ?></span>
                                <ul>
                                <?php if( have_rows('list') ): ?>
                                    <?php while( have_rows('list') ): the_row(); ?>
                                        <li><?php the_sub_field('text'); ?></li>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                </ul>
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

    <div class="micr-block2">
        <div class="inner">
            <div class="block__list">
                <div class="block__descr">
                    <span class="block__head"><?php the_field('block6-head'); ?></span>
                    <span class="block__title"><?php the_field('block6-title'); ?></span>
                    <span class="block__text"><?php the_field('block6-text'); ?></span>
                    <a href="<?php the_field('block6-url'); ?>" class="block__url">Читать дальше</a>
                </div>
                <div class="block__img">
                    <img src="<?php the_field('block6-img'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="home-cost">
        <span class="cost-bg">microsoft</span>
        <div class="inner">
            <div class="cost__block">
                <h3 class="site__title">Стоимость решений Microsoft</h3>
                <span class="cost__text"><?php the_field('block7-text') ?></span>
            </div>
            
        </div>
    </div>

    <div class="home-form">
        <div class="inner">
            <div class="form__list">
                <div class="form__descr">
                    <span class="form__title">
                        <?php the_field('form-title') ?>
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

<?php get_footer(); ?>
<?php 
/* 
Template Name: 1C
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
    
    <div class="ic-soft">
        <div class="inner">
            <div class="soft__list" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/ic/block2bg.png)">
                <div class="soft__descr">

                    <?php if( have_rows('block2-list') ): ?>
                        <?php while( have_rows('block2-list') ): the_row(); ?>

                            <span class="soft__text"><?php the_sub_field('text'); ?></span>

                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>
                <div class="soft__img"><img src="<?php the_field('block2-img'); ?>" alt=""></div>
            </div>
        </div>
    </div>

    <div class="home-reliability">
        <div class="section__title">
            <div class="inner">
                <h3 class="site__title">Мы оказываем следующие услуги в рамках обслуживания 1С:</h3>
            </div>
        </div>
        <div class="inner">
            <div class="releab__list">
                <?php if( have_rows('block3-list1') ): ?>
                    <?php while( have_rows('block3-list1') ): the_row(); ?>
                        <div class="releab__col">
                        <?php if( have_rows('blocks') ): ?>
                            <?php while( have_rows('blocks') ): the_row(); ?>
                                <?php $text = get_sub_field('text'); ?>
                                <div class="releab__item">
                                    <span class="num"><?php the_sub_field('num'); ?></span>
                                    <span class="releab__title"><?php the_sub_field('title'); ?></span>
                                    <?php if( !empty($img) ) { ?>
                                        <span class="releab__text"><?php echo $text ?></span>
                                    <?php } ?>
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
                        
                    <?php endwhile; ?>
                <?php endif; ?>
                <div class="releab__col">
                            <div class="releab__img"><img src="<?php the_field('block31-img'); ?>" alt=""></div>
                        </div>
            </div>
            <div class="releab__list">
                <?php if( have_rows('block3-list2') ): ?>
                    <?php while( have_rows('block3-list2') ): the_row(); ?>
                        <div class="releab__col">
                        <?php if( have_rows('blocks') ): ?>
                            <?php while( have_rows('blocks') ): the_row(); ?>
                                <?php $text = get_sub_field('text'); ?>
                                <div class="releab__item">
                                    <span class="num"><?php the_sub_field('num'); ?></span>
                                    <span class="releab__title"><?php the_sub_field('title'); ?></span>
                                    <?php if( !empty($img) ) { ?>
                                        <span class="releab__text"><?php echo $text ?></span>
                                    <?php } ?>
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
                        
                    <?php endwhile; ?>
                <?php endif; ?>
                <div class="releab__col">
                            <div class="releab__img"><img src="<?php the_field('block32-img'); ?>" alt=""></div>
                        </div>
            </div>
            <div class="releab__list">
                <?php if( have_rows('block3-list3') ): ?>
                    <?php while( have_rows('block3-list3') ): the_row(); ?>
                        <div class="releab__col">
                        <?php if( have_rows('blocks') ): ?>
                            <?php while( have_rows('blocks') ): the_row(); ?>
                                <?php $text = get_sub_field('text'); ?>
                                <div class="releab__item">
                                    <span class="num"><?php the_sub_field('num'); ?></span>
                                    <span class="releab__title"><?php the_sub_field('title'); ?></span>
                                    <?php if( !empty($text) ) { ?>
                                        <span class="releab__text"><?php echo $text ?></span>
                                    <?php } ?>
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
                        
                    <?php endwhile; ?>
                <?php endif; ?>
                <div class="releab__col">
                            <div class="releab__slider">
                                <div class="r-slider">
                                <?php if( have_rows('slider') ): ?>
                                    <?php while( have_rows('slider') ): the_row(); ?>
                                    <div class="item"><img src="<?php the_sub_field('img'); ?>" alt=""></div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                                </div>
                                <div class="r-controls">
                                    <a href="#" class="rs-prev"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linux/sl-prev.png" alt=""></a>
                                    <a href="#" class="rs-next"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linux/sl-next.png" alt=""></a>
                                </div>
                            </div>
                        </div>
            </div>
            <div class="releab__list2">

                <?php if( have_rows('block3-list4') ): ?>
                    <?php while( have_rows('block3-list4') ): the_row(); ?>
                        <?php $text = get_sub_field('text'); ?>
                        <?php $link = get_sub_field('link'); ?>
                        <?php $url = get_sub_field('url'); ?>   
                        <div class="releab__item2">
                            <span class="num"><?php the_sub_field('num'); ?></span>
                            <span class="releab__title"><?php the_sub_field('title'); ?></span>
                            <?php if( !empty($text) ) { ?>
                                <span class="releab__text"><?php echo $text ?></span>
                            <?php } ?>
                            <ul class="releab__ul">
                            <?php if( have_rows('list') ): ?>
                                <?php while( have_rows('list') ): the_row(); ?>
                                    <li>
                                        <span class="releab__ul-text"><?php the_sub_field('text'); ?></span>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                            </ul>
                            <?php if( !empty($link) ) { ?>
                                <a href="<?php echo $url ?>" class="releab__url"><?php echo $link ?></a>
                            <?php } ?>
                        </div>
                
                    <?php endwhile; ?>
                <?php endif; ?>

            </div>
        </div>
    </div>

    <div class="ic-form">
        <div class="inner">
            <div class="form__container" style="background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/ic/block4bg.png)">
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
                    <span>Нажимая на кнопку «Отправить» вы даете согласие на <a href="#">обработку персональных данных</a></span>
                </div>
            </div>
        </div>
    </div>

    <div class="linux-worklinux">
		<div class="inner">
			<div class="section__title">
				<h3 class="site__title">Сопровождение 1С для вашей компании</h3>
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
    
    <div class="ic-config">
        <div class="inner">
            <div class="section__title">
                <h3 class="site__title">Обслуживаем любые конфигурации от официальных разработчиков 1С, среди которых:</h3>
            </div>
            <div class="config__list">
                <?php if( have_rows('block5-list') ): ?>
                    <?php while( have_rows('block5-list') ): the_row(); ?>

                        <div class="config__item <?php the_sub_field('class'); ?>"><span>1c:</span><?php the_sub_field('text'); ?></div>

                    <?php endwhile; ?>

                <?php endif; ?>
                <img src="<?php the_field('block5-img'); ?>" alt="">
            </div>
        </div>
    </div>

    <div class="ic-warning">
        <div class="inner">
            <div class="war__list">
                <div class="war__icon">
                    <img src="<?php the_field('block6-img'); ?>" alt="">
                </div>
                <div class="war__descr">
                    <span class="war__text"><?php the_field('block6-text'); ?></span>
                </div>
            </div>
        </div>
    </div>

    <div class="home-cost">
        <div class="inner">
            <div class="cost__block">
                <h3 class="site__title">Стоимость обслуживания:</h3>
                <span class="cost__text"><?php the_field('block7-text'); ?></span></span>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
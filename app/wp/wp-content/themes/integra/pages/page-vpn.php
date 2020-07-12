<?php 
/* 
Template Name: vpn
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
            <div class="soft__list">
                <div class="soft__descr">
                    <span class="soft__title"><?php the_field('block2-title'); ?></span>
                    <span class="soft__text"><?php the_field('block2-text'); ?></span>
                </div>
                <div class="soft__img"><img src="<?php the_field('block2-img'); ?>" alt=""></div>
            </div>
        </div>
    </div>

    <div class="linux-youcompany">
        <div class="section__title">
            <span class="section__bgw">vpn</span>
            <div class="inner">
                <h3 class="site__title">Для чего нужен VPN?</h3>
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
                </div>
            </div>
        </div>
    </div>

    <div class="vpn-type">
        <div class="inner">
            <div class="section__title">
                <h3 class="site__title">Виды VPN:</h3>
            </div>
            <div class="type__list">
                <?php if( have_rows('block4-list') ): ?>
                    <?php while( have_rows('block4-list') ): the_row(); ?>

                        <div class="type__item">
                            <div class="type__img">
                                <img src="<?php the_sub_field('img'); ?>" alt="">
                            </div>
                            <span class="num"><?php the_sub_field('num'); ?></span>
                            <span class="type__title"><?php the_sub_field('title'); ?></span>
                            <span class="type__text"><?php the_sub_field('text'); ?></span>
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

    <div class="vpn-net">
        <div class="inner">
            <div class="net__list">
                <div class="net__title">
                    <h3 class="site__title">Сети, которые способен обеспечить VPN:</h3>
                </div>
                <?php if( have_rows('block5-list') ): ?>
                    <?php while( have_rows('block5-list') ): the_row(); ?>

                        <div class="net__item">
                            <span class="num"><?php the_sub_field('num'); ?></span>
                            <img src="<?php the_sub_field('img'); ?>" alt="">
                            <span class="title"><?php the_sub_field('title'); ?></span>
                            <span class="text"><?php the_sub_field('text'); ?></span>
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
                        <span class="form__text"><?php the_field('form1-title'); ?></span>
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

    <div class="n-features">
        <div class="inner">
            <div class="features__list">
                <h3 class="features__title">Механизмы защиты для VPN</h3>
                <?php if( have_rows('block6-list1') ): ?>
                    <?php while( have_rows('block6-list1') ): the_row(); ?>

                        <div class="features__item">
                            <span class="num"><?php the_sub_field('num'); ?></span>
                            <span class="feat__title"><?php the_sub_field('title'); ?></span>
                            <span class="feat__text"><?php the_sub_field('text'); ?></span>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="features__list">
                <?php if( have_rows('block6-list2') ): ?>
                    <?php while( have_rows('block6-list2') ): the_row(); ?>

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

    <div class="home-perfomance">
        <div class="inner">
            <div class="perform__list">
                <div class="perform__descr">
                    <h3 class="site__title">От чего <br> зависит <br> стоимость VPN?</h3>
                    <img src="<?php the_field('block7-img'); ?>" alt="">
                </div>
                <div class="perform__blocks">
                    <?php if( have_rows('block7-list') ): ?>
                        <?php while( have_rows('block7-list') ): the_row(); ?>

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

    <div class="home-form">
        <div class="inner">
            <div class="form__list">
                <div class="form__descr">
                    <span class="form__title">
                        <?php the_field('form2-title'); ?>
                    </span>
                    <span class="form__text"><?php the_field('form2-text'); ?></span>
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
            <div class="section__title">
                <h3 class="site__title">Аргументы в пользу успешного выполнения проекта:</h3>
            </div>
            <div class="aswell__list">
                <?php if( have_rows('block8-list') ): ?>
                    <?php while( have_rows('block8-list') ): the_row(); ?>

                        <div class="aswell__item">
                            <span class="num"><?php the_sub_field('num'); ?></span>
                            <span class="blue__block"></span>
                            <img src="<?php the_sub_field('img'); ?>" alt="">
                            <span class="aswell__item-title"><?php the_sub_field('title'); ?></span>
                            <span class="aswell__item-text"><?php the_sub_field('text'); ?></span>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="home-cost">
        <div class="inner">
            <div class="cost__block">
                <h3 class="site__title"><?php the_field('block8-title'); ?></h3>
                <span class="cost__text"><?php the_field('block8-text'); ?></span>
            </div>
        </div>
    </div>

    <div class="linux-aswell">
        <div class="inner">
            <div class="aswell__list">
                <?php if( have_rows('block8-list2') ): ?>
                    <?php while( have_rows('block8-list2') ): the_row(); ?>

                        <div class="aswell__item">
                            <span class="num"><?php the_sub_field('num'); ?></span>
                            <span class="blue__block"></span>
                            <img src="<?php the_sub_field('img'); ?>" alt="">
                            <span class="aswell__item-title"><?php the_sub_field('title'); ?></span>
                            <span class="aswell__item-text"><?php the_sub_field('text'); ?></span>
                        </div>

                    <?php endwhile; ?>
                <?php endif; ?>
                <div class="aswell__img">
                    <img src="<?php the_field('block8-img'); ?>" alt="">
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>